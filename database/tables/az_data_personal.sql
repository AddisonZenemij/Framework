CREATE TABLE `bd_az_framework`.`az_data_personal` (
	`id_az_data_personal` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
	`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
	`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
	`t_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Direcccion',
	`t_birth_date` date COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Fecha Nacimiento',
	`t_names` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombres',
	`t_phone_fixed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Fijo',
	`t_phone_movil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Movil',
	`t_surnames` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Apellidos',
	`v_id_az_country` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_az_user` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`az_data_personal`
	ADD PRIMARY KEY (`id_az_data_personal`),
	ADD KEY `IDX_id_az_data_personal` (`id_az_data_personal`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_address` (`t_address`),
	ADD KEY `IDX_t_birth_date` (`t_birth_date`),
	ADD KEY `IDX_t_names` (`t_names`),
	ADD KEY `IDX_t_phone_fixed` (`t_phone_fixed`),
	ADD KEY `IDX_t_phone_movil` (`t_phone_movil`),
	ADD KEY `IDX_t_surnames` (`t_surnames`),
	ADD KEY `IDX_v_id_az_country` (`v_id_az_country`),
	ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

ALTER TABLE `bd_az_framework`.`az_data_personal`
	MODIFY `id_az_data_personal` bigint(255) NOT NULL AUTO_INCREMENT;