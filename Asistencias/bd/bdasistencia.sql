-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2018 a las 12:55:56
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdasistencia`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_BuscarPorFechas` (`IN_FechaInicial` DATE, `IN_FechaFinal` DATE)  BEGIN
SELECT * FROM Asistencia 
WHERE FechaActividad >= CAST(IN_FechaInicial AS DATE) AND FechaActividad <= CAST(IN_FechaFinal AS DATE);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_RegistrarSalida` (`IN_DI` VARCHAR(20), `IN_FechaActividad` DATE, `IN_HoraSalida` TIME)  BEGIN 
UPDATE Asistencia SET
		HoraSalida =IN_HoraSalida
		WHERE DI = IN_DI AND FechaActividad=IN_FechaActividad AND HoraIngreso <> '00:00:00';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_UsuariosValidar` (`IN_UserName` VARCHAR(10), `IN_Password` VARCHAR(10))  BEGIN
		SELECT UserName FROM Usuario
		WHERE UserName=IN_UserName AND PASSWORD=IN_Password  AND EsActivo=1;
		
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `IdAsistencia` int(11) NOT NULL,
  `Dia` varchar(50) NOT NULL,
  `DI` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `FechaActividad` date DEFAULT NULL,
  `HoraIngreso` varchar(50) DEFAULT NULL,
  `HoraSalida` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `DI` varchar(20) NOT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Edad` varchar(50) DEFAULT NULL,
  `NHijos` varchar(50) DEFAULT NULL,
  `Cargo` varchar(50) NOT NULL,
  `EstadoCivil` varchar(50) DEFAULT NULL,
  `Sexo` varchar(20) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaCese` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`Nombre`, `Apellido`, `DI`, `FechaNacimiento`, `Celular`, `Direccion`, `Email`, `Edad`, `NHijos`, `Cargo`, `EstadoCivil`, `Sexo`, `FechaInicio`, `FechaCese`) VALUES
('carlos ', 'zapata castillo', '47978245', '1990-04-01', '996523147', 'calle 2 #300 ', 'carlos@hotmail.com', '28', '2', 'soporte tecnico', 'casado', 'masculino', '2017-04-02', '2018-04-29'),
('María', 'baca navarro', '78965236', '1995-04-05', '789654122', 'Calle2 #899', 'maria@gmail.com', '28', '', 'soporte tecnico', 'soltero', 'masculino', '2014-04-28', '2018-04-19'),
('marcos', 'sosa castillo', '78965412', '1995-04-13', '8965234', 'calle 6 #201', 'sosa@hotmail.com', '30', '', 'soporte tecnico', 'soltero', 'femenino', '2015-04-26', '2018-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Dni` varchar(20) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Paterno` varchar(50) DEFAULT NULL,
  `Materno` varchar(50) DEFAULT NULL,
  `EsActivo` bit(1) NOT NULL,
  `EsAdmin` bit(1) NOT NULL,
  `Dependencias` varchar(50) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `FechaC` date NOT NULL,
  `Cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Dni`, `UserName`, `PASSWORD`, `Nombre`, `Paterno`, `Materno`, `EsActivo`, `EsAdmin`, `Dependencias`, `Email`, `FechaC`, `Cargo`) VALUES
(1, '47978242', 'admin', 'admin', 'juan', 'zapata ', 'silva', b'1', b'1', 'informatica', 'juan@hotmail.com', '2018-04-17', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`IdAsistencia`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`DI`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `IdAsistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
