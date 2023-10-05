<?php

include("conexion.php");
$con=conectar();

$id_especialidad=$_POST['id_especialidad'];
$nombre=$_POST['nombre'];


$sql="UPDATE especialidad SET  nombre='$nombre' WHERE id_especialidad='$id_especialidad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: especialidad.php");
    }
?>