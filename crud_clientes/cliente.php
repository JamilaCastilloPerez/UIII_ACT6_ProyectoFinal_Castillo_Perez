<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM `clientes`";
    $query=mysqli_query($con,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Clientes Veterinaria Castillo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
        <link rel="stylesheet" typt="text/css" href="../style.css">
        
    </head>
    <body>

         <!--Cabecera-->
    <header>
		<div class="wrapp">
			<div class="logo">
			</div>
            <h1 class=titulo>Registro de Clientes-Veterinaria Castillo</h1>
		</div>
	</header>	
     <!--Cabecera-->

      <!--Formulario de registro-->
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <b><h2>LLene el siguiente formulario:</h2></b>
                                <form action="insertar.php" method="POST">
        <input type="text" name="apellidop" placeholder="Apellido paterno">
    	<input type="text" name="apellidom" placeholder="Apellido materno">
        <input type="text" name="nombre" placeholder="Nombre(s)">
        <input type="date" name="fechadenac" placeholder="Fecha de nacimiento">
        <input type="email" name="correo" placeholder="Correo">
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="text" name="domicilio" placeholder="Domicilio">

    	<input type="submit" name="clientes">
                                   
                                </form>
                        </div>
     <!--Formulario de registro-->
     <!--Tabla-->
    
                        <div class="col-md-8">
                            <h2>Clientes registrados:</h2>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Nombre(s)</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Domicilio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){   
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['apellido paterno']?></th>
                                                <th><?php  echo $row['apellido materno']?></th>
                                                <th><?php  echo $row['Nombre(s)']?></th>    
                                                <th><?php  echo $row['fecha de nacimiento']?></th>  
                                                <th><?php  echo $row['correo']?></th>  
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['domicilio']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <!--Tabla-->
            <!--Pie de pagina-->
            <footer>
		<div class="wrapp">
        <a href="../index.php">INICIO |</a>  
        <a href="../crud_empleado/empleado.php">EMPLEADO |</a>  
        <a href="../crud_clientes/cliente.php">CLIENTE |</a>  
        <a href="../crud_compra en linea/compra.php">COMPRAS |</a>  
        <a href="../crud_agendar citas/agendarcita.php">AGENDAR CITAS |</a>  
        <a href="../contacto.php">CONTACTO</a>   
            <p>Castillo Perez Jamila Itzel 5J-No lista 06 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
           <a href="https://github.com/JamilaCastilloPerez">https://github.com/JamilaCastilloPerez</a>
		</div>
	</footer>
    <!--Pie de pagina-->
    </body>
</html>