<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Juan.py')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f1f1f1;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
            .nav > a {
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container{
                background-color: #253654;
                border-radius: 2px;
            }
        </style>
    </head>
    <!-- vw para texto responsive-->
    <body class="p-2">
        <div class="container pt-4 pl-5 pr-5 h-100">
            <div class="row pb-5">
                <div class="nav col-7">
                    <!--
                        Source del logo
                    -->
                    <img src="">
                </div>
                <nav class="nav col-5">
                    <a class="nav-link text-light" href="#">Inicio</a>
                    <a class="nav-link text-light" href="#">Proyectos</a>
                    <a class="nav-link text-light" href="#">Sobre mi</a>
                </nav>
            </div>
            @yield('seccion')            
        </div>
        <footer>
            
        </footer>
    </body>
</html>