<div id="wrapper">
	<?php require_once "views/include/header_registro.php"; ?>

	<div class="clearfix"></div>



	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner">






			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margenRegistro">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Registro</h3>
						</div>


						<div class="col-lg-12 col-mg-12">

							<div class="account-type tipoUsuario d-flex justify-content-center">

								<div>
									<input value="1" type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked="">
									<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Cliente</label>
								</div>

								<div>
									<input value="2" type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio">
									<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Socio</label>
								</div>

							</div>

						</div>

						<div class="content with-padding padding-bottom-10">

							<h4 class="tituloRegistro">Datos personales</h4>

							<div class="row">


								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-feather-user"></i>
										<input type="text" class="input-text with-border" id="txt_nombre" placeholder="Nombre(s)" required="">
									</div>
								</div>

								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-feather-users"></i>
										<input type="text" class="input-text with-border" id="txt_apellidos" placeholder="Apellidos" required="">
									</div>
								</div>



								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-feather-calendar"></i>
										<input type="text" class="input-text with-border" id="txt_fechaN" placeholder="Fecha de Nacimiento" required="">
									</div>
								</div>


								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-material-outline-person-pin"></i>
										<input type="text" class="input-text with-border" id="txt_curp" placeholder="CURP" required="">
									</div>
								</div>
							</div>






							<h4 class="tituloRegistro">Contacto</h4>

							<div class="row">

								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-material-outline-email"></i>
										<input type="text" class="input-text with-border" id="txt_correo" placeholder="Correo Electronico" required="">
									</div>
								</div>


								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-feather-smartphone"></i>
										<input type="text" class="input-text with-border" id="txt_cel" placeholder="Celular" required="">
									</div>
								</div>





								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-feather-phone"></i>
										<input type="text" class="input-text with-border" id="txt_tel" placeholder="Telefono (opcional)" required="">
									</div>
								</div>


								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-brand-facebook-f"></i>
										<input type="text" class="input-text with-border" id="txt_facebook" placeholder="Facebook (opcional)" required="">
									</div>
								</div>

							</div>



							<h4 class="tituloRegistro">Acerca de mi</h4>

							<div class="row">

								<div class="col-xl-3">
									<div class="submit-field">
										<select class="selectpicker with-border" data-size="7" title="En que ciudad vivo" id="select_ciudad">
											|<?php
												$servicio = controladorServicios::ctrmostrarCiudades();

												foreach ($servicio as $key => $value) {
													echo '<option value="' . $value["id_ciudad"] . '">' . $value["ciudad"] . '</option>';
												}
												?>

										</select>
									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">
										<select class="selectpicker with-border" data-live-search="true" data-size="6" title="Elige una categoria de servicios" id="sel_catSev">
											<?php
											$servicio = controladorServicios::ctrmostrarCategoriasServicios();
											foreach ($servicio as $key => $value) {
												echo '<option value="' . $value["id_categoria_servicio"] . '">' . $value["nombre_servicio"] . '</option>';
											}
											?>

										</select>
									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">

										<select name="" class="" id="servicios">
											<option value="">Selecciona un servicio</option>


										</select>

									</div>
								</div>

								<div class="col-xl-3">
									<div class="submit-field">
										<select class="selectpicker with-border" data-size="7" title="Elegi tu sexo" id="select_sexo">
											<?php
												$sexo = controladorServicios::ctrMostrarSexo();
												foreach ($sexo as $key => $value) {
													echo '<option value="' . $value["id_sexo"] . '">' . $value["sexo"] . '</option>';
												}
											?>

										</select>
									</div>
								</div>


							</div>


									

							<div class="row d-flex justify-content-center">
								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-line-awesome-key"></i>
										<input type="password" class="input-text with-border" id="txt_password" placeholder="Contraseña" required="">
									</div>
								</div>


								<div class="col-xl-3">
									<div class="input-with-icon-left">
										<i class="icon-line-awesome-key"></i>
										<input type="text" class="input-text with-border" id="txt_password2" placeholder="Confirmar Contraseña" required="">
									</div>
								</div>

							</div>







							<div class="col-xl-12  d-flex justify-content-center">
								<a id="registroUsuario" href="" class="button ripple-effect big margin-top-30"> Registrarte</a>
							</div>




						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- Row / End -->

		<!-- Footer -->
		<div class="dashboard-footer-spacer"></div>
		<div class="small-footer margin-top-15">
			<div class="small-footer-copyrights">
				© 2018 <strong>Hireo</strong>. All Rights Reserved.
			</div>
			<ul class="footer-social-links">
				<li>
					<a href="#" title="Facebook" data-tippy-placement="top">
						<i class="icon-brand-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Twitter" data-tippy-placement="top">
						<i class="icon-brand-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Google Plus" data-tippy-placement="top">
						<i class="icon-brand-google-plus-g"></i>
					</a>
				</li>
				<li>
					<a href="#" title="LinkedIn" data-tippy-placement="top">
						<i class="icon-brand-linkedin-in"></i>
					</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- Footer / End -->

	</div>
</div>
<!-- Dashboard Content / End -->






<!-- Page Content
================================================== 
<div class="container estilosRegistro">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
			
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="pages-register.htm">Sign Up!</a></span>
				</div>
					
				<form method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/="">
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/="">
					</div>
				</form>
				
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				
			</div>

		</div>
	</div>
</div>
-->



</div>
<!-- Wrapper / End -->


<style>
	#footer {
		position: absolute;
		bottom: 0;
		width: 100%;
	}
</style>