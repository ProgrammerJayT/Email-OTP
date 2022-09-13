<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp;

class DateTimeControl extends Controller
{
    //
    public function validity($email){

        $record = Otp::where('identifier', $email)->first();

        $currentTime = Carbon::now()->toTimeString();
        $currentDate = Carbon::now()->toDateString();
        $optRequestTime = $record->updated_at->toTimeString();
        $optRequestDate = $record->updated_at->toDateString();

        if ()
        
    }
}
