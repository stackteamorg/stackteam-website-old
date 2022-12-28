<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

use App\Models\Metatag;
use Request;

class MetatagGroup extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $group = null;
    public $section = 'public';
    public $sectionId = null;

    public function __construct($section='public',$sectionId=null,$lang=null,$group=null)
    {

        $this->group = $group;
        $this->section = $section;
        $this->sectionId = $sectionId;

        // if ($this->sectionId == null && !empty(Request::route('id'))) {
        //     $this->sectionId = Request::route('id');
        // }

        //die ($this->section . '--' . $this->sectionId . '--');  

        if (empty($this->sectionId)) {
            $this->sectionId = null;
        }
        
        if ($this->group == null) {
            
            $this->group = Metatag::where([
                'section' => $section,
                'section_id' => $this->sectionId,
            ])
            ->whereIn('lang',['all',App::getLocale()])
            ->get();
        }  
        
        //echo $this->section; print_r($this->group->toArray());die();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.metatag-group');
    }
}
