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
                letter-spacing:1px;
                transition:0.3s;
           "
        >

            ⚽ Typing Messi

        </a>

        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- LINKS -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- IZQUIERDA -->
            <ul class="navbar-nav mx-auto gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('menu') }}">
                        Historia
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-hover"
                       href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>

            </ul>

            <!-- DERECHA -->
            <ul class="navbar-nav align-items-center">

                @auth

                    <!-- Usuario -->
                    <li class="nav-item me-3">

                        <span
                            class="badge rounded-pill px-3 py-2 fs-6"
                            style="
                                background: rgba(255,255,255,0.15);
                                color: #00ffbf;
                                border:1px solid rgba(255,255,255,0.2);
                            "
                        >

                             {{ Auth::user()->name }}

                        </span>

                    </li>

                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link nav-hover"
                           href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <!-- Perfil -->
                    <li class="nav-item">
                        <a class="nav-link nav-hover"
                           href="{{ route('profile.edit') }}">
                            Perfil
                        </a>
                    </li>

                    <!-- Logout -->
                    <li class="nav-item ms-2">

                        <form method="POST"
                              action="{{ route('logout') }}">

                            @csrf

                            <button
                                class="btn btn-sm fw-bold px-3 rounded-pill"
                                style="
                                    background: linear-gradient(
                                        135deg,
                                        #ef4444,
                                        #dc2626
                                    );
                                    color:white;
                                    border:none;
                                    transition:0.3s;
                                "
                            >

                                Logout

                            </button>

                        </form>

                    </li>

                @endauth

                @guest

                    <!-- Login -->
                    <li class="nav-item">

                        <a class="btn btn-outline-light rounded-pill px-4 me-2"
                           href="{{ route('login') }}">

                            Login

                        </a>

                    </li>

                    <!-- Register -->
                    <li class="nav-item">

                        <a class="btn rounded-pill px-4 fw-bold"
                           href="{{ route('register') }}"
                           style="
                                background: linear-gradient(
                                    135deg,
                                    #3b82f6,
                                    #7c3aed
                                );
                                color:white;
                                border:none;
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

    .nav-hover{
        position: relative;
        transition: 0.3s;
        font-weight: 500;
    }

    .nav-hover:hover{
        color: #ffd700 !important;
        transform: translateY(-2px);
    }

    .nav-hover::after{
        content:'';
        position:absolute;
        left:0;
        bottom:0;
        width:0%;
        height:2px;
        background:#ffd700;
        transition:0.3s;
    }

    .nav-hover:hover::after{
        width:100%;
    }

    .navbar-brand:hover{
        transform: scale(1.05);
        color:#ffd700 !important;
    }

</style>