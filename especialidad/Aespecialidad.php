<?php
include("conexion.php");
$con=conectar();

$id_especialidad=$_POST['id_especialidad'];
$nombre=$_POST['nombre'];

$sql="INSERT INTO especialidad VALUES('$id_especialidad', '$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: especialidad.php");
    
}else {

}
?>
