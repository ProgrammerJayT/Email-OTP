@extends('layout')

@section('title', 'Enter email')
@section('content')

    <div class="d-xl-flex flex-column align-items-xl-center">
        <div class="d-xl-flex flex-column align-items-xl-center"><img src="assets/img/Newsletter-bro.png" style="width: 30%;">
        </div>
        <div class="d-xl-flex flex-column align-items-xl-center" style="width: 100%;">
            <form class="d-xl-flex flex-column align-items-xl-center" action="api/send" style="width: 40%;">
                @csrf
                <p style="width: 100%;color: var(--bs-primary);font-weight: bold;">Please enter your valid email address to
                    receive your OTP</p>
                <div class="input-group" style="width: 100%;">
                    <div class="input-group-prepend"><span class="input-group-text icon-container"><i
                                class="fa fa-envelope"></i></span></div><input class="form-control form-control"
                        type="text" placeholder="Email address" name="email" inputmode="email" required="">
                </div><span style="width: 100%;color: var(--bs-red);font-weight: bold;text-align: right;">Error
                    messages</span>
                <div class="d-xl-flex flex-column align-items-xl-center input-group" style="width: 100%;margin-top: 25px;">
                    <button class="btn btn-primary" type="submit" style="width: 50%;border-radius: 20px;">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
