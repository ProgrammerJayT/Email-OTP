<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class MailControl extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $req){

        $email = $req->email;
        
        Mail::to($email)->send(new SendOTP());
    }

    public function getOTP()
    {
        return view('getOTP');
    }
}
