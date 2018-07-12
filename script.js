$(document).on( 'click', '#random', function() {
	var content = $('#qwerty').val();
		
		$.ajax({
			method:'POST',
			url: '/script.php',
			data: {},
			success: function(response) {
				response = JSON.parse(response);
				console.log(response);
				$('#random').html(response);
			}
		});
	
} );