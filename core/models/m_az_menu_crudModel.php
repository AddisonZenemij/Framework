<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_az_menu_crudModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_date_created . " AS 'lbl_az_menu_crud_m_date_created',
					tc_az_menu_crud." . d_az_menu_crud_m_date_modified . " AS 'lbl_az_menu_crud_m_date_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_description . " AS 'lbl_az_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url',
					tc_az_category_menu." . d_az_category_menu_t_name . " AS 'lbl_az_category_menu_t_name',
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name'
				FROM " . t_az_menu_crud . " tc_az_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_menu_crud." . d_az_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_menu_crud." . d_az_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_menu . " tc_az_category_menu
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_category_menu . " = tc_az_category_menu." . d_az_category_menu_id_az_category_menu . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " = '" . $this->id . "'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'query/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_eliminate() {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_date_created . " AS 'lbl_az_menu_crud_m_date_created',
					tc_az_menu_crud." . d_az_menu_crud_m_date_modified . " AS 'lbl_az_menu_crud_m_date_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_description . " AS 'lbl_az_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url',
					tc_az_category_menu." . d_az_category_menu_t_name . " AS 'lbl_az_category_menu_t_name',
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name'
				FROM " . t_az_menu_crud . " tc_az_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_menu_crud." . d_az_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_menu_crud." . d_az_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_menu . " tc_az_category_menu
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_category_menu . " = tc_az_category_menu." . d_az_category_menu_id_az_category_menu . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '2'
				ORDER BY tc_az_category_menu." . d_az_category_menu_t_name . " ASC,
					tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_read() {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_date_created . " AS 'lbl_az_menu_crud_m_date_created',
					tc_az_menu_crud." . d_az_menu_crud_m_date_modified . " AS 'lbl_az_menu_crud_m_date_modified',
					tc_az_menu_crud." . d_az_menu_crud_m_description . " AS 'lbl_az_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url',
					tc_az_category_menu." . d_az_category_menu_t_name . " AS 'lbl_az_category_menu_t_name',
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name'
				FROM " . t_az_menu_crud . " tc_az_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_menu_crud." . d_az_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_menu_crud." . d_az_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_menu_crud." . d_az_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_menu . " tc_az_category_menu
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_category_menu . " = tc_az_category_menu." . d_az_category_menu_id_az_category_menu . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
				ORDER BY tc_az_category_menu." . d_az_category_menu_t_name . " ASC,
					tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_menu_crud . "
				WHERE " . d_az_menu_crud_id_az_menu_crud . " = '" . $this->id . "'
					AND " . d_az_menu_crud_m_deleted . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'query/');
				# Detener la ejecucion
				exit();
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Insert
		final private function error_sql_insert_all_az_menu_crud(array $data) {
			try {
				$empty_description = $this->db->scape($data['field_description']);
				$empty_name = $this->db->scape($data['field_name']);
				$empty_url = $this->db->scape($data['field_url']);
				$empty_category = $this->db->scape($data['field_category']);
				$empty_icon = $this->db->scape($data['field_icon']);
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_name'])) {
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_url'])) {
					throw new Exception('<b>Error:</b> El campo de url es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_category']) || $data['field_category'] == 0) {
					throw new Exception('<b>Error:</b> El campo de categoria es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_category'])) {
					throw new Exception('<b>Error:</b> El campo de categoria solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_icon']) || $data['field_icon'] == 0) {
					throw new Exception('<b>Error:</b> El campo de icono es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_icon'])) {
					throw new Exception('<b>Error:</b> El campo de icono solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_category = $this->db->select('*', t_az_category_icon, d_az_category_icon_id_az_category_icon . " = '" . $empty_category . "'");
				if (true != $sql_e_category || false == $sql_e_category) {
					if (strtolower($sql_e_category[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> La categoria seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_icon = $this->db->select('*', t_az_icon, d_az_icon_id_az_icon . " = '" . $empty_icon . "'");
				if (true != $sql_e_icon || false == $sql_e_icon) {
					if (strtolower($sql_e_icon[0][0]) != strtolower($empty_icon)) {
						throw new Exception('<b>Error:</b> La icono seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_t_name . " = '" . $empty_name . "' AND " . d_az_menu_crud_t_url . " = '" . $empty_category . "' AND " . d_az_menu_crud_v_id_az_category_menu . " = '" . $empty_url . "' AND " . d_az_menu_crud_v_id_az_icon . " = '" . $empty_icon . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_name) && strtolower($sql_s_1[0][0]) != strtolower($empty_url)) {
						throw new Exception('<b>Error:</b> El nombre digitado, url digitado, categoria seleccionado e icono ya existen.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_insert_all_az_menu_crud(array $data) : array {
			$var_error = $this->error_sql_insert_all_az_menu_crud($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_az_menu_crud_m_by_created => $_SESSION[SESS_APP_ID],
				d_az_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_menu_crud_m_date_created => date("Y-m-d H:i:s"),
				d_az_menu_crud_m_date_modified => date("Y-m-d H:i:s"),
				d_az_menu_crud_m_deleted => '1',
				d_az_menu_crud_m_description => $data['field_description'],
				d_az_menu_crud_m_level => '1',
				d_az_menu_crud_m_status => '1',
				d_az_menu_crud_m_temp => '2',
				d_az_menu_crud_t_name => $data['field_name'],
				d_az_menu_crud_t_url => $data['field_url'],
				d_az_menu_crud_v_id_az_category_menu => $data['field_category'],
				d_az_menu_crud_v_id_az_icon => $data['field_icon']
			);
			$this->db->insert(t_az_menu_crud, $var_array);

			$var_sql_az_menu_crud = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_m_temp . " = '2' AND " . d_az_menu_crud_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			if (false != $var_sql_az_menu_crud) {
				foreach ($var_sql_az_menu_crud as $key_az_menu_crud):
					$key_az_menu_crud[d_az_menu_crud_id_az_menu_crud];
				endforeach;
			}

			$var_sql_az_role = $this->db->select('*', t_az_role);
			if (false != $var_sql_az_role) {
				foreach ($var_sql_az_role as $key_az_role):
					$var_array = array(
						d_az_authorized_permits_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_authorized_permits_m_date_created => date("Y-m-d H:i:s"),
						d_az_authorized_permits_m_date_modified => date("Y-m-d H:i:s"),
						d_az_authorized_permits_m_deleted => '1',
						d_az_authorized_permits_m_description => '',
						d_az_authorized_permits_m_level => '1',
						d_az_authorized_permits_m_status => '1',
						d_az_authorized_permits_m_temp => '1',
						d_az_authorized_permits_t_menu_value => '2',
						d_az_authorized_permits_t_module_value => '2',
						d_az_authorized_permits_t_value_change => '2',
						d_az_authorized_permits_t_value_create => '2',
						d_az_authorized_permits_t_value_delete => '2',
						d_az_authorized_permits_t_value_detail => '2',
						d_az_authorized_permits_t_value_error => '2',
						d_az_authorized_permits_t_value_read_all => '2',
						d_az_authorized_permits_t_value_read_eliminate => '2',
						d_az_authorized_permits_t_value_remove => '2',
						d_az_authorized_permits_t_value_update => '2',
						d_az_authorized_permits_v_id_az_menu_crud => $key_az_menu_crud[d_az_menu_crud_id_az_menu_crud],
						d_az_authorized_permits_v_id_az_role => $key_az_role[d_az_role_id_az_role]
					);
					$this->db->insert(t_az_authorized_permits, $var_array);
				endforeach;
			}

			$var_array = array(d_az_menu_crud_m_temp => '1');
			$this->db->update(t_az_menu_crud, $var_array, d_az_menu_crud_m_temp . " = '2'");

			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_az_menu_crud(array $data) {
			try {
				$empty_id = $this->db->scape($data['field_id']);
				$empty_description = $this->db->scape($data['field_description']);
				$empty_state = $this->db->scape($data['field_state']);
				$empty_name = $this->db->scape($data['field_name']);
				$empty_url = $this->db->scape($data['field_url']);
				$empty_category = $this->db->scape($data['field_category']);
				$empty_icon = $this->db->scape($data['field_icon']);
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_id']) || $data['field_id'] == 0) {
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_id'])) {
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_name'])) {
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_url'])) {
					throw new Exception('<b>Error:</b> El campo de url es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_state']) || strtolower($data['field_state']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_state'])) {
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_category']) || $data['field_category'] == 0) {
					throw new Exception('<b>Error:</b> El campo de categoria es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_category'])) {
					throw new Exception('<b>Error:</b> El campo de categoria solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_icon']) || $data['field_icon'] == 0) {
					throw new Exception('<b>Error:</b> El campo de icono es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_icon'])) {
					throw new Exception('<b>Error:</b> El campo de icono solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_category = $this->db->select('*', t_az_category_icon, d_az_category_icon_id_az_category_icon . " = '" . $empty_category . "'");
				if (true != $sql_e_category || false == $sql_e_category) {
					if (strtolower($sql_e_category[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> La categoria seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_icon = $this->db->select('*', t_az_icon, d_az_icon_id_az_icon . " = '" . $empty_icon . "'");
				if (true != $sql_e_icon || false == $sql_e_icon) {
					if (strtolower($sql_e_icon[0][0]) != strtolower($empty_icon)) {
						throw new Exception('<b>Error:</b> La icono seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar en la base de datos si existen el registro
				$sql_e_state = $this->db->select('*', t_az_state, d_az_state_id_az_state . " = '" . $empty_state . "'");
				if (true != $sql_e_state || false == $sql_e_state) {
					if (strtolower($sql_e_state[0][0]) != strtolower($empty_state)) {
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " != '" . $empty_id . "' AND " . d_az_menu_crud_t_name . " = '" . $empty_name . "' AND " . d_az_menu_crud_t_url . " = '" . $empty_url . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_id) && strtolower($sql_s_1[0][0]) != strtolower($empty_name) && strtolower($sql_s_1[0][0]) != strtolower($empty_url)) {
						throw new Exception('<b>Error:</b> El nombre digitado y url digitado ya existen.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_update_all_az_menu_crud(array $data) : array {
			$var_error = $this->error_sql_update_all_az_menu_crud($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_az_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_menu_crud_m_date_modified => date("Y-m-d H:i:s"),
				d_az_menu_crud_m_description => $data['field_description'],
				d_az_menu_crud_m_status => $data['field_state'],
				d_az_menu_crud_t_name => $data['field_name'],
				d_az_menu_crud_t_url => $data['field_url'],
				d_az_menu_crud_v_id_az_category_menu => $data['field_category'],
				d_az_menu_crud_v_id_az_icon => $data['field_icon']
			);
			$this->db->update(t_az_menu_crud, $var_array, d_az_menu_crud_id_az_menu_crud . " = '" . $data['field_id'] . "'");
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_category_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_category_menu, d_az_category_menu_m_deleted . " = '1' AND " . d_az_category_menu_m_status . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_icon() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_icon, d_az_icon_m_deleted . " = '1' AND " . d_az_icon_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>