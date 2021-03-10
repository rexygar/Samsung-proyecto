<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="/img/logo_icon.png" type="image/x-icon"> <!-- Favicon-->
<title>@yield('title') - {{ config('app.name') }}</title>
<meta name="description" content="@yield('meta_description', config('app.name'))">
<meta name="author" content="@yield('meta_author', config('app.name'))">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@yield('meta')
@stack('before-styles')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">

    @yield('page-styles')
</head>

<body data-theme="light">
    
<div id="body" class="theme-cyan">

    <!-- Theme setting div -->
    @include('layouts_admin.themesetting')

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
        
        <!-- main page header -->
        @include('layouts_admin.navbar')
        <div class="grid grid-cols-12">
        <!-- project main left menubar -->
        @include('layouts_admin.sidebar')

        <!-- Rightbar chat  -->   

        <!-- sticky note rightbar div -->
        @yield('content')

        </div>        
    </div>

    @yield('popup')
    
</div>
@yield('vendor-script')

@yield('page-script')
</body>
</html>
