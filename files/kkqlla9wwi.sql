-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2014 a las 23:34:22
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `SAV`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `arc_codigo` varchar(8) NOT NULL,
  `tra_codigo` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL,
  `arc_nombre` varchar(150) DEFAULT NULL,
  `arc_slug` varchar(20) DEFAULT NULL,
  `usu_usuario` varchar(8) DEFAULT NULL COMMENT 'Indica el usuario que ha cargado el archivo',
  `arc_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`arc_codigo`, `tra_codigo`, `tab_codigo`, `arc_nombre`, `arc_slug`, `usu_usuario`, `arc_fecha_registro`) VALUES
('1', '2', '12', 'Sql', 'jvfe15em4j.sql', 'fcs27', '20140620121728'),
('2', '2', '12', 'qqqqqqqqqqq', '4fcrzq5e03.sql', 'jcss08', '20140620140651'),
('3', '2', '12', 'prubaaa', '2sfulgfoii.docx', 'jcss10', '20140620140708');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `cur_codigo` varchar(8) NOT NULL,
  `cur_nombre` varchar(150) DEFAULT NULL,
  `cur_creditos` varchar(45) DEFAULT NULL,
  `cur_ciclo` int(11) DEFAULT NULL,
  `cur_grupos` int(11) DEFAULT NULL,
  `cur_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cur_codigo`, `cur_nombre`, `cur_creditos`, `cur_ciclo`, `cur_grupos`, `cur_fecha_registro`) VALUES
('cur001', 'Diseño de Sistemas', '4', 6, 3, NULL),
('cur002', 'Analisis de Sistemas', '4', 5, 3, NULL),
('cur003', 'Estadística II', '4', 4, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursogrupo_tipo`
--

