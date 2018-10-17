CREATE TABLE `bd_az_framework`.`az_user` (
	`id_az_user` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
	`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
	`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
	`t_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo Electronico',
	`t_key_active` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Llave Activacion',
	`t_key_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion',
	`t_key_password_temp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion Temporal',
	`t_key_status` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Estado Activacion',
	`t_last_connection` datetime COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Ultima Conexión',
	`t_login` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario',
	`t_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contraseña',
	`t_session` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Sesion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`az_user`
	ADD PRIMARY KEY (`id_az_user`),
	ADD KEY `IDX_id_az_user` (`id_az_user`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_email` (`t_email`),
	ADD KEY `IDX_t_key_active` (`t_key_active`),
	ADD KEY `IDX_t_key_password` (`t_key_password`),
	ADD KEY `IDX_t_key_password_temp` (`t_key_password_temp`),
	ADD KEY `IDX_t_key_status` (`t_key_status`),
	ADD KEY `IDX_t_last_connection` (`t_last_connection`),
	ADD KEY `IDX_t_login` (`t_login`),
	ADD KEY `IDX_t_password` (`t_password`),
	ADD KEY `IDX_t_session` (`t_session`);

ALTER TABLE `bd_az_framework`.`az_user`
	MODIFY `id_az_user` bigint(255) NOT NULL AUTO_INCREMENT;