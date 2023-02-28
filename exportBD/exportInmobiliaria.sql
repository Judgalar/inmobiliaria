-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2023 a las 08:33:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IMAGENES`
--

CREATE TABLE `IMAGENES` (
  `IdImagen` int(11) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `IMAGENES`
--

INSERT INTO `IMAGENES` (`IdImagen`, `Tipo`, `Nombre`, `Size`, `Producto`) VALUES
(1, 'image/jpeg', 'ergegrd.jpeg', '6695', 1),
(2, 'image/jpeg', 'ergerger.jpeg', '7724', 1),
(3, 'image/jpeg', 'ergergerg.jpeg', '9096', 2),
(4, 'image/jpeg', 'fefedfcedffg.jpeg', '5969', 2),
(5, 'image/jpeg', 'fefefedfedfe.jpeg', '7410', 2),
(6, 'image/jpeg', 'feferg.jpeg', '7650', 2),
(7, 'image/jpeg', 'feffedfgw.jpeg', '5879', 2),
(8, 'image/jpeg', 'sedzbserh.jpeg', '4430', 2),
(9, 'image/jpeg', '1032875792.jpg', '45262', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTOS`
--

CREATE TABLE `PRODUCTOS` (
  `IdProducto` int(11) NOT NULL,
  `Propietario` int(11) DEFAULT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `CP` varchar(9) NOT NULL,
  `Direccion` varchar(90) NOT NULL,
  `Descripcion` varchar(90) NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `TipoImagen` varchar(20) NOT NULL,
  `Imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `PRODUCTOS`
--

INSERT INTO `PRODUCTOS` (`IdProducto`, `Propietario`, `Categoria`, `Nombre`, `Pais`, `Ciudad`, `CP`, `Direccion`, `Descripcion`, `Precio`, `TipoImagen`, `Imagen`) VALUES
(1, 1, 'Chalets', 'Casa de alffweed', 'España', 'Cullar', '18850', 'C/fefewer 79', 'Hola Amigos', '500000', 'image/jpeg', 'casa1.jpg'),
(2, 2, 'Pisos', 'Piso en Madrid', 'España', 'Madrid', '12121313', 'C/fdw9uiofcw', 'Piso en Madrid 0ewwe eoicvne\r\nfepwjogvwegewgv', '400000', 'image/jpeg', 'piso.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `IdUsuario` int(11) NOT NULL,
  `Correo` varchar(80) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `Telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`IdUsuario`, `Correo`, `Clave`, `Telefono`) VALUES
(1, 'admin@admin', 'admin', '666666666'),
(2, 'usuario@usuario', 'usuario', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `IMAGENES`
--
ALTER TABLE `IMAGENES`
  ADD PRIMARY KEY (`IdImagen`),
  ADD KEY `Producto` (`Producto`);

--
-- Indices de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `Propietario` (`Propietario`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `IMAGENES`
--
ALTER TABLE `IMAGENES`
  MODIFY `IdImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `IMAGENES`
--
ALTER TABLE `IMAGENES`
  ADD CONSTRAINT `IMAGENES_ibfk_1` FOREIGN KEY (`Producto`) REFERENCES `PRODUCTOS` (`IdProducto`);

--
-- Filtros para la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD CONSTRAINT `PRODUCTOS_ibfk_1` FOREIGN KEY (`Propietario`) REFERENCES `USUARIOS` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
