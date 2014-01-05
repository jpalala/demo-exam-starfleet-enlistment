jQuery(function($) {
	var errors;

	$("form#register_form input[name='submit']").click(function() {

	var errors = 0;

		var fname = $("form#register_form input[name='fname']").val();
		var lname = $("form#register_form input[name='lname']").val();
		var address	= $("form#register_form input[name='address']").val();
		var city 	=  $("form#register_form input[name='city']").val();; // reg ex email check
		var state 	= $("form#register_form input[name='state']").val();
		var zip 	= $("form#register_form input[name='zip']").val();

		/* validation start */
		if(fname == "") {
			$("span.val_firstname").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
			$("span.val_firstname").html("");
			}
		if(lname == "") {
			$("span.val_lastname").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
			$("span.val_lastname").html("");
			}


		if(address == "") {
			$("span.val_address").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
				$("span.val_address").html("");
			}

		if(city == "") {
			$("span.val_city").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
				$("span.val_city").html("");
		}
		
		if(state == "") {
			$("span.val_state").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
			$("span.val_state").html("");
			
		}
		

		if(zip == "") {
			$("span.val_zip").html("This field is required.").addClass('validate');
			errors += 1;
		} else {
			$("span.val_zip").html("");
			
		}

		if(errors > 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		} 
		errors = 0; // else return true

		//ajax post
		var formURL = 'register.php';
		var postData = $("form#register_form").serializeArray();
		$.ajax(
		{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{
			$("body div#wrap2").html("Your data has been sent!<br>");
			$("body div#wrap2").append(data);
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
			alert('Failed to post data');		
		}
	});
    e.preventDefault();	//STOP default action
		/* validation end */
	}); // click end

}); // jQuery End