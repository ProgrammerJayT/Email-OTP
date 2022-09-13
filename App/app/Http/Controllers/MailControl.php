<?php

namespace App\Http\Controllers;

use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MailControl extends Controller
{
    public function getEmail(Request $req)
    {
        $usage = new UsageControl();
        $genOTP = new OTPControl();
        $email = $req->email;
        $record = ModelsOtp::where('identifier', $email)->first();


        //Check if user's email already exists in the database
        if ($record) {

            //Check if user's email has reached the maximum usage
            if ($usage->usage($email)) {

                //Send OTP to user's email
                $genOTP->create($email);

                return redirect('/api/getOTP?email=' . $email . '&type=success&message=OTP sent to your email');
            } else {
                return redirect('/?type=danger&message=You have reached the maximum usage');
            }
        } else {
            $genOTP->create($email);
            return redirect('/api/getOTP?email=' . $email . '&type=success&message=OTP sent to your email');
        }
    }
}
