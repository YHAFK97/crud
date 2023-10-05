<?php 
   include("conexion.php");
   $con=conectar();

   $sql="SELECT *  FROM personal";
   $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
   <head>
       <title> PAGINA PERSONAL</title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
   <div id="wrapper">
<div id="banner-wrapper">
 <header>
   <div id="header-inner">
     <a href="#" id="logo">
       <img src="img/pics/fazt_logo.png" alt="">
     </a>
     <nav>
       <a href="#" id="menu-icon">
         <i class="fa fa-bars"></i>
       </a>
       <ul>
         <li>
           <a href="index.html" class="current">
             INICIO
           </a>
         </li>
         <li>
           <a href="cliente.php" class="current">
             CLIENTE
           </a>
         </li>
         <li>
           <a href="especialidad.php" class="current">
             ESPECIALIDAD
           </a>
         </li>
         <li>
           <a href="historia_clinica.php" class="current">
             HISTORIAS
           </a>
         </li>
         <li>
           <a href="personal.php" class="current">
             PERSONAL
           </a>
         </li>           
       </ul>
     </nav>
   </div>
 </header>
 <!-- SLIDER -->
 <div id="slide-wrap">
   <section class="slider">
     <ul class="slider1">
       <li><img src="img/slider/slider12.png" alt=""></li>
       <li><img src="img/slider/slider22.png" alt=""></li>
       <li><img src="img/slider/D6.jpg" alt=""></li>
       <li><img src="img/slider/slider.jpg" alt=""></li>
       <li><img src="img/slider/DO1.jpg" alt=""></li>
       <li><img src="img/slider/DO2.jpg" alt=""></li>
       <li><img src="img/slider/DO3.jpg" alt=""></li>
       <li><img src="img/slider/DO5.jpg" alt=""></li>
       <li><img src="img/slider/DO7.jpg" alt=""></li>
     </ul>
   </section>
 </div>
</div>
           <div class="container mt-5">
                   <div class="row"> 
                       
                       <div class="col-md-3">
                           <h1>INGRESAR DATOS</h1>
                               <form action="Apersonal.php" method="POST">                                                          
                                   <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres">
                                   <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                                   <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                   <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                   <input type="text" class="form-control mb-3" name="id_cargo" placeholder="Cargo">
                                   <input type="text" class="form-control mb-3" name="id_especialidad" placeholder="Especialidad">
                                   
                                   <input type="submit" class="btn btn-primary">
                               </form>
                       </div>
                       <div class="col-md-8">
                           <table class="table" >
                               <thead class="table-success table-striped" >
                                   <tr>
                                       <th>Id_Personal</th>
                                       <th>Nombres</th>
                                       <th>Apellidos</th>
                                       <th>Telefono</th>
                                       <th>Direccion</th>
                                   <!--    <th>Id_Cargo</th>
                                       <th>Id_Especialidad</th>     -->                                   
                                   </tr>
                               </thead>

                               <tbody>
                                       <?php
                                           while($row=mysqli_fetch_array($query)){
                                       ?>
                                           <tr>
                                               <th><?php  echo $row['id_personal']?></th>
                                               <th><?php  echo $row['nombre']?></th>
                                               <th><?php  echo $row['apellido']?></th>
                                               <th><?php  echo $row['telefono']?></th>    
                                               <th><?php  echo $row['direccion']?></th>
                                             <!--  <th><?php  echo $row['id_cargo']?></th> 
                                               <th><?php  echo $row['id_especialidad']?></th> -->
                                               <th><a href="Epersonal.php?id_personal=<?php echo $row['id_personal'] ?>" class="btn btn-info">Editar</a></th>
                                               <th><a href="Bpersonal.php?id_personal=<?php echo $row['id_personal'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                           </tr>
                                       <?php 
                                           }
                                       ?>
                               </tbody>
                           </table>
                       </div>
                   </div>  
           </div>
           <br><br>
 <div class="clearfix-padding"></div>
 <footer>
   <div class="banner-wrapper">
     <div class="icon-text">
       <div class="icon-text-icon">
         <ul class="footer-nav">
           <li>
             <a href="index.html">INICIO</a>
           </li>
           <li>
             <a href="cliente.php">CLIENTE</a>
           </li>
           <li>
             <a href="especialidad.php">ESPECIALIDAD</a>
           </li>
           <li>
             <a href="cita.php">RESERVA</a>
           </li>
           <li>
             <a href="historia_clinica.php">HISTORIAS</a>
           </li>
           <li>
             <a href="personal.php">PERSONAL</a>
           </li>
           <li>
             <a href="cargo.php">CARGO</a>
           </li>
         </ul>
       </div>
       <div class="icon-text-text">
         <ul class="social">
           <li>
             <a href="#">
               <i class="fa fa-envelope-o"></i>
             </a>
           </li>
           <li>
             <a href="#">
               <i class="fa fa-facebook"></i>
             </a>
           </li>
           <li>
             <a href="#">
               <i class="fa fa-twitter"></i>
             </a>
           </li>
           <li>
             <a href="#">
               <i class="fa fa-youtube"></i>
             </a>
           </li>
           <li>
             <a href="#">
               <i class="fa fa-instagram"></i>
             </a>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </footer>
 <footer class="second-footer">
   <p>
     &copy; <a href="index.html">ClinicaDental.com</a>
   </p>
 </footer>
 <script>
   $(document).ready(function(){
     $('.slider1').bxSlider({
       mode: 'fade',
     });
     $('.slider2').bxSlider({
       mode: 'fade',
     });
     $('.slider3').bxSlider({
       mode: 'fade',
     });
   });
 </script>
   </body>
</html>