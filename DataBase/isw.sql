-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-12-2021 a las 03:25:46
-- Versión del servidor: 5.7.36-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `isw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `id_acta` int(11) NOT NULL,
  `titulo_acta` varchar(60) DEFAULT NULL,
  `contenido_acta` varchar(5000) DEFAULT NULL,
  `fecha_acta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`id_acta`, `titulo_acta`, `contenido_acta`, `fecha_acta`) VALUES
(1, 'Acta de reunion de apertura', 'Este acta es para mostrar que el sistema funciona', '2021-10-13'),
(8, 'Acta sobre la colecta', 'Nos fue mal, suerte a la proxima', '2021-12-14'),
(9, 'Prueba 1', 'Nos fue bien, el viejito pascuero no llegó curado', '2021-12-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administra`
--

CREATE TABLE `administra` (
  `id_usuario` varchar(40) NOT NULL,
  `id_comunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administra`
--

INSERT INTO `administra` (`id_usuario`, `id_comunidad`) VALUES
('2cbffa42d5fb1f79fa69f2471a376c49', 1),
('e13397a3caaf5cfc080bece06665601f', 1),
('2cbffa42d5fb1f79fa69f2471a376c49', 2),
('2cbffa42d5fb1f79fa69f2471a376c49', 3),
('2cbffa42d5fb1f79fa69f2471a376c49', 7),
('2cbffa42d5fb1f79fa69f2471a376c49', 8),
('80c2ceec9702b957f2f92ad7507f1908', 8),
('2cbffa42d5fb1f79fa69f2471a376c49', 9),
('2cbffa42d5fb1f79fa69f2471a376c49', 11),
('2cbffa42d5fb1f79fa69f2471a376c49', 29),
('80c2ceec9702b957f2f92ad7507f1908', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `id_comunidad` int(11) NOT NULL,
  `nombre_comunidad` varchar(60) DEFAULT NULL,
  `descripcion_comunidad` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id_comunidad`, `nombre_comunidad`, `descripcion_comunidad`) VALUES
(1, 'JJVV', 'Junta de Vecinos'),
(2, 'Club de futbol Real Palmilla', 'Real Palmilla FC'),
(3, 'Comunidad Perritos de la calle', 'Una comunidad para que se registren los perritos de la calle'),
(7, 'Comunidad Pablo Montoya', '<3'),
(8, 'comunidad Metalito', 'la mas pulenta de la población'),
(9, 'Futbol club Talcawanders', 'el equipo de los jeques'),
(11, 'comunidad para entrega', 'esta comunidad es para sample de entrega'),
(30, 'Comunidad Metaleros x Boric', 'Arbolito para todos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `id_usuario` varchar(40) NOT NULL,
  `id_comunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pertenece`
--

INSERT INTO `pertenece` (`id_usuario`, `id_comunidad`) VALUES
('71d2c60adb5498e5747639d7d758e050', 1),
('80c2ceec9702b957f2f92ad7507f1908', 1),
('e13397a3caaf5cfc080bece06665601f', 2),
('e13397a3caaf5cfc080bece06665601f', 3),
('2cbffa42d5fb1f79fa69f2471a376c49', 7),
('80c2ceec9702b957f2f92ad7507f1908', 8),
('80c2ceec9702b957f2f92ad7507f1908', 9),
('80c2ceec9702b957f2f92ad7507f1908', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registra`
--

CREATE TABLE `registra` (
  `id_reunion` int(11) NOT NULL,
  `id_acta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registra`
--

INSERT INTO `registra` (`id_reunion`, `id_acta`) VALUES
(1, 1),
(2, 7),
(24, 8),
(27, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE `reunion` (
  `id_reunion` int(11) NOT NULL,
  `tema_reunion` varchar(60) DEFAULT NULL,
  `fecha_reunion` date DEFAULT NULL,
  `hora_reunion` varchar(5) DEFAULT NULL,
  `ubicacion_reunion` varchar(50) DEFAULT NULL,
  `descripcion_reunion` varchar(1000) DEFAULT NULL,
  `id_comunidad` int(11) DEFAULT NULL,
  `id_usuario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reunion`
--

INSERT INTO `reunion` (`id_reunion`, `tema_reunion`, `fecha_reunion`, `hora_reunion`, `ubicacion_reunion`, `descripcion_reunion`, `id_comunidad`, `id_usuario`) VALUES
(6, 'Lomo Toros', '2021-10-14', '12:30', 'Online', 'Pablo Montoya', 7, '45f321b12939156dd082181bddebf119'),
(8, 'prueba de reunion en metalito', '2022-12-12', '12:30', 'en tu casa', 'probando reunion metalito en el sistema', 8, '45f321b12939156dd082181bddebf119'),
(10, 'reunion prueba de casanueva', '1996-12-12', '12:50', 'en la casa del metal', 'prueba de descripcion reunion creada por casanueva', 1, '80c2ceec9702b957f2f92ad7507f1908'),
(11, 'Reunión - Pablo', '2021-10-18', '19:30', 'Plaza', 'Prueba de reunión', 7, '71d2c60adb5498e5747639d7d758e050'),
(21, 'Testeo 1', '2021-11-10', '20:59', 'Testeo testeo', 'testeo testeo', 8, '80c2ceec9702b957f2f92ad7507f1908'),
(22, 'Titulo prueba', '2021-11-09', '19:55', 'Testeo 1', 'testeo 1', 8, '80c2ceec9702b957f2f92ad7507f1908'),
(24, 'Junta metalera', '2021-12-14', '15:00', 'En la diagonal bio bio', 'Colecta para sobrevivir', 1, '2cbffa42d5fb1f79fa69f2471a376c49'),
(25, 'Peña bailable', '2021-12-15', '17:00', 'Plaza Perú', 'Peña bailable con los metaleros borrachos.', 1, '80c2ceec9702b957f2f92ad7507f1908'),
(26, 'Peña bailable', '2021-12-15', '19:00', 'Plaza Perú', 'Peña bailable con los metaleros borrachos.', 30, '80c2ceec9702b957f2f92ad7507f1908'),
(27, 'Prueba 1', '2021-12-24', '00:08', 'Plaza', 'Navidad en la pobla', 11, '2cbffa42d5fb1f79fa69f2471a376c49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `id_reunion` int(11) NOT NULL,
  `id_comunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiene`
--

INSERT INTO `tiene` (`id_reunion`, `id_comunidad`) VALUES
(3, 1),
(5, 1),
(10, 1),
(17, 1),
(19, 1),
(24, 1),
(25, 1),
(2, 2),
(4, 3),
(16, 3),
(20, 3),
(6, 7),
(7, 7),
(11, 7),
(8, 8),
(18, 8),
(21, 8),
(22, 8),
(27, 11),
(26, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(40) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `clave` varchar(15) DEFAULT NULL,
  `rut` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `clave`, `rut`) VALUES
('04c8374ca18e9921c311c07cc203a71b', 'fruteriaanita@gail.com', 'fruteria anita', '12345', '1-2'),
('2cbffa42d5fb1f79fa69f2471a376c49', 'Test Entrega', 'correo@dump.cl', 'correo12', '16163631-2'),
('311cfc8103c2a5991af938b47f5baece', 'benja.contreras732@gmail.com', 'Benjamin Contreras', '123456', '20.194.416-3'),
('340d5116b6307aef441c61670a23d427', 'Alejo', 'farias@outlook.cl', '1234', '19286932-3'),
('45f321b12939156dd082181bddebf119', 'Alejandro', '1-9', 'farias@8loop.cl', '1234'),
('628421a18cbc17256b5b492e2c79413a', 'correo@123.cl', 'Juan', '12345', '1-3'),
('71d2c60adb5498e5747639d7d758e050', 'Pablo Montoya', 'pablo16mg@gmail.com', '1234', '20-25'),
('7d4b8f68bb49dce427b56affd43edf8c', 'pablo.montoya1801@alumnos.ubiobio.cl', 'Pablo Montoya', 'pm1234', '20.259.152-3'),
('80c2ceec9702b957f2f92ad7507f1908', 'Francisco Ojeda Casanueva', 'ojedacasanueva@gmail.com', '123', '19.533.298-3'),
('e13397a3caaf5cfc080bece06665601f', 'El Pepe', 'benja.contreras732@gmail.com', 'benja123', '9.323.453-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_admin`
--

CREATE TABLE `usuario_admin` (
  `id_usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_admin`
--

INSERT INTO `usuario_admin` (`id_usuario`) VALUES
('2cbffa42d5fb1f79fa69f2471a376c49'),
('45f321b12939156dd082181bddebf119'),
('71d2c60adb5498e5747639d7d758e050'),
('80c2ceec9702b957f2f92ad7507f1908'),
('e13397a3caaf5cfc080bece06665601f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_normal`
--

CREATE TABLE `usuario_normal` (
  `id_usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_normal`
--

INSERT INTO `usuario_normal` (`id_usuario`) VALUES
('04c8374ca18e9921c311c07cc203a71b'),
('0db6ceb634c06cff64381d891ebec875'),
('2cbffa42d5fb1f79fa69f2471a376c49'),
('311cfc8103c2a5991af938b47f5baece'),
('340d5116b6307aef441c61670a23d427'),
('45f321b12939156dd082181bddebf119'),
('628421a18cbc17256b5b492e2c79413a'),
('71d2c60adb5498e5747639d7d758e050'),
('7d4b8f68bb49dce427b56affd43edf8c'),
('80c2ceec9702b957f2f92ad7507f1908'),
('e13397a3caaf5cfc080bece06665601f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`id_acta`);

--
-- Indices de la tabla `administra`
--
ALTER TABLE `administra`
  ADD PRIMARY KEY (`id_usuario`,`id_comunidad`),
  ADD KEY `id_comunidad` (`id_comunidad`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`id_comunidad`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD PRIMARY KEY (`id_usuario`,`id_comunidad`),
  ADD KEY `id_comunidad` (`id_comunidad`);

--
-- Indices de la tabla `registra`
--
ALTER TABLE `registra`
  ADD PRIMARY KEY (`id_reunion`,`id_acta`),
  ADD KEY `id_acta` (`id_acta`);

--
-- Indices de la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`id_reunion`),
  ADD KEY `id_comunidad` (`id_comunidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD PRIMARY KEY (`id_reunion`,`id_comunidad`),
  ADD KEY `id_comunidad` (`id_comunidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_normal`
--
ALTER TABLE `usuario_normal`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `id_acta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `id_comunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `reunion`
--
ALTER TABLE `reunion`
  MODIFY `id_reunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administra`
--
ALTER TABLE `administra`
  ADD CONSTRAINT `administra_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_admin` (`id_usuario`),
  ADD CONSTRAINT `administra_ibfk_2` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`);

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_normal` (`id_usuario`),
  ADD CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`);

--
-- Filtros para la tabla `registra`
--
ALTER TABLE `registra`
  ADD CONSTRAINT `registra_ibfk_1` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`),
  ADD CONSTRAINT `registra_ibfk_2` FOREIGN KEY (`id_acta`) REFERENCES `acta` (`id_acta`);

--
-- Filtros para la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`),
  ADD CONSTRAINT `reunion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_admin` (`id_usuario`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`),
  ADD CONSTRAINT `tiene_ibfk_2` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`);

--
-- Filtros para la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD CONSTRAINT `usuario_admin_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario_normal`
--
ALTER TABLE `usuario_normal`
  ADD CONSTRAINT `usuario_normal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
