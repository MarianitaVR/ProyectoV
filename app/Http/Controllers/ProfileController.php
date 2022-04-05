<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $user = User::all();
        return view('shared.profile', compact('user', 'user'));
    }

    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'names' => 'required',
            'surnames' => 'required',
            'address' => 'required',
        ]);

        $user = User::find($id);

        if ($request->get('password') != '') {
            $user->password = Hash::make($request->get('password'));
        }

        $user->names = $request->get('names');
        $user->surnames = $request->get('surnames');
        $user->address = $request->get('address');

        $user->update();

        if ($request->get('password') != '') {
            Auth::logout();
            $request->session()->invalidate();

            return redirect('/login');
        }

        return redirect('/')->with('success', 'User updated successfully');
    }
}
