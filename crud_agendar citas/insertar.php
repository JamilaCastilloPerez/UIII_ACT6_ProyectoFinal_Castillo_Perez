<?php
include("conexion.php");
$con=conectar();


$nom_cliente=$_POST['nomcliente'];
$tlfno_cliente=$_POST['telefono'];
$correo=$_POST['correo'];
$mascota=$_POST['mascota'];
$edad_mascota=$_POST['edad_masc'];
$fechacita=$_POST['fechacita'];
$motivo=$_POST['motivo'];

$sql="INSERT INTO `agendar citas`
VALUES ('','$nom_cliente','$tlfno_cliente','$correo','$mascota','$edad_mascota','$fechacita','$motivo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ./agendarcita.php");
    
}else {
}
?>