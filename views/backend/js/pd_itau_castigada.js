function _ini_itau_castigada_create_proyection() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_itau_castigada_proyection').removeClass('alert-danger');
	$('#form_ajax_itau_castigada_proyection').removeClass('alert-warning');
	$('#form_ajax_itau_castigada_proyection').addClass('alert-warning');
	$("#form_ajax_itau_castigada_proyection").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_itau_castigada_proyection').removeClass('hide');
	$('#form_ajax_itau_castigada_proyection').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_itau_castigada/proyection/create",
		data : $('#form_itau_castigada_create_proyection').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_btn_itau_castigada_create_proyection').addClass('btn btn-sm btn-outline-danger');
				$('#form_ajax_itau_castigada_proyection').html(success_icon + obj.message);
				$("#form_ajax_itau_castigada_proyection").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_proyection").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					$('#form_ajax_itau_castigada_proyection').removeClass('alert');
					$('#form_ajax_itau_castigada_proyection').addClass('hide');
					$('#form_ajax_itau_castigada_proyection').html('');
				}, 5000);
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('form_btn_itau_castigada_create_proyection').readOnly = true;
				document.getElementById('form_btn_itau_castigada_create_proyection').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_projection_last_payment_value').readOnly = true;
				document.getElementById('field_projection_last_payment_value').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_projection_pay_date').readOnly = true;
				document.getElementById('field_projection_pay_date').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_projection_projection_value').readOnly = true;
				document.getElementById('field_projection_projection_value').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_projection_date_projection').readOnly = true;
				document.getElementById('field_projection_date_projection').disabled = true;
			} else {
				$('#form_ajax_itau_castigada_proyection').html(error_icon + obj.message);
				$("#form_ajax_itau_castigada_proyection").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_proyection").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_itau_castigada_proyection').addClass('alert-danger');
			$("#form_ajax_itau_castigada_proyection").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_itau_castigada_proyection').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_itau_castigada_create_proyection')) {
	document.getElementById('form_btn_itau_castigada_create_proyection').onclick = function(e) {
		e.preventDefault();
		_ini_itau_castigada_create_proyection();
	};
}

if (document.getElementById('form_itau_castigada_create_proyection')) {
	document.getElementById('form_itau_castigada_create_proyection').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_itau_castigada_create_proyection();
			return false;
		}
	};
}










function _ini_itau_castigada_update_novelty() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_itau_castigada_novelty').removeClass('alert-danger');
	$('#form_ajax_itau_castigada_novelty').removeClass('alert-warning');
	$('#form_ajax_itau_castigada_novelty').addClass('alert-warning');
	$("#form_ajax_itau_castigada_novelty").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_itau_castigada_novelty').removeClass('hide');
	$('#form_ajax_itau_castigada_novelty').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_itau_castigada/novelty/update",
		data : $('#form_itau_castigada_update_novelty').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_btn_itau_castigada_update_novelty').addClass('btn btn-sm btn-outline-danger');
				$('#form_ajax_itau_castigada_novelty').html(success_icon + obj.message);
				$("#form_ajax_itau_castigada_novelty").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_novelty").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					$('#form_ajax_itau_castigada_novelty').removeClass('alert');
					$('#form_ajax_itau_castigada_novelty').addClass('hide');
					$('#form_ajax_itau_castigada_novelty').html('');
				}, 5000);
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('form_btn_itau_castigada_update_novelty').readOnly = true;
				document.getElementById('form_btn_itau_castigada_update_novelty').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_address_main').readOnly = true;
				document.getElementById('field_address_main').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_work_direction').readOnly = true;
				document.getElementById('field_work_direction').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_email_1').readOnly = true;
				document.getElementById('field_email_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_email_2').readOnly = true;
				document.getElementById('field_email_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_phone_fixed_1').readOnly = true;
				document.getElementById('field_phone_fixed_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_phone_fixed_2').readOnly = true;
				document.getElementById('field_phone_fixed_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_phone_fixed_3').readOnly = true;
				document.getElementById('field_phone_fixed_3').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_phone_fixed_4').readOnly = true;
				document.getElementById('field_phone_fixed_4').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_names_surnames_1').readOnly = true;
				document.getElementById('field_ref_family_names_surnames_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_address_1').readOnly = true;
				document.getElementById('field_ref_family_address_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_fixed_1').readOnly = true;
				document.getElementById('field_ref_family_phone_fixed_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_movil_1').readOnly = true;
				document.getElementById('field_ref_family_phone_movil_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_names_surnames_2').readOnly = true;
				document.getElementById('field_ref_family_names_surnames_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_address_2').readOnly = true;
				document.getElementById('field_ref_family_address_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_fixed_2').readOnly = true;
				document.getElementById('field_ref_family_phone_fixed_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_movil_2').readOnly = true;
				document.getElementById('field_ref_family_phone_movil_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_names_surnames_3').readOnly = true;
				document.getElementById('field_ref_family_names_surnames_3').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_address_3').readOnly = true;
				document.getElementById('field_ref_family_address_3').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_fixed_3').readOnly = true;
				document.getElementById('field_ref_family_phone_fixed_3').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_family_phone_movil_3').readOnly = true;
				document.getElementById('field_ref_family_phone_movil_3').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_names_surnames_1').readOnly = true;
				document.getElementById('field_ref_personal_names_surnames_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_address_1').readOnly = true;
				document.getElementById('field_ref_personal_address_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_phone_fixed_1').readOnly = true;
				document.getElementById('field_ref_personal_phone_fixed_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_phone_movil_1').readOnly = true;
				document.getElementById('field_ref_personal_phone_movil_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_names_surnames_2').readOnly = true;
				document.getElementById('field_ref_personal_names_surnames_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_address_2').readOnly = true;
				document.getElementById('field_ref_personal_address_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_phone_fixed_2').readOnly = true;
				document.getElementById('field_ref_personal_phone_fixed_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_personal_phone_movil_2').readOnly = true;
				document.getElementById('field_ref_personal_phone_movil_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_names_surnames_1').readOnly = true;
				document.getElementById('field_ref_commercial_names_surnames_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_address_1').readOnly = true;
				document.getElementById('field_ref_commercial_address_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_phone_fixed_1').readOnly = true;
				document.getElementById('field_ref_commercial_phone_fixed_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_phone_movil_1').readOnly = true;
				document.getElementById('field_ref_commercial_phone_movil_1').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_names_surnames_2').readOnly = true;
				document.getElementById('field_ref_commercial_names_surnames_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_address_2').readOnly = true;
				document.getElementById('field_ref_commercial_address_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_phone_fixed_2').readOnly = true;
				document.getElementById('field_ref_commercial_phone_fixed_2').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_ref_commercial_phone_movil_2').readOnly = true;
				document.getElementById('field_ref_commercial_phone_movil_2').disabled = true;
			} else {
				$('#form_ajax_itau_castigada_novelty').html(error_icon + obj.message);
				$("#form_ajax_itau_castigada_novelty").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_novelty").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_itau_castigada_novelty').addClass('alert-danger');
			$("#form_ajax_itau_castigada_novelty").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_itau_castigada_novelty').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_itau_castigada_update_novelty')) {
	document.getElementById('form_btn_itau_castigada_update_novelty').onclick = function(e) {
		e.preventDefault();
		_ini_itau_castigada_update_novelty();
	};
}

