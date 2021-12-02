-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 07:14:24
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinariadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendar citas`
--

CREATE TABLE `agendar citas` (
  `id` int(9) NOT NULL,
  `nom_cliente` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tlfno_cliente` bigint(13) NOT NULL,
  `correo_cliente` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mcota_especie_raza` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad_mascota` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_cita` date NOT NULL,
  `motivo` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `agendar citas`
--

INSERT INTO `agendar citas` (`id`, `nom_cliente`, `tlfno_cliente`, `correo_cliente`, `mcota_especie_raza`, `edad_mascota`, `fecha_cita`, `motivo`) VALUES
(2, 'ALBERÚ	GÓMEZ JOSEFINA', 6564892467, 'josefinagomez@gmail.com', 'Pastor Alemán', '5 años', '2021-12-03', 'Desparacitación'),
(3, 'ALMEDA VALDÉS PALOMA', 6567821268, 'palomavaldez@gmail.com', 'Perro Chihuahua', '3 años', '2021-12-04', 'Presenta síntomas de rabia.'),
(4, 'AGUILAR NAVARRO SARA GLORIA', 6564710938, 'sarita228@gmail.com', 'Cotorro Argentino', '10 años', '2021-12-10', 'Revisión rutinaria.'),
(5, 'ARELLANES GARCÍA MARÍA ', 6562452672, 'mariagarcia87@gmail.com', 'Gato Siberiano', '7 años', '2022-01-08', 'Desparasitación.'),
(7, 'Jamila Itzel', 6564637880, 'jamilaitzelcastillop19.cb128@uemstis.sems.gob.mx', 'Gato siames', '2 años', '2021-12-09', 'Revisión rutinaria.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(9) NOT NULL,
  `apellido paterno` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido materno` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nombre(s)` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `correo` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` bigint(13) NOT NULL,
  `domicilio` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `apellido paterno`, `apellido materno`, `Nombre(s)`, `fecha de nacimiento`, `correo`, `telefono`, `domicilio`) VALUES
(1, 'ARTEAGA 	 	', 'GÓMEZ', 'ANA CRISTINA', '1991-12-11', 'anacristi@gmail.com', 6567482298, 'AV. 20 DE NOVIEMBRE NO 1320'),
(2, 'ASTIAZARÁN 		', 'GARCÍA ', 'HUMBERTO', '2000-06-06', 'humbertogarcia@gmail.com', 6568792356, 'CALLE AGUSTIN LARA NO. 69-B'),
(3, 'ÁVALOS		', 'DÍAZ', 'ESPERANZA', '1989-04-05', 'esperanza1989@gmail.com', 6567782092, 'AV. INDEPENDENCIA NO. 779'),
(4, 'ÁVILA		', 'FUNES', 'JOSÉ ALBERTO', '1996-08-01', 'josealbertofunes@gmail.com', 6562826521, 'CARRETERA A LOMA ALTA S/N.'),
(5, 'BÁEZ 		', 'SALDAÑA ', 'ALEJANDRA', '2002-10-08', 'saldañaalejandra@gmail.com', 6568762734, 'AV. 20 DE NOVIEMBRE NO. 1060');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra en linea`
--

CREATE TABLE `compra en linea` (
  `id` int(9) NOT NULL,
  `nom_cliente` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nom_producto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tlfno_cliente` bigint(13) NOT NULL,
  `direccion de entrega` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo postal` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `metodo de pago` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha de compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `compra en linea`
--

INSERT INTO `compra en linea` (`id`, `nom_cliente`, `nom_producto`, `tlfno_cliente`, `direccion de entrega`, `codigo postal`, `metodo de pago`, `fecha de compra`) VALUES
(1, 'CALDERÓN COLMENERO JUAN EBERTO', 'Fuente agua para gatos.', 6564137896, 'AV. 5 DE MAYO NO. 1652', '86457', 'Tarjeta de credito.', '2021-05-04'),
(2, 'CALDERÓN GARCIDUEÑAS ANA LAURA', 'Cama para gatos y perros pequeños.', 6564329867, 'AV. INDEPENDENCIA NO. 748', '73509', 'Tarjeta de credito.', '2021-05-28'),
(3, 'CAMACHO ARROYO IGNACIO', 'Alimentador automático para gatos.', 6564390876, 'AV. INDEPENDENCIA NO. 985-A', '65435', 'Pago en oxxo.', '2021-09-03'),
(4, 'CAMPILLO SERRANO CARLOS DANIEL', 'Cesta para perros.', 6567743025, 'MATAMOROS NO 149', '64509', 'Tarjeta de debito.', '2021-09-18'),
(5, 'CARNEVALE CANTONI ALESSANDRA', 'Collar pony para mascotas.', 6563240998, 'CALLE OCAMPO NO 14', '74590', 'Pago en oxxo.', '2021-09-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(2) NOT NULL,
  `apellido paterno` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido materno` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre(s)` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `curp` varchar(18) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo electronico` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estudios` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `apellido paterno`, `apellido materno`, `nombre(s)`, `fecha de nacimiento`, `curp`, `correo electronico`, `estudios`) VALUES
(1, 'Esparza		', 'Espinoza	', 'Mateo Javier	', '1997-06-12', 'EAEM970612HCHSST87', '3sparza3spinoza@gmail.com', 'Cirugía'),
(2, 'Carrillo				', 'Cárdenas', 'Miguel', '1994-03-10', 'CACM950310HCHRÁG46', 'carrillocardenas@gmail.com', 'Oncología'),
(3, 'Castillo				', 'Perez', 'Jamila', '2004-10-12', 'CAPJ041012MCHSRMA6', 'jamilaitzelcastillo16yold@gmail.com', 'Fisioterapia'),
(4, 'Aguilar			', 'Alvarez	', 'Renata', '1992-09-14', 'AUAR920914MCHGLN32', 'renatalvarez@gmail.com', 'Rehabilitación'),
(5, 'Castillo				', 'Alvarez', 'Renata', '1992-09-14', 'ACAR920914MCHGLN32', 'castilloalvares123@gmail.com', 'Fauna Silvestre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendar citas`
--
ALTER TABLE `agendar citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra en linea`
--
ALTER TABLE `compra en linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendar citas`
--
ALTER TABLE `agendar citas`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `compra en linea`
--
ALTER TABLE `compra en linea`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
