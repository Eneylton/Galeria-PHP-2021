<?php 
use \App\Session\Login;


 $usuariologado = Login:: getUsuarioLogado();

 $usuario = $usuariologado ? $usuariologado['nome'].
          
          '<a href="logout.php" class="text-light font-weigth-bold ml-2"> Sair </a>' :
          'Visitante: <a href="login.php" class="text-light font-weigth-bold ml-2">Entrar</a>'

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
	 <link href="assets/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
     <link href="assets/fontawesome-free-5.15.1-web/css/brands.css" rel="stylesheet">
     <link href="assets/fontawesome-free-5.15.1-web/css/solid.css" rel="stylesheet">
	
    <title>CRUD PHP</title>
  </head>

  <body class="bg-dark text-white">
  
  <div class="container">
   
    <div class="jumbotron bg-danger">
    
    <h2> <i class="fas fa-home" style="font-size:xx-large"></i> Eneylton Barros</h2>
    <p>  <?=$usuario ?> </p>

    <hr class="border-light">

      <div class="d-flex justify-content-start">
      
        
        
      </div>

      <a href="index.php" style="color:#fff">
       
         <i class="fas fa-home" style="font-size:large"></i> home | 
      
      </a>

      <a href="galeria-list.php" style="color:#fff">
      
         <i class="fab fa-artstation"></i> Galerias |
      
      </a>

      <a href="index.php" style="color:#fff">
      
         <i class="fab fa-artstation"></i> Usuário |
      
      </a>


      <a href="produto-list.php" style="color:#fff">
      
      <i class="fab fa-buffer"></i> Produtos 
      
      </a>

    </div>