-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2025 a las 01:43:41
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
-- Base de datos: `albarracin_anibal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id_domicilio` int(11) NOT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id_domicilio`, `codigo_postal`, `provincia_id`, `localidad_id`) VALUES
(1, 'A1B2C3D4E5', 1, 5),
(2, 'S3J4434PI5', 1, 14),
(3, 'F3H7Q23LN0', 1, 13),
(4, 'F8U12BD98Y', 1, 2),
(5, 'T56H80V12X', 1, 4),
(6, 'UR31GAZ899', 1, 18),
(7, 'A4X55GI018', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `localidad_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `id_provincia`, `localidad_desc`) VALUES
(1, 1, 'Corrientes'),
(2, 1, 'Goya'),
(3, 1, 'Paso de los Libres'),
(4, 1, 'Mercedes'),
(5, 1, 'Bella Vista'),
(6, 1, 'Santo Tomé'),
(7, 1, 'Esquina'),
(8, 1, 'Monte Caseros'),
(9, 1, 'Ituzaingó'),
(10, 1, 'Curuzú Cuatiá'),
(11, 1, 'Santa Lucía'),
(12, 1, 'San Luis del Palmar'),
(13, 1, 'Saladas'),
(14, 1, 'La Cruz'),
(15, 1, 'Alvear'),
(16, 1, 'Empedrado'),
(17, 1, 'Mburucuyá'),
(18, 1, 'Itatí'),
(19, 1, 'Virasoro'),
(20, 1, 'Sauce'),
(21, 1, 'Santa Rosa'),
(22, 1, 'Concepción'),
(23, 1, 'San Roque'),
(24, 1, 'Colonia Liebig'),
(25, 1, 'Yapeyú');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_mensaje` int(11) NOT NULL,
  `mensaje_nombre` varchar(50) NOT NULL,
  `mensaje_email` varchar(100) NOT NULL,
  `mensaje_motivo` varchar(100) NOT NULL,
  `mensaje_consulta` text NOT NULL,
  `mensaje_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_mensaje`, `mensaje_nombre`, `mensaje_email`, `mensaje_motivo`, `mensaje_consulta`, `mensaje_estado`) VALUES
(1, 'Mateo', 'mateomax@gmail.com', 'Consulta sobre el estado de su cuenta', 'Hola, quería saber si mi cuenta ya fue verificada. No recibí ningún correo.', 0),
(2, 'Luciana', 'lucianaSuu@gmail.com', 'Solicitud de cambio de correo electrónico o contraseña', 'Buen día, cambié mi número de teléfono y quiero actualizarlo en mi perfil. ¿Cómo hago?', 1),
(3, 'Lisandro', 'lisandroGio@gmail.com', 'Reporte de un error en la aplicación', 'Estoy teniendo problemas para iniciar sesión. Me dice que la contraseña es incorrecta pero estoy seguro de que es la correcta.', 1),
(4, 'Fabian', 'fabian795@gmail.com', 'Sugerencia de mejora o nueva funcionalidad', 'Estaría bueno que agreguen la opción de notificaciones por WhatsApp para los recordatorios', 1),
(5, 'Maria', 'maria751@gmail.com', 'Consulta sobre horarios o disponibilidad de atención', '¿Cuál es el horario de atención para consultas presenciales en la oficina?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil_desc`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id_provincia` int(11) NOT NULL,
  `provincia_desc` varchar(100) NOT NULL,
  `provincia_capital` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincia`, `provincia_desc`, `provincia_capital`) VALUES
(1, 'Corrientes', 'Corrientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario_nombre` varchar(50) NOT NULL,
  `usuario_apellido` varchar(50) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_direccion_id` int(11) NOT NULL,
  `usuario_telefono` varchar(11) NOT NULL,
  `usuario_password` varchar(200) NOT NULL,
  `usuario_estado` int(11) NOT NULL,
  `perfil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario_nombre`, `usuario_apellido`, `usuario_email`, `usuario_direccion_id`, `usuario_telefono`, `usuario_password`, `usuario_estado`, `perfil_id`) VALUES
(1, 'Anibal', 'Albarracin', 'anibalezkno884@gmail.com', 1, '1234567828', '$2y$10$D0QJ5PbHPJs6m/V./t8aYuFS.q8pRF3GomkB2kOY0HfpOM5pL31mO', 1, 1),
(2, 'Carlos', 'Pereira', 'pereira432F@gmail.com', 2, '3784883140', '$2y$10$Ifb1/oQtZle5lmg.AF8.yOfBxe8SCquCm.WPh9UvPOWE95UQnKEP6', 1, 1),
(3, 'Franco', 'Iturvide', 'iturvide223@gmail.com', 3, '8932888819', '$2y$10$qE90YJr5JG3bTDPnfTYAjOgSGbjfzvTp/Ob5w5IdwtIbU9NLQiQTm', 1, 2),
(4, 'Maria', 'Silva', 'mariaSil751@gmail.com', 4, '3790672188', '$2y$10$jDnvYDEe8Ie.gAvt//f/NuEFZ6MnppZhG79WPkIjev624fC/qFfWu', 1, 2),
(5, 'Pedro', 'Pascussi', 'pascussiKl@gmail.com', 5, '3795782144', '$2y$10$RxOEnkvL0OjJRDdNv7cLDeSeDrBD.laV7bt5Xc7DvuY/yvU7vj20a', 1, 2),
(9, 'Rita Isabel', 'Lezcano', 'lezcano@gmail.com', 6, '0677893929', '$2y$10$twbzcC8HS5HZJhe9bYcsFezagLXNnzE.6PHSUvuNvYV2EJDGDcvT.', 1, 2),
(10, 'Javier', 'Campero', 'javcampero@gmail.com', 7, '3794783333', '$2y$10$2RPlAibAsTc3kTymxPSYfO4nVPp6w7sR0XjB1QtckLhWxifgdvOWm', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `fk_domicilio_localidad` (`provincia_id`,`localidad_id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`,`id_provincia`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`),
  ADD KEY `usuario_direccion_id` (`usuario_direccion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `fk_domicilio_localidad` FOREIGN KEY (`provincia_id`,`localidad_id`) REFERENCES `localidades` (`id_provincia`, `id_localidad`);

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `localidades_ibfk_1` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_provincia`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id_perfil`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`usuario_direccion_id`) REFERENCES `domicilios` (`id_domicilio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
