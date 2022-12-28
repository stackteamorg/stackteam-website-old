<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FindTeam;
use Illuminate\Support\Facades\App;

class TeamController extends Controller
{
    
    public function __invoke()
    {
        return view('team');
    }
    public function detail(Request $request) {
        
        $team = FindTeam::where([
            'lang' => App::getLocale(),
            'id' => $request->route('id')
        ])
        ->first();

        return view('team-detail',['team' => $team]);
    }
}
