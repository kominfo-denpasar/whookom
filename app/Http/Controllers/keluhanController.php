<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekeluhanRequest;
use App\Http\Requests\UpdatekeluhanRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\keluhanRepository;
use Illuminate\Http\Request;
use Flash;

class keluhanController extends AppBaseController
{
    /** @var keluhanRepository $keluhanRepository*/
    private $keluhanRepository;

    public function __construct(keluhanRepository $keluhanRepo)
    {
        $this->keluhanRepository = $keluhanRepo;
    }

    /**
     * Display a listing of the keluhan.
     */
    public function index(Request $request)
    {
        $keluhans = $this->keluhanRepository->paginate(10);

        return view('keluhans.index')
            ->with('keluhans', $keluhans);
    }

    /**
     * Show the form for creating a new keluhan.
     */
    public function create()
    {
        return view('keluhans.create');
    }

    /**
     * Store a newly created keluhan in storage.
     */
    public function store(CreatekeluhanRequest $request)
    {
        $input = $request->all();

        $keluhan = $this->keluhanRepository->create($input);

        Flash::success('Keluhan saved successfully.');

        return redirect(route('keluhans.index'));
    }

    /**
     * Display the specified keluhan.
     */
    public function show($id)
    {
        $keluhan = $this->keluhanRepository->find($id);

        if (empty($keluhan)) {
            Flash::error('Keluhan not found');

            return redirect(route('keluhans.index'));
        }

        return view('keluhans.show')->with('keluhan', $keluhan);
    }

    /**
     * Show the form for editing the specified keluhan.
     */
    public function edit($id)
    {
        $keluhan = $this->keluhanRepository->find($id);

        if (empty($keluhan)) {
            Flash::error('Keluhan not found');

            return redirect(route('keluhans.index'));
        }

        return view('keluhans.edit')->with('keluhan', $keluhan);
    }

    /**
     * Update the specified keluhan in storage.
     */
    public function update($id, UpdatekeluhanRequest $request)
    {
        $keluhan = $this->keluhanRepository->find($id);

        if (empty($keluhan)) {
            Flash::error('Keluhan not found');

            return redirect(route('keluhans.index'));
        }

        $keluhan = $this->keluhanRepository->update($request->all(), $id);

        Flash::success('Keluhan updated successfully.');

        return redirect(route('keluhans.index'));
    }

    /**
     * Remove the specified keluhan from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $keluhan = $this->keluhanRepository->find($id);

        if (empty($keluhan)) {
            Flash::error('Keluhan not found');

            return redirect(route('keluhans.index'));
        }

        $this->keluhanRepository->delete($id);

        Flash::success('Keluhan deleted successfully.');

        return redirect(route('keluhans.index'));
    }
}
