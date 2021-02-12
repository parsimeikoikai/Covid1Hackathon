
var base_url = 'http://localhost/cgk';

function check_fname()
{
    var fname = document.getElementById('user_fname').value;

    if(!fname.match(/^[a-zA-Z ]*$/))
    {
        $("#user_fname").css({"border": "solid 1px red"});
        $("#fname_error").show();
    }

    else
    {
        $("#user_fname").css({"border": ""});
        $("#fname_error").hide();
    }

}

function check_other_names()
{
    var other_names = document.getElementById('user_other_names').value;

    if(!other_names.match(/^[a-zA-Z ]*$/))
    {
        $("#user_other_names").css({"border": "solid 1px red"});
        $("#other_names_error").show();

    }

    else
    {
        $("#user_other_names").css({"border": ""});
        $("#other_names_error").hide();
    }

}

function check_phone()
{
    var phone = document.getElementById('user_phone').value;

    if(phone.length !== 10)
    {
        $("#user_phone").css({"border": "solid 1px red"});
        $("#phone_error").show();
    }

    else
    {
        $("#user_phone").css({"border": ""});
        $("#phone_error").hide();
    }
}

function check_email()
{
    var email = document.getElementById('user_email').value;

    if((!/\S+@\S+\.\S+/.test(email.toLowerCase())))
    {
        $("#user_email").css({"border": "solid 1px red"});
        $("#email_error").show();

        return false;

    }

    else
    {
        $("#user_email").css({"border": ""});
        $("#email_error").hide();

        return true;
    }
}

function check_pass1()
{
    var pass1 = document.getElementById('user_pass1').value;

    if(pass1.length < 6)
    {
        $("#user_pass1").css({"border": "solid 1px red"});
        $("#pass1_error").show();

        return false;
    }

    else
    {
        $("#user_pass1").css({"border": ""});
        $("#pass1_error").hide();

        return true;
    }
}

function check_pass2()
{
    var pass1 = document.getElementById('user_pass1').value;
    var pass2 = document.getElementById('user_pass2').value;

    if(pass1 !== pass2)
    {
        $("#user_pass2").css({"border": "solid 1px red"});
        $("#pass_mismatch").show();

        return false;
    }

    else
    {
        $("#user_pass2").css({"border": ""});
        $("#pass_mismatch").hide();

        return true
    }
}

$(document).ready(function () {
    $("#signup_form").submit(function (e)
    {
        e.preventDefault();

        check_fname();
        check_other_names();
        check_email();
        check_phone();
        check_pass1();
        check_pass2();

        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serializeArray(),
            beforeSend: function ()
            {
                $("#loading").show();
                $("#auth_button").hide();
            },
            success: function (res)
            {
                if(res === '1')
                {
                    var response = '<span class="text-danger">Email or phone number already registered</span>';

                    $("#loading").hide();
                    $("#response_div").html(response);
                    $("#auth_button").show();
                }

                if(res === '2')
                {
                    var response = '<span class="text-warning">Unable to process request. Please try again later.</span>';

                    $("#loading").hide();
                    $("#response_div").html(response);
                    $("#auth_button").show();
                }

                if(res === '0')
                {
                    var response = '<span class="text-success">Registration successful... Redirecting ...</span>';

                    $("#signup_form")[0].reset();
                    $("#loading").hide();
                    $("#response_div").html(response);

                    setTimeout(function () {
                        window.location.href = base_url + "client";
                    },2000)
                }

            }
        });

    });
});


//login user

$(document).ready(function () {
    $("#login_form").submit(function (e)
    {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serializeArray(),
            beforeSend: function ()
            {
                $("#response_div").hide();
                $("#loading").show();
                $("#auth_button").hide();
            },
            success: function (res)
            {
                if(res === '1')
                {
                    var response = '<span class="text-danger">Incorrect credentials</span>';

                    $("#response_div").show();
                    $("#loading").hide();
                    $("#response_div").html(response);
                    $("#auth_button").show();
                }


                else
                {
                    var response = '<span class="text-success">Login successful... Redirecting ...</span>';

                    $("#response_div").show();
                    $("#login_form")[0].reset();
                    $("#loading").hide();
                    $("#response_div").html(response);

                    setTimeout(function () {
                        window.location.href = res;
                    },2000)
                }

            }
        });

    });
});
$(document).ready(function () {
	$("#reset_password").submit(function (e)
	{
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function ()
			{
				$("#response_div").hide();
				$("#loading").show();
				$("#auth_button").hide();
			},
			success: function (res)
			{
				if(res === '1')
				{
					var response = '<span class="text-danger">Email Does Not Exist</span>';

					$("#response_div").show();
					$("#loading").hide();
					$("#response_div").html(response);
					$("#auth_button").show();
				}


				else
				{
					var response = '<span class="text-success">An email has been sent to you with a link to reset your password. Please click on the link and then set a new password. If you have not received a reset email, please check your junk folder. If you still can\'t find it, double-check the email address and try again. </span>';

					$("#response_div").show();
					$("#reset_password")[0].reset();
					$("#loading").hide();
					$("#response_div").html(response);

					setTimeout(function () {
						window.location.href = res;
					},10000)
				}

			}
		});

	});
});
