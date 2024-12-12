<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo Winter Cup</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="shortcut icon" href="./assets/austral.ico">


</head>
<body>
    <?php include 'nav.php'; ?>
    <div><img src="./assets/winterportada.png" alt="portada" class="imagenPortada"></div>
    <div class="fixture"><h2>Fixture</h2>
    <div class="tabs">
        <div class="tab active" data-tab="2017-2018">2017-2018</div>
        <div class="tab" data-tab="2015-2016">2015-2016</div>
        <div class="tab" data-tab="2013-2014">2013-2014</div>
        <div class="tab" data-tab="2011-2012">2011-2012</div>
        <div class="tab" data-tab="2009-2010">2009-2010</div>
        <div class="tab" data-tab="2006-2008">2006-2008</div>
        <div class="tab" data-tab="todo-varones">Todo Competidor Varones</div>
        <div class="tab" data-tab="todo-damas">Todo Competidor Damas</div>
    </div>

<!-- Contenido para cada categoría -->
<div id="2017-2018" class="tab-content active">
    <h3>Fixture 2017-2018</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="2015-2016" class="tab-content">
    <h3>Fixture 2015-2016</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="2013-2014" class="tab-content">
    <h3>Fixture 2013-2014</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="2011-2012" class="tab-content">
    <h3>Fixture 2011-2012</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="2009-2010" class="tab-content">
    <h3>Fixture 2009-2010</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="2006-2008" class="tab-content">
    <h3>Fixture 2006-2008</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="todo-varones" class="tab-content">
    <h3>Fixture Todo Competidor Varones</h3>
    <p>¡Próximamente más información!</p>
</div>
<div id="todo-damas" class="tab-content">
    <h3>Fixture Todo Competidor Damas</h3>
    <p>¡Próximamente más información!</p>
</div>
</div>

<div class="info">
    <h2>Información del campeonato</h2>
    <h3>Valor Entrada por Día</h3>
    <p>
Para el público general habrá un costo de $1.000 por persona. Esta 
entrada será válida por el día en el que se compró el pase diario. 
Jugadores y cuerpo Técnico (2 por equipo) tienen entrada liberad. 
Tendrán Pulsera identificatoria por categoría.  
A partir de los 5 años de edad se paga entrada para ingresar al Winter 
Cup. </p>
<h3>Ambiente Winter Cup</h3>
<p>El campeonato se llevará a cabo con el fundamento de que el Futbol es un 
Juego y la principal misión es disfrutar de cada encuentro deportivo, por lo que 
motivamos a los apoderados a adoptar una actitud positiva y participativa. </p>
<h3>Comida Winter Cup</h3>
<p>A la entrada del complejo deportivo Holandesas, habrá un Carro de comida 
(food truck) donde se estará vendiendo comida para quienes quieran 
acompañar el Winter Cup con algo para beber o comer. Éste es el único 
medio autorizado para la venta de comida durante el Campeonato. </p>
</div>

<div class="bases"><h2>Bases del campeonato</h2>
    <p>¡Para conocer las bases de nuestro campeonato presiona el botón!</p>
    <button onclick="window.open('./docs/bases.pdf', '_blank')" class="button botonBase">Bases</button>

    <h2>¿Por qué participar en Winter Cup 2025?</h2>
    <ul>
        <li>Campeonato enfocado en lo formativo</li>
        <li>Oportunidades de crecimiento y aprendizaje</li>
        <li>Premios y reconocimientos para todos los equipos</li>
        <li>Versión de invierno de nuestra querida Austral Cup</li>
        <li>Shows para la inauguración y cierre</li>
        <li>Una gran experiencia en el invierno</li>
        <li>¡Y mucho más!</li>
    </ul>
    <a href="https://wa.me/56976677345?text=%C2%A1Hola%20me%20gustar%C3%ADa%20inscribirme%20al%20torneo%20Winter%20Cup!%2C%20quiero%20recibir%20m%C3%A1s%20informaci%C3%B3n" target="_blank">
    <button class="button botonBase">¡Inscripción!</button>
</a>
</div>   
<script src="script.js"></script>
</body>
    <?php include 'footer.php'; ?>
</html>
