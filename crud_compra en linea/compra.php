<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM `compra en linea`";
    $query=mysqli_query($con,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>COMPRA EN LINEA</title>
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
            <h1 >Compra nuestros productos en linea!!!</h1>
		</div>
	</header>	
     <!--Cabecera-->

      <!--Formulario de registro-->
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <b><h2>Para comprar alguno de nuestros productos,LLene el siguiente formulario:</h2></b>
                                <form action="insertar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
    	<input type="text" name="nomprod" placeholder="Nombre del producto">
        <input type="text" name="tlfno" placeholder="Teléfono">
        <input type="text" name="direcc" placeholder="Dirección de entrega">
        <input type="text" name="codigo" placeholder="Código postal">
        <input type="text" name="pago" placeholder="Metodo de pago">
        <input type="date" name="fechacomp" placeholder="Fecha de compra">

    	<input type="submit" name="compra en linea">
                                   
                                </form>
                        </div>
     <!--Formulario de registro-->
     <!--Tabla-->

                        <div class="col-md-8">
                            <h2>Compras registradas:</h2>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre del cliente</th>
                                        <th>Nombre del producto</th>
                                        <th>Teléfono</th>
                                        <th>Dirección de entrga</th>
                                        <th>Codigo postal</th>
                                        <th>Metodo de pago</th>
                                        <th>Fecha de compra</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                   </body>
                                        <?php
                                           while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nom_cliente']?></th>
                                                <th><?php  echo $row['nom_producto']?></th>
                                                <th><?php  echo $row['tlfno_cliente']?></th>    
                                                <th><?php  echo $row['direccion de entrega']?></th>  
                                                <th><?php  echo $row['codigo postal']?></th>  
                                                <th><?php  echo $row['metodo de pago']?></th>  
                                                <th><?php  echo $row['fecha de compra']?></th>  
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