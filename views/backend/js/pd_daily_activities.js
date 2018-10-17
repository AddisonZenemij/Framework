function _ini_create_pd_daily_activities() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_daily_activities').removeClass('alert-danger');
	$('#form_ajax_pd_daily_activities').removeClass('alert-warning');
	$('#form_ajax_pd_daily_activities').addClass('alert-warning');
	$("#form_ajax_pd_daily_activities").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_daily_activities').removeClass('hide');
	$('#form_ajax_pd_daily_activities').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_daily_activities/create",
		data : $('#form_create_pd_daily_activities').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_daily_activities').html(success_icon + obj.message);
				$("#form_ajax_pd_daily_activities").removeClass('alert-warning');
				$("#form_ajax_pd_daily_activities").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_date').value = 'aaaa-mm-dd';
				document.getElementById('field_name').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_daily_activities').removeClass('alert');
					$('#form_ajax_pd_daily_activities').addClass('hide');
					$('#form_ajax_pd_daily_activities').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_daily_activities').html(error_icon + obj.message);
				$("#form_ajax_pd_daily_activities").removeClass('alert-warning');
				$("#form_ajax_pd_daily_activities").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_daily_activities').addClass('alert-danger');
			$("#form_ajax_pd_daily_activities").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_daily_activities').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_daily_activities')) {
	document.getElementById('form_btn_create_pd_daily_activities').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_daily_activities();
	};
}

if (document.getElementById('form_create_pd_daily_activities')) {
	document.getElementById('form_create_pd_daily_activities').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_daily_activities();
			return false;
		}
	};
}










function _ini_update_pd_daily_activities() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_daily_activities').removeClass('alert-danger');
	$('#form_ajax_pd_daily_activities').removeClass('alert-warning');
	$('#form_ajax_pd_daily_activities').addClass('alert-warning');
	$("#form_ajax_pd_daily_activities").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_daily_activities').removeClass('hide');
	$('#form_ajax_pd_daily_activities').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_daily_activities/update",
		data : $('#form_update_pd_daily_activities').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_daily_activities').html(success_icon + obj.message);
				$("#form_ajax_pd_daily_activities").removeClass('alert-warning');
				$("#form_ajax_pd_daily_activities").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_daily_activities').removeClass('alert');
					$('#form_ajax_pd_daily_activities').addClass('hide');
					$('#form_ajax_pd_daily_activities').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_daily_activities').html(error_icon + obj.message);
				$("#form_ajax_pd_daily_activities").removeClass('alert-warning');
				$("#form_ajax_pd_daily_activities").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_daily_activities').addClass('alert-danger');
			$("#form_ajax_pd_daily_activities").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_daily_activities').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_daily_activities')) {
	document.getElementById('form_btn_update_pd_daily_activities').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_daily_activities();
	};
}

if (document.getElementById('form_update_pd_daily_activities')) {
	document.getElementById('form_update_pd_daily_activities').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_daily_activities();
			return false;
		}
	};
}










function _ini_modal_remove_pd_daily_activities() {
	//var js_id = document.getElementById('bd_id_modal').value;
	alert(document.getElementById('bd_id_modal').value);
	//alert(js_id);
	//document.getElementById('_IT_ID_CAPTURE').value = js_id;
}