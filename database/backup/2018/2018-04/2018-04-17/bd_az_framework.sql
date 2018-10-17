-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2018 a las 23:15:30
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_az_framework`
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
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_deleted`
--

CREATE TABLE `az_deleted` (
  `id_az_deleted` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_value` tinyint(1) DEFAULT NULL COMMENT 'Valor'
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
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_az_category_icon` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_icon_menu_role`
--

CREATE TABLE `az_inner_icon_menu_role` (
  `id_az_inner_icon_menu_role` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_az_icon` bigint(255) DEFAULT NULL COMMENT 'Id',
  `v_id_az_menu` bigint(255) DEFAULT NULL COMMENT 'Id',
  `v_id_az_role` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_permit_role`
--

CREATE TABLE `az_inner_permit_role` (
  `id_az_inner_permit_role` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `v_id_az_permit` bigint(255) DEFAULT NULL COMMENT 'Id',
  `v_id_az_role` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_role_user`
--

CREATE TABLE `az_inner_role_user` (
  `id_az_inner_role_user` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `v_id_az_role` bigint(255) DEFAULT NULL COMMENT 'Id',
  `v_id_az_user` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_level`
--

CREATE TABLE `az_level` (
  `id_az_level` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_value` tinyint(1) DEFAULT NULL COMMENT 'Valor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_log`
--

CREATE TABLE `az_log` (
  `id_az_log` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_log` longtext COLLATE utf8_unicode_ci COMMENT 'Log'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_menu`
--

CREATE TABLE `az_menu` (
  `id_az_menu` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Url'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_permit`
--

CREATE TABLE `az_permit` (
  `id_az_permit` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_role`
--

CREATE TABLE `az_role` (
  `id_az_role` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_state`
--

CREATE TABLE `az_state` (
  `id_az_state` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_value` tinyint(1) DEFAULT NULL COMMENT 'Valor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_user`
--

CREATE TABLE `az_user` (
  `id_az_user` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo Electronico',
  `t_key_active` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Llave Activacion',
  `t_key_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion',
  `t_key_password_temp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña Recuperacion Temporal',
  `t_key_status` tinyint(1) DEFAULT NULL COMMENT 'Estado Activacion',
  `t_last_connection` datetime DEFAULT NULL COMMENT 'Ultima Conexión',
  `t_login` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario',
  `t_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contraseña',
  `t_session` tinyint(1) DEFAULT NULL COMMENT 'Sesion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_accrued`
--

CREATE TABLE `pd_accrued` (
  `id_pd_accrued` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_base_salary` decimal(26,0) DEFAULT NULL COMMENT 'Salario Base',
  `t_bonuses` decimal(26,0) DEFAULT NULL COMMENT 'Bonos',
  `t_holidays` decimal(26,0) DEFAULT NULL COMMENT 'Vacaciones',
  `t_monthly_salary` decimal(26,0) DEFAULT NULL COMMENT 'Salario Mensual',
  `t_total_accrued` decimal(26,0) DEFAULT NULL COMMENT 'Total Devengado',
  `t_transport_assistance` decimal(26,0) DEFAULT NULL COMMENT 'Auxilio Transporte',
  `v_id_pd_worked_period` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_base_salary`
--

CREATE TABLE `pd_base_salary` (
  `id_pd_base_salary` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_value` decimal(26,0) DEFAULT NULL COMMENT 'Salario Base Fijo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_brand`
--

CREATE TABLE `pd_brand` (
  `id_pd_brand` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_pd_category_brand` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_campaign`
--

CREATE TABLE `pd_campaign` (
  `id_pd_campaign` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_pd_category_campaign` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_category_brand`
--

CREATE TABLE `pd_category_brand` (
  `id_pd_category_brand` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_category_campaign`
--

CREATE TABLE `pd_category_campaign` (
  `id_pd_category_campaign` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_category_provider`
--

CREATE TABLE `pd_category_provider` (
  `id_pd_category_provider` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_change_diadem`
--

CREATE TABLE `pd_change_diadem` (
  `id_pd_change_diadem` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_date_change` date DEFAULT NULL COMMENT 'Fecha Cambio',
  `v_id_pd_data_personal` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_civil_status`
--

CREATE TABLE `pd_civil_status` (
  `id_pd_civil_status` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_contract_type`
--

CREATE TABLE `pd_contract_type` (
  `id_pd_contract_type` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_data_personal`
--

CREATE TABLE `pd_data_personal` (
  `id_pd_data_personal` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Direcccion',
  `t_birth_date` date DEFAULT NULL COMMENT 'Fecha Nacimiento',
  `t_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Correo Electronico',
  `t_identification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Identificacion',
  `t_names` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombres',
  `t_phone_fixed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Fijo',
  `t_phone_movil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Movil',
  `t_surnames` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Apellidos',
  `v_id_pd_document_type` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_document_type`
--

CREATE TABLE `pd_document_type` (
  `id_pd_document_type` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_eps`
--

CREATE TABLE `pd_eps` (
  `id_pd_eps` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_inner_campaign_data_personal`
--

CREATE TABLE `pd_inner_campaign_data_personal` (
  `id_pd_inner_campaign_data_personal` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `v_id_pd_campaign` bigint(255) DEFAULT NULL COMMENT 'Id',
  `v_id_pd_data_personal` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_level_study`
--

CREATE TABLE `pd_level_study` (
  `id_pd_level_study` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_messaging_type`
--

CREATE TABLE `pd_messaging_type` (
  `id_pd_messaging_type` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_neighborhood`
--

CREATE TABLE `pd_neighborhood` (
  `id_pd_neighborhood` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_pension`
--

CREATE TABLE `pd_pension` (
  `id_pd_pension` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_personal_type`
--

CREATE TABLE `pd_personal_type` (
  `id_pd_personal_type` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_provider`
--

CREATE TABLE `pd_provider` (
  `id_pd_provider` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_pd_category_provider` bigint(255) DEFAULT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_transport_assistance`
--

CREATE TABLE `pd_transport_assistance` (
  `id_pd_transport_assistance` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_value` decimal(26,0) DEFAULT NULL COMMENT 'Salario Mensual Fijo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pd_worked_period`
--

CREATE TABLE `pd_worked_period` (
  `id_pd_worked_period` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `m_temp` tinyint(1) NOT NULL COMMENT 'Temporal',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_deleted`
--
ALTER TABLE `az_deleted`
  ADD PRIMARY KEY (`id_az_deleted`),
  ADD KEY `IDX_id_az_deleted` (`id_az_deleted`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_value` (`t_value`);

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
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_az_category_icon` (`v_id_az_category_icon`);

--
-- Indices de la tabla `az_inner_icon_menu_role`
--
ALTER TABLE `az_inner_icon_menu_role`
  ADD PRIMARY KEY (`id_az_inner_icon_menu_role`),
  ADD KEY `IDX_id_az_inner_icon_menu_role` (`id_az_inner_icon_menu_role`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_az_icon` (`v_id_az_icon`),
  ADD KEY `IDX_v_id_az_menu` (`v_id_az_menu`),
  ADD KEY `IDX_v_id_az_role` (`v_id_az_role`);

--
-- Indices de la tabla `az_inner_permit_role`
--
ALTER TABLE `az_inner_permit_role`
  ADD PRIMARY KEY (`id_az_inner_permit_role`),
  ADD KEY `IDX_id_az_inner_permit_role` (`id_az_inner_permit_role`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_v_id_az_permit` (`v_id_az_permit`),
  ADD KEY `IDX_v_id_az_role` (`v_id_az_role`);

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
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_v_id_az_role` (`v_id_az_role`),
  ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

--
-- Indices de la tabla `az_level`
--
ALTER TABLE `az_level`
  ADD PRIMARY KEY (`id_az_level`),
  ADD KEY `IDX_id_az_level` (`id_az_level`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_value` (`t_value`);

--
-- Indices de la tabla `az_log`
--
ALTER TABLE `az_log`
  ADD PRIMARY KEY (`id_az_log`),
  ADD KEY `IDX_id_az_log` (`id_az_log`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`);

--
-- Indices de la tabla `az_menu`
--
ALTER TABLE `az_menu`
  ADD PRIMARY KEY (`id_az_menu`),
  ADD KEY `IDX_id_az_menu` (`id_az_menu`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_url` (`t_url`);

--
-- Indices de la tabla `az_permit`
--
ALTER TABLE `az_permit`
  ADD PRIMARY KEY (`id_az_permit`),
  ADD KEY `IDX_id_az_permit` (`id_az_permit`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

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
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_state`
--
ALTER TABLE `az_state`
  ADD PRIMARY KEY (`id_az_state`),
  ADD KEY `IDX_id_az_state` (`id_az_state`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_value` (`t_value`);

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

--
-- Indices de la tabla `pd_accrued`
--
ALTER TABLE `pd_accrued`
  ADD PRIMARY KEY (`id_pd_accrued`),
  ADD KEY `IDX_id_pd_accrued` (`id_pd_accrued`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_base_salary` (`t_base_salary`),
  ADD KEY `IDX_t_bonuses` (`t_bonuses`),
  ADD KEY `IDX_t_holidays` (`t_holidays`),
  ADD KEY `IDX_t_monthly_salary` (`t_monthly_salary`),
  ADD KEY `IDX_t_total_accrued` (`t_total_accrued`),
  ADD KEY `IDX_t_transport_assistance` (`t_transport_assistance`),
  ADD KEY `IDX_v_id_pd_worked_period` (`v_id_pd_worked_period`);

--
-- Indices de la tabla `pd_base_salary`
--
ALTER TABLE `pd_base_salary`
  ADD PRIMARY KEY (`id_pd_base_salary`),
  ADD KEY `IDX_id_pd_base_salary` (`id_pd_base_salary`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_value` (`t_value`);

--
-- Indices de la tabla `pd_brand`
--
ALTER TABLE `pd_brand`
  ADD PRIMARY KEY (`id_pd_brand`),
  ADD KEY `IDX_id_pd_brand` (`id_pd_brand`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_pd_category_brand` (`v_id_pd_category_brand`);

--
-- Indices de la tabla `pd_campaign`
--
ALTER TABLE `pd_campaign`
  ADD PRIMARY KEY (`id_pd_campaign`),
  ADD KEY `IDX_id_pd_campaign` (`id_pd_campaign`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_pd_category_campaign` (`v_id_pd_category_campaign`);

--
-- Indices de la tabla `pd_category_brand`
--
ALTER TABLE `pd_category_brand`
  ADD PRIMARY KEY (`id_pd_category_brand`),
  ADD KEY `IDX_id_pd_category_brand` (`id_pd_category_brand`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_category_campaign`
--
ALTER TABLE `pd_category_campaign`
  ADD PRIMARY KEY (`id_pd_category_campaign`),
  ADD KEY `IDX_id_pd_category_campaign` (`id_pd_category_campaign`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_category_provider`
--
ALTER TABLE `pd_category_provider`
  ADD PRIMARY KEY (`id_pd_category_provider`),
  ADD KEY `IDX_id_pd_category_provider` (`id_pd_category_provider`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_change_diadem`
--
ALTER TABLE `pd_change_diadem`
  ADD PRIMARY KEY (`id_pd_change_diadem`),
  ADD KEY `IDX_id_pd_change_diadem` (`id_pd_change_diadem`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_date_change` (`t_date_change`),
  ADD KEY `IDX_v_id_pd_data_personal` (`v_id_pd_data_personal`);

--
-- Indices de la tabla `pd_civil_status`
--
ALTER TABLE `pd_civil_status`
  ADD PRIMARY KEY (`id_pd_civil_status`),
  ADD KEY `IDX_id_pd_civil_status` (`id_pd_civil_status`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_contract_type`
--
ALTER TABLE `pd_contract_type`
  ADD PRIMARY KEY (`id_pd_contract_type`),
  ADD KEY `IDX_id_pd_contract_type` (`id_pd_contract_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_data_personal`
--
ALTER TABLE `pd_data_personal`
  ADD PRIMARY KEY (`id_pd_data_personal`),
  ADD KEY `IDX_id_pd_data_personal` (`id_pd_data_personal`),
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
  ADD KEY `IDX_t_email` (`t_email`),
  ADD KEY `IDX_t_identification` (`t_identification`),
  ADD KEY `IDX_t_names` (`t_names`),
  ADD KEY `IDX_t_phone_fixed` (`t_phone_fixed`),
  ADD KEY `IDX_t_phone_movil` (`t_phone_movil`),
  ADD KEY `IDX_t_surnames` (`t_surnames`),
  ADD KEY `IDX_v_id_pd_document_type` (`v_id_pd_document_type`);

--
-- Indices de la tabla `pd_document_type`
--
ALTER TABLE `pd_document_type`
  ADD PRIMARY KEY (`id_pd_document_type`),
  ADD KEY `IDX_id_pd_document_type` (`id_pd_document_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_eps`
--
ALTER TABLE `pd_eps`
  ADD PRIMARY KEY (`id_pd_eps`),
  ADD KEY `IDX_id_pd_eps` (`id_pd_eps`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_inner_campaign_data_personal`
--
ALTER TABLE `pd_inner_campaign_data_personal`
  ADD PRIMARY KEY (`id_pd_inner_campaign_data_personal`),
  ADD KEY `IDX_id_pd_inner_campaign_data_personal` (`id_pd_inner_campaign_data_personal`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_v_id_pd_campaign` (`v_id_pd_campaign`),
  ADD KEY `IDX_v_id_pd_data_personal` (`v_id_pd_data_personal`);

--
-- Indices de la tabla `pd_level_study`
--
ALTER TABLE `pd_level_study`
  ADD PRIMARY KEY (`id_pd_level_study`),
  ADD KEY `IDX_id_pd_level_study` (`id_pd_level_study`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_messaging_type`
--
ALTER TABLE `pd_messaging_type`
  ADD PRIMARY KEY (`id_pd_messaging_type`),
  ADD KEY `IDX_id_pd_messaging_type` (`id_pd_messaging_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_neighborhood`
--
ALTER TABLE `pd_neighborhood`
  ADD PRIMARY KEY (`id_pd_neighborhood`),
  ADD KEY `IDX_id_pd_neighborhood` (`id_pd_neighborhood`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_pension`
--
ALTER TABLE `pd_pension`
  ADD PRIMARY KEY (`id_pd_pension`),
  ADD KEY `IDX_id_pd_pension` (`id_pd_pension`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_personal_type`
--
ALTER TABLE `pd_personal_type`
  ADD PRIMARY KEY (`id_pd_personal_type`),
  ADD KEY `IDX_id_pd_personal_type` (`id_pd_personal_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `pd_provider`
--
ALTER TABLE `pd_provider`
  ADD PRIMARY KEY (`id_pd_provider`),
  ADD KEY `IDX_id_pd_provider` (`id_pd_provider`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_pd_category_provider` (`v_id_pd_category_provider`);

--
-- Indices de la tabla `pd_transport_assistance`
--
ALTER TABLE `pd_transport_assistance`
  ADD PRIMARY KEY (`id_pd_transport_assistance`),
  ADD KEY `IDX_id_pd_transport_assistance` (`id_pd_transport_assistance`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_value` (`t_value`);

--
-- Indices de la tabla `pd_worked_period`
--
ALTER TABLE `pd_worked_period`
  ADD PRIMARY KEY (`id_pd_worked_period`),
  ADD KEY `IDX_id_pd_worked_period` (`id_pd_worked_period`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_m_temp` (`m_temp`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `az_category_icon`
--
ALTER TABLE `az_category_icon`
  MODIFY `id_az_category_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_deleted`
--
ALTER TABLE `az_deleted`
  MODIFY `id_az_deleted` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_icon`
--
ALTER TABLE `az_icon`
  MODIFY `id_az_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_icon_menu_role`
--
ALTER TABLE `az_inner_icon_menu_role`
  MODIFY `id_az_inner_icon_menu_role` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_permit_role`
--
ALTER TABLE `az_inner_permit_role`
  MODIFY `id_az_inner_permit_role` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  MODIFY `id_az_inner_role_user` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_level`
--
ALTER TABLE `az_level`
  MODIFY `id_az_level` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_log`
--
ALTER TABLE `az_log`
  MODIFY `id_az_log` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_menu`
--
ALTER TABLE `az_menu`
  MODIFY `id_az_menu` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_permit`
--
ALTER TABLE `az_permit`
  MODIFY `id_az_permit` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_role`
--
ALTER TABLE `az_role`
  MODIFY `id_az_role` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_state`
--
ALTER TABLE `az_state`
  MODIFY `id_az_state` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_user`
--
ALTER TABLE `az_user`
  MODIFY `id_az_user` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_accrued`
--
ALTER TABLE `pd_accrued`
  MODIFY `id_pd_accrued` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_base_salary`
--
ALTER TABLE `pd_base_salary`
  MODIFY `id_pd_base_salary` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_brand`
--
ALTER TABLE `pd_brand`
  MODIFY `id_pd_brand` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_campaign`
--
ALTER TABLE `pd_campaign`
  MODIFY `id_pd_campaign` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_category_brand`
--
ALTER TABLE `pd_category_brand`
  MODIFY `id_pd_category_brand` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_category_campaign`
--
ALTER TABLE `pd_category_campaign`
  MODIFY `id_pd_category_campaign` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_category_provider`
--
ALTER TABLE `pd_category_provider`
  MODIFY `id_pd_category_provider` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_change_diadem`
--
ALTER TABLE `pd_change_diadem`
  MODIFY `id_pd_change_diadem` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_civil_status`
--
ALTER TABLE `pd_civil_status`
  MODIFY `id_pd_civil_status` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_contract_type`
--
ALTER TABLE `pd_contract_type`
  MODIFY `id_pd_contract_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_data_personal`
--
ALTER TABLE `pd_data_personal`
  MODIFY `id_pd_data_personal` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_document_type`
--
ALTER TABLE `pd_document_type`
  MODIFY `id_pd_document_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_eps`
--
ALTER TABLE `pd_eps`
  MODIFY `id_pd_eps` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_inner_campaign_data_personal`
--
ALTER TABLE `pd_inner_campaign_data_personal`
  MODIFY `id_pd_inner_campaign_data_personal` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_level_study`
--
ALTER TABLE `pd_level_study`
  MODIFY `id_pd_level_study` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_messaging_type`
--
ALTER TABLE `pd_messaging_type`
  MODIFY `id_pd_messaging_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_neighborhood`
--
ALTER TABLE `pd_neighborhood`
  MODIFY `id_pd_neighborhood` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_pension`
--
ALTER TABLE `pd_pension`
  MODIFY `id_pd_pension` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_personal_type`
--
ALTER TABLE `pd_personal_type`
  MODIFY `id_pd_personal_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_provider`
--
ALTER TABLE `pd_provider`
  MODIFY `id_pd_provider` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_transport_assistance`
--
ALTER TABLE `pd_transport_assistance`
  MODIFY `id_pd_transport_assistance` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pd_worked_period`
--
ALTER TABLE `pd_worked_period`
  MODIFY `id_pd_worked_period` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `az_icon`
--
ALTER TABLE `az_icon`
  ADD CONSTRAINT `az_icon_ibfk_1` FOREIGN KEY (`v_id_az_category_icon`) REFERENCES `az_category_icon` (`id_az_category_icon`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_icon_menu_role`
--
ALTER TABLE `az_inner_icon_menu_role`
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_1` FOREIGN KEY (`v_id_az_icon`) REFERENCES `az_icon` (`id_az_icon`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_2` FOREIGN KEY (`v_id_az_menu`) REFERENCES `az_menu` (`id_az_menu`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_3` FOREIGN KEY (`v_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_permit_role`
--
ALTER TABLE `az_inner_permit_role`
  ADD CONSTRAINT `az_inner_permit_role_ibfk_1` FOREIGN KEY (`v_id_az_permit`) REFERENCES `az_permit` (`id_az_permit`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_permit_role_ibfk_2` FOREIGN KEY (`v_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  ADD CONSTRAINT `az_inner_role_user_ibfk_1` FOREIGN KEY (`v_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_role_user_ibfk_2` FOREIGN KEY (`v_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_brand`
--
ALTER TABLE `pd_brand`
  ADD CONSTRAINT `pd_brand_ibfk_1` FOREIGN KEY (`v_id_pd_category_brand`) REFERENCES `pd_category_brand` (`id_pd_category_brand`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_campaign`
--
ALTER TABLE `pd_campaign`
  ADD CONSTRAINT `pd_campaign_ibfk_1` FOREIGN KEY (`v_id_pd_category_campaign`) REFERENCES `pd_category_campaign` (`id_pd_category_campaign`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_change_diadem`
--
ALTER TABLE `pd_change_diadem`
  ADD CONSTRAINT `pd_change_diadem_ibfk_1` FOREIGN KEY (`v_id_pd_data_personal`) REFERENCES `pd_data_personal` (`id_pd_data_personal`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_data_personal`
--
ALTER TABLE `pd_data_personal`
  ADD CONSTRAINT `pd_data_personal_ibfk_1` FOREIGN KEY (`v_id_pd_document_type`) REFERENCES `pd_document_type` (`id_pd_document_type`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_inner_campaign_data_personal`
--
ALTER TABLE `pd_inner_campaign_data_personal`
  ADD CONSTRAINT `pd_inner_campaign_data_personal_ibfk_1` FOREIGN KEY (`v_id_pd_campaign`) REFERENCES `pd_campaign` (`id_pd_campaign`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pd_inner_campaign_data_personal_ibfk_2` FOREIGN KEY (`v_id_pd_data_personal`) REFERENCES `pd_data_personal` (`id_pd_data_personal`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pd_provider`
--
ALTER TABLE `pd_provider`
  ADD CONSTRAINT `pd_provider_ibfk_1` FOREIGN KEY (`v_id_pd_category_provider`) REFERENCES `pd_category_provider` (`id_pd_category_provider`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
