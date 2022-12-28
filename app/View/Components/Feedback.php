<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Feedback as PartnerFeedbacks;
use Illuminate\Support\Facades\App;

class Feedback extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $brand;
    public $comment = null;
    public $fullname = null;
    public $id=null;
    public $brandName = null;

    public function __construct($brand,$comment=null,$fullname=null,$brand_name=null)
    {

        if (is_object($brand)) {

            $this->id = $brand->id;

            $comment = $brand->comment;
            $fullname = $brand->fullname;
            $brand_name = $brand->brand_name;

            $brand = $brand->brand;
        }

        $this->comment = $comment;
        $this->fullname = $fullname;
        $this->brandName = $brand_name;
        $this->brand = $brand;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.feedback');
    }
}
