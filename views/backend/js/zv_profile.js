function _ini_update_zv_profile() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span>',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span>',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>';
	$('#form_ajax_zv_profile').removeClass('alert-danger');
	$('#form_ajax_zv_profile').removeClass('alert-warning');
	$('#form_ajax_zv_profile').addClass('alert-warning');
	$("#form_ajax_zv_profile").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_zv_profile').removeClass('hide');
	$('#form_ajax_zv_profile').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/zv_profile/update",
		data : $('#form_update_zv_profile').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_zv_profile').html(success_icon + obj.message);
				$("#form_ajax_zv_profile").removeClass('alert-warning');
				$("#form_ajax_zv_profile").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				setTimeout(function() {
					$('#form_ajax_zv_profile').removeClass('alert');
					$('#form_ajax_zv_profile').addClass('hide');
					$('#form_ajax_zv_profile').html('');
				}, 5000);
			} else {
				$('#form_ajax_zv_profile').html(error_icon + obj.message);
				$("#form_ajax_zv_profile").removeClass('alert-warning');
				$("#form_ajax_zv_profile").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_zv_profile').addClass('alert-danger');
			$("#form_ajax_zv_profile").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_zv_profile').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_zv_profile')) {
	document.getElementById('form_btn_update_zv_profile').onclick = function(e) {
		e.preventDefault();
		_ini_update_zv_profile();
	};
}

if (document.getElementById('form_update_zv_profile')) {
	document.getElementById('form_update_zv_profile').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_zv_profile();
			return false;
		}
	};
}