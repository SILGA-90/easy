<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedepartcityRequest;
use App\Http\Requests\UpdatedepartcityRequest;
use App\Repositories\departcityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class departcityController extends AppBaseController
{
    /** @var  departcityRepository */
    private $departcityRepository;

    public function __construct(departcityRepository $departcityRepo)
    {
        $this->departcityRepository = $departcityRepo;
    }

    /**
     * Display a listing of the departcity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $departcities = $this->departcityRepository->all();

        return view('departcities.index')
            ->with('departcities', $departcities);
    }

    /**
     * Show the form for creating a new departcity.
     *
     * @return Response
     */
    public function create()
    {
        return view('departcities.create');
    }

    /**
     * Store a newly created departcity in storage.
     *
     * @param CreatedepartcityRequest $request
     *
     * @return Response
     */
    public function store(CreatedepartcityRequest $request)
    {
        $input = $request->all();

        $departcity = $this->departcityRepository->create($input);

        Flash::success('Departcity saved successfully.');

        return redirect(route('departcities.index'));
    }

    /**
     * Display the specified departcity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departcity = $this->departcityRepository->find($id);

        if (empty($departcity)) {
            Flash::error('Departcity not found');

            return redirect(route('departcities.index'));
        }

        return view('departcities.show')->with('departcity', $departcity);
    }

    /**
     * Show the form for editing the specified departcity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departcity = $this->departcityRepository->find($id);

        if (empty($departcity)) {
            Flash::error('Departcity not found');

            return redirect(route('departcities.index'));
        }

        return view('departcities.edit')->with('departcity', $departcity);
    }

    /**
     * Update the specified departcity in storage.
     *
     * @param int $id
     * @param UpdatedepartcityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedepartcityRequest $request)
    {
        $departcity = $this->departcityRepository->find($id);

        if (empty($departcity)) {
            Flash::error('Departcity not found');

            return redirect(route('departcities.index'));
        }

        $departcity = $this->departcityRepository->update($request->all(), $id);

        Flash::success('Departcity updated successfully.');

        return redirect(route('departcities.index'));
    }

    /**
     * Remove the specified departcity from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departcity = $this->departcityRepository->find($id);

        if (empty($departcity)) {
            Flash::error('Departcity not found');

            return redirect(route('departcities.index'));
        }

        $this->departcityRepository->delete($id);

        Flash::success('Departcity deleted successfully.');

        return redirect(route('departcities.index'));
    }
}
