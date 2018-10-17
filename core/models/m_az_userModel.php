<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_az_userModel extends Models implements OCREND {
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
					" . d_az_change_user_m_date_modified . ",
					" . d_az_change_user_t_email . ",
					" . d_az_change_user_t_key_active . ",
					" . d_az_change_user_t_key_password . ",
					" . d_az_change_user_t_key_password_temp . ",
					" . d_az_change_user_t_key_status . ",
					" . d_az_change_user_t_last_connection . ",
					" . d_az_change_user_t_login . ",
					" . d_az_change_user_t_password . ",
					" . d_az_change_user_t_session . "
				FROM " . t_az_change_user . "
				WHERE " . d_az_change_user_v_id_az_user . " = '" . $this->id . "'
				ORDER BY " . d_az_change_user_m_date_modified . " DESC
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
					tc_az_user." . d_az_user_id_az_user . " AS 'lbl_az_user_id_az_user',
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_user." . d_az_user_m_date_created . " AS 'lbl_az_user_m_date_created',
					tc_az_user." . d_az_user_m_date_modified . " AS 'lbl_az_user_m_date_modified',
					tc_az_user." . d_az_user_m_description . " AS 'lbl_az_user_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_user." . d_az_user_t_email . " AS 'lbl_az_user_t_email',
					tc_az_user." . d_az_user_t_key_active . " AS 'lbl_az_user_t_key_active',
					tc_az_user." . d_az_user_t_key_password . " AS 'lbl_az_user_t_key_password',
					tc_az_user." . d_az_user_t_key_password_temp . " AS 'lbl_az_user_t_key_password_temp',
					tc_az_user." . d_az_user_t_key_status . " AS 'lbl_az_user_t_key_status',
					tc_az_user." . d_az_user_t_last_connection . " AS 'lbl_az_user_t_last_connection',
					tc_az_user." . d_az_user_t_login . " AS 'lbl_az_user_t_login',
					tc_az_user." . d_az_user_t_password . " AS 'lbl_az_user_t_password',
					tc_az_user." . d_az_user_t_session . " AS 'lbl_az_user_t_session',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name'
				FROM " . t_az_user . " tc_az_user
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_user." . d_az_user_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_user." . d_az_user_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_user." . d_az_user_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_user." . d_az_user_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_inner_role_user ." tc_az_inner_role_user
					ON tc_az_user." . d_az_user_id_az_user . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . "
				INNER JOIN " . t_az_role ." tc_az_role
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_user." . d_az_user_id_az_user . " = '" . $this->id . "'
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
					tc_az_user." . d_az_user_id_az_user . " AS 'lbl_az_user_id_az_user',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
					tc_az_user." . d_az_user_t_email . " AS 'lbl_az_user_t_email',
					tc_az_user." . d_az_user_t_last_connection . " AS 'lbl_az_user_t_last_connection',
					tc_az_user." . d_az_user_t_login . " AS 'lbl_az_user_t_login'
				FROM " . t_az_user . " tc_az_user
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_user." . d_az_user_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_user." . d_az_user_m_deleted . " = '2'
				ORDER BY tc_az_user." . d_az_user_id_az_user . " ASC
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
					tc_az_user." . d_az_user_m_date_created . " AS 'lbl_az_user_m_date_created',
					tc_az_user." . d_az_user_m_date_modified . " AS 'lbl_az_user_m_date_modified',
					tc_az_user." . d_az_user_m_description . " AS 'lbl_az_user_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_az_user." . d_az_user_id_az_user . " AS 'lbl_az_user_id_az_user',
					tc_az_user." . d_az_user_t_email . " AS 'lbl_az_user_t_email',
					tc_az_user." . d_az_user_t_last_connection . " AS 'lbl_az_user_t_last_connection',
					tc_az_user." . d_az_user_t_login . " AS 'lbl_az_user_t_login'
				FROM " . t_az_user . " tc_az_user
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_user." . d_az_user_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_user." . d_az_user_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_user." . d_az_user_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_user." . d_az_user_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_user." . d_az_user_m_deleted . " = '1'
				ORDER BY tc_az_user." . d_az_user_id_az_user . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_inner_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_inner_role_user . "
				WHERE " . d_az_i_r_u_v_id_az_user . " = '" . $this->id . "'
					AND " . d_az_i_r_u_m_deleted . " = '1'
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
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_user . "
				WHERE " . d_az_user_id_az_user . " = '" . $this->id . "'
					AND " . d_az_user_m_deleted . " = '1'
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
		final private function error_sql_insert_all_az_user(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				Helper::load('strings');
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!Strings::is_email($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_login'])) {
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_password'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_role']) || $data['field_role'] == 0) {
					throw new Exception('<b>Error:</b> El campo de rol es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_role'])) {
					throw new Exception('<b>Error:</b> El campo de rol solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_email = $this->db->scape($data['field_email']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_user, d_az_user_t_email . " = '" . $empty_email . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_email)) {
						throw new Exception('<b>Error:</b> El correo electronico digitado ya existe.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_login = $this->db->scape($data['field_login']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_2 = $this->db->select('*', t_az_user, d_az_user_t_login . " = '" . $empty_login . "'");
				if (true == $sql_s_2) {
					if (strtolower($sql_s_2[0][0]) != strtolower($empty_login)) {
						throw new Exception('<b>Error:</b> El usuario digitado ya existe.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_role = $this->db->scape($data['field_role']);
				# Verificar en la base de datos si existen el registro
				$sql_e_role = $this->db->select('*', t_az_role, d_az_role_id_az_role . " = '" . $empty_role . "'");
				if (true != $sql_e_role || false == $sql_e_role) {
					if (strtolower($sql_e_role[0][0]) != strtolower($empty_role)) {
						throw new Exception('<b>Error:</b> El rol seleccionado no se encuentra registrado.');
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
		final public function sql_insert_all_az_user(array $data) : array {
			$var_error = $this->error_sql_insert_all_az_user($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			$var_array = array(
				d_az_user_m_by_created => $_SESSION[SESS_APP_ID],
				d_az_user_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_user_m_date_created => date("Y-m-d H:i:s"),
				d_az_user_m_date_modified => date("Y-m-d H:i:s"),
				d_az_user_m_deleted => '1',
				d_az_user_m_description => $data['field_description'],
				d_az_user_m_level => '1',
				d_az_user_m_status => '1',
				d_az_user_m_temp => '2',
				d_az_user_t_email => $data['field_email'],
				d_az_user_t_key_active => '1',
				d_az_user_t_key_password => '1',
				d_az_user_t_key_password_temp => '1',
				d_az_user_t_key_status => '1',
				d_az_user_t_login => $data['field_login'],
				d_az_user_t_password => Strings::hash($data['field_password']),
				d_az_user_t_session => '1'
			);
			$this->db->insert(t_az_user, $var_array);

			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_az_user, d_az_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "' AND " . d_az_user_m_temp . " = '2'", "LIMIT 1");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_az_i_r_u_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_i_r_u_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_i_r_u_m_date_created => date("Y-m-d H:i:s"),
						d_az_i_r_u_m_date_modified => date("Y-m-d H:i:s"),
						d_az_i_r_u_m_deleted => '1',
						d_az_i_r_u_m_description => $data['field_description'],
						d_az_i_r_u_m_level => '1',
						d_az_i_r_u_m_status => '1',
						d_az_i_r_u_m_temp => '1',
						d_az_i_r_u_v_id_az_role => $data['field_role'],
						d_az_i_r_u_v_id_az_user => $key_sql_select[d_az_user_id_az_user]
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_az_inner_role_user, $var_array);
				endforeach;
			}

			$var_array = array(d_az_user_m_temp => '1');
			$this->db->update(t_az_user, $var_array, d_az_user_m_temp . " = '2' AND " . d_az_user_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");

			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_az_user(array $data) {
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
				if (Func::emp($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!Strings::is_email($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_login'])) {
					throw new Exception('<b>Error:</b> El campo de usuario es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_role']) || strtolower($data['field_role']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_role'])) {
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
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
				$sql_e_id = $this->db->select('*', t_az_user, d_az_user_id_az_user . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_role = $this->db->scape($data['field_role']);
				# Verificar en la base de datos si existen el registro
				$sql_e_role = $this->db->select('*', t_az_role, d_az_role_id_az_role . " = '" . $empty_role . "'");
				if (true != $sql_e_role || false == $sql_e_role) {
					if (strtolower($sql_e_role[0][0]) != strtolower($empty_role)) {
						throw new Exception('<b>Error:</b> El rol seleccionado no se encuentra registrado.');
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
				$empty_email = $this->db->scape($data['field_email']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_az_user, d_az_user_id_az_user . " != '" . $empty_id . "' AND " . d_az_user_t_email . " = '" . $empty_email . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_id) && strtolower($sql_s_1[0][0]) != strtolower($empty_email)) {
						throw new Exception('<b>Error:</b> El correo electronico digitado ya existe.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_login = $this->db->scape($data['field_login']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_2 = $this->db->select('*', t_az_user, d_az_user_id_az_user . " != '" . $empty_id . "' AND " . d_az_user_t_login . " = '" . $empty_login . "'");
				if (true == $sql_s_2) {
					if (strtolower($sql_s_2[0][0]) != strtolower($empty_id) && strtolower($sql_s_2[0][0]) != strtolower($empty_login)) {
						throw new Exception('<b>Error:</b> El usuario digitado ya existe.');
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
		final public function sql_update_all_az_user(array $data) : array {
			$var_error = $this->error_sql_update_all_az_user($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_az_user, d_az_user_id_az_user . " = '" . $data['field_id'] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_az_change_user_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_change_user_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_change_user_m_date_created => date("Y-m-d H:i:s"),
						d_az_change_user_m_date_modified => date("Y-m-d H:i:s"),
						d_az_change_user_m_deleted => $key_sql_select[d_az_user_m_deleted],
						d_az_change_user_m_description => $key_sql_select[d_az_user_m_description],
						d_az_change_user_m_level => $key_sql_select[d_az_user_m_level],
						d_az_change_user_m_status => $key_sql_select[d_az_user_m_status],
						d_az_change_user_m_temp => $key_sql_select[d_az_user_m_temp],
						d_az_change_user_t_email => $key_sql_select[d_az_user_t_email],
						d_az_change_user_t_key_active => $key_sql_select[d_az_user_t_key_active],
						d_az_change_user_t_key_password => $key_sql_select[d_az_user_t_key_password],
						d_az_change_user_t_key_password_temp => $key_sql_select[d_az_user_t_key_password_temp],
						d_az_change_user_t_key_status => $key_sql_select[d_az_user_t_key_status],
						d_az_change_user_t_last_connection => $key_sql_select[d_az_user_t_last_connection],
						d_az_change_user_t_login => $key_sql_select[d_az_user_t_login],
						d_az_change_user_t_password => $key_sql_select[d_az_user_t_password],
						d_az_change_user_t_session => $key_sql_select[d_az_user_t_session],
						d_az_change_user_v_id_az_user => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_az_change_user, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_az_user_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_user_m_date_modified => date("Y-m-d H:i:s"),
				d_az_user_m_description => $data['field_description'],
				d_az_user_m_status => $data['field_state'],
				d_az_user_t_email => $data['field_email'],
				d_az_user_t_login => $data['field_login']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_user, $var_array, d_az_user_id_az_user . " = '" . $data['field_id'] . "'");
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_az_i_r_u_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_i_r_u_m_date_modified => date("Y-m-d H:i:s"),
				d_az_i_r_u_m_description => $data['field_description'],
				d_az_i_r_u_v_id_az_role => $data['field_role']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_inner_role_user, $var_array, d_az_i_r_u_v_id_az_user . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_session() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_az_user_t_login, t_az_user, d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] .  "'", 'LIMIT 1');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_country() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_country, d_az_country_m_deleted . " = '1' AND " . d_az_country_m_status . " = '1'", "ORDER BY " . d_az_country_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_inner_role_user() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_role, d_az_role_m_deleted . " = '1' AND " . d_az_role_m_status . " = '1'", "ORDER BY " . d_az_role_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_role() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_role, d_az_role_m_deleted . " = '1' AND " . d_az_role_m_status . " = '1'", "ORDER BY " . d_az_role_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>