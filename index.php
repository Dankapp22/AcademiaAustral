<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Austral Cup</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="shortcut icon" href="./assets/austral.ico">


</head>
<body>
    <?php include 'nav.php'; ?>
    <div><img src="./assets/portadaoficial.png" alt="portada" class="imagenPortada"></div>
    <div class="noticias"> <h2>¡Conoce nuestras últimas noticias!</h2>
        <div class="metanoticiasContainer">
            <div class="noticiasContainer">
                <img src="./assets/portada.jpg" alt="Academia Austral" class="fotoNoticia">
                <p>¡Inscríbete a nuestra Academia!</p>
                <button class= "button botonNoticia" onclick="location.href='academia.php'">Leer Más</button> 
            </div>
            <div class="noticiasContainer">
                <img src="./assets/españagira.png" alt="Viaje España" class="fotoNoticia">
                <p>Conoce más sobre nuestro último viaje a España</p>
                <button class= "button botonNoticia" onclick="location.href='noticia-espana.php'">Leer Más</button>
            </div>
            <div class="noticiasContainer">
                <img src="./assets/miami.png" alt="Viaje Miami" class="fotoNoticia">
                <p>Conoce más sobre nuestro último viaje a Miami</p>
                <button class= "button botonNoticia" onclick="location.href='noticia-miami.php'">Leer Más</button>
            </div>
            <div class="noticiasContainer">
                <img src="./assets/giras.png" alt="Nuestras giras" class="fotoNoticia">
                <p>¡Conoce nuestras giras nacionales e internacionales!</p>
                <button class= "button botonNoticia" onclick="location.href='noticia-gira.php'">Leer Más</button>
            </div>
            <div class="noticiasContainer">
                <img src="./assets/fotosWinter.png" alt="Fotos Winter Cup 2024" class="fotoNoticia">
                <p>Mira lo que nos dejó la Winter Cup 2024</p>
                <button class= "button botonNoticia" onclick="location.href='fotos.php'">Leer Más</button>
            </div>
        </div>
        <div class="sede"> <h2>¡Conoce nuestra Sede!</h2>
            <div class="sedefoto">
                <img src="./assets/puertomontt.png" alt="puertoMontt" class="imagenPortada">
                <a href="https://www.puertomontt.cl/" target="_blank">
                    <button class="botonSede">Conoce Más</button>   
                </a>
                
            </div>
        </div>
    </div>
    <div class="datazos"> <h2>Datos importantes del Campeonato</h2>
        <div class="metadatazosContainer">
            <a href="inscripciones.php">
                <div class="datazosContainer">
                    <img src="./assets/contract.png" alt="inscripciones" class="fotoDatazos">
                    <p>inscripciones</p>                
                </div>                
            </a>
            <a href="fotos.php">
                <div class="datazosContainer">
                    <img src="./assets/trophy.png" alt="fotos campeonato" class="fotoDatazos">
                    <p>¡Fotos de nuestra última versión!</p>
                </div>
            </a>

        </div>
    </div>
    <div class="auspiciadores"> <h2>¡Te presentamos a nuestros auspiciadores!</h2>
        <div class="auspiciadoresContainer">
            <div class="fotoAuspiciadores">
                <a href="https://ingesiscl.com/" target="_blank">
                    <img src="./assets/ingesisFondoNegro.png" alt="Ingesis">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.puertomontt.cl/" target="_blank">
                    <img src="./assets/muni.png" alt="Municipalidad de Puerto Montt">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.uach.cl/uach/inicio-uach" target="_blank">
                    <img src="./assets/uach.png" alt="UACh">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.camanchaca.cl/" target="_blank">
                    <img src="./assets/camanchaca.png" alt="Salmones Camanchaca">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.facebook.com/MeliAntupmt/?locale=es_LA" target="_blank">
                    <img src="./assets/meliantu.png" alt="Meliantü">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.facebook.com/MongenKo.Aguas/?locale=es_LA" target="_blank">
                    <img src="./assets/mongenko.png" alt="Mongenko">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://comercialbinder.cl/" target="_blank">
                    <img src="./assets/binder.png" alt="Comercial Binder">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.trendy.cl/" target="_blank">
                    <img src="./assets/trendy.png" alt="Trendy">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://acortar.link/G7kObD" target="_blank">
                    <img src="./assets/sake.png" alt="Sake">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.australpack.cl/" target="_blank">
                    <img src="./assets/australpack.png" alt="Austral Pack">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.google.cl/?hl=es" target="_blank">
                    <img src="./assets/servisur.png" alt="Servicios Del Sur">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://cl.sodexo.com/" target="_blank">
                    <img src="./assets/sodexo.png" alt="Sodexo">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.instagram.com/bym_deportes/?hl=es-la" target="_blank">
                    <img src="./assets/bymdeportes.png" alt="B&M Deportes">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.sgsecurity.cl/" target="_blank">
                    <img src="./assets/sg.png" alt="SG Seguridad">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://oncesbellavista.cl/" target="_blank">
                    <img src="./assets/bellavista.png" alt="Onces y Cabañas Bellavista">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://sectormanicure.site.agendapro.com/cl/sucursal/70648" target="_blank">
                    <img src="./assets/manicure.png" alt="Sector Manicure">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.sinapsispv.cl/resonancia-magnetica/" target="_blank">
                    <img src="./assets/sinapsis.png" alt="Sinapsis">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.instagram.com/lunasol_panaderia_puertomontt/?hl=es" target="_blank">
                    <img src="./assets/lunasol.png" alt="Luna Sol Panadería">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://acortar.link/IZ844u" target="_blank">
                    <img src="./assets/bacar.png" alt="Bacar">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://acortar.link/Z3S6w7" target="_blank">
                    <img src="./assets/alfredo.png" alt="Alfredo Oelckers">
                </a>
            </div>
            <div class="fotoAuspiciadores">
                <a href="https://www.instagram.com/aguainspira/" target="_blank">
                    <img src="./assets/agua.png" alt="Inspira">
                </a>
            </div>

        </div>
    </div>
    
    <script src="script.js"></script>
</body>
    <?php include 'footer.php'; ?>

</html>