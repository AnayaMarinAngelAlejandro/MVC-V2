-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 18:01:46
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_wwe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_cliente` int(10) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `estado_pedido` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `direccion_envio` varchar(200) NOT NULL,
  `costo_total` decimal(2,0) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id_cliente`, `fecha_pedido`, `metodo_pago`, `estado_pedido`, `id`, `direccion_envio`, `costo_total`, `observaciones`) VALUES
(34, '2023-10-19', 'Efectivo', 'Entregado', 5, 'Calle #12323', '99', 'Fragil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
