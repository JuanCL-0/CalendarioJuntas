<?php
#------------
#------------
if(!empty($_POST["ingresar"]))
    {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo'
            <div id="popwar" style="display:flex">
            <div id="popcontainer">
                <button type="button" class="close" onclick="cerrarPopup()">&times;</button>
                <h4>Campos Vacios</h4>
            </div>
            </div>
            ';
        } else {
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conexion->query("select * from usuarios where usuario='$usuario' and clave='$clave'");
            
            if ($datos=$sql->fetch_object()) {
                session_start();
                $_SESSION['user']  = $datos->usuario;
                $_SESSION['id']  = $datos->id;
                header("location:inicio.php");
            } else {
                echo '
                    <div id="popwar" style="display:flex">
                    <div id="popcontainer">
                        <button type="button" class="close" onclick="cerrarPopup()">&times;</button>
                        <h4>Acceso denegado</h4>
                    </div>
                    </div>
                ';
            }   
        }    
    }
    if(!empty($_POST["invitado"])){
        header("location:cal/4a_calendar_in.php");
    }
?>