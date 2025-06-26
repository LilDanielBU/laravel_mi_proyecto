-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectico_sql
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (0,'',''),(1,'Zapatillas','Calzado deportivo para distintas actividades'),(2,'Sandalias','Calzado ligero ideal para climas cÃ¡lidos'),(3,'Botines','Calzado resistente para terrenos irregulares'),(4,'Formales','Zapatos elegantes y mocasines para ocasiones formales');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Carlos','PÃ©rez','Calle 45 #12-34 ','310 456 7890 ','carlos.perez@mail.com'),(2,'Laura','RodrÃ­guez','Carrera 7 #32-19 ','320 123 4567 ','laura.rodriguez@mail.com'),(3,'AndrÃ©s','GarcÃ­a','Avenida 68 #98-54','315 987 6543','andres.garcia@mail.com'),(4,'MarÃ­a','LÃ³pez ','Calle 100 #25-45 ','311 654 3210 ','maria.lopez@mail.com'),(5,'Juan','MartÃ­nez','Carrera 15 #88-12 ','312 345 6789 ','juan.martinez@mail.com'),(6,'SofÃ­a','GonzÃ¡lez ','Calle 26 #19-20 ','313 678 9012 ','sofia.gonzalez@mail.com'),(7,'Camila','RamÃ­rez','Carrera 50 #60-21 ','314 876 5432 ','camila.ramirez@mail.com'),(8,'Santiago ','Torres','Avenida Ciudad de Cali #126-22 ','300 234 5678 ','santiago.torres@mail.com'),(9,'Valentina','JimÃ©nez','Calle 72 #8-43 ','301 456 7891 ','valentina.jimenez@mail.com'),(10,'Daniel','HernÃ¡ndez','Carrera 11 #78-29 ','302 567 8902 ','daniel.hernandez@mail.com'),(11,'Diego','MuÃ±oz','Calle 93 #14-30 ','320 789 1234 ','diego.munoz@mail.com'),(12,'Natalia','Castro','Carrera 9 #55-33 ','321 890 2345 ','natalia.castro@mail.com'),(13,'David','GÃ³mez','Calle 134 #20-18 ','322 901 3456 ','david.gomez@mail.com'),(14,'JuliÃ¡n','Vargas ','Carrera 19 #90-12 ','311 567 8901 ','julian.vargas@mail.com'),(15,'Daniela','Romero','Calle 85 #11-50 ','310 234 5678 ','daniela.romero@mail.com'),(16,'Alejandro','Navarro','Carrera 68 #22-60 ','312 678 9012 ','alejandro.navarro@mail.com'),(17,'Paula','Castillo','Calle 50 #27-45 ','320 901 2345 ','paula.castillo@mail.com'),(18,'Felipe','Silva','Carrera 24 #63-17 ','315 890 1234 ','felipe.silva@mail.com'),(19,'Carolina','Rojas','Las AmÃ©ricas #36-50 ','300 567 8901 ','carolina.rojas@mail.com'),(20,'Ricardo','Reyes','Carrera 14 #53-22 ','301 678 9012 ','ricardo.reyes@mail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleordencompra`
--

