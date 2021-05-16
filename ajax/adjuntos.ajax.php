<?php 

/*CONTROLADORES*/
/* controlador categorias */
require_once "../controladores/adjunto.controlador.php";

/*MODELO*/
require_once "../modelos/adjuntos.modelos.php";

  
class AjaxAdjuntos{

  /*=============================================
  EDITAR ADJUNTOS
  =============================================*/ 

  public $idAdjuntos;

  public function ajaxEditarAdjuntos(){

    $item = "id";
    
    $valor = $this->idAdjuntos;

    $respuesta = ControladorAdjuntos::ctrMostrarAdjuntosEditar($item, $valor);

    echo json_encode($respuesta);

  }


  /*=============================================
        VALIDAR NO REPETIR EXPEDIENTE
  =============================================*/ 
  
  public $validarAdjuntos;

   public function ajaxValidarAdjuntos(){

    $item = "expediente";
    $valor = $this->validarAdjuntos;

    $respuesta = ControladorAdjuntos::ctrMostrarAdjuntosExistente($item, $valor);

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

/*=============================================
VALIDAR NO REPETIDOS ADJUNTOS
=============================================*/ 

if (isset($_POST["validarAdjuntos"])) {
  
  $valAdjuntos = new AjaxAdjuntos();
  $valAdjuntos -> validarAdjuntos = $_POST["validarAdjuntos"];
  $valAdjuntos -> ajaxValidarAdjuntos();

}

