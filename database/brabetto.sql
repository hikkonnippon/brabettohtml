-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 01:01:45
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
-- Base de datos: `brabetto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladicionales`
--

CREATE TABLE `tbladicionales` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbladicionales`
--

INSERT INTO `tbladicionales` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Papas', 3.00, 'Porción de Papas', '/ProyectV2/images/menu/adicionales/adicionales.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcombos`
--

CREATE TABLE `tblcombos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblcombos`
--

INSERT INTO `tblcombos` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Combo para 2', 16.50, '2 Cheese Burger + 2 porciones de papas', '/ProyectV2/images/menu/combos/combopara2.jpg'),
(2, 'Combo para 3\r\n', 33.00, '1 Cheese Burger + 1 Royal Burger + 1 Burger a lo pobre + 3 porciones de papas', '/ProyectV2/images/menu/combos/combopara3.jpg'),
(3, 'Combo Familiar\r\n', 55.00, '5 Cheese Burger + 5 porciones de papas', '/ProyectV2/images/menu/combos/combofam.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 2, 1, 1000.00, 1, 0),
(2, 13, 3, 13.50, 1, 0),
(3, 13, 8, 55.00, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhamburguesas`
--

CREATE TABLE `tblhamburguesas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblhamburguesas`
--

INSERT INTO `tblhamburguesas` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Burger Regular', 7.50, 'Hamburguesa, tomate, lechuga, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/regular-min.jpg'),
(2, 'Cheese Burger + 1 Porción de Papas', 12.50, 'Hamburguesa, queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto\r\n', '/ProyectV2/images/menu/hamburguesas/cheese-min.jpg'),
(3, 'Royal Burger + 1 Porción de papas', 13.50, 'Hamburguesa, queso cheddar, huevo, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/royal-min.jpg'),
(4, 'La Gosu + 1 Porción de papas', 14.00, 'Hamburguesa, doble queso cheddar, cebolla caramelizada,tomate, lechuga, pepinillos, salsa Gosu', '/ProyectV2/images/menu/hamburguesas/gosu-min.jpg'),
(5, 'Doble Burger Brabetto + 1 Porción de papas', 16.00, '1 hamburguesa con dos carnes, doble queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/doble-min.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Burger Regular', 7.50, 'Hamburguesa, tomate, lechuga, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/regular-min.jpg'),
(2, 'Cheese Burger + 1 Porción de Papas', 12.50, 'Hamburguesa, queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto\r\n', '/ProyectV2/images/menu/hamburguesas/cheese-min.jpg'),
(3, 'Royal Burger + 1 Porción de papas', 13.50, 'Hamburguesa, queso cheddar, huevo, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/royal-min.jpg'),
(4, 'La Gosu + 1 Porción de papas', 14.00, 'Hamburguesa, doble queso cheddar, cebolla caramelizada,tomate, lechuga, pepinillos, salsa Gosu', '/ProyectV2/images/menu/hamburguesas/gosu-min.jpg'),
(5, 'Doble Burger Brabetto + 1 Porción de papas', 16.00, '1 hamburguesa con dos carnes, doble queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/doble-min.jpg'),
(6, 'Combo para 2', 16.50, '2 Cheese Burger + 2 porciones de papas', '/ProyectV2/images/menu/combos/combopara2.jpg'),
(7, 'Combo para 3\r\n', 33.00, '1 Cheese Burger + 1 Royal Burger + 1 Burger a lo pobre + 3 porciones de papas', '/ProyectV2/images/menu/combos/combopara3.jpg'),
(8, 'Combo Familiar\r\n', 55.00, '5 Cheese Burger + 5 porciones de papas', '/ProyectV2/images/menu/combos/combofam.jpg'),
(9, 'Papas', 3.00, 'Porción de Papas', '/ProyectV2/images/menu/adicionales/adicionales.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `TransactionKey` varchar(250) NOT NULL,
  `PayPalData` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Nombre` text NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `TransactionKey`, `PayPalData`, `Fecha`, `Correo`, `Nombre`, `Total`, `status`) VALUES
(2, '12345678910', '', '2023-11-26 23:39:48', 'fabriziosocola@gmail.com', 'Fabrizio Socola', 100.00, 'pendiente'),
(3, '12345678910', '', '2023-11-26 23:39:48', 'fabriziosocola@gmail.com', 'Fabrizio Socola', 100.00, 'pendiente'),
(4, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:01:37', 'fabriziosocola@gmail.com', 'Fabrizio Socola', 7.50, 'pendiente'),
(5, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:03:30', 'bssocola@gmail.com', 'Bryan Socola', 27.50, 'pendiente'),
(7, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:45:54', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(8, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:50:17', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(9, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:50:26', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(10, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:52:34', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(11, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:57:48', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(12, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:57:54', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente'),
(13, 'aa2qs2olvf39u1hgrpai58c2rn', '', '2023-11-26 18:59:41', 'bssocola@gmail.com', 'Bryan Socola', 68.50, 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `Nombres`, `Apellidos`, `Correo`, `Contraseña`) VALUES
(3, 'asdasdada', 'adsasdsad', 'asdadadad@xn--gmai-jqa.com', '$2y$10$QobdySL0zhycTmgA68mAAe9b37pAb5Afv6o6DtYQV/6Vam8b8CBdG'),
(4, 'asdasdada', 'adsasdsad', 'asdadadad@xn--gmai-jqa.com', '$2y$10$0RM0L9BzYBwfcXj5j86de.6WGXwRp7PxXW7rqYlS6GwUHb3Am0ZMG'),
(5, 'Fabrizio', 'Socola', 'fabriziosocola@gmail.com', '$2y$10$xhzHf.A5h.23ox1HH7Qu..pR4l7m3TNnnUMdyeXnKUgWgPeKt2m7.'),
(6, 'manolo', 'cabeza', 'manolocabeza@gmail.com', '$2y$10$hVI5WTlZ6kQjleiGryx5n.7nCqrH6dzQrQfiXgDKbC6RysZm32lqu'),
(7, 'test', 'tester', 'tester1@gmail.com', '$2y$10$mL6o8ZhUpOmGkaAGc1IHaupd5yv3XG7Q0YLbCw7qZDDseXOgxypwy'),
(8, 'test2', 'test222', 'test2@gmail.com', '$2y$10$pj33tAR8qeHNjjJiayTQkuiXOByK5AxAQaM0htSrtFShzcBbksQZ6'),
(9, 'Bryan', 'Socola', 'bssocola@gmail.com', '$2y$10$Y/FUerHCIJsHQbPI2cLCnupva//LStORj4ABwzDPDiMAjdbVOdFmi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladicionales`
--
ALTER TABLE `tbladicionales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblcombos`
--
ALTER TABLE `tblcombos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblhamburguesas`
--
ALTER TABLE `tblhamburguesas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladicionales`
--
ALTER TABLE `tbladicionales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblcombos`
--
ALTER TABLE `tblcombos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblhamburguesas`
--
ALTER TABLE `tblhamburguesas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
