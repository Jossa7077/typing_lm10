<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Typing Messi') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ESTILOS -->
    <style>

        body{

            font-family: 'Figtree', sans-serif;

            background: linear-gradient(
                135deg,
                #eef2ff 0%,
                #dbeafe 40%,
                #ede9fe 100%
            );

            min-height: 100vh;

            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn{

            from{
                opacity:0;
                transform:translateY(15px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }

        }

        .login-card{

            background:white;

            border-radius:30px;

            overflow:hidden;

            box-shadow:0px 15px 40px rgba(0,0,0,0.15);

            transition:0.4s ease;

        }

        .login-card:hover{

            transform:translateY(-5px);

        }

        .logo-circle{

            width:120px;
            height:120px;

            border-radius:50%;

            background:linear-gradient(
                135deg,
                #004d98,
                #a50044
            );

            display:flex;

            justify-content:center;

            align-items:center;

            margin:auto;

            box-shadow:0px 10px 25px rgba(0,0,0,0.2);

            transition:0.4s ease;
        }

        .logo-circle:hover{

            transform:scale(1.05);

        }

        .logo-text{

            color:white;

            font-size:50px;
        }

        .main-container{

            min-height:100vh;

            display:flex;

            justify-content:center;

            align-items:center;

            padding:40px 15px;
        }

    </style>

</head>

<body>

    <div class="main-container">

        <div class="w-100" style="max-width:550px;">

            <!-- LOGO -->
            <div class="text-center mb-4">

                <a href="/">

                    <div class="logo-circle">

                        <span class="logo-text">
                            ⚽
                        </span>

                    </div>

                </a>

                <h1 class="fw-bold mt-4"
                    style="color:#004d98;">

                    Typing Messi

                </h1>

                <p class="text-muted">

                    Aprende mecanografía mientras conoces
                    la historia de Lionel Messi.

                </p>

            </div>

            <!-- CARD -->
            <div class="login-card p-4 p-md-5">

                {{ $slot }}

            </div>

        </div>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>