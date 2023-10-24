<?php
include("../subir_legajos_de_alumnos/conexion.php");
$con = conexion();
$id =$_GET ['id'];
$sql = "SELECT * FROM legajos WHERE id = '$id'";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="legajo1.css">
    <link rel="stylesheet" href="actualizar.css">
    <link rel="shortcut icon" href="../fotos/logo.png" type="image/x-icon">
    <title>E.E.T.1°</title>
</head>
<body>
    
    
    <div class="users-table">
        <div class="conteiner">
            <div class="navegante">
            <a href="legajo.php">regresar</a>
            </div>
            <div class="nuevoLegajo" class="nuevo">
        <button class="button1">Subir cambios</button>
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
               
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><input type="number" value="<?= $row['dni'] ?>" name="dni"></th>
                <th><input type="text" value="<?= $row['apellido'] ?>" name="apellido"></th>
                <th><input type="text" value="<?= $row['nombre'] ?>" name="nombre"></th>
                <th><input type="number" value="<?= $row['numerolegajo'] ?>"name="numerolegajo"></th>
                <th><select name="secundario" id="">
                    <option name="secundario"><?= $row['secundario'] ?></option>
                <option name="secundario">C.S</option>
                    <option name="secundario">C.B</option>
                </select></th>
                <th> <select name="entregado" id=""> 
                    <option value=""><?= $row['entregado'] ?></option>
                    <option name="entregado">SI</option>
                    <option name="entregado">NO</option>
                </select>
                </th>
                <th>
                    <select name="entregado" id="">
                        <option name="pase"><?= $row['pase'] ?></option>
                        <option name="pase">SI</option>
                    <option name="pase">NO</option>
                    </select>
                </th>
                <th> <select name="" id=""><option ><?= $row['escuela'] ?></option>
                <option name="escuela">Vino</option>
                    <option name="escuela">Se fue</option>
                </select></th>
                <th>
                    <select name="" id="">
                        <option name="cursospracticos"><?= $row['cursospracticos'] ?></option>
                        <option name="cursospracticos">Marroqueneria</option>
                    <option name="cursospracticos">Peluqueria</option>
                    <option name="cursospracticos">Mecanografia</option>
                    <option name="cursospracticos">Impresion 3D</option>
                    <option name="cursospracticos">Cocina</option>
                    <option name="cursospracticos">Corte Confección</option>
                    </select>
                </th>
                
        <?php endwhile; ?>
            </tbody>
    </table>
    </div>
    
</body>
</html>