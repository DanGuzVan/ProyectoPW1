<?php
require('engine/mysqli.php');
session_start();
$user=$_GET['user'];
$pass=$_GET['pass'];
$consulta="SELECT * FROM admin WHERE usuario='$user';";
$res=$mysqli->query($consulta);
if($res){
  $dato=$res->fetch_assoc();
  $pass_check=$dato['clave'];
  $enb=$dato['enb'];
  if($pass==$pass_check && $dato['enb']==1){
    $_SESSION['loggedin']=true;
    $_SESSION['name']=$user;
    $_SESSION['id']=$dato['id'];
    $_SESSION['start']=time();
    $_SESSION['expire']=$_SESSION['start']+(5*60);
    header('Location: principal.php');
  }
  else{
    header('Location: login.php');
  }
}
else{
  header('Location: login.php');
}
 ?>                                                                                                                                                                                                                                  
