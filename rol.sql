-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2022 a las 04:19:39
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Doctor'),
(3, 'Aux.Veterinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_doctor`
--

CREATE TABLE `db_doctor` (
  `id` int(30) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `edad` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `id_documento` int(30) NOT NULL,
  `cedula` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_sexo` int(30) NOT NULL,
  `id_estado` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `db_doctor`
--

INSERT INTO `db_doctor` (`id`, `nombre`, `apellido`, `edad`, `telefono`, `id_documento`, `cedula`, `correo`, `contrasena`, `id_cargo`, `fecha_nacimiento`, `id_sexo`, `id_estado`) VALUES
(1, 'Nicolas', 'Zapata', '23', '3182312343', 1, '79536476', 'nizapata@gmail.com', '12345678', 2, '1993-06-16', 3, 1),
(2, 'Jovany', 'Zabaleta', '52', '3042622362', 1, '77033558', 'jonyzaza69@gmail.com', '123456', 3, '1969-01-15', 3, 1),
(3, 'Ana Maria', 'Torres', '22', '3153505460', 1, '1015479746', 'anamariatorres@gmail.com', '123456', 2, '1999-02-18', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_usuarios`
--

CREATE TABLE `db_usuarios` (
  `id` int(30) NOT NULL,
  `nombre_mascota` varchar(250) NOT NULL,
  `nombre_propietario` varchar(250) NOT NULL,
  `edad_mascota` varchar(250) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `id_raza` int(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `nombre_raza` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `rh` varchar(30) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_sexo` int(30) NOT NULL,
  `id_estado` int(30) NOT NULL,
  `descripcion_ingreso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `db_usuarios`
--

INSERT INTO `db_usuarios` (`id`, `nombre_mascota`, `nombre_propietario`, `edad_mascota`, `telefono`, `id_raza`, `cedula`, `nombre_raza`, `direccion`, `rh`, `correo`, `fecha_nacimiento`, `id_sexo`, `id_estado`, `descripcion_ingreso`) VALUES
(8, 'Dakota', 'Nicolas', '6', '3208967644', 1, '1015471830', 'Golden Retriver', 'Cra 106 b # 69b- 62', 'B+', 'nicolases97@hotmail.com', '2021-06-11', 2, 1, 'Validacion dentadura'),
(9, 'Mini', 'Johan', '60', '3208967829', 2, '1015471826', 'Border Collie', 'Cra 106 b # 69b- 39', 'A+', 'nicolases98@hotmail.com', '2016-02-18', 2, 1, 'Vacunas'),
(13, 'Moli', 'Jenny', '36', '311896733', 3, '79536476', 'Blanco con negro', 'Calle 80 # 123-12', 'A+', 'jenny@gmail.com', '2019-07-12', 2, 1, 'Vacunas'),
(14, 'Itachi', 'Rodolfo', '18', '3115676432', 1, '1011245342', 'Pitbull', 'Cra 80 # 23-30', 'A+', 'rodolfo@gmail.com', '1996-06-12', 1, 1, 'BaÃ±o de mascota'),
(15, 'Denver', 'Carmen Rodriguez', '12', '3203316578', 1, '1110237463', 'Border Collie', 'Cra 80 # 11-23', 'A+', 'carmen@gmail.com', '1994-02-23', 1, 1, 'Desparacitacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id` int(30) NOT NULL,
  `tipo_documento` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `tipo_documento`) VALUES
(1, 'C.C'),
(2, 'C.E'),
(3, 'PASSPORT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(30) NOT NULL,
  `estado` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_repro`
--

CREATE TABLE `estado_repro` (
  `id` int(30) NOT NULL,
  `estado_reproductivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_repro`
--

INSERT INTO `estado_repro` (`id`, `estado_reproductivo`) VALUES
(1, 'Castrado'),
(2, 'Entero'),
(3, 'Gestacion'),
(4, 'Lactancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_medicamento`
--

CREATE TABLE `ingreso_medicamento` (
  `id` int(30) NOT NULL,
  `uid` int(30) NOT NULL,
  `medicamento` varchar(250) NOT NULL,
  `presentacion` varchar(250) NOT NULL,
  `dosis` varchar(250) NOT NULL,
  `via` varchar(250) NOT NULL,
  `duracion` varchar(250) NOT NULL,
  `fecha_medicamento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso_medicamento`
--

INSERT INTO `ingreso_medicamento` (`id`, `uid`, `medicamento`, `presentacion`, `dosis`, `via`, `duracion`, `fecha_medicamento`) VALUES
(1, 1, 'Zoo Calcin', 'Suspension', '120 ML', 'Oral', '3 meses', '2021-12-17 04:58:36'),
(2, 1, 'Aquadent', 'Suspension', '1 Copa semanal', 'Oral', 'Duracion del frasco', '2021-12-17 05:04:39'),
(3, 2, 'Naxpet', 'Suspension', '20', 'Oral', '2 ml cada 12 horas', '2022-01-06 03:55:40'),
(4, 33, 'Meloxicam', 'Tabletas', '2', 'Oral', '2ml cada 12 horas', '2022-01-26 01:09:56'),
(10, 33, 'Tratobes', 'Capsulas', '20', 'Oral', '1 capsula diaria', '2022-02-04 02:13:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_nuevo`
--

CREATE TABLE `ingreso_nuevo` (
  `id` int(30) NOT NULL,
  `uid` int(30) NOT NULL,
  `motivo_ing` varchar(250) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso_nuevo`
--

INSERT INTO `ingreso_nuevo` (`id`, `uid`, `motivo_ing`, `fecha`) VALUES
(1, 2, 'Revision de vista', '2021-12-14 01:52:28'),
(2, 2, 'Toma de temperatura', '2021-12-14 01:52:45'),
(3, 2, 'Toma de presion', '2021-12-14 01:53:00'),
(4, 2, 'Validacion peso', '2021-12-14 01:53:14'),
(5, 2, 'Toma de muestras para laboratorio', '2021-12-14 01:53:36'),
(6, 2, 'Aplicacion vacuna', '2021-12-14 01:54:14'),
(7, 1, 'Toma de temperatura', '2021-12-15 02:19:26'),
(8, 1, 'Toma de presion', '2021-12-14 02:13:57'),
(9, 1, 'Validacion Peso', '2021-12-17 02:19:06'),
(10, 1, 'Revision de visita', '2021-12-18 03:41:31'),
(11, 2, 'Dolor de estomago', '2022-01-06 03:57:24'),
(12, 33, 'RevisiÃ³n de dentadura.', '2022-01-26 04:10:53'),
(13, 33, 'Revision estado fisico y de peso.', '2022-02-04 02:19:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedencia`
--

CREATE TABLE `procedencia` (
  `id` int(30) NOT NULL,
  `des_procedencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procedencia`
--

INSERT INTO `procedencia` (`id`, `des_procedencia`) VALUES
(1, 'Urbana'),
(2, 'Rural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id` int(30) NOT NULL,
  `raza` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id`, `raza`) VALUES
(1, 'Raza'),
(2, 'Cruce'),
(3, 'Criollo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(30) NOT NULL,
  `sexo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `sexo`) VALUES
(1, 'Macho'),
(2, 'Hembra'),
(3, 'Masculino'),
(4, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`, `id_cargo`) VALUES
(1, 'Administrador', 'Administrador', '123456', 1),
(2, 'Doctor', 'Doctor', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_db`
--

CREATE TABLE `usuarios_db` (
  `uid` int(30) NOT NULL,
  `nombre_mascota` varchar(250) NOT NULL,
  `id_raza` int(30) NOT NULL,
  `nombre_raza` varchar(250) NOT NULL,
  `id_sexo` int(30) NOT NULL,
  `edad_mascota` varchar(250) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `senales` varchar(250) NOT NULL,
  `id_procedencia` int(30) NOT NULL,
  `nombre_propietario` varchar(250) NOT NULL,
  `cedula` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `estrato` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `ocupacion` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `id_estado` int(30) NOT NULL,
  `descripcion_ingreso` varchar(250) NOT NULL,
  `fecha_parvo` date DEFAULT NULL,
  `fecha_tripe` date DEFAULT NULL,
  `fecha_rabia` date DEFAULT NULL,
  `fecha_otra` date DEFAULT NULL,
  `otra_vacuna` varchar(250) DEFAULT NULL,
  `alergias` varchar(250) NOT NULL,
  `cirugias` varchar(250) NOT NULL,
  `antecedentes` varchar(250) NOT NULL,
  `id_repro` int(30) NOT NULL,
  `pulso` varchar(250) NOT NULL,
  `temperatura` varchar(250) NOT NULL,
  `peso` varchar(250) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_db`
--

INSERT INTO `usuarios_db` (`uid`, `nombre_mascota`, `id_raza`, `nombre_raza`, `id_sexo`, `edad_mascota`, `fecha_nacimiento`, `senales`, `id_procedencia`, `nombre_propietario`, `cedula`, `direccion`, `estrato`, `ciudad`, `telefono`, `ocupacion`, `correo`, `id_estado`, `descripcion_ingreso`, `fecha_parvo`, `fecha_tripe`, `fecha_rabia`, `fecha_otra`, `otra_vacuna`, `alergias`, `cirugias`, `antecedentes`, `id_repro`, `pulso`, `temperatura`, `peso`, `fecha_registro`) VALUES
(1, 'Dakota', 1, 'Golden Retriver', 2, '7', '2021-05-11', 'Mancha en pata derecha', 1, 'Nicolas Zapata', '1015471830', 'Cra 106b #69b-62', '2', 'Bogota', '3208967644', 'Estudiante', 'nizapata97@gmail.com', 1, 'Revision de dentadura y validacion estado de salud.', '2021-11-04', '2021-11-18', '0000-00-00', '2021-11-27', 'Vitaminas Complejo B', 'N/A', 'N/A', 'N/A', 2, '24-30', '38', '15', '2022-02-04 03:32:14'),
(2, 'Mini', 1, 'Border Colie', 2, '60', '2017-07-19', 'Sin diente delanteros', 1, 'Johan Fontecha', '102342389', 'Calle 105d # 23-70', '3', 'Bogota', '3218974563', 'Instructor Canino', 'johan-fon@gmail.com', 1, 'Paracitos en el estomago', '2017-11-08', '2017-11-14', '2017-11-28', '2021-02-16', 'Vitaminas', 'N/A', 'N/A', 'N/A', 2, '110-48', '38', '23', '2022-01-06 01:46:49'),
(33, 'Federico', 3, 'Criollo', 1, '12', '2021-01-19', 'Mancha blanca en el pecho', 2, 'Nicolas Zapata', '1015471830', 'Cra 106b #69b-62', '2', 'Bogota', '3208967644', 'Estudiante', 'nizapata97@gmail.com', 1, 'Revision de vacunas y desparasitacion', '2021-10-06', '2021-10-10', '2021-11-10', '0000-00-00', 'N/A', 'N/A', 'N/A', 'N/A', 1, '112-23', '38', '20', '2022-02-04 03:33:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `db_doctor`
--
ALTER TABLE `db_doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sexo` (`id_sexo`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `db_usuarios`
--
ALTER TABLE `db_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_repro`
--
ALTER TABLE `estado_repro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso_medicamento`
--
ALTER TABLE `ingreso_medicamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`) USING BTREE;

--
-- Indices de la tabla `ingreso_nuevo`
--
ALTER TABLE `ingreso_nuevo`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_cedula` (`uid`);

--
-- Indices de la tabla `procedencia`
--
ALTER TABLE `procedencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `usuarios_db`
--
ALTER TABLE `usuarios_db`
  ADD PRIMARY KEY (`uid`) USING BTREE,
  ADD KEY `id_raza` (`id_raza`),
  ADD KEY `id_sexo` (`id_sexo`),
  ADD KEY `id_procedencia` (`id_procedencia`),
  ADD KEY `id_repro` (`id_repro`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `db_doctor`
--
ALTER TABLE `db_doctor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `db_usuarios`
--
ALTER TABLE `db_usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_repro`
--
ALTER TABLE `estado_repro`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ingreso_medicamento`
--
ALTER TABLE `ingreso_medicamento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ingreso_nuevo`
--
ALTER TABLE `ingreso_nuevo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `procedencia`
--
ALTER TABLE `procedencia`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios_db`
--
ALTER TABLE `usuarios_db`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `db_doctor`
--
ALTER TABLE `db_doctor`
  ADD CONSTRAINT `db_doctor_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `db_doctor_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_doctor_ibfk_5` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `db_doctor_ibfk_6` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingreso_medicamento`
--
ALTER TABLE `ingreso_medicamento`
  ADD CONSTRAINT `ingreso_medicamento_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `usuarios_db` (`uid`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_db`
--
ALTER TABLE `usuarios_db`
  ADD CONSTRAINT `usuarios_db_ibfk_1` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_db_ibfk_2` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_db_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_db_ibfk_4` FOREIGN KEY (`id_repro`) REFERENCES `estado_repro` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_db_ibfk_5` FOREIGN KEY (`id_procedencia`) REFERENCES `procedencia` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
