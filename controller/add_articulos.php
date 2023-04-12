<?php 
include '../models/conexion.php';

if(!empty($_POST["btn_add"])){

    
    $cod=$_POST["codigo"];
    $cantidad= $_POST["cant"];
    $nombre= $_POST["nombre"];
    $marca= $_POST["marca"];
    $fabricante= $_POST["fabricante"];
    $p_venta= $_POST["p_venta"];
    $p_compra= $_POST["p_compra"];

    $sql=$conexion->query("insert into articulos (cod,cantidad,nombre,marca,
    fabricante,p_venta,p_compra) values ($cod, $cantidad, '$nombre', '$marca', '$fabricante', $p_venta, $p_compra)");
    if ($sql==1) {
       echo '<script>alert("El código de artículo se ha creado correctamente");</script>';
        
    } else {
       echo '<script>alert("Error al agregar producto a la lista del inventario");</script>';
    }
    

}




?>