<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKonselingMasalahRequest;
use App\Http\Requests\UpdateKonselingMasalahRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\KonselingMasalahRepository;
use Illuminate\Http\Request;
use Flash;

class KonselingMasalahController extends AppBaseController
{
    /** @var KonselingMasalahRepository $konselingMasalahRepository*/
    private $konselingMasalahRepository;

    public function __construct(KonselingMasalahRepository $konselingMasalahRepo)
    {
        $this->konselingMasalahRepository = $konselingMasalahRepo;
    }

    /**
     * Display a listing of the KonselingMasalah.
     */
    public function index(Request $request)
    {
        $konselingMasalahs = $this->konselingMasalahRepository->paginate(10);

        return view('konseling_masalahs.index')
            ->with('konselingMasalahs', $konselingMasalahs);
    }

    /**
     * Show the form for creating a new KonselingMasalah.
     */
    public function create()
    {
        return view('konseling_masalahs.create');
    }

    /**
     * Store a newly created KonselingMasalah in storage.
     */
    public function store(CreateKonselingMasalahRequest $request)
    {
        $input = $request->all();

        $konselingMasalah = $this->konselingMasalahRepository->create($input);

        Flash::success('Konseling Masalah saved successfully.');

        return redirect(route('konselingMasalahs.index'));
    }

    /**
     * Display the specified KonselingMasalah.
     */
    public function show($id)
    {
        $konselingMasalah = $this->konselingMasalahRepository->find($id);

        if (empty($konselingMasalah)) {
            Flash::error('Konseling Masalah not found');

            return redirect(route('konselingMasalahs.index'));
        }

        return view('konseling_masalahs.show')->with('konselingMasalah', $konselingMasalah);
    }

    /**
     * Show the form for editing the specified KonselingMasalah.
     */
    public function edit($id)
    {
        $konselingMasalah = $this->konselingMasalahRepository->find($id);

        if (empty($konselingMasalah)) {
            Flash::error('Konseling Masalah not found');

            return redirect(route('konselingMasalahs.index'));
        }

        return view('konseling_masalahs.edit')->with('konselingMasalah', $konselingMasalah);
    }

    /**
     * Update the specified KonselingMasalah in storage.
     */
    public function update($id, UpdateKonselingMasalahRequest $request)
    {
        $konselingMasalah = $this->konselingMasalahRepository->find($id);

        if (empty($konselingMasalah)) {
            Flash::error('Konseling Masalah not found');

            return redirect(route('konselingMasalahs.index'));
        }

        $konselingMasalah = $this->konselingMasalahRepository->update($request->all(), $id);

        Flash::success('Konseling Masalah updated successfully.');

        return redirect(route('konselingMasalahs.index'));
    }

    /**
     * Remove the specified KonselingMasalah from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $konselingMasalah = $this->konselingMasalahRepository->find($id);

        if (empty($konselingMasalah)) {
            Flash::error('Konseling Masalah not found');

            return redirect(route('konselingMasalahs.index'));
        }

        $this->konselingMasalahRepository->delete($id);

        Flash::success('Konseling Masalah deleted successfully.');

        return redirect(route('konselingMasalahs.index'));
    }
}
