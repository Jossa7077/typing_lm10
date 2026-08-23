<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    >


    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- ESTILOS -->
    <style>

        /* =========================================
           ANIMACIÓN GENERAL
        ========================================== */

        body {

            animation: fadeIn 1s ease-in;

            background: linear-gradient(
                135deg,
                #eef2ff 0%,
                #dbeafe 40%,
                #ede9fe 100%
            );

            background-size: 300% 300%;

            animation:
                fadeIn 1s ease-in,
                waterFlow 12s ease infinite;

            min-height: 100vh;

            overflow-x: hidden;

            position: relative;
        }


        /* =========================================
           EFECTO AGUA / CASCADA
        ========================================== */

        body::before {

            content: '';

            position: fixed;

            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(255,255,255,0.20),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 80% 30%,
                    rgba(255,255,255,0.15),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 50% 80%,
                    rgba(255,255,255,0.18),
                    transparent 28%
                );

            animation: floatingWater 14s ease-in-out infinite;

            pointer-events: none;

            z-index: 0;
        }


        /* =========================================
           MOVIMIENTO DEL FONDO
        ========================================== */

        @keyframes waterFlow {

            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }

        }


        /* =========================================
           MOVIMIENTO DE BURBUJAS / LUCES
        ========================================== */

        @keyframes floatingWater {

            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-25px);
            }

            100% {
                transform: translateY(0px);
            }

        }


        /* =========================================
           ENTRADA SUAVE
        ========================================== */

        @keyframes fadeIn {

            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =========================================
           TODO ENCIMA DEL FONDO
        ========================================== */

        main,
        nav,
        footer,
        header {

            position: relative;

            z-index: 2;
        }


        /* =========================================
           EFECTO TARJETAS
        ========================================== */

        .card {

            transition: 0.4s ease;

        }

        .card:hover {

            transform: translateY(-10px);

            box-shadow:
                0px 15px 30px rgba(0,0,0,0.2) !important;

        }


        /* =========================================
           EFECTO IMÁGENES
        ========================================== */

        img {

            transition: 0.4s ease;

        }

        img:hover {

            transform: scale(1.03);

        }


        /* =========================================
           BOTONES
        ========================================== */

        .btn {

            transition: 0.3s ease;

        }

        .btn:hover {

            transform: scale(1.05);

        }


        /* =========================================
           VIDEO
        ========================================== */

        video {

            transition: 0.4s ease;

        }

        video:hover {

            transform: scale(1.02);

        }


        /* =========================================
           NAVBAR
        ========================================== */

        .navbar {

            backdrop-filter: blur(10px);

        }


        /* =========================================
           CONTENIDO PRINCIPAL
        ========================================== */

        main {

            background: rgba(255,255,255,0.90);

            backdrop-filter: blur(10px);

        }

    </style>

</head>


<body>


    <!-- NAVBAR -->

    @include('layouts.navigation')


    <!-- HEADER -->

    @isset($header)

        <header class="bg-white shadow-sm">

            <div class="container py-3">

                {{ $header }}

            </div>

        </header>

    @endisset


    <!-- CONTENIDO -->

    <main
        class="container mt-4 p-4 rounded-5 shadow-lg"
    >

        @yield('content')

    </main>


    <!-- FOOTER -->

    <footer class="text-center mt-5 mb-3 text-muted">

        <small>
            © {{ date('Y') }} - Typing Messi ⚽
        </small>

    </footer>


</body>

</html>