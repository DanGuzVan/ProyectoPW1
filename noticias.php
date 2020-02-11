<!DOCTYPE html>
<?php
  require('engine/info.php');
  if(!isset($_GET['id'])){
    header('Location: index.php');
  }
  else{
    $id=$_GET['id'];
    $consulta="SELECT * FROM noticias WHERE id='$id';";
    $res=$mysqli->query($consulta);
    $dato=$res->fetch_assoc();
  }
?>
<html>
    <head>
        <style type="text/css">
          img{
            width:100%;
            heigh:100%
          }
        </style>
        <title><?php echo $dato['nombre'];?></title>
        <meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/fondo.css">
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
        <div class="row">
          <div class="col-sm-8">
            <p>Autor: <?php echo $dato['autor'];?> Fecha: <?php echo $dato['fecha'];?></p>
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading"><?php echo $dato['nombre'];?></h4>
            </div>
            <img class="img-fluid" src="resources/noticias_img/<?php echo $dato['img'];?>.jpg">
            <br>
            <div class="card text-white bg-success mb-3">
              <div class="card-body">
                <p class="card-text"><?php echo $dato['contenido'];?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <br><br>
            <div class="card border-success mb-3">
              <div class="card-body text-success">
                <h5 class="card-title">Puntos</h5>
                <p class="card-text">total: <?php echo $dato['puntos'];?></p>
                <form action="engine/puntuar.php" method="get">
                  <button class="btn btn-primary" type="submit" name="id" value="<?php echo $id;?>">¡Puntuar!</button>
                </form>
              </div>
            </div>
            <br>
            <div class="card border-success mb-3">
              <div class="card-header bg-transparent border-success text-success">
                ¡Nos interesa tu opinion!
              </div>
              <div class="card-body text-success">
                <form action="engine/comentar.php" method="get">
                  <textarea required name="autor" class="form-control" rows="1" placeholder="Tu nombre..."></textarea>
                  <textarea required name="contenido" class="form-control" rows="5" placeholder="Dejanos tu comentario..."></textarea>
                  <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $id;?>">Comentar</button>
                </form>
              </div>
              <div class="card-footer bg-transparent border-success text-success">
                <form action="noticias.php" method="get">
                  <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo rand(1,9);?>">Noticia Sugerida</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
          $consulta="SELECT * FROM comentarios WHERE noticias_id='$id' ORDER BY fecha DESC;";
          $res=$mysqli->query($consulta);
          while ($dato=$res->fetch_assoc()) {
            print ('<div class="card border-success" style="max-width: 46rem;">');
            print('<div class="card-header bg-transparent border-success">'.$dato['autor'].' nos dice:</div>');
            print('<div class="card-body text-success">');
            print('<p class="card-text">'.$dato['contenido'].'</p>');
            print('</div>');
            print('<div class="card-footer bg-transparent border-success">'.$dato['fecha'].'</div>');
            print('</div>');
          }
         ?>
	    </div>
      <br><br><br><br>
      <footer>
        <div class="card fixed-bottom text-white bg-info text-center">
            <p class="card-text">@GuzmanJimenezDanielEnrique ~ @MoralesGarciaLuisaAndrea</p>
            <p class="card-text">LDN Noticias, todos los derechos reservados a sus respectivos creadores.</p>
        </div>
      </footer>
  </body>
</html>
