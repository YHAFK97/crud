<?php 
    include("conexion.php");
    $con=conectar();

$id_historia=$_GET['id_historia'];

$sql="SELECT * FROM historia_clinica WHERE id_historia='$id_historia'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="Uhistoria.php" method="POST">
                    
                                <input type="hidden" name="id_historia" value="<?php echo $row['id_historia']  ?>">   
                                                                
                                <input type="date" class="form-control mb-3" name="fecha_apertura" placeholder="fecha_apertura" value="<?php echo $row['fecha_apertura']  ?>">                                                                
                                <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_cliente" value="<?php echo $row['id_cliente']  ?>">                                                                
                                <input type="text" class="form-control mb-3" name="id_personal" placeholder="id id_personal" value="<?php echo $row['id_personal']  ?>">                             
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>