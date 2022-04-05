<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $clients = Client::all();
        return view('clients.list', compact('clients', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.add');
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
            'identification' => 'required|max:36|unique:clients',
            'address' => 'required|max:60',
            'phone' => 'required|max:12|unique:clients',
            'status' => 'required',
        ]);

        $client = new Client([
            'uuid' => Str::uuid(),
            'names' => $request->get('names'),
            'surnames' => $request->get('surnames'),
            'identification' => $request->get('identification'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'status' => $request->get('status'),
        ]);

        $client->save();
        return redirect('/clients')->with('success', 'Client has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
        return view('clients.view', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'names' => 'required|max:36',
            'surnames' => 'required|max:36',
            'identification' => 'required|max:36',
            'address' => 'required|max:60',
            'phone' => 'required|max:12',
            'status' => 'required',
        ]);

        $client = Client::find($id);

        $client->names = $request->get('names');
        $client->surnames = $request->get('surnames');
        $client->address = $request->get('address');
        $client->status = $request->get('status');

        if ($client->identification != $request->get('identification')) {
            $clientTemp = Client::where('identification', $request->get('identification'))->first();

            if ($clientTemp != null) {
                return $request->validate([
                    'identification' => 'required|max:60|unique:clients',
                ]);
            } else {
                $client->identification = $request->get('identification');
            }
        }

        if ($client->phone != $request->get('phone')) {
            $clientTemp = Client::where('phone', $request->get('phone'))->first();

            if ($clientTemp != null) {
                return $request->validate([
                    'phone' => 'required|max:12|unique:clients',
                ]);
            } else {
                $client->phone = $request->get('phone');
            }
        }

        $client->update();

        return redirect('/clients')->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return redirect('/clients')->with('success', 'Client deleted successfully');
    }
}
