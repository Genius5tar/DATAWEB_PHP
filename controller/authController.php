<?php 
session_start();
include '../models/conexion.php';

if (!empty($_POST["btn_regist"])) {
    header('location:/view/registrar_sesion.php');
    
}

if(!empty($_POST["btn_login"])){
       if (isset($_POST['user']) == true) {
            $usuario = $_POST['user'];  
            $password = $_POST['pass'];  
            
            //para evitar las injection sql
            $usuario = stripcslashes($usuario);  
            $password = stripcslashes($password);  
            $usuario = mysqli_real_escape_string($conexion, $usuario);  
            $password = mysqli_real_escape_string($conexion, $password);  
            
            $sql = "SELECT * FROM usuarios WHERE username = '$usuario' AND password = '$password'";  
            $result = mysqli_query($conexion, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
             $count = mysqli_num_rows($result);  
            if($count == 1){  
                $sql="SELECT *  FROM usuarios WHERE username = '$usuario'";
                $query=mysqli_query($conexion,$sql);
                $session_dat=mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id_usuario'] = $session_dat['id'];
                $_SESSION['username'] = $session_dat['username'];
                $_SESSION['nombre'] = $session_dat['nombre'];
                $_SESSION['type'] = $session_dat['user_type'];
                header('location:../index.php');
            }  
            else{  
                session_destroy();
                echo '<div class="alert alert-danger" role="alert">
                 Error al iniciar sesion <a href="../index.php" class="alert-link">Intentar Nuevamente</a>.
                 </div>';
                
            } 
    
        }   
    }
    
        
?>
