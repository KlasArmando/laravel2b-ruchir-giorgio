<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$album->title}} van {{$album->artist}} - Chrll</title>

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
        @keyframes slideToPlaceforHTML {
            0% {margin-top: 100px;}
            100% {margin-top: 0px;}
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
            border-style: none;
            border-bottom-color: black;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            padding: 5px;
        }
        #coverimage {
            margin-left: 75px;
            width: 300px;
            height: auto;
        }
        .row {
            width: 100%;
            display: grid;
            grid-template-columns: auto auto;
        }
        #album_name, #artist_name {
            margin-left: 75px;
            width: 100%;
        }
        #album_name {
            font-size: 18px;
            font-weight: bold;
        }
        #artist_name {
            font-style: italic;
        }
        .grid1 {
            width: 10%;
        }
        .grid2 {
            width: 20%;
        }
        .grid3 {
            width: 30%;
        }
        .grid4 {
            width: 40%;
        }
        .grid5 {
            width: 50%;
        }
        .grid6 {
            width: 60%;
        }
        .grid7 {
            width: 70%;
        }
        .grid8 {
            width: 80%;
        }
        .grid9 {
            width: 90%;
        }
        .grid10 {
            width: 100%;
        }
        #album_description_text {
            width: 70%;
            margin: 0 auto;
            padding-bottom: 20px;
            padding-top: 20px;
        }
        #album_description_wrapper {
            border-style: solid;
            margin-bottom: 50px;
            margin-top: 50px;
        }
        .meter {
            display: flex;
            width: 500px;
        }
        .meter-score-bar-1,
        .meter-score-bar-2,
        .meter-score-bar-3,
        .meter-score-bar-4,
        .meter-score-bar-5 {
            background: #222;
            border-radius: 2px;
            height: 20px;
            margin-left: 2.5px;
            margin-right: 2.5px;
        }

        .meter-score-1 .meter-score-bar-1,
        .meter-score-2 .meter-score-bar-1,
        .meter-score-2 .meter-score-bar-2,
        .meter-score-3 .meter-score-bar-1,
        .meter-score-3 .meter-score-bar-2,
        .meter-score-3 .meter-score-bar-3,
        .meter-score-4 .meter-score-bar-1,
        .meter-score-4 .meter-score-bar-2,
        .meter-score-4 .meter-score-bar-3,
        .meter-score-4 .meter-score-bar-4,
        .meter-score-5 .meter-score-bar-1,
        .meter-score-5 .meter-score-bar-2,
        .meter-score-5 .meter-score-bar-3,
        .meter-score-5 .meter-score-bar-4,
        .meter-score-5 .meter-score-bar-5 {
            animation-name: animateColoredMeters;
            animation-duration: 3.6s;
            background: #8bfdfa;
        }
        @keyframes animateColoredMeters {
             0% {background-color: #222;}
             100% {background-color: #8bfdfa;}
         }
        .meter-score-bar-1 {
            width: 20%;
        }
        .meter-score-bar-2 {
            width: 20%;
        }
        .meter-score-bar-3 {
            width: 20%;
        }
        .meter-score-bar-4 {
            width: 20%;
        }
        .meter-score-bar-5 {
            width: 20%;
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
<div id="container">
    <div class="row">
    <div class="grid3">
        <img id="coverimage" src="{{$album->album_art}}">
        <p id="album_name">{{$album->title}}</p>
        <p id="artist_name">van {{$album->artist}}</p>
    </div>
    <div class="grid7">
        <p>Populariteit</p>
        <div class="meter meter-score-{{$album->popularity}}">
            <div class="meter-score-bar-1"></div>
            <div class="meter-score-bar-2"></div>
            <div class="meter-score-bar-3"></div>
            <div class="meter-score-bar-4"></div>
            <div class="meter-score-bar-5"></div>
        </div>
        <p>Woordenschat</p>
        <div class="meter meter-score-{{$album->vocabulary}}">
            <div class="meter-score-bar-1"></div>
            <div class="meter-score-bar-2"></div>
            <div class="meter-score-bar-3"></div>
            <div class="meter-score-bar-4"></div>
            <div class="meter-score-bar-5"></div>
        </div>
        <p>Rhymes</p>
        <div class="meter meter-score-{{$album->rhymes}}">
            <div class="meter-score-bar-1"></div>
            <div class="meter-score-bar-2"></div>
            <div class="meter-score-bar-3"></div>
            <div class="meter-score-bar-4"></div>
            <div class="meter-score-bar-5"></div>
        </div>
        <p>Vergelijkingen</p>
        <div class="meter meter-score-{{$album->similes}}">
            <div class="meter-score-bar-1"></div>
            <div class="meter-score-bar-2"></div>
            <div class="meter-score-bar-3"></div>
            <div class="meter-score-bar-4"></div>
            <div class="meter-score-bar-5"></div>
        </div>
        <p>Obsceniteit</p>
        <div class="meter meter-score-{{$album->profanity}}">
            <div class="meter-score-bar-1"></div>
            <div class="meter-score-bar-2"></div>
            <div class="meter-score-bar-3"></div>
            <div class="meter-score-bar-4"></div>
            <div class="meter-score-bar-5"></div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="grid10" id="album_description_wrapper">
            <p id="album_description_text">{{$album->description}}</p>
        </div>
    </div>
</div>
@guest
    <span></span>
@else
    <nav>
        <ul>
            <li><a href="{{ url('editAlbum/'.$album->id)."/edit"  }}">edit</a></li>
            <li><a href="{{ url('/deleteAlbum') }}">delete</a></li>
        </ul>
    </nav>
@endguest
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
