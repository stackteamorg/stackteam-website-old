<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Service;
use Illuminate\Support\Facades\App;

class ListService extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $services = null;

    public function __construct($service=null)
    {
        // get service data  ----------------------------------
        $this->services = Service::where('lang',App::getLocale())
        ->select(['id','name','title','subtitle','lang'])
        ->get();


        //print_r($this->services->toArray());die();
        // ---------------------------------------------------
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service.list-service');
    }
}
