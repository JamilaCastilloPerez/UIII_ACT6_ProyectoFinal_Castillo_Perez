<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM `agendar citas` WHERE id='$id'";
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
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
    <header>
		
            <h1>Registro de Empleados-Veterinaria Castillo</h1>
		</div>
	</header>	
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                            <?php echo "<h1>Actualizar datos de la cita: ".$id."</h1>"?>

                 <input type="hidden"  name="id" placeholder="id" value="<?php echo $row['id']  ?>">

                <input type="text"  name="nomcliente" placeholder="Nombres y apellidos" value="<?php echo $row['nom_cliente']  ?>">

                <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $row['tlfno_cliente']  ?>">

                <input type="email"   name="correo" placeholder="Correo" value="<?php echo $row['correo_cliente']  ?>">

                <input type="text"   name="mascota" placeholder="Tipo y especie de la mascota" value="<?php echo $row['mcota_especie_raza']  ?>">

                <input type="text"  name="edad_masc" placeholder="Edad de la mascota" value="<?php echo $row['edad_mascota']  ?>">

                <input type="date"  name="fechacita" placeholder="Fecha de la cita" value="<?php echo $row['fecha_cita']  ?>">

                <input type="text"  name="motivo" placeholder="Motivo de la cita" value="<?php echo $row['motivo']  ?>">



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