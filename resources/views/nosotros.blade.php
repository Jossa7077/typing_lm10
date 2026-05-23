@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<!-- TÍTULO -->
<div class="text-center mb-5">

    <h1 class="fw-bold display-5 text-primary">
        Sobre Nosotros ⚽
    </h1>

    <p class="lead text-muted">
        En <strong>Typing Messi</strong> buscamos combinar el aprendizaje de mecanografía
        con la pasión por el fútbol y la historia de Lionel Messi.
    </p>

</div>

<!-- ALERTAS -->
@if(session('success'))
    <div class="alert alert-success shadow-sm border-0 rounded-4">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger shadow-sm border-0 rounded-4">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- SEPARADOR -->
<div class="text-center my-5">
    <h2 class="fw-bold text-dark">
        Formulario PQRS
    </h2>

    <p class="text-muted">
        Déjanos tus dudas, sugerencias o felicitaciones.
    </p>
</div>

<!-- FORMULARIO -->
<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

            <!-- HEADER CARD -->
            <div class="p-4 text-white"
                style="
                    background: linear-gradient(
                        135deg,
                        #1e3a8a,
                        #7e22ce
                    );
                ">

                <h3 class="fw-bold mb-1">
                    Contáctanos 📩
                </h3>

                <p class="mb-0">
                    Tu opinión es importante para nosotros.
                </p>

            </div>

            <!-- BODY -->
            <div class="card-body p-5 bg-white">

                <form action="{{ route('pqrs.store') }}" method="POST">

                    @csrf

                    <!-- NOMBRES -->
                    <div class="row">

                        <div class="col-md-6 mb-4">

                            <label class="form-label fw-semibold">
                                Nombres
                            </label>

                            <input
                                type="text"
                                name="nombres"
                                class="form-control rounded-4 shadow-sm"
                                placeholder="Ingresa tus nombres"
                                value="{{ old('nombres') }}"
                            >

                        </div>

                        <!-- APELLIDOS -->
                        <div class="col-md-6 mb-4">

                            <label class="form-label fw-semibold">
                                Apellidos
                            </label>

                            <input
                                type="text"
                                name="apellidos"
                                class="form-control rounded-4 shadow-sm"
                                placeholder="Ingresa tus apellidos"
                                value="{{ old('apellidos') }}"
                            >

                        </div>

                    </div>

                    <!-- CORREO -->
                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Correo Electrónico
                        </label>

                        <input
                            type="email"
                            name="correo"
                            class="form-control rounded-4 shadow-sm"
                            placeholder="ejemplo@gmail.com"
                            value="{{ old('correo') }}"
                        >

                    </div>

                    <!-- SELECT -->
                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Tipo de Solicitud
                        </label>

                        <select
                            name="tipo"
                            class="form-select rounded-4 shadow-sm"
                        >

                            <option value="">
                                Seleccione una opción
                            </option>

                            <option value="Queja">
                                Queja
                            </option>

                            <option value="Peticion">
                                Petición
                            </option>

                            <option value="Felicitacion">
                                Felicitación
                            </option>

                        </select>

                    </div>

                    <!-- MENSAJE -->
                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Mensaje
                        </label>

                        <textarea
                            name="mensaje"
                            rows="5"
                            class="form-control rounded-4 shadow-sm"
                            placeholder="Escribe tu mensaje aquí..."
                        >{{ old('mensaje') }}</textarea>

                    </div>

                    <!-- CHECKBOX -->
                    <div class="form-check mb-4">

                        <input
                            type="checkbox"
                            name="acepto"
                            class="form-check-input"
                            id="acepto"
                        >

                        <label
                            class="form-check-label"
                            for="acepto"
                        >

                            Acepto términos y condiciones

                        </label>

                    </div>

                    <!-- BOTÓN -->
                    <div class="d-grid">

                        <button
                            type="submit"
                            class="btn btn-lg text-white fw-bold rounded-4 shadow"
                            style="
                                background: linear-gradient(
                                    135deg,
                                    #2563eb,
                                    #7c3aed
                                );
                                border: none;
                            "
                        >

                            Enviar Solicitud ⚽

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection