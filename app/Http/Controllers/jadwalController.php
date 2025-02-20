<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejadwalRequest;
use App\Http\Requests\UpdatejadwalRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\jadwalRepository;
use Illuminate\Http\Request;
use Flash;

use App\Models\jadwal;

class jadwalController extends AppBaseController
{
    /** @var jadwalRepository $jadwalRepository*/
    private $jadwalRepository;

    public function __construct(jadwalRepository $jadwalRepo)
    {
        $this->jadwalRepository = $jadwalRepo;
    }

    /**
     * Display a listing of the jadwal.
     */
    public function index(Request $request)
    {
        // $jadwals = $this->jadwalRepository->paginate(10);
        // get data jadwal
        $jadwals = jadwal::where('psikolog_id', $this->getUser()->psikolog_id)
            ->join('psikologs', 'jadwals.psikolog_id', '=', 'psikologs.id')
            ->select('jadwals.*', 'psikologs.nama')            
            ->paginate(10);

        // dd($jadwals);
        return view('jadwals.index')
            ->with([
                'jadwals' => $jadwals,
                'user' => $this->getUser()
            ]);
    }

    /**
     * Show the form for creating a new jadwal.
     */
    public function create()
    {
        return view('jadwals.create')->with('user', $this->getUser());
    }

    /**
     * Store a newly created jadwal in storage.
     */
    public function store(CreatejadwalRequest $request)
    {
        $input = $request->all();

        $jadwal = $this->jadwalRepository->create($input);

        Flash::success('Jadwal saved successfully.');

        return redirect(route('jadwals.index'));
    }

    /**
     * Display the specified jadwal.
     */
    public function show($id)
    {
        $jadwal = $this->jadwalRepository->find($id);

        if (empty($jadwal)) {
            Flash::error('Jadwal not found');

            return redirect(route('jadwals.index'));
        }

        return view('jadwals.show')->with('jadwal', $jadwal);
    }

    /**
     * Show the form for editing the specified jadwal.
     */
    public function edit($id)
    {
        $jadwal = $this->jadwalRepository->find($id);

        if (empty($jadwal)) {
            Flash::error('Jadwal not found');

            return redirect(route('jadwals.index'));
        }

        return view('jadwals.edit')->with('jadwal', $jadwal)->with('user', $this->getUser());
    }

    /**
     * Update the specified jadwal in storage.
     */
    public function update($id, UpdatejadwalRequest $request)
    {
        $jadwal = $this->jadwalRepository->find($id);

        if (empty($jadwal)) {
            Flash::error('Jadwal not found');

            return redirect(route('jadwals.index'));
        }

        $jadwal = $this->jadwalRepository->update($request->all(), $id);

        Flash::success('Jadwal updated successfully.');

        return redirect(route('jadwals.index'));
    }

    /**
     * Remove the specified jadwal from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jadwal = $this->jadwalRepository->find($id);

        if (empty($jadwal)) {
            Flash::error('Jadwal not found');

            return redirect(route('jadwals.index'));
        }

        $this->jadwalRepository->delete($id);

        Flash::success('Jadwal deleted successfully.');

        return redirect(route('jadwals.index'));
    }
}
