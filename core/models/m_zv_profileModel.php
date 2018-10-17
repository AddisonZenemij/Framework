<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_zv_profileModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_detail() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_az_user." . d_az_user_id_az_user . " AS 'lbl_az_user_id_az_user',
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_az_user." . d_az_user_m_date_created . " AS 'lbl_az_user_m_date_created',
					tc_az_user." . d_az_user_m_date_modified . " AS 'lbl_az_user_m_date_modified',
					tc_az_user." . d_az_user_m_description . " AS 'lbl_az_user_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
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
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_az_user." . d_az_user_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_az_user." . d_az_user_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_az_user." . d_az_user_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_user." . d_az_user_m_status . " = tc_az_state." . d_az_state_t_value . "
				INNER JOIN " . t_az_inner_role_user ." tc_az_inner_role_user
					ON tc_az_user." . d_az_user_id_az_user . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . "
				INNER JOIN " . t_az_role ." tc_az_role
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				WHERE tc_az_user." . d_az_user_id_az_user . " = '" . $this->id . "'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
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
		final public function sql_controller_read() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					tc_az_user." . d_az_user_id_az_user . " AS 'lbl_az_user_id_az_user',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
					tc_az_user." . d_az_user_t_email . " AS 'lbl_az_user_t_email',
					tc_az_user." . d_az_user_t_last_connection . " AS 'lbl_az_user_t_last_connection',
					tc_az_user." . d_az_user_t_login . " AS 'lbl_az_user_t_login'
				FROM " . t_az_user . " tc_az_user
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_az_user." . d_az_user_m_status . " = tc_az_state." . d_az_state_t_value . "
				WHERE tc_az_user." . d_az_user_m_deleted . " = '1'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT
					tc_az_data_personal." . d_az_data_personal_t_address . " AS 'lbl_az_data_personal_t_address',
					tc_az_data_personal." . d_az_data_personal_t_birth_date . " AS 'lbl_az_data_personal_t_birth_date',
					tc_az_data_personal." . d_az_data_personal_t_names . " AS 'lbl_az_data_personal_t_names',
					tc_az_data_personal." . d_az_data_personal_t_phone_fixed . " AS 'lbl_az_data_personal_t_phone_fixed',
					tc_az_data_personal." . d_az_data_personal_t_phone_movil . " AS 'lbl_az_data_personal_t_phone_movil',
					tc_az_data_personal." . d_az_data_personal_t_surnames . " AS 'lbl_az_data_personal_t_surnames',
					tc_az_data_personal." . d_az_data_personal_v_id_az_country . " AS 'lbl_az_data_personal_v_id_az_country'
				FROM " . t_az_user . " tc_az_user
				INNER JOIN " . t_az_data_personal . " tc_az_data_personal
					ON tc_az_user." . d_az_user_id_az_user . " = tc_az_data_personal." . d_az_data_personal_v_id_az_user . "
				WHERE tc_az_user." . d_az_user_id_az_user . " = '" . $this->id . "'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_data_personal." . d_az_data_personal_v_id_az_user . " = '" . $this->id . "'
					AND tc_az_data_personal." . d_az_data_personal_v_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
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
		# Control Errores Update
		final private function error_sql_update_all_zv_profile(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_names'])) {
					throw new Exception('<b>Error:</b> El campo de nombres es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!Strings::only_letters($data['field_names'])) {
					throw new Exception('<b>Error:</b> El campo de nombres solo permite letras.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_surnames'])) {
					throw new Exception('<b>Error:</b> El campo de apellidos es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!Strings::only_letters($data['field_surnames'])) {
					throw new Exception('<b>Error:</b> El campo de apellidos solo permite letras.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_address'])) {
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_birth_date']) || $data['field_birth_date'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_country']) || $data['field_country'] == 0) {
					throw new Exception('<b>Error:</b> El campo de pais es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_country'])) {
					throw new Exception('<b>Error:</b> El campo de pais solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_country = $this->db->scape($data['field_country']);
				# Verificar en la base de datos si existen el registro
				$sql_e_country = $this->db->select('*', t_az_country, d_az_country_id_az_country . " = '" . $empty_country . "'");
				if (true != $sql_e_country || false == $sql_e_country) {
					if (strtolower($sql_e_country[0][0]) != strtolower($empty_country)) {
						throw new Exception('<b>Error:</b> El pais seleccionado no se encuentra registrado.');
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
		final public function sql_update_all_zv_profile(array $data) : array {
			$var_error = $this->error_sql_update_all_zv_profile($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			/*# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
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
			}*/
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_az_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
				d_az_data_personal_m_date_modified => date("Y-m-d H:i:s"),
				d_az_data_personal_t_address => $data['field_address'],
				d_az_data_personal_t_birth_date => $data['field_birth_date'],
				d_az_data_personal_t_names => $data['field_names'],
				d_az_data_personal_t_phone_fixed => $data['field_phone_fixed'],
				d_az_data_personal_t_phone_movil => $data['field_phone_movil'],
				d_az_data_personal_t_surnames => $data['field_surnames'],
				d_az_data_personal_v_id_az_country => $data['field_country']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_data_personal, $var_array, d_az_data_personal_v_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_az_country() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_az_country, d_az_country_m_deleted . " = '1' AND " . d_az_country_m_status . " = '1'", "ORDER BY " . d_az_country_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>