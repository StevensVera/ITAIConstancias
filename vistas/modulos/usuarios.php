<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Usuarios
      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>

        <li class="active">Administrar Usuarios</li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
            
            Agregar Usuario

          </button>

        </div>
        

        <div class="box-body">
        
          <table class="table table-bordered table-striped dt-responsive tablas" style="width:100%">
              
              <thead>
                <tr>

                  <th style="width: 10px">#</th>
                  <th>Area</th>
                  <th>Nombre del Personal</th>
                  <th>Usuario</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>Ultima Conexion</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>
                
                <?php 

                   $item = null;
                   $valor = null;

                        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                    foreach ($usuarios as $key => $value) {
                       
                      echo '<tr>
                            <td>'.($key+1).'</td>
                            <td>'.$value["Area"].'</td>
                            <td>'.$value["NombrePersonal"].'</td>
                            <td>'.$value["NombreUsuario"].'</td>
                            <td>'.$value["Perfil"].'</td>';

                        if($value["Estado"] != 0){

                       echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["idusuario"].'" estadoUsuario="0">Activado</button></td>';

                            }else{

                       echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["idusuario"].'" estadoUsuario="1">Desactivado</button></td>';

                          }

                      echo '<td>'.$value["UltimaConexion"].'</td>
                            <td>
                          <div class="btn-group">

                          <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["idusuario"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                          <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["idusuario"].'" usuario="'.$value["NombreUsuario"].'"><i class="fa fa-times"></i></button>
                        
                      </div>
                    </td>
                  </tr> '; 

                       
                        }    



                 ?>                  
            </tbody>  
          
          </table>

        </div>

      </div>

    </section>
   
  </div>

 <!--*=============================================
      =           MODAL AGREGAR USUARIOS           =
      =============================================*/-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      
      <form role="form" method="post">
      <!--*=============================================
      =            CABEZA DEL MODAL           =
      =============================================*/-->

      <div class="modal-header" style="background: #3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuarios</h4>

      </div>

       <!--*=============================================
          =            CUERPO DEL MODAL          =
      =============================================*/-->
      <div class="modal-body">

        <div class="box-body">

          <!-- ENTRADA PARA EL AREA -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoArea" placeholder="Ingresar Area" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL NOMBRE DEL PERSONAL -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoPersonal" placeholder="Ingresar Nombre del Personal" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL NOMBRE DEL USUARIO -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" placeholder="Ingresar Nombre del Usuario" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL PASSOWORD -->

          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <select class="form-control input-lg" name="nuevoPerfil">
                
                <option value="">Seleccionar Perfil</option>

                <option value="Administrador">Administrador</option>

                <option value="SAdministrador">SAdministrador</option>

                <option value="Invitado">Invitado</option>

                <option value="Supervisor">Supervisor</option>

                <option value="Archivo">Archivo</option>

              </select>

            </div>
            
          </div>

        </div>
        
      </div>
      <!--*=============================================
      =            PIE DEL MODAL           =
      =============================================*/-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        
        <button type="submit" class="btn btn-primary">Guardar Usuarios</button>

      </div>

      <?php 

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario(); 

       ?>


    </form>
    </div>

  </div>
</div>

<!--*=============================================
      =            MODAL EDITAR USUARIOS           =
      =============================================*/-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      
      <form role="form" method="post">
      <!--*=============================================
      =            CABEZA DEL MODAL           =
      =============================================*/-->

      <div class="modal-header" style="background: #3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Actualizar Usuarios</h4>

      </div>

       <!--*=============================================
          =            CUERPO DEL MODAL          =
      =============================================*/-->
       <div class="modal-body">

        <div class="box-body">

          <!-- ENTRADA PARA EL AREA -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" id="editarArea" name="editarArea" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL NOMBRE DEL PERSONAL -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" id="editarPersonal" name="editarPersonal" required>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL NOMBRE DEL USUARIO -->
          
          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" readonly>

            </div>
            
          </div>

          <!-- ENTRADA PARA EL PASSOWORD -->

          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

              <input type="hidden" id="passwordActual" name="passwordActual">

            </div>
            
          </div>

          <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

          <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <select class="form-control input-lg" name="editarPerfil">
                
                <option value="" id="editarPerfil"></option>

                <option value="Administrador">Administrador</option>

                <option value="Invitado">Invitado</option>

                <option value="SAdministrador">SAdministrador</option>

                <option value="Supervisor">Supervisor</option>

                <option value="Archivo">Archivo</option>

              </select>

            </div>
            
          </div>

        </div>
        
      </div>

      <!--*=============================================
      =            PIE DEL MODAL           =
      =============================================*/-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        
        <button type="submit" class="btn btn-primary">Modificar Usuarios</button>

      </div>

      <?php 
      

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario(); 
  
       ?>


    </form>
    </div>

  </div>
</div>

<?php 

$borrarUsuario = new ControladorUsuarios();
$borrarUsuario -> ctrBorrarUsuario();


 ?>