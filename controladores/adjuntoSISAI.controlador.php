<?php

class ControladorAdjuntosInformaticaSISAI{

/* ================  EDITAR - MOSTRAR LOS DATOS REGISTRADOS  ================= */

static public function ctrMostrarAdjuntosInformaticaSISAIEditar($item, $valor){

    $tabla = "tallerinformaticasisia";

    $respuesta = ModeloAdjuntosInformatica::mdlMostrarAdjuntosInformaticaSISAIEditar($tabla, $item, $valor);

    return $respuesta;

}


/*=========================  MOSTRAR TABLA y SUS DATOS ================================*/

  static public function ctrMostrarAdjuntosInformaticaSISAI($item, $valor, $orden){

    $tabla = "tallerinformaticasisia";

    $respuesta = ModeloAdjuntosInformatica::mdlMostrarAdjuntoInformaticaSISAI($tabla, $item, $valor, $orden);

    return $respuesta;	
}

/* =============== CONTROLADOR PARA MOSTRAR LOS NOMBRES EN LA CONSTACION  ================ */

static public function ctrMostrarAdjuntosSISAIPDF($item, $valor){

  $tabla = "tallerinformaticasisia";

  $respuesta = ModeloAdjuntosInformatica::mdlMostrarAdjuntoPDFSISIA($tabla,$item,$valor);
  
  return $respuesta;

}

/*=================  CREAR PARTICIPANTES PARA AGREGAR A LA TABLA  =========================*/

static public function ctrCrearAdjuntosInformaticaSISAI(){

  if (isset($_POST["nuevoNombreInformatica"])) {

      $tabla = "tallerinformaticasisia";

      $datos = array("nombre" => $_POST["nuevoNombreInformatica"],
                     "anios" => $_POST["nuevoAniosInformatica"],
                     "taller" => $_POST["nuevoTallerInformatica"]);
      
      $respuesta = ModeloAdjuntosInformatica::mdlIngresarAdjuntosInformaticaSISAI($tabla,$datos);

      if($respuesta == "ok"){

        echo '<script>

        swal({

          type: "success",
          title: "¡El Usuario ha sido guardado correctamente!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar"

        }).then(function(result){

          if(result.value){
          
            window.location = "taller-informatica-SISAI-2";

          }

        });
      

        </script>';


      } // i


  }

} // Funcion para crear participantes 

/*=================  ACTUALIZAR PARTICIPANTES PARA AGREGAR A LA TABLA  =========================*/

static public function ctrEditarAdjuntosInformacaSISAI(){

  if(isset($_POST["EditarNombreInformatica"])){

          $tabla = "tallerinformaticasisia";

          $datos = array("id"=>$_POST["idAdjuntosInformatica"],
                   "nombre"=>$_POST["EditarNombreInformatica"],
               "anios"=>$_POST["EditarAniosInformatica"],
                    "taller"=>$_POST["EditarTallerInformatica"]);

          $respuesta = ModeloAdjuntosInformatica::mdlEditarAdjuntosInformaticaSISIA($tabla, $datos);

          if($respuesta == "ok"){

         echo'<script>

         swal({
             type: "success",
             title: "El Usuario ha sido cambiado correctamente",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                 if (result.value) {

                 window.location = "taller-informatica-SISAI-2";

                 }
               })

         </script>';

       }

   }

  

} // ACTUALIZAR 

/*=================  BORRAR PARTICIPANTES PARA AGREGAR A LA TABLA  =========================*/

 static public function ctrBorrarAdjuntosInformaticaSISAI(){

  if(isset($_GET["idAdjuntosInformatica"])){

    $tabla ="tallerinformaticasisia";
    $datos = $_GET["idAdjuntosInformatica"];

    $respuesta = ModeloAdjuntosInformatica::mdlBorrarAdjuntos($tabla, $datos);

    if($respuesta == "ok"){

      echo'<script>

        swal({
            type: "success",
            title: "El Usuario ha sido borrada correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "taller-informatica-SISAI-2";

                }
              })

        </script>';
    }
  }
  
} // FUNCION PARA ELIMINAR REGISTRO.


}
