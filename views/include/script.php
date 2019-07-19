
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
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places"></script>
