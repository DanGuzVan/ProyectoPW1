<!DOCTYPE html>
<?php
session_start();
require('mysqli.php');
if($_SESSION['loggedin']==false){
  header('Location: /Proyecto_PW/admin/login.php');
}
else {
  if(!isset($_GET['id'])){
    header('Location: /Proyecto_PW/admin/principal.php');
  }
  else {
    $id=$_GET['id'];
    $consulta="SELECT * FROM noticias WHERE id='$id';";
    $res=$mysqli->query($consulta);
    $noticia=$res->fetch_assoc();
    if(isset($_GET['eliminar'])){
      $id=$_GET['id'];
      $consulta="DELETE FROM noticias WHERE id='$id';";
      $res=$mysqli->query($consulta);
      header('Location: /Proyecto_PW/admin/principal.php');
    }
  }
}
?>
<html>
    <head>
        <title>Eliminar Noticia</title>
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
          <h1 class="display-6 card-text">Eliminar Noticia</h1>
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
              <p class="text-class">Nota se dara de baja la noticia <?php echo $noticia['nombre'];?> del autor <?php echo $noticia['autor'];?></p>
              <br>
              <input type="hidden" name="id" value="<?php echo $noticia['id'];?>">
              <button type="submit" class="btn btn-danger" name="eliminar" value="1">Eliminar</button>
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
