<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class Contact extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('contact');
    }

    public function store (ContactRequest $request) {
        return view('contact');
    }
}
