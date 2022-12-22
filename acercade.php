<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de nosotros | P Corporation</title>
    <link rel="shortcut icon" href="img/Pcorp.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css?<?=time()?>&quot">
    <link rel="stylesheet" href="principal4.css?<?=time()?>&quot">
    <meta name="description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:type" content="article">
    <meta property="og:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:title" content="Acerca de nosotros | P corporation">
    <meta property="og:image" content="img/Pcorp.png">
    <meta property="og:url" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="og:locale" content="es">
    <meta property="og:site_name" content="Acerca de nosotros | P corporation">
    <meta property="twitter:title" content="Acerca de nosotros | P corporation">
    <meta property="twitter:image" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="twitter:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
</head>
<body>
    <?php
        include "header.html";
        require_once "aside.html";
    ?>
    <section class="section">
        <img src="img4/personas.svg" alt="personas about us">
        <div class="vision">
            <h1>P Corporation</h1>
            <p><span>P Corporation</span> es una empresa que ayuda a la realización de páginas web dinámicas y estáticas con los distintos lenguajes de etiquetas que existen para llevarlas a cabo, tambien arreglamos, limpiamos, formateamos computadoras. Tambien desarrollamos programas, formularios, bases de datos y otros. ¿Qué esperas? ¡Contáctanos ahora!.</p>
            <a class="button" href="contáctanos.php">¡Contáctanos!</a>
        </div>
    </section>
    <nav class="section">
        <img src="img4/vision.svg" alt="vision de empresa">
        <div class="vision">
            <h1>Visión</h1>
            <p>Nuestra vision es ser una de las mejores empresas desarroladoras de paginas web, utilizando el código de los lenguajes más básicos del diseño web como <span>html</span>, <span>css</span>, <span>js</span> y <span>php</span>. Pronto implementaremos <span>node js</span>.</p>
        </div>
    </nav>
    <nav class="section">
        <img src="img4/mision.svg" alt="vision de empresa">
        <div class="vision">
            <h1>Misión</h1>
            <p>Facilitar el desarrollo de páginas web a empresas que tengan la necesidad de elaborar una, al igual que arreglar sistemas, actualizacion de drivers, formateo e instalación de sistemas operativos de <span>Windows</span>  y <span>Linux.</span></p>
        </div>
    </nav>
    <?php 
    include "footer.html";
    ?>
    <script src="main.js?ts=<?=time()?>&quot"></script>
    <script src="https://kit.fontawesome.com/be4c0d7a11.js" crossorigin="anonymous"></script>
</body>
</html>