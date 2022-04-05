<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.list', compact('users', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'names' => 'required|max:36',
            'surnames' => 'required|max:36',
            'identification' => 'required|max:36|unique:users',
            'email' => 'required|max:60|email|unique:users',
            'address' => 'required|max:60',
            'password' => 'required|max:16',
            'status' => 'required',
            'idRol' => 'required',
        ]);

        $user = new User([
            'uuid' => Str::uuid(),
            'names' => $request->get('names'),
            'surnames' => $request->get('surnames'),
            'identification' => $request->get('identification'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'password' => Hash::make($request->get('password')),
            'status' => $request->get('status'),
            'idRol' => $request->get('idRol'),
        ]);

        $user->save();
        return redirect('/users')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'names' => 'required',
            'surnames' => 'required',
            'address' => 'required',
            'status' => 'required',
            'idRol' => 'required',
            'email' => 'required',
            'identification' => 'required|required|max:36',
        ]);

        $user = User::find($id);

        if ($request->get('password') != '') {
            $user->password = Hash::make($request->get('password'));
        }

        $user->names = $request->get('names');
        $user->surnames = $request->get('surnames');
        $user->address = $request->get('address');
        $user->status = $request->get('status');
        $user->idRol = $request->get('idRol');

        if ($user->email != $request->get('email')) {
            $userTemp = User::where('email', $request->get('email'))->first();

            if ($userTemp != null) {
                return $request->validate([
                    'email' => 'required|max:60|email|unique:users',
                ]);
            } else {
                $user->email = $request->get('email');
            }
        }

        if ($user->identification != $request->get('identification')) {
            $userTemp = User::where('identification', $request->get('identification'))->first();

            if ($userTemp != null) {
                return $request->validate([
                    'identification' => 'required|max:36|unique:users',
                ]);
            } else {
                $user->identification = $request->get('identification');
            }
        }

        $user->update();

        if ($request->get('password') != '' && Auth::user()->email == $user->email) {
            Auth::logout();
            $request->session()->invalidate();

            return redirect('/login');
        }

        return redirect('/users')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('/users')->with('success', 'User deleted successfully');
    }
}
