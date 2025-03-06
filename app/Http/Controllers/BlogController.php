<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use Flash;

use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class BlogController extends AppBaseController
{
    /** @var BlogRepository $blogRepository*/
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     */
    public function index(Request $request)
    {
        $blogs = $this->blogRepository->paginate(10);

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     */
    public function create()
    {
        $blog = null;
        return view('blogs.create')->with('blog', $blog);
    }

    /**
     * Store a newly created Blog in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $blog = $this->blogRepository->create($input);
        
        //validate form
        $this->validate($request, [
            'gambar'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul'     => 'required|min:5',
            'deskripsi'   => 'required|min:10'
        ]);

        //upload image
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $file_name = time().'_'.$file->getClientOriginalName();

            $year_folder = date("Y");
            $month_folder = $year_folder . '/' . date("m");

            $path = 'uploads/blog/'.$month_folder.'/'.$file_name;

            $file_content = file_get_contents($file);
            if(!Storage::disk('public')->put($path, $file_content)) {
                return false;
            }

            //create post
            $blog = Blog::create([
                'gambar'     => $month_folder.'/'.$file_name,
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
                'user_id'   => $this->getUser()->id
            ]);
        } else {
            //create post
            $blog = Blog::create([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi,
                'user_id'   => $this->getUser()->id
            ]);
        }

        

        if($blog) {
            Flash::success('Data berhasil disimpan.');
        } else {
            Flash::error('Data gagal disimpan.');
        }

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        // dd($blog->gambar);

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     */
    public function update($id, Request $request)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');
            return redirect(route('blogs.index'));
        }

        // $blog = $this->blogRepository->update($request->all(), $id);
        // Flash::success('Blog updated successfully.');
        // return redirect(route('blogs.index'));

        //validate form
        $this->validate($request, [
            'gambar'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul'     => 'required|min:5',
            'deskripsi'   => 'required|min:10'
        ]);

        //upload image
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $file_name = time().'_'.$file->getClientOriginalName();

            $year_folder = date("Y");
            $month_folder = $year_folder . '/' . date("m");

            $path = 'uploads/blog/'.$month_folder.'/'.$file_name;

            $file_content = file_get_contents($file);
            if(!Storage::disk('public')->put($path, $file_content)) {
                return false;
            }

            //create post
            $blog = Blog::whereId($id)
            ->update([
                'gambar'        => $month_folder.'/'.$file_name,
                'judul'         => $request->judul,
                'slug'          => str_slug($request->judul),
                'deskripsi'     => $request->deskripsi,
                'user_id'       => $this->getUser()->id
            ]);
        } else {
            //create post
            $blog = Blog::whereId($id)
            ->update([
                'judul'         => $request->judul,
                'slug'          => str_slug($request->judul),
                'deskripsi'     => $request->deskripsi,
                'user_id'       => $this->getUser()->id
            ]);
        }

        

        if($blog) {
            Flash::success('Data berhasil disimpan.');
        } else {
            Flash::error('Data gagal disimpan.');
        }

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
