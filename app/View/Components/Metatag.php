<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Metatag as Meta;

class Metatag extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name = null;
    public $content = null;
    public $property = null;
    public $metatag = null;
    public $charset = null;

    public function __construct($name=null,$content=null,$property=null,$charset=null,$metatag=null)
    {
        if ($name !=null && $content == null && $property ==null) {
            $this->metatag = Meta::where('name',$name)->first();
        }


        if ($metatag != null && is_object($metatag)) {
            
            $name = $metatag->name;
            $content = $metatag->content;
            $property = $metatag->property;
        }

        $this->name = $name;
        $this->content = $content;
        $this->property = $property;
        $this->charset = $charset;

        if ($name == 'csrf-token') {
            $this->content = csrf_token();
        }

        $this->content = str_replace(
            ['{url}','{baseurl}'],
            [url()->current(),url()->to('/')],
            $this->content
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->name == "title") {
            return view('components.metatag-title');
        }
        return view('components.metatag');
    }
}
