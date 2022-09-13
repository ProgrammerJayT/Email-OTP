@extends('layout')

@section('title', 'OTP validated')

@section('content')

    <body class="d-sm-flex flex-column justify-content-sm-center">
        <div class="d-xl-flex flex-column align-items-xl-center">
            <div
                class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center">
                <img src="assets/img/Grades-pana.png" style="width: 30%;"></div>
            <div class="d-flex d-sm-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center"
                style="width: 100%;">
                <form class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center"
                    style="width: 40%;min-width: 70%;">
                    <div class="alert alert-success d-sm-flex flex-row align-items-sm-center alert-dismissible"
                        role="alert" id="save-sucess"
                        style="border: 1px solid #0C6D38;width: 100%;background: var(--bs-success);"><button type="button"
                            class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><i
                            class="icon ion-checkmark-round me-1" style="color: var(--bs-gray-100);"></i><span
                            style="color: var(--bs-white);">Intimação arquivada com sucesso<br></span></div>
                    <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center input-group"
                        style="width: 100%;margin-top: 25px;"><button class="btn btn-primary" type="submit"
                            style="width: 50%;border-radius: 20px;">OK</button></div>
                </form>
            </div>
        </div>

    @endsection
