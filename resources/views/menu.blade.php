@extends('layouts.app')

@section('title','Historia')

@section('content')

<!-- HERO -->
<div class="text-center mb-5 p-5 rounded-5 shadow-lg text-white"
    style="
        background: linear-gradient(
            135deg,
            #1e3a8a,
            #7e22ce
        );
    ">

    <h1 class="display-4 fw-bold">
        Historia de Lionel Messi ⚽
    </h1>

    <p class="lead mt-3">
        Aprende mecanografía mientras conoces la historia del mejor futbolista de la Historia.
    </p>

</div>

<!-- TARJETAS -->
<div class="row g-4">

    <!-- INICIOS -->
    <div class="col-md-4">

        <div class="card h-100 border-0 shadow-lg rounded-5 overflow-hidden">

            <img
                class="card-img-top"
                style="height: 300px; object-fit: cover;"
                src="https://thumbs.dreamstime.com/b/lionel-messi-barcelona-de-enero-leo-ofreciendo-el-bal%C3%B3n-oro-la-fifa-los-aficionados-del-f%C3%BAtbol-club-en-estadio-nou-camp-22716478.jpg"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Inicios en Barcelona
                </h4>

                <p class="text-muted">
                    Messi llegó al FC Barcelona siendo muy joven tras dejar Argentina.
                    En La Masía comenzó a demostrar su talento extraordinario.
                </p>

            </div>

        </div>

    </div>

    <!-- ÉXITO -->
    <div class="col-md-4">

        <div class="card h-100 border-0 shadow-lg rounded-5 overflow-hidden">

            <img
                class="card-img-top"
                style="height: 300px; object-fit: cover;"
                src="https://i.pinimg.com/736x/e3/19/ea/e319eafad722a69454adf00e3d243a88.jpg"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Dominio en Europa
                </h4>

                <p class="text-muted">
                    Con el Barcelona ganó múltiples títulos:
                    Champions League, ligas españolas y varios Balones de Oro.
                </p>

            </div>

        </div>

    </div>

    <!-- MUNDIAL -->
    <div class="col-md-4">

        <div class="card h-100 border-0 shadow-lg rounded-5 overflow-hidden">

            <img
                class="card-img-top"
                style="height: 300px; object-fit: cover;"
                src="https://i.pinimg.com/736x/cd/6e/0e/cd6e0e0a5a5ef27603fb329d70d2f68b.jpg"
            >

            <div class="card-body text-center p-4">

                <h4 class="fw-bold text-primary">
                    Campeón del Mundo
                </h4>

                <p class="text-muted">
                    En Qatar 2022 Messi llevó a Argentina a la gloria
                    conquistando finalmente la Copa del Mundo.
                </p>

            </div>

        </div>

    </div>

</div>

<!-- FRASE -->
<div class="my-5 p-5 rounded-5 shadow text-center bg-white">

    <h2 class="fw-bold mb-4 text-dark">
        Frase Icónica 🐐
    </h2>

    <blockquote class="blockquote">

        <p class="fs-3 fst-italic text-primary">
            "De eso se trata la vida:
            de caerte, levantarte y volver a intentarlo."
        </p>

        <footer class="blockquote-footer mt-3">
            Lionel Messi
        </footer>

    </blockquote>

</div>

