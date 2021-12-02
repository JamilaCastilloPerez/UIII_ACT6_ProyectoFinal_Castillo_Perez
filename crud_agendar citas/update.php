<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nom_cliente=$_POST['nomcliente'];
$tlfno_cliente=$_POST['telefono'];
$correo=$_POST['correo'];
$mascota=$_POST['mascota'];
$edad_mascota=$_POST['edad_masc'];
$fechacita=$_POST['fechacita'];
$motivo=$_POST['motivo'];


$sql="UPDATE `agendar citas` SET `id`='$id',`nom_cliente`='$nom_cliente',`tlfno_cliente`='$tlfno_cliente',`correo_cliente`='$correo',`mcota_especie_raza`='$mascota',`edad_mascota`='$edad_mascota',`fecha_cita`='$fechacita',`motivo`='$motivo' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./agendarcita.php");
    }
?>