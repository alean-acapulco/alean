<?php

class ControladorUsuarios {
    
    static public function ctrIngresoUsuario()
    {
        if(isset($_POST["ingCorreo"])){

                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {

                        
                        $tabla = "usuarios";
                        $item = "email";
                        $valor = $_POST["ingCorreo"];
                        
                        $respuesta = ModeloUsuario::mdlIngresarUsuario($tabla, $item, $valor);
                        
                        if($respuesta["email"] == $_POST["ingCorreo"] && $respuesta["password"] == 
                            $_POST["ingPassword"])
                            {
                                $_SESSION["iniciarSesion"] = "ok";
                                $_SESSION["nombreCompleto"] = $respuesta["nombre"].$respuesta["apellido_paterno"];

                                $_SESSION["nombre"] = $respuesta["nombre"];
                              

                                
                                echo '<script>
                                swal({
                                    title: "Hola '. $_SESSION["nombre"].'",
                                    text: "Haz iniciado sesión correctamente",
                                    icon: "success",
                                    button: "Aceptar"
                                }).then(function(){
                                    window.location = "inicio";
                                
                                });
                            </script>';



                            }

                            else {
                                echo '<script>
						
                                        swal("Error al ingresar", "Por favor verifique su correo y contraseña", "error");
            
                                    </script>';
                            }
                      
                        





                    }
                    else {
                    


                    }
                    

            }

            else {
            }
        
    }

}