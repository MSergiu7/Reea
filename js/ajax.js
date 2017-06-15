// Show modal
$(document).ready(function(){
  $('#myModal').modal('show');
})


$('#submit').click(function() {

    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
      });

    // Input validation
    $("#signUpForm").validate({
      rules: {
        firstName: {
          required: true,
          min: 4
        },

        lastName: {
          required: true,
          min: 4
        },

        month: "required",

        day: "required",

        year: "required",

        gender: "required",

        country: "required",

        email: {
          required: true,
          email: true
        },

        phone: {
          required: true,
          number: true
        },

        password: {
          required: true,
          min: 6
        },

        confirmPassword: {
          required: true,
          min: 6
        }
      }
    });

    var url = '/takeData.php';
		$.ajax({
			type: "POST",
			//dataType: "HTML",
			async: true,
			url: url,
			// data:
			// {
      //
			// },
			success: function()
			{
        $('.success').show();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown)
			{
				console.log(errorThrown);
			}
		});

});
