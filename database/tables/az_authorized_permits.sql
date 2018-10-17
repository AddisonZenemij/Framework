CREATE TABLE `bd_az_framework`.`az_authorized_permits` (
	`id_az_authorized_permits` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`m_by_created` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Creado Por',
	`m_by_modified` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modificado Por',
	`m_date_created` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Creado',
	`m_date_modified` datetime COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fecha Modificado',
	`m_deleted` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Eliminado',
	`m_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descripcion',
	`m_level` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nivel',
	`m_status` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado',
	`m_temp` tinyint(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Temporal',
	`t_menu_value` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Menu',
	`t_module_value` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Modulo',
	`t_value_change` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Cambios',
	`t_value_create` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Crear',
	`t_value_delete` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Eliminar',
	`t_value_detail` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Detalles',
	`t_value_error` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Error',
	`t_value_read_all` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Listar Todo',
	`t_value_read_eliminate` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Listar Eliminados',
	`t_value_remove` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Remover',
	`t_value_update` tinyint(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Editar',
	`v_id_az_menu_crud` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id',
	`v_id_az_role` bigint(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Id'

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_az_framework`.`az_authorized_permits`
	ADD PRIMARY KEY (`id_az_authorized_permits`),
	ADD KEY `IDX_id_az_authorized_permits` (`id_az_authorized_permits`),
	ADD KEY `IDX_m_by_created` (`m_by_created`),
	ADD KEY `IDX_m_by_modified` (`m_by_modified`),
	ADD KEY `IDX_m_date_created` (`m_date_created`),
	ADD KEY `IDX_m_date_modified` (`m_date_modified`),
	ADD KEY `IDX_m_deleted` (`m_deleted`),
	ADD KEY `IDX_m_level` (`m_level`),
	ADD KEY `IDX_m_status` (`m_status`),
	ADD KEY `IDX_m_temp` (`m_temp`),
	ADD KEY `IDX_t_menu_value` (`t_menu_value`),
	ADD KEY `IDX_t_module_value` (`t_module_value`),
	ADD KEY `IDX_t_value_change` (`t_value_change`),
	ADD KEY `IDX_t_value_create` (`t_value_create`),
	ADD KEY `IDX_t_value_delete` (`t_value_delete`),
	ADD KEY `IDX_t_value_detail` (`t_value_detail`),
	ADD KEY `IDX_t_value_error` (`t_value_error`),
	ADD KEY `IDX_t_value_read_all` (`t_value_read_all`),
	ADD KEY `IDX_t_value_read_eliminate` (`t_value_read_eliminate`),
	ADD KEY `IDX_t_value_remove` (`t_value_remove`),
	ADD KEY `IDX_t_value_update` (`t_value_update`),
	ADD KEY `IDX_v_id_az_menu_crud` (`v_id_az_menu_crud`),
	ADD KEY `IDX_v_id_az_role` (`v_id_az_role`);

ALTER TABLE `bd_az_framework`.`az_authorized_permits`
	MODIFY `id_az_authorized_permits` bigint(255) NOT NULL AUTO_INCREMENT;