function _ini_create_pd_worked_days() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_worked_days').removeClass('alert-danger');
	$('#form_ajax_pd_worked_days').removeClass('alert-warning');
	$('#form_ajax_pd_worked_days').addClass('alert-warning');
	$("#form_ajax_pd_worked_days").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_worked_days').removeClass('hide');
	$('#form_ajax_pd_worked_days').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_worked_days/create",
		data : $('#form_create_pd_worked_days').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_worked_days').html(success_icon + obj.message);
				$("#form_ajax_pd_worked_days").removeClass('alert-warning');
				$("#form_ajax_pd_worked_days").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_value').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_worked_days').removeClass('alert');
					$('#form_ajax_pd_worked_days').addClass('hide');
					$('#form_ajax_pd_worked_days').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_worked_days').html(error_icon + obj.message);
				$("#form_ajax_pd_worked_days").removeClass('alert-warning');
				$("#form_ajax_pd_worked_days").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_worked_days').addClass('alert-danger');
			$("#form_ajax_pd_worked_days").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_worked_days').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_worked_days')) {
	document.getElementById('form_btn_create_pd_worked_days').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_worked_days();
	};
}

if (document.getElementById('form_create_pd_worked_days')) {
	document.getElementById('form_create_pd_worked_days').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_worked_days();
			return false;
		}
	};
}










function _ini_update_pd_worked_days() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_worked_days').removeClass('alert-danger');
	$('#form_ajax_pd_worked_days').removeClass('alert-warning');
	$('#form_ajax_pd_worked_days').addClass('alert-warning');
	$("#form_ajax_pd_worked_days").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_worked_days').removeClass('hide');
	$('#form_ajax_pd_worked_days').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_worked_days/update",
		data : $('#form_update_pd_worked_days').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_worked_days').html(success_icon + obj.message);
				$("#form_ajax_pd_worked_days").removeClass('alert-warning');
				$("#form_ajax_pd_worked_days").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_worked_days').removeClass('alert');
					$('#form_ajax_pd_worked_days').addClass('hide');
					$('#form_ajax_pd_worked_days').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_worked_days').html(error_icon + obj.message);
				$("#form_ajax_pd_worked_days").removeClass('alert-warning');
				$("#form_ajax_pd_worked_days").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_worked_days').addClass('alert-danger');
			$("#form_ajax_pd_worked_days").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_worked_days').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_worked_days')) {
	document.getElementById('form_btn_update_pd_worked_days').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_worked_days();
	};
}

if (document.getElementById('form_update_pd_worked_days')) {
	document.getElementById('form_update_pd_worked_days').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_worked_days();
			return false;
		}
	};
}