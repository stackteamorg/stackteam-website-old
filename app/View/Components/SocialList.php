<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\SocialContact;

class SocialList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $socials = null;

    public function __construct()
    {
        $this->socials = SocialContact::where('display',true)
            ->select('name','link','type')
            ->get();

        //print_r($this->socials->toArray());die();   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social-list');
    }
}
