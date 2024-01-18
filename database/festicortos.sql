-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2024 a las 17:12:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `festicortos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cortos`
--

CREATE TABLE `cortos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `director` varchar(40) NOT NULL,
  `sinapsis` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cortos`
--

INSERT INTO `cortos` (`id`, `titulo`, `director`, `sinapsis`) VALUES
(1, 'El corto más cortante', 'María Martín', 'Lorem ipsum dolor sit amet, consectetur\n            adipiscing elit, sed do eiusmod tempor incididunt ut labore\n            et dolore magna aliqua.'),
(2, 'Sin más', 'Pepa Pérez', 'Lorem ipsum dolor sit amet, consectetur\n            adipiscing elit, sed do eiusmod tempor incididunt ut labore\n            et dolore magna aliqua.'),
(3, 'Más o menos', 'Juan Jiménez', 'Lorem ipsum dolor sit amet, consectetur\n            adipiscing elit, sed do eiusmod tempor incididunt ut labore\n            et dolore magna aliqua.'),
(4, 'Tira pa\' ya', 'Sofía Sofín', 'Lorem ipsum dolor sit amet, consectetur\n            adipiscing elit, sed do eiusmod tempor incididunt ut labore\n            et dolore magna aliqua.'),
(5, 'Miedo', 'Pepe Parrilla', 'Lorem ipsum dolor sit amet, consectetur\n            adipiscing elit, sed do eiusmod tempor incididunt ut labore\n            et dolore magna aliqua.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cortos`
--
ALTER TABLE `cortos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
