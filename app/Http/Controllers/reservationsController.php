<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereservationsRequest;
use App\Http\Requests\UpdatereservationsRequest;
use App\Repositories\reservationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class reservationsController extends AppBaseController
{
    /** @var  reservationsRepository */
    private $reservationsRepository;

    public function __construct(reservationsRepository $reservationsRepo)
    {
        $this->reservationsRepository = $reservationsRepo;
    }

    /**
     * Display a listing of the reservations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reservations = $this->reservationsRepository->all();

        return view('reservations.index')
            ->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new reservations.
     *
     * @return Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created reservations in storage.
     *
     * @param CreatereservationsRequest $request
     *
     * @return Response
     */
    public function store(CreatereservationsRequest $request)
    {
        $input = $request->all();

        $reservations = $this->reservationsRepository->create($input);

        Flash::success('Reservations saved successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified reservations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reservations = $this->reservationsRepository->find($id);

        if (empty($reservations)) {
            Flash::error('Reservations not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.show')->with('reservations', $reservations);
    }

    /**
     * Show the form for editing the specified reservations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reservations = $this->reservationsRepository->find($id);

        if (empty($reservations)) {
            Flash::error('Reservations not found');

            return redirect(route('reservations.index'));
        }

        return view('reservations.edit')->with('reservations', $reservations);
    }

    /**
     * Update the specified reservations in storage.
     *
     * @param int $id
     * @param UpdatereservationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereservationsRequest $request)
    {
        $reservations = $this->reservationsRepository->find($id);

        if (empty($reservations)) {
            Flash::error('Reservations not found');

            return redirect(route('reservations.index'));
        }

        $reservations = $this->reservationsRepository->update($request->all(), $id);

        Flash::success('Reservations updated successfully.');

        return redirect(route('reservations.index'));
    }

    /**
     * Remove the specified reservations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reservations = $this->reservationsRepository->find($id);

        if (empty($reservations)) {
            Flash::error('Reservations not found');

            return redirect(route('reservations.index'));
        }

        $this->reservationsRepository->delete($id);

        Flash::success('Reservations deleted successfully.');

        return redirect(route('reservations.index'));
    }
}
