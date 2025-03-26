-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-03-2025 a las 13:53:55
-- Versión del servidor: 10.6.12-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catComisiones`
--

CREATE TABLE `catComisiones` (
  `idComision` int(11) NOT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL,
  `archivoProgramaAnual` varbinary(80) NOT NULL,
  `icono` varchar(50) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `catComisiones`
--

INSERT INTO `catComisiones` (`idComision`, `tipo`, `nombre`, `status`, `archivoProgramaAnual`, `icono`, `correo`, `orden`) VALUES
(1, 'P', 'Comisión de Administración y Presupuesto', 1, '', 'AdmPres.png', 'comision.adminypresupuesto@legisver.gob.mx', 1),
(2, 'T', 'Agricultura y Ganaderia', 0, '', '', NULL, 0),
(3, 'T', 'Agua Potable', 0, '', '', NULL, 0),
(4, 'T', 'Agua Potable y Saneamiento', 0, '', '', NULL, 0),
(5, 'T', 'Asentamientos Humanos', 0, '', '', NULL, 0),
(6, 'T', 'Asentamientos Humanos y Obras Públicas', 0, '', '', NULL, 0),
(7, 'T', 'Asistencia Pública', 0, '', '', NULL, 0),
(8, 'T', 'Asuntos Ecológicos', 0, '', '', NULL, 0),
(9, 'P', 'Comisión de Asuntos Indígenas y de las Comunidades Afrodescendientes', 1, '', 'AsunIndig.png', 'comision.asuntosindigenas@legisver.gob.mx', 3),
(10, 'E', 'Café', 0, '', '', NULL, 0),
(11, 'P', 'Comisión de Ciencia y Tecnología', 1, '', 'CienTec.png', 'comision.cienciatecnologia@legisver.gob.mx', 6),
(12, 'E', 'Citricultura', 0, '', '', NULL, 0),
(13, 'E', 'Comisión Especial de la Agroindustria de la Caña de Azúcar', 0, '', '', NULL, 0),
(14, 'E', 'Comisión Especial encargada de los Festejos del Bicentenario de la Independencia y del Centenario de la Revolución Mexicana', 0, '', '', NULL, 0),
(15, 'E', 'Comisión Especial para la Defensa de la Economía Popular y Reducción de las Tarifas Eléctricas', 0, '', '', NULL, 0),
(16, 'P', 'Comisión de Comunicaciones', 1, '', 'Comunicaciones.png', 'comision.comunicaciones@legisver.gob.mx', 7),
(17, 'T', 'Comunicaciones y Asuntos Ecológicos', 0, '', '', NULL, 0),
(18, 'T', 'Concertación Política y Procesos Electorales', 0, '', '', NULL, 0),
(19, 'E', 'De Atención a Migrantes y Transmigrantes del Estado de Veracruz', 0, '', '', NULL, 0),
(20, 'E', 'De Atención y Seguimiento a la problemática derivada de los Siniestros en Instalaciones de Petróleos Mexicanos en el Estado de Veracruz de Ignacio de la Llave', 0, '', '', NULL, 0),
(21, 'E', 'De Seguimiento al Proceso Electoral', 0, '', '', NULL, 0),
(22, 'P', 'Comisión de Población y Atención a Migrantes', 1, 0x435050414d5f506c616e20416e75616c203230313779323031382e706466, 'PobAteMig.png', 'comision.atencionmigrantes@legisver.gob.mx', 30),
(23, 'T', 'Desarrollo Agropecuario y Forestal', 0, '', '', NULL, 0),
(24, 'P', 'Comisión de Desarrollo Agropecuario, Rural y Forestal', 1, '', 'DesAgroRurFor.png', 'comision.desarrolloagro@legisver.gob.mx', 11),
(25, 'P', 'Comisión de Corredor Interoceánico, Zonas Portuarias, Mejora Regulatoria y Desarrollo Económico', 1, '', 'ZonEspDesEco.png', 'comision.desarrolloeconomico@legisver.gob.mx', 8),
(26, 'P', 'Comisión de Desarrollo Social, Humano y Regional', 0, '', 'desarrolloSocHumReg.png', 'comision.desarrollosocial@legisver.gob.mx', 0),
(27, 'P', 'Comisión de Desarrollo Urbano, Ordenamiento Territorial, Vivienda y Fundo Legal', 1, '', 'DesUrbOrdTerr.png', 'comision.desarrollourbano@legisver.gob.mx', 14),
(28, 'P', 'Comisión de Desarrollo y Fortalecimiento Municipal', 1, '', 'DesFortMun.png', 'comision.desarrollomunicipal@legisver.gob.mx', 15),
(29, 'P', 'Comisión de Editorial, Biblioteca y Archivo', 0, '', 'EditBiblioArch.png', 'comision.editorial@legisver.gob.mx', 0),
(30, 'T', 'Editorial, Correción y Estilo', 0, '', '', NULL, 1),
(31, 'T', 'Educación', 0, '', '', NULL, 0),
(32, 'T', 'Educación Pública', 0, '', '', NULL, 0),
(33, 'P', 'Comisión de Educación y Cultura', 1, '', 'EducCult.png', 'comision.educacioncultura@legisver.gob.mx', 16),
(34, 'T', 'Energéticos', 0, '', '', NULL, 0),
(35, 'E', 'Energía', 0, '', '', NULL, 0),
(36, 'P', 'Comisión para la Igualdad de Género', 1, '', 'IgualdadGenero.png', 'comision.igualdadgenero@legisver.gob.mx', 26),
(37, 'T', 'Especial del Marco normativo institucional del Edo', 0, '', '', NULL, 0),
(38, 'T', 'Especial para la Modernización', 0, '', '', NULL, 0),
(39, 'E', 'Estabilización del Precio de la Tortilla', 0, '', '', NULL, 0),
(40, 'T', 'Fomento Industrial', 0, '', '', NULL, 0),
(41, 'T', 'Fomento Industrial y Desarrollo Económico', 0, '', '', NULL, 0),
(42, 'T', 'Fometo Industrial y Desarrollo', 0, '', '', NULL, 0),
(43, 'P', 'Comisión de Participación Ciudadana, Gestoría y Quejas', 1, '', 'PartCiudadanaGestQuejas.png', 'comision.particiudadana@legisver.gob.mx', 28),
(44, 'P', 'Comisión de Gobernación', 1, '', 'Gobernacion.png', 'comision.gobernacion@legisver.gob.mx', 17),
(45, 'P', 'Comisión de Hacienda del Estado', 1, 0x68616369656e646179616374612e706466, 'Hacienda.png', 'comision.haciendaestado@legisver.gob.mx', 18),
(46, 'P', 'Comisión de Hacienda Municipal', 1, '', 'HaciendaMunicipal.png', 'comision.haciendamunicipal@legisver.gob.mx', 19),
(47, 'E', 'Comisión Especial para la Atención de la Industria Azucarera, Alcoholera y Derivados', 0, '', 'ComEspAtenIndAzucarera.png', 'comision.atencionindustria@legisver.gob.mx', 0),
(48, 'P', 'Comisión Instructora', 1, '', 'InstructoraLXV.png', 'comision.instructora@legisver.gob.mx', 20),
(49, 'T', 'Juntas de mejoramiento moral, civico y material', 0, '', '', NULL, 0),
(50, 'P', 'Comisión de Justicia y Puntos Constitucionales', 1, '', 'JusticiaPuntosConstitucionales.png', 'comision.justicia@legisver.gob.mx', 21),
(51, 'P', 'Comisión de Juventud, Deporte y Atletas con Discapacidad', 1, '', 'JuventudDeporteAtletasDisc.png', 'comision.juventuddeporte@legisver.gob.mx', 22),
(52, 'P', 'Comisión de Límites Territoriales Intermunicipales', 1, '', 'LimitesTerritorialesIntermun.png', 'comision.limitesterritoriales@legisver.gob.mx', 23),
(53, 'P', 'Comisión de Medio Ambiente, Recursos Naturales y Cambio Climático', 1, '', 'MedioAmbRecNatyCambioClimatico.png', 'comision.medioambiente@legisver.gob.mx', 24),
(54, 'E', 'Modernización del Marco Normativo Institucional del Estado', 0, '', '', NULL, 0),
(55, 'T', 'Obras Públicas', 0, '', '', NULL, 0),
(56, 'P', 'Comisión de Organización Política y Procesos Electorales', 1, '', 'OrgPoliticaProcesosElectorales.png', 'comision.organizacionpolitica@legisver.gob.mx', 25),
(57, 'E', 'Para la evaluación de acciones y aplicación de recursos del FONDEN', 0, '', '', NULL, 0),
(58, 'T', 'Planeación Municipal', 0, '', '', NULL, 0),
(59, 'T', 'Planeación Municipal de Reservas Territoriales', 0, '', '', NULL, 0),
(60, 'T', 'Planeación Municipal y del Ramo 033', 0, '', '', NULL, 0),
(61, 'P', 'Comisión de Procuración de Justicia', 1, '', 'ProcuracionJusticia.png', 'comision.procuracionjusticia@legisver.gob.mx', 32),
(62, 'T', 'Procuración y Seguridad Pública', 0, '', '', NULL, 0),
(63, 'T', 'Protección a la Infancia', 0, '', '', NULL, 0),
(64, 'P', 'Comisión de Protección Civil', 1, '', 'ProteccionCivil.png', 'comision.proteccioncivil@legisver.gob.mx', 33),
(65, 'T', 'Reservas Territoriales y Municipales', 0, '', '', NULL, 0),
(66, 'E', 'Responsabilidades de los Servidores Públicos Municipales', 0, '', '', NULL, 0),
(67, 'P', 'Comisión de Salud y Asistencia', 1, 0x434f4d4953494f4e444553414c5544594153495354454e4349412e706466, 'SaludyAsistencia.png', 'comision.saludyasistencia@legisver.gob.mx', 34),
(68, 'E', 'Seguimiento a las Obras de Construcción del Libramiento de Xalapa', 0, '', '', NULL, 0),
(69, 'E', 'Seguimiento al Programa Integral de Saneamiento de la Ciudad de Xalapa', 0, '', '', NULL, 0),
(70, 'P', 'Comisión de Seguridad Pública', 1, 0x504c414e2044452054524142414a4f2059204f464943494f5320494e5649544143494f4e205345472050554220323031382e706466, 'SeguridadPublica.png', 'comision.seguridadpublica@legisver.gob.mx', 35),
(71, 'P', 'Comisión de Seguridad Social', 1, '', 'SeguridadSocial.png', 'comision.seguridadsocial@legisver.gob.mx', 36),
(72, 'P', 'Comisión de Trabajo y Previsión Social', 1, '', 'TrabajoPrevSocial.png', 'comision.trabajoprevsocial@legisver.gob.mx', 37),
(73, 'P', 'Transporte Tránsito y Vialidad', 0, '', '', NULL, 0),
(74, 'P', 'Comisión de Transporte, Tránsito y Vialidad', 1, '', 'TransporteTranyVialidad.png', 'comision.transporte@legisver.gob.mx', 39),
(75, 'P', 'Comisión de Turismo', 1, 0x54555249534d4f2050524f4752414d4120323031372e646f6378, 'Turismo.png', 'comision.turismo@legisver.gob.mx', 40),
(76, 'P', 'Comisión de Vigilancia', 1, '', 'Vigilancia.png', 'comision.vigilancia@legisver.gob.mx', 41),
(77, 'T', 'Vigilancia de la Contaduría Mayor de Hacienda', 0, '', '', NULL, 0),
(78, 'E', 'Comisión Especial para la Reconstrucción de las Zonas Devastadas', 0, '', '', NULL, 0),
(79, 'E', 'Comisión Especial para la Agroindustria', 0, '', '', NULL, 0),
(80, 'E', 'Comisión Especial para el Fomento al Empleo y Productividad', 0, '', '', NULL, 0),
(130, 'P', 'Comisión para la Atención y Seguimiento de la Regularización y Situación Jurídica de los Predios Escolares', 1, '', 'ProcuracionJusticia.png', '', 27),
(82, 'E', 'Representantes del Congreso del Estado ante el Comité Técnico de Fideicomiso Público de Administración del Impuesto sobre Erogaciones por Remuneraciones al Trabajo Personal', 0, '', '', NULL, 0),
(83, 'P', 'Comisión de Desarrollo Metropolitano', 1, '', 'DesarrolloMetropolitano.png', 'comision.desarrollometro@legisver.gob.mx', 13),
(84, 'E', 'Comisión Especial de Desarrollo y Fortalecimiento de la Citricultura', 0, '', '', NULL, 0),
(85, 'E', 'Comisión Especial de Atención a Zonas Devastadas', 0, '', '', NULL, 0),
(86, 'E', 'Comisión Especial de Energía y Recursos Renovables', 0, '', '', NULL, 0),
(87, 'P', 'Comisión de Atención y Protección de Periodistas', 1, '', 'AtencionPeriodistas.png', 'comision.atencionperiodistas@legisver.gob.mx', 4),
(88, 'P', 'Comisión de Transparencia, Acceso a la Información y Parlamento Abierto', 1, '', 'TranspAccesoInformacion.png', 'comision.transparencia@legisver.gob.mx', 38),
(89, 'E', 'Comisión Especial del Café, del Chayote y de la Caña para el Desarollo del Estado', 0, '', '', NULL, 0),
(90, 'E', 'Comisión Especial para la Atención e Inclusión de las Personas con Discapacidad', 0, '', 'ComEspAtenPersDiscapacidad.png', 'comision.atenciondiscapacidad@legisver.gob.mx', 0),
(91, 'E', 'Comisión Especial para atender lo relativo al Cultivo, Producción y Comercialización de la Piña', 0, '', 'ComEspCultivoProdComPina.png', 'comision.cultivoproduccionpiña@legisver.gob.mx', 0),
(92, 'E', 'Comisión Especial de Vinculación en el Rescate del Centro Histórico de la Ciudad de Veracruz', 0, '', '', NULL, 0),
(93, 'P', 'Comisión de Derechos de la Niñez, la Adolescencia y la Familia', 1, '', 'DerechosNinyFamilia.png', 'comision.derechosniñez@legisver.gob.mx', 9),
(94, 'P', 'Comisión de Agua Potable y Saneamiento', 1, 0x504f4120434f4d4953494f4e20414755412e706466, 'AguaPotable.png', 'comision.aguapotable@legisver.gob.mx', 2),
(95, 'P', 'Comisión de Desarrollo Artesanal', 1, '', 'DesarrolloArtesanal.png', 'comision.desarrolloartesanal@legisver.gob.mx', 12),
(96, 'P', 'Comisión de Pesca y Acuacultura', 1, '', 'ComPescaAcuacultura.png', 'comision.pescayacuacultura@legisver.gob.mx', 29),
(97, 'P', 'Comisión de Promoción Comercial y Fomento a la Inversión', 1, '', 'ComPromComFomInv.png', 'comision.promocioncomercial@legisver.gob.mx', 31),
(98, 'E', 'Comisión Especial Para Estudiar y Proponer Alternativas a la Problemática del Instituto de Pensiones del Estado', 0, 0x50726f6772616d6120416e75616c2064652054726162616a6f204950452e706466, 'ComEspIPE.png', 'comision.institutopensiones@legisver.gob.mx', 0),
(99, 'E', 'Comisión Especial para la Vigilancia en el Cumplimiento de la Publicación de las Obligaciones de Transparencia, en la Plataforma Nacional por parte de los Sujetos Obligados en el Estado', 0, '', 'ComEspVigCumPub_PNT.png', 'comision.obligtransparencia@legisver.gob.mx', 0),
(100, 'P', 'Comisión de Derechos Humanos y Atención a Grupos Vulnerables', 1, '', 'DerHumAtenGruposVuln.png', 'comision.derechoshumanos@legisver.gob.mx', 10),
(101, 'E', 'Comisión Especial para Respetar y Garantizar el Derecho a la Verdad a la Sociedad Veracruzana, por la problemática de Personas Desaparecidas, Ataques y Homicidios a Periodistas', 0, '', 'ComEspGarDerechoVerdad.png', 'comision.verdadalasociedad@legisver.gob.mx', 0),
(127, 'P', 'Comisión de Bienestar y Desarrollo Social', 1, '', 'desarrolloSocHumReg.png', '', 5),
(103, 'E', 'Comisión Especial encargada de Analizar la Situación del Campo Veracruzano', 0, '', 'ComEspCampoVeracruzano.png', 'comision.campoveracruzano@legisver.gob.mx', 0),
(104, 'E', 'Comisión Especial de apoyo a la Junta de Coordinación Política con el objeto de brindar opinión a dicho órgano de Gobierno en el estudio y análisis del Plan Veracruzano de Desarrollo', 0, '', 'ComEspJCP_PVD.png', 'comision.juntacoordpolitica@legisver.gob.mx', 0),
(105, 'E', 'Comisión Especial para los Festejos del Centenario de la Constitución Política de los Estados Unidos Mexicanos de 1917', 0, 0x50726f6772616d6120416e75616c2e706466, 'ComEspCentenarioConstPol.png', 'comision.festejoscentenario@legisver.gob.mx', 0),
(107, 'E', 'Comisión Especial para la Verdad sobre la Deuda Pública del Estado de Veracruz de Ignacio de la Llave 1998-2016', 0, '', 'ComEspVerdad.png', '', 0),
(108, 'E', 'Comisión Especial para la Revisión Integral del Código Civil para el Estado de Veracruz de Ignacio de la Llave', 0, '', 'ComEspRevCodigoCivil.png', NULL, 0),
(118, 'E', 'Comisión Especial para atender lo relativo a la Industria del Café', 0, '', 'Cafe.png', '', 0),
(119, 'E', 'Comisión Especial para el otorgamiento de la medalla Premio Estatal de la Mujer Veracruzana 2017', 0, '', 'MedallaMujer.png', '', 0),
(124, 'E', 'Comisión Especial de la Industria Azucarera, Alcoholera y sus Derivados', 0, '', 'ComEspAtenIndAzucarera.png', '', 0),
(120, 'E', 'Comisión Especial para el otorgamiento de la medalla a la Mujer Veracruzana 2024', 0, '', 'MedallaMujer.png', '', 44),
(121, 'E', 'Comisión Especial para Detener y Revertir la Reforma Educativa', 0, '', 'ComEspDetRevRefEducativa.png', 'comesp_reformaeduc@legisver.gob.mx', 0),
(122, 'E', 'Comisión Especial para el Seguimiento a la Problemática de la Desaparición de Personas en el Estado de Veracruz', 0, '', 'ComEspSegProbDesapPersEdoVer.png', 'comision.desapariciondepersonas@legisver.gob.mx', 0),
(123, 'E', 'Comisión Especial para la Atención y Seguimiento del Cultivo, Transformación, Procesamiento y Comercialización del Café Veracruzano', 0, '', 'Cafe.png', 'comision.especialcafeveracruzano@legisver.gob.mx', 43),
(125, 'E', 'Comisión Especial para el Seguimiento a la Agenda 2030 y los Objetivos de Desarrollo Sostenible', 0, '', 'ComEspAgenda2030.png', '', 41),
(126, 'E', 'Comisión Especial para la Atención, Fomento, Producción, Industrialización y Comercialización del Cultivo del Hule Veracruzano', 0, '', 'Hule.png', '', 0),
(129, 'E', 'Comisión Especial para el Otorgamiento de la Medalla y Diploma \"Adolfo Ruiz Cortines\" 2022', 0, '', 'MedallaAdolfoRuizCortinez.png', '', 0),
(131, 'E', 'Comisión Especial para el Otorgamiento de la Medalla y Diploma “Adolfo Ruiz Cortines” correspondientes al año 2024', 1, '', 'MedallaAdolfoRuizCortinez.png', NULL, 1),
(133, 'E', 'Comisión Especial Responsable del Procedimiento para la Designación de la Persona que será Titular de la Contraloría General de la Fiscalía General del Estado', 1, '', 'Hacienda.png', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catComisiones`
--
ALTER TABLE `catComisiones`
  ADD PRIMARY KEY (`idComision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catComisiones`
--
ALTER TABLE `catComisiones`
  MODIFY `idComision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
