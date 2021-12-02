<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$correo=$_POST['correo'];
$telef=$_POST['telefono'];
$domc=$_POST['domicilio'];


$sql="UPDATE `clientes` SET `id`='$id',`apellido paterno`='$apellidop',`apellido materno`='$apellidom',`Nombre(s)`='$nombre',`fecha de nacimiento`='$fechadenac',`correo`='$correo',`telefono`='$telef',`domicilio`='$domc' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./cliente.php");
    }
?>
