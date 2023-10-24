<?php
include("../subir_legajos_de_alumnos/conexion.php");
$con = conexion();

$sql = "SELECT * FROM legajos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="legajo1.css">
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
        <a href="../subir_legajos_de_alumnos/subirLegajo.html"class="users" >nuevo legajo</a>
        </div>
        </div>
        <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>N°legajo</th>
                <th>secundario</th>
                <th>titulo?</th>
                <th>pase</th>
                <th>escuela</th>
                <th>cursos practicos</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?= $row['dni'] ?></th>
                <th><?= $row['apellido'] ?></th>
                <th><?= $row['nombre'] ?></th>
                <th><?= $row['numerolegajo'] ?></th>
                <th><?= $row['secundario'] ?></th>
                <th><?= $row['entregado'] ?></th>
                <th><?= $row['pase'] ?></th>
                <th><?= $row['escuela'] ?></th>
                <th><?= $row['cursospracticos'] ?></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                        <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
            </tr>
        <?php endwhile; ?>
            </tbody>
    </table>
    </div>
    
</body>
</html>