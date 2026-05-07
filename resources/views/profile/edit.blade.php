@extends('layouts.app')

@section('title', 'Perfil')

@section('content')

<div class="container mt-5">

    <!-- TÍTULO -->
    <div class="text-center mb-5">

        <h1 class="fw-bold"
        style="color:#004d98;">

            Perfil de Usuario ⚽

        </h1>

        <p class="text-muted">
            Administra tu información personal y seguridad de la cuenta.
        </p>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <!-- INFORMACIÓN -->
            <div class="card shadow border-0 mb-4">

                <div class="card-header text-white"
                style="background:linear-gradient(135deg,#004d98,#a50044);">

                    <h4 class="mb-0">
                        Información del Perfil
                    </h4>

                </div>

                <div class="card-body">

                    @include('profile.partials.update-profile-information-form')

                </div>

            </div>

            <!-- CONTRASEÑA -->
            <div class="card shadow border-0 mb-4">

                <div class="card-header bg-dark text-white">

                    <h4 class="mb-0">
                        Cambiar Contraseña
                    </h4>

                </div>

                <div class="card-body">

                    @include('profile.partials.update-password-form')

                </div>

            </div>

            <!-- ELIMINAR CUENTA -->
            <div class="card shadow border-0">

                <div class="card-header bg-danger text-white">

                    <h4 class="mb-0">
                        Zona de Peligro
                    </h4>

                </div>

                <div class="card-body">

                    @include('profile.partials.delete-user-form')

                </div>

            </div>

        </div>

    </div>

</div>

@endsection