<?php 

	class EnlacesPaginas
	{
		


		public static function EnlacesPaginasModel($enlacesModel)
		{
			
			if ($enlacesModel == "registro" ||
				$enlacesModel == "ingreso" ||
				$enlacesModel == "usuarios" ||
				$enlacesModel == "editar" ||
				$enlacesModel == "salir" 	) 
			{
				$module = "views/modules/".$enlacesModel.".php";
			}

				elseif ($enlacesModel == "index") {
					$module = "views/modules/inicio.php";
				}

				elseif ($enlacesModel == "ok") {
					$module = "views/modules/registro.php";
				}

				elseif ($enlacesModel == "fallo") {
					$module = "views/modules/ingreso.php";
				}

				elseif ($enlacesModel == "cambio") {
					$module = "views/modules/usuarios.php";
				}

				elseif ($enlacesModel == "borrado") {
					$module = "views/modules/usuarios.php";
				}

			else{
					$module = "views/modules/inicio.php";
			}

			return $module;
		}
	
	}




 ?>