-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2020 a las 05:27:19
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
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `catNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `catNombre`) VALUES
(1, 'Campera'),
(2, 'Chaleco'),
(3, 'Tapado'),
(4, 'Abrigo'),
(5, 'Sweater'),
(6, 'Camperon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL,
  `mkNombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `mkNombre`) VALUES
(1, 'Kosiuko'),
(2, 'Zara'),
(3, '47 Street'),
(4, 'Americanino'),
(5, 'Desiderata'),
(6, 'Levi\'s'),
(7, 'Mossimo'),
(9, 'Newport'),
(10, 'Roberto Cavalli'),
(11, 'Stefano Cocci'),
(12, 'Sweet Victorian'),
(13, 'Sybilla'),
(14, 'Try me');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `prdNombre` varchar(30) NOT NULL,
  `prdPrecio` double NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `prdPresentacion` text NOT NULL,
  `prdStock` int(6) NOT NULL,
  `prdImagen` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdPresentacion`, `prdStock`, `prdImagen`) VALUES
(2, 'Hooded Plain Coat', 2000, 2, 1, 'cotton,women, style, clothing_length', 50, 'img2.jpeg'),
(3, 'Abrigo Impermeable', 1500, 11, 6, 'Hink de Lluvia,Impermeable con Capucha', 15, 'HY69XHnA5aOEXwUXMiEczUCrt7Hk4NTudG8mCW6T.jpeg'),
(4, 'Wantdo Abrigo', 3500, 5, 3, 'Doble Botonadura con Cinturón,', 27, '5HEsNRoYijmu1QrBDecEvBptug6siwDViyPaif0Q.jpeg'),
(5, 'Long Sleeve', 4500, 6, 3, 'Collar Buttons Coats, de paño', 45, 'l3EEb4TUqhTdcIH1G4iE8PseItehNqvtFATiZqGv.jpeg'),
(6, 'Parka', 2800, 3, 1, 'Impermeable', 35, 'mqba3xoshT9yowvq0J7TkXmtkTSkzs2sjG4KZmuu.jpeg'),
(7, 'Lunch Cooler Bag', 1200, 9, 2, 'Customizeable,negro', 80, 'JqZGgv2YiXL5vb3CuDea9obS61CXTB6iWJJKifGB.jpeg'),
(8, 'Roya Puffer', 4500, 12, 1, 'Pongee down filled puffer,blanco', 5, 'DJeFGeZ41gOSotSExQowg8T2S9x9j7kqOFzndKbk.jpeg'),
(9, 'Kie Sweet', 8000, 12, 1, 'Sweet cotton', 10, 'img3.jpg'),
(10, 'Kirk blue', 3200, 10, 1, 'Tela jean', 36, 'mmZEeLxnbp3nRTw26l3ja1Klk4LPg3f4mHHJ96nE.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Eduardo', 'eduardo@hotmail.com', '$2y$10$DtgoayPBjHgEJxnHRK3o3u.gkxbcre.AQugvA4U8OiPtRKsIricIK', 'admin'),
(2, 'Eduardo', 'correodeledu@hotmail.com', '$2y$10$Aasi7eaYxJCNgAYjKUFYtee7YPS4ZxXXy4X6g8HwDCPTaZadpnYWe', 'user'),
(3, 'Eduardo', 'eduardo2@hotmail.com', '$2y$10$9sjQovcnMTyxt6oxyXUhMuTEU79iSRj/oRGgcniIVyLEe78xeo8Ee', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Marca` (`idMarca`),
  ADD KEY `Rubro` (`idCategoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
