-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 07:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecciones_aprendidas`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidente`
--

CREATE TABLE `accidente` (
  `idaccidente` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idlesion` int(11) NOT NULL,
  `idprincipio` int(11) NOT NULL,
  `accion1` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `accion2` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `accion3` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `descripcion` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `img1` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `img2` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `leccion` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `raiz1` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `correctiva1` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `tipo2` int(11) NOT NULL,
  `raiz2` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `correctiva2` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `tipo3` int(11) DEFAULT NULL,
  `raiz3` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `correctiva3` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `tipo4` int(11) DEFAULT NULL,
  `raiz4` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `correctiva4` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `comprobado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `accidente`
--

INSERT INTO `accidente` (`idaccidente`, `idlinea`, `fecha`, `idtipo`, `idlesion`, `idprincipio`, `accion1`, `accion2`, `accion3`, `descripcion`, `img1`, `img2`, `leccion`, `raiz1`, `correctiva1`, `tipo2`, `raiz2`, `correctiva2`, `tipo3`, `raiz3`, `correctiva3`, `tipo4`, `raiz4`, `correctiva4`, `comprobado`) VALUES
(59, 15, '2017-02-28', 3, 18, 8, 'sdf', 'sdf', '', 'rthsghrth', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Incident.jpg', 'asdf', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(60, 37, '2018-03-06', 2, 18, 1, 'asa', 'asd', 'asd', 'asdad', '../img/2018/accidentes/principal.jpg', '../img/2018/lugares/principal.png', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(61, 81, '2018-02-28', 1, 18, 2, 'asdas', '', '', 'asas', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Incident.jpg', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(62, 37, '2018-03-06', 2, 18, 1, '56', 'asd', 'asd', 'asdad', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Incident.jpg', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(63, 2, '2018-03-05', 2, 2, 2, 'asd', '889', '998', '88', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/Incident.jpg', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(64, 1, '2018-03-07', 1, 18, 2, 'acc1', 'sd', 'sd', 'll', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Incident.jpg', 'asdfsdf', 'asd', 'acc1', 1, 'sdf', 'sd', 2, 'sdf', 'sd', 1, 'sdsdf', 'sdfas', 1),
(65, 81, '2018-02-28', 1, 18, 2, 'asdas', '', '', 'asas', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/principal.jpg', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(66, 2, '2018-03-09', 3, 12, 1, 'a', 'a', '', 'asdasd', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'g', 'a', 'acc1', 1, 'a', 'a', 0, '', '', 0, '', 'g', 1),
(67, 15, '2018-03-01', 3, 3, 1, 'a', 'a', 'a', 'a', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/Incident.jpg', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(68, 1, '2018-02-28', 1, 19, 2, 'acc1', 'df', '', 'asd', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/principal.png', 'ldsfgildfjasdf', 'dfg', 'acc1', 1, 'a', 'df', 0, 'asd', '', 0, '', '', 1),
(69, 37, '2018-03-02', 3, 1, 1, 'acc1', 'asasd', 'gdg', 'sdfasfas', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/principal.jpg', 'rte', 'qw2', 'acc1', 2, 'asd', 'asasd', 3, 'asd3', 'gdg', 3, 'as4', 'dfh', 1),
(70, 3, '2018-03-06', 1, 18, 2, 'sdf', 'sdf', 'sdf', '123', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'sdf231dfsdaa', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(71, 8, '2018-04-11', 1, 1, 4, 'acc1', 'sdfg', '', 'fhjdhgj', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'dsfgdf', 'sdf', 'acc1', 2, 'dfg', 'sdfg', 0, '', '', 0, '', '', 1),
(72, 36, '2018-03-28', 1, 18, 2, 'acc1', 'sadf', '', 'asdsdf', '../img/2018/accidentes/Incident.jpg', '../img/2018/lugares/Incident.jpg', 'asdf', 'sdf', 'acc1', 3, 'sdf', 'sadf', 0, '', '', 0, '', '', 1),
(73, 2, '2018-04-13', 1, 1, 1, 'acc1', 'asd5412545 cambio ', 'sdf', '561', '../img/2018/accidentes/principal.jpg', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'asd', 'asd', 'acc1', 2, 'asd', 'asd5412545 cambio ', 3, 'asf', 'sdf', 0, '', '', 1),
(74, 16, '2018-03-27', 2, 3, 2, 'acc1', 'fgh', 'hfg', 'dfg', '../img/2018/accidentes/Yo elijo trabajar con seguridad.jpg', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'fghfg', 'fg', 'acc1', 1, 'gh', 'fgh', 2, 'hgfg', 'hfg', 0, '', '', 1),
(75, 4, '2018-04-18', 2, 1, 2, 'asd', 'asd', '', 'asdasd', '../img/2018/accidentes/principal.png', '../img/2018/lugares/Yo elijo trabajar con seguridad.jpg', 'asd', 'asd', 'acc1', 1, 'asd', 'asd', 0, '', '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`idarea`, `area`) VALUES
(1, 'MSE1'),
(2, 'MSE-FS-LPS'),
(3, 'MSE-WS'),
(4, 'MSE-CA'),
(5, 'MSE-TS'),
(6, 'MSE-TC'),
(7, 'CLP'),
(8, 'EVR / ESM'),
(9, 'QMM'),
(10, 'TEF'),
(11, 'ATMO'),
(12, 'FCM'),
(13, 'HSE'),
(14, 'PRS'),
(15, 'BPS'),
(16, 'ENG'),
(17, 'CTG'),
(18, 'RBMX'),
(19, 'HRL'),
(20, 'VP');

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion`
--

CREATE TABLE `evaluacion` (
  `idevaluacion` int(11) NOT NULL,
  `idsam` int(11) NOT NULL,
  `idaccidente` int(11) NOT NULL,
  `evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `evaluacion`
--

INSERT INTO `evaluacion` (`idevaluacion`, `idsam`, `idaccidente`, `evaluacion`) VALUES
(309, 1, 69, 1),
(310, 2, 69, 0),
(311, 3, 69, 1),
(312, 4, 69, 0),
(313, 1, 60, 1),
(314, 2, 60, 1),
(315, 3, 60, 3),
(316, 4, 60, 2),
(317, 1, 66, 1),
(318, 2, 66, 2),
(319, 3, 66, 1),
(320, 4, 66, 3),
(321, 1, 70, 1),
(322, 2, 70, 2),
(323, 3, 70, 4),
(324, 4, 70, 3),
(325, 1, 63, 1),
(326, 2, 63, 6),
(327, 3, 63, 1),
(328, 4, 63, 1),
(329, 1, 71, 2),
(330, 2, 71, 2),
(331, 3, 71, 3),
(332, 4, 71, 6),
(333, 1, 62, 0),
(334, 2, 62, 0),
(335, 3, 62, 0),
(336, 4, 62, 0),
(337, 1, 61, 0),
(338, 2, 61, 0),
(339, 3, 61, 0),
(340, 4, 61, 0),
(341, 1, 65, 0),
(342, 2, 65, 0),
(343, 3, 65, 0),
(344, 4, 65, 0),
(345, 1, 72, 0),
(346, 2, 72, 0),
(347, 3, 72, 0),
(348, 4, 72, 0),
(349, 1, 67, 0),
(350, 2, 67, 0),
(351, 3, 67, 0),
(352, 4, 67, 0),
(357, 5, 75, 9),
(358, 5, 68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lesiones`
--

CREATE TABLE `lesiones` (
  `idlesiones` int(11) NOT NULL,
  `lesiones` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesiones`
--

INSERT INTO `lesiones` (`idlesiones`, `lesiones`) VALUES
(1, 'Caida'),
(2, 'Contusion '),
(3, 'Atrapamiento'),
(4, 'Contusion/herida'),
(5, 'Esguince cervical'),
(6, 'Esguince de dedo'),
(7, 'Esguince de hombro'),
(8, 'Esguince de mano'),
(9, 'Esguince de rodilla'),
(10, 'Esguince de tobillo'),
(11, 'Eversion'),
(12, 'Fractura'),
(13, 'Golpe'),
(14, 'Herida cortante'),
(15, 'Aplastamiento'),
(16, 'Heridas'),
(17, 'Lumbalgia'),
(18, 'Musculo esqueletico'),
(19, 'Lesion en los ojos'),
(20, 'Quemadura'),
(21, 'Contractura en rodilla'),
(22, 'Fractura de falange');

-- --------------------------------------------------------

--
-- Table structure for table `linea`
--

CREATE TABLE `linea` (
  `idlinea` int(11) NOT NULL,
  `linea` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `linea`
--

INSERT INTO `linea` (`idlinea`, `linea`, `idarea`) VALUES
(1, 'L-635', 1),
(2, 'L-638', 1),
(3, 'L-639', 1),
(4, 'L-640', 1),
(5, 'L-671', 1),
(6, 'L-676', 1),
(7, 'L-722', 1),
(8, 'Escaleras', 1),
(9, 'Pasillos Interiores', 1),
(10, 'Pasillos Exteriores', 1),
(11, 'Baños', 1),
(12, 'Oficinas Tl-106 Pte', 1),
(13, 'Otros', 1),
(14, 'L-753', 2),
(15, 'L-760', 2),
(16, 'L-756', 2),
(17, 'L-751', 2),
(18, 'L-752', 2),
(19, 'L-754', 2),
(20, 'L-755', 2),
(21, 'L-757', 2),
(22, 'L-768', 2),
(23, 'L-762', 2),
(24, 'L-759', 2),
(25, 'L-917', 2),
(26, 'L-750', 2),
(27, 'L-761', 2),
(28, 'L-763', 2),
(29, 'L-765', 2),
(30, 'L-764', 2),
(31, 'L-767', 2),
(32, 'L-918', 2),
(33, 'L-766', 2),
(34, 'Otros', 2),
(35, 'L-073', 3),
(36, 'L-074', 3),
(37, 'L-076', 3),
(38, 'L-078', 3),
(39, 'L-000', 3),
(40, 'L-070', 3),
(41, 'L-071', 3),
(42, 'L-030', 3),
(43, 'L-041', 3),
(44, 'L-012', 3),
(45, 'L-015', 3),
(46, 'L-007', 3),
(47, 'L-019', 3),
(48, 'L-020', 3),
(49, 'L-072', 3),
(50, 'L-465', 3),
(51, 'L-464', 3),
(52, 'L-060', 3),
(53, 'L-055', 3),
(54, 'L-611', 3),
(55, 'L-082', 3),
(56, 'L-080', 3),
(57, 'L-056', 3),
(58, 'Otros', 3),
(59, 'L-002', 4),
(60, 'L-003', 4),
(61, 'L-008', 4),
(62, 'L-009', 4),
(63, 'L-013', 4),
(64, 'L-014', 4),
(65, 'L-410', 4),
(66, 'L-411', 4),
(67, 'L-006', 4),
(68, 'L-010', 4),
(69, 'L-011', 4),
(70, 'L-017', 4),
(71, 'L-018', 4),
(72, 'L-419', 4),
(73, 'L-420', 4),
(74, 'L-418', 4),
(75, 'L-421', 4),
(76, 'L-123', 4),
(77, 'L-249', 4),
(78, 'L-176', 4),
(79, 'L-033', 4),
(80, 'L-034', 4),
(81, 'L-035', 4),
(82, 'L-016', 4),
(83, 'L-021', 4),
(84, 'L-408', 4),
(85, 'L-366', 4),
(86, 'L-185', 4),
(87, 'L-407', 4),
(88, 'L-246-A', 4),
(89, 'L-246-M', 4),
(90, 'L-938', 4),
(91, 'L-939', 4),
(92, 'Otros', 4),
(93, 'L-001', 5),
(94, 'L-040', 5),
(95, 'L-042', 5),
(96, 'L-043', 5),
(97, 'L-044', 5),
(98, 'L-045', 5),
(99, 'L-046', 5),
(100, 'L-047', 5),
(101, 'L-048', 5),
(102, 'L-057', 5),
(103, 'L-049', 5),
(104, 'L-050', 5),
(105, 'L-439', 5),
(106, 'L-466', 5),
(107, 'L-037', 5),
(108, 'L-038', 5),
(109, 'L-631', 5),
(110, 'L-091', 5),
(111, 'Otros', 5),
(112, 'L-771', 6),
(113, 'L-772', 6),
(114, 'L-773', 6),
(115, 'L-777', 6),
(116, 'L-769', 6),
(117, 'L-929', 6),
(118, 'L-774', 6),
(119, 'L-926', 6),
(120, 'L-247', 6),
(121, 'Otros', 6),
(122, 'Almacén de tanques', 7),
(123, 'Almacén Tl-101', 7),
(124, 'Almacén Tl-119', 7),
(125, 'AMI02 Tl-119', 7),
(126, 'Área de Baterías', 7),
(127, 'Oficinas CLP Tl-101', 7),
(128, 'Oficinas CLP Tl-101', 7),
(129, 'Oficinas CLP Tl-106', 7),
(130, 'Oficinas CLP Tl-118', 7),
(131, 'Oficinas CLP Tl-119', 7),
(132, 'Oficinas CLP Tl-120', 7),
(133, 'Oficinas CLP8 Tl-119', 7),
(134, 'Ship to line Ship to truck 101', 7),
(135, 'Ship to line Ship to truck 106', 7),
(136, 'Ship to line Ship to truck 118', 7),
(137, 'Ship to line Ship to truck 120', 7),
(138, 'Escaleras', 7),
(139, 'Pasillos Interiores', 7),
(140, 'Pasillos Exteriores', 7),
(141, 'Oficinas', 7),
(142, 'Baños', 7),
(143, 'Otros', 7),
(144, 'Lab Tl-103', 8),
(145, 'Lab Tl-109', 8),
(146, 'Lab Tl-110', 8),
(147, 'Lab Tl-115', 8),
(148, 'Lab Tl-106', 8),
(149, 'Oficina Tl-103', 8),
(150, 'Oficina Tl-109', 8),
(151, 'Oficina Tl-110', 8),
(152, 'Oficina Tl-115', 8),
(153, 'Escaleras', 8),
(154, 'Pasillos Interiores', 8),
(155, 'Pasillos Exteriores', 8),
(156, 'Oficinas', 8),
(157, 'Baños', 8),
(158, 'Otros', 8),
(159, 'LabTl-106', 9),
(160, 'LabTl-118', 9),
(161, 'LabTl-119 Ote', 9),
(162, 'LabTl-119 Pte', 9),
(163, 'LabTl-120', 9),
(164, 'Oficinas Metrología', 9),
(165, 'Taller Metrología', 9),
(166, 'Oficinas', 9),
(167, 'Baños', 9),
(168, 'Otros', 9),
(169, 'Pasillos Interiores', 10),
(170, 'Pasillos Exteriores', 10),
(171, 'Celda didáctica Tl-101', 10),
(172, 'Oficinas Tl-101', 10),
(173, 'Taller Tl-106', 10),
(174, 'Oficinas', 10),
(175, 'Baños', 10),
(176, 'Escaleras', 10),
(177, 'Otros', 10),
(178, 'Taller TL-115', 11),
(179, 'TallerTL-112', 11),
(180, 'Escaleras', 11),
(181, 'Pasillos Interiores', 11),
(182, 'Pasillos Exteriores', 11),
(183, 'Oficinas', 11),
(184, 'Baños', 11),
(185, 'Otros', 11),
(186, 'Azoteas', 12),
(187, 'Cuarto de Bombas', 12),
(188, 'Cuartos de Maquinas', 12),
(189, 'Mezanine Tl-119', 12),
(190, 'Oficinas Tl-101', 12),
(191, 'Sala de Juntas.', 12),
(192, 'Salchichas de GAS LP ', 12),
(193, 'SCRAP Tl-111', 12),
(194, 'Sub Estación', 12),
(195, 'Taller de Herrería Tl-111', 12),
(196, 'Taller de Mtto Tl-111', 12),
(197, 'Torres de Enfriamiento', 12),
(198, 'Escaleras', 12),
(199, 'Pasillos Interiores', 12),
(200, 'Pasillos Exteriores', 12),
(201, 'Oficinas', 12),
(202, 'Baños', 12),
(203, 'Otros', 12),
(204, 'Almacén de Residuos', 13),
(205, 'Estación Bombera', 13),
(206, 'Planta tratadora Tl-203', 13),
(207, 'Escaleras', 13),
(208, 'Pasillos Interiores', 13),
(209, 'Pasillos Exteriores', 13),
(210, 'Oficinas', 13),
(211, 'Baños', 13),
(212, 'Otros', 13),
(213, 'Caseta Tl-107', 14),
(214, 'Caseta Tl-117', 14),
(215, 'Estacionamiento Tl-117', 14),
(216, 'Estacionamiento Tl-201', 14),
(217, 'Escaleras', 14),
(218, 'Pasillos Interiores', 14),
(219, 'Pasillos Exteriores', 14),
(220, 'Oficinas', 14),
(221, 'Baños', 14),
(222, 'Otros', 14),
(223, 'Oficinas Tl-106 Pte', 15),
(224, 'Escaleras', 15),
(225, 'Pasillos Interiores', 15),
(226, 'Pasillos Exteriores', 15),
(227, 'Oficinas', 15),
(228, 'Baños', 15),
(229, 'Otros', 15),
(230, 'Oficinas Tl-101', 16),
(231, 'Oficinas Tl-106', 16),
(232, 'Oficinas Tl-118', 16),
(233, 'Oficinas Tl-120', 16),
(234, 'Oficinas Tl-106 Pte', 16),
(235, 'Oficinas Tl-106 Ote', 16),
(236, 'Sample shop Tl-106', 16),
(237, 'Escaleras', 16),
(238, 'Pasillos Interiores', 16),
(239, 'Pasillos Exteriores', 16),
(240, 'Oficinas', 16),
(241, 'Baños', 16),
(242, 'Otros', 16),
(243, 'Oficinas Tl-100', 17),
(244, 'Escaleras', 17),
(245, 'Pasillos Interiores', 17),
(246, 'Pasillos Exteriores', 17),
(247, 'Oficinas', 17),
(248, 'Baños', 17),
(249, 'Otros', 17),
(250, 'Área de Sorteadoras PQA', 18),
(251, 'Oficinas Tl-100 CF/ACC', 18),
(252, 'Oficinas Tl-100 CI', 18),
(253, 'Oficinas Tl-100 ITR', 18),
(254, 'Oficinas Tl-100 TAX', 18),
(255, 'Oficinas Tl-112 ATMO7', 18),
(256, 'Oficinas Tl-119 Compras', 18),
(257, 'Taller Tl-112 ATMO7', 18),
(258, 'Taller Tl-115 ATMO7', 18),
(259, 'Escaleras', 18),
(260, 'Pasillos Interiores', 18),
(261, 'Pasillos Exteriores', 18),
(262, 'Oficinas', 18),
(263, 'Baños', 18),
(264, 'Otros', 18),
(265, 'Comedor Tl-103', 19),
(266, 'Oficinas TGA Tl-101', 19),
(267, 'Oficinas Tl-100', 19),
(268, 'Salas de Capacitación', 19),
(269, 'Taller TGA Tl-101', 19),
(270, 'Escaleras', 19),
(271, 'Pasillos Interiores', 19),
(272, 'Pasillos Exteriores', 19),
(273, 'Oficinas', 19),
(274, 'Baños', 19),
(275, 'Otros', 19),
(276, 'Oficinas Tl-100', 20),
(277, 'Escaleras', 20),
(278, 'Pasillos Interiores', 20),
(279, 'Pasillos Exteriores', 20),
(280, 'Oficinas', 20),
(281, 'Baños', 20),
(282, 'Otros', 20);

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `idpermiso` int(11) NOT NULL,
  `permiso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `permiso`) VALUES
(1, 'Administrador'),
(2, 'Operador');

-- --------------------------------------------------------

--
-- Table structure for table `principio`
--

CREATE TABLE `principio` (
  `idprincipio` int(11) NOT NULL,
  `principio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principio`
--

INSERT INTO `principio` (`idprincipio`, `principio`) VALUES
(1, 'Condicion Segura'),
(2, 'Acto Seguro'),
(3, 'Reglas de Seguridad'),
(4, 'Entrenamiento'),
(5, 'Equipo de Proteccion Personal'),
(6, 'Areas Seguras'),
(7, 'Maquinaria y Equipo Seguro'),
(8, 'Ergonomia'),
(9, 'Voz de la Seguridad');

-- --------------------------------------------------------

--
-- Table structure for table `raiz`
--

CREATE TABLE `raiz` (
  `idraiz` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `raiz`
--

INSERT INTO `raiz` (`idraiz`, `nombre`) VALUES
(1, 'SRC'),
(2, 'MRC'),
(3, 'TRC');

-- --------------------------------------------------------

--
-- Table structure for table `registro_sam`
--

CREATE TABLE `registro_sam` (
  `idregsam` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idaccidente` int(11) NOT NULL,
  `accion` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `comentario` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `comentariocierre` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `fecha_compromiso` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `registro_sam`
--

INSERT INTO `registro_sam` (`idregsam`, `idlinea`, `idaccidente`, `accion`, `comentario`, `comentariocierre`, `fecha_compromiso`, `fecha_cierre`, `estado`) VALUES
(100, 70, 69, '1984', '', '159', '2018-04-04', '2018-04-03', 2),
(101, 70, 60, 'gcghjcg', '', 'cierre', '2018-03-29', '2018-03-20', 2),
(102, 70, 66, 'accion ', '', '', '2018-04-18', '0000-00-00', 1),
(103, 70, 70, 'accion correctiva 3', '', 'comentario de cierre 11', '2018-04-18', '2018-04-19', 2),
(104, 70, 63, 'accion corectiva 444', '', 'fghf', '0000-00-00', '2018-04-19', 2),
(105, 70, 71, 'dfgdfgdfg', '', '', '2018-03-27', '2018-04-19', 2),
(106, 70, 62, '', '', 'fghfg', '2018-03-28', '2018-04-19', 2),
(107, 70, 61, '', '', 'fgh', '2018-04-11', '2018-04-19', 2),
(108, 70, 65, '', '', '', '2018-04-27', '2018-04-19', 2),
(109, 70, 72, '', '', '', '2018-04-28', '0000-00-00', 1),
(110, 70, 67, '', '', '', '2018-04-24', '0000-00-00', 1),
(116, 59, 75, 'correctiva16', '', 'cierre +)', '2018-04-30', '2018-04-20', 2),
(117, 59, 68, '56151', '', '156', '2018-04-29', '2018-04-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sam`
--

CREATE TABLE `sam` (
  `idsam` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `ma` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `op` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `sam`
--

INSERT INTO `sam` (`idsam`, `idlinea`, `idusuario`, `ma`, `op`, `descripcion`) VALUES
(1, 70, 1, '7079', '1005', 'Colocar Coraza en Banda Transportadora                                                                          \r\n'),
(2, 70, 1, '2840', '1010', 'Grabado de identificación y Fecha en Coraza                    \r\n'),
(3, 70, 1, '5325', '1020', 'Colocación de coraza en Carro Transportador  '),
(4, 70, 1, '1030', '1701 & 1702', 'Ensamble de Imanes y Muelles en coraza  \r\n'),
(5, 59, 1, '1021', '0212', 'maquina'),
(6, 123, 1, '516', '618', 'maquina de L09');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `tipo` varchar(30) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`idtipo`, `tipo`) VALUES
(1, 'Accidente'),
(2, 'Incidente'),
(3, 'Enfermedad profesional');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `nombre`, `idpermiso`) VALUES
(1, '0', '0', 'Valdovinos Romero Luis Ernesto', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accidente`
--
ALTER TABLE `accidente`
  ADD PRIMARY KEY (`idaccidente`),
  ADD KEY `idlinea` (`idlinea`),
  ADD KEY `idlesion` (`idlesion`),
  ADD KEY `idprincipio` (`idprincipio`),
  ADD KEY `idtipo` (`idtipo`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indexes for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`idevaluacion`),
  ADD KEY `idaccidente` (`idaccidente`),
  ADD KEY `idsam` (`idsam`);

--
-- Indexes for table `lesiones`
--
ALTER TABLE `lesiones`
  ADD PRIMARY KEY (`idlesiones`);

--
-- Indexes for table `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `idarea` (`idarea`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indexes for table `principio`
--
ALTER TABLE `principio`
  ADD PRIMARY KEY (`idprincipio`);

--
-- Indexes for table `raiz`
--
ALTER TABLE `raiz`
  ADD PRIMARY KEY (`idraiz`);

--
-- Indexes for table `registro_sam`
--
ALTER TABLE `registro_sam`
  ADD PRIMARY KEY (`idregsam`),
  ADD KEY `registro_sam_ibfk_1` (`idlinea`),
  ADD KEY `idaccidente` (`idaccidente`);

--
-- Indexes for table `sam`
--
ALTER TABLE `sam`
  ADD PRIMARY KEY (`idsam`),
  ADD KEY `idlinea` (`idlinea`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idpermiso` (`idpermiso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidente`
--
ALTER TABLE `accidente`
  MODIFY `idaccidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `idevaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;
--
-- AUTO_INCREMENT for table `lesiones`
--
ALTER TABLE `lesiones`
  MODIFY `idlesiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `linea`
--
ALTER TABLE `linea`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;
--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `principio`
--
ALTER TABLE `principio`
  MODIFY `idprincipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `raiz`
--
ALTER TABLE `raiz`
  MODIFY `idraiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registro_sam`
--
ALTER TABLE `registro_sam`
  MODIFY `idregsam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `sam`
--
ALTER TABLE `sam`
  MODIFY `idsam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accidente`
--
ALTER TABLE `accidente`
  ADD CONSTRAINT `accidente_ibfk_1` FOREIGN KEY (`idlinea`) REFERENCES `linea` (`idlinea`),
  ADD CONSTRAINT `accidente_ibfk_2` FOREIGN KEY (`idlesion`) REFERENCES `lesiones` (`idlesiones`),
  ADD CONSTRAINT `accidente_ibfk_3` FOREIGN KEY (`idprincipio`) REFERENCES `principio` (`idprincipio`),
  ADD CONSTRAINT `accidente_ibfk_4` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`);

--
-- Constraints for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`idaccidente`) REFERENCES `accidente` (`idaccidente`),
  ADD CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`idsam`) REFERENCES `sam` (`idsam`);

--
-- Constraints for table `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `linea_ibfk_1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`);

--
-- Constraints for table `registro_sam`
--
ALTER TABLE `registro_sam`
  ADD CONSTRAINT `registro_sam_ibfk_1` FOREIGN KEY (`idlinea`) REFERENCES `linea` (`idlinea`),
  ADD CONSTRAINT `registro_sam_ibfk_2` FOREIGN KEY (`idaccidente`) REFERENCES `accidente` (`idaccidente`);

--
-- Constraints for table `sam`
--
ALTER TABLE `sam`
  ADD CONSTRAINT `sam_ibfk_1` FOREIGN KEY (`idlinea`) REFERENCES `linea` (`idlinea`),
  ADD CONSTRAINT `sam_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idpermiso`) REFERENCES `permisos` (`idpermiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
