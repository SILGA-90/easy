<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Repositories\usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\roles;
use App\Models\compagnies;
use App\Models\Users;
use Illuminate\Support\Str;
use Flash;
use Response;

class usersController extends AppBaseController
{
    /** @var  usersRepository */
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    
    {
        $roles = roles::all();
        $compagnies = compagnies::all();
        $users = $this->usersRepository->all();

        return view('users.index',compact('roles','compagnies'))
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new users.
     *
     * @return Response
     */
    public function create()
    {
        
        
        return view('users.create');
    }

    /**
     * Store a newly created users in storage.
     *
     * @param CreateusersRequest $request
     *
     * @return Response
     */
    public function store(CreateusersRequest $request)
    {
        $input = $request->all();

        // $users = $this->usersRepository->create($input);

        $image = $request->file('image');
        $image_name = rand(1111, 9999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('users_images'), $image_name);
        $password = Str::random(3).''.rand( 10000, 99999 );

        $users = new users();
        $users->lastname = $request->lastname;
        $users->firstname = $request->firstname;
        $users->email = $request->email;
        // $users->gender = $request->gender;
        $users->mobile = $request->mobile;
        $users->role_id = $request->role_id;
        // $users->compagnie = $request->compagnie;
        $users->comp_id = $request->comp_id;
        $users->password =  bcrypt($password);
        $users->img = $image_name;
        // dd($users);
        $users->save();

        Flash::success('Enregistrement éffectué avec succès ! Son mot de passe est '.$password);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }
        $roles = roles::all();
        $compagnies = compagnies::all();

        return view('users.edit',compact('roles','compagnies'))->with('users', $users);
    }

    /**
     * Update the specified users in storage.
     *
     * @param int $id
     * @param UpdateusersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusersRequest $request)
    {
        
        // $users = $this->usersRepository->find($id);
        $input = $request->all();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_image_name = time() . '.' . $extension;
        $image->move(public_path('users_images'), $new_image_name);

        $users = array(
            
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'role_id' => $request->role_id,
            // 'compagnie' => $request->compagnie,
            'comp_id' => $request->comp_id,
            'mobile' => $request->mobile,
            'img' => $new_image_name
        );

        if (empty($users)) {
            Flash::error($request->lastname .' '. $request->firstname . ' ' . ' introuvable');

            return redirect(route('users.index'));
        }
        users::findOrfail($id)->update($users);
        // $users = $this->usersRepository->update($request->all(), $id);

        Flash::success($request->lastname . ' ' . $request->firstname . ' ' . 'actualisé(e) avec succès !');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success('Users deleted successfully.');

        return redirect(route('users.index'));
    }
}
