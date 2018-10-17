function _ini_update_zv_password() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span>',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span>',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>';
	$('#form_ajax_zv_password').removeClass('alert-danger');
	$('#form_ajax_zv_password').removeClass('alert-warning');
	$('#form_ajax_zv_password').addClass('alert-warning');
	$("#form_ajax_zv_password").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_password').removeClass('hide');
	$('#form_ajax_zv_password').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/zv_password/update",
		data : $('#form_update_zv_password').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_zv_password').html(success_icon + obj.message);
				$("#form_ajax_zv_password").removeClass('alert-warning');
				$("#form_ajax_zv_password").addClass('alert-success');
				document.getElementById('field_password_new').value = '';
				document.getElementById('field_password_confirm').value = '';
				document.getElementById('field_password_current').value = '';
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					$('#form_ajax_zv_password').removeClass('alert');
					$('#form_ajax_zv_password').addClass('hide');
					$('#form_ajax_zv_password').html('');
				}, 5000);
			} else {
				$('#form_ajax_zv_password').html(error_icon + obj.message);
				$("#form_ajax_zv_password").removeClass('alert-warning');
				$("#form_ajax_zv_password").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_zv_password').addClass('alert-danger');
			$("#form_ajax_zv_password").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_zv_password').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_zv_password')) {
	document.getElementById('form_btn_update_zv_password').onclick = function(e) {
		e.preventDefault();
		_ini_update_zv_password();
	};
}

if (document.getElementById('form_update_zv_password')) {
	document.getElementById('form_update_zv_password').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_zv_password();
			return false;
		}
	};
}