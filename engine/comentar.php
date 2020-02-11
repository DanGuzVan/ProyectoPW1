<?php
  require('info.php');
  if(!isset($_GET['id'])){
    header('Location: /Proyecto_PW/index.php');
  }
  else{
    $noti_id=$_GET['id'];
    $autor=$_GET['autor'];
    $contenido=$_GET['contenido'];
    $fecha=getdate();
    $consulta="SELECT MAX(id) FROM comentarios;";
    $res=$mysqli->query($consulta);
    $dato=mysqli_fetch_array($res);
    $act_id=(int)floor($dato[0]);
    $act_id=$act_id+1;
    $consulta="INSERT INTO comentarios(id,noticias_id,autor,contenido) VALUES('$act_id','$noti_id','$autor','$contenido');";
    $mysqli->query($consulta);
    header('Location: /Proyecto_PW/noticias.php?id='.$noti_id);
  }
?>
