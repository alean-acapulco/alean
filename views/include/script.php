<!-- ::::::... IMPORTANCION DE JS ...::::: -->
<script src="views/src/js/jquery-3.3.1.min.js"></script>
<script src="views/src/jquery-migrate-3.0.0.min.js"></script>
<script src="views/src/js/mmenu.min.js"></script>
<script src="views/src/js/tippy.all.min.js"></script>
<script src="views/src/js/simplebar.min.js"></script>
<script src="views/src/js/bootstrap-slider.min.js"></script>
<script src="views/src/js/bootstrap-select.min.js"></script>
<script src="views/src/js/snackbar.js"></script>
<script src="views/src/js/clipboard.min.js"></script>
<script src="views/src/js/counterup.min.js"></script>
<script src="views/src/js/magnific-popup.min.js"></script>
<script src="views/src/js/slick.min.js"></script>
<script src="views/src/js/custom.js"></script>
<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
	// Snackbar for user status switcher
	$('#snackbar-user-status label').click(function() {
		Snackbar.show({
			text: 'Your status has been changed!',
			pos: 'bottom-center',
			showAction: false,
			actionText: "Dismiss",
			duration: 3000,
			textColor: '#fff',
			backgroundColor: '#383838'
		});
	});
</script>


<!-- Google Autocomplete -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places"></script>

<!-- :::::::::::.... SCRIPTS PERZONALIZADOS ...:::::::::: -->
<script src="sources/js/acciones.js"></script>
<!-- :::::::::::.... SCRIPTS PERZONALIZADOS ...:::::::::: -->




<!-- SMARTH WIZAR JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script src="views/src/plugins/smarthWizard/dist/js/jquery.smartWizard.js"></script>
<!-- SMARTH WIZAR JS -->

<script type="text/javascript">
	// Toolbar extra buttons
	var btnFinish = $('<button></button>').text('Finish')
		.addClass('btn btn-info btn-guardar')
		.on('click', function() {
			if (!$(this).hasClass('disabled')) {
				var elmForm = $("#myForm");
				if (elmForm) {
					elmForm.validator('validate');
					var elmErr = elmForm.find('.has-error');
					if (elmErr && elmErr.length > 0) {
						alert('Oops we still have error in the form');
						return false;
					} else {
						alert('Great! we are ready to submit form');
						elmForm.submit();
						return false;
					}
				}
			}
		});


	$(document).ready(function() {
		$('#smartwizard').smartWizard({
			toolbarSettings: {

				toolbarExtraButtons: [btnFinish]
			},
			theme: 'circles',
			transitionEffect: 'fade', // Effect on navigation, none/slide/fade
			transitionSpeed: '400',
			showStepURLhash: false,
			autoAdjustHeight: true,
			lang: { // Language variables
				next: 'Siguiente',
				previous: 'Atras'
			}



		});

		$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
			var elmForm = $("#form-step-" + stepNumber);

			if (stepDirection === 'forward' && elmForm) {
				elmForm.validator('validate');
				var elmErr = elmForm.children('.has-error');
				if (elmErr && elmErr.length > 0) {

					return false;
				}
			}
			return true;
		});
	});
</script>

<!-- :::::::... SCRIPTS PARA EL DATE DROPTER ...:::::::: -->
<script src="https://cdn.datedropper.com/get/qaa3snuj6vqjck0tguo6sfz5yjwyb0mk"></script>
<!-- :::::::... SCRIPTS PARA EL DATE DROPTER ...:::::::: -->



<!-- :::::::... SCRIPT PARA NUMERO TELEFONICO ...:::::::: -->
<script src="views/src/plugins/phone/dist/jquery-input-mask-phone-number.js"></script>

<script>
	$(document).ready(function() {
		$('#txt_tel').usPhoneFormat({
			format: '(xxx) xxx-xxxx'
		});

	});
</script>
<!-- :::::::... SCRIPT PARA NUMERO TELEFONICO ...:::::::: -->




<script>
	$('#fechaN').dateDropper({
		lang: 'es',
		theme: 'vanilla',
		large: true,
		format: 'd-m-Y',
		maxYear: 2019,
		minYear: 1940,
		largeOnly: true
	});
</script>