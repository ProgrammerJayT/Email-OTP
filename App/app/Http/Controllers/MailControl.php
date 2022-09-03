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
    }

    public function validate()
    {

        return view('validate');
    }

    public function checkUsage($email)
    {

        $check = ModelsOtp::where('identifier', $email)->first();

        if ($check->updated_at->isToday()) {
            return 'Today is the day';
        } else {
            return false;
        }
    }
}
