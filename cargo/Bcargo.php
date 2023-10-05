<?php

include("conexion.php");
$con=conectar();

$id_cargo=$_GET['id_cargo'];

$sql="DELETE FROM cargo  WHERE id_cargo='$id_cargo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cargo.php");
    }
?>