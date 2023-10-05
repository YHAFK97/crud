<?php
include("conexion.php");
$con=conectar();

$id_personal=$_POST['id_personal'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$id_cargo=$_POST['id_cargo'];
$id_especialidad=$_POST['id_especialidad'];

$sql="INSERT INTO personal VALUES('$id_personal', '$nombre','$apellido','$telefono','$direccion','$id_cargo','$id_especialidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: personal.php");
    
}else {

}