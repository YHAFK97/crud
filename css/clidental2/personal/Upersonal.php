<?php

include("conexion.php");
$con=conectar();

$id_personal=$_POST['id_personal'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$id_cargo=$_POST['id_cargo'];
$id_especialidad=$_POST['id_especialidad'];

$sql="UPDATE personal SET  nombre='$nombre',apellido='$apellido', direccion='$direccion', id_cargo='$id_cargo', id_especialidad='$id_especialidad' WHERE id_personal='$id_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>