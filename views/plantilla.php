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
    <div id="wrapper" class="wrapper-with-transparent-header">

        <?php
    
                 //$_SESSION["iniciarSesion"] = "NO";

            if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

                include "views/include/header_usuario.php";
                include "views/include/buscador.php";


                if (isset($_GET["ruta"])) {
                    if ($_GET["ruta"] == "inicio" ||
                    $_GET["ruta"] == "salir" ||
                        $_GET["ruta"] == "socio") {
    
                        include "pages/" . $_GET["ruta"] . ".php";
    
                    } else {
                        include "pages/404.php";
                    }
    
                } else {
                    "views/page/inicio.php";
                }
    
                
                

            }else {
                include "views/include/header_visitante.php";
                include "views/include/buscador.php";
                include "views/pages/visitante.php";
               
            }
            
            
        

        /* SE INTEGRA EL FOOTER DEL SISTEMA */
            include "views/include/footer.php";
        /* SE INTEGRA EL FOOTER DEL SISTEMA */
        ?>
    </div>
    <!-- :::::::....   TERMINA EL DIV PRINCIPAL ...::::::: -->

    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->
    <?php include "views/include/script.php"; ?>
    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->

</body>
</html>