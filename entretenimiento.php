<!DOCTYPE html>
<?php require('engine/info.php'); ?>
<html>
    <head>
        <title>Entretenimiento</title>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel='stylesheet' href='styles/base.css'>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contenido" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="resources/logo.gif"></a>
        <div class="collapse navbar-collapse" id="contenido">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="deportes.php">Deportes</a></li>
            <li class="nav-item active"><a class="nav-link" href="nacionalinternacional.php">Nacional e Internacional</a></li>
            <li class="nav-item active"><a class="nav-link" href="entretenimiento.php">Entretenimiento</a></li>
            <li class="nav-item active"><a class="nav-link" href="admin/login.php">Admin</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <br><br><br><br>
	<div class="container">

		<!-- #################################################################################################################### -->
    <div class="row">
      <?php
        $consulta="SELECT * FROM noticias WHERE categoria='3' ORDER BY puntos DESC;";
        $res=$mysqli->query($consulta);
        while ($dato=$res->fetch_assoc()) {
          print ('<div class="card border-danger">');
          print('<div class="card-header bg-transparent border-danger">'.$dato['autor'].'</div>');
          print('<div class="card-body text-danger">');
          print(' <h5 class="card-title">'.$dato['nombre'].'</h5>');
          print('<img class="img-fluid" src="resources/noticias_img/'.$dato['img'].'.jpg">');
          print('<br><br>');
          print('<p class="card-text">'.$dato['contenido'].'</p>');
          print('<form action="noticias.php" method="get">');
          print('<button class="btn btn-outline-danger" type="submit" name="id" value="'.$dato['id'].'">Ir a la noticia</button>');
          print('</form>');
          print('</div>');
          print('<div class="card-footer bg-transparent border-danger">'.$dato['fecha'].'</div>');
          print('</div>');
          print('<br><br><br>');
        }
       ?>
    </div>
    <!-- #################################################################################################################### -->

	</div>
  <br><br><br>
  <footer>
    <div class="card fixed-bottom text-white bg-info text-center">
        <p class="card-text">@GuzmanJimenezDanielEnrique ~ @MoralesGarciaLuisaAndrea</p>
        <p class="card-text">LDN Noticias, todos los derechos reservados a sus respectivos creadores.</p>
    </div>
  </footer>
  </body>
</html>
