<?php 

class MvcController
{
	
	public function plantilla()
	{
		include "views/template.php";
	}

	public function enlacesPaginasController ()
	{
		if (isset($_GET["action"])) {
			$enlacesController = $_GET["action"];
		} else {
			$enlacesController = "index";
		}
		
		
		

		$respuesta = enlacesPaginas::EnlacesPaginasModel($enlacesController);
		
		include $respuesta;


	}

	//REGISTRO DE USUARIOS

	public function registroUsuarioController()
	 {
	 	
	 	
	 	if (isset($_POST["name"])) {
	 		$datosController = array(
	 					"name" => $_POST["name"],
	 					"email" => $_POST["email"],
	 					"password" => $_POST["password"]);

	 	     $respuesta = Datos::registroUsuarioModel($datosController,"users");
	 	    

	 	     if ($respuesta == "success") {
	 	     	header("location:index.php?action=ok");
	 	     }else{
	 	     	header("location:index.php");
	 	     }
	 	}


	 	

	 } 

	 //INGRESO USUARIOS

	 public function ingresoUsuarioController()
	 {
	 	if (isset($_POST["name"])) {
	 		$datosController = array(
	 					"name" => $_POST["name"],
	 					"password" => $_POST["password"]);

	 	     $respuesta = Datos::ingresoUsuarioModel($datosController,"users");
	 	   /* var_dump($respuesta["name"]) ;
	 	   */

	 	   

	 	    if ($respuesta["name"]==$_POST["name"] && $respuesta["password"]==$_POST["password"]) {

	 	    	
	 	    	$_SESSION["validar"] = true;


	 	    	
	 	    	header("location:index.php?action=usuarios");


	 	    } else {

	 	    	header("location:index.php?action=fallo");
	 	    }
	 	    

	 	     
	 	}


	 }


	 //VISTA DE USUARIOS

	 public function vistaUsuariosController()
	 {
	 	 $respuesta = Datos::vistaUsuarioModel("users");
	 	/* var_dump($respuesta[1][1]);*/
	 	 return $respuesta;
	 }

	//editar USUARIOS

	 public function editarUsuarioController()
	 {
	 	 $datos =$_GET["id"];
	 	 $respuesta = Datos::editarUsuarioModel($datos,"users");
	 	 return  $respuesta;
	 }

	//ACTUALIZAR USUARIOS
	 public function actualizarUsuarioController()
	 {

	 	if (isset($_POST["name"])) {
	 		$datosController = array("id" => $_POST["id"],
				 					"name" => $_POST["name"],
				 					"email" => $_POST["email"],
				 					"password" => $_POST["password"]);

             
	 		 $respuesta = Datos::actualizarUsuarioModel($datosController,"users");

	 		 if ($respuesta == "success") {
	 		 	 	     	header("location:index.php?action=cambio");
	 		  }else{
	 		 	 	     	echo "error";
	     	}
	 	} 
	 }


	 //BORRAR USUARIOS

	 public function borrarUsuarioController()
	 {
	 	
	 	if (isset($_GET["id"])) {
	 		 $datosController =$_GET["id"];
		 	 $respuesta = Datos::borrarUsuarioModel($datosController,"users");
		 	  if ($respuesta == "success") {
	 		 	 	     	header("location:index.php?action=borrado");
	 		  }
		 	}

	 	/* */
	 }








}




 ?>