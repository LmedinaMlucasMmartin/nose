<?php
include("../subir_legajos_de_alumnos/conexion.php");
$con = conexion();

$sql = "SELECT * FROM personal";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablausuarios.css">
    <link rel="shortcut icon" href="../fotos/logo.png" type="image/x-icon">
    <title>E.E.T.1°</title>
</head>
<body>
    
    
    <div class="users-table">
        <div class="conteiner">
            <div class="navegante">
            <a href="../inicio/inicio.html">regresar</a>
            </div>
        <div class="nuevoLegajo">
        <a href="agregar usuario/usuarios.html"class="users" >Nueva cuenta</a>
        </div>
        </div>
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['email'] ?></th>
                <th><?= $row['clave'] ?></th>
                <th><?= $row['nombre'] ?></th>
                <th><?= $row['apellido'] ?></th>
                
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
            </tr>
        <?php endwhile; ?>
            </tbody>
    </table>
    </div>
    <!--
        informacion del sistema
        sistema de archivos
        administrador de discos
        administracion de cuentas de usuarios 
        discos de recuperacion
    -->

    <!--usuarios - legajos - cerrar sesion


                id, apellido y nombre, carrera, libro, folio, dni, titulo, pase



                <th><a href="update_user.php?id=<?php echo $row ['id_personal'] ?>" class="users-table--delete" >Eliminar</a></th>
                        <th><a href="delete_user.php?id=<?php echo $row ['id_personal'] ?>" class="users-table--edit" >Eliminar</a></th>

-->
</body>
</html>