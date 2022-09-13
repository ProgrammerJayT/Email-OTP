<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ichtrojan\Otp\Otp;

class OTPControl extends Controller
{
    //
    public function create($email)
    {
        $genOTP = new Otp();
        $genOTP->generate(
            $email,
            config('otp.length'),
            config('otp.period')
        );

        return $genOTP;
    }

    public function getOTP(Request $req)
    {
        $email = $req->email;
        $type = $req->type;
        $message = $req->message;

        return view('otp', [
            'email' => $email,
            'type' => $type,
            'message' => $message
        ]);
    }

    public function verify(Request $req)
    {
        $otp = new Otp();
        $check = $otp->validate($req->email, $req->otp);

        if ($check->status == true) {
            return redirect('/success');
        } else {
            print_r($check);
        }
    }
}
