<header class="main-header">
  <!--*=============================================
                lOGOTIPO
    ============================================= -->
    <a href="inicio.php" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ITAI</b></span>


      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b> ITAI</span>

    </a>


    <!--*=============================================
              BARRA DE NAVEGACION
  ============================================= -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">


        <span class="sr-only">Toggle navigation</span>

      </a>
<!-- perfil de usuario -->

    <div class="navbar-custom-menu">
        
      <ul class="nav navbar-nav">
        
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         
            <img src="vistas/img/usuarios/default/anonymous.png" class="user-image">

            <span class="hidden-xs"><?php  echo $_SESSION["NombrePersonal"]; ?></span>

          </a>
          
          <!-- Dropdown-toggle -->

          <ul class="dropdown-menu">
            
            <li class="user-body">
              
              <div class="pull-right">
                
                <a href="salir" class="btn btn-default btn-flat">Salir</a>

              </div>

            </li>

          </ul>

        </li>

      </ul>

    </div>
    </nav>
  </header>