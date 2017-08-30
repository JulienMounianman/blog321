<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlogStudio321</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('http://eskipaper.com/images/robot-wallpaper-5.jpg');
                background-repeat: no-repeat;
                background-size: cover;

                color: yellow;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: yellow;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .img{
                height: 100px;
                weight: 100px;
            }
            img:hover{
                background-color:black;

            }


        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md ">
                    Blog321
                    <img src="https://kevinfilteau.com/wp-content/uploads/2017/04/vidme.png" class="img"    alt="img">
                </div>

                <div class="links">
                    <a href="https://laravel-news.com">Home</a>
                    <a href="https://laravel.com/docs">Conexion</a>
                    <a href="https://laracasts.com">Inscription</a>
                    <a href="https://laravel-news.com">About</a>
                </div>
            </div>
        </div>
        <script src="http://bulma.io/vendor/clipboard-1.7.1.min.js"></script>
        <script src="http://bulma.io/lib/main.js"></script>
    </body>
</html>
