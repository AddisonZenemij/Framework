CREATE TABLE `bd_pd_management`.`pd_itau_vigente_management` (
	`id` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`nombre` varchar(150) DEFAULT NULL COMMENT 'Nombre Apellidos',
	`numeroid` varchar(50) DEFAULT NULL COMMENT 'Identificacion',
	`codigocliente` varchar(50) DEFAULT NULL COMMENT 'Codigo Cliente',
	`tipificacion` varchar(60) DEFAULT NULL COMMENT 'Tipificacion',
	`telcontacto` varchar(25) DEFAULT NULL COMMENT 'Numero Contacto',
	`campaign` varchar(30) DEFAULT NULL COMMENT 'Campaña',
	`endeudamientocastigo` decimal(26,6) DEFAULT NULL COMMENT 'Endeudamiento Castigo',
	`idasesor` varchar(50) DEFAULT NULL COMMENT 'Id Asesor',
	`asesor` varchar(150) DEFAULT NULL COMMENT 'Asesor',
	`tipocartera` varchar(30) DEFAULT NULL COMMENT 'Tipo Cartera',
	`codtipificacion` int(8) DEFAULT NULL COMMENT 'Codigo Tipificacion',
	`razonnopago` varchar(60) DEFAULT NULL COMMENT 'Razon No Pago',
	`fecha` date DEFAULT NULL COMMENT 'Fecha',
	`hora` time DEFAULT NULL COMMENT 'Hora',
	`detalle` text  DEFAULT NULL COMMENT 'Detalle'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_pd_management`.`pd_itau_vigente_management`
	ADD PRIMARY KEY (`id`),
	ADD KEY `IDX_id` (`id`),
	ADD KEY `IDX_nombre` (`nombre`),
	ADD KEY `IDX_numeroid` (`numeroid`),
	ADD KEY `IDX_codigocliente` (`codigocliente`),
	ADD KEY `IDX_tipificacion` (`tipificacion`),
	ADD KEY `IDX_telcontacto` (`telcontacto`),
	ADD KEY `IDX_campaign` (`campaign`),
	ADD KEY `IDX_endeudamientocastigo` (`endeudamientocastigo`),
	ADD KEY `IDX_idasesor` (`idasesor`),
	ADD KEY `IDX_asesor` (`asesor`),
	ADD KEY `IDX_tipocartera` (`tipocartera`),
	ADD KEY `IDX_codtipificacion` (`codtipificacion`),
	ADD KEY `IDX_razonnopago` (`razonnopago`),
	ADD KEY `IDX_fecha` (`fecha`),
	ADD KEY `IDX_hora` (`hora`);

ALTER TABLE `bd_pd_management`.`pd_itau_vigente_management`
	MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;