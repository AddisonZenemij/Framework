CREATE TABLE `bd_pd_management`.`pd_compensar_management` (
	`id` bigint(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id',
	`nombre` varchar(200) DEFAULT NULL COMMENT 'Nombre',
	`numcre` varchar(25) DEFAULT NULL COMMENT 'Numero Credito',
	`docide` varchar(25) DEFAULT NULL COMMENT 'Identificacion',
	`sldcap` decimal(26,2) DEFAULT NULL COMMENT 'Saldo Capital',
	`campaign` varchar(25) DEFAULT NULL COMMENT 'Campaña',
	`agente` varchar(150) DEFAULT NULL COMMENT 'Agente',
	`telcontacto` varchar(50) DEFAULT NULL COMMENT 'Numero Contacto',
	`tipocartera` varchar(50) DEFAULT NULL COMMENT 'Tipo Cartera',
	`negociacion` decimal(26,2) DEFAULT NULL COMMENT 'Negociacion',
	`valordeuda` decimal(26,2) DEFAULT NULL COMMENT 'Valor Deuda',
	`vlrcastcap` decimal(26,2) DEFAULT NULL COMMENT 'Valor Castigo Capital',
	`calificacion_tipi` varchar(5) DEFAULT NULL COMMENT 'Calificacion Tipificacion',
	`tipificacion` varchar(50) DEFAULT NULL COMMENT 'Tipificacion',
	`no_pago` varchar(50) DEFAULT NULL COMMENT 'No Pago',
	`fecha` date DEFAULT NULL COMMENT 'Fecha',
	`hora` time DEFAULT NULL COMMENT 'Hora',
	`detalle` text DEFAULT NULL COMMENT 'Detalle'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bd_pd_management`.`pd_compensar_management`
	ADD PRIMARY KEY (`id`),
	ADD KEY `IDX_id` (`id`),
	ADD KEY `IDX_nombre` (`nombre`),
	ADD KEY `IDX_numcre` (`numcre`),
	ADD KEY `IDX_docide` (`docide`),
	ADD KEY `IDX_sldcap` (`sldcap`),
	ADD KEY `IDX_campaign` (`campaign`),
	ADD KEY `IDX_agente` (`agente`),
	ADD KEY `IDX_telcontacto` (`telcontacto`),
	ADD KEY `IDX_tipocartera` (`tipocartera`),
	ADD KEY `IDX_negociacion` (`negociacion`),
	ADD KEY `IDX_valordeuda` (`valordeuda`),
	ADD KEY `IDX_vlrcastcap` (`vlrcastcap`),
	ADD KEY `IDX_calificacion_tipi` (`calificacion_tipi`),
	ADD KEY `IDX_tipificacion` (`tipificacion`),
	ADD KEY `IDX_no_pago` (`no_pago`),
	ADD KEY `IDX_fecha` (`fecha`),
	ADD KEY `IDX_hora` (`hora`);

ALTER TABLE `bd_pd_management`.`pd_compensar_management`
	MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;