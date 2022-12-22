<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos | P Corporation</title>
    <link rel="shortcut icon" href="img/Pcorp.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css?<?=time()?>&quot">
    <link rel="stylesheet" href="principal3.css?<?=time()?>&quot">
    <meta name="description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:type" content="article">
    <meta property="og:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:title" content="Contactanos | P corporation">
    <meta property="og:image" content="img/Pcorp.png">
    <meta property="og:url" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="og:locale" content="es">
    <meta property="og:site_name" content="Contactanos | P corporation">
    <meta property="twitter:title" content="Contactanos| P corporation">
    <meta property="twitter:image" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="twitter:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
</head>

<body>
    <?php
        require_once "header.html";
        require_once "aside.html";
    ?>
    <!-- Section2 -->
    <section id="section2">
        <form class="form" method="post" autocomplete="off" required>
            <h1>Contáctenos</h1>
            <div>
                <input type="text" id="name" name="name" required>
                <label for="name">Ingrese su nombre...</label>
            </div>
            <div>
                <input type="email" id="email" name="email" required>
                <label for="email">Ingrese su e-mail...</label>
            </div>
            <div>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
                <label for="mensaje" >Ingrese su mensaje...</label>
            </div>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <img src="img3/mujer.svg" alt="mujer">
    </section>
    <?php
    require_once "footer.html";
    ?>
    <script src="main.js?ts=<?=time()?>&quot"></script>
    <script src="contact.js?ts=<?=time()?>&quot"></script>
    <script src="https://kit.fontawesome.com/be4c0d7a11.js" crossorigin="anonymous"></script>
</body>
</html>