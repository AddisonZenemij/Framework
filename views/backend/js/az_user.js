function _ini_create_az_user() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_user').removeClass('alert-danger');
	$('#form_ajax_az_user').removeClass('alert-warning');
	$('#form_ajax_az_user').addClass('alert-warning');
	$("#form_ajax_az_user").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_user').removeClass('hide');
	$('#form_ajax_az_user').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_user/create",
		data : $('#form_create_az_user').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_user').html(success_icon + obj.message);
				$("#form_ajax_az_user").removeClass('alert-warning');
				$("#form_ajax_az_user").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_email').value = '';
				document.getElementById('field_login').value = '';
				document.getElementById('field_password').value = '';
				document.getElementById('field_role').value = '0';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_user').removeClass('alert');
					$('#form_ajax_az_user').addClass('hide');
					$('#form_ajax_az_user').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_user').html(error_icon + obj.message);
				$("#form_ajax_az_user").removeClass('alert-warning');
				$("#form_ajax_az_user").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_user').addClass('alert-danger');
			$("#form_ajax_az_user").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_user').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_az_user')) {
	document.getElementById('form_btn_create_az_user').onclick = function(e) {
		e.preventDefault();
		_ini_create_az_user();
	};
}

if (document.getElementById('form_create_az_user')) {
	document.getElementById('form_create_az_user').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_az_user();
			return false;
		}
	};
}










function _ini_update_az_user() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_user').removeClass('alert-danger');
	$('#form_ajax_az_user').removeClass('alert-warning');
	$('#form_ajax_az_user').addClass('alert-warning');
	$("#form_ajax_az_user").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_user').removeClass('hide');
	$('#form_ajax_az_user').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_user/update",
		data : $('#form_update_az_user').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_user').html(success_icon + obj.message);
				$("#form_ajax_az_user").removeClass('alert-warning');
				$("#form_ajax_az_user").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_user').removeClass('alert');
					$('#form_ajax_az_user').addClass('hide');
					$('#form_ajax_az_user').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_user').html(error_icon + obj.message);
				$("#form_ajax_az_user").removeClass('alert-warning');
				$("#form_ajax_az_user").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_user').addClass('alert-danger');
			$("#form_ajax_az_user").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_user').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_az_user')) {
	document.getElementById('form_btn_update_az_user').onclick = function(e) {
		e.preventDefault();
		_ini_update_az_user();
	};
}

if (document.getElementById('form_update_az_user')) {
	document.getElementById('form_update_az_user').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_az_user();
			return false;
		}
	};
}