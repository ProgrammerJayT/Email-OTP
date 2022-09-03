@extends('layout')

@section('title', 'Enter email')
@section('content')


    <div class="d-xl-flex flex-column align-items-xl-center">
        <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center">
            <img src="assets/img/Newsletter-bro.png" style="width: 30%;"></div>
        <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center"
            style="width: 100%;">
            <form method="POST" action="api/send" class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center"
                style="width: 40%;min-width: 70%;">
                <p style="width: 100%;color: var(--bs-primary);font-weight: bold;">Please enter your valid email address to
                    receive your OTP</p>
                <div class="input-group" style="width: 100%;">
                    <div class="input-group-prepend"><span class="input-group-text icon-container"><i
                                class="fa fa-envelope"></i></span></div><input class="form-control form-control"
                        type="text" placeholder="Email address" name="email" inputmode="email" required="">
                </div>
                <div class="alert alert-danger d-sm-flex flex-row align-items-sm-center alert-dismissible" role="alert"
                    id="save-sucess" style="border: 1px solid #0C6D38;width: 100%;background: var(--bs-danger);"><button
                        type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><i
                        class="icon ion-checkmark-round me-1" style="color: var(--bs-gray-100);"></i><span
                        style="color: var(--bs-white);">Intimação arquivada com sucesso<br></span></div>
                <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center input-group"
                    style="width: 100%;margin-top: 25px;"><button class="btn btn-primary" type="submit"
                        style="width: 50%;border-radius: 20px;">Submit</button></div>
            </form>
        </div>
    </div>

@endsection
