<?php
include("conexion.php");
$con=conectar();

$id_historia=$_POST['id_historia'];
$fecha_apertura=$_POST['fecha_apertura'];
$id_cliente=$_POST['id_cliente'];
$id_personal=$_POST['id_personal'];
$descripcion=$_POST['descripcion'];

$sql="INSERT INTO historia_clinica VALUES('$id_historia', '$fecha_apertura','$id_cliente','$id_personal','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: historia_clinica.php");
    
}else {

}