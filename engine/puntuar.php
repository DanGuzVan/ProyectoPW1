<?php
  require('info.php');
  if(!isset($_GET['id'])){
    header('Location: /Proyecto_PW/index.php');
  }
  else{
    $id=$_GET['id'];
    $consulta="SELECT puntos FROM noticias WHERE id='$id';";
    $res=$mysqli->query($consulta);
    $dato=$res->fetch_assoc();
    $aux=$dato['puntos']+1;
    $consulta="UPDATE noticias SET puntos='$aux' WHERE id='$id';";
    $mysqli->query($consulta);
    header('Location: /Proyecto_PW/noticias.php?id='.$id);
  }
?>
