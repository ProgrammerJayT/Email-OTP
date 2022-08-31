<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailControl extends Controller
{

    public $expiryTime = 1; // 1 minute
    public $otpLength = 6;
    //
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $req){

        $email = $req->email;
        $length = $this->otpLength;
        $expiryTime = $this->expiryTime;

        $genOTP = new Otp();
        $otp = $genOTP->generate(
            $email,
            $length,
            $expiryTime
        );
        
        Mail::to($email)->send(new SendOTP(
            $otp->token,
            $email,
            $expiryTime
        ));

        if ($otp->status == 1) {
            return redirect('api/validate?email='.$email);

        } else {
            return redirect('/')->with('error', 'Error sending OTP');
        }
    }

    public function validate()
    {
        
        return view('validate');
    }
}
