<?php

include("conexion.php");
$con=conectar();

$id_cita=$_POST['id_cita'];
$fecha=$_POST['fecha'];
$turno=$_POST['turno'];
$id_especialidad=$_POST['id_especialidad'];
$id_cliente=$_POST['id_cliente'];


$sql="UPDATE cita SET  fecha='$fecha',turno='$turno', id_especialidad='$id_especialidad', id_cliente='$id_cliente' WHERE id_cita='$id_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cita.php");
    }
?>