## Codigo Sql Mejor Gestion Itau Castigo
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-01' WHERE `tipificacion` = 'GESTION SUSPENDIDA POR HELM BANK';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-02' WHERE `tipificacion` = 'AL DIA';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-03' WHERE `tipificacion` = 'PAGO REALIZADO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-04' WHERE `tipificacion` = 'REVISION APLICACION PAGO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-05' WHERE `tipificacion` = 'ACUERDO DE PAGO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-06' WHERE `tipificacion` = 'ABONO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-07' WHERE `tipificacion` = 'CONTACTO DIRECTO SIN ACUERDO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-08' WHERE `tipificacion` = 'ACUERDO DE PAGO INCUMPLIDO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-09' WHERE `tipificacion` = 'CONTACTO TITULAR';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-10' WHERE `tipificacion` = 'MENSAJE CON TERCERO';
UPDATE `BDhelm_2`.`he01_tipigestion_castigada` SET `nro_tipificacion` = 'IC-01-11' WHERE `tipificacion` = 'NO CONTESTAN ';

SELECT
	`numeroid` AS 'Numero Identificacion',
	`tipificacion` AS 'Mejor Gestion'
FROM
	(SELECT
		*
	FROM
		`BDhelm_2`.`he01_tipigestion_castigada`
	WHERE `nro_tipificacion` IS NOT NULL
		AND (
			`fecha` >= '2018-01-01'
			AND `fecha` <= '2018-01-31'
		)
	ORDER BY `nro_tipificacion` ASC,
		`fecha` DESC,
		`hora` ASC) AS Base_Datos
GROUP BY `numeroid` ;

## Codigo Sql Mejor Gestion Itau Vigente
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-01' WHERE `tipificacion` = 'GESTION SUSPENDIDA POR HELM BANK';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-02' WHERE `tipificacion` = 'PAGO TOTAL EN TRAMITE';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-03' WHERE `tipificacion` = 'PAGO REALIZADO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-04' WHERE `tipificacion` = 'REESTRUCTURACION EN TRAMITE';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-05' WHERE `tipificacion` = 'REDIFERIDO EN TRAMITE';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-06' WHERE `tipificacion` = 'ACUERDO DE PAGO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-07' WHERE `tipificacion` = 'ACUERDO DE PAGO INCUMPLIDO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-08' WHERE `tipificacion` = 'INTERESADO EN REESTRUCTURADO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-09' WHERE `tipificacion` = 'INTERESADO EN REDIFERIDO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-10' WHERE `tipificacion` = 'CONTACTO DIRECTO SIN ACUERDO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-11' WHERE `tipificacion` = 'MENSAJE CON TERCERO';
UPDATE `BDhelm_2`.`he01_tipigestion_vigente` SET `nro_tipificacion` = 'IV-02-12' WHERE `tipificacion` = 'NO CONTESTAN ';

SELECT
	`numeroid` AS 'Numero Identificacion',
	`tipificacion` AS 'Mejor Gestion'
FROM
	(SELECT
		*
	FROM
		`BDhelm_2`.`he01_tipigestion_vigente`
	WHERE `nro_tipificacion` IS NOT NULL
		AND (
			`fecha` >= '2018-01-01'
			AND `fecha` <= '2018-01-31'
		)
	ORDER BY `nro_tipificacion` ASC,
		`fecha` DESC,
		`hora` ASC) AS Base_Datos
GROUP BY `numeroid` ;

## Codigo Sql Mejor Gestion Compensar
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-01' WHERE `tipificacion` = 'GESTION SUSPENDIDA POR COMPENSAR';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-02' WHERE `tipificacion` = 'PAGO';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-03' WHERE `tipificacion` = 'ACUERDO';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-04' WHERE `tipificacion` = 'ACUERDO INCUMPLIDO';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-05' WHERE `tipificacion` = 'POSIBLE NEGOCIACION';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-06' WHERE `tipificacion` = 'CONTACTO SIN COMPROMISO';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-07' WHERE `tipificacion` = 'MENSAJE CON TERCERO';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-08' WHERE `tipificacion` = 'MENSAJE BUZON';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-09' WHERE `tipificacion` = 'VISITA';
UPDATE`BD_Compensar_2017`.`car01_tipigestion` SET `nro_tipificacion` = 'C-03-10' WHERE `tipificacion` = 'ILOCALIZADO';

