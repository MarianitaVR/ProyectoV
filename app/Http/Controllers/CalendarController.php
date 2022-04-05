<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = Calendar::all();

        return view('calendar.list', compact('calendar', 'calendar'));
    }

    public function create()
    {
        $datos['users'] = User::all();
        $datos['clients'] = Client::all();

        return view('calendar.add', $datos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'uuidClient' => 'required|max:36|exists:clients,uuid',
            'uuidResponsible' => 'required|max:36|exists:users,uuid',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);

        $calendar = new Calendar([
            'id' => Str::uuid(),
            'uuidClient' => $request->get('uuidClient'),
            'uuidResponsible' => $request->get('uuidResponsible'),
            'uuidCreator' => Auth::user()->uuid,
            'start' => $request->get('date'),
            'time' => $request->get('time'),
            'title' => $request->get('description'),
        ]);

        $calendar->save();
        return redirect('/calendar')->with('success', 'Calendar has been updated');
    }

    public function show(Calendar $calendar)
    {
        $datos['users'] = User::all();
        $datos['clients'] = Client::all();

        return view('calendar.view', $datos, compact('calendar'));
    }

    public function showJson(Calendar $calendar)
    {
        $calendar = Calendar::all();

        return response()->json($calendar, 200);
    }

    public function edit($id)
    {
        $calendar = Calendar::find($id);

        return view('calendar.edit', compact('calendar'));
    }

    public function editJson($id)
    {
        $calendar = Calendar::find($id);

        return response()->json($calendar, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'uuidClient' => 'required|max:36|exists:clients,uuid',
            'uuidResponsible' => 'required|max:36|exists:users,uuid',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);

        $calendar = Calendar::find($id);
        $calendar->uuidClient = $request->get('uuidClient');
        $calendar->uuidResponsible = $request->get('uuidResponsible');
        $calendar->start = $request->get('date');
        $calendar->time = $request->get('time');
        $calendar->title = $request->get('description');

        $calendar->update();

        return redirect('/calendar')->with('success', 'Client updated successfully');
    }

    public function destroy($id)
    {
        $calendar = Calendar::find($id);
        $calendar->delete();

        return redirect('/calendar')->with('success', 'Client deleted successfully');
    }
}
