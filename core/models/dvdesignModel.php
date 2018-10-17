<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class dvdesignModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct();
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function read_session_menu() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_role." . d_az_role_t_name . "
				FROM " . t_az_inner_role_user . " tc_az_i_r_u
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_i_r_u. " . d_az_i_r_u_v_id_az_role . " = tc_az_role. " . d_az_role_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_i_r_u. " . d_az_i_r_u_v_id_az_user . " = tc_az_user. " . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_az_role." . d_az_role_m_level . " ASC,
					tc_az_role." . d_az_role_t_name . " ASC;
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_menu_value() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url',
					tc_az_role." . d_az_role_t_name . " AS 'lbl_az_role_t_name',
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_menu_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_module_value(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			} else {
				# Redireccionar a una pagina segun el metodo cargado
				Func::redir(URL . 'access/');
				# Detener la ejecucion
				exit();
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_change(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_change . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_create(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_create . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_delete(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_delete . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_detail(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_detail . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_error(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_error . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_read_all(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_all . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_read_eliminate(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_read_eliminate . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}
		
		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_remove(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_remove . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_template(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_template . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_permits_t_value_update(string $var_url) {
			# Seleccionar los registros de la tabla
			$var_sql = $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits." . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits." . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_authorized_permits." . d_az_authorized_permits_t_value_update . " = '1'
					AND tc_az_icon." . d_az_icon_m_deleted . " = '1'
					AND tc_az_icon." . d_az_icon_m_status . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_deleted . " = '1'
					AND tc_az_inner_role_user." . d_az_i_r_u_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
					AND tc_az_user." . d_az_user_m_deleted . " = '1'
					AND tc_az_user." . d_az_user_m_status . " = '1'
				LIMIT 1
			");
			$var_result = $var_sql->fetchAll();
			$var_sql->closeCursor();
			if (false != $var_result) {
				return $var_result[0];
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_az_menu_crud_t_url(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT * FROM " . t_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE " . d_az_menu_crud_m_deleted . " = '1'
					AND " . d_az_menu_crud_t_url . " = '" . $var_url . "'
				LIMIT 1
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_select_session() {
			# Seleccionar los registros de la tabla
			return $this->db->select(d_az_user_t_login, t_az_user, d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] .  "'", 'LIMIT 1');
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_tc_az_menu_crud_group_by_ad() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name',
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = '1'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . "
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_tc_az_menu_crud_group_by_id() {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name',
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . "
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_tc_az_menu_crud_order_by(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . " = '" . $var_id . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_tc_az_sub_menu_crud_group_by(string $var_url) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name',
					tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . " AS 'lbl_az_menu_crud_id_az_menu_crud',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_t_url . " = '" . $var_url . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				GROUP BY tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		# Query Sql Select
		final public function sql_tc_az_sub_menu_crud_order_by(string $var_id) {
			# Seleccionar los registros de la tabla
			return $this->db->query("
				-- -----------------------------------------------------------------------------------------------------------------
				SELECT
					tc_az_icon." . d_az_icon_t_name . " AS 'lbl_az_icon_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_name . " AS 'lbl_az_menu_crud_t_name',
					tc_az_menu_crud." . d_az_menu_crud_t_url . " AS 'lbl_az_menu_crud_t_url'
				FROM " . t_az_authorized_permits . " tc_az_authorized_permits
				-- -----------------------------------------------------------------------------------------------------------------
				INNER JOIN " . t_az_menu_crud . " tc_az_menu_crud
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_menu_crud . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				INNER JOIN " . t_az_role . " tc_az_role
					ON tc_az_authorized_permits. " . d_az_authorized_permits_v_id_az_role . " = tc_az_role." . d_az_role_id_az_role . "
				INNER JOIN " . t_az_icon . " tc_az_icon
					ON tc_az_menu_crud." . d_az_menu_crud_v_id_az_icon . " = tc_az_icon." . d_az_icon_id_az_icon . "
				INNER JOIN " . t_az_inner_role_user . " tc_az_inner_role_user
					ON tc_az_role." . d_az_role_id_az_role . " = tc_az_inner_role_user." . d_az_i_r_u_v_id_az_role . "
				INNER JOIN " . t_az_user . " tc_az_user
					ON tc_az_inner_role_user." . d_az_i_r_u_v_id_az_user . " = tc_az_user." . d_az_user_id_az_user . "
				INNER JOIN " . t_az_sub_menu_crud . " tc_az_sub_menu_crud
					ON tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_sub_under . " = tc_az_menu_crud." . d_az_menu_crud_id_az_menu_crud . "
				-- -----------------------------------------------------------------------------------------------------------------
				WHERE tc_az_authorized_permits. " . d_az_authorized_permits_m_deleted . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_m_status . " = '1'
					AND tc_az_authorized_permits. " . d_az_authorized_permits_t_module_value . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_deleted . " = '1'
					AND tc_az_menu_crud." . d_az_menu_crud_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_deleted . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_m_status . " = '1'
					AND tc_az_sub_menu_crud." . d_az_sub_menu_crud_v_id_az_menu_crud . " = '" . $var_id . "'
					AND tc_az_role." . d_az_role_m_deleted . " = '1'
					AND tc_az_role." . d_az_role_m_status . " = '1'
					AND tc_az_user." . d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'
				ORDER BY tc_az_menu_crud." . d_az_menu_crud_t_name . " ASC
			");
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>