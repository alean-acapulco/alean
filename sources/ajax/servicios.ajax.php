<?php

require_once "../../models/servicios.modelo.php";
require_once "../../controllers/servicios.controlador.php";

class AjaxServicios {
    public $id_categoria;


    public function filtrarServicio() {
        
        $tabla = "servicios";
        $valor = $this->id_categoria;
        $respuesta = ModeloServicios::mdlFiltrarServicios($tabla, $valor);
    
        $inputs = "";
    
       foreach ($respuesta as $key => $value) {
            $inputs .='<option value="'.$value["id_servicio"].'" class="optionPerzo">'.$value["nombre_servicio"].'</option>';    
        }

        echo $inputs;
       
    
    }
}
if((isset($_POST["id_categoria"]))) {
    $filtro = new AjaxServicios();
    $filtro -> id_categoria = $_POST["id_categoria"];
    $filtro -> filtrarServicio();


}

