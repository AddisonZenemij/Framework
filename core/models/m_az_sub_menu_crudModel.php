<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_az_sub_menu_crudModel extends Models implements OCREND {
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
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_date_modified . " AS 'lbl_az_change_sub_menu_crud_m_date_modified',
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_date_created . " AS 'lbl_az_change_sub_menu_crud_m_date_created',
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_date_modified . " AS 'lbl_az_change_sub_menu_crud_m_date_modified',
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_description . " AS 'lbl_az_change_sub_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_id_az_change_sub_menu_crud . " AS 'lbl_az_change_sub_menu_crud_id_az_change_sub_menu_crud',
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_u_id_az_menu_crud_t_name . " AS 'lbl_az_change_sub_menu_crud_u_id_az_menu_crud_t_name',
					tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_u_id_az_sub_under_t_name . " AS 'lbl_az_change_sub_menu_crud_u_id_az_sub_under_t_name'
				FROM " . t_az_change_sub_menu_crud . " tc_az_change_sub_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_v_id_az_sub_menu_crud . " = '" . $this->id . "'
				ORDER BY tc_az_change_sub_menu_crud." . d_az_change_sub_menu_crud_m_date_modified . " DESC
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
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_created . " AS 'lbl_az_sub_menu_crud_m_date_created',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_modified . " AS 'lbl_az_sub_menu_crud_m_date_modified',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_description . " AS 'lbl_az_sub_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_id_az_sub_menu_crud . " AS 'lbl_az_sub_menu_crud_id_az_sub_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_sub_under." . d_az_menu_crud_t_name . " AS 'lbl_az_sub_under_t_name'
				FROM " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
				INNER JOIN " . t_az_user . " tc_az_user_created
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_menu_crud . " tc_az_sub_under
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_sub_under." . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_sub_menu_crud." . d_az_sub_menu_crud_id_az_sub_menu_crud . " = '" . $this->id . "'
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
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_created . " AS 'lbl_az_sub_menu_crud_m_date_created',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_modified . " AS 'lbl_az_sub_menu_crud_m_date_modified',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_description . " AS 'lbl_az_sub_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_sub_menu_crud. " . d_az_sub_menu_crud_id_az_sub_menu_crud . " AS 'lbl_az_sub_menu_crud_id_az_sub_menu_crud',
					tc_az_menu_crud. " . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_sub_under. " . d_az_menu_crud_t_name . " AS 'lbl_az_sub_under_t_name'
				FROM " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud. " . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_menu_crud . " tc_az_sub_under
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_sub_under. " . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '2'
				ORDER BY tc_az_menu_crud. " . d_az_menu_crud_t_name . " ASC,
					tc_az_sub_under. " . d_az_menu_crud_t_name . " ASC
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
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_created . " AS 'lbl_az_sub_menu_crud_m_date_created',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_date_modified . " AS 'lbl_az_sub_menu_crud_m_date_modified',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_description . " AS 'lbl_az_sub_menu_crud_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_sub_menu_crud. " . d_az_sub_menu_crud_id_az_sub_menu_crud . " AS 'lbl_az_sub_menu_crud_id_az_sub_menu_crud',
					tc_az_menu_crud. " . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_sub_under. " . d_az_menu_crud_t_name . " AS 'lbl_az_sub_under_t_name'
				FROM " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud. " . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_menu_crud . " tc_az_sub_under
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_sub_under. " . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '1'
				ORDER BY tc_az_menu_crud. " . d_az_menu_crud_t_name . " ASC,
					tc_az_sub_under. " . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_sub_menu_crud . "
				WHERE " . d_az_sub_menu_crud_id_az_sub_menu_crud . " = '" . $this->id . "'
					AND " . d_az_sub_menu_crud_m_deleted . " = '1'
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
		final private function error_sql_insert_all_az_sub_menu_crud(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_menu_crud']) || $data['field_menu_crud'] == 0) {
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_menu_crud'])) {
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_sub_under']) || $data['field_sub_under'] == 0) {
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_sub_under'])) {
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_menu_crud = $this->db->scape($data['field_menu_crud']);
				# Verificar en la base de datos si existen el registro
				$sql_e_menu_crud = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " = '" . $empty_menu_crud . "'");
				if (true != $sql_e_menu_crud || false == $sql_e_menu_crud) {
					if (strtolower($sql_e_menu_crud[0][0]) != strtolower($empty_menu_crud)) {
						throw new Exception('<b>Error:</b> El menu seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_sub_under = $this->db->scape($data['field_sub_under']);
				# Verificar en la base de datos si existen el registro
				$sql_e_sub_under = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " = '" . $empty_sub_under . "'");
				if (true != $sql_e_sub_under || false == $sql_e_sub_under) {
					if (strtolower($sql_e_sub_under[0][0]) != strtolower($empty_sub_under)) {
						throw new Exception('<b>Error:</b> El sub menu seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_sub_menu_crud, d_az_sub_menu_crud_v_id_az_menu_crud . " = '" . $empty_menu_crud . "' AND " . d_az_sub_menu_crud_v_id_az_sub_under . " = '" . $empty_sub_under . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_menu_crud) && strtolower($sql_s_1[0][0]) != strtolower($empty_sub_under)) {
						throw new Exception('<b>Error:</b> El menu y sub menu seleccionados ya existen registrados.');
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
		final public function sql_insert_all_az_sub_menu_crud(array $data) : array {
			$var_error = $this->error_sql_insert_all_az_sub_menu_crud($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_az_sub_menu_crud_m_by_created => $_SESSION[SESS_APP_ID],
				d_az_sub_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_sub_menu_crud_m_date_created => date("Y-m-d H:i:s"),
				d_az_sub_menu_crud_m_date_modified => date("Y-m-d H:i:s"),
				d_az_sub_menu_crud_m_deleted => '1',
				d_az_sub_menu_crud_m_description => $data['field_description'],
				d_az_sub_menu_crud_m_level => '1',
				d_az_sub_menu_crud_m_status => '1',
				d_az_sub_menu_crud_m_temp => '1',
				d_az_sub_menu_crud_v_id_az_menu_crud => $data['field_menu_crud'],
				d_az_sub_menu_crud_v_id_az_sub_under => $data['field_sub_under']
			);
			$this->db->insert(t_az_sub_menu_crud, $var_array);
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_az_sub_menu_crud(array $data) {
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
				if (Func::emp($data['field_menu_crud']) || $data['field_menu_crud'] == 0) {
					throw new Exception('<b>Error:</b> El campo de menu es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_menu_crud'])) {
					throw new Exception('<b>Error:</b> El campo de menu solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_sub_under']) || $data['field_sub_under'] == 0) {
					throw new Exception('<b>Error:</b> El campo de sub menu es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_sub_under'])) {
					throw new Exception('<b>Error:</b> El campo de sub menu solo permite numeros.');
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
				$sql_e_id = $this->db->select('*', t_az_sub_menu_crud, d_az_sub_menu_crud_id_az_sub_menu_crud . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_menu_crud = $this->db->scape($data['field_menu_crud']);
				# Verificar en la base de datos si existen el registro
				$sql_e_menu_crud = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " = '" . $empty_menu_crud . "'");
				if (true != $sql_e_menu_crud || false == $sql_e_menu_crud) {
					if (strtolower($sql_e_menu_crud[0][0]) != strtolower($empty_menu_crud)) {
						throw new Exception('<b>Error:</b> El menu seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_sub_under = $this->db->scape($data['field_sub_under']);
				# Verificar en la base de datos si existen el registro
				$sql_e_sub_under = $this->db->select('*', t_az_menu_crud, d_az_menu_crud_id_az_menu_crud . " = '" . $empty_sub_under . "'");
				if (true != $sql_e_sub_under || false == $sql_e_sub_under) {
					if (strtolower($sql_e_sub_under[0][0]) != strtolower($empty_sub_under)) {
						throw new Exception('<b>Error:</b> El sub menu seleccionado no se encuentra registrado.');
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
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_sub_menu_crud, d_az_sub_menu_crud_id_az_sub_menu_crud . " != '" . $empty_id . "' AND " . d_az_sub_menu_crud_v_id_az_menu_crud . " = '" . $empty_menu_crud . "' AND " . d_az_sub_menu_crud_v_id_az_sub_under . " = '" . $empty_sub_under . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_id) && strtolower($sql_s_1[0][0]) != strtolower($empty_menu_crud) && strtolower($sql_s_1[0][0]) != strtolower($empty_sub_under)) {
						throw new Exception('<b>Error:</b> El usuario seleccionado ya existe.');
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
		final public function sql_update_all_az_sub_menu_crud(array $data) : array {
			$var_error = $this->error_sql_update_all_az_sub_menu_crud($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " AS 'lbl_az_sub_menu_crud_m_deleted',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_description . " AS 'lbl_az_sub_menu_crud_m_description',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_level . " AS 'lbl_az_sub_menu_crud_m_level',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " AS 'lbl_az_sub_menu_crud_m_status',
					tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_temp . " AS 'lbl_az_sub_menu_crud_m_temp',
					tc_az_menu_crud. " . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_sub_under. " . d_az_menu_crud_t_name . " AS 'lbl_az_sub_under_t_name'
				FROM " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud. " . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_menu_crud . " tc_az_sub_under
					ON tc_az_sub_menu_crud. " . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_sub_under. " . d_az_menu_crud_id_az_menu_crud . "
				WHERE tc_az_sub_menu_crud." . d_az_sub_menu_crud_id_az_sub_menu_crud . " = '" . $data['field_id'] . "'
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_az_change_sub_menu_crud_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_change_sub_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_change_sub_menu_crud_m_date_created => date("Y-m-d H:i:s"),
						d_az_change_sub_menu_crud_m_date_modified => date("Y-m-d H:i:s"),
						d_az_change_sub_menu_crud_m_deleted => $key_sql_select['lbl_az_sub_menu_crud_m_deleted'],
						d_az_change_sub_menu_crud_m_description => $key_sql_select['lbl_az_sub_menu_crud_m_description'],
						d_az_change_sub_menu_crud_m_level => $key_sql_select['lbl_az_sub_menu_crud_m_level'],
						d_az_change_sub_menu_crud_m_status => $key_sql_select['lbl_az_sub_menu_crud_m_status'],
						d_az_change_sub_menu_crud_m_temp => $key_sql_select['lbl_az_sub_menu_crud_m_temp'],
						d_az_change_sub_menu_crud_u_id_az_menu_crud_t_name => $key_sql_select['lbl_az_menu_crud_t_name'],
						d_az_change_sub_menu_crud_u_id_az_sub_under_t_name => $key_sql_select['lbl_az_sub_under_t_name'],
						d_az_change_sub_menu_crud_v_id_az_sub_menu_crud => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_az_change_sub_menu_crud, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_az_sub_menu_crud_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_sub_menu_crud_m_date_modified => date("Y-m-d H:i:s"),
				d_az_sub_menu_crud_m_description => $data['field_description'],
				d_az_sub_menu_crud_m_status => $data['field_state'],
				d_az_sub_menu_crud_v_id_az_menu_crud => $data['field_menu_crud'],
				d_az_sub_menu_crud_v_id_az_sub_under => $data['field_sub_under']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_sub_menu_crud, $var_array, d_az_sub_menu_crud_id_az_sub_menu_crud . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_menu_crud() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_menu_crud, d_az_menu_crud_m_deleted . " = '1' AND " . d_az_menu_crud_m_status . " = '1'", "ORDER BY " . d_az_menu_crud_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>