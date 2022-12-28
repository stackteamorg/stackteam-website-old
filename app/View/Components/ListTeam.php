<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

use App\Models\FindTeam;

class ListTeam extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $teams = FindTeam::where('lang',App::getLocale())
        ->select(['name','id','title','img','lang'])
        ->get();
        
        return view('components.team.list-team',['teams' => $teams]);
    }
}
