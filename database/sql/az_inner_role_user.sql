SELECT t_iru.`id_az_inner_role_user`,
	t_iru.`m_by_created`,
	t_iru.`m_by_modified`,
	t_iru.`m_date_created`,
	t_iru.`m_date_modified`,
	t_iru.`m_deleted`,
	t_iru.`m_description`,
	t_iru.`m_level`,
	t_iru.`m_status`,
	t_r.`t_name`,
	t_u.`t_login`
FROM `bd_az_development`.`az_inner_role_user` t_iru
INNER JOIN `bd_az_development`.`az_role` t_r
	ON t_iru.`t_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_u
	ON t_iru.`t_id_az_user` = t_u.`id_az_user`
ORDER BY t_iru.`id_az_inner_role_user` ASC;





SELECT t_r.`t_name` FROM `bd_az_development`.`az_inner_role_user` t_iru
INNER JOIN `bd_az_development`.`az_role` t_r
	ON t_iru.`t_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_u
	ON t_iru.`t_id_az_user` = t_u.`id_az_user`
WHERE t_u.`id_az_user` = '1'
ORDER BY t_r.`m_level` ASC, t_r.`t_name` ASC;


SELECT t_az_r.`t_name` FROM `bd_az_development`.`az_inner_role_user` t_az_i_r_u
INNER JOIN `bd_az_development`.`az_role` t_az_r
	ON t_az_r.`id_az_role` = t_az_i_r_u.`v_id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_az_u
	ON t_az_u.`id_az_user` = t_az_i_r_u.`v_id_az_user`
WHERE t_az_i_r_u.`m_deleted` = '0'
	AND t_az_i_r_u.`v_id_az_user` = '1'
	AND t_az_r.`m_deleted` = '0'
	AND t_az_u.`m_deleted` = '0'
ORDER BY t_az_r.`t_name` ASC;



SELECT t_az_r.`t_name`, t_az_u.`t_login` FROM `bd_az_development`.`az_inner_role_user` t_az_i_r_u
INNER JOIN `bd_az_development`.`az_role` t_az_r
	ON t_az_r.`id_az_role` = t_az_i_r_u.`v_id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_az_u
	ON t_az_u.`id_az_user` = t_az_i_r_u.`v_id_az_user`
WHERE t_az_i_r_u.`m_deleted` = '0'
	AND t_az_i_r_u.`v_id_az_user` = '1'
	AND t_az_r.`m_deleted` = '0'
	AND t_az_u.`m_deleted` = '0'
ORDER BY t_az_r.`t_name` ASC;