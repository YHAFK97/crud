<?php
include("conexion.php");
$con=conectar();

$id_cargo=$_POST['id_cargo'];
$cargo=$_POST['cargo'];

$sql="INSERT INTO cargo VALUES('$id_cargo', '$cargo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cargo.php");
    
}else {

}
?>