<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Feedback;
use Illuminate\Support\Facades\App;

class CommentBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $feedbacks = null;

    public function __construct()
    {
        $this->feedbacks = Feedback::where('lang',App::getLocale())->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.comment-box');
    }
}
