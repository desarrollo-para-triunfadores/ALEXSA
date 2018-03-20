-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2018 a las 03:00:31
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alexsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umedida_id` int(11) UNSIGNED DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL,
  `subrubro_id` int(11) UNSIGNED DEFAULT NULL,
  `minimo_vendible` int(11) DEFAULT NULL,
  `alto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ancho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_id` int(10) UNSIGNED DEFAULT NULL,
  `talle_id` int(10) UNSIGNED DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_tango` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `umedida_id`, `marca_id`, `subrubro_id`, `minimo_vendible`, `alto`, `ancho`, `color_id`, `talle_id`, `material_id`, `descripcion`, `imagen`, `estado`, `cod_tango`, `created_at`, `updated_at`) VALUES
(1, 'Tenaza Carpintero 7', 6, 2, 11, 1, NULL, NULL, 5, NULL, NULL, NULL, 'tenaza8.jpg', NULL, NULL, NULL, NULL),
(2, 'Tenaza Carpintero 8', 6, 3, 11, 1, NULL, NULL, 6, NULL, NULL, NULL, 'tenaza.jpg', NULL, NULL, NULL, NULL),
(3, 'Alicate c. oblic/crom', 6, 3, 11, 1, NULL, NULL, 0, NULL, NULL, NULL, 'alicate universal.jpg', NULL, NULL, NULL, NULL),
(4, 'Pinza de fuerza 10 imp', 6, 3, 11, 1, NULL, NULL, 6, NULL, NULL, NULL, 'pinza-universal-crossman.jpg', NULL, NULL, NULL, NULL),
(5, 'Soldadora Inverter MMA Shyuan 160 A', 6, 3, 12, 1, NULL, NULL, 0, NULL, NULL, 'Soldadora de 160 Amperios IGTB', 'soldadora-160.jpg', NULL, NULL, NULL, NULL),
(7, 'Soldadora Inverter MMA TIG 200 A', 6, 7, 12, 1, NULL, NULL, 0, NULL, NULL, 'Compactas, más eficaces y de mayor rendimiento\r\n* Alta tecnología y excelente rendimiento\r\n* Capaces de fundir acero inoxidable, fundición y hierro\r\n* Con protección por bajo voltaje sobre corriente recalentamiento, etc\r\n* Salida de corriente constante que hace más estable el arco', 'soldadora-gamma.jpg', NULL, NULL, NULL, NULL),
(8, 'Soldadora MMA 250 A', 6, 5, 12, 1, NULL, NULL, 5, NULL, NULL, 'Compactas, más eficaces y de mayor rendimiento\r\n* Alta tecnología y excelente rendimiento\r\n* Capaces de fundir acero inoxidable, fundición y hierro\r\n* Con protección por bajo voltaje sobre corriente recalentamiento, etc\r\n* Salida de corriente constante que hace más estable el arco', 'soldadora_mig_250.jpg', NULL, NULL, NULL, NULL),
(9, 'Tornillo Allen 12', NULL, 6, 13, 50, NULL, NULL, NULL, NULL, NULL, 'Cabeza Cilindrica', 'tornillos-allen.jpg', NULL, NULL, NULL, NULL),
(10, 'Tornillo Allen 9', NULL, 6, 13, 50, NULL, NULL, NULL, NULL, NULL, 'Cabeza Cilindrica', 'tornillos-allen.jpg', NULL, NULL, NULL, NULL),
(11, 'Tornillo Allen 80', 6, 6, 13, 100, NULL, NULL, NULL, NULL, NULL, 'Cabeza Cilindrica', 'tornillos-allen.jpg', NULL, NULL, NULL, NULL),
(12, 'Tornillo Allen 200', 6, 6, 13, 50, NULL, NULL, NULL, NULL, NULL, 'Cabeza Cilindrica', 'tornillos-allen.jpg', NULL, NULL, NULL, NULL),
(17, 'Llave Combinada 1/4\'\'', 6, 6, 11, 1, NULL, NULL, NULL, NULL, 3, NULL, 'G:\\xampp\\tmp\\php8A64.tmp', NULL, NULL, '2018-03-05 14:29:34', '2018-03-05 14:29:34'),
(23, 'XXX', 6, 4, 2, 1, NULL, NULL, NULL, NULL, 0, 'Descripcion 1 | Descripcion 2', 'articulo_1521509570.png', NULL, NULL, '2018-03-20 01:32:50', '2018-03-20 01:32:50'),
(24, 'dasd', 1, 1, 1, 1, NULL, NULL, NULL, NULL, 0, NULL, 'sin imagen', NULL, 4442123, '2018-03-20 01:33:49', '2018-03-20 01:33:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_ventas`
--

CREATE TABLE `articulos_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `importe` double NOT NULL,
  `precio_unitario` double NOT NULL,
  `articulo_id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE `auditorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `tabla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemento_id` int(11) NOT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dato_nuevo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dato_anterior` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`id`, `tabla`, `elemento_id`, `accion`, `dato_nuevo`, `dato_anterior`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'paises', 8, 'alta', 'Colombia', NULL, 1, '2017-01-29 16:57:01', '2017-01-29 16:57:01'),
