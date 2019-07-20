<?php

require_once "../../models/servicios.modelo.php";
require_once "../../controllers/servicios.controlador.php";

class AjaxServicios {
    public $id_categoria;


    public function filtrarServicio() {
        
        $tabla = "servicios";
        $valor = $this->id_categoria;
        $respuesta = ModeloServicios::mdlFiltrarServicios($tabla, $valor);
    


    
    
       foreach ($respuesta as $key => $value) {
        
        echo '<option class="optionPerzo">'.$value["nombre_servicio"].'</option>';
       }


    //echo json_encode($respuesta);
       
    


    }





}
if((isset($_POST["id_categoria"]))) {
    $filtro = new AjaxServicios();
    $filtro -> id_categoria = $_POST["id_categoria"];
    $filtro -> filtrarServicio();


}

