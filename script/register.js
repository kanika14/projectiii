$(document).ready(function(){
	$("#register").click(function(){
		
	var name = $("#username").val();
	var pass = $("#password").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var type = $("#userType").val();

	
	$.ajax({
		method: "post",
		url : "sign.php",
		data : {
			name : name,
			pass : pass,
			email : email,
			phone : phone,
			type : type
		},
		success : function(data)
		{	
			window.location.href = 'welcome.php';
		}
	});
	});
});

$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "please enter your password"
			 },
			user_email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */


	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'db.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button").html('Signing In ...');
					setTimeout(' window.location.href = "welcome.php"; ',4000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
						$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});
				}
			}
		});
		return false;
	}   
});