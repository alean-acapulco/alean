<?php

class controladorServicios {

    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */
    static public function ctrmostrarCategoriasServicios() {

        $tabla = "categoria_servicios";

        $respuesta = ModeloServicios::mdlmostrarCategoriasServicios($tabla);

       return $respuesta;
    }
    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */

    static public function ctrmostrarCiudades() {
        $tabla = "ciudades";
        $respuesta = ModeloServicios::mdlMostrarCiudades($tabla);
        return $respuesta;
    }

    static public function ctrFiltrarServicio($valor) {
        $tabla = "servicios";
        $respuesta = ModeloServicios::mdlFiltrarServicios($tabla, $valor);
        return $respuesta;
    }
}

