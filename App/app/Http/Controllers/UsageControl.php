<?php

namespace App\Http\Controllers;

use Ichtrojan\Otp\Models\Otp as OtpModel;
use Illuminate\Http\Request;

class UsageControl extends Controller
{
    //
    public function check($email)
    {
        $check = OtpModel::where('identifier', $email)->first();
        if ($check->usage < 3) {
            return true;
        } else {
            return false;
        }
    }
}
