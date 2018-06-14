<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home - Chrll</title>

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
            }
            .logo {
                text-align: center;
            }
            .logoline1 {
                font-size: 35px;
                font-family: 'Pacifico', cursive;
            }
            .logoline2, .logoline3, .logoline4 {
                font-family: monospace;
                font-size: 16px;
                margin-top: -15px;
            }
            .logoline4 {
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
            }
            nav ul li {
                padding: 30px;
                margin: 2px;
                margin-left: 6px;
                margin-right: 6px;
            }
            nav ul li a:hover {
                color: white;
                transition: 0.4s;
            }
            .overview {
                display: flex;
                width: 1080px;
            }
            .coverimage {
                height: 250px;
                margin: 20px;
                width: 250px;
                z-index: -1;
            }
            .covertext {
                color: #DCDCDC;
                font-family: sans-serif;
                font-size: 23px;
                margin-top: -148px;
                margin-bottom: 128px;
                visibility: hidden;
                text-align: center;
                z-index: 2;
            }
            .coverart a {
                text-decoration: none;
            }
            .coverart a .covertext:hover {
                color: #FFFFFF;
                transition: 0.4s;
            }
            .coverart:hover .coverimage {
                filter: brightness(50%);
                transition: 0.3s;
            }
            .coverart:hover .covertext {
                transition: 0.3s;
                visibility: visible;
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
            .divider {
                border-top-color: #454645;
                border-top-style: solid;
                border-top-width: 1px;
                margin: 0 auto;
                margin-bottom: 30px;
                margin-top: -10px;
                width: 960px;
            }
            h1 {
                font-size: 40px;
                font-weight: 200;
                letter-spacing: 0.5px;
                text-align: center;
                text-transform: uppercase;
            }
            h3 {
                color: #a2865e;
                font-family: sans-serif;
                font-weight: 100;
                letter-spacing: 2px;
                margin-bottom: 40px;
                margin-top: -10px;
                text-align: center;
                text-transform: uppercase;
            }
            h4 {
                font-weight: 100;
                text-align: center;
            }
            .buybtn {
                color: #a2865e;
                display: flex;
                font-family: sans-serif;
                font-weight: 100;
                justify-content: center;
                letter-spacing: 2.4px;
                margin-bottom: 40px;
                margin-top: 40px;
                text-decoration: none;
                text-transform: uppercase;
            }
            .buybtn:hover {
                color: #111111;
                transition: 0.3s;
            }
            .widecoverimage {
                height: 1080px;
                width: 1080px;
            }
            .contactblock {
                display: flex;
                justify-content: center;
                height: 200px;
                margin-bottom: 40px;
                margin-top: 40px;
                width: 1080px;
            }
            .contactphoto {
                height: 200px;
                width: 600px;
            }
            .contactinfo {
                color: #a2865e;
                font-family: sans-serif;
                font-weight: 100;
                letter-spacing: 2px;
                margin-left: 30px;
                margin-top: 20px;
                text-transform: uppercase;
            }
            form {
                display: grid;
            }
            form label {
                color: #a2865e;
                font-family: sans-serif;
                font-weight: 100;
                letter-spacing: 2.4px;
                margin-bottom: 1px;
                margin-top: 18px;
                text-transform: uppercase;
            }
            form input {
                border-style: none;
                border-bottom-color: black;
                border-bottom-style: solid;
                border-bottom-width: 1px;
                padding: 5px;
            }
            .submitbtn {
                border-style: none;
                margin-left: 3px;
                margin-top: 20px;
                width: 100px;
            }
            .submitbtn:hover {
                background-color: #000;
                box-shadow: 1px 1px 3.3px #888;
                color: #fefefe;
                cursor: pointer;
                transition: 0.3s;
            }
            @media screen and (min-width: 375px) and (max-width: 667px) and (orientation: portrait) {
                html {
                    width: 100%;
                }
                nav {
                    width: 100%;
                }
                nav ul {
                    display: block;
                    padding: 0px;
                    text-align: center;
                }
                nav ul li {
                    padding: 0px;
                    margin-bottom: 8px;
                    margin-top: 8px;
                }
                .overview {
                    display: grid;
                    margin-left: 12%;
                    width: 100%;
                }
                .coverimage {
                    height: auto;
                    margin: 10px;
                    width: 70%;
                    z-index: -1;
                }
                .covertext {
                    color: #DCDCDC;
                    font-family: sans-serif;
                    font-size: 23px;
                    margin-left: -25%;
                    margin-top: -148px;
                    margin-bottom: 128px;
                    visibility: hidden;
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
                .divider {
                    margin-top: 30px;
                    width: 100%;
                }
                .contactblock {
                    display: block;
                    width: 100%;
                }
                .contactphoto {
                    width: 100%;
                }
                .contactinfo{
                    display: none;
                }
            }
        </style>
    </head>
    <body>
    <div class="logo">
        <a href="index.php">
            <p class="logoline1">Chrll.</p>
            <p class="logoline2">reviewing music</p>
            <p class="logoline3">and testing</p>
            <p class="logoline4">SINCE 2018</p>
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="testing.php">ALBUMS</a></li>
            <li><a href="testing.php">ARTIESTEN</a></li>
            <li><a href="testing.php">HITLIJST</a></li>
            <li><a href="testing.php">CONTACT</a></li>
            <li><a href="testing.php">INLOGGEN</a></li>
        </ul>
    </nav>
    <div class="overview">
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
    </div>
    <div class="overview">
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
        <div class="coverart">
            <a href="album.php">
                <img class="coverimage" src="foto.jpg">
                <p class="covertext">An album</p>
            </a>
        </div>
    </div>
    <footer>
        <ul class="leftsidefooter">
            <li>© 2018 Chrll.</li>
            <li class="withdivider">Gemaakt door Giorgio, Ruchir en Sager.</li>
        </ul>
        <ul class="rightsidefooter">
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.twitter.com/">Twitter</a></li>
            <li><a href="https://www.instagram.com/">Instagram</a></li>
        </ul>
    </footer>
    </body>
</html>
