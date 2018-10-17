function _ini_create_pd_data_personal() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_data_personal').removeClass('alert-danger');
	$('#form_ajax_pd_data_personal').removeClass('alert-warning');
	$('#form_ajax_pd_data_personal').addClass('alert-warning');
	$("#form_ajax_pd_data_personal").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_data_personal').removeClass('hide');
	$('#form_ajax_pd_data_personal').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_data_personal/create",
		data : $('#form_create_pd_data_personal').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_data_personal').html(success_icon + obj.message);
				$("#form_ajax_pd_data_personal").removeClass('alert-warning');
				$("#form_ajax_pd_data_personal").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_address').value = '';
				document.getElementById('field_base_salary').value = '0';
				document.getElementById('field_birth_date').value = 'aaaa-mm-dd';
				document.getElementById('field_birth_place').value = '0';
				document.getElementById('field_campaign').value = '0';
				document.getElementById('field_civil_status').value = '0';
				document.getElementById('field_contract_type').value = '0';
				document.getElementById('field_data_personal').value = '0';
				document.getElementById('field_date_admission').value = 'aaaa-mm-dd';
				document.getElementById('field_date_contract_termination').value = 'aaaa-mm-dd';
				document.getElementById('field_document_type').value = '0';
				document.getElementById('field_email').value = '';
				document.getElementById('field_employee_charge').value = '0';
				document.getElementById('field_eps').value = '0';
				document.getElementById('field_identification').value = '';
				document.getElementById('field_level_study').value = '0';
				document.getElementById('field_names').value = '';
				document.getElementById('field_neighborhood').value = '0';
				document.getElementById('field_pension').value = '0';
				document.getElementById('field_phone_fixed').value = '';
				document.getElementById('field_phone_movil').value = '';
				document.getElementById('field_surnames').value = '';
				document.getElementById('field_transport_assistance').value = '0';
				document.getElementById('field_value_bonus').value = '0';

				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_data_personal').removeClass('alert');
					$('#form_ajax_pd_data_personal').addClass('hide');
					$('#form_ajax_pd_data_personal').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_data_personal').html(error_icon + obj.message);
				$("#form_ajax_pd_data_personal").removeClass('alert-warning');
				$("#form_ajax_pd_data_personal").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_data_personal').addClass('alert-danger');
			$("#form_ajax_pd_data_personal").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_data_personal').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_data_personal')) {
	document.getElementById('form_btn_create_pd_data_personal').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_data_personal();
	};
}

if (document.getElementById('form_create_pd_data_personal')) {
	document.getElementById('form_create_pd_data_personal').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_data_personal();
			return false;
		}
	};
}










function _ini_update_pd_data_personal() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_data_personal').removeClass('alert-danger');
	$('#form_ajax_pd_data_personal').removeClass('alert-warning');
	$('#form_ajax_pd_data_personal').addClass('alert-warning');
	$("#form_ajax_pd_data_personal").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_data_personal').removeClass('hide');
	$('#form_ajax_pd_data_personal').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_data_personal/update",
		data : $('#form_update_pd_data_personal').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_data_personal').html(success_icon + obj.message);
				$("#form_ajax_pd_data_personal").removeClass('alert-warning');
				$("#form_ajax_pd_data_personal").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_data_personal').removeClass('alert');
					$('#form_ajax_pd_data_personal').addClass('hide');
					$('#form_ajax_pd_data_personal').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_data_personal').html(error_icon + obj.message);
				$("#form_ajax_pd_data_personal").removeClass('alert-warning');
				$("#form_ajax_pd_data_personal").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_data_personal').addClass('alert-danger');
			$("#form_ajax_pd_data_personal").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_data_personal').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_data_personal')) {
	document.getElementById('form_btn_update_pd_data_personal').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_data_personal();
	};
}

if (document.getElementById('form_update_pd_data_personal')) {
	document.getElementById('form_update_pd_data_personal').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_data_personal();
			return false;
		}
	};
}