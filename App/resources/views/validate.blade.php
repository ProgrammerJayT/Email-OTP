@extends('layout')

@section('content')
    <div class="d-xl-flex flex-column align-items-xl-center">
        <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center">
            <img src={{ asset('assets/img/Enter%20OTP-amico.png') }} style="width: 30%;">
        </div>
        <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center"
            style="width: 100%;">
            <form class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center"
                style="width: 40%;min-width: 70%;">
                <div class="alert alert-success d-sm-flex flex-row align-items-sm-center alert-dismissible" role="alert"
                    id="save-sucess" style="background-color: #B4F7D2!important;border: 1px solid #0C6D38;width: 100%;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><i
                        class="icon ion-checkmark-round me-1" style="color: var(--bs-danger);"></i><span
                        style="color: var(--bs-danger);">Intimação arquivada com sucesso<br></span>
                </div>
                <div class="alert alert-danger d-sm-flex flex-row align-items-sm-center alert-dismissible" role="alert"
                    id="save-sucess-1" style="border: 1px solid #0C6D38;width: 100%;background: var(--bs-danger);"><button
                        type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><i
                        class="icon ion-checkmark-round me-1" style="color: var(--bs-alert-bg);"></i><span
                        style="color: var(--bs-white);">Intimação arquivada com sucesso<br></span></div>
                <p style="width: 100%;color: var(--bs-primary);font-weight: bold;">Enter 6-digit OTP</p>
                <div class="input-group" style="width: 100%;">
                    <div class="input-group-prepend"><span class="input-group-text icon-container"><i
                                class="fa fa-key"></i></span></div><input class="form-control form-control" type="text"
                        placeholder="OTP" name="otp" inputmode="numeric" required="">
                </div>
                <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center input-group"
                    style="width: 100%;margin-top: 25px;"><button class="btn btn-primary" type="submit"
                        style="width: 50%;border-radius: 20px;">Submit</button></div>
                <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center input-group"
                    style="width: 100%;margin-top: 25px;"><a href="#">Didn't get the OTP? Resend OTP</a></div>
            </form>
        </div>
    </div>
@endsection
