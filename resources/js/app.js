require('./bootstrap');
const $ = require('jquery');
const Handlebars = require("handlebars");

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

				// clear the cards field
				$('.cards').html('');

				// cycle each student
				data.forEach(student => {
					// check student gender and assigned hired status
					var hired = '';
					if (student.gender === 'male') {
						hired = 'Assunto';
					} else if (student.gender === 'female') {
						hired = 'Assunta';
					}

					// start handlebars
					var source = $('#template').html();
					var template = Handlebars.compile(source);

					// fill handlebars with student information
					var context = {
						'name': student.name,
						'surname': student.surname,
						'age': student.age,
						'gender': student.gender,
						'hired': hired,
						'working_at': student['working at'],
						'job_role': student['job role'],
						'description': student.description,
						'img': student.img,
						'slug': student.slug
					};
					var html = template(context);

					// fill the cards field with the new value
					$('.cards').append(html);
				});
			},
			error: function (request, state, error) {
				console.log(error);
			}
		});
	});
});
