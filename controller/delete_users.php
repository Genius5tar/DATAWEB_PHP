<?php 
 
 if(!empty($_POST["btn_delete_user"])){

    include './models/conexion.php';

    $id=$_POST["btn_delete_user"];
    $sql=$conexion->query("delete from usuarios where username='$id'");
    if ($sql==1) {
        echo '<div class="alert alert-success" role="alert">
            usuario eliminado con exito Cod <a href="../index.php" class="alert-link">#'.$id.'</a>. Eliminado con exito.
            </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Error al Eliminar usuario '.$id.' <a href="../index.php" class="alert-link">Intentar Nuevamente</a>.
    </div>';
    }
    
}


?>