<!-- LECCIÓN -->
<div class="card border-0 shadow-lg rounded-5 overflow-hidden">

    <!-- HEADER -->
    <div class="p-4 text-white"
        style="
            background: linear-gradient(
                135deg,
                #2563eb,
                #7c3aed
            );
        ">

        <h2 class="fw-bold mb-1">
            Mini Lección de Mecanografía ⌨️
        </h2>

        <p class="mb-0">
            Escribe exactamente la frase para completar la lección.
        </p>

    </div>

    <!-- BODY -->
    <div class="card-body p-5 bg-white">

        <!-- FRASE -->
        <div class="mb-4">

            <label class="fw-bold mb-2">
                Texto a escribir:
            </label>

            <div
                id="textoObjetivo"
                class="p-3 rounded-4 bg-light border fs-5"
            >
                Lionel Messi ganó el Mundial de Qatar 2022 con Argentina.
            </div>

        </div>

        <!-- INPUT -->
        <div class="mb-4">

            <label class="fw-bold mb-2">
                Escribe aquí:
            </label>

            <textarea
                id="inputTexto"
                class="form-control rounded-4 shadow-sm"
                rows="5"
                placeholder="Empieza a escribir..."
            ></textarea>

        </div>

        <!-- CONTADOR -->
        <div class="row text-center mb-4">

            <div class="col-md-6">

                <div class="p-3 rounded-4 bg-light shadow-sm">

                    <h5 class="fw-bold text-primary">
                        Tiempo ⏱️
                    </h5>

                    <h2 id="contador">
                        0 s
                    </h2>

                </div>

            </div>

            <div class="col-md-6">

                <div class="p-3 rounded-4 bg-light shadow-sm">

                    <h5 class="fw-bold text-success">
                        Estado
                    </h5>

                    <h2 id="estado">
                        Esperando
                    </h2>

                </div>

            </div>

        </div>

        <!-- PROGRESS -->
        <div class="mb-4">

            <label class="fw-bold">
                Progreso
            </label>

            <div class="progress mt-2" style="height: 25px;">

                <div
                    id="barra"
                    class="progress-bar progress-bar-striped progress-bar-animated"
                    style="width: 0%;"
                >

                    0%

                </div>

            </div>

        </div>

        <!-- BOTONES -->
        <div class="text-center mt-4">

            <button
                onclick="iniciarLeccion()"
                class="btn btn-lg text-white fw-bold rounded-4 shadow me-2"
                style="
                    background: linear-gradient(
                        135deg,
                        #2563eb,
                        #7c3aed
                    );
                    border: none;
                "
            >

                Iniciar Lección ⚽

            </button>

            <button
                onclick="terminarLeccion()"
                class="btn btn-danger btn-lg rounded-4 shadow fw-bold"
            >

                Terminar

            </button>

        </div>

    </div>

</div>

<!-- SCRIPT -->
<script>

let tiempo = 0;
let intervalo;
let iniciado = false;

const textoCorrecto =
"lionel messi ganó el mundial de qatar 2022 con argentina.";

const input =
document.getElementById('inputTexto');

input.addEventListener('input', function(){

    let escrito =
    input.value.toLowerCase();

    let coincidencias = 0;

    // VALIDAR LETRA POR LETRA
    for(let i = 0; i < escrito.length; i++){

        if(escrito[i] === textoCorrecto[i]){

            coincidencias++;

        }else{

            break;

        }

    }

    // PROGRESO SOLO SI COINCIDE
    let progreso =
    (coincidencias / textoCorrecto.length) * 100;

    progreso =
    Math.min(progreso,100);

    document.getElementById('barra').style.width =
    progreso + '%';

    document.getElementById('barra').innerHTML =
    Math.floor(progreso) + '%';

    // COMPLETAR AUTOMÁTICAMENTE
    if(escrito === textoCorrecto){

        terminarLeccion();

        document.getElementById('estado').innerHTML =
        "Completado ✅";

        document.getElementById('barra').style.width =
        "100%";

        document.getElementById('barra').innerHTML =
        "100%";

        alert(
            "¡Excelente! Terminaste la lección en "
            + tiempo + " segundos ⚽"
        );

    }

});

function iniciarLeccion(){

    if(!iniciado){

        iniciado = true;

        tiempo = 0;

        document.getElementById('contador').innerHTML =
        "0 s";

        document.getElementById('estado').innerHTML =
        "Escribiendo...";

        document.getElementById('barra').style.width =
        "0%";

        document.getElementById('barra').innerHTML =
        "0%";

        input.value = "";

        intervalo = setInterval(function(){

            tiempo++;

            document.getElementById('contador').innerHTML =
            tiempo + ' s';

        },1000);

    }

}

function terminarLeccion(){

    clearInterval(intervalo);

    iniciado = false;

    document.getElementById('estado').innerHTML =
    "Finalizado ⛔";

}

</script>

@endsection