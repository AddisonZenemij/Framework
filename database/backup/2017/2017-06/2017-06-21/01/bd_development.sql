-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 17:44:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

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
  `t_name` tinyint(1) DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keypass` int(11) NOT NULL DEFAULT '0',
  `keypass_tmp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `session` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `pass`, `telefono`, `keypass`, `keypass_tmp`, `session`) VALUES
(1, 'test', 'test@ocrend.com', '$2a$10$87b2b603324793cc37f8dOPFTnHRY0lviq5filK5cN4aMCQDJcC9G', '584149392600', 0, '', 0);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  MODIFY `id_az_inner_role_user` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `az_role`
--
ALTER TABLE `az_role`
  MODIFY `id_az_role` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `az_user`
--
ALTER TABLE `az_user`
  MODIFY `id_az_user` bigint(255) NOT NULL AUTO_INCREMENT COMMENT 'Id';
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  ADD CONSTRAINT `az_inner_role_user_ibfk_1` FOREIGN KEY (`t_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_role_user_ibfk_2` FOREIGN KEY (`t_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
