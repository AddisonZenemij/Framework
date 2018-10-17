CREATE TABLE `bd_az_framework`.`az_change_role` (
	`id_az_change_role` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
	`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
	`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
	`t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
	`t_az_category_role_t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
	`v_id_az_role` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`az_change_role`
	ADD PRIMARY KEY (`id_az_change_role`),
	ADD KEY `IDX_id_az_change_role` (`id_az_change_role`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_name` (`t_name`),
	ADD KEY `IDX_t_az_category_role_t_name` (`t_az_category_role_t_name`),
	ADD KEY `IDX_v_id_az_role` (`v_id_az_role`);

ALTER TABLE `bd_az_framework`.`az_change_role`
	MODIFY `id_az_change_role` bigint(255) NOT NULL AUTO_INCREMENT;