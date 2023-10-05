<?php

include("conexion.php");
$con=conectar();

$id_cita=$_GET['id_cita'];

$sql="DELETE FROM cita  WHERE id_cita='$id_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php");
    }
?>