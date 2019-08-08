<?php

require_once "conexion.php";

class registroUsuarios {

    static public function mdlRegistroUsuarios($tabla, $items, $valores) {
    
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ($items) VALUES ($valores)");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt = null;

    }
}