<?php

namespace App\Http\Controllers;

use App\Http\Requests\BriefRequest;
use App\Models\CooperationRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\BriefMail;
class Brief extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        
        return view('brief');
    }

        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\BriefRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store (BriefRequest $request) {
        
        $success = false;

        if ($brief = CooperationRequest::create([
            'fullname' => $request->fullname,
            'phone_number' => $request->phone_number,
            'detail' => $request->detail,
            'lang' => App::getLocale()
        ])) {

            Mail::to('homeily@gmail.com')->send(new BriefMail($brief));
            $success = true;
        }

        return view('brief',[
            'success' => $success,
        ]);

    }
}
