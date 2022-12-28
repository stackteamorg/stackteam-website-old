<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProcessItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $text;
    public $image;
    public $nameofclass;

    public function __construct($title,$text,$image,$nameofclass)
    {
        //
        $this->title=$title;
        $this->text=$text;
        $this->image=$image;
        $this->nameofclass=$nameofclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.process.process-item');
    }
}
