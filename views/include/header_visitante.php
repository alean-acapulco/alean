<!--::::::::::::::.. COMIENZA EL HEADER ....:::::::::::::::::.: -->
<header id="header-container" class="fullwidth transparent">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="index-1.htm"><img src="views/src/images/logo.png" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">

                    <ul id="responsive">
                        <li><a href="#" class="current">¿Quienes somos?</a>
                            <ul class="dropdown-nav">
                                <li><a href="#">¿Que hacemos?</a></li>
                                <li><a href="#">Mision y Visión</a></li>
                                <li><a href="#">Historia</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">

                <div class="header-widget">
                    <a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Iniciar / Registrar</span></a>
                </div>

                <!-- Mobile Navigation Button -->
                <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>

            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>


<!--::::::::::::::.. TERMINA  EL HEADER ....:::::::::::::::::.: -->










<!--::::::::::::::.. CREACION DE LOS MODALES  ....:::::::::::::::::.: -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#login">Iniciar sesión</a></li>
            <li><a href="#register">Registrar</a></li>
        </ul>



        <div class="popup-tabs-container">

            <!-- Login -->
            <div class="popup-tab-content" id="login">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Bienvenido</h3>
                    <span>¿No tienes una cuenta?<a href="#" class="register-tab"> Registrate</a></span>
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

            <!-- Register -->
            <div class="popup-tab-content" id="register">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Let's create your account!</h3>
                </div>

                <!-- Account Type -->
                <div class="account-type">
                    <div>
                        <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked=""> <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Cliente</label>
                    </div>

                    <div>
                        <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio">
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Socio</label>
                    </div>
                </div>

                <!-- Form -->
                <form method="post" id="register-account-form">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Correo electronico" required=""> </div>
                    <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Contraseña" required=""> </div>
                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repetir contraseña" required=""> </div>
                </form> <!-- Button -->
                <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Registrar <i class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
<!-- Sign In Popup / End -->

<!--::::::::::::::.. TERMINA LA CREACION S DE LOS MODALES  ....:::::::::::::::::.: -->