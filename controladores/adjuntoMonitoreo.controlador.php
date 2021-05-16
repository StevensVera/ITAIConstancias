<?php

class ControladorAdjuntosMonitoreo{

/***********************************************
 * 
 * 
  FUNCIONALIDADES Y MANEJO DEL SISTAM DE PORTALES DE OBLIGACIONES DE TRANSPARENCIA (SIPOT)
 * 
 * *********************************************/


/*=======================================================
    MOSTRAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
  =======================================================*/

static public function ctrMostrarAdjuntosMonitoreoSIPOT($item, $valor, $orden){

 	$tabla = "tallermonitoreosipot";

 	$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntoMonitoreoSIPOT($tabla, $item, $valor, $orden);

 	return $respuesta;	
 }

 static public function ctrMostrarAdjuntosPDFMonitoreoSIPOT($item, $valor){

	$tabla = "tallermonitoreosipot";

	$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntosPDFMonitoreoSIPOT($tabla, $item, $valor);

	return $respuesta;	
}


 /*=======================================================
      EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
  =======================================================*/

 static public function ctrEditarAdjuntosMonitoreoSIPOT(){

 	if(isset($_POST["EditarNombre"])){

			   	$tabla = "tallermonitoreosipot";

			   	$datos = array("id"=>$_POST["idAdjuntos"],
			   				   "nombre"=>$_POST["EditarNombre"],
					           "correo"=>$_POST["EditarCorreo"],
					           "taller"=>$_POST["EditarTaller"]);

			   	$respuesta = ModeloAdjuntosMonitoreo::mdlEditarAdjuntosMonitoreoSIPOT($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-monitoreo-sipot";

									}
								})

					</script>';

				}

		}

   

 }


 /*=======================================================
        EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
  =======================================================*/

 static public function ctrCrearAdjuntosMonitoreoSIPOT(){

 	if (isset($_POST["nuevoNombre"])) {
 	
 	$tabla = "tallermonitoreosipot";

 	$datos = array("nombre" => $_POST["nuevoNombre"],
                   "correo" => $_POST["nuevoCorreo"],
                    "taller" => $_POST["nuevoTaller"]);

 	$respuesta = ModeloAdjuntosMonitoreo::mdlIngresarAdjuntosMonitoreoSIPOT($tabla,$datos);


 	if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El Usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "taller-monitoreo-sipot";

						}

					});
				

					</script>';


				} // if

 	} // if isset


 } // funcion crear Adjuntos


 /* ============================================================
     EDITAR MOSTRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
    ============================================================= */

static public function ctrMostrarAdjuntosEditarMonitoreoSIPOT($item, $valor){

		$tabla = "tallermonitoreosipot";

		$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntosEditarMonitoreoSIPOT($tabla, $item, $valor);

		return $respuesta;
	
	}

 /*=====================================================
     BORRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
   =====================================================*/

	static public function ctrBorrarAdjuntosMonitoreoSIPOT(){

		if(isset($_GET["idAdjuntos"])){

			$tabla ="tallermonitoreosipot";
			$datos = $_GET["idAdjuntos"];

			$respuesta = ModeloAdjuntosMonitoreo::mdlBorrarAdjuntosMonitoreoSIPOT($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-monitoreo-sipot";

									}
								})

					</script>';
			}
		}
		
	}

/***********************************************
 * 
 * 
  OBLIGACIONES DE TRANSPARENCIA Y LLENADO DE FORMATOS
 * 
 * *********************************************/

static public function ctrMostrarAdjuntosMonitoreoObligaciones($item, $valor, $orden){

	$tabla = "tallermonitoreosobligaciones";

	$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntoMonitoreoObligaciones($tabla, $item, $valor, $orden);

	return $respuesta;	
}

static public function ctrMostrarAdjuntosPDFMonitoreoObligaciones($item, $valor){

   $tabla = "tallermonitoreosobligaciones";

   $respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntosPDFMonitoreoObligaciones($tabla, $item, $valor);

   return $respuesta;	
}


/*=======================================================
	 EDITAR ADJUNTOS TABLA - MonitoreoObligaciones
 =======================================================*/

static public function ctrEditarAdjuntosMonitoreoObligaciones(){

	if(isset($_POST["EditarNombre"])){

				  $tabla = "tallermonitoreosobligaciones";

				  $datos = array("id"=>$_POST["idAdjuntos"],
								 "nombre"=>$_POST["EditarNombre"],
							  "correo"=>$_POST["EditarCorreo"],
							  "taller"=>$_POST["EditarTaller"]);

				  $respuesta = ModeloAdjuntosMonitoreo::mdlEditarAdjuntosMonitoreoObligaciones($tabla, $datos);

				  if($respuesta == "ok"){

				   echo'<script>

				   swal({
						 type: "success",
						 title: "El Usuario ha sido cambiado correctamente",
						 showConfirmButton: true,
						 confirmButtonText: "Cerrar"
						 }).then(function(result){
								   if (result.value) {

								   window.location = "taller-monitoreo-obligaciones";

								   }
							   })

				   </script>';

			   }

	   }
  
}


/*=======================================================
	   EDITAR ADJUNTOS TABLA - MonitoreoObligaciones
 =======================================================*/

static public function ctrCrearAdjuntosMonitoreoObligaciones(){

	if (isset($_POST["nuevoNombre"])) {
	
	$tabla = "tallermonitoreosobligaciones";

	$datos = array("nombre" => $_POST["nuevoNombre"],
				  "correo" => $_POST["nuevoCorreo"],
				   "taller" => $_POST["nuevoTaller"]);

	$respuesta = ModeloAdjuntosMonitoreo::mdlIngresarAdjuntosMonitoreoObligaciones($tabla,$datos);


	if($respuesta == "ok"){

				   echo '<script>

				   swal({

					   type: "success",
					   title: "¡El Usuario ha sido guardado correctamente!",
					   showConfirmButton: true,
					   confirmButtonText: "Cerrar"

				   }).then(function(result){

					   if(result.value){
					   
						   window.location = "taller-monitoreo-obligaciones";

					   }

				   });
			   

				   </script>';


			   } // if

	} // if isset


} // funcion crear Adjuntos

 /* ============================================================
     EDITAR MOSTRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
    ============================================================= */

	static public function ctrMostrarAdjuntosEditarMonitoreoObligaciones($item, $valor){

		$tabla = "tallermonitoreosobligaciones";

		$respuesta = ModeloAdjuntosMonitoreo::mdlMostrarAdjuntosEditarMonitoreoObligaciones($tabla, $item, $valor);

		return $respuesta;
	
	}

 /*=====================================================
     BORRAR EDITAR ADJUNTOS TABLA - TALLERMONITOREOSIPOT
   =====================================================*/

	static public function ctrBorrarAdjuntosMonitoreoObligaciones(){

		if(isset($_GET["idAdjuntos"])){

			$tabla ="tallermonitoreosobligaciones";
			$datos = $_GET["idAdjuntos"];

			$respuesta = ModeloAdjuntosMonitoreo::mdlBorrarAdjuntosMonitoreoObligaciones($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Usuario ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "taller-monitoreo-obligaciones";

									}
								})

					</script>';
			}
		}
		
	}




} //class Adjunto