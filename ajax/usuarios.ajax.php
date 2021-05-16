<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuario.modelo.php";


class AjaxUsuarios{

/* Editar Usuario */

	public $idUsuario;

	public function ajaxEditarUsuario(){

		$item = "idusuario";
		$valor = $this->idUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}
	

	/* Activar Usuario */

public $activarUsuario;
public $activarId;

public function ajaxActivarUsuario(){

	$tabla = "usuarios";
	$item1 = "Estado";

	$valor1 = $this->activarUsuario;

	$item2 = "idusuario";

	$valor2 = $this->activarId;

	$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
	

}

/* Validar no repeter usuario */

	public $validarUsuario;

	 public function ajaxValidarUsuario(){

		$item = "NombreUsuario";
		$valor = $this->validarUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}	


}

/* Activar Usuario */

if (isset($_POST["activarUsuario"])) {
	
	$activarUsuario = new AjaxUsuarios();
	$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
	$activarUsuario -> activarId = $_POST["activarId"];
	$activarUsuario -> ajaxActivarUsuario();

}


/* Editar Usuario */

if(isset($_POST["idUsuario"])){

	$editar = new AjaxUsuarios();
	$editar -> idUsuario = $_POST["idUsuario"];
	$editar -> ajaxEditarUsuario();

}

/* Validar no Repetir Usuario */

if (isset($_POST["validarUsuario"])) {
	
	$valUsuario = new AjaxUsuarios();
	$valUsuario -> validarUsuario = $_POST["validarUsuario"];
	$valUsuario -> ajaxValidarUsuario();

}

