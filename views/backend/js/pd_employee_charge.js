function _ini_create_pd_employee_charge() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_employee_charge').removeClass('alert-danger');
	$('#form_ajax_pd_employee_charge').removeClass('alert-warning');
	$('#form_ajax_pd_employee_charge').addClass('alert-warning');
	$("#form_ajax_pd_employee_charge").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_employee_charge').removeClass('hide');
	$('#form_ajax_pd_employee_charge').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_employee_charge/create",
		data : $('#form_create_pd_employee_charge').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_employee_charge').html(success_icon + obj.message);
				$("#form_ajax_pd_employee_charge").removeClass('alert-warning');
				$("#form_ajax_pd_employee_charge").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_employee_charge').removeClass('alert');
					$('#form_ajax_pd_employee_charge').addClass('hide');
					$('#form_ajax_pd_employee_charge').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_employee_charge').html(error_icon + obj.message);
				$("#form_ajax_pd_employee_charge").removeClass('alert-warning');
				$("#form_ajax_pd_employee_charge").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_employee_charge').addClass('alert-danger');
			$("#form_ajax_pd_employee_charge").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_employee_charge').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_employee_charge')) {
	document.getElementById('form_btn_create_pd_employee_charge').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_employee_charge();
	};
}

if (document.getElementById('form_create_pd_employee_charge')) {
	document.getElementById('form_create_pd_employee_charge').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_employee_charge();
			return false;
		}
	};
}










function _ini_update_pd_employee_charge() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_employee_charge').removeClass('alert-danger');
	$('#form_ajax_pd_employee_charge').removeClass('alert-warning');
	$('#form_ajax_pd_employee_charge').addClass('alert-warning');
	$("#form_ajax_pd_employee_charge").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_employee_charge').removeClass('hide');
	$('#form_ajax_pd_employee_charge').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_employee_charge/update",
		data : $('#form_update_pd_employee_charge').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_employee_charge').html(success_icon + obj.message);
				$("#form_ajax_pd_employee_charge").removeClass('alert-warning');
				$("#form_ajax_pd_employee_charge").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_employee_charge').removeClass('alert');
					$('#form_ajax_pd_employee_charge').addClass('hide');
					$('#form_ajax_pd_employee_charge').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_employee_charge').html(error_icon + obj.message);
				$("#form_ajax_pd_employee_charge").removeClass('alert-warning');
				$("#form_ajax_pd_employee_charge").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_employee_charge').addClass('alert-danger');
			$("#form_ajax_pd_employee_charge").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_employee_charge').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_employee_charge')) {
	document.getElementById('form_btn_update_pd_employee_charge').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_employee_charge();
	};
}

if (document.getElementById('form_update_pd_employee_charge')) {
	document.getElementById('form_update_pd_employee_charge').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_employee_charge();
			return false;
		}
	};
}