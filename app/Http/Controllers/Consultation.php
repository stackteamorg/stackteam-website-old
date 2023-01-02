<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationMail;

class Consultation extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ConsultationRequest $request)
    {
        $success = false;

        if ($consultation = \App\Models\Consultation::create([
            'phone_number' => $request->phone_number,
            'lang' => App::getLocale()
        ]))
           
        {
            //Mail::to('homeily@gmail.com')->send(new ConsultationMail($consultation));
            Mail::to('maryam73.zare@gmail.com')->send(new ConsultationMail($consultation));

            $success = true;
        }

        if(App::getLocale()=='fa'){
        $data='<div class="alert alarm-message alert-dismissible fade show" role="alert">
        <span>شماره تماس شما با موفقیت ثبت شد.</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
        elseif(App::getLocale()=='en'){
            $data='<div class="alert alarm-message alert-dismissible fade show" role="alert">
            <span>Your contact number has been successfully registered.</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
        else{
            $data='<div class="alert alarm-message alert-dismissible fade show" role="alert">
            <span>لقد تلقينا رقم هاتفك بنجاح، سوف نتصل بكم.</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
        
        
        /*return response()->json([
            'success' => $success
        ]);*/
        return response()->json(array('result'=> $data));
    }
}
