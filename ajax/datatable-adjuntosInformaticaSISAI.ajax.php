<?php

// ================= CONTROLADOR =====================//
// CONTROLADORES - SISAI 2.0
require_once "../controladores/adjuntoSISAI.controlador.php";


// ================= MODELO =========================//
//- MODELO - SISAI 2.0
require_once "../modelos/adjuntosSISAI.modelos.php";


// ===== CLASE  ====//

class TablaAdjuntosInformatica{

/*=====================================================
	  FUNCION PARA MOSTRAR LA TABLA Y SUS DATOS
=======================================================*/

public function mostrarTablaAdjuntoInformatica(){

	$item = null;
	$valor = null;
	$orden = "id";

	$adjunto = ControladorAdjuntosInformaticaSISAI::ctrMostrarAdjuntosInformaticaSISAI($item,$valor,$orden);

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
     
    if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] != "Administrador"){

		if ($adjunto[$i]["anios"] == "2021"){
			
			$botones = "<button class='btn btn-primary btnImprimirConstanciaInformatica2021' idAdjuntosInformatica='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button>";

		 }else{
			 
		    $botones = "<button class='btn btn-primary btnImprimirConstanciaInformatica2022' idAdjuntosInformatica='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button> ";

		   }
		}else{

		   if ($adjunto[$i]["anios"] == "2021"){

			$botones = "<button class='btn btn-warning btnEditarAdjuntosInformatica' idAdjuntosInformatica='".$adjunto[$i]["id"]."' data-toggle='modal' data-target='#modalEditarAdjuntosInformatica'><i class='fa fa-pencil'></i></button> <button class='btn btn-primary btnImprimirConstanciaInformatica2021' idAdjuntosInformatica='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button> <button class='btn btn-danger btnEliminarAdjuntosInformatica' idAdjuntosInformatica='".$adjunto[$i]["id"]."' nombre='".$adjunto[$i]["nombre"]."'  taller='".$adjunto[$i]["taller"]."'><i class='fa fa-times'></i></button>";

	        }else{
				

			$botones = "<button class='btn btn-warning btnEditarAdjuntosInformatica' idAdjuntosInformatica='".$adjunto[$i]["id"]."' data-toggle='modal' data-target='#modalEditarAdjuntosInformatica'><i class='fa fa-pencil'></i></button> <button class='btn btn-primary btnImprimirConstanciaInformatica2022' idAdjuntosInformatica='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button> <button class='btn btn-danger btnEliminarAdjuntosInformatica' idAdjuntosInformatica='".$adjunto[$i]["id"]."' nombre='".$adjunto[$i]["nombre"]."' taller='".$adjunto[$i]["taller"]."'><i class='fa fa-times'></i></button>";

			  }
			}


     $datosJson .= '[

      	   "'.($i+1).'",
      	   "'.$adjunto[$i]["nombre"].'",
           "'.$adjunto[$i]["taller"].'", 
		   "'.$adjunto[$i]["anios"].'",  	   
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
$activar = new TablaAdjuntosInformatica();
$activar -> mostrarTablaAdjuntoInformatica();
