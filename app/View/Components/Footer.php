<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\SocialContact;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $email = null;
    public $phone = null;
    
    public function __construct()
    {
        $contact = SocialContact::whereIn('name',[
            'offical-email',
            'ceo-mobile-number'
        ])
        ->select(['link','data'])
        ->get();

        $this->email = $contact[0];
        $this->phone = $contact[1];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
