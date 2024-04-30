-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 14:02:39
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `4325628_resileo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(4) NOT NULL,
  `id_proveedor` int(4) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `tipo_articulo` varchar(50) DEFAULT NULL,
  `precio_unitario` float DEFAULT NULL COMMENT 'precio por kg/litro/unidad',
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `id_proveedor`, `nombre`, `categoria`, `tipo_articulo`, `precio_unitario`, `stock`) VALUES
(1, 0, 'Lechuga', 'Alimentacion', 'Verduras', 0.4, 100),
(2, 0, 'Calabacín', 'Alimentacion', 'Verduras', 0.8, 100),
(3, 0, 'Pimiento rojo', 'Alimentacion', 'Verduras', 0.5, 100),
(4, 0, 'Zanahorias', 'Alimentacion', 'Verduras', 0.6, 100),
(5, 0, 'Cebolla', 'Alimentacion', 'Verduras', 0.34, 100),
(6, 0, 'Acelga', 'Alimentacion', 'Verduras', 0.64, 100),
(7, 0, 'Puerro', 'Alimentacion', 'Verduras', 0.49, 100),
(8, 0, 'Espinaca', 'Alimentacion', 'Verduras', 0.94, 100),
(9, 0, 'Alcachofas', 'Alimentacion', 'Verduras', 0.53, 100),
(10, 0, 'Guisantes', 'Alimentacion', 'Verduras', 0.89, 100),
(11, 0, 'Maíz', 'Alimentacion', 'Verduras', 0.94, 100),
(12, 0, 'Tomate', 'Alimentacion', 'Verduras', 1.55, 100),
(13, 0, 'Patata', 'Alimentacion', 'Verduras', 1.43, 100),
(14, 0, 'Naranja', 'Alimentacion', 'Frutas', 1.33, 58),
(15, 0, 'Manzana', 'Alimentacion', 'Frutas', 1.55, 89),
(16, 0, 'Plátano', 'Alimentacion', 'Frutas', 1.34, 77),
(17, 0, 'Pera', 'Alimentacion', 'Frutas', 1.13, 96),
(18, 0, 'Uvas', 'Alimentacion', 'Frutas', 1.1, 100),
(19, 0, 'Mandarina', 'Alimentacion', 'Frutas', 1.13, 100),
(20, 0, 'Fresas', 'Alimentacion', 'Frutas', 1.43, 100),
(21, 0, 'Sandía', 'Alimentacion', 'Frutas', 2.45, 59),
(22, 0, 'Melón', 'Alimentacion', 'Frutas', 1.95, 55),
(23, 0, 'Kiwi', 'Alimentacion', 'Frutas', 1.57, 100),
(24, 0, 'Arroz', 'Alimentacion', 'pasta y arroces', 0.23, 300),
(25, 0, 'Garbanzos', 'Alimentacion', 'pasta y arroces', 0.34, 100),
(26, 0, 'Lentejas', 'Alimentacion', 'pasta y arroces', 0.33, 100),
(27, 0, 'Alubias', 'Alimentacion', 'pasta y arroces', 0.22, 100),
(28, 0, 'Espaguetis', 'Alimentacion', 'pasta y arroces', 0.43, 100),
(29, 0, 'Macarrones', 'Alimentacion', 'pasta y arroces', 0.21, 100),
(30, 0, 'Fideos', 'Alimentacion', 'pasta y arroces', 0.32, 100),
(31, 0, 'Filete de ternera', 'Alimentacion', 'carne', 3.45, 45),
(32, 0, 'Pechuga de pollo', 'Alimentacion', 'carne', 2.34, 100),
(33, 0, 'Muslo de pollo', 'Alimentacion', 'carne', 2.55, 100),
(34, 0, 'Conejo', 'Alimentacion', 'carne', 3.98, 100),
(35, 0, 'Pechuga de pavo', 'Alimentacion', 'carne', 2.56, 67),
(36, 0, 'Pierna de cordero', 'Alimentacion', 'carne', 4.56, 100),
(37, 0, 'Carne para cocido', 'Alimentacion', 'carne', 2.39, 100),
(53, 0, 'Champú', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 0.98, 100),
(54, 0, 'Gel', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 0.66, 100),
(55, 0, 'Colonias', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 2.33, 67),
(56, 0, 'Crema hidratante', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 2.11, 66),
(57, 0, 'Absorbentes', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 1.19, 87),
(58, 0, 'Pañales', 'Higiene y cuidado personal', 'Higiene y cuidado personal', 1.11, 300),
(59, 0, 'Gallo', 'Alimentacion', 'pescado', 2.11, 55),
(60, 0, 'Pescadilla', 'Alimentacion', 'pescado', 1.56, 87),
(61, 0, 'Merluza', 'Alimentacion', 'pescado', 2.54, 100),
(62, 0, 'Bacalao', 'Alimentacion', 'pescado', 2.34, 100),
(63, 0, 'Boquerón', 'Alimentacion', 'pescado', 1.99, 100),
(64, 0, 'Salmón', 'Alimentacion', 'pescado', 3.99, 98),
(66, 0, 'Yogures sabores', 'Alimentacion', 'Productos lácteos', 0.99, 100),
(67, 0, 'Leche desnatada', 'Alimentacion', 'Productos lácteos', 0.66, 140),
(68, 0, 'Leche semidesnatada', 'Alimentacion', 'Productos lácteos', 0.88, 234),
(69, 0, 'Queso fresco', 'Alimentacion', 'Productos lácteos', 1.12, 99),
(70, 0, 'Queso tierno', 'Alimentacion', 'Productos lácteos', 1.23, 87),
(71, 0, 'Queso semicurado', 'Alimentacion', 'Productos lácteos', 1.33, 77),
(72, 0, 'Huevos', 'Alimentacion', 'Huevos', 0.12, 500),
(73, 0, 'Galletas', 'Alimentacion', 'Productos desayuno', 0.98, 100),
(74, 0, 'Pan tostado', 'Alimentacion', 'Productos desayuno', 0.55, 123),
(75, 0, 'Mermelada', 'Alimentacion', 'Productos desayuno', 0.98, 100),
(76, 0, 'Mantequilla', 'Alimentacion', 'Productos desayuno', 0.77, 100),
(77, 0, 'Magdalenas', 'Alimentacion', 'Productos desayuno', 0.99, 200),
(78, 0, 'Bizcocho', 'Alimentacion', 'Productos desayuno', 1.11, 88),
(79, 0, 'Zumo de melocotón', 'Alimentacion', 'Productos merienda', 1.23, 111),
(80, 0, 'Zumo de piña', 'Alimentacion', 'Prodcutos merienda', 1.33, 177),
(81, 0, 'Desinfectantes', 'Limpieza', 'Limpieza', 0.98, 100),
(82, 0, 'Limpieza de suelos', 'Limpieza', 'Limpieza', 0.88, 110),
(83, 0, 'Limpieza de cristales', 'Limpieza', 'Limpieza', 1.23, 100),
(84, 0, 'Limpieza de muebles', 'Limpieza', 'Limpieza', 1.39, 56),
(85, 0, 'Limpieza de cocina', 'Limpieza', 'Limpieza', 1.1, 55),
(86, 0, 'Limpieza de baños', 'Limpieza', 'Limpieza', 1.12, 34),
(87, 0, 'Lavado de ropa', 'Limpieza', 'Limpieza', 1.56, 88),
(88, 0, 'Gel hidroalcohólico', 'Limpieza', 'Limpieza', 0.88, 300),
(89, 0, 'Mascarillas', 'Limpieza', 'Limpieza', 1.1, 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `causa` longtext DEFAULT NULL,
  `sintomas` longtext DEFAULT NULL,
  `tratamiento` longtext DEFAULT NULL,
  `revision` longtext DEFAULT NULL,
  `otros` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_residente`, `id_personal`, `fecha`, `causa`, `sintomas`, `tratamiento`, `revision`, `otros`) VALUES
