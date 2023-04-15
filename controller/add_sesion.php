<?php 

include '../models/conexion.php';

if(!empty($_POST["btn_add_sesion"])){

    $username= $_POST["username"];
    $password= $_POST["password"];
    $user_type= $_POST["user_type"];

    

    $sql=$conexion->query("insert into usuarios (username,password,
    user_type) values ('$username', '$password', $user_type)");
    if ($sql==1) {
        echo '<script>alert("El Usuario se ha creado correctamente");</script>';
        
    } else {
       echo '<script>alert("Error al agregar usuario al sistema");</script>';
    }
    

}




?>