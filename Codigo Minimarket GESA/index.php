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
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li>
            <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadProductos(); ?></span></a>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <!--/.CONTINUAR -->

  <style>
    .text {
      color: white;
      text-overflow: center;
    }

    .jumbotron {
      position: relative;
      background: #000000 url("imagenes/banner2.jpg") center center;
      width: 100%;
      height: 100%;
      background-size: cover;
      overflow: hidden;
    }
  </style>
  <div class="container" id="main">
    <div class="row">
      <div class="jumbotron text">
        <div class="col-md-6">

          <h1 class="font-italic text-uppercase">Nuestros Mejores Productos</h1>
          <p><strong>Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</strong></p>
          <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Continue</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-md-offset-3">
    <h2 class="text-center">Nuestros Productos</h2>
  </div>

  <div class="container" id="main">
    <div class="row">
      <?php
      require 'vendor/autoload.php';
      $productos = new Minimarket\Productos;
      $info_productos = $productos->mostrar();
      $cantidad = count($info_productos);
      if ($cantidad > 0) {
        for ($x = 0; $x < $cantidad; $x++) {
          $item = $info_productos[$x];
      ?>
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="text-center titulo-producto"><?php print $item['titulo'] ?></h1>
              </div>
              <div class="panel-body">
                <?php
                $foto = 'upload/' . $item['foto'];
                if (file_exists($foto)) {
                ?>
                  <img src="<?php print $foto; ?>" class="img-responsive">
                  <p class="text-center"><?php print $item['precio'] ?> PEN </p>
                <?php } else { ?>
                  <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                <?php } ?>
              </div>
              <div class="panel-footer">
                <a href="carrito.php?ID=<?php print $item['ID'] ?>" class="btn btn-success btn-block">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                </a>
              </div>
            </div>
          </div>
        <?php
        }
      } else { ?>
        <h4>NO HAY REGISTROS</h4>

      <?php } ?>
    </div>
  </div>

  <!--/.CONTEINER PRODUCTOS -->

  <style>
    .footer {
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
  </style>

  <!-- /EDITAR -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 text-left">
          <h6 class="text-lead">CONTACTO:</h6>
          <h5 class="text-nowrap ">
            Los Rosales 188, Huancayo 12006<br>
            Minimarket-Gesa<br>
            Teléfonos: 3115988953 – 3112641818.<br>
          </h5>
        </div>
        <div class="col-xs-12 col-md-6 text-right">
          <h6 class="text lead">ENCUENTRANOS EN LAS REDES</h6>
          <div class="redes-footer">
            <a href="https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="none"></path>
                  <g fill="#ffffff">
                    <path d="M37.625,26.875c-5.87891,0 -10.75,4.87109 -10.75,10.75v96.75c0,5.87891 4.87109,10.75 10.75,10.75h96.75c5.87891,0 10.75,-4.87109 10.75,-10.75v-96.75c0,-5.87891 -4.87109,-10.75 -10.75,-10.75zM37.625,37.625h96.75v96.75h-27.88281v-36.28125h13.94141l2.01563,-16.125h-15.95703v-10.41406c0,-4.70312 1.15479,-7.89453 7.89453,-7.89453h8.73438v-14.61328c-1.49072,-0.18896 -6.65576,-0.50391 -12.59766,-0.50391c-12.38769,0 -20.82812,7.45361 -20.82812,21.33203v12.09375h-14.10937v16.125h14.10938v36.28125h-52.07031z"></path>
                  </g>
                </g>
              </svg></a>
            <a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="none"></path>
                  <g fill="#ffffff">
                    <path d="M26.875,26.875v118.25h118.25v-118.25zM37.625,37.625h96.75v96.75h-96.75zM100.45581,57.13037c-9.40625,0 -17.24182,8.48385 -15.0542,18.94898c-12.7925,-0.65575 -24.19321,-6.76713 -31.78809,-16.125c-1.33837,2.279 -2.08911,4.9088 -2.08911,7.77905c-0.00537,5.16 2.5711,9.97961 6.86572,12.83911c-2.5155,-0.09137 -4.91233,-0.79189 -6.9602,-1.94214v0.17847c0,7.49813 5.28833,13.71356 12.3457,15.14869c-2.44562,0.63962 -4.58445,0.6382 -6.96021,0.28345c1.95113,6.11675 7.64132,10.55776 14.41382,10.69751c-5.289,4.13875 -11.91932,6.58227 -19.13794,6.58227c-1.2685,0 -2.46931,-0.03872 -3.71631,-0.17847c6.82088,4.37525 14.93309,6.90771 23.68359,6.90771c28.3585,0 43.88183,-23.49446 43.88183,-43.88183c0,-0.66112 -0.00411,-1.33351 -0.05249,-1.99463c3.01,-2.18762 5.64106,-4.91964 7.72656,-7.99952c-2.7735,1.19863 -5.7746,2.07618 -8.88135,2.40405c3.19812,-1.90275 5.62099,-4.91854 6.77124,-8.49292c-2.96162,1.763 -6.30656,3.05518 -9.78418,3.71631c-2.82188,-3.01 -6.81928,-4.87109 -11.2644,-4.87109z"></path>
                  </g>
                </g>
              </svg></a>
            <a href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="none"></path>
                  <g fill="#ffffff">
                    <path d="M21.5,21.5v129h129v-129zM129,35.83333c3.956,0 7.16667,3.21067 7.16667,7.16667c0,3.956 -3.21067,7.16667 -7.16667,7.16667c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667c0,-3.956 3.21067,-7.16667 7.16667,-7.16667zM86,50.16667c19.78717,0 35.83333,16.04617 35.83333,35.83333c0,19.78717 -16.04617,35.83333 -35.83333,35.83333c-19.78717,0 -35.83333,-16.04617 -35.83333,-35.83333c0,-19.78717 16.04617,-35.83333 35.83333,-35.83333zM86,64.5c-11.87412,0 -21.5,9.62588 -21.5,21.5c0,11.87412 9.62588,21.5 21.5,21.5c11.87412,0 21.5,-9.62588 21.5,-21.5c0,-11.87412 -9.62588,-21.5 -21.5,-21.5z"></path>
                  </g>
                </g>
              </svg></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-right">
          <p class="text-small">José Miguel, arte y belleza @2016.<br> Todos los derechos reservados.</p>
        </div>

      </div>

    </div>
    </div>
    </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>