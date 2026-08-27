@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- HERO PRINCIPAL -->
<div class="p-5 rounded-5 shadow-lg text-center text-white mb-5"
    style="
        background: linear-gradient(
            135deg,
            #a50044,
            #004d98
        );
    ">

    <h1 class="display-3 fw-bold">
        Typing Messi ⚽
    </h1>

    <p class="lead mt-4 fs-4">
        Aprende mecanografía mientras conoces la historia
        del mejor futbolista de todos los tiempos.
    </p>

    <a href="{{ route('menu') }}"
        class="btn btn-light btn-lg mt-3 fw-bold px-5 rounded-4 shadow">

        Comenzar Ahora ⌨️

    </a>

</div>

<!-- SECCIÓN PRINCIPAL -->
<div class="row align-items-center g-5 mb-5">

    <!-- TEXTO -->
    <div class="col-lg-6">

        <h2 class="fw-bold mb-4 text-primary">
            Lionel Messi 🐐
        </h2>

        <p class="fs-5 text-muted">
            Lionel Andrés Messi es considerado uno de los mejores
            futbolistas de todos los tiempos.
        </p>

        <p class="text-muted">
            Nació en Rosario, Argentina, y desde muy pequeño
            mostró un talento extraordinario para el fútbol.
        </p>

        <p class="text-muted">
            A lo largo de su carrera ganó múltiples Balones de Oro,
            Champions League, ligas nacionales y la histórica
            Copa Mundial de Qatar 2022.
        </p>

        <div class="mt-4">

            <div class="d-flex align-items-center mb-3">

                <div class="bg-primary rounded-circle me-3"
                    style="width:15px;height:15px;">
                </div>

                <span class="fw-semibold">
                    Campeón del Mundo 2022
                </span>

            </div>

            <div class="d-flex align-items-center mb-3">

                <div class="bg-danger rounded-circle me-3"
                    style="width:15px;height:15px;">
                </div>

                <span class="fw-semibold">
                    Múltiples Balones de Oro
                </span>

            </div>

            <div class="d-flex align-items-center">

                <div class="bg-success rounded-circle me-3"
                    style="width:15px;height:15px;">
                </div>

                <span class="fw-semibold">
                    Leyenda del FC Barcelona
                </span>

            </div>

        </div>

    </div>

    <!-- IMAGEN -->
    <div class="col-lg-6 text-center">

        <img
            class="img-fluid rounded-5 shadow-lg"
            style="max-height:450px; object-fit:cover;"
            src="https://preview.redd.it/laporta-confirms-leo-messi-will-have-a-statue-at-camp-nou-v0-8qh48hsgq21g1.jpeg?width=640&crop=smart&auto=webp&s=d055a9e7523b8657a0e31bb77a79040438c62dd8"
        >

    </div>

</div>

<!-- MOMENTOS -->
<div class="text-center mb-5">

    <h2 class="fw-bold text-danger">
        Momentos de la Carrera de Messi ⚽
    </h2>

    <p class="text-muted">
        Revive algunos de los momentos más importantes de su carrera.
    </p>

</div>

<div class="row g-4 mb-5">

    <!-- CARD 1 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden h-100">

            <img
                class="card-img-top"
                style="height:250px; object-fit:cover;"
                src="https://uh.gsstatic.es/deportes/mundial-qatar/2022/12/15/2207711/mundial-qatar-2022-francia-argentina-final-messi.jpg"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Mundial
                </h4>

                <p class="text-muted">
                    Messi representando a Argentina
                    en la Copa del Mundo.
                </p>

            </div>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden h-100">

            <img
                class="card-img-top"
                style="height:250px; object-fit:cover;"
                src="https://a57.foxsports.com/statics.foxsports.com/www.foxsports.com/content/uploads/2025/05/1294/728/messi1.jpg?ve=1&tl=1"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Talento
                </h4>

                <p class="text-muted">
                    Su increíble control de balón
                    marcó una era en el fútbol.
                </p>

            </div>

        </div>

    </div>

    <!-- CARD 3 -->
    <div class="col-md-4">

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden h-100">

            <img
                class="card-img-top"
                style="height:250px; object-fit:cover;"
                src="https://media.lacapital.com.ar/p/4efd7c80f9f38aac2afcbfa0b9132423/adjuntos/203/imagenes/100/289/0100289277/642x0/smart/liojpg.jpg"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Gloria
                </h4>

                <p class="text-muted">
                    Messi liderando a Argentina
                    hacia el título mundial.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- ESTADÍSTICAS -->
<div class="row text-center g-4 mb-5">

    <!-- CARD 1 -->
    <div class="col-md-3">

        <div class="card border-0 shadow-lg rounded-5 p-4 h-100">

            <h1 class="display-4 fw-bold text-primary">
                8
            </h1>

            <h5 class="fw-bold">
                Balones de Oro
            </h5>

            <p class="text-muted">
                Récord histórico del fútbol mundial.
            </p>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="col-md-3">

        <div class="card border-0 shadow-lg rounded-5 p-4 h-100">

            <h1 class="display-4 fw-bold text-danger">
                4
            </h1>

            <h5 class="fw-bold">
                Champions League
            </h5>

            <p class="text-muted">
                Títulos europeos con el FC Barcelona.
            </p>

        </div>

    </div>

    <!-- CARD 3 -->
    <div class="col-md-3">

        <div class="card border-0 shadow-lg rounded-5 p-4 h-100">

            <h1 class="display-4 fw-bold text-success">
                1
            </h1>

            <h5 class="fw-bold">
                Copa del Mundo
            </h5>

            <p class="text-muted">
                Campeón mundial en Qatar 2022.
            </p>

        </div>

    </div>

    <!-- CARD 4 -->
    <div class="col-md-3">

        <div class="card border-0 shadow-lg rounded-5 p-4 h-100">

            <h1 class="display-4 fw-bold text-warning">
                800+
            </h1>

            <h5 class="fw-bold">
                Goles
            </h5>

            <p class="text-muted">
                Uno de los máximos goleadores de la historia.
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
        “Nunca dejes de intentarlo.” ⚽
    </h2>

    <p class="fs-4">
        Lionel Messi es ejemplo de disciplina,
        constancia y superación.
    </p>

</div>

<!-- VIDEO -->
<div class="p-5 rounded-5 shadow-lg mb-5"
    style="
        background: linear-gradient(
            135deg,
            #75aadb,
            #ffffff,
            #75aadb
        );
    ">

    <h2 class="text-center fw-bold mb-3">
        Video de Lionel Messi 🎥
    </h2>

    <p class="text-center text-muted mb-4">
        Disfruta de un pequeño clip mostrando su talento.
    </p>

    <div class="d-flex justify-content-center">

        <video
            width="800"
            autoplay
            muted
            loop
            controls
            class="rounded-5 shadow-lg"
        >

            <source
                src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Messi._Barcelona_%28End_of_an_Era%29.webm"
                type="video/webm"
            >

        </video>

    </div>

</div>

<!-- OBJETIVO -->
<div class="p-5 rounded-5 shadow-lg bg-white text-center mb-5">

    <h2 class="fw-bold text-primary mb-4">
        Objetivo del Proyecto 🎯
    </h2>

    <p class="fs-5 text-muted">
        Typing Messi busca mejorar las habilidades de mecanografía
        de los estudiantes mientras exploran contenido educativo
        y entretenido relacionado con Lionel Messi.
    </p>

    <p class="text-muted">
        El proyecto combina tecnología, deporte y educación,
        creando una experiencia dinámica y motivadora.
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