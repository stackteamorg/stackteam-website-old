<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamMember extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $fullname;
    public $role;
    public function __construct( $img, $fullname, $role )
    {
        $this-> img= $img;
        $this-> fullname= $fullname;
        $this-> role= $role;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team.team-member');
    }
}
