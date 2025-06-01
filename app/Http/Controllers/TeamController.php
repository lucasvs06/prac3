<?php


// kut thomas
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index')->compact('team');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'player_count' => 'required|integer|min:1',
            'coach_name' => 'required|string|max:255',
        ]);

        team::create([
            'name' => $request->name,
            'player_count' => $request->player_count,
            'coach_name' => $request->coach_name,
            'user_id' => auth()->id(), //dit koppelt het team aan de ingelogde gebruiker
        ]);

        return redirect()->route('dashboard')->with('success', 'Team aangemaakt!');
    }

    public function create()
    {
        return view('teams.create');
    }
}
