<?php 

    require_once "models/conexion.php";

	class Datos extends conexion
	{


		public static function registroUsuarioModel($datosModel,$tabla)

		{

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(name, email, password) VALUES (:name,:email,:password)");

			$stmt->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$stmt->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
			$stmt->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);


			if ($stmt->execute()) {
				return "success";
			} else {
				return "error";
			}
			
			$stmt->close();

		}


		public static function ingresoUsuarioModel($datosModel,$tabla)

		{

			$stmt = Conexion::conectar()->prepare("SELECT name,password FROM $tabla WHERE name = :name");

			$stmt->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			

			$stmt->execute();

			return $stmt->fetch();
			
			$stmt->close();
			

		}


		public static function vistaUsuarioModel($tabla)

		{

			$stmt = Conexion::conectar()->prepare("SELECT id,name,password,email FROM $tabla");
			$stmt->execute();

			return $stmt->fetchAll();
			
			
			$stmt->close();

		}

		public static function editarUsuarioModel($datosModel,$tabla)

		{

			$stmt = Conexion::conectar()->prepare("SELECT id,name,password,email FROM $tabla WHERE id = :id");

			$stmt->bindParam(":id",$datosModel,PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetch();


			

		}

		public static function actualizarUsuarioModel($datosModel,$tabla)

		{

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET name=:name,email=:email,password=:password WHERE id = :id");

			$stmt->bindParam(":id",$datosModel["id"],PDO::PARAM_INT);
			$stmt->bindParam(":name",$datosModel["name"],PDO::PARAM_STR);
			$stmt->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
			$stmt->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);

			if ($stmt->execute()) {
				return "success";
			} else {
				return "error";
			}
			
			$stmt->close();


		}


		public static function borrarUsuarioModel($datosModel,$tabla)

		{

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

			$stmt->bindParam(":id",$datosModel,PDO::PARAM_INT);
			$stmt->execute();

			if ($stmt->execute()) {
				return "success";
			} else {
				return "error";
			}
			
			$stmt->close();

			

		}



		
		
	}	



 ?>