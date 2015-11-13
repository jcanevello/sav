-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2014 a las 14:41:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sav2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `arc_codigo` varchar(8) NOT NULL,
  `tra_codigo` varchar(8) NOT NULL,
  `arc_nombre` varchar(150) DEFAULT NULL,
  `arc_slug` varchar(20) DEFAULT NULL,
  `usu_usuario` varchar(8) DEFAULT NULL COMMENT 'Indica el usuario que ha cargado el archivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `cur_codigo` varchar(8) NOT NULL,
  `cur_nombre` varchar(150) DEFAULT NULL,
  `cur_creditos` varchar(45) DEFAULT NULL,
  `cur_ciclo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cur_codigo`, `cur_nombre`, `cur_creditos`, `cur_ciclo`) VALUES
('01', 'Diseño de Sistemas', '04', 7),
('02', 'Ingeniería de Software', '04', 8),
('03', 'Arquitectura de Información', '04', 7),
('04', 'Redes', '04', 8),
('05', 'Inteligencia Artificial', '04', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursogrupo_tipo`
--

CREATE TABLE IF NOT EXISTS `cursogrupo_tipo` (
  `cgt_codigo` varchar(8) NOT NULL,
  `cg_codigo` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL COMMENT 'Indice el tipo',
  `usu_usuario` varchar(8) NOT NULL,
  `cgt_dia_clases` varchar(10) DEFAULT NULL,
  `cgt_hora_inicio` varchar(5) DEFAULT NULL,
  `cgt_hora_termino` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursogrupo_tipo`
--

INSERT INTO `cursogrupo_tipo` (`cgt_codigo`, `cg_codigo`, `tab_codigo`, `usu_usuario`, `cgt_dia_clases`, `cgt_hora_inicio`, `cgt_hora_termino`) VALUES
('01', '01', '06', 'diseñoPr', 'Sábado', '', NULL),
('02', '01', '07', 'diseñoPr', 'Viernes', NULL, NULL),
('03', '01', '08', 'diseñoPr', 'Sábado', NULL, NULL),
('04', '02', '06', 'diseñoPr', 'Lunes', NULL, NULL),
('05', '02', '07', 'diseñoPr', 'Lunes', NULL, NULL),
('06', '02', '08', 'proDiseñ', 'Lunes', NULL, NULL),
('07', '03', '06', 'proDiseñ', 'Martes', NULL, NULL),
('08', '03', '07', 'profeDis', 'Martes', NULL, NULL),
('09', '03', '08', 'profeDis', 'Jueves', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_grupo`
--

CREATE TABLE IF NOT EXISTS `curso_grupo` (
  `cg_codigo` varchar(8) NOT NULL,
  `cod_curso` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL COMMENT 'Indica el grupo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_grupo`
--

INSERT INTO `curso_grupo` (`cg_codigo`, `cod_curso`, `tab_codigo`) VALUES
('01', '01', '01'),
('02', '01', '02'),
('03', '01', '03'),
('04', '02', '01'),
('05', '02', '02'),
('06', '02', '03'),
('07', '03', '01'),
('08', '03', '02'),
('09', '04', '01'),
('10', '04', '02'),
('11', '05', '01'),
('12', '05', '02'),
('13', '05', '03'),
('15', '05', '04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `usu_usuario` varchar(8) NOT NULL,
  `cg_codigo` varchar(8) NOT NULL,
  `mat_periodo` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `usu_usuario` varchar(8) NOT NULL,
  `arc_codigo` varchar(8) NOT NULL,
  `not_nota` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `opc_codigo` varchar(8) NOT NULL,
  `opc_nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`opc_codigo`, `opc_nombre`) VALUES
('01', 'trabajos'),
('02', 'evaluacion'),
('03', 'alumnos'),
('04', 'cursos'),
('05', 'matricula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `per_codigo` varchar(8) NOT NULL,
  `per_nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`per_codigo`, `per_nombre`) VALUES
('01', 'Alumno'),
('02', 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_opciones`
--

CREATE TABLE IF NOT EXISTS `perfil_opciones` (
  `per_codigo` varchar(8) NOT NULL,
  `opc_codigo` varchar(8) NOT NULL,
  `pop_nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_tabla`
--

CREATE TABLE IF NOT EXISTS `tabla_tabla` (
  `tab_codigo` varchar(8) NOT NULL,
  `tab_tabla` varchar(100) NOT NULL,
  `tab_nombre` varchar(150) DEFAULT NULL,
  `tab_valor` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_tabla`
--

INSERT INTO `tabla_tabla` (`tab_codigo`, `tab_tabla`, `tab_nombre`, `tab_valor`) VALUES
('01', 'GRUPO', 'Grupo1', 'G1'),
('02', 'GRUPO', 'Grupo2', 'G2'),
('03', 'GRUPO', 'Grupo3', 'G3'),
('04', 'GRUPO', 'Grupo4', 'G4'),
('05', 'GRUPO', 'Grupo5', 'G5'),
('06', 'TIPO', 'Teoría', 'T'),
('07', 'TIPO', 'Laboratorio', 'L'),
('08', 'TIPO', 'Práctica', 'P'),
('09', 'EXTENSION', 'Word', '.doc'),
('10', 'EXTENSION', 'Power Point', '.ppt'),
('11', 'EXTENSION', 'PDF', '.pdf'),
('12', 'TRABAJO', 'Individual', '0'),
('13', 'TRABAJO', 'Grupal', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `tra_codigo` varchar(8) NOT NULL,
  `cgt_codigo` varchar(8) NOT NULL,
  `tra_nombre` varchar(150) DEFAULT NULL,
  `tra_slug` varchar(150) DEFAULT NULL COMMENT 'Guarda un identificador de trabajo para que no se repita el mismo nombre',
  `tra_fecha_limite` varchar(10) DEFAULT NULL,
  `tra_hora_limite` varchar(10) DEFAULT NULL,
  `tra_cantidad_alum` int(11) DEFAULT NULL,
  `tab_codigo` varchar(8) NOT NULL COMMENT 'Código del tipo de trabajo (individual, grupal)',
  `tab_estado_logico` enum('0','1') DEFAULT '1' COMMENT '0 = Borrado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_usuario` varchar(20) NOT NULL,
  `per_codigo` varchar(8) NOT NULL,
  `usu_contrasena` varchar(150) DEFAULT NULL,
  `usu_nombre` varchar(150) DEFAULT NULL,
  `usu_apellido` varchar(150) DEFAULT NULL,
  `tab_codigo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_usuario`, `per_codigo`, `usu_contrasena`, `usu_nombre`, `usu_apellido`, `tab_codigo`) VALUES
('alDiseño', '01', '901184d4dcbc97715998fc91cc33d9e5', 'Victor', 'Anaya', '01'),
('alumnoDiseño', '01', '901184d4dcbc97715998fc91cc33d9e5', 'Carlos', 'Del Rosario', '01'),
('diseñoAl', '01', '7e4f4e1c468e6a7f76b552982e9fe345', 'Juan', 'Perez', '01'),
('diseñoAlumno', '01', '7e4f4e1c468e6a7f76b552982e9fe345', 'José', 'Salazar', '01'),
('diseñoPro', '02', '4d406f0e39ddf430e4b22d52e7bf6650', 'Carlos', 'Zambrano', '01'),
('diseñoProfe', '02', '4d406f0e39ddf430e4b22d52e7bf6650', 'Julio', 'Pari', '01'),
('proDiseño', '02', '9fec78f1b200d622434d736caffef609', 'Nicolas', 'Solar', '01'),
('profeDiseño', '02', '9fec78f1b200d622434d736caffef609', 'Cesar', 'Muñoz', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tabla_tabla`
--

CREATE TABLE IF NOT EXISTS `usuario_tabla_tabla` (
  `tab_codigo` varchar(8) NOT NULL,
  `tab_tabla` varchar(100) NOT NULL,
  `tab_nombre` varchar(150) DEFAULT NULL,
  `tab_valor` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_tabla_tabla`
--

INSERT INTO `usuario_tabla_tabla` (`tab_codigo`, `tab_tabla`, `tab_nombre`, `tab_valor`) VALUES
('01', 'ESTADO', 'Activo', '1'),
('02', 'ESTADO', 'Inactivo', '0'),
('03', 'ESTADO', 'Bloqueado', '-1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
 ADD PRIMARY KEY (`arc_codigo`), ADD KEY `fk_archivo_trabajo1_idx` (`tra_codigo`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`cur_codigo`);

--
-- Indices de la tabla `cursogrupo_tipo`
--
ALTER TABLE `cursogrupo_tipo`
 ADD PRIMARY KEY (`cgt_codigo`), ADD KEY `fk_cursogrupo_tipo_curso_grupo1_idx` (`cg_codigo`), ADD KEY `fk_cursogrupo_tipo_tabla_tabla1_idx` (`tab_codigo`);

--
-- Indices de la tabla `curso_grupo`
--
ALTER TABLE `curso_grupo`
 ADD PRIMARY KEY (`cod_curso`,`tab_codigo`), ADD UNIQUE KEY `cg_codigo_UNIQUE` (`cg_codigo`), ADD KEY `fk_curso_grupo_curso1_idx` (`cod_curso`), ADD KEY `fk_curso_grupo_tabla_tabla1_idx` (`tab_codigo`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
 ADD PRIMARY KEY (`usu_usuario`,`cg_codigo`), ADD KEY `fk_matricula_curso_grupo1_idx` (`cg_codigo`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`usu_usuario`,`arc_codigo`), ADD KEY `fk_nota_archivo1_idx` (`arc_codigo`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
 ADD PRIMARY KEY (`opc_codigo`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`per_codigo`);

--
-- Indices de la tabla `perfil_opciones`
--
ALTER TABLE `perfil_opciones`
 ADD PRIMARY KEY (`opc_codigo`,`per_codigo`), ADD KEY `fk_perfil_accion_perfil1_idx` (`per_codigo`), ADD KEY `fk_perfil_accion_accion1_idx` (`opc_codigo`);

--
-- Indices de la tabla `tabla_tabla`
--
ALTER TABLE `tabla_tabla`
 ADD PRIMARY KEY (`tab_codigo`), ADD UNIQUE KEY `tab_codigo_UNIQUE` (`tab_codigo`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
 ADD PRIMARY KEY (`tra_codigo`), ADD UNIQUE KEY `slug_UNIQUE` (`tra_slug`), ADD KEY `fk_trabajo_cursogrupo_tipo1_idx` (`cgt_codigo`), ADD KEY `fk_trabajo_tabla_tabla1_idx` (`tab_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`usu_usuario`), ADD KEY `fk_usuario_perfil1_idx` (`per_codigo`), ADD KEY `fk_usuario_usuario_tabla_tabla1_idx` (`tab_codigo`);

--
-- Indices de la tabla `usuario_tabla_tabla`
--
ALTER TABLE `usuario_tabla_tabla`
 ADD PRIMARY KEY (`tab_codigo`), ADD UNIQUE KEY `tab_codigo_UNIQUE` (`tab_codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
ADD CONSTRAINT `fk_archivo_trabajo1` FOREIGN KEY (`tra_codigo`) REFERENCES `trabajo` (`tra_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursogrupo_tipo`
--
ALTER TABLE `cursogrupo_tipo`
ADD CONSTRAINT `fk_cursogrupo_tipo_curso_grupo1` FOREIGN KEY (`cg_codigo`) REFERENCES `curso_grupo` (`cg_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cursogrupo_tipo_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_grupo`
--
ALTER TABLE `curso_grupo`
ADD CONSTRAINT `fk_curso_grupo_curso1` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`cur_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_curso_grupo_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `fk_matricula_curso_grupo1` FOREIGN KEY (`cg_codigo`) REFERENCES `curso_grupo` (`cg_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
ADD CONSTRAINT `fk_nota_archivo1` FOREIGN KEY (`arc_codigo`) REFERENCES `archivo` (`arc_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfil_opciones`
--
ALTER TABLE `perfil_opciones`
ADD CONSTRAINT `fk_perfil_accion_accion1` FOREIGN KEY (`opc_codigo`) REFERENCES `opciones` (`opc_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_perfil_accion_perfil1` FOREIGN KEY (`per_codigo`) REFERENCES `perfil` (`per_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
ADD CONSTRAINT `fk_trabajo_cursogrupo_tipo1` FOREIGN KEY (`cgt_codigo`) REFERENCES `cursogrupo_tipo` (`cgt_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_trabajo_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`per_codigo`) REFERENCES `perfil` (`per_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_usuario_usuario_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `usuario_tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
