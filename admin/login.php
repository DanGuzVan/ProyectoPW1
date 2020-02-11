<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/Proyecto_PW/styles/admin/custom.css">
    </head>
    <header>
      <div class="card fixed-top text-white bg-dark text-center">
        <div class="card-header">
          <h1 class="display-5 card-text">Servicios de Administracion</h1>
        </div>
      </div>
    </header>
    <br><br><br><br><br><br><br><br><br>
  <body>
	   <div class="container-fluid">
       <div class="row">
         <div class="col-lg-12">
           <div class="card">
             <div class="loginBox">
               <img src="/Proyecto_PW/resources/logo.gif" class="img-responsive">
               <br><br>
               <form action="conecta.php" method="get">
                 <div class="form-group">
                   <input type="text" name="user" class="form-control input-lg" placeholder="Usuario" required>
                 </div>
                 <div class="form-group">
                   <input type="password" name="pass" class="form-control input-lg" placeholder="Clave" required>
                 </div>
                 <button type="submit" class="btn btn-outline-dark">Login</button>
               </form>
             </div>
           </div>
         </div>
       </div>
	   </div>
  </body>
  <br><br><br>
  <footer>
    <div class="card fixed-bottom text-white bg-dark text-center">
      <br>
        <p class="card-text">@GuzmanJimenezDanielEnrique ~ @MoralesGarciaLuisaAndrea</p>
    </div>
  </footer>
</html>
