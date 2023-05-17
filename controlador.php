<?php
#------------
#------------
if(!empty($_POST["ingresar"]))
    {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            /*echo'
                <style>
                    #popwar{
                        display:flex;
                        flex-wrap: wrap;
                        align-content: center;
                        justify-content: center;
                    } 
                </style>
            ';*/
            echo'
            
            '
           # echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
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
                #echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
                echo '
                <div id="popwar" style="display:flex">
                <div id="popcontainer">
                    <button type="button" class="close" onclick="cerrarPopup()">&times;</button>
                    <h4>Acceso denegado</h4>
                </div>
                </div>
                ';
                //header("location:index.html");
            }   
        }    
    }
    if(!empty($_POST["invitado"])){
        header("location:cal/4a_calendar_in.php");
    }
?>
