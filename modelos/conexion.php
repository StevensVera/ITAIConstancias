<?php 

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=www.itainayarit.org;dbname=itainaya_itaiconstancias",
							"itainaya",
						"Tepic2013$",
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		return $link;

	}


}

  