<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_pd_data_personalModel extends Models implements OCREND {
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
					" . d_pd_exchange_data_personal_m_date_modified . ",
					" . d_pd_exchange_data_personal_t_address . ",
					" . d_pd_exchange_data_personal_t_birth_date . ",
					" . d_pd_exchange_data_personal_t_email . ",
					" . d_pd_exchange_data_personal_t_identification . ",
					" . d_pd_exchange_data_personal_t_names . ",
					" . d_pd_exchange_data_personal_t_phone_fixed . ",
					" . d_pd_exchange_data_personal_t_phone_movil . ",
					" . d_pd_exchange_data_personal_t_surnames . ",
					" . d_pd_exchange_data_personal_u_pd_document_type_t_name . "
				FROM " . t_pd_exchange_data_personal . "
				WHERE " . d_pd_exchange_data_personal_v_id_pd_data_personal . " = '" . $this->id . "'
				ORDER BY " . d_pd_exchange_data_personal_m_date_modified . " DESC
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
					tc_pd_data_personal." . d_pd_data_personal_m_date_created . " AS 'lbl_pd_data_personal_m_date_created',
					tc_pd_data_personal." . d_pd_data_personal_m_date_modified . " AS 'lbl_pd_data_personal_m_date_modified',
					tc_pd_data_personal." . d_pd_data_personal_m_description . " AS 'lbl_pd_data_personal_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " AS 'lbl_pd_data_personal_id_pd_data_personal',
					tc_pd_data_personal." . d_pd_data_personal_t_address . " AS 'lbl_pd_data_personal_t_address',
					tc_pd_data_personal." . d_pd_data_personal_t_birth_date . " AS 'lbl_pd_data_personal_t_birth_date',
					tc_pd_data_personal." . d_pd_data_personal_t_email . " AS 'lbl_pd_data_personal_t_email',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_fixed . " AS 'lbl_pd_data_personal_t_phone_fixed',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_movil . " AS 'lbl_pd_data_personal_t_phone_movil',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_document_type." . d_pd_document_type_t_name . " AS 'lbl_pd_document_type_t_name'
				FROM " . t_pd_data_personal . " tc_pd_data_personal
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_data_personal." . d_pd_data_personal_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_data_personal." . d_pd_data_personal_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_document_type . " tc_pd_document_type
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_document_type . " = tc_pd_document_type." . d_pd_document_type_id_pd_document_type . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " = '" . $this->id . "'
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
					tc_pd_data_personal." . d_pd_data_personal_m_date_created . " AS 'lbl_pd_data_personal_m_date_created',
					tc_pd_data_personal." . d_pd_data_personal_m_date_modified . " AS 'lbl_pd_data_personal_m_date_modified',
					tc_pd_data_personal." . d_pd_data_personal_m_description . " AS 'lbl_pd_data_personal_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " AS 'lbl_pd_data_personal_id_pd_data_personal',
					tc_pd_data_personal." . d_pd_data_personal_t_address . " AS 'lbl_pd_data_personal_t_address',
					tc_pd_data_personal." . d_pd_data_personal_t_email . " AS 'lbl_pd_data_personal_t_email',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_movil . " AS 'lbl_pd_data_personal_t_phone_movil',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_document_type." . d_pd_document_type_t_name . " AS 'lbl_pd_document_type_t_name'
				FROM " . t_pd_data_personal . " tc_pd_data_personal
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_data_personal." . d_pd_data_personal_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_data_personal." . d_pd_data_personal_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_document_type . " tc_pd_document_type
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_document_type . " = tc_pd_document_type." . d_pd_document_type_id_pd_document_type . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_data_personal." . d_pd_data_personal_m_deleted . " = '2'
				ORDER BY tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " ASC
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
					tc_pd_data_personal." . d_pd_data_personal_m_date_created . " AS 'lbl_pd_data_personal_m_date_created',
					tc_pd_data_personal." . d_pd_data_personal_m_date_modified . " AS 'lbl_pd_data_personal_m_date_modified',
					tc_pd_data_personal." . d_pd_data_personal_m_description . " AS 'lbl_pd_data_personal_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " AS 'lbl_pd_data_personal_id_pd_data_personal',
					tc_pd_data_personal." . d_pd_data_personal_t_address . " AS 'lbl_pd_data_personal_t_address',
					tc_pd_data_personal." . d_pd_data_personal_t_email . " AS 'lbl_pd_data_personal_t_email',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_movil . " AS 'lbl_pd_data_personal_t_phone_movil',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_document_type." . d_pd_document_type_t_name . " AS 'lbl_pd_document_type_t_name'
				FROM " . t_pd_data_personal . " tc_pd_data_personal
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_data_personal." . d_pd_data_personal_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_data_personal." . d_pd_data_personal_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_data_personal." . d_pd_data_personal_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_document_type . " tc_pd_document_type
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_document_type . " = tc_pd_document_type." . d_pd_document_type_id_pd_document_type . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_data_personal." . d_pd_data_personal_m_deleted . " = '1'
				ORDER BY tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_pd_data_personal . "
				WHERE " . d_pd_data_personal_id_pd_data_personal . " = '" . $this->id . "'
					AND " . d_pd_data_personal_m_deleted . " = '1'
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
		final public function sql_controller_inner() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_pd_data_business . "
				WHERE " . d_pd_data_business_v_id_pd_data_personal . " = '" . $this->id . "'
					AND " . d_pd_data_business_m_deleted . " = '1'
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
		final private function error_sql_insert_all_pd_data_personal(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
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
				if (Func::emp($data['field_document_type']) || $data['field_document_type'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo documento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_document_type'])) {
					throw new Exception('<b>Error:</b> El campo de tipo documento solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_identification'])) {
					throw new Exception('<b>Error:</b> El campo de identificacion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_identification'])) {
					throw new Exception('<b>Error:</b> El campo de identificacion solo permite numeros.');
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
				if (Func::emp($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!Strings::is_email($data['field_email'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico tiene un formato invalido.');
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
				if (Func::emp($data['field_birth_place']) || $data['field_birth_place'] == 0) {
					throw new Exception('<b>Error:</b> El campo de lugar de nacimiento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_birth_place'])) {
					throw new Exception('<b>Error:</b> El campo de lugar de nacimiento solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_civil_status']) || $data['field_civil_status'] == 0) {
					throw new Exception('<b>Error:</b> El campo de estado civil es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_civil_status'])) {
					throw new Exception('<b>Error:</b> El campo de estado civil solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_eps']) || $data['field_eps'] == 0) {
					throw new Exception('<b>Error:</b> El campo de eps es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_eps'])) {
					throw new Exception('<b>Error:</b> El campo de eps solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_level_study']) || $data['field_level_study'] == 0) {
					throw new Exception('<b>Error:</b> El campo de nivel de estudio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_level_study'])) {
					throw new Exception('<b>Error:</b> El campo de nivel de estudio solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_neighborhood']) || $data['field_neighborhood'] == 0) {
					throw new Exception('<b>Error:</b> El campo de barrio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_neighborhood'])) {
					throw new Exception('<b>Error:</b> El campo de barrio solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_pension']) || $data['field_pension'] == 0) {
					throw new Exception('<b>Error:</b> El campo de pension es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_pension'])) {
					throw new Exception('<b>Error:</b> El campo de pension solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_data_personal']) || $data['field_data_personal'] == 0 && $data['field_data_personal'] != 'Ninguno') {
					throw new Exception('<b>Error:</b> El campo de rediferido es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_data_personal']) && $data['field_data_personal'] != 'Ninguno') {
					throw new Exception('<b>Error:</b> El campo de rediferido solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_admission']) || $data['field_date_admission'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha de ingreso es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_contract_termination']) || $data['field_date_contract_termination'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha de terminacion de contrato es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Func::emp($data['field_value_bonus'])) {
					throw new Exception('<b>Error:</b> El campo de valor bono es oblgitario.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_value_bonus'])) {
					throw new Exception('<b>Error:</b> El campo de valor bono solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_campaign']) || $data['field_campaign'] == 0) {
					throw new Exception('<b>Error:</b> El campo de campaña es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_campaign'])) {
					throw new Exception('<b>Error:</b> El campo de campaña solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_contract_type']) || $data['field_contract_type'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo de contrato es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_contract_type'])) {
					throw new Exception('<b>Error:</b> El campo de tipo de contrato solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_employee_charge']) || $data['field_employee_charge'] == 0) {
					throw new Exception('<b>Error:</b> El campo de cargo es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_employee_charge'])) {
					throw new Exception('<b>Error:</b> El campo de cargo solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_base_salary']) || $data['field_base_salary'] == 0) {
					throw new Exception('<b>Error:</b> El campo de salario base es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_base_salary'])) {
					throw new Exception('<b>Error:</b> El campo de salario base solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_transport_assistance']) || $data['field_transport_assistance'] == 0) {
					throw new Exception('<b>Error:</b> El campo de auxilio de transporte es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_transport_assistance'])) {
					throw new Exception('<b>Error:</b> El campo de auxilio de transporte solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_birth_place = $this->db->scape($data['field_birth_place']);
				# Verificar en la base de datos si existen el registro
				$sql_e_birth_place = $this->db->select('*', t_pd_birth_place, d_pd_birth_place_id_pd_birth_place . " = '" . $empty_birth_place . "'");
				if (true != $sql_e_birth_place || false == $sql_e_birth_place) {
					if (strtolower($sql_e_birth_place[0][0]) != strtolower($empty_birth_place)) {
						throw new Exception('<b>Error:</b> El lugar de nacimiento seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_civil_status = $this->db->scape($data['field_civil_status']);
				# Verificar en la base de datos si existen el registro
				$sql_e_civil_status = $this->db->select('*', t_pd_civil_status, d_pd_civil_status_id_pd_civil_status . " = '" . $empty_civil_status . "'");
				if (true != $sql_e_civil_status || false == $sql_e_civil_status) {
					if (strtolower($sql_e_civil_status[0][0]) != strtolower($empty_civil_status)) {
						throw new Exception('<b>Error:</b> El estado civil seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_document_type = $this->db->scape($data['field_document_type']);
				# Verificar en la base de datos si existen el registro
				$sql_e_document_type = $this->db->select('*', t_pd_document_type, d_pd_document_type_id_pd_document_type . " = '" . $empty_document_type . "'");
				if (true != $sql_e_document_type || false == $sql_e_document_type) {
					if (strtolower($sql_e_document_type[0][0]) != strtolower($empty_document_type)) {
						throw new Exception('<b>Error:</b> El tipo de documento seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_eps = $this->db->scape($data['field_eps']);
				# Verificar en la base de datos si existen el registro
				$sql_e_eps = $this->db->select('*', t_pd_eps, d_pd_eps_id_pd_eps . " = '" . $empty_eps . "'");
				if (true != $sql_e_eps || false == $sql_e_eps) {
					if (strtolower($sql_e_eps[0][0]) != strtolower($empty_eps)) {
						throw new Exception('<b>Error:</b> La eps seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_level_study = $this->db->scape($data['field_level_study']);
				# Verificar en la base de datos si existen el registro
				$sql_e_level_study = $this->db->select('*', t_pd_level_study, d_pd_level_study_id_pd_level_study . " = '" . $empty_level_study . "'");
				if (true != $sql_e_level_study || false == $sql_e_level_study) {
					if (strtolower($sql_e_level_study[0][0]) != strtolower($empty_level_study)) {
						throw new Exception('<b>Error:</b> El nivel de estudio seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_neighborhood = $this->db->scape($data['field_neighborhood']);
				# Verificar en la base de datos si existen el registro
				$sql_e_neighborhood = $this->db->select('*', t_pd_neighborhood, d_pd_neighborhood_id_pd_neighborhood . " = '" . $empty_neighborhood . "'");
				if (true != $sql_e_neighborhood || false == $sql_e_neighborhood) {
					if (strtolower($sql_e_neighborhood[0][0]) != strtolower($empty_neighborhood)) {
						throw new Exception('<b>Error:</b> El barrio seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_pension = $this->db->scape($data['field_pension']);
				# Verificar en la base de datos si existen el registro
				$sql_e_pension = $this->db->select('*', t_pd_pension, d_pd_pension_id_pd_pension . " = '" . $empty_pension . "'");
				if (true != $sql_e_pension || false == $sql_e_pension) {
					if (strtolower($sql_e_pension[0][0]) != strtolower($empty_pension)) {
						throw new Exception('<b>Error:</b> La pension seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_campaign = $this->db->scape($data['field_campaign']);
				# Verificar en la base de datos si existen el registro
				$sql_e_campaign = $this->db->select('*', t_pd_campaign, d_pd_campaign_id_pd_campaign . " = '" . $empty_campaign . "'");
				if (true != $sql_e_campaign || false == $sql_e_campaign) {
					if (strtolower($sql_e_campaign[0][0]) != strtolower($empty_campaign)) {
						throw new Exception('<b>Error:</b> La campaña seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_contract_type = $this->db->scape($data['field_contract_type']);
				# Verificar en la base de datos si existen el registro
				$sql_e_contract_type = $this->db->select('*', t_pd_contract_type, d_pd_contract_type_id_pd_contract_type . " = '" . $empty_contract_type . "'");
				if (true != $sql_e_contract_type || false == $sql_e_contract_type) {
					if (strtolower($sql_e_contract_type[0][0]) != strtolower($empty_contract_type)) {
						throw new Exception('<b>Error:</b> El tipo de contrato seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_employee_charge = $this->db->scape($data['field_employee_charge']);
				# Verificar en la base de datos si existen el registro
				$sql_e_employee_charge = $this->db->select('*', t_pd_employee_charge, d_pd_employee_charge_id_pd_employee_charge . " = '" . $empty_employee_charge . "'");
				if (true != $sql_e_employee_charge || false == $sql_e_employee_charge) {
					if (strtolower($sql_e_employee_charge[0][0]) != strtolower($empty_employee_charge)) {
						throw new Exception('<b>Error:</b> El cargo seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_base_salary = $this->db->scape($data['field_base_salary']);
				# Verificar en la base de datos si existen el registro
				$sql_e_base_salary = $this->db->select('*', t_pd_base_salary, d_pd_base_salary_id_pd_base_salary . " = '" . $empty_base_salary . "'");
				if (true != $sql_e_base_salary || false == $sql_e_base_salary) {
					if (strtolower($sql_e_base_salary[0][0]) != strtolower($empty_base_salary)) {
						throw new Exception('<b>Error:</b> El salario base seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_transport_assistance = $this->db->scape($data['field_transport_assistance']);
				# Verificar en la base de datos si existen el registro
				$sql_e_transport_assistance = $this->db->select('*', t_pd_transport_assistance, d_pd_transport_assistance_id_pd_transport_assistance . " = '" . $empty_transport_assistance . "'");
				if (true != $sql_e_transport_assistance || false == $sql_e_transport_assistance) {
					if (strtolower($sql_e_transport_assistance[0][0]) != strtolower($empty_transport_assistance)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_identification = $this->db->scape($data['field_identification']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_identification = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_t_identification . " = '" . $empty_identification . "'");
				if (true == $sql_s_identification) {
					if (strtolower($sql_s_identification[0][0]) != strtolower($empty_identification)) {
						throw new Exception('<b>Error:</b> La identificacion digitada ya existe.');
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
		final public function sql_insert_all_pd_data_personal(array $data) : array {
			$var_error = $this->error_sql_insert_all_pd_data_personal($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_array = array(
				d_pd_data_personal_m_by_created => $_SESSION[SESS_APP_ID],
				d_pd_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_data_personal_m_date_created => date("Y-m-d H:i:s"),
				d_pd_data_personal_m_date_modified => date("Y-m-d H:i:s"),
				d_pd_data_personal_m_deleted => '1',
				#d_pd_data_personal_m_description => $data['field_description'],
				d_pd_data_personal_m_level => '1',
				d_pd_data_personal_m_status => '1',
				d_pd_data_personal_m_temp => '2',
				d_pd_data_personal_t_address => $data['field_address'],
				d_pd_data_personal_t_birth_date => $data['field_birth_date'],
				d_pd_data_personal_t_email => $data['field_email'],
				d_pd_data_personal_t_identification => $data['field_identification'],
				d_pd_data_personal_t_names => $data['field_names'],
				d_pd_data_personal_t_phone_fixed => $data['field_phone_fixed'],
				d_pd_data_personal_t_phone_movil => $data['field_phone_movil'],
				d_pd_data_personal_t_surnames => $data['field_surnames'],
				d_pd_data_personal_v_id_pd_birth_place => $data['field_birth_place'],
				d_pd_data_personal_v_id_pd_civil_status => $data['field_civil_status'],
				d_pd_data_personal_v_id_pd_document_type => $data['field_document_type'],
				d_pd_data_personal_v_id_pd_eps => $data['field_eps'],
				d_pd_data_personal_v_id_pd_level_study => $data['field_level_study'],
				d_pd_data_personal_v_id_pd_neighborhood => $data['field_neighborhood'],
				d_pd_data_personal_v_id_pd_pension => $data['field_pension']
			);
			$this->db->insert(t_pd_data_personal, $var_array);

			$var_sql_pd_data_personal = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_m_temp . " = '2' AND " . d_pd_data_personal_m_by_created . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
			
			if (false != $var_sql_pd_data_personal) {
				foreach ($var_sql_pd_data_personal as $key_pd_data_personal):
					$key_pd_data_personal[d_pd_data_personal_id_pd_data_personal];
				endforeach;
			}

			$var_insert = array(
				d_pd_data_business_m_by_created => $_SESSION[SESS_APP_ID],
				d_pd_data_business_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_data_business_m_date_created => date("Y-m-d H:i:s"),
				d_pd_data_business_m_date_modified => date("Y-m-d H:i:s"),
				d_pd_data_business_m_deleted => '1',
				d_pd_data_business_m_description => '',
				d_pd_data_business_m_level => '1',
				d_pd_data_business_m_status => '1',
				d_pd_data_business_m_temp => '1',
				d_pd_data_business_t_data_personal => $data['field_data_personal'],
				d_pd_data_business_t_date_admission => $data['field_date_admission'],
				d_pd_data_business_t_date_contract_termination => $data['field_date_contract_termination'],
				d_pd_data_business_t_value_bonus => $data['field_value_bonus'],
				d_pd_data_business_v_id_pd_base_salary => $data['field_base_salary'],
				d_pd_data_business_v_id_pd_campaign => $data['field_campaign'],
				d_pd_data_business_v_id_pd_contract_type => $data['field_contract_type'],
				d_pd_data_business_v_id_pd_data_personal => $key_pd_data_personal[d_pd_data_personal_id_pd_data_personal],
				d_pd_data_business_v_id_pd_employee_charge => $data['field_employee_charge'],
				d_pd_data_business_v_id_pd_transport_assistance => $data['field_transport_assistance']
			);
			$this->db->insert(t_pd_data_business, $var_insert);

			$var_update = array(d_pd_data_personal_m_temp => '1');
			$this->db->update(t_pd_data_personal, $var_update, d_pd_data_personal_m_temp . " = '2'");

			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_pd_data_personal(array $data) {
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
				if (Func::emp($data['field_document_type']) || $data['field_document_type'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo documento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_document_type'])) {
					throw new Exception('<b>Error:</b> El campo de tipo documento solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Func::emp($data['field_identification'])) {
					throw new Exception('<b>Error:</b> El campo de identificacion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_identification'])) {
					throw new Exception('<b>Error:</b> El campo de identificacion solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_phone_movil'])) {
					throw new Exception('<b>Error:</b> El campo de telefono movil solo permite numeros.');
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
				if (Func::emp($data['field_address'])) {
					throw new Exception('<b>Error:</b> El campo de direccion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_birth_place']) || $data['field_birth_place'] == 0) {
					throw new Exception('<b>Error:</b> El campo de lugar de nacimiento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_birth_place'])) {
					throw new Exception('<b>Error:</b> El campo de lugar de nacimiento solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_birth_date']) || $data['field_birth_date'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha nacimiento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_civil_status']) || $data['field_civil_status'] == 0) {
					throw new Exception('<b>Error:</b> El campo de estado civil es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_civil_status'])) {
					throw new Exception('<b>Error:</b> El campo de estado civil solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_eps']) || $data['field_eps'] == 0) {
					throw new Exception('<b>Error:</b> El campo de eps es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_eps'])) {
					throw new Exception('<b>Error:</b> El campo de eps solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_level_study']) || $data['field_level_study'] == 0) {
					throw new Exception('<b>Error:</b> El campo de nivel de estudio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_level_study'])) {
					throw new Exception('<b>Error:</b> El campo de nivel de estudio solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_neighborhood']) || $data['field_neighborhood'] == 0) {
					throw new Exception('<b>Error:</b> El campo de barrio es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_neighborhood'])) {
					throw new Exception('<b>Error:</b> El campo de barrio solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_pension']) || $data['field_pension'] == 0) {
					throw new Exception('<b>Error:</b> El campo de pension es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_pension'])) {
					throw new Exception('<b>Error:</b> El campo de pension solo permite numeros.');
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
				if (Func::emp($data['field_data_personal']) || $data['field_data_personal'] == 0 && $data['field_data_personal'] != 'Ninguno') {
					throw new Exception('<b>Error:</b> El campo de rediferido es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_data_personal']) && $data['field_data_personal'] != 'Ninguno') {
					throw new Exception('<b>Error:</b> El campo de rediferido solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_admission']) || $data['field_date_admission'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha de ingreso es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_date_contract_termination']) || $data['field_date_contract_termination'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha de terminacion de contrato es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Func::emp($data['field_value_bonus'])) {
					throw new Exception('<b>Error:</b> El campo de valor bono es oblgitario.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_value_bonus'])) {
					throw new Exception('<b>Error:</b> El campo de valor bono solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_campaign']) || $data['field_campaign'] == 0) {
					throw new Exception('<b>Error:</b> El campo de campaña es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_campaign'])) {
					throw new Exception('<b>Error:</b> El campo de campaña solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_contract_type']) || $data['field_contract_type'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo de contrato es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_contract_type'])) {
					throw new Exception('<b>Error:</b> El campo de tipo de contrato solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_employee_charge']) || $data['field_employee_charge'] == 0) {
					throw new Exception('<b>Error:</b> El campo de cargo es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_employee_charge'])) {
					throw new Exception('<b>Error:</b> El campo de cargo solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_base_salary']) || $data['field_base_salary'] == 0) {
					throw new Exception('<b>Error:</b> El campo de salario base es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_base_salary'])) {
					throw new Exception('<b>Error:</b> El campo de salario base solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_transport_assistance']) || $data['field_transport_assistance'] == 0) {
					throw new Exception('<b>Error:</b> El campo de auxilio de transporte es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_transport_assistance'])) {
					throw new Exception('<b>Error:</b> El campo de auxilio de transporte solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_id = $this->db->scape($data['field_id']);
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_id_pd_data_personal . " = '" . $empty_id . "'");
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
				$empty_birth_place = $this->db->scape($data['field_birth_place']);
				# Verificar en la base de datos si existen el registro
				$sql_e_birth_place = $this->db->select('*', t_pd_birth_place, d_pd_birth_place_id_pd_birth_place . " = '" . $empty_birth_place . "'");
				if (true != $sql_e_birth_place || false == $sql_e_birth_place) {
					if (strtolower($sql_e_birth_place[0][0]) != strtolower($empty_birth_place)) {
						throw new Exception('<b>Error:</b> El lugar de nacimiento seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_civil_status = $this->db->scape($data['field_civil_status']);
				# Verificar en la base de datos si existen el registro
				$sql_e_civil_status = $this->db->select('*', t_pd_civil_status, d_pd_civil_status_id_pd_civil_status . " = '" . $empty_civil_status . "'");
				if (true != $sql_e_civil_status || false == $sql_e_civil_status) {
					if (strtolower($sql_e_civil_status[0][0]) != strtolower($empty_civil_status)) {
						throw new Exception('<b>Error:</b> El estado civil seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_document_type = $this->db->scape($data['field_document_type']);
				# Verificar en la base de datos si existen el registro
				$sql_e_document_type = $this->db->select('*', t_pd_document_type, d_pd_document_type_id_pd_document_type . " = '" . $empty_document_type . "'");
				if (true != $sql_e_document_type || false == $sql_e_document_type) {
					if (strtolower($sql_e_document_type[0][0]) != strtolower($empty_document_type)) {
						throw new Exception('<b>Error:</b> El tipo de documento seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_eps = $this->db->scape($data['field_eps']);
				# Verificar en la base de datos si existen el registro
				$sql_e_eps = $this->db->select('*', t_pd_eps, d_pd_eps_id_pd_eps . " = '" . $empty_eps . "'");
				if (true != $sql_e_eps || false == $sql_e_eps) {
					if (strtolower($sql_e_eps[0][0]) != strtolower($empty_eps)) {
						throw new Exception('<b>Error:</b> La eps seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_level_study = $this->db->scape($data['field_level_study']);
				# Verificar en la base de datos si existen el registro
				$sql_e_level_study = $this->db->select('*', t_pd_level_study, d_pd_level_study_id_pd_level_study . " = '" . $empty_level_study . "'");
				if (true != $sql_e_level_study || false == $sql_e_level_study) {
					if (strtolower($sql_e_level_study[0][0]) != strtolower($empty_level_study)) {
						throw new Exception('<b>Error:</b> El nivel de estudio seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_neighborhood = $this->db->scape($data['field_neighborhood']);
				# Verificar en la base de datos si existen el registro
				$sql_e_neighborhood = $this->db->select('*', t_pd_neighborhood, d_pd_neighborhood_id_pd_neighborhood . " = '" . $empty_neighborhood . "'");
				if (true != $sql_e_neighborhood || false == $sql_e_neighborhood) {
					if (strtolower($sql_e_neighborhood[0][0]) != strtolower($empty_neighborhood)) {
						throw new Exception('<b>Error:</b> El barrio seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_pension = $this->db->scape($data['field_pension']);
				# Verificar en la base de datos si existen el registro
				$sql_e_pension = $this->db->select('*', t_pd_pension, d_pd_pension_id_pd_pension . " = '" . $empty_pension . "'");
				if (true != $sql_e_pension || false == $sql_e_pension) {
					if (strtolower($sql_e_pension[0][0]) != strtolower($empty_pension)) {
						throw new Exception('<b>Error:</b> La pension seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_data_personal = $this->db->scape($data['field_data_personal']);
				# Verificar en la base de datos si existen el registro
				$sql_e_data_personal = $this->db->select('*', t_pd_data_personal, d_pd_data_personal_id_pd_data_personal . " = '" . $empty_data_personal . "'");
				if (true != $sql_e_data_personal || false == $sql_e_data_personal) {
					if (strtolower($sql_e_data_personal[0][0]) != strtolower($empty_data_personal)) {
						throw new Exception('<b>Error:</b> El personal seleccionado no se encuentra registrado.');
					}
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_campaign = $this->db->scape($data['field_campaign']);
				# Verificar en la base de datos si existen el registro
				$sql_e_campaign = $this->db->select('*', t_pd_campaign, d_pd_campaign_id_pd_campaign . " = '" . $empty_campaign . "'");
				if (true != $sql_e_campaign || false == $sql_e_campaign) {
					if (strtolower($sql_e_campaign[0][0]) != strtolower($empty_campaign)) {
						throw new Exception('<b>Error:</b> La campaña seleccionada no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_contract_type = $this->db->scape($data['field_contract_type']);
				# Verificar en la base de datos si existen el registro
				$sql_e_contract_type = $this->db->select('*', t_pd_contract_type, d_pd_contract_type_id_pd_contract_type . " = '" . $empty_contract_type . "'");
				if (true != $sql_e_contract_type || false == $sql_e_contract_type) {
					if (strtolower($sql_e_contract_type[0][0]) != strtolower($empty_contract_type)) {
						throw new Exception('<b>Error:</b> El tipo de contrato seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_employee_charge = $this->db->scape($data['field_employee_charge']);
				# Verificar en la base de datos si existen el registro
				$sql_e_employee_charge = $this->db->select('*', t_pd_employee_charge, d_pd_employee_charge_id_pd_employee_charge . " = '" . $empty_employee_charge . "'");
				if (true != $sql_e_employee_charge || false == $sql_e_employee_charge) {
					if (strtolower($sql_e_employee_charge[0][0]) != strtolower($empty_employee_charge)) {
						throw new Exception('<b>Error:</b> El cargo seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_base_salary = $this->db->scape($data['field_base_salary']);
				# Verificar en la base de datos si existen el registro
				$sql_e_base_salary = $this->db->select('*', t_pd_base_salary, d_pd_base_salary_id_pd_base_salary . " = '" . $empty_base_salary . "'");
				if (true != $sql_e_base_salary || false == $sql_e_base_salary) {
					if (strtolower($sql_e_base_salary[0][0]) != strtolower($empty_base_salary)) {
						throw new Exception('<b>Error:</b> El salario base seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_transport_assistance = $this->db->scape($data['field_transport_assistance']);
				# Verificar en la base de datos si existen el registro
				$sql_e_transport_assistance = $this->db->select('*', t_pd_transport_assistance, d_pd_transport_assistance_id_pd_transport_assistance . " = '" . $empty_transport_assistance . "'");
				if (true != $sql_e_transport_assistance || false == $sql_e_transport_assistance) {
					if (strtolower($sql_e_transport_assistance[0][0]) != strtolower($empty_transport_assistance)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
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
		final public function sql_update_all_pd_data_personal(array $data) : array {
			$var_error = $this->error_sql_update_all_pd_data_personal($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_pd_data_personal." . d_pd_data_personal_m_deleted . " AS 'lbl_pd_data_personal_m_deleted',
					tc_pd_data_personal." . d_pd_data_personal_m_description . " AS 'lbl_pd_data_personal_m_description',
					tc_pd_data_personal." . d_pd_data_personal_m_level . " AS 'lbl_pd_data_personal_m_level',
					tc_pd_data_personal." . d_pd_data_personal_m_status . " AS 'lbl_pd_data_personal_m_status',
					tc_pd_data_personal." . d_pd_data_personal_m_temp . " AS 'lbl_pd_data_personal_m_temp',
					tc_pd_data_personal." . d_pd_data_personal_t_address . " AS 'lbl_pd_data_personal_t_address',
					tc_pd_data_personal." . d_pd_data_personal_t_birth_date . " AS 'lbl_pd_data_personal_t_birth_date',
					tc_pd_data_personal." . d_pd_data_personal_t_email . " AS 'lbl_pd_data_personal_t_email',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_fixed . " AS 'lbl_pd_data_personal_t_phone_fixed',
					tc_pd_data_personal." . d_pd_data_personal_t_phone_movil . " AS 'lbl_pd_data_personal_t_phone_movil',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_birth_place." . d_pd_birth_place_t_name . " AS 'lbl_pd_birth_place_t_name',
					tc_pd_civil_status." . d_pd_civil_status_t_name . " AS 'lbl_pd_civil_status_t_name',
					tc_pd_document_type." . d_pd_document_type_t_name . " AS 'lbl_pd_document_type_t_name',
					tc_pd_eps." . d_pd_eps_t_name . " AS 'lbl_pd_eps_t_name',
					tc_pd_level_study." . d_pd_level_study_t_name . " AS 'lbl_pd_level_study_t_name',
					tc_pd_neighborhood." . d_pd_neighborhood_t_name . " AS 'lbl_pd_neighborhood_t_name',
					tc_pd_pension." . d_pd_pension_t_name . " AS 'lbl_pd_pension_t_name'
				FROM " . t_pd_data_personal . " tc_pd_data_personal
				INNER JOIN " . t_pd_birth_place . " tc_pd_birth_place
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_birth_place . " = tc_pd_birth_place." . d_pd_birth_place_id_pd_birth_place . "
				INNER JOIN " . t_pd_civil_status . " tc_pd_civil_status
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_civil_status . " = tc_pd_civil_status." . d_pd_civil_status_id_pd_civil_status . "
				INNER JOIN " . t_pd_document_type . " tc_pd_document_type
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_document_type . " = tc_pd_document_type." . d_pd_document_type_id_pd_document_type . "
				INNER JOIN " . t_pd_eps . " tc_pd_eps
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_eps . " = tc_pd_eps." . d_pd_eps_id_pd_eps . "
				INNER JOIN " . t_pd_level_study . " tc_pd_level_study
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_level_study . " = tc_pd_level_study." . d_pd_level_study_id_pd_level_study . "
				INNER JOIN " . t_pd_neighborhood . " tc_pd_neighborhood
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_neighborhood . " = tc_pd_neighborhood." . d_pd_neighborhood_id_pd_neighborhood . "
				INNER JOIN " . t_pd_pension . " tc_pd_pension
					ON tc_pd_data_personal." . d_pd_data_personal_v_id_pd_pension . " = tc_pd_pension." . d_pd_pension_id_pd_pension . "
				WHERE tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . " = '" . $data['field_id'] . "'
				LIMIT 1
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_pd_exchange_data_personal_m_by_created => $_SESSION[SESS_APP_ID],
						d_pd_exchange_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
						d_pd_exchange_data_personal_m_date_created => date("Y-m-d H:i:s"),
						d_pd_exchange_data_personal_m_date_modified => date("Y-m-d H:i:s"),
						d_pd_exchange_data_personal_m_deleted => $key_sql_select['lbl_pd_data_personal_m_deleted'],
						d_pd_exchange_data_personal_m_description => $key_sql_select['lbl_pd_data_personal_m_description'],
						d_pd_exchange_data_personal_m_level => $key_sql_select['lbl_pd_data_personal_m_level'],
						d_pd_exchange_data_personal_m_status => $key_sql_select['lbl_pd_data_personal_m_status'],
						d_pd_exchange_data_personal_m_temp => $key_sql_select['lbl_pd_data_personal_m_temp'],
						d_pd_exchange_data_personal_t_address => $key_sql_select['lbl_pd_data_personal_t_address'],
						d_pd_exchange_data_personal_t_birth_date => $key_sql_select['lbl_pd_data_personal_t_birth_date'],
						d_pd_exchange_data_personal_t_email => $key_sql_select['lbl_pd_data_personal_t_email'],
						d_pd_exchange_data_personal_t_identification => $key_sql_select['lbl_pd_data_personal_t_identification'],
						d_pd_exchange_data_personal_t_names => $key_sql_select['lbl_pd_data_personal_t_names'],
						d_pd_exchange_data_personal_t_phone_fixed => $key_sql_select['lbl_pd_data_personal_t_phone_fixed'],
						d_pd_exchange_data_personal_t_phone_movil => $key_sql_select['lbl_pd_data_personal_t_phone_movil'],
						d_pd_exchange_data_personal_t_surnames => $key_sql_select['lbl_pd_data_personal_t_surnames'],
						d_pd_exchange_data_personal_u_pd_birth_place_t_name => $key_sql_select['lbl_pd_birth_place_t_name'],
						d_pd_exchange_data_personal_u_pd_civil_status_t_name => $key_sql_select['lbl_pd_civil_status_t_name'],
						d_pd_exchange_data_personal_u_pd_document_type_t_name => $key_sql_select['lbl_pd_document_type_t_name'],
						d_pd_exchange_data_personal_u_pd_eps_t_name => $key_sql_select['lbl_pd_eps_t_name'],
						d_pd_exchange_data_personal_u_pd_level_study_t_name => $key_sql_select['lbl_pd_level_study_t_name'],
						d_pd_exchange_data_personal_u_pd_neighborhood_t_name => $key_sql_select['lbl_pd_neighborhood_t_name'],
						d_pd_exchange_data_personal_u_pd_pension_t_name => $key_sql_select['lbl_pd_pension_t_name'],
						d_pd_exchange_data_personal_v_id_pd_data_personal => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_pd_exchange_data_personal, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_pd_data_personal_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_data_personal_m_date_modified => date("Y-m-d H:i:s"),
				#d_pd_data_personal_m_description => $data['field_description'],
				d_pd_data_personal_m_status => $data['field_state'],
				d_pd_data_personal_t_address => $data['field_address'],
				d_pd_data_personal_t_birth_date => $data['field_birth_date'],
				d_pd_data_personal_t_email => $data['field_email'],
				d_pd_data_personal_t_names => $data['field_names'],
				d_pd_data_personal_t_phone_fixed => $data['field_phone_fixed'],
				d_pd_data_personal_t_phone_movil => $data['field_phone_movil'],
				d_pd_data_personal_t_surnames => $data['field_surnames'],
				d_pd_data_personal_v_id_pd_birth_place => $data['field_birth_place'],
				d_pd_data_personal_v_id_pd_civil_status => $data['field_civil_status'],
				d_pd_data_personal_v_id_pd_document_type => $data['field_document_type'],
				d_pd_data_personal_v_id_pd_eps => $data['field_eps'],
				d_pd_data_personal_v_id_pd_level_study => $data['field_level_study'],
				d_pd_data_personal_v_id_pd_neighborhood => $data['field_neighborhood'],
				d_pd_data_personal_v_id_pd_pension => $data['field_pension']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_pd_data_personal, $var_array, d_pd_data_personal_id_pd_data_personal . " = '" . $data['field_id'] . "'");

			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_inner = array(
				d_pd_data_business_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_data_business_m_date_modified => date("Y-m-d H:i:s"),
				#d_pd_data_business_m_description => $data['field_description'],
				#d_pd_data_business_m_level => $data[''],
				d_pd_data_business_m_status => $data['field_state'],
				#d_pd_data_business_m_temp => $data[''],
				d_pd_data_business_t_data_personal => $data['field_data_personal'],
				d_pd_data_business_t_date_admission => $data['field_date_admission'],
				d_pd_data_business_t_date_contract_termination => $data['field_date_contract_termination'],
				d_pd_data_business_t_value_bonus => $data['field_value_bonus'],
				d_pd_data_business_v_id_pd_base_salary => $data['field_base_salary'],
				d_pd_data_business_v_id_pd_campaign => $data['field_campaign'],
				d_pd_data_business_v_id_pd_contract_type => $data['field_contract_type'],
				#d_pd_data_business_v_id_pd_data_personal => $data['field_data_personal'],
				d_pd_data_business_v_id_pd_employee_charge => $data['field_employee_charge'],
				d_pd_data_business_v_id_pd_transport_assistance => $data['field_transport_assistance']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_pd_data_business, $var_inner, d_pd_data_business_v_id_pd_data_personal . " = '" . $data['field_id'] . "'");

			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_base_salary() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_base_salary, d_pd_base_salary_m_deleted . " = '1'");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_birth_place() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_birth_place, d_pd_birth_place_m_deleted . " = '1' ORDER BY " . d_pd_birth_place_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_campaign() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_campaign, d_pd_campaign_m_deleted . " = '1' ORDER BY " . d_pd_campaign_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_civil_status() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_civil_status, d_pd_civil_status_m_deleted . " = '1' ORDER BY " . d_pd_civil_status_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_contract_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_contract_type, d_pd_contract_type_m_deleted . " = '1' ORDER BY " . d_pd_contract_type_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_data_personal() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_data_personal, d_pd_data_personal_m_deleted . " = '1' ORDER BY " . d_pd_data_personal_t_names . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_document_type() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_document_type, d_pd_document_type_m_deleted . " = '1' ORDER BY " . d_pd_document_type_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_employee_charge() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_employee_charge, d_pd_employee_charge_m_deleted . " = '1' ORDER BY " . d_pd_employee_charge_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_eps() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_eps, d_pd_eps_m_deleted . " = '1' ORDER BY " . d_pd_eps_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_level_study() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_level_study, d_pd_level_study_m_deleted . " = '1' ORDER BY " . d_pd_level_study_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_neighborhood() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_neighborhood, d_pd_neighborhood_m_deleted . " = '1' ORDER BY " . d_pd_neighborhood_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_pension() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_pension, d_pd_pension_m_deleted . " = '1' ORDER BY " . d_pd_pension_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_transport_assistance() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_transport_assistance, d_pd_transport_assistance_m_deleted . " = '1'");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>