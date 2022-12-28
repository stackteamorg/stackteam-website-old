<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialLi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name = null;
    public $link = null;
    public $type = null;
    public $social = null;

    public function __construct($name=null,$link=null,$type=null,$social=null)
    {
        if($social != null && is_object($social)) {

            $name = $social->name;
            $link = $social->link;
            $type = $social->type;
        }

        $this->name = $name;
        $this->link = $link;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social-li');
    }
}
