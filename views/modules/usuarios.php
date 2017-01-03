<?php 

   if (empty($_SESSION["validar"]) ) {
    header("location:index.php?action=ingreso");
  } 
  
  $vista = new MvcController;
  $datos = $vista->vistaUsuariosController();
  $vista->borrarUsuarioController();
  
 /* var_dump($datos);exit;*/
 ?>



<h2>Usuarios</h2>

  <?php 
if (isset($_GET["action"]))

  {     if ($_GET["action"]=="cambio") { ?>
           <div class="alert alert-success alert-dismissible fade in" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
              El usuario ha sido actualizado correctamente.
           </div>
   <?php 
       } 
   }
   ?>


   <?php 
if (isset($_GET["action"]))

  {     if ($_GET["action"]=="borrado") { ?>
           <div class="alert alert-success alert-dismissible fade in" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
              El usuario ha sido eliminado de la base de datos.
           </div>
   <?php 
       } 
   }
   ?>


<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($datos as $dato) { ?>
    <tr>
      <td><?php echo $dato["id"] ?></td>
      <td><?php echo $dato["name"] ?></td>
      <td><?php echo $dato["email"] ?></td>
      <td><a class="btn btn-primary" href="index.php?action=editar&id=<?php echo $dato["id"] ?>"  aria-label="Skip to main navigation">
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>

          <a class="btn btn-danger" href="index.php?action=usuarios&id=<?php echo $dato["id"] ?>"  onclick="return confirm('Quiere borrar el registro?')" aria-label="Delete">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </a>

      </td>

    </tr>

 <?php
  } ?>

 </tbody>
</table>

