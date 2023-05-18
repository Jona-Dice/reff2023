-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2023 a las 21:11:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reff`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fechahecho` date NOT NULL,
  `nombrepadres` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `dui` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `solicitud` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `otros` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `fechahecho`, `nombrepadres`, `dui`, `solicitud`, `otros`, `observaciones`) VALUES
(1, '', '0000-00-00', '', '', '', '', ''),
(2, 'Jonathan Orlando Moran Olivorio', '2020-02-15', 'Ana Luz Olivorio Martinez', '1234567899', '', 'CarnetMenoridad', 'esto es un ejemplo'),
(3, 'Jonathan Orlando Moran Olivorio', '2020-02-15', 'Ana Luz Olivorio Martinez', '1234567899', '', 'CarnetMenoridad', 'esto es un ejemplo'),
(4, 'Jonathan Orlando Moran Olivorio', '2023-05-04', 'Ana Luz Olivorio Martinez', '1234567899', '', 'AutentidaFirma', '454'),
(5, 'Jonathan Orlando Moran Olivorio', '2023-05-04', 'Ana Luz Olivorio Martinez', '1234567899', '', 'AutentidaFirma, CertificacionC', '454'),
(6, 'Jonathan Orlando Moran Olivorio', '2023-05-04', 'Ana Luz Olivorio Martinez', '1234567899', '', 'AutentidaFirma, CertificacionC', '454df'),
(7, 'Jonathan Orlando Moran Olivorio', '2023-05-04', 'Ana Luz Olivorio Martinez', '1234567899', '', 'AutentidaFirma, CertificacionC', '454df'),
(8, 'Jonathan Orlando Moran Olivorio', '2023-05-04', 'Ana Luz Olivorio Martinez', '1234567899', '', 'AutentidaFirma, CertificacionC', '454dfjkh');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
