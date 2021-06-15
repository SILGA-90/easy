<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatearrivalcityRequest;
use App\Http\Requests\UpdatearrivalcityRequest;
use App\Repositories\arrivalcityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class arrivalcityController extends AppBaseController
{
    /** @var  arrivalcityRepository */
    private $arrivalcityRepository;

    public function __construct(arrivalcityRepository $arrivalcityRepo)
    {
        $this->arrivalcityRepository = $arrivalcityRepo;
    }

    /**
     * Display a listing of the arrivalcity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $arrivalcities = $this->arrivalcityRepository->all();

        return view('arrivalcities.index')
            ->with('arrivalcities', $arrivalcities);
    }

    /**
     * Show the form for creating a new arrivalcity.
     *
     * @return Response
     */
    public function create()
    {
        return view('arrivalcities.create');
    }

    /**
     * Store a newly created arrivalcity in storage.
     *
     * @param CreatearrivalcityRequest $request
     *
     * @return Response
     */
    public function store(CreatearrivalcityRequest $request)
    {
        $input = $request->all();

        $arrivalcity = $this->arrivalcityRepository->create($input);

        Flash::success('Arrivalcity saved successfully.');

        return redirect(route('arrivalcities.index'));
    }

    /**
     * Display the specified arrivalcity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arrivalcity = $this->arrivalcityRepository->find($id);

        if (empty($arrivalcity)) {
            Flash::error('Arrivalcity not found');

            return redirect(route('arrivalcities.index'));
        }

        return view('arrivalcities.show')->with('arrivalcity', $arrivalcity);
    }

    /**
     * Show the form for editing the specified arrivalcity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arrivalcity = $this->arrivalcityRepository->find($id);

        if (empty($arrivalcity)) {
            Flash::error('Arrivalcity not found');

            return redirect(route('arrivalcities.index'));
        }

        return view('arrivalcities.edit')->with('arrivalcity', $arrivalcity);
    }

    /**
     * Update the specified arrivalcity in storage.
     *
     * @param int $id
     * @param UpdatearrivalcityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatearrivalcityRequest $request)
    {
        $arrivalcity = $this->arrivalcityRepository->find($id);

        if (empty($arrivalcity)) {
            Flash::error('Arrivalcity not found');

            return redirect(route('arrivalcities.index'));
        }

        $arrivalcity = $this->arrivalcityRepository->update($request->all(), $id);

        Flash::success('Arrivalcity updated successfully.');

        return redirect(route('arrivalcities.index'));
    }

    /**
     * Remove the specified arrivalcity from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arrivalcity = $this->arrivalcityRepository->find($id);

        if (empty($arrivalcity)) {
            Flash::error('Arrivalcity not found');

            return redirect(route('arrivalcities.index'));
        }

        $this->arrivalcityRepository->delete($id);

        Flash::success('Arrivalcity deleted successfully.');

        return redirect(route('arrivalcities.index'));
    }
}
