<!doctype html>
<html lang="es">

<head>
<title>@yield('titulo')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">

<style>
    td.details-control {
    background: url("{{ asset('assets/images/details_open.png') }}") no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url("{{ asset('assets/images/details_close.png') }}") no-repeat center center;
    }
</style>

</head>

@yield('contenido')
@yield('scripts')
</body>
</html>
