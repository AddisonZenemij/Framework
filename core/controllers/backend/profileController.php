<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class profileController extends Controllers {
		public function __construct() {
			parent::__construct(true);
			# Variable convertida en global y ser consultada
			global $router;
			# Detección del controlador actual
			$var_router = $router->getController();
			# Reemplazar la palabra Controller
			$var_controller = str_replace("Controller", "/", $var_router);
			# Deteccion del metodo actual y concatenado del controlador
			$var_url = $var_controller . $this->method . '/';
			# Variable Get para cargar el id
			$_GET['field_id'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_zv_profile = new m_zv_profileModel;
			# Instanciando clases del modelo
			$var_m_zv_password = new m_zv_passwordModel;
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'error':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/general/error');
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'query':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('backend/general/query');
						# Finaliza la ejecución de la estructura en curso
						break;
					case 'update':
						if ($this->isset_id) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/f_zv_profile/update', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_detail' => $var_m_zv_profile->sql_controller_detail(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_update' => $var_m_zv_profile->sql_controller_update(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_az_country' => $var_m_zv_profile->sql_select_tc_az_country()
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit;
						}
						# Finaliza la ejecución de la estructura en curso
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'error/');
						# Detener la ejecucion
						exit;
						# Finaliza la ejecución de la estructura en curso
						break;
				}
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . $var_controller . 'error/');
				# Detener la ejecucion
				exit;
			}
		}
	}
?>