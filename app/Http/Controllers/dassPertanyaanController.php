<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedassPertanyaanRequest;
use App\Http\Requests\UpdatedassPertanyaanRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\dassPertanyaanRepository;
use Illuminate\Http\Request;
use Flash;

class dassPertanyaanController extends AppBaseController
{
    /** @var dass_pertanyaanRepository $dassPertanyaanRepository*/
    private $dassPertanyaanRepository;

    public function __construct(dassPertanyaanRepository $dassPertanyaanRepo)
    {
        $this->dassPertanyaanRepository = $dassPertanyaanRepo;
    }

    /**
     * Display a listing of the dass_pertanyaan.
     */
    public function index(Request $request)
    {
        $dassPertanyaans = $this->dassPertanyaanRepository->paginate(10);

        return view('dass_pertanyaans.index')
            ->with('dassPertanyaans', $dassPertanyaans);
    }

    /**
     * Show the form for creating a new dass_pertanyaan.
     */
    public function create()
    {
        return view('dass_pertanyaans.create');
    }

    /**
     * Store a newly created dass_pertanyaan in storage.
     */
    public function store(CreatedassPertanyaanRequest $request)
    {
        $input = $request->all();

        $dassPertanyaan = $this->dassPertanyaanRepository->create($input);

        Flash::success('Dass Pertanyaan saved successfully.');

        return redirect(route('dassPertanyaans.index'));
    }

    /**
     * Display the specified dass_pertanyaan.
     */
    public function show($id)
    {
        $dassPertanyaan = $this->dassPertanyaanRepository->find($id);

        if (empty($dassPertanyaan)) {
            Flash::error('Dass Pertanyaan not found');

            return redirect(route('dassPertanyaans.index'));
        }

        return view('dass_pertanyaans.show')->with('dassPertanyaan', $dassPertanyaan);
    }

    /**
     * Show the form for editing the specified dass_pertanyaan.
     */
    public function edit($id)
    {
        $dassPertanyaan = $this->dassPertanyaanRepository->find($id);

        if (empty($dassPertanyaan)) {
            Flash::error('Dass Pertanyaan not found');

            return redirect(route('dassPertanyaans.index'));
        }

        return view('dass_pertanyaans.edit')->with('dassPertanyaan', $dassPertanyaan);
    }

    /**
     * Update the specified dass_pertanyaan in storage.
     */
    public function update($id, UpdatedassPertanyaanRequest $request)
    {
        $dassPertanyaan = $this->dassPertanyaanRepository->find($id);

        if (empty($dassPertanyaan)) {
            Flash::error('Dass Pertanyaan not found');

            return redirect(route('dassPertanyaans.index'));
        }

        $dassPertanyaan = $this->dassPertanyaanRepository->update($request->all(), $id);

        Flash::success('Dass Pertanyaan updated successfully.');

        return redirect(route('dassPertanyaans.index'));
    }

    /**
     * Remove the specified dass_pertanyaan from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dassPertanyaan = $this->dassPertanyaanRepository->find($id);

        if (empty($dassPertanyaan)) {
            Flash::error('Dass Pertanyaan not found');

            return redirect(route('dassPertanyaans.index'));
        }

        $this->dassPertanyaanRepository->delete($id);

        Flash::success('Dass Pertanyaan deleted successfully.');

        return redirect(route('dassPertanyaans.index'));
    }
}
