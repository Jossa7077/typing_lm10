<nav class="navbar navbar-expand-lg navbar-dark shadow-lg sticky-top"
    style="
        background: linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a,
            #7e22ce
        );
        backdrop-filter: blur(10px);
    "
>

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold fs-3 d-flex align-items-center"
           href="{{ route('inicio') }}"
           style="
                letter-spacing: 1px;
                transition: 0.3s;
           "
        >
            ⚽ Typing Messi
        </a>


        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                id="menuToggle"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Abrir navegación">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENÚ -->
        <div class="navbar-collapse-custom" id="navbarNav">

            <!-- LINKS PRINCIPALES -->
            <ul class="navbar-nav mx-auto gap-lg-3">

                <!-- INICIO -->
                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>


                <!-- HISTORIA -->
                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('menu') }}">
                        Historia
                    </a>
                </li>


                <!-- NOSOTROS -->
                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>


                <!-- CONTACTO -->
                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>

            </ul>


            <!-- PARTE DERECHA -->
            <ul class="navbar-nav align-items-center">

                @auth

                    <!-- USUARIO -->
                    <li class="nav-item me-3">

                        <span
                            class="badge rounded-pill px-3 py-2 fs-6"
                            style="
                                background: rgba(255,255,255,0.15);
                                color: #00ffbf;
                                border: 1px solid rgba(255,255,255,0.2);
                            "
                        >
                            {{ Auth::user()->name }}
                        </span>

                    </li>


                    <!-- DASHBOARD -->
                    <li class="nav-item">

                        <a class="nav-link nav-hover"
                           href="{{ route('dashboard') }}">
                            Dashboard
                        </a>

                    </li>


                    <!-- PERFIL -->
                    <li class="nav-item">

                        <a class="nav-link nav-hover"
                           href="{{ route('profile.edit') }}">
                            Perfil
                        </a>

                    </li>


                    <!-- LOGOUT -->
                    <li class="nav-item ms-2">

                        <form method="POST"
                              action="{{ route('logout') }}">

                            @csrf

                            <button
                                type="submit"
                                class="btn btn-sm fw-bold px-3 rounded-pill"
                                style="
                                    background: linear-gradient(
                                        135deg,
                                        #ef4444,
                                        #dc2626
                                    );
                                    color: white;
                                    border: none;
                                    transition: 0.3s;
                                "
                            >
                                Logout
                            </button>

                        </form>

                    </li>

                @endauth


                @guest

                    <!-- LOGIN -->
                    <li class="nav-item">

                        <a class="btn btn-outline-light rounded-pill px-4 me-2"
                           href="{{ route('login') }}">

                            Login

                        </a>

                    </li>


                    <!-- REGISTER -->
                    <li class="nav-item">

                        <a class="btn rounded-pill px-4 fw-bold"
                           href="{{ route('register') }}"
                           style="
                                background: linear-gradient(
                                    135deg,
                                    #3b82f6,
                                    #7c3aed
                                );
                                color: white;
                                border: none;
                           "
                        >

                            Register

                        </a>

                    </li>

                @endguest

            </ul>

        </div>

    </div>

</nav>


<!-- ESTILOS -->
<style>

    /* =========================================
       ENLACES DEL NAVBAR
    ========================================== */

    .nav-hover {

        position: relative;

        transition: 0.3s;

        font-weight: 500;

    }


    /* EFECTO HOVER */

    .nav-hover:hover {

        color: #ffd700 !important;

        transform: translateY(-2px);

    }


    /* LÍNEA DEBAJO */

    .nav-hover::after {

        content: '';

        position: absolute;

        left: 0;

        bottom: 0;

        width: 0%;

        height: 2px;

        background: #ffd700;

        transition: 0.3s;

    }


    .nav-hover:hover::after {

        width: 100%;

    }


    /* =========================================
       EFECTO DEL LOGO
    ========================================== */

    .navbar-brand:hover {

        transform: scale(1.05);

        color: #ffd700 !important;

    }


    /* =========================================
       MENÚ PERSONALIZADO
    ========================================== */

    .navbar-collapse-custom {

        display: flex;

        align-items: center;

        flex: 1;

    }


    /* =========================================
       PANTALLAS PEQUEÑAS
       Menos de 992px
    ========================================== */

    @media (max-width: 991.98px) {

        .navbar-collapse-custom {

            display: none;

            width: 100%;

            flex-direction: column;

            align-items: stretch;

            padding-top: 15px;

        }


        /* MENÚ ABIERTO */

        .navbar-collapse-custom.menu-abierto {

            display: flex;

        }


        /* LISTAS */

        .navbar-collapse-custom .navbar-nav {

            width: 100%;

            margin-left: 0 !important;

            margin-right: 0 !important;

            align-items: stretch !important;

        }


        /* ELEMENTOS */

        .navbar-collapse-custom .nav-item {

            width: 100%;

            margin: 5px 0;

        }


        /* ENLACES */

        .navbar-collapse-custom .nav-link {

            display: block;

            padding: 10px 15px;

        }


        /* BOTONES LOGIN / REGISTER */

        .navbar-collapse-custom .btn {

            margin: 5px 0;

        }

    }


    /* =========================================
       PANTALLAS GRANDES
       992px o más
    ========================================== */

    @media (min-width: 992px) {

        .navbar-toggler {

            display: none;

        }


        .navbar-collapse-custom {

            display: flex !important;

        }

    }

</style>


<!-- JAVASCRIPT DEL MENÚ -->

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const boton = document.getElementById('menuToggle');

        const menu = document.getElementById('navbarNav');


        if (boton && menu) {

            boton.addEventListener('click', function () {

                menu.classList.toggle('menu-abierto');


                const abierto =
                    menu.classList.contains('menu-abierto');


                boton.setAttribute(
                    'aria-expanded',
                    abierto
                );

            });

        }

    });

</script>