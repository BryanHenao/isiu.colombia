<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('image/isiu.png') }}">
        <title>ISIU COLOMBIA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>

    <body class="fondo">

         <nav class="navbar ">

            <a class="navbar-brand" href="/">
                <img src="{{asset('../image/isiu.png')}}" width="70" height="50" alt="">
            </a>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">ISIU-Colombia</a>
                    @else
                        <a href="#">CONTACTO</a>
                        <a href="{{ route('login') }}">INICIAR SESION</a>
                        <a href="{{ route('login') }}">INICIAR SESION</a>

<!--                         @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif


        </nav>

        <div class="flex-center position-ref full-height ">

            @yield('content')

        </div>

    </body>
    
</html>
