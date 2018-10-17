<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_pd_itau_vigenteModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(db_bd_pd_itau_vigente, DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_users() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_itau_v_users . "
				WHERE " . d_itau_v_users_id . " = '" . $_GET['field_session'] . "'
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
		final public function sql_controller_definition() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					DISTINCT tc_pd_management_tree." . d_pd_management_tree_v_id_pd_type_definition . ",
					tc_pd_type_definition." . d_pd_type_definition_id_pd_type_definition . " AS 'lbl_pd_type_definition_id_pd_type_definition',
					tc_pd_type_definition." . d_pd_type_definition_t_name . " AS 'lbl_pd_type_definition_t_name'
				FROM " . t_pd_management_tree . " tc_pd_management_tree
				INNER JOIN " . t_pd_type_definition . " tc_pd_type_definition
					ON tc_pd_management_tree." . d_pd_management_tree_v_id_pd_type_definition . " = tc_pd_type_definition." . d_pd_type_definition_id_pd_type_definition . "
				WHERE tc_pd_management_tree." . d_pd_management_tree_v_id_pd_campaign . " = '2'
				ORDER BY tc_pd_type_definition." . d_pd_type_definition_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_management() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_itau_v_he01_t_v . "
				WHERE " . d_itau_v_he01_t_v_numeroid . " = '" . $_GET['field_identification'] . "'
				ORDER BY " . d_itau_v_he01_t_v_fecha . " DESC,
					" . d_itau_v_he01_t_v_hora . " DESC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_controller_product() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_itau_v_he01_p_d_v . "
				WHERE " . d_itau_v_he01_p_d_v_deleted . " = '0'
					AND " . d_itau_v_he01_p_d_v_numeroid . " = '" . $_GET['field_identification'] . "'
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select Get Id
		final public function sql_controller_product_single() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_itau_v_he01_p_d_v . "
				WHERE " . d_itau_v_he01_p_d_v_deleted . " = '0'
					AND " . d_itau_v_he01_p_d_v_numeroid . " = '" . $_GET['field_identification'] . "'
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
		final public function sql_controller_tipify() : array {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				SELECT * FROM " . t_itau_v_he01_d_d_v . "
				WHERE " . d_itau_v_he01_d_d_v_deleted . " = '0'
					AND " . d_itau_v_he01_d_d_v_numeroid . " = '" . $_GET['field_identification'] . "'
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
		final public function sql_report_management_all() {
			# Seleccionar los registros de la tabla
			if (isset($_GET['field_date_from']) != '' && isset($_GET['field_date_to']) != '') {
				return $this->db->query("
					SELECT * FROM " . t_itau_v_he01_t_v . "
					WHERE " . d_itau_v_he01_t_v_fecha . " >= '" . $_GET['field_date_from'] . "'
						AND " . d_itau_v_he01_t_v_fecha . " <= '" . $_GET['field_date_to'] . "'
					ORDER BY " . d_itau_v_he01_t_v_fecha . " ASC,
						" . d_itau_v_he01_t_v_hora . " ASC
				");
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_management_tree_definition() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT
					DISTINCT tc_pd_management_tree." . d_pd_management_tree_v_id_pd_type_definition . ",
					tc_pd_type_definition." . d_pd_type_definition_id_pd_type_definition . " AS 'lbl_pd_type_definition_id_pd_type_definition',
					tc_pd_type_definition." . d_pd_type_definition_t_name . " AS 'lbl_pd_type_definition_t_name'
				FROM " . t_pd_management_tree . " tc_pd_management_tree
				INNER JOIN " . t_pd_type_definition . " tc_pd_type_definition
					ON tc_pd_management_tree." . d_pd_management_tree_v_id_pd_type_definition . " = tc_pd_type_definition." . d_pd_type_definition_id_pd_type_definition . "
				WHERE tc_pd_management_tree." . d_pd_management_tree_v_id_pd_campaign . " = '2'
					AND tc_pd_type_definition." . d_pd_type_definition_id_pd_type_definition . " = '" . $_GET['field_definition'] . "'
				ORDER BY tc_pd_type_definition." . d_pd_type_definition_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_management_tree_reason() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_pd_management_tree . "
				WHERE " . d_pd_management_tree_m_deleted . " = '1'
					AND " . d_pd_management_tree_v_id_pd_campaign . " = '2'
					AND " . d_pd_management_tree_v_id_pd_type_definition . " = '" . $_GET['field_definition'] . "'
					AND " . d_pd_management_tree_v_id_pd_type_management . " = '3'
				ORDER BY " . d_pd_management_tree_t_name . " ASC
			");
			return array('success' => 1, 'message' => '<b>Exito:</b> Cargaste el contenido en tipificacion y motivo de no pago.');
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_tc_pd_management_tree_tipify() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				SELECT * FROM " . t_pd_management_tree . "
				WHERE " . d_pd_management_tree_m_deleted . " = '1'
					AND " . d_pd_management_tree_v_id_pd_campaign . " = '2'
					AND " . d_pd_management_tree_v_id_pd_type_definition . " = '" . $_GET['field_definition'] . "'
					AND " . d_pd_management_tree_v_id_pd_type_management . " = '2'
				ORDER BY " . d_pd_management_tree_t_name . " ASC
			");
			return array('success' => 1, 'message' => '<b>Exito:</b> Cargaste el contenido en tipificacion y motivo de no pago.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_pd_itau_vigente_novelty(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_novelty_identification']) || $data['field_novelty_identification'] == 0) {
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_novelty_identification'])) {
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::is_email($data['field_email_1'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico 1 tiene un formato invalido.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (Strings::is_email($data['field_email_2'])) {
					throw new Exception('<b>Error:</b> El campo de correo electronico 2 tiene un formato invalido.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_phone_fixed_1'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_phone_fixed_2'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_phone_fixed_3'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 3 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_phone_fixed_4'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 4 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_family_names_surnames_1'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 1 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_fixed_1'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_movil_1'])) {
					throw new Exception('<b>Error:</b> El campo de celular 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_family_names_surnames_2'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 2 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_fixed_2'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_movil_2'])) {
					throw new Exception('<b>Error:</b> El campo de celular 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_family_names_surnames_3'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 3 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_fixed_3'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 3 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_family_phone_movil_3'])) {
					throw new Exception('<b>Error:</b> El campo de celular 3 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_personal_names_surnames_1'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 1 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_personal_phone_fixed_1'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_personal_phone_movil_1'])) {
					throw new Exception('<b>Error:</b> El campo de celular 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_personal_names_surnames_2'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 2 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_personal_phone_fixed_2'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_personal_phone_movil_2'])) {
					throw new Exception('<b>Error:</b> El campo de celular 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_commercial_names_surnames_1'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 1 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_commercial_phone_fixed_1'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_commercial_phone_movil_1'])) {
					throw new Exception('<b>Error:</b> El campo de celular 1 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!Strings::only_letters($data['field_ref_commercial_names_surnames_2'])) {
					throw new Exception('<b>Error:</b> El campo de nombres 2 solo permite letras.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_commercial_phone_fixed_2'])) {
					throw new Exception('<b>Error:</b> El campo de telefono 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*if (!is_numeric($data['field_ref_commercial_phone_movil_2'])) {
					throw new Exception('<b>Error:</b> El campo de celular 2 solo permite numeros.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_update_all_pd_itau_vigente_novelty(array $data) : array {
			$var_error = $this->error_sql_update_all_pd_itau_vigente_novelty($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(
				d_itau_v_he01_d_d_v_direccion => $data['field_address_main'],
				d_itau_v_he01_d_d_v_direccion2 => $data['field_work_direction'],
				d_itau_v_he01_d_d_v_correo => $data['field_email_1'],
				d_itau_v_he01_d_d_v_correo2 => $data['field_email_2'],
				d_itau_v_he01_d_d_v_telefono => $data['field_phone_fixed_1'],
				d_itau_v_he01_d_d_v_telefono2 => $data['field_phone_fixed_2'],
				d_itau_v_he01_d_d_v_telefono3 => $data['field_phone_fixed_3'],
				d_itau_v_he01_d_d_v_celular => $data['field_phone_fixed_4'],
				d_itau_v_he01_d_d_v_nom_ref_fam1 => $data['field_ref_family_names_surnames_1'],
				d_itau_v_he01_d_d_v_dir_ref_fam1 => $data['field_ref_family_address_1'],
				d_itau_v_he01_d_d_v_tel_ref_fam1 => $data['field_ref_family_phone_fixed_1'],
				d_itau_v_he01_d_d_v_cel_ref_fam1 => $data['field_ref_family_phone_movil_1'],
				d_itau_v_he01_d_d_v_nom_ref_fam2 => $data['field_ref_family_names_surnames_2'],
				d_itau_v_he01_d_d_v_dir_ref_fam2 => $data['field_ref_family_address_2'],
				d_itau_v_he01_d_d_v_tel_ref_fam2 => $data['field_ref_family_phone_fixed_2'],
				d_itau_v_he01_d_d_v_cel_ref_fam2 => $data['field_ref_family_phone_movil_2'],
				d_itau_v_he01_d_d_v_nom_ref_fam3 => $data['field_ref_family_names_surnames_3'],
				d_itau_v_he01_d_d_v_dir_ref_fam3 => $data['field_ref_family_address_3'],
				d_itau_v_he01_d_d_v_tel_ref_fam3 => $data['field_ref_family_phone_fixed_3'],
				d_itau_v_he01_d_d_v_cel_ref_fam3 => $data['field_ref_family_phone_movil_3'],
				d_itau_v_he01_d_d_v_nom_ref_per1 => $data['field_ref_personal_names_surnames_1'],
				d_itau_v_he01_d_d_v_dir_ref_per1 => $data['field_ref_personal_address_1'],
				d_itau_v_he01_d_d_v_tel_ref_per1 => $data['field_ref_personal_phone_fixed_1'],
				d_itau_v_he01_d_d_v_cel_ref_per1 => $data['field_ref_personal_phone_movil_1'],
				d_itau_v_he01_d_d_v_nom_ref_per2 => $data['field_ref_personal_names_surnames_2'],
				d_itau_v_he01_d_d_v_dir_ref_per2 => $data['field_ref_personal_address_2'],
				d_itau_v_he01_d_d_v_tel_ref_per2 => $data['field_ref_personal_phone_fixed_2'],
				d_itau_v_he01_d_d_v_cel_ref_per2 => $data['field_ref_personal_phone_movil_2'],
				d_itau_v_he01_d_d_v_nom_ref_com1 => $data['field_ref_commercial_names_surnames_1'],
				d_itau_v_he01_d_d_v_dir_ref_com1 => $data['field_ref_commercial_address_1'],
				d_itau_v_he01_d_d_v_tel_ref_com1 => $data['field_ref_commercial_phone_fixed_1'],
				d_itau_v_he01_d_d_v_cel_ref_com1 => $data['field_ref_commercial_phone_movil_1'],
				d_itau_v_he01_d_d_v_nom_ref_com2 => $data['field_ref_commercial_names_surnames_2'],
				d_itau_v_he01_d_d_v_dir_ref_com2 => $data['field_ref_commercial_address_2'],
				d_itau_v_he01_d_d_v_tel_ref_com2 => $data['field_ref_commercial_phone_fixed_2'],
				d_itau_v_he01_d_d_v_cel_ref_com2 => $data['field_ref_commercial_phone_movil_2']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_itau_v_he01_d_d_v, $var_array, d_itau_v_he01_d_d_v_numeroid . " = '" . $data['field_novelty_identification'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_create_all_pd_itau_vigente_proyection(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_projection_identification']) || $data['field_projection_identification'] == 0) {
					throw new Exception('<b>Error:</b> El campo de id es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_projection_identification'])) {
					throw new Exception('<b>Error:</b> El campo de id solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (($data['field_projection_last_payment_value'] != '' && $data['field_projection_pay_date'] == '')
					|| ($data['field_projection_last_payment_value'] == '' && $data['field_projection_pay_date'] != '')
				) {
					if (Func::emp($data['field_projection_last_payment_value'])) {
						throw new Exception('<b>Error:</b> El campo de valor de pago es oblgitario.');
					}
					if (!is_numeric($data['field_projection_last_payment_value'])) {
						throw new Exception('<b>Error:</b> El campo de valor de pago solo permite numeros.');
					}
					if (Func::emp($data['field_projection_pay_date']) || $data['field_projection_pay_date'] == 'aaaa-mm-dd') {
						throw new Exception('<b>Error:</b> El campo de fecha de pago es oblgitario.');
					}
					if ($data['field_projection_pay_date'] > date("Y-m-d")) {
						throw new Exception('<b>Error:</b> El campo de fecha de pago no puede ser mayor al actual.');
					}
				}
				if (Func::emp($data['field_projection_projection_value'])) {
					throw new Exception('<b>Error:</b> El campo de valor de proyeccion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_projection_projection_value'])) {
					throw new Exception('<b>Error:</b> El campo de valor de proyeccion solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_projection_date_projection']) || $data['field_projection_date_projection'] == 'aaaa-mm-dd') {
					throw new Exception('<b>Error:</b> El campo de fecha de proyeccion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if ($data['field_projection_date_projection'] < date("Y-m-d")) {
					throw new Exception('<b>Error:</b> El campo de fecha de proyeccion no puede ser menor al actual.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_create_all_pd_itau_vigente_proyection(array $data) : array {
			$var_error = $this->error_sql_create_all_pd_itau_vigente_proyection($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			if ($data['field_projection_last_payment_value'] != '' && ($data['field_projection_pay_date'] != '' || $data['field_projection_pay_date'] != 'aaaa-mm-dd')) {
				$var_array = array(
					d_itau_v_he01_p_p_v_nombre => $data['field_projection_name'],
					d_itau_v_he01_p_p_v_numeroid => $data['field_projection_identification'],
					d_itau_v_he01_p_p_v_codigocliente => $data['field_projection_client_code'],
					d_itau_v_he01_p_p_v_numeroproducto => $data['field_projection_number_product'],
					d_itau_v_he01_p_p_v_tipocartera => $data['field_projection_wallet_type'],
					d_itau_v_he01_p_p_v_fechapago => $data['field_projection_pay_date'],
					d_itau_v_he01_p_p_v_pago => str_replace(',','',$data['field_projection_last_payment_value']),
					d_itau_v_he01_p_p_v_fechaproyeccion => $data['field_projection_date_projection'],
					d_itau_v_he01_p_p_v_proyeccion => str_replace(',','',$data['field_projection_projection_value']),
					d_itau_v_he01_p_p_v_asesor => $data['field_projection_asesor'],
					d_itau_v_he01_p_p_v_idasesor => $data['field_projection_asesor'],
					d_itau_v_he01_p_p_v_saldo_capital => str_replace(',','',$data['field_projection_capital_balance']),
					d_itau_v_he01_p_p_v_fecha => date("Y-m-d"),
					d_itau_v_he01_p_p_v_hora => date("H:i:s")
				);
				# Valores y campos para actualizar con valores recibidos por POST y Ajax
				$var_update = array(
					d_itau_v_he01_d_d_v_pago => str_replace(',','',$data['field_projection_last_payment_value']),
					d_itau_v_he01_d_d_v_fechapago => $data['field_projection_pay_date'],
					d_itau_v_he01_d_d_v_proyeccion => str_replace(',','',$data['field_projection_projection_value']),
					d_itau_v_he01_d_d_v_fechaproyeccion => $data['field_projection_date_projection']
				);
			} else {
				$var_array = array(
					d_itau_v_he01_p_p_v_nombre => $data['field_projection_name'],
					d_itau_v_he01_p_p_v_numeroid => $data['field_projection_identification'],
					d_itau_v_he01_p_p_v_codigocliente => $data['field_projection_client_code'],
					d_itau_v_he01_p_p_v_numeroproducto => $data['field_projection_number_product'],
					d_itau_v_he01_p_p_v_tipocartera => $data['field_projection_wallet_type'],
					d_itau_v_he01_p_p_v_fechaproyeccion => $data['field_projection_date_projection'],
					d_itau_v_he01_p_p_v_proyeccion => str_replace(',','',$data['field_projection_projection_value']),
					d_itau_v_he01_p_p_v_asesor => $data['field_projection_asesor'],
					d_itau_v_he01_p_p_v_idasesor => $data['field_projection_asesor'],
					d_itau_v_he01_p_p_v_saldo_capital => str_replace(',','',$data['field_projection_capital_balance']),
					d_itau_v_he01_p_p_v_fecha => date("Y-m-d"),
					d_itau_v_he01_p_p_v_hora => date("H:i:s")
				);
				# Valores y campos para actualizar con valores recibidos por POST y Ajax
				$var_update = array(
					d_itau_v_he01_d_d_v_proyeccion => str_replace(',','',$data['field_projection_projection_value']),
					d_itau_v_he01_d_d_v_fechaproyeccion => $data['field_projection_date_projection']
				);
			}
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_itau_v_he01_d_d_v, $var_update, d_itau_v_he01_d_d_v_numeroid . " = '" . $data['field_projection_identification'] . "'");
			# Query Sql Insert: Insertar datos en la tabla con sus campos respectivos y con incrementacion de id
			$this->db->insert(t_itau_v_he01_p_p_v, $var_array);
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_create_all_pd_itau_vigente_tipify(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (isset($_SESSION['pe_time']) and end($_SESSION['pe_time']) >= time()) {
					throw new Exception('No puedes realizar tantas acciones seguidas.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_tipify_value'])) {
					throw new Exception('<b>Error:</b> El campo de tipificacion es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_tipify_reason_for_non_payment'])) {
					throw new Exception('<b>Error:</b> El campo de motivo de no pago es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_tipify_tracing'])) {
					throw new Exception('<b>Error:</b> El campo de seguimiento es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_tipify_phone'])) {
					throw new Exception('<b>Error:</b> El campo de telefono es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (!is_numeric($data['field_tipify_phone'])) {
					throw new Exception('<b>Error:</b> El campo de telefono solo permite numeros.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_tipify_detail'])) {
					throw new Exception('<b>Error:</b> El campo de detalle es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Insert
		final public function sql_create_all_pd_itau_vigente_tipify(array $data) : array {
			$var_error = $this->error_sql_create_all_pd_itau_vigente_tipify($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			$var_insert = array(
				d_itau_v_he01_t_v_nombre => $data['field_tipify_name'],
				d_itau_v_he01_t_v_numeroid => $data['field_tipify_identification'],
				d_itau_v_he01_t_v_codigocliente => $data['field_tipify_client_code'],
				d_itau_v_he01_t_v_tipificacion => $data['field_tipify_value'],
				d_itau_v_he01_t_v_detalle => $data['field_tipify_detail'],
				d_itau_v_he01_t_v_telcontacto => str_replace(',','',$data['field_tipify_phone']),
				d_itau_v_he01_t_v_campaign => $data['field_tipify_campaign'],
				d_itau_v_he01_t_v_endeudamientocastigo => str_replace(',','',$data['field_tipify_capital_balance']),
				d_itau_v_he01_t_v_idasesor => $data['field_tipify_asesor'],
				d_itau_v_he01_t_v_asesor => $data['field_tipify_asesor'],
				d_itau_v_he01_t_v_fecha => date("Y-m-d"),
				d_itau_v_he01_t_v_hora => date("H:i:s"),
				d_itau_v_he01_t_v_tipocartera => $data['field_tipify_wallet_type'],
				d_itau_v_he01_t_v_razonnopago => $data['field_tipify_reason_for_non_payment'],
				d_itau_v_he01_t_v_t_definition => $data['field_tipify_definition']
			);
			$this->db->insert(t_itau_v_he01_t_v, $var_insert);
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_update = array(
				d_itau_v_he01_d_d_v_barrido => $data['field_tipify_value'],
				d_itau_v_he01_d_d_v_ulttipificacion => $data['field_tipify_value'],
				d_itau_v_he01_d_d_v_fechaultimatip => date("Y-m-d"),
				d_itau_v_he01_d_d_v_seguimiento => $data['field_tipify_tracing']
			);
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_itau_v_he01_d_d_v, $var_update, d_itau_v_he01_d_d_v_numeroid . " = '" . $data['field_tipify_identification'] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro completado correctamente.');
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>