SELECT t_i.`id_az_icon`,
	t_i.`m_by_created`,
	t_i.`m_by_modified`,
	t_i.`m_date_created`,
	t_i.`m_date_modified`,
	t_i.`m_deleted`,
	t_i.`m_description`,
	t_i.`m_level`,
	t_i.`m_status`,
	t_i.`t_name`,
	t_ci.`t_name`
FROM `bd_az_development`.`az_icon` t_i
INNER JOIN `bd_az_development`.`az_category_icon` t_ci on t_i.`t_id_az_category_icon` = t_ci.`id_az_category_icon`
ORDER BY t_i.`id_az_icon` ASC;