<?php
include("conexion.php");
$con = conexion();


$dni = $_POST['dni'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$numerolegajo =$_POST ['numerolegajo'];
$secundario = $_POST['secundario'];
$entregado = $_POST['entregado'];
$pase=$_POST ['pase'];
$escuela=$_POST ['escuela'];
$id = null;
$cursospracticos=$_POST ['cursospracticos'];
$sql = "INSERT INTO legajos VALUES('$dni','$apellido','$nombre','$numerolegajo','$secundario','$entregado','$pase','$escuela','$id','$cursospracticos')";
$query = mysqli_query($con, $sql);

if($query){
    header("location:subirLegajo.html");

}else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}



?>