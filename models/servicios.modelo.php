<?php

require_once "conexion.php";

class ModeloServicios {


    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */
    static public function mdlmostrarCategoriasServicios($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }
    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */

    static public function mdlMostrarCiudades($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;


    }
    static public function mdlFiltrarServicios($tabla, $valor) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria_servicio = $valor");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    static public function mdlMostrarSexo($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
        
    }

}