CREATE TABLE IF NOT EXISTS `cursogrupo_tipo` (
  `cgt_codigo` varchar(8) NOT NULL,
  `cg_codigo` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL,
  `usu_usuario` varchar(8) NOT NULL,
  `cgt_dia_clases` varchar(10) DEFAULT NULL,
  `cgt_hora_inicio` varchar(5) DEFAULT NULL,
  `cgt_hora_termino` varchar(5) DEFAULT NULL,
  `cgt_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursogrupo_tipo`
--

INSERT INTO `cursogrupo_tipo` (`cgt_codigo`, `cg_codigo`, `tab_codigo`, `usu_usuario`, `cgt_dia_clases`, `cgt_hora_inicio`, `cgt_hora_termino`, `cgt_fecha_registro`) VALUES
('01', '01', '09', 'bsl26', NULL, NULL, NULL, NULL),
('02', '01', '10', 'bsl26', NULL, NULL, NULL, NULL),
('03', '01', '11', 'bsl26', NULL, NULL, '', NULL),
('04', '02', '09', 'fcs27', NULL, NULL, NULL, NULL),
('05', '02', '10', 'fcs27', NULL, NULL, NULL, NULL),
('06', '02', '11', 'fcs27', NULL, NULL, NULL, NULL),
('07', '07', '09', 'fcs27', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_grupo`
--

CREATE TABLE IF NOT EXISTS `curso_grupo` (
  `cg_codigo` varchar(8) NOT NULL,
  `cur_codigo` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL,
  `cg_alumnos` int(11) DEFAULT NULL,
  `cg_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_grupo`
--

INSERT INTO `curso_grupo` (`cg_codigo`, `cur_codigo`, `tab_codigo`, `cg_alumnos`, `cg_fecha_registro`) VALUES
('01', 'cur001', '04', 20, NULL),
('02', 'cur001', '05', 20, NULL),
('03', 'cur001', '06', 15, NULL),
('04', 'cur002', '04', 20, NULL),
('05', 'cur002', '05', 25, NULL),
('06', 'cur002', '06', 23, NULL),
('07', 'cur003', '04', 30, NULL),
('08', 'cur003', '05', 20, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `usu_usuario` varchar(8) NOT NULL,
  `cg_codigo` varchar(8) NOT NULL,
  `mat_periodo` varchar(8) DEFAULT NULL,
  `mat_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`usu_usuario`, `cg_codigo`, `mat_periodo`, `mat_fecha_registro`) VALUES
('jcss08', '01', NULL, '20140620153036');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `usu_usuario` varchar(8) NOT NULL,
  `not_nota` double DEFAULT NULL,
  `arc_codigo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`usu_usuario`, `not_nota`, `arc_codigo`) VALUES
('jcss08', NULL, '2'),
('jcss09', NULL, '3'),
('jcss10', NULL, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE IF NOT EXISTS `opcion` (
  `opc_codigo` varchar(8) NOT NULL,
  `opc_nombre` varchar(150) DEFAULT NULL,
  `opc_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `per_codigo` varchar(8) NOT NULL,
  `per_nombre` varchar(150) DEFAULT NULL,
  `per_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`per_codigo`, `per_nombre`, `per_fecha_registro`) VALUES
('P001', 'Alumno', NULL),
('P002', 'Docente', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_opcion`
--

CREATE TABLE IF NOT EXISTS `perfil_opcion` (
  `per_codigo` varchar(8) NOT NULL,
  `opc_codigo` varchar(8) NOT NULL,
  `po_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_tabla`
--

CREATE TABLE IF NOT EXISTS `tabla_tabla` (
  `tab_codigo` varchar(8) NOT NULL,
  `tab_tabla` varchar(100) NOT NULL,
  `tab_nombre` varchar(150) DEFAULT NULL,
  `tab_valor` varchar(150) DEFAULT NULL,
  `tab_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_tabla`
--

INSERT INTO `tabla_tabla` (`tab_codigo`, `tab_tabla`, `tab_nombre`, `tab_valor`, `tab_fecha_registro`) VALUES
('01', 'ESTADO', 'Activo', '1', NULL),
('02', 'ESTADO', 'Inactivo', '0', NULL),
('03', 'ESTADO', 'Bloqueado', '-1', NULL),
('04', 'GRUPO', 'Grupo1', 'G1', NULL),
('05', 'GRUPO', 'Grupo2', 'G2', NULL),
('06', 'GRUPO', 'Grupo3', 'G3', NULL),
('07', 'GRUPO', 'Grupo4', 'G4', NULL),
('08', 'GRUPO', 'Grupo5', 'G5', NULL),
('09', 'TIPO', 'Teoría', 'T', NULL),
('10', 'TIPO', 'Laboratorio', 'L', NULL),
('11', 'TIPO', 'Práctica', 'P', NULL),
('12', 'EXTENSION', 'Word', '.doc', NULL),
('13', 'EXTENSION', 'Power Point', '.ppt', NULL),
('14', 'EXTENSION', 'PDF', '.pdf', NULL),
('15', 'TRABAJO', 'Individual', '0', NULL),
('16', 'TRABAJO', 'Grupal', '1', NULL);

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
  `tra_cantidad_alum` int(11) DEFAULT NULL,
  `tab_codigo` varchar(8) NOT NULL COMMENT 'Código del tipo de trabajo (individual, grupal)',
  `tra_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`tra_codigo`, `cgt_codigo`, `tra_nombre`, `tra_slug`, `tra_fecha_limite`, `tra_cantidad_alum`, `tab_codigo`, `tra_fecha_registro`) VALUES
('1', '07', ' 2 entrega del trabajo de investigación', '07-2-entrega-del-trabajo-de-investigación', '20140620', 1, '15', '20140620004900'),
('10', '07', 'Documento de sistemas y análisis', '07-documento-de-sistemas-y-análisis', '20140625', 1, '15', '20140620005752'),
('11', '04', 'Documento de sistemas', '04-documento-de-sistemas', '20140619', 1, '15', '20140620005910'),
('12', '05', 'Primer', '05-primer', '20140627', 1, '15', '20140620012121'),
('2', '07', 'Primer trabajo de investigación', '07-primer-trabajo-de-investigación', '20140625', 3, '16', '20140620004924'),
('4', '05', 'Documento de sistemas y análisis', '05-documento-de-sistemas-y-análisis', '20140807', 1, '15', '20140620005050'),
('5', '05', 'Documento de diseño', '05-documento-de-diseño', '20140702', 6, '16', '20140620004945'),
('9', '07', 'Documento de diseño!!!!', '07-documento-de-diseño', '20140623', 1, '15', '20140620005601');

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
  `tab_codigo` varchar(8) NOT NULL,
  `usu_fecha_registro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_usuario`, `per_codigo`, `usu_contrasena`, `usu_nombre`, `usu_apellido`, `tab_codigo`, `usu_fecha_registro`) VALUES
('bsl26', 'P002', 'e10adc3949ba59abbe56e057f20f883e', 'Jose', 'La Madrid', '01', NULL),
('fcs27', 'P002', 'e10adc3949ba59abbe56e057f20f883e', 'Franklin', 'Salazar', '01', NULL),
('jcss08', 'P001', 'e10adc3949ba59abbe56e057f20f883e', 'Jean Carlo', 'Canevello ', '01', NULL),
('jcss09', 'P001', 'e10adc3949ba59abbe56e057f20f883e', 'Cesar', 'Cleper', '01', NULL),
('jcss10', 'P001', 'e10adc3949ba59abbe56e057f20f883e', 'Juan Jose', 'Solorzano', '01', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
 ADD PRIMARY KEY (`arc_codigo`), ADD KEY `fk_archivo_tabla_tabla1_idx` (`tab_codigo`), ADD KEY `fk_archivo_trabajo1_idx` (`tra_codigo`);

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
 ADD PRIMARY KEY (`cur_codigo`,`tab_codigo`), ADD UNIQUE KEY `cg_codigo_UNIQUE` (`cg_codigo`), ADD KEY `fk_curso_grupo_curso1_idx` (`cur_codigo`), ADD KEY `fk_curso_grupo_tabla_tabla1_idx` (`tab_codigo`);

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
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
 ADD PRIMARY KEY (`opc_codigo`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`per_codigo`);

--
-- Indices de la tabla `perfil_opcion`
--
ALTER TABLE `perfil_opcion`
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
 ADD PRIMARY KEY (`usu_usuario`), ADD KEY `fk_usuario_perfil1_idx` (`per_codigo`), ADD KEY `fk_usuario_tabla_tabla1_idx` (`tab_codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
ADD CONSTRAINT `fk_archivo_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_archivo_trabajo1` FOREIGN KEY (`tra_codigo`) REFERENCES `trabajo` (`tra_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

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
ADD CONSTRAINT `fk_curso_grupo_curso1` FOREIGN KEY (`cur_codigo`) REFERENCES `curso` (`cur_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
ADD CONSTRAINT `fk_nota_archivo1` FOREIGN KEY (`arc_codigo`) REFERENCES `archivo` (`arc_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `perfil_opcion`
--
ALTER TABLE `perfil_opcion`
ADD CONSTRAINT `fk_perfil_accion_accion1` FOREIGN KEY (`opc_codigo`) REFERENCES `opcion` (`opc_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
ADD CONSTRAINT `fk_usuario_tabla_tabla1` FOREIGN KEY (`tab_codigo`) REFERENCES `tabla_tabla` (`tab_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
