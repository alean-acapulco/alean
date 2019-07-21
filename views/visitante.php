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

    <?php   
    echo '<div id="wrapper" class="wrapper-with-transparent-header">';
        include "include/header_visitante.php";
        include "include/buscador.php";
        include "pages/visitante.php";
        include "views/include/footer.php";
        echo '</div>';
        include "views/include/script.php";
        include "modales/login.php";
    ?>
</body>
</html>