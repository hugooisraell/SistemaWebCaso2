-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2025 a las 06:24:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaeducativo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `telefono`, `apellido`, `fecha_nacimiento`) VALUES
(1, 'Jorge', 'jorge2025@ejemplo.com', '0945683425', 'Lopez', '2001-06-20'),
(2, 'Maria', 'maria72@ejemplo.com', '0991242566', 'Catañeda', '2004-10-06'),
(3, 'Ximena', 'xime_na22@ejemplo.com', '0932265242', 'Ximénez', '2008-08-22'),
(5, 'Juan', 'juan.perez@example.com', '0991234567', 'Pérez', '1990-03-15'),
(6, 'Ana', 'ana.gonzalez@example.com', '0987654321', 'González', '1985-07-20'),
(7, 'Carlos', 'carlos.martinez@example.com', '0976543210', 'Martínez', '1992-11-05'),
(8, 'María', 'maria.lopez@example.com', '0965432109', 'López', '1994-01-22'),
(9, 'Pedro', 'pedro.ramirez@example.com', '0954321098', 'Ramírez', '1988-09-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `hora`, `fecha`, `categoria`, `descripcion`, `lugar`) VALUES
(4, 'Conferencia de PHP', '10:30:00', '2024-12-30', 'Desarrollo Web', 'Una conferencia sobre desarrollo web con PHP', 'Auditorio Central'),
(7, 'Cyber Security', '19:00:00', '2025-01-10', 'Tecnologia', 'Conferencia de seguridad informática', 'Auditorio C2'),
(9, 'Reunión Sistemas', '16:00:00', '2025-02-06', 'Reunión', 'Reunión sobre desarrollo de una Base de Datos', 'Auditorio Central'),
(10, 'Reunión de HCI', '19:00:00', '2025-01-15', 'Desarrollo GUI', 'Reunión sobre desarrollo GUI', 'Aula Virtual'),
(11, 'Diseño de Interfaz', '20:00:00', '2025-02-06', 'Frontend 1', 'Charla sobre CSS y Boostrap', 'Aula 38'),
(12, 'Cyber Security', '17:30:00', '2025-02-28', 'Tecnologia', 'Conferencia de seguridad informática', 'Auditorio C2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` text DEFAULT NULL,
  `detalle` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id`, `nombre`, `direccion`, `detalle`) VALUES
(4, 'Quito', 'Av. Amazonas y Naciones Unidas', 'Capital de Ecuador, conocida por su bien preservado centro histórico'),
(5, 'Guayaquil', 'Malecón 2000, Av. 9 de Octubre', 'La ciudad más grande de Ecuador, puerto principal del país'),
(6, 'Cuenca', 'Calle Simón Bolívar, Centro Histórico', 'Ciudad colonial y culturalmente rica, conocida por su arquitectura histórica'),
(7, 'Ambato', 'Av. Cevallos, Barrio Ficoa', 'Ciudad conocida como la \"Ciudad de las Flores y las Frutas\"'),
(8, 'Manta', 'Av. 9 de Mayo, Frente a la playa', 'Puerto pesquero y turístico de Ecuador, conocido por sus playas'),
(9, 'Universidad Central del Ecuador', 'Av. América, Quito', 'Una de las universidades más antiguas y prestigiosas del país'),
(10, 'Universidad de Guayaquil', 'Campus central, Guayaquil', 'Una de las principales universidades públicas de Ecuador'),
(11, 'Universidad Politécnica Salesiana', 'Av. 3 de Julio, Quito', 'Universidad católica, ofrece programas técnicos y profesionales'),
(12, 'Universidad de Cuenca', 'Calle Larga, Cuenca', 'Universidad pública y autónoma, importante en la región sur del país'),
(13, 'Pontificia Universidad Católica del Ecuador', 'Av. 12 de Octubre, Quito', 'Una de las universidades más importantes y prestigiosas del Ecuador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
