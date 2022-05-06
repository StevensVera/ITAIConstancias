<?php

require_once "conexion.php";

class ModeloAdjuntosSensibilizacionManejoPNT{
    
    static public function mdlMostrarAdjuntoSensibilizacionManejoPNT($tabla, $item, $valor, $orden){

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

    static public function mdlMostrarAdjuntosPDFSensibilizacionManejoPNT($tabla, $item, $valor){

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

	/*====================================================
				EDITAR CATEGORIA
     ======================================================*/

static public function mdlEditarAdjuntosSensibilizacionManejoPNT($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, anios = :anios, correo = :correo, taller = :taller  WHERE correo = :correo");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":anios", $datos["anios"], PDO::PARAM_STR);
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

	/* ================================================
			  INGRESAR ADJUNTOS
    ==================================================*/

	static public function mdlIngresarAdjuntosSensibilizacionManejoPNT($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,taller,anios) VALUES (:nombre,:taller,:anios)");

		$stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt ->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);
		$stmt ->bindParam(":anios", $datos["anios"], PDO::PARAM_STR);

		if ($stmt -> execute()) {
		
			return "ok";

		}else {

		return "error";

		} // else

	} // Funcion Ingresar Usuario
	

	/*=============================================
		  BORRAR AREA
	=============================================*/

	static public function ctrBorrarAdjuntosSensibilizacionManejoPNT($tabla, $datos){

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

	/* ================================================
	          MOSTRAR ADJUNTOS - EDITAR
    ==================================================*/

static public function mdlMostrarAdjuntosSensibilizacionManejoPNT($tabla,$item,$valor){

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

	


 }