<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	/*
	$app->post('/example4', function($request, $response) {
		$e = new Example;
		$response->withJson($e->Foo($_POST));
		return $response;
	});
	*/
	//------------------------------------------------
	/**
	* Registro de un usuario
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/register', function($request, $response) {
		$reg = new Register;
		$response->withJson($reg->SignUp($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* Inicio de Sesión
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/login', function($request, $response) {
		$login = new Login;
		$response->withJson($login->SignIn($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* Recuperación de contraseña perdida
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/lostpass', function($request, $response) {
		$model = new Lostpass;
		$response->withJson($model->RepairPass($_POST));
		return $response;
	});










	//------------------------------------------------
	/**
	* az_category_icon
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_category_icon/create', function($request, $response) {
		$model = new m_az_category_iconModel;
		$response->withJson($model->sql_insert_all_az_category_icon($_POST));
		return $response;
	});
	$app->post('/az_category_icon/update', function($request, $response) {
		$model = new m_az_category_iconModel;
		$response->withJson($model->sql_update_all_az_category_icon($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_category_menu
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_category_menu/create', function($request, $response) {
		$model = new m_az_category_menuModel;
		$response->withJson($model->sql_insert_all_az_category_menu($_POST));
		return $response;
	});
	$app->post('/az_category_menu/update', function($request, $response) {
		$model = new m_az_category_menuModel;
		$response->withJson($model->sql_update_all_az_category_menu($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_category_role
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_category_role/create', function($request, $response) {
		$model = new m_az_category_roleModel;
		$response->withJson($model->sql_insert_all_az_category_role($_POST));
		return $response;
	});
	$app->post('/az_category_role/update', function($request, $response) {
		$model = new m_az_category_roleModel;
		$response->withJson($model->sql_update_all_az_category_role($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_country
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_country/create', function($request, $response) {
		$model = new m_az_countryModel;
		$response->withJson($model->sql_insert_all_az_country($_POST));
		return $response;
	});
	$app->post('/az_country/update', function($request, $response) {
		$model = new m_az_countryModel;
		$response->withJson($model->sql_update_all_az_country($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_deleted
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_deleted/create', function($request, $response) {
		$model = new m_az_deletedModel;
		$response->withJson($model->sql_insert_all_az_deleted($_POST));
		return $response;
	});
	$app->post('/az_deleted/update', function($request, $response) {
		$model = new m_az_deletedModel;
		$response->withJson($model->sql_update_all_az_deleted($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_icon
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_icon/create', function($request, $response) {
		$model = new m_az_iconModel;
		$response->withJson($model->sql_insert_all_az_icon($_POST));
		return $response;
	});
	$app->post('/az_icon/update', function($request, $response) {
		$model = new m_az_iconModel;
		$response->withJson($model->sql_update_all_az_icon($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_inner_role_user
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_i_r_u/create', function($request, $response) {
		$model = new m_az_i_r_uModel;
		$response->withJson($model->sql_insert_all_az_i_r_u($_POST));
		return $response;
	});
	$app->post('/az_i_r_u/update', function($request, $response) {
		$model = new m_az_i_r_uModel;
		$response->withJson($model->sql_update_all_az_i_r_u($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_level
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_level/create', function($request, $response) {
		$model = new m_az_levelModel;
		$response->withJson($model->sql_insert_all_az_level($_POST));
		return $response;
	});
	$app->post('/az_level/update', function($request, $response) {
		$model = new m_az_levelModel;
		$response->withJson($model->sql_update_all_az_level($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_menu_crud
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_menu_crud/create', function($request, $response) {
		$model = new m_az_menu_crudModel;
		$response->withJson($model->sql_insert_all_az_menu_crud($_POST));
		return $response;
	});
	$app->post('/az_menu_crud/update', function($request, $response) {
		$model = new m_az_menu_crudModel;
		$response->withJson($model->sql_update_all_az_menu_crud($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_role
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_role/create', function($request, $response) {
		$model = new m_az_roleModel;
		$response->withJson($model->sql_insert_all_az_role($_POST));
		return $response;
	});
	$app->post('/az_role/update', function($request, $response) {
		$model = new m_az_roleModel;
		$response->withJson($model->sql_update_all_az_role($_POST));
		return $response;
	});
	$app->post('/az_role_az_a_p/update', function($request, $response) {
		$model = new m_az_roleModel;
		$response->withJson($model->sql_update_all_az_authorized_permits($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_state
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_state/create', function($request, $response) {
		$model = new m_az_stateModel;
		$response->withJson($model->sql_insert_all_az_state($_POST));
		return $response;
	});
	$app->post('/az_state/update', function($request, $response) {
		$model = new m_az_stateModel;
		$response->withJson($model->sql_update_all_az_state($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_sub_menu_crud
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_sub_menu_crud/create', function($request, $response) {
		$model = new m_az_sub_menu_crudModel;
		$response->withJson($model->sql_insert_all_az_sub_menu_crud($_POST));
		return $response;
	});
	$app->post('/az_sub_menu_crud/update', function($request, $response) {
		$model = new m_az_sub_menu_crudModel;
		$response->withJson($model->sql_update_all_az_sub_menu_crud($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_temp
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_temp/create', function($request, $response) {
		$model = new m_az_tempModel;
		$response->withJson($model->sql_insert_all_az_temp($_POST));
		return $response;
	});
	$app->post('/az_temp/update', function($request, $response) {
		$model = new m_az_tempModel;
		$response->withJson($model->sql_update_all_az_temp($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* az_user
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/az_user/create', function($request, $response) {
		$model = new m_az_userModel;
		$response->withJson($model->sql_insert_all_az_user($_POST));
		return $response;
	});
	$app->post('/az_user/update', function($request, $response) {
		$model = new m_az_userModel;
		$response->withJson($model->sql_update_all_az_user($_POST));
		return $response;
	});
	









	//------------------------------------------------
	/**
	* pd_base_salary
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_base_salary/create', function($request, $response) {
		$model = new m_pd_base_salaryModel;
		$response->withJson($model->sql_insert_all_pd_base_salary($_POST));
		return $response;
	});
	$app->post('/pd_base_salary/update', function($request, $response) {
		$model = new m_pd_base_salaryModel;
		$response->withJson($model->sql_update_all_pd_base_salary($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_birth_place
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_birth_place/create', function($request, $response) {
		$model = new m_pd_birth_placeModel;
		$response->withJson($model->sql_insert_all_pd_birth_place($_POST));
		return $response;
	});
	$app->post('/pd_birth_place/update', function($request, $response) {
		$model = new m_pd_birth_placeModel;
		$response->withJson($model->sql_update_all_pd_birth_place($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_brand
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_brand/create', function($request, $response) {
		$model = new m_pd_brandModel;
		$response->withJson($model->sql_insert_all_pd_brand($_POST));
		return $response;
	});
	$app->post('/pd_brand/update', function($request, $response) {
		$model = new m_pd_brandModel;
		$response->withJson($model->sql_update_all_pd_brand($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_campaign
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_campaign/create', function($request, $response) {
		$model = new m_pd_campaignModel;
		$response->withJson($model->sql_insert_all_pd_campaign($_POST));
		return $response;
	});
	$app->post('/pd_campaign/update', function($request, $response) {
		$model = new m_pd_campaignModel;
		$response->withJson($model->sql_update_all_pd_campaign($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_category_brand
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_category_brand/create', function($request, $response) {
		$model = new m_pd_category_brandModel;
		$response->withJson($model->sql_insert_all_pd_category_brand($_POST));
		return $response;
	});
	$app->post('/pd_category_brand/update', function($request, $response) {
		$model = new m_pd_category_brandModel;
		$response->withJson($model->sql_update_all_pd_category_brand($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_category_campaign
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_category_campaign/create', function($request, $response) {
		$model = new m_pd_category_campaignModel;
		$response->withJson($model->sql_insert_all_pd_category_campaign($_POST));
		return $response;
	});
	$app->post('/pd_category_campaign/update', function($request, $response) {
		$model = new m_pd_category_campaignModel;
		$response->withJson($model->sql_update_all_pd_category_campaign($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_category_provider
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_category_provider/create', function($request, $response) {
		$model = new m_pd_category_providerModel;
		$response->withJson($model->sql_insert_all_pd_category_provider($_POST));
		return $response;
	});
	$app->post('/pd_category_provider/update', function($request, $response) {
		$model = new m_pd_category_providerModel;
		$response->withJson($model->sql_update_all_pd_category_provider($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_category_novelty
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_category_novelty/create', function($request, $response) {
		$model = new m_pd_category_noveltyModel;
		$response->withJson($model->sql_insert_all_pd_category_novelty($_POST));
		return $response;
	});
	$app->post('/pd_category_novelty/update', function($request, $response) {
		$model = new m_pd_category_noveltyModel;
		$response->withJson($model->sql_update_all_pd_category_novelty($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_change_diadem
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_change_diadem/create', function($request, $response) {
		$model = new m_pd_change_diademModel;
		$response->withJson($model->sql_insert_all_pd_change_diadem($_POST));
		return $response;
	});
	$app->post('/pd_change_diadem/update', function($request, $response) {
		$model = new m_pd_change_diademModel;
		$response->withJson($model->sql_update_all_pd_change_diadem($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_civil_status
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_civil_status/create', function($request, $response) {
		$model = new m_pd_civil_statusModel;
		$response->withJson($model->sql_insert_all_pd_civil_status($_POST));
		return $response;
	});
	$app->post('/pd_civil_status/update', function($request, $response) {
		$model = new m_pd_civil_statusModel;
		$response->withJson($model->sql_update_all_pd_civil_status($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_contract_type
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_contract_type/create', function($request, $response) {
		$model = new m_pd_contract_typeModel;
		$response->withJson($model->sql_insert_all_pd_contract_type($_POST));
		return $response;
	});
	$app->post('/pd_contract_type/update', function($request, $response) {
		$model = new m_pd_contract_typeModel;
		$response->withJson($model->sql_update_all_pd_contract_type($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_daily_activities
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_daily_activities/create', function($request, $response) {
		$model = new m_pd_daily_activitiesModel;
		$response->withJson($model->sql_insert_all_pd_daily_activities($_POST));
		return $response;
	});
	$app->post('/pd_daily_activities/update', function($request, $response) {
		$model = new m_pd_daily_activitiesModel;
		$response->withJson($model->sql_update_all_pd_daily_activities($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_data_personal
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_data_personal/create', function($request, $response) {
		$model = new m_pd_data_personalModel;
		$response->withJson($model->sql_insert_all_pd_data_personal($_POST));
		return $response;
	});
	$app->post('/pd_data_personal/update', function($request, $response) {
		$model = new m_pd_data_personalModel;
		$response->withJson($model->sql_update_all_pd_data_personal($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_document_type
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_document_type/create', function($request, $response) {
		$model = new m_pd_document_typeModel;
		$response->withJson($model->sql_insert_all_pd_document_type($_POST));
		return $response;
	});
	$app->post('/pd_document_type/update', function($request, $response) {
		$model = new m_pd_document_typeModel;
		$response->withJson($model->sql_update_all_pd_document_type($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_employee_charge
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_employee_charge/create', function($request, $response) {
		$model = new m_pd_employee_chargeModel;
		$response->withJson($model->sql_insert_all_pd_employee_charge($_POST));
		return $response;
	});
	$app->post('/pd_employee_charge/update', function($request, $response) {
		$model = new m_pd_employee_chargeModel;
		$response->withJson($model->sql_update_all_pd_employee_charge($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_eps
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_eps/create', function($request, $response) {
		$model = new m_pd_epsModel;
		$response->withJson($model->sql_insert_all_pd_eps($_POST));
		return $response;
	});
	$app->post('/pd_eps/update', function($request, $response) {
		$model = new m_pd_epsModel;
		$response->withJson($model->sql_update_all_pd_eps($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_itau_castigada
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_itau_castigada/novelty/update', function($request, $response) {
		$model = new m_pd_itau_castigadaModel;
		$response->withJson($model->sql_update_all_pd_itau_castigada_novelty($_POST));
		return $response;
	});
	$app->post('/pd_itau_castigada/proyection/create', function($request, $response) {
		$model = new m_pd_itau_castigadaModel;
		$response->withJson($model->sql_create_all_pd_itau_castigada_proyection($_POST));
		return $response;
	});
	$app->post('/pd_itau_castigada/tipify/create', function($request, $response) {
		$model = new m_pd_itau_castigadaModel;
		$response->withJson($model->sql_create_all_pd_itau_castigada_tipify($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_itau_vigente
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_itau_vigente/novelty/update', function($request, $response) {
		$model = new m_pd_itau_vigenteModel;
		$response->withJson($model->sql_update_all_pd_itau_vigente_novelty($_POST));
		return $response;
	});
	$app->post('/pd_itau_vigente/proyection/create', function($request, $response) {
		$model = new m_pd_itau_vigenteModel;
		$response->withJson($model->sql_create_all_pd_itau_vigente_proyection($_POST));
		return $response;
	});
	$app->post('/pd_itau_vigente/tipify/create', function($request, $response) {
		$model = new m_pd_itau_vigenteModel;
		$response->withJson($model->sql_create_all_pd_itau_vigente_tipify($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_level_study
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_level_study/create', function($request, $response) {
		$model = new m_pd_level_studyModel;
		$response->withJson($model->sql_insert_all_pd_level_study($_POST));
		return $response;
	});
	$app->post('/pd_level_study/update', function($request, $response) {
		$model = new m_pd_level_studyModel;
		$response->withJson($model->sql_update_all_pd_level_study($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_management_tree
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_management_tree/create', function($request, $response) {
		$model = new m_pd_management_treeModel;
		$response->withJson($model->sql_insert_all_pd_management_tree($_POST));
		return $response;
	});
	$app->post('/pd_management_tree/update', function($request, $response) {
		$model = new m_pd_management_treeModel;
		$response->withJson($model->sql_update_all_pd_management_tree($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_messaging_type
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_messaging_type/create', function($request, $response) {
		$model = new m_pd_messaging_typeModel;
		$response->withJson($model->sql_insert_all_pd_messaging_type($_POST));
		return $response;
	});
	$app->post('/pd_messaging_type/update', function($request, $response) {
		$model = new m_pd_messaging_typeModel;
		$response->withJson($model->sql_update_all_pd_messaging_type($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_neighborhood
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_neighborhood/create', function($request, $response) {
		$model = new m_pd_neighborhoodModel;
		$response->withJson($model->sql_insert_all_pd_neighborhood($_POST));
		return $response;
	});
	$app->post('/pd_neighborhood/update', function($request, $response) {
		$model = new m_pd_neighborhoodModel;
		$response->withJson($model->sql_update_all_pd_neighborhood($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_novelty
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_novelty/create', function($request, $response) {
		$model = new m_pd_noveltyModel;
		$response->withJson($model->sql_insert_all_pd_novelty($_POST));
		return $response;
	});
	$app->post('/pd_novelty/update', function($request, $response) {
		$model = new m_pd_noveltyModel;
		$response->withJson($model->sql_update_all_pd_novelty($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_paysheet
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_paysheet/create', function($request, $response) {
		$model = new m_pd_paysheetModel;
		$response->withJson($model->sql_insert_all_pd_paysheet($_POST));
		return $response;
	});
	$app->post('/pd_paysheet/update', function($request, $response) {
		$model = new m_pd_paysheetModel;
		$response->withJson($model->sql_update_all_pd_paysheet($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_pension
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_pension/create', function($request, $response) {
		$model = new m_pd_pensionModel;
		$response->withJson($model->sql_insert_all_pd_pension($_POST));
		return $response;
	});
	$app->post('/pd_pension/update', function($request, $response) {
		$model = new m_pd_pensionModel;
		$response->withJson($model->sql_update_all_pd_pension($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_personal_type
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_personal_type/create', function($request, $response) {
		$model = new m_pd_personal_typeModel;
		$response->withJson($model->sql_insert_all_pd_personal_type($_POST));
		return $response;
	});
	$app->post('/pd_personal_type/update', function($request, $response) {
		$model = new m_pd_personal_typeModel;
		$response->withJson($model->sql_update_all_pd_personal_type($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_provider
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_provider/create', function($request, $response) {
		$model = new m_pd_providerModel;
		$response->withJson($model->sql_insert_all_pd_provider($_POST));
		return $response;
	});
	$app->post('/pd_provider/update', function($request, $response) {
		$model = new m_pd_providerModel;
		$response->withJson($model->sql_update_all_pd_provider($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_transport_assistance
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_transport_assistance/create', function($request, $response) {
		$model = new m_pd_transport_assistanceModel;
		$response->withJson($model->sql_insert_all_pd_transport_assistance($_POST));
		return $response;
	});
	$app->post('/pd_transport_assistance/update', function($request, $response) {
		$model = new m_pd_transport_assistanceModel;
		$response->withJson($model->sql_update_all_pd_transport_assistance($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_type_accrued
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_type_accrued/create', function($request, $response) {
		$model = new m_pd_type_accruedModel;
		$response->withJson($model->sql_insert_all_pd_type_accrued($_POST));
		return $response;
	});
	$app->post('/pd_type_accrued/update', function($request, $response) {
		$model = new m_pd_type_accruedModel;
		$response->withJson($model->sql_update_all_pd_type_accrued($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_type_definition
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_type_definition/create', function($request, $response) {
		$model = new m_pd_type_definitionModel;
		$response->withJson($model->sql_insert_all_pd_type_definition($_POST));
		return $response;
	});
	$app->post('/pd_type_definition/update', function($request, $response) {
		$model = new m_pd_type_definitionModel;
		$response->withJson($model->sql_update_all_pd_type_definition($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_type_management
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_type_management/create', function($request, $response) {
		$model = new m_pd_type_managementModel;
		$response->withJson($model->sql_insert_all_pd_type_management($_POST));
		return $response;
	});
	$app->post('/pd_type_management/update', function($request, $response) {
		$model = new m_pd_type_managementModel;
		$response->withJson($model->sql_update_all_pd_type_management($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_worked_days
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_worked_days/create', function($request, $response) {
		$model = new m_pd_worked_daysModel;
		$response->withJson($model->sql_insert_all_pd_worked_days($_POST));
		return $response;
	});
	$app->post('/pd_worked_days/update', function($request, $response) {
		$model = new m_pd_worked_daysModel;
		$response->withJson($model->sql_update_all_pd_worked_days($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* pd_worked_period
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/pd_worked_period/create', function($request, $response) {
		$model = new m_pd_worked_periodModel;
		$response->withJson($model->sql_insert_all_pd_worked_period($_POST));
		return $response;
	});
	$app->post('/pd_worked_period/update', function($request, $response) {
		$model = new m_pd_worked_periodModel;
		$response->withJson($model->sql_update_all_pd_worked_period($_POST));
		return $response;
	});










	//------------------------------------------------
	/**
	* zv_password
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/zv_password/update', function($request, $response) {
		$model = new m_zv_passwordModel;
		$response->withJson($model->sql_update_all_zv_password($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* zv_profile
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/zv_profile/update', function($request, $response) {
		$model = new m_zv_profileModel;
		$response->withJson($model->sql_update_all_zv_profile($_POST));
		return $response;
	});
	//------------------------------------------------
	/**
	* zz_time
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->post('/zz_time', function($request, $response){
		$model = new dvdesignModel;
		$response->withJson($model->lect_ajax_time($_POST));
		return $response;
	});
?>