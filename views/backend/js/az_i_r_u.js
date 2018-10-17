function _ini_create_az_i_r_u() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_i_r_u').removeClass('alert-danger');
	$('#form_ajax_az_i_r_u').removeClass('alert-warning');
	$('#form_ajax_az_i_r_u').addClass('alert-warning');
	$("#form_ajax_az_i_r_u").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_i_r_u').removeClass('hide');
	$('#form_ajax_az_i_r_u').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_i_r_u/create",
		data : $('#form_create_az_i_r_u').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_i_r_u').html(success_icon + obj.message);
				$("#form_ajax_az_i_r_u").removeClass('alert-warning');
				$("#form_ajax_az_i_r_u").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_role').value = '0';
				document.getElementById('field_user').value = '0';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_i_r_u').removeClass('alert');
					$('#form_ajax_az_i_r_u').addClass('hide');
					$('#form_ajax_az_i_r_u').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_i_r_u').html(error_icon  + obj.message);
				$("#form_ajax_az_i_r_u").removeClass('alert-warning');
				$("#form_ajax_az_i_r_u").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_i_r_u').addClass('alert-danger');
			$("#form_ajax_az_i_r_u").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_i_r_u').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_az_i_r_u')) {
	document.getElementById('form_btn_create_az_i_r_u').onclick = function(e) {
		e.preventDefault();
		_ini_create_az_i_r_u();
	};
}

if (document.getElementById('form_create_az_i_r_u')) {
	document.getElementById('form_create_az_i_r_u').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_az_i_r_u();
			return false;
		}
	};
}










function _ini_update_az_i_r_u() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_i_r_u').removeClass('alert-danger');
	$('#form_ajax_az_i_r_u').removeClass('alert-warning');
	$('#form_ajax_az_i_r_u').addClass('alert-warning');
	$("#form_ajax_az_i_r_u").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_i_r_u').removeClass('hide');
	$('#form_ajax_az_i_r_u').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_i_r_u/update",
		data : $('#form_update_az_i_r_u').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_i_r_u').html(success_icon + obj.message);
				$("#form_ajax_az_i_r_u").removeClass('alert-warning');
				$("#form_ajax_az_i_r_u").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_i_r_u').removeClass('alert');
					$('#form_ajax_az_i_r_u').addClass('hide');
					$('#form_ajax_az_i_r_u').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_i_r_u').html(error_icon + obj.message);
				$("#form_ajax_az_i_r_u").removeClass('alert-warning');
				$("#form_ajax_az_i_r_u").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_i_r_u').addClass('alert-danger');
			$("#form_ajax_az_i_r_u").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_i_r_u').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_az_i_r_u')) {
	document.getElementById('form_btn_update_az_i_r_u').onclick = function(e) {
		e.preventDefault();
		_ini_update_az_i_r_u();
	};
}

if (document.getElementById('form_update_az_i_r_u')) {
	document.getElementById('form_update_az_i_r_u').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_az_i_r_u();
			return false;
		}
	};
}