<?php
	# Tipado estricto para PHP 7
	declare(strict_types=1);
	//------------------------------------------------
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	# Timezone DOC http://php.net/manual/es/timezones.php
	date_default_timezone_set('America/Bogota');
	//------------------------------------------------
	/**
	* Configuración de la conexión con la base de datos.
	* @param host 'hosting local/remoto'
	* @param user 'usuario de la base de datos'
	* @param pass 'password del usuario de la base de datos'
	* @param name 'nombre de la base de datos'
	* @param port 'puerto de la base de datos (no necesario en la mayoría de motores)'
	* @param protocol 'protocolo de conexión (no necesario en la mayoría de motores)'
	* @param motor 'motor de conexión por defecto'
	* MOTORES VALORES:
	*        mysql
	*        sqlite
	*        oracle
	*        postgresql
	*        cubrid
	*        firebird
	*        odbc
	*        mssql: DOC https://github.com/prinick96/Ocrend-Framework/issues/7
	*/
	define('DATABASE', array(
		'host' => '192.168.6.63',
		'user' => 'root',
		'pass' => 'Pr1$m4D!r3ct',
		'name' => 'bd_az_framework',
		'port' => 1521,
		'protocol' => 'TCP',
		'motor' => 'mysql'
	));
	//------------------------------------------------
	/**
	* Define la carpeta en la cual se encuentra instalado el framework.
	* @example "/" si para acceder al framework colocamos http://url.com en la URL, ó http://localhost
	* @example "/Ocrend-Framework/" si para acceder al framework colocamos http://url.com/Ocrend-Framework, ó http://localhost/Ocrend-Framework/
	*/
	define('__ROOT__', '/framework/');
	//------------------------------------------------
	# Constantes fundamentales
	define('URL', 'http://' . $_SERVER['HTTP_HOST'] . '/framework/');
	define('APP', 'Desarrollo Interno');
	//------------------------------------------------
	# Control de sesiones
	define('DB_SESSION', false);
	define('SESSION_TIME', 18000); # Tiempo de vida para las sesiones 5 horas = 18000 segundos.
	define('SESS_APP_ID', 'app_id');
	define('AUTHENTICATED_USER_ID', 'authenticated_user_id');
	session_start([
		'use_strict_mode' => true,
		'use_cookies' => true,
		'cookie_lifetime' => SESSION_TIME,
		'cookie_httponly' => true # Evita el acceso a la cookie mediante lenguajes de script (cómo javascript)
	]);
	//------------------------------------------------
	# Constantes de PHPMailer
	define('PHPMAILER_HOST', '');
	define('PHPMAILER_USER', '');
	define('PHPMAILER_PASS', '');
	define('PHPMAILER_PORT', 465);
	//------------------------------------------------
	# PayPal SDK
	define('PAYPAL_MODE','sandbox'); # sandbox ó live
	define('PAYPAL_CLIENT_ID','');
	define('PAYPAL_CLIENT_SECRET','');
	//------------------------------------------------
	# Activación del Firewall
	define('FIREWALL', true);
	//------------------------------------------------
	# Activación del DEBUG, solo para desarrollo
	define('DEBUG', true);
	//------------------------------------------------
	# Verifica cual es el motor de templates actual (TWIG:true o PLATESPHP:false)
	define('USE_TWIG_TEMPLATE_ENGINE', false);
	//------------------------------------------------
	# Versión actual del framework
	define('VERSION', '1.2.4');
	//------------------------------------------------
	# Nombres de las base de datos
	define('db_bd_coasmedas', 'bd_coasmedas');
	define('db_bd_compensar_2017', 'bd_compensar_2017');
	define('db_bd_pd_itau_castigada', 'bd_pd_itau_castigada');
	define('db_bd_pd_itau_vigente', 'bd_pd_itau_vigente');
	define('db_bdcorficolombiana', 'bdcorficolombiana');
	//------------------------------------------------
	# Tablas de la base de datos
	define('t_az_authorized_permits', DATABASE['name'] . '.' . 'az_authorized_permits');
	define('t_az_category_icon', DATABASE['name'] . '.' . 'az_category_icon');
	define('t_az_category_menu', DATABASE['name'] . '.' . 'az_category_menu');
	define('t_az_category_role', DATABASE['name'] . '.' . 'az_category_role');
	define('t_az_change_category_icon', DATABASE['name'] . '.' . 'az_change_category_icon');
	define('t_az_change_category_menu', DATABASE['name'] . '.' . 'az_change_category_menu');
	define('t_az_change_category_role', DATABASE['name'] . '.' . 'az_change_category_role');
	define('t_az_change_country', DATABASE['name'] . '.' . 'az_change_country');
	define('t_az_change_deleted', DATABASE['name'] . '.' . 'az_change_deleted');
	define('t_az_change_icon', DATABASE['name'] . '.' . 'az_change_icon');
	define('t_az_change_inner_role_user', DATABASE['name'] . '.' . 'az_change_inner_role_user');
	define('t_az_change_level', DATABASE['name'] . '.' . 'az_change_level');
	define('t_az_change_password', DATABASE['name'] . '.' . 'az_change_password');
	define('t_az_change_role', DATABASE['name'] . '.' . 'az_change_role');
	define('t_az_change_state', DATABASE['name'] . '.' . 'az_change_state');
	define('t_az_change_sub_menu_crud', DATABASE['name'] . '.' . 'az_change_sub_menu_crud');
	define('t_az_change_temp', DATABASE['name'] . '.' . 'az_change_temp');
	define('t_az_change_user', DATABASE['name'] . '.' . 'az_change_user');
	define('t_az_country', DATABASE['name'] . '.' . 'az_country');
	define('t_az_data_personal', DATABASE['name'] . '.' . 'az_data_personal');
	define('t_az_deleted', DATABASE['name'] . '.' . 'az_deleted');
	define('t_az_icon', DATABASE['name'] . '.' . 'az_icon');
	define('t_az_inner_role_user', DATABASE['name'] . '.' . 'az_inner_role_user');
	define('t_az_level', DATABASE['name'] . '.' . 'az_level');
	define('t_az_log', DATABASE['name'] . '.' . 'az_log');
	define('t_az_menu_crud', DATABASE['name'] . '.' . 'az_menu_crud');
	define('t_az_role', DATABASE['name'] . '.' . 'az_role');
	define('t_az_state', DATABASE['name'] . '.' . 'az_state');
	define('t_az_sub_menu_crud', DATABASE['name'] . '.' . 'az_sub_menu_crud');
	define('t_az_temp', DATABASE['name'] . '.' . 'az_temp');
	define('t_az_user', DATABASE['name'] . '.' . 'az_user');
	define('t_az_value_authorized_permits', DATABASE['name'] . '.' . 'az_value_authorized_permits');
	define('t_pd_accrued', DATABASE['name'] . '.' . 'pd_accrued');
	define('t_pd_base_salary', DATABASE['name'] . '.' . 'pd_base_salary');
	define('t_pd_birth_place', DATABASE['name'] . '.' . 'pd_birth_place');
	define('t_pd_brand', DATABASE['name'] . '.' . 'pd_brand');
	define('t_pd_campaign', DATABASE['name'] . '.' . 'pd_campaign');
	define('t_pd_category_brand', DATABASE['name'] . '.' . 'pd_category_brand');
	define('t_pd_category_campaign', DATABASE['name'] . '.' . 'pd_category_campaign');
	define('t_pd_category_horary', DATABASE['name'] . '.' . 'pd_category_horary');
	define('t_pd_category_provider', DATABASE['name'] . '.' . 'pd_category_provider');
	define('t_pd_category_novelty', DATABASE['name'] . '.' . 'pd_category_novelty');
	define('t_pd_change_diadem', DATABASE['name'] . '.' . 'pd_change_diadem');
	define('t_pd_civil_status', DATABASE['name'] . '.' . 'pd_civil_status');
	define('t_pd_contract_type', DATABASE['name'] . '.' . 'pd_contract_type');
	define('t_pd_daily_activities', DATABASE['name'] . '.' . 'pd_daily_activities');
	define('t_pd_data_business', DATABASE['name'] . '.' . 'pd_data_business');
	define('t_pd_data_personal', DATABASE['name'] . '.' . 'pd_data_personal');
	define('t_pd_document_type', DATABASE['name'] . '.' . 'pd_document_type');
	define('t_pd_employee_charge', DATABASE['name'] . '.' . 'pd_employee_charge');
	define('t_pd_eps', DATABASE['name'] . '.' . 'pd_eps');
	define('t_pd_exchange_base_salary', DATABASE['name'] . '.' . 'pd_exchange_base_salary');
	define('t_pd_exchange_brand', DATABASE['name'] . '.' . 'pd_exchange_brand');
	define('t_pd_exchange_birth_place', DATABASE['name'] . '.' . 'pd_exchange_birth_place');
	define('t_pd_exchange_campaign', DATABASE['name'] . '.' . 'pd_exchange_campaign');
	define('t_pd_exchange_category_brand', DATABASE['name'] . '.' . 'pd_exchange_category_brand');
	define('t_pd_exchange_category_campaign', DATABASE['name'] . '.' . 'pd_exchange_category_campaign');
	define('t_pd_exchange_category_horary', DATABASE['name'] . '.' . 'pd_exchange_category_horary');
	define('t_pd_exchange_category_provider', DATABASE['name'] . '.' . 'pd_exchange_category_provider');
	define('t_pd_exchange_category_novelty', DATABASE['name'] . '.' . 'pd_exchange_category_novelty');
	define('t_pd_exchange_civil_status', DATABASE['name'] . '.' . 'pd_exchange_civil_status');
	define('t_pd_exchange_change_diadem', DATABASE['name'] . '.' . 'pd_exchange_change_diadem');
	define('t_pd_exchange_contract_type', DATABASE['name'] . '.' . 'pd_exchange_contract_type');
	define('t_pd_exchange_daily_activities', DATABASE['name'] . '.' . 'pd_exchange_daily_activities');
	define('t_pd_exchange_data_personal', DATABASE['name'] . '.' . 'pd_exchange_data_personal');
	define('t_pd_exchange_document_type', DATABASE['name'] . '.' . 'pd_exchange_document_type');
	define('t_pd_exchange_employee_charge', DATABASE['name'] . '.' . 'pd_exchange_employee_charge');
	define('t_pd_exchange_eps', DATABASE['name'] . '.' . 'pd_exchange_eps');
	define('t_pd_exchange_level_study', DATABASE['name'] . '.' . 'pd_exchange_level_study');
	define('t_pd_exchange_messaging_type', DATABASE['name'] . '.' . 'pd_exchange_messaging_type');
	define('t_pd_exchange_neighborhood', DATABASE['name'] . '.' . 'pd_exchange_neighborhood');
	define('t_pd_exchange_novelty', DATABASE['name'] . '.' . 'pd_exchange_novelty');
	define('t_pd_exchange_pension', DATABASE['name'] . '.' . 'pd_exchange_pension');
	define('t_pd_exchange_personal_type', DATABASE['name'] . '.' . 'pd_exchange_personal_type');
	define('t_pd_exchange_provider', DATABASE['name'] . '.' . 'pd_exchange_provider');
	define('t_pd_exchange_transport_assistance', DATABASE['name'] . '.' . 'pd_exchange_transport_assistance');
	define('t_pd_exchange_type_accrued', DATABASE['name'] . '.' . 'pd_exchange_type_accrued');
	define('t_pd_exchange_type_definition', DATABASE['name'] . '.' . 'pd_exchange_type_definition');
	define('t_pd_exchange_type_management', DATABASE['name'] . '.' . 'pd_exchange_type_management');
	define('t_pd_exchange_worked_days', DATABASE['name'] . '.' . 'pd_exchange_worked_days');
	define('t_pd_exchange_worked_period', DATABASE['name'] . '.' . 'pd_exchange_worked_period');
	define('t_pd_inner_campaign_data_personal', DATABASE['name'] . '.' . 'pd_inner_campaign_data_personal');
	define('t_pd_level_study', DATABASE['name'] . '.' . 'pd_level_study');
	define('t_pd_management_tree', DATABASE['name'] . '.' . 'pd_management_tree');
	define('t_pd_messaging_type', DATABASE['name'] . '.' . 'pd_messaging_type');
	define('t_pd_neighborhood', DATABASE['name'] . '.' . 'pd_neighborhood');
	define('t_pd_novelty', DATABASE['name'] . '.' . 'pd_novelty');
	define('t_pd_paysheet', DATABASE['name'] . '.' . 'pd_paysheet');
	define('t_pd_pension', DATABASE['name'] . '.' . 'pd_pension');
	define('t_pd_personal_type', DATABASE['name'] . '.' . 'pd_personal_type');
	define('t_pd_provider', DATABASE['name'] . '.' . 'pd_provider');
	define('t_pd_transport_assistance', DATABASE['name'] . '.' . 'pd_transport_assistance');
	define('t_pd_type_accrued', DATABASE['name'] . '.' . 'pd_type_accrued');
	define('t_pd_type_definition', DATABASE['name'] . '.' . 'pd_type_definition');
	define('t_pd_type_management', DATABASE['name'] . '.' . 'pd_type_management');
	define('t_pd_worked_days', DATABASE['name'] . '.' . 'pd_worked_days');
	define('t_pd_worked_period', DATABASE['name'] . '.' . 'pd_worked_period');
	//------------------------------------------------
	# Tablas de la base de datos
	#define('t_coa01_tipigestion', db_bd_coasmedas . '.' . 'coa01_tipigestion');
	//------------------------------------------------
	# Tablas de la base de datos
	#define('t_car01_tipigestion', db_bd_compensar_2017 . '.' . 'car01_tipigestion');
	//------------------------------------------------
	# Tablas de la base de datos
	#define('t_corfi_tipigestion', db_bdcorficolombiana . '.' . 'corfi_tipigestion');
	//------------------------------------------------
	# Tablas de la base de datos
	define('t_itau_c_he01_d_d_a_c', db_bd_pd_itau_castigada . '.' . 'he01_datosdeudor_actualizacion_castigada');
	define('t_itau_c_he01_d_d_c', db_bd_pd_itau_castigada . '.' . 'he01_datosdeudor_castigada');
	define('t_itau_c_he01_p_p_c', db_bd_pd_itau_castigada . '.' . 'he01_pagoproy_castigada');
	define('t_itau_c_he01_p_d_c', db_bd_pd_itau_castigada . '.' . 'he01_productosdeudor_castigada');
	define('t_itau_c_he01_t_c', db_bd_pd_itau_castigada . '.' . 'he01_tipigestion_castigada');
	define('t_itau_c_users', db_bd_pd_itau_castigada . '.' . 'users');
	//------------------------------------------------
	# Tablas de la base de datos
	define('t_itau_v_he01_d_d_a_v', db_bd_pd_itau_vigente . '.' . 'he01_datosdeudor_actualizacion_vigente');
	define('t_itau_v_he01_d_d_v', db_bd_pd_itau_vigente . '.' . 'he01_datosdeudor_vigente');
	define('t_itau_v_he01_p_p_v', db_bd_pd_itau_vigente . '.' . 'he01_pagoproy_vigente');
	define('t_itau_v_he01_p_d_v', db_bd_pd_itau_vigente . '.' . 'he01_productosdeudor_vigente');
	define('t_itau_v_he01_t_v', db_bd_pd_itau_vigente . '.' . 'he01_tipigestion_vigente');
	define('t_itau_v_users', db_bd_pd_itau_vigente . '.' . 'users');
	//------------------------------------------------
	# Campos de la tabla az_authorized_permits
	define('d_az_authorized_permits_id_az_authorized_permits', 'id_az_authorized_permits');
	define('d_az_authorized_permits_m_by_created', 'm_by_created');
	define('d_az_authorized_permits_m_by_modified', 'm_by_modified');
	define('d_az_authorized_permits_m_date_created', 'm_date_created');
	define('d_az_authorized_permits_m_date_modified', 'm_date_modified');
	define('d_az_authorized_permits_m_deleted', 'm_deleted');
	define('d_az_authorized_permits_m_description', 'm_description');
	define('d_az_authorized_permits_m_level', 'm_level');
	define('d_az_authorized_permits_m_status', 'm_status');
	define('d_az_authorized_permits_m_temp', 'm_temp');
	define('d_az_authorized_permits_t_menu_value', 't_menu_value');
	define('d_az_authorized_permits_t_module_value', 't_module_value');
	define('d_az_authorized_permits_t_value_change', 't_value_change');
	define('d_az_authorized_permits_t_value_create', 't_value_create');
	define('d_az_authorized_permits_t_value_delete', 't_value_delete');
	define('d_az_authorized_permits_t_value_detail', 't_value_detail');
	define('d_az_authorized_permits_t_value_error', 't_value_error');
	define('d_az_authorized_permits_t_value_read_all', 't_value_read_all');
	define('d_az_authorized_permits_t_value_read_eliminate', 't_value_read_eliminate');
	define('d_az_authorized_permits_t_value_remove', 't_value_remove');
	define('d_az_authorized_permits_t_value_update', 't_value_update');
	define('d_az_authorized_permits_v_id_az_menu_crud', 'v_id_az_menu_crud');
	define('d_az_authorized_permits_v_id_az_role', 'v_id_az_role');
	//------------------------------------------------
	# Campos de la tabla az_category_icon
	define('d_az_category_icon_id_az_category_icon', 'id_az_category_icon');
	define('d_az_category_icon_m_by_created', 'm_by_created');
	define('d_az_category_icon_m_by_modified', 'm_by_modified');
	define('d_az_category_icon_m_date_created', 'm_date_created');
	define('d_az_category_icon_m_date_modified', 'm_date_modified');
	define('d_az_category_icon_m_deleted', 'm_deleted');
	define('d_az_category_icon_m_description', 'm_description');
	define('d_az_category_icon_m_level', 'm_level');
	define('d_az_category_icon_m_status', 'm_status');
	define('d_az_category_icon_m_temp', 'm_temp');
	define('d_az_category_icon_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla az_category_menu
	define('d_az_category_menu_id_az_category_menu', 'id_az_category_menu');
	define('d_az_category_menu_m_by_created', 'm_by_created');
	define('d_az_category_menu_m_by_modified', 'm_by_modified');
	define('d_az_category_menu_m_date_created', 'm_date_created');
	define('d_az_category_menu_m_date_modified', 'm_date_modified');
	define('d_az_category_menu_m_deleted', 'm_deleted');
	define('d_az_category_menu_m_description', 'm_description');
	define('d_az_category_menu_m_level', 'm_level');
	define('d_az_category_menu_m_status', 'm_status');
	define('d_az_category_menu_m_temp', 'm_temp');
	define('d_az_category_menu_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla az_category_role
	define('d_az_category_role_id_az_category_role', 'id_az_category_role');
	define('d_az_category_role_m_by_created', 'm_by_created');
	define('d_az_category_role_m_by_modified', 'm_by_modified');
	define('d_az_category_role_m_date_created', 'm_date_created');
	define('d_az_category_role_m_date_modified', 'm_date_modified');
	define('d_az_category_role_m_deleted', 'm_deleted');
	define('d_az_category_role_m_description', 'm_description');
	define('d_az_category_role_m_level', 'm_level');
	define('d_az_category_role_m_status', 'm_status');
	define('d_az_category_role_m_temp', 'm_temp');
	define('d_az_category_role_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla az_change_category_icon
	define('d_az_change_category_icon_id_az_change_category_icon', 'id_az_change_category_icon');
	define('d_az_change_category_icon_m_by_created', 'm_by_created');
	define('d_az_change_category_icon_m_by_modified', 'm_by_modified');
	define('d_az_change_category_icon_m_date_created', 'm_date_created');
	define('d_az_change_category_icon_m_date_modified', 'm_date_modified');
	define('d_az_change_category_icon_m_deleted', 'm_deleted');
	define('d_az_change_category_icon_m_description', 'm_description');
	define('d_az_change_category_icon_m_level', 'm_level');
	define('d_az_change_category_icon_m_status', 'm_status');
	define('d_az_change_category_icon_m_temp', 'm_temp');
	define('d_az_change_category_icon_t_name', 't_name');
	define('d_az_change_category_icon_v_id_az_category_icon', 'v_id_az_category_icon');
	//------------------------------------------------
	# Campos de la tabla az_change_category_menu
	define('d_az_change_category_menu_id_az_change_category_menu', 'id_az_change_category_menu');
	define('d_az_change_category_menu_m_by_created', 'm_by_created');
	define('d_az_change_category_menu_m_by_modified', 'm_by_modified');
	define('d_az_change_category_menu_m_date_created', 'm_date_created');
	define('d_az_change_category_menu_m_date_modified', 'm_date_modified');
	define('d_az_change_category_menu_m_deleted', 'm_deleted');
	define('d_az_change_category_menu_m_description', 'm_description');
	define('d_az_change_category_menu_m_level', 'm_level');
	define('d_az_change_category_menu_m_status', 'm_status');
	define('d_az_change_category_menu_m_temp', 'm_temp');
	define('d_az_change_category_menu_t_name', 't_name');
	define('d_az_change_category_menu_v_id_az_category_menu', 'v_id_az_category_menu');
	//------------------------------------------------
	# Campos de la tabla az_change_category_role
	define('d_az_change_category_role_id_az_change_category_role', 'id_az_change_category_role');
	define('d_az_change_category_role_m_by_created', 'm_by_created');
	define('d_az_change_category_role_m_by_modified', 'm_by_modified');
	define('d_az_change_category_role_m_date_created', 'm_date_created');
	define('d_az_change_category_role_m_date_modified', 'm_date_modified');
	define('d_az_change_category_role_m_deleted', 'm_deleted');
	define('d_az_change_category_role_m_description', 'm_description');
	define('d_az_change_category_role_m_level', 'm_level');
	define('d_az_change_category_role_m_status', 'm_status');
	define('d_az_change_category_role_m_temp', 'm_temp');
	define('d_az_change_category_role_t_name', 't_name');
	define('d_az_change_category_role_v_id_az_category_role', 'v_id_az_category_role');
	//------------------------------------------------
	# Campos de la tabla az_change_country
	define('d_az_change_country_id_az_change_country', 'id_az_change_country');
	define('d_az_change_country_m_by_created', 'm_by_created');
	define('d_az_change_country_m_by_modified', 'm_by_modified');
	define('d_az_change_country_m_date_created', 'm_date_created');
	define('d_az_change_country_m_date_modified', 'm_date_modified');
	define('d_az_change_country_m_deleted', 'm_deleted');
	define('d_az_change_country_m_description', 'm_description');
	define('d_az_change_country_m_level', 'm_level');
	define('d_az_change_country_m_status', 'm_status');
	define('d_az_change_country_m_temp', 'm_temp');
	define('d_az_change_country_t_name', 't_name');
	define('d_az_change_country_v_id_az_country', 'v_id_az_country');
	//------------------------------------------------
	# Campos de la tabla az_change_deleted
	define('d_az_change_deleted_id_az_change_deleted', 'id_az_change_deleted');
	define('d_az_change_deleted_m_by_created', 'm_by_created');
	define('d_az_change_deleted_m_by_modified', 'm_by_modified');
	define('d_az_change_deleted_m_date_created', 'm_date_created');
	define('d_az_change_deleted_m_date_modified', 'm_date_modified');
	define('d_az_change_deleted_m_description', 'm_description');
	define('d_az_change_deleted_t_name', 't_name');
	define('d_az_change_deleted_t_value', 't_value');
	define('d_az_change_deleted_v_id_az_deleted', 'v_id_az_deleted');
	//------------------------------------------------
	# Campos de la tabla az_change_icon
	define('d_az_change_icon_id_az_change_icon', 'id_az_change_icon');
	define('d_az_change_icon_m_by_created', 'm_by_created');
	define('d_az_change_icon_m_by_modified', 'm_by_modified');
	define('d_az_change_icon_m_date_created', 'm_date_created');
	define('d_az_change_icon_m_date_modified', 'm_date_modified');
	define('d_az_change_icon_m_deleted', 'm_deleted');
	define('d_az_change_icon_m_description', 'm_description');
	define('d_az_change_icon_m_level', 'm_level');
	define('d_az_change_icon_m_status', 'm_status');
	define('d_az_change_icon_m_temp', 'm_temp');
	define('d_az_change_icon_t_name', 't_name');
	define('d_az_change_icon_t_az_category_icon_t_name', 't_az_category_icon_t_name');
	define('d_az_change_icon_v_id_az_icon', 'v_id_az_icon');
	//------------------------------------------------
	# Campos de la tabla az_change_inner_role_user
	define('d_az_change_i_r_u_id_az_change_inner_role_user', 'id_az_change_inner_role_user');
	define('d_az_change_i_r_u_m_by_created', 'm_by_created');
	define('d_az_change_i_r_u_m_by_modified', 'm_by_modified');
	define('d_az_change_i_r_u_m_date_created', 'm_date_created');
	define('d_az_change_i_r_u_m_date_modified', 'm_date_modified');
	define('d_az_change_i_r_u_m_deleted', 'm_deleted');
	define('d_az_change_i_r_u_m_description', 'm_description');
	define('d_az_change_i_r_u_m_level', 'm_level');
	define('d_az_change_i_r_u_m_status', 'm_status');
	define('d_az_change_i_r_u_m_temp', 'm_temp');
	define('d_az_change_i_r_u_v_id_az_role', 'v_id_az_role');
	define('d_az_change_i_r_u_v_id_az_user', 'v_id_az_user');
	define('d_az_change_i_r_u_v_id_az_inner_role_user', 'v_id_az_inner_role_user');
	//------------------------------------------------
	# Campos de la tabla az_change_level
	define('d_az_change_level_id_az_change_level', 'id_az_change_level');
	define('d_az_change_level_m_by_created', 'm_by_created');
	define('d_az_change_level_m_by_modified', 'm_by_modified');
	define('d_az_change_level_m_date_created', 'm_date_created');
	define('d_az_change_level_m_date_modified', 'm_date_modified');
	define('d_az_change_level_m_description', 'm_description');
	define('d_az_change_level_t_name', 't_name');
	define('d_az_change_level_t_value', 't_value');
	define('d_az_change_level_v_id_az_level', 'v_id_az_level');
	//------------------------------------------------
	# Campos de la tabla az_change_password
	define('d_az_change_password_id_az_change_password', 'id_az_change_password');
	define('d_az_change_password_m_by_created', 'm_by_created');
	define('d_az_change_password_m_by_modified', 'm_by_modified');
	define('d_az_change_password_m_date_created', 'm_date_created');
	define('d_az_change_password_m_date_modified', 'm_date_modified');
	define('d_az_change_password_m_deleted', 'm_deleted');
	define('d_az_change_password_m_description', 'm_description');
	define('d_az_change_password_m_level', 'm_level');
	define('d_az_change_password_m_status', 'm_status');
	define('d_az_change_password_m_temp', 'm_temp');
	define('d_az_change_password_t_used_password', 't_used_password');
	define('d_az_change_password_v_id_az_user', 'v_id_az_user');
	//------------------------------------------------
	# Campos de la tabla az_change_role
	define('d_az_change_role_id_az_change_role', 'id_az_change_role');
	define('d_az_change_role_m_by_created', 'm_by_created');
	define('d_az_change_role_m_by_modified', 'm_by_modified');
	define('d_az_change_role_m_date_created', 'm_date_created');
	define('d_az_change_role_m_date_modified', 'm_date_modified');
	define('d_az_change_role_m_deleted', 'm_deleted');
	define('d_az_change_role_m_description', 'm_description');
	define('d_az_change_role_m_level', 'm_level');
	define('d_az_change_role_m_status', 'm_status');
	define('d_az_change_role_m_temp', 'm_temp');
	define('d_az_change_role_t_name', 't_name');
	define('d_az_change_role_t_az_category_role_t_name', 't_az_category_role_t_name');
	define('d_az_change_role_v_id_az_role', 'v_id_az_role');
	//------------------------------------------------
	# Campos de la tabla az_change_state
	define('d_az_change_state_id_az_change_state', 'id_az_change_state');
	define('d_az_change_state_m_by_created', 'm_by_created');
	define('d_az_change_state_m_by_modified', 'm_by_modified');
	define('d_az_change_state_m_date_created', 'm_date_created');
	define('d_az_change_state_m_date_modified', 'm_date_modified');
	define('d_az_change_state_m_description', 'm_description');
	define('d_az_change_state_t_name', 't_name');
	define('d_az_change_state_t_value', 't_value');
	define('d_az_change_state_v_id_az_state', 'v_id_az_state');
	//------------------------------------------------
	# Campos de la tabla az_change_sub_menu_crud
	define('d_az_change_sub_menu_crud_id_az_change_sub_menu_crud', 'id_az_change_sub_menu_crud');
	define('d_az_change_sub_menu_crud_m_by_created', 'm_by_created');
	define('d_az_change_sub_menu_crud_m_by_modified', 'm_by_modified');
	define('d_az_change_sub_menu_crud_m_date_created', 'm_date_created');
	define('d_az_change_sub_menu_crud_m_date_modified', 'm_date_modified');
	define('d_az_change_sub_menu_crud_m_deleted', 'm_deleted');
	define('d_az_change_sub_menu_crud_m_description', 'm_description');
	define('d_az_change_sub_menu_crud_m_level', 'm_level');
	define('d_az_change_sub_menu_crud_m_status', 'm_status');
	define('d_az_change_sub_menu_crud_m_temp', 'm_temp');
	define('d_az_change_sub_menu_crud_u_id_az_menu_crud_t_name', 'u_id_az_menu_crud_t_name');
	define('d_az_change_sub_menu_crud_u_id_az_sub_under_t_name', 'u_id_az_sub_under_t_name');
	define('d_az_change_sub_menu_crud_v_id_az_sub_menu_crud', 'v_id_az_sub_menu_crud');
	//------------------------------------------------
	# Campos de la tabla az_change_temp
	define('d_az_change_temp_id_az_change_temp', 'id_az_change_temp');
	define('d_az_change_temp_m_by_created', 'm_by_created');
	define('d_az_change_temp_m_by_modified', 'm_by_modified');
	define('d_az_change_temp_m_date_created', 'm_date_created');
	define('d_az_change_temp_m_date_modified', 'm_date_modified');
	define('d_az_change_temp_m_description', 'm_description');
	define('d_az_change_temp_t_name', 't_name');
	define('d_az_change_temp_t_value', 't_value');
	define('d_az_change_temp_v_id_az_temp', 'v_id_az_temp');
	//------------------------------------------------
	# Campos de la tabla az_change_user
	define('d_az_change_user_id_az_change_user', 'id_az_change_user');
	define('d_az_change_user_m_by_created', 'm_by_created');
	define('d_az_change_user_m_by_modified', 'm_by_modified');
	define('d_az_change_user_m_date_created', 'm_date_created');
	define('d_az_change_user_m_date_modified', 'm_date_modified');
	define('d_az_change_user_m_deleted', 'm_deleted');
	define('d_az_change_user_m_description', 'm_description');
	define('d_az_change_user_m_level', 'm_level');
	define('d_az_change_user_m_status', 'm_status');
	define('d_az_change_user_m_temp', 'm_temp');
	define('d_az_change_user_t_email', 't_email');
	define('d_az_change_user_t_key_active', 't_key_active');
	define('d_az_change_user_t_key_password', 't_key_password');
	define('d_az_change_user_t_key_password_temp', 't_key_password_temp');
	define('d_az_change_user_t_key_status', 't_key_status');
	define('d_az_change_user_t_last_connection', 't_last_connection');
	define('d_az_change_user_t_login', 't_login');
	define('d_az_change_user_t_password', 't_password');
	define('d_az_change_user_t_session', 't_session');
	define('d_az_change_user_v_id_az_user', 'v_id_az_user');
	//------------------------------------------------
	# Campos de la tabla az_country
	define('d_az_country_id_az_country', 'id_az_country');
	define('d_az_country_m_by_created', 'm_by_created');
	define('d_az_country_m_by_modified', 'm_by_modified');
	define('d_az_country_m_date_created', 'm_date_created');
	define('d_az_country_m_date_modified', 'm_date_modified');
	define('d_az_country_m_deleted', 'm_deleted');
	define('d_az_country_m_description', 'm_description');
	define('d_az_country_m_level', 'm_level');
	define('d_az_country_m_status', 'm_status');
	define('d_az_country_m_temp', 'm_temp');
	define('d_az_country_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla az_data_personal
	define('d_az_data_personal_id_az_data_personal', 'id_az_data_personal');
	define('d_az_data_personal_m_by_created', 'm_by_created');
	define('d_az_data_personal_m_by_modified', 'm_by_modified');
	define('d_az_data_personal_m_date_created', 'm_date_created');
	define('d_az_data_personal_m_date_modified', 'm_date_modified');
	define('d_az_data_personal_m_deleted', 'm_deleted');
	define('d_az_data_personal_m_description', 'm_description');
	define('d_az_data_personal_m_level', 'm_level');
	define('d_az_data_personal_m_status', 'm_status');
	define('d_az_data_personal_m_temp', 'm_temp');
	define('d_az_data_personal_t_address', 't_address');
	define('d_az_data_personal_t_birth_date', 't_birth_date');
	define('d_az_data_personal_t_names', 't_names');
	define('d_az_data_personal_t_phone_fixed', 't_phone_fixed');
	define('d_az_data_personal_t_phone_movil', 't_phone_movil');
	define('d_az_data_personal_t_surnames', 't_surnames');
	define('d_az_data_personal_v_id_az_country', 'v_id_az_country');
	define('d_az_data_personal_v_id_az_user', 'v_id_az_user');
	//------------------------------------------------
	# Campos de la tabla az_deleted
	define('d_az_deleted_id_az_deleted', 'id_az_deleted');
	define('d_az_deleted_m_by_created', 'm_by_created');
	define('d_az_deleted_m_by_modified', 'm_by_modified');
	define('d_az_deleted_m_date_created', 'm_date_created');
	define('d_az_deleted_m_date_modified', 'm_date_modified');
	define('d_az_deleted_m_description', 'm_description');
	define('d_az_deleted_t_name', 't_name');
	define('d_az_deleted_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla az_icon
	define('d_az_icon_id_az_icon', 'id_az_icon');
	define('d_az_icon_m_by_created', 'm_by_created');
	define('d_az_icon_m_by_modified', 'm_by_modified');
	define('d_az_icon_m_date_created', 'm_date_created');
	define('d_az_icon_m_date_modified', 'm_date_modified');
	define('d_az_icon_m_deleted', 'm_deleted');
	define('d_az_icon_m_description', 'm_description');
	define('d_az_icon_m_level', 'm_level');
	define('d_az_icon_m_status', 'm_status');
	define('d_az_icon_m_temp', 'm_temp');
	define('d_az_icon_t_name', 't_name');
	define('d_az_icon_v_id_az_category_icon', 'v_id_az_category_icon');
	//------------------------------------------------
	# Campos de la tabla az_inner_role_user
	define('d_az_i_r_u_id_az_inner_role_user', 'id_az_inner_role_user');
	define('d_az_i_r_u_m_by_created', 'm_by_created');
	define('d_az_i_r_u_m_by_modified', 'm_by_modified');
	define('d_az_i_r_u_m_date_created', 'm_date_created');
	define('d_az_i_r_u_m_date_modified', 'm_date_modified');
	define('d_az_i_r_u_m_deleted', 'm_deleted');
	define('d_az_i_r_u_m_description', 'm_description');
	define('d_az_i_r_u_m_level', 'm_level');
	define('d_az_i_r_u_m_status', 'm_status');
	define('d_az_i_r_u_m_temp', 'm_temp');
	define('d_az_i_r_u_v_id_az_role', 'v_id_az_role');
	define('d_az_i_r_u_v_id_az_user', 'v_id_az_user');
	//------------------------------------------------
	# Campos de la tabla az_level
	define('d_az_level_id_az_level', 'id_az_level');
	define('d_az_level_m_by_created', 'm_by_created');
	define('d_az_level_m_by_modified', 'm_by_modified');
	define('d_az_level_m_date_created', 'm_date_created');
	define('d_az_level_m_date_modified', 'm_date_modified');
	define('d_az_level_m_description', 'm_description');
	define('d_az_level_t_name', 't_name');
	define('d_az_level_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla az_log
	define('d_az_log_id_az_level', 'id_az_level');
	define('d_az_log_m_by_created', 'm_by_created');
	define('d_az_log_m_by_modified', 'm_by_modified');
	define('d_az_log_m_date_created', 'm_date_created');
	define('d_az_log_m_date_modified', 'm_date_modified');
	define('d_az_log_m_deleted', 'm_deleted');
	define('d_az_log_m_description', 'm_description');
	define('d_az_log_m_level', 'm_level');
	define('d_az_log_m_status', 'm_status');
	define('d_az_log_m_temp', 'm_temp');
	define('d_az_log_t_log', 't_log');
	//------------------------------------------------
	# Campos de la tabla az_menu_crud
	define('d_az_menu_crud_id_az_menu_crud', 'id_az_menu_crud');
	define('d_az_menu_crud_m_by_created', 'm_by_created');
	define('d_az_menu_crud_m_by_modified', 'm_by_modified');
	define('d_az_menu_crud_m_date_created', 'm_date_created');
	define('d_az_menu_crud_m_date_modified', 'm_date_modified');
	define('d_az_menu_crud_m_deleted', 'm_deleted');
	define('d_az_menu_crud_m_description', 'm_description');
	define('d_az_menu_crud_m_level', 'm_level');
	define('d_az_menu_crud_m_status', 'm_status');
	define('d_az_menu_crud_m_temp', 'm_temp');
	define('d_az_menu_crud_t_name', 't_name');
	define('d_az_menu_crud_t_url', 't_url');
	define('d_az_menu_crud_v_id_az_category_menu', 'v_id_az_category_menu');
	define('d_az_menu_crud_v_id_az_icon', 'v_id_az_icon');
	//------------------------------------------------
	# Campos de la tabla az_role
	define('d_az_role_id_az_role', 'id_az_role');
	define('d_az_role_m_by_created', 'm_by_created');
	define('d_az_role_m_by_modified', 'm_by_modified');
	define('d_az_role_m_date_created', 'm_date_created');
	define('d_az_role_m_date_modified', 'm_date_modified');
	define('d_az_role_m_deleted', 'm_deleted');
	define('d_az_role_m_description', 'm_description');
	define('d_az_role_m_level', 'm_level');
	define('d_az_role_m_status', 'm_status');
	define('d_az_role_m_temp', 'm_temp');
	define('d_az_role_t_name', 't_name');
	define('d_az_role_v_id_az_category_role', 'v_id_az_category_role');
	//------------------------------------------------
	# Campos de la tabla az_state
	define('d_az_state_id_az_state', 'id_az_state');
	define('d_az_state_m_by_created', 'm_by_created');
	define('d_az_state_m_by_modified', 'm_by_modified');
	define('d_az_state_m_date_created', 'm_date_created');
	define('d_az_state_m_date_modified', 'm_date_modified');
	define('d_az_state_m_description', 'm_description');
	define('d_az_state_t_name', 't_name');
	define('d_az_state_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla az_sub_menu_crud
	define('d_az_sub_menu_crud_id_az_sub_menu_crud','id_az_sub_menu_crud');
	define('d_az_sub_menu_crud_m_by_created','m_by_created');
	define('d_az_sub_menu_crud_m_by_modified','m_by_modified');
	define('d_az_sub_menu_crud_m_date_created','m_date_created');
	define('d_az_sub_menu_crud_m_date_modified','m_date_modified');
	define('d_az_sub_menu_crud_m_deleted','m_deleted');
	define('d_az_sub_menu_crud_m_description','m_description');
	define('d_az_sub_menu_crud_m_level','m_level');
	define('d_az_sub_menu_crud_m_status','m_status');
	define('d_az_sub_menu_crud_m_temp','m_temp');
	define('d_az_sub_menu_crud_v_id_az_menu_crud','v_id_az_menu_crud');
	define('d_az_sub_menu_crud_v_id_az_sub_under','v_id_az_sub_under');
	//------------------------------------------------
	# Campos de la tabla az_temp
	define('d_az_temp_id_az_temp', 'id_az_temp');
	define('d_az_temp_m_by_created', 'm_by_created');
	define('d_az_temp_m_by_modified', 'm_by_modified');
	define('d_az_temp_m_date_created', 'm_date_created');
	define('d_az_temp_m_date_modified', 'm_date_modified');
	define('d_az_temp_m_description', 'm_description');
	define('d_az_temp_t_name', 't_name');
	define('d_az_temp_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla az_user
	define('d_az_user_id_az_user', 'id_az_user');
	define('d_az_user_m_by_created', 'm_by_created');
	define('d_az_user_m_by_modified', 'm_by_modified');
	define('d_az_user_m_date_created', 'm_date_created');
	define('d_az_user_m_date_modified', 'm_date_modified');
	define('d_az_user_m_deleted', 'm_deleted');
	define('d_az_user_m_description', 'm_description');
	define('d_az_user_m_level', 'm_level');
	define('d_az_user_m_status', 'm_status');
	define('d_az_user_m_temp', 'm_temp');
	define('d_az_user_t_email', 't_email');
	define('d_az_user_t_key_active', 't_key_active');
	define('d_az_user_t_key_password', 't_key_password');
	define('d_az_user_t_key_password_temp', 't_key_password_temp');
	define('d_az_user_t_key_status', 't_key_status');
	define('d_az_user_t_last_connection', 't_last_connection');
	define('d_az_user_t_login', 't_login');
	define('d_az_user_t_password', 't_password');
	define('d_az_user_t_session', 't_session');
	//------------------------------------------------
	# Campos de la tabla pd_base_salary
	define('d_pd_base_salary_id_pd_base_salary', 'id_pd_base_salary');
	define('d_pd_base_salary_m_by_created', 'm_by_created');
	define('d_pd_base_salary_m_by_modified', 'm_by_modified');
	define('d_pd_base_salary_m_date_created', 'm_date_created');
	define('d_pd_base_salary_m_date_modified', 'm_date_modified');
	define('d_pd_base_salary_m_deleted', 'm_deleted');
	define('d_pd_base_salary_m_description', 'm_description');
	define('d_pd_base_salary_m_level', 'm_level');
	define('d_pd_base_salary_m_status', 'm_status');
	define('d_pd_base_salary_m_temp', 'm_temp');
	define('d_pd_base_salary_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla pd_birth_place
	define('d_pd_birth_place_id_pd_birth_place', 'id_pd_birth_place');
	define('d_pd_birth_place_m_by_created', 'm_by_created');
	define('d_pd_birth_place_m_by_modified', 'm_by_modified');
	define('d_pd_birth_place_m_date_created', 'm_date_created');
	define('d_pd_birth_place_m_date_modified', 'm_date_modified');
	define('d_pd_birth_place_m_deleted', 'm_deleted');
	define('d_pd_birth_place_m_description', 'm_description');
	define('d_pd_birth_place_m_level', 'm_level');
	define('d_pd_birth_place_m_status', 'm_status');
	define('d_pd_birth_place_m_temp', 'm_temp');
	define('d_pd_birth_place_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_brand
	define('d_pd_brand_id_pd_brand', 'id_pd_brand');
	define('d_pd_brand_m_by_created', 'm_by_created');
	define('d_pd_brand_m_by_modified', 'm_by_modified');
	define('d_pd_brand_m_date_created', 'm_date_created');
	define('d_pd_brand_m_date_modified', 'm_date_modified');
	define('d_pd_brand_m_deleted', 'm_deleted');
	define('d_pd_brand_m_description', 'm_description');
	define('d_pd_brand_m_level', 'm_level');
	define('d_pd_brand_m_status', 'm_status');
	define('d_pd_brand_m_temp', 'm_temp');
	define('d_pd_brand_t_name', 't_name');
	define('d_pd_brand_v_id_pd_category_brand', 'v_id_pd_category_brand');
	//------------------------------------------------
	# Campos de la tabla pd_campaign
	define('d_pd_campaign_id_pd_campaign', 'id_pd_campaign');
	define('d_pd_campaign_m_by_created', 'm_by_created');
	define('d_pd_campaign_m_by_modified', 'm_by_modified');
	define('d_pd_campaign_m_date_created', 'm_date_created');
	define('d_pd_campaign_m_date_modified', 'm_date_modified');
	define('d_pd_campaign_m_deleted', 'm_deleted');
	define('d_pd_campaign_m_description', 'm_description');
	define('d_pd_campaign_m_level', 'm_level');
	define('d_pd_campaign_m_status', 'm_status');
	define('d_pd_campaign_m_temp', 'm_temp');
	define('d_pd_campaign_t_name', 't_name');
	define('d_pd_campaign_v_id_pd_category_campaign', 'v_id_pd_category_campaign');
	//------------------------------------------------
	# Campos de la tabla pd_category_brand
	define('d_pd_category_brand_id_pd_category_brand', 'id_pd_category_brand');
	define('d_pd_category_brand_m_by_created', 'm_by_created');
	define('d_pd_category_brand_m_by_modified', 'm_by_modified');
	define('d_pd_category_brand_m_date_created', 'm_date_created');
	define('d_pd_category_brand_m_date_modified', 'm_date_modified');
	define('d_pd_category_brand_m_deleted', 'm_deleted');
	define('d_pd_category_brand_m_description', 'm_description');
	define('d_pd_category_brand_m_level', 'm_level');
	define('d_pd_category_brand_m_status', 'm_status');
	define('d_pd_category_brand_m_temp', 'm_temp');
	define('d_pd_category_brand_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_category_campaign
	define('d_pd_category_campaign_id_pd_category_campaign', 'id_pd_category_campaign');
	define('d_pd_category_campaign_m_by_created', 'm_by_created');
	define('d_pd_category_campaign_m_by_modified', 'm_by_modified');
	define('d_pd_category_campaign_m_date_created', 'm_date_created');
	define('d_pd_category_campaign_m_date_modified', 'm_date_modified');
	define('d_pd_category_campaign_m_deleted', 'm_deleted');
	define('d_pd_category_campaign_m_description', 'm_description');
	define('d_pd_category_campaign_m_level', 'm_level');
	define('d_pd_category_campaign_m_status', 'm_status');
	define('d_pd_category_campaign_m_temp', 'm_temp');
	define('d_pd_category_campaign_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_category_horary
	define('d_pd_category_horary_id_pd_category_horary', 'id_pd_category_horary');
	define('d_pd_category_horary_m_by_created', 'm_by_created');
	define('d_pd_category_horary_m_by_modified', 'm_by_modified');
	define('d_pd_category_horary_m_date_created', 'm_date_created');
	define('d_pd_category_horary_m_date_modified', 'm_date_modified');
	define('d_pd_category_horary_m_deleted', 'm_deleted');
	define('d_pd_category_horary_m_description', 'm_description');
	define('d_pd_category_horary_m_level', 'm_level');
	define('d_pd_category_horary_m_status', 'm_status');
	define('d_pd_category_horary_m_temp', 'm_temp');
	define('d_pd_category_horary_t_name', 't_name');
	define('d_pd_category_horary_active_pause_hour_final', 'active_pause_hour_final');
	define('d_pd_category_horary_active_pause_hour_start', 'active_pause_hour_start');
	define('d_pd_category_horary_active_pause_time_total', 'active_pause_time_total');
	define('d_pd_category_horary_break_hour_final', 'break_hour_final');
	define('d_pd_category_horary_break_hour_start', 'break_hour_start');
	define('d_pd_category_horary_break_time_total', 'break_time_total');
	define('d_pd_category_horary_lunch_hour_final', 'lunch_hour_final');
	define('d_pd_category_horary_lunch_hour_start', 'lunch_hour_start');
	define('d_pd_category_horary_lunch_time_total', 'lunch_time_total');
	define('d_pd_category_horary_work_1_hour_final', 'work_1_hour_final');
	define('d_pd_category_horary_work_1_hour_start', 'work_1_hour_start');
	define('d_pd_category_horary_work_1_time_total', 'work_1_time_total');
	define('d_pd_category_horary_work_2_hour_final', 'work_2_hour_final');
	define('d_pd_category_horary_work_2_hour_start', 'work_2_hour_start');
	define('d_pd_category_horary_work_2_time_total', 'work_2_time_total');
	define('d_pd_category_horary_work_3_hour_final', 'work_3_hour_final');
	define('d_pd_category_horary_work_3_hour_start', 'work_3_hour_start');
	define('d_pd_category_horary_work_3_time_total', 'work_3_time_total');
	define('d_pd_category_horary_work_4_hour_final', 'work_4_hour_final');
	define('d_pd_category_horary_work_4_hour_start', 'work_4_hour_start');
	define('d_pd_category_horary_work_4_time_total', 'work_4_time_total');
	define('d_pd_category_horary_working_hours', 'working_hours');
	//------------------------------------------------
	# Campos de la tabla pd_category_provider
	define('d_pd_category_provider_id_pd_category_provider', 'id_pd_category_provider');
	define('d_pd_category_provider_m_by_created', 'm_by_created');
	define('d_pd_category_provider_m_by_modified', 'm_by_modified');
	define('d_pd_category_provider_m_date_created', 'm_date_created');
	define('d_pd_category_provider_m_date_modified', 'm_date_modified');
	define('d_pd_category_provider_m_deleted', 'm_deleted');
	define('d_pd_category_provider_m_description', 'm_description');
	define('d_pd_category_provider_m_level', 'm_level');
	define('d_pd_category_provider_m_status', 'm_status');
	define('d_pd_category_provider_m_temp', 'm_temp');
	define('d_pd_category_provider_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_category_novelty
	define('d_pd_category_novelty_id_pd_category_novelty', 'id_pd_category_novelty');
	define('d_pd_category_novelty_m_by_created', 'm_by_created');
	define('d_pd_category_novelty_m_by_modified', 'm_by_modified');
	define('d_pd_category_novelty_m_date_created', 'm_date_created');
	define('d_pd_category_novelty_m_date_modified', 'm_date_modified');
	define('d_pd_category_novelty_m_deleted', 'm_deleted');
	define('d_pd_category_novelty_m_description', 'm_description');
	define('d_pd_category_novelty_m_level', 'm_level');
	define('d_pd_category_novelty_m_status', 'm_status');
	define('d_pd_category_novelty_m_temp', 'm_temp');
	define('d_pd_category_novelty_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_change_diadem
	define('d_pd_change_diadem_id_pd_change_diadem', 'id_pd_change_diadem');
	define('d_pd_change_diadem_m_by_created', 'm_by_created');
	define('d_pd_change_diadem_m_by_modified', 'm_by_modified');
	define('d_pd_change_diadem_m_date_created', 'm_date_created');
	define('d_pd_change_diadem_m_date_modified', 'm_date_modified');
	define('d_pd_change_diadem_m_deleted', 'm_deleted');
	define('d_pd_change_diadem_m_description', 'm_description');
	define('d_pd_change_diadem_m_level', 'm_level');
	define('d_pd_change_diadem_m_status', 'm_status');
	define('d_pd_change_diadem_m_temp', 'm_temp');
	define('d_pd_change_diadem_t_date_change', 't_date_change');
	define('d_pd_change_diadem_v_id_pd_data_personal', 'v_id_pd_data_personal');
	//------------------------------------------------
	# Campos de la tabla pd_civil_status
	define('d_pd_civil_status_id_pd_civil_status', 'id_pd_civil_status');
	define('d_pd_civil_status_m_by_created', 'm_by_created');
	define('d_pd_civil_status_m_by_modified', 'm_by_modified');
	define('d_pd_civil_status_m_date_created', 'm_date_created');
	define('d_pd_civil_status_m_date_modified', 'm_date_modified');
	define('d_pd_civil_status_m_deleted', 'm_deleted');
	define('d_pd_civil_status_m_description', 'm_description');
	define('d_pd_civil_status_m_level', 'm_level');
	define('d_pd_civil_status_m_status', 'm_status');
	define('d_pd_civil_status_m_temp', 'm_temp');
	define('d_pd_civil_status_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_coa_accumulated_management
	/*define('d_pd_coa_a_m_id_pd_coa_accumulated_management', 'id_pd_coa_accumulated_management');
	define('d_pd_coa_a_m_m_by_created', 'm_by_created');
	define('d_pd_coa_a_m_m_by_modified', 'm_by_modified');
	define('d_pd_coa_a_m_m_date_created', 'm_date_created');
	define('d_pd_coa_a_m_m_date_modified', 'm_date_modified');
	define('d_pd_coa_a_m_m_deleted', 'm_deleted');
	define('d_pd_coa_a_m_m_description', 'm_description');
	define('d_pd_coa_a_m_m_level', 'm_level');
	define('d_pd_coa_a_m_m_status', 'm_status');
	define('d_pd_coa_a_m_m_temp', 'm_temp');
	define('d_pd_coa_a_m_t_numeroid', 't_numeroid');
	define('d_pd_coa_a_m_t_nombre', 't_nombre');
	define('d_pd_coa_a_m_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_coa_a_m_t_gestion_apoyo', 't_gestion_apoyo');
	define('d_pd_coa_a_m_t_tipificacion', 't_tipificacion');
	define('d_pd_coa_a_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_coa_better_management
	/*define('d_pd_coa_b_m_id_pd_coa_better_management', 'id_pd_coa_better_management');
	define('d_pd_coa_b_m_m_by_created', 'm_by_created');
	define('d_pd_coa_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_coa_b_m_m_date_created', 'm_date_created');
	define('d_pd_coa_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_coa_b_m_m_deleted', 'm_deleted');
	define('d_pd_coa_b_m_m_description', 'm_description');
	define('d_pd_coa_b_m_m_level', 'm_level');
	define('d_pd_coa_b_m_m_status', 'm_status');
	define('d_pd_coa_b_m_m_temp', 'm_temp');
	define('d_pd_coa_b_m_t_numeroid', 't_numeroid');
	define('d_pd_coa_b_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_coa_final_better_management
	/*define('d_pd_coa_f_b_m_id_pd_coa_final_better_management', 'id_pd_coa_final_better_management');
	define('d_pd_coa_f_b_m_m_by_created', 'm_by_created');
	define('d_pd_coa_f_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_coa_f_b_m_m_date_created', 'm_date_created');
	define('d_pd_coa_f_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_coa_f_b_m_m_deleted', 'm_deleted');
	define('d_pd_coa_f_b_m_m_description', 'm_description');
	define('d_pd_coa_f_b_m_m_level', 'm_level');
	define('d_pd_coa_f_b_m_m_status', 'm_status');
	define('d_pd_coa_f_b_m_m_temp', 'm_temp');
	define('d_pd_coa_f_b_m_t_accumulated_management', 't_accumulated_management');
	define('d_pd_coa_f_b_m_t_better_management', 't_better_management');
	define('d_pd_coa_f_b_m_t_identification_number', 't_identification_number');
	define('d_pd_coa_f_b_m_t_names_last_names', 't_names_last_names');
	define('d_pd_coa_f_b_m_t_support_management', 't_support_management');
	define('d_pd_coa_f_b_m_t_typing', 't_typing');
	define('d_pd_coa_f_b_m_v_id_pd_coa_report_better_management', 'v_id_pd_coa_report_better_management');*/
	//------------------------------------------------
	# Campos de la tabla pd_coa_last_typing
	/*define('d_pd_coa_l_t_id_pd_coa_last_typing', 'id_pd_coa_last_typing');
	define('d_pd_coa_l_t_m_by_created', 'm_by_created');
	define('d_pd_coa_l_t_m_by_modified', 'm_by_modified');
	define('d_pd_coa_l_t_m_date_created', 'm_date_created');
	define('d_pd_coa_l_t_m_date_modified', 'm_date_modified');
	define('d_pd_coa_l_t_m_deleted', 'm_deleted');
	define('d_pd_coa_l_t_m_description', 'm_description');
	define('d_pd_coa_l_t_m_level', 'm_level');
	define('d_pd_coa_l_t_m_status', 'm_status');
	define('d_pd_coa_l_t_m_temp', 'm_temp');
	define('d_pd_coa_l_t_t_numeroid', 't_numeroid');
	define('d_pd_coa_l_t_t_tipificacion', 't_tipificacion');*/
	//------------------------------------------------
	# Campos de la tabla pd_coa_management_mechanisms_support
	/*define('d_pd_coa_m_m_s_id_pd_coa_management_mechanisms_support', 'id_pd_coa_management_mechanisms_support');
	define('d_pd_coa_m_m_s_m_by_created', 'm_by_created');
	define('d_pd_coa_m_m_s_m_by_modified', 'm_by_modified');
	define('d_pd_coa_m_m_s_m_date_created', 'm_date_created');
	define('d_pd_coa_m_m_s_m_date_modified', 'm_date_modified');
	define('d_pd_coa_m_m_s_m_deleted', 'm_deleted');
	define('d_pd_coa_m_m_s_m_description', 'm_description');
	define('d_pd_coa_m_m_s_m_level', 'm_level');
	define('d_pd_coa_m_m_s_m_status', 'm_status');
	define('d_pd_coa_m_m_s_m_temp', 'm_temp');
	define('d_pd_coa_m_m_s_t_numeroid', 't_numeroid');
	define('d_pd_coa_m_m_s_t_nombre', 't_nombre');
	define('d_pd_coa_m_m_s_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_coa_m_m_s_t_gestion_apoyo', 't_gestion_apoyo');*/
	//------------------------------------------------
	# Campos de la tabla pd_coa_report_better_management
	/*define('d_pd_coa_r_b_m_id_pd_coa_report_better_management', 'id_pd_coa_report_better_management');
	define('d_pd_coa_r_b_m_m_by_created', 'm_by_created');
	define('d_pd_coa_r_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_coa_r_b_m_m_date_created', 'm_date_created');
	define('d_pd_coa_r_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_coa_r_b_m_m_deleted', 'm_deleted');
	define('d_pd_coa_r_b_m_m_description', 'm_description');
	define('d_pd_coa_r_b_m_m_level', 'm_level');
	define('d_pd_coa_r_b_m_m_status', 'm_status');
	define('d_pd_coa_r_b_m_m_temp', 'm_temp');
	define('d_pd_coa_r_b_m_t_report_name', 't_report_name');
	define('d_pd_coa_r_b_m_t_report_date', 't_report_date');
	define('d_pd_coa_r_b_m_v_id_az_user', 'v_id_az_user');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_accumulated_management
	/*define('d_pd_com_a_m_id_pd_com_accumulated_management', 'id_pd_com_accumulated_management');
	define('d_pd_com_a_m_m_by_created', 'm_by_created');
	define('d_pd_com_a_m_m_by_modified', 'm_by_modified');
	define('d_pd_com_a_m_m_date_created', 'm_date_created');
	define('d_pd_com_a_m_m_date_modified', 'm_date_modified');
	define('d_pd_com_a_m_m_deleted', 'm_deleted');
	define('d_pd_com_a_m_m_description', 'm_description');
	define('d_pd_com_a_m_m_level', 'm_level');
	define('d_pd_com_a_m_m_status', 'm_status');
	define('d_pd_com_a_m_m_temp', 'm_temp');
	define('d_pd_com_a_m_t_numeroid', 't_numeroid');
	define('d_pd_com_a_m_t_nombre', 't_nombre');
	define('d_pd_com_a_m_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_com_a_m_t_gestion_apoyo', 't_gestion_apoyo');
	define('d_pd_com_a_m_t_tipificacion', 't_tipificacion');
	define('d_pd_com_a_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_better_management
	/*define('d_pd_com_b_m_id_pd_com_better_management', 'id_pd_com_better_management');
	define('d_pd_com_b_m_m_by_created', 'm_by_created');
	define('d_pd_com_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_com_b_m_m_date_created', 'm_date_created');
	define('d_pd_com_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_com_b_m_m_deleted', 'm_deleted');
	define('d_pd_com_b_m_m_description', 'm_description');
	define('d_pd_com_b_m_m_level', 'm_level');
	define('d_pd_com_b_m_m_status', 'm_status');
	define('d_pd_com_b_m_m_temp', 'm_temp');
	define('d_pd_com_b_m_t_numeroid', 't_numeroid');
	define('d_pd_com_b_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_final_better_management
	/*define('d_pd_com_f_b_m_id_pd_com_final_better_management', 'id_pd_com_final_better_management');
	define('d_pd_com_f_b_m_m_by_created', 'm_by_created');
	define('d_pd_com_f_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_com_f_b_m_m_date_created', 'm_date_created');
	define('d_pd_com_f_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_com_f_b_m_m_deleted', 'm_deleted');
	define('d_pd_com_f_b_m_m_description', 'm_description');
	define('d_pd_com_f_b_m_m_level', 'm_level');
	define('d_pd_com_f_b_m_m_status', 'm_status');
	define('d_pd_com_f_b_m_m_temp', 'm_temp');
	define('d_pd_com_f_b_m_t_accumulated_management', 't_accumulated_management');
	define('d_pd_com_f_b_m_t_better_management', 't_better_management');
	define('d_pd_com_f_b_m_t_identification_number', 't_identification_number');
	define('d_pd_com_f_b_m_t_names_last_names', 't_names_last_names');
	define('d_pd_com_f_b_m_t_support_management', 't_support_management');
	define('d_pd_com_f_b_m_t_typing', 't_typing');
	define('d_pd_com_f_b_m_v_id_pd_com_report_better_management', 'v_id_pd_com_report_better_management');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_last_typing
	/*define('d_pd_com_l_t_id_pd_com_last_typing', 'id_pd_com_last_typing');
	define('d_pd_com_l_t_m_by_created', 'm_by_created');
	define('d_pd_com_l_t_m_by_modified', 'm_by_modified');
	define('d_pd_com_l_t_m_date_created', 'm_date_created');
	define('d_pd_com_l_t_m_date_modified', 'm_date_modified');
	define('d_pd_com_l_t_m_deleted', 'm_deleted');
	define('d_pd_com_l_t_m_description', 'm_description');
	define('d_pd_com_l_t_m_level', 'm_level');
	define('d_pd_com_l_t_m_status', 'm_status');
	define('d_pd_com_l_t_m_temp', 'm_temp');
	define('d_pd_com_l_t_t_numeroid', 't_numeroid');
	define('d_pd_com_l_t_t_tipificacion', 't_tipificacion');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_management_mechanisms_support
	/*define('d_pd_com_m_m_s_id_pd_com_management_mechanisms_support', 'id_pd_com_management_mechanisms_support');
	define('d_pd_com_m_m_s_m_by_created', 'm_by_created');
	define('d_pd_com_m_m_s_m_by_modified', 'm_by_modified');
	define('d_pd_com_m_m_s_m_date_created', 'm_date_created');
	define('d_pd_com_m_m_s_m_date_modified', 'm_date_modified');
	define('d_pd_com_m_m_s_m_deleted', 'm_deleted');
	define('d_pd_com_m_m_s_m_description', 'm_description');
	define('d_pd_com_m_m_s_m_level', 'm_level');
	define('d_pd_com_m_m_s_m_status', 'm_status');
	define('d_pd_com_m_m_s_m_temp', 'm_temp');
	define('d_pd_com_m_m_s_t_numeroid', 't_numeroid');
	define('d_pd_com_m_m_s_t_nombre', 't_nombre');
	define('d_pd_com_m_m_s_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_com_m_m_s_t_gestion_apoyo', 't_gestion_apoyo');*/
	//------------------------------------------------
	# Campos de la tabla pd_com_report_better_management
	/*define('d_pd_com_r_b_m_id_pd_com_report_better_management', 'id_pd_com_report_better_management');
	define('d_pd_com_r_b_m_m_by_created', 'm_by_created');
	define('d_pd_com_r_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_com_r_b_m_m_date_created', 'm_date_created');
	define('d_pd_com_r_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_com_r_b_m_m_deleted', 'm_deleted');
	define('d_pd_com_r_b_m_m_description', 'm_description');
	define('d_pd_com_r_b_m_m_level', 'm_level');
	define('d_pd_com_r_b_m_m_status', 'm_status');
	define('d_pd_com_r_b_m_m_temp', 'm_temp');
	define('d_pd_com_r_b_m_t_report_name', 't_report_name');
	define('d_pd_com_r_b_m_t_report_date', 't_report_date');
	define('d_pd_com_r_b_m_v_id_az_user', 'v_id_az_user');*/
	//------------------------------------------------
	# Campos de la tabla pd_contract_type
	define('d_pd_contract_type_id_pd_contract_type', 'id_pd_contract_type');
	define('d_pd_contract_type_m_by_created', 'm_by_created');
	define('d_pd_contract_type_m_by_modified', 'm_by_modified');
	define('d_pd_contract_type_m_date_created', 'm_date_created');
	define('d_pd_contract_type_m_date_modified', 'm_date_modified');
	define('d_pd_contract_type_m_deleted', 'm_deleted');
	define('d_pd_contract_type_m_description', 'm_description');
	define('d_pd_contract_type_m_level', 'm_level');
	define('d_pd_contract_type_m_status', 'm_status');
	define('d_pd_contract_type_m_temp', 'm_temp');
	define('d_pd_contract_type_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_daily_activities
	define('d_pd_daily_activities_id_pd_daily_activities', 'id_pd_daily_activities');
	define('d_pd_daily_activities_m_by_created', 'm_by_created');
	define('d_pd_daily_activities_m_by_modified', 'm_by_modified');
	define('d_pd_daily_activities_m_date_created', 'm_date_created');
	define('d_pd_daily_activities_m_date_modified', 'm_date_modified');
	define('d_pd_daily_activities_m_deleted', 'm_deleted');
	define('d_pd_daily_activities_m_description', 'm_description');
	define('d_pd_daily_activities_m_level', 'm_level');
	define('d_pd_daily_activities_m_status', 'm_status');
	define('d_pd_daily_activities_m_temp', 'm_temp');
	define('d_pd_daily_activities_t_date', 't_date');
	define('d_pd_daily_activities_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_data_business
	define('d_pd_data_business_id_pd_data_business', 'id_pd_data_business');
	define('d_pd_data_business_m_by_created', 'm_by_created');
	define('d_pd_data_business_m_by_modified', 'm_by_modified');
	define('d_pd_data_business_m_date_created', 'm_date_created');
	define('d_pd_data_business_m_date_modified', 'm_date_modified');
	define('d_pd_data_business_m_deleted', 'm_deleted');
	define('d_pd_data_business_m_description', 'm_description');
	define('d_pd_data_business_m_level', 'm_level');
	define('d_pd_data_business_m_status', 'm_status');
	define('d_pd_data_business_m_temp', 'm_temp');
	define('d_pd_data_business_t_data_personal', 't_data_personal');
	define('d_pd_data_business_t_date_admission', 't_date_admission');
	define('d_pd_data_business_t_date_contract_termination', 't_date_contract_termination');
	define('d_pd_data_business_t_value_bonus', 't_value_bonus');
	define('d_pd_data_business_v_id_pd_base_salary', 'v_id_pd_base_salary');
	define('d_pd_data_business_v_id_pd_campaign', 'v_id_pd_campaign');
	define('d_pd_data_business_v_id_pd_contract_type', 'v_id_pd_contract_type');
	define('d_pd_data_business_v_id_pd_data_personal', 'v_id_pd_data_personal');
	define('d_pd_data_business_v_id_pd_employee_charge', 'v_id_pd_employee_charge');
	define('d_pd_data_business_v_id_pd_transport_assistance', 'v_id_pd_transport_assistance');
	//------------------------------------------------
	# Campos de la tabla pd_data_personal
	define('d_pd_data_personal_id_pd_data_personal', 'id_pd_data_personal');
	define('d_pd_data_personal_m_by_created', 'm_by_created');
	define('d_pd_data_personal_m_by_modified', 'm_by_modified');
	define('d_pd_data_personal_m_date_created', 'm_date_created');
	define('d_pd_data_personal_m_date_modified', 'm_date_modified');
	define('d_pd_data_personal_m_deleted', 'm_deleted');
	define('d_pd_data_personal_m_description', 'm_description');
	define('d_pd_data_personal_m_level', 'm_level');
	define('d_pd_data_personal_m_status', 'm_status');
	define('d_pd_data_personal_m_temp', 'm_temp');
	define('d_pd_data_personal_t_address', 't_address');
	define('d_pd_data_personal_t_birth_date', 't_birth_date');
	define('d_pd_data_personal_t_email', 't_email');
	define('d_pd_data_personal_t_identification', 't_identification');
	define('d_pd_data_personal_t_names', 't_names');
	define('d_pd_data_personal_t_phone_fixed', 't_phone_fixed');
	define('d_pd_data_personal_t_phone_movil', 't_phone_movil');
	define('d_pd_data_personal_t_surnames', 't_surnames');
	define('d_pd_data_personal_v_id_pd_birth_place', 'v_id_pd_birth_place');
	define('d_pd_data_personal_v_id_pd_civil_status', 'v_id_pd_civil_status');
	define('d_pd_data_personal_v_id_pd_document_type', 'v_id_pd_document_type');
	define('d_pd_data_personal_v_id_pd_eps', 'v_id_pd_eps');
	define('d_pd_data_personal_v_id_pd_level_study', 'v_id_pd_level_study');
	define('d_pd_data_personal_v_id_pd_neighborhood', 'v_id_pd_neighborhood');
	define('d_pd_data_personal_v_id_pd_pension', 'v_id_pd_pension');
	//------------------------------------------------
	# Campos de la tabla pd_document_type
	define('d_pd_document_type_id_pd_document_type', 'id_pd_document_type');
	define('d_pd_document_type_m_by_created', 'm_by_created');
	define('d_pd_document_type_m_by_modified', 'm_by_modified');
	define('d_pd_document_type_m_date_created', 'm_date_created');
	define('d_pd_document_type_m_date_modified', 'm_date_modified');
	define('d_pd_document_type_m_deleted', 'm_deleted');
	define('d_pd_document_type_m_description', 'm_description');
	define('d_pd_document_type_m_level', 'm_level');
	define('d_pd_document_type_m_status', 'm_status');
	define('d_pd_document_type_m_temp', 'm_temp');
	define('d_pd_document_type_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_employee_charge
	define('d_pd_employee_charge_id_pd_employee_charge', 'id_pd_employee_charge');
	define('d_pd_employee_charge_m_by_created', 'm_by_created');
	define('d_pd_employee_charge_m_by_modified', 'm_by_modified');
	define('d_pd_employee_charge_m_date_created', 'm_date_created');
	define('d_pd_employee_charge_m_date_modified', 'm_date_modified');
	define('d_pd_employee_charge_m_deleted', 'm_deleted');
	define('d_pd_employee_charge_m_description', 'm_description');
	define('d_pd_employee_charge_m_level', 'm_level');
	define('d_pd_employee_charge_m_status', 'm_status');
	define('d_pd_employee_charge_m_temp', 'm_temp');
	define('d_pd_employee_charge_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_eps
	define('d_pd_eps_id_pd_eps', 'id_pd_eps');
	define('d_pd_eps_m_by_created', 'm_by_created');
	define('d_pd_eps_m_by_modified', 'm_by_modified');
	define('d_pd_eps_m_date_created', 'm_date_created');
	define('d_pd_eps_m_date_modified', 'm_date_modified');
	define('d_pd_eps_m_deleted', 'm_deleted');
	define('d_pd_eps_m_description', 'm_description');
	define('d_pd_eps_m_level', 'm_level');
	define('d_pd_eps_m_status', 'm_status');
	define('d_pd_eps_m_temp', 'm_temp');
	define('d_pd_eps_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_base_salary
	define('d_pd_exchange_base_salary_id_pd_exchange_base_salary', 'id_pd_exchange_base_salary');
	define('d_pd_exchange_base_salary_m_by_created', 'm_by_created');
	define('d_pd_exchange_base_salary_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_base_salary_m_date_created', 'm_date_created');
	define('d_pd_exchange_base_salary_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_base_salary_m_deleted', 'm_deleted');
	define('d_pd_exchange_base_salary_m_description', 'm_description');
	define('d_pd_exchange_base_salary_m_level', 'm_level');
	define('d_pd_exchange_base_salary_m_status', 'm_status');
	define('d_pd_exchange_base_salary_m_temp', 'm_temp');
	define('d_pd_exchange_base_salary_t_value', 't_value');
	define('d_pd_exchange_base_salary_v_id_pd_base_salary', 'v_id_pd_base_salary');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_birth_place
	define('d_pd_exchange_birth_place_id_pd_exchange_birth_place', 'id_pd_exchange_birth_place');
	define('d_pd_exchange_birth_place_m_by_created', 'm_by_created');
	define('d_pd_exchange_birth_place_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_birth_place_m_date_created', 'm_date_created');
	define('d_pd_exchange_birth_place_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_birth_place_m_deleted', 'm_deleted');
	define('d_pd_exchange_birth_place_m_description', 'm_description');
	define('d_pd_exchange_birth_place_m_level', 'm_level');
	define('d_pd_exchange_birth_place_m_status', 'm_status');
	define('d_pd_exchange_birth_place_m_temp', 'm_temp');
	define('d_pd_exchange_birth_place_t_name', 't_name');
	define('d_pd_exchange_birth_place_v_id_pd_birth_place', 'v_id_pd_birth_place');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_brand
	define('d_pd_exchange_brand_id_pd_exchange_brand', 'id_pd_exchange_brand');
	define('d_pd_exchange_brand_m_by_created', 'm_by_created');
	define('d_pd_exchange_brand_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_brand_m_date_created', 'm_date_created');
	define('d_pd_exchange_brand_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_brand_m_deleted', 'm_deleted');
	define('d_pd_exchange_brand_m_description', 'm_description');
	define('d_pd_exchange_brand_m_level', 'm_level');
	define('d_pd_exchange_brand_m_status', 'm_status');
	define('d_pd_exchange_brand_m_temp', 'm_temp');
	define('d_pd_exchange_brand_t_name', 't_name');
	define('d_pd_exchange_brand_t_pd_category_brand_t_name', 't_pd_category_brand_t_name');
	define('d_pd_exchange_brand_v_id_pd_brand', 'v_id_pd_brand');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_campaign
	define('d_pd_exchange_campaign_id_pd_exchange_campaign', 'id_pd_exchange_campaign');
	define('d_pd_exchange_campaign_m_by_created', 'm_by_created');
	define('d_pd_exchange_campaign_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_campaign_m_date_created', 'm_date_created');
	define('d_pd_exchange_campaign_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_campaign_m_deleted', 'm_deleted');
	define('d_pd_exchange_campaign_m_description', 'm_description');
	define('d_pd_exchange_campaign_m_level', 'm_level');
	define('d_pd_exchange_campaign_m_status', 'm_status');
	define('d_pd_exchange_campaign_m_temp', 'm_temp');
	define('d_pd_exchange_campaign_t_name', 't_name');
	define('d_pd_exchange_campaign_t_pd_category_campaign_t_name', 't_pd_category_campaign_t_name');
	define('d_pd_exchange_campaign_v_id_pd_campaign', 'v_id_pd_campaign');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_category_brand
	define('d_pd_exchange_category_brand_id_pd_exchange_category_brand', 'id_pd_exchange_category_brand');
	define('d_pd_exchange_category_brand_m_by_created', 'm_by_created');
	define('d_pd_exchange_category_brand_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_category_brand_m_date_created', 'm_date_created');
	define('d_pd_exchange_category_brand_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_category_brand_m_deleted', 'm_deleted');
	define('d_pd_exchange_category_brand_m_description', 'm_description');
	define('d_pd_exchange_category_brand_m_level', 'm_level');
	define('d_pd_exchange_category_brand_m_status', 'm_status');
	define('d_pd_exchange_category_brand_m_temp', 'm_temp');
	define('d_pd_exchange_category_brand_t_name', 't_name');
	define('d_pd_exchange_category_brand_v_id_pd_category_brand', 'v_id_pd_category_brand');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_category_campaign
	define('d_pd_exchange_category_campaign_id_pd_exchange_category_campaign', 'id_pd_exchange_category_campaign');
	define('d_pd_exchange_category_campaign_m_by_created', 'm_by_created');
	define('d_pd_exchange_category_campaign_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_category_campaign_m_date_created', 'm_date_created');
	define('d_pd_exchange_category_campaign_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_category_campaign_m_deleted', 'm_deleted');
	define('d_pd_exchange_category_campaign_m_description', 'm_description');
	define('d_pd_exchange_category_campaign_m_level', 'm_level');
	define('d_pd_exchange_category_campaign_m_status', 'm_status');
	define('d_pd_exchange_category_campaign_m_temp', 'm_temp');
	define('d_pd_exchange_category_campaign_t_name', 't_name');
	define('d_pd_exchange_category_campaign_v_id_pd_category_campaign', 'v_id_pd_category_campaign');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_category_provider
	define('d_pd_exchange_category_provider_id_pd_exchange_category_provider', 'id_pd_exchange_category_provider');
	define('d_pd_exchange_category_provider_m_by_created', 'm_by_created');
	define('d_pd_exchange_category_provider_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_category_provider_m_date_created', 'm_date_created');
	define('d_pd_exchange_category_provider_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_category_provider_m_deleted', 'm_deleted');
	define('d_pd_exchange_category_provider_m_description', 'm_description');
	define('d_pd_exchange_category_provider_m_level', 'm_level');
	define('d_pd_exchange_category_provider_m_status', 'm_status');
	define('d_pd_exchange_category_provider_m_temp', 'm_temp');
	define('d_pd_exchange_category_provider_t_name', 't_name');
	define('d_pd_exchange_category_provider_v_id_pd_category_provider', 'v_id_pd_category_provider');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_category_novelty
	define('d_pd_exchange_category_novelty_id_pd_exchange_category_novelty', 'id_pd_exchange_category_novelty');
	define('d_pd_exchange_category_novelty_m_by_created', 'm_by_created');
	define('d_pd_exchange_category_novelty_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_category_novelty_m_date_created', 'm_date_created');
	define('d_pd_exchange_category_novelty_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_category_novelty_m_deleted', 'm_deleted');
	define('d_pd_exchange_category_novelty_m_description', 'm_description');
	define('d_pd_exchange_category_novelty_m_level', 'm_level');
	define('d_pd_exchange_category_novelty_m_status', 'm_status');
	define('d_pd_exchange_category_novelty_m_temp', 'm_temp');
	define('d_pd_exchange_category_novelty_t_name', 't_name');
	define('d_pd_exchange_category_novelty_v_id_pd_category_novelty', 'v_id_pd_category_novelty');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_civil_status
	define('d_pd_exchange_civil_status_id_pd_exchange_civil_status', 'id_pd_exchange_civil_status');
	define('d_pd_exchange_civil_status_m_by_created', 'm_by_created');
	define('d_pd_exchange_civil_status_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_civil_status_m_date_created', 'm_date_created');
	define('d_pd_exchange_civil_status_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_civil_status_m_deleted', 'm_deleted');
	define('d_pd_exchange_civil_status_m_description', 'm_description');
	define('d_pd_exchange_civil_status_m_level', 'm_level');
	define('d_pd_exchange_civil_status_m_status', 'm_status');
	define('d_pd_exchange_civil_status_m_temp', 'm_temp');
	define('d_pd_exchange_civil_status_t_name', 't_name');
	define('d_pd_exchange_civil_status_v_id_pd_civil_status', 'v_id_pd_civil_status');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_change_diadem
	define('d_pd_exchange_change_diadem_id_pd_exchange_change_diadem', 'id_pd_exchange_change_diadem');
	define('d_pd_exchange_change_diadem_m_by_created', 'm_by_created');
	define('d_pd_exchange_change_diadem_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_change_diadem_m_date_created', 'm_date_created');
	define('d_pd_exchange_change_diadem_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_change_diadem_m_deleted', 'm_deleted');
	define('d_pd_exchange_change_diadem_m_description', 'm_description');
	define('d_pd_exchange_change_diadem_m_level', 'm_level');
	define('d_pd_exchange_change_diadem_m_status', 'm_status');
	define('d_pd_exchange_change_diadem_m_temp', 'm_temp');
	define('d_pd_exchange_change_diadem_t_date_change', 't_date_change');
	define('d_pd_exchange_change_diadem_u_id_pd_data_personal_t_names', 'u_id_pd_data_personal_t_names');
	define('d_pd_exchange_change_diadem_u_id_pd_data_personal_t_surnames', 'u_id_pd_data_personal_t_surnames');
	define('d_pd_exchange_change_diadem_v_id_pd_change_diadem', 'v_id_pd_change_diadem');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_contract_type
	define('d_pd_exchange_contract_type_id_pd_exchange_contract_type', 'id_pd_exchange_contract_type');
	define('d_pd_exchange_contract_type_m_by_created', 'm_by_created');
	define('d_pd_exchange_contract_type_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_contract_type_m_date_created', 'm_date_created');
	define('d_pd_exchange_contract_type_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_contract_type_m_deleted', 'm_deleted');
	define('d_pd_exchange_contract_type_m_description', 'm_description');
	define('d_pd_exchange_contract_type_m_level', 'm_level');
	define('d_pd_exchange_contract_type_m_status', 'm_status');
	define('d_pd_exchange_contract_type_m_temp', 'm_temp');
	define('d_pd_exchange_contract_type_t_name', 't_name');
	define('d_pd_exchange_contract_type_v_id_pd_contract_type', 'v_id_pd_contract_type');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_daily_activities
	define('d_pd_exchange_daily_activities_id_pd_exchange_daily_activities', 'id_pd_exchange_daily_activities');
	define('d_pd_exchange_daily_activities_m_by_created', 'm_by_created');
	define('d_pd_exchange_daily_activities_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_daily_activities_m_date_created', 'm_date_created');
	define('d_pd_exchange_daily_activities_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_daily_activities_m_deleted', 'm_deleted');
	define('d_pd_exchange_daily_activities_m_description', 'm_description');
	define('d_pd_exchange_daily_activities_m_level', 'm_level');
	define('d_pd_exchange_daily_activities_m_status', 'm_status');
	define('d_pd_exchange_daily_activities_m_temp', 'm_temp');
	define('d_pd_exchange_daily_activities_t_date', 't_date');
	define('d_pd_exchange_daily_activities_t_name', 't_name');
	define('d_pd_exchange_daily_activities_v_id_pd_daily_activities', 'v_id_pd_daily_activities');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_data_personal
	define('d_pd_exchange_data_personal_id_pd_exchange_data_personal', 'id_pd_exchange_data_personal');
	define('d_pd_exchange_data_personal_m_by_created', 'm_by_created');
	define('d_pd_exchange_data_personal_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_data_personal_m_date_created', 'm_date_created');
	define('d_pd_exchange_data_personal_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_data_personal_m_deleted', 'm_deleted');
	define('d_pd_exchange_data_personal_m_description', 'm_description');
	define('d_pd_exchange_data_personal_m_level', 'm_level');
	define('d_pd_exchange_data_personal_m_status', 'm_status');
	define('d_pd_exchange_data_personal_m_temp', 'm_temp');
	define('d_pd_exchange_data_personal_t_address', 't_address');
	define('d_pd_exchange_data_personal_t_birth_date', 't_birth_date');
	define('d_pd_exchange_data_personal_t_email', 't_email');
	define('d_pd_exchange_data_personal_t_identification', 't_identification');
	define('d_pd_exchange_data_personal_t_names', 't_names');
	define('d_pd_exchange_data_personal_t_phone_fixed', 't_phone_fixed');
	define('d_pd_exchange_data_personal_t_phone_movil', 't_phone_movil');
	define('d_pd_exchange_data_personal_t_surnames', 't_surnames');
	define('d_pd_exchange_data_personal_u_pd_birth_place_t_name', 'u_pd_birth_place_t_name');
	define('d_pd_exchange_data_personal_u_pd_civil_status_t_name', 'u_pd_civil_status_t_name');
	define('d_pd_exchange_data_personal_u_pd_document_type_t_name', 'u_pd_document_type_t_name');
	define('d_pd_exchange_data_personal_u_pd_eps_t_name', 'u_pd_eps_t_name');
	define('d_pd_exchange_data_personal_u_pd_level_study_t_name', 'u_pd_level_study_t_name');
	define('d_pd_exchange_data_personal_u_pd_neighborhood_t_name', 'u_pd_neighborhood_t_name');
	define('d_pd_exchange_data_personal_u_pd_pension_t_name', 'u_pd_pension_t_name');
	define('d_pd_exchange_data_personal_v_id_pd_data_personal', 'v_id_pd_data_personal');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_document_type
	define('d_pd_exchange_document_type_id_pd_exchange_document_type', 'id_pd_exchange_document_type');
	define('d_pd_exchange_document_type_m_by_created', 'm_by_created');
	define('d_pd_exchange_document_type_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_document_type_m_date_created', 'm_date_created');
	define('d_pd_exchange_document_type_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_document_type_m_deleted', 'm_deleted');
	define('d_pd_exchange_document_type_m_description', 'm_description');
	define('d_pd_exchange_document_type_m_level', 'm_level');
	define('d_pd_exchange_document_type_m_status', 'm_status');
	define('d_pd_exchange_document_type_m_temp', 'm_temp');
	define('d_pd_exchange_document_type_t_name', 't_name');
	define('d_pd_exchange_document_type_v_id_pd_document_type', 'v_id_pd_document_type');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_employee_charge
	define('d_pd_exchange_employee_charge_id_pd_exchange_employee_charge', 'id_pd_exchange_employee_charge');
	define('d_pd_exchange_employee_charge_m_by_created', 'm_by_created');
	define('d_pd_exchange_employee_charge_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_employee_charge_m_date_created', 'm_date_created');
	define('d_pd_exchange_employee_charge_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_employee_charge_m_deleted', 'm_deleted');
	define('d_pd_exchange_employee_charge_m_description', 'm_description');
	define('d_pd_exchange_employee_charge_m_level', 'm_level');
	define('d_pd_exchange_employee_charge_m_status', 'm_status');
	define('d_pd_exchange_employee_charge_m_temp', 'm_temp');
	define('d_pd_exchange_employee_charge_t_name', 't_name');
	define('d_pd_exchange_employee_charge_v_id_pd_employee_charge', 'v_id_pd_employee_charge');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_eps
	define('d_pd_exchange_eps_id_pd_exchange_eps', 'id_pd_exchange_eps');
	define('d_pd_exchange_eps_m_by_created', 'm_by_created');
	define('d_pd_exchange_eps_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_eps_m_date_created', 'm_date_created');
	define('d_pd_exchange_eps_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_eps_m_deleted', 'm_deleted');
	define('d_pd_exchange_eps_m_description', 'm_description');
	define('d_pd_exchange_eps_m_level', 'm_level');
	define('d_pd_exchange_eps_m_status', 'm_status');
	define('d_pd_exchange_eps_m_temp', 'm_temp');
	define('d_pd_exchange_eps_t_name', 't_name');
	define('d_pd_exchange_eps_v_id_pd_eps', 'v_id_pd_eps');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_level_study
	define('d_pd_exchange_level_study_id_pd_exchange_level_study', 'id_pd_exchange_level_study');
	define('d_pd_exchange_level_study_m_by_created', 'm_by_created');
	define('d_pd_exchange_level_study_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_level_study_m_date_created', 'm_date_created');
	define('d_pd_exchange_level_study_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_level_study_m_deleted', 'm_deleted');
	define('d_pd_exchange_level_study_m_description', 'm_description');
	define('d_pd_exchange_level_study_m_level', 'm_level');
	define('d_pd_exchange_level_study_m_status', 'm_status');
	define('d_pd_exchange_level_study_m_temp', 'm_temp');
	define('d_pd_exchange_level_study_t_name', 't_name');
	define('d_pd_exchange_level_study_v_id_pd_level_study', 'v_id_pd_level_study');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_messaging_type
	define('d_pd_exchange_messaging_type_id_pd_exchange_messaging_type', 'id_pd_exchange_messaging_type');
	define('d_pd_exchange_messaging_type_m_by_created', 'm_by_created');
	define('d_pd_exchange_messaging_type_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_messaging_type_m_date_created', 'm_date_created');
	define('d_pd_exchange_messaging_type_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_messaging_type_m_deleted', 'm_deleted');
	define('d_pd_exchange_messaging_type_m_description', 'm_description');
	define('d_pd_exchange_messaging_type_m_level', 'm_level');
	define('d_pd_exchange_messaging_type_m_status', 'm_status');
	define('d_pd_exchange_messaging_type_m_temp', 'm_temp');
	define('d_pd_exchange_messaging_type_t_name', 't_name');
	define('d_pd_exchange_messaging_type_v_id_pd_messaging_type', 'v_id_pd_messaging_type');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_neighborhood
	define('d_pd_exchange_neighborhood_id_pd_exchange_neighborhood', 'id_pd_exchange_neighborhood');
	define('d_pd_exchange_neighborhood_m_by_created', 'm_by_created');
	define('d_pd_exchange_neighborhood_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_neighborhood_m_date_created', 'm_date_created');
	define('d_pd_exchange_neighborhood_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_neighborhood_m_deleted', 'm_deleted');
	define('d_pd_exchange_neighborhood_m_description', 'm_description');
	define('d_pd_exchange_neighborhood_m_level', 'm_level');
	define('d_pd_exchange_neighborhood_m_status', 'm_status');
	define('d_pd_exchange_neighborhood_m_temp', 'm_temp');
	define('d_pd_exchange_neighborhood_t_name', 't_name');
	define('d_pd_exchange_neighborhood_v_id_pd_neighborhood', 'v_id_pd_neighborhood');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_novelty
	define('d_pd_exchange_novelty_id_pd_exchange_novelty', 'id_pd_exchange_novelty');
	define('d_pd_exchange_novelty_m_by_created', 'm_by_created');
	define('d_pd_exchange_novelty_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_novelty_m_date_created', 'm_date_created');
	define('d_pd_exchange_novelty_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_novelty_m_deleted', 'm_deleted');
	define('d_pd_exchange_novelty_m_description', 'm_description');
	define('d_pd_exchange_novelty_m_level', 'm_level');
	define('d_pd_exchange_novelty_m_status', 'm_status');
	define('d_pd_exchange_novelty_m_temp', 'm_temp');
	define('d_pd_exchange_novelty_t_date_start', 't_date_start');
	define('d_pd_exchange_novelty_t_date_final', 't_date_final');
	define('d_pd_exchange_novelty_u_pd_category_novelty_t_name', 'u_pd_category_novelty_t_name');
	define('d_pd_exchange_novelty_u_pd_data_personal_t_identification', 'u_pd_data_personal_t_identification');
	define('d_pd_exchange_novelty_u_pd_type_accrued_t_name', 'u_pd_type_accrued_t_name');
	define('d_pd_exchange_novelty_u_pd_worked_days_t_name', 'u_pd_worked_days_t_name');
	define('d_pd_exchange_novelty_u_pd_worked_period_t_name', 'u_pd_worked_period_t_name');
	define('d_pd_exchange_novelty_v_id_pd_novelty', 'v_id_pd_novelty');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_pension
	define('d_pd_exchange_pension_id_pd_exchange_pension', 'id_pd_exchange_pension');
	define('d_pd_exchange_pension_m_by_created', 'm_by_created');
	define('d_pd_exchange_pension_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_pension_m_date_created', 'm_date_created');
	define('d_pd_exchange_pension_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_pension_m_deleted', 'm_deleted');
	define('d_pd_exchange_pension_m_description', 'm_description');
	define('d_pd_exchange_pension_m_level', 'm_level');
	define('d_pd_exchange_pension_m_status', 'm_status');
	define('d_pd_exchange_pension_m_temp', 'm_temp');
	define('d_pd_exchange_pension_t_name', 't_name');
	define('d_pd_exchange_pension_v_id_pd_pension', 'v_id_pd_pension');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_personal_type
	define('d_pd_exchange_personal_type_id_pd_exchange_personal_type', 'id_pd_exchange_personal_type');
	define('d_pd_exchange_personal_type_m_by_created', 'm_by_created');
	define('d_pd_exchange_personal_type_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_personal_type_m_date_created', 'm_date_created');
	define('d_pd_exchange_personal_type_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_personal_type_m_deleted', 'm_deleted');
	define('d_pd_exchange_personal_type_m_description', 'm_description');
	define('d_pd_exchange_personal_type_m_level', 'm_level');
	define('d_pd_exchange_personal_type_m_status', 'm_status');
	define('d_pd_exchange_personal_type_m_temp', 'm_temp');
	define('d_pd_exchange_personal_type_t_name', 't_name');
	define('d_pd_exchange_personal_type_v_id_pd_personal_type', 'v_id_pd_personal_type');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_provider
	define('d_pd_exchange_provider_id_pd_exchange_provider', 'id_pd_exchange_provider');
	define('d_pd_exchange_provider_m_by_created', 'm_by_created');
	define('d_pd_exchange_provider_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_provider_m_date_created', 'm_date_created');
	define('d_pd_exchange_provider_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_provider_m_deleted', 'm_deleted');
	define('d_pd_exchange_provider_m_description', 'm_description');
	define('d_pd_exchange_provider_m_level', 'm_level');
	define('d_pd_exchange_provider_m_status', 'm_status');
	define('d_pd_exchange_provider_m_temp', 'm_temp');
	define('d_pd_exchange_provider_t_name', 't_name');
	define('d_pd_exchange_provider_t_pd_category_provider_t_name', 't_pd_category_provider_t_name');
	define('d_pd_exchange_provider_v_id_pd_provider', 'v_id_pd_provider');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_transport_assistance
	define('d_pd_exchange_transport_assistance_id_pd_exchange_transport_assistance', 'id_pd_exchange_transport_assistance');
	define('d_pd_exchange_transport_assistance_m_by_created', 'm_by_created');
	define('d_pd_exchange_transport_assistance_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_transport_assistance_m_date_created', 'm_date_created');
	define('d_pd_exchange_transport_assistance_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_transport_assistance_m_deleted', 'm_deleted');
	define('d_pd_exchange_transport_assistance_m_description', 'm_description');
	define('d_pd_exchange_transport_assistance_m_level', 'm_level');
	define('d_pd_exchange_transport_assistance_m_status', 'm_status');
	define('d_pd_exchange_transport_assistance_m_temp', 'm_temp');
	define('d_pd_exchange_transport_assistance_t_value', 't_value');
	define('d_pd_exchange_transport_assistance_v_id_pd_transport_assistance', 'v_id_pd_transport_assistance');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_type_accrued
	define('d_pd_exchange_type_accrued_id_pd_exchange_type_accrued', 'id_pd_exchange_type_accrued');
	define('d_pd_exchange_type_accrued_m_by_created', 'm_by_created');
	define('d_pd_exchange_type_accrued_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_type_accrued_m_date_created', 'm_date_created');
	define('d_pd_exchange_type_accrued_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_type_accrued_m_deleted', 'm_deleted');
	define('d_pd_exchange_type_accrued_m_description', 'm_description');
	define('d_pd_exchange_type_accrued_m_level', 'm_level');
	define('d_pd_exchange_type_accrued_m_status', 'm_status');
	define('d_pd_exchange_type_accrued_m_temp', 'm_temp');
	define('d_pd_exchange_type_accrued_t_name', 't_name');
	define('d_pd_exchange_type_accrued_v_id_pd_type_accrued', 'v_id_pd_type_accrued');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_type_definition
	define('d_pd_exchange_type_definition_id_pd_exchange_type_definition', 'id_pd_exchange_type_definition');
	define('d_pd_exchange_type_definition_m_by_created', 'm_by_created');
	define('d_pd_exchange_type_definition_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_type_definition_m_date_created', 'm_date_created');
	define('d_pd_exchange_type_definition_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_type_definition_m_deleted', 'm_deleted');
	define('d_pd_exchange_type_definition_m_description', 'm_description');
	define('d_pd_exchange_type_definition_m_level', 'm_level');
	define('d_pd_exchange_type_definition_m_status', 'm_status');
	define('d_pd_exchange_type_definition_m_temp', 'm_temp');
	define('d_pd_exchange_type_definition_t_name', 't_name');
	define('d_pd_exchange_type_definition_v_id_pd_type_definition', 'v_id_pd_type_definition');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_type_management
	define('d_pd_exchange_type_management_id_pd_exchange_type_management', 'id_pd_exchange_type_management');
	define('d_pd_exchange_type_management_m_by_created', 'm_by_created');
	define('d_pd_exchange_type_management_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_type_management_m_date_created', 'm_date_created');
	define('d_pd_exchange_type_management_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_type_management_m_deleted', 'm_deleted');
	define('d_pd_exchange_type_management_m_description', 'm_description');
	define('d_pd_exchange_type_management_m_level', 'm_level');
	define('d_pd_exchange_type_management_m_status', 'm_status');
	define('d_pd_exchange_type_management_m_temp', 'm_temp');
	define('d_pd_exchange_type_management_t_name', 't_name');
	define('d_pd_exchange_type_management_v_id_pd_type_management', 'v_id_pd_type_management');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_worked_days
	define('d_pd_exchange_worked_days_id_pd_exchange_worked_days', 'id_pd_exchange_worked_days');
	define('d_pd_exchange_worked_days_m_by_created', 'm_by_created');
	define('d_pd_exchange_worked_days_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_worked_days_m_date_created', 'm_date_created');
	define('d_pd_exchange_worked_days_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_worked_days_m_deleted', 'm_deleted');
	define('d_pd_exchange_worked_days_m_description', 'm_description');
	define('d_pd_exchange_worked_days_m_level', 'm_level');
	define('d_pd_exchange_worked_days_m_status', 'm_status');
	define('d_pd_exchange_worked_days_m_temp', 'm_temp');
	define('d_pd_exchange_worked_days_t_name', 't_name');
	define('d_pd_exchange_worked_days_t_value', 't_value');
	define('d_pd_exchange_worked_days_v_id_pd_worked_days', 'v_id_pd_worked_days');
	//------------------------------------------------
	# Campos de la tabla pd_exchange_worked_period
	define('d_pd_exchange_worked_period_id_pd_exchange_worked_period', 'id_pd_exchange_worked_period');
	define('d_pd_exchange_worked_period_m_by_created', 'm_by_created');
	define('d_pd_exchange_worked_period_m_by_modified', 'm_by_modified');
	define('d_pd_exchange_worked_period_m_date_created', 'm_date_created');
	define('d_pd_exchange_worked_period_m_date_modified', 'm_date_modified');
	define('d_pd_exchange_worked_period_m_deleted', 'm_deleted');
	define('d_pd_exchange_worked_period_m_description', 'm_description');
	define('d_pd_exchange_worked_period_m_level', 'm_level');
	define('d_pd_exchange_worked_period_m_status', 'm_status');
	define('d_pd_exchange_worked_period_m_temp', 'm_temp');
	define('d_pd_exchange_worked_period_t_name', 't_name');
	define('d_pd_exchange_worked_period_v_id_pd_worked_period', 'v_id_pd_worked_period');
	//------------------------------------------------
	# Campos de la tabla pd_fc_accumulated_management
	/*define('d_pd_fc_a_m_id_pd_fc_accumulated_management', 'id_pd_fc_accumulated_management');
	define('d_pd_fc_a_m_m_by_created', 'm_by_created');
	define('d_pd_fc_a_m_m_by_modified', 'm_by_modified');
	define('d_pd_fc_a_m_m_date_created', 'm_date_created');
	define('d_pd_fc_a_m_m_date_modified', 'm_date_modified');
	define('d_pd_fc_a_m_m_deleted', 'm_deleted');
	define('d_pd_fc_a_m_m_description', 'm_description');
	define('d_pd_fc_a_m_m_level', 'm_level');
	define('d_pd_fc_a_m_m_status', 'm_status');
	define('d_pd_fc_a_m_m_temp', 'm_temp');
	define('d_pd_fc_a_m_t_numeroid', 't_numeroid');
	define('d_pd_fc_a_m_t_nombre', 't_nombre');
	define('d_pd_fc_a_m_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_fc_a_m_t_gestion_apoyo', 't_gestion_apoyo');
	define('d_pd_fc_a_m_t_tipificacion', 't_tipificacion');
	define('d_pd_fc_a_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_fc_better_management
	/*define('d_pd_fc_b_m_id_pd_fc_better_management', 'id_pd_fc_better_management');
	define('d_pd_fc_b_m_m_by_created', 'm_by_created');
	define('d_pd_fc_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_fc_b_m_m_date_created', 'm_date_created');
	define('d_pd_fc_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_fc_b_m_m_deleted', 'm_deleted');
	define('d_pd_fc_b_m_m_description', 'm_description');
	define('d_pd_fc_b_m_m_level', 'm_level');
	define('d_pd_fc_b_m_m_status', 'm_status');
	define('d_pd_fc_b_m_m_temp', 'm_temp');
	define('d_pd_fc_b_m_t_numeroid', 't_numeroid');
	define('d_pd_fc_b_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_fc_final_better_management
	/*define('d_pd_fc_f_b_m_id_pd_fc_final_better_management', 'id_pd_fc_final_better_management');
	define('d_pd_fc_f_b_m_m_by_created', 'm_by_created');
	define('d_pd_fc_f_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_fc_f_b_m_m_date_created', 'm_date_created');
	define('d_pd_fc_f_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_fc_f_b_m_m_deleted', 'm_deleted');
	define('d_pd_fc_f_b_m_m_description', 'm_description');
	define('d_pd_fc_f_b_m_m_level', 'm_level');
	define('d_pd_fc_f_b_m_m_status', 'm_status');
	define('d_pd_fc_f_b_m_m_temp', 'm_temp');
	define('d_pd_fc_f_b_m_t_accumulated_management', 't_accumulated_management');
	define('d_pd_fc_f_b_m_t_better_management', 't_better_management');
	define('d_pd_fc_f_b_m_t_identification_number', 't_identification_number');
	define('d_pd_fc_f_b_m_t_names_last_names', 't_names_last_names');
	define('d_pd_fc_f_b_m_t_support_management', 't_support_management');
	define('d_pd_fc_f_b_m_t_typing', 't_typing');
	define('d_pd_fc_f_b_m_v_id_pd_fc_report_better_management', 'v_id_pd_fc_report_better_management');*/
	//------------------------------------------------
	# Campos de la tabla pd_fc_last_typing
	/*define('d_pd_fc_l_t_id_pd_fc_last_typing', 'id_pd_fc_last_typing');
	define('d_pd_fc_l_t_m_by_created', 'm_by_created');
	define('d_pd_fc_l_t_m_by_modified', 'm_by_modified');
	define('d_pd_fc_l_t_m_date_created', 'm_date_created');
	define('d_pd_fc_l_t_m_date_modified', 'm_date_modified');
	define('d_pd_fc_l_t_m_deleted', 'm_deleted');
	define('d_pd_fc_l_t_m_description', 'm_description');
	define('d_pd_fc_l_t_m_level', 'm_level');
	define('d_pd_fc_l_t_m_status', 'm_status');
	define('d_pd_fc_l_t_m_temp', 'm_temp');
	define('d_pd_fc_l_t_t_numeroid', 't_numeroid');
	define('d_pd_fc_l_t_t_tipificacion', 't_tipificacion');*/
	//------------------------------------------------
	# Campos de la tabla pd_fc_management_mechanisms_support
	/*define('d_pd_fc_m_m_s_id_pd_fc_management_mechanisms_support', 'id_pd_fc_management_mechanisms_support');
	define('d_pd_fc_m_m_s_m_by_created', 'm_by_created');
	define('d_pd_fc_m_m_s_m_by_modified', 'm_by_modified');
	define('d_pd_fc_m_m_s_m_date_created', 'm_date_created');
	define('d_pd_fc_m_m_s_m_date_modified', 'm_date_modified');
	define('d_pd_fc_m_m_s_m_deleted', 'm_deleted');
	define('d_pd_fc_m_m_s_m_description', 'm_description');
	define('d_pd_fc_m_m_s_m_level', 'm_level');
	define('d_pd_fc_m_m_s_m_status', 'm_status');
	define('d_pd_fc_m_m_s_m_temp', 'm_temp');
	define('d_pd_fc_m_m_s_t_numeroid', 't_numeroid');
	define('d_pd_fc_m_m_s_t_nombre', 't_nombre');
	define('d_pd_fc_m_m_s_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_fc_m_m_s_t_gestion_apoyo', 't_gestion_apoyo');*/
	//------------------------------------------------
	# Campos de la tabla pd_fc_report_better_management
	/*define('d_pd_fc_r_b_m_id_pd_fc_report_better_management', 'id_pd_fc_report_better_management');
	define('d_pd_fc_r_b_m_m_by_created', 'm_by_created');
	define('d_pd_fc_r_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_fc_r_b_m_m_date_created', 'm_date_created');
	define('d_pd_fc_r_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_fc_r_b_m_m_deleted', 'm_deleted');
	define('d_pd_fc_r_b_m_m_description', 'm_description');
	define('d_pd_fc_r_b_m_m_level', 'm_level');
	define('d_pd_fc_r_b_m_m_status', 'm_status');
	define('d_pd_fc_r_b_m_m_temp', 'm_temp');
	define('d_pd_fc_r_b_m_t_report_name', 't_report_name');
	define('d_pd_fc_r_b_m_t_report_date', 't_report_date');
	define('d_pd_fc_r_b_m_v_id_az_user', 'v_id_az_user');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_accumulated_management
	/*define('d_pd_ic_a_m_id_pd_ic_accumulated_management', 'id_pd_ic_accumulated_management');
	define('d_pd_ic_a_m_m_by_created', 'm_by_created');
	define('d_pd_ic_a_m_m_by_modified', 'm_by_modified');
	define('d_pd_ic_a_m_m_date_created', 'm_date_created');
	define('d_pd_ic_a_m_m_date_modified', 'm_date_modified');
	define('d_pd_ic_a_m_m_deleted', 'm_deleted');
	define('d_pd_ic_a_m_m_description', 'm_description');
	define('d_pd_ic_a_m_m_level', 'm_level');
	define('d_pd_ic_a_m_m_status', 'm_status');
	define('d_pd_ic_a_m_m_temp', 'm_temp');
	define('d_pd_ic_a_m_t_numeroid', 't_numeroid');
	define('d_pd_ic_a_m_t_nombre', 't_nombre');
	define('d_pd_ic_a_m_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_ic_a_m_t_gestion_apoyo', 't_gestion_apoyo');
	define('d_pd_ic_a_m_t_tipificacion', 't_tipificacion');
	define('d_pd_ic_a_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_better_management
	/*define('d_pd_ic_b_m_id_pd_ic_better_management', 'id_pd_ic_better_management');
	define('d_pd_ic_b_m_m_by_created', 'm_by_created');
	define('d_pd_ic_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_ic_b_m_m_date_created', 'm_date_created');
	define('d_pd_ic_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_ic_b_m_m_deleted', 'm_deleted');
	define('d_pd_ic_b_m_m_description', 'm_description');
	define('d_pd_ic_b_m_m_level', 'm_level');
	define('d_pd_ic_b_m_m_status', 'm_status');
	define('d_pd_ic_b_m_m_temp', 'm_temp');
	define('d_pd_ic_b_m_t_numeroid', 't_numeroid');
	define('d_pd_ic_b_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_final_better_management
	/*define('d_pd_ic_f_b_m_id_pd_ic_final_better_management', 'id_pd_ic_final_better_management');
	define('d_pd_ic_f_b_m_m_by_created', 'm_by_created');
	define('d_pd_ic_f_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_ic_f_b_m_m_date_created', 'm_date_created');
	define('d_pd_ic_f_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_ic_f_b_m_m_deleted', 'm_deleted');
	define('d_pd_ic_f_b_m_m_description', 'm_description');
	define('d_pd_ic_f_b_m_m_level', 'm_level');
	define('d_pd_ic_f_b_m_m_status', 'm_status');
	define('d_pd_ic_f_b_m_m_temp', 'm_temp');
	define('d_pd_ic_f_b_m_t_accumulated_management', 't_accumulated_management');
	define('d_pd_ic_f_b_m_t_better_management', 't_better_management');
	define('d_pd_ic_f_b_m_t_identification_number', 't_identification_number');
	define('d_pd_ic_f_b_m_t_names_last_names', 't_names_last_names');
	define('d_pd_ic_f_b_m_t_support_management', 't_support_management');
	define('d_pd_ic_f_b_m_t_typing', 't_typing');
	define('d_pd_ic_f_b_m_v_id_pd_ic_report_better_management', 'v_id_pd_ic_report_better_management');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_last_typing
	/*define('d_pd_ic_l_t_id_pd_ic_last_typing', 'id_pd_ic_last_typing');
	define('d_pd_ic_l_t_m_by_created', 'm_by_created');
	define('d_pd_ic_l_t_m_by_modified', 'm_by_modified');
	define('d_pd_ic_l_t_m_date_created', 'm_date_created');
	define('d_pd_ic_l_t_m_date_modified', 'm_date_modified');
	define('d_pd_ic_l_t_m_deleted', 'm_deleted');
	define('d_pd_ic_l_t_m_description', 'm_description');
	define('d_pd_ic_l_t_m_level', 'm_level');
	define('d_pd_ic_l_t_m_status', 'm_status');
	define('d_pd_ic_l_t_m_temp', 'm_temp');
	define('d_pd_ic_l_t_t_numeroid', 't_numeroid');
	define('d_pd_ic_l_t_t_tipificacion', 't_tipificacion');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_management_mechanisms_support
	/*define('d_pd_ic_m_m_s_id_pd_ic_management_mechanisms_support', 'id_pd_ic_management_mechanisms_support');
	define('d_pd_ic_m_m_s_m_by_created', 'm_by_created');
	define('d_pd_ic_m_m_s_m_by_modified', 'm_by_modified');
	define('d_pd_ic_m_m_s_m_date_created', 'm_date_created');
	define('d_pd_ic_m_m_s_m_date_modified', 'm_date_modified');
	define('d_pd_ic_m_m_s_m_deleted', 'm_deleted');
	define('d_pd_ic_m_m_s_m_description', 'm_description');
	define('d_pd_ic_m_m_s_m_level', 'm_level');
	define('d_pd_ic_m_m_s_m_status', 'm_status');
	define('d_pd_ic_m_m_s_m_temp', 'm_temp');
	define('d_pd_ic_m_m_s_t_numeroid', 't_numeroid');
	define('d_pd_ic_m_m_s_t_nombre', 't_nombre');
	define('d_pd_ic_m_m_s_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_ic_m_m_s_t_gestion_apoyo', 't_gestion_apoyo');*/
	//------------------------------------------------
	# Campos de la tabla pd_ic_report_better_management
	/*define('d_pd_ic_r_b_m_id_pd_ic_report_better_management', 'id_pd_ic_report_better_management');
	define('d_pd_ic_r_b_m_m_by_created', 'm_by_created');
	define('d_pd_ic_r_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_ic_r_b_m_m_date_created', 'm_date_created');
	define('d_pd_ic_r_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_ic_r_b_m_m_deleted', 'm_deleted');
	define('d_pd_ic_r_b_m_m_description', 'm_description');
	define('d_pd_ic_r_b_m_m_level', 'm_level');
	define('d_pd_ic_r_b_m_m_status', 'm_status');
	define('d_pd_ic_r_b_m_m_temp', 'm_temp');
	define('d_pd_ic_r_b_m_t_report_name', 't_report_name');
	define('d_pd_ic_r_b_m_t_report_date', 't_report_date');
	define('d_pd_ic_r_b_m_v_id_az_user', 'v_id_az_user');*/
	//------------------------------------------------
	# Campos de la tabla pd_inner_campaign_data_personal
	/*define('d_pd_i_c_u_id_pd_inner_campaign_data_personal', 'id_pd_inner_campaign_data_personal');
	define('d_pd_i_c_u_m_by_created', 'm_by_created');
	define('d_pd_i_c_u_m_by_modified', 'm_by_modified');
	define('d_pd_i_c_u_m_date_created', 'm_date_created');
	define('d_pd_i_c_u_m_date_modified', 'm_date_modified');
	define('d_pd_i_c_u_m_deleted', 'm_deleted');
	define('d_pd_i_c_u_m_description', 'm_description');
	define('d_pd_i_c_u_m_level', 'm_level');
	define('d_pd_i_c_u_m_status', 'm_status');
	define('d_pd_i_c_u_m_temp', 'm_temp');
	define('d_pd_i_c_u_v_id_pd_campaign', 'v_id_pd_campaign');
	define('d_pd_i_c_u_v_id_pd_data_personal', 'v_id_pd_data_personal');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_accumulated_management
	/*define('d_pd_iv_a_m_id_pd_iv_accumulated_management', 'id_pd_iv_accumulated_management');
	define('d_pd_iv_a_m_m_by_created', 'm_by_created');
	define('d_pd_iv_a_m_m_by_modified', 'm_by_modified');
	define('d_pd_iv_a_m_m_date_created', 'm_date_created');
	define('d_pd_iv_a_m_m_date_modified', 'm_date_modified');
	define('d_pd_iv_a_m_m_deleted', 'm_deleted');
	define('d_pd_iv_a_m_m_description', 'm_description');
	define('d_pd_iv_a_m_m_level', 'm_level');
	define('d_pd_iv_a_m_m_status', 'm_status');
	define('d_pd_iv_a_m_m_temp', 'm_temp');
	define('d_pd_iv_a_m_t_numeroid', 't_numeroid');
	define('d_pd_iv_a_m_t_nombre', 't_nombre');
	define('d_pd_iv_a_m_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_iv_a_m_t_gestion_apoyo', 't_gestion_apoyo');
	define('d_pd_iv_a_m_t_tipificacion', 't_tipificacion');
	define('d_pd_iv_a_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_better_management
	/*define('d_pd_iv_b_m_id_pd_iv_better_management', 'id_pd_iv_better_management');
	define('d_pd_iv_b_m_m_by_created', 'm_by_created');
	define('d_pd_iv_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_iv_b_m_m_date_created', 'm_date_created');
	define('d_pd_iv_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_iv_b_m_m_deleted', 'm_deleted');
	define('d_pd_iv_b_m_m_description', 'm_description');
	define('d_pd_iv_b_m_m_level', 'm_level');
	define('d_pd_iv_b_m_m_status', 'm_status');
	define('d_pd_iv_b_m_m_temp', 'm_temp');
	define('d_pd_iv_b_m_t_numeroid', 't_numeroid');
	define('d_pd_iv_b_m_t_mejor_gestion', 't_mejor_gestion');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_final_better_management
	/*define('d_pd_iv_f_b_m_id_pd_iv_final_better_management', 'id_pd_iv_final_better_management');
	define('d_pd_iv_f_b_m_m_by_created', 'm_by_created');
	define('d_pd_iv_f_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_iv_f_b_m_m_date_created', 'm_date_created');
	define('d_pd_iv_f_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_iv_f_b_m_m_deleted', 'm_deleted');
	define('d_pd_iv_f_b_m_m_description', 'm_description');
	define('d_pd_iv_f_b_m_m_level', 'm_level');
	define('d_pd_iv_f_b_m_m_status', 'm_status');
	define('d_pd_iv_f_b_m_m_temp', 'm_temp');
	define('d_pd_iv_f_b_m_t_accumulated_management', 't_accumulated_management');
	define('d_pd_iv_f_b_m_t_better_management', 't_better_management');
	define('d_pd_iv_f_b_m_t_identification_number', 't_identification_number');
	define('d_pd_iv_f_b_m_t_names_last_names', 't_names_last_names');
	define('d_pd_iv_f_b_m_t_support_management', 't_support_management');
	define('d_pd_iv_f_b_m_t_typing', 't_typing');
	define('d_pd_iv_f_b_m_v_id_pd_iv_report_better_management', 'v_id_pd_iv_report_better_management');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_last_typing
	/*define('d_pd_iv_l_t_id_pd_iv_last_typing', 'id_pd_iv_last_typing');
	define('d_pd_iv_l_t_m_by_created', 'm_by_created');
	define('d_pd_iv_l_t_m_by_modified', 'm_by_modified');
	define('d_pd_iv_l_t_m_date_created', 'm_date_created');
	define('d_pd_iv_l_t_m_date_modified', 'm_date_modified');
	define('d_pd_iv_l_t_m_deleted', 'm_deleted');
	define('d_pd_iv_l_t_m_description', 'm_description');
	define('d_pd_iv_l_t_m_level', 'm_level');
	define('d_pd_iv_l_t_m_status', 'm_status');
	define('d_pd_iv_l_t_m_temp', 'm_temp');
	define('d_pd_iv_l_t_t_numeroid', 't_numeroid');
	define('d_pd_iv_l_t_t_tipificacion', 't_tipificacion');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_management_mechanisms_support
	/*define('d_pd_iv_m_m_s_id_pd_iv_management_mechanisms_support', 'id_pd_iv_management_mechanisms_support');
	define('d_pd_iv_m_m_s_m_by_created', 'm_by_created');
	define('d_pd_iv_m_m_s_m_by_modified', 'm_by_modified');
	define('d_pd_iv_m_m_s_m_date_created', 'm_date_created');
	define('d_pd_iv_m_m_s_m_date_modified', 'm_date_modified');
	define('d_pd_iv_m_m_s_m_deleted', 'm_deleted');
	define('d_pd_iv_m_m_s_m_description', 'm_description');
	define('d_pd_iv_m_m_s_m_level', 'm_level');
	define('d_pd_iv_m_m_s_m_status', 'm_status');
	define('d_pd_iv_m_m_s_m_temp', 'm_temp');
	define('d_pd_iv_m_m_s_t_numeroid', 't_numeroid');
	define('d_pd_iv_m_m_s_t_nombre', 't_nombre');
	define('d_pd_iv_m_m_s_t_gestion_acumulada', 't_gestion_acumulada');
	define('d_pd_iv_m_m_s_t_gestion_apoyo', 't_gestion_apoyo');*/
	//------------------------------------------------
	# Campos de la tabla pd_iv_report_better_management
	/*define('d_pd_iv_r_b_m_id_pd_iv_report_better_management', 'id_pd_iv_report_better_management');
	define('d_pd_iv_r_b_m_m_by_created', 'm_by_created');
	define('d_pd_iv_r_b_m_m_by_modified', 'm_by_modified');
	define('d_pd_iv_r_b_m_m_date_created', 'm_date_created');
	define('d_pd_iv_r_b_m_m_date_modified', 'm_date_modified');
	define('d_pd_iv_r_b_m_m_deleted', 'm_deleted');
	define('d_pd_iv_r_b_m_m_description', 'm_description');
	define('d_pd_iv_r_b_m_m_level', 'm_level');
	define('d_pd_iv_r_b_m_m_status', 'm_status');
	define('d_pd_iv_r_b_m_m_temp', 'm_temp');
	define('d_pd_iv_r_b_m_t_report_name', 't_report_name');
	define('d_pd_iv_r_b_m_t_report_date', 't_report_date');
	define('d_pd_iv_r_b_m_v_id_az_user', 'v_id_az_user');*/
	//------------------------------------------------
	# Campos de la tabla pd_level_study
	define('d_pd_level_study_id_pd_level_study', 'id_pd_level_study');
	define('d_pd_level_study_m_by_created', 'm_by_created');
	define('d_pd_level_study_m_by_modified', 'm_by_modified');
	define('d_pd_level_study_m_date_created', 'm_date_created');
	define('d_pd_level_study_m_date_modified', 'm_date_modified');
	define('d_pd_level_study_m_deleted', 'm_deleted');
	define('d_pd_level_study_m_description', 'm_description');
	define('d_pd_level_study_m_level', 'm_level');
	define('d_pd_level_study_m_status', 'm_status');
	define('d_pd_level_study_m_temp', 'm_temp');
	define('d_pd_level_study_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_management_tree
	define('d_pd_management_tree_id_pd_management_tree', 'id_pd_management_tree');
	define('d_pd_management_tree_m_by_created', 'm_by_created');
	define('d_pd_management_tree_m_by_modified', 'm_by_modified');
	define('d_pd_management_tree_m_date_created', 'm_date_created');
	define('d_pd_management_tree_m_date_modified', 'm_date_modified');
	define('d_pd_management_tree_m_deleted', 'm_deleted');
	define('d_pd_management_tree_m_description', 'm_description');
	define('d_pd_management_tree_m_level', 'm_level');
	define('d_pd_management_tree_m_status', 'm_status');
	define('d_pd_management_tree_m_temp', 'm_temp');
	define('d_pd_management_tree_t_best_management_code', 't_best_management_code');
	define('d_pd_management_tree_t_main_code', 't_main_code');
	define('d_pd_management_tree_t_name', 't_name');
	define('d_pd_management_tree_v_id_pd_campaign', 'v_id_pd_campaign');
	define('d_pd_management_tree_v_id_pd_type_definition', 'v_id_pd_type_definition');
	define('d_pd_management_tree_v_id_pd_type_management', 'v_id_pd_type_management');
	//------------------------------------------------
	# Campos de la tabla pd_messaging_type
	define('d_pd_messaging_type_id_pd_messaging_type', 'id_pd_messaging_type');
	define('d_pd_messaging_type_m_by_created', 'm_by_created');
	define('d_pd_messaging_type_m_by_modified', 'm_by_modified');
	define('d_pd_messaging_type_m_date_created', 'm_date_created');
	define('d_pd_messaging_type_m_date_modified', 'm_date_modified');
	define('d_pd_messaging_type_m_deleted', 'm_deleted');
	define('d_pd_messaging_type_m_description', 'm_description');
	define('d_pd_messaging_type_m_level', 'm_level');
	define('d_pd_messaging_type_m_status', 'm_status');
	define('d_pd_messaging_type_m_temp', 'm_temp');
	define('d_pd_messaging_type_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_neighborhood
	define('d_pd_neighborhood_id_pd_neighborhood', 'id_pd_neighborhood');
	define('d_pd_neighborhood_m_by_created', 'm_by_created');
	define('d_pd_neighborhood_m_by_modified', 'm_by_modified');
	define('d_pd_neighborhood_m_date_created', 'm_date_created');
	define('d_pd_neighborhood_m_date_modified', 'm_date_modified');
	define('d_pd_neighborhood_m_deleted', 'm_deleted');
	define('d_pd_neighborhood_m_description', 'm_description');
	define('d_pd_neighborhood_m_level', 'm_level');
	define('d_pd_neighborhood_m_status', 'm_status');
	define('d_pd_neighborhood_m_temp', 'm_temp');
	define('d_pd_neighborhood_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_novelty
	define('d_pd_novelty_id_pd_novelty', 'id_pd_novelty');
	define('d_pd_novelty_m_by_created', 'm_by_created');
	define('d_pd_novelty_m_by_modified', 'm_by_modified');
	define('d_pd_novelty_m_date_created', 'm_date_created');
	define('d_pd_novelty_m_date_modified', 'm_date_modified');
	define('d_pd_novelty_m_deleted', 'm_deleted');
	define('d_pd_novelty_m_description', 'm_description');
	define('d_pd_novelty_m_level', 'm_level');
	define('d_pd_novelty_m_status', 'm_status');
	define('d_pd_novelty_m_temp', 'm_temp');
	define('d_pd_novelty_t_date_start', 't_date_start');
	define('d_pd_novelty_t_date_final', 't_date_final');
	define('d_pd_novelty_v_id_pd_category_novelty', 'v_id_pd_category_novelty');
	define('d_pd_novelty_v_id_pd_data_personal', 'v_id_pd_data_personal');
	define('d_pd_novelty_v_id_pd_type_accrued', 'v_id_pd_type_accrued');
	define('d_pd_novelty_v_id_pd_worked_days', 'v_id_pd_worked_days');
	define('d_pd_novelty_v_id_pd_worked_period', 'v_id_pd_worked_period');
	//------------------------------------------------
	# Campos de la tabla pd_paysheet
	define('d_pd_paysheet_id_pd_paysheet', 'id_pd_paysheet');
	define('d_pd_paysheet_m_by_created', 'm_by_created');
	define('d_pd_paysheet_m_by_modified', 'm_by_modified');
	define('d_pd_paysheet_m_date_created', 'm_date_created');
	define('d_pd_paysheet_m_date_modified', 'm_date_modified');
	define('d_pd_paysheet_m_deleted', 'm_deleted');
	define('d_pd_paysheet_m_description', 'm_description');
	define('d_pd_paysheet_m_level', 'm_level');
	define('d_pd_paysheet_m_status', 'm_status');
	define('d_pd_paysheet_m_temp', 'm_temp');
	define('d_pd_paysheet_t_base_salary', 't_base_salary');
	define('d_pd_paysheet_t_bonuses', 't_bonuses');
	define('d_pd_paysheet_t_contribution_to_benefit', 't_contribution_to_benefit');
	define('d_pd_paysheet_t_employer_health', 't_employer_health');
	define('d_pd_paysheet_t_employer_pension', 't_employer_pension');
	define('d_pd_paysheet_t_health_employee', 't_health_employee');
	define('d_pd_paysheet_t_holidays', 't_holidays');
	define('d_pd_paysheet_t_loan', 't_loan');
	define('d_pd_paysheet_t_monthly_salary', 't_monthly_salary');
	define('d_pd_paysheet_t_net_to_pay', 't_net_to_pay');
	define('d_pd_paysheet_t_pension_employee', 't_pension_employee');
	define('d_pd_paysheet_t_retefuent', 't_retefuent');
	define('d_pd_paysheet_t_total_accrued', 't_total_accrued');
	define('d_pd_paysheet_t_total_deductions', 't_total_deductions');
	define('d_pd_paysheet_t_transport_assistance', 't_transport_assistance');
	define('d_pd_paysheet_v_id_pd_data_personal', 'v_id_pd_data_personal');
	define('d_pd_paysheet_v_id_pd_worked_period', 'v_id_pd_worked_period');
	//------------------------------------------------
	# Campos de la tabla pd_pension
	define('d_pd_pension_id_pd_pension', 'id_pd_pension');
	define('d_pd_pension_m_by_created', 'm_by_created');
	define('d_pd_pension_m_by_modified', 'm_by_modified');
	define('d_pd_pension_m_date_created', 'm_date_created');
	define('d_pd_pension_m_date_modified', 'm_date_modified');
	define('d_pd_pension_m_deleted', 'm_deleted');
	define('d_pd_pension_m_description', 'm_description');
	define('d_pd_pension_m_level', 'm_level');
	define('d_pd_pension_m_status', 'm_status');
	define('d_pd_pension_m_temp', 'm_temp');
	define('d_pd_pension_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_personal_type
	define('d_pd_personal_type_id_pd_personal_type', 'id_pd_personal_type');
	define('d_pd_personal_type_m_by_created', 'm_by_created');
	define('d_pd_personal_type_m_by_modified', 'm_by_modified');
	define('d_pd_personal_type_m_date_created', 'm_date_created');
	define('d_pd_personal_type_m_date_modified', 'm_date_modified');
	define('d_pd_personal_type_m_deleted', 'm_deleted');
	define('d_pd_personal_type_m_description', 'm_description');
	define('d_pd_personal_type_m_level', 'm_level');
	define('d_pd_personal_type_m_status', 'm_status');
	define('d_pd_personal_type_m_temp', 'm_temp');
	define('d_pd_personal_type_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_provider
	define('d_pd_provider_id_pd_provider', 'id_pd_provider');
	define('d_pd_provider_m_by_created', 'm_by_created');
	define('d_pd_provider_m_by_modified', 'm_by_modified');
	define('d_pd_provider_m_date_created', 'm_date_created');
	define('d_pd_provider_m_date_modified', 'm_date_modified');
	define('d_pd_provider_m_deleted', 'm_deleted');
	define('d_pd_provider_m_description', 'm_description');
	define('d_pd_provider_m_level', 'm_level');
	define('d_pd_provider_m_status', 'm_status');
	define('d_pd_provider_m_temp', 'm_temp');
	define('d_pd_provider_t_name', 't_name');
	define('d_pd_provider_v_id_pd_category_provider', 'v_id_pd_category_provider');
	//------------------------------------------------
	# Campos de la tabla pd_transport_assistance
	define('d_pd_transport_assistance_id_pd_transport_assistance', 'id_pd_transport_assistance');
	define('d_pd_transport_assistance_m_by_created', 'm_by_created');
	define('d_pd_transport_assistance_m_by_modified', 'm_by_modified');
	define('d_pd_transport_assistance_m_date_created', 'm_date_created');
	define('d_pd_transport_assistance_m_date_modified', 'm_date_modified');
	define('d_pd_transport_assistance_m_deleted', 'm_deleted');
	define('d_pd_transport_assistance_m_description', 'm_description');
	define('d_pd_transport_assistance_m_level', 'm_level');
	define('d_pd_transport_assistance_m_status', 'm_status');
	define('d_pd_transport_assistance_m_temp', 'm_temp');
	define('d_pd_transport_assistance_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla pd_type_accrued
	define('d_pd_type_accrued_id_pd_type_accrued', 'id_pd_type_accrued');
	define('d_pd_type_accrued_m_by_created', 'm_by_created');
	define('d_pd_type_accrued_m_by_modified', 'm_by_modified');
	define('d_pd_type_accrued_m_date_created', 'm_date_created');
	define('d_pd_type_accrued_m_date_modified', 'm_date_modified');
	define('d_pd_type_accrued_m_deleted', 'm_deleted');
	define('d_pd_type_accrued_m_description', 'm_description');
	define('d_pd_type_accrued_m_level', 'm_level');
	define('d_pd_type_accrued_m_status', 'm_status');
	define('d_pd_type_accrued_m_temp', 'm_temp');
	define('d_pd_type_accrued_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_type_definition
	define('d_pd_type_definition_id_pd_type_definition', 'id_pd_type_definition');
	define('d_pd_type_definition_m_by_created', 'm_by_created');
	define('d_pd_type_definition_m_by_modified', 'm_by_modified');
	define('d_pd_type_definition_m_date_created', 'm_date_created');
	define('d_pd_type_definition_m_date_modified', 'm_date_modified');
	define('d_pd_type_definition_m_deleted', 'm_deleted');
	define('d_pd_type_definition_m_description', 'm_description');
	define('d_pd_type_definition_m_level', 'm_level');
	define('d_pd_type_definition_m_status', 'm_status');
	define('d_pd_type_definition_m_temp', 'm_temp');
	define('d_pd_type_definition_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_type_management
	define('d_pd_type_management_id_pd_type_management', 'id_pd_type_management');
	define('d_pd_type_management_m_by_created', 'm_by_created');
	define('d_pd_type_management_m_by_modified', 'm_by_modified');
	define('d_pd_type_management_m_date_created', 'm_date_created');
	define('d_pd_type_management_m_date_modified', 'm_date_modified');
	define('d_pd_type_management_m_deleted', 'm_deleted');
	define('d_pd_type_management_m_description', 'm_description');
	define('d_pd_type_management_m_level', 'm_level');
	define('d_pd_type_management_m_status', 'm_status');
	define('d_pd_type_management_m_temp', 'm_temp');
	define('d_pd_type_management_t_name', 't_name');
	//------------------------------------------------
	# Campos de la tabla pd_worked_days
	define('d_pd_worked_days_id_pd_worked_days', 'id_pd_worked_days');
	define('d_pd_worked_days_m_by_created', 'm_by_created');
	define('d_pd_worked_days_m_by_modified', 'm_by_modified');
	define('d_pd_worked_days_m_date_created', 'm_date_created');
	define('d_pd_worked_days_m_date_modified', 'm_date_modified');
	define('d_pd_worked_days_m_deleted', 'm_deleted');
	define('d_pd_worked_days_m_description', 'm_description');
	define('d_pd_worked_days_m_level', 'm_level');
	define('d_pd_worked_days_m_status', 'm_status');
	define('d_pd_worked_days_m_temp', 'm_temp');
	define('d_pd_worked_days_t_name', 't_name');
	define('d_pd_worked_days_t_value', 't_value');
	//------------------------------------------------
	# Campos de la tabla pd_worked_period
	define('d_pd_worked_period_id_pd_worked_period', 'id_pd_worked_period');
	define('d_pd_worked_period_m_by_created', 'm_by_created');
	define('d_pd_worked_period_m_by_modified', 'm_by_modified');
	define('d_pd_worked_period_m_date_created', 'm_date_created');
	define('d_pd_worked_period_m_date_modified', 'm_date_modified');
	define('d_pd_worked_period_m_deleted', 'm_deleted');
	define('d_pd_worked_period_m_description', 'm_description');
	define('d_pd_worked_period_m_level', 'm_level');
	define('d_pd_worked_period_m_status', 'm_status');
	define('d_pd_worked_period_m_temp', 'm_temp');
	define('d_pd_worked_period_t_name', 't_name');










	//------------------------------------------------
	# Campos de la tabla he01_datosdeudor_actualizacion_castigada
	define('d_itau_c_he01_d_d_a_c_id', 'id');
	define('d_itau_c_he01_d_d_a_c_name', 'name');
	define('d_itau_c_he01_d_d_a_c_numeroid', 'numeroid');
	define('d_itau_c_he01_d_d_a_c_codigocliente', 'codigocliente');
	define('d_itau_c_he01_d_d_a_c_date_modified', 'date_modified');
	define('d_itau_c_he01_d_d_a_c_hour_modified', 'hour_modified');
	define('d_itau_c_he01_d_d_a_c_modified_user_id', 'modified_user_id');
	define('d_itau_c_he01_d_d_a_c_asesor', 'asesor');
	define('d_itau_c_he01_d_d_a_c_direccion', 'direccion');
	define('d_itau_c_he01_d_d_a_c_correo', 'correo');
	define('d_itau_c_he01_d_d_a_c_correo2', 'correo2');
	define('d_itau_c_he01_d_d_a_c_direccion2', 'direccion2');
	define('d_itau_c_he01_d_d_a_c_telefono', 'telefono');
	define('d_itau_c_he01_d_d_a_c_telefono2', 'telefono2');
	define('d_itau_c_he01_d_d_a_c_telefono3', 'telefono3');
	define('d_itau_c_he01_d_d_a_c_celular', 'celular');
	define('d_itau_c_he01_d_d_a_c_nom_ref_fam1', 'nom_ref_fam1');
	define('d_itau_c_he01_d_d_a_c_dir_ref_fam1', 'dir_ref_fam1');
	define('d_itau_c_he01_d_d_a_c_tel_ref_fam1', 'tel_ref_fam1');
	define('d_itau_c_he01_d_d_a_c_cel_ref_fam1', 'cel_ref_fam1');
	define('d_itau_c_he01_d_d_a_c_nom_ref_fam2', 'nom_ref_fam2');
	define('d_itau_c_he01_d_d_a_c_dir_ref_fam2', 'dir_ref_fam2');
	define('d_itau_c_he01_d_d_a_c_tel_ref_fam2', 'tel_ref_fam2');
	define('d_itau_c_he01_d_d_a_c_cel_ref_fam2', 'cel_ref_fam2');
	define('d_itau_c_he01_d_d_a_c_nom_ref_fam3', 'nom_ref_fam3');
	define('d_itau_c_he01_d_d_a_c_dir_ref_fam3', 'dir_ref_fam3');
	define('d_itau_c_he01_d_d_a_c_tel_ref_fam3', 'tel_ref_fam3');
	define('d_itau_c_he01_d_d_a_c_cel_ref_fam3', 'cel_ref_fam3');
	define('d_itau_c_he01_d_d_a_c_nom_ref_per1', 'nom_ref_per1');
	define('d_itau_c_he01_d_d_a_c_dir_ref_per1', 'dir_ref_per1');
	define('d_itau_c_he01_d_d_a_c_tel_ref_per1', 'tel_ref_per1');
	define('d_itau_c_he01_d_d_a_c_cel_ref_per1', 'cel_ref_per1');
	define('d_itau_c_he01_d_d_a_c_nom_ref_per2', 'nom_ref_per2');
	define('d_itau_c_he01_d_d_a_c_dir_ref_per2', 'dir_ref_per2');
	define('d_itau_c_he01_d_d_a_c_tel_ref_per2', 'tel_ref_per2');
	define('d_itau_c_he01_d_d_a_c_cel_ref_per2', 'cel_ref_per2');
	define('d_itau_c_he01_d_d_a_c_nom_ref_com1', 'nom_ref_com1');
	define('d_itau_c_he01_d_d_a_c_dir_ref_com1', 'dir_ref_com1');
	define('d_itau_c_he01_d_d_a_c_tel_ref_com1', 'tel_ref_com1');
	define('d_itau_c_he01_d_d_a_c_cel_ref_com1', 'cel_ref_com1');
	define('d_itau_c_he01_d_d_a_c_nom_ref_com2', 'nom_ref_com2');
	define('d_itau_c_he01_d_d_a_c_dir_ref_com2', 'dir_ref_com2');
	define('d_itau_c_he01_d_d_a_c_tel_ref_com2', 'tel_ref_com2');
	define('d_itau_c_he01_d_d_a_c_cel_ref_com2', 'cel_ref_com2');
	//------------------------------------------------
	# Campos de la tabla he01_datosdeudor_castigada
	define('d_itau_c_he01_d_d_c_id', 'id');
	define('d_itau_c_he01_d_d_c_name', 'name');
	define('d_itau_c_he01_d_d_c_date_entered', 'date_entered');
	define('d_itau_c_he01_d_d_c_date_modified', 'date_modified');
	define('d_itau_c_he01_d_d_c_modified_user_id', 'modified_user_id');
	define('d_itau_c_he01_d_d_c_created_by', 'created_by');
	define('d_itau_c_he01_d_d_c_description', 'description');
	define('d_itau_c_he01_d_d_c_deleted', 'deleted');
	define('d_itau_c_he01_d_d_c_assigned_user_id', 'assigned_user_id');
	define('d_itau_c_he01_d_d_c_numeroid', 'numeroid');
	define('d_itau_c_he01_d_d_c_fecha_de_castigo', 'fecha_de_castigo');
	define('d_itau_c_he01_d_d_c_vr_total_castigo', 'vr_total_castigo');
	define('d_itau_c_he01_d_d_c_currency_id', 'currency_id');
	define('d_itau_c_he01_d_d_c_intereses_a_la_fecha', 'intereses_a_la_fecha');
	define('d_itau_c_he01_d_d_c_actualizacion_sobregiro', 'actualizacion_sobregiro');
	define('d_itau_c_he01_d_d_c_actualizacion_crp_crt', 'actualizacion_crp_crt');
	define('d_itau_c_he01_d_d_c_actualizacion_tarjeta_visa', 'actualizacion_tarjeta_visa');
	define('d_itau_c_he01_d_d_c_actualizacion_tarjeta_master', 'actualizacion_tarjeta_master');
	define('d_itau_c_he01_d_d_c_actualizacion_t_visa_club', 'actualizacion_t_visa_club');
	define('d_itau_c_he01_d_d_c_actualizacion_ord', 'actualizacion_ord');
	define('d_itau_c_he01_d_d_c_reestructurados', 'reestructurados');
	define('d_itau_c_he01_d_d_c_leasing', 'leasing');
	define('d_itau_c_he01_d_d_c_actualizacion_total', 'actualizacion_total');
	define('d_itau_c_he01_d_d_c_cta_cte', 'cta_cte');
	define('d_itau_c_he01_d_d_c_saldo_total', 'saldo_total');
	define('d_itau_c_he01_d_d_c_tipocartera', 'tipocartera');
	define('d_itau_c_he01_d_d_c_direccion', 'direccion');
	define('d_itau_c_he01_d_d_c_direccion2', 'direccion2');
	define('d_itau_c_he01_d_d_c_ciudadcontacto', 'ciudadcontacto');
	define('d_itau_c_he01_d_d_c_telefono', 'telefono');
	define('d_itau_c_he01_d_d_c_telefono2', 'telefono2');
	define('d_itau_c_he01_d_d_c_telefono3', 'telefono3');
	define('d_itau_c_he01_d_d_c_celular', 'celular');
	define('d_itau_c_he01_d_d_c_correo', 'correo');
	define('d_itau_c_he01_d_d_c_correo2', 'correo2');
	define('d_itau_c_he01_d_d_c_barrido', 'barrido');
	define('d_itau_c_he01_d_d_c_ulttipificacion', 'ulttipificacion');
	define('d_itau_c_he01_d_d_c_fechaultimatip', 'fechaultimatip');
	define('d_itau_c_he01_d_d_c_fechaproyeccion', 'fechaproyeccion');
	define('d_itau_c_he01_d_d_c_pago', 'pago');
	define('d_itau_c_he01_d_d_c_proyeccion', 'proyeccion');
	define('d_itau_c_he01_d_d_c_fechapago', 'fechapago');
	define('d_itau_c_he01_d_d_c_seguimiento', 'seguimiento');
	define('d_itau_c_he01_d_d_c_asesor', 'asesor');
	define('d_itau_c_he01_d_d_c_campaign', 'campaign');
	define('d_itau_c_he01_d_d_c_nom_ref_fam1', 'nom_ref_fam1');
	define('d_itau_c_he01_d_d_c_dir_ref_fam1', 'dir_ref_fam1');
	define('d_itau_c_he01_d_d_c_tel_ref_fam1', 'tel_ref_fam1');
	define('d_itau_c_he01_d_d_c_cel_ref_fam1', 'cel_ref_fam1');
	define('d_itau_c_he01_d_d_c_nom_ref_fam2', 'nom_ref_fam2');
	define('d_itau_c_he01_d_d_c_dir_ref_fam2', 'dir_ref_fam2');
	define('d_itau_c_he01_d_d_c_tel_ref_fam2', 'tel_ref_fam2');
	define('d_itau_c_he01_d_d_c_cel_ref_fam2', 'cel_ref_fam2');
	define('d_itau_c_he01_d_d_c_nom_ref_fam3', 'nom_ref_fam3');
	define('d_itau_c_he01_d_d_c_dir_ref_fam3', 'dir_ref_fam3');
	define('d_itau_c_he01_d_d_c_tel_ref_fam3', 'tel_ref_fam3');
	define('d_itau_c_he01_d_d_c_cel_ref_fam3', 'cel_ref_fam3');
	define('d_itau_c_he01_d_d_c_nom_ref_per1', 'nom_ref_per1');
	define('d_itau_c_he01_d_d_c_dir_ref_per1', 'dir_ref_per1');
	define('d_itau_c_he01_d_d_c_tel_ref_per1', 'tel_ref_per1');
	define('d_itau_c_he01_d_d_c_cel_ref_per1', 'cel_ref_per1');
	define('d_itau_c_he01_d_d_c_nom_ref_per2', 'nom_ref_per2');
	define('d_itau_c_he01_d_d_c_dir_ref_per2', 'dir_ref_per2');
	define('d_itau_c_he01_d_d_c_tel_ref_per2', 'tel_ref_per2');
	define('d_itau_c_he01_d_d_c_cel_ref_per2', 'cel_ref_per2');
	define('d_itau_c_he01_d_d_c_nom_ref_com1', 'nom_ref_com1');
	define('d_itau_c_he01_d_d_c_dir_ref_com1', 'dir_ref_com1');
	define('d_itau_c_he01_d_d_c_tel_ref_com1', 'tel_ref_com1');
	define('d_itau_c_he01_d_d_c_cel_ref_com1', 'cel_ref_com1');
	define('d_itau_c_he01_d_d_c_nom_ref_com2', 'nom_ref_com2');
	define('d_itau_c_he01_d_d_c_dir_ref_com2', 'dir_ref_com2');
	define('d_itau_c_he01_d_d_c_tel_ref_com2', 'tel_ref_com2');
	define('d_itau_c_he01_d_d_c_cel_ref_com2', 'cel_ref_com2');
	define('d_itau_c_he01_d_d_c_actualizacion_universitario', 'actualizacion_universitario');
	define('d_itau_c_he01_d_d_c_rotativo_personal', 'rotativo_personal');
	define('d_itau_c_he01_d_d_c_ordinarios_libranzas', 'ordinarios_libranzas');
	define('d_itau_c_he01_d_d_c_cartera_ordinaria_gmac', 'cartera_ordinaria_gmac');
	define('d_itau_c_he01_d_d_c_prestamos_ordinarios', 'prestamos_ordinarios');
	define('d_itau_c_he01_d_d_c_seguros_cartera_gmac', 'seguros_cartera_gmac');
	define('d_itau_c_he01_d_d_c_cartera_gmac', 'cartera_gmac');
	define('d_itau_c_he01_d_d_c_total_comision', 'total_comision');
	define('d_itau_c_he01_d_d_c_total_pagos', 'total_pagos');
	define('d_itau_c_he01_d_d_c_operacion_crp_crt', 'operacion_crp_crt');
	define('d_itau_c_he01_d_d_c_operacion_master', 'operacion_master');
	define('d_itau_c_he01_d_d_c_operacion_prestamos_ord', 'operacion_prestamos_ord');
	define('d_itau_c_he01_d_d_c_operacion_sobregiro', 'operacion_sobregiro');
	define('d_itau_c_he01_d_d_c_operacion_visa', 'operacion_visa');
	define('d_itau_c_he01_d_d_c_moneda_legal', 'moneda_legal');
	define('d_itau_c_he01_d_d_c_operacion_moneda_leg', 'operacion_moneda_leg');
	define('d_itau_c_he01_d_d_c_operacion_moneda', 'operacion_moneda');
	define('d_itau_c_he01_d_d_c_actualizacion_tarjeta', 'actualizacion_tarjeta');
	define('d_itau_c_he01_d_d_c_anio_castigo', 'anio_castigo');
	define('d_itau_c_he01_d_d_c_endeudamientocastigo', 'endeudamientocastigo');
	//------------------------------------------------
	# Campos de la tabla he01_pagoproy_castigada
	define('d_itau_c_he01_p_p_c_id', 'id');
	define('d_itau_c_he01_p_p_c_nombre', 'nombre');
	define('d_itau_c_he01_p_p_c_numeroid', 'numeroid');
	define('d_itau_c_he01_p_p_c_tipocartera', 'tipocartera');
	define('d_itau_c_he01_p_p_c_fechapago', 'fechapago');
	define('d_itau_c_he01_p_p_c_pago', 'pago');
	define('d_itau_c_he01_p_p_c_fechaproyeccion', 'fechaproyeccion');
	define('d_itau_c_he01_p_p_c_proyeccion', 'proyeccion');
	define('d_itau_c_he01_p_p_c_asesor', 'asesor');
	define('d_itau_c_he01_p_p_c_idasesor', 'idasesor');
	define('d_itau_c_he01_p_p_c_saldo_capital', 'saldo_capital');
	define('d_itau_c_he01_p_p_c_fecha', 'fecha');
	define('d_itau_c_he01_p_p_c_hora', 'hora');
	//------------------------------------------------
	# Campos de la tabla he01_productosdeudor_castigada
	define('d_itau_c_he01_p_d_c_id', 'id');
	define('d_itau_c_he01_p_d_c_name', 'name');
	define('d_itau_c_he01_p_d_c_date_entered', 'date_entered');
	define('d_itau_c_he01_p_d_c_date_modified', 'date_modified');
	define('d_itau_c_he01_p_d_c_modified_user_id', 'modified_user_id');
	define('d_itau_c_he01_p_d_c_created_by', 'created_by');
	define('d_itau_c_he01_p_d_c_description', 'description');
	define('d_itau_c_he01_p_d_c_deleted', 'deleted');
	define('d_itau_c_he01_p_d_c_assigned_user_id', 'assigned_user_id');
	define('d_itau_c_he01_p_d_c_numeroid_t', 'numeroid_t');
	define('d_itau_c_he01_p_d_c_numero_producto', 'numero_producto');
	define('d_itau_c_he01_p_d_c_nombre_producto', 'nombre_producto');
	define('d_itau_c_he01_p_d_c_saldo_capital', 'saldo_capital');
	define('d_itau_c_he01_p_d_c_currency_id', 'currency_id');
	//------------------------------------------------
	# Campos de la tabla he01_tipigestion_castigada
	define('d_itau_c_he01_t_c_id', 'id');
	define('d_itau_c_he01_t_c_nombre', 'nombre');
	define('d_itau_c_he01_t_c_numeroid', 'numeroid');
	define('d_itau_c_he01_t_c_tipificacion', 'tipificacion');
	define('d_itau_c_he01_t_c_detalle', 'detalle');
	define('d_itau_c_he01_t_c_telcontacto', 'telcontacto');
	define('d_itau_c_he01_t_c_campaign', 'campaign');
	define('d_itau_c_he01_t_c_endeudamientocastigo', 'endeudamientocastigo');
	define('d_itau_c_he01_t_c_idasesor', 'idasesor');
	define('d_itau_c_he01_t_c_asesor', 'asesor');
	define('d_itau_c_he01_t_c_fecha', 'fecha');
	define('d_itau_c_he01_t_c_hora', 'hora');
	define('d_itau_c_he01_t_c_tipocartera', 'tipocartera');
	define('d_itau_c_he01_t_c_codtipificacion', 'codtipificacion');
	define('d_itau_c_he01_t_c_razonnopago', 'razonnopago');
	define('d_itau_c_he01_t_c_nro_tipificacion', 'nro_tipificacion');
	define('d_itau_c_he01_t_c_mejor_gestion', 'mejor_gestion');
	define('d_itau_c_he01_t_c_t_definition', 't_definition');
	//------------------------------------------------
	# Campos de la tabla pd_c_users
	define('d_itau_c_users_id', 'id');
	define('d_itau_c_users_user_name', 'user_name');
	define('d_itau_c_users_user_hash', 'user_hash');
	define('d_itau_c_users_system_generated_password', 'system_generated_password');
	define('d_itau_c_users_pwd_last_changed', 'pwd_last_changed');
	define('d_itau_c_users_authenticate_id', 'authenticate_id');
	define('d_itau_c_users_sugar_login', 'sugar_login');
	define('d_itau_c_users_first_name', 'first_name');
	define('d_itau_c_users_last_name', 'last_name');
	define('d_itau_c_users_is_admin', 'is_admin');
	define('d_itau_c_users_external_auth_only', 'external_auth_only');
	define('d_itau_c_users_receive_notifications', 'receive_notifications');
	define('d_itau_c_users_description', 'description');
	define('d_itau_c_users_date_entered', 'date_entered');
	define('d_itau_c_users_date_modified', 'date_modified');
	define('d_itau_c_users_modified_user_id', 'modified_user_id');
	define('d_itau_c_users_created_by', 'created_by');
	define('d_itau_c_users_title', 'title');
	define('d_itau_c_users_department', 'department');
	define('d_itau_c_users_phone_home', 'phone_home');
	define('d_itau_c_users_phone_mobile', 'phone_mobile');
	define('d_itau_c_users_phone_work', 'phone_work');
	define('d_itau_c_users_phone_other', 'phone_other');
	define('d_itau_c_users_phone_fax', 'phone_fax');
	define('d_itau_c_users_status', 'status');
	define('d_itau_c_users_address_street', 'address_street');
	define('d_itau_c_users_address_city', 'address_city');
	define('d_itau_c_users_address_state', 'address_state');
	define('d_itau_c_users_address_country', 'address_country');
	define('d_itau_c_users_address_postalcode', 'address_postalcode');
	define('d_itau_c_users_deleted', 'deleted');
	define('d_itau_c_users_portal_only', 'portal_only');
	define('d_itau_c_users_show_on_employees', 'show_on_employees');
	define('d_itau_c_users_employee_status', 'employee_status');
	define('d_itau_c_users_messenger_id', 'messenger_id');
	define('d_itau_c_users_messenger_type', 'messenger_type');
	define('d_itau_c_users_reports_to_id', 'reports_to_id');
	define('d_itau_c_users_is_group', 'is_group');










	//------------------------------------------------
	# Campos de la tabla he01_datosdeudor_actualizacion_vigente
	define('d_itau_v_he01_d_d_a_v_id', 'id');
	define('d_itau_v_he01_d_d_a_v_name', 'name');
	define('d_itau_v_he01_d_d_a_v_numeroid', 'numeroid');
	define('d_itau_v_he01_d_d_a_v_codigocliente', 'codigocliente');
	define('d_itau_v_he01_d_d_a_v_date_modified', 'date_modified');
	define('d_itau_v_he01_d_d_a_v_hour_modified', 'hour_modified');
	define('d_itau_v_he01_d_d_a_v_modified_user_id', 'modified_user_id');
	define('d_itau_v_he01_d_d_a_v_asesor', 'asesor');
	define('d_itau_v_he01_d_d_a_v_direccion', 'direccion');
	define('d_itau_v_he01_d_d_a_v_correo', 'correo');
	define('d_itau_v_he01_d_d_a_v_correo2', 'correo2');
	define('d_itau_v_he01_d_d_a_v_direccion2', 'direccion2');
	define('d_itau_v_he01_d_d_a_v_telefono', 'telefono');
	define('d_itau_v_he01_d_d_a_v_telefono2', 'telefono2');
	define('d_itau_v_he01_d_d_a_v_telefono3', 'telefono3');
	define('d_itau_v_he01_d_d_a_v_celular', 'celular');
	define('d_itau_v_he01_d_d_a_v_nom_ref_fam1', 'nom_ref_fam1');
	define('d_itau_v_he01_d_d_a_v_dir_ref_fam1', 'dir_ref_fam1');
	define('d_itau_v_he01_d_d_a_v_tel_ref_fam1', 'tel_ref_fam1');
	define('d_itau_v_he01_d_d_a_v_cel_ref_fam1', 'cel_ref_fam1');
	define('d_itau_v_he01_d_d_a_v_nom_ref_fam2', 'nom_ref_fam2');
	define('d_itau_v_he01_d_d_a_v_dir_ref_fam2', 'dir_ref_fam2');
	define('d_itau_v_he01_d_d_a_v_tel_ref_fam2', 'tel_ref_fam2');
	define('d_itau_v_he01_d_d_a_v_cel_ref_fam2', 'cel_ref_fam2');
	define('d_itau_v_he01_d_d_a_v_nom_ref_fam3', 'nom_ref_fam3');
	define('d_itau_v_he01_d_d_a_v_dir_ref_fam3', 'dir_ref_fam3');
	define('d_itau_v_he01_d_d_a_v_tel_ref_fam3', 'tel_ref_fam3');
	define('d_itau_v_he01_d_d_a_v_cel_ref_fam3', 'cel_ref_fam3');
	define('d_itau_v_he01_d_d_a_v_nom_ref_per1', 'nom_ref_per1');
	define('d_itau_v_he01_d_d_a_v_dir_ref_per1', 'dir_ref_per1');
	define('d_itau_v_he01_d_d_a_v_tel_ref_per1', 'tel_ref_per1');
	define('d_itau_v_he01_d_d_a_v_cel_ref_per1', 'cel_ref_per1');
	define('d_itau_v_he01_d_d_a_v_nom_ref_per2', 'nom_ref_per2');
	define('d_itau_v_he01_d_d_a_v_dir_ref_per2', 'dir_ref_per2');
	define('d_itau_v_he01_d_d_a_v_tel_ref_per2', 'tel_ref_per2');
	define('d_itau_v_he01_d_d_a_v_cel_ref_per2', 'cel_ref_per2');
	define('d_itau_v_he01_d_d_a_v_nom_ref_com1', 'nom_ref_com1');
	define('d_itau_v_he01_d_d_a_v_dir_ref_com1', 'dir_ref_com1');
	define('d_itau_v_he01_d_d_a_v_tel_ref_com1', 'tel_ref_com1');
	define('d_itau_v_he01_d_d_a_v_cel_ref_com1', 'cel_ref_com1');
	define('d_itau_v_he01_d_d_a_v_nom_ref_com2', 'nom_ref_com2');
	define('d_itau_v_he01_d_d_a_v_dir_ref_com2', 'dir_ref_com2');
	define('d_itau_v_he01_d_d_a_v_tel_ref_com2', 'tel_ref_com2');
	define('d_itau_v_he01_d_d_a_v_cel_ref_com2', 'cel_ref_com2');
	//------------------------------------------------
	# Campos de la tabla he01_datosdeudor_vigente
	define('d_itau_v_he01_d_d_v_id', 'id');
	define('d_itau_v_he01_d_d_v_name', 'name');
	define('d_itau_v_he01_d_d_v_date_entered', 'date_entered');
	define('d_itau_v_he01_d_d_v_date_modified', 'date_modified');
	define('d_itau_v_he01_d_d_v_modified_user_id', 'modified_user_id');
	define('d_itau_v_he01_d_d_v_created_by', 'created_by');
	define('d_itau_v_he01_d_d_v_description', 'description');
	define('d_itau_v_he01_d_d_v_deleted', 'deleted');
	define('d_itau_v_he01_d_d_v_assigned_user_id', 'assigned_user_id');
	define('d_itau_v_he01_d_d_v_codigocliente', 'codigocliente');
	define('d_itau_v_he01_d_d_v_tipoid', 'tipoid');
	define('d_itau_v_he01_d_d_v_numeroid', 'numeroid');
	define('d_itau_v_he01_d_d_v_codigoejecutivo', 'codigoejecutivo');
	define('d_itau_v_he01_d_d_v_ejecutivo', 'ejecutivo');
	define('d_itau_v_he01_d_d_v_codigooficina', 'codigooficina');
	define('d_itau_v_he01_d_d_v_oficina', 'oficina');
	define('d_itau_v_he01_d_d_v_tipocartera', 'tipocartera');
	define('d_itau_v_he01_d_d_v_casaexterna', 'casaexterna');
	define('d_itau_v_he01_d_d_v_asesorcadri', 'asesorcadri');
	define('d_itau_v_he01_d_d_v_direccion', 'direccion');
	define('d_itau_v_he01_d_d_v_direccion2', 'direccion2');
	define('d_itau_v_he01_d_d_v_ciudadcontacto', 'ciudadcontacto');
	define('d_itau_v_he01_d_d_v_telefono', 'telefono');
	define('d_itau_v_he01_d_d_v_telefono2', 'telefono2');
	define('d_itau_v_he01_d_d_v_telefono3', 'telefono3');
	define('d_itau_v_he01_d_d_v_celular', 'celular');
	define('d_itau_v_he01_d_d_v_correo', 'correo');
	define('d_itau_v_he01_d_d_v_correo2', 'correo2');
	define('d_itau_v_he01_d_d_v_codeudor', 'codeudor');
	define('d_itau_v_he01_d_d_v_telcodeudor', 'telcodeudor');
	define('d_itau_v_he01_d_d_v_telcodeudor2', 'telcodeudor2');
	define('d_itau_v_he01_d_d_v_ciudadtelcodeudor', 'ciudadtelcodeudor');
	define('d_itau_v_he01_d_d_v_ciudadtelcodeudor2', 'ciudadtelcodeudor2');
	define('d_itau_v_he01_d_d_v_telcontacto', 'telcontacto');
	define('d_itau_v_he01_d_d_v_observaciones', 'observaciones');
	define('d_itau_v_he01_d_d_v_asesor', 'asesor');
	define('d_itau_v_he01_d_d_v_campaign', 'campaign');
	define('d_itau_v_he01_d_d_v_barrido', 'barrido');
	define('d_itau_v_he01_d_d_v_ulttipificacion', 'ulttipificacion');
	define('d_itau_v_he01_d_d_v_fechaultimatip', 'fechaultimatip');
	define('d_itau_v_he01_d_d_v_pago', 'pago');
	define('d_itau_v_he01_d_d_v_currency_id', 'currency_id');
	define('d_itau_v_he01_d_d_v_fechapago', 'fechapago');
	define('d_itau_v_he01_d_d_v_proyeccion', 'proyeccion');
	define('d_itau_v_he01_d_d_v_fechaproyeccion', 'fechaproyeccion');
	define('d_itau_v_he01_d_d_v_seguimiento', 'seguimiento');
	define('d_itau_v_he01_d_d_v_endeudamientocastigo', 'endeudamientocastigo');
	define('d_itau_v_he01_d_d_v_nom_ref_fam1', 'nom_ref_fam1');
	define('d_itau_v_he01_d_d_v_dir_ref_fam1', 'dir_ref_fam1');
	define('d_itau_v_he01_d_d_v_tel_ref_fam1', 'tel_ref_fam1');
	define('d_itau_v_he01_d_d_v_cel_ref_fam1', 'cel_ref_fam1');
	define('d_itau_v_he01_d_d_v_nom_ref_fam2', 'nom_ref_fam2');
	define('d_itau_v_he01_d_d_v_dir_ref_fam2', 'dir_ref_fam2');
	define('d_itau_v_he01_d_d_v_tel_ref_fam2', 'tel_ref_fam2');
	define('d_itau_v_he01_d_d_v_cel_ref_fam2', 'cel_ref_fam2');
	define('d_itau_v_he01_d_d_v_nom_ref_fam3', 'nom_ref_fam3');
	define('d_itau_v_he01_d_d_v_dir_ref_fam3', 'dir_ref_fam3');
	define('d_itau_v_he01_d_d_v_tel_ref_fam3', 'tel_ref_fam3');
	define('d_itau_v_he01_d_d_v_cel_ref_fam3', 'cel_ref_fam3');
	define('d_itau_v_he01_d_d_v_nom_ref_per1', 'nom_ref_per1');
	define('d_itau_v_he01_d_d_v_dir_ref_per1', 'dir_ref_per1');
	define('d_itau_v_he01_d_d_v_tel_ref_per1', 'tel_ref_per1');
	define('d_itau_v_he01_d_d_v_cel_ref_per1', 'cel_ref_per1');
	define('d_itau_v_he01_d_d_v_nom_ref_per2', 'nom_ref_per2');
	define('d_itau_v_he01_d_d_v_dir_ref_per2', 'dir_ref_per2');
	define('d_itau_v_he01_d_d_v_tel_ref_per2', 'tel_ref_per2');
	define('d_itau_v_he01_d_d_v_cel_ref_per2', 'cel_ref_per2');
	define('d_itau_v_he01_d_d_v_nom_ref_com1', 'nom_ref_com1');
	define('d_itau_v_he01_d_d_v_dir_ref_com1', 'dir_ref_com1');
	define('d_itau_v_he01_d_d_v_tel_ref_com1', 'tel_ref_com1');
	define('d_itau_v_he01_d_d_v_cel_ref_com1', 'cel_ref_com1');
	define('d_itau_v_he01_d_d_v_nom_ref_com2', 'nom_ref_com2');
	define('d_itau_v_he01_d_d_v_dir_ref_com2', 'dir_ref_com2');
	define('d_itau_v_he01_d_d_v_tel_ref_com2', 'tel_ref_com2');
	define('d_itau_v_he01_d_d_v_cel_ref_com2', 'cel_ref_com2');
	define('d_itau_v_he01_d_d_v_gestion_banco', 'gestion_banco');
	//------------------------------------------------
	# Campos de la tabla he01_pagoproy_vigente
	define('d_itau_v_he01_p_p_v_id', 'id');
	define('d_itau_v_he01_p_p_v_nombre', 'nombre');
	define('d_itau_v_he01_p_p_v_numeroid', 'numeroid');
	define('d_itau_v_he01_p_p_v_codigocliente', 'codigocliente');
	define('d_itau_v_he01_p_p_v_numeroproducto', 'numeroproducto');
	define('d_itau_v_he01_p_p_v_tipocartera', 'tipocartera');
	define('d_itau_v_he01_p_p_v_fechapago', 'fechapago');
	define('d_itau_v_he01_p_p_v_pago', 'pago');
	define('d_itau_v_he01_p_p_v_fechaproyeccion', 'fechaproyeccion');
	define('d_itau_v_he01_p_p_v_proyeccion', 'proyeccion');
	define('d_itau_v_he01_p_p_v_asesor', 'asesor');
	define('d_itau_v_he01_p_p_v_idasesor', 'idasesor');
	define('d_itau_v_he01_p_p_v_saldo_capital', 'saldo_capital');
	define('d_itau_v_he01_p_p_v_fecha', 'fecha');
	define('d_itau_v_he01_p_p_v_hora', 'hora');
	//------------------------------------------------
	# Campos de la tabla he01_productosdeudor_vigente
	define('d_itau_v_he01_p_d_v_id', 'id');
	define('d_itau_v_he01_p_d_v_name', 'name');
	define('d_itau_v_he01_p_d_v_date_entered', 'date_entered');
	define('d_itau_v_he01_p_d_v_date_modified', 'date_modified');
	define('d_itau_v_he01_p_d_v_modified_user_id', 'modified_user_id');
	define('d_itau_v_he01_p_d_v_created_by', 'created_by');
	define('d_itau_v_he01_p_d_v_description', 'description');
	define('d_itau_v_he01_p_d_v_deleted', 'deleted');
	define('d_itau_v_he01_p_d_v_assigned_user_id', 'assigned_user_id');
	define('d_itau_v_he01_p_d_v_codigocliente', 'codigocliente');
	define('d_itau_v_he01_p_d_v_numeroid', 'numeroid');
	define('d_itau_v_he01_p_d_v_tipocartera', 'tipocartera');
	define('d_itau_v_he01_p_d_v_codigooficina', 'codigooficina');
	define('d_itau_v_he01_p_d_v_oficina', 'oficina');
	define('d_itau_v_he01_p_d_v_codigoproducto', 'codigoproducto');
	define('d_itau_v_he01_p_d_v_numeroproducto', 'numeroproducto');
	define('d_itau_v_he01_p_d_v_nombreproducto', 'nombreproducto');
	define('d_itau_v_he01_p_d_v_banca', 'banca');
	define('d_itau_v_he01_p_d_v_fechavinculacion', 'fechavinculacion');
	define('d_itau_v_he01_p_d_v_estrategiavinculacion', 'estrategiavinculacion');
	define('d_itau_v_he01_p_d_v_fechadesembolso', 'fechadesembolso');
	define('d_itau_v_he01_p_d_v_calificacionactual', 'calificacionactual');
	define('d_itau_v_he01_p_d_v_provisionactual', 'provisionactual');
	define('d_itau_v_he01_p_d_v_currency_id', 'currency_id');
	define('d_itau_v_he01_p_d_v_endeudamientocastigo', 'endeudamientocastigo');
	define('d_itau_v_he01_p_d_v_fechacastigo', 'fechacastigo');
	define('d_itau_v_he01_p_d_v_diasmora', 'diasmora');
	define('d_itau_v_he01_p_d_v_rangomora', 'rangomora');
	define('d_itau_v_he01_p_d_v_capitalinicial', 'capitalinicial');
	define('d_itau_v_he01_p_d_v_saldototal', 'saldototal');
	define('d_itau_v_he01_p_d_v_saldocapital', 'saldocapital');
	define('d_itau_v_he01_p_d_v_saldomora', 'saldomora');
	define('d_itau_v_he01_p_d_v_saldointcorriente', 'saldointcorriente');
	define('d_itau_v_he01_p_d_v_saldointmora', 'saldointmora');
	define('d_itau_v_he01_p_d_v_saldootroscargos', 'saldootroscargos');
	define('d_itau_v_he01_p_d_v_saldoextracont', 'saldoextracont');
	define('d_itau_v_he01_p_d_v_pagominimo', 'pagominimo');
	define('d_itau_v_he01_p_d_v_pagominimocap', 'pagominimocap');
	define('d_itau_v_he01_p_d_v_pagominimointcte', 'pagominimointcte');
	define('d_itau_v_he01_p_d_v_pagominimointmora', 'pagominimointmora');
	define('d_itau_v_he01_p_d_v_pagominimootros', 'pagominimootros');
	define('d_itau_v_he01_p_d_v_pagominimoextra', 'pagominimoextra');
	define('d_itau_v_he01_p_d_v_rangomorainicial', 'rangomorainicial');
	define('d_itau_v_he01_p_d_v_campaign', 'campaign');
	define('d_itau_v_he01_p_d_v_ulttipificacion', 'ulttipificacion');
	define('d_itau_v_he01_p_d_v_fechaproyeccion', 'fechaproyeccion');
	define('d_itau_v_he01_p_d_v_proyeccion', 'proyeccion');
	define('d_itau_v_he01_p_d_v_pago', 'pago');
	define('d_itau_v_he01_p_d_v_fechapago', 'fechapago');
	define('d_itau_v_he01_p_d_v_fechacorte', 'fechacorte');
	define('d_itau_v_he01_p_d_v_gestion_banco', 'gestion_banco');
	define('d_itau_v_he01_p_d_v_dias_refresque', 'dias_refresque');
	define('d_itau_v_he01_p_d_v_capital_refresque', 'capital_refresque');
	define('d_itau_v_he01_p_d_v_total_intereses', 'total_intereses');
	define('d_itau_v_he01_p_d_v_provision_total', 'provision_total');
	define('d_itau_v_he01_p_d_v_gestion_mega_ranking', 'gestion_mega_ranking');
	//------------------------------------------------
	# Campos de la tabla he01_tipigestion_vigente
	define('d_itau_v_he01_t_v_id', 'id');
	define('d_itau_v_he01_t_v_nombre', 'nombre');
	define('d_itau_v_he01_t_v_numeroid', 'numeroid');
	define('d_itau_v_he01_t_v_codigocliente', 'codigocliente');
	define('d_itau_v_he01_t_v_tipificacion', 'tipificacion');
	define('d_itau_v_he01_t_v_detalle', 'detalle');
	define('d_itau_v_he01_t_v_telcontacto', 'telcontacto');
	define('d_itau_v_he01_t_v_campaign', 'campaign');
	define('d_itau_v_he01_t_v_endeudamientocastigo', 'endeudamientocastigo');
	define('d_itau_v_he01_t_v_idasesor', 'idasesor');
	define('d_itau_v_he01_t_v_asesor', 'asesor');
	define('d_itau_v_he01_t_v_fecha', 'fecha');
	define('d_itau_v_he01_t_v_hora', 'hora');
	define('d_itau_v_he01_t_v_tipocartera', 'tipocartera');
	define('d_itau_v_he01_t_v_codtipificacion', 'codtipificacion');
	define('d_itau_v_he01_t_v_razonnopago', 'razonnopago');
	define('d_itau_v_he01_t_v_nro_tipificacion', 'nro_tipificacion');
	define('d_itau_v_he01_t_v_mejor_gestion', 'mejor_gestion');
	define('d_itau_v_he01_t_v_t_definition', 't_definition');
	//------------------------------------------------
	# Campos de la tabla pd_c_users
	define('d_itau_v_users_id', 'id');
	define('d_itau_v_users_user_name', 'user_name');
	define('d_itau_v_users_user_hash', 'user_hash');
	define('d_itau_v_users_system_generated_password', 'system_generated_password');
	define('d_itau_v_users_pwd_last_changed', 'pwd_last_changed');
	define('d_itau_v_users_authenticate_id', 'authenticate_id');
	define('d_itau_v_users_sugar_login', 'sugar_login');
	define('d_itau_v_users_first_name', 'first_name');
	define('d_itau_v_users_last_name', 'last_name');
	define('d_itau_v_users_is_admin', 'is_admin');
	define('d_itau_v_users_external_auth_only', 'external_auth_only');
	define('d_itau_v_users_receive_notifications', 'receive_notifications');
	define('d_itau_v_users_description', 'description');
	define('d_itau_v_users_date_entered', 'date_entered');
	define('d_itau_v_users_date_modified', 'date_modified');
	define('d_itau_v_users_modified_user_id', 'modified_user_id');
	define('d_itau_v_users_created_by', 'created_by');
	define('d_itau_v_users_title', 'title');
	define('d_itau_v_users_department', 'department');
	define('d_itau_v_users_phone_home', 'phone_home');
	define('d_itau_v_users_phone_mobile', 'phone_mobile');
	define('d_itau_v_users_phone_work', 'phone_work');
	define('d_itau_v_users_phone_other', 'phone_other');
	define('d_itau_v_users_phone_fax', 'phone_fax');
	define('d_itau_v_users_status', 'status');
	define('d_itau_v_users_address_street', 'address_street');
	define('d_itau_v_users_address_city', 'address_city');
	define('d_itau_v_users_address_state', 'address_state');
	define('d_itau_v_users_address_country', 'address_country');
	define('d_itau_v_users_address_postalcode', 'address_postalcode');
	define('d_itau_v_users_deleted', 'deleted');
	define('d_itau_v_users_portal_only', 'portal_only');
	define('d_itau_v_users_show_on_employees', 'show_on_employees');
	define('d_itau_v_users_employee_status', 'employee_status');
	define('d_itau_v_users_messenger_id', 'messenger_id');
	define('d_itau_v_users_messenger_type', 'messenger_type');
	define('d_itau_v_users_reports_to_id', 'reports_to_id');
	define('d_itau_v_users_is_group', 'is_group');









	/*
	//------------------------------------------------
	# Campos de la tabla coa01_tipigestion
	define('d_coa01_t_id', 'id');
	define('d_coa01_t_nombre', 'nombre');
	define('d_coa01_t_identificacion', 'identificacion');
	define('d_coa01_t_nro_obligacion', 'nro_obligacion');
	define('d_coa01_t_descripcion', 'descripcion');
	define('d_coa01_t_gestion', 'gestion');
	define('d_coa01_t_telcontacto', 'telcontacto');
	define('d_coa01_t_saldo_capital', 'saldo_capital');
	define('d_coa01_t_asesor', 'asesor');
	define('d_coa01_t_fecha', 'fecha');
	define('d_coa01_t_hora', 'hora');
	define('d_coa01_t_campaign', 'campaign');
	define('d_coa01_t_dias_mora', 'dias_mora');
	define('d_coa01_t_nombre_oficina', 'nombre_oficina');
	define('d_coa01_t_capital_vencido', 'capital_vencido');
	define('d_coa01_t_localizado', 'localizado');
	define('d_coa01_t_codigo_descripcion', 'codigo_descripcion');
	define('d_coa01_t_prioridad', 'prioridad');
	define('d_coa01_t_dice_ya_pago', 'dice_ya_pago');
	define('d_coa01_t_fechaproyeccion', 'fechaproyeccion');
	define('d_coa01_t_no_pago', 'no_pago');
	define('d_coa01_t_nro_tipificacion', 'nro_tipificacion');
	//------------------------------------------------
	# Campos de la tabla car01_tipigestion
	define('d_car01_t_tipificacion', 'tipificacion');
	define('d_car01_t_no_pago', 'no_pago');
	define('d_car01_t_detalle', 'detalle');
	define('d_car01_t_nombre', 'nombre');
	define('d_car01_t_numcre', 'numcre');
	define('d_car01_t_docide', 'docide');
	define('d_car01_t_sldcap', 'sldcap');
	define('d_car01_t_campaign', 'campaign');
	define('d_car01_t_agente', 'agente');
	define('d_car01_t_fecha', 'fecha');
	define('d_car01_t_hora', 'hora');
	define('d_car01_t_telcontacto', 'telcontacto');
	define('d_car01_t_id', 'id');
	define('d_car01_t_tipocartera', 'tipocartera');
	define('d_car01_t_negociacion', 'negociacion');
	define('d_car01_t_valordeuda', 'valordeuda');
	define('d_car01_t_vlrcastcap', 'vlrcastcap');
	define('d_car01_t_calificacion_tipi', 'calificacion_tipi');
	define('d_car01_t_nro_tipificacion', 'nro_tipificacion');
	//------------------------------------------------
	# Campos de la tabla corfi_tipigestion
	define('d_corfi_t_id', 'id');
	define('d_corfi_t_cliente', 'cliente');
	define('d_corfi_t_name', 'name');
	define('d_corfi_t_tipificacion', 'tipificacion');
	define('d_corfi_t_no_pago', 'no_pago');
	define('d_corfi_t_fecha_gestion', 'fecha_gestion');
	define('d_corfi_t_hora_gestion', 'hora_gestion');
	define('d_corfi_t_asesor', 'asesor');
	define('d_corfi_t_detalle', 'detalle');
	define('d_corfi_t_numero_fideicomiso', 'numero_fideicomiso');
	define('d_corfi_t_nro_tipificacion', 'nro_tipificacion');
	define('d_corfi_t_mejor_gestion', 'mejor_gestion');*/
?>