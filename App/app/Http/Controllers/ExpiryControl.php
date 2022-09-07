<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp;

class ExpiryControl extends Controller
{
    //
    public function check($email) {
        $record = Otp::where('identifier', $email)->first();

        if ($record) {
            $requestTime = $record->updated_at->toTimeString();
            $currentTime = Carbon::now()->toTimeString();
        }
    }
}
