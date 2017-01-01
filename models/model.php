<?php 

	class EnlacesPaginas
	{
		


		public static function EnlacesPaginasModel($enlacesModel)
		{
			
			if ($enlacesModel == "registro" ||
				$enlacesModel == "ingreso" ||
				$enlacesModel == "usuarios" ||
				$enlacesModel == "salir" 	) 
			{
				$module = "views/modules/".$enlacesModel.".php";
			}

				elseif ($enlacesModel == "index") {
					$module = "views/modules/inicio.php";
				}

			else{
					$module = "views/modules/inicio.php";
			}

			return $module;
		}
	
	}




 ?>