-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-12-2020 a las 19:03:51
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15543365_minimarket_gesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `nombre`) VALUES
(1, 'LIMPIEZA'),
(2, 'LACTEO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `nombre`, `apellidos`, `email`, `telefono`, `comentario`) VALUES
(1, 'Angel ', 'Rodrigues Torres', 'angel@gmail.com', '922355434', ''),
(2, 'Maria ', 'Fernandez G.', 'maria@gmail.com', '980562123', ''),
(3, 'Marta', 'Palomino Contreras', 'marta@htomail.com', '985631546', ''),
(4, 'Felipe', 'Ramos R.', 'felipe@hotmail.com', '963987753', ''),
(5, 'Juan ', 'River Molina', 'juan@gmail.com', '987741159', ''),
(6, 'Adrian ', 'Quispe Mala', 'adrian@gmail.com', '987753123', ''),
(7, 'Teresa', 'Donaires Torres', 'teresa@hotmail.com', '9235364', ''),
(8, 'josetti ', 'Valdemar T.', 'josetti_34@hotmail.com', '987123456', ''),
(9, 'Carlos ', 'Huaman Q.', 'carlos_hua@hotmail.com', '951753123', ''),
(10, 'que chu te importa', 'prro', 'pendejo@ptoquelolea.com', 'no se :v', 'xd'),
(11, 'Norma ', 'Basquees C.', 'norma_23@hotmail.com', '963789741', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `ID` int(11) NOT NULL,
  `pedido_ID` int(11) NOT NULL,
  `producto_ID` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`ID`, `pedido_ID`, `producto_ID`, `precio`, `cantidad`, `estado`) VALUES
(1, 1, 16, 12, 1, 1),
(2, 1, 11, 7, 1, 1),
(3, 1, 4, 22, 1, 1),
(4, 1, 7, 10, 1, 1),
(5, 2, 7, 10, 2, 1),
(6, 2, 1, 28, 2, 1),
(7, 2, 17, 16, 1, 1),
(8, 2, 10, 10, 1, 1),
(9, 2, 9, 5, 1, 1),
(10, 3, 9, 5, 1, 1),
(11, 4, 4, 22, 1, 1),
(12, 4, 12, 24, 1, 1),
(13, 4, 14, 20, 1, 1),
(14, 4, 1, 28, 1, 1),
(15, 4, 13, 4, 1, 1),
(16, 4, 16, 12, 2, 1),
(17, 5, 6, 5, 1, 1),
(18, 5, 13, 4, 1, 1),
(19, 5, 5, 15, 3, 1),
(20, 6, 16, 12, 1, 1),
(21, 7, 12, 24, 1, 1),
(22, 8, 11, 7, 1, 1),
(23, 9, 11, 7, 1, 1),
(24, 9, 13, 4, 2, 1),
(25, 10, 16, 12, 1, 1),
(26, 11, 16, 12, 2, 1),
(27, 11, 15, 9, 1, 1),
(28, 11, 14, 20, 1, 1),
(29, 11, 4, 22, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(10) NOT NULL,
  `cliente_ID` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ID`, `cliente_ID`, `total`, `fecha`, `estado`) VALUES
(1, 1, 51, '2020-12-03', 1),
(2, 2, 107, '2020-12-03', 1),
(3, 3, 5, '2020-12-03', 1),
(4, 4, 122, '2020-12-03', 1),
(5, 5, 54, '2020-12-03', 1),
(6, 6, 12, '2020-12-03', 1),
(7, 7, 24, '2020-12-03', 1),
(8, 8, 7, '2020-12-03', 1),
(9, 9, 15, '2020-12-03', 1),
(10, 10, 12, '2020-12-03', 1),
(11, 11, 75, '2020-12-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `categoria_ID` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `titulo`, `descripcion`, `foto`, `precio`, `categoria_ID`, `fecha`, `estado`) VALUES
(1, 'MARSELLA', 'Detergente en Polvo MARSELLA Aromaterapia Petalos Relajantes Bolsa 4Kg', '1.jpg', 28, 1, '2020-12-02', 1),
(2, 'NOVA', 'Papel Toalla NOVA Clásica Mega Rollo Paquete 4un', '4.jpg', 8, 1, '2020-12-03', 1),
(3, 'SAPOLIO', 'Lejía SAPOLIO Galonera 5L', '5.jpg', 10, 1, '2020-12-03', 1),
(4, 'SUAVE', 'Papel Higiénico SUAVE Rindemax Doble Hoja Paquete 40un', '6.jpg', 22, 1, '2020-12-03', 1),
(5, 'AYUDIN', 'Lavavajillas Líquido AYUDÍN Limón Botella 1.2L', '7.jpg', 15, 1, '2020-12-03', 1),
(6, 'BOLÍVAR', 'Jabón para Ropa BOLIVAR Glicerina 210g Paquete 2un', '8.jpg', 5, 1, '2020-12-03', 1),
(7, 'CLOROX', 'Papel Higiénico SUAVE Cuidado Completo Doble Hoja Paquete 40un', '10.jpg', 10, 1, '2020-12-03', 1),
(8, 'ELITE', 'Servilletas de Papel ELITE Dobladas en 4 Paquete 300un', '11.jpg', 9, 1, '2020-12-03', 1),
(9, 'BOREAL', 'Papel Toalla BOREAL Doble Hoja Paquete 3un', '12.jpg', 5, 1, '2020-12-03', 1),
(10, 'BOREAL', 'Limpiador Multiuso BOREAL Lavanda Galonera 4L', '14.jpg', 10, 1, '2020-12-03', 1),
(11, 'DKASA', 'Limpiatodo DKASA Aroma Bebé Contenido 1800ml', '15.jpg', 7, 1, '2020-12-03', 1),
(12, 'BOLÍVAR', 'Detergente en Polvo BOLIVAR Active Duo Bolsa 2.6Kg', '17.jpg', 24, 1, '2020-12-03', 1),
(13, 'SCOTT', 'Paño Reutilizable SCOTT Limpieza Diaria Paquete 7un   ', '21.jpg', 4, 1, '2020-12-03', 1),
(14, 'DOWNY', 'Suavizante DOWNY Libre Enjuague Floral Galonera 2.8L', '25.jpg', 20, 1, '2020-12-03', 1),
(15, 'SCOTCH BRITE', 'Esponja parrillas Scoth Brite x2un', '26.jpg', 9, 1, '2020-12-03', 1),
(16, 'CIF', 'Limpia Vidrios CIF Gatillo 500ml', '30.jpg', 12, 1, '2020-12-03', 1),
(17, 'ETERNA', 'Pack ETERNA Limpiavidrios Botella 500ml+ Cepillo + 1 Par de Guantes', '31.jpg', 16, 1, '2020-12-03', 1),
(18, 'MARSELLA', 'Detergente en Polvo MARSELLA Aromaterapia Bolsa 780g', '3.jpg', 7, 1, '2020-12-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre_usuario`, `clave`, `estado`) VALUES
(1, 'id15543365_junnior', 'H(m#XBnK{0-kR5X_', 1),
(2, 'admin', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
