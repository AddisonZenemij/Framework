<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class loginController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			Func::redir(URL . 'dashboard/');
			exit;
		}
	}
?>