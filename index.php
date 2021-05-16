<?php

require_once "controladores/plantilla.controlador.php";

require_once "controladores/usuarios.controlador.php";

require_once "controladores/adjunto.controlador.php";

require_once "controladores/adjuntoMonitoreo.controlador.php";

require_once "controladores/adjuntoPersonales.controlador.php";


require_once "modelos/usuario.modelo.php";

require_once "modelos/adjuntos.modelos.php";

require_once "modelos/adjuntosMonitoreo.modelos.php";

require_once "modelos/adjuntosPersonales.modelos.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();