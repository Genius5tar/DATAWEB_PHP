<?php 
 
 if(!empty($_POST["btn_delete"])){

    include './models/conexion.php';

    $id=$_POST["btn_delete"];
    $sql=$conexion->query("delete from articulos where cod=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success" role="alert">
            Articulo Cod <a href="../index.php" class="alert-link">#'.$id.'</a>. Eliminado con exito.
            </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Error al Eliminar Articulo '.$id.' <a href="../index.php" class="alert-link">Intentar Nuevamente</a>.
    </div>';
    }
    
}


?>