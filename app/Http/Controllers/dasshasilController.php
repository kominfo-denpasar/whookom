<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedasshasilRequest;
use App\Http\Requests\UpdatedasshasilRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\dasshasilRepository;
use Illuminate\Http\Request;
use Flash;

class dasshasilController extends AppBaseController
{
    /** @var dasshasilRepository $dasshasilRepository*/
    private $dasshasilRepository;

    public function __construct(dasshasilRepository $dasshasilRepo)
    {
        $this->dasshasilRepository = $dasshasilRepo;
    }

    /**
     * Display a listing of the dasshasil.
     */
    public function index(Request $request)
    {
        $dasshasils = $this->dasshasilRepository->paginate(10);

        return view('dasshasils.index')
            ->with('dasshasils', $dasshasils);
    }

    /**
     * Show the form for creating a new dasshasil.
     */
    public function create()
    {
        return view('dasshasils.create');
    }

    /**
     * Store a newly created dasshasil in storage.
     */
    public function store(CreatedasshasilRequest $request)
    {
        $input = $request->all();

        $dasshasil = $this->dasshasilRepository->create($input);

        Flash::success('Dasshasil saved successfully.');

        return redirect(route('dasshasils.index'));
    }

    /**
     * Display the specified dasshasil.
     */
    public function show($id)
    {
        $dasshasil = $this->dasshasilRepository->find($id);

        if (empty($dasshasil)) {
            Flash::error('Dasshasil not found');

            return redirect(route('dasshasils.index'));
        }

        return view('dasshasils.show')->with('dasshasil', $dasshasil);
    }

    /**
     * Show the form for editing the specified dasshasil.
     */
    public function edit($id)
    {
        $dasshasil = $this->dasshasilRepository->find($id);

        if (empty($dasshasil)) {
            Flash::error('Dasshasil not found');

            return redirect(route('dasshasils.index'));
        }

        return view('dasshasils.edit')->with('dasshasil', $dasshasil);
    }

    /**
     * Update the specified dasshasil in storage.
     */
    public function update($id, UpdatedasshasilRequest $request)
    {
        $dasshasil = $this->dasshasilRepository->find($id);

        if (empty($dasshasil)) {
            Flash::error('Dasshasil not found');

            return redirect(route('dasshasils.index'));
        }

        $dasshasil = $this->dasshasilRepository->update($request->all(), $id);

        Flash::success('Dasshasil updated successfully.');

        return redirect(route('dasshasils.index'));
    }

    /**
     * Remove the specified dasshasil from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dasshasil = $this->dasshasilRepository->find($id);

        if (empty($dasshasil)) {
            Flash::error('Dasshasil not found');

            return redirect(route('dasshasils.index'));
        }

        $this->dasshasilRepository->delete($id);

        Flash::success('Dasshasil deleted successfully.');

        return redirect(route('dasshasils.index'));
    }
}
