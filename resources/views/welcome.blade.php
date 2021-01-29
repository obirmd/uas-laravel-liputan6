<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favico.png" type="image/gif" sizes="16x16">
        <title>Berita Terkini, Kabar Terbaru Hari Ini Indonesia dan Dunia - Liputan6.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            /* .full-height {
                height: 7vh;
            } */

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
                right: 115px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            

            .links > a {
                color: #636b6f;
                /* padding: 0 25px; */
                font-size: 13px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><button type="button" class="btn btn-danger btn-sm">Dashboard</button></a>
                    @else
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-danger btn-sm">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-danger btn-sm">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif -->

            @extends ('layouts/main')
            @section ('show')

            @include ('layouts.navigasi')

            @include ('layouts.konten')

            @include ('layouts.footer')

            @endsection
            </div>
        </div>
    </body>
</html>
