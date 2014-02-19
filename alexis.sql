-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2014 a las 19:31:49
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alexis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alum_materias`
--

CREATE TABLE IF NOT EXISTS `Alum_materias` (
  `matricula` int(11) NOT NULL DEFAULT '0',
  `clave` varchar(5) NOT NULL DEFAULT '',
  `grupo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`matricula`,`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alum_materias`
--

INSERT INTO `Alum_materias` (`matricula`, `clave`, `grupo`) VALUES
(243233, '11227', '5'),
(243233, '12332', '1'),
(244533, '11224', '8'),
(244767, '11223', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asesores_horas`
--

CREATE TABLE IF NOT EXISTS `Asesores_horas` (
  `asesor_id` int(11) NOT NULL,
  `dia1` varchar(10) DEFAULT NULL,
  `dia2` varchar(10) NOT NULL,
  `hora1` time DEFAULT NULL,
  `hora2` time NOT NULL,
  PRIMARY KEY (`asesor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Asesores_horas`
--

INSERT INTO `Asesores_horas` (`asesor_id`, `dia1`, `dia2`, `hora1`, `hora2`) VALUES
(1122, 'Lunes', 'Viernes', '16:00:00', '11:00:00'),
(11223, 'Sabado', 'Lunes', '12:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asesores_materias`
--

CREATE TABLE IF NOT EXISTS `Asesores_materias` (
  `asesor_id` int(11) NOT NULL,
  `clave` varchar(5) NOT NULL,
  PRIMARY KEY (`asesor_id`,`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Asesores_materias`
--

INSERT INTO `Asesores_materias` (`asesor_id`, `clave`) VALUES
(1122, 'B1'),
(11223, 'B2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asesorias`
--

CREATE TABLE IF NOT EXISTS `Asesorias` (
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `asesor_id` int(11) NOT NULL DEFAULT '0',
  `clave_materia` varchar(5) DEFAULT NULL,
  `materia` varchar(20) DEFAULT NULL,
  `mat_alumno` int(11) DEFAULT NULL,
  `tema1` varchar(40) DEFAULT NULL,
  `tema2` varchar(40) DEFAULT NULL,
  `tema3` varchar(40) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  `comentarios` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`fecha`,`asesor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Asesorias`
--

INSERT INTO `Asesorias` (`fecha`, `asesor_id`, `clave_materia`, `materia`, `mat_alumno`, `tema1`, `tema2`, `tema3`, `status`, `resultado`, `comentarios`) VALUES
('2014-01-08', 1122, 'B1', 'Fiki', 244767, 'Chido', 'Chidote2', 'Chidorilo', 'A', 8, 'GG'),
('2014-01-17', 11223, 'B2', 'Fisica', 243233, 'Facil', 'Facilote', 'Facilitisimo', 'A', 9, 'ME cae mal!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Materias`
--

CREATE TABLE IF NOT EXISTS `Materias` (
  `clave` varchar(5) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Materias`
--

INSERT INTO `Materias` (`clave`, `nombre`) VALUES
('11224', 'Fisica'),
('11227', 'Fiki'),
('12332', 'Organica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id` int(11) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `carrera` varchar(30) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `password`, `usuario`, `carrera`, `semestre`) VALUES
(1, 'admin', 'admin', 'yay!', 0),
(1, 'admin', 'admin', 'yay!', 0),
(112233, '112233', 'Jose Andres Lopez Arispe', 'Ing. Mecatronica', 7),
(112233, '112233', 'Jose Andres Lopez Arispe', 'Ing. Mecatronica', 7),
(243233, '12345', 'Poncho Chido', 'La vida', 0),
(243233, '12345', 'Poncho Chido', 'La vida', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
