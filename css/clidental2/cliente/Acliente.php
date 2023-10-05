<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];

$sql="INSERT INTO cliente VALUES('$id_cliente', '$nombre','$apellido','$telefono','$direccion','$sexo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../cliente/ciente.php");
    
}else {

}
?>
