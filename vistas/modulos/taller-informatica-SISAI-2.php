<!--=========================================================
       ADMINISTRACION DE PARTICIPANTES DE INFORMÁTICA
==============================================================-->
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Constancias de Taller de Informática - "SISAI 2.0"
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Constancias de Taller de Informatica</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

    <?php

    if($_SESSION["Perfil"] == "Administrador"){

        echo '<div class="box-header with-border">
  
                <button class="btn btn-primary" data-toggle="modal"  data-target="#modalAgregarAdjuntosInformatica">
    
                Agregar Participante

                </button>

              </div>';
      }
     ?>
      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablasAdjuntosInformatica" width="100%">
         
         <thead>
         
         <tr>
           <th style="width: 30px">#</th>
           <th>Nombre</th>
           <th style="width: 300px">Taller</th>
           <th style="width: 30px" id="Controlanios">Año</th>
           <th style="width: 110px">Acciones</th>
           
         </tr> 

        </thead>   

       </table>

       <input type="hidden" value="<?php echo $_SESSION['Perfil']; ?>" id="perfilOculto">


      </div>

    </div>

  </section>

</div>

<!--================================================
      MODAL AGREGAR PARTICIPANTE INFORMÁTICA
====================================================-->


<div id="modalAgregarAdjuntosInformatica" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg" style="width: 60%">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
                   CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"> Agregar Participante</h4>

        </div>

        <!--=====================================
                   CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA NOMBRE PARA LA CONSTANCIA -->
            
            <div class="form-group" style="width: 70%; margin: 0 auto;">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombreInformatica" placeholder="Ingresar Nombre" required>

              </div>

            </div>

          <hr>     <!--  LINEA HORIZONTAL --> 

             <!-- ENTRADA PARA EL TALLER  -->
            
            <div class="form-group row" style="width: 100%; margin: 0 auto; padding-bottom: 15px">
            
             <div class="col-xs-9" >
              
               <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span> 
            
                <select class="form-control input-lg" name="nuevoTallerInformatica">
                 
                 <option value="">Seleccionar Taller</option>

                 <option value="Organización de los Archivos">Organización de los Archivos</option>
 
                 <option value="Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)">Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)</option>

                 <option value="Obligaciones de Transparencia y Llenado de Formatos">Obligaciones de Transparencia y Llenado de Formatos</option>

                 <option value="Generalidades en Materia de Protección de Datos Personales">Generalidades en Materia de Protección de Datos Personales</option>

                 <option value="SISAI 2.0">SISAI 2.0</option>


                </select>

               </div> 

              </div>

              <div class="col-xs-3">

              <div class="input-group">
            
                   <div class="input-group">
              
                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                     <input type="text" class="form-control input-lg" name="nuevoAniosInformatica" placeholder="Años" required>

                 </div>

                </div>
            
            </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

      <div class="modal-footer">

         <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
         <button type="submit" class="btn btn-primary">Guardar Participante</button>       
  
      </div> 
        <!--=====================================
           AQUI SE AGREGAN LOS CONTROLADORES
        ======================================-->
    <?php 
     
      $CrearAdjuntosInformaticaSISAI = new ControladorAdjuntosInformaticaSISAI();
      $CrearAdjuntosInformaticaSISAI -> ctrCrearAdjuntosInformaticaSISAI();
      /*
      $CrearAdjuntos = new ControladorAdjuntosHistoricosArchivos();
      $CrearAdjuntos -> ctrCrearAdjuntosAgregarRR();
      */  

    ?>

</form>

    </div>

  </div>

</div>

<!--=====================================
      MODAL EDITAR ADJUNTOS
======================================-->

<div id="modalEditarAdjuntosInformatica" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg" style="width: 60%">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Participante</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA NOMBRE PARA LA CONSTANCIA -->
            
            <div class="form-group" style="width: 70%; margin: 0 auto;">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="EditarNombreInformatica" id="EditarNombreInformatica" required>

                  <input type="hidden"  name="idAdjuntosInformatica" id="idAdjuntosInformatica">

              </div>

            </div>

          <hr>     <!--  LINEA HORIZONTAL --> 

             <!-- ENTRADA PARA EL TALLER  -->

            <div class="form-group row" style="width: 100%; margin: 0 auto; padding-bottom: 15px">
            
             <div class="col-xs-9" >
              
               <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span> 
            
                <select class="form-control input-lg" name="EditarTallerInformatica">
                
                 <option value="" id="EditarTallerInformatica"></option>

                 <option value="Organización de los Archivos">Organización de los Archivos</option>
 
                 <option value="Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)">Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)</option>

                 <option value="Obligaciones de Transparencia y Llenado de Formatos">Obligaciones de Transparencia y Llenado de Formatos</option>

                 <option value="Generalidades en Materia de Protección de Datos Personales">Generalidades en Materia de Protección de Datos Personales</option>

                 <option value="SISAI 2.0">SISAI 2.0</option>

                </select>

               </div> 

              </div>

              <div class="col-xs-3">

              <div class="input-group">
            
                   <div class="input-group">
              
                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                     <input type="text" class="form-control input-lg" name="EditarAniosInformatica" id="EditarAniosInformatica" required>

                  <input type="hidden"  name="idAniosInformatica" id="idAniosInformatica">

                 </div>

                </div>
            
              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar Participante</button>

        </div>

        <!--=====================================
           AQUI SE AGREGAN LOS CONTROLADORES
        ======================================-->
    <?php 
    
      $editarAdjuntos = new ControladorAdjuntosInformaticaSISAI();
      $editarAdjuntos -> ctrEditarAdjuntosInformacaSISAI();
    /* 
      $editarAdjuntos = new ControladorAdjuntosHistoricosArchivos();
      $editarAdjuntos -> ctrEditarAdjuntosActualizarRR();
    */
    ?>
  
      </form>

    </div>

  </div>

</div>
     <!--=====================================
          AQUI SE AGREGAN LOS CONTROLADORES
       ======================================-->
    <?php 
   
      $EliminarAdjuntos = new ControladorAdjuntosInformaticaSISAI();
      $EliminarAdjuntos -> ctrBorrarAdjuntosInformaticaSISAI();
        /*
      $EliminarAdjuntos = new ControladorAdjuntosHistoricosArchivos();
      $EliminarAdjuntos -> ctrBorrarAdjuntosEliminadosRR();
      */

    ?>