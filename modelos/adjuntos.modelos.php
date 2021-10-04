<?php

require_once "conexion.php";

class ModeloAdjuntos{

	static public function mdlMostrarAdjunto($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	} // mdlMostrarAdjunto

	static public function mdlMostrarAdjuntosPDF($tabla, $item, $valor){

		/*=============================================
	=            Mostrar Revision          =
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

/* ================================================
		          INGRESAR ADJUNTOS
==================================================*/

	static public function mdlIngresarAdjuntos($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,anios,taller) VALUES (:nombre,:anios,:taller)");

		$stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt ->bindParam(":anios", $datos["anios"], PDO::PARAM_STR);
		$stmt ->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);

		if ($stmt -> execute()) {
 		
 		   return "ok";

 	    }else {

 		  return "error";
 	    } // else

	} // Funcion Ingresar Usuario

/* ================================================
		  MOSTRAR ADJUNTOS - EDITAR
==================================================*/

static public function mdlMostrarAdjuntosEditar($tabla,$item,$valor){

/* ======= MOSTRAR CATEGORIA ======= */

	if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

} // public function 


/*====================================================
				EDITAR CATEGORIA
======================================================*/

static public function mdlEditarAdjuntos($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, anios = :anios, taller = :taller  WHERE nombre = :nombre");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":anios", $datos["anios"], PDO::PARAM_STR);
		$stmt->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;
}

/*=============================================
	          BORRAR AREA
=============================================*/

	static public function mdlBorrarAdjuntos($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		 }else{

			return "error";	

		 }

		$stmt -> close(); 

		$stmt = null;

	}

/*=============================================
	MOSTAR AVISO DE EXISTENTE EXPEDIENTE
=============================================*/

static public function mdlMostrarAdjuntoExistente($tabla,$item,$valor){

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




} // class ModeloAdjuntos