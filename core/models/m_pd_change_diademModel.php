<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_pd_change_diademModel extends Models implements OCREND {
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
					" . d_pd_exchange_change_diadem_m_date_modified . ",
					" . d_pd_exchange_change_diadem_t_date_change . ",
					" . d_pd_exchange_change_diadem_u_id_pd_data_personal_t_names . ",
					" . d_pd_exchange_change_diadem_u_id_pd_data_personal_t_surnames . "
				FROM " . t_pd_exchange_change_diadem . "
				WHERE " . d_pd_exchange_change_diadem_v_id_pd_change_diadem . " = '" . $this->id . "'
				ORDER BY " . d_pd_exchange_change_diadem_m_date_modified . " DESC
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
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_created . " AS 'lbl_pd_change_diadem_m_date_created',
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_modified . " AS 'lbl_pd_change_diadem_m_date_modified',
					tc_pd_change_diadem." . d_pd_change_diadem_m_description . " AS 'lbl_pd_change_diadem_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " AS 'lbl_pd_change_diadem_id_pd_change_diadem',
					tc_pd_change_diadem." . d_pd_change_diadem_t_date_change . " AS 'lbl_pd_change_diadem_t_date_change',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames'
				FROM " . t_pd_change_diadem . " tc_pd_change_diadem
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_change_diadem." . d_pd_change_diadem_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " = '" . $this->id . "'
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
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_created . " AS 'lbl_pd_change_diadem_m_date_created',
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_modified . " AS 'lbl_pd_change_diadem_m_date_modified',
					tc_pd_change_diadem." . d_pd_change_diadem_m_description . " AS 'lbl_pd_change_diadem_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " AS 'lbl_pd_change_diadem_id_pd_change_diadem',
					tc_pd_change_diadem." . d_pd_change_diadem_t_date_change . " AS 'lbl_pd_change_diadem_t_date_change',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames'
				FROM " . t_pd_change_diadem . " tc_pd_change_diadem
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_change_diadem." . d_pd_change_diadem_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_change_diadem." . d_pd_change_diadem_m_deleted . " = '2'
				ORDER BY tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " ASC
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
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_created . " AS 'lbl_pd_change_diadem_m_date_created',
					tc_pd_change_diadem." . d_pd_change_diadem_m_date_modified . " AS 'lbl_pd_change_diadem_m_date_modified',
					tc_pd_change_diadem." . d_pd_change_diadem_m_description . " AS 'lbl_pd_change_diadem_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " AS 'lbl_pd_change_diadem_id_pd_change_diadem',
					tc_pd_change_diadem." . d_pd_change_diadem_t_date_change . " AS 'lbl_pd_change_diadem_t_date_change',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames'
				FROM " . t_pd_change_diadem . " tc_pd_change_diadem
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_change_diadem." . d_pd_change_diadem_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_change_diadem." . d_pd_change_diadem_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_change_diadem." . d_pd_change_diadem_m_deleted . " = '1'
				ORDER BY tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_pd_change_diadem . "
				WHERE " . d_pd_change_diadem_id_pd_change_diadem . " = '" . $this->id . "'
					AND " . d_pd_change_diadem_m_deleted . " = '1'
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
		final private function error_sql_insert_all_pd_change_diadem(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_change'])) {
					throw new Exception('<b>Error:</b> El campo de fecha cambio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_data_personal']) || $data['field_data_personal'] == 0) {
					throw new Exception('<b>Error:</b> El campo de personal es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_data_personal'])) {
					throw new Exception('<b>Error:</b> El campo de personal solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_data_personal = $this->db->scape($data['field_data_personal']);
				# Verificar en la base de datos si existen el registro
				$sql_e_data_personal = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_id_pd_data_personal . " = '" . $empty_data_personal . "'");
				if (true != $sql_e_data_personal || false == $sql_e_data_personal) {
					if (strtolower($sql_e_data_personal[0][0]) != strtolower($empty_data_personal)) {
						throw new Exception('<b>Error:</b> El personal seleccionado no se encuentra registrado.');
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
		final public function sql_insert_all_pd_change_diadem(array $data) : array {
			$var_error = $this->error_sql_insert_all_pd_change_diadem($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_pd_change_diadem_m_by_created => $_SESSION[SESS_APP_ID],
				d_pd_change_diadem_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_change_diadem_m_date_created => date("Y-m-d H:i:s"),
				d_pd_change_diadem_m_date_modified => date("Y-m-d H:i:s"),
				d_pd_change_diadem_m_deleted => '1',
				d_pd_change_diadem_m_description => $data['field_description'],
				d_pd_change_diadem_m_level => '1',
				d_pd_change_diadem_m_status => '1',
				d_pd_change_diadem_m_temp => '1',
				d_pd_change_diadem_t_date_change => $data['field_date_change'],
				d_pd_change_diadem_v_id_pd_data_personal => $data['field_data_personal']
			);
			$this->db->insert(t_pd_change_diadem, $var_array);
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_pd_change_diadem(array $data) {
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
				if (Func::emp($data['field_state']) || strtolower($data['field_state']) == 'seleccionar') {
					throw new Exception('<b>Error:</b> El campo de estado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_state'])) {
					throw new Exception('<b>Error:</b> El campo de estado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_change'])) {
					throw new Exception('<b>Error:</b> El campo de fecha cambio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_data_personal']) || $data['field_data_personal'] == 0) {
					throw new Exception('<b>Error:</b> El campo de personal es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_data_personal'])) {
					throw new Exception('<b>Error:</b> El campo de personal solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_id = $this->db->scape($data['field_id']);
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_pd_change_diadem, d_pd_change_diadem_id_pd_change_diadem . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
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
				$empty_data_personal = $this->db->scape($data['field_data_personal']);
				# Verificar en la base de datos si existen el registro
				$sql_e_data_personal = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_id_pd_data_personal . " = '" . $empty_data_personal . "'");
				if (true != $sql_e_data_personal || false == $sql_e_data_personal) {
					if (strtolower($sql_e_data_personal[0][0]) != strtolower($empty_data_personal)) {
						throw new Exception('<b>Error:</b> El personal seleccionado no se encuentra registrado.');
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
		final public function sql_update_all_pd_change_diadem(array $data) : array {
			$var_error = $this->error_sql_update_all_pd_change_diadem($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_pd_change_diadem." . d_pd_change_diadem_m_deleted . " AS 'lbl_pd_change_diadem_m_deleted',
					tc_pd_change_diadem." . d_pd_change_diadem_m_description . " AS 'lbl_pd_change_diadem_m_description',
					tc_pd_change_diadem." . d_pd_change_diadem_m_level . " AS 'lbl_pd_change_diadem_m_level',
					tc_pd_change_diadem." . d_pd_change_diadem_m_status . " AS 'lbl_pd_change_diadem_m_status',
					tc_pd_change_diadem." . d_pd_change_diadem_m_temp . " AS 'lbl_pd_change_diadem_m_temp',
					tc_pd_change_diadem." . d_pd_change_diadem_t_date_change . " AS 'lbl_pd_change_diadem_t_date_change',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames'
				FROM " . t_pd_change_diadem . " tc_pd_change_diadem
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_change_diadem." . d_pd_change_diadem_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				WHERE tc_pd_change_diadem." . d_pd_change_diadem_id_pd_change_diadem . " = '" . $data['field_id'] . "'
				LIMIT 1
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_pd_exchange_change_diadem_m_by_created => $_SESSION[SESS_APP_ID],
						d_pd_exchange_change_diadem_m_by_modified => $_SESSION[SESS_APP_ID],
						d_pd_exchange_change_diadem_m_date_created => date("Y-m-d H:i:s"),
						d_pd_exchange_change_diadem_m_date_modified => date("Y-m-d H:i:s"),
						d_pd_exchange_change_diadem_m_deleted => $key_sql_select['lbl_pd_change_diadem_m_deleted'],
						d_pd_exchange_change_diadem_m_description => $key_sql_select['lbl_pd_change_diadem_m_description'],
						d_pd_exchange_change_diadem_m_level => $key_sql_select['lbl_pd_change_diadem_m_level'],
						d_pd_exchange_change_diadem_m_status => $key_sql_select['lbl_pd_change_diadem_m_status'],
						d_pd_exchange_change_diadem_m_temp => $key_sql_select['lbl_pd_change_diadem_m_temp'],
						d_pd_exchange_change_diadem_t_date_change => $key_sql_select['lbl_pd_change_diadem_t_date_change'],
						d_pd_exchange_change_diadem_u_id_pd_data_personal_t_names => $key_sql_select['lbl_pd_data_personal_t_names'],
						d_pd_exchange_change_diadem_u_id_pd_data_personal_t_surnames => $key_sql_select['lbl_pd_data_personal_t_surnames'],
						d_pd_exchange_change_diadem_v_id_pd_change_diadem => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_pd_exchange_change_diadem, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_pd_change_diadem_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_change_diadem_m_date_modified => date("Y-m-d H:i:s"),
				d_pd_change_diadem_m_description => $data['field_description'],
				d_pd_change_diadem_m_status => $data['field_state'],
				d_pd_change_diadem_t_date_change => $data['field_date_change'],
				d_pd_change_diadem_v_id_pd_data_personal => $data['field_data_personal']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_pd_change_diadem, $var_array, d_pd_change_diadem_id_pd_change_diadem . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_data_personal() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_data_personal, d_pd_data_personal_m_deleted . " = '1' ORDER BY " . d_pd_data_personal_t_names . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>