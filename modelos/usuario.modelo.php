<?php

require_once "conexion.php";

class ModeloUsuarios{

	static public function mdlMostrarUsuario($tabla,$item,$valor){

		/*=============================================
		=            Section comment block            =
		=============================================*/
		
		if ($item != null) {

			$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$statement -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$statement -> execute();

			return $statement -> fetch();
			
		}else {

			$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$statement -> execute();

			return $statement -> fetchAll();

		}

		$statement -> close();

		$statement = null;

	}

	static public function mdlRegistrarUsuario($tabla,$datos){

		$statement = Conexion::conectar()->prepare("INSERT INTO $tabla(Area,NombrePersonal,NombreUsuario,Perfil,Contrasena) VALUES (:Area,:NombrePersonal,:NombreUsuario,:Perfil,:Contrasena)");

		$statement->bindParam(":Area", $datos["Area"], PDO::PARAM_STR);
		$statement->bindParam(":NombrePersonal", $datos["NombrePersonal"], PDO::PARAM_STR);
		$statement->bindParam(":NombreUsuario", $datos["NombreUsuario"], PDO::PARAM_STR);
		$statement->bindParam(":Perfil", $datos["Perfil"], PDO::PARAM_STR);
		$statement->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);

		if ($statement->execute()) {
			
			return "ok";
		}else{

			return "error";

		}
 
		$statement -> close();

		$statement = null;


	}

	static public function mdlRegistrarHistorial($tabla,$datos){

		$statement = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario) VALUES (:usuario)");

		$statement->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

		if ($statement->execute()) {
			
			return "ok";
		}else{

			return "error";

		}

		$statement -> close();

		$statement = null;


	}

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/* Actualizar el Usuarios */

	static public function mdlEditarUsuario($tabla, $datos){

		$statement = Conexion::conectar()->prepare("UPDATE $tabla SET Area = :Area, NombrePersonal = :NombrePersonal, NombreUsuario = :NombreUsuario, Perfil = :Perfil, Contrasena = :Contrasena WHERE NombreUsuario = :NombreUsuario");

		$statement -> bindParam(":Area", $datos["Area"], PDO::PARAM_STR);
		$statement -> bindParam(":NombrePersonal", $datos["NombrePersonal"], PDO::PARAM_STR);
		$statement -> bindParam(":NombreUsuario", $datos["NombreUsuario"], PDO::PARAM_STR);
		$statement -> bindParam(":Perfil", $datos["Perfil"], PDO::PARAM_STR);
		$statement -> bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
		


		if($statement->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$statement -> close();
		
		$statement = null;

	}

	
	/* Borrar Usuario */

	static public function mdlBorrarUsuario($tabla, $datos){

		$statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idusuario = :idusuario");

		$statement -> bindParam(":idusuario", $datos, PDO::PARAM_INT);

		if($statement-> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$statement -> close();

	}




}