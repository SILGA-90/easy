<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechauffeursRequest;
use App\Http\Requests\UpdatechauffeursRequest;
use App\Repositories\chauffeursRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\chauffeurs;
use App\Models\compagnies;
use Laracasts\Flash\Flash;
use Response;

class chauffeursController extends AppBaseController
{
    /** @var  chauffeursRepository */
    private $chauffeursRepository;

    public function __construct(chauffeursRepository $chauffeursRepo)
    {
        $this->chauffeursRepository = $chauffeursRepo;
    }

    /**
     * Display a listing of the chauffeurs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compagnies = compagnies::all();
        $chauffeurs = $this->chauffeursRepository->all();

        return view('chauffeurs.index',compact('compagnies'))
            ->with('chauffeurs', $chauffeurs);
    }

    /**
     * Show the form for creating a new chauffeurs.
     *
     * @return Response
     */
    public function create()
    {
        return view('chauffeurs.create');
    }

    /**
     * Store a newly created chauffeurs in storage.
     *
     * @param CreatechauffeursRequest $request
     *
     * @return Response
     */
    public function store(CreatechauffeursRequest $request)
    {
        $input = $request->all();

        // $chauffeurs = $this->chauffeursRepository->create($input);

        $image = $request->file('image');
        $image_name = rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('chauffeur_images'), $image_name);

        $chauffeurs = new chauffeurs();
        $chauffeurs->firstname = $request->firstname;
        $chauffeurs->lastname = $request->lastname;
        $chauffeurs->email = $request->email;
        $chauffeurs->gender = $request->gender;
        $chauffeurs->old = $request->old;
        $chauffeurs->phone = $request->phone;
        $chauffeurs->nationality = $request->nationality;
        $chauffeurs->no_CNIB = $request->no_CNIB;
        $chauffeurs->comp_id = $request->comp_id;
        $chauffeurs->statut = $request->statut;
        $chauffeurs->image = $image_name;
        // dd($chauffeurs);
        $chauffeurs->save();

        Flash::success('Chauffeurs saved successfully.');

        return redirect(route('chauffeurs.index'));
    }

    public function updateChauffeurStatut(Request $request){

        $chauffeurs = chauffeurs::findOrFail($request->chauf_id);
        $chauffeurs->statut = $request->statut;
        $chauffeurs->save();

        return response()->json(['message' => 'Statut du chauffeur actualisé avec succès !']);
    }

    /**
     * Display the specified chauffeurs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chauffeurs = $this->chauffeursRepository->find($id);

        if (empty($chauffeurs)) {
            Flash::error('Chauffeurs not found');

            return redirect(route('chauffeurs.index'));
        }

        return view('chauffeurs.show')->with('chauffeurs', $chauffeurs);
    }

    /**
     * Show the form for editing the specified chauffeurs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compagnies = compagnies::all();
        $chauffeurs = $this->chauffeursRepository->find($id);

        if (empty($chauffeurs)) {
            Flash::error('Chauffeurs not found');

            return redirect(route('chauffeurs.index'));
        }

        return view('chauffeurs.edit',compact('compagnies'))->with('chauffeurs', $chauffeurs);
    }

    /**
     * Update the specified chauffeurs in storage.
     *
     * @param int $id
     * @param UpdatechauffeursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatechauffeursRequest $request)
    {
        // $chauffeurs = $this->chauffeursRepository->find($id);
        $input = $request->all();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_image_name = time() . '.' . $extension;
        $image->move(public_path('chauffeur_images'), $new_image_name);

        $chauffeurs = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'gender' => $request->gender,
            'old' => $request->old,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
            'no_CNIB' => $request->no_CNIB,
            'comp_id' => $request->comp_id,
            'statut' => $request->statut,
            'image' => $new_image_name
        );

        if (empty($chauffeurs)) {
            Flash::error($request->lastname . $request->firstname . ' ' . ' introuvable');

            return redirect(route('chauffeurs.index'));
        }
        chauffeurs::findOrfail($id)->update($chauffeurs);
        // $chauffeurs = $this->chauffeursRepository->update($request->all(), $id);

        Flash::success($request->lastname . ' ' . $request->firstname . ' ' . 'actualisé(e) avec succès !');

        return redirect(route('chauffeurs.index'));
    }

    /**
     * Remove the specified chauffeurs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chauffeurs = $this->chauffeursRepository->find($id);

        if (empty($chauffeurs)) {
            Flash::error('Chauffeurs not found');

            return redirect(route('chauffeurs.index'));
        }

        $this->chauffeursRepository->delete($id);

        Flash::success('Chauffeurs deleted successfully.');

        return redirect(route('chauffeurs.index'));
    }
}
