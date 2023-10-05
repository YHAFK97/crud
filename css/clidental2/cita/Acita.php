<?php
include("conexion.php");
$con=conectar();

$id_cita=$_POST['id_cita'];
$fecha=$_POST['fecha'];
$turno=$_POST['turno'];
$id_especialidad=$_POST['id_especialidad'];
$id_cliente=$_POST['id_cliente'];


$sql="INSERT INTO cita VALUES('$id_cita', '$fecha', '$turno', '$id_especialidad', '$id_cliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cita.php");
    
}else {

}
?>