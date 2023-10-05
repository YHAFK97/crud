<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;

$con=mysqli_connect("localhost","root","","clinica");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){ //administrador
    header("location:index_admin.php");

}else
if($filas['id_rol']==2){ //cliente
header("location:index_cliente.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
