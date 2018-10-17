function _ini_create_pd_base_salary() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_base_salary').removeClass('alert-danger');
	$('#form_ajax_pd_base_salary').removeClass('alert-warning');
	$('#form_ajax_pd_base_salary').addClass('alert-warning');
	$("#form_ajax_pd_base_salary").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_base_salary').removeClass('hide');
	$('#form_ajax_pd_base_salary').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_base_salary/create",
		data : $('#form_create_pd_base_salary').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_base_salary').html(success_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_value').value = '';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_base_salary').removeClass('alert');
					$('#form_ajax_pd_base_salary').addClass('hide');
					$('#form_ajax_pd_base_salary').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_base_salary').html(error_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_base_salary').addClass('alert-danger');
			$("#form_ajax_pd_base_salary").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_base_salary').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_base_salary')) {
	document.getElementById('form_btn_create_pd_base_salary').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_base_salary();
	};
}

if (document.getElementById('form_create_pd_base_salary')) {
	document.getElementById('form_create_pd_base_salary').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_base_salary();
			return false;
		}
	};
}










function _ini_update_pd_base_salary() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_base_salary').removeClass('alert-danger');
	$('#form_ajax_pd_base_salary').removeClass('alert-warning');
	$('#form_ajax_pd_base_salary').addClass('alert-warning');
	$("#form_ajax_pd_base_salary").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_base_salary').removeClass('hide');
	$('#form_ajax_pd_base_salary').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_base_salary/update",
		data : $('#form_update_pd_base_salary').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_base_salary').html(success_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_base_salary').removeClass('alert');
					$('#form_ajax_pd_base_salary').addClass('hide');
					$('#form_ajax_pd_base_salary').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_base_salary').html(error_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_base_salary').addClass('alert-danger');
			$("#form_ajax_pd_base_salary").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_base_salary').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_base_salary')) {
	document.getElementById('form_btn_update_pd_base_salary').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_base_salary();
	};
}

if (document.getElementById('form_update_pd_base_salary')) {
	document.getElementById('form_update_pd_base_salary').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_base_salary();
			return false;
		}
	};
}










$('.form_modal_delete_temp_pd_base_salary').click(function(event) {
	var id_return = $(this).attr("id");
	$("#myModalDeleteTemp").modal({ show: 'false' });
	__('field_id').value = id_return;
});

function _ini_delete_pd_base_salary() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_base_salary').removeClass('alert-danger');
	$('#form_ajax_pd_base_salary').removeClass('alert-warning');
	$('#form_ajax_pd_base_salary').addClass('alert-warning');
	$("#form_ajax_pd_base_salary").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_base_salary').removeClass('hide');
	$.ajax({
		type : "POST",
		url : "api/pd_base_salary/delete",
		data : $('#form_delete_pd_base_salary').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_base_salary').html(success_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_base_salary').removeClass('alert');
					$('#form_ajax_pd_base_salary').addClass('hide');
					$('#form_ajax_pd_base_salary').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_base_salary').html(error_icon + obj.message);
				$("#form_ajax_pd_base_salary").removeClass('alert-warning');
				$("#form_ajax_pd_base_salary").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_base_salary').addClass('alert-danger');
			$("#form_ajax_pd_base_salary").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_base_salary').removeClass('hide');
		}
	});
};

if (document.getElementById('btn_delete_pd_base_salary')) {
	document.getElementById('btn_delete_pd_base_salary').onclick = function(e) {
		e.preventDefault();
		_ini_delete_pd_base_salary();
	};
}

if (document.getElementById('form_delete_pd_base_salary')) {
	document.getElementById('form_delete_pd_base_salary').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_delete_pd_base_salary();
			return false;
		}
	};
}