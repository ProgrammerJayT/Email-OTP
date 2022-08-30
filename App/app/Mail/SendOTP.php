<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOTP extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $email;
    public $time;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, $email, $time)
    {
        //
        $this->otp = $otp;
        $this->email = $email;
        $this->time = $time;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail');
    }
}
