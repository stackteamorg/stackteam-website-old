<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Faq as Faqs;
use Illuminate\Http\Request;

class Faq extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $faqs = Faqs::where('lang',App::getLocale())
            ->select(['id','name','title','lang'])
            ->get();


        if (empty($request->route('id'))) {

            $faq = Faqs::where([
                'lang' => App::getLocale(),
                'name' => 'who-you-are'
            ])
            ->select(['id','name','title','lang','text','updated_at'])
            ->first();

        } else {

            //
            $faq = Faqs::where([
                'lang' => App::getLocale(),
                'id' => $request->route('id')
            ])
            ->select(['id','name','title','lang','text','updated_at'])
            ->first();

        }

        //print_r($faq->toArray());die();

        return view('faq',[
            'faqs' => $faqs,
            'faq' => $faq
        ]);
    }
}
