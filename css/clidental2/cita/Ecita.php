<?php 
    include("conexion.php");
    $con=conectar();

$id_cita=$_GET['id_cita'];

$sql="SELECT * FROM cita WHERE id_cita='$id_cita'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
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
                    <form action="Ucita.php" method="POST">
                    
                                <input type="hidden" name="id_cita" value="<?php echo $row['id_cita']  ?>">   
                                                                
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">                                                                
                                <input type="text" class="form-control mb-3" name="turno" placeholder="turno" value="<?php echo $row['turno']  ?>">                                                                
                                <input type="text" class="form-control mb-3" name="id_especialidad" placeholder="id especialidad" value="<?php echo $row['id_especialidad']  ?>">                             
                                <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_cliente" value="<?php echo $row['id_cliente']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>