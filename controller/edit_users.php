<?php 

include '../models/conexion.php';

if(!empty($_POST["btn_edit"])){

    $id=$_POST["btn_edit"];
    $username= $_POST["username"];
    $nombre= $_POST["nombre"];
    $documento= $_POST["documento"];
    $password= $_POST["password"];
    $user_type= $_POST["user_type"];

    $sql=$conexion->query("update usuarios set username='$username', nombre='$nombre', 
    documento=$documento, password='$password', user_type=$user_type where id=$id");
    
    if ($sql==1) {
        echo '<div class="alert alert-success" role="alert">
                Cambio realizado con exito <a href="../index.php" class="alert-link">Principal Page</a>. Dale un clic para volver.
            </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Error alrealizar cambio <a href="../index.php" class="alert-link">Intentar Nuevamente</a>.
    </div>';
    }
    
   
    
   
}




?>