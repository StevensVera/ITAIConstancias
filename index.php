<?php

// =============== CONTROLADORES =====================//
// CONTRALADO PLANTILLA
require_once "controladores/plantilla.controlador.php";
// CONTROLADOR - USUARIOS 
require_once "controladores/usuarios.controlador.php";
// CONTROLADOR - AJUNTO"ORGANIZACIÓN"
require_once "controladores/adjunto.controlador.php";
// CONTROLADOR - ADJUNTOMONITOREO
require_once "controladores/adjuntoMonitoreo.controlador.php";
// CONTROLADOR - ADJUNTOPERSONALES
require_once "controladores/adjuntoPersonales.controlador.php";
// CONTROLADOR - ADJUNTOSSISAI
require_once "controladores/adjuntoSISAI.controlador.php";


// ================== MODELOS ========================//
// MODELOS - USUARIO
require_once "modelos/usuario.modelo.php";
// MODELOS - ADJUNTOS"ORGANIZACION"
require_once "modelos/adjuntos.modelos.php";
// MODELOS - ADJUNTOSMONITOREO
require_once "modelos/adjuntosMonitoreo.modelos.php";
// MODELOS - ADJUNTOSPERSONALES
require_once "modelos/adjuntosPersonales.modelos.php";
// MODELOS - ADJUNTOSSISAI
require_once "modelos/adjuntosSISAI.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();