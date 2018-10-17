SELECT 
	`numeroid`,
	`tipificacion` 
FROM
	(SELECT 
		* 
	FROM
		`BDhelm_2`.`he01_tipigestion_vigente` 
	WHERE `nro_tipificacion` IS NOT NULL 
		AND (
			`fecha` >= '2017-11-01' 
			AND `fecha` <= '2017-11-31'
		) 
	ORDER BY `nro_tipificacion` ASC,
		`fecha` DESC,
		`hora` ASC) AS Mejor_Gestion 
GROUP BY `numeroid` ;






SELECT 
	t_he_tv.`numeroid`,
	t_he_tv.`tipificacion` 
FROM
	(SELECT 
		* 
	FROM
		`BDhelm_2`.`he01_tipigestion_vigente` t_he_tv 
		INNER JOIN `BDhelm_2`.`he01_tipiarbol_vigente` t_he_tav 
			ON t_he_tv.`tipificacion` = t_he_tav.`tipificacion` 
	WHERE t_he_tav.`nro_tipificacion` IS NOT NULL 
		AND (
			t_he_tv.`fecha` >= '2017-12-01' 
			AND t_he_tv.`fecha` <= '2017-12-31'
		) 
	ORDER BY t_he_tv.`nro_tipificacion` ASC,
		t_he_tv.`fecha` DESC,
		t_he_tv.`hora` ASC) AS Mejor_Gestion 
GROUP BY t_he_tv.`numeroid` ;