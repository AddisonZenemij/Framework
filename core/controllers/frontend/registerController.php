<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class registerController extends Controllers {
		public function __construct() {
			parent::__construct(false);
			if (!isset($_SESSION[SESS_APP_ID])) {
				echo $this->template->render('frontend/general/register');
			} else {
				Func::redir(URL . 'dashboard/');
				exit;
			}
		}
	}
?>