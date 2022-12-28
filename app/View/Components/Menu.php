<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $link;
    public $text;
    public $submenu;

    public function __construct($link,$text,$submenu)
    {
        $this->link=$link;
        $this->text=$text;
        $this->submenu=$submenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
