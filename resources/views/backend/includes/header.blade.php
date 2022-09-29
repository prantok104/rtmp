<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ $default_values->slogan }}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ $default_values->getFirstMediaUrl('favicon') }}" />
    {{-- Boostrap css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    {{-- Fontawesome css --}}
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- Toast css --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    {{-- Material datepicker css --}}
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/materialDateTimePicker.css') }}">
    {{-- Animate css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    {{-- Droify css --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">
    {{-- App css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    {{-- Utilities css --}}
    @stack('style')
</head>

<body>

    {{-- Preloader area start --}}
    <div class="bsuite-preload-area-start d-none">
        <div class="bsuite-preloader-icon">
            <lord-icon src="{{ asset('assets/icons/fly.json') }}" trigger="loop"
                colors="primary:#5271FF,secondary:#031C2D" style="width:220px;height:220px">
            </lord-icon>
        </div>
    </div>
    {{-- Preloader area end --}}
