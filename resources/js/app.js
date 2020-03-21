require('./bootstrap');
const $ = require('jquery');

$(document).ready(function () {
	// when user change the genre filter do this
	$('#filter').on('change', function () {
		// store the selection as genre
		var genderSelect = $(this).val();
		// check that the selection is correct
		if (genderSelect !== 'all' && genderSelect !== 'male' && genderSelect !== 'female') {
			genderSelect = 'Wrong selection';
		}
		console.log(genderSelect);

		// start the ajax call to the server with post method
		$.ajax({
			url: window.location.protocol + "//" + window.location.host + "/api/carriere/studenti/genere/",
			method: "POST",
			data: {
				'gender': genderSelect,
			},
			success: function (data, state) {
				console.log(data);
			},
			error: function (request, state, error) {
				console.log(error);
			}
		});
	});
});
