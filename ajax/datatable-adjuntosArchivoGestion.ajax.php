<?php

/* CONTROLADOR */
// - Categoria
require_once "../controladores/adjuntoGestionArchivo.controlador.php";


/* MODELO */
//- Categoria
require_once "../modelos/adjuntosGestionArchivo.modelos.php";


/* Clase */
class TablaAdjuntosArchivoGestion{

/*=====================================================
	  FUNCION PARA MOSTRAR LA TABLA DE ADJUNTO
=======================================================*/

public function mostrarTablaAdjuntoArchivoGestion(){

	$item = null;
	$valor = null;
	$orden = "id";

	$adjunto = ControladorAdjuntosArchivoGestion::ctrMostrarAdjuntosArchivoGestion($item,$valor,$orden);

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

			
			$botones = "<button class='btn btn-primary btnImprimirConstanciaArchivosGestion' idAdjuntos='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button>";

	
		}else{

			   $botones = "<button class='btn btn-warning btnEditarAdjuntosArchivosGestion' idAdjuntos='".$adjunto[$i]["id"]."' data-toggle='modal' data-target='#modalEditarAdjuntosArchivosGestion'><i class='fa fa-pencil'></i></button> <button class='btn btn-primary btnImprimirConstanciaArchivosGestion' idAdjuntos='".$adjunto[$i]["id"]."' title='GENERAR ARCHIVO'><i class='fa fa-file-pdf-o'></i></button> <button class='btn btn-danger btnEliminarAdjuntosArchivosGestion' idAdjuntos='".$adjunto[$i]["id"]."' nombre='".$adjunto[$i]["nombre"]."'  taller='".$adjunto[$i]["taller"]."'><i class='fa fa-times'></i></button>";
	
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
$activar = new TablaAdjuntosArchivoGestion();
$activar -> mostrarTablaAdjuntoArchivoGestion();
