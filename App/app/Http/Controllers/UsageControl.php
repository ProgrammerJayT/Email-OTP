<?php

namespace App\Http\Controllers;

use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp as OtpModel;

class UsageControl extends Controller
{
    //
    public function check($email)
    {
        $check = OtpModel::where('identifier', $email)->first();

        if (!$check) {
            self::create($email);

            return true;
        } else {
            if (self::usage($email)) {
                self::create($email);

                return true;
            } else {
                return false;
            }
        }
    }

    public function create($email)
    {
        $genOTP = new Otp();
        $genOTP->generate(
            $email,
            config('otp.length'),
            config('otp.period')
        );
    }

    public function usage($email)
    {
        $maxUsage = config('otp.usage');
        $usage = OtpModel::where('identifier', $email)->first();

        return $usage->usage <= $maxUsage ? true : false;
    }
}
