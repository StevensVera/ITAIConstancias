<?php

class ControladorAdjuntosArchivoGestion{

/*=======================================================
                    MOSTRAR ADJUNTOS TABLA
  =======================================================*/

static public function ctrMostrarAdjuntosArchivoGestion($item, $valor, $orden){

 	$tabla = "tallerarchivosgestion";

 	$respuesta = ModeloAdjuntosArchivoGestion::mdlMostrarAdjuntoArchivoGestion($tabla, $item, $valor, $orden);

 	return $respuesta;	

 }


 /* =============== CONTROLADOR PARA MOSTRAR LOS NOMBRES EN LA CONSTACION  ================ NO */

 static public function ctrMostrarAdjuntosPDFArchivoGestion($item, $valor){

	$tabla = "tallerarchivosgestion";

	$respuesta = ModeloAdjuntosArchivoGestion::mdlMostrarAdjuntosPDFArchivoGestion($tabla, $item, $valor);

	return $respuesta;	
}

 /*=======================================================
                    EDITAR ADJUNTOS - NO
  =======================================================*/

 static public function ctrEditarAdjuntosArchivoGestion(){

 	if(isset($_POST["EditarNombre"])){

			   	$tabla = "tallerarchivosgestion";

			   	$datos = array("id"=>$_POST["idAdjuntos"],
			   				   "nombre"=>$_POST["EditarNombre"],
								"anios"=>$_POST["EditarAnios"],
					           "taller"=>$_POST["EditarTaller"]);

			   	$respuesta = ModeloAdjuntosArchivoGestion::mdlEditarAdjuntosArchivoGestion($tabla, $datos);

			   	if($respuesta == "ok"){

			  echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-archivosgestion";

									}
								})

					</script>';

				}

		}

   

 }


 /*=======================================================
                    CREAR ADJUNTOS  - SI
  =======================================================*/

 static public function ctrCrearAdjuntosArchivoGestion(){

 	if (isset($_POST["nuevoNombre"])) {
 	
 	$tabla = "tallerarchivosgestion";

 	$datos = array("nombre" => $_POST["nuevoNombre"],
                   
				   "anios" => $_POST["nuevoAnios"],
                    "taller" => $_POST["nuevoTaller"]);

 	$respuesta = ModeloAdjuntosArchivoGestion::mdlIngresarAdjuntosArchivoGestion($tabla,$datos);


 	if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "taller-archivosgestion";

						}

					});
				

					</script>';


				} // if

 	} // if isset


 } // funcion crear Adjuntos


 /* ==========================================
  			  EDITAR MOSTRAR ADJUNTOS - NO
   ============================================ */

static public function ctrMostrarAdjuntosEditarArchivoGestion($item, $valor){

		$tabla = "tallerarchivosgestion";

		$respuesta = ModeloAdjuntosArchivoGestion::mdlMostrarAdjuntosEditarArchivoGestion($tabla, $item, $valor);

		return $respuesta;
	
	}

 /*=============================================
	           BORRAR ADJUNTO - NO
 =============================================*/

	static public function ctrBorrarAdjuntosArchivoGestion(){

		if(isset($_GET["idAdjuntos"])){

			$tabla ="tallerarchivosgestion";
			$datos = $_GET["idAdjuntos"];

			$respuesta = ModeloAdjuntosArchivoGestion::mdlBorrarAdjuntosArchivoGestion($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-archivosgestion";

									}
								})

					</script>';
			}
		}
		
	}

	 /*=============================================
	           MOSTRAR AVISO AJUNTOS EXISTENTE - NO
	=============================================*/

	static public function ctrMostrarAdjuntosExistenteArchivoGestion($item,$valor){

		$tabla = "adjuntos";

		$respuesta = ModeloAdjuntosArchivoGestion::mdlMostrarAdjuntoExistenteArchivoGestion($tabla, $item, $valor);

		return $respuesta;

	}




} //class Adjunto