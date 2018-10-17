function _ini_create_pd_pension() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_pension').removeClass('alert-danger');
	$('#form_ajax_pd_pension').removeClass('alert-warning');
	$('#form_ajax_pd_pension').addClass('alert-warning');
	$("#form_ajax_pd_pension").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_pension').removeClass('hide');
	$('#form_ajax_pd_pension').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_pension/create",
		data : $('#form_create_pd_pension').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_pension').html(success_icon + obj.message);
				$("#form_ajax_pd_pension").removeClass('alert-warning');
				$("#form_ajax_pd_pension").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_pension').removeClass('alert');
					$('#form_ajax_pd_pension').addClass('hide');
					$('#form_ajax_pd_pension').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_pension').html(error_icon + obj.message);
				$("#form_ajax_pd_pension").removeClass('alert-warning');
				$("#form_ajax_pd_pension").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_pension').addClass('alert-danger');
			$("#form_ajax_pd_pension").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_pension').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_pension')) {
	document.getElementById('form_btn_create_pd_pension').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_pension();
	};
}

if (document.getElementById('form_create_pd_pension')) {
	document.getElementById('form_create_pd_pension').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_pension();
			return false;
		}
	};
}










function _ini_update_pd_pension() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_pension').removeClass('alert-danger');
	$('#form_ajax_pd_pension').removeClass('alert-warning');
	$('#form_ajax_pd_pension').addClass('alert-warning');
	$("#form_ajax_pd_pension").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_pension').removeClass('hide');
	$('#form_ajax_pd_pension').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_pension/update",
		data : $('#form_update_pd_pension').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_pension').html(success_icon + obj.message);
				$("#form_ajax_pd_pension").removeClass('alert-warning');
				$("#form_ajax_pd_pension").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_pension').removeClass('alert');
					$('#form_ajax_pd_pension').addClass('hide');
					$('#form_ajax_pd_pension').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_pension').html(error_icon + obj.message);
				$("#form_ajax_pd_pension").removeClass('alert-warning');
				$("#form_ajax_pd_pension").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_pension').addClass('alert-danger');
			$("#form_ajax_pd_pension").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_pension').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_pension')) {
	document.getElementById('form_btn_update_pd_pension').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_pension();
	};
}

if (document.getElementById('form_update_pd_pension')) {
	document.getElementById('form_update_pd_pension').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_pension();
			return false;
		}
	};
}