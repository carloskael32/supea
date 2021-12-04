-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-08-2018 a las 18:29:20
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Crea la Base de datos: `supea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(15) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `clave` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `clave`, `usuario`, `nivel`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador del Sistema', 100),
('gusano', 'ec1ade06eacbae9424159211a63bb96587d109c6', 'Virus del sistema', 100),
('reportes', '7152a0c02066cf0b52fd70686a15f2bc9c4099cc', 'Usuario Reportes del Sistema', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;