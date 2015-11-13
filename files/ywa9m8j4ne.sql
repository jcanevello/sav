-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2014 a las 19:56:34
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
  `cur_ciclo` int(11) DEFAULT NULL,
  `cur_grupos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cur_codigo`, `cur_nombre`, `cur_creditos`, `cur_ciclo`, `cur_grupos`) VALUES
('cur001', 'Diseño de Sistemas', '4', 6, 3),
('cur002', 'Analisis de Sistemas', '4', 5, 3),
('cur003', 'Estadística II', '4', 4, 2);

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
  `cgt_hora_termino` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursogrupo_tipo`
--

INSERT INTO `cursogrupo_tipo` (`cgt_codigo`, `cg_codigo`, `tab_codigo`, `usu_usuario`, `cgt_dia_clases`, `cgt_hora_inicio`, `cgt_hora_termino`) VALUES
('01', '01', '09', 'bsl26', NULL, NULL, NULL),
('02', '01', '10', 'bsl26', NULL, NULL, NULL),
('03', '01', '11', 'bsl26', NULL, NULL, ''),
('04', '02', '09', 'fcs27', NULL, NULL, NULL),
('05', '02', '10', 'fcs27', NULL, NULL, NULL),
('06', '02', '11', 'fcs27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_grupo`
--

CREATE TABLE IF NOT EXISTS `curso_grupo` (
  `cg_codigo` varchar(8) NOT NULL,
  `cod_curso` varchar(8) NOT NULL,
  `tab_codigo` varchar(8) NOT NULL,
  `cg_alumnos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_grupo`
--

INSERT INTO `curso_grupo` (`cg_codigo`, `cod_curso`, `tab_codigo`, `cg_alumnos`) VALUES
('01', 'cur001', '04', 20),
('02', 'cur001', '05', 20),
('03', 'cur001', '06', 15),
('04', 'cur002', '04', 20),
('05', 'cur002', '05', 25),
('06', 'cur002', '06', 23),
('07', 'cur003', '04', 30),
('08', 'cur003', '05', 20),
('09', 'cur003', '06', 30),
('10', 'cur003', '07', 20);

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
  `usu_usuario` varchar(8) DEFAULT NULL,
  `not_nota` double DEFAULT NULL,
  `arc_codigo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE IF NOT EXISTS `opcion` (
  `opc_codigo` varchar(8) NOT NULL,
  `opc_nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`opc_codigo`, `opc_nombre`) VALUES
('01', 'Cargar archivo'),
('02', 'Descargar archivo'),
('03', 'Eliminar archivo'),
('04', 'Modifiar archivo'),
('05', 'Registrar trabajo'),
('06', 'Eliminar trabajo'),
('07', 'Modificar trabajo'),
('08', 'Trabajos pasados'),
('09', 'Cursos registrados'),
('10', 'Alumnos por curso'),
('11', 'Registrar matrícula'),
('12', 'Registrar nota'),
('13', 'Modificar nota'),
('14', 'Notas por curso');

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
('P001', 'Alumno'),
('P002', 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_opcion`
--

CREATE TABLE IF NOT EXISTS `perfil_opcion` (
  `per_codigo` varchar(8) NOT NULL,
  `opc_codigo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil_opcion`
--

INSERT INTO `perfil_opcion` (`per_codigo`, `opc_codigo`) VALUES
('P001', '01'),
('P001', '02'),
('P001', '03'),
('P001', '04'),
('P001', '08'),
('P001', '09'),
('P001', '11'),
('P001', '14'),
('P002', '01'),
('P002', '02'),
('P002', '03'),
('P002', '04'),
('P002', '05'),
('P002', '06'),
('P002', '07'),
('P002', '08'),
('P002', '09'),
('P002', '10'),
('P002', '12'),
('P002', '13'),
('P002', '14');

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
('01', 'ESTADO', 'Activo', '1'),
('02', 'ESTADO', 'Inactivo', '0'),
('03', 'ESTADO', 'Bloqueado', '-1'),
('04', 'GRUPO', 'Grupo1', 'G1'),
('05', 'GRUPO', 'Grupo2', 'G2'),
('06', 'GRUPO', 'Grupo3', 'G3'),
('07', 'GRUPO', 'Grupo4', 'G4'),
('08', 'GRUPO', 'Grupo5', 'G5'),
('09', 'TIPO', 'Teoría', 'T'),
('10', 'TIPO', 'Laboratorio', 'L'),
('11', 'TIPO', 'Práctica', 'P'),
('12', 'EXTENSION', 'Word', '.doc'),
('13', 'EXTENSION', 'Power Point', '.ppt'),
('14', 'EXTENSION', 'PDF', '.pdf');

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
  `tab_codigo` varchar(8) NOT NULL COMMENT 'Código del tipo de trabajo (individual, grupal)'
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
('bsl26', 'P002', 'e10adc3949ba59abbe56e057f20f883e', 'Jose', 'La Madrid', '01'),
('fcs27', 'P002', 'e10adc3949ba59abbe56e057f20f883e', 'Franklin', 'Salazar', '01'),
('jcss08', 'P001', 'e10adc3949ba59abbe56e057f20f883e', 'Jean Carlo', 'Canevello ', '01');

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
 ADD KEY `fk_nota_archivo1_idx` (`arc_codigo`);

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
-- Filtros para la tabla `perfil_opcion`
--
ALTER TABLE `perfil_opcion`
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
