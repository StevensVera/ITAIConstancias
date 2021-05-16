<?php

require_once "conexion.php";

class ModeloAdjuntosMonitoreo{

/***********************************************
 * 
 * 
  FUNCIONALIDADES Y MANEJO DEL SISTAM DE PORTALES DE OBLIGACIONES DE TRANSPARENCIA (SIPOT)
 * 
 * *********************************************/
	
	static public function mdlMostrarAdjuntoMonitoreoSIPOT($tabla, $item, $valor, $orden){

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

	static public function mdlMostrarAdjuntosPDFMonitoreoSIPOT($tabla, $item, $valor){

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

	static public function mdlIngresarAdjuntosMonitoreoSIPOT($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,correo,taller) VALUES (:nombre,:correo,:taller)");

		$stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt ->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
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

static public function mdlMostrarAdjuntosEditarMonitoreoSIPOT($tabla,$item,$valor){

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

static public function mdlEditarAdjuntosMonitoreoSIPOT($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, correo = :correo, taller = :taller  WHERE nombre = :nombre");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
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

	static public function mdlBorrarAdjuntosMonitoreoSIPOT($tabla, $datos){

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

/***********************************************
 * 
 * 
  OBLIGACIONES DE TRANSPARENCIA Y LLENADO DE FORMATOS
 * 
 * *********************************************/	

static public function mdlMostrarAdjuntoMonitoreoObligaciones($tabla, $item, $valor, $orden){

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

static public function mdlMostrarAdjuntosPDFMonitoreoObligaciones($tabla, $item, $valor){

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

static public function mdlIngresarAdjuntosMonitoreoObligaciones($tabla,$datos){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,correo,taller) VALUES (:nombre,:correo,:taller)");

	$stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
	$stmt ->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
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

static public function mdlMostrarAdjuntosEditarMonitoreoObligaciones($tabla,$item,$valor){

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

static public function mdlEditarAdjuntosMonitoreoObligaciones($tabla,$datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, correo = :correo, taller = :taller  WHERE nombre = :nombre");

	$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
	$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
	$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
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

static public function mdlBorrarAdjuntosMonitoreoObligaciones($tabla, $datos){

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


} // class ModeloAdjuntos