SELECT
	`docide` AS 'Numero Identificacion',
	`tipificacion` AS 'Mejor Gestion'
FROM
	(SELECT
		*
	FROM
		`BD_Compensar_2017`.`car01_tipigestion`
	WHERE `nro_tipificacion` IS NOT NULL
		AND (
			`fecha` >= '2018-01-01'
			AND `fecha` <= '2018-01-31'
		)
	ORDER BY `nro_tipificacion` ASC,
		`fecha` DESC,
		`hora` ASC) AS Base_Datos
GROUP BY `docide` ;

## Codigo Sql Mejor Gestion Corficolombiana
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-01' WHERE `tipificacion` = 'GESTION SUSPENDIDA FIDUCIARIA';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-02' WHERE `tipificacion` = 'AL DIA';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-03' WHERE `tipificacion` = 'PAGO REALIZADO';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-04' WHERE `tipificacion` = 'ACUERDO DE PAGO';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-05' WHERE `tipificacion` = 'ACUERDO DE PAGO IMCUMPLIDO';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-06' WHERE `tipificacion` = 'CONTACOTO SIN ACUERDO';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-07' WHERE `tipificacion` = 'MENSAJE';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-08' WHERE `tipificacion` = 'NO CONTESTA';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-09' WHERE `tipificacion` = 'VISITA EFECTIVA ';
UPDATE `BDcorficolombiana`.`corfi_tipigestion` SET `nro_tipificacion` = 'C-06-10' WHERE `tipificacion` = 'VISITA NO EFECTIVA';

SELECT
	`cliente` AS 'Numero Identificacion',
	`tipificacion` AS 'Mejor Gestion'
FROM
	(SELECT
		*
	FROM
		`BDcorficolombiana`.`corfi_tipigestion`
	WHERE `nro_tipificacion` IS NOT NULL
		AND (
			`fecha_gestion` >= '2018-01-01'
			AND `fecha_gestion` <= '2018-01-31'
		)
	ORDER BY `nro_tipificacion` ASC,
		`fecha_gestion` DESC,
		`hora_gestion` ASC) AS Base_Datos
GROUP BY `cliente` ;

## Codigo Sql Mejor Gestion Coasmedas
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-01' WHERE `descripcion` = 'GESTION SUSPENDIDA POR COASMEDAS';
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-02' WHERE `descripcion` = 'TT SUSCRIBE ACUERDO CORREO ELECTRONICO';
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-03' WHERE `descripcion` = 'TT SUSCRIBE ACUERDO ESCRITO';
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-04' WHERE `descripcion` = 'COMPROMISOROTO';
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-05' WHERE `descripcion` = 'CONTACTO SIN COMPROMISO';
UPDATE `BD_Coasmedas`.`coa01_tipigestion` SET `nro_tipificacion` = 'C-04-06' WHERE `descripcion` = 'NO CONTACTADO';

SELECT
	`identificacion` AS 'Numero Identificacion',
	`descripcion` AS 'Mejor Gestion'
FROM
	(SELECT
		*
	FROM
		`BD_Coasmedas`.`coa01_tipigestion`
	WHERE `nro_tipificacion` IS NOT NULL
		AND (
			`fecha` >= '2018-01-01'
			AND `fecha` <= '2018-01-31'
		)
	ORDER BY `nro_tipificacion` ASC,
		`fecha` DESC,
		`hora` ASC) AS Base_Datos
GROUP BY `identificacion` ;