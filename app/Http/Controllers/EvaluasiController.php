<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvaluasiRequest;
use App\Http\Requests\UpdateEvaluasiRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EvaluasiRepository;
use Illuminate\Http\Request;
use Flash;

class EvaluasiController extends AppBaseController
{
    /** @var EvaluasiRepository $evaluasiRepository*/
    private $evaluasiRepository;

    public function __construct(EvaluasiRepository $evaluasiRepo)
    {
        $this->evaluasiRepository = $evaluasiRepo;
    }

    /**
     * Display a listing of the Evaluasi.
     */
    public function index(Request $request)
    {
        $evaluasis = $this->evaluasiRepository->paginate(10);

        return view('evaluasis.index')
            ->with('evaluasis', $evaluasis);
    }

    /**
     * Show the form for creating a new Evaluasi.
     */
    public function create()
    {
        return view('evaluasis.create');
    }

    /**
     * Store a newly created Evaluasi in storage.
     */
    public function store(CreateEvaluasiRequest $request)
    {
        $input = $request->all();

        $evaluasi = $this->evaluasiRepository->create($input);

        Flash::success('Evaluasi saved successfully.');

        return redirect(route('evaluasis.index'));
    }

    /**
     * Display the specified Evaluasi.
     */
    public function show($id)
    {
        $evaluasi = $this->evaluasiRepository->find($id);

        if (empty($evaluasi)) {
            Flash::error('Evaluasi not found');

            return redirect(route('evaluasis.index'));
        }

        return view('evaluasis.show')->with('evaluasi', $evaluasi);
    }

    /**
     * Show the form for editing the specified Evaluasi.
     */
    public function edit($id)
    {
        $evaluasi = $this->evaluasiRepository->find($id);

        if (empty($evaluasi)) {
            Flash::error('Evaluasi not found');

            return redirect(route('evaluasis.index'));
        }

        return view('evaluasis.edit')->with('evaluasi', $evaluasi);
    }

    /**
     * Update the specified Evaluasi in storage.
     */
    public function update($id, UpdateEvaluasiRequest $request)
    {
        $evaluasi = $this->evaluasiRepository->find($id);

        if (empty($evaluasi)) {
            Flash::error('Evaluasi not found');

            return redirect(route('evaluasis.index'));
        }

        $evaluasi = $this->evaluasiRepository->update($request->all(), $id);

        Flash::success('Evaluasi updated successfully.');

        return redirect(route('evaluasis.index'));
    }

    /**
     * Remove the specified Evaluasi from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluasi = $this->evaluasiRepository->find($id);

        if (empty($evaluasi)) {
            Flash::error('Evaluasi not found');

            return redirect(route('evaluasis.index'));
        }

        $this->evaluasiRepository->delete($id);

        Flash::success('Evaluasi deleted successfully.');

        return redirect(route('evaluasis.index'));
    }
}
