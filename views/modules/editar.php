<?php 
$editar = new MvcController();

$datos = $editar->editarUsuarioController();
$editar->actualizarUsuarioController();
/*var_dump($datos)*/



 ?>
<h2>Editar</h2>

<form method="post" >
<input type="hidden"  value = "<?php echo $datos["id"] ?>" name ="id" >
  <div class="form-group">
    <label for="name">Nombre de usuario</label>
    <input type="text" class="form-control" name = "name"  value="<?php echo $datos["name"] ?>" >
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $datos["email"] ?>" >
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="text" class="form-control" name="password" value="<?php echo $datos["password"] ?>" >
  </div>
  
   <div class="form-group">
   <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>

</form>


