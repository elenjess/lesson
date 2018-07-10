$(document).ready( function() {
	} );

$(document).on( 'click', 'button', function() {
		var name_input = $('#name_input').val();
		
		$.ajax({
			method:'POST',
			url: '/test.php',
			data: { name: name_input },
			success: function(response) {
				response = JSON.parse(response);
				console.log(response);
				$('#welcome_text').html(response.message);
			}
		});
	
} );