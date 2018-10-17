$(document).ready(function(){
	function lect_ajax_time(){
		var error_icon = '<span class="mdi mdi-window-close" aria-hidden="true"></span>',
			success_icon = '<span class="mdi mdi-check-all" aria-hidden="true"></span>',
			process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>';
		$.ajax({
			type: 'POST',
			url: 'api/zz_time',
			success : function($json) {
				$('#lect_ajax_time').html($json);
				setTimeout(lect_ajax_time(),1000);
			},
			error : function() {
				$('#message_error').addClass('text-danger');
				$("#message_error").html(process_icon  + ' Error');
				$('#message_error').removeClass('hide');
			}
		});
	}
	setTimeout(lect_ajax_time(),1000);
});