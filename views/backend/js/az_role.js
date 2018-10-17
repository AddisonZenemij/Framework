function _ini_create_az_role() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_role').removeClass('alert-danger');
	$('#form_ajax_az_role').removeClass('alert-warning');
	$('#form_ajax_az_role').addClass('alert-warning');
	$("#form_ajax_az_role").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_role').removeClass('hide');
	$('#form_ajax_az_role').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_role/create",
		data : $('#form_create_az_role').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_role').html(success_icon + obj.message);
				$("#form_ajax_az_role").removeClass('alert-warning');
				$("#form_ajax_az_role").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_category').value = '0';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_role').removeClass('alert');
					$('#form_ajax_az_role').addClass('hide');
					$('#form_ajax_az_role').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_role').html(error_icon + obj.message);
				$("#form_ajax_az_role").removeClass('alert-warning');
				$("#form_ajax_az_role").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_role').addClass('alert-danger');
			$("#form_ajax_az_role").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_role').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_az_role')) {
	document.getElementById('form_btn_create_az_role').onclick = function(e) {
		e.preventDefault();
		_ini_create_az_role();
	};
}

if (document.getElementById('form_create_az_role')) {
	document.getElementById('form_create_az_role').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_az_role();
			return false;
		}
	};
}










function _ini_update_az_role() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_role').removeClass('alert-danger');
	$('#form_ajax_az_role').removeClass('alert-warning');
	$('#form_ajax_az_role').addClass('alert-warning');
	$("#form_ajax_az_role").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_role').removeClass('hide');
	$('#form_ajax_az_role').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_role/update",
		data : $('#form_update_az_role').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_role').html(success_icon + obj.message);
				$("#form_ajax_az_role").removeClass('alert-warning');
				$("#form_ajax_az_role").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_role').removeClass('alert');
					$('#form_ajax_az_role').addClass('hide');
					$('#form_ajax_az_role').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_role').html(error_icon + obj.message);
				$("#form_ajax_az_role").removeClass('alert-warning');
				$("#form_ajax_az_role").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_role').addClass('alert-danger');
			$("#form_ajax_az_role").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_role').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_az_role')) {
	document.getElementById('form_btn_update_az_role').onclick = function(e) {
		e.preventDefault();
		_ini_update_az_role();
	};
}

if (document.getElementById('form_update_az_role')) {
	document.getElementById('form_update_az_role').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_az_role();
			return false;
		}
	};
}










function _ini_update_az_role_az_a_p() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_az_role_az_a_p').removeClass('alert-danger');
	$('#form_ajax_az_role_az_a_p').removeClass('alert-warning');
	$('#form_ajax_az_role_az_a_p').addClass('alert-warning');
	$("#form_ajax_az_role_az_a_p").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_az_role_az_a_p').removeClass('hide');
	$('#form_ajax_az_role_az_a_p').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/az_role_az_a_p/update",
		data : $('#form_update_az_role_az_a_p').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_az_role_az_a_p').html(success_icon + obj.message);
				$("#form_ajax_az_role_az_a_p").removeClass('alert-warning');
				$("#form_ajax_az_role_az_a_p").addClass('alert-success');
				/*document.getElementById("form_btn_list_az_role_az_a_p").disabled = true;
				document.getElementById("form_btn_update_az_role_az_a_p").disabled = true;*/
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_az_role').removeClass('alert');
					$('#form_ajax_az_role').addClass('hide');
					$('#form_ajax_az_role').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_az_role_az_a_p').html(error_icon + obj.message);
				$("#form_ajax_az_role_az_a_p").removeClass('alert-warning');
				$("#form_ajax_az_role_az_a_p").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_az_role_az_a_p').addClass('alert-danger');
			$("#form_ajax_az_role_az_a_p").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_az_role_az_a_p').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_az_role_az_a_p')) {
	document.getElementById('form_btn_update_az_role_az_a_p').onclick = function(e) {
		e.preventDefault();
		_ini_update_az_role_az_a_p();
	};
}

if (document.getElementById('form_update_az_role_az_a_p')) {
	document.getElementById('form_update_az_role_az_a_p').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_az_role_az_a_p_read();
			return false;
		}
	};
}