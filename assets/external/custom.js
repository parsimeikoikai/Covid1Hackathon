'use strict';


var base_url = 'http://localhost/cgk/';
var css_path = base_url + "assets/node_modules/bootstrap/css/bootstrap.min.css";
var css_path2 = base_url + "assets/external/custom.css";
var css_path3 = base_url + "assets/bower_components/bootstrap/dist/css/bootstrap.min.css";
var btn_color = "#ff924c";

//check form inputs

function Toast(type, css, msg) {
	this.type = type;
	this.css = css;
	this.msg = 'Action Was successful!';
}
function ErrorToast(type, css, msg) {
	this.type = type;
	this.css = css;
	this.msg = 'Error! Please Try again later';
}

var toasts = [
	new Toast('success', 'toast-top-right', 'top right'),

];
var toastError = [
	new ErrorToast('error', 'toast-bottom-left', 'Error executing action!Please Try again later')
];



var i = 0;

$('#tryMe').click(function () {
	$('#tryMe').prop('disabled', true);
	delayToasts();
});

function delayToasts() {
	if (i === toasts.length) { return; }
	var delay = i === 0 ? 0 : 2100;
	window.setTimeout(function ()
	{
		showToast(res);
	}, delay);

	// re-enable the button
	if (i === toasts.length-1) {
		window.setTimeout(function () {
			$('#tryMe').prop('disabled', false);
			i = 0;
		}, delay + 1000);
	}
}

function showToast(res) {
	if (res === '1') {

		var t = toasts[i];
	}else
	{
		var t = toastError[i];
	}

	toastr.options.positionClass = t.css;
	toastr[t.type](t.msg);
	i++;
	delayToasts();
}
$(document).ready(function () {
	$("#add_roles").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
					showToast(res);
			     	$("#loading_div").hide();
					setTimeout(function () {
						$("#save_btn").show();
						$("#exampleModalCenter").modal("hide");
					}, 2000)
				$('#roles_table').DataTable().ajax.reload();



			}
		});

	});
});
$(document).ready(function () {
	$("#edit_roles").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#roles_table').DataTable().ajax.reload();



			}
		});

	});
});
function edit_role(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_roles/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {

			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#role').val(data.role);
			$('#description').val(data.description);

		}
	})
}
$('#roles_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_roles",
		type: 'GET',
		'bProcessing': true
	}

});
$(document).ready(function () {
	$("#add_program").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#exampleModalCenter").modal("hide");
				}, 2000)
				$('#programs_table').DataTable().ajax.reload();



			}
		});

	});
});
$('#programs_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_programs",
		type: 'GET',
		'bProcessing': true
	}

});
$(document).ready(function () {
	$("#edit_programs").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#programs_table').DataTable().ajax.reload();



			}
		});

	});
});
function edit_programs(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_programs/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {

			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#program').val(data.program);
			$('#description').val(data.description);

		}
	})
}
$(document).ready(function () {
	$("#add_user").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
				$("#error_div").hide();
			},
			success: function (res) {
				if (res ==='2')
				{
					$("#error_div").show();
				}else
				{
					showToast(res);
					$("#loading_div").hide();
					setTimeout(function () {
						$("#save_btn").show();
						$("#exampleModalCenter").modal("hide");
					}, 2000)
					$('#users_table').DataTable().ajax.reload();
				}




			}
		});

	});
});
$(document).ready(function () {
	$("#add_donor").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
				$("#error_div").hide();
			},
			success: function (res) {
				if (res ==='2')
				{
					$("#error_div").show();
				}else
				{
					showToast(res);
					$("#loading_div").hide();
					setTimeout(function () {
						$("#save_btn").show();
						$("#exampleModalCenter").modal("hide");
					}, 2000)
					$('#donors_table').DataTable().ajax.reload();
				}




			}
		});

	});
});

