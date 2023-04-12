<?php 

include '../models/conexion.php';

if(!empty($_POST["btn_edit"])){

    $id=$_POST["btn_edit"];
    $cantidad= $_POST["cant"];
    $nombre= $_POST["nombre"];
    $marca= $_POST["marca"];
    $fabricante= $_POST["fabricante"];
    $p_venta= $_POST["p_venta"];
    $p_compra= $_POST["p_compra"];

    $sql=$conexion->query("update articulos set cantidad=$cantidad, nombre='$nombre', 
    marca='$marca', fabricante='$fabricante', p_venta=$p_venta, p_compra=$p_compra where cod=$id");
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