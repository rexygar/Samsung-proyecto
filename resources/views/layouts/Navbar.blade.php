{{-- 
    <style>
        nav ul {
            list-style: none;
            padding: 0;
        }
        
        nav li {
            line-height: 3rem;
            position: relative;
        }
        
        nav ul {
            position: absolute;
        }
        
        nav a {
            color: #ddd;
            display: block;
            padding: 0 2.5em;
            font-family: Arial;
            text-align: center;
            text-decoration: none;
            transition: 0.4s;
        }
        
        nav a:hover {
            background: #00549c;
        }
        
        /* PRIMER NIVEL */
        
        .menu {
            background: #2473b6;
            display: table;
            width: 100%;
        }
        
        .menu > li {
            float: left;
        }
        
        /* SEGUNDO NIVEL */
        
        nav li li {
            background: #2473b6;
            max-height: 0;
            overflow: hidden;
            width: 200px;
        }
        
        nav li:hover > ul > li {
            max-height: 500px;
            overflow: visible;
        }
        
        nav > ul > li > ul {
            top: 100%;
        }
        
        nav ul li ul li a {
            padding: 0px 1.5rem;
        }
        
        /* TERCER NIVEL */
        
        nav ul ul ul {
            left: 100%;
            top: 0;
        }
        
    </style>

    <nav class="text-center">
        <ul class="menu">
            <li><h4><strong>CATEGORIA</strong></h4></li>
            <li><a href="#">TELEFONO</a>
                <ul>
                    <li><a href="#">SMARTPHONE</a>
                        <ul>
                            <li><a href="#">FLAGSHIP</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/GALAXY Z') }}">Galaxy Z</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/GALAXY S') }}">Galaxy S</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('Categoria/SMARTPHONES/FLAGSHIP/GALAXY NOTE') }}">Galaxy Note</a>
                                    </li>   
                                </ul>
                            </li>
                            <li><a href="#">NORMAL</a>
                                <ul>
                                    <li><a href="{{ url('Categoria/SMARTPHONES/NORMAL/GALAXY A') }}">Galaxy A</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">TABLETS</a>
                <ul>
                    <li><a href="#">TAB</a>
                        <ul>
                            <li><a href="{{ url('Categoria/TAB/GALAXY TAB A') }}">Galaxy Tab A</a></li>
                            <li><a href="{{ url('Categoria/TAB/GALAXY TAB S') }}">Galaxy Tab S</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">WEARABLES</a>
                <ul>
                    <li><a href="#">EARABLES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/EARABLES/BUD') }}">BUD</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SMARTWATCH</a>
                        <ul>
                            <li><a href="{{ url('Categoria/SMARTWATCH/WATCH') }}">Watch</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SPORTBAND</a>
                        <ul>
                            <li><a href="{{ url('Categoria/SPORTBAND/FIT') }}">Fit</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">ACCESORIOS</a>
                <ul>
                    <li><a href="#">AUDIFONOS</a>
                        <ul>
                            <li><a href="{{ url('Categoria/AUDIFONOS/ON EAR') }}">On ear</a></li>
                            <li><a href="{{ url('Categoria/AUDIFONOS/IN EAR') }}">in ear</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PARLANTES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/PARLANTES/MINI') }}">Mini</a></li>
                            <li><a href="{{ url('Categoria/PARLANTES/BAR') }}">Bar</a></li>
                            <li><a href="{{ url('Categoria/PARLANTES/OUTDOOR') }}">Outdoor</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CABLES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/CABLES/TIPO C') }}">Tipo C</a></li>
                            <li><a href="{{ url('Categoria/CABLES/3IN1') }}">3IN1</a></li>
                            <li><a href="{{ url('Categoria/CABLES/2IN1') }}">2IN1</a></li>
                            <li><a href="{{ url('Categoria/CABLES/HUB') }}">HUB</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CASES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/CASES/NOTE 20') }}">NOTE 20</a></li>
                            <li><a href="{{ url('Categoria/CASES/S20') }}">S20</a></li>
                            <li><a href="{{ url('Categoria/CASES/TAB') }}">TAB</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CHARGER</a>
                        <ul>
                            <li><a href="{{ url('Categoria/CHARGER/CAR') }}">CAR</a></li>
                            <li><a href="{{ url('Categoria/CHARGER/WIRELESS') }}">WIRELESS</a></li>
                            <li><a href="{{ url('Categoria/CHARGER/WALL') }}">WALL</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PEN</a>
                        <ul>
                            <li><a href="{{ url('Categoria/PEN/NOTE') }}">NOTE</a></li>
                            <li><a href="{{ url('Categoria/PEN/TAB') }}">TAB</a></li>
                        </ul>
                    </li>
                    <li><a href="#">POWERBANK</a>
                        <ul>
                            <li><a href="{{ url('Categoria/POWERBANK/WIRELESS') }}">WIRELESS</a></li>
                            <li><a href="{{ url('Categoria/POWERBANK/WIRED') }}">WIRED</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PROTECTION</a>
                        <ul>
                            <li><a href="{{ url('Categoria/PROTECTION/GLASS OVER') }}">GLASS COVER</a></li>
                            <li><a href="{{ url('Categoria/PROTECTION/SANITIZER') }}">SANITIZER</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SELFIE STICK</a>
                        <ul>
                            <li><a href="{{ url('Categoria/SELFIE STICK/SELFIE STICK') }}">SELFIE STICK</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SOPORTE</a>
                        <ul>
                            <li><a href="{{ url('Categoria/SOPORTE/CAR') }}">CAR</a></li>
                            <li><a href="{{ url('Categoria/SOPORTE/MOTORCYCLE') }}">MOTORCYCLE</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">COMPUTADORES</a>
                <ul>
                    <li><a href="#">DESKTOP</a>
                        <ul>
                            <li><a href="{{ url('Categoria/DESKTOP/ALL IN ONE') }}">ALL IN ONE</a></li>
                            <li><a href="{{ url('Categoria/DESKTOP/DESKTOP') }}">DESKTOP</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PORTABLES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/AUDIFONOS/ON EAR') }}">GAMING</a></li>
                            <li><a href="{{ url('Categoria/PORTABLES/ULTRABOOK') }}">ULTRABOOK</a></li>
                        </ul>
                    </li>
                    <li><a href="#">MONITORES</a>
                        <ul>
                            <li><a href="{{ url('Categoria/MONITORES/GAMING') }}">GAMING</a></li>
                            <li><a href="{{ url('Categoria/MONITORES/OFFICE') }}">OFFICE</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">CONSOLAS Y JUEGOS</a>
                <ul>
                    <li><a href="{{ url('Categoria/CONSOLAS Y JUEGOS/CONSOLAS') }}">CONSOLAS</a></li>
                    <li><a href="{{ url('Categoria/CONSOLAS Y JUEGOS/JUEGOS') }}">JUEGOS</a></li>
                </ul>
            </li>
        </ul>
    </nav> --}}