@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

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

<div class="row g-4">

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

<div class="row mt-5 g-4">

    <div class="col-md-6">

        <div class="card border-0 shadow h-100 rounded-4 overflow-hidden">

            <div class="card-header p-3 fw-bold text-white border-0" style="background: linear-gradient(135deg, #0f172a, #1e3a8a);">
                📊 Estadísticas del Proyecto
            </div>

            <div class="card-body p-4">

                <div class="mb-4">
                    <h6 class="fw-semibold text-secondary">Usuarios registrados</h6>
                    <div class="progress" style="height: 18px; border-radius: 10px;">
                        <div class="progress-bar bg-primary fw-bold" style="width: 10%">
                            10%
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="fw-semibold text-secondary">Mensajes respondidos</h6>
                    <div class="progress" style="height: 18px; border-radius: 10px;">
                        <div class="progress-bar bg-success fw-bold" style="width: 15%">
                            15%
                        </div>
                    </div>
                </div>

                <div>
                    <h6 class="fw-semibold text-secondary">Avance del proyecto</h6>
                    <div class="progress" style="height: 18px; border-radius: 10px;">
                        <div class="progress-bar bg-danger fw-bold" style="width: 100%">
                            100%
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card border-0 shadow h-100 rounded-4 overflow-hidden bg-light d-flex flex-column justify-content-between">
            
            <div class="p-3 bg-white text-center">
                <img 
                    src="https://static.messi.com/wp-content/uploads/2019/10/ronnie-messi.jpg"
                    class="img-fluid rounded-3 shadow-sm w-100"
                    style="max-height: 250px; object-fit: cover; object-position: center;"
                >
            </div>

            <div class="px-3 pb-3 pt-1">
                <div class="position-relative p-3 rounded-3 text-center border" 
                     style="background: linear-gradient(135deg, #f8fafc, #edf2f7); border-color: #e2e8f0 !important;">
                    
                    <span class="position-absolute" style="top: -5px; left: 15px; font-size: 4rem; font-family: 'Georgia', serif; color: rgba(0, 77, 152, 0.08); line-height: 1; pointer-events: none;">“</span>
                    
                    <p class="fs-5 fw-normal text-dark mb-1 italic-quote px-3" style="font-family: 'Georgia', serif; font-style: italic; color: #334155 !important; line-height: 1.5;">
                        Tuve que luchar para llegar a donde estoy.
                    </p>

                    <footer class="fw-bold text-muted text-uppercase tracking-wider mt-1" style="font-size: 0.75rem; letter-spacing: 1.5px; color: #004d98 !important;">
                        — Lionel Messi
                    </footer>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="mt-5 p-4 rounded-4 shadow-sm text-center"
style="background:#f8f9fa;">

    <h4 class="fw-bold" style="color:#004d98;">
        Panel Administrativo - Typing Messi
    </h4>

    <p class="text-muted mb-0">
        Desde este panel puedes administrar el contenido,
        gestionar mensajes y continuar desarrollando
        la experiencia educativa del proyecto.
    </p>

</div>

@endsection