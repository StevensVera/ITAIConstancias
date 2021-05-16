<?php

class ControladorAdjuntosPersonalesGeneralidades{

/*=======================================================
                    MOSTRAR ADJUNTOS TABLA
  =======================================================*/

static public function ctrMostrarAdjuntosPersonalesGeneralidades($item, $valor, $orden){

 	$tabla = "tallerpersonalesgeneralidades";

 	$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlMostrarAdjuntoPersonalesGeneralidades($tabla, $item, $valor, $orden);

 	return $respuesta;	
 }

 static public function ctrMostrarAdjuntosPDFPersonalesGeneralidades($item, $valor){

	$tabla = "tallerpersonalesgeneralidades";

	$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlMostrarAdjuntosPDFPersonalesGeneralidades($tabla, $item, $valor);

	return $respuesta;	
}


 /*=======================================================
                    EDITAR ADJUNTOS
  =======================================================*/

 static public function ctrEditarAdjuntosPersonalesGeneralidades(){

 	if(isset($_POST["EditarNombre"])){

			   	$tabla = "tallerpersonalesgeneralidades";

			   	$datos = array("id"=>$_POST["idAdjuntos"],
			   				   "nombre"=>$_POST["EditarNombre"],
					           "correo"=>$_POST["EditarCorreo"],
					           "taller"=>$_POST["EditarTaller"]);

			   	$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlEditarAdjuntosPersonalesGeneralidades($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-datos-generalidades";

									}
								})

					</script>';

				}

		}

   

 }


 /*=======================================================
                    CREAR ADJUNTOS  
  =======================================================*/

 static public function ctrCrearAdjuntosPersonalesGeneralidades(){

 	if (isset($_POST["nuevoNombre"])) {
 	
 	$tabla = "tallerpersonalesgeneralidades";

 	$datos = array("nombre" => $_POST["nuevoNombre"],
                   "correo" => $_POST["nuevoCorreo"],
                    "taller" => $_POST["nuevoTaller"]);

 	$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlIngresarAdjuntosPersonalesGeneralidades($tabla,$datos);


 	if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "taller-datos-generalidades";

						}

					});
				

					</script>';


				} // if

 	} // if isset


 } // funcion crear Adjuntos


 /* ==========================================
  			  EDITAR MOSTRAR ADJUNTOS
   ============================================ */

static public function ctrMostrarAdjuntosEditarPersonalesGeneralidades($item, $valor){

		$tabla = "tallerpersonalesgeneralidades";

		$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlMostrarAdjuntosEditarPersonalesGeneralidades($tabla, $item, $valor);

		return $respuesta;
	
	}

 /*=============================================
	           BORRAR ADJUNTO
 =============================================*/

	static public function ctrBorrarAdjuntosPersonalesGeneralidades(){

		if(isset($_GET["idAdjuntos"])){

			$tabla ="tallerpersonalesgeneralidades";
			$datos = $_GET["idAdjuntos"];

			$respuesta = ModeloAdjuntosPersonalesGeneralidades::mdlBorrarAdjuntosPersonalesGeneralidades($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-datos-generalidades";

									}
								})

					</script>';
			}
		}
		
	}

	 /*=============================================
	           MOSTRAR AVISO AJUNTOS EXISTENTE
	=============================================*/

	static public function ctrMostrarAdjuntosExistente($item,$valor){

		$tabla = "adjuntos";

		$respuesta = ModeloAdjuntos::mdlMostrarAdjuntoExistente($tabla, $item, $valor);

		return $respuesta;

	}




} //class Adjunto