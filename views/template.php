<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
	<header>
		<div class="row colmenu">
		    <div class="col-md-3">
		      <h1>LOGOTIPO</h1>
		    </div>
		    <div class="col-md-9">
		     <?php include "views/modules/navegacion.php"; ?> 
		    </div>
		    
		  </div>

	</header>

    <div class="container contenedor">
       <div class="card ">
      <div class="card-header">
        
      </div>
      <div class="card-block">
      <?php 

      $mvc = new MvcController;
      $mvc->enlacesPaginasController();

       ?>
        
      </div>
    </div>  
    </div>
   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>