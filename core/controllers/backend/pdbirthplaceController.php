<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	class pdbirthplaceController extends Controllers {
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
			$var_dvdesign = new dvdesignModel;
			# Instanciando clases del modelo
			$var_m_az_state = new m_az_stateModel;
			# Instanciando clases del modelo
			$var_m_pd_birth_place = new m_pd_birth_placeModel;
			# Instanciado funciones de la clase y asignando a variable
			$var_dvdesign->sql_permits_t_module_value($var_controller);
			# Instanciado funciones de la clase y asignando a variable
			if (false != $df_sql_select_az_menu_crud_t_url = $var_dvdesign->sql_select_az_menu_crud_t_url($var_controller)) {
				foreach ($df_sql_select_az_menu_crud_t_url as $key):
					$key_controller = $key[d_az_menu_crud_id_az_menu_crud];
				endforeach;
			}
			# Restricción alfanumérica
			if (null != $this->route->getMethod() and Strings::alphanumeric($this->route->getMethod())) {
				# Hay acceso
				$metodo = $this->route->getMethod();
				switch ($this->method) {
					case 'change':
						if (false != $var_dvdesign->sql_permits_t_value_change($var_controller)) {
							if ($this->isset_id) {
								# Cargar en el metodo por url la plantilla con su contenido a visualizar
								echo $this->template->render('backend/f_pd_birth_place/change', array(
									# Consultar registros de la tabla por medio del modelo instanciado
									'df_sql_controller_change' => $var_m_pd_birth_place->sql_controller_change(),
									# Consultar registros de la tabla por medio del modelo instanciado
									'df_sql_permits_t_value_read_all' => $var_dvdesign->sql_permits_t_value_read_all($var_controller),
									# Cargar el controlador actual en una variable y ser declarada
									'df_var_controller' => $var_controller
								));
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'read/');
								# Detener la ejecucion
								exit;
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'create':
						if (false != $var_dvdesign->sql_permits_t_value_create($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/f_pd_birth_place/create', array(
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'detail':
						if (false != $var_dvdesign->sql_permits_t_value_detail($var_controller)) {
							if ($this->isset_id) {
								# Cargar en el metodo por url la plantilla con su contenido a visualizar
								echo $this->template->render('backend/f_pd_birth_place/detail', array(
									# Consultar registros de la tabla por medio del modelo instanciado
									'df_sql_controller_detail' => $var_m_pd_birth_place->sql_controller_detail(),
									# Consultar registros de la tabla por medio del modelo instanciado
									'df_sql_permits_t_value_read_all' => $var_dvdesign->sql_permits_t_value_read_all($var_controller),
									# Cargar el controlador actual en una variable y ser declarada
									'df_var_controller' => $var_controller
								));
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'read/');
								# Detener la ejecucion
								exit;
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'delete':
						if (false != $var_dvdesign->sql_permits_t_value_delete($var_controller)) {
							if ($this->isset_id) {
								# Cargar en el metodo por url la plantilla con su contenido a visualizar
								echo $this->template->render('backend/f_pd_birth_place/delete');
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'read/');
								# Detener la ejecucion
								exit;
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'eliminate':
						if (false != $var_dvdesign->sql_permits_t_value_read_eliminate($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/f_pd_birth_place/eliminate', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_eliminate' => $var_m_pd_birth_place->sql_controller_eliminate(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_delete' => $var_dvdesign->sql_permits_t_value_delete($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_read_all' => $var_dvdesign->sql_permits_t_value_read_all($var_controller),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'error':
						if (false != $var_dvdesign->sql_permits_t_value_error($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/general/error');
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'query':
						if (false != $var_dvdesign->sql_permits_t_value_error($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/general/query');
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'read':
						if (false != $var_dvdesign->sql_permits_t_value_read_all($var_controller)) {
							# Cargar en el metodo por url la plantilla con su contenido a visualizar
							echo $this->template->render('backend/f_pd_birth_place/read', array(
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_controller_read' => $var_m_pd_birth_place->sql_controller_read(),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_change' => $var_dvdesign->sql_permits_t_value_change($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_create' => $var_dvdesign->sql_permits_t_value_create($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_detail' => $var_dvdesign->sql_permits_t_value_detail($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_read_eliminate' => $var_dvdesign->sql_permits_t_value_read_eliminate($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_remove' => $var_dvdesign->sql_permits_t_value_remove($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_permits_t_value_update' => $var_dvdesign->sql_permits_t_value_update($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_tc_az_sub_menu_crud_group_by' => $var_dvdesign->sql_tc_az_sub_menu_crud_group_by($var_controller),
								# Consultar registros de la tabla por medio del modelo instanciado
								'df_sql_tc_az_sub_menu_crud_order_by' => $var_dvdesign->sql_tc_az_sub_menu_crud_order_by($key_controller),
								# Cargar el controlador actual en una variable y ser declarada
								'df_var_controller' => $var_controller
							));
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . '/access/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'remove':
						if (false != $var_dvdesign->sql_permits_t_value_remove($var_controller)) {
							if ($this->isset_id) {
								# Cargar en el metodo por url la plantilla con su contenido a visualizar
								echo $this->template->render('backend/f_pd_birth_place/remove');
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'read/');
								# Detener la ejecucion
								exit;
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					case 'update':
						if (false != $var_dvdesign->sql_permits_t_value_update($var_controller)) {
							if ($this->isset_id) {
								# Cargar en el metodo por url la plantilla con su contenido a visualizar
								echo $this->template->render('backend/f_pd_birth_place/update', array(
									# Consultar registros de la tabla por medio del modelo instanciado
									'df_sql_controller_read_state' => $var_m_az_state->sql_controller_read(),
									# Actualizar registros de la tabla por medio del modelo instanciado
									'df_sql_controller_update' => $var_m_pd_birth_place->sql_controller_update(),
									# Cargar el controlador actual en una variable y ser declarada
									'df_var_controller' => $var_controller
								));
							} else {
								# Redireccionar a una pagina segun el metodo cargado
								Func::redir(URL . $var_controller . 'read/');
								# Detener la ejecucion
								exit;
							}
						} else {
							# Redireccionar a una pagina segun el metodo cargado
							Func::redir(URL . $var_controller . 'read/');
							# Detener la ejecucion
							exit;
						}
						break;
					default:
						# Redireccionar a una pagina segun el metodo cargado
						Func::redir(URL . $var_controller . 'read/');
						# Detener la ejecucion
						exit;
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