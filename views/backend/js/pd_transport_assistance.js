function _ini_create_pd_transport_assistance() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_transport_assistance').removeClass('alert-danger');
	$('#form_ajax_pd_transport_assistance').removeClass('alert-warning');
	$('#form_ajax_pd_transport_assistance').addClass('alert-warning');
	$("#form_ajax_pd_transport_assistance").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_transport_assistance').removeClass('hide');
	$('#form_ajax_pd_transport_assistance').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_transport_assistance/create",
		data : $('#form_create_pd_transport_assistance').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_transport_assistance').html(success_icon + obj.message);
				$("#form_ajax_pd_transport_assistance").removeClass('alert-warning');
				$("#form_ajax_pd_transport_assistance").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_value').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_transport_assistance').removeClass('alert');
					$('#form_ajax_pd_transport_assistance').addClass('hide');
					$('#form_ajax_pd_transport_assistance').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_transport_assistance').html(error_icon + obj.message);
				$("#form_ajax_pd_transport_assistance").removeClass('alert-warning');
				$("#form_ajax_pd_transport_assistance").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_transport_assistance').addClass('alert-danger');
			$("#form_ajax_pd_transport_assistance").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_transport_assistance').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_transport_assistance')) {
	document.getElementById('form_btn_create_pd_transport_assistance').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_transport_assistance();
	};
}

if (document.getElementById('form_create_pd_transport_assistance')) {
	document.getElementById('form_create_pd_transport_assistance').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_transport_assistance();
			return false;
		}
	};
}










function _ini_update_pd_transport_assistance() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_transport_assistance').removeClass('alert-danger');
	$('#form_ajax_pd_transport_assistance').removeClass('alert-warning');
	$('#form_ajax_pd_transport_assistance').addClass('alert-warning');
	$("#form_ajax_pd_transport_assistance").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_transport_assistance').removeClass('hide');
	$('#form_ajax_pd_transport_assistance').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_transport_assistance/update",
		data : $('#form_update_pd_transport_assistance').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_transport_assistance').html(success_icon + obj.message);
				$("#form_ajax_pd_transport_assistance").removeClass('alert-warning');
				$("#form_ajax_pd_transport_assistance").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_transport_assistance').removeClass('alert');
					$('#form_ajax_pd_transport_assistance').addClass('hide');
					$('#form_ajax_pd_transport_assistance').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_transport_assistance').html(error_icon + obj.message);
				$("#form_ajax_pd_transport_assistance").removeClass('alert-warning');
				$("#form_ajax_pd_transport_assistance").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_transport_assistance').addClass('alert-danger');
			$("#form_ajax_pd_transport_assistance").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_transport_assistance').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_transport_assistance')) {
	document.getElementById('form_btn_update_pd_transport_assistance').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_transport_assistance();
	};
}

if (document.getElementById('form_update_pd_transport_assistance')) {
	document.getElementById('form_update_pd_transport_assistance').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_transport_assistance();
			return false;
		}
	};
}