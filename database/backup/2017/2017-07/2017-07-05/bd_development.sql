-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2017 a las 06:58:52
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_development`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_category_icon`
--

CREATE TABLE `az_category_icon` (
  `id_az_category_icon` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_icon`
--

CREATE TABLE `az_icon` (
  `id_az_icon` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_id_az_category_icon` bigint(255) NOT NULL COMMENT 'Id Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_role_user`
--

CREATE TABLE `az_inner_role_user` (
  `id_az_inner_role_user` bigint(255) NOT NULL COMMENT 'Id',
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_id_az_role` bigint(255) NOT NULL COMMENT 'Id Rol',
  `t_id_az_user` bigint(255) NOT NULL COMMENT 'Id Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `az_inner_role_user`
--

INSERT INTO `az_inner_role_user` (`id_az_inner_role_user`, `m_by_created`, `m_by_modified`, `m_date_created`, `m_date_modified`, `m_deleted`, `m_description`, `m_level`, `m_status`, `t_id_az_role`, `t_id_az_user`) VALUES
(1, 1, 0, '2017-06-21 11:15:56', '2017-06-21 11:15:56', 0, '', 0, 0, 1, 1),
(2, 1, 0, '2017-06-21 11:15:56', '2017-06-21 11:15:56', 0, '', 0, 0, 2, 1),
(3, 1, 0, '2017-06-21 11:15:56', '2017-06-21 11:15:56', 0, '', 0, 0, 3, 1),
(4, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 1, 2),
(5, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 2, 2),
(6, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 3, 2),
(7, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 1, 3),
(8, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 2, 3),
(9, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 3, 3),
(10, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 2, 4),
(11, 1, 0, '2017-06-21 11:15:57', '2017-06-21 11:15:57', 0, '', 0, 0, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_role`
--

CREATE TABLE `az_role` (
  `id_az_role` bigint(255) NOT NULL COMMENT 'Id',
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `az_role`
--

INSERT INTO `az_role` (`id_az_role`, `m_by_created`, `m_by_modified`, `m_date_created`, `m_date_modified`, `m_deleted`, `m_description`, `m_level`, `m_status`, `t_name`) VALUES
(1, 0, 0, '2017-06-21 10:56:37', '2017-06-21 10:56:37', 0, '', 0, 0, 'Desarrollador'),
(2, 0, 0, '2017-06-21 10:56:38', '2017-06-21 10:56:38', 0, '', 0, 0, 'Moderador'),
(3, 0, 0, '2017-06-21 10:56:38', '2017-06-21 10:56:38', 0, '', 0, 0, 'Soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_user`
--

CREATE TABLE `az_user` (
  `id_az_user` bigint(255) NOT NULL COMMENT 'Id',
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo Electronico',
  `t_key_active` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Llave Activacion',
  `t_key_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion',
  `t_key_password_temp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion Temporal',
  `t_key_status` tinyint(1) NOT NULL COMMENT 'Estado Activacion',
  `t_last_connection` datetime DEFAULT NULL COMMENT 'Ultima Conexión',
  `t_login` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario',
  `t_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contraseña',
  `t_session` tinyint(1) DEFAULT NULL COMMENT 'Sesion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `az_user`
--

INSERT INTO `az_user` (`id_az_user`, `m_by_created`, `m_by_modified`, `m_date_created`, `m_date_modified`, `m_deleted`, `m_description`, `m_level`, `m_status`, `t_email`, `t_key_active`, `t_key_password`, `t_key_password_temp`, `t_key_status`, `t_last_connection`, `t_login`, `t_password`, `t_session`) VALUES
(1, 0, 0, '2017-06-21 11:06:52', '2017-06-21 11:06:52', 0, '', 0, 0, 'admin@development.com', '', '0', '', 0, '2017-06-21 11:06:52', 'admin', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', 0),
(2, 1, 0, '2017-06-21 11:06:53', '2017-06-21 11:06:53', 0, '', 1, 0, 'adisonj@development.com', '', '0', '', 0, '2017-06-21 11:06:53', 'adisonj', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', 0),
(3, 1, 0, '2017-06-21 11:06:53', '2017-06-21 11:06:53', 0, '', 1, 0, 'julianv@development.com', '', '0', '', 0, '2017-06-21 11:06:53', 'julianv', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', 0),
(4, 1, 0, '2017-06-21 11:06:53', '2017-06-21 11:06:53', 0, '', 2, 0, 'lilianah@development.com', '', '0', '', 0, '2017-06-21 11:06:53', 'lilianah', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', 0),
(5, 1, 0, '2017-06-21 11:06:53', '2017-06-21 11:06:53', 0, '', 2, 0, 'judyr@development.com', '', '0', '', 0, '2017-06-21 11:06:53', 'judyr', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', 0),
(6, 0, 0, '2017-06-23 02:41:05', '2017-06-23 02:41:05', 0, '', 2, 0, 'addison214@hotmail.com', '', '0', '', 1, NULL, 'addison214', '$2a$10$4f61d3e15d6b24d9a9547u.4Ad9BzZU1R/LE9u8IsqCAp.A.z1sxe', 0),
(7, 0, 0, '2017-06-23 02:45:15', '2017-06-23 02:45:15', 0, '', 2, 0, 'miguel@hotmail.com', '', '0', '', 1, NULL, 'miguel', '$2a$10$669d1c55e971811c92e1bOVjbq.YePdeftFRec/v5pNI9zQhc53Qi', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `az_category_icon`
--
ALTER TABLE `az_category_icon`
  ADD PRIMARY KEY (`id_az_category_icon`),
  ADD KEY `IDX_id_az_category_icon` (`id_az_category_icon`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_icon`
--
ALTER TABLE `az_icon`
  ADD PRIMARY KEY (`id_az_icon`),
  ADD KEY `IDX_id_az_icon` (`id_az_icon`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_id_az_category_icon` (`t_id_az_category_icon`);

--
-- Indices de la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  ADD PRIMARY KEY (`id_az_inner_role_user`),
  ADD KEY `IDX_id_az_inner_role_user` (`id_az_inner_role_user`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_id_az_role` (`t_id_az_role`),
  ADD KEY `IDX_t_id_az_user` (`t_id_az_user`);

--
-- Indices de la tabla `az_role`
--
ALTER TABLE `az_role`
  ADD PRIMARY KEY (`id_az_role`),
  ADD KEY `IDX_id_az_role` (`id_az_role`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_user`
--
ALTER TABLE `az_user`
  ADD PRIMARY KEY (`id_az_user`),
  ADD KEY `IDX_id_az_user` (`id_az_user`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_email` (`t_email`),
  ADD KEY `IDX_t_key_active` (`t_key_active`),
  ADD KEY `IDX_t_key_password` (`t_key_password`),
  ADD KEY `IDX_t_key_password_temp` (`t_key_password_temp`),
  ADD KEY `IDX_t_key_status` (`t_key_status`),
  ADD KEY `IDX_t_last_connection` (`t_last_connection`),
  ADD KEY `IDX_t_login` (`t_login`),
  ADD KEY `IDX_t_password` (`t_password`),
  ADD KEY `IDX_t_session` (`t_session`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `az_category_icon`
--
ALTER TABLE `az_category_icon`
  MODIFY `id_az_category_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_icon`
--
ALTER TABLE `az_icon`
  MODIFY `id_az_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  MODIFY `id_az_inner_role_user` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `az_role`
--
ALTER TABLE `az_role`
  MODIFY `id_az_role` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `az_user`
--
ALTER TABLE `az_user`
  MODIFY `id_az_user` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `az_icon`
--
ALTER TABLE `az_icon`
  ADD CONSTRAINT `az_icon_ibfk_1` FOREIGN KEY (`t_id_az_category_icon`) REFERENCES `az_category_icon` (`id_az_category_icon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  ADD CONSTRAINT `az_inner_role_user_ibfk_1` FOREIGN KEY (`t_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_role_user_ibfk_2` FOREIGN KEY (`t_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
