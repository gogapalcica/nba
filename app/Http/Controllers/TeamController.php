<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();

        return view('teams.teams',compact('teams'));
    }

    public function show($id){
        $team = Team::with('players')->find($id);

        return view('teams.team',compact('team'));
    }
}
