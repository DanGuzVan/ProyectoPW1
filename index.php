<!DOCTYPE html>
<?php require('engine/info.php'); ?>
<html>
    <head>
      <style type="text/css">
          .img{
            width:50%;
            heigh:50%;
          }
      </style>
        <title>¡Bienvenid@s!</title>
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
  <br><br><br>
	<div class="container">
		<!-- #################################################################################################################### -->
    <div class="row">
      <div class="col-sm-9">
        <?php
          $arr_nombres = array("\n","\n","\n","\n","\n","\n","\n","\n","\n");
          $arr_id = array(0,0,0,0,0,0,0,0,0);
          $consulta="SELECT * FROM noticias ORDER BY puntos DESC;";
          $res=$mysqli->query($consulta);
          $i=0;
          while ($dato=$res->fetch_assoc() and $i!=9){
              if(isset($dato['nombre'])){
                $arr_nombres[$i]=$dato['nombre'];
                $arr_id[$i]=$dato['id'];
              }
              else{
                $arr_nombres[$i]="Aun no hay noticias con puntos";
              }
              $i++;
          }
        ?>
        <br>
        <h1 class="display-5 font-italic text-success">Noticias Destacadas:</h1>
        <br>
        <!-- Inicia Grupo -->
        <div class="card-group">
          <div class="card border-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[0];?>.jpg">
            <div class="card-body text-success">
              <h5 class="card-title"><?php echo $arr_nombres[0];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $arr_id[0];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card text-white bg-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[1];?>.jpg">
            <div class="card-body">
              <h5 class="card-title"><?php echo $arr_nombres[1];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-dark" type="submit" name="id" value="<?php echo $arr_id[1];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card border-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[2];?>.jpg" style="width=100px; heigh=:100px;" >
            <div class="card-body text-success">
              <h5 class="card-title"><?php echo $arr_nombres[2];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $arr_id[2];?>">Saber mas</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Inicia Grupo -->
        <div class="card-group">
          <div class="card text-white bg-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[3];?>.jpg">
            <div class="card-body">
              <h5 class="card-title"><?php echo $arr_nombres[3];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-dark" type="submit" name="id" value="<?php echo $arr_id[3];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card border-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[4];?>.jpg">
            <div class="card-body text-success">
              <h5 class="card-title"><?php echo $arr_nombres[4];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $arr_id[4];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card text-white bg-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[5];?>.jpg">
            <div class="card-body">
              <h5 class="card-title"><?php echo $arr_nombres[5];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-dark" type="submit" name="id" value="<?php echo $arr_id[5];?>">Saber mas</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Inicia Grupo -->
        <div class="card-group">
          <div class="card border-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[6];?>.jpg">
            <div class="card-body text-success">
              <h5 class="card-title"><?php echo $arr_nombres[6];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $arr_id[6];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card text-white bg-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[7];?>.jpg">
            <div class="card-body">
              <h5 class="card-title"><?php echo $arr_nombres[7];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-dark" type="submit" name="id" value="<?php echo $arr_id[7];?>">Saber mas</button>
              </form>
            </div>
          </div>
          <!-- ############################################################################################ -->
          <div class="card border-success">
            <img class="card-img-top img-fluid" src="resources/noticias_img/<?php echo $arr_id[8];?>.jpg">
            <div class="card-body text-success">
              <h5 class="card-title"><?php echo $arr_nombres[8];?></h5>
              <form action="noticias.php" method="get">
                <button class="btn btn-outline-success" type="submit" name="id" value="<?php echo $arr_id[8];?>">Saber mas</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- #################################################################################################################### -->

      <div class="col-sm-3">
        <?php
          $arr_nombres = array("\n","\n","\n","\n","\n","\n");
          $arr_id = array(0,0,0,0,0,0);
          $arr_fechas = array("\n","\n","\n","\n","\n","\n");
          $consulta="SELECT * FROM noticias ORDER BY fecha DESC;";
          $res=$mysqli->query($consulta);
          $i=0;
          while ($dato=$res->fetch_assoc() and $i!=6){
              if(isset($dato['nombre'])){
                $arr_nombres[$i]=$dato['nombre'];
                $arr_fecha[$i]=$dato['fecha'];
                $arr_id[$i]=$dato['id'];
              }
              else{
                $arr_nombres[$i]="Aun no hay noticias recientes.";
              }
              $i++;
          }
        ?>
        <br>
        <h1 class="display-5 font-italic text-danger">Recientes:</h1>
        <br>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[0]; ?></div>
          <div class="card-body">
            <p class="card-text text-danger"><?php echo $arr_fecha[0]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[0];?>">Saber mas</button>
            </form>
          </div>
        </div>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[1]; ?></div>
          <div class="card-body">
            <p class="card-text text-danger"><?php echo $arr_fecha[1]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[1];?>">Saber mas</button>
            </form>
          </div>
        </div>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[2]; ?></div>
          <div class="card-body">
            <p class="card-text text-danger"><?php echo $arr_fecha[2]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[2];?>">Saber mas</button>
            </form>
          </div>
        </div>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[3]; ?></div>
          <div class="card-body text-danger">
            <p class="card-text"><?php echo $arr_fecha[3]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[3];?>">Saber mas</button>
            </form>
          </div>
        </div>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[4]; ?></div>
          <div class="card-body text-danger">
            <p class="card-text"><?php echo $arr_fecha[4]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[4];?>">Saber mas</button>
            </form>
          </div>
        </div>
        <div class="card border-danger">
          <div class="card-header"><?php echo $arr_nombres[5]; ?></div>
          <div class="card-body text-danger">
            <p class="card-text"><?php echo $arr_fecha[5]; ?></p>
            <form action="noticias.php" method="get">
              <button class="btn btn-outline-danger" type="submit" name="id" value="<?php echo $arr_id[5];?>">Saber mas</button>
            </form>
          </div>
        </div>
      </div>
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
