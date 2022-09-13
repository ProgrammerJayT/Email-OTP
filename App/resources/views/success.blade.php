@extends('layout')

@section('title', 'OTP validated')

@section('content')

    <body class="d-sm-flex flex-column justify-content-sm-center">
        <div class="d-xl-flex flex-column align-items-xl-center">
            <div
                class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center">
                <img src="assets/img/Grades-pana.png" style="width: 30%;">
            </div>
            <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center"
                style="width: 100%;">
                <form class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center"
                    style="width: 40%;min-width: 70%;">
                    <div class="alert alert-success d-sm-flex flex-row align-items-sm-center" role="alert" id="save-sucess"
                        style="border: 1px solid #0C6D38;width: 100%;background: var(--bs-success);"><i
                            class="icon ion-checkmark-round me-1" style="color: var(--bs-gray-100);"></i><span
                            style="color: var(--bs-white);">OTP validated successfully<br></span></div>
                    <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center input-group"
                        style="width: 100%;margin-top: 25px;"><a class="btn btn-primary" role="button"
                            style="width: 50%;border-radius: 20px;" href="/">OK</a></div>
                </form>
            </div>
        </div>

    @endsection
