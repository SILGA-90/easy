<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepaiementsRequest;
use App\Http\Requests\UpdatepaiementsRequest;
use App\Repositories\paiementsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class paiementsController extends AppBaseController
{
    /** @var  paiementsRepository */
    private $paiementsRepository;

    public function __construct(paiementsRepository $paiementsRepo)
    {
        $this->paiementsRepository = $paiementsRepo;
    }

    /**
     * Display a listing of the paiements.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paiements = $this->paiementsRepository->all();

        return view('paiements.index')
            ->with('paiements', $paiements);
    }

    /**
     * Show the form for creating a new paiements.
     *
     * @return Response
     */
    public function create()
    {
        return view('paiements.create');
    }

    /**
     * Store a newly created paiements in storage.
     *
     * @param CreatepaiementsRequest $request
     *
     * @return Response
     */
    public function store(CreatepaiementsRequest $request)
    {
        $input = $request->all();

        $paiements = $this->paiementsRepository->create($input);

        Flash::success('Paiements saved successfully.');

        return redirect(route('paiements.index'));
    }

    /**
     * Display the specified paiements.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paiements = $this->paiementsRepository->find($id);

        if (empty($paiements)) {
            Flash::error('Paiements not found');

            return redirect(route('paiements.index'));
        }

        return view('paiements.show')->with('paiements', $paiements);
    }

    /**
     * Show the form for editing the specified paiements.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paiements = $this->paiementsRepository->find($id);

        if (empty($paiements)) {
            Flash::error('Paiements not found');

            return redirect(route('paiements.index'));
        }

        return view('paiements.edit')->with('paiements', $paiements);
    }

    /**
     * Update the specified paiements in storage.
     *
     * @param int $id
     * @param UpdatepaiementsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepaiementsRequest $request)
    {
        $paiements = $this->paiementsRepository->find($id);

        if (empty($paiements)) {
            Flash::error('Paiements not found');

            return redirect(route('paiements.index'));
        }

        $paiements = $this->paiementsRepository->update($request->all(), $id);

        Flash::success('Paiements updated successfully.');

        return redirect(route('paiements.index'));
    }

    /**
     * Remove the specified paiements from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paiements = $this->paiementsRepository->find($id);

        if (empty($paiements)) {
            Flash::error('Paiements not found');

            return redirect(route('paiements.index'));
        }

        $this->paiementsRepository->delete($id);

        Flash::success('Paiements deleted successfully.');

        return redirect(route('paiements.index'));
    }
}
