<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	final class Login extends Models implements OCREND {
		private $var_user;
		private $session = null;
		private $var_this;
		public function __construct() {
			parent::__construct();
		}
		# Control de errores
		final private function errors(array $data) {
			try {
				Helper::load('strings');
				$this->var_user = $this->db->scape($data['field_login']);
				$this->var_this = $this->db->select(d_az_user_id_az_user . ', ' . d_az_user_t_password , t_az_user, d_az_user_t_login . " = '" . $this->var_user . "'",'LIMIT 1');
				if (false == $this->var_this or !Strings::chash($this->var_this[0][1],$data['fiel_password'])) {
					throw new Exception('<b>Error:</b> Credenciales incorrectas.');
				}
				if (DB_SESSION) {
					$this->session = new Sessions;
					if ($this->session->session_in_use($this->var_this[0][0])) {
						throw new Exception('<b>Error:</b> Ya tiene una sesión iniciada.');
					}
				}
				return false;
			} catch (Exception $e) {
				return array('success' => 0, 'message' => $e->getMessage());
			}
		}
		# Inicio de sesión
		final public function SignIn(array $data) : array {
			$error = $this->errors($data);
			if (!is_bool($error)) {
				return $error;
			}
			if (DB_SESSION) {
				$this->session->generate_session($this->var_this[0][0]);
			} else {
				$_SESSION[SESS_APP_ID] = $this->var_this[0][0];
			}
			return array('success' => 1, 'message' => '<b>Conectado:</b> Estamos redireccionando.');
		}
		public function __destruct() {
			parent::__destruct();
		}
	}
?>