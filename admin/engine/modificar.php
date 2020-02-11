<!DOCTYPE html>
<?php
session_start();
require('mysqli.php');
if($_SESSION['loggedin']==false){
  header('Location: /Proyecto_PW/admin/login.php');
}
else{
  if(!isset($_GET['id'])){
    header('Location: /Proyecto_PW/admin/principal.php');
  }
  else{
    $id=$_GET['id'];
    $consulta="SELECT * FROM noticias WHERE id='$id';";
    $res=$mysqli->query($consulta);
    $noticia=$res->fetch_assoc();
    if($noticia['categoria']==1){
      $categoria="Deportes";
    }
    else if($noticia['categoria']==2){
      $categoria="Nacionar/Internacional";
    }
    else if($noticia['categoria']==3){
      $categoria="Entretenimiento";
    }
    else{
      $categoria="Otros";
    }
    if(isset($_GET['modifica'])){
      $nombre=$_GET['nombre'];
      $autor=$_GET['autor'];
      $contenido=$_GET['contenido'];
      $puntos=0;
      $categoria=$_GET['categoria'];
      $consulta="UPDATE noticias SET id='$id', nombre='$nombre', autor='$autor', contenido='$contenido', categoria='$categoria' WHERE id='$id';";
      $res=$mysqli->query($consulta);
      header('Location: /Proyecto_PW/admin/principal.php');
    }
  }
}
?>
<html>
    <head>
        <title>Modificar Noticia</title>
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
          <h1 class="display-6 card-text">Modificiar Noticia</h1>
        </div>
      </div>
    </header>
    <br><br><br><br><br><br>
	<div class="container">
		<!-- #################################################################################################################### -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card bg-light">
          <div class="card-body text-dark">
            <br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <div class="form-group">
                <label for="categoria">Categoria Actual: <?php echo $categoria;?></label><br>
                <label for="categoria">Nueva Categoria:</label>
                <select required id="categoria" class="form-control" name="categoria">
                  <option value="1">Deportes</option>
                  <option value="2">Nacional/Internacional</option>
                  <option value="3">Entretenimiento</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre Actual: <?php echo $noticia['nombre'];?></label>
                <input required type="text" class="form-control" aria-describedby="titulo" name="nombre" value="" placeholder="Nuevo Titulo">
                <small id="titulo" class="form-text text-muted">Pequeña descripcion de la noticia.</small>
              </div>
              <div class="form-group">
                <label for="autor">Autor Actual: <?php echo $noticia['autor'];?></label>
                <input required type="text" class="form-control" aria-describedby="autor" name="autor" value="" placeholder="Autor">
                <small id="autor" class="form-text text-muted">Esta informacion no podra ser modificada posteriormente.</small>
              </div>
              <div class="form-group">
                <textarea required rows="5" type="text" class="form-control" aria-describedby="contenido" name="contenido" value="" placeholder="Nuevo Contenido"></textarea>
                <small id="contenido" class="form-text text-muted">Descripcion completa de la noticia (cuerpo de la noticia).</small>
              </div>
              <br>
              <input type="hidden" name="id" value="<?php echo $noticia['id'];?>">
              <button type="submit" class="btn btn-primary" name="modifica" value="1">Modificiar</button>
            </form>
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
