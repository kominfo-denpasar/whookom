<?php

namespace App\Http\Controllers;

use App\DataTables\whatsappMessagesDataTable;
use App\Http\Requests\CreatewhatsappMessagesRequest;
use App\Http\Requests\UpdatewhatsappMessagesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\whatsappMessagesRepository;
use Illuminate\Http\Request;
use Flash;

class whatsappMessagesController extends AppBaseController
{
    /** @var whatsappMessagesRepository $whatsappMessagesRepository*/
    private $whatsappMessagesRepository;

    public function __construct(whatsappMessagesRepository $whatsappMessagesRepo)
    {
        $this->whatsappMessagesRepository = $whatsappMessagesRepo;
    }

    /**
     * Display a listing of the whatsappMessages.
     */
    public function index(whatsappMessagesDataTable $whatsappMessagesDataTable)
    {
    return $whatsappMessagesDataTable->render('whatsapp_messages.index');
    }


    /**
     * Show the form for creating a new whatsappMessages.
     */
    public function create()
    {
        return view('whatsapp_messages.create');
    }

    /**
     * Store a newly created whatsappMessages in storage.
     */
    public function store(CreatewhatsappMessagesRequest $request)
    {
        $input = $request->all();

        $whatsappMessages = $this->whatsappMessagesRepository->create($input);

        Flash::success('Whatsapp Messages saved successfully.');

        return redirect(route('whatsappMessages.index'));
    }

    /**
     * Display the specified whatsappMessages.
     */
    public function show($id)
    {
        $whatsappMessages = $this->whatsappMessagesRepository->find($id);

        if (empty($whatsappMessages)) {
            Flash::error('Whatsapp Messages not found');

            return redirect(route('whatsappMessages.index'));
        }

        return view('whatsapp_messages.show')->with('whatsappMessages', $whatsappMessages);
    }

    /**
     * Show the form for editing the specified whatsappMessages.
     */
    public function edit($id)
    {
        $whatsappMessages = $this->whatsappMessagesRepository->find($id);

        if (empty($whatsappMessages)) {
            Flash::error('Whatsapp Messages not found');

            return redirect(route('whatsappMessages.index'));
        }

        return view('whatsapp_messages.edit')->with('whatsappMessages', $whatsappMessages);
    }

    /**
     * Update the specified whatsappMessages in storage.
     */
    public function update($id, UpdatewhatsappMessagesRequest $request)
    {
        $whatsappMessages = $this->whatsappMessagesRepository->find($id);

        if (empty($whatsappMessages)) {
            Flash::error('Whatsapp Messages not found');

            return redirect(route('whatsappMessages.index'));
        }

        $whatsappMessages = $this->whatsappMessagesRepository->update($request->all(), $id);

        Flash::success('Whatsapp Messages updated successfully.');

        return redirect(route('whatsappMessages.index'));
    }

    /**
     * Remove the specified whatsappMessages from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $whatsappMessages = $this->whatsappMessagesRepository->find($id);

        if (empty($whatsappMessages)) {
            Flash::error('Whatsapp Messages not found');

            return redirect(route('whatsappMessages.index'));
        }

        $this->whatsappMessagesRepository->delete($id);

        Flash::success('Whatsapp Messages deleted successfully.');

        return redirect(route('whatsappMessages.index'));
    }
}
