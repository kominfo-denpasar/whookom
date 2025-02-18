<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKonselingRequest;
use App\Http\Requests\UpdateKonselingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\KonselingRepository;
use Illuminate\Http\Request;
use Flash;

class KonselingController extends AppBaseController
{
    /** @var KonselingRepository $konselingRepository*/
    private $konselingRepository;

    public function __construct(KonselingRepository $konselingRepo)
    {
        $this->konselingRepository = $konselingRepo;
    }

    /**
     * Display a listing of the Konseling.
     */
    public function index(Request $request)
    {
        $konselings = $this->konselingRepository->paginate(10);

        return view('konselings.index')
            ->with('konselings', $konselings);
    }

    /**
     * Show the form for creating a new Konseling.
     */
    public function create()
    {
        return view('konselings.create');
    }

    /**
     * Store a newly created Konseling in storage.
     */
    public function store(CreateKonselingRequest $request)
    {
        $input = $request->all();

        $konseling = $this->konselingRepository->create($input);

        Flash::success('Konseling saved successfully.');

        return redirect(route('konselings.index'));
    }

    /**
     * Display the specified Konseling.
     */
    public function show($id)
    {
        $konseling = $this->konselingRepository->find($id);

        if (empty($konseling)) {
            Flash::error('Konseling not found');

            return redirect(route('konselings.index'));
        }

        return view('konselings.show')->with('konseling', $konseling);
    }

    /**
     * Show the form for editing the specified Konseling.
     */
    public function edit($id)
    {
        $konseling = $this->konselingRepository->find($id);

        if (empty($konseling)) {
            Flash::error('Konseling not found');

            return redirect(route('konselings.index'));
        }

        return view('konselings.edit')->with('konseling', $konseling);
    }

    /**
     * Update the specified Konseling in storage.
     */
    public function update($id, UpdateKonselingRequest $request)
    {
        $konseling = $this->konselingRepository->find($id);

        if (empty($konseling)) {
            Flash::error('Konseling not found');

            return redirect(route('konselings.index'));
        }

        $konseling = $this->konselingRepository->update($request->all(), $id);

        Flash::success('Konseling updated successfully.');

        return redirect(route('konselings.index'));
    }

    /**
     * Remove the specified Konseling from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $konseling = $this->konselingRepository->find($id);

        if (empty($konseling)) {
            Flash::error('Konseling not found');

            return redirect(route('konselings.index'));
        }

        $this->konselingRepository->delete($id);

        Flash::success('Konseling deleted successfully.');

        return redirect(route('konselings.index'));
    }
}