(2, 'paises', 8, 'modificacion', 'Panamá', 'Colombia', 1, '2017-01-29 17:09:55', '2017-01-29 17:09:55'),
(10, 'paises', 19, 'alta', 'Cuba', NULL, 1, '2017-01-30 19:04:42', '2017-01-30 19:04:42'),
(11, 'paises', 18, 'eliminacion', NULL, 'Eslovaquia', 1, '2017-01-30 19:13:16', '2017-01-30 19:13:16'),
(12, 'provincias', 14, 'alta', 'San Luis', NULL, 1, '2017-01-30 19:25:53', '2017-01-30 19:25:53'),
(13, 'provincias', 15, 'alta', 'nombre: Mato Grosso, pais_id: 3', NULL, 1, '2017-01-30 19:48:37', '2017-01-30 19:48:37'),
(14, 'provincias', 9, 'modificacion', 'nombre: Neuquén| pais_id: 1', 'La Pampa', 1, '2017-01-30 19:51:12', '2017-01-30 19:51:12'),
(15, 'provincias', 9, 'modificacion', 'nombre: Tierra del Fuego| pais_id: 1', 'Neuquén', 1, '2017-01-30 19:52:19', '2017-01-30 19:52:19'),
(16, 'provincias', 9, 'modificacion', 'nombre: Neuquén| pais_id: 1', 'nombre: Tierra del Fuego| pais_id: 1', 1, '2017-01-30 19:54:34', '2017-01-30 19:54:34'),
(17, 'paises', 8, 'eliminacion', NULL, 'Santa Fe', 1, '2017-01-30 19:56:07', '2017-01-30 19:56:07'),
(18, 'localidades', 15, 'alta', 'nombre: Aristobulo del Valle|| provincia_id: 2', NULL, 1, '2017-01-30 20:05:49', '2017-01-30 20:05:49'),
(19, 'localidades', 14, 'modificacion', 'nombre: Junin || provincia_id: 4', 'nombre: San Lorenzo || provincia_id: 11', 1, '2017-01-30 20:12:19', '2017-01-30 20:12:19'),
(20, 'localidades', 14, 'eliminacion', NULL, 'nombre: Junin || provincia_id: 4', 1, '2017-01-30 20:14:25', '2017-01-30 20:14:25'),
(21, 'colores', 9, 'alta', 'nombre: Verdegrisaceo || codigo: #66b9b0', NULL, 1, '2017-01-30 20:27:05', '2017-01-30 20:27:05'),
(22, 'colores', 9, 'modificacion', 'nombre: Marrón || codigo: #6f2e22', 'nombre: Verdegrisaceo || codigo: #66b9b0', 1, '2017-01-30 20:28:16', '2017-01-30 20:28:16'),
(23, 'localidades', 9, 'eliminacion', NULL, 'nombre: Marrón || codigo: #6f2e22', 1, '2017-01-30 20:29:37', '2017-01-30 20:29:37'),
(24, 'unidades_medidas', 11, 'alta', 'unidad:  || detalle: tumina', NULL, 1, '2017-01-31 13:36:40', '2017-01-31 13:36:40'),
(25, 'materiales', 8, 'alta', 'nombre material: Cobre', NULL, 1, '2017-01-31 14:15:51', '2017-01-31 14:15:51'),
(26, 'materiales', 8, 'modificacion', 'nombre material: Atun', 'nombre: Cobre', 1, '2017-01-31 14:21:02', '2017-01-31 14:21:02'),
(27, 'materiales', 8, 'eliminacion', NULL, 'nombre: Atun', 1, '2017-01-31 14:22:23', '2017-01-31 14:22:23'),
(28, 'tipos', 5, 'alta', 'nombre: coso || descripcion: papelitos, lapices', NULL, 1, '2017-01-31 14:32:14', '2017-01-31 14:32:14'),
(29, 'tipos', 4, 'modificacion', 'nombre: Papeleria copada || descripcion: papelitos, lapices', 'nombre: Papeleria ameo || descripcion: papelitos, lapices', 1, '2017-01-31 14:39:34', '2017-01-31 14:39:34'),
(30, 'materiales', 4, 'eliminacion', NULL, 'nombre: Papeleria copada || descripcion: papelitos, lapices', 1, '2017-01-31 14:39:59', '2017-01-31 14:39:59'),
(31, 'responiva', 5, 'alta', 'nombre: Excento || iva: 21 || Factura: W', NULL, 1, '2017-01-31 14:56:39', '2017-01-31 14:56:39'),
(32, 'responiva', 5, 'modificacion', 'nombre: Monotributista || iva: gg || Factura: Y', 'nombre: Excento || iva: 21 || Factura: W', 1, '2017-01-31 15:00:47', '2017-01-31 15:00:47'),
(33, 'responiva', 5, 'eliminacion', NULL, 'nombre: Monotributista || iva: 0 || Factura: Y', 1, '2017-01-31 15:02:08', '2017-01-31 15:02:08'),
(34, 'responiva', 6, 'alta', 'nombre: nas || iva: 100 || Factura: F', NULL, 1, '2017-01-31 19:49:03', '2017-01-31 19:49:03'),
(35, 'responiva', 7, 'alta', 'nombre: nas || iva: 78 || Factura: C', NULL, 1, '2017-01-31 19:51:30', '2017-01-31 19:51:30'),
(36, 'responiva', 7, 'eliminacion', NULL, 'nombre: nas || iva: 78 || Factura: C', 1, '2017-01-31 19:56:01', '2017-01-31 19:56:01'),
(37, 'responiva', 8, 'alta', 'nombre: nas || iva: 423 || Factura: 6', NULL, 1, '2017-01-31 19:56:20', '2017-01-31 19:56:20'),
(38, 'responiva', 8, 'eliminacion', NULL, 'nombre: nas || iva: 423 || Factura: 6', 1, '2017-01-31 19:57:46', '2017-01-31 19:57:46'),
(39, 'responiva', 6, 'eliminacion', NULL, 'nombre: nas || iva: 100 || Factura: F', 1, '2017-01-31 19:57:54', '2017-01-31 19:57:54'),
(40, 'ivas', 2, 'alta', 'iva: 78%', NULL, 1, '2017-01-31 20:37:47', '2017-01-31 20:37:47'),
(41, 'ivas', 2, 'modificacion', 'iva: 50%', 'iva: 78%', 1, '2017-01-31 20:41:55', '2017-01-31 20:41:55'),
(42, 'ivas', 2, 'eliminacion', NULL, 'iva: 50%', 1, '2017-01-31 20:42:26', '2017-01-31 20:42:26'),
(43, 'bancos', 3, 'alta', 'nombre: HSBC', NULL, 1, '2017-01-31 20:53:09', '2017-01-31 20:53:09'),
(44, 'bancos', 3, 'modificacion', 'nombre: HSBC', 'nombre: HSBC', 1, '2017-01-31 21:02:22', '2017-01-31 21:02:22'),
(45, 'bancos', 3, 'modificacion', 'nombre: Boston', 'nombre: HCBC', 1, '2017-01-31 21:04:08', '2017-01-31 21:04:08'),
(46, 'unidades_medidas', 3, 'eliminacion', NULL, 'unidad:  || detalle: metros cuadrados', 1, '2017-01-31 21:05:25', '2017-01-31 21:05:25'),
(47, 'bancos', 3, 'eliminacion', NULL, 'nombre: Boston', 1, '2017-01-31 21:08:13', '2017-01-31 21:08:13'),
(48, 'talles', 8, 'alta', 'talle: Talle nuevo', NULL, 1, '2017-02-01 13:09:02', '2017-02-01 13:09:02'),
(49, 'talles', 7, 'modificacion', 'talle: Talle modificado', 'talle: Talle nuevo', 1, '2017-02-01 13:19:54', '2017-02-01 13:19:54'),
(50, 'talles', 7, 'eliminacion', NULL, 'talle: Talle modificado', 1, '2017-02-01 13:23:49', '2017-02-01 13:23:49'),
(51, 'talles', 8, 'eliminacion', NULL, 'talle: Talle nuevo', 1, '2017-02-01 13:23:59', '2017-02-01 13:23:59'),
(52, 'clientes', 6, 'alta', 'nombre: Bione || apellido: Leonardo || empresa: El Toba Tano SRL || responsabilidad tributaria:1 || CUIT:20645978045 || DNI:  || descripcion: Usan nuestra indumentaria y solicitan nuestro merchandising || teléfono: 3624744011 || email: bione@toba.com || l', NULL, 1, '2017-02-01 13:44:36', '2017-02-01 13:44:36'),
(53, 'clientes', 6, 'modificacion', 'nombre: Leandro || apellido: Bione || empresa: El Toba Tano SRL || responsabilidad tributaria:1 || CUIT:20645978045 || DNI:  || descripcion: Solicitan nuestro merchandising periodicamente desde 2014 || teléfono: 3624744011 || email: bione@toba.com || loca', 'nombre: Bione || apellido: Leonardo || empresa: El Toba Tano SRL || responsabilidad tributaria:1 || CUIT:20645978045 || DNI:  || descripcion: Usan nuestra indumentaria y solicitan nuestro merchandising || teléfono: 3624744011 || email: bione@toba.com || l', 1, '2017-02-01 13:59:51', '2017-02-01 13:59:51'),
(54, 'clientes', 6, 'eliminacion', NULL, 'nombre: Leandro || apellido: Bione || empresa: El Toba Tano SRL || responsabilidad tributaria:1 || CUIT:20645978045 || DNI:  || descripcion: Solicitan nuestro merchandising periodicamente desde 2014 || teléfono: 3624744011 || email: bione@toba.com || loca', 1, '2017-02-01 14:00:38', '2017-02-01 14:00:38'),
(55, 'insumos', 42, 'alta', 'nombre: Remera Negra (Talle: M) || unidad_medida_id: 6 || alto:  || ancho: || stock:20 || stock minimo: 10 || costo: 14.50 || costo anterior:  || descripcion:  || talle_id: 2 || color_id: 5 || material_id: 2', NULL, 1, '2017-02-01 14:44:49', '2017-02-01 14:44:49'),
(56, 'insumos', 7, 'modificacion', 'nombre: remera negra cambiaaaadaaa XDDDD || unidad_medida_id: 6 || alto:  || ancho: || stock:0 || stock minimo: 250 || costo: 0 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 'nombre: Remera Algodon Negra XXL || unidad_medida_id: 6 || alto:  || ancho: || stock:0 || stock minimo: 250 || costo: 0 || costo anterior:  || descripcion:  || talle_id: 5 || color_id: 5 || material_id: 1', 1, '2017-02-01 14:50:44', '2017-02-01 14:50:44'),
(57, 'insumos', 7, 'eliminacion', NULL, 'nombre: remera negra cambiaaaadaaa XDDDD || unidad_medida_id: 6 || alto:  || ancho: || stock:0 || stock minimo: 250 || costo: 0 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 1, '2017-02-01 14:51:09', '2017-02-01 14:51:09'),
(58, 'compras', 75, 'alta', 'concepto: Esto es una prueba || importe insumos: 1020 || costo envio: 50 || importe total: 1070 || fecha_solicitud: 01-02-2017 || hora_solicitud: 12:35 || fecha compra:01-02-2017 || hora_compra:12:35 || confirmado: 1 || pagado: 1 || recibido: 1 || userCom', NULL, 1, '2017-02-01 15:35:09', '2017-02-01 15:35:09'),
(59, 'paises', 20, 'alta', 'nombre: Uzbekisqtan', NULL, 1, '2017-02-02 21:51:48', '2017-02-02 21:51:48'),
(60, 'users', 3, 'alta', 'nombre: Cranson Brian || email: bcranson@mallcom.com || password: $2y$10$V1inJuY.Rh5oQmDNZieTl.1L9yhgecXAH1t6yNo0oGvMAfByUxLNq || imagen:usuario_1486128533.jpg || rol_id:2', NULL, 1, '2017-02-03 13:28:53', '2017-02-03 13:28:53'),
(61, 'proveedores', 10, 'alta', 'nombre: TuHermana En-MiKma SRL || cuit: 45645845109 || localidad_id: 2 || direccion:Salta 978 || horario de atencion: 10:00 a  y de 18:00 a 21:00 || teléfono:322245117 || celular:2165187779 || web:www.nada.com || rubro_id:8 || imagen:GN_1486131240.PNG', NULL, 1, '2017-02-03 14:14:00', '2017-02-03 14:14:00'),
(62, 'proveedores', 10, 'modificacion', 'nombre: maruSA || cuit: 45645845109 || localidad_id: 2 || direccion:Salta 978 || horario de atencion: 10:00 a  y de 18:00 a 21:00 || teléfono:322245117 || celular:2165187779 || web:www.nada.com || rubro_id:8 || imagen:GN_1486131240.PNG', 'nombre: TuHermana En-MiKma SRL || cuit: 45645845109 || localidad_id: 2 || direccion:Salta 978 || horario de atencion: 10:00 a  y de 18:00 a 21:00 || teléfono:322245117 || celular:2165187779 || web:www.nada.com || rubro_id:8 || imagen:GN_1486131240.PNG', 1, '2017-02-03 15:25:53', '2017-02-03 15:25:53'),
(63, 'proveedor', 10, 'eliminacion', NULL, 'nombre: maruSA || cuit: 45645845109 || localidad_id: 2 || direccion:Salta 978 || horario de atencion: 10:00 a  y de 18:00 a 21:00 || teléfono:322245117 || celular:2165187779 || web:www.nada.com || rubro_id:8 || imagen:GN_1486131240.PNG', 1, '2017-02-03 15:26:22', '2017-02-03 15:26:22'),
(64, 'clientes', 6, 'alta', 'nombre: Mario || apellido: Baracus || empresa:  || responsabilidad tributaria:2 || CUIT:20355647119 || DNI:  || descripcion: El humorista\r\n || teléfono: 3624123123 || email: marito@baracus.com || localidad_id: 9 || direccion: Peru 701', NULL, 1, '2017-02-05 22:54:36', '2017-02-05 22:54:36'),
(65, 'insumos', 20, 'modificacion', 'nombre: Destapador 55mm || unidad_medida_id: 6 || alto:  || ancho: || stock:1155 || stock minimo: 190 || costo: 3.5 || costo anterior: 3 || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 'nombre: Destapador 55mm || unidad_medida_id: 6 || alto:  || ancho: || stock:1155 || stock minimo: 200 || costo: 3.5 || costo anterior: 3 || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 1, '2017-02-10 19:18:15', '2017-02-10 19:18:15'),
(66, 'compras', 76, 'alta', 'concepto: Esto es una prueba || importe insumos: 2850 || costo envio: 150 || importe total: 3000 || fecha_solicitud: 14-02-2017 || hora_solicitud: 10:22 || fecha compra:14-02-2017 || hora_compra:10:22 || confirmado: 1 || pagado: 1 || recibido: 1 || userCo', NULL, 1, '2017-02-14 13:22:08', '2017-02-14 13:22:08'),
(67, 'compras', 77, 'alta', 'concepto: Esto es una prueba || importe insumos: 2850 || costo envio: 150 || importe total: 3000 || fecha_solicitud: 14-02-2017 || hora_solicitud: 11:23 || fecha compra:14-02-2017 || hora_compra:11:23 || confirmado: 1 || pagado: 1 || recibido: 1 || userCo', NULL, 1, '2017-02-14 14:23:29', '2017-02-14 14:23:29'),
(68, 'compras', 78, 'alta', 'concepto: Esto es una prueba || importe insumos: 216 || costo envio: 4 || importe total: 220 || fecha_solicitud: 14-02-2017 || hora_solicitud: 11:25 || fecha compra:14-02-2017 || hora_compra:11:25 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra', NULL, 1, '2017-02-14 14:25:58', '2017-02-14 14:25:58'),
(69, 'compras', 79, 'alta', 'concepto: Reposicion de stock || importe insumos: 216 || costo envio: 4 || importe total: 220 || fecha_solicitud: 14-02-2017 || hora_solicitud: 11:44 || fecha compra:14-02-2017 || hora_compra:11:44 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 14:44:10', '2017-02-14 14:44:10'),
(70, 'compras', 80, 'alta', 'concepto: Reposicion de stock || importe insumos: 85 || costo envio: 25 || importe total: 110 || fecha_solicitud: 14-02-2017 || hora_solicitud: 11:49 || fecha compra:14-02-2017 || hora_compra:11:49 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 14:49:37', '2017-02-14 14:49:37'),
(71, 'compras', 81, 'alta', 'concepto: Reposicion de stock || importe insumos: 126 || costo envio: 4 || importe total: 130 || fecha_solicitud: 14-02-2017 || hora_solicitud: 12:53 || fecha compra:14-02-2017 || hora_compra:12:53 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 15:53:26', '2017-02-14 15:53:26'),
(72, 'compras', 82, 'alta', 'concepto: Reposicion de stock || importe insumos: 78 || costo envio: 12 || importe total: 90 || fecha_solicitud: 14-02-2017 || hora_solicitud: 13:00 || fecha compra:14-02-2017 || hora_compra:13:00 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 16:00:00', '2017-02-14 16:00:00'),
(73, 'compras', 83, 'alta', 'concepto: Reposicion de stock || importe insumos: 102 || costo envio: 34 || importe total: 136 || fecha_solicitud: 14-02-2017 || hora_solicitud: 13:03 || fecha compra:14-02-2017 || hora_compra:13:03 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 16:03:06', '2017-02-14 16:03:06'),
(74, 'compras', 84, 'alta', 'concepto: Reposicion de stock || importe insumos: 750 || costo envio: 50 || importe total: 800 || fecha_solicitud: 14-02-2017 || hora_solicitud: 19:30 || fecha compra:14-02-2017 || hora_compra:19:30 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 22:30:04', '2017-02-14 22:30:04'),
(75, 'compras', 85, 'alta', 'concepto: Reposicion de stock || importe insumos: 37142.74 || costo envio:  || importe total: 37142.74 || fecha_solicitud: 14-02-2017 || hora_solicitud: 19:33 || fecha compra:14-02-2017 || hora_compra:19:33 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 22:33:07', '2017-02-14 22:33:07'),
(76, 'compras', 86, 'alta', 'concepto: Reposicion de stock || importe insumos: 452.64 || costo envio:  || importe total: 452.64 || fecha_solicitud: 14-02-2017 || hora_solicitud: 19:36 || fecha compra:14-02-2017 || hora_compra:19:36 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 22:36:22', '2017-02-14 22:36:22'),
(77, 'compras', 87, 'alta', 'concepto: Reposicion de stock || importe insumos: 4 || costo envio: 4 || importe total: 8 || fecha_solicitud: 14-02-2017 || hora_solicitud: 20:37 || fecha compra:14-02-2017 || hora_compra:20:37 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 23:37:58', '2017-02-14 23:37:58'),
(78, 'compras', 88, 'alta', 'concepto: Reposicion de stock || importe insumos: 1387.5 || costo envio:  || importe total: 1387.5 || fecha_solicitud: 14-02-2017 || hora_solicitud: 20:42 || fecha compra:14-02-2017 || hora_compra:20:42 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 23:42:03', '2017-02-14 23:42:03'),
(79, 'compras', 89, 'alta', 'concepto: Reposicion de stock || importe insumos: 130 || costo envio: 14 || importe total: 144 || fecha_solicitud: 14-02-2017 || hora_solicitud: 20:49 || fecha compra:14-02-2017 || hora_compra:20:49 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 23:49:20', '2017-02-14 23:49:20'),
(80, 'compras', 90, 'alta', 'concepto: Reposicion de stock || importe insumos: 680 || costo envio: 19 || importe total: 699 || fecha_solicitud: 14-02-2017 || hora_solicitud: 20:56 || fecha compra:14-02-2017 || hora_compra:20:56 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-14 23:56:45', '2017-02-14 23:56:45'),
(81, 'compras', 91, 'alta', 'concepto: Reposicion de stock || importe insumos: 147 || costo envio: 12 || importe total: 159 || fecha_solicitud: 14-02-2017 || hora_solicitud: 21:04 || fecha compra:14-02-2017 || hora_compra:21:04 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 00:04:57', '2017-02-15 00:04:57'),
(82, 'compras', 92, 'alta', 'concepto: Reposicion de stock || importe insumos: 259 || costo envio:  || importe total: 259 || fecha_solicitud: 14-02-2017 || hora_solicitud: 21:45 || fecha compra:14-02-2017 || hora_compra:21:45 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 00:45:08', '2017-02-15 00:45:08'),
(83, 'compras', 93, 'alta', 'concepto: Reposicion de stock || importe insumos: 31.49 || costo envio: 41 || importe total: 72.49 || fecha_solicitud: 14-02-2017 || hora_solicitud: 21:56 || fecha compra:14-02-2017 || hora_compra:21:56 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 00:56:50', '2017-02-15 00:56:50'),
(84, 'compras', 94, 'alta', 'concepto: Reposicion de stock || importe insumos: 984 || costo envio: 25 || importe total: 1009 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:16 || fecha compra:14-02-2017 || hora_compra:22:16 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:16:17', '2017-02-15 01:16:17'),
(85, 'compras', 95, 'alta', 'concepto: Reposicion de stock || importe insumos: 984 || costo envio: 25 || importe total: 1009 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:17 || fecha compra:14-02-2017 || hora_compra:22:17 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:17:19', '2017-02-15 01:17:19'),
(86, 'compras', 96, 'alta', 'concepto: Reposicion de stock || importe insumos: 875 || costo envio: 50 || importe total: 925 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:23 || fecha compra:14-02-2017 || hora_compra:22:23 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:23:13', '2017-02-15 01:23:13'),
(87, 'compras', 97, 'alta', 'concepto: Reposicion de stock || importe insumos: 875 || costo envio: 50 || importe total: 925 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:23 || fecha compra:14-02-2017 || hora_compra:22:23 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:23:24', '2017-02-15 01:23:24'),
(88, 'compras', 98, 'alta', 'concepto: Reposicion de stock || importe insumos: 2484 || costo envio: 12 || importe total: 2496 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:40 || fecha compra:14-02-2017 || hora_compra:22:40 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:40:45', '2017-02-15 01:40:45'),
(89, 'compras', 99, 'alta', 'concepto: Reposicion de stock || importe insumos: 49 || costo envio: 14 || importe total: 63 || fecha_solicitud: 14-02-2017 || hora_solicitud: 22:46 || fecha compra:14-02-2017 || hora_compra:22:46 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 01:46:26', '2017-02-15 01:46:26'),
(90, 'compras', 100, 'alta', 'concepto: Reposicion de stock || importe insumos: 162 || costo envio: 15 || importe total: 177 || fecha_solicitud: 15-02-2017 || hora_solicitud: 16:11 || fecha compra:15-02-2017 || hora_compra:16:11 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-15 19:11:30', '2017-02-15 19:11:30'),
(91, 'compras', 101, 'alta', 'concepto: Reposicion de stock || importe insumos: 270 || costo envio: 6 || importe total: 276 || fecha_solicitud: 17-02-2017 || hora_solicitud: 10:34 || fecha compra:17-02-2017 || hora_compra:10:34 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-17 13:34:01', '2017-02-17 13:34:01'),
(92, 'compras', 102, 'alta', 'concepto: Reposicion de stock || importe insumos: 1998 || costo envio: 50 || importe total: 2048 || fecha_solicitud: 18-02-2017 || hora_solicitud: 11:41 || fecha compra:18-02-2017 || hora_compra:11:41 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-18 14:41:19', '2017-02-18 14:41:19'),
(93, 'localidades', 16, 'alta', 'nombre: Quitilipi || provincia_id: 1', NULL, 1, '2017-02-18 20:45:15', '2017-02-18 20:45:15'),
(94, 'compras', 103, 'alta', 'concepto: Reposicion de stock || importe insumos: 175 || costo envio: 50 || importe total: 225 || fecha_solicitud: 19-02-2017 || hora_solicitud: 00:53 || fecha compra:19-02-2017 || hora_compra:00:53 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-19 03:53:41', '2017-02-19 03:53:41'),
(95, 'localidades', 17, 'alta', 'nombre: Villa Carlos Paz || provincia_id: 6', NULL, 2, '2017-02-20 00:25:00', '2017-02-20 00:25:00'),
(96, 'proveedores', 1, 'eliminacion', NULL, 'nombre: Textil Mandiyu || cuit: 30456887139 || localidad_id: 1 || direccion:Belgrano 1700 || horario de atencion: 08:00 a  y de 16:30 a 21:00 || teléfono:3764875112 || celular:3764875541 || web:www.textilmandi.com.ar || rubro_id:2 || imagen:GN_1480942086.jpg', 2, '2017-02-20 00:25:51', '2017-02-20 00:25:51'),
(97, 'provincias', 16, 'alta', 'nombre: Antofagasta|| pais_id: 7', NULL, 2, '2017-02-20 00:31:43', '2017-02-20 00:31:43'),
(98, 'localidades', 18, 'alta', 'nombre: Cobresal || provincia_id: 16', NULL, 2, '2017-02-20 00:32:04', '2017-02-20 00:32:04'),
(99, 'proveedores', 2, 'eliminacion', NULL, 'nombre: Crocs || cuit: 25456456711 || localidad_id: 10 || direccion:Belgrano 152 || horario de atencion: 07:30 a  y de 17:00 a 20:00 || teléfono:3766982011 || celular:3766551197 || web:www.crocsdev.com || rubro_id:3 || imagen:GN_1480954110.png', 2, '2017-02-20 00:34:17', '2017-02-20 00:34:17'),
(100, 'proveedores', 10, 'modificacion', 'nombre: Textil Mandiyu || cuit: 30456887139 || localidad_id: 1 || direccion:Belgrano 1700 || horario de atencion: 08:30 a  y de 17:00 a 20:30 || teléfono:3764875112 || celular:3764875541 || web:www.textilmandi.com.ar || rubro_id:2 || imagen:GN_1487553657.jpg', 'nombre: Textil Mandiyu || estado: activo || cuit: 30456887139 || localidad_id: 1 || direccion:Belgrano 1700 || horario de atencion:  a  y de  a  || teléfono:3764875112 || celular:3764875541 || web:www.textilmandi.com.ar || rubro_id:2 || imagen:sin imagen', 2, '2017-02-20 01:20:57', '2017-02-20 01:20:57'),
(101, 'proveedores', 11, 'modificacion', 'nombre: Insumos Parana SH || cuit: 2045689034 || localidad_id: 2 || direccion:Neuquen 2013 || horario de atencion: 07:30 a  y de 16:30 a 20:30 || teléfono:3624558401 || celular:362487749 || web:www.parana.com.ar || rubro_id:3 || imagen:GN_1487553951.png', 'nombre: Insumos Parana SH || estado: activo || cuit: 2045689034 || localidad_id: 2 || direccion:Neuquen 2013 || horario de atencion:  a  y de  a  || teléfono:3624558401 || celular:362487749 || web:www.parana.com.ar || rubro_id:3 || imagen:sin imagen', 2, '2017-02-20 01:25:51', '2017-02-20 01:25:51'),
(102, 'proveedores', 12, 'modificacion', 'nombre: Plasticos Castelli || cuit: 2033689034 || localidad_id: 16 || direccion:Jujuy 745 || horario de atencion: 08:00 a  y de 17:00 a 20:00 || teléfono:3624558991 || celular:362487749 || web:www.pcastelli.com || rubro_id:4 || imagen:GN_1487554094.jpg', 'nombre: Plasticos Castelli || estado: activo || cuit: 2033689034 || localidad_id: 1 || direccion:Jujuy 745 || horario de atencion:  a  y de  a  || teléfono:3624558991 || celular:362487749 || web:www.pcastelli.com || rubro_id:4 || imagen:sin imagen', 2, '2017-02-20 01:28:14', '2017-02-20 01:28:14'),
(103, 'proveedores', 8, 'eliminacion', NULL, 'nombre: Obbi One SH || estado: inactivo || cuit: 22564585664 || localidad_id: 12 || direccion:San Martin 241 || horario de atencion: 08:00 a  y de 17:00 a 21:00 || teléfono:3624236411 || celular:362415236411 || web:www.lafuerza.com || rubro_id:4 || imagen:GN_1483994098.jpg', 2, '2017-02-20 02:09:31', '2017-02-20 02:09:31'),
(104, 'paises', 10, 'eliminacion', NULL, 'Camerun', 2, '2017-02-20 17:59:32', '2017-02-20 17:59:32'),
(105, 'localidades', 19, 'alta', 'nombre: Puerto Iguazú || provincia_id: 1', NULL, 2, '2017-02-20 19:27:30', '2017-02-20 19:27:30'),
(106, 'localidades', 19, 'modificacion', 'nombre: Puerto Iguazú || provincia_id: 2', 'nombre: Puerto Iguazú || provincia_id: 1', 2, '2017-02-20 19:27:57', '2017-02-20 19:27:57'),
(107, 'compras', 104, 'alta', 'concepto: Reposicion de stock || importe insumos: 88 || costo envio: 21 || importe total: 109 || fecha_solicitud: 20-02-2017 || hora_solicitud: 16:31 || fecha compra:20-02-2017 || hora_compra:16:31 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 2, '2017-02-20 19:31:32', '2017-02-20 19:31:32'),
(108, 'paises', 13, 'eliminacion', NULL, 'Inglaterra', 2, '2017-02-20 23:50:52', '2017-02-20 23:50:52'),
(109, 'clientes', 6, 'modificacion', 'nombre: Mario || apellido: Baracus || empresa:  || responsabilidad tributaria:2 || CUIT:20355647119 || DNI:  || descripcion: El humorista\r\n || teléfono: 3624123123 || email: marito@baracus.com || localidad_id: 17 || direccion: Peru 701', 'nombre: Mario || apellido: Baracus || empresa:  || responsabilidad tributaria:2 || CUIT:20355647119 || DNI:  || descripcion: El humorista\r\n || teléfono: 3624123123 || email: marito@baracus.com || localidad_id: 9 || direccion: Peru 701', 2, '2017-02-20 23:52:01', '2017-02-20 23:52:01'),
(110, 'insumos', 43, 'alta', 'nombre: Gorra Negra || unidad_medida_id: 6 || alto:  || ancho: || stock:333 || stock minimo: 4444 || costo: 5 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 2', NULL, 1, '2017-02-21 12:37:42', '2017-02-21 12:37:42'),
(111, 'insumos', 43, 'eliminacion', NULL, 'nombre: Gorra Negra || unidad_medida_id: 6 || alto:  || ancho: || stock:333 || stock minimo: 4444 || costo: 5 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 2', 1, '2017-02-21 12:38:02', '2017-02-21 12:38:02'),
(112, 'insumos', 17, 'eliminacion', NULL, 'nombre: Pin Imantado 55mm || unidad_medida_id: 6 || alto:  || ancho: || stock:171 || stock minimo: 200 || costo: 2 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 6', 1, '2017-02-21 12:56:06', '2017-02-21 12:56:06'),
(113, 'compras', 105, 'alta', 'concepto: Reposicion de stock || importe insumos: 2800 || costo envio: 50 || importe total: 2850 || fecha_solicitud: 25-02-2017 || hora_solicitud: 16:11 || fecha compra:25-02-2017 || hora_compra:16:11 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 2, '2017-02-25 19:11:56', '2017-02-25 19:11:56'),
(114, 'roles', 5, 'alta', 'nombre: Repositor', NULL, 2, '2017-02-25 19:38:23', '2017-02-25 19:38:23'),
(115, 'roles', 5, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 00:24:07', '2017-02-26 00:24:07'),
(116, 'roles', 5, 'alta', 'nombre: true modulos: usuarios_roles parametros insumos_compras articulos proveedores_rubros clientes ventas cajas auditorias adminweb', NULL, 1, '2017-02-26 12:42:42', '2017-02-26 12:42:42'),
(117, 'roles', 5, 'eliminacion', NULL, 'true', 1, '2017-02-26 12:43:29', '2017-02-26 12:43:29'),
(118, 'roles', 6, 'alta', 'nombre:  modulos: usuarios_roles parametros insumos_compras articulos proveedores_rubros clientes ventas cajas auditorias adminweb', NULL, 1, '2017-02-26 12:48:48', '2017-02-26 12:48:48'),
(119, 'roles', 6, 'eliminacion', NULL, '', 1, '2017-02-26 12:50:17', '2017-02-26 12:50:17'),
(120, 'roles', 7, 'alta', 'nombre: Repositor modulos: usuarios_roles parametros insumos_compras articulos proveedores_rubros clientes ventas cajas auditorias adminweb', NULL, 1, '2017-02-26 12:50:47', '2017-02-26 12:50:47'),
(121, 'roles', 7, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:12:04', '2017-02-26 14:12:04'),
(122, 'roles', 8, 'alta', 'nombre: Repositor modulos: Usuarios_Roles ;Parametros ;Insumos_Compras ;Articulos ;Proveedores_Rubros ;Clientes ;Ventas ;Cajas ;Auditorias ;AdminWeb', NULL, 1, '2017-02-26 14:13:09', '2017-02-26 14:13:09'),
(123, 'roles', 8, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:14:56', '2017-02-26 14:14:56'),
(124, 'roles', 9, 'alta', 'nombre: Repositor modulos: Usuarios_Roles ; Parametros ; Insumos_Compras ; Articulos ; Proveedores_Rubros ; Clientes ; Ventas ; Cajas ; Auditorias ; AdminWeb', NULL, 1, '2017-02-26 14:15:29', '2017-02-26 14:15:29'),
(125, 'roles', 9, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:17:10', '2017-02-26 14:17:10'),
(126, 'roles', 10, 'alta', 'nombre: Repositor modulos: Usuarios_Roles | Parametros | Insumos_Compras | Articulos | Proveedores_Rubros | Clientes | Ventas | Cajas | Auditorias | AdminWeb', NULL, 1, '2017-02-26 14:18:27', '2017-02-26 14:18:27'),
(127, 'roles', 10, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:21:04', '2017-02-26 14:21:04'),
(128, 'roles', 11, 'alta', 'nombre: Repositor modulos: Usuarios_Roles', NULL, 1, '2017-02-26 14:21:29', '2017-02-26 14:21:29'),
(129, 'roles', 11, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:23:28', '2017-02-26 14:23:28'),
(130, 'roles', 12, 'alta', 'nombre: Repo modulos: Usuarios_Roles', NULL, 1, '2017-02-26 14:23:48', '2017-02-26 14:23:48'),
(131, 'roles', 12, 'eliminacion', NULL, 'Repo', 1, '2017-02-26 14:29:10', '2017-02-26 14:29:10'),
(132, 'roles', 13, 'alta', 'nombre: Repositor modulos: Usuarios_Roles | Parametros | Insumos_Compras | Proveedores_Rubros', NULL, 1, '2017-02-26 14:29:40', '2017-02-26 14:29:40'),
(133, 'roles', 13, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:34:58', '2017-02-26 14:34:58'),
(134, 'roles', 14, 'alta', 'nombre: Repositor modulos:  | Parametros | Insumos_Compras | Proveedores_Rubros', NULL, 1, '2017-02-26 14:35:25', '2017-02-26 14:35:25'),
(135, 'roles', 14, 'eliminacion', NULL, 'Repositor', 1, '2017-02-26 14:40:41', '2017-02-26 14:40:41'),
(136, 'roles', 15, 'alta', 'nombre: Repositor modulos:  Parametros | Insumos_Compras | Proveedores_Rubros |', NULL, 1, '2017-02-26 14:41:06', '2017-02-26 14:41:06'),
(137, 'users', 4, 'alta', 'nombre: Donaruma Julian || email: vetas1@gmail.com || password: $2y$10$MTJb4fx2j5KQhuoUMtKtze26wMZoYOSsM0xatrgB19S7k5lEtPS0i || imagen:usuario_1488134988.jpg || rol_id:4', NULL, 1, '2017-02-26 18:49:49', '2017-02-26 18:49:49'),
(138, 'insumos', 31, 'eliminacion', NULL, 'nombre: Lapicera Eco || unidad_medida_id: 6 || alto: 0 || ancho:0 || stock:0 || stock minimo: 50 || costo: 3 || costo anterior:  || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 1, '2017-02-26 18:56:17', '2017-02-26 18:56:17'),
(139, 'insumos', 32, 'eliminacion', NULL, 'nombre: Lapicera Eco || unidad_medida_id: 6 || alto: 0 || ancho:0 || stock:34 || stock minimo: 50 || costo: 3 || costo anterior: 3 || descripcion:  || talle_id: 0 || color_id: 0 || material_id: 0', 1, '2017-02-26 18:56:39', '2017-02-26 18:56:39'),
(140, 'ivas', 2, 'alta', 'iva: 0%', NULL, 1, '2017-02-26 19:54:09', '2017-02-26 19:54:09'),
(141, 'bancos', 3, 'alta', 'nombre: Galicia', NULL, 1, '2017-02-26 19:57:29', '2017-02-26 19:57:29'),
(142, 'bancos', 4, 'alta', 'nombre: HSBC', NULL, 1, '2017-02-26 19:57:53', '2017-02-26 19:57:53'),
(143, 'clientes', 7, 'alta', 'nombre: Javier Enrique || apellido: Sandoval || empresa:  || responsabilidad tributaria:3 || CUIT: || DNI: 31844048 || descripcion:  || teléfono:  || email: sando458@gmail.com || localidad_id: 6 || direccion: Guatambu 458', NULL, 1, '2017-02-27 02:20:03', '2017-02-27 02:20:03'),
(144, 'articulos', 15, 'alta', 'nombre: Lapicera Eco personalizada 1 color || alto:  || ancho:  || tipo_id:1  || color_id: 0 || costo:4.7 || margen:110 || ganancia:5.17 || precioVta:11.94 || estado:se fabrica', NULL, 1, '2017-02-27 02:21:30', '2017-02-27 02:21:30'),
(145, 'clientes', 8, 'alta', 'nombre: Juan Pablo || apellido: Cáceres || empresa:  || responsabilidad tributaria:3 || CUIT: || DNI: 34478385 || descripcion: Soy yo || teléfono: 34478385 || email: jpcaceres.nea@gmail.com || localidad_id: 1 || direccion: Monteagudo 695', NULL, 1, '2017-02-27 12:58:52', '2017-02-27 12:58:52'),
(146, 'provincias', 17, 'alta', 'nombre: Santa Catarina|| pais_id: 3', NULL, 1, '2017-02-27 14:23:40', '2017-02-27 14:23:40'),
(147, 'clientes', 9, 'alta', 'nombre: Paulo || apellido: Garnier || empresa:  || responsabilidad tributaria:2 || CUIT:20256456848 || DNI:  || descripcion: El policia de la seccional 145 sobre calle Rivadavia || teléfono: 3752740152 || email: paulo1982@gmail.com || localidad_id: 5 || direccion: Salta y Gral. Paz', NULL, 1, '2017-02-27 17:41:01', '2017-02-27 17:41:01'),
(148, 'clientes', 10, 'alta', 'nombre: Paulo || apellido: Garnier || empresa:  || responsabilidad tributaria:2 || CUIT:20256456848 || DNI:  || descripcion: El policia de la seccional 145 sobre calle Rivadavia || teléfono: 3752740152 || email: paulo1982@gmail.com || localidad_id: 5 || direccion: Salta y Gral. Paz', NULL, 1, '2017-02-27 17:41:02', '2017-02-27 17:41:02'),
(149, 'clientes', 10, 'modificacion', 'nombre: Marianela || apellido: Sanchez Rodriguez || empresa:  || responsabilidad tributaria:3 || CUIT: || DNI: 28456208 || descripcion: La bruja del 71 || teléfono: 3624477022 || email: marukita@gmail.com || localidad_id: 12 || direccion: Valentin Alsina 608', 'nombre: Paulo || apellido: Garnier || empresa:  || responsabilidad tributaria:2 || CUIT:20256456848 || DNI:  || descripcion: El policia de la seccional 145 sobre calle Rivadavia || teléfono: 3752740152 || email: paulo1982@gmail.com || localidad_id: 5 || direccion: Salta y Gral. Paz', 1, '2017-02-27 18:55:06', '2017-02-27 18:55:06'),
(150, 'bancos', 5, 'alta', 'nombre: Comafi', NULL, 2, '2017-02-27 19:27:07', '2017-02-27 19:27:07'),
(151, 'roles', 16, 'alta', 'nombre: Fulanito modulos:  Insumos_Compras | Articulos | Ventas |', NULL, 1, '2017-02-27 20:22:17', '2017-02-27 20:22:17'),
(152, 'articulos', 16, 'alta', 'nombre: Calendario A3 full color || alto:  || ancho:  || tipo_id:3  || color_id: 0 || costo:2.04 || margen:150 || ganancia:3.06 || precioVta:6.17 || estado:se fabrica', NULL, 1, '2017-02-27 20:38:16', '2017-02-27 20:38:16'),
(153, 'bancos', 6, 'alta', 'nombre: Hipotecario', NULL, 1, '2017-02-27 20:49:34', '2017-02-27 20:49:34'),
(154, 'paises', 21, 'alta', 'nombre: Congo', NULL, 1, '2017-02-27 20:53:59', '2017-02-27 20:53:59'),
(155, 'compras', 106, 'alta', 'concepto: Reposicion de stock || importe insumos: 8100 || costo envio: 150 || importe total: 8250 || fecha_solicitud: 27-02-2017 || hora_solicitud: 18:10 || fecha compra:27-02-2017 || hora_compra:18:10 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-27 21:10:39', '2017-02-27 21:10:39'),
(156, 'localidades', 20, 'alta', 'nombre: Puerto Rico || provincia_id: 2', NULL, 2, '2017-02-27 22:36:54', '2017-02-27 22:36:54'),
(157, 'talles', 7, 'alta', 'talle: XS', NULL, 2, '2017-02-27 22:56:52', '2017-02-27 22:56:52'),
(158, 'articulos', 17, 'alta', 'nombre: Sobre Oficio tipo ingles 60gr personalizado || alto: 12 || ancho: 23.5 || tipo_id:3  || color_id: 0 || costo:1 || margen:210 || ganancia:2.1 || precioVta:3.75 || estado:se fabrica', NULL, 1, '2017-02-28 13:00:40', '2017-02-28 13:00:40'),
(159, 'articulos', 18, 'alta', 'nombre: Sobre Oficio tipo ingles 60gr personalizado || alto: 12 || ancho: 23.5 || tipo_id:3  || color_id: 0 || costo:1 || margen:210 || ganancia:2.1 || precioVta:3.75 || estado:se fabrica', NULL, 1, '2017-02-28 13:01:07', '2017-02-28 13:01:07'),
(160, 'ventas', 141, 'alta', 'fecha_pedido: 28-02-2017 || hora_pedido: 13:39 || fecha entrega estimada: 2017-02-28 || señado: 30 || usuario que tomo pedido: 1 || cliente_id: 7', NULL, 1, '2017-02-28 16:39:19', '2017-02-28 16:39:19'),
(161, 'ventas', 142, 'alta', 'fecha_pedido: 28-02-2017 || hora_pedido: 14:04 || fecha entrega estimada: 2017-02-28 || señado: 2279.1 || usuario que tomo pedido: 1 || cliente_id: 1', NULL, 1, '2017-02-28 17:04:46', '2017-02-28 17:04:46'),
(162, 'ventas', 143, 'alta', 'fecha_pedido: 28-02-2017 || hora_pedido: 14:04 || fecha entrega estimada: 2017-02-28 || señado: 2279.1 || usuario que tomo pedido: 1 || cliente_id: 1', NULL, 1, '2017-02-28 17:04:53', '2017-02-28 17:04:53'),
(163, 'ventas', 144, 'alta', 'fecha_pedido: 28-02-2017 || hora_pedido: 14:31 || fecha entrega estimada: 2017-02-28 || señado: 1995.94 || usuario que tomo pedido: 1 || cliente_id: 9', NULL, 1, '2017-02-28 17:31:09', '2017-02-28 17:31:09'),
(164, 'ventas', 145, 'alta', 'fecha_pedido: 28-02-2017 || hora_pedido: 14:43 || fecha entrega estimada: 02/28/2017 || señado: 1086.39 || usuario que tomo pedido: 1 || cliente_id: 9', NULL, 1, '2017-02-28 17:43:59', '2017-02-28 17:43:59'),
(165, 'colores', 9, 'alta', 'nombre: Marron || codigo: #874d47', NULL, 1, '2017-02-28 18:32:18', '2017-02-28 18:32:18'),
(166, 'compras', 107, 'alta', 'concepto: Reposicion de stock || importe insumos: 5600 || costo envio: 20 || importe total: 5620 || fecha_solicitud: 28-02-2017 || hora_solicitud: 15:33 || fecha compra:28-02-2017 || hora_compra:15:33 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-02-28 18:33:26', '2017-02-28 18:33:26'),
(167, 'articulos', 19, 'alta', 'nombre: Calendario A4 full color || alto: 21 || ancho: 29.7 || tipo_id:3  || color_id: 0 || costo:10.120000000000001 || margen:170 || ganancia:17.2 || precioVta:33.05 || estado:se fabrica', NULL, 1, '2017-02-28 19:35:31', '2017-02-28 19:35:31'),
(168, 'clientes', 11, 'alta', 'nombre: Christa || apellido: Kasey Lebsack || empresa:  || responsabilidad tributaria:3 || CUIT: || DNI: 36019985 || descripcion:  || teléfono:  || email: Ellsworth96@yahoo.com || localidad_id: 17 || direccion: Deshaun Kuhlman 554', NULL, 1, '2017-03-01 17:52:43', '2017-03-01 17:52:43'),
(169, 'articulos', 20, 'alta', 'nombre: Llavero personalizado 44mm || alto:  || ancho:  || tipo_id:1  || color_id: 0 || costo:3 || margen:300 || ganancia:9 || precioVta:14.52 || estado:se fabrica', NULL, 1, '2017-03-01 17:55:02', '2017-03-01 17:55:02'),
(170, 'ventas', 146, 'alta', 'fecha_pedido: 01-03-2017 || hora_pedido: 14:57 || fecha entrega estimada: 2017-03-03 || señado: 217.79 || usuario que tomo pedido: 1 || cliente_id: 11', NULL, 1, '2017-03-01 17:57:04', '2017-03-01 17:57:04'),
(171, 'users', 5, 'alta', 'nombre: Porzingis Kristaps || email: porzingis@gmail.com || password: $2y$10$chVaVwPHaU7xou648V36C.dqdIceKxrEJX3HfsYN0pqT4kPHxr7.K || imagen:usuario_1489775444.jpg || rol_id:3', NULL, 1, '2017-03-17 18:30:45', '2017-03-17 18:30:45'),
(172, 'provincias', 18, 'alta', 'nombre: Salta|| pais_id: 1', NULL, 3, '2017-03-18 15:07:42', '2017-03-18 15:07:42'),
(173, 'talles', 8, 'alta', 'talle: XXS', NULL, 3, '2017-03-18 15:29:54', '2017-03-18 15:29:54'),
(174, 'compras', 108, 'alta', 'concepto: Reposicion de stock || importe insumos: 1700 || costo envio: 50 || importe total: 1750 || fecha_solicitud: 20-03-2017 || hora_solicitud: 19:03 || fecha compra:20-03-2017 || hora_compra:19:03 || confirmado: 1 || pagado: 1 || recibido: 1 || userCompra_id: ', NULL, 1, '2017-03-20 22:03:36', '2017-03-20 22:03:36'),
(175, 'ventas', 147, 'alta', 'fecha_pedido: 20-03-2017 || hora_pedido: 20:06 || fecha entrega estimada: 03/20/2017 || señado: 3.75 || usuario que tomo pedido: 1 || cliente_id: 11', NULL, 1, '2017-03-20 23:06:12', '2017-03-20 23:06:12'),
(176, 'ventas', 148, 'alta', 'fecha_pedido: 20-03-2017 || hora_pedido: 20:34 || fecha entrega estimada: 2017-03-20 || señado: 1309.44 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-03-20 23:34:24', '2017-03-20 23:34:24'),
(177, 'ventas', 149, 'alta', 'fecha_pedido: 29-03-2017 || hora_pedido: 19:30 || fecha entrega estimada: 2017-03-30 || señado: 60.6 || usuario que tomo pedido: 1 || cliente_id: 5', NULL, 1, '2017-03-29 22:30:16', '2017-03-29 22:30:16'),
(178, 'ventas', 151, 'alta', 'fecha_pedido: 01-04-2017 || hora_pedido: 10:12 || fecha entrega estimada: 2017-04-03 || señado: 10 || usuario que tomo pedido: 1 || cliente_id: 9', NULL, 1, '2017-04-01 13:12:06', '2017-04-01 13:12:06'),
(179, 'ventas', 152, 'alta', 'fecha_pedido: 01-04-2017 || hora_pedido: 11:35 || fecha entrega estimada: 04/01/2017 || señado: 23.88 || usuario que tomo pedido: 1 || cliente_id: 1', NULL, 1, '2017-04-01 14:35:19', '2017-04-01 14:35:19'),
(180, 'cheques', 50, 'alta', 'nro_serie: 5877421544 || monto: 1352.96 || cliente_id: 4 || fecha_emision: 2017-04-01 || fecha_cobro: 2017-04-20 || banco_id: 1 || sucursal: 3', NULL, 1, '2017-04-01 19:03:29', '2017-04-01 19:03:29'),
(181, 'ventas', 153, 'alta', 'fecha_pedido: 01-04-2017 || hora_pedido: 16:03 || fecha entrega estimada: 2017-04-03 || señado: 1352.96 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-01 19:03:29', '2017-04-01 19:03:29'),
(182, 'ventas', 154, 'alta', 'fecha_pedido: 02-04-2017 || hora_pedido: 09:38 || fecha entrega estimada: 04/02/2017 || señado: 36.3 || usuario que tomo pedido: 2 || cliente_id: 8', NULL, 2, '2017-04-02 12:38:55', '2017-04-02 12:38:55'),
(183, 'ventas', 155, 'alta', 'fecha_pedido: 02-04-2017 || hora_pedido: 10:42 || fecha entrega estimada: 04/02/2017 || señado: 42 || usuario que tomo pedido: 2 || cliente_id: 4', NULL, 2, '2017-04-02 13:42:41', '2017-04-02 13:42:41'),
(184, 'ventas', 156, 'alta', 'fecha_pedido: 02-04-2017 || hora_pedido: 11:09 || fecha entrega estimada: 2017-04-03 || señado: 0 || usuario que tomo pedido: 2 || cliente_id: 5', NULL, 2, '2017-04-02 14:09:49', '2017-04-02 14:09:49'),
(186, 'articulos', 22, 'alta', 'nombre: Remera Blanca XL Estampa Simple || alto:  || ancho:  || tipo_id:2 4 || color_id: 1 || costo:46.39 || margen:150 || ganancia:69.58 || precioVta:140.32 || estado:se fabrica', NULL, 2, '2017-04-02 20:53:05', '2017-04-02 20:53:05'),
(187, 'articulos', 23, 'alta', 'nombre: Remera Roja Algodon Talle L || alto:  || ancho:  || tipo_id:2 3 || color_id: 4 || costo:24 || margen:100 || ganancia:24 || precioVta:58.08 || estado:se fabrica', NULL, 2, '2017-04-02 21:25:41', '2017-04-02 21:25:41'),
(213, 'ventas', 171, 'alta', 'fecha_pedido: 06-04-2017 || hora_pedido: 14:40 || fecha entrega estimada: 2017-04-06 || señado: 31.04 || usuario que tomo pedido: 1 || cliente_id: 1', NULL, 1, '2017-04-06 17:40:00', '2017-04-06 17:40:00'),
(214, 'ventas', 172, 'alta', 'fecha_pedido: 06-04-2017 || hora_pedido: 14:55 || fecha entrega estimada: 04/06/2017 || seÃ±ado: 8.08 || usuario que tomo pedido: 1 || cliente_id: 5', NULL, 1, '2017-04-06 17:55:53', '2017-04-06 17:55:53'),
(215, 'cheques', 54, 'alta', 'nro_serie: 25887461 || monto: 20 || cliente_id: 12 || fecha_emision: 2017-04-06 || fecha_cobro: 2017-04-14 || banco_id: 2 || sucursal: 3', NULL, 1, '2017-04-06 18:09:03', '2017-04-06 18:09:03'),
(216, 'ventas', 173, 'alta', 'fecha_pedido: 06-04-2017 || hora_pedido: 15:09 || fecha entrega estimada: 2017-04-06 || seÃ±ado: 20 || usuario que tomo pedido: 1 || cliente_id: 12', NULL, 1, '2017-04-06 18:09:03', '2017-04-06 18:09:03'),
(217, 'ventas', 174, 'alta', 'fecha_pedido: 09-04-2017 || hora_pedido: 13:29 || fecha entrega estimada: 04/09/2017 || señado: 15.52 || usuario que tomo pedido: 1 || cliente_id: 1', NULL, 1, '2017-04-09 16:29:18', '2017-04-09 16:29:18'),
(218, 'ventas', 175, 'alta', 'fecha_pedido: 09-04-2017 || hora_pedido: 20:35 || fecha entrega estimada: 2017-04-09 || seÃ±ado: 0 || usuario que tomo pedido: 2 || cliente_id: 2', NULL, 2, '2017-04-09 23:35:39', '2017-04-09 23:35:39'),
(219, 'ventas', 176, 'alta', 'fecha_pedido: 10-04-2017 || hora_pedido: 00:48 || fecha entrega estimada: 04/10/2017 || seÃ±ado: 14.52 || usuario que tomo pedido: 2 || cliente_id: 2', NULL, 2, '2017-04-10 03:48:25', '2017-04-10 03:48:25'),
(220, 'ventas', 177, 'alta', 'fecha_pedido: 10-04-2017 || hora_pedido: 00:50 || fecha entrega estimada:  || seÃ±ado: 15.02 || usuario que tomo pedido: 2 || cliente_id: 11', NULL, 2, '2017-04-10 03:50:54', '2017-04-10 03:50:54'),
(221, 'cheques', 55, 'alta', 'nro_serie: 47445 || monto: 10 || cliente_id: 4 || fecha_emision: 0077-05-08 || fecha_cobro: 2017-04-29 || banco_id: 6 || sucursal: 3', NULL, 1, '2017-04-11 22:23:08', '2017-04-11 22:23:08'),
(222, 'ventas', 178, 'alta', 'fecha_pedido: 11-04-2017 || hora_pedido: 19:23 || fecha entrega estimada: 10/04/2017 || seÃ±ado: 10 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-11 22:23:08', '2017-04-11 22:23:08'),
(223, 'ventas', 179, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 16:14 || fecha entrega estimada: 04/12/2017 || seÃ±ado: 72.6 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-12 19:14:00', '2017-04-12 19:14:00'),
(224, 'ventas', 180, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 17:25 || fecha entrega estimada: 04/12/2017 || seÃ±ado: 72.6 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-12 20:25:15', '2017-04-12 20:25:15'),
(225, 'ventas', 181, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 17:36 || fecha entrega estimada:  || seÃ±ado: 21.78 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-12 20:36:09', '2017-04-12 20:36:09'),
(226, 'ventas', 182, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 18:02 || fecha entrega estimada: 10/04/2017 || seÃ±ado: 14.52 || usuario que tomo pedido: 1 || cliente_id: 2', NULL, 1, '2017-04-12 21:02:53', '2017-04-12 21:02:53'),
(227, 'ventas', 183, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 18:32 || fecha entrega estimada: 10/04/2017 || seÃ±ado: 31.04 || usuario que tomo pedido: 1 || cliente_id: 2', NULL, 1, '2017-04-12 21:32:45', '2017-04-12 21:32:45'),
(228, 'ventas', 184, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 18:47 || fecha entrega estimada: 17/04/2017 || seÃ±ado: 5 || usuario que tomo pedido: 1 || cliente_id: 13', NULL, 1, '2017-04-12 21:47:15', '2017-04-12 21:47:15'),
(229, 'ventas', 185, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 18:57 || fecha entrega estimada: 19/04/2017 || seÃ±ado: 21 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-12 21:57:34', '2017-04-12 21:57:34'),
(230, 'ventas', 186, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 19:02 || fecha entrega estimada: 28/04/2017 || seÃ±ado: 14.52 || usuario que tomo pedido: 1 || cliente_id: 7', NULL, 1, '2017-04-12 22:02:02', '2017-04-12 22:02:02'),
(231, 'ventas', 187, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 19:06 || fecha entrega estimada: 29/04/2017 || seÃ±ado: 29.04 || usuario que tomo pedido: 1 || cliente_id: 11', NULL, 1, '2017-04-12 22:06:40', '2017-04-12 22:06:40'),
(232, 'ventas', 188, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 20:00 || fecha entrega estimada: 25/04/2017 || seÃ±ado: 7.76 || usuario que tomo pedido: 1 || cliente_id: 6', NULL, 1, '2017-04-12 23:00:41', '2017-04-12 23:00:41'),
(233, 'ventas', 189, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 20:06 || fecha entrega estimada: 14/04/2017 || seÃ±ado: 14.52 || usuario que tomo pedido: 2 || cliente_id: 5', NULL, 2, '2017-04-12 23:06:48', '2017-04-12 23:06:48'),
(234, 'ventas', 190, 'alta', 'fecha_pedido: 12-04-2017 || hora_pedido: 20:09 || fecha entrega estimada: 13/04/2017 || seÃ±ado: 14.52 || usuario que tomo pedido: 2 || cliente_id: 5', NULL, 2, '2017-04-12 23:09:04', '2017-04-12 23:09:04'),
(235, 'ventas', 191, 'alta', 'fecha_pedido: 16-04-2017 || hora_pedido: 20:15 || fecha entrega estimada: 17/04/2017 || seÃ±ado: 7 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-16 23:15:09', '2017-04-16 23:15:09'),
(236, 'ventas', 192, 'alta', 'fecha_pedido: 18-04-2017 || hora_pedido: 17:38 || fecha entrega estimada: 20/04/2017 || seÃ±ado: 73.2 || usuario que tomo pedido: 1 || cliente_id: 4', NULL, 1, '2017-04-18 20:38:39', '2017-04-18 20:38:39'),
(237, 'bancos', 7, 'alta', 'nombre: Nación', NULL, 2, '2017-04-28 14:44:46', '2017-04-28 14:44:46'),
(238, 'ventas', 193, 'alta', 'fecha_pedido: 28-04-2017 || hora_pedido: 11:49 || fecha entrega estimada: 04/05/2017 || seÃ±ado: 180 || usuario que tomo pedido: 2 || cliente_id: 6', NULL, 2, '2017-04-28 14:49:18', '2017-04-28 14:49:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE `catalogos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vigente` int(11) DEFAULT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catalogos`
--

INSERT INTO `catalogos` (`id`, `nombre`, `tipo`, `vigente`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'ALEX_CATALOGO.pdf', 'Importacion', 1, 'Este es un catalogo de GAMMA, de artículos de importacion', '2018-03-01 03:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cuit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `empresa`, `descripcion`, `cuit`, `dni`, `telefono`, `email`, `direccion`, `localidad_id`, `created_at`, `updated_at`) VALUES
(1, 'Sergio', 'Sanabria', 'SECHEP', 'se creo usando Tinker', '24351203694', '', '3743421585', 'sergiolilo@gmail.com', 'San Martin 700', 5, '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(2, 'Johny', 'Katz', '', 'se creo usando Tinker', '', '31125569', '363331585', 'katz@gmail.com', 'Cordoba 345', 5, '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(4, 'Sergio', 'Caballero', 'IPSM', 'se creo usando Tinker', '20309803694', '', '3764899104', 'sergiocaballero@gmail.com', 'Junin 1223', 5, '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(5, 'Robert', 'Langdon', '', 'se creo usando Tinker', '', '29456584', '327331585', 'danbrown@gmail.com', 'Castelli 345', 4, '2016-12-05 18:25:36', '2016-12-05 18:25:36'),
(6, 'Mario', 'Baracus', '', 'El humorista\r\n', '20355647119', '', '3624123123', 'marito@baracus.com', 'Peru 701', 17, '2017-02-05 22:54:36', '2017-02-20 23:52:01'),
(7, 'Javier Enrique', 'Sandoval', '', '', '', '31844048', '', 'sando458@gmail.com', 'Guatambu 458', 6, '2017-02-27 02:20:03', '2017-02-27 02:20:03'),
(8, 'Juan Pablo', 'Cáceres', '', 'Soy yo', '', '34478385', '34478385', 'jpcaceres.nea@gmail.com', 'Monteagudo 695', 1, '2017-02-27 12:58:52', '2017-02-27 12:58:52'),
(9, 'Paulo', 'Garnier', '', 'El policia de la seccional 145 sobre calle Rivadavia', '20256456848', '', '3752740152', 'paulo1982@gmail.com', 'Salta y Gral. Paz', 5, '2017-02-27 17:41:01', '2017-02-27 17:41:01'),
(10, 'Marianela', 'Sanchez Rodriguez', '', 'La bruja del 71', '', '28456208', '3624477022', 'marukita@gmail.com', 'Valentin Alsina 608', 12, '2017-02-27 17:41:02', '2017-02-27 18:55:06'),
(11, 'Christa', 'Kasey Lebsack', '', '', '', '36019985', '', 'Ellsworth96@yahoo.com', 'Deshaun Kuhlman 554', 17, '2017-03-01 17:52:43', '2017-03-01 17:52:43'),
(12, 'Lisandro Matías', 'Blanco', 'El Rojo SRL', 'Presidente de la peña \"Tierra Roja\" (CA Independiente)', '20347530984', '', '3764560274', 'lisandro.blanco73@gmail.com', '3 de Febrero 1575', 5, '2017-04-02 22:29:02', '2017-04-03 14:56:37'),
(13, 'Eliana', 'Baumgratz', '', 'Estudiante de Farmacia FCEQyN, del Centro de Estudiantes', '', '33132195', '3764760222', 'elianafblanco@gmail.com', 'Mariano Moreno 369', 20, '2017-04-03 14:51:49', '2017-04-03 14:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`, `codigo`, `created_at`, `updated_at`) VALUES
(0, 'Ninguno', '', '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(1, 'Blanco', '#FFFFFF', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(2, 'Gris Topo', '#5D5D5D', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(3, 'Beige', '#DBDCAE', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(4, 'Rojo', '#FF0000', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(5, 'Negro', '#000000', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(6, 'Azul', '#0026FF', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(7, 'Coral', '#FF7366', '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(8, 'Verde Militar', '#156800', '2016-12-05 02:21:57', '2016-12-05 02:21:57'),
(9, 'Marron', '#874d47', '2017-02-28 18:32:18', '2017-02-28 18:32:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responiva_id` int(10) UNSIGNED NOT NULL,
  `localidad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_presupuesto`
--

CREATE TABLE `lineas_presupuesto` (
  `id` int(11) NOT NULL,
  `presupuesto_id` int(11) NOT NULL,
  `cantidad` double DEFAULT NULL,
  `articulo_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lineas_presupuesto`
--

INSERT INTO `lineas_presupuesto` (`id`, `presupuesto_id`, `cantidad`, `articulo_id`, `created_at`, `updated_at`) VALUES
(1, 2, 50, 19, '2018-03-19 03:48:55', '2018-03-19 03:48:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod_postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`, `cod_postal`, `provincia_id`, `created_at`, `updated_at`) VALUES
(1, 'Resistencia', '3500', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(2, 'Barranqueras', '3510', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(4, 'Fontana', '3519', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(5, 'Posadas', '3300', 2, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(6, 'Capiovi', '3332', 2, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(7, 'Apostoles', '3350', 2, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(8, 'Jardin America', '3340', 2, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(9, 'Corrientes', '3450', 3, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(10, 'Itacaruare', '3400', 3, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(11, 'Mercedes', '3410', 3, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(12, 'Paso de la patria', '3422', 3, '2016-12-05 02:19:36', '2016-12-05 02:19:36'),
(13, 'Ituzaingo', '3490', 3, '2016-12-05 02:19:37', '2016-12-05 02:19:37'),
(15, 'Aristobulo del Valle', '', 2, '2017-01-30 20:05:49', '2017-01-30 20:05:49'),
(17, 'Villa Carlos Paz', '', 6, '2017-02-20 00:25:00', '2017-02-20 00:25:00'),
(18, 'Cobresal', '', 16, '2017-02-20 00:32:04', '2017-02-20 00:32:04'),
(19, 'Puerto Iguazú', '', 2, '2017-02-20 19:27:30', '2017-02-20 19:27:57'),
(20, 'Puerto Rico', '', 2, '2017-02-27 22:36:54', '2017-02-27 22:36:54'),
(21, 'Bernardo Irigoyen', NULL, 2, '2017-04-06 15:03:09', '2017-04-06 15:03:09'),
(22, 'Quitilipi', '3530', 1, '2017-11-13 14:51:20', '2017-11-13 14:51:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `logo`, `pais_id`, `created_at`, `updated_at`) VALUES
(1, 'Bosch', 'bosch.png', 1, NULL, NULL),
(2, 'Dewalt', 'dewalt.png', 15, NULL, NULL),
(3, 'Unimak', 'unimak.jpg', 1, NULL, NULL),
(4, 'Caterpillar', 'cat.jpg', 20, NULL, NULL),
(5, 'Gamma', 'sin imagen', 1, NULL, NULL),
(6, 'Bulonfer', 'bulonfer.png', 1, NULL, NULL),
(7, 'Black & Decker', 'black&decker.png', 14, NULL, NULL),
(9, 'Skill', 'sin imagen', 1, '2018-03-20 01:20:22', '2018-03-20 01:20:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(0, 'Otro', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(1, 'Poliester', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(2, 'Algodon', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(3, 'Acero', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(4, 'Goma', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(5, 'Acero Inoxidable', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(6, 'Plastico', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(7, 'Caucho', '2016-12-05 02:21:56', '2016-12-05 02:21:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Argentina', '2016-12-05 02:19:34', '2016-12-05 02:19:34'),
(2, 'Paraguay', '2016-12-05 02:19:34', '2016-12-05 02:19:34'),
(3, 'Brasil', '2016-12-05 02:19:34', '2016-12-05 02:19:34'),
(4, 'Perú', '2016-12-05 02:19:34', '2016-12-05 15:15:59'),
(7, 'Chile', '2017-01-29 16:56:20', '2017-01-29 16:56:20'),
(9, 'Uruguay', '2017-01-29 17:59:25', '2017-01-29 17:59:25'),
(11, 'Guatemala', '2017-01-29 18:02:20', '2017-01-29 18:04:24'),
(12, 'Canada', '2017-01-29 23:40:21', '2017-01-29 23:40:21'),
(14, 'Japon', '2017-01-30 18:49:18', '2017-01-30 18:51:05'),
(15, 'Australia', '2017-01-30 18:54:25', '2017-01-30 18:54:25'),
(16, 'Suiza', '2017-01-30 19:01:00', '2017-01-30 19:01:00'),
(17, 'Turquia', '2017-01-30 19:02:00', '2017-01-30 19:02:00'),
(19, 'Cuba', '2017-01-30 19:04:42', '2017-01-30 19:04:42'),
(20, 'Estados Unidos', '2017-02-02 21:51:48', '2017-02-02 21:51:48'),
(22, 'China', '2017-10-10 11:33:41', '2017-10-10 11:33:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestos`
--

CREATE TABLE `presupuestos` (
  `id` int(11) NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presupuestos`
--

INSERT INTO `presupuestos` (`id`, `estado`, `user_id`, `empleado_id`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, 'pendiente', 1, NULL, NULL, '2018-03-19 03:44:25', '2018-03-19 03:44:25'),
(2, 'pendiente', 1, NULL, NULL, '2018-03-19 03:48:55', '2018-03-19 03:48:55'),
(3, 'pendiente', 1, NULL, NULL, '2018-03-19 03:50:19', '2018-03-19 03:50:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_publicados`
--

CREATE TABLE `productos_publicados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `tipo_publicado_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_publicados`
--

INSERT INTO `productos_publicados` (`id`, `nombre`, `descripcion`, `imagen`, `estado`, `tipo_publicado_id`, `created_at`, `updated_at`) VALUES
(1, 'Remera Los Simpsons', '', 'GN_Producto_1480897130.jpg', 1, 1, '2016-12-05 03:18:50', '2016-12-05 03:18:50'),
(2, 'Camiseta Personalizada', 'Trae a tu equipo y llevate la camiseta del barrio!!!', 'GN_Producto_1480897179.jpg', 1, 1, '2016-12-05 03:19:39', '2016-12-05 03:19:39'),
(3, 'Calcos 40x40', 'Veni con tu imagen y llevate tu calco personalizada!', 'GN_Producto_1480959217.png', 1, 4, '2016-12-05 20:33:37', '2016-12-05 20:33:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pais_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`, `pais_id`, `created_at`, `updated_at`) VALUES
(1, 'Chaco', 1, '2016-12-05 02:19:34', '2016-12-05 02:19:34'),
(2, 'Misiones', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(3, 'Corrientes', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(4, 'Buenos Aires', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(5, 'Formosa', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(6, 'Cordoba', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(7, 'Rio Negro', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(9, 'Neuquén', 1, '2016-12-05 02:19:35', '2017-01-30 19:54:34'),
(10, 'Entre Rios', 1, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(11, 'Itapua', 2, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(12, '3 de Febrero', 2, '2016-12-05 02:19:35', '2016-12-05 02:19:35'),
(13, 'Tucuman', 1, '2017-01-30 19:23:44', '2017-01-30 19:23:44'),
(14, 'San Luis', 1, '2017-01-30 19:25:53', '2017-01-30 19:25:53'),
(15, 'Mato Grosso', 3, '2017-01-30 19:48:37', '2017-01-30 19:48:37'),
(16, 'Antofagasta', 7, '2017-02-20 00:31:43', '2017-02-20 00:31:43'),
(17, 'Santa Catarina', 3, '2017-02-27 14:23:40', '2017-02-27 14:23:40'),
(18, 'Salta', 1, '2017-03-18 15:07:42', '2017-03-18 15:07:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_acceso` int(11) DEFAULT NULL,
  `modulos` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `nivel_acceso`, `modulos`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, 'Usuarios_Roles | Parametros | Insumos_Compras | Articulos | Proveedores_Rubros |  Clientes | Ventas | Cajas | Auditorias | AdminWeb', '2016-12-04 03:00:00', NULL),
(2, 'Administrador Web', 2, 'Parametros | AdminWeb', '2016-12-04 03:00:00', NULL),
(3, 'Vendedor', 3, '| Articulos | Clientes | Ventas |', '2017-02-03 13:20:05', '2017-02-03 13:20:05'),
(4, 'Cajero', 4, '| Articulos | Clientes | Ventas | Cajas |', '2017-02-03 13:20:06', '2017-02-03 13:20:06'),
(15, 'Cliente', 0, 'Consulta Presupuesto', '2017-02-26 14:41:06', '2017-02-26 14:41:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rubros`
--

INSERT INTO `rubros` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Albañileria', '2018-03-04 20:22:29', '2018-03-04 20:22:29'),
(2, 'Buloneria', '2018-03-04 20:23:37', '2018-03-04 20:23:37'),
(3, 'Ferreteria', '2018-03-04 20:24:11', '2018-03-04 20:24:11'),
(4, 'Pintureria', '2018-03-04 20:24:29', '2018-03-04 20:24:29'),
(5, 'Seguridad Industrial', '2018-03-04 20:25:19', '2018-03-04 20:25:19'),
(6, 'Otro', '2018-03-04 20:25:19', '2018-03-04 20:25:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subrubros`
--

CREATE TABLE `subrubros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rubro_id` int(11) DEFAULT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subrubros`
--

INSERT INTO `subrubros` (`id`, `nombre`, `rubro_id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Tejidos', 6, NULL, NULL, NULL),
(2, 'Cadenas', 6, NULL, NULL, NULL),
(3, 'Herramientas p/ Construcción', 6, NULL, NULL, NULL),
(4, 'Morzas', 6, NULL, NULL, NULL),
(5, 'Bisagras', 6, NULL, NULL, NULL),
(6, 'Candados', 6, NULL, NULL, NULL),
(7, 'Pinceles', 6, NULL, NULL, NULL),
(8, 'Varios', 6, NULL, NULL, NULL),
(9, 'Mazas', 6, NULL, NULL, NULL),
(10, 'Martillos', 6, NULL, NULL, NULL),
(11, 'Herramientas de Mano', 3, NULL, NULL, '2018-03-05 14:02:36'),
(12, 'Soldadoras', 6, NULL, NULL, NULL),
(13, 'Bulones', 6, NULL, NULL, NULL),
(14, 'Ganchos', 6, NULL, NULL, NULL),
(15, 'Bisagras', 6, NULL, NULL, NULL),
(16, 'Mamelucos', 5, NULL, '2018-03-04 21:03:18', '2018-03-04 21:03:18'),
(17, 'Indumentaria', 5, NULL, '2018-03-04 21:03:36', '2018-03-04 21:03:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id` int(10) UNSIGNED NOT NULL,
  `talle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alto` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ancho` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id`, `talle`, `alto`, `ancho`, `created_at`, `updated_at`) VALUES
(0, 'Ninguno', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(1, 'S', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(2, 'M', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(3, 'L', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(4, 'XL', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(5, 'XXL', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(6, 'XXXL', NULL, NULL, '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(7, 'XS', '', '', '2017-02-27 22:56:51', '2017-02-27 22:56:51'),
(8, 'XXS', '', '', '2017-03-18 15:29:53', '2017-03-18 15:29:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(0, 'Otro', '', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(1, 'Merchandising', 'Destinados a la promocion de empresas o eventos: imanes para heladeras, destapadores, pines, llaveros', '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(2, 'Indumentaria', 'Remeras, Chombas, Gorras, Chaquetas Profesionales', '2016-12-05 02:21:55', '2016-12-05 02:21:55'),
(3, 'Libreria', 'Calendarios, Tarjetas, Afiches, Carpetas, etc', '2016-12-05 02:21:56', '2016-12-05 02:21:56'),
(5, 'coso', 'papelitos, lapices', '2017-01-31 14:32:14', '2017-01-31 14:32:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_publicados`
--

CREATE TABLE `tipos_publicados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_publicados`
--

INSERT INTO `tipos_publicados` (`id`, `nombre`, `estado`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Indumentaria', 1, 'GN_1480896906.jpg', '2016-12-05 03:15:06', '2016-12-05 03:15:06'),
(2, 'Cotillon', 1, 'GN_1480896934.jpg', '2016-12-05 03:15:34', '2016-12-05 03:15:34'),
(3, 'Ploteos', 1, 'GN_1480897048.jpg', '2016-12-05 03:17:28', '2016-12-05 03:17:28'),
(4, 'Ploteo Vehicular', 1, 'GN_1480959130.png', '2016-12-05 20:32:10', '2016-12-05 20:32:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_medidas`
--

CREATE TABLE `unidades_medidas` (
  `id` int(11) UNSIGNED NOT NULL,
  `unidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidades_medidas`
--

INSERT INTO `unidades_medidas` (`id`, `unidad`, `detalle`, `created_at`, `updated_at`) VALUES
(1, 'mm²', 'milimetros cuadrados', '2016-12-05 02:23:03', '2016-12-05 02:23:03'),
(2, 'cm', 'centimetros cuadrados', '2016-12-05 02:23:03', '2016-12-05 02:23:03'),
(4, 'mm³', 'milimetros cubicos', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(5, 'dm³', 'decimetros cubicos', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(6, 'unidades', 'Cantidad por Unidad', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(7, 'cm', 'centimetros', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(8, 'mm', 'milimetros', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(9, 'm', 'metros', '2016-12-05 02:23:04', '2016-12-05 02:23:04'),
(10, 'litro', 'litros', '2016-12-05 02:23:05', '2016-12-05 02:23:05'),
(12, 'ml', 'mililitros', NULL, NULL),
(13, 'ml', 'mililitros', '2016-12-05 18:42:50', '2017-02-28 17:31:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `imagen`, `password`, `rol_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Pablo Cáceres', 'jpcaceres.nea@gmail.com', 'usuario_1499215225.jpg', '$2y$10$neE/ldNdmdO9X8.SUCgCg.W..XdiOORJTICaj35gkJ7ojByimSNyS', 1, 'XgfXolEz6hf0mNma2L6vJTAhpPtVba0Nc4vX2kkFdvXblbA2HS9yMirGz9Lg', '2016-12-05 02:16:40', '2017-04-17 20:28:42'),
(2, 'Horacio Kuszniruk', 'hacho_k@gmail.com', 'usuario_1499775381.jpg', '$2y$10$neE/ldNdmdO9X8.SUCgCg.W..XdiOORJTICaj35gkJ7ojByimSNyS', 1, 'XgfXolEz6hf0mNma2L6vJTAhpPtVba0Nc4vX2kkFdvXblbA2HS9yMirGz9Lg', '2016-12-05 02:16:40', '2017-04-17 20:28:42'),
(3, 'Juan Manuel Almiron', 'juanmah31@gmail.com', 'sin imagen', '$2y$10$neE/ldNdmdO9X8.SUCgCg.W..XdiOORJTICaj35gkJ7ojByimSNyS', 1, 'XgfXolEz6hf0mNma2L6vJTAhpPtVba0Nc4vX2kkFdvXblbA2HS9yMirGz9Lg', '2018-02-05 02:16:40', '2018-02-04 20:28:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulos_color_id_foreign` (`color_id`),
  ADD KEY `articulos_talle_id_foreign` (`talle_id`),
  ADD KEY `marca_id` (`marca_id`),
  ADD KEY `umedida_id` (`umedida_id`),
  ADD KEY `subrubro_id` (`subrubro_id`);

--
-- Indices de la tabla `articulos_ventas`
--
ALTER TABLE `articulos_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulos_ventas_articulo_id_foreign` (`articulo_id`),
  ADD KEY `articulos_ventas_venta_id_foreign` (`venta_id`);

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_localidad_id_foreign` (`localidad_id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_responiva_id_foreign` (`responiva_id`),
  ADD KEY `configs_localidad_id_foreign` (`localidad_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_presupuesto`
--
ALTER TABLE `lineas_presupuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `localidades_provincia_id_foreign` (`provincia_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presupuestos`
--
ALTER TABLE `presupuestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_publicados`
--
ALTER TABLE `productos_publicados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_publicados_tipo_publicado_id_foreign` (`tipo_publicado_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_pais_id_foreign` (`pais_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subrubros`
--
ALTER TABLE `subrubros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`nombre`,`rubro_id`,`descripcion`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_publicados`
--
ALTER TABLE `tipos_publicados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades_medidas`
--
ALTER TABLE `unidades_medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_nivel_acceso_id_foreign` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `articulos_ventas`
--
ALTER TABLE `articulos_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineas_presupuesto`
--
ALTER TABLE `lineas_presupuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `presupuestos`
--
ALTER TABLE `presupuestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos_publicados`
--
ALTER TABLE `productos_publicados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rubros`
--
ALTER TABLE `rubros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subrubros`
--
ALTER TABLE `subrubros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipos_publicados`
--
ALTER TABLE `tipos_publicados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidades_medidas`
--
ALTER TABLE `unidades_medidas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `articulos_ibfk_3` FOREIGN KEY (`umedida_id`) REFERENCES `unidades_medidas` (`id`),
  ADD CONSTRAINT `articulos_ibfk_4` FOREIGN KEY (`subrubro_id`) REFERENCES `subrubros` (`id`),
  ADD CONSTRAINT `articulos_talle_id_foreign` FOREIGN KEY (`talle_id`) REFERENCES `talles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidades` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
