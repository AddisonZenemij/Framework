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
INNER JOIN `bd_az_development`.`az_role` t_r ON t_iru.`t_id_az_role` = t_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_user` t_u ON t_iru.`t_id_az_user` = t_u.`id_az_user`
ORDER BY t_iru.`id_az_inner_role_user` ASC;




SELECT t_im.`id_az_inner_menu`,
	t_im.`m_by_created`,
	t_im.`m_by_modified`,
	t_im.`m_date_created`,
	t_im.`m_date_modified`,
	t_im.`m_deleted`,
	t_im.`m_description`,
	t_im.`m_level`,
	t_im.`m_status`,
	t_im.`t_session`,
	t_i.`t_name`,
	t_m.`t_name`,
	t_m.`t_url`,
	t_r.`t_name`
FROM `bd_az_development`.`az_inner_menu` t_im
INNER JOIN `bd_az_development`.`az_icon` t_i ON t_im.`v_id_az_icon` = t_i.`id_az_icon`
INNER JOIN `bd_az_development`.`az_menu` t_m ON t_im.`v_id_az_menu` = t_m.`id_az_menu`
INNER JOIN `bd_az_development`.`az_role` t_r ON t_im.`v_id_az_role` = t_r.`id_az_role`
WHERE t_im.`t_session` = 1
ORDER BY t_r.`m_level` ASC, t_r.`t_name` ASC, t_m.`t_name` ASC;




SELECT
	tc_az_r.`id_az_role` AS 'lbl_az_r_id_az_role',
	tc_az_r.`t_name` AS 'lbl_az_r_t_name',
	tc_az_me.`t_url` AS 'lbl_az_me_t_url'
FROM `bd_az_development`.`az_inner_icon_menu_role` tc_az_i_i_m_r
INNER JOIN `bd_az_development`.`az_icon` tc_az_i
	ON tc_az_i.`id_az_icon` = tc_az_i_i_m_r.`v_id_az_icon`
INNER JOIN `bd_az_development`.`az_menu` tc_az_me
	ON tc_az_me.`id_az_menu` = tc_az_i_i_m_r.`v_id_az_menu`
INNER JOIN `bd_az_development`.`az_role` tc_az_r
	ON tc_az_r.`id_az_role` = tc_az_i_i_m_r.`v_id_az_role`
WHERE tc_az_i_i_m_r.`m_deleted` = '0'
	AND tc_az_i_i_m_r.`m_status` = '0'
	AND tc_az_i.`m_deleted` = '0'
	AND tc_az_i.`m_status` = '0'
	AND tc_az_me.`m_deleted` = '0'
	AND tc_az_me.`m_status` = '0'
	AND tc_az_r.`m_deleted` = '0'
	AND tc_az_r.`m_status` = '0'
ORDER BY tc_az_r.`t_name` ASC,
	tc_az_me.`t_url` ASC;







SELECT
	tc_az_r.`id_az_role` AS 'lbl_az_r_id_az_role',
	tc_az_r.`t_name` AS 'lbl_az_r_t_name',
	tc_az_me.`t_url` AS 'lbl_az_me_t_url'
FROM `bd_az_development`.`az_inner_icon_menu_role` tc_az_i_i_m_r
INNER JOIN `bd_az_development`.`az_icon` tc_az_i
	ON tc_az_i_i_m_r.`v_id_az_icon` = tc_az_i.`id_az_icon`
INNER JOIN `bd_az_development`.`az_menu` tc_az_me
	ON tc_az_i_i_m_r.`v_id_az_menu` = tc_az_me.`id_az_menu`
INNER JOIN `bd_az_development`.`az_role` tc_az_r
	ON tc_az_i_i_m_r.`v_id_az_role` = tc_az_r.`id_az_role`
INNER JOIN `bd_az_development`.`az_inner_role_user` tc_az_i_r_u
	ON tc_az_r.`id_az_role` = tc_az_i_r_u.`v_id_az_role`
INNER JOIN `bd_az_development`.`az_user` tc_az_u
	ON tc_az_i_r_u.`v_id_az_user` = tc_az_u.`id_az_user`
WHERE tc_az_i_i_m_r.`m_deleted` = '0'
	AND tc_az_i_i_m_r.`m_status` = '0'
	AND tc_az_i_r_u.`m_deleted` = '0'
	AND tc_az_i_r_u.`m_status` = '0'
	AND tc_az_i.`m_deleted` = '0'
	AND tc_az_i.`m_status` = '0'
	AND tc_az_me.`m_deleted` = '0'
	AND tc_az_me.`m_status` = '0'
	AND tc_az_r.`m_deleted` = '0'
	AND tc_az_r.`m_status` = '0'
	AND tc_az_u.`m_deleted` = '0'
	AND tc_az_u.`m_status` = '0'
	AND tc_az_u.`id_az_user` = '1'
ORDER BY tc_az_r.`t_name` ASC,
	tc_az_me.`t_url` ASC;