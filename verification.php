<?php
    session_start();
    if (!isset($_SESSION['text']) || !isset($_SESSION['error'])){
        header("location: index.php");
    }
    $text = $_SESSION['text'];
    $error = $_SESSION['error'];
    $img = '<i class="fas fa-envelope"></i>';
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Gmail</title>
    <link rel="stylesheet" href="anticliterios.css?ts=<?=time()?>&quot">
</head>
<body>
    <div class="error">
        <p class="parrafo">Información</p>
        <?php echo $error?>
        <div class="error-1"><?php echo $img . $text;?></div>
        <a href="index.php"><button>Regresar</button></a>
    </div>
    <script src="https://kit.fontawesome.com/be4c0d7a11.js" crossorigin="anonymous"></script>

</body>
</html>