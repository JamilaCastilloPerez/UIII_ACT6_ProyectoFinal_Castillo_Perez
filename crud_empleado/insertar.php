<?php
include("conexion.php");
$con=conectar();


$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$curp=$_POST['curp'];
$correo=$_POST['correo'];
$estudios=$_POST['estudios'];


$sql="INSERT INTO `empleados` VALUES('','$apellidop','$apellidom','$nombre','$fechadenac','$curp','$correo','$estudios')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ./empleado.php");
    
}else {
}
?>