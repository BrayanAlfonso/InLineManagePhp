-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para inlinemanage
DROP DATABASE IF EXISTS `inlinemanage`;
CREATE DATABASE IF NOT EXISTS `inlinemanage` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `inlinemanage`;

-- Volcando estructura para tabla inlinemanage.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.categoria: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.detalleprod
DROP TABLE IF EXISTS `detalleprod`;
CREATE TABLE IF NOT EXISTS `detalleprod` (
  `idDetalleProd` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL DEFAULT 0,
  `idVenta` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idDetalleProd`),
  KEY `FK_detalleprod_producto` (`idProducto`),
  KEY `FK_detalleprod_venta` (`idVenta`),
  CONSTRAINT `FK_detalleprod_producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_detalleprod_venta` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.detalleprod: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.entradaprod
DROP TABLE IF EXISTS `entradaprod`;
CREATE TABLE IF NOT EXISTS `entradaprod` (
  `idEntradoProd` int(11) NOT NULL AUTO_INCREMENT,
  `fechaIngreso` date DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEntradoProd`),
  KEY `FK_entradaprod_proveedor` (`idProveedor`),
  CONSTRAINT `FK_entradaprod_proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.entradaprod: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.existencia
DROP TABLE IF EXISTS `existencia`;
CREATE TABLE IF NOT EXISTS `existencia` (
  `idExistencia` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `fechaGarantia` date DEFAULT NULL,
  `observaciones` varchar(50) DEFAULT NULL,
  `idEntradoProd` int(11) DEFAULT NULL,
  PRIMARY KEY (`idExistencia`),
  KEY `FK_existencia_entradaprod` (`idEntradoProd`),
  CONSTRAINT `FK_existencia_entradaprod` FOREIGN KEY (`idEntradoProd`) REFERENCES `entradaprod` (`idEntradoProd`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.existencia: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.producto
DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) DEFAULT NULL,
  `precioProducto` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idExistencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `FK_producto_existencia` (`idExistencia`),
  KEY `FK_producto_categoria` (`idCategoria`),
  CONSTRAINT `FK_producto_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_producto_existencia` FOREIGN KEY (`idExistencia`) REFERENCES `existencia` (`idExistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.producto: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.proveedor
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProveedor` varchar(50) DEFAULT NULL,
  `direccionProveedor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.proveedor: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipoDoc` varchar(50) DEFAULT NULL,
  `numeroDoc` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.usuario: ~0 rows (aproximadamente)

-- Volcando estructura para tabla inlinemanage.venta
DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `idVenta` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVenta` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVenta`),
  KEY `FK_venta_usuario` (`idUsuario`),
  CONSTRAINT `FK_venta_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla inlinemanage.venta: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

insert into proveedor values (null, 'Brayan', 'Carrera 6f este 89 c18 sur');
insert into categoria values (null,'Audifonos');
insert into entradaprod values(null, '2023-05-15', 11, 1);
insert into existencia values(null, '12345678', 1, '2023-05-15','Hola Mundo',1);

insert into proveedor values (null, 'Hector', 'Carrera 2 este 90 c');
insert into categoria values (null,'Cargadores');
insert into entradaprod values(null, '2022-06-15', 5, 2);
insert into existencia values(null, '87654321', 2, '2023-05-15','Hola Mundo',2);
