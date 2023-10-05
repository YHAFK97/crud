<?php

include("conexion.php");
$con=conectar();

$id_especialidad=$_GET['id_especialidad'];

$sql="DELETE FROM especialidad  WHERE id_especialidad='$id_especialidad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: especialidad.php");
    }
?>