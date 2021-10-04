<?php
//================= CONTROLADORES ====================//

// CONTROLADOR - ADJUNTOSSISAI 
require_once "../controladores/adjuntoSISAI.controlador.php";

// MODELO - ADJUNTOSSISAI
require_once "../modelos/adjuntosSISAI.modelos.php";

class AjaxAdjuntosInformatica{

    /*=============================================
    EDITAR ADJUNTOS
    =============================================*/ 
  
    public $idAdjuntosInformatica;
  
    public function ajaxEditarAdjuntosInformaticaSISIA(){
  
      $item = "id";
      
      $valor = $this->idAdjuntosInformatica;
  
      $respuesta = ControladorAdjuntosInformaticaSISAI::ctrMostrarAdjuntosInformaticaSISAIEditar($item, $valor);
  
      echo json_encode($respuesta);
  
    }
  }

/*=============================================
EDITAR ADJUNTOS
=============================================*/ 
if(isset($_POST["idAdjuntosInformatica"])){

    $adjuntos = new AjaxAdjuntosInformatica();
    $adjuntos -> idAdjuntosInformatica = $_POST["idAdjuntosInformatica"];
    $adjuntos -> ajaxEditarAdjuntosInformaticaSISIA();
  }
  





