<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$nombre=$_POST['nombre'];
$fechadenac=$_POST['fechadenac'];
$curp=$_POST['curp'];
$correo=$_POST['correo'];
$estudios=$_POST['estudios'];


 $sql="UPDATE `empleados` SET `id`='$id',`apellido paterno`='$apellidop',`apellido materno`='$apellidom',`nombre(s)`='$nombre',
 `fecha de nacimiento`='$fechadenac',`curp`='$curp',`correo electronico`='$correo',`estudios`='$estudios' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./empleado.php");
    }
?>