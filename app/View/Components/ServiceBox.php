<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

use App\Models\Service;

class ServiceBox extends Component
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

        // get data form database -----------------------------
        $serives = Service::whereIn('name',[
            'mobile-development',
            'web-development',
            'desktop-app'
        ])->where('lang',App::getLocale())
        ->select(['name','id','title','subtitle','lang'])
        ->get();
        // ---------------------------------------------------

        return view('components.home.service-box',['services' => $serives]);
    }
}
