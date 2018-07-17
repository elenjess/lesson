$(document).on( 'click', 'button', function() {
	var content = $('#smth').val();
		
		$.ajax({
			method:'POST',
			url: '/script.php',
			data: {},
			success: function(response) {
				console.log(response);
				response = JSON.parse(response);
				$('#family').html(response);
			}
		});
	
} );