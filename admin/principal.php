<!DOCTYPE html>
<?php
session_start();
require('engine/mysqli.php');
if($_SESSION['loggedin']==false){
  header('Location: login.php');
}
else {
  if(isset($_GET['gestiona']) && isset($_GET['noticia_id'])){
    $noticia_id=$_GET['noticia_id'];
    $consulta="SELECT * FROM noticias WHERE id='$noticia_id';";
    $res=$mysqli->query($consulta);
    $noticia=$res->fetch_assoc();
  }
}
?>
<html>
    <head>
        <title>Panel principal</title>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel='stylesheet' href='styles/base.css'>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header>
      <div class="card fixed-top text-white bg-dark text-center">
        <div class="card-header">
          <h1 class="display-6 card-text">Panel principal</h1>
          <form action="logout.php" method="get">
            <button class="btn btn-outline-warning" type="submit">Cerrar Sesion</button>
          </form>
        </div>
      </div>
    </header>
    <br><br><br><br><br><br><br>
	<div class="container">
		<!-- #################################################################################################################### -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card bg-light">
          <div class="card-header bg-light">Gestion de noticias.</div>
          <div class="card-body text-dark">
            <form action="engine/agregar.php" method="get">
              <button class="btn btn-primary" type="submit">Agregar Noticia</button>
            </form>
            <br><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <div class="form-group">
                <select multiple class="form-control" name="noticia_id">
                  <?php
                    $consulta="SELECT * FROM noticias;";
                    $res=$mysqli->query($consulta);
                    print('<option value="false">Clear</option>');
                    while ($dato=$res->fetch_assoc()) {
                      print('<option value="'.$dato['id'].'">'.$dato['nombre'].'</option>');
                    }
                   ?>
                </select>
                <br>
                <button class="btn btn-primary" name="gestiona" type="submit">Consultar Noticia</button>
              </div>
            </form>
            <br><br>
            <?php
              if(isset($noticia)){
                if($noticia['categoria']==1){
                  $categoria="Deportes";
                }
                else if($noticia['categoria']==2){
                  $categoria="Nacional/Internacional";
                }
                else if($noticia['categoria']==3){
                  $categoria="Entretenimiento";
                }
                else{
                  $categoria="Otros";
                }
                print('<ul class="list-group">');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Titulo:</h5>');
                print('<span class="alert alert-success" role="alert">'.$noticia['nombre'].'</span');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Autor:</h5>');
                print('<span class="alert alert-success" role="alert">'.$noticia['autor'].'</span');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Fecha:</h5>');
                print('<span class="alert alert-success" role="alert">'.$noticia['fecha'].'</span');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Contenido:</h5>');
                print('<span class="alert alert-success" role="alert">'.$noticia['contenido'].'</span');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Puntos:</h5>');
                print('<span class="alert alert-success" role="alert">'.$noticia['puntos'].'</span');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<h5 class="card-title">Categoria:</h5>');
                print('<span class="alert alert-success" role="alert">'.$categoria.'</span');
                print('</li>');
                print('</li>');
                print('<li class="list-group-item d-flex justify-content-between align-items-center">');
                print('<img src="/Proyecto_PW/resources/noticias_img/'.$noticia['id'].'.jpg" class="img-fluid">');
                print('</li>');
                print('</ul>');
                print('<br>');
                print('<form action="engine/modificar.php" method="get">');
                print('<button class="btn btn-outline-dark" type="submit" name="id" value="'.$noticia['id'].'">Modificar</button>');
                print('</form>');
                print('<br>');
                print('<form action="engine/eliminar.php" method="get">');
                print('<button class="btn btn-outline-dark" type="submit" name="id" value="'.$noticia['id'].'">Eliminar</button>');
                print('</form>');
              }
              else{
                echo "Selecciona una noticia para mostrar su informacion.";
              }
             ?>
          </div>
        </div>
      </div>
    </div>
    <!-- #################################################################################################################### -->
	</div>
  <br><br><br>
  <footer>
    <div class="card fixed-bottom text-white bg-dark text-center">
      <br>
        <p class="card-text">@GuzmanJimenezDanielEnrique ~ @MoralesGarciaLuisaAndrea</p>
    </div>
  </footer>
  </body>
</html>
