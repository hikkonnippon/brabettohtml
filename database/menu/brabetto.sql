-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 05:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brabetto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladicionales`
--

CREATE TABLE `tbladicionales` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladicionales`
--

INSERT INTO `tbladicionales` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Papas', 3.00, 'Porción de Papas', '/ProyectV2/images/menu/adicionales/adicionales.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcombos`
--

CREATE TABLE `tblcombos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcombos`
--

INSERT INTO `tblcombos` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Combo para 2', 16.50, '2 Cheese Burger + 2 porciones de papas', '/ProyectV2/images/menu/combos/combopara2.jpg'),
(2, 'Combo para 3\r\n', 33.00, '1 Cheese Burger + 1 Royal Burger + 1 Burger a lo pobre + 3 porciones de papas', '/ProyectV2/images/menu/combos/combopara3.jpg'),
(3, 'Combo Familiar\r\n', 55.00, '5 Cheese Burger + 5 porciones de papas', '/ProyectV2/images/menu/combos/combofam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblhamburguesas`
--

CREATE TABLE `tblhamburguesas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripción` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblhamburguesas`
--

INSERT INTO `tblhamburguesas` (`ID`, `Nombre`, `Precio`, `Descripción`, `Imagen`) VALUES
(1, 'Burger Regular', 7.50, 'Hamburguesa, tomate, lechuga, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/regular-min.jpg'),
(2, 'Cheese Burger + 1 Porción de Papas', 12.50, 'Hamburguesa, queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto\r\n', '/ProyectV2/images/menu/hamburguesas/cheese-min.jpg'),
(3, 'Royal Burger + 1 Porción de papas', 13.50, 'Hamburguesa, queso cheddar, huevo, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/royal-min.jpg'),
(4, 'La Gosu + 1 Porción de papas', 14.00, 'Hamburguesa, doble queso cheddar, cebolla caramelizada,tomate, lechuga, pepinillos, salsa Gosu', '/ProyectV2/images/menu/hamburguesas/gosu-min.jpg'),
(5, 'Doble Burger Brabetto + 1 Porción de papas', 16.00, '1 hamburguesa con dos carnes, doble queso cheddar, tomate, lechuga, cebolla, pepinillos, salsa Brabetto', '/ProyectV2/images/menu/hamburguesas/doble-min.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladicionales`
--
ALTER TABLE `tbladicionales`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcombos`
--
ALTER TABLE `tblcombos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblhamburguesas`
--
ALTER TABLE `tblhamburguesas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladicionales`
--
ALTER TABLE `tbladicionales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcombos`
--
ALTER TABLE `tblcombos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblhamburguesas`
--
ALTER TABLE `tblhamburguesas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