$('#users_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_users",
		type: 'GET',
		'bProcessing': true
	}

});
function edit_users(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_users/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {

			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#fName').val(data.fName);
			$('#email').val(data.email);
			$('#other_names').val(data.other_names);
			$('#program_id').val(data.program_id);
			$('#role').val(data.role);
			$('#branch_id').val(data.branch_id);


		}
	})
}
$(document).ready(function () {
	$("#edit_users").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#users_table').DataTable().ajax.reload();



			}
		});

	});
});
function check_pass1()
{
	var pass1 = document.getElementById('user_pass1').value;

	if(pass1.length < 6)
	{
		$("#user_pass1").css({"border": "solid 1px red"});
		$("#pass1_error").show();
		$("#pass_btn").hide();

		return false;
	}

	else
	{
		$("#user_pass1").css({"border": ""});
		$("#pass1_error").hide();
		$("#pass_btn").show();
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
		$("#pass_btn").hide();

		return false;
	}

	else
	{
		$("#user_pass2").css({"border": ""});
		$("#pass_mismatch").hide();
		$("#pass_btn").show();

		return true
	}
}
$(document).ready(function () {
	$("#update_profile").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
				$("#error_div").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					location.reload()
				}, 2000)

			}
		});

	});
});
$('#donors_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_donors",
		type: 'GET',
		'bProcessing': true
	}

});
function edit_donor(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_donor/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {

			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#name').val(data.name);
			$('#type_id').val(data.type_id);
			$('#amount').val(data.amount);
			$('#program_id').val(data.program_id);
			$('#phone_number').val(data.phone_number);
			$('#country_id').val(data.country_id);
			$('#email_address').val(data.email_address);
			$('#duration').val(data.duration);
			$('#currency_id').val(data.currency_id);
			$('#person_id').val(data.person_id);


		}
	})
}
$(document).ready(function () {
	$("#edit_donors").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#donors_table').DataTable().ajax.reload();



			}
		});

	});
});
$('#grants_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_grants",
		type: 'GET',
		'bProcessing': true
	}

});
$(document).ready(function () {
	$("#add_grants").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
				$("#error_div").hide();
			},
			success: function (res) {
				if (res ==='2')
				{
					$("#error_div").show();
				}else
				{
					showToast(res);
					$("#loading_div").hide();
					setTimeout(function () {
						$("#save_btn").show();
						$("#exampleModalCenter").modal("hide");
					}, 2000)
					$('#grants_table').DataTable().ajax.reload();
				}




			}
		});

	});
});
function edit_grants(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_grant/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {
			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#name').val(data.name);
			$('#type_id').val(data.type_id);
			$('#amount').val(data.amount);
			$('#donor_id').val(data.donor_id);
			$('#description').val(data.description);

		}
	})
}
$(document).ready(function () {
	$("#edit_grants").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#grants_table').DataTable().ajax.reload();



			}
		});

	});
});
$('#proposals_table').DataTable({
	"processing": true,
	"ajax": {
		url: base_url + "actions/list_proposals",
		type: 'GET',
		'bProcessing': true
	}

});
$(document).ready(function () {
	$("#add_proposal").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#exampleModalCenter").modal("hide");
				}, 2000)
				$('#proposals_table').DataTable().ajax.reload();



			}
		});

	});
});
function edit_proposals(row_id) {
	var user_id = row_id;
	$.ajax({
		url: base_url + "actions/edit_proposals/" + user_id,
		method: "POST",
		data: {user_id: user_id},
		dataType: "json",
		success: function (data) {
			$('#editModalCentre').modal('show');
			$('#row_id').val(user_id);
			$('#name').val(data.name);
			$('#type_id').val(data.type_id);
			$('#amount').val(data.amount);
			$('#donor_id').val(data.donor_id);
			$('#description').val(data.description);

		}
	})
}
$(document).ready(function () {
	$("#update_proposal").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: $(this).serializeArray(),
			beforeSend: function () {
				$("#loading_div").show();
				$("#save_btn").hide();
			},
			success: function (res) {
				showToast(res);
				$("#loading_div").hide();
				setTimeout(function () {
					$("#save_btn").show();
					$("#editModalCentre").modal("hide");
				}, 2000)
				$('#proposals_table').DataTable().ajax.reload();

			}
		});

	});
});
