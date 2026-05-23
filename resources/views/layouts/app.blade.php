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
    />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- ANIMACIONES -->
    <style>

        /* ANIMACIÓN GENERAL */

        body{

            animation: fadeIn 1s ease-in;

            background: linear-gradient(
                135deg,
                #eef2ff 0%,
                #dbeafe 40%,
                #ede9fe 100%
            );

            min-height: 100vh;
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

        /* EFECTO TARJETAS */

        .card{

            transition: 0.4s ease;

        }

        .card:hover{

            transform: translateY(-10px);

            box-shadow: 0px 15px 30px rgba(0,0,0,0.2) !important;

        }

        /* EFECTO IMÁGENES */

        img{

            transition: 0.4s ease;

        }

        img:hover{

            transform: scale(1.03);

        }

        /* BOTONES */

        .btn{

            transition: 0.3s ease;

        }

        .btn:hover{

            transform: scale(1.05);

        }

        /* VIDEO */

        video{

            transition: 0.4s ease;

        }

        video:hover{

            transform: scale(1.02);

        }

        /* NAVBAR */

        .navbar{

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
        style="
            background: rgba(255,255,255,0.90);
            backdrop-filter: blur(10px);
        "
    >

        @yield('content')

    </main>

    <!-- FOOTER -->
    <footer class="text-center mt-5 mb-3 text-muted">

        <small>
            © {{ date('Y') }} - Typing Messi ⚽
        </small>

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>