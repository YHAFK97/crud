<?php

include("conexion.php");
$con=conectar();

$id_historia=$_POST['id_historia'];
$fecha_apertura=$_POST['fecha_apertura'];
$id_cliente=$_POST['id_cliente'];
$id_personal=$_POST['id_personal'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE historia_clinica SET  fecha_apertura='$fecha_apertura',id_cliente='$id_cliente', id_personal='$id_personal', descripcion='$descripcion' WHERE id_historia='$id_historia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: historia_clinica.php");
    }
?>