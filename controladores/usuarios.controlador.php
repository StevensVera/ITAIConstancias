<?php 

class ControladorUsuarios{

	/* INGRESO DE USUARIO */
	
	static public function ctrIngresoUsuario(){

		if (isset($_POST["ingUsuario"])){
			
			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			    preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){
			
				$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2');

				$tabla = "usuarios";

				$item = "NombreUsuario";

				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla,$item,$valor);

				if($respuesta["NombreUsuario"] == $_POST["ingUsuario"] && $respuesta["Contrasena"] == $encriptar){

					if ($respuesta["Estado"] == 1) {
						
						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["idusuario"] = $respuesta["idusuario"];
						$_SESSION["Area"] = $respuesta["Area"];
						$_SESSION["NombrePersonal"] = $respuesta["NombrePersonal"];
						$_SESSION["NombreUsuario"] = $respuesta["NombreUsuario"];
						$_SESSION["Perfil"] = $respuesta["Perfil"];

						/* REGISTRAR FECHA PARA SABER EL ULTIMO */

					date_default_timezone_set('America/Mazatlan');

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "UltimaConexion";
						$valor1 = $fechaActual;

					$item2 = "idusuario";
					$valor2 = $respuesta["idusuario"];

					$ultimologin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);


					if($ultimologin == "ok") {
					

						echo '<script>
						
								window.location = "inicio";

						</script>';

					}


					}else{

						echo '<br>
							  <div class="alert alert-danger">El usuario aun no esta activado</div>';
					}



				}else{
					echo '<br><div class="alert alert-danger">Error al ingresar, vuelva a intentarlo</div>';
				}

			}
		}

	}

	static public function ctrMostrarUsuarios($item,$valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrCrearUsuario(){

		if (isset($_POST["nuevoUsuario"])){
		
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoArea"]) && 
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPersonal"]) && 
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) {
				
			

			$tabla = "usuarios";

			$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datos = array("Area" => $_POST["nuevoArea"],
						   "NombrePersonal" => $_POST["nuevoPersonal"],
						   "NombreUsuario" => $_POST["nuevoUsuario"],
						   "Perfil" => $_POST["nuevoPerfil"],
						   "Contrasena" => $encriptar, );

			$respuesta = ModeloUsuarios::mdlRegistrarUsuario($tabla,$datos);

			if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

					</script>';


				}



		}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

			}


	}


}

 /*=============================================
		 BORRAR USUARIO
 =============================================*/

static public function ctrBorrarUsuario(){

	if ( isset( $_GET["idUsuario"])) {
		
		$tabla = "usuarios";
		$datos = $_GET["idUsuario"];

		$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);

		if ($respuesta == "ok") {

			echo '<script>

			swal({
				type:"success",
				title: "El usuario ha sido borrardo correctamente",
				showConfirmButton:true,
				confirmButtonText: "Cerrar",
				closeOnConfirm:false
			}).then((result) =>{

						if(result.value){
						
							window.location = "usuarios";

						}

					});
	
			</script>';
			
		}


	}
}

/*  ------------------- EDITAR USUARIOS  --------------------------- */

	 static public function ctrEditarUsuario(){

	 	if (isset($_POST["editarUsuario"])) {
	 		
	 		if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarArea"]) && 
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPersonal"])){

	 		
				$tabla = "usuarios";

				if ($_POST["editarPassword"] != ""){

					if ( preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])) {
						
						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
					}else{

						echo '<script>

					swal({

						type: "error",
						title: "¡La contraseña no puede ir vacia o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
					}).then((result) =>{

						if(result.value){
						
							window.location = "usuarios";

						}

					})
				

					</script>';


					}
				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("Area" => $_POST["editarArea"],
							   "NombrePersonal" => $_POST["editarPersonal"],
							   "NombreUsuario" => $_POST["editarUsuario"],   
							   "Perfil" => $_POST["editarPerfil"],
							   "Contrasena" => $encriptar);

				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla,$datos);

				if ($respuesta == "ok") {
				echo '<script>

					swal({

						type: "success",
						title: "¡El usuario ha sido actualizado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
					}).then((result) =>{

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';
			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						closeOnConfirm:false

					}).then((result) =>{

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';


			}

	 		}


	 	}


	 }

	 
static public function ctrGuardarHistorial(){

		if (isset($_POST["ingUsuario"])){

			$tabla = "historialconexion";

			$datos = array("usuario" => $_POST["ingUsuario"]);

		     ModeloUsuarios::mdlRegistrarHistorial($tabla,$datos);

	}

}


static public function ctrMostrarUsuariosConexion($item,$valor){

		$tabla = "historialconexion";

		//$respuesta = ModelosReporteConexion::mdlMostrarReporteConexion($tabla, $item, $valor);

//		return $respuesta;

	}




}

