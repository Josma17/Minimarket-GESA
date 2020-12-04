<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MINIMARKET GESA</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="icon" href="imagenes/Minimarket.ico">
</head>

<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MINIMARKET GESA</a>
      </div>

    </div>
  </nav>
<!-- jumbotron -->
  <style>
    .jumbotron {
      position: relative;
      background: #000000 url("imagenes/Compras-1-1.jpg") center center;
      width: 100%;
      height: 100%;
      background-size: cover;
      overflow: hidden;
    }
  </style>
  <div class="container" id="main">
    <div class="row">
      <div class="jumbotron">
        <div class="col-md-6 px-0 ">
          
            <h1 class="card-title h2 my-4 py-2 display-4 font-italic">Muchas Gracias por su compra!</h1>
            <p class="lead my-3">Tu pedido sera atendido en unos momentos. En breve recibirás un correo o un whatsapp para confirmar el pedido </p>
            <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a>
        
        </div>
      </div>
    </div>
  </div><!-- /container -->

  <blockquote class="blockquote text-center">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
  </blockquote>

  


  
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>