(57, 56, '2020-11-22 17:25:00', 'Se resbaló al salir de la ducha. Cayó sobre el brazo derecho.', 'Pequeña contusión en el brazo derecho', 'Voltarén Pomada 25mg, a demanda, hasta 5 veces al día.', 'Dentro de 4 días, para seguimiento hematoma.', ''),
(59, 13, '2020-11-22 14:06:00', 'Problemas circulatorios en extremidades inferiores. Numerosas varices, algunas operables.', 'Dolor de piernas, sobre todo por las tardes.', 'Trombocid Forte 400mg 3 veces al día, durante 1 mes', 'En 2 semanas para seguimiento de evolución', ''),
(59, 13, '2020-11-22 16:54:00', 'Principio de artritis reumatoide.', 'Dolor en las manos (la paciente refiere que sobre todo por las mañanas) y problemas para ejercer presión. Entumecimiento y agarrotamiento.', 'A la espera de los resultado de los análisis.', 'En una semana, con el resultado de los análisis, para indicar tratamiento a seguir', 'Solicitado análisis clínico en PharmaLab, a la espera de los resultados.'),
(59, 13, '2020-12-08 12:08:00', 'Ha sufrido un brote psicótico recientemente', 'Agresividad', 'La derivo a psicología para valoración', 'E 3 días', ''),
(63, 13, '2020-11-22 14:24:00', 'Migraña persistente y localizada.', 'Dolor de cabeza intenso, el paciente refiere que no logra descansar por las noches.', 'Gelocatil 1G + DolorKal 650mg alternados cada 6 horas. ', 'Dentro de 3 días, si el dolor no remitiera, posible derivación al hospital', 'El paciente comenta que en el hospital 12 de octubre le llevaba el doctor Quiñones (neurólogo). Pedir historia clínica al 12 Octubre  '),
(63, 56, '2021-01-02 20:18:00', 'El paciente refiere que no está descansado bien últimamente. Los dolores de cabeza pueden venir provocados por este motivo', 'Dolor de cabeza frecuente', 'Gelocatil 1gr cada 6/8 horas, durante una semana', 'en una semana (10/01/2021)', ''),
(68, 13, '2020-12-27 19:16:00', 'Cuadros de ansiedad', 'Dolor en el pecho', 'Ansiofín internature capsulas 200mg  cada 8 horas (antes de las comidas), durante 7 días', 'En 3 días', 'Le derivo a psiquiatría para su valoración'),
(68, 13, '2021-01-02 14:07:00', 'Posible torcedura', 'Dolor punzante tobillo izquierdo al incorporarse.\nHinchazón', 'Voltarén pomada 250mg en la zona a tratar, máximo 5 veces al día, durante 1 semana', 'En 1 semana (10/01/2021)', ''),
(70, 13, '2021-12-17 12:41:00', 'safsscxzczx', 'cxzc', 'cxcxz', 'cxzczxc', ''),
(95, 13, '2021-12-16 20:52:00', 'safsadfgasfawfasf', 'safasfasfqwfafsa', 'fasfwafafawfa', 'safawfafw', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int(11) NOT NULL,
  `nombre_familiar` varchar(45) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion_postal` varchar(45) DEFAULT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `dni_familiar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nombre_familiar`, `apellidos`, `email`, `direccion_postal`, `codigo_postal`, `telefono`, `dni_familiar`) VALUES
(4, 'Dolores', 'Sánchez Vazquez', 'doloressanchezsierra@hotmail.com', 'C/Almendralejo de la Victoria, 99 13A', '28001', '678456123', '02854188A'),
(12, 'Ramiro', 'Sánchez Valcarcel', 'Ramiroramirete@gmail.com', 'C/Petirrojo, 24 5C', '28047', '666333444', '52939743E'),
(13, 'Agustín', 'Miranda Fernández', 'agustirrinin@amena.es', 'Avda. Misioneros 34 1B', '28047', '678547934', '37696395Q'),
(14, 'Federica', 'Dominica Gutiérrez', 'federicaG@yobingo.es', 'C/Pez, 98 bajo B', '28001', '914682535', '04017825R'),
(15, 'Marcos', 'Ledesma Díaz', 'marcosledesma@hotmail.com', 'C/Ventorro de la Cuchicumba, 345, 25B', '28998', '678342963', '95034069R'),
(17, 'Marta', 'Guardamarín Sevilla', 'martaguardamarin@ono.com', 'C/Comuneros 23 1C', '28045', '753825946', '36045342H'),
(19, 'Hortensia', 'López Rodríguez', 'Horten@gmail.com', 'C/Abascal 25 14D', '28005', '687493205', '30531417K'),
(20, 'María Anabel', 'Sánchez Gómez', 'mabelsanchez59@hotmail.com', 'C/Almirantazgo portal 2 bajo B', '28011', '678435762', '49618917M'),
(21, 'Carmen', 'Salmerón Zazo', 'carmencita47@yahoo.es', 'Avda. Carretera y manta 189, 5C', '28999', '678049673', '85606665K'),
(22, 'Agustín', 'Salmerón Antúnez', 'ellocodelacolina@gmail.com', 'C/La Pepa 23 bajo B', '28044', '946307254', '72839047W'),
(23, 'Julia', 'Marquez Lamarca', 'alegriadelahuerta@gmail.com', 'C:/La alegría de la Huerta s/n', '28044', '999888444', '17019839T'),
(24, 'Julianana', 'Santisteban López', 'Juliananasantisteban@gmail.com', 'C:/Agustin de Guadix 45 1B', '28225', '947206482', '92347742M'),
(25, 'Antonio', 'Díaz Díaz', NULL, NULL, NULL, '947206482', '68625003H'),
(26, 'Mariano', 'Rodríguez Sánchez', NULL, NULL, NULL, '947556324', '52337398R'),
(29, 'Marta', 'Gutierrez López', 'martaGutierrez@gmail.com', 'C/Petirrojo, 24 5C', '28001', '666333444', '69390199G'),
(31, 'Martín', 'Calvo Morales', 'martincalvohijo2@gmail.com', 'C/Pingüino, 24 1B', '28025', '917194739', '96521516S'),
(32, 'Carla', 'Rodríguez Salmerón', 'carlaaventuras@gmail.com', 'C/ Fuerteventura 230 1D', '28992', '696555687', '07928199F'),
(33, 'Gema Dolores', 'Pérez Albornoz', 'gemadoloresperez56@gmail.com', 'C/Bienmesabe, 2 bajo C', '28573', '689356743', '32890592V'),
(37, 'Matilda', 'López Vázquez', NULL, NULL, NULL, '914682535', '59496919J'),
(38, 'David José', 'Mateos Ruiz', NULL, NULL, NULL, '694382543', '15960036Z'),
(39, 'Riboberta', 'Almenara Sánchez', 'rigoalmernara@gmail.com', 'C/Golondrina, 1 bajo A', '28025', '914735831', '44680623H'),
(40, 'Julieta', 'Domínguez Guardamarín', NULL, NULL, NULL, '677456322', '39589931P'),
(45, 'prueba1', 'prueba1', 'prueba1@prueba1.com', 'prueba1', '28047', '616666666', '32407126B'),
(46, 'varios1', 'varios1', 'varios1@varios1.com', 'varios1', '28047', '616666666', '46225179D'),
(47, 'aaaa', 'aaaa', 'aaaaaaaa@gmail.com', 'aaaa', '28047', '616666666', '78475567G'),
(48, '', '', '', '', '', '', ''),
(49, 'Desgraciado', 'Porsu Hermano', 'mihermanomejodelavida@gmail.com', 'C/Leproso 23, 9ºB', '28047', '616000000', '42765667L'),
(50, 'yo', 'mismo', 'yo@gmail.com', 'aqui', '28047', '616665667', '10416892P'),
(51, 'a', 'a', 'aaaaaaaaaaaaaaaa@aaaaaaaaaaaa.com', 'a', '28047', '616555444', '09148081S'),
(52, 'q', 'q', 'qqqqqqqqqqqqqqqqqq@qqqqqqqq.qqq', 'q', '28047', '616555555', '77320872R'),
(53, 'w', 'w', 'jhbkujghvbiyukg@kjghiubi.vgv', 'w', '28047', '616888888', '53462757Q'),
(54, 'Isabel', 'Ruiz', 'IsabelR@gmail.com', 'C/ Oca 27 2ºD', '28045', '616345987', '87885836F'),
(55, 'Pedro', 'Perales', 'pedroperales@gmail.com', 'Madrid', '28001', '645342765', '25435142V'),
(56, 'Pedro', 'Martinez Martinez', 'pedro123@gmail.com', 'c/ sol, 32', '28055', '667876543', '08220340W'),
(57, 'eeeeeeer', 'jjjjjj', '', '', '28089', '612123123', 'x12345678'),
(58, 'carlos', 'perez', 'carlosperez1@gmail.com', 'calle sol 46 1e', '28055', '612123123', 'Z0431512Z');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `num_camas` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `num_camas`) VALUES
(101, 1),
(102, 1),
(103, 1),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 1),
(110, 2),
(201, 1),
(202, 1),
(203, 1),
(204, 2),
(205, 2),
(206, 2),
(207, 2),
(209, 1),
(210, 2),
(301, 1),
(302, 1),
(303, 1),
(304, 2),
(305, 2),
(306, 2),
(307, 2),
(308, 2),
(309, 1),
(310, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hidrico_entrada`
--

CREATE TABLE `hidrico_entrada` (
  `id_entrada` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `envase` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `ml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hidrico_entrada`
--

INSERT INTO `hidrico_entrada` (`id_entrada`, `tipo`, `envase`, `numero`, `ml`) VALUES
(1, 'liquidos', 'vasos', 1, 200),
(2, 'liquidos', 'vasos', 2, 400),
(3, 'liquidos', 'vasos', 3, 600),
(4, 'liquidos', 'vasos', 4, 800),
(5, 'liquidos', 'vasos', 5, 1000),
(6, 'liquidos', 'vasos', 6, 1200),
(7, 'liquidos', 'vasos', 7, 1400),
(8, 'liquidos', 'vasos', 8, 1600),
(9, 'liquidos', 'vasos', 9, 1800),
(10, 'liquidos', 'vasos', 10, 2000),
(11, 'liquidos', 'bol', 1, 300),
(12, 'liquidos', 'bol', 2, 600),
(13, 'liquidos', 'bol', 3, 900),
(14, 'liquidos', 'bol', 4, 1200),
(15, 'liquidos', 'bol', 5, 1500),
(16, 'agua de la dieta', NULL, NULL, 750),
(17, 'agua oxidativa', NULL, NULL, 300),
(18, 'sueroterapia', NULL, NULL, 500),
(19, 'sueroterapia', NULL, NULL, 1000),
(20, 'sueroterapia', NULL, NULL, 1500),
(21, 'sueroterapia', NULL, NULL, 2000),
(22, 'medicacion', NULL, NULL, 100),
(23, 'medicacion', NULL, NULL, 200),
(24, 'medicacion', NULL, NULL, 300),
(25, 'medicacion', NULL, NULL, 400),
(26, 'medicacion', NULL, NULL, 500),
(27, 'sangre', NULL, NULL, 250),
(28, 'sangre', NULL, NULL, 500),
(29, 'sangre', NULL, NULL, 750),
(30, 'sangre', NULL, NULL, 1000),
(31, 'otros', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hidrico_salida`
--

CREATE TABLE `hidrico_salida` (
  `id_salida` int(11) NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hidrico_salida`
--

INSERT INTO `hidrico_salida` (`id_salida`, `tipo`, `ml`) VALUES
(1, 'diuresis', 0),
(2, 'respiracion', 400),
(3, 'sudoracion', 40),
(4, 'deposiciones', 200),
(5, 'deposiciones', 400),
(6, 'deposiciones', 600),
(7, 'deposiciones', 800),
(8, 'deposiciones', 1000),
(9, 'vomitos', 200),
(10, 'vomitos', 400),
(11, 'vomitos', 600),
(12, 'vomitos', 800),
(13, 'vomitos', 1000),
(14, 'otros', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_pai`
--

CREATE TABLE `historico_pai` (
  `id_residente` int(11) NOT NULL,
  `id_responsable` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `cambios` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_res_hab`
--

CREATE TABLE `historico_res_hab` (
  `id_residente` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historico_res_hab`
--

INSERT INTO `historico_res_hab` (`id_residente`, `id_habitacion`, `fecha_inicio`, `fecha_fin`) VALUES
(49, 103, '2021-01-02 20:37:30', NULL),
(49, 104, '2020-11-15 13:32:46', '2020-12-26 17:23:22'),
(49, 104, '2020-12-26 17:43:25', '2020-12-26 17:23:22'),
(49, 201, '2020-12-26 17:23:22', '2020-12-26 17:43:25'),
(57, 102, '2020-12-24 18:58:48', '2021-01-01 00:00:00'),
(57, 104, '2020-11-28 16:57:05', '2020-11-28 16:57:05'),
(57, 205, '2021-01-03 14:37:51', NULL),
(57, 303, '2020-11-28 18:22:40', '2020-12-24 18:58:48'),
(58, 104, '2020-11-28 17:01:19', '2020-12-27 19:22:58'),
(58, 105, '2020-12-27 19:22:58', NULL),
(58, 201, '2020-11-15 17:01:16', '2020-11-28 14:13:50'),
(59, 102, '2020-11-28 14:28:31', '2020-11-28 16:39:16'),
(59, 105, '2020-11-28 18:26:54', '2020-12-08 12:13:15'),
(59, 107, '2020-11-15 17:04:37', '2020-11-28 14:28:31'),
(59, 201, '2020-11-28 18:23:23', '2020-11-28 18:23:23'),
(59, 203, '2020-12-08 12:13:15', NULL),
(60, 206, '2020-11-15 17:22:06', NULL),
(61, 101, '2020-11-28 17:02:44', NULL),
(61, 102, '2020-11-28 14:24:12', '2020-11-28 16:42:30'),
(61, 104, '2020-11-15 21:15:24', '2020-11-28 14:16:47'),
(61, 304, '2020-11-28 16:53:10', '2020-11-28 16:54:34'),
(63, 104, '2021-01-03 14:40:55', NULL),
(63, 204, '2020-11-16 22:16:02', '2021-01-03 00:00:00'),
(65, 204, '2021-01-03 14:36:51', NULL),
(65, 302, '2020-11-28 18:43:12', '2021-01-01 00:00:00'),
(66, 102, '2020-12-06 12:09:39', '2020-12-13 00:00:00'),
(67, 106, '2020-12-07 11:16:42', '2021-01-01 00:00:00'),
(68, 106, '2020-12-13 13:25:55', NULL),
(68, 201, '2020-12-07 12:27:01', '2020-12-13 00:00:00'),
(70, 201, '2021-01-02 14:31:51', NULL),
(70, 206, '2020-12-27 12:12:10', '2021-01-02 14:31:27'),
(70, 307, '2021-01-02 14:31:27', '2021-01-02 14:31:51'),
(71, 103, '2020-12-27 13:29:00', '2021-01-01 00:00:00'),
(72, 104, '2021-01-02 20:29:38', NULL),
(95, 109, '2021-12-16 02:39:45', NULL),
(96, 102, '2021-12-17 11:23:26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contenido` longtext DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id_incidencia`, `id_personal`, `id_residente`, `descripcion`, `contenido`, `fecha`) VALUES
(3, 13, 61, 'Pelea entre compañeras de cuarto', '<p>Esta mañana Antonia comenzó una discusión con Josefa que acabó con ésta última en la enfermería <span style=\"background-color: rgb(255, 255, 0);\">con una contusión en la cabeza</span>.</p><p>Antonia se ha negado a pedirle perdón.</p>', '2020-11-22 10:16:35'),
(4, 53, 58, 'Se ha negado a comer', 'El residente ha tirado la comida al suelo tras insistirle que tenia que comer su comida. Finalmente <u><i><b>no ha comido su comida</b></i></u> de media mañana<br>', '2020-11-21 10:19:13'),
(5, 57, 59, 'Espejo baño roto', '<p>Al ir a limpiar el cuarto me he encontrado el espejo roto. Al preguntarle a Fuensanta por lo sucedido, <span style=\"background-color: rgb(206, 0, 0); color: rgb(255, 255, 255);\">ella niega conocer el motivo,</span> dice que ni siquiera sabía que estaba roto. </p><p>Avisado mantenimiento para su reparación.<br></p>', '2020-11-22 10:22:56'),
(10, 13, 59, 'Problemas con la toma de pastillas', '<p>Cada día le cuesta más tomas sus pastillas diarias. Hemos intentado machacarlas e incluirlas en el yogourt, pero<span style=\"color: rgb(99, 74, 165);\"> </span><span style=\"color: rgb(255, 0, 0);\">lo detecta y se niega a tomarlo</span>.</p>', '2020-11-22 16:54:20'),
(15, 13, 59, 'No toma sus pastillas', '<p>Se niega a tomar las pastillas recetadas</p>', '2021-01-02 14:02:12'),
(16, 13, 68, 'Desorientación al regresar a su cuarto', '<p>Ayer el personal de mantenimiento se lo encontró de nuevo vagando por las instalaciones,&nbsp;<span style=\"background-color: rgb(255, 255, 0);\">totalmente desorientado</span>, tratando de regresar a su cuarto</p>', '2021-01-02 14:04:35'),
(17, 15, 70, 'El usuario se queja de que la ducha está estropeada, cuando no es cierto', '<p>El usuario se queja de que la ducha está estropeada, cuando no es cierto. He estado revisando todo el sistema y funciona con normalidad,<span style=\"color: rgb(255, 0, 0); background-color: rgb(255, 255, 255);\"> si bien es cierto que el caudal es ligeramente inferior al de otras habitaciones</span></p>', '2021-01-02 20:12:44'),
(18, 57, 63, 'El usuario ha perdido un colgante de la Virgen de Guadalupe', '<p>El usuario ha perdido un colgante de la Virgen de Guadalupe, insiste en que estaba sobre la mesilla justo antes de que entrara a hacerle la habitación. Sin embargo, <u style=\"background-color: rgb(255, 255, 0);\">puedo asegurar que, cuando yo entré, no había NADA en la mesilla</u>. Hemos buscado por toda la habitación pero no la hemos encontrado<br></p>', '2021-01-02 20:24:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id_peticion` int(4) NOT NULL,
  `num_linea` int(4) NOT NULL,
  `id_articulo` int(4) NOT NULL,
  `unidades_solic` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id_peticion`, `num_linea`, `id_articulo`, `unidades_solic`) VALUES
(1, 2, 6, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicacion`
--

CREATE TABLE `medicacion` (
  `id_medicamento` int(10) NOT NULL,
  `n_medicacion` int(10) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `via` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `forma_farmaceutica` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `desayuno` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `comida` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `cena` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `otros` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_ini` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medicacion`
--

INSERT INTO `medicacion` (`id_medicamento`, `n_medicacion`, `nombre`, `tipo`, `via`, `forma_farmaceutica`, `unidad`, `cantidad`, `desayuno`, `comida`, `cena`, `otros`, `fecha_ini`, `fecha_fin`) VALUES
(45, 1, 'Paracetamol 600mg', 'analgesico', 'capsula', '', 'unidades', 1, '1', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(46, 1, 'Vitamina D ', 'vitamina', 'jarabe', '', 'sn', 1, '1', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(47, 2, 'Paracetamol 600mg', 'analgesico', 'capsula', '', 'unidades', 1, '1', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(48, 2, 'Vitamina D ', 'vitamina', 'jarabe', '', 'sn', 1, '1', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(49, 2, 'Huesitos 1g', 'artrosis', 'capsula', '', 'unidades', 2, '1', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(50, 3, 'dsadasd', 'antialergico', 'comprimido', '', 'unidades', 2, '2', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(51, 3, 'dsadasd', 'diuretico', 'comprimido', '', 'unidades', 2, '2', '', '', NULL, '2021-12-16 00:00:00', '2021-12-16 00:00:00'),
(52, 4, 'dsadasd', 'antialergico', 'comprimido', '', 'unidades', 2, '2', '', '', NULL, '2021-12-16 00:00:00', NULL),
(53, 4, 'dsadasd', 'diuretico', 'comprimido', '', 'unidades', 2, '2', '', '', NULL, '2021-12-16 00:00:00', NULL),
(54, 4, 'safas', 'hipertension', 'comprimido', '', 'ml', 2, '1', '', '', NULL, '2021-12-16 00:00:00', NULL),
(55, 5, 'Paracetamol', 'analgesico', 'comprimido', '', 'unidades', 1, '2', '', '', NULL, '2021-12-17 00:00:00', '2021-12-17 00:00:00'),
(56, 6, 'Paracetamol', 'analgesico', 'comprimido', '', 'unidades', 1, '2', '', '', NULL, '2021-12-17 00:00:00', '2021-12-17 00:00:00'),
(57, 7, 'Paracetamol', 'analgesico', 'comprimido', '', 'unidades', 1, '2', '', '', NULL, '2021-12-17 00:00:00', NULL),
(58, 8, 'masur', 'hipnotico', 'comprimido', '', 'unidades', 0, '1', '', '', NULL, '2023-05-02 23:40:35', NULL),
(59, 8, 'rrrrrr', 'Preservativo masculino', 'capsula', '', 'unidades', 1, '0', '', '', NULL, '2023-05-02 23:40:35', NULL),
(60, 9, 'eeeeeee', 'antiacido', 'jarabe', '', 'unidades', 1, '0', '', '', NULL, '2023-05-21 01:34:31', NULL),
(61, 10, 'ssssssss', 'antibiotico', 'comprimido', '', 'unidades', 5, '0', '', '', NULL, '2023-05-21 14:46:38', NULL),
(62, 11, 'rrrrr', 'antiparasito', 'jarabe', '', 'pastilla', 0, 'des', '', '', NULL, '2023-05-27 03:25:27', NULL),
(63, 12, 'rrrrr', 'antiparasito', 'jarabe', '', 'pastilla', 0, 'des', '', '', NULL, '2023-05-27 03:40:11', '2023-05-27 07:40:22'),
(64, 12, 'rrrrr', 'antifungico', 'jarabe', '', 'pastilla', 0, 'cen', '', '', NULL, '2023-05-27 03:40:11', '2023-05-27 07:40:22'),
(65, 13, 'rrrrr', 'antiparasito', 'jarabe', '', 'pastilla', 0, 'des', '', '', NULL, '2023-05-27 07:40:22', NULL),
(66, 13, 'rrrrr', 'antifungico', 'jarabe', '', 'pastilla', 0, 'cen', '', '', NULL, '2023-05-27 07:40:22', NULL),
(67, 13, 'lllll', 'anillo', 'jarabe', '', 'pastilla', 0, 'uuj', '', '', NULL, '2023-05-27 07:40:23', NULL),
(68, 14, 'prueba1', 'antialergico', 'oftalmica', '', 'pastilla', 0, 'hol', '', '', NULL, '2023-05-27 18:49:53', '2023-05-27 20:13:19'),
(69, 15, 'prueba1', 'antialergico', 'oftalmica', '', 'pastilla', 0, 'hol', '', '', NULL, '2023-05-27 20:13:19', '2023-05-27 20:15:50'),
(70, 16, 'prueba1', 'antialergico', 'oftalmica', '', 'pastilla', 0, 'hol', '', '', NULL, '2023-05-27 20:15:50', NULL),
(71, 16, 'prueba2', 'antitusivo', 'intramuscular', '', 'lenta', 0, 'pru', '', '', NULL, '2023-05-27 20:15:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `dni_personal` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido1` varchar(40) NOT NULL,
  `apellido2` varchar(40) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `codigo_postal` varchar(40) NOT NULL,
  `rol` varchar(40) NOT NULL,
  `tipo_responsabilidad` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_alta` datetime DEFAULT current_timestamp(),
  `fecha_baja` datetime DEFAULT NULL,
  `motivo_baja` varchar(255) DEFAULT NULL,
  `planta` varchar(45) DEFAULT NULL,
  `id_turno` int(11) NOT NULL DEFAULT 1,
  `otros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `dni_personal`, `nombre`, `apellido1`, `apellido2`, `telefono`, `email`, `direccion`, `codigo_postal`, `rol`, `tipo_responsabilidad`, `usuario`, `contrasena`, `fecha_alta`, `fecha_baja`, `motivo_baja`, `planta`, `id_turno`, `otros`) VALUES
(13, '96628429R', 'Miriam', 'Diaz', 'Hortal', '912002020', 'miriam.diaz@gmail.com', 'C/Hortaleza, 27 4B', '28001', 'admin', 'admin', 'admin', '$2y$10$yFqoKb1RnexGdW8fPJgMresG59mKJtYa7/LkmLKOEdE328iGvlTza', '2020-10-25 15:07:56', NULL, NULL, '', 1, NULL),
(15, '39573859J', 'Marcos', 'Valcarcel', 'Martos', '913334567', 'marcos@gmail.com', 'C/Ocaña 120 13A', '28045', 'mantenimiento', 'mantenimiento', 'marcos', '$2y$10$UZojCXwAvxJZTCkJ7qPKgeXbxF3Hx2S4pjgtE7d4VQ3GaC/wSccWm', '2020-10-25 20:50:51', NULL, NULL, '', 1, NULL),
(53, '00740335B', 'Amaya', 'de Pastors', 'Perez', '645492018', 'amayadp@hotmail.com', 'Avda. del Zorzal 16 4B', '28025', 'TrabajadorSocial', 'admin', 'amaya', '$2y$10$Fp3pg7lBUkunYNUl.sArNe9l867XF17lkw4oQIXG9KlJ4MH1Xv03y', '2020-11-07 11:11:11', NULL, NULL, '1', 1, NULL),
(56, '34978500P', 'Juan Rodrigo', 'Martos', 'Vega', '679227970', 'martosvega@gmail.com', 'C/ Guabairo 12 2C', '28025', 'medico', 'coordinador', 'rodrigo', '$2y$10$yQJhKZw9X3zuNFueLXft4u2PJdRfFd56iRnAi1HTRcSYHybQAyMA.', '2020-10-09 11:39:05', NULL, NULL, '2', 1, NULL),
(57, '77509770T', 'Juana', 'Domínguez', 'Iriarte', '989456243', 'juanairiarte@pepemovil.es', 'C/Pez, 12 3C', '28003', 'limpieza', 'supervisor', 'juana', '$2y$10$yFqoKb1RnexGdW8fPJgMresG59mKJtYa7/LkmLKOEdE328iGvlTza', '2020-11-09 18:09:57', NULL, NULL, '2', 1, NULL),
(58, '00215370K', 'Nayra', 'Vargas', 'Lorenzo', '678945035', 'nayravargas@gmail.com', 'C/ Forlán, 23 5B', '28999', 'Psicologo', 'Terapeutica', 'nayra', '$2y$10$ttDo2KGTHeoYEmQfgRamCuTB9a6nOU8MQrJxVuAVzZPa3bDXjKOou', '2020-11-28 21:49:02', NULL, NULL, '1', 2, NULL),
(59, '73627124F', 'Encarnación', 'Dorado', 'Rojo', '913459874', 'colorines89@jaztel.es', 'C/Colorines, 189 bajo B', '28045', 'limpieza', 'limpieza', 'encarni', '$2y$10$Qecj5eGyjAYV095Rrj/.2eXHa1c7jiSSlfMC/qPmsz/YY/JcGeNzm', '2020-11-28 21:52:16', NULL, NULL, '3', 2, NULL),
(60, '73679768G', 'Julia Francisca', 'Martinez', 'López', '666666666', 'juliapacamartinez@gmail.com', 'Avda. Plaza de toros 16 4B', '28025', 'Psicologo', 'jefeEquipo', 'julia', '$2y$10$f7ocPIyyspvMb7yGurKkO.sQCoyfocvkug3l3y6KeO3Tql..jUtR2', '2020-12-08 11:57:34', '2020-12-08 00:00:00', 'Conducta inadecuada con los/as compañeros/as', '2', 1, NULL),
(61, '45597217Q', 'Raquel', 'Vicente', 'Vélez', '611104590', 'raquel@gmail.es', 'C/Dalí 3', '28932', 'medico', 'jefeEquipo', 'raquel', '$2y$10$6jCag0VY6vV5ztaCCcdTmOJe5U/3q33C1yFJD4HuJOSqt9S/7VbJ.', '2020-12-13 12:44:34', NULL, NULL, '2', 2, NULL),
(62, '94749840Y', 'Pilar', 'Pérez', 'Zazo', '698462078', 'pilarperez@yahoo.es', 'C/Ocaña 220 10D', '28047', 'enfermero', 'sanitaria', 'pilar', '$2y$10$X5tNY6nGtZ295ntE/M1SA.CWuns.v8/1cYyU/yX7G5Cz1wSqaEqMi', '2020-12-24 12:21:28', NULL, NULL, '1', 5, NULL),
(63, '42355669L', 'Marta', 'Domínguez', 'Fuenterrabía', '679467324', 'fuenterrabiacamacho@hotmail.com', 'C/Camacho 25 1B', '28005', 'limpieza', 'limpieza', 'marta', '$2y$10$/.f./rJ9yAbxFrW1O6nGm.4e.tZ9GecX9z7N8lg8s1r4/SYSS.YcS', '2020-12-26 18:08:13', NULL, NULL, '3', 2, NULL),
(64, '05239786H', 'Ramiro', 'López', 'López', '678463713', 'ramiroeldebuenavista@gmail.com', 'C/Buena Vista, 13 1C', '29045', 'mantenimiento', 'encargado', 'ramiro', '$2y$10$OhVmiM3ZGYqcMcXZXEXD8u4z/E0JrkxzjqdaK/BriI4k7giwLQPVW', '2021-01-02 20:39:27', NULL, NULL, '', 4, NULL),
(65, '63489325X', 'David', 'Gutiérrez', 'Sanchís', '684396285', 'DavidGuti89@yahoo.es', 'C/Victoria, 1 1A', '28001', 'auxiliar', 'asistencial', 'david', '$2y$10$kCD5Xh16gsga8oJDbAlgH.162jbyoEXSWBNwX46nqov.4SUK3sNHy', '2021-01-02 21:05:02', NULL, NULL, '1', 6, NULL),
(66, '78002371X', 'María', 'Fernández', 'Abuja', '679343444', 'mariaabuja@gmail.com', 'C/La berbena de la Paloma, 23, 4B', '28094', 'enfermero', 'asistencial', 'maria', '$2y$10$uiM9XGB2Z39U33TBqHjTd.ZoC5crbX13uBLmusWEdSdG6o7twzwTu', '2021-01-03 14:34:27', NULL, NULL, '2', 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion_material`
--

CREATE TABLE `peticion_material` (
  `id_peticion` int(4) NOT NULL,
  `id_proveedor` int(4) NOT NULL,
  `fecha_peticion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peticion_material`
--

INSERT INTO `peticion_material` (`id_peticion`, `id_proveedor`, `fecha_peticion`) VALUES
(1, 2, '2021-11-30 16:11:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(4) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `localidad` varchar(15) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `direccion`, `cod_postal`, `localidad`, `telefono`, `email`) VALUES
(2, 'Delicious fruit', 'C/ Perales', 28011, 'Madrid', 913333200, 'fruitdelicious@delicious.net'),
(3, 'Distribzn', 'C/ Consuelo rend', 28112, 'Madrid', 913420981, 'distribzn@distribzn.es'),
(4, 'Mercadona', 'C/ avenida', 25421, 'Madrid', 913214532, 'merca.dona@hacendado.es'),
(5, 'Productos de higiene “La Brillante”', 'C/ Carruaje', 28033, 'Madrid', 913456732, 'limpieza@limpiame.net'),
(6, 'Pescadería el Lago Azul', 'C/ Luis Claudio', 19901, 'Barcelona', 916557843, 'lagoazul@lago.es'),
(7, 'La huerta de Miri', 'C/ Safiro', 29003, 'Madrid', 975432343, 'huertita@mirihuerta.net'),
(8, 'Carnicería Verdes Prados', 'C/ Antonio lucrán', 29034, 'Madrid', 915675434, 'verdeprado@verde.net'),
(9, 'Productos de desinfección “SinSin”', 'C/ Barcelona', 28011, 'Madrid', 918765438, 'desinfectado@eldesinfectante.net');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alimentacion`
--

CREATE TABLE `registro_alimentacion` (
  `id_alimentacion` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `adecuada` varchar(10) DEFAULT NULL,
  `inadecuada` varchar(10) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_constante`
--

CREATE TABLE `registro_constante` (
  `id_constante` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `fc` text DEFAULT NULL,
  `ta` text DEFAULT NULL,
  `t` text DEFAULT NULL,
  `glucemia` text DEFAULT NULL,
  `id_entradas` varchar(200) DEFAULT NULL,
  `id_salidas` varchar(200) DEFAULT NULL,
  `suma_entradas` int(11) DEFAULT NULL,
  `suma_salidas` int(11) DEFAULT NULL,
  `bh_resultado` int(11) DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_descanso`
--

CREATE TABLE `registro_descanso` (
  `id_descanso` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nocturno` text DEFAULT NULL,
  `siesta` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_eliminacion`
--

CREATE TABLE `registro_eliminacion` (
  `id_eliminacion` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `diuresis` text DEFAULT NULL,
  `panal_mojado` varchar(3) DEFAULT NULL,
  `deposicion` varchar(3) DEFAULT NULL,
  `bolsa_clostomia` varchar(3) DEFAULT NULL,
  `enema` varchar(3) DEFAULT NULL,
  `vomitos` text DEFAULT NULL,
  `otros` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_higiene`
--

CREATE TABLE `registro_higiene` (
  `id_higiene` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `bano_ducha` text DEFAULT NULL,
  `aseo` text DEFAULT NULL,
  `higiene_bucal` text DEFAULT NULL,
  `unas_manos` text DEFAULT NULL,
  `unas_pies` text DEFAULT NULL,
  `afeitado` text DEFAULT NULL,
  `higiene_genital` text DEFAULT NULL,
  `vestido` text DEFAULT NULL,
  `otros` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_incidencia`
--

CREATE TABLE `registro_incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `incidencias` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_medicacion`
--

CREATE TABLE `registro_medicacion` (
  `id_medicacion` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `oral` text DEFAULT NULL,
  `topica` text DEFAULT NULL,
  `rectal` text DEFAULT NULL,
  `inhaladores` text DEFAULT NULL,
  `gotas_oticas` text DEFAULT NULL,
  `gotas_oftalmicas` text DEFAULT NULL,
  `gotas_nasales` text DEFAULT NULL,
  `otros` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_movilizacion`
--

CREATE TABLE `registro_movilizacion` (
  `id_movilizacion` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `rh_fisica` varchar(10) DEFAULT NULL,
  `ejercicios_cama` varchar(10) DEFAULT NULL,
  `cambio_postural` varchar(10) DEFAULT NULL,
  `levantar_alsillon` varchar(10) DEFAULT NULL,
  `encamado` varchar(10) DEFAULT NULL,
  `otros` text DEFAULT NULL,
  `turno` enum('M','T','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_familiar_residente`
--

CREATE TABLE `rel_familiar_residente` (
  `id_familiar` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `parentesco` varchar(45) NOT NULL,
  `es_contacto_principal` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rel_familiar_residente`
--

INSERT INTO `rel_familiar_residente` (`id_familiar`, `id_residente`, `parentesco`, `es_contacto_principal`) VALUES
(4, 59, 'Hija', 1),
(12, 49, 'Hijo', 1),
(12, 57, 'Sobrino', 1),
(13, 58, 'Sobrino', 1),
(15, 61, 'Nieto', 1),
(17, 63, 'Sobrina-nieta', 1),
(20, 65, 'Hermanastra', 1),
(21, 66, 'Hija', 1),
(22, 66, 'hermano', 0),
(22, 68, 'ahijado', 1),
(24, 67, 'sobrina', 1),
(25, 68, 'sobrino', 0),
(31, 70, 'hijo', 1),
(32, 71, 'Nieta', 1),
(33, 72, 'Hermana', 1),
(37, 59, 'nieta', 0),
(38, 70, 'Sobrino', 0),
(39, 60, 'Sobrina', 1),
(40, 63, 'Nieta', 0),
(54, 95, 'Madre', 1),
(55, 96, 'Tio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residente`
--

CREATE TABLE `residente` (
  `id_residente` int(11) NOT NULL,
  `n_expediente` varchar(10) NOT NULL,
  `id_personal_responsable` int(11) DEFAULT NULL,
  `dni_residente` varchar(255) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido1` varchar(40) NOT NULL,
  `apellido2` varchar(40) NOT NULL,
  `fecha_nacimiento` varchar(40) NOT NULL,
  `sexo` varchar(80) DEFAULT NULL,
  `discapacidad` longblob NOT NULL,
  `grado_dependencia` int(1) DEFAULT NULL,
  `situacion_medica` longblob NOT NULL,
  `incapacidad_legal` tinyint(1) DEFAULT NULL,
  `fecha_alta` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_baja` datetime DEFAULT NULL,
  `motivo_baja` varchar(255) DEFAULT NULL,
  `pai_fecha_elaboracion` datetime DEFAULT NULL,
  `pai_datos_sociosanitarios` longblob DEFAULT NULL,
  `pai_area_social` longblob DEFAULT NULL,
  `pai_area_sanitaria` longblob DEFAULT NULL,
  `pai_area_psicologica` longblob DEFAULT NULL,
  `pai_area_funcional` longblob DEFAULT NULL,
  `pai_area_animacion` longblob DEFAULT NULL,
  `kath` varchar(10) DEFAULT NULL,
  `barthel` text DEFAULT NULL,
  `norton` text DEFAULT NULL,
  `medicacion` longblob DEFAULT NULL,
  `alergia` text DEFAULT NULL,
  `lawton` text DEFAULT NULL,
  `painad` text DEFAULT NULL,
  `goldberg` text DEFAULT NULL,
  `minimental` text DEFAULT NULL,
  `downton` text DEFAULT NULL,
  `escaladolor` text DEFAULT NULL,
  `testfotos` text DEFAULT NULL,
  `pfeiffer` text DEFAULT NULL,
  `morisky` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `residente`
--

INSERT INTO `residente` (`id_residente`, `n_expediente`, `id_personal_responsable`, `dni_residente`, `nombre`, `apellido1`, `apellido2`, `fecha_nacimiento`, `sexo`, `discapacidad`, `grado_dependencia`, `situacion_medica`, `incapacidad_legal`, `fecha_alta`, `fecha_baja`, `motivo_baja`, `pai_fecha_elaboracion`, `pai_datos_sociosanitarios`, `pai_area_social`, `pai_area_sanitaria`, `pai_area_psicologica`, `pai_area_funcional`, `pai_area_animacion`, `kath`, `barthel`, `norton`, `medicacion`, `alergia`, `lawton`, `painad`, `goldberg`, `minimental`, `downton`, `escaladolor`, `testfotos`, `pfeiffer`, `morisky`) VALUES
(49, 'VAJ0000', 62, '19539541Y', 'Josefa', 'Valcarcel', 'Salamina', '12/01/1919', NULL, 0x7b22696e74656c65637475616c223a747275652c22666973696361223a747275652c2276697375616c223a747275652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a22506f6272652c20636f6e2065737461206564616420717565206e6f20766120612074656e6572227d, 3, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a747275652c226465746572696f726f436f676e697469766f223a747275652c22646562696c696461644465624d6f7472697a223a747275652c226465736f7269656e746163696f6e223a747275652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a2242617374616e7465207469656e65207961227d, NULL, '2020-11-15 13:32:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'VAJ0001', NULL, '54703198K', 'Juan', 'Valcarcel', 'Salamina', '12/01/1919', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a747275652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a747275652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 2, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a747275652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a747275652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a22537566726520646520676f7461227d, 1, '2020-11-15 13:48:57', NULL, NULL, '2021-01-03 10:34:34', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'CAJ0000', 53, '78185971R', 'Jose Antonio', 'Camacho', 'Miranda', '28/12/1939', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a747275652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a22446973636170616369646164206175646974697661227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 0, '2020-11-03 17:01:16', NULL, NULL, '2021-01-02 23:04:18', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'VÁF0000', 56, '52124821J', 'Fuensanta', 'Vázquez', 'Romero', '23/04/1915', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a747275652c2264656d656e636961223a747275652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 3, 0x7b22656e6665726d656461644c657665223a66616c73652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a747275652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a747275652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a22466174616c20746f646f227d, 0, '2020-11-15 17:04:37', NULL, NULL, '2021-01-07 19:51:59', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a223c703e3c62723e3c2f703e222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a223c703e3c62723e3c2f703e222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a223c703e3c62723e3c2f703e222c226461746f73506f74656e6369616c526563757065726163696f6e223a223c703e3c62723e3c2f703e222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a2270756e7475616c222c22496e74656e7369646164436162657a61223a22616c7461222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a226f74726173222c22496e74656e7369646164457370616c6461223a226f74726173222c226f747261734672656375656e636961457370616c6461223a224120766563657320647565726d65206d616c222c226f74726173496e74656e7369646164457370616c6461223a226465206c6576652061206d6f646572616461222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22636f6e74696e7561222c22496e74656e7369646164506965497a7175696572646f223a2262616a61222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a226f74726173222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a226f74726173222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22646f6c6f72657320656e206c61206d75c3b165636120697a717569657264612c2066656375656e746573222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a226d6f646572616461222c226f74726f73446f6c6f72223a22446f6c6f7265732071756520656d70656f72616e20656e20696e766965726e6f222c22436162657a61223a747275652c224375656c6c6f223a66616c73652c22457370616c6461223a747275652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a747275652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a747275657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'DOL0000', 61, '91871423Q', 'Leonora', 'Dominica', 'Gutiérrez', '20/10/1940', NULL, 0x7b22696e74656c65637475616c223a747275652c22666973696361223a747275652c2276697375616c223a747275652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a747275652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, NULL, '2020-11-15 17:22:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `residente` (`id_residente`, `n_expediente`, `id_personal_responsable`, `dni_residente`, `nombre`, `apellido1`, `apellido2`, `fecha_nacimiento`, `sexo`, `discapacidad`, `grado_dependencia`, `situacion_medica`, `incapacidad_legal`, `fecha_alta`, `fecha_baja`, `motivo_baja`, `pai_fecha_elaboracion`, `pai_datos_sociosanitarios`, `pai_area_social`, `pai_area_sanitaria`, `pai_area_psicologica`, `pai_area_funcional`, `pai_area_animacion`, `kath`, `barthel`, `norton`, `medicacion`, `alergia`, `lawton`, `painad`, `goldberg`, `minimental`, `downton`, `escaladolor`, `testfotos`, `pfeiffer`, `morisky`) VALUES
(61, 'DÍA0000', 53, '97949633Q', 'Antonia', 'Díaz', 'Marquez', '30/08/1933', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a224175646974697661227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a747275652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a2273697475616369c3b36e206dc3a964696361227d, 0, '2020-11-15 21:15:24', NULL, NULL, '2021-01-03 10:40:11', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'GUJ0000', 65, '98927045C', 'Joaquín', 'Guardamarín', 'López', '15/01/1941', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a224175646974697661227d, 1, 0x7b22656e6665726d656461644c657665223a66616c73652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a747275652c226465746572696f726f436f676e697469766f223a747275652c22646562696c696461644465624d6f7472697a223a747275652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 0, '2020-11-16 22:16:02', NULL, NULL, '2021-01-07 19:52:59', 0x7b226c756761724e6163696d69656e746f223a225365676f766961222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22363738343536333435373635222c2263656e74726f53616c7564223a224c6f7320526f73616c657320284472612e20446f6dc3adc2ad6e6775657a29222c22616e7465636564656e7465734c61626f72616c6573223a22416e7465636564656e746573206c61626f72616c6573222c22666f726d6163696f6e223a224e6976656c20646520466f726d616369c3b36e2079204573747564696f73222c22686973746f72696156696461223a22486973746f7269612064652076696461222c226f74726f734461746f7342696f677261666961223a224f74726f73227d, 0x7b224175746f64657465726d696e6163696f6e223a226f74726173222c22466163756c74616465734d656e74616c6573223a226f74726173222c226f747261734175746f64657465726d696e6163696f6e223a22436170616369646164206465204175746f64657465726d696e616369c3b36e222c226f74726173466163756c74616465734d656e74616c6573223a22456e20506c656e6f2055736f2064652073757320466163756c7461646573204d656e74616c6573222c22756c74696d6173566f6c756e7461646573223a224e6f222c22736974756163696f6e44657370726f74656363696f6e223a2253697475616369c3b36e2064652044657370726f7465636369c3b36e222c226f74726173536974756163696f6e4c6567616c223a224f74726173222c2248616269746f734f63696f223a226f74726173222c226f7472617348616269746f734f63696f223a2248c3a16269746f73206465204f63696f3a222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a226f74726173222c226f747261734672656375656e636961536572766963696f223a226672656375656e636961222c226f7472617341726561437265656e63696173223a224f74726173222c2267657374696f6e657341646d696e69737472617469766173223a226f74726173222c226f7472617347657374696f6e657341646d696e69737472617469766173223a2247657374696f6e65732041646d696e69737472617469766173222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22566976c3ad6120736f6c612f6f222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a224361757361732064656c20696e677265736f222c22526564536f6369616c223a226f74726173222c2272656446616d696c696172223a2266616d696c6961726573222c226f74726173526564536f6369616c223a2241206e6976656c20736f6369616c222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a2266616d696c6961726573222c22726567696d656e53616c69646173223a2252c3a967696d656e2064652053616c69646173222c22726567696d656e56697369746173223a2252c3a967696d656e2064652056697369746173222c226f74726173496e6963696174697661223a224f74726173222c22496e6963696174697661536f6369616c223a226f74726173222c226f74726173496e6963696174697661536f6369616c223a22496e69636961746976612079205061727469636970616369c3b36e222c226f626a657469766f7341726561536f6369616c223a224f626a657469766f73222c22616363696f6e657341726561536f6369616c223a22416363696f6e6573206520496e74657276656e63696f6e6573222c22726573706f6e7361626c6541726561536f6369616c223a22526573706f6e7361626c65222c2263726579656e7465223a747275652c226163756465536572766963696f73223a747275652c226e6f43726579656e7465223a747275652c226f74726173437265656e63696173223a747275657d, 0x7b22646961676e6f737469636f7350617361646f73223a22446961676ec3b3737469636f732050617361646f73222c22646961676e6f737469636f7350726573656e746573223a22446961676ec3b3737469636f732050726573656e746573222c22696e6765736f73486f73706974616c6172696f73223a22496e677265736f7320486f73706974616c6172696f73222c22696e74657276656e63696f6e65735175697275726769636173223a22496e74657276656e63696f6e65732051756972c3ba726769636173222c226f74726173536974756163696f53616e697461726961223a224f74726173222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a2245737461646f206465206c61207069656c2d496e7465677269646164222c2265737461646f5069656c556e6173223a2245737461646f207069656c20792075c3b16173222c22677261646f556c6365726156617363756c6172223a22477261646f222c2274726174616d69656e746f73556c6365726156617363756c6172223a2254726174616d69656e746f73222c226f74726f734461746f73556c6365726156617363756c6172223a224f74726f73204461746f73222c226f74726f7350726f626c656d6173437574616e656f73223a224f74726f732070726f626c656d617320637574c3a16e656f73222c226f74726f735069656c223a224f74726f73222c2265737461646f426f6361223a2245737461646f206465206c6120626f6361222c22616c74726163696f6e6573496e6765737461223a22416c7465726163696f6e657320656e206c6120696e6765737461222c226f747261734d6f6469665065736f546578746f223a226f74726173222c227574656e73696c696f73457370656369616c6573546578746f223a225574656e73696c696f7320657370656369616c6573222c226f74726f734d65746f646f73546578746f223a226f74726f73222c226f74726173416c657267696173546578746f223a226f74726173222c226469657461223a224469657461222c2262616c616e63654869647269636f223a2242616c616e63652048c3adc2ad647269636f222c226f74726f734e7574726963696f6e223a224f74726f73222c226f74726f735269746d6f496e74657374696e616c546578746f223a226f74726173222c226f74726f73446973706f73697469766f73546578746f223a226f74726f73222c226f74726f73506174726f6e456c696d696e6163696f6e223a224f74726f73222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a224d6172636861222c226f747261734179756461735465636e69636173546578746f223a226f74726173222c226f74726173456e63616d616d656e746f546578746f223a22506f736962696c69646164206465206d6f76696c69646164222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a224d6563c383c2a16e69636f73222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a224d616e75616c65222c226f74726f734d6f76696c69646164223a224f74726f73222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a224f6c7669646f73206573706f72c3a16469636f7320656e20414456222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a224f6c7669646f73204672656375656e74657320656e20414456222c226f747261734d656d6f726961546578746f223a226f74726173222c22746f6d614465636973696f6e6573223a2243617061636964616420646520746f6d61206465206465636973696f6e6573222c226f74726173416c7465726163696f6e436f6e6475637461223a224f74726173222c226461746f73536567757269646164223a22736567757269646164222c224d6172636861457175696c696272696f223a226f74726173222c226f747261734d6172636861457175696c696272696f223a226d6172636861222c22657175696c696272696f223a22457175696c696272696f222c22746f6e6f4d757363756c6172223a22546f6e6f206d757363756c6172222c22667565727a61223a22467565727a613a222c226f747261734d6172636861457175696c696272696f47656e6572616c223a224f74726173222c226461746f734c696d69746163696f6e4d6f76696c69646164223a226c696d6974616369c3b36e206d6f76696c69646164222c226461746f73506f74656e6369616c526563757065726163696f6e223a22706f74656e6369616c20726563757065726163696f6e222c226f626a657469766f734172656153616e697461726961223a224f626a657469766f73222c22616363696f6e65734172656153616e697461726961223a22416363696f6e6573206520496e74657276656e63696f6e6573222c22726573706f6e7361626c654172656153616e697461726961223a22526573706f6e7361626c65222c22756c63657261735069656c223a747275652c226465736e7574726963696f6e223a747275652c226f62657369646164223a747275652c2274726173746f726e6f416c696d656e746963696f223a747275652c226f747261734d6f6469665065736f223a747275652c22706172656e74616c223a747275652c22736f6e6461223a66616c73652c226a6572696e6761223a747275652c225375706c656d656e746f223a747275652c227574656e73696c696f73457370656369616c6573223a747275652c226f74726f734d65746f646f734e7574726963696f6e223a747275652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a747275652c22666563616c223a747275652c227572696e61726961223a747275652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a747275652c226f74726f735269746d6f496e74657374696e616c223a747275652c226162736f7262656e746573223a747275652c226f73746f6d6961223a747275652c226f74726f73446973706f73697469766f73223a747275652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a747275652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a747275652c226f747261734179756461735465636e69636173223a747275652c22656e63616d616d69656e746f223a747275652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a747275652c226f74726173456e63616d616d656e746f223a747275652c226d65746f646f735472616e73666572656e636961223a747275652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a747275652c226d65746f646f734d616e75616c65735472616e666572656e636961223a747275652c226f6c7669646f734573706f72616469636f73223a747275652c226f6c7669646f734672656375656e746573223a747275652c226465746572696f726f4d656d6f726961223a747275652c226469666963756c7461645265636f6e6f63696d69656e746f223a747275652c226f747261734d656d6f726961223a747275652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22636f6e74696e7561222c22496e74656e7369646164436162657a61223a22616c7461222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a2270756e7475616c222c22496e74656e7369646164457370616c6461223a226f74726173222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a226f7472617320696e74656e7369646164222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a226f74726173222c22496e74656e73696461644272617a6f497a7175696572646f223a226f74726173222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a226f74726173206672656375656e636961222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a226f7472617320696e74656e7369646164222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a224f74726f73222c22436162657a61223a747275652c224375656c6c6f223a66616c73652c22457370616c6461223a747275652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a747275652c22506965726e6144657265636861223a747275652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a2254656d706f72616c3a222c226f7269656e746163696f6e457370616369616c223a22457370616369616c3a222c226f7269656e746163696f6e506572736f6e616c223a22506572736f6e616c3a222c2245737461646f4d656d6f726961223a226f74726173222c226f7472617345737461646f4d656d6f726961223a226f74726173206d656d6f726961222c22746f6d614465636973696f6e6573223a2243617061636964616420646520746f6d6172206465636973696f6e65733a222c226465746572696f726f436f676e697469766f223a2256616c6f72616369c3b36e2079206772616475616369c3b36e206465206465746572696f726f20636f676e697469766f3a222c226f74726f7356616c6f726163696f6e436f676e6974697661223a224f74726f733a222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a224f74726f73222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22496e646971756520616e7465636564656e7465733a222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22436f6d706f7274616d69656e746f20736f6369616c20696e616465637561646f222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a224f74726f73222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a747275652c226469666963756c74616465735375656e6f223a747275652c227472697374657a61223a66616c73652c22616e736965646164223a747275652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a747275652c22696465614d7565727465223a747275652c227175656a6173536f6d617469636173223a747275652c226f74726f7356616c6f726163696f6e4166656374697661223a747275652c2264656d656e63696146616d696c696172223a747275652c22616e7465636564656e74657350736971756961747269636f73223a747275652c226465616d62756c6163696f6e223a747275652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a747275652c22636f6d706f7274616d69656e746f496e616465637561646f223a747275652c226f74726f7354726173746f726e6f436f6e6475637461223a747275657d, 0x7b224475636861223a226f74726173222c226f747261734475636861223a2244756368613a222c224173656f223a226f74726173222c226f747261734173656f223a226f746173206173656f222c225665737469646f223a226f74726173222c226f747261735665737469646f223a2265737469646f3a222c2255736f52657472657465223a226f74726173222c226f7472617355736f52657472657465223a2272657472657465222c226f747261734465616d62756c6163696f6e546578746f223a226f74726173222c225472616e73666572656e63696173223a226f74726173222c226f747261735472616e73666572656e63696173223a226f74726173222c22416c696d656e746163696f6e223a226f74726173222c226f74726173416c696d656e746163696f6e223a226f74726173222c2275736f54656c65666f6e6f223a2255736f2064656c2054656cc3a9666f6e6f3a222c226d616e656a6f44696e65726f223a22616e656a6f2064652073752064696e65726f222c226f747261734163746976696461646573496e737472756d656e74616c223a224f747261733a222c226f626a657469766f734172656146756e63696f6e616c223a224f626a657469766f733a222c22616363696f6e65734172656146756e63696f6e616c223a22416363696f6e6573206520496e74657276656e63696f6e6573222c22726573706f6e7361626c654172656146756e63696f6e616c223a22526573706f6e7361626c653a222c227265686162696c69746163696f6e223a747275652c226179756461446573706c617a616d69656e746f223a747275652c2261797564615465636e69636173223a747275652c226f747261734465616d62756c6163696f6e223a747275657d, 0x7b2241666963696f6e6573223a226f74726173222c226f7472617341666963696f6e6573223a224f54524153222c226f747261735469656d706f4c69627265546578746f223a226f74726173222c2272656c6163696f6e6172736552616e6765223a223839222c22616374697669646164657352616e6765223a223934222c226163746976696461646573506c616e696669636164617352616e6765223a2239222c22696e696369617469766150726f70696152616e6765223a2238222c226f747261734163746976696461646573546578746f223a224f74726173222c226f626a657469766f7341726561416e696d6163696f6e223a224f626a657469766f733a222c22616363696f6e657341726561416e696d6163696f6e223a22416363696f6e6573206520496e74657276656e63696f6e6573222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22526573706f6e7361626c653a222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a747275652c226c656572223a747275652c227476223a747275652c226f747261735469656d706f4c69627265223a747275652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a747275657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'SÁE0000', NULL, '78929508V', 'Eugenia', 'Sánchez', 'Gómez', '30/08/1944', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a747275652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 0, '2020-11-28 18:43:12', NULL, NULL, '2021-01-03 14:50:50', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'SAA0000', 58, '66020097T', 'Agapito', 'Salmerón', 'Antúnez', '12/08/1932', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a747275652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 3, 0x7b22656e6665726d656461644c657665223a66616c73652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a747275652c22646562696c696461644465624d6f7472697a223a747275652c226465736f7269656e746163696f6e223a747275652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a22537566726520616c7563696e6163696f6e6573227d, 0, '2020-12-06 09:09:39', '2020-12-13 00:00:00', 'Cambio de centro residencial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'SAJ0000', 58, '68017848V', 'Julia', 'Santillana', 'Pérez', '05/06/1939', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a2244697363617061636964616420617564697469766120736576657261227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a2250726f626c656d612064652076617269636573227d, NULL, '2020-12-07 11:16:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `residente` (`id_residente`, `n_expediente`, `id_personal_responsable`, `dni_residente`, `nombre`, `apellido1`, `apellido2`, `fecha_nacimiento`, `sexo`, `discapacidad`, `grado_dependencia`, `situacion_medica`, `incapacidad_legal`, `fecha_alta`, `fecha_baja`, `motivo_baja`, `pai_fecha_elaboracion`, `pai_datos_sociosanitarios`, `pai_area_social`, `pai_area_sanitaria`, `pai_area_psicologica`, `pai_area_funcional`, `pai_area_animacion`, `kath`, `barthel`, `norton`, `medicacion`, `alergia`, `lawton`, `painad`, `goldberg`, `minimental`, `downton`, `escaladolor`, `testfotos`, `pfeiffer`, `morisky`) VALUES
(68, 'DÍM0000', 58, '82597874K', 'Marcelo', 'Díaz', 'Díaz', '25/05/1940', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a747275652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 0, '2020-12-07 12:27:01', NULL, NULL, '2021-01-03 19:59:32', 0x7b226c756761724e6163696d69656e746f223a2243c3a16365726573222c2245737461646f436976696c223a226f74726173222c226f7472617345737461646f436976696c223a226469766f72636961646f207920766975646f222c224e5353223a22303831313034313632303738222c2263656e74726f53616c7564223a224c6f7320526f73616c6573204472204361727265c3b16f222c22616e7465636564656e7465734c61626f72616c6573223a22526567656e74c3b320756e612073617374726572c3ad61222c22666f726d6163696f6e223a224e6976656c2062c3a17369636f206465206573747564696f732c2061756e717565206861207265616c697a61646f206d756c746974756420646520637572736f7320646520706174726f6e616a652079206d6f64612c207375206772616e2070617369c3b36e2e222c22686973746f72696156696461223a22456e206c6f732061c3b16f7320646520706f7367756572726120656d696772c3b320636f6e2073752066616d696c69612061204d61647269642e204d75792070726f6e746f207475766f2071756520706f6e6572736520612074726162616a617220636f6d6f20617072656e64697a20656e206c612073617374726572c3ad6120656e206c61207175652074726162616a6162612073752070616472652c206465206c6120717565206c6c6567c3b320612073657220726567656e74652e20536520636173c3b320636f6e204d657263656465732c207065726f207365206469766f726369c3b320646520656c6c6120656e206c6f732061c3b16f73203830207061726120766f6c7665727365206120636173617220636f6e20416e67656c6974612c207375206772616e20616d6f722c207175652066616c6c656369c3b320656e20323031382e20546f646176c3ad61206e6f206861206c6f677261646f207265706f6e657273652064656c206475726f20676f6c7065222c226f74726f734461746f7342696f677261666961223a224e6f207469656e6520747261746f20636f6e2073752068696a6f2e20c3897374652068612064656a61646f206465206861626c61726c65206465736465206c61207365706172616369c3b36e20646520737573207061647265732e20536520656e63617267616e20646520c3a96c20737520736f6272696e6f207920736f62726520746f646f2c207375206168696a61646f227d, 0x7b224175746f64657465726d696e6163696f6e223a226f74726173222c22466163756c74616465734d656e74616c6573223a22417574c3b36e6f6d6f20656e206c6120746f6d61206465206465636973696f6e6573222c226f747261734175746f64657465726d696e6163696f6e223a22417975646173206573706f72c3a16469636173222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a224e6f222c22736974756163696f6e44657370726f74656363696f6e223a224e6f2073652068612064657465637461646f2073697475616369c3b36e2064652064657370726f7465636369c3b36e222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a226f74726173222c226f7472617348616269746f734f63696f223a224e6563657369746120756e207065717565c3b16f20656d70756ac3b36e2c207065726f2070726f6e746f20736520616e696d61222c22706f736565437265656e63696173223a226361746f6c696369736d6f222c224672656375656e636961536572766963696f223a226f74726173222c226f747261734672656375656e636961536572766963696f223a223220766563657320706f722073656d616e61222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a226f74726173222c226f7472617347657374696f6e657341646d696e69737472617469766173223a224e6563657369746120617975646120736f6c6f2070617261206c61732067657374696f6e6573206f6e6c696e65222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a226f74726173222c226f74726173436f6e766976656e636961416e746572696f72223a22566976c3ad6120636f6e207375206168696a61646f222c22636175736173496e677265736f223a22506f7220766f6c756e7461642070726f7069612e204e6f2071756572c3ad612073657220756e612063617267612070617261207375206168696a61646f2e20c38973746520c3ba6c74696d6f206e6f2065737461626120636f6e666f726d6520636f6e20656c20696e677265736f222c22526564536f6369616c223a226f74726173222c2272656446616d696c696172223a2266616d696c6961726573222c226f74726173526564536f6369616c223a224c652071756564616e20706f63617320616d69737461646573222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a226168696a61646f207920736f6272696e6f2c207669736974612073656d616e616c222c22726567696d656e53616c69646173223a224e6f2070726563697361206e696e67c3ba6e207469706f20646520726573747269636369c3b36e2c20706f736565206c69626572746164206465206d6f76696d69656e746f73222c22726567696d656e56697369746173223a223220766563657320706f722073656d616e61222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a226f74726173222c226f74726173496e6963696174697661536f6369616c223a2248617920717565206461726c6520756e207065717565c3b16f20656d70756ac3b36e2c207065726f2070726f6e746f20736520616e696d61222c226f626a657469766f7341726561536f6369616c223a2241756e717565206e6f2070726573656e7461206772616e6465732070726f626c656d617320646520736f63696162696c696461642c20636f6e7669656e65206f627365727661726c6520706172612065766974617220717565207365207265706c696567756520656e2073c3ad206d69736d6f222c22616363696f6e657341726561536f6369616c223a22466f6d656e746172207375207061727469636970616369c3b36e20656e20616374697669646164657320717565206c65207065726d6974616e20636f6e6f6365722067656e7465206e75657661222c22726573706f6e7361626c6541726561536f6369616c223a224dc3ad7269616d2044c3ad617a222c2263726579656e7465223a747275652c226163756465536572766963696f73223a747275652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a224861207375667269646f20657069736f64696f7320646520676f746120656e20656c2070617361646f2c207065726f2072656669657265207175652c206465736465206861636520756e6f732061c3b16f732c207961206e6f20706164656365206d6f6c6573746961732e5c6e4172747269746973207265756d61746f696465206c69676572612c207472617461646120706f7220737520657370656369616c6973746120284472612e2053616c617a61722c20486f73706974616c203132206465206f637475627265292e222c22646961676e6f737469636f7350726573656e746573223a2250736f72696173697320677261646f203120656e20636f646f73207920726f64696c6c61732e204172747269746973207265756d61746f696465206c6967657261222c22696e6765736f73486f73706974616c6172696f73223a224e6f2073652068616e2072657175657269646f222c22696e74657276656e63696f6e65735175697275726769636173223a224e696e67756e612e222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a225c22746573745c225c6e746578746f205c22746573745c22222c2265737461646f5069656c223a2250736f72696173697320677261646f203120656e20636f646f73207920726f64696c6c61732e205c6e5065717565c3b1617320c3ba6c636572617320677261646f20312e222c2265737461646f5069656c556e6173223a225069656c20656e206275656e2065737461646f20646520686964726174616369c3b36e2e2055c3b1617320656e206275656e2065737461646f2e222c22677261646f556c6365726156617363756c6172223a2231222c2274726174616d69656e746f73556c6365726156617363756c6172223a225665726d697820706f6d6164612032356d67222c226f74726f734461746f73556c6365726156617363756c6172223a224c6520657374c3a12068616369656e646f20656c2073656775696d69656e746f20737520657370656369616c697374612c2044722e20446f6dc3adc2ad6e6775657a2053616c6120283132204f63747562726529222c226f74726f7350726f626c656d6173437574616e656f73223a224e6f20726566696572652e222c226f74726f735069656c223a22222c2265737461646f426f6361223a224275656e2065737461646f2e206e6f2070726573656e746120756c6365726163696f6e65732e205c6e4275656e6120686964726174616369c3b36e2e2041206e6976656c2064656e74616c2c2070726573656e746120746f646173206c6173207069657a61732c20696e636c75736f206c617320342064656c206a756963696f2e204d7579206275656e2065737461646f222c22616c74726163696f6e6573496e6765737461223a224375616e646f206c6c6567c3b32c2062616ac3b3206472c3a173746963616d656e7465206465207065736f2c2064656269646f20616c2065737472c3a97320706f72206c61206e756576612073697475616369c3b36e2c207065726f2070726f6e746f2073652072656375706572c3b32e222c226f747261734d6f6469665065736f546578746f223a2241207375206c6c65676164612062616ac3b3206465207065736f2c207065726f206465737075c3a9732072656375706572c3b320206120c3adc2ad6e6469636573206e6f726d616c65732e20494d4320323525222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22416e61636172646f732c2063616361687565746573222c226469657461223a2244696574612073696e20676c7574656e2c2062616a6120656e20736f64696f2e20436f6d706c656d656e746f20766974616dc3adc2ad6e69636f20656e74726520636f6d69646173222c2262616c616e63654869647269636f223a224120706573617220646520717565206170656e6173206265626520616775612c20657374c3a1206269656e2068696472617461646f2e204c617320656e6665726d657261732074726174616e206465207175652062656261207a756d6f732c207065726f206e6f206c6f6772616e2071756520696e6769657261206c61732063616e74696461646573207265636f6d656e6461646173206465206cc3ad717569646f2e222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a225265666965726520657069736f64696f732070756e7475616c6573206465206573747265c3b1696e69656e746f20616c7465726e61646f7320636f6e20646961727265612c2061736f636961646f73206120657069736f64696f732064652065737472c3a973222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a225269746d6f207061757361646f2c207065726f2073696e206e6563657369646164206465207265616c697a6172207061726164617320706172612072656375706572617220616c69656e746f222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a223c703e4e6f20726566696572652070726f626c656d6173207061726120646f726d69722e203c2f703e3c703e537565c3b16f2070726f66756e646f2c20616c206d656e6f73203720686f72617320646961726961732e2053656e73616369c3b36e2064652064657363616e736f2e3c2f703e222c22756e646566696e6564223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22456e20616c67756e61206f63617369c3b36e206e6f206861207265636f726461646f2063c3b36d6f206c6c6567617220612073752063756172746f222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22546f74616c2e204e6f20736520726566696572656e20616c7465726163696f6e657320646520636f6e64756374612c206e6920616e746573206e69206465737075c3a9732064656c20696e677265736f222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a223c703e4e6f20736520726566696572656e2070726f626c656d61733c2f703e222c224d6172636861457175696c696272696f223a226f74726173222c226f747261734d6172636861457175696c696272696f223a224d65207072656f63757061206c6120636f6d62696e616369c3b36e20646520617274726974697320656e206c6173206d616e6f73207920656c2075736f2064656c2062617374c3b36e222c22657175696c696272696f223a2242617374616e746520636f72726563746f222c22746f6e6f4d757363756c6172223a22506f636f20746f6e6f206d757363756c61722c207265636f6d69656e646f20686163657220656a6572636963696f206d6f64657261646f222c22667565727a61223a224c652066616c746120667565727a6120656e206c6173206d616e6f732c2064656269646f2061206c612061727472697469732e222c226f747261734d6172636861457175696c696272696f47656e6572616c223a224e6563657369746120686163657220656a6572636963696f73206465207265686162696c6974616369c3b36e2070617261206d656a6f726172206c6f732073c3ad6e746f6d6173206465206c612061727472697469732c20736f62726520746f646f20656e206c6173206d616e6f732e222c226461746f734c696d69746163696f6e4d6f76696c69646164223a223c703e4e696e67756e613c2f703e222c226461746f73506f74656e6369616c526563757065726163696f6e223a223c703e42617374616e7465206275656e6f2074656e69656e646f20656e206375656e7461206c61206176616e7a61646120656461643c2f703e222c226f626a657469766f734172656153616e697461726961223a224d656a6f726172206c6120667565727a6120656e206c6173206d616e6f73207920656c20746f6e6f206d757363756c61722067656e6572616c222c22616363696f6e65734172656153616e697461726961223a22536573696f6e6573206465207265686162696c6974616369c3b36e203320766563657320706f722073656d616e612c207920616c656e7461726c65206120717565207365206170756e7465206120636c6173657320646520656a6572636963696f206d6f64657261646f2e222c22726573706f6e7361626c654172656153616e697461726961223a22416d61796120646520506173746f7273222c22756c63657261735069656c223a747275652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a747275652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a747275652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a747275652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a747275652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a747275652c2264696172726561223a747275652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a747275652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a747275652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a2270756e7475616c222c22496e74656e7369646164436162657a61223a22616c7461222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a226f74726173222c22496e74656e7369646164457370616c6461223a226f74726173222c226f747261734672656375656e636961457370616c6461223a2241207665636573206e6f206c65207065726d6974652064657363616e736172222c226f74726173496e74656e7369646164457370616c6461223a226465206c6576652061206d6f646572616461222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22636f6e74696e7561222c22496e74656e7369646164506965497a7175696572646f223a2262616a61222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a226f74726173222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a226f74726173222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22646f6c6f72657320656e206c61206d75c3b165636120697a717569657264612c206672656375656e746573222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a226d6f646572616461222c226f74726f73446f6c6f72223a22446f6c6f7265732071756520656d70656f72616e20656e20696e766965726e6f222c22436162657a61223a747275652c224375656c6c6f223a66616c73652c22457370616c6461223a747275652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a747275652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a747275657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a224120766563657320706965726465206c61206e6f6369c3b36e20656c207469656d706f2c207065726f206e616461207072656f637570616e7465207061726120737520656461642e222c226f7269656e746163696f6e457370616369616c223a225365206f7269656e74612062617374616e7465206269656e2e48612068616269646f20616c67c3ba6e20657069736f64696f206573706f72c3a16469636f206465206465736f7269656e74616369c3b36e206375616e646f2074656ec3adc2ad61207175652064697269676972736520612073752063756172746f2e20456e206f6273657276616369c3b36e2e222c226f7269656e746163696f6e506572736f6e616c223a2253696e2070726f626c656d61732064657465637461646f73222c2245737461646f4d656d6f726961223a224269656e20636f6e73657276616461222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22546f74616c222c226465746572696f726f436f676e697469766f223a224e6f207365206861206f627365727661646f206465746572696f726f20646573646520737520696e677265736f222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a224475656c6f20706f7220737520736567756e6461206573706f7361222c22616e7465636564656e74657350736971756961747269636f73546578746f223a225475766f20756e20657069736f64696f206675657274652064652064657072657369c3b36e2074726173206c61206d756572746520646520737520736567756e6461206573706f73612e53656775696d69656e746f20706f7220656c2044722e416e74c3ba6e657a20283132204f63747562726529222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a747275652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a747275652c226f74726f7356616c6f726163696f6e4166656374697661223a747275652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a747275652c226465616d62756c6163696f6e223a747275652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a747275652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a747275652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a226f74726173222c226f747261734475636861223a224e6f206e65636573697461206179756461222c224173656f223a226f74726173222c226f747261734173656f223a224e6f206e65636573697461206179756461222c225665737469646f223a2250726f706f7263696f6e612062617374616e7465206179756461222c226f747261735665737469646f223a22222c2255736f52657472657465223a226f74726173222c226f7472617355736f52657472657465223a224e6f206e65636573697461206179756461222c226f747261734465616d62756c6163696f6e546578746f223a226175746f6e6f6dc3ad6120636f6e20656c2075736f2064656c2062617374c3b36e222c225472616e73666572656e63696173223a22417975646120656e206c6173207472616e73666572656e63696173222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22436f6d6520736f6c6f2f61222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a225469656e6520756e2074656cc3a9666f6e6f206dc3b376696c20717565207574696c697a6120636f6e20736f6c747572612079206175746f6e6f6dc3ad61222c226d616e656a6f44696e65726f223a224d616e656a6f2064652073752064696e65726f2073696e206e656365736964616420646520737570657276697369c3b36e222c226f747261734163746976696461646573496e737472756d656e74616c223a224e616461207175652072657365c3b16172222c226f626a657469766f734172656146756e63696f6e616c223a224d616e74656e657220656e206f6273657276616369c3b36e20706f7220736920736520646574656374617261206465746572696f726f20656e206573746520c3a1726561222c22616363696f6e65734172656146756e63696f6e616c223a22456e206573746520c3a172656120656c207573756172696f206e6f207265717569657265206465206e696e67756e6120696e74657276656e6369c3b36e222c22726573706f6e7361626c654172656146756e63696f6e616c223a224dc3ad72616d2044c3ad617a222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a747275657d, 0x7b2241666963696f6e6573223a224d616e6966696573746120696e7465726573657320792061666963696f6e6573207661726961646f73222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a226a75656761206120766964656f6a7565676f73222c2272656c6163696f6e6172736552616e6765223a223731222c22616374697669646164657352616e6765223a223435222c226163746976696461646573506c616e696669636164617352616e6765223a223136222c22696e696369617469766150726f70696152616e6765223a223139222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a2241756e71756520736520657374c3a120696e74656772616e646f2062617374616e7465206269656e2c20636f6e7669656e652068616365726c6520756e2073656775696d69656e746f2064652063657263612c20796120717565207469656e652074656e64656e6369612061206c6120696e74726f737065636369c3b36e222c22616363696f6e657341726561416e696d6163696f6e223a22466f6d656e746172207375207061727469636970616369c3b36e20656e2061637469766964616465732067727570616c6573222c22726573706f6e7361626c6541726561416e696d6163696f6e223a224dc3ad7269616d2044c3ad617a222c2261637469766964616465734d616e75616c6573223a747275652c226a7565676f734d657361223a747275652c226c656572223a747275652c227476223a66616c73652c226f747261735469656d706f4c69627265223a747275652c226f626a657469766f7350726f70696f73223a747275652c226f747261734163746976696461646573223a66616c73657d, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'CAM0000', 61, '81415377T', 'Martín', 'Calvo', 'Rodríguez', '30/05/1930', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a747275652c226f747261446973636170616369646164223a747275652c226f747261446973636170616369646164546578746f223a224175646974697661227d, 2, 0x7b22656e6665726d656461644c657665223a66616c73652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a747275652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a747275652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a747275652c224469666963756c7461644c656e6775616a65223a747275652c226f7472615369744d6564696361223a747275652c226f7472615369744d6564696361546578746f223a2244656d656e636961227d, 0, '2020-12-27 12:12:10', NULL, NULL, '2021-12-15 22:29:26', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a224c652067757374616e206c617320616374697669646164657320656e20677275706f222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22446961726961222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c226e6f6d6272654d65646963616d656e746f223a2264736164222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, '', '0000000000', '', 0x5b395d, '', NULL, NULL, NULL, '1684625237_DWES_UT4_WebPedidos.pdf', NULL, NULL, NULL, NULL, NULL),
(71, 'ROM0000', 58, '51840549K', 'Maria Angustias', 'Rodríguez', 'Vélez', '12/01/1955', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 0, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, NULL, '2020-12-27 13:29:00', '2021-01-01 00:00:00', 'Se encontraba a disgusto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000000000', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'PÉG0000', 58, '83467122F', 'Guadalupe María', 'Pérez', 'Albornoz', '03/06/1945', NULL, 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 0, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a747275652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, NULL, '2021-01-02 20:29:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `residente` (`id_residente`, `n_expediente`, `id_personal_responsable`, `dni_residente`, `nombre`, `apellido1`, `apellido2`, `fecha_nacimiento`, `sexo`, `discapacidad`, `grado_dependencia`, `situacion_medica`, `incapacidad_legal`, `fecha_alta`, `fecha_baja`, `motivo_baja`, `pai_fecha_elaboracion`, `pai_datos_sociosanitarios`, `pai_area_social`, `pai_area_sanitaria`, `pai_area_psicologica`, `pai_area_funcional`, `pai_area_animacion`, `kath`, `barthel`, `norton`, `medicacion`, `alergia`, `lawton`, `painad`, `goldberg`, `minimental`, `downton`, `escaladolor`, `testfotos`, `pfeiffer`, `morisky`) VALUES
(95, 'SOM0000', 58, '74566982Q', 'Martín', 'Somosaguas', 'Rodríguez', '15/06/1993', 'Masculino', 0x7b22696e74656c65637475616c223a66616c73652c22666973696361223a747275652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a747275652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 0, '2021-12-16 02:39:45', NULL, NULL, '2021-12-16 20:48:17', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c226e6f6d6272654d65646963616d656e746f223a227361666173222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, '111111', '1111122222', '', 0x5b345d, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'PEJ0000', 53, '76740522X', 'Jacinto', 'Perales', 'Chi', '08/12/1990', 'Masculino', 0x7b22696e74656c65637475616c223a747275652c22666973696361223a66616c73652c2276697375616c223a66616c73652c22656e6665726d656e6461644d656e74616c223a66616c73652c2264656d656e636961223a66616c73652c226f747261446973636170616369646164223a66616c73652c226f747261446973636170616369646164546578746f223a22227d, 1, 0x7b22656e6665726d656461644c657665223a747275652c2270726f6e6f737469636f52657365727661646f223a66616c73652c2274726174616d437572617469766f223a66616c73652c2274726174616d50616c69617469766f223a66616c73652c2274726174616d4661726d6154656d70223a66616c73652c2274726174616d4661726d6143726f6e223a66616c73652c226465746572696f726f436f676e697469766f223a66616c73652c22646562696c696461644465624d6f7472697a223a66616c73652c226465736f7269656e746163696f6e223a66616c73652c224469666963756c7461644c656e6775616a65223a66616c73652c226f7472615369744d6564696361223a66616c73652c226f7472615369744d6564696361546578746f223a22227d, 1, '2021-12-17 11:23:26', NULL, NULL, '2021-12-17 12:24:48', 0x7b226c756761724e6163696d69656e746f223a22222c2245737461646f436976696c223a22222c226f7472617345737461646f436976696c223a22222c224e5353223a22222c2263656e74726f53616c7564223a22222c22616e7465636564656e7465734c61626f72616c6573223a22222c22666f726d6163696f6e223a22222c22686973746f72696156696461223a22222c226f74726f734461746f7342696f677261666961223a22227d, 0x7b224175746f64657465726d696e6163696f6e223a22222c22466163756c74616465734d656e74616c6573223a22222c226f747261734175746f64657465726d696e6163696f6e223a22222c226f74726173466163756c74616465734d656e74616c6573223a22222c22756c74696d6173566f6c756e7461646573223a22222c22736974756163696f6e44657370726f74656363696f6e223a22222c226f74726173536974756163696f6e4c6567616c223a22222c2248616269746f734f63696f223a22222c226f7472617348616269746f734f63696f223a22222c22706f736565437265656e63696173223a22222c224672656375656e636961536572766963696f223a22222c226f747261734672656375656e636961536572766963696f223a22222c226f7472617341726561437265656e63696173223a22222c2267657374696f6e657341646d696e69737472617469766173223a22222c226f7472617347657374696f6e657341646d696e69737472617469766173223a22222c22646574616c6c6547657374696f6e6573223a22222c22436f6e766976656e636961416e746572696f72223a22222c226f74726173436f6e766976656e636961416e746572696f72223a22222c22636175736173496e677265736f223a22222c22526564536f6369616c223a22222c2272656446616d696c696172223a22222c226f74726173526564536f6369616c223a22222c226f7472617352656446616d696c696172223a22222c2266616d696c696172657352656446616d696c696172223a22222c22726567696d656e53616c69646173223a22222c22726567696d656e56697369746173223a22222c226f74726173496e6963696174697661223a22222c22496e6963696174697661536f6369616c223a22222c226f74726173496e6963696174697661536f6369616c223a22222c226f626a657469766f7341726561536f6369616c223a22222c22616363696f6e657341726561536f6369616c223a22222c22726573706f6e7361626c6541726561536f6369616c223a22222c2263726579656e7465223a66616c73652c226163756465536572766963696f73223a66616c73652c226e6f43726579656e7465223a66616c73652c226f74726173437265656e63696173223a66616c73657d, 0x7b22646961676e6f737469636f7350617361646f73223a22222c22646961676e6f737469636f7350726573656e746573223a22222c22696e6765736f73486f73706974616c6172696f73223a22222c22696e74657276656e63696f6e65735175697275726769636173223a22222c226f74726173536974756163696f53616e697461726961223a22222c226461746f7354726174616d69656e746f73223a22222c22756e646566696e6564223a22222c226e6f6d6272654d65646963616d656e746f223a22222c2265737461646f5069656c223a22222c2265737461646f5069656c556e6173223a22222c22677261646f556c6365726156617363756c6172223a22222c2274726174616d69656e746f73556c6365726156617363756c6172223a22222c226f74726f734461746f73556c6365726156617363756c6172223a22222c226f74726f7350726f626c656d6173437574616e656f73223a22222c226f74726f735069656c223a22222c2265737461646f426f6361223a22222c22616c74726163696f6e6573496e6765737461223a22222c226f747261734d6f6469665065736f546578746f223a22222c227574656e73696c696f73457370656369616c6573546578746f223a22222c226f74726f734d65746f646f73546578746f223a22222c226f74726173416c657267696173546578746f223a22222c226469657461223a22222c2262616c616e63654869647269636f223a22222c226f74726f734e7574726963696f6e223a22222c226f74726f735269746d6f496e74657374696e616c546578746f223a22222c226f74726f73446973706f73697469766f73546578746f223a22222c226f74726f73506174726f6e456c696d696e6163696f6e223a22222c226e6976656c4175746f6e6f6dc3ad61223a22222c226d61726368614d6f766976696c69646164223a22222c226f747261734179756461735465636e69636173546578746f223a22222c226f74726173456e63616d616d656e746f546578746f223a22222c226d65746f646f734d6563616e69636f735472616e666572656e636961546578746f223a22222c226d65746f646f734d616e75616c65735472616e666572656e636961546578746f223a22222c226f74726f734d6f76696c69646164223a22222c226461746f735375656e6f223a22222c22636f6d656e746172696f4f6c7669646f734573706f72616469636f73223a22222c22636f6d656e746172696f4f6c7669646f734672656375656e746573223a22222c226f747261734d656d6f726961546578746f223a22222c22746f6d614465636973696f6e6573223a22222c226f74726173416c7465726163696f6e436f6e6475637461223a22222c226461746f73536567757269646164223a22222c224d6172636861457175696c696272696f223a22222c226f747261734d6172636861457175696c696272696f223a22222c22657175696c696272696f223a22222c22746f6e6f4d757363756c6172223a22222c22667565727a61223a22222c226f747261734d6172636861457175696c696272696f47656e6572616c223a22222c226461746f734c696d69746163696f6e4d6f76696c69646164223a22222c226461746f73506f74656e6369616c526563757065726163696f6e223a22222c226f626a657469766f734172656153616e697461726961223a22222c22616363696f6e65734172656153616e697461726961223a22222c22726573706f6e7361626c654172656153616e697461726961223a22222c22756c63657261735069656c223a66616c73652c226465736e7574726963696f6e223a66616c73652c226f62657369646164223a66616c73652c2274726173746f726e6f416c696d656e746963696f223a66616c73652c226f747261734d6f6469665065736f223a66616c73652c22706172656e74616c223a66616c73652c22736f6e6461223a66616c73652c226a6572696e6761223a66616c73652c225375706c656d656e746f223a66616c73652c227574656e73696c696f73457370656369616c6573223a66616c73652c226f74726f734d65746f646f734e7574726963696f6e223a66616c73652c22676c7574656e223a66616c73652c226c6163746f7361223a66616c73652c2266727563746f7361223a66616c73652c2273616361726f7361223a66616c73652c226f74726173416c657267696173223a66616c73652c22666563616c223a66616c73652c227572696e61726961223a66616c73652c227269746d6f526567756c6172223a66616c73652c2265737472656e696d69656e746f223a66616c73652c2264696172726561223a66616c73652c226f74726f735269746d6f496e74657374696e616c223a66616c73652c226162736f7262656e746573223a66616c73652c226f73746f6d6961223a66616c73652c226f74726f73446973706f73697469766f73223a66616c73652c2261797564617354c3a9636e69636173223a66616c73652c22626173746f6e223a66616c73652c22616e6461646f72223a66616c73652c226d756c657461223a66616c73652c2273696c6c61527565646173223a66616c73652c226f747261734179756461735465636e69636173223a66616c73652c22656e63616d616d69656e746f223a66616c73652c2274656d706f72616c223a66616c73652c227065726d616e656e7465223a66616c73652c226f74726173456e63616d616d656e746f223a66616c73652c226d65746f646f735472616e73666572656e636961223a66616c73652c226d65746f646f734d6563616e69636f735472616e666572656e636961223a66616c73652c226d65746f646f734d616e75616c65735472616e666572656e636961223a66616c73652c226f6c7669646f734573706f72616469636f73223a66616c73652c226f6c7669646f734672656375656e746573223a66616c73652c226465746572696f726f4d656d6f726961223a66616c73652c226469666963756c7461645265636f6e6f63696d69656e746f223a66616c73652c226f747261734d656d6f726961223a66616c73652c22646f6c6f72223a7b224672656375656e636961436162657a61223a22222c22496e74656e7369646164436162657a61223a22222c226f747261734672656375656e636961436162657a61223a22222c226f74726173496e74656e7369646164436162657a61223a22222c224672656375656e6369614375656c6c6f223a22222c22496e74656e73696461644375656c6c6f223a22222c226f747261734672656375656e6369614375656c6c6f223a22222c226f74726173496e74656e73696461644375656c6c6f223a22222c224672656375656e636961457370616c6461223a22222c22496e74656e7369646164457370616c6461223a22222c226f747261734672656375656e636961457370616c6461223a22222c226f74726173496e74656e7369646164457370616c6461223a22222c224672656375656e6369614272617a6f4465726563686f223a22222c22496e74656e73696461644272617a6f4465726563686f223a22222c226f747261734672656375656e6369614272617a6f4465726563686f223a22222c226f74726173496e74656e73696461644272617a6f4465726563686f223a22222c224672656375656e6369614272617a6f497a7175696572646f223a22222c22496e74656e73696461644272617a6f497a7175696572646f223a22222c226f747261734672656375656e6369614272617a6f497a7175696572646f223a22222c226f74726173496e74656e73696461644272617a6f497a7175696572646f223a22222c224672656375656e636961506965726e6144657265636861223a22222c22496e74656e7369646164506965726e6144657265636861223a22222c226f747261734672656375656e636961506965726e6144657265636861223a22222c226f74726173496e74656e7369646164506965726e6144657265636861223a22222c224672656375656e636961506965726e61497a71756965726461223a22222c22496e74656e7369646164506965726e61497a71756965726461223a22222c226f747261734672656375656e636961506965726e61497a71756965726461223a22222c226f74726173496e74656e7369646164506965726e61497a71756965726461223a22222c224672656375656e6369615069654465726563686f223a22222c22496e74656e73696461645069654465726563686f223a22222c226f747261734672656375656e6369615069654465726563686f223a22222c226f74726173496e74656e73696461645069654465726563686f223a22222c224672656375656e636961506965497a7175696572646f223a22222c22496e74656e7369646164506965497a7175696572646f223a22222c226f747261734672656375656e636961506965497a7175696572646f223a22222c226f74726173496e74656e7369646164506965497a7175696572646f223a22222c224672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c22496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f747261734672656375656e6369614f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726173496e74656e73696461644f747261734c6f63616c697a6163696f6e446f6c6f72223a22222c226f74726f73446f6c6f72223a22222c22436162657a61223a66616c73652c224375656c6c6f223a66616c73652c22457370616c6461223a66616c73652c224272617a6f4465726563686f223a66616c73652c224272617a6f497a7175696572646f223a66616c73652c22506965726e6144657265636861223a66616c73652c22506965726e61497a71756965726461223a66616c73652c225069654465726563686f223a66616c73652c22506965497a7175696572646f223a66616c73652c224f747261734c6f63616c697a6163696f6e446f6c6f72223a66616c73657d7d, 0x7b226f7269656e746163696f6e54656d706f72616c223a22222c226f7269656e746163696f6e457370616369616c223a22222c226f7269656e746163696f6e506572736f6e616c223a22222c2245737461646f4d656d6f726961223a22222c226f7472617345737461646f4d656d6f726961223a22222c22746f6d614465636973696f6e6573223a22222c226465746572696f726f436f676e697469766f223a22222c226f74726f7356616c6f726163696f6e436f676e6974697661223a22222c226f74726f7356616c6f726163696f6e4166656374697661546578746f223a22222c22616e7465636564656e74657350736971756961747269636f73546578746f223a22222c22636f6d706f7274616d69656e746f496e616465637561646f546578746f223a22222c226f74726f7354726173746f726e6f436f6e6475637461546578746f223a22222c226f626a657469766f7341726561507369636f6c6f67696361223a22222c22616363696f6e657341726561507369636f6c6f67696361223a22222c22726573706f6e7361626c6541726561507369636f6c6f67696361223a22222c2261666c696363696f6e223a66616c73652c226469666963756c74616465735375656e6f223a66616c73652c227472697374657a61223a66616c73652c22616e736965646164223a66616c73652c2270657264696461496e7465726573223a66616c73652c226170657469746f223a66616c73652c2243616d62696f73416e696d6f223a66616c73652c22696465614d7565727465223a66616c73652c227175656a6173536f6d617469636173223a66616c73652c226f74726f7356616c6f726163696f6e4166656374697661223a66616c73652c2264656d656e63696146616d696c696172223a66616c73652c22616e7465636564656e74657350736971756961747269636f73223a66616c73652c226465616d62756c6163696f6e223a66616c73652c226c656e6775616a654f66656e7369766f223a66616c73652c226167726573697669646164466973696361223a66616c73652c2272656368617a6f4375696461646f73223a66616c73652c2264656c6972696f73223a66616c73652c22616769746163696f6e507369636f6d6f7472697a223a66616c73652c22616c7563696e6163696f6e6573223a66616c73652c22636f6d706f7274616d69656e746f496e616465637561646f223a66616c73652c226f74726f7354726173746f726e6f436f6e6475637461223a66616c73657d, 0x7b224475636861223a22222c226f747261734475636861223a22222c224173656f223a22222c226f747261734173656f223a22222c225665737469646f223a22222c226f747261735665737469646f223a22222c2255736f52657472657465223a22222c226f7472617355736f52657472657465223a22222c226f747261734465616d62756c6163696f6e546578746f223a22222c225472616e73666572656e63696173223a22222c226f747261735472616e73666572656e63696173223a22222c22416c696d656e746163696f6e223a22222c226f74726173416c696d656e746163696f6e223a22222c2275736f54656c65666f6e6f223a22222c226d616e656a6f44696e65726f223a22222c226f747261734163746976696461646573496e737472756d656e74616c223a22222c226f626a657469766f734172656146756e63696f6e616c223a22222c22616363696f6e65734172656146756e63696f6e616c223a22222c22726573706f6e7361626c654172656146756e63696f6e616c223a22222c227265686162696c69746163696f6e223a66616c73652c226179756461446573706c617a616d69656e746f223a66616c73652c2261797564615465636e69636173223a66616c73652c226f747261734465616d62756c6163696f6e223a66616c73657d, 0x7b2241666963696f6e6573223a22222c226f7472617341666963696f6e6573223a22222c226f747261735469656d706f4c69627265546578746f223a22222c2272656c6163696f6e6172736552616e6765223a223530222c22616374697669646164657352616e6765223a223530222c226163746976696461646573506c616e696669636164617352616e6765223a223530222c22696e696369617469766150726f70696152616e6765223a223530222c226f747261734163746976696461646573546578746f223a22222c226f626a657469766f7341726561416e696d6163696f6e223a22222c22616363696f6e657341726561416e696d6163696f6e223a22222c22726573706f6e7361626c6541726561416e696d6163696f6e223a22222c2261637469766964616465734d616e75616c6573223a66616c73652c226a7565676f734d657361223a66616c73652c226c656572223a66616c73652c227476223a66616c73652c226f747261735469656d706f4c69627265223a66616c73652c226f626a657469766f7350726f70696f73223a66616c73652c226f747261734163746976696461646573223a66616c73657d, '110001', '1231222211', '', 0x5b375d, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_hidricos`
--

CREATE TABLE `tmp_hidricos` (
  `id_tmp_hidrico` int(11) NOT NULL,
  `id_residente` int(11) NOT NULL,
  `id_hidrico_e` int(11) DEFAULT NULL,
  `id_hidrico_s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `descripcion`) VALUES
(1, 'Diurno'),
(2, 'Vespertino'),
(3, 'Nocturno'),
(4, 'Fines de semana Diurno'),
(5, 'Fines de semana Vespertino'),
(6, 'Fines de semana Nocturno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_residente`,`id_personal`,`fecha`),
  ADD KEY `fk_historico_res_med2_idx` (`id_personal`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni_familiar`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `hidrico_entrada`
--
ALTER TABLE `hidrico_entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `hidrico_salida`
--
ALTER TABLE `hidrico_salida`
  ADD PRIMARY KEY (`id_salida`);

--
-- Indices de la tabla `historico_res_hab`
--
ALTER TABLE `historico_res_hab`
  ADD KEY `historico_id_habitacion_fk` (`id_habitacion`),
  ADD KEY `historico_id_residente_fk` (`id_residente`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id_incidencia`,`id_personal`,`id_residente`),
  ADD KEY `id_personal_incidencia_fk_idx` (`id_personal`),
  ADD KEY `id_residente_incidencia_fk_idx` (`id_residente`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id_peticion`,`num_linea`),
  ADD KEY `fk_idarticulo` (`id_articulo`);

--
-- Indices de la tabla `medicacion`
--
ALTER TABLE `medicacion`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni_personal`);

--
-- Indices de la tabla `peticion_material`
--
ALTER TABLE `peticion_material`
  ADD PRIMARY KEY (`id_peticion`),
  ADD KEY `fk_idproveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `registro_alimentacion`
--
ALTER TABLE `registro_alimentacion`
  ADD PRIMARY KEY (`id_alimentacion`);

--
-- Indices de la tabla `registro_constante`
--
ALTER TABLE `registro_constante`
  ADD PRIMARY KEY (`id_constante`);

--
-- Indices de la tabla `registro_descanso`
--
ALTER TABLE `registro_descanso`
  ADD PRIMARY KEY (`id_descanso`);

--
-- Indices de la tabla `registro_eliminacion`
--
ALTER TABLE `registro_eliminacion`
  ADD PRIMARY KEY (`id_eliminacion`);

--
-- Indices de la tabla `registro_higiene`
--
ALTER TABLE `registro_higiene`
  ADD PRIMARY KEY (`id_higiene`);

--
-- Indices de la tabla `registro_incidencia`
--
ALTER TABLE `registro_incidencia`
  ADD PRIMARY KEY (`id_incidencia`);

--
-- Indices de la tabla `registro_medicacion`
--
ALTER TABLE `registro_medicacion`
  ADD PRIMARY KEY (`id_medicacion`);

--
-- Indices de la tabla `registro_movilizacion`
--
ALTER TABLE `registro_movilizacion`
  ADD PRIMARY KEY (`id_movilizacion`);

--
-- Indices de la tabla `rel_familiar_residente`
--
ALTER TABLE `rel_familiar_residente`
  ADD PRIMARY KEY (`id_familiar`,`id_residente`),
  ADD KEY `rel_id_residente_fk_idx` (`id_residente`);

--
-- Indices de la tabla `residente`
--
ALTER TABLE `residente`
  ADD PRIMARY KEY (`id_residente`),
  ADD UNIQUE KEY `n_expediente_UNIQUE` (`n_expediente`),
  ADD UNIQUE KEY `dni_residente_UNIQUE` (`dni_residente`),
  ADD KEY `id_personal_responsable_idx` (`id_personal_responsable`);

--
-- Indices de la tabla `tmp_hidricos`
--
ALTER TABLE `tmp_hidricos`
  ADD PRIMARY KEY (`id_tmp_hidrico`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `hidrico_entrada`
--
ALTER TABLE `hidrico_entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `hidrico_salida`
--
ALTER TABLE `hidrico_salida`
  MODIFY `id_salida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `medicacion`
--
ALTER TABLE `medicacion`
  MODIFY `id_medicamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `peticion_material`
--
ALTER TABLE `peticion_material`
  MODIFY `id_peticion` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registro_alimentacion`
--
ALTER TABLE `registro_alimentacion`
  MODIFY `id_alimentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_constante`
--
ALTER TABLE `registro_constante`
  MODIFY `id_constante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro_descanso`
--
ALTER TABLE `registro_descanso`
  MODIFY `id_descanso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_eliminacion`
--
ALTER TABLE `registro_eliminacion`
  MODIFY `id_eliminacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_higiene`
--
ALTER TABLE `registro_higiene`
  MODIFY `id_higiene` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_incidencia`
--
ALTER TABLE `registro_incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro_medicacion`
--
ALTER TABLE `registro_medicacion`
  MODIFY `id_medicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_movilizacion`
--
ALTER TABLE `registro_movilizacion`
  MODIFY `id_movilizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `residente`
--
ALTER TABLE `residente`
  MODIFY `id_residente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `tmp_hidricos`
--
ALTER TABLE `tmp_hidricos`
  MODIFY `id_tmp_hidrico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_historico_res_med1` FOREIGN KEY (`id_residente`) REFERENCES `residente` (`id_residente`),
  ADD CONSTRAINT `fk_historico_res_med2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `historico_res_hab`
--
ALTER TABLE `historico_res_hab`
  ADD CONSTRAINT `historico_id_habitacion_fk` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id_habitacion`),
  ADD CONSTRAINT `historico_id_residente_fk` FOREIGN KEY (`id_residente`) REFERENCES `residente` (`id_residente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `id_personal_incidencia_fk` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `id_residente_incidencia_fk` FOREIGN KEY (`id_residente`) REFERENCES `residente` (`id_residente`);

--
-- Filtros para la tabla `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `fk_idarticulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`),
  ADD CONSTRAINT `fk_idpeticion` FOREIGN KEY (`id_peticion`) REFERENCES `peticion_material` (`id_peticion`);

--
-- Filtros para la tabla `peticion_material`
--
ALTER TABLE `peticion_material`
  ADD CONSTRAINT `fk_idproveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `rel_familiar_residente`
--
ALTER TABLE `rel_familiar_residente`
  ADD CONSTRAINT `rel_id_familiar_fk` FOREIGN KEY (`id_familiar`) REFERENCES `familiar` (`id_familiar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_id_residente_fk` FOREIGN KEY (`id_residente`) REFERENCES `residente` (`id_residente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `residente`
--
ALTER TABLE `residente`
  ADD CONSTRAINT `id_personal_responsable` FOREIGN KEY (`id_personal_responsable`) REFERENCES `personal` (`id_personal`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
