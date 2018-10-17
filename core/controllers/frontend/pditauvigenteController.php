<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class pditauvigenteController extends Controllers {
		public function __construct() {
			parent::__construct();
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
			# Variable Get para cargar el id
			$_GET['field_identification'] = $this->route->getId();
			# Instanciando clases del modelo
			$var_m_pd_itau_vigente = new m_pd_itau_vigenteModel;
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'definition':
						if ($this->isset_id) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('frontend/f_pd_itau_vigente/definition', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_definition' => $var_m_pd_itau_vigente->sql_controller_definition(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_users' => $var_m_pd_itau_vigente->sql_controller_users(),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'error':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('frontend/general/error');
						break;
					case 'management':
						if ($this->isset_id) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('frontend/f_pd_itau_vigente/management', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_management' => $var_m_pd_itau_vigente->sql_controller_management()
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'product':
						if ($this->isset_id) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('frontend/f_pd_itau_vigente/product', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_product' => $var_m_pd_itau_vigente->sql_controller_product()
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'reportmanagementall':
						if (isset($_GET['field_date_from']) && isset($_GET['field_date_to'])) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('frontend/f_pd_itau_vigente/report_management_all', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_report_management_all' => $var_m_pd_itau_vigente->sql_report_management_all(),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'tipify':
						if ($this->isset_id && $_GET['field_definition'] != '') {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('frontend/f_pd_itau_vigente/tipify', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_management' => $var_m_pd_itau_vigente->sql_controller_management(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_product' => $var_m_pd_itau_vigente->sql_controller_product(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_product_single' => $var_m_pd_itau_vigente->sql_controller_product_single(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_tipify' => $var_m_pd_itau_vigente->sql_controller_tipify(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_users' => $var_m_pd_itau_vigente->sql_controller_users(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_pd_management_tree_definition' => $var_m_pd_itau_vigente->sql_select_tc_pd_management_tree_definition(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_pd_management_tree_reason' => $var_m_pd_itau_vigente->sql_select_tc_pd_management_tree_reason(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_select_tc_pd_management_tree_tipify' => $var_m_pd_itau_vigente->sql_select_tc_pd_management_tree_tipify(),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'query/');
							# Detener la ejecucion
							exit();
						}
						break;
					case 'query':
						# Cargar en el metodo por url la plantilla con su contenido a visualizar
						echo $this->template->render('frontend/general/query');
						break;
					/*default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'read/');
						break;*/
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