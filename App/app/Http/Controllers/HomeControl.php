<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControl extends Controller
{
    //
    public function index(Request $req)
    {

        $type = '';
        $message = '';

        if (isset($req->type) && isset($req->message)) {
            $type = $req->type;
            $message = $req->message;
        }

        return view('welcome', [ 
            'type' => $type,
            'message' => $message
        ]);
    }
}
