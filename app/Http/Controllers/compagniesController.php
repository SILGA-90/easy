<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecompagniesRequest;
use App\Http\Requests\UpdatecompagniesRequest;
use App\Repositories\compagniesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\compagnies;
use Laracasts\Flash\Flash;
use Response;

class compagniesController extends AppBaseController
{
    /** @var  compagniesRepository */
    private $compagniesRepository;

    public function __construct(compagniesRepository $compagniesRepo)
    {
        $this->compagniesRepository = $compagniesRepo;
    }

    /**
     * Display a listing of the compagnies.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compagnies = $this->compagniesRepository->all();

        return view('compagnies.index')
            ->with('compagnies', $compagnies);
    }

    /**
     * Show the form for creating a new compagnies.
     *
     * @return Response
     */
    public function create()
    {
        return view('compagnies.create');
    }

    /**
     * Store a newly created compagnies in storage.
     *
     * @param CreatecompagniesRequest $request
     *
     * @return Response
     */
    public function store(CreatecompagniesRequest $request)
    {
        $input = $request->all();

        // $compagnies = $this->compagniesRepository->create($input);

        $image = $request->file('image');
        $image_name = rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('compagnie_images'), $image_name);

        $compagnies = new compagnies();
        $compagnies->comp_name = $request->comp_name;
        $compagnies->comp_code = $request->comp_code;
        $compagnies->comp_statut = $request->comp_statut;
        $compagnies->image = $image_name;
        // dd($compagnies);
        $compagnies->save();

        Flash::success($request->comp_name . ' ' . ' ajoutée avec succès !');

        return redirect(route('compagnies.index'));
    }

    public function updateCompagnieStatut(Request $request)
    {
        $compagnies = compagnies::findOrFail($request->comp_id);
        $compagnies->comp_statut = $request->comp_statut;
        $compagnies->save();

        return response()->json(['message' => 'Statut de la compagnie actualisé avec succès !']);
    }
    /**
     * Display the specified compagnies.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compagnies = $this->compagniesRepository->find($id);

        if (empty($compagnies)) {
            Flash::error('Compagnie introuvable');

            return redirect(route('compagnies.index'));
        }

        return view('compagnies.show')->with('compagnies', $compagnies);
    }

    /**
     * Show the form for editing the specified compagnies.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compagnies = $this->compagniesRepository->find($id);

        if (empty($compagnies)) {
            Flash::error('Compagnie introuvable');

            return redirect(route('compagnies.index'));
        }

        return view('compagnies.edit')->with('compagnies', $compagnies);
    }

    /**
     * Update the specified compagnies in storage.
     *
     * @param int $id
     * @param UpdatecompagniesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecompagniesRequest $request)
    {
        // $compagnies = $this->compagniesRepository->find($id);
        $input = $request->all();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_image_name = time(). '.' .$extension;
        $image->move(public_path('chauffeur_images'), $new_image_name);

        $compagnies = array(
            'comp_name' => $request->comp_name,
            'comp_code' => $request->comp_code,
            'comp_statut' => $request->comp_statut,
            'image' => $new_image_name
        );
        

        if (empty($compagnies)) {
            Flash::error($request->comp_name . ' ' . 'Compagnie introuvable');

            return redirect(route('compagnies.index'));
        }

        compagnies::findOrfail($id)->update($compagnies);
        
        // $compagnies = $this->compagniesRepository->update($request->all(), $id);

        Flash::success($request->comp_name.' '.'actualisée avec succès !');

        return redirect(route('compagnies.index'));
    }

    /**
     * Remove the specified compagnies from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compagnies = $this->compagniesRepository->find($id);

        if (empty($compagnies)) {
            Flash::error('Compagnie introuvable');

            return redirect(route('compagnies.index'));
        }

        $this->compagniesRepository->delete($id);

        Flash::success('Compagnie supprimée avec succès !');

        return redirect(route('compagnies.index'));
    }
}
