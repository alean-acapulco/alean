<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=alean",
			            "alean_acapulco",
			            "odXUEnCLE7iFAcRa");

		$link->exec("set names utf8");

		return $link;

	}

}