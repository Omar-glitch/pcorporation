<?php
if (isset($_POST['submit'])){
    session_start();
    $nombre = $_POST['name'];
    $titulo = $_POST['tit'];
    $mensaje = $_POST['mensaje'];
    $cabe = $_POST['email'];
    $nombre = str_replace("/n.", "/n..", $nombre);
    $titulo = str_replace("/n.", "/n..", $titulo);
    $mensaje = str_replace("/n.", "/n..", $mensaje);
    $cabe = str_replace("/n.", "/n..", $cabe);

// Comprobación
    if (empty($nombre) || empty($titulo) || empty($mensaje) || empty($cabe)){
        $_SESSION['error'] = '<p>Dejastes uno o más campos vacíos en el formulario.</p>';
        $_SESSION['text'] = "<p style='--i:red;'>ERROR</p><i class='fas fa-exclamation'></i>";
    }else if (!filter_var($cabe) || $cabe == 'peonlesspanchox@gmail.com') {
        $_SESSION['error'] = '<p>Email inválido. Por favor escriba un correo con el que le pueda contactar mas tarde.</p>';
        $_SESSION['text'] = "<p style='--i:red;'>ERROR</p><i class='fas fa-exclamation'></i>";
    }else{
        $lolbit = mail("sahibomar833@gmail.com", $titulo, 'De: ' . $nombre . ' con el correo de ' .  $cabe . "\r\n" . "Mensaje: " . $mensaje, $cabe);
        if ($lolbit){
            $_SESSION['error'] = '<p>El mensaje ha sido enviado con éxito, pronto me pondre en contacto.</p>';
            $_SESSION['text'] = "<p style='--i:green;'>Enviado</p><i class='fas fa-check'></i>";
        }else{
            $_SESSION['error'] = '<p>Lamentablemente el e-mail no ha podido ser enviado, inténtelo más tarde.</p>';
            $_SESSION['text'] = "<p style='--i:red;'>ERROR</p><i class='fas fa-check'></i>";
        }
    }
}else{
    header('location: index.php');
}
header("location: verification.php");
?>

