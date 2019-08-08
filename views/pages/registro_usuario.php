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
							<h3><i class="icon-feather-folder-plus"></i> REGISTRATE</h3>
						</div>


						<div class="col-lg-12 col-md-12">
							<form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
								<div id="smartwizard">

									<ul class="pasos d-flex justify-content-center">
										<li><a href="#step-1">1<br /><small>Cuenta</small></a></li>
										<li><a href="#step-2">2<br /><small>Datos personales</small></a></li>
										<li><a href="#step-3">3<br /><small>Seguridad</small></a></li>
									</ul>

									<div>

										<!-- :::::::::::... ELEGIR TIPO DE CUENTA .....:::::::::::: -->
										<div id="step-1" class="">


											<div class="col-lg-12 col-mg-12">

												<h3 class="titulos">Elige el tipo de cuenta</h3>

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

											<h3 class="titulos" id="titCliente">Selecciona el lugar en donde vives</h3>
											
											<h3 class="titulos" id="titServ">Selecciona un servicio</h3>

											<div class="row d-flex justify-content-center divServicio">

												<div class="col-xl-3">
													<div class="submit-field">
														<select class="selectpicker with-border" data-live-search="true" data-size="3" title="En que ciudad vivo" id="select_ciudad">
															|<?php
																$servicio = controladorServicios::ctrmostrarCiudades();

																foreach ($servicio as $key => $value) {
																	echo '<option value="' . $value["id_ciudad"] . '">' . $value["ciudad"] . '</option>';
																}
																?>

														</select>
													</div>
												</div>

												<div class="col-xl-3" id="opcionServicio">
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

												<div class="col-xl-3" id="opcionServicio2">
													<div class="submit-field">

														<select name="" class="" id="servicios">
															<option value="">Selecciona un servicio</option>


														</select>

													</div>
												</div>

											</div>

										</div>
										<!-- :::::::::::... ELEGIR TIPO DE CUENTA .....:::::::::::: -->


										<!-- :::::::::::... ELEGIR DATOS PERSONALES .....:::::::::::: -->
										<div id="step-2" class="">

											<h4 class="tituloRegistro">Datos personales</h4>

											<div class="row" id="form-step-1" role="form" data-toggle="validator">



												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-feather-user"></i>
														<input type="text" class="input-text with-border" id="txt_nombre" placeholder="Nombre(s)" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-feather-users"></i>
														<input type="text" class="input-text with-border" id="txt_apellidos" placeholder="Apellidos" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-feather-calendar"></i>
														<input class="input-text with-border" id="fechaN" type="text" placeholder="Fecha de Nacimiento" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="form-group col-xl-3">
													<div class="submit-field">
														<select class="selectpicker with-border" data-size="7" title="Elegi tu sexo" id="select_sexo" required>
															<?php
															$sexo = controladorServicios::ctrMostrarSexo();
															foreach ($sexo as $key => $value) {
																echo '<option value="' . $value["id_sexo"] . '">' . $value["sexo"] . '</option>';
															}
															?>

														</select>
														<div id="errorSelect" class="help-block with-errors"></div>
													</div>
												</div>







												<h4 class="col-xl-12 tituloRegistro" id="tiContacto">Contacto</h4>




												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-material-outline-email"></i>
														<input type="email" class="input-text with-border" id="txt_correo" placeholder="Correo Electronico" required="">
														<div class="help-block with-errors"></div>
													</div>
												</div>


												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-feather-smartphone"></i>
														<input type="number" class="input-text with-border" id="txt_cel" placeholder="Celular" required="">
														<div class="help-block with-errors"></div>
													</div>
												</div>





												<div class="col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-feather-phone"></i>
														<input type="tel" class="input-text with-border" id="txt_tel" placeholder="Telefono (opcional)" required="">
														<div class="help-block with-errors"></div>

													</div>
												</div>


												<div class="form-group col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-material-outline-person-pin"></i>
														<input type="text" class="input-text with-border" id="txt_curp" maxlength="18" minlength="18" placeholder="CURP" required onkeyup="Curp()">
														<p class="Concurp"><a href="https://consisa.com.mx/curp" target="_blank">Consultar CURP</a></p>
														<div id="errorCurp" class="help-block with-errors"></div>

													</div>
												</div>




											</div>



										</div>
										<!-- :::::::::::... ELEGIR DATOS PERSONALES .....:::::::::::: -->

										<!-- :::::::::::... PASO DE SEGURIDAD .....:::::::::::: -->
										<div id="step-3" class="">
											<h3 class="titulos">Genere una contraseña</h3>

											<div class="row d-flex justify-content-center divServicio">
												<div class="col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-line-awesome-key"></i>
														<input type="password" class="input-text with-border" id="txt_password" placeholder="Contraseña" required="" onkeyup="validarPassoword()">
													</div>
												</div>


												<div class="col-xl-3">
													<div class="input-with-icon-left">
														<i class="icon-line-awesome-key"></i>
														<input type="password" class="input-text with-border" id="txt_password2" placeholder="Confirmar Contraseña" required="" onkeyup="validarPassoword()">
														<p id="passResp"></p>
													</div>
												</div>

											</div>

											<h3 class="titulos" id="tituloIne">Adjunte las siguientes fotografias</h3>


											<div class="row">

												<div class="col-lg-6 col-md-6 col-xs-12">
													<div class="uploadButton d-flex justify-content-end">
														<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple />
														<label class="uploadButton-button ripple-effect" for="upload"><i class="far fa-address-card"></i>&nbsp;INE FRENTE</label>

													</div>
												</div>

												<div class="col-lg-6 col-md-6 col-xs-12">
													<div class="uploadButton d-flex justify-content-start">
														<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple />
														<label class="uploadButton-button ripple-effect" for="upload"><i class="icon-feather-credit-card"></i>&nbsp;INE TRASERA</label>
													</div>
												</div>

											</div>


											<div class="col-md-4 mb-3">

												<div class="row d-flex justify-content-center">
													<div class="col-lg-2 col-md-2 col-xs-12 inputIne">
														<div class="uploadButton">
															<span class="uploadButton-file-name"></span>
														</div>
													</div>

													<div class="col-lg-2 col-md-2 col-xs-12 inputIne">
														<div class="uploadButton">
															<span class="uploadButton-file-name"></span>
														</div>
													</div>

												</div>
											</div>
											<!-- :::::::::::... PASO DE SEGURIDAD .....:::::::::::: -->
											<div class="row">
												<div class=" col-xl-12">

													<div class="d-flex justify-content-center">

														<a href="#" class="button dark ripple-effect button-sliding-icon" id="generarUsuario">Registrarme <i class="icon-feather-check"></i></a>

													</div>

												</div>


											</div>


										</div>
									</div>



							</form>

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
	#opcionServicio, #opcionServicio2 {
		display: none;
	}

	#titServ {
		display: none;
	}
</style>