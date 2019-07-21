
<!--::::::::::::::.. CREACION DE LOS MODALES  ....:::::::::::::::::.: -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <!--Tabs -->
    <div class="sign-in-form">
        <div class="popup-tabs-container">

            <!-- Login -->
            <div class="popup-tab-content" id="login">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Bienvenido</h3>
                    <span>¿No tienes una cuenta?<a href="registro" class=""> Registrate</a></span>
                </div>

                <!-- ::::::::::.. FORMULARIO PARA INICIAR SESION ...:::::::::::: -->
                <form method="post">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="ingCorreo" id="emailaddress" placeholder="Correo electronico" required="">
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="ingPassword" id="password" placeholder="Contraseña" required="">
                    </div>
                    <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit">Iniciar sesión <i class="icon-material-outline-arrow-right-alt"></i></button>
                    <?php
                        $login = new ControladorUsuarios();
                        $login->ctrIngresoUsuario();
                    ?>
                </form>
                <!-- ::::::::::.. TERMINA FORMULARIO PARA INICIAR SESION ...:::::::::::: -->
            </div>
        </div>
    </div>
</div>
<!-- Sign In Popup / End -->

<!--::::::::::::::.. TERMINA LA CREACION S DE LOS MODALES  ....:::::::::::::::::.: -->
