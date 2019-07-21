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
    
    echo '<div id="wrapper" class="wrapper-with-transparent-header">';

    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
        if (isset($_GET["ruta"])) {
            
            
            
            if ($_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "salir") {
                
                     echo '<div id="wrapper" class="wrapper-with-transparent-header">';
                        include "views/include/header_usuario.php";
                        include "views/include/buscador.php";
                        include "pages/" . $_GET["ruta"] . ".php";
                     echo '</div>';   
                        
                    } elseif ($_GET["ruta"] == "socios"){
                        echo '<div id="wrapper" class="">';
                            include "views/include/header_usuario2.php";
                            include "pages/" . $_GET["ruta"] . ".php";
                        echo '</div>';  
                    } 
                    
                    
                    else {
                        include "pages/404.php";
                    }
    
                } else {
                    "views/page/inicio.php";
                }

           

            
                

            }
            
           
         
            
            else{
               
                include "include/header_visitante.php";
                include "include/buscador.php";
                include "pages/visitante.php";
               
            }
            
            
        

        /* SE INTEGRA EL FOOTER DEL SISTEMA */
            include "views/include/footer.php";
        /* SE INTEGRA EL FOOTER DEL SISTEMA */


        echo '</div>';

        ?>
    <!-- :::::::....   TERMINA EL DIV PRINCIPAL ...::::::: -->
















    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->
    <?php include "views/include/script.php"; ?>
    <!-- :::::::....   SCRIPT DEL SISTEMA ...::::::: -->

</body>
</html>