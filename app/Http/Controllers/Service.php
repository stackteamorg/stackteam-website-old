<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service as StackteamServices;
use Illuminate\Support\Facades\App;
class Service extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('service');
    }

    public function detail(Request $request) {
        
        $service = StackteamServices::where([
            'lang' => App::getLocale(),
            'id' => $request->route('id')
        ])
        ->with('goals')
        ->first();

        return view('service-detail',['service' => $service]);
    }
}
