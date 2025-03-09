<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogKategoriRequest;
use App\Http\Requests\UpdateBlogKategoriRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BlogKategoriRepository;
use Illuminate\Http\Request;
use Flash;

class BlogKategoriController extends AppBaseController
{
    /** @var BlogKategoriRepository $blogKategoriRepository*/
    private $blogKategoriRepository;

    public function __construct(BlogKategoriRepository $blogKategoriRepo)
    {
        $this->blogKategoriRepository = $blogKategoriRepo;
    }

    /**
     * Display a listing of the BlogKategori.
     */
    public function index(Request $request)
    {
        $blogKategoris = $this->blogKategoriRepository->paginate(10);

        return view('blog_kategoris.index')
            ->with('blogKategoris', $blogKategoris);
    }

    /**
     * Show the form for creating a new BlogKategori.
     */
    public function create()
    {
        return view('blog_kategoris.create');
    }

    /**
     * Store a newly created BlogKategori in storage.
     */
    public function store(CreateBlogKategoriRequest $request)
    {
        $input = $request->all();

        $blogKategori = $this->blogKategoriRepository->create($input);

        Flash::success('Blog Kategori saved successfully.');

        return redirect(route('blog-kategoris.index'));
    }

    /**
     * Display the specified BlogKategori.
     */
    public function show($id)
    {
        $blogKategori = $this->blogKategoriRepository->find($id);

        if (empty($blogKategori)) {
            Flash::error('Blog Kategori not found');

            return redirect(route('blog-kategoris.index'));
        }

        return view('blog_kategoris.show')->with('blogKategori', $blogKategori);
    }

    /**
     * Show the form for editing the specified BlogKategori.
     */
    public function edit($id)
    {
        $blogKategori = $this->blogKategoriRepository->find($id);

        if (empty($blogKategori)) {
            Flash::error('Blog Kategori not found');

            return redirect(route('blog-kategoris.index'));
        }

        return view('blog_kategoris.edit')->with('blogKategori', $blogKategori);
    }

    /**
     * Update the specified BlogKategori in storage.
     */
    public function update($id, UpdateBlogKategoriRequest $request)
    {
        $blogKategori = $this->blogKategoriRepository->find($id);

        if (empty($blogKategori)) {
            Flash::error('Blog Kategori not found');

            return redirect(route('blog-kategoris.index'));
        }

        $blogKategori = $this->blogKategoriRepository->update($request->all(), $id);

        Flash::success('Blog Kategori updated successfully.');

        return redirect(route('blog-kategoris.index'));
    }

    /**
     * Remove the specified BlogKategori from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $blogKategori = $this->blogKategoriRepository->find($id);

        if (empty($blogKategori)) {
            Flash::error('Blog Kategori not found');

            return redirect(route('blog-kategoris.index'));
        }

        $this->blogKategoriRepository->delete($id);

        Flash::success('Blog Kategori deleted successfully.');

        return redirect(route('blog-kategoris.index'));
    }
}
