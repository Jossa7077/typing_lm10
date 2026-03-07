@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div style="background:linear-gradient(135deg,#a50044,#004d98); padding:60px; color:white; text-align:center; border-radius:10px;">
    <h1 style="font-size:50px;">Typing Messi ⚽</h1>
    <p style="font-size:20px;">
        Aprende mecanografía mientras conoces la historia del mejor futbolista de todos los Tiempos.
    </p>
</div>
 
<br><br>

<div class="row align-items-center">

<div class="col-md-6">

<h2 style="color:#004d98;">Lionel Messi</h2>

<p>
Lionel Andrés Messi es considerado uno de los mejores futbolistas de todos los tiempos.
Nació en Rosario, Argentina, y desde muy pequeño mostró un talento extraordinario para el fútbol.
</p>

<p>
A lo largo de su carrera ha ganado múltiples premios individuales, incluyendo varios Balones de Oro,
además de títulos de liga, Champions League y la histórica Copa del Mundo con Argentina en 2022.
</p>

<p>
Este proyecto llamado <strong>Typing Messi</strong> busca combinar el aprendizaje de mecanografía
con contenido educativo sobre su vida, su carrera y sus logros más importantes.
</p>

<p>
Mientras practicas escribir en el teclado, también podrás descubrir datos interesantes
sobre el jugador que cambió la historia del fútbol moderno.
</p>

</div>

<div class="col-md-6 text-center">

<img class="img-fluid rounded shadow"
style="max-height:350px; object-fit:cover;"
src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Russia_v_Argentina_-_Lionel_Messi.jpg/640px-Russia_v_Argentina_-_Lionel_Messi.jpg">

</div>

</div>

<br><br>

<h2 class="text-center" style="color:#a50044;">Momentos de la carrera de Messi</h2>

<br>

<div class="row text-center">

<div class="col-md-4">
<img class="img-fluid rounded shadow"
style="height:250px; object-fit:cover; width:100%;"
src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Lionel_Messi_20180626.jpg">

<p style="margin-top:10px;">
Messi representando a Argentina en una Copa del Mundo.
</p>
</div>

<div class="col-md-4">
<img class="img-fluid rounded shadow"
style="height:250px; object-fit:cover; width:100%;"
src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Lionel_Messi_%28L%29%2C_Bruno_Alves_%28R%29_%E2%80%93_Portugal_vs._Argentina%2C_9th_February_2011.jpg/640px-Lionel_Messi_%28L%29%2C_Bruno_Alves_%28R%29_%E2%80%93_Portugal_vs._Argentina%2C_9th_February_2011.jpg">

<p style="margin-top:10px;">
El talento y control de balón que lo caracteriza.
</p>
</div>

<div class="col-md-4">
<img class="img-fluid rounded shadow"
style="height:250px; object-fit:cover; width:100%;"
src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Arg_vs_mex_julianalvarez_moreno_ochoa_y_messi%28cropped%29.jpg/640px-Arg_vs_mex_julianalvarez_moreno_ochoa_y_messi%28cropped%29.jpg">

<p style="margin-top:10px;">
Messi liderando a la Selección Argentina hacia el título mundial en 2022.
</p>
</div>

</div>

<br><br>

<div style="background:linear-gradient(135deg,#75aadb,#ffffff,#75aadb); padding:30px; border-radius:10px;">

<h2 class="text-center">Video de Lionel Messi</h2>

<p class="text-center">
Disfruta de un pequeño clip de Lionel Messi mostrando su talento en el campo.
</p>

<div style="display:flex; justify-content:center;">

<video width="720" autoplay muted loop controls style="border-radius:10px; box-shadow:0px 5px 15px rgba(0,0,0,0.3);">
    <source src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Messi._Barcelona_%28End_of_an_Era%29.webm" type="video/webm">
</video>

</div>

</div>

<br><br>

<div style="text-align:center; padding:20px; background:#f4f4f4; border-radius:10px;">

<h3 style="color:#004d98;">Objetivo del proyecto</h3>

<p>
El objetivo principal de Typing Messi es mejorar las habilidades de mecanografía
de los estudiantes mientras exploran contenido educativo y entretenido relacionado
con el fútbol y la carrera de Lionel Messi.
</p>

<p>
Este tipo de aprendizaje combina tecnología, deporte y educación,
haciendo la experiencia más dinámica y motivadora para los usuarios.
</p>

</div>

<br><br>

<div style="text-align:center; margin-top:30px; color:#666; font-size:14px;">
Proyecto académico desarrollado por <strong>Jaider Santiago Jossa Ramos</strong>
</div>

@endsection