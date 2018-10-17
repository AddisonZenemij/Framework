CREATE TABLE `bd_az_framework`.`az_change_temp` (
	`id_az_change_temp` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
	`t_value` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Valor',
	`v_id_az_temp` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`az_change_temp`
	ADD PRIMARY KEY (`id_az_change_temp`),
	ADD KEY `IDX_id_az_change_temp` (`id_az_change_temp`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_t_name` (`t_name`),
	ADD KEY `IDX_t_value` (`t_value`),
	ADD KEY `IDX_v_id_az_temp` (`v_id_az_temp`);

ALTER TABLE `bd_az_framework`.`az_change_temp`
	MODIFY `id_az_change_temp` bigint(255) NOT NULL AUTO_INCREMENT;