<?php 

class Conexion{

	static public function conectar(){
/*
		$link = new PDO("mysql:host=www.itainayarit.org;dbname=itainaya_itaiconstancias",
							"itainaya",
						"ruPm1oT@Oh0s",
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		return $link;
*/	


		$link = new PDO("mysql:host=localhost;dbname=itainaya_itaiconstancias",
						"root",
						"itai12345",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		return $link;


	  }
}

  