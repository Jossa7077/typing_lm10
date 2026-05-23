@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<!-- HERO -->
<div class="p-5 rounded-5 shadow-lg text-center text-white mb-5"
    style="
        background: linear-gradient(
            135deg,
            #004d98,
            #7c3aed
        );
    ">

    <h1 class="display-4 fw-bold">
        Contacto 📩
    </h1>

    <p class="lead mt-3">
        Estamos disponibles para resolver tus dudas,
        escuchar tus sugerencias y mejorar tu experiencia en Typing Messi.
    </p>

</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="row align-items-center g-5 mb-5">

    <!-- IMAGEN -->
    <div class="col-lg-6 text-center">

        <img
            class="img-fluid rounded-5 shadow-lg"
            style="max-height:500px; object-fit:cover;"
            src="https://images.unsplash.com/photo-1671016233730-44258a88eb03?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG1lc3NpfGVufDB8fDB8fHww"
        >

    </div>

    <!-- INFORMACIÓN -->
    <div class="col-lg-6">

        <div class="card border-0 shadow-lg rounded-5 p-5">

            <h2 class="fw-bold text-primary mb-4">
                Información de Contacto
            </h2>

            <p class="text-muted fs-5">
                Si tienes preguntas, sugerencias o comentarios
                sobre el proyecto <strong>Typing Messi</strong>,
                puedes comunicarte con nosotros mediante
                nuestros canales oficiales.
            </p>

            <!-- CORREO -->
            <div class="d-flex align-items-center mt-4">

                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center me-3"
                    style="width:55px;height:55px;font-size:24px;">

                    📧

                </div>

                <div>

                    <h5 class="fw-bold mb-1">
                        Correo Electrónico
                    </h5>

                    <p class="text-muted mb-0">
                        contacto@typingmessi.com
                    </p>

                </div>

            </div>

            <!-- HORARIO -->
            <div class="d-flex align-items-center mt-4">

                <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center me-3"
                    style="width:55px;height:55px;font-size:24px;">

                    ⏰

                </div>

                <div>

                    <h5 class="fw-bold mb-1">
                        Horario de Atención
                    </h5>

                    <p class="text-muted mb-0">
                        Lunes a Viernes — 8:00 AM a 6:00 PM
                    </p>

                </div>

            </div>

            <!-- UBICACIÓN -->
            <div class="d-flex align-items-center mt-4">

                <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center me-3"
                    style="width:55px;height:55px;font-size:24px;">

                    📍

                </div>

                <div>

                    <h5 class="fw-bold mb-1">
                        Ubicación
                    </h5>

                    <p class="text-muted mb-0">
                        Pasto, Colombia
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- CARDS -->
<div class="row g-4 mb-5">

    <!-- CARD 1 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 p-4 text-center h-100">

            <div class="display-3 mb-3">
                ⚽
            </div>

            <h4 class="fw-bold text-primary">
                Proyecto Educativo
            </h4>

            <p class="text-muted">
                Typing Messi combina mecanografía,
                deporte y aprendizaje interactivo.
            </p>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 p-4 text-center h-100">

            <div class="display-3 mb-3">
                ⌨️
            </div>

            <h4 class="fw-bold text-primary">
                Práctica de Typing
            </h4>

            <p class="text-muted">
                Mejora tu velocidad y precisión
                mientras aprendes sobre Messi.
            </p>

        </div>

    </div>

    <!-- CARD 3 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 p-4 text-center h-100">

            <div class="display-3 mb-3">
                🌎
            </div>

            <h4 class="fw-bold text-primary">
                Comunidad
            </h4>

            <p class="text-muted">
                Queremos crear una experiencia
                divertida y motivadora para todos.
            </p>

        </div>

    </div>

</div>

<!-- FRASE -->
<div class="p-5 rounded-5 shadow-lg text-center text-white mb-5"
    style="
        background: linear-gradient(
            135deg,
            #2563eb,
            #7c3aed
        );
    ">

    <h2 class="fw-bold mb-4">
        “El esfuerzo siempre tiene recompensa.” 🐐
    </h2>

    <p class="fs-4">
        Gracias por formar parte de Typing Messi.
    </p>

</div>

<!-- FOOTER -->
<div class="text-center text-muted mt-5">

    <p>
        Proyecto académico desarrollado por
        <strong>
            Jaider Santiago Jossa Ramos -
            Sebastian Alexander Jimenez Santander
        </strong>
    </p>

</div>

@endsection