if (document.getElementById('form_itau_castigada_update_novelty')) {
	document.getElementById('form_itau_castigada_update_novelty').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_itau_castigada_update_novelty();
			return false;
		}
	};
}










function _ini_itau_castigada_create_tipify() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_itau_castigada_tipify').removeClass('alert-danger');
	$('#form_ajax_itau_castigada_tipify').removeClass('alert-warning');
	$('#form_ajax_itau_castigada_tipify').addClass('alert-warning');
	$("#form_ajax_itau_castigada_tipify").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_itau_castigada_tipify').removeClass('hide');
	$('#form_ajax_itau_castigada_tipify').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_itau_castigada/tipify/create",
		data : $('#form_itau_castigada_create_tipify').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_btn_itau_castigada_create_tipify').addClass('btn btn-sm btn-outline-danger');
				$('#form_ajax_itau_castigada_tipify').html(success_icon + obj.message);
				$("#form_ajax_itau_castigada_tipify").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_tipify").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					$('#form_ajax_itau_castigada_tipify').removeClass('alert');
					$('#form_ajax_itau_castigada_tipify').addClass('hide');
					$('#form_ajax_itau_castigada_tipify').html('');
				}, 5000);
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('form_btn_itau_castigada_create_tipify').readOnly = true;
				document.getElementById('form_btn_itau_castigada_create_tipify').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_tipify_value').readOnly = true;
				document.getElementById('field_tipify_value').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_tipify_reason_for_non_payment').readOnly = true;
				document.getElementById('field_tipify_reason_for_non_payment').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_tipify_tracing').readOnly = true;
				document.getElementById('field_tipify_tracing').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_tipify_phone').readOnly = true;
				document.getElementById('field_tipify_phone').disabled = true;
				// Readoly esta propiedad refleja el atributo HTML deshabilitado.
				document.getElementById('field_tipify_detail').readOnly = true;
				document.getElementById('field_tipify_detail').disabled = true;
			} else {
				$('#form_ajax_itau_castigada_tipify').html(error_icon + obj.message);
				$("#form_ajax_itau_castigada_tipify").removeClass('alert-warning');
				$("#form_ajax_itau_castigada_tipify").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_itau_castigada_tipify').addClass('alert-danger');
			$("#form_ajax_itau_castigada_tipify").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_itau_castigada_tipify').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_itau_castigada_create_tipify')) {
	document.getElementById('form_btn_itau_castigada_create_tipify').onclick = function(e) {
		e.preventDefault();
		_ini_itau_castigada_create_tipify();
	};
}

if (document.getElementById('form_itau_castigada_create_tipify')) {
	document.getElementById('form_itau_castigada_create_tipify').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_itau_castigada_create_tipify();
			return false;
		}
	};
}