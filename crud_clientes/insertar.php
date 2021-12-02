<?php
include("conexion.php");
$con=conectar();


$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$correo=$_POST['correo'];
$telef=$_POST['telefono'];
$domc=$_POST['domicilio'];

$sql="INSERT INTO `clientes` VALUES('','$apellidop','$apellidom','$nombre','$fechadenac','$correo','$telef','$domc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ./cliente.php");
    
}else {
}
?>