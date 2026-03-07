@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<h2 class="text-center fw-bold mb-4">Sobre el Proyecto Typing Messi ⚽</h2>

<div class="row align-items-center mb-5">

<div class="col-md-6">

<p class="lead">
Typing Messi es un proyecto académico desarrollado para practicar
mecanografía mientras se aprende sobre la historia de uno de los
mejores futbolistas de todos los tiempos.
</p>

<p class="lead">
Este sitio web fue creado utilizando el framework Laravel y
Bootstrap, con el objetivo de aplicar conceptos de desarrollo
web moderno como rutas, vistas Blade y diseño responsive.
</p>

</div>

<div class="col-md-6 text-center">

<img class="img-fluid rounded shadow"
src="https://pbs.twimg.com/media/DopgtysWwAAQWg2.jpg">

</div>

</div>

<hr class="my-5">

<h3 class="text-center fw-bold mb-4">Formulario de PQRS</h3>

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow-lg border-0 p-4">

<form>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Nombres</label>
<input type="text" class="form-control" placeholder="Ingrese sus nombres">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Apellidos</label>
<input type="text" class="form-control" placeholder="Ingrese sus apellidos">
</div>

</div>

<div class="mb-3">
<label class="form-label">Correo electrónico</label>
<input type="email" class="form-control" placeholder="ejemplo@email.com">
</div>

<div class="mb-3">
<label class="form-label">Tipo de solicitud</label>
<select class="form-select">
<option>Petición</option>
<option>Queja</option>
<option>Reclamo</option>
<option>Sugerencia</option>
<option>Felicitación</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Mensaje</label>
<textarea class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
</div>

<div class="form-check mb-3">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">
Acepto términos y condiciones
</label>
</div>

<button type="submit" class="btn btn-primary w-100">
Enviar solicitud
</button>

</form>

</div>

</div>

</div>

@endsection