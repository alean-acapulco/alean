<div class="intro-banner dark-overlay" data-background-image="views/src/images/grovice.jpg">
	<div class="transparent-header-spacer"></div>
	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>

						<strong>Contrata expertos para cualquier trabajo, en cualquier momento. </strong>
						<br>
						<span>Unete a la red de trabajo más grande de Acapulco</span>
					</h3>
				</div>
			</div>
		</div>


		<!-- BUSCADOR DE SERVICIOS -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- SELECCIONAR CIUDAD-->
					<div class="intro-search-field with-autocomplete">
						<label for="autocomplete-input" class="field-title ripple-effect">¿En donde buscas tu servicio?</label>
						<select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Elige tu ciudad">
							|<?php
								$servicio = controladorServicios::ctrmostrarCiudades();

								foreach ($servicio as $key => $value) {
									echo '<option value="' . $value["id_ciudad"] . '">' . $value["ciudad"] . '</option>';
								}
								?>
						</select>
					</div>
					<!-- SELECCIONAR CIUDAD-->


					<!-- SELECCIONAR CATEGORIA DE SERVICIOS -->
					<div class="intro-search-field">
						<label for="intro-keywords" class="field-title ripple-effect">¿Que servicio necesitas?</label>

						<select class="selectpicker default"  data-live-search="true" data-selected-text-format="count" data-size="7" title="Elige una categoria" id="sel_catSev">
							<?php
							$servicio = controladorServicios::ctrmostrarCategoriasServicios();

							foreach ($servicio as $key => $value) {
								echo '<option value="' . $value["id_categoria_servicio"] . '">' . $value["nombre_servicio"] . '</option>';
							}
							?>

						</select>
					</div>
					<!-- SELECCIONAR CATEGORIA DE SERVICIOS -->


				
					<div class="intro-search-field">
							<select name="" class="selectPerzonalizado" id="servicios">
								<option value="">Selecciona un servicio</option>


							</select>
					</div>







					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='freelancers-grid-layout-full-page.html'">Buscar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- BUSCADOR DE SERVICIOS-->


		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Socios</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Clientes</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Servicios</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


