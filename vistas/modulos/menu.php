<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">
			
		<?php

		if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado" ){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>';

		 }

		?>	

			<?php 
			

			if($_SESSION["Perfil"] == "Administrador"){

			echo '<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>
					
				</a>

			</li>';

		}

			?>

			<li class="treeview">
				
				<a href="">
					
				<i class="fa fa-archive" aria-hidden="true"></i>
					<span>Archivo</span>
					 <span class="pull-right-container">
					 	
					 	<i class="fa fa-angle-left pull-right"></i>

					 </span>

				</a>

				<ul class="treeview-menu">

				<?php
				

				if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){

					echo '<li>

						<a href="taller-archivos">
						
							<i class="fa fa-circle-o"></i>
							
							<span>Taller de Organización</span>
		
						</a>

					</li>';

				 }
				 
				 
				?>
					
				</ul>

			</li>
			<li class="treeview">
				
				<a href="">
					
				<i class="fa fa-television" aria-hidden="true"></i>
					<span>Monitoreo</span>
					 <span class="pull-right-container">
					 	
					 	<i class="fa fa-angle-left pull-right"></i>

					 </span>

				</a>

				<ul class="treeview-menu">

				<?php
				

				if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){

					echo '
					<li>

						<a href="taller-monitoreo-obligaciones">
						
							<i class="fa fa-circle-o"></i>
							
							<span>Taller Formatos</span>
		
						</a>

					</li>';

				 }
				 
				 
				?>
					
				</ul>

			</li>
			<li class="treeview">
				
				<a href="">
					
				<i class="fa fa-id-card" aria-hidden="true"></i>
					<span>Datos Personales</span>
					 <span class="pull-right-container">
					 	
					 	<i class="fa fa-angle-left pull-right"></i>

					 </span>

				</a>

				<ul class="treeview-menu">

				<?php
				

				//if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){

			if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){	

					echo '<li>

						<a href="taller-datos-generalidades">
						
							<i class="fa fa-circle-o"></i>
							
							<span>Taller Generalidades</span>
		
						</a>

					</li>';

				 }
				 
				 
				?>
					
				</ul>

			</li>

			<!-- MENU INFORMÁTICA -->
			<li class="treeview">
				
				<a href="">
					
				<i class="fa fa-at" aria-hidden="true"></i>
					<span>Tecnologias</span>
					 <span class="pull-right-container">
					 	
					 	<i class="fa fa-angle-left pull-right"></i>

					 </span>

				</a>

				<ul class="treeview-menu">

				<?php
				

				//if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){

			if($_SESSION["Perfil"] == "Administrador" || $_SESSION["Perfil"] == "Invitado"){	

					echo '
					<li>

						<a href="taller-monitoreo-sipot">
						
							<i class="fa fa-circle-o"></i>
							
							<span>Taller SIPOT</span>
		
						</a>

					</li>
					<li>

						<a href="taller-informatica-SISAI-2">
						
							<i class="fa fa-circle-o"></i>
							
							<span>Taller SISAI-2.0</span>
		
						</a>

					</li>';

				 }
				 
				 
				?>
					
				</ul>

			</li>

			

			</ul>
			
	</section>
	
</aside>