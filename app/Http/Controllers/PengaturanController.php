<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePengaturanRequest;
use App\Http\Requests\UpdatePengaturanRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PengaturanRepository;
use Illuminate\Http\Request;
use Flash;

class PengaturanController extends AppBaseController
{
    /** @var PengaturanRepository $pengaturanRepository*/
    private $pengaturanRepository;

    public function __construct(PengaturanRepository $pengaturanRepo)
    {
        $this->pengaturanRepository = $pengaturanRepo;
    }

    /**
     * Display a listing of the Pengaturan.
     */
    public function index(Request $request)
    {
        $pengaturans = $this->pengaturanRepository->paginate(10);

        return view('pengaturans.index')
            ->with('pengaturans', $pengaturans);
    }

    /**
     * Show the form for creating a new Pengaturan.
     */
    public function create()
    {
        return view('pengaturans.create');
    }

    /**
     * Store a newly created Pengaturan in storage.
     */
    public function store(CreatePengaturanRequest $request)
    {
        $input = $request->all();

        $pengaturan = $this->pengaturanRepository->create($input);

        Flash::success('Pengaturan saved successfully.');

        return redirect(route('pengaturans.index'));
    }

    /**
     * Display the specified Pengaturan.
     */
    public function show($id)
    {
        $pengaturan = $this->pengaturanRepository->find($id);

        if (empty($pengaturan)) {
            Flash::error('Pengaturan not found');

            return redirect(route('pengaturans.index'));
        }

        return view('pengaturans.show')->with('pengaturan', $pengaturan);
    }

    /**
     * Show the form for editing the specified Pengaturan.
     */
    public function edit($id)
    {
        $pengaturan = $this->pengaturanRepository->find($id);

        if (empty($pengaturan)) {
            Flash::error('Pengaturan not found');

            return redirect(route('pengaturans.index'));
        }

        return view('pengaturans.edit')->with('pengaturan', $pengaturan);
    }

    /**
     * Update the specified Pengaturan in storage.
     */
    public function update($id, UpdatePengaturanRequest $request)
    {
        $pengaturan = $this->pengaturanRepository->find($id);

        if (empty($pengaturan)) {
            Flash::error('Pengaturan not found');

            return redirect(route('pengaturans.index'));
        }

        $pengaturan = $this->pengaturanRepository->update($request->all(), $id);

        Flash::success('Pengaturan updated successfully.');

        return redirect(route('pengaturans.index'));
    }

    /**
     * Remove the specified Pengaturan from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pengaturan = $this->pengaturanRepository->find($id);

        if (empty($pengaturan)) {
            Flash::error('Pengaturan not found');

            return redirect(route('pengaturans.index'));
        }

        $this->pengaturanRepository->delete($id);

        Flash::success('Pengaturan deleted successfully.');

        return redirect(route('pengaturans.index'));
    }
}
