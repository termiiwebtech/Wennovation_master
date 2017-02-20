$(function() {
    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var fname = $("input#footer-first-name").val();
            var subject = $("input#footer-subject").val();
            var email = $("input#footer-mail").val();
            var message = $("textarea#footer-comment").val();
            var firstName = fname; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                dataType: 'json',
                data: {
                    fname: fname,
                    subject: subject,
                    email: email,
                    message: message
                },
                cache: false,
                success: function(data) {
                	if(data.error){
	                    // Fail message
	                    $('#footer-form').addClass('errorMsg');
	                    //clear all fields
	                    $('#footer-form').trigger("reset");
                	}
                	else if(data.success){
	                    // Success message
	                    $('#footer-form').addClass('successMsg');
	                    //clear all fields
	                    $('#footer-form').trigger("reset");
					}
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
});


/*When clicking on Full hide fail/success boxes */
$('#form-first-name').focus(function() {
    $('#success').html('');
});
