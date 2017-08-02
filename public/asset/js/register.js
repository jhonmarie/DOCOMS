$(document).ready(function() {
	SignUp();
});

function SignUp() {

	$('#signup').click(function() {

		var for = $('#for').val();
		var office = $('#office').val();
		var address = $('#address').val();
		var subject = $('#sub').val();
		var receiveby = $('#receiveby').val();
		
		if(for === '' || office === '' || address === '' || subject === '' || receiveby === '') {
			alert('Please fill out the required fields.');
		} else {

			if(password !== confirmpass) {
				alert('Password did not match.');
			} else {

				$.ajax({
					type:'POST',
					url:'signup.php',
					data:'firstname='+firstname+'&lastname='+lastname+'&email='+email+
					'&password='+password+'&confirmpass='+confirmpass+'&contact_no='+contact_no,
					success:function(data) {

						if(data == 'isEmpty();') {
							alert('Please fill out required fields.');
						} else {
							if(data == 'EmailCheck();') {
								alert('E-mail address is not available.');
							} else {
								if(data == 'matchPassword();') {
									alert('Password did not match.');
								} else {
									if(data == 'true') {
										window.location='welcome.php';
									} else {
										alert('Network error! There was an error while processing your request.');
									}
								}
							}
						}
					}
				});
			}
		}
	});
}