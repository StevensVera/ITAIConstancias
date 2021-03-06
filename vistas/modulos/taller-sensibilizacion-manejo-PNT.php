<!--=====================================
  Administracion de Archivos Digitales
======================================-->
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Constancias Taller de "Sensibilización en Transparencia, Acceso a la Información y Manejo PNT"
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Constancias de Taller de Sensibilización </li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

    <?php

    if($_SESSION["Perfil"] == "Administrador"){

        echo '<div class="box-header with-border">
  
                <button class="btn btn-primary" data-toggle="modal"  data-target="#modalAgregarAdjuntos">
    
                Agregar Participante

                </button>

              </div>';
      }
     ?>
      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablasAdjuntosSensibilizacionManejoPNT" width="100%">
         
         <thead>
         
         <tr>
           <th>#</th>
           <th>Nombre</th>
         <!--  <th>Correo</th>     -->
           <th>Taller</th>
           <th>Años</th>
           <th style="width: 110px">Acciones</th>
           
         </tr> 

        </thead>   

       </table>

       <input type="hidden" value="<?php echo $_SESSION['Perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
      MODAL AGREGAR ADJUNTOS
======================================-->


<div id="modalAgregarAdjuntos" class="modal fade" role="dialog">
  
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

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>

              </div>

            </div>

           <hr>     <!--  LINEA HORIZONTAL --> 

             <!-- ENTRADA PARA EL TALLER  -->
            
             <div class="form-group row" style="width: 100%; margin: 0 auto; padding-bottom: 15px">

              <div class="col-xs-9" >

                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span> 

                  <select class="form-control input-lg" name="nuevoTaller">
                  
                  <option value="">Seleccionar Taller</option>

                  <option value="Organización de los Archivos">Organización de los Archivos</option>

                  <option value="Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)">Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)</option>

                  <option value="Obligaciones de Transparencia y Llenado de Formatos">Obligaciones de Transparencia y Llenado de Formatos</option>

                  <option value="Generalidades en Materia de Protección de Datos Personales">Generalidades en Materia de Protección de Datos Personales</option>

                  <option value="Taller de Sensibilización en Transparencia, Acceso a la Información y Manejo de Plataforma Nacional de Transparencia">Taller de Sensibilización en Transparencia, Acceso a la Información y Manejo de Plataforma Nacional de Transparencia</option>

                </select>

                </div>

              </div>
              
              <div class="col-xs-3">

                <div class="input-group">
            
                   <div class="input-group">
              
                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                     <input type="text" class="form-control input-lg" name="nuevoAnios" placeholder="Años" required>

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
      <button type="submit" class="btn btn-primary">Agregar Participante</button>       
  
    </div> 
        <!--=====================================
           AQUI SE AGREGAN LOS CONTROLADORES
        ======================================-->
    <?php 
     
      $CrearAdjuntos = new ControladorAdjuntosSensibilizacionManejoPNT();
      $CrearAdjuntos -> ctrCrearAdjuntosSensibilizacionManejoPNT();
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

<div id="modalEditarAdjuntos" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg" style="width: 60%">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Participantes</h4>

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

                <input type="text" class="form-control input-lg" name="EditarNombre" id="EditarNombre" required>

                  <input type="hidden"  name="idAdjuntos" id="idAdjuntos">
                  <input type="hidden"  name="idEditarCorreo" id="idEditarCorreo">

              </div>

            </div>

          <hr>     <!--  LINEA HORIZONTAL --> 

             <!-- ENTRADA PARA EL TALLER  -->
            
             <div class="form-group row" style="width: 100%; margin: 0 auto; padding-bottom: 15px">
             
             <div class="col-xs-9" >

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span> 

                <select class="form-control input-lg" name="EditarTaller">
                
                <option value="" id="EditarTaller"></option>

                <option value="Organización de los Archivos">Organización de los Archivos</option>

                <option value="Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)">Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)</option>

                <option value="Obligaciones de Transparencia y Llenado de Formatos">Obligaciones de Transparencia y Llenado de Formatos</option>

                <option value="Generalidades en Materia de Protección de Datos Personales">Generalidades en Materia de Protección de Datos Personales</option>

                <option value="Taller de Sensibilización en Transparencia, Acceso a la Información y Manejo de Plataforma Nacional de Transparencia">Taller de Sensibilización en Transparencia, Acceso a la Información y Manejo de Plataforma Nacional de Transparencia</option>


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
    
      $editarAdjuntos = new ControladorAdjuntosSensibilizacionManejoPNT();
      $editarAdjuntos -> ctrEditarAdjuntosSensibilizacionManejoPNT();
    

    
    ?>
  
      </form>

    </div>

  </div>

</div>
     <!--=====================================
          AQUI SE AGREGAN LOS CONTROLADORES
       ======================================-->
    <?php 
   
      $EliminarAdjuntos = new ControladorAdjuntosSensibilizacionManejoPNT();
      $EliminarAdjuntos -> ctrBorrarAdjuntosSensibilizacionManejoPNT();
        /*
      $EliminarAdjuntos = new ControladorAdjuntosHistoricosArchivos();
      $EliminarAdjuntos -> ctrBorrarAdjuntosEliminadosRR();
      */

    ?>