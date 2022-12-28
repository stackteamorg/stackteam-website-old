<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Explain;
use Illuminate\Support\Facades\App;

class ExplainBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $title = null;
    public $explain = null;
    public $quotation = null;
    public $show = true;
    public $image = null;
    public $name=null;
    public $quotationName=null;
    public $quotationRole=null;

    public function __construct($title = null,$explain = null,$quotation = null,$show = true,$image = null,$quotationName=null,$quotationRole=null,$name=null)
    {
        if ($name != null) {

            $exp = Explain::where([
                'name' => $name,
                'lang' => App::getLocale()
            ])->first();

            $this->title = $exp->title;
            $this->explain = $exp->content;
            $this->quotation = $exp->quotation;
            $this->quotationName = $exp->quotation_name;
            $this->quotationRole = $exp->quotation_role;

        } else { 

            $this->title = $title;
            $this->explain = $explain;
            $this->quotation = $quotation;
            $this->quotationName = $quotationName;
            $this->quotationRole = $quotationRole;
        }

        $this->show = $show;
        $this->image =$image;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.explain-box');
    }
}
