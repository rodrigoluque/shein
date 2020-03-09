-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.62-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para catalogo
DROP DATABASE IF EXISTS `catalogo`;
CREATE DATABASE IF NOT EXISTS `catalogo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `catalogo`;

-- Volcando estructura para tabla catalogo.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `catNombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.categorias: ~6 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`idCategoria`, `catNombre`) VALUES
	(1, 'Campera'),
	(2, 'Chaleco'),
	(3, 'Tapado'),
	(4, 'Abrigo'),
	(5, 'Sweater'),
	(6, 'Camperon');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.marcas
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `mkNombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.marcas: ~13 rows (aproximadamente)
DELETE FROM `marcas`;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `prdNombre` varchar(30) NOT NULL,
  `prdPrecio` double NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `prdPresentacion` text NOT NULL,
  `prdStock` int(6) NOT NULL,
  `prdImagen` tinytext,
  PRIMARY KEY (`idProducto`),
  KEY `Marca` (`idMarca`),
  KEY `Rubro` (`idCategoria`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.productos: ~7 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `idMarca`, `idCategoria`, `prdPresentacion`, `prdStock`, `prdImagen`) VALUES
	(2, 'Hooded Plain Coat', 2000, 14, 1, 'cotton,women, style, clothing_length', 50, 'DJeFGeZ41gOSotSExQowg8T2S9x9j7kqOFzndKbk.jpeg'),
	(3, 'Abrigo Impermeable', 1500, 11, 3, 'Hink de Lluvia,Impermeable con Capucha', 15, 'HY69XHnA5aOEXwUXMiEczUCrt7Hk4NTudG8mCW6T.jpeg'),
	(4, 'Wantdo Abrigo', 3500, 5, 4, 'Doble Botonadura con Cinturón,', 27, '5HEsNRoYijmu1QrBDecEvBptug6siwDViyPaif0Q.jpeg'),
	(5, 'Long Sleeve', 4500, 12, 4, 'Collar Buttons Coats, de paño', 45, 'l3EEb4TUqhTdcIH1G4iE8PseItehNqvtFATiZqGv.jpeg'),
	(6, 'Parka', 2800, 3, 1, 'Impermeable', 35, 'mqba3xoshT9yowvq0J7TkXmtkTSkzs2sjG4KZmuu.jpeg'),
	(7, 'Lunch Cooler Bag', 1200, 9, 2, 'Customizeable,negro', 80, 'JqZGgv2YiXL5vb3CuDea9obS61CXTB6iWJJKifGB.jpeg'),
	(8, 'Roya Puffer', 4500, 11, 6, 'Pongee down filled puffer', 5, 'Is6fJWXsU1Z8Zmo0P5zgCEVuGnsNFyvnY3SsWsh9.jpeg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla catalogo.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuNombre` varchar(30) NOT NULL,
  `usuApellido` varchar(30) NOT NULL,
  `usuEmail` varchar(30) NOT NULL,
  `usuPass` varchar(30) NOT NULL,
  `usuEstado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `Email` (`usuEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla catalogo.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `usuNombre`, `usuApellido`, `usuEmail`, `usuPass`, `usuEstado`) VALUES
	(1, 'admin', 'admin', 'admin@admin.com', 'admin', 1),
	(2, 'nombretest', 'apellidotest', 'test@mail.com', 'clavetest', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
