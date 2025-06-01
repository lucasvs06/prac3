<?php


 // kut thomas
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('teams.index')->compact('team');
    }
}
