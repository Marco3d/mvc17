<h2>Registro</h2>

<form method="post" action="">
  <div class="form-group">
    <label for="name">Nombre de usuario</label>
    <input type="text" class="form-control" name = "name"  required>
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control" name="email"  required>
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
 $registro = new MvcController;
 $registro->registroUsuarioController();

if (isset($_GET["action"]))

  {     if ($_GET["action"]=="ok") { ?>
           <div class="alert alert-success alert-dismissible fade in" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
              El usuario ha sido registrado con éxito.
           </div>
   <?php 
       } 
   }

 ?>