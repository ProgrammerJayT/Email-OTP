<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use Ichtrojan\Otp\Commands\CleanOtps;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailControl extends Controller
{

    public $expiryTime; // 1 minute
    public $otpLength; // 6 digits
    //
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $req)
    {        
        $this->expiryTime = config('otp.period');
        $this->otpLength = config('otp.length');

        $email = $req->email;
        $length = $this->otpLength;
        $expiryTime = $this->expiryTime;

        dd(self::checkUsage($email));

        $genOTP = new Otp();
        $otp = $genOTP->generate(
            $email,
            $length,
            $expiryTime
        );

        

        // Mail::to($email)->send(new SendOTP(
        //     $otp->token,
        //     $email,
        //     $expiryTime
        // ));
    }

    public function validate()
    {

        return view('validate');
    }

    public function checkUsage ($email) {

        $check = ModelsOtp::where('identifier', $email)->first();
        
        if ($check->updated_at->isToday()) {
            return 'Today is the day';
        } else {
            return false;
        }
    }
}
