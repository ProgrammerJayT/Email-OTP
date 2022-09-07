<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/fonts/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/Icon-Input.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('assets/fonts/ionicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/alert.css') }}>

    @livewireStyles

</head>

<body>

    @yield('content')

    @livewireScripts
    <script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>
</body>

</html>
