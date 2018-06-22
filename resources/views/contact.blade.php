<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact - Chrll</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!-- Styles -->
    <style>
        html {
            background-color: black;
            color: #8bfdfa;
            font-family: 'Roboto Slab', serif;
            font-weight: 200;
            margin: 0 auto;
            width: 1080px;
            animation-name: slideToPlaceforHTML;
            animation-duration: 1.6s;
        }
        .logo {
            text-align: center;
        }
        .textlogo {
            font-size: 35px;
            font-family: 'Pacifico', cursive;
        }
        .slogan {
            font-family: monospace;
            font-size: 16px;
            margin-top: -15px;
        }
        .endlogo {
            margin-top: 5px;
        }
        nav {
            width: 1080px;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }
        nav ul li a {
            color: #68c1be;
            text-decoration: none;
            padding: 4px;
        }
        nav ul li {
            padding: 30px;
            margin: 2px;
            margin-left: 6px;
            margin-right: 6px;
        }
        nav ul li a:hover {
            color: #5a6268;
            background-color: #68c1be;
            transition: 0.4s;
            border-radius: 4px;
        }
        .overview {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            width: 1080px;
        }
        .coverimage {
            height: 250px;
            margin: 12px;
            opacity: 1;
            border-radius: 1%;
            width: 250px;
            z-index: -1;
            animation-name: slideToPlaceforCoverArt;
            animation-duration: 1.6s;
        }
        @keyframes slideToPlaceforCoverArt {
            0% {margin-top: 100px;}
            100% {margin-top: 12px;}
        }
        @keyframes slideToPlaceforHTML {
            0% {margin-top: 100px;}
            100% {margin-top: 0px;}
        }
        .covertext {
            color: #FFF;
            font-family: sans-serif;
            font-size: 23px;
            margin-top: -148px;
            margin-bottom: 128px;
            opacity: 0;
            text-align: center;
            z-index: 2;
        }
        .coverart a {
            text-decoration: none;
        }
        .coverart a .covertext:hover {
            color: #FFF;
            transition: 0.4s;
        }
        .coverart:hover .covertext {
            transition: 0.3s;
            opacity: 0.8;
        }
        .coverart:hover .coverimage {
            opacity: 0.3;
            transition: 0.3s;
        }
        .logo a {
            color: inherit;
            text-decoration: none;
        }
        footer {
            margin-top: 30px;
            display: flex;
            width: 1080px;
        }
        footer .leftsidefooter {
            font-size: 15px;
            list-style: none;
            display: flex;
            justify-content: center;
        }
        footer .leftsidefooter li {
            margin-left: 10px;
        }
        .withdivider {
            border-left-color: #68c1be;
            border-left-style: solid;
            border-left-width: 1px;
            padding-left: 10px;
            margin-right: 275px;
        }
        footer .rightsidefooter {
            list-style: none;
            display: flex;
            justify-content: center;
        }
        footer .rightsidefooter li {
            color: #68c1be;
            margin-left: 10px;
            margin-right: 10px;
        }
        footer .rightsidefooter li a {
            color: #68c1be;
            text-decoration: none;
        }
        footer .rightsidefooter li a:hover {
            color: white;
            transition: 0.3s;
        }
        h1 {
            font-size: 40px;
            font-weight: 200;
            letter-spacing: 0.5px;
            text-align: center;
            text-transform: uppercase;
        }
        h4 {
            font-weight: 100;
            text-align: center;
        }
        form {
            display: grid;
        }
        form input {
            color: #68c1be;
            margin: 5px;
            margin-bottom: 15px;
            border-style: none;
            background-color: transparent;
            border-bottom-color: #8bfdfa;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            padding: 5px;
            font-family: 'Roboto Slab', serif;
        }
        .contact {
            display: flex;
            justify-content: center;
            height: 200px;
            margin-bottom: 40px;
            margin-top: 40px;
            width: 1080px;
        }
        .companyaddress {
            color: #8bfdfa;
            font-weight: 100;
            letter-spacing: 2px;
            margin-left: 30px;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .submitbtn {
            color: #68c1be;
            margin: 30px;
            text-decoration: underline;
            border-style: none;
            padding: 4px;
        }
        .submitbtn:hover {
            color: #5a6268;
            background-color: #68c1be;
            transition: 0.4s;
            border-radius: 4px;
        }
        @media screen and (min-width: 375px) and (max-width: 667px) and (orientation: portrait) {
            html {
                width: 100%;
            }
            nav {
                margin-top: -15px;
                padding-bottom: 15px;
                width: 100%;
            }
            .slogan {
                display: none;
            }
            nav ul {
                display: block;
                padding: 0px;
                text-align: center;
            }
            nav ul li {
                padding: 4px;
                margin-bottom: 14px;
                margin-top: 14px;
            }
            nav ul li a {
                padding: 4px;
                font-size: 20px;
                border-radius: 4px;
                background-color: #5a6268;
            }
            nav ul li a:hover {
                color: #5a6268;
                background-color: #68c1be;
                transition: 0.4s;
            }
            .overview {
                display: grid;
                margin-left: 7px;
                width: 100%;
                grid-template-columns: auto auto;
            }
            .coverart {
                height: auto;
                width: 280px;
            }
            .coverimage {
                height: auto;
                margin: 10px;
                width: 280px;
                z-index: -1;
            }
            .covertext {
                color: #DCDCDC;
                font-family: sans-serif;
                font-size: 23px;
                margin-left: 6%;
                margin-top: -148px;
                margin-bottom: 128px;
                opacity: 0;
                text-align: center;
                z-index: 2;
            }
            footer {
                margin-top: 30px;
                display: block;
                width: 100%;
            }
            footer .leftsidefooter {
                display: block;
                list-style: none;
                width: 92%;
                padding: 10px;
            }
            .withdivider {
                border-style: none;
                width: 100%;
            }
            footer .leftsidefooter li {
            }
            footer .rightsidefooter li {
                margin-left: 20px;
                margin-right: 20px;
            }
        }
    </style>
</head>
<body>
<div class="logo">
    <a href="{{ url('/') }}">
        <p class="textlogo">Chrll.</p>
        <p class="slogan">reviewing music</p>
        <p class="slogan">and testing</p>
        <p class="slogan endlogo">SINCE 2018</p>
    </a>
</div>
<nav>
    <ul>
        <li><a href="{{ url('/albums') }}">ALBUMS</a></li>
        <li><a href="{{ url('/artiesten') }}">ARTIESTEN</a></li>
        <li><a href="{{ url('/hitlijst') }}">HITLIJST</a></li>
        <li><a href="{{ url('/contact') }}">CONTACT</a></li>
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('INLOGGEN') }}</a></li>
        @else
            <li class="nav-item dropdown">

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('UITLOGGEN') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
<h1>Contact</h1>
<div class="contact">
    <div style="width: 600px"><iframe width="600" height="200" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Posthumalaan%20120%2C%20Rotterdam+(Chrll)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />
    <div class="companyaddress">
        <p>Chrll.</p>
        <p>Posthumalaan 120</p>
        <p>3072AG Rotterdam</p>
        <p>Nederland</p>
    </div>
</div>
<form>
    <label for="firstname">Voornaam:</label><input type="text">
    <label for="lastname">Achternaam:</label><input type="text">
    <label for="email">E-mailadres:</label><input type="email">
    <label for="message">Bericht:</label><input type="text">
    <input type="submit" value="Verstuur!" class="submitbtn">
</form>
<footer>
    <ul class="leftsidefooter">
        <li>© 2018 Chrll.</li>
        <li class="withdivider">Gemaakt door Giorgio, Ruchir en Sager.</li>
    </ul>
    <ul class="rightsidefooter">
        <li><a href="https://www.facebook.com/whatschrll">Facebook</a></li>
        <li><a href="https://www.twitter.com/whatschrll">Twitter</a></li>
        <li><a href="https://www.instagram.com/whatschrll">Instagram</a></li>
    </ul>
</footer>

</body>
</html>