<?php 

/*CONTROLADORES*/
/* controlador categorias */
require_once "../controladores/adjuntoSensibilizacionManejoPNT.controlador.php";

/*MODELO*/
require_once "../modelos/adjuntosSensibilizacionManejoPNT.modelos.php";

  
class AjaxAdjuntos{

  /*=============================================
  EDITAR ADJUNTOS
  =============================================*/ 

  public $idAdjuntos;

  public function ajaxEditarAdjuntos(){

    $item = "id";
    
    $valor = $this->idAdjuntos;

    $respuesta = ControladorAdjuntosSensibilizacionManejoPNT::ctrMostrarAdjuntosEditarSensibilizacionManejoPNT($item, $valor);

    echo json_encode($respuesta);

  }

}

/*=============================================
EDITAR ADJUNTOS
=============================================*/ 
if(isset($_POST["idAdjuntos"])){

  $adjuntos = new AjaxAdjuntos();
  $adjuntos -> idAdjuntos = $_POST["idAdjuntos"];
  $adjuntos -> ajaxEditarAdjuntos();
}

