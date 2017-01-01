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




}




 ?>