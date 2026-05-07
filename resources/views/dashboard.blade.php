@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!-- HERO -->
<div class="container-fluid p-5 mb-5 rounded-4 shadow"
style="background: linear-gradient(135deg,#004d98,#a50044); color:white;">

    <div class="row align-items-center">

        <div class="col-md-8">
            <h1 class="display-4 fw-bold">
                Bienvenido, {{ Auth::user()->name }} ⚽
            </h1>

            <p class="lead mt-3">
                Administra el sistema de <strong>Typing Messi</strong>,
                revisa los mensajes PQRS y continúa desarrollando
                la plataforma educativa inspirada en Lionel Messi.
            </p>

            <div class="mt-4">
                <a href="{{ route('mensajes') }}" class="btn btn-light btn-lg me-2">
                    Ver Mensajes
                </a>

                <a href="{{ route('profile.edit') }}" class="btn btn-outline-light btn-lg">
                    Editar Perfil
                </a>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <img 
                src="https://cdn-3.expansion.mx/dims4/default/b1f8b3a/2147483647/strip/true/crop/4500x2999+0+0/resize/1200x800!/format/webp/quality/80/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F71%2F8e%2Ff4d81c40474fa368b88a3f722da5%2Fgettyimages-672035686.jpg"
                class="img-fluid rounded shadow-lg"
                style="max-height:300px; object-fit:cover;"
            >
        </div>

    </div>
</div>

<!-- TARJETAS -->
<div class="row g-4">

    <!-- Usuarios -->
    <div class="col-md-4">
        <div class="card border-0 shadow h-100">

            <div class="card-body text-center">

                <div class="mb-3">
                    <i class="bi bi-person-circle" style="font-size:60px; color:#004d98;"></i>
                </div>

                <h3 class="fw-bold">Perfil</h3>

                <p class="text-muted">
                    Administra tu información personal y datos de acceso.
                </p>

                <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                    Ir al Perfil
                </a>

            </div>
        </div>
    </div>

    <!-- Mensajes -->
    <div class="col-md-4">
        <div class="card border-0 shadow h-100">

            <div class="card-body text-center">

                <div class="mb-3">
                    <i class="bi bi-chat-dots-fill" style="font-size:60px; color:#a50044;"></i>
                </div>

                <h3 class="fw-bold">Mensajes PQRS</h3>

                <p class="text-muted">
                    Consulta, edita y administra los mensajes enviados por los usuarios.
                </p>

                <a href="{{ route('mensajes') }}" class="btn btn-danger">
                    Ver Mensajes
                </a>

            </div>
        </div>
    </div>

    <!-- Proyecto -->
    <div class="col-md-4">
        <div class="card border-0 shadow h-100">

            <div class="card-body text-center">

                <div class="mb-3">
                    <i class="bi bi-keyboard-fill" style="font-size:60px; color:#198754;"></i>
                </div>

                <h3 class="fw-bold">Typing Messi</h3>

                <p class="text-muted">
                    Plataforma educativa para aprender mecanografía
                    mientras descubres la historia de Lionel Messi.
                </p>

                <a href="{{ route('inicio') }}" class="btn btn-success">
                    Ir al Inicio
                </a>

            </div>
        </div>
    </div>

</div>

<!-- SECCIÓN INFERIOR -->
<div class="row mt-5">

    <div class="col-md-6">

        <div class="card border-0 shadow">

            <div class="card-header bg-primary text-white">
                Estadísticas del Proyecto
            </div>

            <div class="card-body">

                <div class="mb-4">
                    <h5>Usuarios registrados</h5>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width: 10%">
                            10%
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5>Mensajes respondidos</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 15%">
                            15%
                        </div>
                    </div>
                </div>

                <div>
                    <h5>Avance del proyecto</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width: 85%">
                            85%
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card border-0 shadow">

            <div class="card-header bg-dark text-white">
                Frase Inspiradora
            </div>

            <div class="card-body text-center">

                <img 
                    src="https://static.messi.com/wp-content/uploads/2019/10/ronnie-messi.jpg"
                    class="img-fluid rounded mb-3"
                    style="max-height:300px; object-fit:cover;"
                >

                <blockquote class="blockquote">
                    <p>
                        “Tuve que luchar para llegar a donde estoy.”
                    </p>
                </blockquote>

                <footer class="blockquote-footer mt-2">
                    Lionel Messi
                </footer>

            </div>

        </div>

    </div>

</div>

<!-- FOOTER INFO -->
<div class="mt-5 p-4 rounded-4 shadow-sm text-center"
style="background:#f8f9fa;">

    <h4 class="fw-bold" style="color:#004d98;">
        Panel Administrativo - Typing Messi
    </h4>

    <p class="text-muted">
        Desde este panel puedes administrar el contenido,
        gestionar mensajes y continuar desarrollando
        la experiencia educativa del proyecto.
    </p>

</div>

@endsection