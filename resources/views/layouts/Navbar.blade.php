<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        TELEFONO
                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-link">
                                SMARTPHONE
                            </a>
                            <div class="navbar-dropdown">
                                <a href="#" class="navbar-item">
                                    FLAGSHIP
                                </a>
                                <div class="navbar-dropdown">
                                    <a href="#" class="navbar-item">
                                        Galaxy Z
                                    </a>
                                    <a href="#" class="navbar-item">
                                        Galaxy S
                                    </a>
                                    <a href="#" class="navbar-item">
                                        Galaxy Note
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-dropdown">
                                <a href="#" class="navbar-item">
                                    NORMAL
                                </a>
                                <div class="navbar-dropdown">
                                    <a href="#" class="navbar-item">
                                        Galaxy A
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <a class="navbar-item">
                    Documentation
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">