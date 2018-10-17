SELECT 
	t_az_u.`id_az_user` AS 'Id',
	t_az_u.`t_login` AS 'Login',
	t_az_dp.`t_names` AS 'Nombres',
	t_az_dp.`t_surnames` AS 'Apellidos'
FROM
	`bd_az_development`.`az_user` t_az_u
INNER JOIN `bd_az_development`.`az_data_personal` t_az_dp
ON t_az_u.`id_az_user` = t_az_dp.`v_id_az_user`;