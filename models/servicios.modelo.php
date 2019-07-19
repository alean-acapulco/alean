<?php

require_once "conexion.php";

class ModeloServicios {


    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */
    static public function mdlmostrarCategoriasServicios($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;

    }
    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */



}


