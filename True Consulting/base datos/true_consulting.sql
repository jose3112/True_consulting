-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2019 a las 00:03:56
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `true_consulting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atenciones`
--

CREATE TABLE `atenciones` (
  `atencion` int(11) NOT NULL,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `no_cedula` varchar(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `ocupacion` varchar(40) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `tipo_sangre` varchar(3) NOT NULL,
  `descripcion_proble` varchar(80) NOT NULL,
  `tipo_atencion` varchar(20) NOT NULL,
  `registrado_por` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `atenciones`
--

INSERT INTO `atenciones` (`atencion`, `nombres`, `apellidos`, `no_cedula`, `telefono`, `edad`, `sexo`, `ocupacion`, `estado_civil`, `tipo_sangre`, `descripcion_proble`, `tipo_atencion`, `registrado_por`) VALUES
(1, 'sadsa', 'asdasdas', '1201242', '510213', 12, 'M', 'Jugador', 'Forever', 'O-', 'Todo', 'Nada', 'Jose Antonio Gonzalez Mercedes'),
(2, 'admin', 'admsani', 'asdanjsdajn', 'asd', 25, 'm', 'ocupado', 'mico', 'o+', 'micodosd', 'masdsa', 'Jose Antonio Gonzalez Mercedes'),
(3, 'Micky', 'Castillo', '50243215211', '8095265421', 20, 'M', 'Estudiante', 'Forever Alone', 'O+', 'Diarrea', 'Operacion orto', 'Jose Antonio Gonzalez Mercedes'),
(4, 'Luis', 'Sepulveda', '546456165', '5456151', 52, 'M', 'Pendejo', 'Ni idea', 'AB+', 'sadasda', 'asdasdas', 'Jose Antonio Gonzalez Mercedes'),
(5, 'asdamisadn', 'amsdnasdin', '51025435', '80516251', 25, 'M', 'asfanfs', 'kasdihsak', 'asd', 'isdbasudubsua', 'sadasda', 'Jose Antonio Gonzalez Mercedes'),
(6, 'asdamisadn', 'amsdnasdin', '51025435', '80516251', 25, 'M', 'asfanfs', 'kasdihsak', 'asd', 'isdbasudubsua', 'sadasda', 'Jose Antonio Gonzalez Mercedes'),
(7, 'asdamisadn', 'amsdnasdin', '51025435', '80516251', 25, 'M', 'asfanfs', 'kasdihsak', 'asd', 'isdbasudubsua', 'sadasda', 'Jose Antonio Gonzalez Mercedes'),
(8, 'asdmin', 'asdnisam', '54sadassd1', '6as15sda', 25, 'm', 'mucho', 'fod', 'a-', 'uniasc', 'asjdasd', 'Jose Antonio Gonzalez Mercedes'),
(9, 'Micky', 'Castillo', '40235162482', '8046122514', 21, 'M', 'Estudiante', 'Forever Alone', 'A+', 'Es muy pendejo', 'Consulta', 'Jose 17-EIST-1-073, Micky 17-EISN-1-143, Bladimir ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(12) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nombre_completo` varchar(90) NOT NULL,
  `cedula` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `nombre_completo`, `cedula`) VALUES
('admin', 'admin123', 'Jose Antonio Gonzalez Mercedes', '10232141231'),
('admins', 'admins4', 'Jose Gonzalez 17-EIST-1-073', ''),
('admin4', 'admin321', 'Jose 17-EIST-1-073, Micky 17-EISN-1-143, Bladimir ', '10231322654'),
('admin1', 'admin1', 'ose 17-EIST-1-073, Micky 17-EISN-1-143, Bladimir 17-EISN-1-231, Pedro 17-EIST-1-033', '12012345671'),
('servidor1', 'servidor1', 'Jose 17-EIST-1-073, Micky 17-EISN-1-143, Bladimir 17-EISN-1-231, Pedro 17-EIST-1-033', '12345678910');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atenciones`
--
ALTER TABLE `atenciones`
  ADD PRIMARY KEY (`atencion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atenciones`
--
ALTER TABLE `atenciones`
  MODIFY `atencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
