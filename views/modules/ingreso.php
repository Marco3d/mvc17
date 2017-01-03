<h2>Ingreso</h2>

<form method="post">
  <div class="form-group">
    <label for="name">Nombre de usuario</label>
    <input type="text" class="form-control" name = "name"  required>
  </div>
 
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" name="password"  required>
  </div>
   <div class="form-group">
   <button type="submit" class="btn btn-primary">Enviar</button>
  </div>

</form>

<?php 
 
   $ingreso = new MvcController;
   $ingreso->ingresoUsuarioController();


   if (isset($_GET["action"]))

  {     if ($_GET["action"]=="fallo") { ?>
           <div class="alert alert-danger alert-dismissible fade in" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
              Nombre de usuario o contraseña inválidos.
           </div>
   <?php 
       } 
   }


 ?>