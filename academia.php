<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Academia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="shortcut icon" href="./assets/austral.ico">


</head>
<body>
    <?php include 'nav.php'; ?>
<div class="academia"><h1>¡Conoce nuestra Academia Formativa!</h1>
    <div><img src="./assets/academiaaustral.png" alt="portada" class="imagenAcademia"></div>
    <div class="info"><h2>Información de la Academia</h2>
    <p>Nuestra academia de fútbol es <b>100% formativa</b>, buscamos generar deportistas que amen el fútbol, y especialmente, que se diviertan 
        al momento de entrenar y jugar este hermoso deporte. La competitividad no es el foco principal
        en nuestra Academia, lo más importante es que los y las jugadores puedan divertirse, disfrutar
        y aprender de manera lúdica y dinámica.
    <br>
Inscripciones ¡de 3 a 20 años!, contamos con entrenamientos dinámicos 
, con giras internacionales cada año y ¡siempre buscamos ser nuestra mejor versión!        
</p>
<p>Nuestra misión es ser la academia de fútbol formativa más grande del sur del país,
    enfocándonos en el entrenamiento de todos y todas nuestros y nuestras jugadores a 
    través de lo lúdico y lo dinámico, con tal, de fortalecer el amor por el deporte y la vida sana.    
</p>
<p>Buscamos generar deportistas que amen el fútbol, y especialmente, que se diviertan 
    al momento de entrenar y jugar este hermoso deporte. La competitividad no es el foco principal
    en nuestra Academia, lo más importante es que los y las jugadores puedan divertirse, disfrutar
    y aprender de manera lúdica y dinámica.


    <h2>¡Conoce nuestras giras!</h2>
    <p>Todos los años tenemos giras a distintos lugares, dale un pequeño
        vistazo a nuestras últimas giras:
    </p>
    <div class="carousel-container" id="image-carousel">
    <div class="carousel-slide">
            <img src="./assets/giras.png" alt="Foto 1">
            <img src="./assets/españagira.png" alt="Foto 2">
            <img src="./assets/miami.png" alt="Foto 3">
        </div>
        <button class="prev-btn" onclick="moveSlide(-1, 'image-carousel')">&#10094;</button>
        <button class="next-btn" onclick="moveSlide(1, 'image-carousel')">&#10095;</button>
    </div>
    <div class="contact-form">
        <h2>¿Quieres formar parte de la Academia Austral? ¡Contáctanos!</h2>
        <form action="enviar-formulario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </div>

</div>



<script src="script.js"></script>
</body>
    <?php include 'footer.php'; ?>
</html>