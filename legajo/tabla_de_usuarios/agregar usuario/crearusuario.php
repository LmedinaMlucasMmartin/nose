<?php
include("conexion.php");
$con = conexion();

$id = null;
$email = $_POST['email'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellido =$_POST ['apellido'];

$sql = "INSERT INTO personal VALUES('$id','$email','$clave','$nombre','$apellido')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: usuarios.html");
}else{

}

?>