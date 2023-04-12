<div class="row justify-content-center align-items-center">
        <div class="container-xl col-xs-6 text-center ">
            <div class="container-fluid p6 b3 text-center">
                <h3>Lista de usuarios</h3>
                <?php 
                include './controller/delete_users.php';
                ?>
                <button type="button" onclick="location.href='/view/registrar_logins.php'" class="btn btn-outline-info">Agregar</button>

                <br>
            </div>
            <div class="container">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NinkName</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Tipo de usuario</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $conexion->query(" select * from usuarios ");
                        while($users = $sql->fetch_object()){
                        ?>
                        <tr>
                            <td><?= $users->id ?></td>
                            <td><?= $users->username ?></td>
                            <td><?= $users->nombre ?></td>
                            <td><?= $users->documento ?></td>
                            <td><?= $users->user_type ?></td>
                            <td>
                                <form action="" method="post">
                                    <button type="button" onclick="location.href='./view/edit_logins.php?id=<?= $users->id ?>'" class="btn btn-small btn-warning""><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="submit" class="btn btn-danger " value="<?= $users->username ?>" name="btn_delete_user"><i class="fa-solid fa-trash"></i></button>
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