-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2019 a las 12:51:16
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `generica_comercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_colores`
--

CREATE TABLE `definicion_colores` (
  `id_colo` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'COLORES',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '2',
  `nombre_color` varchar(250) NOT NULL,
  `valor_hexa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_colores`
--

INSERT INTO `definicion_colores` (`id_colo`, `id_tipomodalidad`, `id_valor_modalidad`, `nombre_color`, `valor_hexa`) VALUES
(1, 'COLORES', 2, 'Azul', '#000000'),
(2, 'COLORES', 2, 'Rojo', '#000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_estructura`
--

CREATE TABLE `definicion_estructura` (
  `id_estruc` int(11) NOT NULL,
  `nombre_estructura` varchar(250) NOT NULL COMMENT 'nombre comun de las estructuras de un mismo tipo',
  `archivo_patron` varchar(250) NOT NULL COMMENT 'archivo que contiene la estructura HTML',
  `nombre_patron` varchar(250) NOT NULL COMMENT 'nombre del patron'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='define la estrctura de la tienda';

--
-- Volcado de datos para la tabla `definicion_estructura`
--

INSERT INTO `definicion_estructura` (`id_estruc`, `nombre_estructura`, `archivo_patron`, `nombre_patron`) VALUES
(1, 'Navegación SPA', 'templates/estructuras/spa/home.tpl', 'landing_page'),
(2, 'Navegación SPA', 'templates/estructuras/spa/detalle.tpl', 'pagina_detalle'),
(3, 'Navegación paginada', 'templates/estructuras/paginada/home.tpl', 'landing_page'),
(4, 'Navegación paginada', 'templates/estructuras/paginada/detalle.tpl', 'pagina_detalle'),
(5, 'Navegación paginada', 'templates/estructuras/paginada/contacto.tpl', 'pagina_contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_idiomas`
--

CREATE TABLE `definicion_idiomas` (
  `id_locale` int(11) NOT NULL,
  `idioma_nombre` varchar(250) NOT NULL COMMENT 'nombre del idioma',
  `idioma_archivo` varchar(250) NOT NULL COMMENT 'archivo que contiene los literales (path)',
  `idioma_codigo` varchar(250) NOT NULL COMMENT 'codigo del idioma'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='definicion de los idiomas disponibles';

--
-- Volcado de datos para la tabla `definicion_idiomas`
--

INSERT INTO `definicion_idiomas` (`id_locale`, `idioma_nombre`, `idioma_archivo`, `idioma_codigo`) VALUES
(1, 'Español', 'literales_es.php', 'es'),
(2, 'Català', 'literales_ca.php', 'ca'),
(3, 'English', 'literales_en.php', 'en'),
(4, 'Francaise', 'literales_fr.php', 'fr'),
(5, 'Deustch', 'literales_de.php', 'de');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_materiales`
--

CREATE TABLE `definicion_materiales` (
  `id_mater` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'MATERIAL',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '5',
  `nombre_material` varchar(250) NOT NULL,
  `valor_material` varchar(250) NOT NULL,
  `composicion_material` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_materiales`
--

INSERT INTO `definicion_materiales` (`id_mater`, `id_tipomodalidad`, `id_valor_modalidad`, `nombre_material`, `valor_material`, `composicion_material`) VALUES
(1, 'MATERIAL', 5, 'Seda', 'seda', 'seda turca'),
(2, 'MATERIAL', 5, 'plástico', 'plastico', 'Polietileno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_medida`
--

CREATE TABLE `definicion_medida` (
  `id_medida` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'MEDIDA',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '4',
  `dimension` varchar(250) NOT NULL,
  `valor_dimension` varchar(250) NOT NULL,
  `unidad` varchar(250) NOT NULL,
  `nombre_dimension` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_medida`
--

INSERT INTO `definicion_medida` (`id_medida`, `id_tipomodalidad`, `id_valor_modalidad`, `dimension`, `valor_dimension`, `unidad`, `nombre_dimension`) VALUES
(1, 'MEDIDA', 4, 'alto', '10', 'cm', '10 cm alto'),
(2, 'MEDIDA', 4, 'ancho', '10', 'cm', '10 cm ancho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_modalidades`
--

CREATE TABLE `definicion_modalidades` (
  `id_modali` int(11) NOT NULL,
  `nombre_modalidad` varchar(250) NOT NULL,
  `id_valor modalidad` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_modalidades`
--

INSERT INTO `definicion_modalidades` (`id_modali`, `nombre_modalidad`, `id_valor modalidad`, `id_tipomodalidad`) VALUES
(1, 'Tallas', 1, 'TALLAS'),
(2, 'Colores', 2, 'COLORES'),
(3, 'Peso', 3, 'PESO'),
(4, 'Medida', 4, 'MEDIDA'),
(5, 'Material', 5, 'MATERIAL'),
(6, 'Modelos', 6, 'MODELOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_modelos`
--

CREATE TABLE `definicion_modelos` (
  `id_mode` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'MODELOS',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '6',
  `nombre_modelo` varchar(250) NOT NULL,
  `valor_modelo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_modelos`
--

INSERT INTO `definicion_modelos` (`id_mode`, `id_tipomodalidad`, `id_valor_modalidad`, `nombre_modelo`, `valor_modelo`) VALUES
(1, 'MODELOS', 6, 'Vertical', 'vertical'),
(2, 'MODELOS', 6, 'Horizontal', 'horizontal'),
(3, 'MODELOS', 6, 'Cristal', 'cristal'),
(4, 'MODELOS', 6, 'W45E938783', 'w45e938783');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_peso`
--

CREATE TABLE `definicion_peso` (
  `id_pes` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'PESO',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '3',
  `nombre_peso` varchar(250) NOT NULL,
  `valor_peso` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_peso`
--

INSERT INTO `definicion_peso` (`id_pes`, `id_tipomodalidad`, `id_valor_modalidad`, `nombre_peso`, `valor_peso`) VALUES
(1, 'PESO', 3, '100 gr', '0,1'),
(2, 'PESO', 3, '200 gr', '0,2'),
(3, 'PESO', 3, '500 gr', '0,5'),
(4, 'PESO', 3, '1 kilo', '1'),
(5, 'PESO', 3, '10 kilos', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_tallas`
--

CREATE TABLE `definicion_tallas` (
  `id_talla` int(11) NOT NULL,
  `id_tipomodalidad` varchar(250) NOT NULL DEFAULT 'TALLAS',
  `id_valor_modalidad` int(11) NOT NULL DEFAULT '1',
  `nombre_talla` varchar(250) NOT NULL,
  `valor_talla` text NOT NULL,
  `motivo_talla` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_tallas`
--

INSERT INTO `definicion_tallas` (`id_talla`, `id_tipomodalidad`, `id_valor_modalidad`, `nombre_talla`, `valor_talla`, `motivo_talla`) VALUES
(1, 'TALLAS', 1, '42', '42', 'calzado'),
(2, 'TALLAS', 1, 'XL', 'XL', 'textil'),
(3, 'TALLAS', 1, '42', '42', 'calzado'),
(4, 'TALLAS', 1, 'L', 'L', 'textil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_tipospago`
--

CREATE TABLE `definicion_tipospago` (
  `id_tipago` int(11) NOT NULL,
  `nombre_tipago` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_tipospago`
--

INSERT INTO `definicion_tipospago` (`id_tipago`, `nombre_tipago`) VALUES
(1, 'Tarjeta VISA'),
(2, 'Paypal'),
(3, 'Contrarembolso'),
(4, 'Transferencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definicion_tipotienda`
--

CREATE TABLE `definicion_tipotienda` (
  `id_tipotienda` int(11) NOT NULL,
  `nombre_tipotienda` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `definicion_tipotienda`
--

INSERT INTO `definicion_tipotienda` (`id_tipotienda`, `nombre_tipotienda`) VALUES
(38501, 'Cosmética'),
(38502, 'Calzado'),
(38503, 'Textil'),
(38504, 'Informática'),
(38505, 'Servicios'),
(38506, 'Alimentación'),
(38507, 'Erótica'),
(38508, 'Artesanía'),
(38509, 'Deporte'),
(38510, 'Papelería'),
(38511, 'Arte'),
(38512, 'Electrodomésticos'),
(38513, 'General'),
(38514, 'Música'),
(38515, 'Herbolario'),
(38516, 'Segunda mano'),
(38517, 'Artículos Mascotas'),
(38518, 'Mobiliario'),
(38519, 'Automoción'),
(38520, 'Regalos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_cliente`
--

CREATE TABLE `generica_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(250) NOT NULL,
  `apellidos_cliente` varchar(250) NOT NULL,
  `dni_cliente` varchar(250) NOT NULL,
  `usuario_cliente` varchar(250) NOT NULL,
  `password_cliente` varchar(250) NOT NULL,
  `email_cliente` varchar(250) NOT NULL,
  `telefono_cliente` varchar(250) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generica_cliente`
--

INSERT INTO `generica_cliente` (`id_cliente`, `nombre_cliente`, `apellidos_cliente`, `dni_cliente`, `usuario_cliente`, `password_cliente`, `email_cliente`, `telefono_cliente`, `id_tienda`) VALUES
(100000001, 'Pepe ', 'Gomez', '43735032A', 'pepe', '1234', 'pepe@pepe.com', '622022812', 1000001),
(100000002, 'Antonio ', 'Tienda', 'Y8030225L', 'antonio', '1234', 'antonio@antonio.com', '622022812', 1000002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_estructura`
--

CREATE TABLE `generica_estructura` (
  `id_estructura` int(11) NOT NULL,
  `id_estruc` int(11) NOT NULL COMMENT 'id de la tabla definicion estructuras',
  `id_tienda` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='vincula estructura con tienda';

--
-- Volcado de datos para la tabla `generica_estructura`
--

INSERT INTO `generica_estructura` (`id_estructura`, `id_estruc`, `id_tienda`, `orden`) VALUES
(101, 1, 100000001, 1),
(102, 2, 100000001, 2),
(103, 3, 100000002, 1),
(104, 4, 100000002, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_hostrouting`
--

CREATE TABLE `generica_hostrouting` (
  `id_hostrouting` int(11) NOT NULL,
  `dominio` varchar(250) NOT NULL,
  `ruta_servidor` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `id_tienda` int(11) NOT NULL COMMENT 'identificador de generica_tienda',
  `protocolo_preferente` varchar(250) NOT NULL COMMENT 'determina si la preferencia es http o https',
  `friendly` varchar(250) NOT NULL,
  `usowww` varchar(250) NOT NULL COMMENT 'determina si se usa preferente el www delante del dominio',
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='configura datos de servidor';

--
-- Volcado de datos para la tabla `generica_hostrouting`
--

INSERT INTO `generica_hostrouting` (`id_hostrouting`, `dominio`, `ruta_servidor`, `nombre`, `id_tienda`, `protocolo_preferente`, `friendly`, `usowww`, `fecha_alta`) VALUES
(1, 'localhost/tienda1', 'C:/Appserv/www/tienda1', 'Tienda uno', 1000001, 'http://', 'S', 'N', '2019-06-13 00:00:00'),
(2, 'localhost/tienda2', 'C:/Appserv/www/tienda2', 'Tienda dos', 1000002, 'http://', 'S', 'N', '2019-06-13 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_idiomas`
--

CREATE TABLE `generica_idiomas` (
  `id_idioma` int(11) NOT NULL,
  `id_locale` int(11) NOT NULL COMMENT 'id del idioma en la tabla definicion_idiomas',
  `id_tienda` int(11) NOT NULL COMMENT 'id_tienda en la tabla generica_tienda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='vincula defin. idiomas con tienda por id_locale y id_tienda';

--
-- Volcado de datos para la tabla `generica_idiomas`
--

INSERT INTO `generica_idiomas` (`id_idioma`, `id_locale`, `id_tienda`) VALUES
(1, 1, 1000001),
(2, 2, 1000001),
(3, 1, 1000002),
(4, 3, 1000002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_logs`
--

CREATE TABLE `generica_logs` (
  `id_log` int(11) NOT NULL,
  `fecha_log` datetime NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla que guarda logs de acciones predefinidas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_modalidades`
--

CREATE TABLE `generica_modalidades` (
  `id_moda` int(11) NOT NULL,
  `id_modali` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='vincula las modalidades que va a usar la tienda';

--
-- Volcado de datos para la tabla `generica_modalidades`
--

INSERT INTO `generica_modalidades` (`id_moda`, `id_modali`, `id_tienda`) VALUES
(1, 1, 1000001),
(2, 2, 1000001),
(3, 3, 1000002),
(4, 4, 1000002),
(5, 5, 1000002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_tienda`
--

CREATE TABLE `generica_tienda` (
  `tienda_nombre` varchar(250) NOT NULL COMMENT 'nombre de la tienda',
  `id_tienda` int(11) NOT NULL COMMENT 'identificador de la tienda',
  `id_tipotienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de la tienda';

--
-- Volcado de datos para la tabla `generica_tienda`
--

INSERT INTO `generica_tienda` (`tienda_nombre`, `id_tienda`, `id_tipotienda`) VALUES
('Zapatos Pepe', 1000001, 0),
('Servicios Antonio', 1000002, 0),
('38506', 1000003, 0),
('38506', 1000004, 0),
('38507', 1000005, 0),
('38507', 1000006, 0),
('38506', 1000007, 0),
('Webentorn', 1000008, 38506),
('Webentorn', 1000009, 38503),
('Webentorn', 1000010, 38503),
('Webentorn', 1000011, 38506),
('Webentorn', 1000012, 38506),
('Webentorn', 1000013, 38506);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generica_tipospago`
--

CREATE TABLE `generica_tipospago` (
  `id_tipospago` int(11) NOT NULL,
  `id_tipago` int(11) NOT NULL COMMENT 'id tabla definicion tipos de pago',
  `id_tienda` int(11) NOT NULL COMMENT 'id de la tienda en generica_tienda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generica_tipospago`
--

INSERT INTO `generica_tipospago` (`id_tipospago`, `id_tipago`, `id_tienda`) VALUES
(1, 1, 1000001),
(2, 2, 1000001),
(3, 1, 1000002),
(4, 2, 1000002),
(5, 3, 1000002);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `definicion_colores`
--
ALTER TABLE `definicion_colores`
  ADD PRIMARY KEY (`id_colo`);

--
-- Indices de la tabla `definicion_estructura`
--
ALTER TABLE `definicion_estructura`
  ADD PRIMARY KEY (`id_estruc`);

--
-- Indices de la tabla `definicion_idiomas`
--
ALTER TABLE `definicion_idiomas`
  ADD PRIMARY KEY (`id_locale`);

--
-- Indices de la tabla `definicion_materiales`
--
ALTER TABLE `definicion_materiales`
  ADD PRIMARY KEY (`id_mater`);

--
-- Indices de la tabla `definicion_medida`
--
ALTER TABLE `definicion_medida`
  ADD PRIMARY KEY (`id_medida`);

--
-- Indices de la tabla `definicion_modalidades`
--
ALTER TABLE `definicion_modalidades`
  ADD PRIMARY KEY (`id_modali`);

--
-- Indices de la tabla `definicion_modelos`
--
ALTER TABLE `definicion_modelos`
  ADD PRIMARY KEY (`id_mode`);

--
-- Indices de la tabla `definicion_peso`
--
ALTER TABLE `definicion_peso`
  ADD PRIMARY KEY (`id_pes`);

--
-- Indices de la tabla `definicion_tallas`
--
ALTER TABLE `definicion_tallas`
  ADD PRIMARY KEY (`id_talla`);

--
-- Indices de la tabla `definicion_tipospago`
--
ALTER TABLE `definicion_tipospago`
  ADD PRIMARY KEY (`id_tipago`);

--
-- Indices de la tabla `definicion_tipotienda`
--
ALTER TABLE `definicion_tipotienda`
  ADD PRIMARY KEY (`id_tipotienda`);

--
-- Indices de la tabla `generica_cliente`
--
ALTER TABLE `generica_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `generica_estructura`
--
ALTER TABLE `generica_estructura`
  ADD PRIMARY KEY (`id_estructura`);

--
-- Indices de la tabla `generica_hostrouting`
--
ALTER TABLE `generica_hostrouting`
  ADD PRIMARY KEY (`id_hostrouting`);

--
-- Indices de la tabla `generica_idiomas`
--
ALTER TABLE `generica_idiomas`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `generica_logs`
--
ALTER TABLE `generica_logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `generica_modalidades`
--
ALTER TABLE `generica_modalidades`
  ADD PRIMARY KEY (`id_moda`);

--
-- Indices de la tabla `generica_tienda`
--
ALTER TABLE `generica_tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- Indices de la tabla `generica_tipospago`
--
ALTER TABLE `generica_tipospago`
  ADD PRIMARY KEY (`id_tipospago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `definicion_colores`
--
ALTER TABLE `definicion_colores`
  MODIFY `id_colo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `definicion_estructura`
--
ALTER TABLE `definicion_estructura`
  MODIFY `id_estruc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `definicion_idiomas`
--
ALTER TABLE `definicion_idiomas`
  MODIFY `id_locale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `definicion_materiales`
--
ALTER TABLE `definicion_materiales`
  MODIFY `id_mater` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `definicion_medida`
--
ALTER TABLE `definicion_medida`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `definicion_modalidades`
--
ALTER TABLE `definicion_modalidades`
  MODIFY `id_modali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `definicion_modelos`
--
ALTER TABLE `definicion_modelos`
  MODIFY `id_mode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `definicion_peso`
--
ALTER TABLE `definicion_peso`
  MODIFY `id_pes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `definicion_tallas`
--
ALTER TABLE `definicion_tallas`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `definicion_tipospago`
--
ALTER TABLE `definicion_tipospago`
  MODIFY `id_tipago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `definicion_tipotienda`
--
ALTER TABLE `definicion_tipotienda`
  MODIFY `id_tipotienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38522;
--
-- AUTO_INCREMENT de la tabla `generica_cliente`
--
ALTER TABLE `generica_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000003;
--
-- AUTO_INCREMENT de la tabla `generica_estructura`
--
ALTER TABLE `generica_estructura`
  MODIFY `id_estructura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `generica_hostrouting`
--
ALTER TABLE `generica_hostrouting`
  MODIFY `id_hostrouting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `generica_idiomas`
--
ALTER TABLE `generica_idiomas`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `generica_logs`
--
ALTER TABLE `generica_logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `generica_modalidades`
--
ALTER TABLE `generica_modalidades`
  MODIFY `id_moda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `generica_tienda`
--
ALTER TABLE `generica_tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de la tienda', AUTO_INCREMENT=1000014;
--
-- AUTO_INCREMENT de la tabla `generica_tipospago`
--
ALTER TABLE `generica_tipospago`
  MODIFY `id_tipospago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
