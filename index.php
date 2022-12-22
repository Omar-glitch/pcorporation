<!DOCTYPE html>
<html lang="es" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P Corp | Pagina Inicial</title>
    <link rel="stylesheet" type="text/css" href="principal.css?ts=<?=time()?>&quot">
    <link rel="stylesheet" type="text/css" href="estilos.css?ts=<?=time()?>&quot">
    <link rel="shortcut icon" href="img/Pcorp.png" type="image/x-icon">
    <!-- llenar metatags y en flora tambien :V -->
    <meta name="description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:type" content="article">
    <meta property="og:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
    <meta property="og:title" content="P Corporation | Omar Meza">
    <meta property="og:image" content="img/Pcorp.png">
    <meta property="og:url" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="og:locale" content="es">
    <meta property="og:site_name" content="P Corporation | Omar Meza">
    <meta property="twitter:title" content="P Corporation | Omar Meza">
    <meta property="twitter:image" content="https://pcorporation.herokuapp.com/img/Pcorp.png">
    <meta property="twitter:description" content="P Corporation © es una empresa dedicada a la creación de páginas web estáticas y dinámicas.">
  </head>
</head>

<body>
    <!-- Loader -->
    <?php
        require_once "header.html";
        require_once "aside.html";
    ?>
    
    <button class="moverI"><i class="fas fa-caret-left"></i></button>
    <button class="moverR"><i class="fas fa-caret-right"></i></button>
    <!-- Section 1 -->
    <div class="sections-container">
        <section class="section1">
            <div class="deg-background-si"></div>
            <div class="el-section1" draggable = "false">
                <h1 class="tit-section1" draggable = "false">P Corporation&copy;</h1>
                <hr draggable="false">
                <p draggable="false">¡Bienvenido a nuestra página inicial!</p>
            </div>
            <img src="img/sec1-1.svg" alt="trending" draggable="false">
            <div class="wave-si">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--light);"></path>
                </svg>
            </div>
        </section>
    <!-- AntiSection1 -->
        <section class="section1">
            <div class="deg-background-si"></div>
            <div class="el-section1">
                <h1 class="tit-section1">Computadoras</h1>
                <hr>
                <p>Reparamos computadoras</p>
            </div>
            <img src="img/sec-1-2.svg" alt="Diseño Web" draggable="false">
            <div class="wave-si">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--light);"></path>
                </svg>
            </div>
        </section>
    <!-- Antisection2 -->
       <section class="section1">
            <div class="deg-background-si"></div>
            <div class="el-section1">
                <h1 class="tit-section1">¡Páginas web!</h1>
                <hr>
                <p>Diseñamos páginas web</p>
            </div>
            <img src="img/sec-1-3.svg" alt="programming" draggable="false">
            <div class="wave-si">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: var(--light);"></path>
                </svg>
            </div>
        </section>
    </div>

    <!-- Section 2 -->
    <section id="section2" class="section2">
        <h1>¿Quiénes somos?</h1>
        <div class="cont-section2">
            <div class="info1-section2">
                <p><span>P Corporation &copy </span> es una empresa dedicada a la creación de páginas web estáticas y
                    dinámicas impulsados desde el servidor de heroku y creado desde xampp, reparación y actualizacion de
                    computadoras, creación de programas y bases de datos, desarrollo de macros en excel y mucho más.
                </p><br>
                <p>Estamos localizados en <span>Honduras</span>, Cortes, San Manuel, Brisas del Plan.</p>
                <button class="button read-more">Leer más...</button>
            </div>
            <div class="info2-section2"><img src="img/Business.svg" alt="Img Empresa"></div>
        </div>
    </section>
    <!-- Section -->
    <section id="justing">
        <div class="cont2-justing">
            <img src="img/complete.svg" alt="Img Info">
            <div>
                <p>Por los momentos estamos activos realizando páginas web con los siguientes lenguajes:
                    <span>HTML</span>, <span>CSS</span>, <span>JS</span>, <span>PHP</span>. Asi es realizamos páginas
                    con php; uno de los lenguajes del lado del servidor mas requeridos en la actualidad.
                </p><br>
                <p>Las páginas son hosteadas por un servidor gratuito llamado heroku en el caso de que las páginas sean
                    dinámicas, en el caso de que sean estáticas son subidas a github.</p>
            </div>
        </div>
        <div class="cont2-justing2">
            <img src="img/question.svg" alt="Img Pregunta">
            <div>
                <p>Si tienes alguna pregunta, o quieres comunicarte con nosotros para ayudarte en alguno de tus proyecto
                    presiona este botón de <b> aquí abajo</b> que te enviara al formulario donde podras enviarme un
                    mensaje a mi gmail personal...
                </p>
            </div>
        </div>
        <a class="anti-boo" href="contáctanos.php"><button class="antiboot button">Contáctame</button></a>
    </section>
    <!-- Section -->
    <!-- Section4 Omar Meza -->
    <section id="section4">
        <h1>Lenguajes empleados</h1>
        <div class="cont2">
            <div class="len1">
                <h3>HTML</h3><img src="img/html.png" alt="HTML">
                <p>Conocimiento del lenguaje de etiquetas HTML</p>
            </div>
            <div class="len2">
                <h3>CSS</h3><img src="img/css.png" alt="CSS">
                <p>Conocimiento del lenguaje de estilos CSS</p>
            </div>
            <div class="len3">
                <h3>JS</h3><img src="img/js.png" alt="JS">
                <p>Conocimiento del lenguaje de programación Javascript</p>
            </div>
            <div class="len4">
                <h3>PHP</h3><img src="img/php.png" alt="PHP">
                <p>Conocimiento del lenguaje de servidor PHP</p>
            </div>
            <div class="len5">
                <h3>PYTHON</h3><img src="img/python.png" alt="PYTHON">
                <p>Conocimiento del lenguaje de programación python</p>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
    require_once "footer.html";

    ?>
    <script src="main.js?ts=<?=time()?>&quot"></script>
    <script src="main2.js?ts=<?=time()?>&quot"></script>
    <script src="https://kit.fontawesome.com/be4c0d7a11.js" crossorigin="anonymous"></script>
</body>

</html>