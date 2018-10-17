<?php
	# Seguridad
	defined('INDEX_DIR') OR exit('Ocrend software says .i.');
	//------------------------------------------------
	/*
	$app->get('/example2',function($request, $response){
		$e = new Example;
		$response->withJson($e->Foo($_GET));
		return $response;
		});
	*/
	//------------------------------------------------
	/**
	* zz_time
	* @return Devuelve un json con información acerca del éxito o posibles errores.
	*/
	$app->get('/zz_time', function($request, $response){
		$model = new dvdesignModel;
		$response->withJson($model->lect_ajax_time($_GET));
		return $response;
	});
?>