<?php

include("conexion.php");
$con=conectar();

$id_historia=$_GET['id_historia'];

$sql="DELETE FROM historia_clinica  WHERE id_historia='$id_historia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: historia_clinica.php");
    }
?>