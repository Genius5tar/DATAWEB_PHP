<?php
include './models/conexion.php';
include "./controller/protect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a87f95e59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/sweet-alert.js"></script>
    <title>Mvc CRUD</title>
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <div class="container-xl col-xs-6 text-center ">
            <div class="container-fluid p6 b3 text-center">
                <h3>Lista de productos</h3>
                <?php 
                include './controller/delete_articulos.php';
                ?>
                <button type="button" onclick="location.href='./view/add.php'" class="btn btn-outline-info">Agregar</button>
                <button type="button" onclick="location.href='./controller/cerrar_session.php'" class="btn btn-danger ">Salir</button>

                <br>
            </div>
            <div class="container">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cod</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">Precio Venta</th>
                            <th scope="col">Precio Proveedor</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $conexion->query(" select * from articulos ");
                        while($articles = $sql->fetch_object()){
                        ?>
                        <tr>
                            <td><?= $articles->id ?></td>
                            <td><?= $articles->cod ?></td>
                            <td><?= $articles->cantidad ?></td>
                            <td><?= $articles->nombre ?></td>
                            <td><?= $articles->marca ?></td>
                            <td><?= $articles->fabricante ?></td>
                            <td>$ <?= $articles->p_venta ?></td>
                            <td>$ <?= $articles->p_compra ?></td>
                            <td>
                                <form action="" method="post">
                                    <button type="button" onclick="location.href='./view/editar.php?cod=<?= $articles->cod ?>'" class="btn btn-small btn-warning""><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="submit" class="btn btn-danger " value="<?= $articles->cod ?>" name="btn_delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include './view/mostrar_logins.php';
    ?>    

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>