<?php 

/*CONTROLADORES*/

/* controlador categorias */
require_once "../controladores/adjuntoGestionArchivo.controlador.php";

/*MODELO*/
require_once "../modelos/adjuntosGestionArchivo.modelos.php";

  
class AjaxAdjuntosArchivosGestion{

  /*=============================================
  EDITAR ADJUNTOS
  =============================================*/ 

  public $idAdjuntos;

  public function ajaxEditarAdjuntosArchivosGestion(){

    $item = "id";
    
    $valor = $this->idAdjuntos;

    $respuesta = ControladorAdjuntosArchivoGestion::ctrMostrarAdjuntosEditarArchivoGestion($item, $valor);

    echo json_encode($respuesta);

  }


  /*=============================================
        VALIDAR NO REPETIR EXPEDIENTE
  =============================================*/ 
  
  public $validarAdjuntos;

   public function ajaxValidarAdjuntosArchivosGestion(){

    $item = "expediente";
    $valor = $this->validarAdjuntos;

    $respuesta = ControladorAdjuntosArchivoGestion::ctrMostrarAdjuntosExistenteArchivoGestion($item, $valor);

    echo json_encode($respuesta);

  }
  

}

/*=============================================
EDITAR ADJUNTOS
=============================================*/ 
if(isset($_POST["idAdjuntos"])){

  $adjuntos = new AjaxAdjuntosArchivosGestion();
  $adjuntos -> idAdjuntos = $_POST["idAdjuntos"];
  $adjuntos -> ajaxEditarAdjuntosArchivosGestion();
}

/*=============================================
VALIDAR NO REPETIDOS ADJUNTOS
=============================================*/ 

if (isset($_POST["validarAdjuntos"])) {
  
  $valAdjuntos = new AjaxAdjuntosArchivosGestion();
  $valAdjuntos -> validarAdjuntos = $_POST["validarAdjuntos"];
  $valAdjuntos -> ajaxValidarAdjuntosArchivosGestion();

}

