<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp;

class Validation extends Component
{
    public function render(Request $req)
    {
        $record = Otp::where('identifier', $req->email)->first();

        if ($record) {
            $requestTime = $record->updated_at->toTimeString();
            $currentTime = Carbon::now()->toTimeString();

        }


        return view('livewire.validation', [
            'email' => $req->email,
            'difference' => Carbon::parse($currentTime)->diffInSeconds($requestTime)
        ]);
    }
}
