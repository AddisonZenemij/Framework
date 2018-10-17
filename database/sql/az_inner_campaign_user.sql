SELECT t_az_c.`t_name` AS 'Campana',
	t_az_dp.`t_names` AS 'Nombres',
	t_az_dp.`t_surnames` AS 'Apellidos'
FROM `bd_az_development`.`az_inner_campaign_user` t_az_cu
INNER JOIN `bd_az_development`.`az_campaign` t_az_c ON t_az_cu.`v_id_az_campaign` = t_az_c.`id_az_campaign`
INNER JOIN `bd_az_development`.`az_user` t_az_u ON t_az_cu.`v_id_az_user` = t_az_u.`id_az_user`
INNER JOIN `bd_az_development`.`az_data_personal` t_az_dp ON t_az_u.`id_az_user` = t_az_dp.`v_id_az_user`
ORDER BY t_az_c.`t_name` ASC, t_az_dp.`t_names` ASC, t_az_dp.`t_surnames` ASC;