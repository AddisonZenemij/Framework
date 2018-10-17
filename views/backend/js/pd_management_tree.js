function _ini_create_pd_management_tree() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_management_tree').removeClass('alert-danger');
	$('#form_ajax_pd_management_tree').removeClass('alert-warning');
	$('#form_ajax_pd_management_tree').addClass('alert-warning');
	$("#form_ajax_pd_management_tree").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_management_tree').removeClass('hide');
	$('#form_ajax_pd_management_tree').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_management_tree/create",
		data : $('#form_create_pd_management_tree').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_management_tree').html(success_icon + obj.message);
				$("#form_ajax_pd_management_tree").removeClass('alert-warning');
				$("#form_ajax_pd_management_tree").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_management_tree').removeClass('alert');
					$('#form_ajax_pd_management_tree').addClass('hide');
					$('#form_ajax_pd_management_tree').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_management_tree').html(error_icon + obj.message);
				$("#form_ajax_pd_management_tree").removeClass('alert-warning');
				$("#form_ajax_pd_management_tree").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_management_tree').addClass('alert-danger');
			$("#form_ajax_pd_management_tree").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_management_tree').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_management_tree')) {
	document.getElementById('form_btn_create_pd_management_tree').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_management_tree();
	};
}

if (document.getElementById('form_create_pd_management_tree')) {
	document.getElementById('form_create_pd_management_tree').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_management_tree();
			return false;
		}
	};
}










function _ini_update_pd_management_tree() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_management_tree').removeClass('alert-danger');
	$('#form_ajax_pd_management_tree').removeClass('alert-warning');
	$('#form_ajax_pd_management_tree').addClass('alert-warning');
	$("#form_ajax_pd_management_tree").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_management_tree').removeClass('hide');
	$('#form_ajax_pd_management_tree').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_management_tree/update",
		data : $('#form_update_pd_management_tree').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_management_tree').html(success_icon + obj.message);
				$("#form_ajax_pd_management_tree").removeClass('alert-warning');
				$("#form_ajax_pd_management_tree").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_management_tree').removeClass('alert');
					$('#form_ajax_pd_management_tree').addClass('hide');
					$('#form_ajax_pd_management_tree').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_management_tree').html(error_icon + obj.message);
				$("#form_ajax_pd_management_tree").removeClass('alert-warning');
				$("#form_ajax_pd_management_tree").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_management_tree').addClass('alert-danger');
			$("#form_ajax_pd_management_tree").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_management_tree').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_management_tree')) {
	document.getElementById('form_btn_update_pd_management_tree').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_management_tree();
	};
}

if (document.getElementById('form_update_pd_management_tree')) {
	document.getElementById('form_update_pd_management_tree').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_management_tree();
			return false;
		}
	};
}