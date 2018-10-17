<?php
	/**
	* Ocrend Framework - MVC Architecture for Web Applications
	* PHP Version 7
	* @package Ocrend Framework
	* @version v1.2.4
	* @author Brayan Narváez (Prinick) <prinick@ocrend.com> <youtube.com/user/prinick96>
	* @copyright 2016 - Ocrend Software
	* @license	http://opensource.org/licenses/MIT	MIT License
	* @link http://framework.ocrend.com/
	*/
	//------------------------------------------------
	# Carga del núcleo
	define('INDEX_DIR',true);
	require('core/app_core.php');
	//------------------------------------------------
	# Detección del controlador actual
	$Controller = $router->getController();
	global $Controller;
	//------------------------------------------------
	if (isset($_SESSION[SESS_APP_ID])) {
		if (is_file('core/controllers/backend/' . $Controller . '.php')) {
			# Identificación del controlador en el sistema
			if (!is_readable('core/controllers/backend/' . $Controller . '.php')) { $Controller = 'errorController'; }
			# Carga del controlador seleccionado
			require('core/controllers/backend/' . $Controller . '.php');
			new $Controller;
		} else {
			# Identificación del controlador en el sistema
			if (!is_readable('core/controllers/backend/' . $Controller . '.php')) { $Controller = 'systemController'; }
			# Carga del controlador seleccionado
			require('core/controllers/backend/' . $Controller . '.php');
			new $Controller;
		}
	} else {
		if (is_file('core/controllers/frontend/' . $Controller . '.php')) {
			# Identificación del controlador en el sistema
			if (!is_readable('core/controllers/frontend/' . $Controller . '.php')) { $Controller = 'errorController'; }
			# Carga del controlador seleccionado
			require('core/controllers/frontend/' . $Controller . '.php');
			new $Controller;
		} else {
			# Identificación del controlador en el sistema
			if (!is_readable('core/controllers/frontend/' . $Controller . '.php')) { $Controller = 'systemController'; }
			# Carga del controlador seleccionado
			require('core/controllers/frontend/' . $Controller . '.php');
			new $Controller;
		}
	}
	//------------------------------------------------
	# Modo debug
	!DEBUG ?: new Debug($startime);
?>