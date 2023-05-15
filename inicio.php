<?php

session_start();


// Verificar si la variable de sesión 'usuario' está definida
if (!isset($_SESSION['user'])) {
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
else{
    //$msj=$_SESSION['id'];
    //echo "<script>console.log('$msj')</script>";
    //echo "$msj";
    header("location:cal/4a-cal-page.php");
}
?>
