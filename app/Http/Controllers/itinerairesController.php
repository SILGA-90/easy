<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateitinerairesRequest;
use App\Http\Requests\UpdateitinerairesRequest;
use App\Repositories\itinerairesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\itineraires;
use App\Models\departcity;
use App\Models\arrivalcity;
use App\Models\times;
use App\Models\prices;
use App\Models\days;
use App\Models\bus;
use App\Models\compagnies;
use Laracasts\Flash\Flash;
use Response;

class itinerairesController extends AppBaseController
{
    /** @var  itinerairesRepository */
    private $itinerairesRepository;

    public function __construct(itinerairesRepository $itinerairesRepo)
    {
        $this->itinerairesRepository = $itinerairesRepo;
    }

    /**
     * Display a listing of the itineraires.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $itineraires = itineraires::with('departcity')->get();
        $itineraires = itineraires::with('arrivalcity')->get();
        $itineraires = itineraires::with('times')->get();
        $itineraires = itineraires::with('prices')->get();
        $itineraires = itineraires::with('days')->get();
        $itineraires = itineraires::with('bus')->get();
        $itineraires = itineraires::with('compagnies')->get();

        $departcity = departcity::all();        
        $arrivalcity = arrivalcity::all();        
        $times = times::all();        
        $prices = prices::all();        
        $days = days::all();        
        $bus = bus::all();        
        $compagnies = compagnies::all();        

        $itineraires = $this->itinerairesRepository->all();

        return view('itineraires.index',compact('departcity','arrivalcity','times','prices','days','bus','compagnies'))
            ->with('itineraires', $itineraires);
    }

    /**
     * Show the form for creating a new itineraires.
     *
     * @return Response
     */
    public function create()
    {
        return view('itineraires.create');
    }

    /**
     * Store a newly created itineraires in storage.
     *
     * @param CreateitinerairesRequest $request
     *
     * @return Response
     */
    public function store(CreateitinerairesRequest $request)
    {
        $input = $request->all();

        $itineraires = $this->itinerairesRepository->create($input);

        Flash::success('Itineraires saved successfully.');

        return redirect(route('itineraires.index'));
    }

    public function updateItineraireStatut(Request $request)
    {
        $itineraires = itineraires::findOrFail($request->it_id);
        $itineraires->it_statut = $request->it_statut;
        $itineraires->save();

        return response()->json(['message' => 'Statut du trajet actualisé avec succès !']);
    }

    /**
     * Display the specified itineraires.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itineraires = $this->itinerairesRepository->find($id);

        if (empty($itineraires)) {
            Flash::error('Itineraires not found');

            return redirect(route('itineraires.index'));
        }

        return view('itineraires.show')->with('itineraires', $itineraires);
    }

    /**
     * Show the form for editing the specified itineraires.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departcity = departcity::all();
        $arrivalcity = arrivalcity::all();
        $times = times::all();
        $prices = prices::all();
        $days = days::all();
        $bus = bus::all();
        $compagnies = compagnies::all();
        $itineraires = $this->itinerairesRepository->find($id);

        if (empty($itineraires)) {
            Flash::error('Itineraires not found');

            return redirect(route('itineraires.index'));
        }

        return view('itineraires.edit',compact('departcity','arrivalcity','times','prices','days','bus','compagnies'))->with('itineraires', $itineraires);
    }

    /**
     * Update the specified itineraires in storage.
     *
     * @param int $id
     * @param UpdateitinerairesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateitinerairesRequest $request)
    {
        $itineraires = $this->itinerairesRepository->find($id);

        if (empty($itineraires)) {
            Flash::error('Itineraires not found');

            return redirect(route('itineraires.index'));
        }

        $itineraires = $this->itinerairesRepository->update($request->all(), $id);

        Flash::success('Itineraires updated successfully.');

        return redirect(route('itineraires.index'));
    }

    /**
     * Remove the specified itineraires from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itineraires = $this->itinerairesRepository->find($id);

        if (empty($itineraires)) {
            Flash::error('Itineraires not found');

            return redirect(route('itineraires.index'));
        }

        $this->itinerairesRepository->delete($id);

        Flash::success('Itineraires deleted successfully.');

        return redirect(route('itineraires.index'));
    }
}
