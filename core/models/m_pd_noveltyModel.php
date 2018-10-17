<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_pd_noveltyModel extends Models implements OCREND {
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
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_date_modified . " AS 'lbl_pd_exchange_novelty_m_date_modified',
					tc_az_user_created." . d_az_user_t_login . " AS 'lbl_az_user_t_login_created',
					tc_az_user_modified." . d_az_user_t_login . " AS 'lbl_az_user_t_login_modified',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_date_created . " AS 'lbl_pd_exchange_novelty_m_date_created',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_date_modified . " AS 'lbl_pd_exchange_novelty_m_date_modified',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_description . " AS 'lbl_pd_exchange_novelty_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_id_pd_exchange_novelty . " AS 'lbl_pd_exchange_novelty_id_pd_exchange_novelty',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_t_date_start . " AS 'lbl_pd_exchange_novelty_t_date_start',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_t_date_final . " AS 'lbl_pd_exchange_novelty_t_date_final',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_u_pd_category_novelty_t_name . " AS 'lbl_pd_exchange_novelty_u_pd_category_novelty_t_name',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_u_pd_data_personal_t_identification . " AS 'lbl_pd_exchange_novelty_u_pd_data_personal_t_identification',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_u_pd_type_accrued_t_name . " AS 'lbl_pd_exchange_novelty_u_pd_type_accrued_t_name',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_u_pd_worked_days_t_name . " AS 'lbl_pd_exchange_novelty_u_pd_worked_days_t_name',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_u_pd_worked_period_t_name . " AS 'lbl_pd_exchange_novelty_u_pd_worked_period_t_name',
					tc_pd_exchange_novelty." . d_pd_exchange_novelty_v_id_pd_novelty . " AS 'lbl_pd_exchange_novelty_v_id_pd_novelty'
				FROM " . t_pd_exchange_novelty . " tc_pd_exchange_novelty
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_exchange_novelty." . d_pd_exchange_novelty_v_id_pd_novelty . " = '" . $this->id . "'
				ORDER BY tc_pd_exchange_novelty." . d_pd_exchange_novelty_m_date_modified . " DESC
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
					tc_pd_novelty." . d_pd_novelty_m_date_created . " AS 'lbl_pd_novelty_m_date_created',
					tc_pd_novelty." . d_pd_novelty_m_date_modified . " AS 'lbl_pd_novelty_m_date_modified',
					tc_pd_novelty." . d_pd_novelty_m_description . " AS 'lbl_pd_novelty_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " AS 'lbl_pd_novelty_id_pd_novelty',
					tc_pd_novelty." . d_pd_novelty_t_date_start . " AS 'lbl_pd_novelty_t_date_start',
					tc_pd_novelty." . d_pd_novelty_t_date_final . " AS 'lbl_pd_novelty_t_date_final',
					tc_pd_category_novelty." . d_pd_category_novelty_t_name . " AS 'lbl_pd_category_novelty_t_name',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_type_accrued." . d_pd_type_accrued_t_name . " AS 'lbl_pd_type_accrued_t_name',
					tc_pd_worked_days." . d_pd_worked_days_t_value . " AS 'lbl_pd_worked_days_t_value',
					tc_pd_worked_period." . d_pd_worked_period_t_name . " AS 'lbl_pd_worked_period_t_name'
				FROM " . t_pd_novelty . " tc_pd_novelty
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_novelty." . d_pd_novelty_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_novelty." . d_pd_novelty_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_novelty." . d_pd_novelty_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_novelty." . d_pd_novelty_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_category_novelty . " tc_pd_category_novelty
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_category_novelty . " = tc_pd_category_novelty." . d_pd_category_novelty_id_pd_category_novelty . "
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				INNER JOIN " . t_pd_type_accrued . " tc_pd_type_accrued
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_type_accrued . " = tc_pd_type_accrued." . d_pd_type_accrued_id_pd_type_accrued . "
				INNER JOIN " . t_pd_worked_days . " tc_pd_worked_days
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_days . " = tc_pd_worked_days." . d_pd_worked_days_id_pd_worked_days . "
				INNER JOIN " . t_pd_worked_period . " tc_pd_worked_period
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_period . " = tc_pd_worked_period." . d_pd_worked_period_id_pd_worked_period . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " = '" . $this->id . "'
				LIMIT 1
			");
			/*-----------------------------------------------------------------------------------------------------------------*/
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
					tc_pd_novelty." . d_pd_novelty_m_date_created . " AS 'lbl_pd_novelty_m_date_created',
					tc_pd_novelty." . d_pd_novelty_m_date_modified . " AS 'lbl_pd_novelty_m_date_modified',
					tc_pd_novelty." . d_pd_novelty_m_description . " AS 'lbl_pd_novelty_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " AS 'lbl_pd_novelty_id_pd_novelty',
					tc_pd_novelty." . d_pd_novelty_t_date_start . " AS 'lbl_pd_novelty_t_date_start',
					tc_pd_novelty." . d_pd_novelty_t_date_final . " AS 'lbl_pd_novelty_t_date_final',
					tc_pd_category_novelty." . d_pd_category_novelty_t_name . " AS 'lbl_pd_category_novelty_t_name',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_type_accrued." . d_pd_type_accrued_t_name . " AS 'lbl_pd_type_accrued_t_name',
					tc_pd_worked_days." . d_pd_worked_days_t_value . " AS 'lbl_pd_worked_days_t_value',
					tc_pd_worked_period." . d_pd_worked_period_t_name . " AS 'lbl_pd_worked_period_t_name'
				FROM " . t_pd_novelty . " tc_pd_novelty
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_novelty." . d_pd_novelty_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_novelty." . d_pd_novelty_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_novelty." . d_pd_novelty_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_novelty." . d_pd_novelty_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_category_novelty . " tc_pd_category_novelty
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_category_novelty . " = tc_pd_category_novelty." . d_pd_category_novelty_id_pd_category_novelty . "
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				INNER JOIN " . t_pd_type_accrued . " tc_pd_type_accrued
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_type_accrued . " = tc_pd_type_accrued." . d_pd_type_accrued_id_pd_type_accrued . "
				INNER JOIN " . t_pd_worked_days . " tc_pd_worked_days
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_days . " = tc_pd_worked_days." . d_pd_worked_days_id_pd_worked_days . "
				INNER JOIN " . t_pd_worked_period . " tc_pd_worked_period
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_period . " = tc_pd_worked_period." . d_pd_worked_period_id_pd_worked_period . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_novelty." . d_pd_novelty_m_deleted . " = '2'
				ORDER BY tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " ASC
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
					tc_pd_novelty." . d_pd_novelty_m_date_created . " AS 'lbl_pd_novelty_m_date_created',
					tc_pd_novelty." . d_pd_novelty_m_date_modified . " AS 'lbl_pd_novelty_m_date_modified',
					tc_pd_novelty." . d_pd_novelty_m_description . " AS 'lbl_pd_novelty_m_description',
					tc_az_level." . d_az_level_t_name . " AS 'lbl_az_level_t_name',
					tc_az_state." . d_az_state_t_name . " AS 'lbl_az_state_t_name',
				-- -----------------------------------------------------------------------------------------------------------------
					tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " AS 'lbl_pd_novelty_id_pd_novelty',
					tc_pd_novelty." . d_pd_novelty_t_date_start . " AS 'lbl_pd_novelty_t_date_start',
					tc_pd_novelty." . d_pd_novelty_t_date_final . " AS 'lbl_pd_novelty_t_date_final',
					tc_pd_category_novelty." . d_pd_category_novelty_t_name . " AS 'lbl_pd_category_novelty_t_name',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_data_personal." . d_pd_data_personal_t_names . " AS 'lbl_pd_data_personal_t_names',
					tc_pd_data_personal." . d_pd_data_personal_t_surnames . " AS 'lbl_pd_data_personal_t_surnames',
					tc_pd_type_accrued." . d_pd_type_accrued_t_name . " AS 'lbl_pd_type_accrued_t_name',
					tc_pd_worked_days." . d_pd_worked_days_t_value . " AS 'lbl_pd_worked_days_t_value',
					tc_pd_worked_period." . d_pd_worked_period_t_name . " AS 'lbl_pd_worked_period_t_name'
				FROM " . t_pd_novelty . " tc_pd_novelty
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_user . " tc_az_user_created
					ON tc_pd_novelty." . d_pd_novelty_m_by_created . " = tc_az_user_created." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_user . " tc_az_user_modified
					ON tc_pd_novelty." . d_pd_novelty_m_by_modified . " = tc_az_user_modified." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_level . " tc_az_level
					ON tc_pd_novelty." . d_pd_novelty_m_level . " = tc_az_level." . d_az_level_t_value . "
				INNER JOIN " . t_az_state . " tc_az_state
					ON tc_pd_novelty." . d_pd_novelty_m_status . " = tc_az_state." . d_az_state_t_value . "
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_pd_category_novelty . " tc_pd_category_novelty
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_category_novelty . " = tc_pd_category_novelty." . d_pd_category_novelty_id_pd_category_novelty . "
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				INNER JOIN " . t_pd_type_accrued . " tc_pd_type_accrued
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_type_accrued . " = tc_pd_type_accrued." . d_pd_type_accrued_id_pd_type_accrued . "
				INNER JOIN " . t_pd_worked_days . " tc_pd_worked_days
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_days . " = tc_pd_worked_days." . d_pd_worked_days_id_pd_worked_days . "
				INNER JOIN " . t_pd_worked_period . " tc_pd_worked_period
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_period . " = tc_pd_worked_period." . d_pd_worked_period_id_pd_worked_period . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_pd_novelty." . d_pd_novelty_m_deleted . " = '1'
				ORDER BY tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_update() : array {
			/*-----------------------------------------------------------------------------------------------------------------*/
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_pd_novelty . "
				WHERE " . d_pd_novelty_id_pd_novelty . " = '" . $this->id . "'
					AND " . d_pd_novelty_m_deleted . " = '1'
				LIMIT 1
			");
			/*-----------------------------------------------------------------------------------------------------------------*/
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
		final private function error_sql_insert_all_pd_novelty(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
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
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_category_novelty']) || $data['field_category_novelty'] == 0) {
					throw new Exception('<b>Error:</b> El campo de categoria de novedad es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_category_novelty'])) {
					throw new Exception('<b>Error:</b> El campo de categoria de novedad solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_category_novelty = $this->db->scape($data['field_category_novelty']);
				# Verificar en la base de datos si existen el registro
				$sql_e_category_novelty = $this->db->select('*', t_pd_category_novelty, d_pd_category_novelty_id_pd_category_novelty . " = '" . $empty_category_novelty . "'");
				if (true != $sql_e_category_novelty || false == $sql_e_category_novelty) {
					if (strtolower($sql_e_category_novelty[0][0]) != strtolower($empty_category_novelty)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Func::emp($data['field_type_accrued']) || $data['field_type_accrued'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo de devengado es oblgitario.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_type_accrued'])) {
					throw new Exception('<b>Error:</b> El campo de tipo de devengado solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_type_accrued = $this->db->scape($data['field_type_accrued']);
				# Verificar en la base de datos si existen el registro
				$sql_e_type_accrued = $this->db->select('*', t_pd_type_accrued, d_pd_type_accrued_id_pd_type_accrued . " = '" . $empty_type_accrued . "'");
				if (true != $sql_e_type_accrued || false == $sql_e_type_accrued) {
					if (strtolower($sql_e_type_accrued[0][0]) != strtolower($empty_type_accrued)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_worked_days']) || $data['field_worked_days'] == 0) {
					throw new Exception('<b>Error:</b> El campo de dias trabajado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_worked_days'])) {
					throw new Exception('<b>Error:</b> El campo de dias trabajado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_worked_days = $this->db->scape($data['field_worked_days']);
				# Verificar en la base de datos si existen el registro
				$sql_e_worked_days = $this->db->select('*', t_pd_worked_days, d_pd_worked_days_id_pd_worked_days . " = '" . $empty_worked_days . "'");
				if (true != $sql_e_worked_days || false == $sql_e_worked_days) {
					if (strtolower($sql_e_worked_days[0][0]) != strtolower($empty_worked_days)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_worked_period']) || $data['field_worked_period'] == 0) {
					throw new Exception('<b>Error:</b> El campo de periodo trabajado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_worked_period'])) {
					throw new Exception('<b>Error:</b> El campo de periodo trabajado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_worked_period = $this->db->scape($data['field_worked_period']);
				# Verificar en la base de datos si existen el registro
				$sql_e_worked_period = $this->db->select('*', t_pd_worked_period, d_pd_worked_period_id_pd_worked_period . " = '" . $empty_worked_period . "'");
				if (true != $sql_e_worked_period || false == $sql_e_worked_period) {
					if (strtolower($sql_e_worked_period[0][0]) != strtolower($empty_worked_period)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_name = $this->db->scape($data['field_name']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_pd_novelty, d_pd_novelty_t_name . " = '" . $empty_name . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_name)) {
						throw new Exception('<b>Error:</b> El nombre digitado ya existe.');
					}
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_insert_all_pd_novelty(array $data) : array {
			$var_error = $this->error_sql_insert_all_pd_novelty($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}

			$var_insert = array(
				# d_pd_novelty_id_pd_novelty => $data['field_id'],
				d_pd_novelty_m_by_created => $_SESSION[SESS_APP_ID],
				d_pd_novelty_m_by_modified => $_SESSION[SESS_APP_ID],
				d_pd_novelty_m_date_created => date("Y-m-d H:i:s"),
				d_pd_novelty_m_date_modified => date("Y-m-d H:i:s"),
				d_pd_novelty_m_deleted => '1',
				d_pd_novelty_m_description => $data['field_description'],
				d_pd_novelty_m_level => '1',
				d_pd_novelty_m_status => '1',
				d_pd_novelty_m_temp => '1',
				d_pd_novelty_t_date_start => $data['field_date_start'],
				d_pd_novelty_t_date_final => date('Y-m-d', strtotime($data['field_date_start'] . '+ ' . $data['field_worked_days'] . ' days')),
				d_pd_novelty_v_id_pd_category_novelty => $data['field_category_novelty'],
				d_pd_novelty_v_id_pd_data_personal => $data['field_data_personal'],
				d_pd_novelty_v_id_pd_type_accrued => '1',
				d_pd_novelty_v_id_pd_worked_days => $data['field_worked_days'],
				d_pd_novelty_v_id_pd_worked_period => $data['field_worked_period']
			);
			$this->db->insert(t_pd_novelty, $var_insert);
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_pd_novelty(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if ($data['field_id'] == 0 && !is_numeric($data['field_id'])) {
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_id = $this->db->scape($data['field_id']);
				# Verificar en la base de datos si existen el registro
				$sql_e_id = $this->db->select('*', t_pd_novelty, d_pd_novelty_id_pd_novelty . " = '" . $empty_id . "'");
				if (true != $sql_e_id || false == $sql_e_id) {
					if (strtolower($sql_e_id[0][0]) != strtolower($empty_id)) {
						throw new Exception('<b>Error:</b> El registro que intenta actualizar no se encuentra.');
					}
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
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_category_novelty']) || $data['field_category_novelty'] == 0) {
					throw new Exception('<b>Error:</b> El campo de categoria de novedad es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_category_novelty'])) {
					throw new Exception('<b>Error:</b> El campo de categoria de novedad solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_category_novelty = $this->db->scape($data['field_category_novelty']);
				# Verificar en la base de datos si existen el registro
				$sql_e_category_novelty = $this->db->select('*', t_pd_category_novelty, d_pd_category_novelty_id_pd_category_novelty . " = '" . $empty_category_novelty . "'");
				if (true != $sql_e_category_novelty || false == $sql_e_category_novelty) {
					if (strtolower($sql_e_category_novelty[0][0]) != strtolower($empty_category_novelty)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Func::emp($data['field_type_accrued']) || $data['field_type_accrued'] == 0) {
					throw new Exception('<b>Error:</b> El campo de tipo de devengado es oblgitario.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_type_accrued'])) {
					throw new Exception('<b>Error:</b> El campo de tipo de devengado solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_type_accrued = $this->db->scape($data['field_type_accrued']);
				# Verificar en la base de datos si existen el registro
				$sql_e_type_accrued = $this->db->select('*', t_pd_type_accrued, d_pd_type_accrued_id_pd_type_accrued . " = '" . $empty_type_accrued . "'");
				if (true != $sql_e_type_accrued || false == $sql_e_type_accrued) {
					if (strtolower($sql_e_type_accrued[0][0]) != strtolower($empty_type_accrued)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_worked_days']) || $data['field_worked_days'] == 0) {
					throw new Exception('<b>Error:</b> El campo de dias trabajado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_worked_days'])) {
					throw new Exception('<b>Error:</b> El campo de dias trabajado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_worked_days = $this->db->scape($data['field_worked_days']);
				# Verificar en la base de datos si existen el registro
				$sql_e_worked_days = $this->db->select('*', t_pd_worked_days, d_pd_worked_days_id_pd_worked_days . " = '" . $empty_worked_days . "'");
				if (true != $sql_e_worked_days || false == $sql_e_worked_days) {
					if (strtolower($sql_e_worked_days[0][0]) != strtolower($empty_worked_days)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_worked_period']) || $data['field_worked_period'] == 0) {
					throw new Exception('<b>Error:</b> El campo de periodo trabajado es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_worked_period'])) {
					throw new Exception('<b>Error:</b> El campo de periodo trabajado solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_worked_period = $this->db->scape($data['field_worked_period']);
				# Verificar en la base de datos si existen el registro
				$sql_e_worked_period = $this->db->select('*', t_pd_worked_period, d_pd_worked_period_id_pd_worked_period . " = '" . $empty_worked_period . "'");
				if (true != $sql_e_worked_period || false == $sql_e_worked_period) {
					if (strtolower($sql_e_worked_period[0][0]) != strtolower($empty_worked_period)) {
						throw new Exception('<b>Error:</b> El auxilio de transporte seleccionado no se encuentra registrado.');
					}
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
				$empty_state = $this->db->scape($data['field_state']);
				# Verificar en la base de datos si existen el registro
				$sql_e_state = $this->db->select('*', t_az_state, d_az_state_id_az_state . " = '" . $empty_state . "'");
				if (true != $sql_e_state || false == $sql_e_state) {
					if (strtolower($sql_e_state[0][0]) != strtolower($empty_state)) {
						throw new Exception('<b>Error:</b> El estado seleccionado no se encuentra registrado.');
					}
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_name = $this->db->scape($data['field_name']);
				# Verificar si los resultados seleccionados mas de uno no existen en algun registro anterior
				$sql_s_1 = $this->db->select('*', t_pd_novelty, d_pd_novelty_id_pd_novelty . " != '" . $empty_id . "' AND " . d_pd_novelty_t_name . " = '" . $empty_name . "'");
				if (true == $sql_s_1) {
					if (strtolower($sql_s_1[0][0]) != strtolower($empty_id) && strtolower($sql_s_1[0][0]) != strtolower($empty_name)) {
						throw new Exception('<b>Error:</b> El nombre digitado ya existe.');
					}
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_update_all_pd_novelty(array $data) : array {
			$var_error = $this->error_sql_update_all_pd_novelty($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_pd_novelty, d_pd_novelty_id_pd_novelty . " = '" . $data['field_id'] . "'");

			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_pd_novelty." . d_pd_novelty_m_deleted . " AS 'lbl_pd_novelty_m_deleted',
					tc_pd_novelty." . d_pd_novelty_m_description . " AS 'lbl_pd_novelty_m_description',
					tc_pd_novelty." . d_pd_novelty_m_level . " AS 'lbl_pd_novelty_m_level',
					tc_pd_novelty." . d_pd_novelty_m_status . " AS 'lbl_pd_novelty_m_status',
					tc_pd_novelty." . d_pd_novelty_m_temp . " AS 'lbl_pd_novelty_m_temp',
					tc_pd_novelty." . d_pd_novelty_t_date_start . " AS 'lbl_pd_novelty_t_date_start',
					tc_pd_novelty." . d_pd_novelty_t_date_final . " AS 'lbl_pd_novelty_t_date_final',
					tc_pd_category_novelty." . d_pd_category_novelty_t_name . " AS 'lbl_pd_category_novelty_t_name',
					tc_pd_data_personal." . d_pd_data_personal_t_identification . " AS 'lbl_pd_data_personal_t_identification',
					tc_pd_type_accrued." . d_pd_type_accrued_t_name . " AS 'lbl_pd_type_accrued_t_name',
					tc_pd_worked_days." . d_pd_worked_days_t_value . " AS 'lbl_pd_worked_days_t_value',
					tc_pd_worked_period." . d_pd_worked_period_t_name . " AS 'lbl_pd_worked_period_t_name'
				FROM " . t_pd_novelty . " tc_pd_novelty
				INNER JOIN " . t_pd_category_novelty . " tc_pd_category_novelty
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_category_novelty . " = tc_pd_category_novelty." . d_pd_category_novelty_id_pd_category_novelty . "
				INNER JOIN " . t_pd_data_personal . " tc_pd_data_personal
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_data_personal . " = tc_pd_data_personal." . d_pd_data_personal_id_pd_data_personal . "
				INNER JOIN " . t_pd_type_accrued . " tc_pd_type_accrued
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_type_accrued . " = tc_pd_type_accrued." . d_pd_type_accrued_id_pd_type_accrued . "
				INNER JOIN " . t_pd_worked_days . " tc_pd_worked_days
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_days . " = tc_pd_worked_days." . d_pd_worked_days_id_pd_worked_days . "
				INNER JOIN " . t_pd_worked_period . " tc_pd_worked_period
					ON tc_pd_novelty." . d_pd_novelty_v_id_pd_worked_period . " = tc_pd_worked_period." . d_pd_worked_period_id_pd_worked_period . "
				WHERE tc_pd_novelty." . d_pd_novelty_id_pd_novelty . " = '" . $data['field_id'] . "'
				LIMIT 1
			");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						# d_pd_exchange_novelty_id_pd_exchange_novelty => $data['field_id'],
						d_pd_exchange_novelty_m_by_created => $_SESSION[SESS_APP_ID],
						d_pd_exchange_novelty_m_by_modified => $_SESSION[SESS_APP_ID],
						d_pd_exchange_novelty_m_date_created => date("Y-m-d H:i:s"),
						d_pd_exchange_novelty_m_date_modified => date("Y-m-d H:i:s"),
						d_pd_exchange_novelty_m_deleted => $key_sql_select['lbl_pd_novelty_m_deleted'],
						d_pd_exchange_novelty_m_description => $key_sql_select['lbl_pd_novelty_m_description'],
						d_pd_exchange_novelty_m_level => $key_sql_select['lbl_pd_novelty_m_level'],
						d_pd_exchange_novelty_m_status => $key_sql_select['lbl_pd_novelty_m_status'],
						d_pd_exchange_novelty_m_temp => $key_sql_select['lbl_pd_novelty_m_temp'],
						d_pd_exchange_novelty_t_date_start => $key_sql_select['lbl_pd_novelty_t_date_start'],
						d_pd_exchange_novelty_t_date_final => $key_sql_select['lbl_pd_novelty_t_date_final'],
						d_pd_exchange_novelty_u_pd_category_novelty_t_name => $key_sql_select['lbl_pd_category_novelty_t_name'],
						d_pd_exchange_novelty_u_pd_data_personal_t_identification => $key_sql_select['lbl_pd_data_personal_t_identification'],
						d_pd_exchange_novelty_u_pd_type_accrued_t_name => $key_sql_select['lbl_pd_type_accrued_t_name'],
						d_pd_exchange_novelty_u_pd_worked_days_t_name => $key_sql_select['lbl_pd_worked_days_t_value'],
						d_pd_exchange_novelty_u_pd_worked_period_t_name => $key_sql_select['lbl_pd_worked_period_t_name'],
						d_pd_exchange_novelty_v_id_pd_novelty => $data['field_id']
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_pd_exchange_novelty, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				# d_pd_novelty_id_pd_novelty => $data['field_id'],
				# d_pd_novelty_m_by_created => $_SESSION[SESS_APP_ID],
				d_pd_novelty_m_by_modified => $_SESSION[SESS_APP_ID],
				# d_pd_novelty_m_date_created => date("Y-m-d H:i:s"),
				d_pd_novelty_m_date_modified => date("Y-m-d H:i:s"),
				# d_pd_novelty_m_deleted => '1',
				d_pd_novelty_m_description => $data['field_description'],
				# d_pd_novelty_m_level => '1',
				d_pd_novelty_m_status => $data['field_state'],
				# d_pd_novelty_m_temp => '1',
				d_pd_novelty_t_date_start => $data['field_date_start'],
				d_pd_novelty_t_date_final => date('Y-m-d', strtotime($data['field_date_start'] . '+ ' . $data['field_worked_days'] . ' days')),
				d_pd_novelty_v_id_pd_category_novelty => $data['field_category_novelty'],
				d_pd_novelty_v_id_pd_data_personal => $data['field_data_personal'],
				#d_pd_novelty_v_id_pd_type_accrued => $data['field_type_accrued'],
				d_pd_novelty_v_id_pd_worked_days => $data['field_worked_days'],
				d_pd_novelty_v_id_pd_worked_period => $data['field_worked_period']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_pd_novelty, $var_array, d_pd_novelty_id_pd_novelty . " = '" . $data['field_id'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_category_novelty() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_category_novelty, d_pd_category_novelty_m_deleted . " = '1' ORDER BY " . d_pd_category_novelty_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_data_personal() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_data_personal, d_pd_data_personal_m_deleted . " = '1' AND " . d_pd_data_personal_m_status . " = '1' ORDER BY " . d_pd_data_personal_t_surnames . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_type_accrued() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_type_accrued, d_pd_type_accrued_m_deleted . " = '1' ORDER BY " . d_pd_type_accrued_t_name . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_worked_days() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_worked_days, d_pd_worked_days_m_deleted . " = '1' ORDER BY " . d_pd_worked_days_t_value . " ASC");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_worked_period() {
			# Seleccionar los registros de la tabla
			return $this->db->select('*', t_pd_worked_period, d_pd_worked_period_m_deleted . " = '1' AND " . d_pd_worked_period_m_status . " = '1' ORDER BY " . d_pd_worked_period_t_name . " ASC");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>