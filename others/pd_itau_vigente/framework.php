<?php
	define('data_base_host', 'localhost');
	define('data_base_user', 'root');
	define('data_base_password', 'Pr1$m4D!r3ct');
	define('data_base_name', 'bd_pd_itau_vigente');

	define('t_users', 'users');

	define('d_users_id', 'id');
	define('d_users_user_name', 'user_name');
	define('d_users_user_hash', 'user_hash');
	define('d_users_system_generated_password', 'system_generated_password');
	define('d_users_pwd_last_changed', 'pwd_last_changed');
	define('d_users_authenticate_id', 'authenticate_id');
	define('d_users_sugar_login', 'sugar_login');
	define('d_users_first_name', 'first_name');
	define('d_users_last_name', 'last_name');
	define('d_users_is_admin', 'is_admin');
	define('d_users_external_auth_only', 'external_auth_only');
	define('d_users_receive_notifications', 'receive_notifications');
	define('d_users_description', 'description');
	define('d_users_date_entered', 'date_entered');
	define('d_users_date_modified', 'date_modified');
	define('d_users_modified_user_id', 'modified_user_id');
	define('d_users_created_by', 'created_by');
	define('d_users_title', 'title');
	define('d_users_department', 'department');
	define('d_users_phone_home', 'phone_home');
	define('d_users_phone_mobile', 'phone_mobile');
	define('d_users_phone_work', 'phone_work');
	define('d_users_phone_other', 'phone_other');
	define('d_users_phone_fax', 'phone_fax');
	define('d_users_status', 'status');
	define('d_users_address_street', 'address_street');
	define('d_users_address_city', 'address_city');
	define('d_users_address_state', 'address_state');
	define('d_users_address_country', 'address_country');
	define('d_users_address_postalcode', 'address_postalcode');
	define('d_users_deleted', 'deleted');
	define('d_users_portal_only', 'portal_only');
	define('d_users_show_on_employees', 'show_on_employees');
	define('d_users_employee_status', 'employee_status');
	define('d_users_messenger_id', 'messenger_id');
	define('d_users_messenger_type', 'messenger_type');
	define('d_users_reports_to_id', 'reports_to_id');
	define('d_users_is_group', 'is_group');

	class Connection extends mysqli {
		public function __construct() {
			parent:: __construct(data_base_host, data_base_user, data_base_password, data_base_name);
			$this->connect_errno ? die('Error: Conexión a la base de datos erronea.') : null;
			// Evitar generar una query cada vez que se instancie la conexión.
			date_default_timezone_set("America/Bogota");
			$this->set_charset("SET NAMES UTF8");
		}

		public function fetch_assoc($query) {
			return mysqli_fetch_assoc($query);
		}

		public function free_result($query) {
			return mysqli_free_result($query);
		}

		public function num_rows($query) {
			return mysqli_num_rows($query);
		}
	}

	function sql_users() {
		if (isset($_SESSION['authenticated_user_id'])) {
			$db = new Connection();

			$sql = $db->query("
				SELECT * FROM " . t_users . "
				WHERE " . d_users_id . " = '" . $_SESSION['authenticated_user_id'] . "';
			");

			if (true == $sql) {
				if ($db->num_rows($sql) > 0) {
					while ($data = $db->fetch_assoc($sql)) {
						$function_num_rows[$data[d_users_id]] = $data;
					}
				} else {
					$function_num_rows = false;
				}
			} else { echo D_ALERT_ERROR; }

			$db->free_result($sql);
			$db->close();

			return $function_num_rows;
		}
	}

	error_reporting(E_ALL);

	ob_start();
	$error = ob_get_clean();

	if (empty($error)) {
		session_start();
		## Instanciar conexion en una nueva variable
		$db = new Connection();

		$df_sql_users = sql_users();

		if (isset($_SESSION['authenticated_user_id'])) {
			if (true == $df_sql_users) {
				foreach ($df_sql_users as $key => $value) {
					?>
						<a href="http://192.168.6.58:8090/framework/pditauvigente/definition/<?php echo $_GET['field_identification']; ?>/?field_session=<?php echo $df_sql_users[$key][d_users_id]; ?>">
							<span>Acceder</span>
						</a>
					<?php
				}
			}
		}
		
		$db->close();
	}
?>