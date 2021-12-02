<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nom_cliente=$_POST['nombre'];
$nom_prod=$_POST['nomprod'];
$telefono=$_POST['tlfno'];
$direccion=$_POST['direcc'];
$codigo=$_POST['codigo'];
$metodo=$_POST['pago'];
$fecha=$_POST['fechacomp'];


$sql="UPDATE  `compra en linea` SET `id`='$id',`nom_cliente`='$nom_cliente',`nom_producto`='$nom_prod',`tlfno_cliente`='$telefono',`direccion de entrega`='$direccion',`codigo postal`='$codigo',`metodo de pago`='$metodo',`fecha de compra`='$fecha' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./compra.php");
    }
?>
