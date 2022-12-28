<?php

namespace App\View\Components;
use App\Models\FindTeam;
use Illuminate\Support\Facades\App;

use Illuminate\View\Component;

class SlideTeam extends Component
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
        $team = FindTeam::where('lang',App::getLocale())
        ->select(['name','id','img'])
        ->get();
        return view('components.home.slide-team',['team'=>$team]);
    }
}
