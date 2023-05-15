<?php
    if(!empty($_POST["ingresar"]))
    {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conexion->query("select * from usuarios where usuario='$usuario' and clave='$clave'");
            
            if ($datos=$sql->fetch_object()) {
                session_start();
                $_SESSION['user']  = $datos->usuario;
                $_SESSION['id']  = $datos->id;
                header("location:inicio.php");
            // header("location:inicio.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
                //header("location:index.html");
            }   
        }    
    }
    if(!empty($_POST["invitado"])){
        header("location:cal/4a_calendar_in.php");
    }
?>