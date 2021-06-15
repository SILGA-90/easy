<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebusRequest;
use App\Http\Requests\UpdatebusRequest;
use App\Repositories\busRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\bus;
use App\Models\chauffeurs;
use App\Models\compagnies;
use Laracasts\Flash\Flash;
use Response;
use Illuminate\Support\Facades\DB;

class busController extends AppBaseController
{
    /** @var  busRepository */
    private $busRepository;

    public function __construct(busRepository $busRepo)
    {
        $this->busRepository = $busRepo;
    }

    /**
     * Display a listing of the bus.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {   $bus = bus::with('chauffeurs')->get();
        $bus = bus::with('compagnies')->get();
        $chauffeurs = chauffeurs::all();
        $compagnies = compagnies::all();
        $buses = $this->busRepository->all();

        return view('buses.index', compact('chauffeurs','compagnies'))
            ->with('buses', $buses);
    }

    /**
     * Show the form for creating a new bus.
     *
     * @return Response
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created bus in storage.
     *
     * @param CreatebusRequest $request
     *
     * @return Response
     */
    public function store(CreatebusRequest $request)
    {
        $input = $request->all();

        // $bus = $this->busRepository->create($input);
        $image = $request->file('image');
        $image_name = rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('bus_images'), $image_name);
        // $info = DB::select('select lastname, firstname from chauffeurs where='.$request->input('chauf_id'));
        // $info = chauffeurs::find($request->input('chauf_id'));
        // dd($info);
        $bus = new bus();
        $bus->bus_marque = $request->bus_marque;
        $bus->bus_number = $request->bus_number;
        $bus->bus_type = $request->bus_type;
        $bus->total_place = $request->total_place;
        $bus->bus_statut = $request->bus_statut;
        $bus->chauf_id = $request->chauf_id;
        $bus->comp_id = $request->comp_id;
        $bus->image = $image_name;
        // $bus->lastname = $info->lastname;
        // dd($bus);
        $bus->save();

        Flash::success('Nouveau bus sauvegardé avec succès.');

        return redirect(route('buses.index'));
    }

    public function updateBusStatut(Request $request)
    {
        $bus = bus::findOrFail($request->bus_id);
        $bus->bus_statut = $request->bus_statut;
        $bus->save();

        return response()->json(['message' => 'Statut du bus actualisé avec succès !']);
    }
    /**
     * Display the specified bus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        return view('buses.show')->with('bus', $bus);
    }

    /**
     * Show the form for editing the specified bus.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chauffeurs = chauffeurs::all();
        $compagnies = compagnies::all();
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        return view('buses.edit', compact('chauffeurs', 'compagnies'))->with('bus', $bus);
    }

    /**
     * Update the specified bus in storage.
     *
     * @param int $id
     * @param UpdatebusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebusRequest $request)
    {
        // $bus = $this->busRepository->find($id);
        $input = $request->all();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_image_name = time(). '.' .$extension;
        $image->move(public_path('bus_images'), $new_image_name);

        $bus = array(
            'bus_marque' => $request->bus_marque,
            'bus_number' => $request->bus_number,
            'bus_type' => $request->bus_type,
            'total_place' => $request->total_place,
            'bus_statut' => $request->bus_statut,
            'chauf_id' => $request->chauf_id,
            'comp_id' => $request->comp_id,
            'image' => $new_image_name
        );

        if (empty($bus)) {
            Flash::error($request->bus_type .' '. $request->bus_marque . ' ' . ' introuvable');

            return redirect(route('buses.index'));
        }
        bus::findOrfail($id)->update($bus);

        // $bus = $this->busRepository->update($request->all(), $id);

        Flash::success($request->bus_type . ' ' . $request->bus_marque . ' ' . 'actualisé(e) avec succès !');

        return redirect(route('buses.index'));
    }

    /**
     * Remove the specified bus from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bus = $this->busRepository->find($id);

        if (empty($bus)) {
            Flash::error('Bus not found');

            return redirect(route('buses.index'));
        }

        $this->busRepository->delete($id);

        Flash::success('Bus deleted successfully.');

        return redirect(route('buses.index'));
    }
}
