<?php

include("conexion.php");
$con=conectar();

$id_personal=$_GET['id_personal'];

$sql="DELETE FROM personal  WHERE id_personal='$id_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>