function _ini_create_pd_brand() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_brand').removeClass('alert-danger');
	$('#form_ajax_pd_brand').removeClass('alert-warning');
	$('#form_ajax_pd_brand').addClass('alert-warning');
	$("#form_ajax_pd_brand").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_brand').removeClass('hide');
	$('#form_ajax_pd_brand').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_brand/create",
		data : $('#form_create_pd_brand').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_brand').html(success_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-success');
				// Dejar campos vacios sobre los elementos id del formulario
				document.getElementById('field_name').value = '';
				document.getElementById('field_category').value = '0';
				document.getElementById('field_description').value = '';
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_brand').removeClass('alert');
					$('#form_ajax_pd_brand').addClass('hide');
					$('#form_ajax_pd_brand').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_brand').html(error_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_brand').addClass('alert-danger');
			$("#form_ajax_pd_brand").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_brand').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_create_pd_brand')) {
	document.getElementById('form_btn_create_pd_brand').onclick = function(e) {
		e.preventDefault();
		_ini_create_pd_brand();
	};
}

if (document.getElementById('form_create_pd_brand')) {
	document.getElementById('form_create_pd_brand').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_create_pd_brand();
			return false;
		}
	};
}










function _ini_update_pd_brand() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_brand').removeClass('alert-danger');
	$('#form_ajax_pd_brand').removeClass('alert-warning');
	$('#form_ajax_pd_brand').addClass('alert-warning');
	$("#form_ajax_pd_brand").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_brand').removeClass('hide');
	$('#form_ajax_pd_brand').addClass('alert');
	$.ajax({
		type : "POST",
		url : "api/pd_brand/update",
		data : $('#form_update_pd_brand').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_brand').html(success_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_brand').removeClass('alert');
					$('#form_ajax_pd_brand').addClass('hide');
					$('#form_ajax_pd_brand').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_brand').html(error_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_brand').addClass('alert-danger');
			$("#form_ajax_pd_brand").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_brand').removeClass('hide');
		}
	});
};

if (document.getElementById('form_btn_update_pd_brand')) {
	document.getElementById('form_btn_update_pd_brand').onclick = function(e) {
		e.preventDefault();
		_ini_update_pd_brand();
	};
}

if (document.getElementById('form_update_pd_brand')) {
	document.getElementById('form_update_pd_brand').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_update_pd_brand();
			return false;
		}
	};
}










$('._ini_remove_modal_pd_brand').click(function(event) {
	var js_id = $(this).attr("id");
	alert(js_id);
	$("#myModalRemove" + js_id).modal({
		show: 'false'
	});
	document.getElementById('field_id').value = js_id;
});

function _ini_remove_pd_brand() {
	var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span> ',
		success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span> ',
		process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';
	$('#form_ajax_pd_brand').removeClass('alert-danger');
	$('#form_ajax_pd_brand').removeClass('alert-warning');
	$('#form_ajax_pd_brand').addClass('alert-warning');
	$("#form_ajax_pd_brand").html(process_icon  + 'Advertencia: Procesando información, por favor espere...');
	$('#form_ajax_pd_brand').removeClass('hide');
	$.ajax({
		type : "POST",
		url : "api/pd_brand/remove",
		data : $('#form_remove_pd_brand').serialize(),
		success : function(json) {
			var obj = jQuery.parseJSON(json);
			if (obj.success == 1) {
				$('#form_ajax_pd_brand').html(success_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-success');
				// Añadir y remover clases e inclusive html
				/*setTimeout(function() {
					$('#form_ajax_pd_brand').removeClass('alert');
					$('#form_ajax_pd_brand').addClass('hide');
					$('#form_ajax_pd_brand').html('');
				}, 5000);*/
			} else {
				$('#form_ajax_pd_brand').html(error_icon + obj.message);
				$("#form_ajax_pd_brand").removeClass('alert-warning');
				$("#form_ajax_pd_brand").addClass('alert-danger');
			}
		},
		error : function() {
			$('#form_ajax_pd_brand').addClass('alert-danger');
			$("#form_ajax_pd_brand").html(process_icon  + 'Error: Problema detectado en el sistema, por favor comuniquese con el administrador');
			$('#form_ajax_pd_brand').removeClass('hide');
		}
	});
};

if (document.getElementById('btn_remove_pd_brand')) {
	document.getElementById('btn_remove_pd_brand').onclick = function(e) {
		e.preventDefault();
		_ini_remove_pd_brand();
	};
}

if (document.getElementById('form_remove_pd_brand')) {
	document.getElementById('form_remove_pd_brand').onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13') {
			_ini_remove_pd_brand();
			return false;
		}
	};
}