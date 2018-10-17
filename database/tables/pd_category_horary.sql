CREATE TABLE `bd_az_framework`.`pd_category_horary` (
	`id_pd_category_horary` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
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
	`active_pause_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Pausa Activa Hora Final',
	`active_pause_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Pausa Activa Hora Inicio',
	`active_pause_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Pausa Activa Tiempo Total',
	`break_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Break Hora Final',
	`break_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Break Hora Inicio',
	`break_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Break Tiempo Total',
	`lunch_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Almuerzo Hora Final',
	`lunch_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Almuerzo Hora Inicio',
	`lunch_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Almuerzo Tiempo Total',
	`work_1_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 1 Hora Final',
	`work_1_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 1 Hora Inicio',
	`work_1_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 1 Tiempo Total',
	`work_2_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 2 Hora Final',
	`work_2_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 2 Hora Inicio',
	`work_2_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 2 Tiempo Total',
	`work_3_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 3 Hora Final',
	`work_3_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 3 Hora Inicio',
	`work_3_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 3 Tiempo Total',
	`work_4_hour_final` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 4 Hora Final',
	`work_4_hour_start` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 4 Hora Inicio',
	`work_4_time_total` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Labor 4 Tiempo Total',
	`working_hours` time COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Horas Trabajadas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`pd_category_horary`
	ADD PRIMARY KEY (`id_pd_category_horary`),
	ADD KEY `IDX_id_pd_category_horary` (`id_pd_category_horary`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_name` (`t_name`),
	ADD KEY `IDX_t_name` (`t_name`),
	ADD KEY `IDX_active_pause_hour_final` (`active_pause_hour_final`),
	ADD KEY `IDX_active_pause_hour_start` (`active_pause_hour_start`),
	ADD KEY `IDX_active_pause_time_total` (`active_pause_time_total`),
	ADD KEY `IDX_break_hour_final` (`break_hour_final`),
	ADD KEY `IDX_break_hour_start` (`break_hour_start`),
	ADD KEY `IDX_break_time_total` (`break_time_total`),
	ADD KEY `IDX_lunch_hour_final` (`lunch_hour_final`),
	ADD KEY `IDX_lunch_hour_start` (`lunch_hour_start`),
	ADD KEY `IDX_lunch_time_total` (`lunch_time_total`),
	ADD KEY `IDX_work_1_hour_final` (`work_1_hour_final`),
	ADD KEY `IDX_work_1_hour_start` (`work_1_hour_start`),
	ADD KEY `IDX_work_1_time_total` (`work_1_time_total`),
	ADD KEY `IDX_work_2_hour_final` (`work_2_hour_final`),
	ADD KEY `IDX_work_2_hour_start` (`work_2_hour_start`),
	ADD KEY `IDX_work_2_time_total` (`work_2_time_total`),
	ADD KEY `IDX_work_3_hour_final` (`work_3_hour_final`),
	ADD KEY `IDX_work_3_hour_start` (`work_3_hour_start`),
	ADD KEY `IDX_work_3_time_total` (`work_3_time_total`),
	ADD KEY `IDX_work_4_hour_final` (`work_4_hour_final`),
	ADD KEY `IDX_work_4_hour_start` (`work_4_hour_start`),
	ADD KEY `IDX_work_4_time_total` (`work_4_time_total`),
	ADD KEY `IDX_working_hours` (`working_hours`);

ALTER TABLE `bd_az_framework`.`pd_category_horary`
	MODIFY `id_pd_category_horary` bigint(255) NOT NULL AUTO_INCREMENT;