<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\Direction;
use App\Models\Material;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $counter = count($users);
        $i = 1;
        $set = 'Admin';

        if (Gate::allows('is-super-admin')) {
            return view('users.show_users', compact('users', 'counter', 'i'));
        } else if (Gate::allows('is-admin')) {
            return view('users.show_users', compact('users', 'counter', 'i', 'set'))->with('message', 'Oops! Nemate pristupa!');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();

        $this->authorize('create', User::class);

        return view('users.create_users', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();

        $data['password'] = $data['password'];

        User::create($data);

        return redirect('/users')->with('message', 'Uspješno kreiran korisnik!');
    }

    public function password_edit($id)
    {
        $user = User::find($id);

        return view('users.password_edit', compact('user'));
    }

    public function password_update(ChangePasswordRequest $request, $id)
    {
        $user = User::find($id);

        $this->authorize('update', $user);

        $user->password = $request->password; // Ne treba bcrypt($request->password) --> U modelu User smo već enktriptirali lozinku (Hash)

        $user->save();

        return redirect('/users')->with('message', 'Lozinka promijenjena!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show_users', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();

        return view('users.edit_users', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $request->validated();

        $user = User::find($id);

        $this->authorize('update', $user);

        $user = User::find($id);
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->save();

        return redirect('/users')->with('message', 'Uspješno ažurirani podaci o korisniku!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $this->authorize('delete', $user);

        $user->delete();

        return redirect('/users')->with('message', 'Obrisan korisnik!');
    }
}
