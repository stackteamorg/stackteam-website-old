<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    protected $langCountry = [

        'Egypt' => 'ar',
        'Algeria' => 'ar',
        'Sudan' => 'ar',
        'Iraq' => 'ar',
        'Morocco' => 'ar',
        'Saudi Arabia' => 'ar',
        'Yemen' => 'ar',
        'Syria' => 'ar',
        'Tunisia' => 'ar',
        'Jordan' => 'ar',
        'United Arab Emirates' => 'ar',
        'Lebanon' => 'ar',
        'Libya' => 'ar',
        'Palestine' => 'ar',
        'Oman' => 'ar',
        'Kuwait' => 'ar',
        'Qatar' => 'ar',
        'Bahrain' => 'ar',
        'Comorians' => 'ar',

        // ------------------------------

        'Iran' => 'fa',
        'Afghanistan' => 'fa',

        // 

        'United Kingdom' => 'en',
        'United States' => 'en'
        

    ];
    public function handle(Request $request, Closure $next)
    {
        
        $lang = $request->route('lang');
        if (empty($lang)) {
            $routeName = $request->route()->getName();
            return redirect()->route($routeName,['lang' => $this->getLang($request->ip())]);
        }

        App::setLocale($lang);
        return $next($request);
    }

    protected function getLang($ip) {

        $ipInfo = $this->getIpData($ip);
        $country = isset($ipInfo->country) ? $ipInfo->country : "Iran";
        return isset($this->langCountry[$country]) ? $this->langCountry[$country] : 'fa' ;
    }

    private function getIpData ($ip) {

        
        $url = "http://ip-api.com/json/$ip";
         
        $crl = curl_init();
        curl_setopt($crl, CURLOPT_URL, $url);
        curl_setopt($crl, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
         
        $response = curl_exec($crl);
        if(!$response){
           die('Error: "' . curl_error($crl) . '" - Code: ' . curl_errno($crl));
        }
         
        curl_close($crl);
        return json_decode($response);
    }
}
