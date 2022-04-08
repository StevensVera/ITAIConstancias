<?php

class ControladorAdjuntosSensibilizacionManejoPNT{


    static public function ctrMostrarAdjuntosSensibilizacionManejoPNT($item, $valor, $orden){

	$tabla = "tallersensibilizacionmanejopnt";

	$respuesta = ModeloAdjuntosSensibilizacionManejoPNT::mdlMostrarAdjuntoSensibilizacionManejoPNT($tabla, $item, $valor, $orden);

	return $respuesta;	
}


static public function ctrMostrarAdjuntosPDFSensibilizacionManejoPNT($item, $valor){

	$tabla = "tallersensibilizacionmanejopnt";

	$respuesta = ModeloAdjuntosSensibilizacionManejoPNT::mdlMostrarAdjuntosPDFSensibilizacionManejoPNT($tabla, $item, $valor);

	return $respuesta;	
}

 /* ============================================================
     EDITAR MOSTRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
    ============================================================= */

	static public function ctrMostrarAdjuntosEditarMonitoreoObligaciones($item, $valor){

		$tabla = "tallersensibilizacionmanejopnt";

		$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntosEditarMonitoreoObligaciones($tabla, $item, $valor);

		return $respuesta;
	
	}



/*=======================================================
	   EDITAR ADJUNTOS TABLA - MonitoreoObligaciones
 =======================================================*/

 static public function ctrCrearAdjuntosSensibilizacionManejoPNT(){

	if (isset($_POST["nuevoNombre"])) {
	
	$tabla = "tallersensibilizacionmanejopnt";

	$datos = array("nombre" => $_POST["nuevoNombre"],
				   "taller" => $_POST["nuevoTaller"],
				   "anios" => $_POST["nuevoAnios"]);

	$respuesta = ModeloAdjuntosSensibilizacionManejoPNT::mdlIngresarAdjuntosSensibilizacionManejoPNT($tabla,$datos);


	if($respuesta == "ok"){

				   echo '<script>

				   swal({

					   type: "success",
					   title: "¡El Taller, ha sido guardado correctamente!",
					   showConfirmButton: true,
					   confirmButtonText: "Cerrar"

				   }).then(function(result){

					   if(result.value){
					   
						   window.location = "taller-sensibilizacion-manejo-PNT";

					   }

				   });
			   

				   </script>';


			   } // if

	} // if isset

 }

  /*=====================================================
     BORRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
   =====================================================*/

   static public function ctrBorrarAdjuntosSensibilizacionManejoPNT(){

	if(isset($_GET["idAdjuntos"])){

		$tabla ="tallersensibilizacionmanejopnt";
		$datos = $_GET["idAdjuntos"];

		$respuesta = ModeloAdjuntosSensibilizacionManejoPNT::ctrBorrarAdjuntosSensibilizacionManejoPNT($tabla, $datos);

		if($respuesta == "ok"){

			echo'<script>

				swal({
					  type: "success",
					  title: "El Usuario ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "taller-sensibilizacion-manejo-PNT";

								}
							})

				</script>';
		}
	}
	
}

}