-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.25.130
-- Generation Time: Sep 21, 2024 at 02:44 AM
-- Server version: 8.0.32
-- PHP Version: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `campos`
--

CREATE TABLE `campos` (
  `id_campo` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('input','checkbox') DEFAULT NULL,
  `seccion` varchar(100) DEFAULT NULL,
  `order` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campos`
--

INSERT INTO `campos` (`id_campo`, `nombre`, `tipo`, `seccion`, `order`) VALUES
(1, 'peinado', 'checkbox', 'apariencia', 1),
(2, 'despeinado', 'checkbox', 'apariencia', 2),
(3, 'limpio', 'checkbox', 'apariencia', 3),
(4, 'sucio', 'checkbox', 'apariencia', 4),
(5, 'vestimenta inadecuada', 'checkbox', 'apariencia', 5),
(6, 'vestimenta adecuada', 'checkbox', 'apariencia', 6),
(7, 'delgada', 'checkbox', 'apariencia', 7),
(8, 'gorda', 'checkbox', 'apariencia', 8),
(9, 'obesa', 'checkbox', 'apariencia', 9),
(10, 'acne', 'checkbox', 'apariencia', 10),
(11, 'manchas', 'checkbox', 'apariencia', 11),
(12, 'discapacidad', 'checkbox', 'apariencia', 12),
(13, 'indiferente', 'checkbox', 'conducta', 1),
(14, 'confiable', 'checkbox', 'conducta', 2),
(15, 'agresiva', 'checkbox', 'conducta', 3),
(16, 'hostil', 'checkbox', 'conducta', 4),
(17, 'evasiva', 'checkbox', 'conducta', 5),
(18, 'defensiva', 'checkbox', 'conducta', 6),
(19, 'sugestiva', 'checkbox', 'conducta', 7),
(20, 'impulsiva', 'checkbox', 'conducta', 8),
(21, 'demandante', 'checkbox', 'conducta', 9),
(22, 'insegura', 'checkbox', 'conducta', 10),
(23, 'normal', 'checkbox', 'conducta', 11),
(24, 'otros', 'input', 'conducta', 12),
(25, 'hiperactividad', 'checkbox', 'motora', 1),
(26, 'hipo actividad', 'checkbox', 'motora', 2),
(27, 'impulsividad', 'checkbox', 'motora', 3),
(28, 'agresividad', 'checkbox', 'motora', 4),
(29, 'llanto', 'checkbox', 'motora', 5),
(30, 'intranquilidad', 'checkbox', 'motora', 6),
(31, 'tranquilidad', 'checkbox', 'motora', 7),
(32, 'agitacion', 'checkbox', 'motora', 8),
(33, 'nevioso', 'checkbox', 'motora', 9),
(34, 'normal', 'checkbox', 'motora', 10),
(35, 'postura relajada', 'checkbox', 'motora', 11),
(36, 'postura encogida', 'checkbox', 'motora', 12),
(37, 'postura erecta', 'checkbox', 'motora', 13),
(38, 'postura rigida', 'checkbox', 'motora', 14),
(39, 'postura provocadora', 'checkbox', 'motora', 15),
(40, 'postura seductora', 'checkbox', 'motora', 16),
(41, 'flexible', 'checkbox', 'motora', 17),
(42, 'seria', 'checkbox', 'motora', 18),
(43, 'despreocupada', 'checkbox', 'motora', 19),
(44, 'tics', 'input', 'motora', 100),
(45, 'Mirada fija', 'checkbox', 'motora', 21),
(46, 'mirada indirecta', 'checkbox', 'motora', 22),
(47, 'mirada dura', 'checkbox', 'motora', 23),
(48, 'mirada suave', 'checkbox', 'motora', 24),
(49, 'mirada baja', 'checkbox', 'motora', 25),
(50, 'mirada asustadiza', 'checkbox', 'motora', 26),
(51, 'confusion', 'checkbox', 'conciencia', 1),
(52, 'delirio', 'checkbox', 'conciencia', 2),
(53, 'consciente', 'checkbox', 'conciencia', 3),
(54, 'inconsciente', 'checkbox', 'conciencia', 4),
(55, 'balanceado', 'checkbox', 'animo', 1),
(56, 'euforico', 'checkbox', 'animo', 2),
(57, 'deprimido', 'checkbox', 'animo', 3),
(58, 'irritable', 'checkbox', 'animo', 4),
(59, 'angustiado', 'checkbox', 'animo', 5),
(60, 'tensionado', 'checkbox', 'animo', 6),
(61, 'panico', 'checkbox', 'animo', 7),
(62, 'afecto inapropiado', 'checkbox', 'animo', 8),
(63, 'tranquilo', 'checkbox', 'animo', 9),
(64, 'normal', 'checkbox', 'animo', 10),
(65, 'culpa', 'checkbox', 'animo', 11),
(66, 'tristeza', 'checkbox', 'animo', 12),
(67, 'ansiedad', 'checkbox', 'animo', 13),
(68, 'Fuga de ideas', 'checkbox', 'pensamiento', 1),
(69, 'bloqueo', 'checkbox', 'pensamiento', 2),
(70, 'incoherente', 'checkbox', 'pensamiento', 3),
(71, 'normal', 'checkbox', 'contenido', 1),
(72, 'delirios de grandeza', 'checkbox', 'contenido', 1),
(73, 'persecucion', 'checkbox', 'contenido', 1),
(74, 'autoacusacion', 'checkbox', 'contenido', 1),
(75, 'minusvalia', 'checkbox', 'contenido', 1),
(76, 'hipocondria', 'checkbox', 'contenido', 1),
(77, 'fobias', 'checkbox', 'contenido', 1),
(78, 'normal', 'checkbox', 'memoria', 2),
(79, 'atencion bien dirigida', 'checkbox', 'memoria', 3),
(80, 'atencion mal dirigida', 'checkbox', 'memoria', 4);

-- --------------------------------------------------------

--
-- Table structure for table `campo_valor`
--

CREATE TABLE `campo_valor` (
  `id_campo_valor` int NOT NULL,
  `id_campo` int NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_paciente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campo_valor`
--

INSERT INTO `campo_valor` (`id_campo_valor`, `id_campo`, `valor`, `id_paciente`) VALUES
(21, 24, '21`', 3),
(22, 44, '21`', 3),
(23, 24, '22', 4),
(24, 44, '22', 4),
(25, 24, '333', 6),
(26, 44, '66', 6),
(27, 24, '', 7),
(28, 44, '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id_cita` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estudiante` int NOT NULL,
  `jornada` enum('Matutina','Vespertina') NOT NULL,
  `estado_cita` enum('Reservada','Cancelada','Modificada') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paciente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`id_cita`, `fecha`, `hora`, `estudiante`, `jornada`, `estado_cita`, `estado`, `created_at`, `paciente`) VALUES
(2, '2024-07-17', '03:43:00', 3, 'Matutina', 'Modificada', 1, '2024-07-09 05:07:37', 2),
(3, '2024-09-06', '04:00:00', 1, 'Vespertina', 'Reservada', 1, '2024-09-21 00:02:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `conyugue`
--

CREATE TABLE `conyugue` (
  `id_conyugue` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ocupacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `observacion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `escolaridad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `lugar_familia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `paciente` int DEFAULT NULL,
  `estado` enum('Activo','Inactivo') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `conyugue`
--

INSERT INTO `conyugue` (`id_conyugue`, `nombre`, `ocupacion`, `observacion`, `escolaridad`, `edad`, `lugar_familia`, `direccion`, `telefono`, `paciente`, `estado`) VALUES
(2, '132', '123', '123', '123', 123, '213', '132', '13', 2, NULL),
(3, '12', '12', '12', '12', 21, '21', '12', '12', 3, NULL),
(4, '7', '7', '7', '7', 7, '7', '7', '7', 4, NULL),
(5, '', '', '', '', 0, '', '', '', 6, NULL),
(6, '', '', '', '', 0, '', '', '', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dsm`
--

CREATE TABLE `dsm` (
  `id_dsm` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `hallazgo` varchar(100) DEFAULT NULL,
  `id_paciente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dsm`
--

INSERT INTO `dsm` (`id_dsm`, `nombre`, `hallazgo`, `id_paciente`) VALUES
(3, '12', '12', 3),
(4, '999', '66', 4),
(5, '', '', 6),
(6, '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int NOT NULL,
  `carnet` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `semestre` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `genero` enum('Mujer','Hombre') NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `carnet`, `nombre`, `apellido`, `semestre`, `edad`, `lugar`, `genero`, `estado`, `id_usuario`) VALUES
(1, '89898', 'test actualizar', 'test actualizar', '6to', 22, 'Guatemala test', 'Mujer', 'Activo', 24),
(2, '4321213', 'nombre', 'apellido', 'pass', 10, 'GT', 'Hombre', 'Activo', 25),
(3, '21321', 'nnnnnnnnn', 'nn', '321', 312, 'qwewq', 'Hombre', 'Inactivo', 26);

-- --------------------------------------------------------

--
-- Table structure for table `ficha_clinica`
--

CREATE TABLE `ficha_clinica` (
  `id_ficha_clinica` int NOT NULL,
  `datos_generales` text NOT NULL,
  `situacion_familiar` text NOT NULL,
  `motivo_consulta` varchar(100) NOT NULL,
  `historia_problema` text NOT NULL,
  `historia_patologica` text NOT NULL,
  `situacion_ambiente` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `historia_personal` text NOT NULL,
  `situacion_laboral` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `examen_mental` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `apariencia_personal` text NOT NULL,
  `actitud_conducta` text NOT NULL,
  `actitud_motora` text NOT NULL,
  `conciencia` text NOT NULL,
  `animo` text NOT NULL,
  `pensamiento` text NOT NULL,
  `pruebas_auxiliares` text NOT NULL,
  `criterios_diagnostico` text NOT NULL,
  `evaluacion_dsm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `plan_terapeutico` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `metas_alcanzadas` text NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL,
  `paciente` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `padres` varchar(100) DEFAULT NULL,
  `hermanos` varchar(100) DEFAULT NULL,
  `vivecon` varchar(100) DEFAULT NULL,
  `observacionessituacion` varchar(100) DEFAULT NULL,
  `genograma` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ficha_clinica`
--

INSERT INTO `ficha_clinica` (`id_ficha_clinica`, `datos_generales`, `situacion_familiar`, `motivo_consulta`, `historia_problema`, `historia_patologica`, `situacion_ambiente`, `historia_personal`, `situacion_laboral`, `examen_mental`, `apariencia_personal`, `actitud_conducta`, `actitud_motora`, `conciencia`, `animo`, `pensamiento`, `pruebas_auxiliares`, `criterios_diagnostico`, `evaluacion_dsm`, `plan_terapeutico`, `metas_alcanzadas`, `estado`, `created_at`, `update_at`, `paciente`, `nombre`, `padres`, `hermanos`, `vivecon`, `observacionessituacion`, `genograma`) VALUES
(1, 'Datos principales', 'moderada', 'Violencia familiar', 'No existen antecedentes', 'No se sabe ', NULL, 'Historia no comentada', 'Sin acceso a empleo', NULL, 'Buenas personas', 'Normal', 'No lo se', 'Media', 'Excelente', 'No critico', 'Excelentes', 'No existen criterios', NULL, NULL, 'Todas ok', 'Activo', '2024-03-28 17:57:51', '0000-00-00 00:00:00', 1, '', NULL, NULL, NULL, NULL, NULL),
(2, '123', '123', '', '123', '123', NULL, '', '123', NULL, '123', '123', '123', '13', '213', '1', '123', '132', NULL, NULL, '123', 'Activo', '2024-07-09 01:52:36', '0000-00-00 00:00:00', 2, '', NULL, NULL, NULL, NULL, NULL),
(3, '121', '12', '12', '12', '12', NULL, '21', '12', NULL, '12', '12', '12', '12', '21', '12', '21', '12', NULL, NULL, '1212', 'Activo', '2024-07-09 01:58:22', '0000-00-00 00:00:00', 3, '', NULL, NULL, NULL, NULL, NULL),
(4, '7', '7', '7', '7', '7', NULL, '7', '7', NULL, '7', '7', '7', '7', '7', '7', '7', '7', NULL, NULL, '7', 'Activo', '2024-07-09 05:05:40', '0000-00-00 00:00:00', 4, '', NULL, NULL, NULL, NULL, NULL),
(5, '', '', '', '', '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, '', 'Activo', '2024-09-20 23:30:54', '0000-00-00 00:00:00', 6, '', 'test', 'tes', 'test', 'test', 'tes'),
(6, '', '', '', '', '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, '', 'Activo', '2024-09-20 23:45:12', '0000-00-00 00:00:00', 7, '', '20', '2', '0', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int NOT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL,
  `lugar_familia` varchar(100) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `observaciones` text NOT NULL,
  `escolaridad` varchar(100) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `estudiante` int NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `lugar`, `fecha_nacimiento`, `edad`, `sexo`, `lugar_familia`, `ocupacion`, `observaciones`, `escolaridad`, `estado_civil`, `estudiante`, `estado`, `created_at`, `nombre`) VALUES
(1, 'lugar paciente', '2024-03-03', 23, 'Mujer', 'Guatemala', 'Ama de casa', 'Es una persona agradable', 'Primaria', 'Casada', 1, 'Activo', '2024-03-28 17:57:51', 'Paciente de prueba'),
(2, '21321', '0000-00-00', 213, 'Hombre', '', '213', '312', '123', '123', 1, 'Activo', '2024-07-09 01:52:36', '123'),
(3, '1', '0012-12-21', 12, 'Hombre', '12', '12', '12', '12', '12', 1, 'Activo', '2024-07-09 01:58:22', '12'),
(4, '7', '2024-07-12', 7, 'Hombre', '7', '7', '7', '7', '7', 1, 'Activo', '2024-07-09 05:05:40', '77'),
(6, '', '0000-00-00', 0, 'Hombre', '', '', '', ' ', '', 2, 'Activo', '2024-09-20 23:30:54', ''),
(7, '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', 2, 'Activo', '2024-09-20 23:45:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `plan_terapeutico`
--

CREATE TABLE `plan_terapeutico` (
  `id_plan` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `detalle` text,
  `id_paciente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plan_terapeutico`
--

INSERT INTO `plan_terapeutico` (`id_plan`, `fecha`, `actividad`, `detalle`, `id_paciente`) VALUES
(3, '0012-12-05', '12', '12', 3),
(4, '2024-07-12', '9', '9', 4),
(5, '0000-00-00', '', '', 6),
(6, '0000-00-00', '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `situacion_familiar`
--

CREATE TABLE `situacion_familiar` (
  `id_situacion` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `escolaridad` varchar(100) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `id_paciente` int DEFAULT NULL,
  `edad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `situacion_familiar`
--

INSERT INTO `situacion_familiar` (`id_situacion`, `nombre`, `sexo`, `estado_civil`, `escolaridad`, `observacion`, `id_paciente`, `edad`) VALUES
(4, '12', '12', '12', '12', '12', 3, '21'),
(5, '12', '21', '21', '21', '12', 3, '12'),
(6, '7', '7', '7', '7', '7', 4, '7'),
(7, '', '', '', '', '', 6, ''),
(8, '', '', '', '', '', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `nombre`) VALUES
(2, 'Test de validacion mental');

-- --------------------------------------------------------

--
-- Table structure for table `test_paciente`
--

CREATE TABLE `test_paciente` (
  `id_test_paciente` int NOT NULL,
  `test` int NOT NULL,
  `paciente` int NOT NULL,
  `observaciones` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('Activo','Inactivo') NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `role` enum('admin','estudiante','paciente') DEFAULT 'admin',
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int NOT NULL DEFAULT '1',
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `clave`, `role`, `nombres`, `apellidos`, `contacto`, `created_at`, `estado`, `image`) VALUES
(4, 'soporte@informatica.com.gt', '$2y$10$3mvRdvKEHbLtI.u7lAeE5.v697SGTY2cPumZu7XZ5l.L3k6txBaPa', 'admin', 'juan', 'julios@ga', '4123213', '2024-03-09 17:21:28', 1, NULL),
(24, 'estu@miumg.edu.gt', '$2y$10$H.8KBrQoSHL96iAxpsYI0OyMCnZkcpimUvHvSryGa7UChntdDVy7e', 'admin', 'test actualizar', 'test actualizar', 'Guatemala', '2024-03-28 17:51:28', 1, NULL),
(25, 'correo', '$2y$10$BlLSU5w2yzdKOBVbd1CpT.AMnjueT.6dd.xfN3.OTSqnLa1y4XDZq', 'estudiante', 'nombre', 'apellido', 'GT', '2024-07-09 01:23:55', 1, NULL),
(26, 'admin@informatica.com.gt', '$2y$10$IXrdEjXexuJiXfRpqavncu2uia4mDAKxaLXxT4MGb/DzozDBTYUkm', 'estudiante', 'nnnnnnnnn', 'nn', 'qwewq', '2024-07-09 04:56:39', 0, NULL),
(27, 'admin@informatica.com.gt', '$2y$10$v7LrBvaSdeGlSjSXqz.LX.M0zSeT8fZlY3cmYz4VTjsW67JlcdLN2', 'estudiante', '132', '3213', '321', '2024-07-09 05:04:32', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id_campo`);

--
-- Indexes for table `campo_valor`
--
ALTER TABLE `campo_valor`
  ADD PRIMARY KEY (`id_campo_valor`),
  ADD KEY `campo_valor_paciente_FK` (`id_paciente`),
  ADD KEY `campo_valor_campos_FK` (`id_campo`);

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_paciente_fk_cita` (`paciente`),
  ADD KEY `citas_FK` (`estudiante`);

--
-- Indexes for table `conyugue`
--
ALTER TABLE `conyugue`
  ADD PRIMARY KEY (`id_conyugue`),
  ADD KEY `id_paciente_fk_conyugue` (`paciente`);

--
-- Indexes for table `dsm`
--
ALTER TABLE `dsm`
  ADD PRIMARY KEY (`id_dsm`),
  ADD KEY `dsm_paciente_FK` (`id_paciente`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `id_field_value_fk_usuario_estudiante` (`id_usuario`);

--
-- Indexes for table `ficha_clinica`
--
ALTER TABLE `ficha_clinica`
  ADD PRIMARY KEY (`id_ficha_clinica`),
  ADD KEY `id_paciente_fk_fichaclinica` (`paciente`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `paciente_FK` (`estudiante`);

--
-- Indexes for table `plan_terapeutico`
--
ALTER TABLE `plan_terapeutico`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `plan_terapeutico_paciente_FK` (`id_paciente`);

--
-- Indexes for table `situacion_familiar`
--
ALTER TABLE `situacion_familiar`
  ADD PRIMARY KEY (`id_situacion`),
  ADD KEY `situacion_familiar_paciente_FK` (`id_paciente`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `test_paciente`
--
ALTER TABLE `test_paciente`
  ADD PRIMARY KEY (`id_test_paciente`),
  ADD KEY `id_paciente_fk_test` (`paciente`),
  ADD KEY `test_fk_test` (`test`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campos`
--
ALTER TABLE `campos`
  MODIFY `id_campo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `campo_valor`
--
ALTER TABLE `campo_valor`
  MODIFY `id_campo_valor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conyugue`
--
ALTER TABLE `conyugue`
  MODIFY `id_conyugue` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dsm`
--
ALTER TABLE `dsm`
  MODIFY `id_dsm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ficha_clinica`
--
ALTER TABLE `ficha_clinica`
  MODIFY `id_ficha_clinica` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan_terapeutico`
--
ALTER TABLE `plan_terapeutico`
  MODIFY `id_plan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `situacion_familiar`
--
ALTER TABLE `situacion_familiar`
  MODIFY `id_situacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test_paciente`
--
ALTER TABLE `test_paciente`
  MODIFY `id_test_paciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campo_valor`
--
ALTER TABLE `campo_valor`
  ADD CONSTRAINT `campo_valor_campos_FK` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campo`),
  ADD CONSTRAINT `campo_valor_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_FK` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  ADD CONSTRAINT `id_paciente_fk_cita` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `conyugue`
--
ALTER TABLE `conyugue`
  ADD CONSTRAINT `id_paciente_fk_conyugue` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `dsm`
--
ALTER TABLE `dsm`
  ADD CONSTRAINT `dsm_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `id_field_value_fk_usuario_estudiante` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `ficha_clinica`
--
ALTER TABLE `ficha_clinica`
  ADD CONSTRAINT `id_paciente_fk_fichaclinica` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_FK` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id_estudiante`);

--
-- Constraints for table `plan_terapeutico`
--
ALTER TABLE `plan_terapeutico`
  ADD CONSTRAINT `plan_terapeutico_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `situacion_familiar`
--
ALTER TABLE `situacion_familiar`
  ADD CONSTRAINT `situacion_familiar_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`);

--
-- Constraints for table `test_paciente`
--
ALTER TABLE `test_paciente`
  ADD CONSTRAINT `id_paciente_fk_test` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `test_fk_test` FOREIGN KEY (`test`) REFERENCES `test` (`id_test`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;