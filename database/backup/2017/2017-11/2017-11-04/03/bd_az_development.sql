-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2017 a las 18:17:48
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_az_development`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_brand`
--

CREATE TABLE `az_brand` (
  `id_az_brand` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_az_category_brand` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_campaign`
--

CREATE TABLE `az_campaign` (
  `id_az_campaign` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `id_az_category_campaign` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_category_brand`
--

CREATE TABLE `az_category_brand` (
  `id_az_category_brand` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_category_campaign`
--

CREATE TABLE `az_category_campaign` (
  `id_az_category_campaign` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_category_provider`
--

CREATE TABLE `az_category_provider` (
  `id_az_category_provider` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_change_diadem`
--

CREATE TABLE `az_change_diadem` (
  `id_az_change_diadem` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_date_change` date DEFAULT NULL COMMENT 'Fecha Cambio',
  `v_id_az_user` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_civil_status`
--

CREATE TABLE `az_civil_status` (
  `id_az_civil_status` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_contract_type`
--

CREATE TABLE `az_contract_type` (
  `id_az_contract_type` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_control_diadem`
--

CREATE TABLE `az_control_diadem` (
  `id_az_control_diadem` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_availability` tinyint(1) DEFAULT NULL COMMENT 'Disponibilidad',
  `t_bill_number` bigint(255) DEFAULT NULL COMMENT 'Numero Factura',
  `t_iva` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Iva',
  `t_more_price` decimal(26,0) DEFAULT NULL COMMENT 'Precio Mas Iva',
  `t_purchase_date` date DEFAULT NULL COMMENT 'Fecha Compra',
  `t_serial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Serial',
  `t_sub_total` decimal(26,0) DEFAULT NULL COMMENT 'Sub Total',
  `t_total_unit` decimal(26,0) DEFAULT NULL COMMENT 'Total Unitario',
  `t_unit_price` decimal(26,0) DEFAULT NULL COMMENT 'Precio Unitario',
  `t_unity` int(255) DEFAULT NULL COMMENT 'Unidad',
  `v_id_az_brand` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_provider` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_data_personal`
--

CREATE TABLE `az_data_personal` (
  `id_az_data_personal` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Direcccion',
  `t_birth_date` date DEFAULT NULL COMMENT 'Fecha Nacimiento',
  `t_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Correo Electronico',
  `t_identification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Identificacion',
  `t_names` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombres',
  `t_phone_fixed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Fijo',
  `t_phone_movil` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefono Movil',
  `t_surnames` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Apellidos',
  `v_id_az_document_type` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_user` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_document_type`
--

CREATE TABLE `az_document_type` (
  `id_az_document_type` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_eps`
--

CREATE TABLE `az_eps` (
  `id_az_eps` bigint(255) NOT NULL,
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
  `v_id_az_category_icon` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_campaign_messaging_type_provider`
--

CREATE TABLE `az_inner_campaign_messaging_type_provider` (
  `id_az_inner_campaign_messaging_type_provider` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_charged_amount` bigint(255) NOT NULL COMMENT 'Cantidad Cargado',
  `t_quantity_sent` bigint(255) NOT NULL COMMENT 'Cantidad Enviado',
  `t_send_date` date NOT NULL COMMENT 'Fecha Envio',
  `v_id_az_campaign` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_messaging_type` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_provider` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_inner_campaign_user`
--

CREATE TABLE `az_inner_campaign_user` (
  `id_az_inner_campaign_user` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `v_id_az_campaign` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_user` bigint(255) NOT NULL COMMENT 'Id'
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
  `t_session` tinyint(1) NOT NULL COMMENT 'Sesion',
  `v_id_az_icon` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_menu` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_role` bigint(255) NOT NULL COMMENT 'Id'
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
  `v_id_az_role` bigint(255) NOT NULL COMMENT 'Id',
  `v_id_az_user` bigint(255) NOT NULL COMMENT 'Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_interactive_voice_response`
--

CREATE TABLE `az_interactive_voice_response` (
  `id_az_interactive_voice_response` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Codigo',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_level_study`
--

CREATE TABLE `az_level_study` (
  `id_az_level_study` bigint(255) NOT NULL,
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
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `t_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Url'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `az_messaging_type`
--

CREATE TABLE `az_messaging_type` (
  `id_az_messaging_type` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_neighborhood`
--

CREATE TABLE `az_neighborhood` (
  `id_az_neighborhood` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_pension`
--

CREATE TABLE `az_pension` (
  `id_az_pension` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_personal_type`
--

CREATE TABLE `az_personal_type` (
  `id_az_personal_type` bigint(255) NOT NULL,
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
-- Estructura de tabla para la tabla `az_provider`
--

CREATE TABLE `az_provider` (
  `id_az_provider` bigint(255) NOT NULL,
  `m_by_created` bigint(255) DEFAULT NULL COMMENT 'Creado Por',
  `m_by_modified` bigint(255) DEFAULT NULL COMMENT 'Modificado Por',
  `m_date_created` datetime NOT NULL COMMENT 'Fecha Creado',
  `m_date_modified` datetime NOT NULL COMMENT 'Fecha Modificado',
  `m_deleted` tinyint(1) NOT NULL COMMENT 'Eliminado',
  `m_description` longtext COLLATE utf8_unicode_ci COMMENT 'Descripcion',
  `m_level` tinyint(1) NOT NULL COMMENT 'Nivel',
  `m_status` tinyint(1) NOT NULL COMMENT 'Estado',
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre',
  `v_id_az_category_provider` bigint(255) NOT NULL COMMENT 'Id'
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
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nombre'
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `az_brand`
--
ALTER TABLE `az_brand`
  ADD PRIMARY KEY (`id_az_brand`),
  ADD KEY `IDX_id_az_brand` (`id_az_brand`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_az_category_brand` (`v_id_az_category_brand`);

--
-- Indices de la tabla `az_campaign`
--
ALTER TABLE `az_campaign`
  ADD PRIMARY KEY (`id_az_campaign`),
  ADD KEY `IDX_id_az_campaign` (`id_az_campaign`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_id_az_category_campaign` (`id_az_category_campaign`);

--
-- Indices de la tabla `az_category_brand`
--
ALTER TABLE `az_category_brand`
  ADD PRIMARY KEY (`id_az_category_brand`),
  ADD KEY `IDX_id_az_category_brand` (`id_az_category_brand`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_category_campaign`
--
ALTER TABLE `az_category_campaign`
  ADD PRIMARY KEY (`id_az_category_campaign`),
  ADD KEY `IDX_id_az_category_campaign` (`id_az_category_campaign`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

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
-- Indices de la tabla `az_category_provider`
--
ALTER TABLE `az_category_provider`
  ADD PRIMARY KEY (`id_az_category_provider`),
  ADD KEY `IDX_id_az_category_provider` (`id_az_category_provider`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_change_diadem`
--
ALTER TABLE `az_change_diadem`
  ADD PRIMARY KEY (`id_az_change_diadem`),
  ADD KEY `IDX_id_az_change_diadem` (`id_az_change_diadem`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_date_change` (`t_date_change`),
  ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

--
-- Indices de la tabla `az_civil_status`
--
ALTER TABLE `az_civil_status`
  ADD PRIMARY KEY (`id_az_civil_status`),
  ADD KEY `IDX_id_az_civil_status` (`id_az_civil_status`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_contract_type`
--
ALTER TABLE `az_contract_type`
  ADD PRIMARY KEY (`id_az_contract_type`),
  ADD KEY `IDX_id_az_contract_type` (`id_az_contract_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_control_diadem`
--
ALTER TABLE `az_control_diadem`
  ADD PRIMARY KEY (`id_az_control_diadem`),
  ADD KEY `IDX_id_az_control_diadem` (`id_az_control_diadem`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_availability` (`t_availability`),
  ADD KEY `IDX_t_bill_number` (`t_bill_number`),
  ADD KEY `IDX_t_iva` (`t_iva`),
  ADD KEY `IDX_t_more_price` (`t_more_price`),
  ADD KEY `IDX_t_purchase_date` (`t_purchase_date`),
  ADD KEY `IDX_t_serial` (`t_serial`),
  ADD KEY `IDX_t_sub_total` (`t_sub_total`),
  ADD KEY `IDX_t_total_unit` (`t_total_unit`),
  ADD KEY `IDX_t_unit_price` (`t_unit_price`),
  ADD KEY `IDX_t_unity` (`t_unity`),
  ADD KEY `IDX_v_id_az_brand` (`v_id_az_brand`),
  ADD KEY `IDX_v_id_az_provider` (`v_id_az_provider`);

--
-- Indices de la tabla `az_data_personal`
--
ALTER TABLE `az_data_personal`
  ADD PRIMARY KEY (`id_az_data_personal`),
  ADD KEY `IDX_id_az_data_personal` (`id_az_data_personal`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_address` (`t_address`),
  ADD KEY `IDX_t_birth_date` (`t_birth_date`),
  ADD KEY `IDX_t_email` (`t_email`),
  ADD KEY `IDX_t_identification` (`t_identification`),
  ADD KEY `IDX_t_names` (`t_names`),
  ADD KEY `IDX_t_phone_fixed` (`t_phone_fixed`),
  ADD KEY `IDX_t_phone_movil` (`t_phone_movil`),
  ADD KEY `IDX_t_surnames` (`t_surnames`),
  ADD KEY `IDX_v_id_az_document_type` (`v_id_az_document_type`),
  ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

--
-- Indices de la tabla `az_document_type`
--
ALTER TABLE `az_document_type`
  ADD PRIMARY KEY (`id_az_document_type`),
  ADD KEY `IDX_id_az_document_type` (`id_az_document_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_eps`
--
ALTER TABLE `az_eps`
  ADD PRIMARY KEY (`id_az_eps`),
  ADD KEY `IDX_id_az_eps` (`id_az_eps`),
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
  ADD KEY `IDX_v_id_az_category_icon` (`v_id_az_category_icon`);

--
-- Indices de la tabla `az_inner_campaign_messaging_type_provider`
--
ALTER TABLE `az_inner_campaign_messaging_type_provider`
  ADD PRIMARY KEY (`id_az_inner_campaign_messaging_type_provider`),
  ADD KEY `IDX_id_az_inner_campaign_messaging_type_provider` (`id_az_inner_campaign_messaging_type_provider`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_v_t_charged_amount` (`t_charged_amount`),
  ADD KEY `IDX_v_t_quantity_sent` (`t_quantity_sent`),
  ADD KEY `IDX_v_t_send_date` (`t_send_date`),
  ADD KEY `IDX_v_id_az_campaign` (`v_id_az_campaign`),
  ADD KEY `IDX_v_id_az_messaging_type` (`v_id_az_messaging_type`),
  ADD KEY `IDX_v_id_az_provider` (`v_id_az_provider`);

--
-- Indices de la tabla `az_inner_campaign_user`
--
ALTER TABLE `az_inner_campaign_user`
  ADD PRIMARY KEY (`id_az_inner_campaign_user`),
  ADD KEY `IDX_id_az_inner_campaign_user` (`id_az_inner_campaign_user`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_v_id_az_campaign` (`v_id_az_campaign`),
  ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

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
  ADD KEY `IDX_t_session` (`t_session`),
  ADD KEY `IDX_v_id_az_icon` (`v_id_az_icon`),
  ADD KEY `IDX_v_id_az_menu` (`v_id_az_menu`),
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
  ADD KEY `IDX_v_id_az_role` (`v_id_az_role`),
  ADD KEY `IDX_v_id_az_user` (`v_id_az_user`);

--
-- Indices de la tabla `az_interactive_voice_response`
--
ALTER TABLE `az_interactive_voice_response`
  ADD PRIMARY KEY (`id_az_interactive_voice_response`),
  ADD KEY `IDX_id_az_interactive_voice_response` (`id_az_interactive_voice_response`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_code` (`t_code`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_level_study`
--
ALTER TABLE `az_level_study`
  ADD PRIMARY KEY (`id_az_level_study`),
  ADD KEY `IDX_id_az_level_study` (`id_az_level_study`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

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
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_t_url` (`t_url`);

--
-- Indices de la tabla `az_messaging_type`
--
ALTER TABLE `az_messaging_type`
  ADD PRIMARY KEY (`id_az_messaging_type`),
  ADD KEY `IDX_id_az_messaging_type` (`id_az_messaging_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_neighborhood`
--
ALTER TABLE `az_neighborhood`
  ADD PRIMARY KEY (`id_az_neighborhood`),
  ADD KEY `IDX_id_az_neighborhood` (`id_az_neighborhood`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_pension`
--
ALTER TABLE `az_pension`
  ADD PRIMARY KEY (`id_az_pension`),
  ADD KEY `IDX_id_az_pension` (`id_az_pension`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_personal_type`
--
ALTER TABLE `az_personal_type`
  ADD PRIMARY KEY (`id_az_personal_type`),
  ADD KEY `IDX_id_az_personal_type` (`id_az_personal_type`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`);

--
-- Indices de la tabla `az_provider`
--
ALTER TABLE `az_provider`
  ADD PRIMARY KEY (`id_az_provider`),
  ADD KEY `IDX_id_az_provider` (`id_az_provider`),
  ADD KEY `IDX_m_by_created` (`m_by_created`),
  ADD KEY `IDX_m_by_modified` (`m_by_modified`),
  ADD KEY `IDX_m_date_created` (`m_date_created`),
  ADD KEY `IDX_m_date_modified` (`m_date_modified`),
  ADD KEY `IDX_m_deleted` (`m_deleted`),
  ADD KEY `IDX_m_level` (`m_level`),
  ADD KEY `IDX_m_status` (`m_status`),
  ADD KEY `IDX_t_name` (`t_name`),
  ADD KEY `IDX_v_id_az_category_provider` (`v_id_az_category_provider`);

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
-- AUTO_INCREMENT de la tabla `az_brand`
--
ALTER TABLE `az_brand`
  MODIFY `id_az_brand` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_campaign`
--
ALTER TABLE `az_campaign`
  MODIFY `id_az_campaign` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_category_brand`
--
ALTER TABLE `az_category_brand`
  MODIFY `id_az_category_brand` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_category_campaign`
--
ALTER TABLE `az_category_campaign`
  MODIFY `id_az_category_campaign` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_category_icon`
--
ALTER TABLE `az_category_icon`
  MODIFY `id_az_category_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_category_provider`
--
ALTER TABLE `az_category_provider`
  MODIFY `id_az_category_provider` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_change_diadem`
--
ALTER TABLE `az_change_diadem`
  MODIFY `id_az_change_diadem` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_civil_status`
--
ALTER TABLE `az_civil_status`
  MODIFY `id_az_civil_status` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_contract_type`
--
ALTER TABLE `az_contract_type`
  MODIFY `id_az_contract_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_control_diadem`
--
ALTER TABLE `az_control_diadem`
  MODIFY `id_az_control_diadem` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_data_personal`
--
ALTER TABLE `az_data_personal`
  MODIFY `id_az_data_personal` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_document_type`
--
ALTER TABLE `az_document_type`
  MODIFY `id_az_document_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_eps`
--
ALTER TABLE `az_eps`
  MODIFY `id_az_eps` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_icon`
--
ALTER TABLE `az_icon`
  MODIFY `id_az_icon` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_campaign_messaging_type_provider`
--
ALTER TABLE `az_inner_campaign_messaging_type_provider`
  MODIFY `id_az_inner_campaign_messaging_type_provider` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_campaign_user`
--
ALTER TABLE `az_inner_campaign_user`
  MODIFY `id_az_inner_campaign_user` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_icon_menu_role`
--
ALTER TABLE `az_inner_icon_menu_role`
  MODIFY `id_az_inner_icon_menu_role` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  MODIFY `id_az_inner_role_user` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_interactive_voice_response`
--
ALTER TABLE `az_interactive_voice_response`
  MODIFY `id_az_interactive_voice_response` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_level_study`
--
ALTER TABLE `az_level_study`
  MODIFY `id_az_level_study` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_menu`
--
ALTER TABLE `az_menu`
  MODIFY `id_az_menu` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_messaging_type`
--
ALTER TABLE `az_messaging_type`
  MODIFY `id_az_messaging_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_neighborhood`
--
ALTER TABLE `az_neighborhood`
  MODIFY `id_az_neighborhood` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_pension`
--
ALTER TABLE `az_pension`
  MODIFY `id_az_pension` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_personal_type`
--
ALTER TABLE `az_personal_type`
  MODIFY `id_az_personal_type` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_provider`
--
ALTER TABLE `az_provider`
  MODIFY `id_az_provider` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_role`
--
ALTER TABLE `az_role`
  MODIFY `id_az_role` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `az_user`
--
ALTER TABLE `az_user`
  MODIFY `id_az_user` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `az_brand`
--
ALTER TABLE `az_brand`
  ADD CONSTRAINT `az_brand_ibfk_1` FOREIGN KEY (`v_id_az_category_brand`) REFERENCES `az_category_brand` (`id_az_category_brand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_campaign`
--
ALTER TABLE `az_campaign`
  ADD CONSTRAINT `az_campaign_ibfk_1` FOREIGN KEY (`id_az_category_campaign`) REFERENCES `az_category_campaign` (`id_az_category_campaign`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_change_diadem`
--
ALTER TABLE `az_change_diadem`
  ADD CONSTRAINT `az_change_diadem_ibfk_1` FOREIGN KEY (`v_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_control_diadem`
--
ALTER TABLE `az_control_diadem`
  ADD CONSTRAINT `az_control_diadem_ibfk_1` FOREIGN KEY (`v_id_az_brand`) REFERENCES `az_brand` (`id_az_brand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_control_diadem_ibfk_2` FOREIGN KEY (`v_id_az_provider`) REFERENCES `az_provider` (`id_az_provider`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_data_personal`
--
ALTER TABLE `az_data_personal`
  ADD CONSTRAINT `az_data_personal_ibfk_1` FOREIGN KEY (`v_id_az_document_type`) REFERENCES `az_document_type` (`id_az_document_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_data_personal_ibfk_2` FOREIGN KEY (`v_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_icon`
--
ALTER TABLE `az_icon`
  ADD CONSTRAINT `az_icon_ibfk_1` FOREIGN KEY (`v_id_az_category_icon`) REFERENCES `az_category_icon` (`id_az_category_icon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_campaign_messaging_type_provider`
--
ALTER TABLE `az_inner_campaign_messaging_type_provider`
  ADD CONSTRAINT `az_inner_campaign_messaging_type_provider_ibfk_1` FOREIGN KEY (`v_id_az_campaign`) REFERENCES `az_campaign` (`id_az_campaign`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_campaign_messaging_type_provider_ibfk_2` FOREIGN KEY (`v_id_az_messaging_type`) REFERENCES `az_messaging_type` (`id_az_messaging_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_campaign_messaging_type_provider_ibfk_3` FOREIGN KEY (`v_id_az_provider`) REFERENCES `az_provider` (`id_az_provider`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_campaign_user`
--
ALTER TABLE `az_inner_campaign_user`
  ADD CONSTRAINT `az_inner_campaign_user_ibfk_1` FOREIGN KEY (`v_id_az_campaign`) REFERENCES `az_campaign` (`id_az_campaign`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_campaign_user_ibfk_2` FOREIGN KEY (`v_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_icon_menu_role`
--
ALTER TABLE `az_inner_icon_menu_role`
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_1` FOREIGN KEY (`v_id_az_icon`) REFERENCES `az_icon` (`id_az_icon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_2` FOREIGN KEY (`v_id_az_menu`) REFERENCES `az_menu` (`id_az_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_icon_menu_role_ibfk_3` FOREIGN KEY (`v_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_inner_role_user`
--
ALTER TABLE `az_inner_role_user`
  ADD CONSTRAINT `az_inner_role_user_ibfk_1` FOREIGN KEY (`v_id_az_role`) REFERENCES `az_role` (`id_az_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `az_inner_role_user_ibfk_2` FOREIGN KEY (`v_id_az_user`) REFERENCES `az_user` (`id_az_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `az_provider`
--
ALTER TABLE `az_provider`
  ADD CONSTRAINT `az_provider_ibfk_1` FOREIGN KEY (`v_id_az_category_provider`) REFERENCES `az_category_provider` (`id_az_category_provider`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
