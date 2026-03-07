<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f4f6f9;">

<nav class="navbar navbar-expand-lg navbar-dark" style="background:#a50044;">
<div class="container">

<a class="navbar-brand fw-bold" href="{{ route('inicio') }}">
Typing Messi ⚽
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('menu') }}">Historia</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
</li>

</ul>

</div>
</div>
</nav>

<div class="container py-5">

@yield('content')

</div>

<footer style="background:#004d98;" class="text-white text-center p-3">

Proyecto Académico 2026 - Typing Messi  
Programación Avanzada

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>