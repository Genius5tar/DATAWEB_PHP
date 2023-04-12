<?php
include '../models/conexion.php';
include "../controller/protect.php";

$id=$_GET['id'];
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
    <title>Editar Productos</title>
</head>

<body>
    <div class="row justify-content-center align-items-center ">

        <h1 class="text-center p3">Editar articulo Cod (<?php echo $id; ?>)</h1>
        <div class="container-xs col-4">
        <?php include '../controller/edit_users.php';?>

            <form class="" method="POST" >
                <?php 
                $sql=$conexion->query("select * from usuarios where id=$id");
                while($users_info=$sql->fetch_object()){
                ?>
                <fieldset disabled>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input type="number" class="form-control" name="id" maxlength="8" value="<?= $users_info->id ?>">
                </div>
                </fieldset>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NickName</label>
                    <input type="text" class="form-control" name="username" maxlength="15" required value="<?= $users_info->username ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" maxlength="11" required value="<?= $users_info->nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No. documento</label>
                    <input type="number" class="form-control" name="documento" required value="<?= $users_info->documento ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" maxlength="255" required value="<?= $users_info->password ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tipo de Usuario</label>
                    <input type="number" class="form-control" name="user_type" required value="<?= $users_info->user_type ?>">
                </div>
                
                <?php  } ?>
                <div class="p-3 m-0 border-0 justify-content-space-eveling">
                <button type="submit" class="btn btn-warning " value="<?php echo $id; ?>" name="btn_edit">Editar</button>
                <button type="button" onclick="location.href='../index.php'" class="btn btn-secondary">Volver</button>
                </div>
            </form>
        </div>


    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>