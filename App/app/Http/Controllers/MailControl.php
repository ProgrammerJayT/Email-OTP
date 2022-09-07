<?php

namespace App\Http\Controllers;

use App\Mail\SendOTP;
use Carbon\Carbon;
use Ichtrojan\Otp\Commands\CleanOtps;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailControl extends Controller
{
    public $maxUsage;
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

    public function send(Request $req)
    {
        $email = $req->email;

        $usage = new UsageControl();
        $usage->check($email);

        if (!$usage->check($email)) {
            return redirect('/?type=error&message=You have reached the maximum usage limit');
        }

        // Mail::to($email)->send(new SendOTP(
        //     $otp->token,
        //     $email,
        //     $expiryTime
        // ));
        $check = ModelsOtp::where('identifier', $email)->first();

        $currentTime = Carbon::now()->toTimeString();
        $currentDate = Carbon::now()->toDateString();
        $optRequestTime = $check->updated_at->toTimeString();
        $optRequestDate = $check->updated_at->toDateString();
        
        // print_r($check->updated_at->toTimeString());
        $difference = Carbon::parse($currentTime)->diffInSeconds($optRequestTime);
        print_r($difference);        

        return view('validate', [
            'email' => $email
        ]);
    }

    public function validate()
    {

        return view('validate');
    }

    public function verify(Request $req)
    {
        $otp = new Otp();
        $check = $otp->validate($req->email, $req->otp);

        if ($check) {
            return redirect('/?type=success&message=OTP verified successfully');
        } else {
            return redirect('/?type=error&message=Invalid OTP');
        }
    }
}
