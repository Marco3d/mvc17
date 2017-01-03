<?php session_start(); 
  

?>
<nav class="navbar navbar-light bg-faded">
  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
  <div class="collapse navbar-toggleable-md" id="navbarResponsive">
    
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">

      <?php 
           
           if (empty($_SESSION["validar"]) ) { ?>
    
            <a class="nav-link" href="index.php?action=registro">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=ingreso">Ingresar</a>
            </li>
            
         <?php 

         }

         else {  ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=usuarios">Usuarios</a>
              </li>
              
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nombre</a>
                  <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                  <a class="dropdown-item" href="index.php?action=salir">Salir</a>
                   
                  </div>
              </li> 



       <?php 
         } 
       ?>
      

     
    </ul>
    
  </div>
</nav>