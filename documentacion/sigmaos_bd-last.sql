-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-02-2020 a las 14:53:22
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `sigmaos_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_banc`
--

CREATE TABLE `tabma_banc` (
  `ident_banc` int(2) NOT NULL,
  `nombr_banc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_cart`
--

CREATE TABLE `tabma_cart` (
  `ident_cart` int(10) NOT NULL,
  `fecha_cart` date DEFAULT NULL,
  `monto_cart` float DEFAULT NULL,
  `ident_clie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_cate`
--

CREATE TABLE `tabma_cate` (
  `ident_cate` int(2) NOT NULL,
  `nombr_cate` varchar(100) DEFAULT NULL,
  `statu_cate` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabma_cate`
--

INSERT INTO `tabma_cate` (`ident_cate`, `nombr_cate`, `statu_cate`) VALUES
(1, 'IMAGENOLOGIA', '1'),
(2, 'CIRUGIA', '1'),
(3, 'CONSUMIBLES', '1'),
(4, 'ODONTOLOGIA', '1'),
(5, 'HOSPITALIZACION', '1'),
(6, 'MOBILIARIO', '1'),
(7, 'EMERGENCIA', '1'),
(8, 'OFTALMOLOGIA', '1'),
(9, 'VEHICULOS', '1'),
(10, 'INSTRUMENTAL', '1'),
(11, 'DESCARTABLES', '1'),
(12, 'MEDICINAS', '1'),
(13, 'LABORATORIO', '1'),
(14, 'EQUIPOS MEDICOS', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_dire`
--

CREATE TABLE `tabma_dire` (
  `ident_dire` int(10) NOT NULL,
  `calle_dire` varchar(100) DEFAULT NULL,
  `aveni_dire` varchar(100) DEFAULT NULL,
  `secto_dire` varchar(100) DEFAULT NULL,
  `codpo_dire` char(10) DEFAULT NULL,
  `ident_muni` int(2) NOT NULL,
  `ident_clie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_empr`
--

CREATE TABLE `tabma_empr` (
  `ident_empr` int(2) NOT NULL,
  `nombr_empr` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_esta`
--

CREATE TABLE `tabma_esta` (
  `ident_esta` int(2) NOT NULL,
  `nombr_esta` varchar(50) DEFAULT NULL,
  `ident_pais` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_fact`
--

CREATE TABLE `tabma_fact` (
  `ident_fact` int(10) NOT NULL,
  `fecha_fact` date DEFAULT NULL,
  `monto_fact` float DEFAULT NULL,
  `statu_fact` varchar(20) DEFAULT NULL,
  `ident_orde` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_muni`
--

CREATE TABLE `tabma_muni` (
  `ident_muni` int(2) NOT NULL,
  `nombr_muni` varchar(50) DEFAULT NULL,
  `ident_esta` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_pais`
--

CREATE TABLE `tabma_pais` (
  `ident_pais` int(3) NOT NULL,
  `nombr_pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_prod`
--

CREATE TABLE `tabma_prod` (
  `ident_prod` char(10) NOT NULL,
  `nombr_prod` varchar(100) DEFAULT NULL,
  `desco_prod` varchar(200) DEFAULT NULL,
  `desla_prod` varchar(400) DEFAULT NULL,
  `preci_prod` float(12,2) DEFAULT NULL,
  `pesoo_prod` varchar(50) DEFAULT NULL,
  `taman_prod` varchar(50) DEFAULT NULL,
  `stock_prod` int(10) DEFAULT NULL,
  `estad_prod` varchar(20) DEFAULT NULL,
  `imag1_prod` varchar(300) DEFAULT NULL,
  `imag2_prod` varchar(300) DEFAULT NULL,
  `imag3_prod` varchar(300) DEFAULT NULL,
  `statu_prod` char(1) DEFAULT NULL,
  `ident_cate` int(2) NOT NULL,
  `ident_prov` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabma_prod`
--

INSERT INTO `tabma_prod` (`ident_prod`, `nombr_prod`, `desco_prod`, `desla_prod`, `preci_prod`, `pesoo_prod`, `taman_prod`, `stock_prod`, `estad_prod`, `imag1_prod`, `imag2_prod`, `imag3_prod`, `statu_prod`, `ident_cate`, `ident_prov`) VALUES
('0001', 'ISOFLURANO 100ML', 'Anestesico Inhalatorio', 'Anestesico Inhalatorio. Botella de 100ml.', 32.00, '10', '10', 10, 'NUEVO', '../../imagen/productos/isoflurano100ml.jpg', '../../imagen/productos/product.jpg', '../../imagen/productos/product.jpg', '1', 12, 1),
('0002', 'PINZA ELECTROQUIRURGICA BIPOLAR', 'Pinza Electroquirurgica Bipolar de 5mm', 'Pinza Electroquirurgica Bipolar de 5mm', 250.00, '10', '10', 10, 'NUEVO', '../../imagen/productos/pinzaecq.jpg', '../../imagen/productos/product.jpg', '../../imagen/productos/product.jpg', '1', 10, 7),
('0003', 'TENSIOMETRO WELCH ALLYN CONNEX PROBP 3400 DIGITAL', 'TENSIOMETRO WELCH ALLYN CONNEX PROBP 3400 DIGITAL', 'TENSIOMETRO WELCH ALLYN CONNEX PROBP 3400 DIGITAL', 795.00, '10', '10', 10, 'NUEVO', '../../imagen/productos/product.jpg', '../../imagen/productos/product.jpg', '../../imagen/productos/product.jpg', '1', 1, 2),
('0004', 'SECA 700 COLUMN SCALE', 'SECA 700 COLUMN SCALE', 'SECA 700 COLUMN SCALE', 149.99, '10.00 KG', '100.00 x 200.00 x 900.00', 10, 'NUEVO', '../../imagen/productos/seca7001.jpg', '../../imagen/productos/seca7002.jpg', '../../imagen/productos/seca7003.jpg', '1', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_prov`
--

CREATE TABLE `tabma_prov` (
  `ident_prov` int(10) NOT NULL,
  `nombr_prov` varchar(50) DEFAULT NULL,
  `telef_prov` varchar(15) DEFAULT NULL,
  `email_prov` varchar(100) DEFAULT NULL,
  `direc_prov` varchar(100) DEFAULT NULL,
  `statu_prov` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabma_prov`
--

INSERT INTO `tabma_prov` (`ident_prov`, `nombr_prov`, `telef_prov`, `email_prov`, `direc_prov`, `statu_prov`) VALUES
(1, 'WELLCH ALLYN DE VENEZUELA', '(0215) 151 0515', 'WAVEN@GMAIL.COM', 'CARACAS', '1'),
(2, 'MACROMEDICA', '(0276) 145 1884', 'MACROMEDICA@MAIL', 'SAN CRISTOBAL\r\n', '1'),
(3, 'INTRAMEDICA', '(0276) 244 1578', 'INTRAMEDICA@MAIL.COM', 'AVENIDA LUCIO OQUENDO', '1'),
(4, 'VALLEY LAB DE VENEZUELA', '(0276) 141 5158', 'VALLEYLAB@MAIL.COM', 'CARACAS', '1'),
(5, 'SUMINISTROS DAIR CA', '(0252) 045 1848', 'SUMINDAIR@GMAIL.COM', 'CARACAS, VENEZUELA\r\n', '1'),
(6, 'MEDICA DE VENEZUELA', '(0264) 941 9494', 'MEDICA@MAIL', 'MARACAY, VENEZUELA', '1'),
(7, 'MARYLAND USA', '(0276) 236 5151', 'MARYLANDUSA@GMAIL.COM', 'CARACAS', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_tipo`
--

CREATE TABLE `tabma_tipo` (
  `ident_tipo` int(2) NOT NULL,
  `nombr_tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabma_tipo`
--

INSERT INTO `tabma_tipo` (`ident_tipo`, `nombr_tipo`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'GERENTE'),
(3, 'EMPLEADO'),
(4, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabma_usua`
--

CREATE TABLE `tabma_usua` (
  `ident_usua` int(10) NOT NULL,
  `nomb1_usua` varchar(20) DEFAULT NULL,
  `nomb2_usua` varchar(20) DEFAULT NULL,
  `apel1_usua` varchar(20) DEFAULT NULL,
  `apel2_usua` varchar(20) DEFAULT NULL,
  `gener_usua` varchar(10) DEFAULT NULL,
  `telef_usua` varchar(15) DEFAULT NULL,
  `email_usua` varchar(100) DEFAULT NULL,
  `image_usua` varchar(250) NOT NULL,
  `usuar_usua` varchar(20) DEFAULT NULL,
  `contr_usua` varchar(45) DEFAULT NULL,
  `fecre_usua` datetime DEFAULT CURRENT_TIMESTAMP,
  `statu_usua` char(1) DEFAULT NULL,
  `ident_tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabma_usua`
--

INSERT INTO `tabma_usua` (`ident_usua`, `nomb1_usua`, `nomb2_usua`, `apel1_usua`, `apel2_usua`, `gener_usua`, `telef_usua`, `email_usua`, `image_usua`, `usuar_usua`, `contr_usua`, `fecre_usua`, `statu_usua`, `ident_tipo`) VALUES
(1, 'CARLOS', 'AGUSTIN', 'GUANIPA', 'ALVAREZ', 'MASCULINO', '(0426) 690 8396', 'AGUSTINGUANIPA98@GMAIL.COM', '../../imagen/perfil/Agustin 1 x 1.jpeg', 'AGUSTIN', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-04 17:05:26', '1', 1),
(2, 'CARLOS', 'LUIS', 'GUANIPA', 'BUENO', 'MASCULINO', '(0414) 707 8002', 'GUANIPABUENO@GMAIL.COM', '../../imagen/perfil/user.png', 'GUANIPA', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-08 16:41:02', '1', 2),
(3, 'ALBA', 'ALIDA', 'ALVAREZ', 'SANCHEZ', 'FEMENINO', '(0426) 822 6711', 'ALBALIDA2006@HOTMAIL.COM', '../../imagen/perfil/Agustin 1 x 1.jpeg', 'ALBA', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-08 17:00:48', '1', 2),
(4, 'ALEXIS', 'ENRIQUE', 'ALVAREZ', 'SANCHEZ', 'MASCULINO', '(0414) 175 3065', 'ALEXISALVARESZ35@GMAIL.COM', '../../imagen/perfil/WhatsApp Image 2018-03-05 at 8.08.12 PM.jpeg', 'ALEXIS', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-08 17:08:50', '1', 4),
(5, 'PEDRO', 'ROGELIO', 'ALVAREZ', 'SANCHEZ', 'MASCULINO', '(0424) 702 9925', 'PEDRITO@GMAIL.COM', '../../imagen/perfil/WhatsApp Image 2018-03-05 at 8.08.34 PM.jpeg', 'PEDRO', '827ccb0eea8a706c4c34a16891f84e7b', '2020-02-16 15:57:38', '1', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_deca`
--

CREATE TABLE `tabtr_deca` (
  `canti_deca` int(10) DEFAULT NULL,
  `preci_deca` float DEFAULT NULL,
  `ident_cart` int(10) NOT NULL,
  `ident_prod` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_defa`
--

CREATE TABLE `tabtr_defa` (
  `canti_defa` int(10) DEFAULT NULL,
  `preci_defa` float DEFAULT NULL,
  `ident_fact` int(10) NOT NULL,
  `ident_orde` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_deor`
--

CREATE TABLE `tabtr_deor` (
  `canti_orde` int(10) DEFAULT NULL,
  `preci_orde` float DEFAULT NULL,
  `ident_orde` int(10) NOT NULL,
  `ident_envi` int(10) NOT NULL,
  `ident_prod` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_envi`
--

CREATE TABLE `tabtr_envi` (
  `ident_envi` int(10) NOT NULL,
  `fecha_envi` date DEFAULT NULL,
  `track_envi` char(20) DEFAULT NULL,
  `ident_orde` int(10) NOT NULL,
  `ident_empr` int(2) NOT NULL,
  `ident_dire` int(10) NOT NULL,
  `ident_fact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_orde`
--

CREATE TABLE `tabtr_orde` (
  `ident_orde` int(10) NOT NULL,
  `fecha_orde` date DEFAULT NULL,
  `monto_orde` float DEFAULT NULL,
  `ident_clie` int(10) NOT NULL,
  `ident_stor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_pago`
--

CREATE TABLE `tabtr_pago` (
  `ident_pago` int(10) NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `monto_pago` float DEFAULT NULL,
  `tipos_pago` varchar(20) DEFAULT NULL,
  `refer_pago` varchar(20) DEFAULT NULL,
  `image_pago` varchar(300) DEFAULT NULL,
  `ident_fact` int(10) NOT NULL,
  `ident_banc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabtr_stor`
--

CREATE TABLE `tabtr_stor` (
  `ident_stor` int(10) NOT NULL,
  `descr_stor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabma_banc`
--
ALTER TABLE `tabma_banc`
  ADD PRIMARY KEY (`ident_banc`);

--
-- Indices de la tabla `tabma_cart`
--
ALTER TABLE `tabma_cart`
  ADD PRIMARY KEY (`ident_cart`),
  ADD KEY `fk_tabla_clie3_idx` (`ident_clie`);

--
-- Indices de la tabla `tabma_cate`
--
ALTER TABLE `tabma_cate`
  ADD PRIMARY KEY (`ident_cate`);

--
-- Indices de la tabla `tabma_dire`
--
ALTER TABLE `tabma_dire`
  ADD PRIMARY KEY (`ident_dire`),
  ADD KEY `fk_tabla_muni1_idx` (`ident_muni`),
  ADD KEY `fk_tabla_clie1_idx` (`ident_clie`);

--
-- Indices de la tabla `tabma_empr`
--
ALTER TABLE `tabma_empr`
  ADD PRIMARY KEY (`ident_empr`);

--
-- Indices de la tabla `tabma_esta`
--
ALTER TABLE `tabma_esta`
  ADD PRIMARY KEY (`ident_esta`),
  ADD KEY `fk_tabla_pais1_idx` (`ident_pais`);

--
-- Indices de la tabla `tabma_fact`
--
ALTER TABLE `tabma_fact`
  ADD PRIMARY KEY (`ident_fact`),
  ADD KEY `fk_tabla_orde1_idx` (`ident_orde`);

--
-- Indices de la tabla `tabma_muni`
--
ALTER TABLE `tabma_muni`
  ADD PRIMARY KEY (`ident_muni`),
  ADD KEY `fk_tabla_esta1_idx` (`ident_esta`);

--
-- Indices de la tabla `tabma_pais`
--
ALTER TABLE `tabma_pais`
  ADD PRIMARY KEY (`ident_pais`);

--
-- Indices de la tabla `tabma_prod`
--
ALTER TABLE `tabma_prod`
  ADD PRIMARY KEY (`ident_prod`),
  ADD KEY `fk_tabla_cate1_idx` (`ident_cate`),
  ADD KEY `fk_tabma_prov1_idx` (`ident_prov`);

--
-- Indices de la tabla `tabma_prov`
--
ALTER TABLE `tabma_prov`
  ADD PRIMARY KEY (`ident_prov`);

--
-- Indices de la tabla `tabma_tipo`
--
ALTER TABLE `tabma_tipo`
  ADD PRIMARY KEY (`ident_tipo`);

--
-- Indices de la tabla `tabma_usua`
--
ALTER TABLE `tabma_usua`
  ADD PRIMARY KEY (`ident_usua`),
  ADD KEY `fk_tabma_tipo1_idx` (`ident_tipo`);

--
-- Indices de la tabla `tabtr_deca`
--
ALTER TABLE `tabtr_deca`
  ADD KEY `fk_tabla_cart1_idx` (`ident_cart`),
  ADD KEY `fk_tabla_prod1_idx` (`ident_prod`);

--
-- Indices de la tabla `tabtr_defa`
--
ALTER TABLE `tabtr_defa`
  ADD KEY `fk_tabla_fact3_idx` (`ident_fact`),
  ADD KEY `fk_tabla_orde4_idx` (`ident_orde`);

--
-- Indices de la tabla `tabtr_deor`
--
ALTER TABLE `tabtr_deor`
  ADD KEY `fk_tabla_orde3_idx` (`ident_orde`),
  ADD KEY `fk_tabla_envi1_idx` (`ident_envi`),
  ADD KEY `fk_tabla_prod2_idx` (`ident_prod`);

--
-- Indices de la tabla `tabtr_envi`
--
ALTER TABLE `tabtr_envi`
  ADD PRIMARY KEY (`ident_envi`),
  ADD KEY `fk_tabla_orde2_idx` (`ident_orde`),
  ADD KEY `fk_tabla_empr1_idx` (`ident_empr`),
  ADD KEY `fk_tabla_dire1_idx` (`ident_dire`),
  ADD KEY `fk_tabla_fact1_idx` (`ident_fact`);

--
-- Indices de la tabla `tabtr_orde`
--
ALTER TABLE `tabtr_orde`
  ADD PRIMARY KEY (`ident_orde`),
  ADD KEY `fk_tabla_clie2_idx` (`ident_clie`),
  ADD KEY `fk_tabla_stor1_idx` (`ident_stor`);

--
-- Indices de la tabla `tabtr_pago`
--
ALTER TABLE `tabtr_pago`
  ADD PRIMARY KEY (`ident_pago`),
  ADD KEY `fk_tabla_fact2_idx` (`ident_fact`),
  ADD KEY `fk_tabla_banc1_idx` (`ident_banc`);

--
-- Indices de la tabla `tabtr_stor`
--
ALTER TABLE `tabtr_stor`
  ADD PRIMARY KEY (`ident_stor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabma_banc`
--
ALTER TABLE `tabma_banc`
  MODIFY `ident_banc` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_cart`
--
ALTER TABLE `tabma_cart`
  MODIFY `ident_cart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_cate`
--
ALTER TABLE `tabma_cate`
  MODIFY `ident_cate` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tabma_dire`
--
ALTER TABLE `tabma_dire`
  MODIFY `ident_dire` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_empr`
--
ALTER TABLE `tabma_empr`
  MODIFY `ident_empr` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_esta`
--
ALTER TABLE `tabma_esta`
  MODIFY `ident_esta` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_fact`
--
ALTER TABLE `tabma_fact`
  MODIFY `ident_fact` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_muni`
--
ALTER TABLE `tabma_muni`
  MODIFY `ident_muni` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_pais`
--
ALTER TABLE `tabma_pais`
  MODIFY `ident_pais` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabma_prov`
--
ALTER TABLE `tabma_prov`
  MODIFY `ident_prov` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tabma_usua`
--
ALTER TABLE `tabma_usua`
  MODIFY `ident_usua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tabtr_envi`
--
ALTER TABLE `tabtr_envi`
  MODIFY `ident_envi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabtr_orde`
--
ALTER TABLE `tabtr_orde`
  MODIFY `ident_orde` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabtr_pago`
--
ALTER TABLE `tabtr_pago`
  MODIFY `ident_pago` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabtr_stor`
--
ALTER TABLE `tabtr_stor`
  MODIFY `ident_stor` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tabma_cart`
--
ALTER TABLE `tabma_cart`
  ADD CONSTRAINT `fk_tabla_clie3` FOREIGN KEY (`ident_clie`) REFERENCES `tabma_usua` (`ident_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_dire`
--
ALTER TABLE `tabma_dire`
  ADD CONSTRAINT `fk_tabla_clie1` FOREIGN KEY (`ident_clie`) REFERENCES `tabma_usua` (`ident_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_muni1` FOREIGN KEY (`ident_muni`) REFERENCES `tabma_muni` (`ident_muni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_esta`
--
ALTER TABLE `tabma_esta`
  ADD CONSTRAINT `fk_tabla_pais1` FOREIGN KEY (`ident_pais`) REFERENCES `tabma_pais` (`ident_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_fact`
--
ALTER TABLE `tabma_fact`
  ADD CONSTRAINT `fk_tabla_orde1` FOREIGN KEY (`ident_orde`) REFERENCES `tabtr_orde` (`ident_orde`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_muni`
--
ALTER TABLE `tabma_muni`
  ADD CONSTRAINT `fk_tabla_esta1` FOREIGN KEY (`ident_esta`) REFERENCES `tabma_esta` (`ident_esta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_prod`
--
ALTER TABLE `tabma_prod`
  ADD CONSTRAINT `fk_tabla_cate1` FOREIGN KEY (`ident_cate`) REFERENCES `tabma_cate` (`ident_cate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabma_prov1` FOREIGN KEY (`ident_prov`) REFERENCES `tabma_prov` (`ident_prov`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabma_usua`
--
ALTER TABLE `tabma_usua`
  ADD CONSTRAINT `fk_tabma_tipo1` FOREIGN KEY (`ident_tipo`) REFERENCES `tabma_tipo` (`ident_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_deca`
--
ALTER TABLE `tabtr_deca`
  ADD CONSTRAINT `fk_tabla_cart1` FOREIGN KEY (`ident_cart`) REFERENCES `tabma_cart` (`ident_cart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_prod1` FOREIGN KEY (`ident_prod`) REFERENCES `tabma_prod` (`ident_prod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_defa`
--
ALTER TABLE `tabtr_defa`
  ADD CONSTRAINT `fk_tabla_fact3` FOREIGN KEY (`ident_fact`) REFERENCES `tabma_fact` (`ident_fact`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_orde4` FOREIGN KEY (`ident_orde`) REFERENCES `tabtr_orde` (`ident_orde`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_deor`
--
ALTER TABLE `tabtr_deor`
  ADD CONSTRAINT `fk_tabla_envi1` FOREIGN KEY (`ident_envi`) REFERENCES `tabtr_envi` (`ident_envi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_orde3` FOREIGN KEY (`ident_orde`) REFERENCES `tabtr_orde` (`ident_orde`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_prod2` FOREIGN KEY (`ident_prod`) REFERENCES `tabma_prod` (`ident_prod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_envi`
--
ALTER TABLE `tabtr_envi`
  ADD CONSTRAINT `fk_tabla_dire1` FOREIGN KEY (`ident_dire`) REFERENCES `tabma_dire` (`ident_dire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_empr1` FOREIGN KEY (`ident_empr`) REFERENCES `tabma_empr` (`ident_empr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_fact1` FOREIGN KEY (`ident_fact`) REFERENCES `tabma_fact` (`ident_fact`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_orde2` FOREIGN KEY (`ident_orde`) REFERENCES `tabtr_orde` (`ident_orde`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_orde`
--
ALTER TABLE `tabtr_orde`
  ADD CONSTRAINT `fk_tabla_clie2` FOREIGN KEY (`ident_clie`) REFERENCES `tabma_usua` (`ident_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_stor1` FOREIGN KEY (`ident_stor`) REFERENCES `tabtr_stor` (`ident_stor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabtr_pago`
--
ALTER TABLE `tabtr_pago`
  ADD CONSTRAINT `fk_tabla_banc1` FOREIGN KEY (`ident_banc`) REFERENCES `tabma_banc` (`ident_banc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabla_fact2` FOREIGN KEY (`ident_fact`) REFERENCES `tabma_fact` (`ident_fact`) ON DELETE NO ACTION ON UPDATE NO ACTION;
