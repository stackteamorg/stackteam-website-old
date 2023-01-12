<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommingSoonRequest;
use App\Models\Commingsoon;

class CommingSoonAPI extends Controller
{
    protected $platform = null;

    public function __invoke(CommingSoonRequest $request) {
        

        if(Commingsoon::create([
            'mobile' => $request->mobile,
            'email' => $request->email,
            'mobile' => $request->platform,
        ])) {

            return response()->json([
                'success' => true,
                'result' => $request->all()
            ]);
        }

    }
}
