
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
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field">
					<label for="autocomplete-input" class="field-title ripple-effect">¿Que servicio necesitas?</label>
						<select class="selectpicker default" data-selected-text-format="count" id="select_catServ" title="Selecciona un servicio">
						<?php
								$servicio = controladorServicios::ctrmostrarCategoriasServicios();
								
								foreach ($servicio as $key => $value) {
									echo '<option value="'.$value["id_categoria_servicio"].'">'.$value["nombre_servicio"].'</option>';
								}
								
					?>
							
						</select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect">Buscar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Tasks Posted</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

