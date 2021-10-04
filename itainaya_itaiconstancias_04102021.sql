-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 19:07:32
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itainaya_itaiconstancias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallerarchivos`
--

CREATE TABLE `tallerarchivos` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext NOT NULL,
  `anios` mediumtext NOT NULL,
  `taller` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tallerarchivos`
--

INSERT INTO `tallerarchivos` (`id`, `nombre`, `anios`, `taller`) VALUES
(1, 'Juan Carlos González Medina ', '2020', 'Organización de los Archivos'),
(2, 'Aline Lizbeth Ceron Martinez', '2020', 'Organización de los Archivos'),
(3, 'Sarhai Gutiérrez Castañeda ', '2020', 'Organización de los Archivos'),
(4, 'JOHANA DEL CONSUELO PARRA CARRILLO', '2020', 'Organización de los Archivos'),
(5, 'Alvaro Alberto Gascón Alvarez', '2020', 'Organización de los Archivos'),
(6, 'Christian Francisco Mayo Uribe', '2020', 'Organización de los Archivos'),
(7, 'José Merced Mares Carrillo', '2020', 'Organización de los Archivos'),
(8, 'Arturo Gerardo Garcia Alvarez', '2020', 'Organización de los Archivos'),
(9, 'IVAN MENDOZA MAYORGA', '2020', 'Organización de los Archivos'),
(10, 'Iris Isabelina Medina Rodríguez', '2020', 'Organización de los Archivos'),
(11, 'Juan Antonio Cabello Sandoval ', '2020', 'Organización de los Archivos'),
(12, 'María Beatriz Parra Martínez', '2020', 'Organización de los Archivos'),
(13, 'IGNACIO ARIAS GARCIA', '2020', 'Organización de los Archivos'),
(14, 'COMISION ESTATAL DE ATENCION INTEGRAL A VICTIMAS ', '2020', 'Organización de los Archivos'),
(16, 'Yeniret del Rosario Lopez Huerta', '2020', 'Organización de los Archivos'),
(17, 'LIC. CINTHIA KARINA GONZALEZ FELIX', '2020', 'Organización de los Archivos'),
(18, 'MARÍA SOLEDAD ALCALÁ MIRANDA', '2020', 'Organización de los Archivos'),
(19, 'Omar Covarrubias Gonzaléz ', '2020', 'Organización de los Archivos'),
(20, 'Juan Ivan Sena Jimenez', '2020', 'Organización de los Archivos'),
(21, 'Janet Luna Peña', '2020', 'Organización de los Archivos'),
(22, 'Juan Pablo López Fausto', '2020', 'Organización de los Archivos'),
(23, 'Leticia Díaz Hernández', '2020', 'Organización de los Archivos'),
(24, 'Magnolia López Vargas', '2020', 'Organización de los Archivos'),
(25, 'Kateline Patricia González Cervantes', '2020', 'Organización de los Archivos'),
(26, 'Zulma Yadira Judith Fernández Medina', '2020', 'Organización de los Archivos'),
(27, 'Issac Ramón Meza López', '2020', 'Organización de los Archivos'),
(28, 'Ricardo M.', '2020', 'Organización de los Archivos'),
(29, 'OLIVIA MACIAS GUARDADO', '2020', 'Organización de los Archivos'),
(30, 'Laura Susana González Flores ', '2020', 'Organización de los Archivos'),
(31, 'Leslie Denicce Ley Pardo', '2020', 'Organización de los Archivos'),
(32, 'Eduardo Salvador Ibarra Haro', '2020', 'Organización de los Archivos'),
(33, 'Abisai Arias Velazquez', '2020', 'Organización de los Archivos'),
(34, 'Ana Arianka Astorga Aguiar', '2020', 'Organización de los Archivos'),
(35, 'CARLOS ALBERTO CARRILLO AVILA', '2020', 'Organización de los Archivos'),
(36, 'Irene Cecilia Navarrete Delgadillo', '2020', 'Organización de los Archivos'),
(37, 'Austria Verónica Arteaga Rivera ', '2020', 'Organización de los Archivos'),
(38, 'claudia elizabeth corona de la rosa ', '2020', 'Organización de los Archivos'),
(39, 'SENDY SOTELO SANCHEZ', '2020', 'Organización de los Archivos'),
(40, 'yohara Magali Herrera Tejeda', '2020', 'Organización de los Archivos'),
(41, 'Manuel Martinez Agüero', '2020', 'Organización de los Archivos'),
(42, 'Angélica Araceli Piña Castillo', '2020', 'Organización de los Archivos'),
(43, 'Orión Héctor Díaz Flores', '2020', 'Organización de los Archivos'),
(44, 'Maria de Lourdes Bravo Robles', '2020', 'Organización de los Archivos'),
(45, 'Yazmín Durán Estrada', '2020', 'Organización de los Archivos'),
(46, 'Rocío Guadalupe Camacho Ramírez', '2020', 'Organización de los Archivos'),
(47, 'Juana García Orozco', '2020', 'Organización de los Archivos'),
(48, 'JORGE HUMBERTO GARCÍA DE LA PAZ ', '2020', 'Organización de los Archivos'),
(49, 'Víctor Hugo Rodríguez ', '2020', 'Organización de los Archivos'),
(50, 'Miguel Angel Gómez Díaz', '2020', 'Organización de los Archivos'),
(51, 'Marcela Tirado Riosegura', '2020', 'Organización de los Archivos'),
(52, 'Gustavo Alonso Pío Villaseñor ', '2020', 'Organización de los Archivos'),
(53, 'Alma Patricia Soto Flores', '2020', 'Organización de los Archivos'),
(54, 'Berenice Rosales Duran', '2020', 'Organización de los Archivos'),
(55, 'LORENA RIVERA CASTILLO ', '2020', 'Organización de los Archivos'),
(56, 'Ma de Jesús Corona de la Rosa', '2020', 'Organización de los Archivos'),
(57, 'Alejandra Josseline Ortiz López', '2020', 'Organización de los Archivos'),
(58, 'Jose Eduardo González Pacheco', '2020', 'Organización de los Archivos'),
(59, 'Angel Antonio Flores Ramos', '2020', 'Organización de los Archivos'),
(60, 'Sahara Saynukari Lomeli Hernandez', '2020', 'Organización de los Archivos'),
(61, 'Anahí Carolina Nieves Cosio', '2020', 'Organización de los Archivos'),
(62, 'ivan alejandro naya rodriguez', '2020', 'Organización de los Archivos'),
(63, 'Yesenia Rodríguez Flores', '2020', 'Organización de los Archivos'),
(64, 'RUBEN OMAR TORRES BARRAGAN', '2020', 'Organización de los Archivos'),
(65, 'Raunel Olivares Martínez', '2020', 'Organización de los Archivos'),
(66, 'MARIA LUCILA CASILLAS IBARRA', '2020', 'Organización de los Archivos'),
(67, 'Patricia Adriana Diaz Espinosa', '2020', 'Organización de los Archivos'),
(68, 'Francisco Javier Garcia Ruiz', '2020', 'Organización de los Archivos'),
(69, 'MARTHA JAZMIN CAMBERO VILLARREAL', '2020', 'Organización de los Archivos'),
(70, 'Leonardo Ibarra Trujillo ', '2020', 'Organización de los Archivos'),
(71, 'Giovanni Resendiz Gonzalez', '2020', 'Organización de los Archivos'),
(72, 'Enrique Rosales Silva', '2020', 'Organización de los Archivos'),
(73, 'GEORGINA PATRICIA ALVAREZ LANDEROS', '2020', 'Organización de los Archivos'),
(74, 'LETICIA ALEJANDRA RODRIGUEZ VASQUEZ', '2020', 'Organización de los Archivos'),
(75, 'Amalia Sánchez Gonzalez', '2020', 'Organización de los Archivos'),
(76, 'Karla Yadira Chávez Corona', '2020', 'Organización de los Archivos'),
(77, 'ESMERALDA ELIZABETH CHAVEZ PACHECO', '2020', 'Organización de los Archivos'),
(78, 'Martha Leticia Jara Cortez ', '2020', 'Organización de los Archivos'),
(79, 'Karol', '2020', 'Organización de los Archivos'),
(80, 'CYNTHIA JEANNETTE TELLO MACIAS', '2020', 'Organización de los Archivos'),
(81, 'Humberto Agustín Moro Villavicencio', '2020', 'Organización de los Archivos'),
(82, 'Chistrian Gabriel Rodriguez Ayon', '2020', 'Organización de los Archivos'),
(83, 'Jorge Octavio González Rojas', '2020', 'Organización de los Archivos'),
(84, 'Eunice López Plantillas', '2020', 'Organización de los Archivos'),
(85, 'Myrna Samantha Aceves Gómez ', '2020', 'Organización de los Archivos'),
(86, 'Héctor Alonso Olivo Mojarro', '2020', 'Organización de los Archivos'),
(87, 'Guillermo Jahir Osorio González ', '2020', 'Organización de los Archivos'),
(88, 'Grecia Fabela Ramirez Castañeda', '2020', 'Organización de los Archivos'),
(89, 'Fabiola Gutierrez Mayoral', '2020', 'Organización de los Archivos'),
(90, 'Janice Elizabeth Gutierrez Garcia', '2020', 'Organización de los Archivos'),
(91, 'Eriberto Sandoval Gallardo ', '2020', 'Organización de los Archivos'),
(92, 'MARIA ASUNCION CARRILLO BAÑUELOS', '2020', 'Organización de los Archivos'),
(93, 'JOEL CHAPARRO BARRAZA', '2020', 'Organización de los Archivos'),
(94, 'Luis Alfredo Guillén Heredia ', '2020', 'Organización de los Archivos'),
(95, 'Marisela Ibarra Morales', '2020', 'Organización de los Archivos'),
(96, 'MARIA DEL CARMEN DE HARO TOPETE', '2020', 'Organización de los Archivos'),
(97, 'maria alejandra raygoza gomez', '2020', 'Organización de los Archivos'),
(98, 'Perla Rubí Curiel Herrera', '2020', 'Organización de los Archivos'),
(99, 'Maricela Torres Reza', '2020', 'Organización de los Archivos'),
(100, 'Sandra Nohemi Romero Becerra', '2020', 'Organización de los Archivos'),
(101, 'Irving Armando Haro Lopez', '2020', 'Organización de los Archivos'),
(102, 'SUJEY ELIZABETH PEREZ ZUÑIGA ', '2020', 'Organización de los Archivos'),
(103, 'Yessica Maribel Bravo Balber', '2020', 'Organización de los Archivos'),
(104, 'Pedro Cariño Abarca', '2020', 'Organización de los Archivos'),
(105, 'Alejandra Delgadillo Levario', '2020', 'Organización de los Archivos'),
(106, 'Martha Patricia Rocha Ramirez', '2020', 'Organización de los Archivos'),
(107, 'Jorge Nezftaly Gonzalez Amparo', '2020', 'Organización de los Archivos'),
(108, 'Paola Esmeralda Ramírez Aguirre', '2020', 'Organización de los Archivos'),
(109, 'Liliana Esperanza Marín Benítez', '2020', 'Organización de los Archivos'),
(110, 'Nereida Montoya Mendoza', '2020', 'Organización de los Archivos'),
(111, 'Mónica Janet Mora Martínez', '2020', 'Organización de los Archivos'),
(112, 'Dina Libni Lara Castillo', '2020', 'Organización de los Archivos'),
(113, 'Luis Manuel Robles Villanueva', '2020', 'Organización de los Archivos'),
(114, ' carla Isela Martinez Rivera', '2020', 'Organización de los Archivos'),
(115, 'sofia liliana macias garcia ', '2020', 'Organización de los Archivos'),
(116, 'JESUS GUILLERMO ORTIZ BENITEZ', '2020', 'Organización de los Archivos'),
(117, 'Jorge Iván Sánchez Mendoza', '2020', 'Organización de los Archivos'),
(118, 'Brenda Lizeth Pérez Arjona', '2020', 'Organización de los Archivos'),
(119, 'Julián de Jesús Vázquez Zúniga', '2020', 'Organización de los Archivos'),
(120, 'Gabriela Naranjo Jiménez', '2020', 'Organización de los Archivos'),
(121, 'Edith Patricia Martínez Partida ', '2020', 'Organización de los Archivos'),
(122, 'Diana Mildreth Vázquez Dorado', '2020', 'Organización de los Archivos'),
(123, 'Rosa Lizette Díaz Medina ', '2020', 'Organización de los Archivos'),
(124, 'Leticia Elizabeth González Beas', '2020', 'Organización de los Archivos'),
(125, 'LUCIA ARIADNA GARCIA PEREZ', '2020', 'Organización de los Archivos'),
(126, 'Francisco Santos', '2020', 'Organización de los Archivos'),
(127, 'RAFAEL ALEJANDRO SUAREZ ESPINOSA', '2020', 'Organización de los Archivos'),
(128, 'Ingrid Carranza Villegas', '2020', 'Organización de los Archivos'),
(129, 'LEOBARDO RUBIO RODRIGUEZ', '2020', 'Organización de los Archivos'),
(130, 'Omar AlejandroCruz Flores', '2020', 'Organización de los Archivos'),
(131, 'Laura Elena Ramírez Valladolid', '2020', 'Organización de los Archivos'),
(132, 'Francisco Javier Machuca Vázquez', '2020', 'Organización de los Archivos'),
(133, 'NORMA PATRICIA ARIAS CISNEROS', '2020', 'Organización de los Archivos'),
(134, 'ADRIANA GUADALUPE OLIVARES VARGAS ', '2020', 'Organización de los Archivos'),
(135, 'José María Ruiz Covarrubias ', '2020', 'Organización de los Archivos'),
(136, 'Christian Alejandro Navarro Aguilar', '2020', 'Organización de los Archivos'),
(137, 'MARIA DEL CARMEN DIAZ PONCE MEDRANO', '2020', 'Organización de los Archivos'),
(138, 'HUGO ALBERTO FLORES NUNGARAY', '2020', 'Organización de los Archivos'),
(139, 'YARELY CANDELARIA DIAZ GUTIERREZ', '2020', 'Organización de los Archivos'),
(140, 'XOCHITL MARIA QUIÑONEZ ASTORGA ', '2020', 'Organización de los Archivos'),
(141, 'LUIS HUMBERTO DORADO GAMBOA', '2020', 'Organización de los Archivos'),
(142, 'ALEXA JIMENA FUERTES CIENFUEGOS', '2020', 'Organización de los Archivos'),
(143, 'Livy Michelle Ramírez Briseño', '2020', 'Organización de los Archivos'),
(144, 'ENRIQUE CARRASCO VILLASEÑOR', '2020', 'Organización de los Archivos'),
(145, 'Guillermina Saldaña Flores', '2020', 'Organización de los Archivos'),
(146, 'Juana Guadalupe Oliva Miramontes', '2020', 'Organización de los Archivos'),
(147, 'Hugo Alfonso Trejo Villa', '2020', 'Organización de los Archivos'),
(148, 'Isbia Jael Ramírez Ramos', '2020', 'Organización de los Archivos'),
(149, 'Hector Ignacio Velazquez Flores', '2020', 'Organización de los Archivos'),
(150, 'dddd', '2020', 'Organización de los Archivos'),
(151, 'HECTOR I. VELAZQUEZ FLORES', '2020', 'Organización de los Archivos'),
(152, 'Lilia Maricruz Trejo Cabrera', '2020', 'Organización de los Archivos'),
(153, 'KAREN DEL ROCIO GIL VALDIVIA', '2020', 'Organización de los Archivos'),
(154, 'Eduardo Rafael Carrillo Rosales', '2020', 'Organización de los Archivos'),
(155, 'Erick Alejandro Estrada Lomelí', '2020', 'Organización de los Archivos'),
(156, 'Maria Susana Espinosa Robles ', '2020', 'Organización de los Archivos'),
(157, 'Guadalupe Fonseca Marrujo', '2020', 'Organización de los Archivos'),
(158, 'Betzania Lindaly Silva Guzmán', '2020', 'Organización de los Archivos'),
(159, 'victor gabriel flores santana', '2020', 'Organización de los Archivos'),
(160, 'Bianca Michelle Gándara Gómez', '2020', 'Organización de los Archivos'),
(161, 'Alexys Padilla Solís', '2020', 'Organización de los Archivos'),
(162, 'Maria del Carmen Garrigos Diez', '2020', 'Organización de los Archivos'),
(163, 'GIOVANNY PAOLO CHACON BERUMEN', '2020', 'Organización de los Archivos'),
(164, 'MANUEL CERVANTES AHUMADA', '2020', 'Organización de los Archivos'),
(165, 'LIC. EDGAR MONTAÑO PARDO', '2020', 'Organización de los Archivos'),
(166, 'Maria Guadalupe Ortiz Ceniceros', '2020', 'Organización de los Archivos'),
(167, 'MARCELA AMARILLAS LOPEZ PORTILLO', '2020', 'Organización de los Archivos'),
(168, 'ELIZABETH LEAL REYNOSO', '2020', 'Organización de los Archivos'),
(169, 'JUNIOR ENRIQUE GARCIA AMEZCUA', '2020', 'Organización de los Archivos'),
(170, 'Dante Alfredo León Garcia', '2020', 'Organización de los Archivos'),
(171, 'Irene Zapata Torres ', '2020', 'Organización de los Archivos'),
(172, 'Tzihualtentzin González Polanco', '2020', 'Organización de los Archivos'),
(173, 'Federico Pulido Gomez ', '2020', 'Organización de los Archivos'),
(174, 'Omar Arath Fregoso Tonché', '2020', 'Organización de los Archivos'),
(175, 'Lidia Joana Najera Plascencia ', '2020', 'Organización de los Archivos'),
(176, 'Gabriela Rosas Estrada', '2020', 'Organización de los Archivos'),
(177, 'Juan Sebastián Ramírez Covarrubias', '2020', 'Organización de los Archivos'),
(178, 'Yuriria Janeth Ortiz Cruz', '2020', 'Organización de los Archivos'),
(179, 'Diana Judith Pérez Camacho', '2020', 'Organización de los Archivos'),
(180, 'JOSE ARMANDO SANDOVAL FIGUEROA', '2020', 'Organización de los Archivos'),
(181, 'VICTOR MANUEL VAZQUEZ IRIARTE', '2020', 'Organización de los Archivos'),
(182, 'Marisol Parra Padilla', '2020', 'Organización de los Archivos'),
(183, 'JESSICA ATZIRI REYNAGA REYES', '2020', 'Organización de los Archivos'),
(184, 'Ariana de Jesús Saldivar Solís.', '2020', 'Organización de los Archivos'),
(185, 'Lic. José Antonio Cruz', '2020', 'Organización de los Archivos'),
(186, 'Araceli Garay Díaz', '2020', 'Organización de los Archivos'),
(187, 'JOSE PEDRO PARRA RODRIGUEZ', '2020', 'Organización de los Archivos'),
(188, 'SELENE SIRAI BAÑUELOS FLORES', '2020', 'Organización de los Archivos'),
(189, 'Benito Ruiz Gaytán Godínez', '2020', 'Organización de los Archivos'),
(190, 'Ali Manuel Bernal Leyzaola ', '2020', 'Organización de los Archivos'),
(191, 'Ariadna Saenz Toscano', '2020', 'Organización de los Archivos'),
(192, 'Monserrat Soloache Domínguez', '2020', 'Organización de los Archivos'),
(193, 'Laura Karina Contreras Ramirez', '2020', 'Organización de los Archivos'),
(194, 'ernestina reyes verdin', '2020', 'Organización de los Archivos'),
(195, 'Keyla Sugey Flores Ortega', '2020', 'Organización de los Archivos'),
(196, 'Frederick Nolasco Meza', '2020', 'Organización de los Archivos'),
(197, 'Karina Ledesma Carmona', '2020', 'Organización de los Archivos'),
(198, 'Mónica Leticia Contreras del Toro', '2020', 'Organización de los Archivos'),
(199, 'Dunia García Victoria', '2020', 'Organización de los Archivos'),
(200, 'MIREYA CONTRERAS VIERA', '2020', 'Organización de los Archivos'),
(201, 'MARÍA GÓMEZ ALVARADO', '2020', 'Organización de los Archivos'),
(202, 'jorge luis macias lopez', '2020', 'Organización de los Archivos'),
(203, 'carlos manuel mendez ulloa', '2020', 'Organización de los Archivos'),
(204, 'Liliana Pedroza Navarro', '2020', 'Organización de los Archivos'),
(205, 'Solyenitzin Gonzalez Ojeda', '2020', 'Organización de los Archivos'),
(206, 'noemí sánchez ante', '2020', 'Organización de los Archivos'),
(207, 'José Antonio Serrano Morán', '2020', 'Organización de los Archivos'),
(208, 'Dulce Alicia González Gómez', '2020', 'Organización de los Archivos'),
(209, 'Mario Jair Soberano Vargas', '2020', 'Organización de los Archivos'),
(210, 'L.C. GABRIELA DENISE GONZALEZ DE ALBA', '2020', 'Organización de los Archivos'),
(211, 'BRENDA GUADALUPE RICO VALLEJO', '2020', 'Organización de los Archivos'),
(212, 'Mitzy Guerrero Santos', '2020', 'Organización de los Archivos'),
(213, 'Anabel Hernandez Nuñez', '2020', 'Organización de los Archivos'),
(214, 'Francisco Javier Ruiz Garcia', '2020', 'Organización de los Archivos'),
(215, 'Carlos Alberto Nuño Simental', '2020', 'Organización de los Archivos'),
(216, 'Carolina Coral Cortés Servín', '2020', 'Organización de los Archivos'),
(217, 'Diego Ivan Maya Cristobal', '2020', 'Organización de los Archivos'),
(218, 'Julio Cesar Ortiz Arias', '2020', 'Organización de los Archivos'),
(219, 'CESAR LOPEZ ALDANA', '2020', 'Organización de los Archivos'),
(220, 'Ismael llamas alvarez', '2020', 'Organización de los Archivos'),
(221, 'Ismael llamas alvarez ', '2020', 'Organización de los Archivos'),
(222, 'Ma. Guadalupe Correa Garcia', '2020', 'Organización de los Archivos'),
(223, 'ARAM ERUBEY MEJIA RAMIREZ', '2020', 'Organización de los Archivos'),
(224, 'Ivan Arturo Jiménez Melendrez', '2020', 'Organización de los Archivos'),
(225, 'Irma Evelia Rios Villa', '2020', 'Organización de los Archivos'),
(226, 'Imelda Fabiola Ramírez Medina', '2020', 'Organización de los Archivos'),
(227, 'Martha Ocampo Mayorga', '2020', 'Organización de los Archivos'),
(228, 'Aida Elena Avalos Ramirez', '2020', 'Organización de los Archivos'),
(229, 'María del Carmen Ponce Casas', '2020', 'Organización de los Archivos'),
(230, 'JOSÉ EMMANUEL LÓPEZ RUELAS', '2020', 'Organización de los Archivos'),
(231, 'María José Villarreal Ochoa', '2020', 'Organización de los Archivos'),
(232, 'Imelda Macías Licea', '2020', 'Organización de los Archivos'),
(233, 'Diego Pineda González', '2020', 'Organización de los Archivos'),
(234, 'nayeli margarita chacon delgado', '2020', 'Organización de los Archivos'),
(235, 'MAYRA GRACIELA ORTEGA PUENTES', '2020', 'Organización de los Archivos'),
(236, 'Luguer Saúl Bustamante bernal', '2020', 'Organización de los Archivos'),
(237, 'Mayra Liliana Galicia Roberts', '2020', 'Organización de los Archivos'),
(238, 'JOSE LUIS PARRA BAÑALES', '2020', 'Organización de los Archivos'),
(239, 'Alba Tonátzin Estrada Neri', '2020', 'Organización de los Archivos'),
(240, 'leticia soria arellano', '2020', 'Organización de los Archivos'),
(241, 'georgina perez hernandez', '2020', 'Organización de los Archivos'),
(242, 'Leslye Peraza Aboytes', '2020', 'Organización de los Archivos'),
(243, 'antonio palomino villa', '2020', 'Organización de los Archivos'),
(244, 'Sandra Luz Romero Ríos', '2020', 'Organización de los Archivos'),
(245, 'DALIA GUADALUPE LOPEZ VELAZQUEZ', '2020', 'Organización de los Archivos'),
(246, 'Luz Cristina Parra Valdez', '2020', 'Organización de los Archivos'),
(247, 'YANETH ANAYALY DELGADO LOZANO', '2020', 'Organización de los Archivos'),
(248, 'Ing, Marisela Alvarado Montes', '2020', 'Organización de los Archivos'),
(249, 'DANIEL GARCIA CARRILLO', '2020', 'Organización de los Archivos'),
(250, 'NORMA EDITH ARRIAGA QUEZADA', '2020', 'Organización de los Archivos'),
(251, 'Susana Bañuelos Yáñez', '2020', 'Organización de los Archivos'),
(252, 'Rosalía marceleño delgadillo', '2020', 'Organización de los Archivos'),
(253, 'Verónica Galvan gonzalez', '2020', 'Organización de los Archivos'),
(254, 'Juan Carlos Silva Rivera', '2020', 'Organización de los Archivos'),
(255, 'Guillermo Camba Vergara', '2020', 'Organización de los Archivos'),
(256, ' Patricia Camacho ', '2020', 'Organización de los Archivos'),
(257, 'Martha Veronica Rodríguez Hernández ', '2020', 'Organización de los Archivos'),
(258, 'Sergio israel cano ugarte', '2020', 'Organización de los Archivos'),
(259, 'ADAN FRANCISCO REYNOSO LUNA ', '2020', 'Organización de los Archivos'),
(260, 'MANUEL ALBERTO HERRERA SOLIS', '2020', 'Organización de los Archivos'),
(261, 'Josué Alfonso Soriano Fong', '2020', 'Organización de los Archivos'),
(262, 'Nidia Catalina Gastelum Moreno', '2020', 'Organización de los Archivos'),
(263, 'DALIA DINORA RAMOS ALCANTAR', '2020', 'Organización de los Archivos'),
(264, 'Yessica Sarai Moncada Villagrana', '2020', 'Organización de los Archivos'),
(265, 'LEONORILDA CARRILLO BAÑUELOS', '2020', 'Organización de los Archivos'),
(266, 'Priska Citlali Román Hernández', '2020', 'Organización de los Archivos'),
(267, 'José Luis Torres Aguilar', '2020', 'Organización de los Archivos'),
(268, 'Ernesto González Ocegueda', '2020', 'Organización de los Archivos'),
(269, 'Claudia Georgina Silva Soltero', '2020', 'Organización de los Archivos'),
(270, 'Diana Francia Piña Camacho', '2020', 'Organización de los Archivos'),
(271, 'ESTHER ALICIA GONZALEZ HERNANDEZ', '2020', 'Organización de los Archivos'),
(272, 'Laura Patricia Flores Hernández', '2020', 'Organización de los Archivos'),
(273, 'Jessica Goretti Ramirez Altamirano', '2020', 'Organización de los Archivos'),
(274, 'Miqueas Castello Estrada', '2020', 'Organización de los Archivos'),
(275, 'Sahid Ra Gutiérrez Cruz', '2020', 'Organización de los Archivos'),
(276, 'Hugo Fabio Pérez Ocampo ', '2020', 'Organización de los Archivos'),
(277, 'Ariana Hernandez Sanchez', '2020', 'Organización de los Archivos'),
(278, 'ANA ROSALIA SANTOS FLORES', '2020', 'Organización de los Archivos'),
(279, 'Luis Alberto Contreras Gutiérrez', '2020', 'Organización de los Archivos'),
(280, 'LILIA ALEJANDRA GOMEZ RUELAS', '2020', 'Organización de los Archivos'),
(281, 'Berenice María del Rocío Contreras Hernández', '2020', 'Organización de los Archivos'),
(282, 'Natalia Zamorano Sánchez', '2020', 'Organización de los Archivos'),
(283, 'Moises Pelayo Mendez', '2020', 'Organización de los Archivos'),
(284, 'Cielo Celene Rodriguez Alvarez', '2020', 'Organización de los Archivos'),
(285, 'Oscar Omar Pérez Alvarado ', '2020', 'Organización de los Archivos'),
(286, 'JOSE ENRIQUE ORTIZ CASTELLANOS ', '2020', 'Organización de los Archivos'),
(287, 'Ma.Dolores López Carrillo', '2020', 'Organización de los Archivos'),
(288, 'Bangla Delfina Casillas Ibarra', '2020', 'Organización de los Archivos'),
(289, 'Luz elena cuevas carrillo', '2020', 'Organización de los Archivos'),
(290, 'Celia Langurén Pärra', '2020', 'Organización de los Archivos'),
(291, 'Josefina Gutiérrez Ruiz', '2020', 'Organización de los Archivos'),
(292, 'Davitza Cuevas Martínez', '2020', 'Organización de los Archivos'),
(293, 'María del Rocío Rodriguez Rosales', '2020', 'Organización de los Archivos'),
(294, 'Ever  Saul Flores Mendoza', '2020', 'Organización de los Archivos'),
(295, 'PAULA DEL CARMEN FLORES ROBLES', '2020', 'Organización de los Archivos'),
(296, 'Jazmín Guadalupe Jiménez Sánchez ', '2020', 'Organización de los Archivos'),
(297, 'GERARDO MARTINEZ CONRIQUEZ', '2020', 'Organización de los Archivos'),
(298, 'Guadalupe del Consuelo Ramirez Alfaro', '2020', 'Organización de los Archivos'),
(299, 'Agustín Ramos Lopez', '2020', 'Organización de los Archivos'),
(300, 'JOEL ENRIQUE MALDONADO RUIZ', '2020', 'Organización de los Archivos'),
(301, 'Mariana Berenice Hernández Carrillo', '2020', 'Organización de los Archivos'),
(302, 'Victor Hugo Delgado Guzman', '2020', 'Organización de los Archivos'),
(303, 'Josefa Hernández de la Paz', '2020', 'Organización de los Archivos'),
(304, 'Adriana García Carrillo', '2020', 'Organización de los Archivos'),
(305, 'Silvia Sànchez Alvarado', '2020', 'Organización de los Archivos'),
(306, 'Daniela Peña Huerta', '2020', 'Organización de los Archivos'),
(307, 'Julián Cristobal Hernández Ortega', '2020', 'Organización de los Archivos'),
(308, 'KAREN LIZETH CERVANTES MORALES', '2020', 'Organización de los Archivos'),
(309, 'Miriam Susana Pérez Simón ', '2020', 'Organización de los Archivos'),
(310, 'JUAN ANTONIO MEDINA URRIZA', '2020', 'Organización de los Archivos'),
(311, 'Griselda de la Paz Rodriguez', '2020', 'Organización de los Archivos'),
(312, 'Zheila Zorayda Ayala Lara', '2020', 'Organización de los Archivos'),
(313, 'Hilda Daniela Campos García', '2020', 'Organización de los Archivos'),
(314, 'Azara Yahaira Barajas Montoya', '2020', 'Organización de los Archivos'),
(315, 'Nubia Yuliana Muñoz Andrade', '2020', 'Organización de los Archivos'),
(316, 'Ingrid Sarahi Magaña Hernández', '2020', 'Organización de los Archivos'),
(317, 'MARCO ODULIO PEREZ DAVILA ', '2020', 'Organización de los Archivos'),
(318, 'María Teresa Carrillo Reyna', '2020', 'Organización de los Archivos'),
(319, 'Victoriana Jiménez Jacinto', '2020', 'Organización de los Archivos'),
(320, 'Gloria De la Rosa Flores', '2020', 'Organización de los Archivos'),
(321, 'Celia Del Carmen Contreras Díaz', '2020', 'Organización de los Archivos'),
(322, 'JUANA ELIZABETH JIMENEZ CASTORENA', '2020', 'Organización de los Archivos'),
(323, 'Hilario Salazar Lopez', '2020', 'Organización de los Archivos'),
(324, 'Rodrigo Pineda ', '2020', 'Organización de los Archivos'),
(325, 'Milca Elizabeth Maldonado Quiñones', '2020', 'Organización de los Archivos'),
(326, 'Iván Pérez Pérez', '2020', 'Organización de los Archivos'),
(327, 'Abril Marilú Cervantes Avilés', '2020', 'Organización de los Archivos'),
(328, 'Maria Villegas Martinez', '2020', 'Organización de los Archivos'),
(329, 'Verónica Rosario Bernal Ulloa', '2020', 'Organización de los Archivos'),
(330, 'Raquel Esteban Tapia', '2020', 'Organización de los Archivos'),
(331, 'Miguel Enrique Wong Espinosa ', '2020', 'Organización de los Archivos'),
(332, 'Citlalli anahi Saldaña barrios', '2020', 'Organización de los Archivos'),
(333, 'GABRIEL LOPEZ ZAVALA', '2020', 'Organización de los Archivos'),
(334, 'MAYRA HERRERA TEJEDA', '2020', 'Organización de los Archivos'),
(335, 'Francisco Javier Fránquez Partida', '2020', 'Organización de los Archivos'),
(336, 'Gabriela Socorro Navarro Medina', '2020', 'Organización de los Archivos'),
(337, 'JUAN SALVADOR ROMERO MEZA', '2020', 'Organización de los Archivos'),
(338, 'José Miguel Vargas Franco', '2020', 'Organización de los Archivos'),
(339, 'Héctor Alberto Tejeda Rodríguez ', '2020', 'Organización de los Archivos'),
(340, 'Evangelina Estrada Gómez', '2020', 'Organización de los Archivos'),
(341, 'Karla Marey Salinas Martínez', '2020', 'Organización de los Archivos'),
(342, 'HECTOR HIRAN TORRES VILLANUEVA', '2020', 'Organización de los Archivos'),
(343, 'Rita Karina Rivas Romero', '2020', 'Organización de los Archivos'),
(344, 'Alejandro Toledo Ortega', '2020', 'Organización de los Archivos'),
(345, 'BRENDA LETICIA SANCHEZ RAMOS ', '2020', 'Organización de los Archivos'),
(346, 'ADRIANA LIZETH BAÑUELOS GONZALEZ', '2020', 'Organización de los Archivos'),
(347, 'Edna Yuridia Flores Ayon', '2020', 'Organización de los Archivos'),
(348, 'José Joel Flores Ramírez ', '2020', 'Organización de los Archivos'),
(349, 'Carolina Ruiz Zavala', '2020', 'Organización de los Archivos'),
(350, 'NICANDRO VILLAGRANA VILLAGRANA', '2020', 'Organización de los Archivos'),
(351, 'JOSE MEDINA FLORES', '2020', 'Organización de los Archivos'),
(352, 'María de Jesús Valdez Contreras', '2020', 'Organización de los Archivos'),
(353, 'ROCIO AMPARO DILLMANN GIL', '2020', 'Organización de los Archivos'),
(354, 'MARIA ESPERANZA ZEPEDA BETANCOURT', '2020', 'Organización de los Archivos'),
(355, 'GLORIA MARÍA PONCE BERNAL', '2020', 'Organización de los Archivos'),
(356, 'Gabriela Altamirano Madero', '2020', 'Organización de los Archivos'),
(357, 'MONICA GUADALUPE HERNANDEZ FRANCO', '2020', 'Organización de los Archivos'),
(358, 'siquem sarai jasso morelos', '2020', 'Organización de los Archivos'),
(359, 'Estrellita De Yanira Perales Navarrete', '2020', 'Organización de los Archivos'),
(360, 'Hilda Judith Sepùlveda Arèvalo', '2020', 'Organización de los Archivos'),
(361, 'Mario Alberto Quintanar Ramirez', '2020', 'Organización de los Archivos'),
(362, 'Fanny Denice Sanchez Arteaga', '2020', 'Organización de los Archivos'),
(363, 'Daniela Velasco Contreras', '2020', 'Organización de los Archivos'),
(364, 'NYDIA EVELIA GONZALEZ ROBLES', '2020', 'Organización de los Archivos'),
(365, 'RUBICELA NAVA NÚEZ', '2020', 'Organización de los Archivos'),
(366, 'Oswaldo del Muro Soto', '2020', 'Organización de los Archivos'),
(367, 'EVANGELINA BAUTISTA ALVAREZ', '2020', 'Organización de los Archivos'),
(368, 'Evelia Lopez Castorena', '2020', 'Organización de los Archivos'),
(369, 'Aarón Hernán Montañez Casillas', '2020', 'Organización de los Archivos'),
(370, 'Carmen Arias Hernández.', '2020', 'Organización de los Archivos'),
(371, 'JESSICA JOSELINE MARTINEZ MORENO', '2020', 'Organización de los Archivos'),
(372, 'cecilia valderrama mota', '2020', 'Organización de los Archivos'),
(373, 'ARIANNA KISAI VALENZUELA LUNA', '2020', 'Organización de los Archivos'),
(374, 'Edna Catalina García Becerra', '2020', 'Organización de los Archivos'),
(376, 'Leonid Mijail Paredes Sandoval', '2020', 'Organización de los Archivos'),
(378, 'Esmeralda Isabel Ibarra Beas', '2020', 'Organización de los Archivos'),
(380, 'Katia Guadalupe Montes Palacios', '2020', 'Organización de los Archivos'),
(381, 'Elliane Lizeth Vega Bernal', '2020', 'Organización de los Archivos'),
(382, 'MARÍA DEL SOL GONZÁLEZ DELGADILLO', '2020', 'Organización de los Archivos'),
(383, 'Luis Carlos Rodríguez Nonato ', '2020', 'Organización de los Archivos'),
(384, 'ANA KAREN MARTINEZ LOPEZ ', '2020', 'Organización de los Archivos'),
(385, 'GORETTY ALEXANDRA HERNANDEZ GONZALEZ', '2020', 'Organización de los Archivos'),
(386, 'Cristian Judith Jiménez Lepe', '2020', 'Organización de los Archivos'),
(387, 'Margarita Raquel López Sánchez', '2020', 'Organización de los Archivos'),
(389, 'Alef zayin Kurczyn villa ', '2020', 'Organización de los Archivos'),
(390, 'Angelica Barajas Mainz', '2020', 'Organización de los Archivos'),
(391, 'Alejandro Toledo Ortega', '2020', 'Organización de los Archivos'),
(392, 'BRENDA LETICIA SANCHEZ RAMOS ', '2020', 'Organización de los Archivos'),
(393, 'ADRIANA LIZETH BAÑUELOS GONZALEZ', '2020', 'Organización de los Archivos'),
(394, 'Edna Yuridia Flores Ayon', '2020', 'Organización de los Archivos'),
(395, 'José Joel Flores Ramírez ', '2020', 'Organización de los Archivos'),
(396, 'NICANDRO VILLAGRANA VILLAGRANA', '2020', 'Organización de los Archivos'),
(397, 'JOSE MEDINA FLORES', '2020', 'Organización de los Archivos'),
(398, 'María de Jesús Valdez Contreras', '2020', 'Organización de los Archivos'),
(399, 'ROCIO AMPARO DILLMANN GIL', '2020', 'Organización de los Archivos'),
(400, 'MARIA ESPERANZA ZEPEDA BETANCOURT', '2020', 'Organización de los Archivos'),
(401, 'GLORIA MARÍA PONCE BERNAL', '2020', 'Organización de los Archivos'),
(402, 'Gabriela Altamirano Madero', '2020', 'Organización de los Archivos'),
(403, 'MONICA GUADALUPE HERNANDEZ FRANCO', '2020', 'Organización de los Archivos'),
(404, 'siquem sarai jasso morelos', '2020', 'Organización de los Archivos'),
(405, 'Estrellita De Yanira Perales Navarrete', '2020', 'Organización de los Archivos'),
(406, 'Hilda Judith Sepùlveda Arèvalo', '2020', 'Organización de los Archivos'),
(407, 'Mario Alberto Quintanar Ramirez', '2020', 'Organización de los Archivos'),
(408, 'Fanny Denice Sanchez Arteaga', '2020', 'Organización de los Archivos'),
(409, 'Daniela Velasco Contreras', '2020', 'Organización de los Archivos'),
(410, 'NYDIA EVELIA GONZALEZ ROBLES', '2020', 'Organización de los Archivos'),
(411, 'RUBICELA NAVA NÚEZ', '2020', 'Organización de los Archivos'),
(412, 'Oswaldo del Muro Soto', '2020', 'Organización de los Archivos'),
(413, 'EVANGELINA BAUTISTA ALVAREZ', '2020', 'Organización de los Archivos'),
(414, 'Evelia Lopez Castorena', '2020', 'Organización de los Archivos'),
(415, 'Aarón Hernán Montañez Casillas', '2020', 'Organización de los Archivos'),
(416, 'Carmen Arias Hernández.', '2020', 'Organización de los Archivos'),
(417, 'JESSICA JOSELINE MARTINEZ MORENO', '2020', 'Organización de los Archivos'),
(418, 'cecilia valderrama mota', '2020', 'Organización de los Archivos'),
(419, 'ARIANNA KISAI VALENZUELA LUNA', '2020', 'Organización de los Archivos'),
(420, 'Edna Catalina García Becerra', '2020', 'Organización de los Archivos'),
(421, 'Claudia Celina Guardado Olea', '2020', 'Organización de los Archivos'),
(422, 'Alan Fernando Medina Jiménez', '2020', 'Organización de los Archivos'),
(423, 'Omar Israel Moya Gómez', '2020', 'Organización de los Archivos'),
(424, 'Angélica Barajas Martínez', '2020', 'Organización de los Archivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallerinformaticasisia`
--

CREATE TABLE `tallerinformaticasisia` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext NOT NULL,
  `anios` mediumtext NOT NULL,
  `taller` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tallerinformaticasisia`
--

INSERT INTO `tallerinformaticasisia` (`id`, `nombre`, `anios`, `taller`) VALUES
(436, 'STEVENS JAVIER VERA ENRIQUEZ', '2021', 'SISAI 2.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallermonitoreosipot`
--

CREATE TABLE `tallermonitoreosipot` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext NOT NULL,
  `correo` mediumtext DEFAULT NULL,
  `taller` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tallermonitoreosipot`
--

INSERT INTO `tallermonitoreosipot` (`id`, `nombre`, `correo`, `taller`) VALUES
(1, 'Esmeralda Isabel Ibarra Beas', 'esmeraldaibarrabeas@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(2, 'Lic. Carlos Alberto Carrillo Ávila ', 'carlosac489@outlook.es', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(3, 'Carla Isela Martinez Rivera ', 'carisem@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(4, 'Abisai Arias Velazquez', 'abisai7119@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(5, 'BRISA DEL CARMEN ORTEGA CUEVAS', 'RECHUM@UTNAY.EDU.MX', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(6, 'Celia Langurén Parra', 'clanguren85@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(7, 'Myrna Aracely Ortiz Corona', 'myrnaortiz@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(8, 'Laurentina Yamel Ramírez Bernal', 'yamelbernall@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(9, 'Gregorio Manuel Huerta Partida', 'gregmhuerta@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(10, 'Socorro Reyes Hernández', 'socorroreyeshernández@yahoo.com.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(11, 'Perla Rubi Curiel Herrera', 'Perlacuriel19@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(12, 'Carlos Alberto Nuño Simental', 'carlosnuno21@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(13, 'Mario Alberto Quintanar Ramirez', 'transparencia.badeba@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(14, 'Dian Manuel Pacheco Lizárraga', 'transparenciadepto@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(15, 'Maria del Carmen Bautista Rodriguez', 'marycarmenbr72@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(16, 'Irving Armando Haro Lopez', 'compras.cobaen@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(17, 'Yesenia Rodríguez Flores', 'transparencia@sepen.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(18, 'CHRISTIAN ANTHONY GARCIA MONROY', 'chr.angamo@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(19, 'Kateline Patricia González Cervantes', 'kateliine.glez@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(20, 'CYNTHIA JEANNETTE TELLO MACÍAS', 'nayarit@pri.org.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(21, 'Chistrian Gabriel Rodríguez Ayón', 'finanzaspri2017@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(22, 'Humberto Agustin Moro Villavicencio', 'Movielectronics@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(23, 'Cinthia Marisol Reyes Tapia', 'reyescinthia2@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(24, 'Janet Luna Peña', 'transparenciainmunay@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(25, 'SUJEY ELIZABETH PEREZ ZUÑIGA', 'admon.cobaen@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(26, 'Ana Arianka Astorga Aguiar', 'arianka.astorga@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(27, 'Moises Ernesto Rodriguez Martinez (PROEPAOT)', 'transparenciaproepa@nayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(28, 'LUGUER SAUL BUSTAMANTE BERNAL', 'luguer.saul@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(29, 'Carolina vargas reyes', 'cvrh20@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(30, 'ivan alejandro naya rodriguez', 'nixonrichi@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(31, 'Elvia Cruz Torres', 'culturam4@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(32, 'Christian Francisco Mayo Uribe', 'transparencia.sederma@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(33, 'Karla nathaly partida ledon', 'mek_ledon@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(34, 'Yeniret del Rosario Lopez Huerta', 'qfbyeniret@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(35, 'Lilia Maricruz Trejo Cabrera', 'liliatrejo2016@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(36, 'Miguel Eduardo Fregoso Herrera', 'miguel-fregosoh95@outlook.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(37, 'Ariana de Jesús Saldivar Solis', 'lic.saldivar@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(38, 'Eduardo Salvador Ibarra Haro', 'edsaibarraha@gmail.com qq', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(39, 'DUNIA GARCIA VICTORIA', 'dgarciav@utbb.edu.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(40, 'Ademar Aguiar Medina', 'ademar_aguiar@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(41, 'ALMA DELIA GONZÁLEZ LÓPEZ', 'almaailedgonzalez@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(42, 'Sarhai Gutiérrez Castañeda ', 'saritaa_gyz@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(43, 'DIANA REBECA GOVEA TORRES', 'dgovea@turismonayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(44, 'Angel Martínez Galván', 'difrosamorada@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(45, 'GABRIELA DENISE GONZÁLEZ DE ALBA', 'cdeemn.bm.et@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(46, 'Fanny Lizbeth Contreras Ocegueda', 'unidadenlace_spl@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(47, 'Efren Godinez Alvarez', 'semanay.oe@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(48, 'Mitzy Guerrero Santos', 'marisuky@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(49, 'José Luis Gutiérrez García ', 'gutierrezluis78@gmail.com ', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(50, 'MARISSA IBARRA TREJO', 'becqui82@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(51, 'JUAN ANTONIO CHAVEZ CARRILLO', 'jacc-49@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(52, 'GABRIELA VALLE BERNAL', 'gabrielavalle27@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(53, 'Alejandra Delgadillo Levario', 'diracademica.cobaen@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(54, 'Rocio Sugey Perez Pintor', 'rocio_sugey@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(55, 'Bangla Delfina Casillas Ibarra', 'banglacasillasibarra@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(56, 'Silvia Norelvy Preciado Fletes', 'norelvy05@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(57, 'Maria Guadalupe Ortiz Ceniceros', 'ptp.alichumacero@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(58, 'MARÌA CECILIA RUIZ AGUILAR', 'cecirua6821@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(59, 'Ma. Lourdes Benavides Guerrero.', 'benavides051065@yahoo.com.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(60, 'Susana Bañuelos yañez', 'alvarado@seplan.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(61, 'Ingrid Gissel Ante Suarez', 'enlce.transparencia.dgcs.nay@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(62, 'Sahid Ra Gutiérrez Cruz', 'pronabes18@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(63, 'SAIM RUBÉN SALAZAR AGUIRRE', 'SAAGSARU@HOTMAIL.COM', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(64, 'Perla Denisse Solís Oliva ', 'Transparenciassn@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(65, 'Paola Samanta López Talamantes', 'paola_talamantes@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(66, 'ZAIRA MAGARIX RIVERA GOMEZ', 'transparencia.teatro2016@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(67, 'Hilda Judith Sepúlveda Arévalo', 'transparenciasectursub@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(68, 'JUAN CARLOS INDA HERNÁNDEZ', 'jcinda.jci@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(69, 'Pedro Navarro Caro', 'jaltemba65_@live.com.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(70, 'YOLANDA CARRILLO AVALOS', 'carrilloavalosyolanda@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(71, 'Yuriria Janeth Ortiz Cruz ', 'Yiyiortiz06@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(72, 'MARTHA JAZMIN CAMBERO VILLARREAL', 'oomapasiitai@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(73, 'Patricia Adriana Diaz Espinosa', 'patricia.diazespinosa@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(74, 'LEOBARDO RUBIO RODRIGUEZ', 'organismo_operadordeagua@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(75, 'carlos kelly arreola', 'lic.carloskelly@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(76, 'MF José Francisco Cermeño Ayón', 'ciudadanonayarita@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(77, 'Brenda Imelda Valadez Peña', 'bvaladez@seplan.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(78, 'GLORIA ZULEMA MALDONADO SOTO', 'gzms72@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(79, 'Ingrid Carranza Villegas ', 'ingrid_21.flower@hotmail.com ', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(80, 'Amalia Kesahi Gómez García ', 'amaliakesahigomezg@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(81, 'NELSON ISMAEL GARCÍA TOPETE', 'actuaria_juntalocal@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(82, 'Jorge Eugenio López Zavala', 'jorgeeugenio.loz@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(83, 'Alexa Jimena Fuertes Cienfuegos', 'transparenciamarakame@nayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(84, 'EDITH PATRICIA MARTINEZ PARTIDA', 'edithpatmartinez@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(85, 'Alexys Padilla Solís', 'desarrolloinstitucional@cobaen.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(86, 'Dalia Guadalupe López Velazquez ', 'Dalialove2019@outlook.es ', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(87, 'Yessica Jaciber Torres Gomez', 'jaciber.gomtor@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(88, 'Luis Antonio Garabito Rodríguez ', 'luis_venarro@hotmail.com ', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(89, 'Xóchitl Aida Madrigal Ulloa', 'xoc_68@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(90, 'SHEILA JUDITH AGUAYO LEON', 'RHTEATRO@GMAIL.COM', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(91, 'YARELY CANDELARIA DIAZ GUTIERREZ', 'POCAHONTAS020280@HOTMAIL.COM', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(92, 'Nidia Lizeth Ocampo Cardenas', 'nidia_ocampo@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(93, 'Vidal Silva Celedón', 'csjubiladosypensionadosetdif@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(94, 'LILIA ALEJANDRA GOMEZ RUELAS', 'cocyten01@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(95, 'RUBI MARGARITA ROSALES MONTERO', 'TEATRODELPUEBLO2015@GMAIL.COM', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(96, 'Francisco Santos', 'docencia.cobaen@nayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(97, 'YAZMIN DURAN ESTRADA', 'transparenciaturquesa@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(98, 'Karla Noemí Ulloa García', 'karlanug@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(99, 'ANGELITA VERONICA LIMON MIRAMONTES', 'angvelis@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(100, 'KAREN ROSIO FÉLIX ', 'karen_felix_23_04@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(101, 'Rodolfo Gonzalez Castañeda', 'lc.gonca6@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(102, 'FRANCISCO JAVIER MANCILLAS VAZQUEZ', 'fjmv32@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(103, 'Laura Karina Contreras Ramírez', 'setraprodetransparencia@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(104, 'Jose Manuel Polanco Hermoso', 'manuelpolanco11@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(105, 'Zoila Curiel Zermeño', 'zoila_curiel@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(106, 'Alejandro Lopez Santa Cruz', 'santacruzalex6190@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(107, 'María del Rosario Muñoz Venegas', 'rosario_03@live.com.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(108, 'Adriana García Carrillo', 'lgdt207@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(109, 'Arq. Luis Rigoberto López Herrera', 'arq.rigobertolopez@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(110, 'Luis Rigoberto López Herrera', 'llopez@turismonayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(111, 'Jair Ortiz Ramos', 'wortiz@turismonayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(112, 'Olga Yulia López Astorga', 'yuliannagl@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(113, 'Evangelina Bautista Álvarez', 'Evabat312@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(114, 'cesar lopez aldana', 'caldanys@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(115, 'jose luis parra bañales', 'luispabanales@hotmail.es', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(116, 'Maribel Martinez Garcia', 'maribel.80@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(117, 'Raunel Olivares Martínez', 'transparenciasmdif2017.2021@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(118, 'Denisse Joselin Meza Ibarra', 'Joselin35@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(119, 'Rafael Alejandro Suarez Espinosa', 'rasenay@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(120, 'Héctor Gabriel González Salazar', 'hectorgonzaleztele10@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(121, 'MARIA ELIZABETH LIZARRAGA FLETES', 'edu.ely.lizarraga@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(122, 'Paola Beltrán ', 'financieros.sspenay@gmail.com ', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(123, 'Fernanda Blancarte González ', 'ferblancarteg@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(124, 'Norma Espinoza Gòmez', 'NormaEspinoza@nay.conalep.edu.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(125, 'Victor Hugo Ortega Cardenas', 'victorortega@sedeconay.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(126, 'Guadalupe Lizet Hernández Cruz', 'liz_hc19@hotmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(127, 'Alvaro Alberto Gascón Alvarez', 'agasconalvarez@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(129, 'Ariana Elizabeth Mejia Naranjo', 'admongralsspe@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(130, 'Carlos Alberto de los Santos Vargas', 'admoncmdhbb@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(131, 'Claudia Suggey Ibarra Rodríguez', 'transparencia@srtn.nayarit.gob.mx', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(132, 'Guillermo Jahir Osorio González', 'guillermoosorio86@gmail.com', 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(134, 'José María Ruiz Covarrubias ', NULL, 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(135, 'Mayra Yuriria López Young ', NULL, 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(136, 'OMAR IVAN CAMACHO DE LUNA', NULL, 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)'),
(137, 'Monica Janet Mora Martínez ', NULL, 'Funcionalidades y Manejo del Sistema de Portales de Obligaciones de Transparencia (SIPOT)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallermonitoreosobligaciones`
--

CREATE TABLE `tallermonitoreosobligaciones` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext NOT NULL,
  `correo` mediumtext DEFAULT NULL,
  `taller` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tallermonitoreosobligaciones`
--

INSERT INTO `tallermonitoreosobligaciones` (`id`, `nombre`, `correo`, `taller`) VALUES
(1, 'Georgina Mayela Ponce Arrambide ', 'Mayeponce8@hotmail.com ', 'Obligaciones de Transparencia y Llenado de Formatos'),
(2, 'María Alejandra raygoza gomez', 'ale__72@hormail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(3, 'Melissa Elizabeth Ortega Ochoa', 'Melissa_ortega94@hotmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(4, 'Pedro Armando López Mejía ', 'Lopezmejia_armando@hotmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(5, 'Diana Mildreth Vázquez Dorado', 'dianam_vd@hotmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(6, 'MARIA DEL CARMEN DE HARO TOPETE', 'carmendeharotopete@gmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(7, 'Wenceslao Alvarez Robles', 'vencealvarez@hotmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(8, 'Giovanni resendiz gonzalez', 'transparencia@oromapas.xalisco.gob.mx', 'Obligaciones de Transparencia y Llenado de Formatos'),
(9, 'Luis Antonio Garabito Rodríguez ', 'luis_venarro@hotmail.com ', 'Obligaciones de Transparencia y Llenado de Formatos'),
(10, 'Rocio jazmin castro moya', 'rcastro@nayarit.gob.mx', 'Obligaciones de Transparencia y Llenado de Formatos'),
(11, 'Maria Asuncion Carrillo Bañuelos ', 'oroxalinformatica@gmail.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(12, 'Martin Gerardo Gutiérrez Cervantes ', 'martin _g19@outlook.com', 'Obligaciones de Transparencia y Llenado de Formatos'),
(13, 'Alvaro Alberto Gascón Alvarez', 'agasconalvarez@gmail.com', 'Obligaciones de Transparencia y Llenado de Formatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallerpersonalesgeneralidades`
--

CREATE TABLE `tallerpersonalesgeneralidades` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `taller` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tallerpersonalesgeneralidades`
--

INSERT INTO `tallerpersonalesgeneralidades` (`id`, `nombre`, `correo`, `taller`) VALUES
(1, 'Juan Carlos González ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(2, 'JOHANA DEL CONSUELO PARRA CARRILLO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(4, 'Karla paola Rangel ochoa', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(5, 'Shiurabe Montserrat López González', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(6, 'L. C. GABRIELA DENISE GONZÁLEZ DE ALBA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(7, 'JORGE DELGADILLO RODRIGUEZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(8, 'Natalia Zamorano Sánchez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(9, 'Omar Israel Moya Gómez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(10, 'Abisai Arias Velazquez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(11, 'Raunel Olivares Martínez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(12, 'LEOBARDO RUBIO RODRIGUEZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(13, 'Amalia Kesahi Gómez García', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(14, 'ENRIQUE ROSALES SILVA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(15, 'Janet Luna Peña', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(16, 'RUBEN OMAR TORRES BARRAGAN', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(17, 'YARELY CANDELARIA DIAZ GUTIERREZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(18, 'Martha Jazmin Cambero Villarreal ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(19, 'Rosa Lizette Díaz Medina', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(20, 'Wendy Elizabeth Cambero González', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(21, 'IRENE CECILIA NAVARRETE DELGADILLO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(22, 'Christian Francisco Mayo Uribe ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(23, 'Benito RuizGaytan Godinez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(24, 'LIC. MARTIN ALEJANDRO OLMEDO LOMELI', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(25, 'Iris Isabelina Medina Rodríguez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(26, 'Kateline Patricia González Cervantes', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(27, 'José maría Ruiz Covarrubias', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(28, 'FANNY LIZBETH CONTRERAS OCEGUEDA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(29, 'Maria de Lourdes Gonzalez Mojarro', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(30, 'Maria Asuncion Carrillo Bañuelos', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(31, 'Moisés Ernesto Rodríguez Martínez  (PROEPAOT)', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(32, 'Silvia Norelvy Preciado Fletes', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(33, 'MELISSA ELIZABETH ORTEGA OCHOA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(34, 'Alonso González Caton', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(35, 'Lilia Maricruz Trejo Cabrera', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(36, 'Fátima Azucena Tapia Silva', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(37, 'Omar Alejandro Cruz Flores', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(38, 'Ana Nataly Hernández Rubio', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(39, 'ADRIANA MARCELA MACIEL ZEPEDA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(40, 'Claudia Celina Guardado Olea', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(41, 'Janice Elizabeth Gutierrez Garcia', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(42, 'GUILLERMO JAHIR OSORIO GONZÁLEZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(43, 'Manuel Alberto Herrera Solis', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(44, 'Dina Libni Lara Castillo', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(45, 'Sarabi Jazmin Reynaga Martinez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(46, 'jennifer perez altamirano', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(47, 'Yessica Jaciber Torres Gomez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(48, 'JORGE JAVIER MAYORGA BRIZO ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(49, 'JESSICA ALEJANDRA SANTILLAN CARRILLO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(50, 'LOURDES GABRIELA JIMÉNEZ AGRAZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(51, 'José Hermosillo Martínez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(52, 'Sujey Elizabeth Pérez Zúñiga ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(53, 'PERLA RUBI CURIEL HERRERA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(54, 'Ivan alejandro naya Rodríguez ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(55, 'OLIVIA MACIAS GUARDADO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(56, 'Fernanda Meza ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(57, 'RAFAEL ALEJANDRO SUAREZ ESPINOSA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(58, 'Víctor Antonio González Godínez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(59, 'Ingrid Carranza Villegas ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(60, 'Irving Armando Haro Lopez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(61, 'PATRICIA ELIZABETH VILLALOBOS FLORES', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(62, 'Sahara Saynukari Lomeli Hernandez ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(63, 'Austria Verónica Arteaga Rivera ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(64, 'Alicia Anahí Castañeda Arcineda', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(65, 'Raquel Rodríguez Mayorga', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(66, 'José Eduardo González Pacheco', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(67, 'Alfonso Willibaldo Tarula Martinez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(68, 'Carlos Enrique Ibarra Rodriguez ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(69, 'Zulma Yadira Judith Fernández Medina', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(70, 'Abril Marilú Cervantes Avilés', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(71, 'Adán Francisco Reynoso Luna ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(72, 'Luis Alfredo Guillén Heredia ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(73, 'Blanca Priscila Aguirre Barron', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(74, 'Laura Susana González Flores', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(75, 'Claudia Maribel Castro Moya', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(76, 'Dunia García Victoria', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(77, 'Brenda Lizeth Perez Arjona', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(78, 'Faustino Arce Montoya', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(79, 'IVONNE ADRIANA FUENTES MACEDO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(80, 'Belén Guadadlupe Gómez Ibarra', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(81, 'Elizabeth García rodríguez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(82, 'Alfredo Lòpez Gonzàlez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(83, 'Bélen Guadalupe Gómez Ibarra', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(84, 'Cesar Arturo Galaviz Lopez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(85, 'FRANCISCO JAVIER MACHUCA VÁZQUEZ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(86, 'Arely guadalupe Huizar Murillo', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(87, 'Arely Guadalupe Huizaar Murillo', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(88, 'Andrea Celina García Pérez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(89, 'CYNTHIA JEANNETTE TELLO MACIAS', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(90, 'Leslye Peraza aboytes ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(91, 'Julio César Luna Luna', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(92, 'Gustavo Alonso Pío Villaseñor ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(93, 'Eriberto Sandoval Gallardo ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(94, 'Dora celia cervantes castañeda', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(95, 'imelda nava murillo', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(96, 'Myriam Rocío Tirado Zúñiga ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(97, 'Fabiola Aguiat', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(98, 'Chistrian Gabriel Rodriguez Ayon', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(99, 'Yesenia Rodríguez Flores', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(100, 'pedro quezadaduarte', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(101, 'Eduardo Rafael Carrillo Rosales', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(102, 'Yeniret del Rosario Lopez Huerta', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(103, 'carla isela martinez rivera', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(104, 'sofia liliana macias garcia', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(105, 'JAZMIN KARINA MEJIA LUNA ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(106, 'Claudia Suggey Ibarra Rodríguez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(107, 'MAYRA CAROLINA HERNANDEZ PARRA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(108, 'Nicandro Villagrana Villagrana', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(109, 'Raquel Esteban Tapia', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(110, 'Laurentina Yamel Ramírez Bernal', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(111, 'Hilda Daniela Campos García', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(112, 'Carlos Daniel Avena Rivera', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(113, 'Juan Pablo López Fausto ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(114, 'Martha Ocampo Mayorga', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(115, 'CESAR LOPEZ ALDANA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(116, 'Dolores Gabriela Corona Casillas', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(117, 'JOSE LUIS PARRA BAÑALES', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(118, 'Maria Guadalupe ortiz Ceniceros', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(119, 'FLORENCIA AVILA MERCADO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(120, 'JAVIER GONZÁLEZ JARA', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(121, 'Hugo Alfonso Trejo Villa', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(122, 'Beatriz del Carmen Carrillo Rodriguez ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(123, 'Aníbal Ricardo López Vizcaíno', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(124, 'Giovanni Raya García', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(125, 'Omar Iván Mancilla Ibarría', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(126, 'YOLANDA CARRILLO AVALOS', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(127, 'GABRIELA VALLE BERNAL', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(128, 'Anahí Carolina Nieves Cosio ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(129, 'Brenda Imelda Valadez Peña', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(130, 'Sandra Nohemi Romero Becerra', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(131, 'KARLA JANET REYNOSO ROJAS', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(132, 'Jorge Iván Sánchez Mendoza', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(133, 'Paola Yuliana Cedano Rivera', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(134, 'KATIA JUDITH BERNAL MARGARITO', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(135, 'Arianna kisai Valenzuela Luna', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(136, 'Zaira Paulina Fonseca Alvarez ', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(137, 'Giovanni Resendiz Gonzalez', 'NP', 'Generalidades en Materia de Protección de Datos Personales'),
(139, 'IRENE CECILIA NAVARRETE DELGADILLO', 'transparencia@seslan.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(138, 'Mario Fitzgerald Munguía Macías', 'mariofmunguia@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(140, 'Maria del Carmen Bautista Rodriguez', 'mey-72@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(141, 'CeliaLangurén Parra', 'clanguren85@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(142, 'SELENE JAZMÍN GUZMÁN PLANTILLAS ', 'sguzman_211@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(143, 'Hanayome Gabriela Gonzalez Partida', 'hanayomeglez@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(144, 'humberto alonso ayala zaragoza', 'lic.alonso.ayala.zaragoza@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(145, 'MERCEDES LOPEZ ZUÑIGA', 'lopezzmercedes@gmai.com', 'Generalidades en Materia de Protección de Datos Personales'),
(146, 'juan francisco aguilar martinez', 'jfaguilar3@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(147, 'Benigno Castillo Velázquez', 'benigno_c@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(148, 'Paola Esmeralda Ramírez Aguirre', 'vinculación.interinstitucional@seslan.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(149, 'Ing. LUIS GILBERTO PIÑA ZAZUETA', 'serviciostecnologicos@seslan.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(150, 'Alexa Jimena Fuertes Cienfuegos ', 'transparenciamarakame@nayarit.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(151, 'Norma Patricia Arias Cisneros', 'paty122831@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(152, 'Mario Alberto Quintanar Ramirez', 'transparencia.badeba@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(153, 'Omar Arath Fregoso Tonché', 'fregosotonche.oaft@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(154, 'Zoila Curiel Zermeño', 'zoila_curiel@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(155, 'Hanayome Glez', 'hanayomeglez@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(156, 'YURI MABEL SANDOVAL RAMÍREZ', 'mabelalex_777@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(157, 'Josefina Gutiérrez Ruíz', 'chepygu@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(158, 'JUAN CARLOS INDA HERNÁNDEZ', 'jcinda.jci@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(159, 'Omar Efraín Martínez Partida', 'omar.martinez@cecyten.edu.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(160, 'ADRIANA VAZQUEZ IRIARTE', 'avi110177@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(161, 'Alexis Alvarez Ruiz', 'alexis_artach@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(162, 'Christian Alejandro Navarro Aguilar', 'implan.bahiadebanderas@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(163, 'Adrian Ricardo Álvarez Estrada', 'arq_ric_scg@outlook.com', 'Generalidades en Materia de Protección de Datos Personales'),
(164, 'Guillermina Saldaña Flores', 'transparencia@implanbadeba.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(165, 'MYRIAM ANGELICA FRANCO MONROY', 'nay_rechum@inea.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(166, 'JORGE HUMBERTO RUÍZ HERNÁNDEZ', 'jorge.9.jhrh@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(167, 'KAREN LIZETH CERVANTES MORALES', 'cermor.karen@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(168, 'José Fernando González Alcaraz', 'fer337@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(169, 'Gustavo Alonso Sánchez Ayon ', 'Gustavo.sanchez@cecyten.edu.mx ', 'Generalidades en Materia de Protección de Datos Personales'),
(170, 'Edith Patricia Martínez Partida', 'edithpatmartinez@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(171, 'Cesar ivan Patiño robles ', 'Nay_plan@inea.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(172, 'saul alfredo gonzalez polanco ', 'saulalfredogonzalezpolanco@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(173, 'BERTIN GERARDO GARCIA HERRERA', 'bert_477@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(174, 'Arq. Roberto Avila Venegas', 'papeleria.diego@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(175, 'Nelly Avila Estrada', 'nelly161204@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(176, 'Grecia Fabela Ramírez Castañeda', 'fabelaramirez2016@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(177, 'Carmen Beatriz González Alvarez', 'glezbeatriz4@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(178, 'Ricardo Loaiza Hernandez', 'ricklo73@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(179, 'Fabiola Aguiar Espinosa', 'fabys.aguiares16@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(180, 'Brisa del Carmen Ortega Cuevas', 'rechum@utnay.edu.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(181, 'Edgar Contreras Charles', 'edgar_12_17@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(182, 'Shiomara Montiel Reyes', 'shiomr@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(183, 'ANGELITA VERONICA LIMON MIRAMONTES', 'angvelis@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(184, 'Myriam González Monroy', 'myriam.monroy@nayarit.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(185, 'blanca iris rodriguez ledesma', 'tita_rol@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(186, 'Julisa abigail  arvizu meza', 'Julissa_am@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(187, 'Dina Monserrat López Domínguez ', 'lopmonse86@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(188, 'JOSE CRUZ DE LA PAZ TIRADO', 'nayarmi_johncena@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(189, 'Iris Rosario Delgadillo Pérez', 'iris-delgadillo@live.com.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(190, 'blanca iris todriguez ledesma', 'tita_rol@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(191, 'Ricardo Medina Rico', 'Arq.ricardo.1193@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(192, 'IGNACIO ARIAS GARCIA', 'administracion@seslan.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(193, 'FERNANDO RAMIREZ GONZALEZ', 'feramirgon@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(194, 'RUBI MARGARITA ROSALES MONTERO', 'teatrodelpueblo2015@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(195, 'LEONARDO ALEJANDRO DE LOERA CORNEJO', 'ar_leo@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(196, 'Luz María Rodríguez León', 'luzleon10@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(197, 'JOVANNY ADRIAN GRANADOS GONZALEZ', 'jovanny_83@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(198, 'Francisco Javier Mancillas Vazquez', 'fjmv32@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(199, 'AGUSTIN GOMEZ HERRERA', 'agh260771@outlook.com', 'Generalidades en Materia de Protección de Datos Personales'),
(200, 'Karla Irais Banderas Cruz', 'da.sederma@gmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(201, 'María Alma Noelia Orozco López', 'anol55@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(202, 'Maria Alma Noelia Orozco López', 'anol55@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(203, 'Susana Amezcua Rivera', 'susana172@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(204, 'Rosalva Alvarez Huerta', 'rous_6701@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(205, 'Humberto González Miramontes', 'humberto_gm0325@hotmail.com', 'Generalidades en Materia de Protección de Datos Personales'),
(206, 'María Angélica Ballesteros Esquivel', 'arajenyp@hotmai.com', 'Generalidades en Materia de Protección de Datos Personales'),
(207, 'Leonardo Ibarra trujillo', 'transparencia@xalisco.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(208, 'Myrna Verónica Paz Polanco', 'veropazpo@yahoo.com.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(209, 'María José Villarreal Ochoa ', 'Contacto@seslan.gob.mx', 'Generalidades en Materia de Protección de Datos Personales'),
(210, 'Dian Manuel Pacheco Lizárraga', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(211, 'Karla Patricia Robles Ulloa', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(212, 'Wendy jazmín sandoval González ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(214, 'Fabiola Aguiar Espinosa', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(215, 'Araceli Garay Díaz', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(216, 'María Félix Ibarra Rodríguez ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(217, 'TANIA ELIZABETH REYES MUÑOZ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(218, 'Teresa de Jesús Contreras Mena', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(219, 'Dalia Cristina Loera de la Torre', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(220, 'Jorge Arturo Nava Alemán', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(221, 'Maria Yamili Casillas Valdivia ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(222, 'JOSÉ GUADALUPE CAMPOS HERNÁNDEZ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(223, 'Ana Bertha Ibarra Gudiño ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(224, 'dalia loera', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(225, 'Berenice Mendoza Pérez ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(226, 'LIC. EDGAR MONTAÑO PARDO', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(227, 'Abel Aguirre Domínguez', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(228, 'Paola Melissa Hernández García', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(229, 'Amanda Patricia Gutiérrez Sandoval', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(230, 'Ruth Adriana Torres Camacho', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(231, 'Luis Manuel Robles Villanueva', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(232, 'Paulo de Jesus Benitez Catalan', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(233, 'ARIEL FERNANDO HERNANDEZ CRISTERNA', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(234, 'Laura Carolina Escobedo Núñez ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(235, 'CAROLA ANDREA CERÓN AUDELO', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(236, 'JOSE AVIGAEL JACOBO MEZA', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(237, 'JENNIFER PEREZ ALTAMIRANO', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(238, 'Mónica Janet Mora Martínez', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(239, 'Laura Karina Contreras Ramírez ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(240, 'JORGE DELGADILLO RODRIGUEZ', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(241, 'Gustavo Alonso Pío Villaseñor', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(242, 'Edit Maricarmen Miramontes Rivera', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(243, 'Alma Lorena Miramontes Rivera', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(244, 'Verónica Guadalupe Villela Espericueta', NULL, 'Generalidades en Materia de Protección de Datos Personales'),
(245, 'CINTHIA KARINA GONZÁLEZ FÉLIX', NULL, 'Generalidades en Materia de Protección de Datos Personales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `Area` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `NombrePersonal` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `NombreUsuario` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Perfil` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Contrasena` mediumtext CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `UltimaConexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `Area`, `NombrePersonal`, `NombreUsuario`, `Perfil`, `Contrasena`, `Estado`, `UltimaConexion`) VALUES
(12, 'Informatica', 'Stevens Javier Vera Enriquez ', 'StevensVera', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 1, '2021-09-27 09:17:05'),
(18, 'Informatica', 'Informatica', 'Administrador', 'Administrador', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 1, '2020-09-03 11:28:53'),
(19, 'Sujetos Obligados', 'Sujetos Obligados', 'ITAI', 'Invitado', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 1, '2021-05-05 11:12:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tallerarchivos`
--
ALTER TABLE `tallerarchivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallerinformaticasisia`
--
ALTER TABLE `tallerinformaticasisia`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `tallermonitoreosipot`
--
ALTER TABLE `tallermonitoreosipot`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallermonitoreosobligaciones`
--
ALTER TABLE `tallermonitoreosobligaciones`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `tallerpersonalesgeneralidades`
--
ALTER TABLE `tallerpersonalesgeneralidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tallerarchivos`
--
ALTER TABLE `tallerarchivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT de la tabla `tallerinformaticasisia`
--
ALTER TABLE `tallerinformaticasisia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT de la tabla `tallermonitoreosipot`
--
ALTER TABLE `tallermonitoreosipot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `tallermonitoreosobligaciones`
--
ALTER TABLE `tallermonitoreosobligaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tallerpersonalesgeneralidades`
--
ALTER TABLE `tallerpersonalesgeneralidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
