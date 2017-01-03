<?php 

	/**
	* 
	*/
	class Conexion
	{
		
		public static function conectar()
		{
			$link = new PDO("mysql:host=localhost;dbname=mvc17","root","");
			/*var_dump($link);*/
			return $link;
			
		

		}
	}

	/*$a=new Conexion;
	$a->conectar();*/

 ?>