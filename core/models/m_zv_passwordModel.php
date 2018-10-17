<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class m_zv_passwordModel extends Models implements OCREND {
		/*=========================================================================================================================*/
		public function __construct() {
			parent::__construct(DATABASE['name'], DATABASE['motor'], true);
		}

		/*=========================================================================================================================*/
		# Control Errores Update
		final private function error_sql_update_all_zv_password(array $data) {
			try {
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_password_new'])) {
					throw new Exception('<b>Error:</b> El campo de nueva contraseña es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_password_confirm'])) {
					throw new Exception('<b>Error:</b> El campo de confirmar contraseña es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if ($data['field_password_new'] != $data['field_password_confirm']) {
					throw new Exception('<b>Error:</b> Las contraseñas digitidas no son iguales.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				if (Func::emp($data['field_password_current'])) {
					throw new Exception('<b>Error:</b> El campo de contraseña actual es oblgitario.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				$empty_password_current = $this->db->scape($data['field_password_current']);
				# Verificar en la base de datos si existen el registro
				$sql_s_password_current = $this->db->select(d_az_user_id_az_user . ", " . d_az_user_t_password, t_az_user, d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				if (false == $sql_s_password_current || !Strings::chash($sql_s_password_current[0][1],$empty_password_current)) {
					throw new Exception('<b>Error:</b> La contraseña actual digitada no es la correcta.');
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*$empty_password_new = $this->db->scape($data['field_password_new']);
				# Verificar en la base de datos si existen el registro
				$sql_s_password_new = $this->db->select(d_az_change_password_v_id_az_user . ", " . d_az_change_password_t_used_password, t_az_change_password, d_az_change_password_v_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'", "LIMIT 1");
				if (false != $sql_s_password_new || !Strings::chash($sql_s_password_new[0][1],$empty_password_new)) {
					throw new Exception('<b>Error:</b> La contraseña digitada ya fue utilizada anteriormente.');
				}*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}

		/*=========================================================================================================================*/
		# Query Sql Update
		final public function sql_update_all_zv_password(array $data) : array {
			$var_error = $this->error_sql_update_all_zv_password($data);
			if (!is_bool($var_error)) {
				return $var_error;
			}
			# Linea de codigo con una variable y array para seleccionar los datos de la tabla segun el id
			$var_sql_select = $this->db->select('*', t_az_user, d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Validar si la sentencia query ejecutada es correcta y no falsa
			if (false != $var_sql_select) {
				# El constructor foreach proporciona un modo sencillo de iterar sobre arrays.
				foreach ($var_sql_select as $key_sql_select):
					$var_array = array(
						d_az_change_password_m_by_created => $_SESSION[SESS_APP_ID],
						d_az_change_password_m_by_modified => $_SESSION[SESS_APP_ID],
						d_az_change_password_m_date_created => date("Y-m-d H:i:s"),
						d_az_change_password_m_date_modified => date("Y-m-d H:i:s"),
						d_az_change_password_m_deleted => $key_sql_select[d_az_user_m_deleted],
						d_az_change_password_m_description => $key_sql_select[d_az_user_m_description],
						d_az_change_password_m_level => $key_sql_select[d_az_user_m_level],
						d_az_change_password_m_status => $key_sql_select[d_az_user_m_status],
						d_az_change_password_m_temp => $key_sql_select[d_az_user_m_temp],
						d_az_change_password_t_used_password => $key_sql_select[d_az_user_t_password],
						d_az_change_password_v_id_az_user => $_SESSION[SESS_APP_ID]
					);
					# Query Sql Insert: Insetar datos en la tabla con sus campos respectivos y asignados
					$this->db->insert(t_az_change_password, $var_array);
				endforeach;
			}
			# Linea de codigo con una variable y array para actualizar los datos en la tabla
			$var_array = array(d_az_user_t_password => Strings::hash($data['field_password_new']));
			# Query Sql Update: Actualizar datos en la tabla con sus campos respectivos y asignados segun el id
			$this->db->update(t_az_user, $var_array, d_az_user_id_az_user . " = '" . $_SESSION[SESS_APP_ID] . "'");
			# Retornar el mensaje de exito una vez se hayan actualizado los datos correctamente
			return array('success' => 1, 'message' => '<b>Exito:</b> Registro actualizado correctamente.');
		}

		/*=========================================================================================================================*/
		public function __destruct() {
			parent::__destruct();
		}
	}
?>