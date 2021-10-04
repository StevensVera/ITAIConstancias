<?php

require_once "conexion.php";

class ModeloAdjuntosInformatica{

	//========== FUNCIÓN PARA INGRESAR DATOS =========//

    static public function mdlIngresarAdjuntosInformaticaSISAI($tabla,$datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,anios,taller) VALUES (:nombre,:anios,:taller)");

		$stmt ->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt ->bindParam(":anios", $datos["anios"], PDO::PARAM_STR);
		$stmt ->bindParam(":taller", $datos["taller"], PDO::PARAM_STR);

		if ($stmt -> execute()) {
 		
 		   return "ok";

 	    }else {

 		  return "error";
 	    } // else

    } // Funcion para Ingesar Curso de SISAI


	/* =============== MODELO PARA MOSTRAR LOS NOMBRES EN LA CONSTACION  ================ */

	static public function mdlMostrarAdjuntoPDFSISIA($tabla, $item, $valor){

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

	//=========================== FUNCIÓN PARA ELIMINAR DATOS ==============================//

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


	//=========================== FUNCIÓN PARA EDITAR DATOS ==============================//

	static public function mdlEditarAdjuntosInformaticaSISIA($tabla,$datos){

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

	//========================= FUNCIÓN MOSTRAR DATOS - EDITAR ============================//

    static public function mdlMostrarAdjuntosInformaticaSISAIEditar($tabla,$item,$valor){
	
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
	
	} // Funcion para mostrar los datos a editar.
  
	//====================== FUNCIÓN MOSTRAR DATOS EN TABLA (DATATABLE)  ====================/

	static public function mdlMostrarAdjuntoInformaticaSISAI($tabla, $item, $valor, $orden){

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

	} // FUNCION MOSTRAR DATOS EN TABLA




}