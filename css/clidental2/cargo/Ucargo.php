<?php

include("conexion.php");
$con=conectar();

$id_cargo=$_POST['id_cargo'];
$cargo=$_POST['cargo'];

$sql="UPDATE cargo SET  cargo='$cargo' WHERE id_cargo='$id_cargo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cargo.php");
    }
?>