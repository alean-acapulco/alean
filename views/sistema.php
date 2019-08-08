<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php
include "views/include/head.php";
?>

<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- :::::::....   DIV PRINCIPAL ...::::::: -->
    
    <?php
    
    //$_SESSION["iniciarSesion"] = "NO";
    
    include "modales/login.php";
    
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
        if (isset($_GET["ruta"])) {
            
            echo '<div id="wrapper" class="wrapper-with-transparent-header">';
            
            if ($_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "salir") {
                
                    
                        include "views/include/header_usuario.php";
                        include "include/buscador.php";
                        include "pages/" . $_GET["ruta"] . ".php";
            
                        
                    } elseif ($_GET["ruta"] == "socios"){
                        
                            include "views/include/header_usuario2.php";
                            include "pages/" . $_GET["ruta"] . ".php";
                       
                    } 
                    
                    
                    else {
                        include "pages/404.php";
                    }
    
                } else {
                    "views/page/inicio.php";
                }

                echo '</div>';
           

            
                

            }

            elseif($_GET["ruta"] == "registro") {
              
                
                include "pages/registro_usuario.php";
            }
            
           
         
         
        /* SE INTEGRA EL FOOTER DEL SISTEMA */
            include "views/include/footer.php";
        /* SE INTEGRA EL FOOTER DEL SISTEMA */



        ?>
    <!-- :::::::....   TERMINA EL DIV PRINCIPAL ...::::::: -->
















    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->
    <?php include "views/include/script.php"; ?>
    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->

</body>
</html>