DROP TABLE IF EXISTS `detalleordencompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalleordencompra` (
  `id_detalle_orden` int(11) NOT NULL,
  `id_orden` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_orden`),
  KEY `id_orden` (`id_orden`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `detalleordencompra_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordencompra` (`id_orden`),
  CONSTRAINT `detalleordencompra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleordencompra`
--

LOCK TABLES `detalleordencompra` WRITE;
/*!40000 ALTER TABLE `detalleordencompra` DISABLE KEYS */;
INSERT INTO `detalleordencompra` VALUES (1,1,1,10,150.00),(2,2,2,5,300.00),(3,3,3,8,120.00),(4,4,4,15,200.00),(5,5,5,12,100.00),(6,6,6,7,250.00),(7,7,7,9,400.00),(8,8,8,4,350.00),(9,9,9,11,80.00),(10,10,10,3,500.00),(11,11,11,6,95.00),(12,12,12,14,130.00),(13,13,13,5,145.00),(14,14,14,8,275.00),(15,15,15,10,360.00),(16,16,16,11,110.00),(17,17,17,7,150.00),(18,18,18,4,330.00),(19,19,19,13,200.00),(20,20,20,12,280.00);
/*!40000 ALTER TABLE `detalleordencompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleventa`
--

DROP TABLE IF EXISTS `detalleventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalleventa` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_venta`),
  KEY `id_venta` (`id_venta`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`),
  CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleventa`
--

LOCK TABLES `detalleventa` WRITE;
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
INSERT INTO `detalleventa` VALUES (1,7,15,5,80000.00,400000.00),(2,3,8,3,90000.00,270000.00),(3,12,4,7,100000.00,700000.00),(4,5,12,2,110000.00,220000.00),(5,9,6,4,120000.00,480000.00),(6,4,18,6,130000.00,780000.00),(7,3,3,8,140000.00,1120000.00),(9,2,9,5,160000.00,800000.00),(10,6,11,3,170000.00,510000.00),(11,13,7,4,180000.00,720000.00),(12,5,14,7,190000.00,1330000.00),(13,10,2,2,200000.00,400000.00),(14,3,19,6,210000.00,1260000.00),(15,7,5,3,220000.00,660000.00),(16,14,13,5,230000.00,1150000.00),(17,4,8,8,240000.00,1920000.00),(18,9,16,4,250000.00,1000000.00),(20,11,17,2,270000.00,540000.00),(21,6,10,7,280000.00,1960000.00),(22,13,4,3,290000.00,870000.00),(23,8,15,5,300000.00,1500000.00),(24,7,7,4,310000.00,1240000.00),(25,12,20,6,320000.00,1920000.00),(26,5,3,2,330000.00,660000.00),(27,10,12,8,340000.00,2720000.00),(28,7,6,3,350000.00,1050000.00);
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distribuidor`
--

DROP TABLE IF EXISTS `distribuidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distribuidor` (
  `id_distribuidor` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_distribuidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distribuidor`
--

LOCK TABLES `distribuidor` WRITE;
/*!40000 ALTER TABLE `distribuidor` DISABLE KEYS */;
INSERT INTO `distribuidor` VALUES (2,'Mario','Carrera 7 #32-19','320 123 4567'),(3,'Tomas','Avenida 68 #98-54','315 987 6543'),(4,'Arturo','Calle 100 #25-45','311 654 3210'),(5,'Alfonso','Carrera 15 #88-12','312 345 6789'),(6,'Sergio','Calle 26 #19-20','313 678 9012'),(7,'Cristian','Carrera 50 #60-21','314 876 5432'),(8,'Alexander','Avenida Ciudad de Cali #126-22','300 234 5678'),(9,'Camilo','Calle 72 #8-43','301 456 7891'),(10,'Andrea','Carrera 11 #78-29','302 567 8902'),(11,'Paula','Calle 93 #14-30','320 789 1234'),(12,'Sofia','Carrera 9 #55-33','321 890 2345'),(13,'Laura','Calle 134 #20-18','322 901 3456'),(14,'Camila','Carrera 19 #90-12','310 234 5678'),(15,'Sara','Calle 85 #11-50','311 567 8901'),(16,'David','Carrera 68 #22-60','312 678 9012'),(17,'Carlos','Calle 50 #27-45','320 901 2345'),(18,'Duvan','Carrera 24 #63-17','315 890 1234'),(19,'Maria','Avenida Las AmÃ©ricas #36-50','300 567 8901'),(20,'Yenny','Carrera 14 #53-22','301 678 9012');
/*!40000 ALTER TABLE `distribuidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES (1,'EMP001A','Juan','Perez',NULL,NULL),(2,'EMP002B','María','Lopez',NULL,NULL),(3,'EMP003B','Alejandro','Garcia',NULL,NULL),(4,'EMP004B','Sofía','Rodriguez',NULL,NULL),(5,'EMP002B','Mateo','Hernandez',NULL,NULL),(6,'EMP002B','Valentina','Lopez',NULL,NULL),(7,'EMP002B','David','Gonzalez',NULL,NULL),(8,'EMP002B','Camila','Martinez',NULL,NULL),(9,'EMP002B','Martín','Diaz',NULL,NULL),(10,'EMP002B','Emma','Perez',NULL,NULL),(11,'EMP002B','Lucas','Romero',NULL,NULL),(12,'EMP002B','Olivia','Sanchez',NULL,NULL),(13,'EMP002B','Benjamín','Moreno',NULL,NULL),(14,'EMP002B','Isabella','Jimenez',NULL,NULL),(15,'EMP002B','Santiago','Ruiz',NULL,NULL),(16,'EMP002B','Mia','Alvarez',NULL,NULL),(17,'EMP002B','Diego','Gomez',NULL,NULL),(18,'EMP002B','Zoe','Martin',NULL,NULL),(19,'EMP002B','Gabriel','Vazquez',NULL,NULL),(20,'EMP002B','Victoria','Suarez',NULL,NULL),(21,'EMP002B','Manuel','Fernandez',NULL,NULL),(22,'EMP002B','Abril','Torres',NULL,NULL),(23,'EMP002B','jose','lopez',NULL,NULL),(24,'EMP002B','pedro','cardona',NULL,NULL),(25,'EMP002B','sandra','ruiz',NULL,NULL),(26,'EMP002B','Lucas','melo',NULL,NULL),(27,'EMP002B','roberto','caicedo',NULL,NULL),(28,'EMP002B','sofi','altamar',NULL,NULL),(29,'EMP002B','rodry','espinoza',NULL,NULL),(30,'EMP002B','esperanza','Rodríguez',NULL,NULL);
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entradaproducto`
--

DROP TABLE IF EXISTS `entradaproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entradaproducto` (
  `id_entrada` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  PRIMARY KEY (`id_entrada`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `entradaproducto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entradaproducto`
--

LOCK TABLES `entradaproducto` WRITE;
/*!40000 ALTER TABLE `entradaproducto` DISABLE KEYS */;
INSERT INTO `entradaproducto` VALUES (1,2,23,'0000-00-00'),(2,3,231,'0000-00-00'),(3,4,24,'0000-00-00'),(4,5,43,'0000-00-00'),(5,6,42,'0000-00-00'),(6,7,67,'0000-00-00'),(7,8,8,'0000-00-00'),(8,9,9,'0000-00-00'),(9,10,12,'0000-00-00'),(10,11,35,'0000-00-00'),(11,12,24,'0000-00-00'),(12,13,54,'0000-00-00'),(13,14,34,'0000-00-00'),(14,15,54,'0000-00-00'),(15,16,56,'0000-00-00'),(16,17,6,'0000-00-00'),(17,18,26,'0000-00-00'),(18,19,45,'0000-00-00'),(19,20,67,'0000-00-00'),(20,21,53,'0000-00-00');
/*!40000 ALTER TABLE `entradaproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrega`
--

DROP TABLE IF EXISTS `entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entrega` (
  `id_entrega` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_entrega`),
  KEY `id_venta` (`id_venta`),
  CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrega`
--

LOCK TABLES `entrega` WRITE;
/*!40000 ALTER TABLE `entrega` DISABLE KEYS */;
INSERT INTO `entrega` VALUES (1,1,'2024-01-05','Entregado'),(2,2,'2024-01-06','En tránsito'),(3,3,'2024-01-07','Pendiente'),(4,4,'2024-01-08','Entregado'),(5,5,'2024-01-09','Entregado'),(6,6,'2024-01-10','Cancelado'),(7,7,'2024-01-11','En tránsito'),(8,8,'2024-01-12','Entregado'),(9,9,'2024-01-13','Pendiente'),(10,10,'2024-01-14','Entregado'),(11,11,'2024-01-15','En tránsito'),(12,12,'2024-01-16','Entregado'),(13,13,'2024-01-17','Cancelado'),(14,14,'2024-01-18','Entregado'),(15,15,'2024-01-19','Pendiente'),(16,16,'2024-01-20','En tránsito'),(17,17,'2024-01-21','Entregado'),(18,18,'2024-01-22','Entregado'),(19,19,'2024-01-23','Cancelado'),(20,20,'2024-01-24','Entregado');
/*!40000 ALTER TABLE `entrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordencompra`
--

DROP TABLE IF EXISTS `ordencompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordencompra` (
  `id_orden` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `fecha_orden` date DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_orden`),
  KEY `id_proveedor` (`id_proveedor`),
  CONSTRAINT `ordencompra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordencompra`
--

LOCK TABLES `ordencompra` WRITE;
/*!40000 ALTER TABLE `ordencompra` DISABLE KEYS */;
INSERT INTO `ordencompra` VALUES (1,1,'2024-01-15','Entregada',15800.00),(2,2,'2024-01-18','Pendiente',23450.00),(3,3,'2024-01-20','En Proceso',18900.00),(4,4,'2024-01-22','Entregada',32100.00),(5,5,'2024-01-25','Cancelada',28750.00),(6,6,'2024-01-28','Entregada',19600.00),(7,7,'2024-02-01','Pendiente',27300.00),(8,8,'2024-02-03','En Proceso',34200.00),(9,9,'2024-02-05','Entregada',16500.00),(10,10,'2024-02-08','Pendiente',29800.00),(11,11,'2024-02-10','Entregada',22400.00),(12,12,'2024-02-12','Cancelada',31900.00),(13,13,'2024-02-15','En Proceso',25600.00),(14,14,'2024-02-18','Entregada',17800.00),(15,15,'2024-02-20','Pendiente',33500.00),(16,16,'2024-02-22','Entregada',24700.00),(17,17,'2024-02-25','En Proceso',30200.00),(18,18,'2024-02-28','Pendiente',21300.00),(19,19,'2024-03-01','Entregada',28900.00),(20,20,'2024-03-03','Cancelada',26400.00);
/*!40000 ALTER TABLE `ordencompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'guayos','guayos predator adidas',199.00,20,1),(2,'Sandalia Eco','Sandalia de cuero ecolÃ³gico',179.00,80,2),(3,'BotÃ­n Urbano','BotÃ­n de cuero para ciudad',479.00,60,3),(4,'Mocasin Lux','Mocasin de piel premium',359.00,45,4),(5,'Zapatilla Pro','Zapatilla de running avanzada',379.00,150,1),(6,'Sandalia Playa','Sandalia para playa',79.00,200,2),(7,'BotÃ­n MontaÃ±a','BotÃ­n de montaÃ±a resistente',599.00,30,3),(8,'Zapato Formal','Zapato elegante para oficina',439.00,55,4),(9,'Zapatilla Trail','Zapatilla de senderismo',329.00,75,1),(10,'Alpargata Cool','Alpargata cÃ³moda de tela',119.00,180,2),(11,'BotÃ­n Casual','BotÃ­n casual para uso diario',389.00,65,3),(12,'Zapato de Vestir','Zapato de vestir de piel',559.00,40,4),(13,'Zapatilla Minimal','Zapatilla minimalista unisex',239.00,140,1),(14,'Sandalia Natural','Sandalia de material reciclado',139.00,95,2),(15,'BotÃ­n Hiker','BotÃ­n para senderismo y trekking',539.00,50,3),(16,'Mocasin Urbano','Mocasin moderno para ciudad',309.00,60,4),(17,'Zapatilla Retro','Zapatilla estilo retro',309.00,85,1),(18,'Sandalia Confort','Sandalia con plantilla acolchada',99.00,160,2),(19,'Bota de Invierno','Bota con aislamiento tÃ©rmico',639.00,35,3),(20,'Zapato Ejecutivo','Zapato formal para reuniones',499.00,50,4),(21,'Zapatilla Ligera','Zapatilla ultraligera para verano',209.00,130,1),(22,'Sandalia de CuÃ±a','Sandalia con cuÃ±a alta',159.00,90,2),(23,'BotÃ­n de Charol','BotÃ­n con acabado de charol',439.00,42,3),(24,'Mocasin ClÃ¡sico','Mocasin con diseÃ±o clÃ¡sico',369.00,70,4),(25,'Zapatilla Skate','Zapatilla para skateboarding',299.00,110,1),(26,'Sandalia Deportiva','Sandalia con soporte deportivo',109.00,140,2),(27,'BotÃ­n Vintage','BotÃ­n con diseÃ±o vintage',519.00,33,3),(28,'Zapato Oxfords','Zapato tipo Oxford de piel',389.00,47,4),(29,'Zapatilla Casual','Zapatilla de lona para uso diario',209.00,155,1),(30,'Sandalia Casual','Sandalia ligera de uso diario',89.00,175,2);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Distribuidora CalzaFina','Calle 10 #22-34','3001234567','contacto@calzafina.com'),(2,'Proveedor Zapatos XYZ','Carrera 15 #45-67','3102345678','ventas@xyzshoes.com'),(3,'Calzados y Cía','Avenida Siempre Viva #123','3203456789','info@calzadosycia.com'),(4,'Distribuciones Piedini','Calle 20 #11-22','3004567890','piedini@distribuciones.com'),(5,'Zapatos Latinos','Carrera 8 #33-45','3105678901','contacto@zapatoslatinos.com'),(6,'Calzado Moderno','Calle 7 #17-89','3206789012','ventas@calzadomoderno.com'),(7,'Distribuidora Elegante','Avenida 9 #20-10','3007890123','elegante@distribuidora.com'),(8,'Zapatos y Más','Calle 15 #30-40','3108901234','ventas@zapatosymas.com'),(9,'Calzados Bonanza','Carrera 6 #45-89','3209012345','contacto@bonanza.com'),(10,'Distribuciones Mundial','Calle 12 #55-66','3001234568','mundial@distribuciones.com'),(11,'Zapatería del Norte','Carrera 18 #32-55','3102345679','info@zapaterianorte.com'),(12,'Calzado Express','Avenida 15 #12-30','3203456780','ventas@calzadoexpress.com'),(13,'Moda en Calzado','Calle 5 #60-15','3004567891','moda@calzado.com'),(14,'Distribuidora Elite','Carrera 7 #10-23','3105678902','elite@distribuidora.com'),(15,'Calzados Premium','Calle 13 #25-40','3206789013','contacto@premium.com'),(16,'Zapatos Confort','Carrera 16 #14-22','3007890124','confort@zapatos.com'),(17,'Distribuciones Globales','Avenida 2 #22-44','3108901235','global@distribuciones.com'),(18,'Calzado Urbano','Calle 9 #50-70','3209012346','urbano@calzado.com'),(19,'Zapatería Central','Carrera 4 #20-35','3001234569','central@zapateria.com'),(20,'Calzados S.A.','Avenida 8 #55-66','3102345680','contacto@calzadossa.com');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salidaproducto`
--

DROP TABLE IF EXISTS `salidaproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salidaproducto` (
  `id_salida` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  PRIMARY KEY (`id_salida`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `salidaproducto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salidaproducto`
--

LOCK TABLES `salidaproducto` WRITE;
/*!40000 ALTER TABLE `salidaproducto` DISABLE KEYS */;
INSERT INTO `salidaproducto` VALUES (1,1,10,'2024-11-01'),(2,2,20,'2024-11-02'),(3,3,15,'2024-11-03'),(4,4,30,'2024-11-04'),(5,5,5,'2024-11-05'),(6,6,12,'2024-11-06'),(7,7,8,'2024-11-07'),(8,8,25,'2024-11-08'),(9,9,18,'2024-11-09'),(10,10,14,'2024-11-10'),(11,11,6,'2024-11-11'),(12,12,22,'2024-11-12'),(13,13,17,'2024-11-13'),(14,14,19,'2024-11-14'),(15,15,11,'2024-11-15'),(16,16,9,'2024-11-16'),(17,17,27,'2024-11-17'),(18,18,13,'2024-11-18'),(19,19,21,'2024-11-19'),(20,20,16,'2024-11-20');
/*!40000 ALTER TABLE `salidaproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_empleado` (`id_empleado`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,5,3,'2024-10-01',150.00,'Completada'),(2,2,1,'2024-10-02',75.50,'Pendiente'),(3,8,2,'2024-10-03',200.25,'Completada'),(4,1,4,'2024-10-04',45.00,'Cancelada'),(5,6,3,'2024-10-05',180.75,'Completada'),(6,3,2,'2024-10-06',95.00,'Pendiente'),(7,7,1,'2024-10-07',220.50,'Completada'),(8,4,4,'2024-10-08',60.25,'Completada'),(9,9,2,'2024-10-09',130.00,'Pendiente'),(10,2,2,'2024-10-10',175.50,'Completada'),(11,5,1,'2024-10-11',85.75,'Cancelada'),(12,8,4,'2024-10-12',240.00,'Completada'),(13,1,3,'2024-10-13',110.25,'Pendiente'),(14,6,2,'2024-10-14',195.50,'Completada'),(15,3,1,'2024-10-15',70.00,'Completada'),(16,7,4,'2024-10-16',160.75,'Pendiente'),(17,4,3,'2024-10-17',125.50,'Completada'),(18,9,1,'2024-10-18',210.00,'Completada'),(19,2,2,'2024-10-19',55.25,'Cancelada'),(20,5,4,'2024-10-20',190.75,'Completada'),(21,1,3,'2024-10-21',100.00,'Pendiente'),(22,8,4,'2024-10-22',235.50,'Completada'),(23,3,3,'2024-10-23',80.25,'Pendiente'),(24,6,1,'2024-10-24',145.00,'Pendiente'),(25,7,2,'2024-10-25',205.75,'Completada'),(26,4,4,'2024-10-26',65.50,'Cancelada'),(27,9,1,'2024-10-27',170.00,'Completada'),(28,2,3,'2024-10-28',115.25,'Pendiente'),(29,5,4,'2024-10-29',225.50,'Completada'),(30,8,2,'2024-10-30',90.75,'Completada');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'proyectico_sql'
--

--
-- Dumping routines for database 'proyectico_sql'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-26  8:45:17
