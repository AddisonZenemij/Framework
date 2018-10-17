CREATE TABLE `bd_az_framework`.`pd_novelty` (
	`id_pd_novelty` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
	`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
	`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
	`t_date_start` date COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Fecha Inicio',
	`t_date_final` date COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Fecha Final',
	`v_id_pd_category_novelty` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_pd_data_personal` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_pd_type_accrued` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_pd_worked_days` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_pd_worked_period` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`pd_novelty`
	ADD PRIMARY KEY (`id_pd_novelty`),
	ADD KEY `IDX_id_pd_novelty` (`id_pd_novelty`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_date_start` (`t_date_start`),
	ADD KEY `IDX_t_date_final` (`t_date_final`),
	ADD KEY `IDX_v_id_pd_category_novelty` (`v_id_pd_category_novelty`),
	ADD KEY `IDX_v_id_pd_data_personal` (`v_id_pd_data_personal`),
	ADD KEY `IDX_v_id_pd_type_accrued` (`v_id_pd_type_accrued`),
	ADD KEY `IDX_v_id_pd_worked_days` (`v_id_pd_worked_days`),
	ADD KEY `IDX_v_id_pd_worked_period` (`v_id_pd_worked_period`);

ALTER TABLE `bd_az_framework`.`pd_novelty`
	MODIFY `id_pd_novelty` bigint(255) NOT NULL AUTO_INCREMENT;