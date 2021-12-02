<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM `compra en linea` WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" typt="text/css" href="../style.css">
    </head>
    <body>
    <header>
		
            <h1>Registro de Compra-Veterinaria Castillo</h1>
		</div>
	</header>	
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                            <?php echo "<h1>Actualizar datos de Compra: ".$id."</h1>"?>

                 <input type="hidden"  name="id" placeholder="Id" value="<?php echo $row['id']  ?>">

                <input type="text"  name="nombre" placeholder="Nombre" value="<?php echo $row['nom_cliente']  ?>">

                <input type="text" name="nomprod" placeholder="Nombre del producto" value="<?php echo $row['nom_producto']  ?>">

                <input type="text"   name="tlfno" placeholder="Teléfono" value="<?php echo $row['tlfno_cliente']  ?>">

                <input type="text"   name="direcc"placeholder="Dirección de entrega" value="<?php echo $row['direccion de entrega']  ?>">

                <input type="text"  name="codigo" placeholder="Código postal" value="<?php echo $row['codigo postal']  ?>">

                <input type="text"  name="pago" placeholder="Metodo de pago" value="<?php echo $row['metodo de pago']  ?>">

                <input type="date"  name="fechacomp" placeholder="Fecha de compra" value="<?php echo $row['fecha de compra']  ?>">

                <input type="submit"  class="btn btn-primary btn-block" value="Actualizar">


                    </form>
                    
                </div>
                <footer>
		<div class="wrapp">
            <p>Castillo Perez Jamila Itzel 5J-No lista 06 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
           <a href="https://github.com/JamilaCastilloPerez">https://github.com/JamilaCastilloPerez</a>
		</div>
	</footer>

    </body>
</html>