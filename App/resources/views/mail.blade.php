@component('mail::message')
    Hey {{ $email }} your OTP is {{ $otp }}, and is valid for {{ $time }} minutes.
@endcomponent
