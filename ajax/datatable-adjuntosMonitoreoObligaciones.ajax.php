<?php

/* CONTROLADOR */
// - Categoria
require_once "../controladores/adjuntoMonitoreo.controlador.php";


/* MODELO */
//- Categoria
require_once "../modelos/adjuntosMonitoreo.modelos.php";


/* Clase */
class TablaAdjuntos{

/*=====================================================
	  FUNCION PARA MOSTRAR LA TABLA DE ADJUNTO
=======================================================*/

public function mostrarTablaAdjunto(){

	$item = null;
	$valor = null;
	$orden = "id";

	$adjunto = ControladorAdjuntosMonitoreo::ctrMostrarAdjuntosMonitoreoObligaciones($item,$valor,$orden);

	if (count($adjunto) == 0) {
		
		echo '{"data": []}';

		return;
	
	} // if contador

	$datosJson = '{
	            "data":[';

   for ($i=0; $i < count($adjunto); $i++) { 
   	      
   	 /*==============================================
	 		       TRAEMOS ACCIONES
	  ==============================================*/
     
//     $botones = "<button class='btn btn-warning btnEditarAdjuntos' idAdjuntos='".$adjunto[$i]["id"]."' data-toggle='modal' data-target='#modalEditarAdjuntos'><i class='fa fa-pencil'></i></button> <a href='".$adjunto[$i]["enlace"]."' target='_blank'><button class='btn btn-primary'><i class='fa fa-file-pdf-o'></i></button></a> <button class='btn btn-danger btnEliminarAdjuntos' idAdjuntos='".$adjunto[$i]["id"]."' expediente='".$adjunto[$i]["expediente"]."' recurrente='".$adjunto[$i]["recurrente"]."' EntidadPublica='".$adjunto[$i]["EntidadPublica"]."' comisionado='".$adjunto[$i]["comisionado"]."' anio='".$adjunto[$i]["anio"]."' enlace='".$adjunto[$i]["enlace"]."'  ><i class='fa fa-times'></i></button>";
	 

	 
    if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] != "Administrador"){

		
		$botones = "<button class='btn btn-primary btnImprimirConstancia' idAdjuntos='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button>";

			 }else{
		
		$botones = "<button class='btn btn-warning btnEditarAdjuntos' idAdjuntos='".$adjunto[$i]["id"]."' data-toggle='modal' data-target='#modalEditarAdjuntos'><i class='fa fa-pencil'></i></button> <button class='btn btn-primary btnImprimirConstancia' idAdjuntos='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button> <button class='btn btn-danger btnEliminarAdjuntos' idAdjuntos='".$adjunto[$i]["id"]."' nombre='".$adjunto[$i]["nombre"]."' correo='".$adjunto[$i]["correo"]."' taller='".$adjunto[$i]["taller"]."'><i class='fa fa-times'></i></button>";



		  }


     $datosJson .= '[

      	   "'.($i+1).'",
      	   "'.$adjunto[$i]["nombre"].'",
           "'.$adjunto[$i]["taller"].'",  	   
      	   "'.$botones.'"

            ],';
  }// for

  $datosJson = substr($datosJson, 0, -1);

	$datosJson .= ']
	  }';

 echo $datosJson;	            


} //funcion Mostrar Adjuntos


}// class Tabla Adjuntos

/*=============================================
       ACTIVAR TABLA DE ADJUNTOS
=============================================*/ 
$activarInventario = new TablaAdjuntos();
$activarInventario -> mostrarTablaAdjunto();
