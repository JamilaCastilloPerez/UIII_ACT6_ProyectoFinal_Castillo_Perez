<?php
include("conexion.php");
$con=conectar();


$nom_cliente=$_POST['nombre'];
$nom_prod=$_POST['nomprod'];
$telefono=$_POST['tlfno'];
$direccion=$_POST['direcc'];
$codigo=$_POST['codigo'];
$metodo=$_POST['pago'];
$fecha=$_POST['fechacomp'];

$sql="INSERT INTO `compra en linea` VALUES ('','$nom_cliente','$nom_prod','$telefono','$direccion','$codigo','$metodo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ./compra.php");
    
}else {
}
?>
