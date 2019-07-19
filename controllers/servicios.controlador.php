<?php

class controladorServicios {

    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */
    static public function ctrmostrarCategoriasServicios() {

        $tabla = "categoria_servicios";

        $respuesta = ModeloServicios::mdlmostrarCategoriasServicios($tabla);

       return $respuesta;
    }
    /*::::::::::::::... METODO PARA MOSTRAR LA CATEGORIA DE SERVICIOS EN EL BUSCADOR ....::::::::::: */

}

