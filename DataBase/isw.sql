-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 03:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenta`
--

CREATE TABLE `comenta` (
  `ID_USUARIO` int(11) NOT NULL,
  `FECHA_COMENTARIO` date DEFAULT NULL,
  `COMENTARIO` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ingresa`
--

CREATE TABLE `ingresa` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_REUNION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reunion`
--

CREATE TABLE `reunion` (
  `ID_REUNION` int(11) NOT NULL,
  `ENLACE` varchar(50) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ACTA` int(11) DEFAULT NULL,
  `RESUMEN` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `CONTRASEÑA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_admin`
--

CREATE TABLE `usuario_admin` (
  `ID_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_normal`
--

CREATE TABLE `usuario_normal` (
  `ID_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indexes for table `ingresa`
--
ALTER TABLE `ingresa`
  ADD PRIMARY KEY (`ID_USUARIO`,`ID_REUNION`),
  ADD KEY `ID_REUNION` (`ID_REUNION`);

--
-- Indexes for table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`ID_REUNION`,`ID_USUARIO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indexes for table `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indexes for table `usuario_normal`
--
ALTER TABLE `usuario_normal`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comenta`
--
ALTER TABLE `comenta`
  ADD CONSTRAINT `comenta_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario_normal` (`ID_USUARIO`);

--
-- Constraints for table `ingresa`
--
ALTER TABLE `ingresa`
  ADD CONSTRAINT `ingresa_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario_normal` (`ID_USUARIO`),
  ADD CONSTRAINT `ingresa_ibfk_2` FOREIGN KEY (`ID_REUNION`) REFERENCES `reunion` (`ID_REUNION`);

--
-- Constraints for table `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario_admin` (`ID_USUARIO`);

--
-- Constraints for table `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD CONSTRAINT `usuario_admin_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Constraints for table `usuario_normal`
--
ALTER TABLE `usuario_normal`
  ADD CONSTRAINT `usuario_normal_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
