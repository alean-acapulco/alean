<?php

require_once "../../models/registroUsuarios.modelo.php";

class AjaxRegistroUsuarios {

    /* VARIABLES PUBLICAS */
    public $nombre_p;
    public $apellidos_p;
    public $fechaN_p;
    public $ciudad_p;
    public $tipo_usuario_p;
    public $curp_p;
    public $email_p;
    public $cel_p;
    public $tel_p;
    public $servicio_p;
    public $sexo_p;
    public $password_p;

    /* VARIABLES PUBLICAS */

    /* :::::::... FUNCION PARA EL REGISTRO DE LOS NUEVOS USUARIOS ....::::::::: */
    public function registroUsuarios() {

        $tabla = "usuarios";
        
        $nombre = $this->nombre_p;
        $apellidos = $this->apellidos_p;
        $fecha_N = $this->fechaN_p;
        $sexo = $this->sexo_p;
        $ciudad = $this->ciudad_p;
        $tipo_usuario = $this->tipo_usuario_p;
        $curp = $this->curp_p;
        $email = $this->email_p;
        $cel = $this->cel_p;
        $tel = $this->tel_p;
        $servicio = $this->servicio_p;
        $password = $this->password_p;

        //$items = array('nombre','apellidos','fecha_nacimiento','id_sexo', 'email', 'password', 'celular', 'telefono', 'curp', 'id_servicio', 'id_tipoUsuario', 'id_ciudad' );
        $items = array('nombre','apellidos','id_sexo', 'email', 'password','celular');
        $datos = array($nombre, $apellidos, $sexo, $email, $password, $cel);
        //$datos = array($nombre, $apellidos, $fecha_N, $sexo, $email, $password, $cel, $tel, $curp, $servicio, $tipo_usuario, $ciudad  );


          
        $item = ""; 
        $data =  "";
        $aux = 0;
        
        foreach ($items as $key => $value) {
            $item .= ($aux > 0) ? "," : "";
            $item .= $value;
            $aux += 1;
        }

        $aux = 0;
        
        foreach ($datos as $key => $value) {
            $data .= ($aux > 0) ? "," : "";
            $data .= "'". $value . "'";
            $aux += 1;
        }
        
        $respuesta = registroUsuarios::mdlRegistroUsuarios($tabla,$item, $data);

        echo $item;
        echo $data;
        echo $respuesta;

        
        
    }
    /* :::::::... FUNCION PARA EL REGISTRO DE LOS NUEVOS USUARIOS ....::::::::: */


}

/* FUNCION PARA EL REGISTRO DE NUEVOS USUARIOS */
if((isset($_POST["nombre"]))) {
    $add = new AjaxRegistroUsuarios();
    $add -> nombre_p = $_POST["nombre"];
    $add -> apellidos_p = $_POST["apellidos"];
    $add -> ciudad_p = $_POST["ciudad"];
    $add -> tipo_usuario_p = $_POST["tipo_usuario"];
    $add -> fechaN_p = $_POST["fecha_N"];
    $add -> curp_p = $_POST["curp"];
    $add -> email_p = $_POST["email"];
    $add -> cel_p = $_POST["cel"];
    $add -> tel_p = $_POST["tel"];
    $add -> sexo_p= $_POST["sexo"];
    $add -> servicio_p= $_POST["servicio"];
    $add -> password_p= $_POST["password"];
    $add -> registroUsuarios();

}
/* FUNCION PARA EL REGISTRO DE NUEVOS USUARIOS */

