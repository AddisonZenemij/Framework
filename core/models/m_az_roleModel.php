<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_az_roleModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_change() {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_change_role." . d_az_change_role_m_date_modified . " AS 'lbl_az_change_role_m_date_modified',
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_change_role." . d_az_change_role_m_date_created . " AS 'lbl_az_change_role_m_date_created',
					tc_az_change_role." . d_az_change_role_m_date_modified . " AS 'lbl_az_change_role_m_date_modified',
					tc_az_change_role." . d_az_change_role_m_description . " AS 'lbl_az_change_role_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_change_role." . d_az_change_role_id_az_change_role . " AS 'lbl_az_change_role_id_az_change_role',
					tc_az_change_role." . d_az_change_role_t_name . " AS 'lbl_az_change_role_t_name',
					tc_az_change_role." . d_az_change_role_t_az_category_role_t_name . " AS 'lbl_az_change_role_t_az_category_role_t_name'
				FROM " . t_az_change_role . " tc_az_change_role
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_change_role." . d_az_change_role_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_change_role." . d_az_change_role_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_change_role." . d_az_change_role_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_change_role." . d_az_change_role_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_change_role." . d_az_change_role_v_id_az_role . " = '" . $this->id . "'
				ORDER BY tc_az_change_role." . d_az_change_role_m_date_modified . " DESC
			");
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
					tc_az_role." . d_az_role_m_date_created . " AS 'lbl_az_role_m_date_created',
					tc_az_role." . d_az_role_m_date_modified . " AS 'lbl_az_role_m_date_modified',
					tc_az_role." . d_az_role_m_description . " AS 'lbl_az_role_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_role." . d_az_role_id_az_role . " AS 'lbl_az_role_id_az_role',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name',
					tc_az_category_role." . d_az_category_role_t_name . " AS 'lbl_az_category_role_t_name'
				FROM " . t_az_role . " tc_az_role
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_role." . d_az_role_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_role." . d_az_role_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_role." . d_az_role_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_role." . d_az_role_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_role . " tc_az_category_role
					ON tc_az_role." . d_az_role_v_id_az_category_role . " = tc_az_category_role." . d_az_category_role_id_az_category_role . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_role." . d_az_role_id_az_role . " = '" . $this->id . "'
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
					tc_az_role." . d_az_role_m_date_created . " AS 'lbl_az_role_m_date_created',
					tc_az_role." . d_az_role_m_date_modified . " AS 'lbl_az_role_m_date_modified',
					tc_az_role." . d_az_role_m_description . " AS 'lbl_az_role_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_role." . d_az_role_id_az_role . " AS 'lbl_az_role_id_az_role',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name',
					tc_az_category_role. " . d_az_category_role_t_name . " AS 'lbl_az_category_role_t_name'
				FROM " . t_az_role . " tc_az_role
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_role." . d_az_role_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_role." . d_az_role_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_role." . d_az_role_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_role." . d_az_role_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_role . " tc_az_category_role
					ON tc_az_role. " . d_az_role_v_id_az_category_role . " = tc_az_category_role. " . d_az_category_role_id_az_category_role . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_role." . d_az_role_m_deleted . " = '2'
				ORDER BY tc_az_category_role." . d_az_category_role_t_name . " ASC,
					tc_az_role." . d_az_role_t_name . " ASC
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
					tc_az_role." . d_az_role_m_date_created . " AS 'lbl_az_role_m_date_created',
					tc_az_role." . d_az_role_m_date_modified . " AS 'lbl_az_role_m_date_modified',
					tc_az_role." . d_az_role_m_description . " AS 'lbl_az_role_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_role." . d_az_role_id_az_role . " AS 'lbl_az_role_id_az_role',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name',
					tc_az_category_role. " . d_az_category_role_t_name . " AS 'lbl_az_category_role_t_name'
				FROM " . t_az_role . " tc_az_role
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_role." . d_az_role_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_role." . d_az_role_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_role." . d_az_role_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_role." . d_az_role_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_category_role . " tc_az_category_role
					ON tc_az_role. " . d_az_role_v_id_az_category_role . " = tc_az_category_role. " . d_az_category_role_id_az_category_role . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_role." . d_az_role_m_deleted . " = '1'
				ORDER BY tc_az_category_role." . d_az_category_role_t_name . " ASC,
					tc_az_role." . d_az_role_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_role . "
				WHERE " . d_az_role_id_az_role . " = '" . $this->id . "'
					AND " . d_az_role_m_deleted . " = '1'
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
		final private function error_sql_insert_all_az_role(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				if (Func::emp($data['field_name'])) {
					throw new Exception('<b>Error:</b> El campo de nombre es oblgitario.');
				}
				if (!Strings::only_letters($data['field_name'])) {
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
				}
				if (Func::emp($data['field_category']) || $data['field_category'] == 0) {
					throw new Exception('<b>Error:</b> El campo de categoria es oblgitario.');
				}
				if (!is_numeric($data['field_category'])) {
					throw new Exception('<b>Error:</b> El campo de categoria solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_category = $this->db->scape($data['field_category']);
				# Verificar en la base de datos si existen el registro
				$sql_e_category = $this->db->select('*', t_az_category_role, d_az_category_role_id_az_category_role . " = '" . $empty_category . "'");
				if (true != $sql_e_category || false == $sql_e_category) {
					if (strtolower($sql_e_category[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> La categoria seleccionada no se encuentra registrado.');
					}
				}
				$empty_name = $this->db->scape($data['field_name']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_role, d_az_role_t_name . " = '" . $empty_name . "' AND " . d_az_role_v_id_az_category_role . " = '" . $empty_category . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_name) && strtolower($sql_s_1[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> El nombre y categoria seleccionado ya existen.');
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
		final public function sql_insert_all_az_role(array $data) : array {
			$var_error = $this->error_sql_insert_all_az_role($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_az_role_m_by_created => $_SESSION[SESS_APP_ID],
				d_az_role_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_role_m_date_created => date("Y-m-d H:i:s"),
				d_az_role_m_date_modified => date("Y-m-d H:i:s"),
				d_az_role_m_deleted => '1',
				d_az_role_m_description => $data['field_description'],
				d_az_role_m_level => '1',
				d_az_role_m_status => '1',
				d_az_role_m_temp => '2',
				d_az_role_t_name => $data['field_name'],
				d_az_role_v_id_az_category_role => $data['field_category']
			);
			$this->db->insert(t_az_role, $var_array);

			$var_sql_az_role = $this->db->select('*', t_az_role, d_az_role_m_temp . " = '2' AND " . d_az_role_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			
			if (false != $var_sql_az_role) {
				foreach ($var_sql_az_role as $key_az_role):
					$key_az_role[d_az_role_id_az_role];
				endforeach;
			}

			$var_sql_az_menu_crud = $this->db->select('*', t_az_menu_crud);
			if (false != $var_sql_az_menu_crud) {
				foreach ($var_sql_az_menu_crud as $key_az_menu_crud):
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

			$var_array = array(d_az_role_m_temp => '1');
			$this->db->update(t_az_role, $var_array, d_az_role_m_temp . " = '2'");

			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_az_role(array $data) {
			try {
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
				if (!Strings::only_letters($data['field_name'])) {
					throw new Exception('<b>Error:</b> El campo de nombre solo permite letras.');
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
				if (Func::emp($data['field_state']) || strtolower($data['field_state']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_state'])) {
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_id = $this->db->scape($data['field_id']);
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_az_role, d_az_role_id_az_role . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_category = $this->db->scape($data['field_category']);
				# Verificar en la base de datos si existen el registro
				$sql_e_category = $this->db->select('*', t_az_category_role, d_az_category_role_id_az_category_role . " = '" . $empty_category . "'");
				if (true != $sql_e_category || false == $sql_e_category) {
					if (strtolower($sql_e_category[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> La categoria seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_state = $this->db->scape($data['field_state']);
				# Verificar en la base de datos si existen el registro
				$sql_e_state = $this->db->select('*', t_az_state, d_az_state_id_az_state . " = '" . $empty_state . "'");
				if (true != $sql_e_state || false == $sql_e_state) {
					if (strtolower($sql_e_state[0][0]) != strtolower($empty_state)) {
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_name = $this->db->scape($data['field_name']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_role, d_az_role_id_az_role . " != '" . $empty_id . "' AND " . d_az_role_t_name . " = '" . $empty_name . "' AND " . d_az_role_v_id_az_category_role . " = '" . $empty_category . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_id) && strtolower($sql_s_1[0][0]) != strtolower($empty_name) && strtolower($sql_s_1[0][0]) != strtolower($empty_category)) {
						throw new Exception('<b>Error:</b> El nombre digitado y categoria seleccionado ya existen.');
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
		final public function sql_update_all_az_role(array $data) : array {
			$var_error = $this->error_sql_update_all_az_role($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_role." . d_az_role_m_deleted . " AS 'lbl_az_role_m_deleted',
					tc_az_role." . d_az_role_m_description . " AS 'lbl_az_role_m_description',
					tc_az_role." . d_az_role_m_level . " AS 'lbl_az_role_m_level',
					tc_az_role." . d_az_role_m_status . " AS 'lbl_az_role_m_status',
					tc_az_role." . d_az_role_m_temp . " AS 'lbl_az_role_m_temp',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name',
					tc_az_category_role." . d_az_category_role_t_name . " AS 'lbl_az_category_role_t_name'
				FROM " . t_az_role . " tc_az_role
				INNER JOIN " . t_az_category_role . " tc_az_category_role
					ON tc_az_role." . d_az_role_v_id_az_category_role . " = tc_az_category_role." . d_az_category_role_id_az_category_role . "
				WHERE tc_az_role." . d_az_role_id_az_role . " = '" . $data['field_id'] . "'
				LIMIT 1
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_az_change_role_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_change_role_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_change_role_m_date_created => date("Y-m-d H:i:s"),
						d_az_change_role_m_date_modified => date("Y-m-d H:i:s"),
						d_az_change_role_m_deleted => $key_sql_select['lbl_az_role_m_deleted'],
						d_az_change_role_m_description => $key_sql_select['lbl_az_role_m_description'],
						d_az_change_role_m_level => $key_sql_select['lbl_az_role_m_level'],
						d_az_change_role_m_status => $key_sql_select['lbl_az_role_m_status'],
						d_az_change_role_m_temp => $key_sql_select['lbl_az_role_m_temp'],
						d_az_change_role_t_name => $key_sql_select['lbl_az_role_t_name'],
						d_az_change_role_t_az_category_role_t_name => $key_sql_select['lbl_az_category_role_t_name'],
						d_az_change_role_v_id_az_role => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_az_change_role, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_az_role_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_role_m_date_modified => date("Y-m-d H:i:s"),
				d_az_role_m_description => $data['field_description'],
				d_az_role_m_status => $data['field_state'],
				d_az_role_t_name => $data['field_name'],
				d_az_role_v_id_az_category_role => $data['field_category']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_role, $var_array, d_az_role_id_az_role . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_az_a_p_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_authorized_permits." . d_az_authorized_permits_id_az_authorized_permits . " AS 'lbl_az_authorized_permits_id_az_authorized_permits',
					tc_az_authorized_permits." . d_az_authorized_permits_t_menu_value . " AS 'lbl_az_authorized_permits_t_menu_value',
					tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " AS 'lbl_az_authorized_permits_t_module_value',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_change . " AS 'lbl_az_authorized_permits_t_value_change',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_create . " AS 'lbl_az_authorized_permits_t_value_create',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_delete . " AS 'lbl_az_authorized_permits_t_value_delete',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_detail . " AS 'lbl_az_authorized_permits_t_value_detail',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_error . " AS 'lbl_az_authorized_permits_t_value_error',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_all . " AS 'lbl_az_authorized_permits_t_value_read_all',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_eliminate . " AS 'lbl_az_authorized_permits_t_value_read_eliminate',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_remove . " AS 'lbl_az_authorized_permits_t_value_remove',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_update . " AS 'lbl_az_authorized_permits_t_value_update',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_category_menu." . d_az_category_menu_t_name . " AS 'lbl_az_category_menu_t_name'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_category_menu . " tc_az_category_menu
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_category_menu . " = tc_az_category_menu." . d_az_category_menu_id_az_category_menu . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = '" . $this->id . "'
				ORDER BY tc_az_category_menu." . d_az_category_menu_t_name . " ASC,
					tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_az_a_p_update() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_authorized_permits." . d_az_authorized_permits_id_az_authorized_permits . " AS 'lbl_az_authorized_permits_id_az_authorized_permits',
					tc_az_authorized_permits." . d_az_authorized_permits_t_menu_value . " AS 'lbl_az_authorized_permits_t_menu_value',
					tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " AS 'lbl_az_authorized_permits_t_module_value',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_change . " AS 'lbl_az_authorized_permits_t_value_change',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_create . " AS 'lbl_az_authorized_permits_t_value_create',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_delete . " AS 'lbl_az_authorized_permits_t_value_delete',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_detail . " AS 'lbl_az_authorized_permits_t_value_detail',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_error . " AS 'lbl_az_authorized_permits_t_value_error',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_all . " AS 'lbl_az_authorized_permits_t_value_read_all',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_eliminate . " AS 'lbl_az_authorized_permits_t_value_read_eliminate',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_remove . " AS 'lbl_az_authorized_permits_t_value_remove',
					tc_az_authorized_permits." . d_az_authorized_permits_t_value_update . " AS 'lbl_az_authorized_permits_t_value_update',
					tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " AS 'lbl_az_authorized_permits_v_id_az_role',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_category_menu." . d_az_category_menu_t_name . " AS 'lbl_az_category_menu_t_name'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_category_menu . " tc_az_category_menu
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_category_menu . " = tc_az_category_menu." . d_az_category_menu_id_az_category_menu . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_id_az_authorized_permits . " = '" . $this->id . "'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_az_authorized_permits(array $data) {
			try {
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
				if (Func::emp($data['field_menu_value']) || strtolower($data['field_menu_value']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_menu_value'])) {
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_module_value']) || strtolower($data['field_module_value']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de modulo es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_module_value'])) {
					throw new Exception('<b>Error:</b> El campo de modulo solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_change']) || strtolower($data['field_value_change']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor cambio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_change'])) {
					throw new Exception('<b>Error:</b> El campo de valor cambio solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_create']) || strtolower($data['field_value_create']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor crear es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_create'])) {
					throw new Exception('<b>Error:</b> El campo de valor crear solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_delete']) || strtolower($data['field_value_delete']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor eliminar es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_delete'])) {
					throw new Exception('<b>Error:</b> El campo de valor eliminar solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_detail']) || strtolower($data['field_value_detail']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor detalle es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_detail'])) {
					throw new Exception('<b>Error:</b> El campo de valor detalle solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_error']) || strtolower($data['field_value_error']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor error es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_error'])) {
					throw new Exception('<b>Error:</b> El campo de valor error solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_read_all']) || strtolower($data['field_value_read_all']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor listar es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_read_all'])) {
					throw new Exception('<b>Error:</b> El campo de valor listar solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_read_eliminate']) || strtolower($data['field_value_read_eliminate']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor listar eliminados es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_read_eliminate'])) {
					throw new Exception('<b>Error:</b> El campo de valor listar eliminados solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_remove']) || strtolower($data['field_value_remove']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor remover es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_remove'])) {
					throw new Exception('<b>Error:</b> El campo de valor remover solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_value_update']) || strtolower($data['field_value_update']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de valor actualizar es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_value_update'])) {
					throw new Exception('<b>Error:</b> El campo de valor actualizar solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_id = $this->db->scape($data['field_id']);
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_az_authorized_permits, d_az_authorized_permits_id_az_authorized_permits . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
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
		final public function sql_update_all_az_authorized_permits(array $data) : array {
			$var_error = $this->error_sql_update_all_az_authorized_permits($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_az_authorized_permits_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_authorized_permits_m_date_modified => date("Y-m-d H:i:s"),
				d_az_authorized_permits_t_menu_value => $data['field_menu_value'],
				d_az_authorized_permits_t_module_value => $data['field_module_value'],
				d_az_authorized_permits_t_value_change => $data['field_value_change'],
				d_az_authorized_permits_t_value_create => $data['field_value_create'],
				d_az_authorized_permits_t_value_delete => $data['field_value_delete'],
				d_az_authorized_permits_t_value_detail => $data['field_value_detail'],
				d_az_authorized_permits_t_value_error => $data['field_value_error'],
				d_az_authorized_permits_t_value_read_all => $data['field_value_read_all'],
				d_az_authorized_permits_t_value_read_eliminate => $data['field_value_read_eliminate'],
				d_az_authorized_permits_t_value_remove => $data['field_value_remove'],
				d_az_authorized_permits_t_value_update => $data['field_value_update']
			);
			$this->db->update(t_az_authorized_permits, $var_array, d_az_authorized_permits_id_az_authorized_permits . " = '" . $data['field_id'] . "'");
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_category_role() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_category_role, d_az_category_role_m_deleted . " = '1' AND " . d_az_category_role_m_status . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>