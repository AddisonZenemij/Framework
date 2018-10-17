CREATE TABLE `bd_pd_management`.`pd_coasmedas_management` (
	`id` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`nombre` varchar(250) DEFAULT NULL COMMENT 'Nombre',
	`identificacion` varchar(25) DEFAULT NULL COMMENT 'Identificacion',
	`nro_obligacion` varchar(24) DEFAULT NULL COMMENT 'Numero Obligacion',
	`descripcion` varchar(50) DEFAULT NULL COMMENT 'Descripcion',
	`telcontacto` varchar(20) DEFAULT NULL COMMENT 'Numero Contacto',
	`saldo_capital` decimal(26,2) DEFAULT NULL COMMENT 'Saldo Capital',
	`asesor` varchar(60) DEFAULT NULL COMMENT 'Asesor',
	`campaign` varchar(50) DEFAULT NULL COMMENT 'Campaña',
	`dias_mora` int(11) DEFAULT NULL COMMENT 'Dias Mora',
	`nombre_oficina` varchar(60) DEFAULT NULL COMMENT 'Nombre Oficina',
	`capital_vencido` DECIMAL(26,2) DEFAULT NULL COMMENT 'Capital Vencido',
	`localizado` varchar(25) DEFAULT NULL COMMENT 'Localizado',
	`codigo_descripcion` int(10) DEFAULT NULL COMMENT 'Codigo Descripcion',
	`prioridad` int(10) DEFAULT NULL COMMENT 'Prioridad',
	`dice_ya_pago` varchar(5) DEFAULT '0' COMMENT 'Dice Ya Pago',
	`fechaproyeccion` varchar(25) DEFAULT NULL COMMENT 'Fecha Proyeccion',
	`no_pago` varchar(40) DEFAULT NULL COMMENT 'No Pago',
	`fecha` date DEFAULT NULL COMMENT 'Fecha',
	`hora` time DEFAULT NULL COMMENT 'Hora',
	`gestion` text DEFAULT NULL COMMENT 'Gestion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_pd_management`.`pd_coasmedas_management`
	ADD PRIMARY KEY (`id`),
	ADD KEY `IDX_id` (`id`),
	ADD KEY `IDX_nombre` (`nombre`),
	ADD KEY `IDX_identificacion` (`identificacion`),
	ADD KEY `IDX_nro_obligacion` (`nro_obligacion`),
	ADD KEY `IDX_descripcion` (`descripcion`),
	ADD KEY `IDX_telcontacto` (`telcontacto`),
	ADD KEY `IDX_saldo_capital` (`saldo_capital`),
	ADD KEY `IDX_asesor` (`asesor`),
	ADD KEY `IDX_campaign` (`campaign`),
	ADD KEY `IDX_dias_mora` (`dias_mora`),
	ADD KEY `IDX_nombre_oficina` (`nombre_oficina`),
	ADD KEY `IDX_capital_vencido` (`capital_vencido`),
	ADD KEY `IDX_localizado` (`localizado`),
	ADD KEY `IDX_codigo_descripcion` (`codigo_descripcion`),
	ADD KEY `IDX_prioridad` (`prioridad`),
	ADD KEY `IDX_dice_ya_pago` (`dice_ya_pago`),
	ADD KEY `IDX_fechaproyeccion` (`fechaproyeccion`),
	ADD KEY `IDX_no_pago` (`no_pago`),
	ADD KEY `IDX_fecha` (`fecha`),
	ADD KEY `IDX_hora` (`hora`);

ALTER TABLE `bd_pd_management`.`pd_coasmedas_management`
	MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;