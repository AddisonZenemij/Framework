<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class systemController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			echo $this->template->render('backend/general/system');
		}
	}
?>