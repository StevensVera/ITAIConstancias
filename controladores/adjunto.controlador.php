<?php

class ControladorAdjuntos{

/*=======================================================
                    MOSTRAR ADJUNTOS TABLA
  =======================================================*/

static public function ctrMostrarAdjuntos($item, $valor, $orden){

 	$tabla = "tallerarchivos";

 	$respuesta = ModeloAdjuntos::mdlMostrarAdjunto($tabla, $item, $valor, $orden);

 	return $respuesta;	
 }

 static public function ctrMostrarAdjuntosPDF($item, $valor){

	$tabla = "tallerarchivos";

	$respuesta = ModeloAdjuntos::mdlMostrarAdjuntosPDF($tabla, $item, $valor);

	return $respuesta;	
}


 /*=======================================================
                    EDITAR ADJUNTOS
  =======================================================*/

 static public function ctrEditarAdjuntos(){

 	if(isset($_POST["EditarNombre"])){

			   	$tabla = "tallerarchivos";

			   	$datos = array("id"=>$_POST["idAdjuntos"],
			   				   "nombre"=>$_POST["EditarNombre"],
								"anios"=>$_POST["EditarAnios"],
					           "taller"=>$_POST["EditarTaller"]);

			   	$respuesta = ModeloAdjuntos::mdlEditarAdjuntos($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-archivos";

									}
								})

					</script>';

				}

		}

   

 }


 /*=======================================================
                    CREAR ADJUNTOS  
  =======================================================*/

 static public function ctrCrearAdjuntos(){

 	if (isset($_POST["nuevoNombre"])) {
 	
 	$tabla = "tallerarchivos";

 	$datos = array("nombre" => $_POST["nuevoNombre"],
                   
				   "anios" => $_POST["nuevoAnios"],
                    "taller" => $_POST["nuevoTaller"]);

 	$respuesta = ModeloAdjuntos::mdlIngresarAdjuntos($tabla,$datos);


 	if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "taller-archivos";

						}

					});
				

					</script>';


				} // if

 	} // if isset


 } // funcion crear Adjuntos


 /* ==========================================
  			  EDITAR MOSTRAR ADJUNTOS
   ============================================ */

static public function ctrMostrarAdjuntosEditar($item, $valor){

		$tabla = "tallerarchivos";

		$respuesta = ModeloAdjuntos::mdlMostrarAdjuntosEditar($tabla, $item, $valor);

		return $respuesta;
	
	}

 /*=============================================
	           BORRAR ADJUNTO
 =============================================*/

	static public function ctrBorrarAdjuntos(){

		if(isset($_GET["idAdjuntos"])){

			$tabla ="tallerarchivos";
			$datos = $_GET["idAdjuntos"];

			$respuesta = ModeloAdjuntos::mdlBorrarAdjuntos($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-archivos";

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