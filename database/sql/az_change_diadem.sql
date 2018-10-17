SELECT t_pd_cd.`id_az_change_diadem`,
	t_pd_cd.`m_by_created`,
	t_pd_cd.`m_by_modified`,
	t_pd_cd.`m_date_created`,
	t_pd_cd.`m_date_modified`,
	t_pd_cd.`m_deleted`,
	t_pd_cd.`m_description`,
	t_pd_cd.`m_level`,
	t_pd_cd.`m_status`,
	t_pd_fp.`t_names` AS 'Nombres',
	t_pd_fp.`t_surnames` AS 'Apellidos',
	COUNT(t_pd_cd.`id_az_change_diadem`) AS 'Total',
	MAX(t_pd_cd.`t_date_change`) AS 'Fecha Ultimo Cambio'
FROM `bd_az_development`.`az_change_diadem` t_pd_cd
INNER JOIN `bd_az_development`.`az_data_personal` t_pd_fp ON t_pd_cd.`v_id_az_data_personal` = t_pd_fp.`id_az_data_personal`;



SELECT t_pd_c.`t_name` AS 'Campana',
	t_pd_fp.`t_names` AS 'Nombres',
	t_pd_fp.`t_surnames` AS 'Apellidos',
	COUNT(t_pd_cd.`id_az_change_diadem`) AS 'Total',
	MAX(t_pd_cd.`t_date_change`) AS 'Fecha Ultimo Cambio',
	MIN(t_pd_cd.`t_date_change`) AS 'Fecha Principio Cambio'
FROM `bd_az_development`.`az_change_diadem` t_pd_cd
INNER JOIN `bd_az_development`.`az_data_personal` t_pd_fp ON t_pd_cd.`v_id_az_data_personal` = t_pd_fp.`id_az_data_personal`
INNER JOIN `bd_az_development`.`az_campaign` t_pd_c ON t_pd_c.`id_az_campaign` = t_pd_fp.`v_id_az_campaign`
GROUP BY t_pd_cd.`v_id_az_data_personal` ASC, t_pd_fp.`id_az_data_personal` ASC
ORDER BY t_pd_c.`t_name` ASC, t_pd_fp.`t_names` ASC;



SELECT t_pd_fp.`t_names` AS 'Nombres',
	t_pd_fp.`t_surnames` AS 'Apellidos',
	COUNT(t_pd_cd.`id_az_change_diadem`) AS 'Total Cambios',
	MAX(t_pd_cd.`t_date_change`) AS 'Fecha Ultimo Cambio',
	MIN(t_pd_cd.`t_date_change`) AS 'Fecha Principio Cambio'
FROM `bd_az_development`.`az_change_diadem` t_pd_cd
INNER JOIN `bd_az_development`.`az_data_personal` t_pd_fp ON t_pd_cd.`v_id_az_data_personal` = t_pd_fp.`id_az_data_personal`
GROUP BY t_pd_cd.`v_id_az_data_personal` ASC, t_pd_fp.`id_az_data_personal` ASC
ORDER BY t_pd_fp.`t_names` ASC;



SELECT
	t_az_dp.`t_names` AS 'Nombres',
	t_az_dp.`t_surnames` AS 'Apellidos',
	COUNT(t_az_cd.`id_az_change_diadem`) AS 'Total Cambios',
	MIN(t_az_cd.`t_date_change`) AS 'Fecha Principio Cambio',
	MAX(t_az_cd.`t_date_change`) AS 'Fecha Ultimo Cambio'
FROM
	`bd_az_development`.`az_change_diadem` t_az_cd
	INNER JOIN `bd_az_development`.`az_user` t_az_u
		ON t_az_cd.`v_id_az_user` = t_az_u.`id_az_user`
	INNER JOIN `bd_az_development`.`az_data_personal` t_az_dp
		ON t_az_u.`id_az_user` = t_az_dp.`v_id_az_user`
WHERE (
	t_az_cd.`t_date_change` >= '2017-12-01'
	AND t_az_cd.`t_date_change` <= '2017-12-30'
)
GROUP BY t_az_cd.`v_id_az_user` ASC,
	t_az_dp.`v_id_az_user` ASC
ORDER BY t_az_dp.`t_names`,
	t_az_dp.`t_surnames` ASC;