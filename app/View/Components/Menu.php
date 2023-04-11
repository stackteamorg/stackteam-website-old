<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $link;
    public $text;
    public $routname;

    public function __construct($link,$text)
    {
        $this->link=$link;
        $this->text=$text;
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
