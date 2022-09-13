<?php

namespace App\Http\Controllers;

use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp as OtpModel;

class UsageControl extends Controller
{
    //
    public function usage($email)
    {
        $maxUsage = config('otp.usage');
        $usage = OtpModel::where('identifier', $email)->first();

        return $usage->usage <= $maxUsage ? true : false;
    }
}
