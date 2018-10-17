SELECT t_iimr.`id_az_inner_icon_menu_role`,
	t_iimr.`m_by_created`,
	t_iimr.`m_by_modified`,
	t_iimr.`m_date_created`,
	t_iimr.`m_date_modified`,
	t_iimr.`m_deleted`,
	t_iimr.`m_description`,
	t_iimr.`m_level`,
	t_iimr.`m_status`,
	t_iimr.`t_session`,
	t_i.`t_name`,
	t_m.`t_name`,
	t_m.`t_url`,
	t_r.`t_name`
FROM `bd_az_development`.`az_inner_icon_menu_role` t_iimr
INNER JOIN `bd_az_development`.`az_icon` t_i ON t_iimr.`v_id_az_icon` = t_i.`id_az_icon`
INNER JOIN `bd_az_development`.`az_menu` t_m ON t_iimr.`v_id_az_menu` = t_m.`id_az_menu`
INNER JOIN `bd_az_development`.`az_role` t_r ON t_iimr.`v_id_az_role` = t_r.`id_az_role`
WHERE t_iimr.`t_session` = '1'
ORDER BY t_r.`m_level` ASC, t_r.`t_name` ASC, t_m.`t_name` ASC;





SELECT t_r.`t_name` FROM `bd_az_development`.`az_inner_role_user` t_iru
INNER JOIN `bd_az_development`.`az_role` t_r ON t_iru.`t_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_u ON t_iru.`t_id_az_user` = t_u.`id_az_user`
WHERE t_u.`id_az_user` = '1'
ORDER BY t_r.`m_level` ASC, t_r.`t_name` ASC;




SELECT t_iimr.`id_az_inner_icon_menu_role`,
	t_iimr.`m_by_created`,
	t_iimr.`m_by_modified`,
	t_iimr.`m_date_created`,
	t_iimr.`m_date_modified`,
	t_iimr.`m_deleted`,
	t_iimr.`m_description`,
	t_iimr.`m_level`,
	t_iimr.`m_status`,
	t_iimr.`t_session`,
	t_u.`t_login` AS 'Usuario',
	t_r.`t_name` AS 'Rol',
	t_i.`t_name` AS 'Icono',
	t_m.`t_name` AS 'Menu',
	t_m.`t_url` AS 'Url'
FROM `bd_az_development`.`az_inner_role_user` t_iru
INNER JOIN `bd_az_development`.`az_role` t_r ON t_iru.`t_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_u ON t_iru.`t_id_az_user` = t_u.`id_az_user`
INNER JOIN `bd_az_development`.`az_inner_icon_menu_role` t_iimr ON t_iimr.`v_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_icon` t_i ON t_iimr.`v_id_az_icon` = t_i.`id_az_icon`
INNER JOIN `bd_az_development`.`az_menu` t_m ON t_iimr.`v_id_az_menu` = t_m.`id_az_menu`
WHERE t_i.`m_deleted` = '0'
	AND t_i.`m_status` = '0'
	AND t_iimr.`m_deleted` = '0'
	AND t_iimr.`m_status` = '0'
	AND t_iimr.`t_session` = '1'
	AND t_iru.`m_deleted` = '0'
	AND t_iru.`m_status` = '0'
	AND t_m.`m_deleted` = '0'
	AND t_m.`m_status` = '0'
	AND t_r.`m_deleted` = '0'
	AND t_r.`m_status` = '0'
	AND t_u.`id_az_user` = '1'
	AND t_u.`m_deleted` = '0'
	AND t_u.`m_status` = '0'
ORDER BY t_r.`m_level` ASC, t_r.`t_name` ASC, t_m.`t_name` ASC;