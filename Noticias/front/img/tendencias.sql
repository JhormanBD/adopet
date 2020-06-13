-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 03:56:56
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tandencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tendencias`
--

CREATE TABLE `tendencias` (
  `id_ten` int(11) NOT NULL,
  `titulo_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_ten` int(11) DEFAULT NULL,
  `publicado_ten` date DEFAULT NULL,
  `prioridad_ten` int(11) DEFAULT NULL,
  `descrip_ten` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tendencias`
--

INSERT INTO `tendencias` (`id_ten`, `titulo_ten`, `tipo_ten`, `publicado_ten`, `prioridad_ten`, `descrip_ten`) VALUES
(14, 'FERIA EXPOCAMACOL 2016 MEDELLÃN', 1, '2017-02-26', 1, 'â€œExpoCAMACOL es el escenario comercial, de actualizaciÃ³n y negocios de la industria de la construcciÃ³n, en la cual confluye el sector empresarial y profesional de todas las actividades relacionadas con la cadena productiva de la construcciÃ³n, es la feria de materiales de construcciÃ³n catalogada por Procolombia como la mÃ¡s importante de LatinoamÃ©rica, segÃºn las proyecciones de negocios alcanzadas en este certamen.â€\r\nPescadero estÃ¡ en el mercado hace mÃ¡s de 70 aÃ±os, dedicada a la fabricaciÃ³n de productos 100% artesanales en arcilla natural, dentro de sus principales productos se encuentran: fachadas, pisos, tejas y accesorios. PESCADERO tiene aliados comerciales a nivel nacional como internacional en Centro AmÃ©rica, Sur AmÃ©rica e Islas del Caribe. Los nuevos diseÃ±os PESCADERO han sido elaborados para crear ambientes funcionales y vanguardistas. La sencillez de la arcilla armoniza con la tendencia contemporÃ¡nea creando espacios con personalidad Ãºnica y compatible con los exigentes estilos de vida actuales. Pescadero es un referente cuando de hablar de arcillas naturales se trata, su participaciÃ³n en Expocamacol la vienen realizando por mÃ¡s de 20 aÃ±os consecutivos desde que iniciaron con las exportaciones.\r\n'),
(15, 'EXPOCONSTRUCCIOÌN Y VIVIENDA COSTA RICA 2017', 1, '2017-03-02', 1, 'ExpoConstruccioÌn y Vivienda es la uÌnica feria del sector oficialmente respaldada por la CaÌmara Costarricense de la ConstruccioÌn.\r\nEsta exposicioÌn, por ser ampliamente reconocida en LatinoameÌrica, convoca a los profesionales de la industria tales como ingenieros, arquitectos, disenÌƒadores, desarrolladores, constructores, contratistas y subcontratistas de obras, responsables por la especificacioÌn, seleccioÌn y aplicacioÌn de materiales. TambieÌn, atrae a distribuidores de acabados e insumos en general, lo que tiene un efecto multiplicador en la generacioÌn de negocios para los expositores.\r\nTejar de Pescadero S.A.S hizo presencia durante dicho evento junto a su aliado comercial Ladrillera Bloque SoÌlido quien se encuentra en el mercado Costarricense hace maÌs de 90 anÌƒos.'),
(16, 'PROYECTO DESTACADO: CONDOMINIO MESA DE LOS SANTOS', 1, '2017-05-01', 1, 'El Condominio Mesa de los Santos es el Megaproyecto de la Mesa, ubicado 3 kiloÌmetros adelante del mercado campesino de Acuarela. Haciendo uso de Piso 30x30 Almendro y Matizado liÌnea exclusiva, junto con diferentes materiales, conforman un ambiente arquitectoÌnico ideal para disfrutar de espacios naturales con la calidad y sello Pescadero.'),
(17, 'ExpoconstruccioÌn & ExpodisenÌƒo', 1, '2017-05-08', 1, 'Del 16 al 21 de mayo se llevaraÌ a cabo ExpoconstruccioÌn&ExpodisenÌƒo, evento que organizan Camacol y Corferias, el cual proyecta recibir a cerca de 60.000 visitantes. La plataforma maÌs importante de la industria de la construccioÌn en LatinoameÌrica seraÌ el espacio para conocer el panorama actual del sector.â€ http://expoconstruccionyexpodiseno.com/?d=m/n/view&id=1275&i=1'),
(18, 'ExpoconstruccioÌn & ExpodisenÌƒo', 1, '2017-05-17', 1, 'Pescadero participa con la AsociaciÃ³n de Industriales de Arcilla de Norte de Santander, INDUARCILLA en la 14ava Feria ExpoconstruccÃ­on & ExpodiseÃ±o 2017 en BogotÃ¡ del 16 al 21 de mayo, presentando nuestra lÃ­nea de acabados  arquitectÃ³nicos.'),
(19, 'DEGRES', 1, '2017-05-30', 1, 'DEGRES, nuestro aliado comercial en la cuidad de MedellÃ­n - Colombia, es la sala destacada del mes, ya que por su compromiso y liderazgo con nuestra marca PESCADERO, sigue consolidÃ¡ndose en el sector de los acabados arquitectÃ³nicos de arcilla. Los invitamos a visitar sus renovadas salas de ventas en Naranjal, Guayabal y Sabaneta. http://www.degrescolombia.com/'),
(20, 'ARQUIGRES', 1, '2017-08-04', 1, 'ARQUIGRES, nuestro aliado comercial en la ciudad de Bucaramanga - Colombia, es la sala destacada del mes, dedicada a las comercializaciÃ³n de materiales e insumos para el sector de la ConstrucciÃ³n y la DecoraciÃ³n y que por su compromiso y liderazgo con nuestra marca PESCADERO, sigue consolidÃ¡ndose en el sector de los acabados arquitectÃ³nicos de arcilla para ambientes rÃºsticos y contemporÃ¡neos. Los invitamos a visitar su renovada sala de ventas http://www.arquigres.com/ '),
(21, 'CUBIERTAS PESCADERO', 1, '2017-08-04', 1, 'Nuestras Cubiertas Pescadero presentan caracterÃ­sticas especiales en diseÃ±o que las hacen ideales a la hora de incorporarlas a los diferentes proyectos, dÃ¡ndoles asÃ­ un toque Ãºnico y diferente. Contamos con dos alternativas de cubiertas: teja romana y plana, en tres gamas color Almendro, Matizado y Tabaco. Conoce mÃ¡s de nuestros productos en http://www.pescadero.com.co/teja-plana.html  http://www.pescadero.com.co/teja-romana.html'),
(22, 'C.C CANTARRANA', 1, '2017-08-16', 1, 'Nuestro proyecto destacado del mes es el Centro Comercial Cantarrana. Proyecto de locales comerciales y de servicios EN VIA DE ORO DEL ORIENTE ANTIOQUEÃ‘O Km 4 vÃ­a La Ceja - San Antonio. \r\nHaciendo uso de nuestras Fachaletas 7x25cm lÃ­nea exclusiva en sus gamas Arena, Almendro, Matizado y Tabaco, la CONSTRUCTORA FP CIVILES SAS, crea diseÃ±os Ãºnicos, combinando colores y formas de instalaciÃ³n, en ambientes modernos con alto valor arquitectÃ³nico.'),
(23, 'TONI CUMELLA â€“ CERÃ€MICA CUMELLA ', 1, '2017-10-26', 1, 'El prestigioso arquitecto europeo Toni Cumella Vendrell, ganador del Premio Catalunya ConstrucciÃ³n, recibiÃ³ a Noralba PÃ©rez y Dolly Sabogal en representaciÃ³n de Tejar de Pescadero, en su taller cerÃ¡mico, CERÃMICA CUMELLA, en Granollers, Barcelona (EspaÃ±a). Toni Cumella es hijo del afamado Antoni Cumella, quien en vida se especializÃ³ en el gres destinado a la arquitectura. Entre los reconocidos trabajos de esta afamada empresa familiar se encuentra el pabellÃ³n de EspaÃ±a para la exposiciÃ³n universal de Aichi, la cubierta del mercado de Santa Caterina en Barcelona y la fachada de Villa Nurbs, recibiendo el premio nacional de artesanÃ­a en 2009.'),
(25, 'FERIA CERSAIE', 1, '2017-10-26', 1, 'El pasado mes de Septiembre, Tejar de Pescadero estuvo presente en CERSAIE, Bologna(Italy), la mayor feria internacional del Sector CerÃ¡mico, que reÃºne a los profesionales, distribuidores, arquitectos, diseÃ±adores de interiores, empresas de exposiciÃ³n y las grandes sociedades de la construcciÃ³n provenientes de los cinco continentes.'),
(26, 'CASA EN CONJUNTO RESIDENCIAL ALTOS DE YERBABUENA -BOGOTÃ', 1, '2018-03-16', 1, 'Localizada en el Conjunto Residencial Altos de Yerbabuena, BogotÃ¡, la vivienda presenta diferentes espacios haciendo uso de nuestros productos PESCADERO, tanto en pisos, como accesorios y decorados. Exaltando las nuevas tendencias en diseÃ±o, el gran protagonista del proyecto destacado del mes es el Piso 40x20 Tabaco LÃ­nea Exclusiva; un formato para espacios modernos con el toque Ãºnico y caracterÃ­stico de los productos de arcilla.'),
(27, 'PROYECTO PARQUE OROCUÃ‰ - CASANARE', 1, '2018-06-22', 1, 'Nuestro proyecto destacado del mes ubicado en OrocuÃ©, Casanare, con una extensiÃ³n superior a 2500m2 en parques lineales de este municipio, generan un lugar de esparcimiento demarcado por medio de diferentes materiales, como nuestro piso PESCADERO 25x25 Almendro lÃ­nea exclusiva que juega un papel fundamental, puesto que revitaliza con su color los proyectos y a su vez genera contraste con el entorno y el uso de la Malla Andaluz enmarca y rompe con la planaridad de tonos a lo largo de estos espacios. '),
(28, 'EXPOCAMACOL 2018', 1, '0000-00-00', 1, 'Una vez mÃ¡s estaremos presentes en la XXIII ediciÃ³n de la Feria Internacional Expocamacol en la ciudad de MedellÃ­n - Colombia.  VisÃ­tanos en el PabellÃ³n Amarillo, Stand 23, donde encontrarÃ¡s toda nuestra lÃ­nea de acabados arquitectÃ³nicos de arcilla con diseÃ±os exclusivos e innovadores que dan a tus espacios un toque de sobriedad y elegancia. \r\nâ€œExpoCAMACOL es el escenario comercial, de actualizaciÃ³n y negocios de la industria de la construcciÃ³n, en la cual confluye el sector empresarial y profesional de todas las actividades relacionadas con la cadena productiva de la construcciÃ³n.â€ http://www.expocamacol.com/es/inicio/ \r\nSe llevarÃ¡ a cabo del 22 al 25 de agosto en Plaza Mayor, Exposiciones y Convenciones, Calle 41 NÂ° 55-80, MedellÃ­n, Colombia. Te esperamos.'),
(29, 'FERIA EXPOCAMACOL 2018', 1, '2018-07-18', 1, 'Una vez mÃ¡s estaremos presentes en la XXIII ediciÃ³n de la Feria Internacional Expocamacol en la ciudad de MedellÃ­n - Colombia.  VisÃ­tanos en el PabellÃ³n Amarillo, Stand 23, donde encontrarÃ¡s toda nuestra lÃ­nea de acabados arquitectÃ³nicos de arcilla con diseÃ±os exclusivos e innovadores que dan a tus espacios un toque de sobriedad y elegancia. \r\nâ€œExpoCAMACOL es el escenario comercial, de actualizaciÃ³n y negocios de la industria de la construcciÃ³n, en la cual confluye el sector empresarial y profesional de todas las actividades relacionadas con la cadena productiva de la construcciÃ³n.â€ http://www.expocamacol.com/es/inicio/ \r\nSe llevarÃ¡ a cabo del 22 al 25 de agosto en Plaza Mayor, Exposiciones y Convenciones, Calle 41 NÂ° 55-80, MedellÃ­n, Colombia. Te esperamos\r\n'),
(30, 'TEJAR DE PESCADERO - FERIA EXPOCAMACOL 2018', 1, '2018-08-25', 1, 'En la pasada Feria Expocamacol 2018, Tejar de Pescadero realizÃ³ el lanzamiento para el sector edificador con sus productos ecolÃ³gicos y sostenibles bajo el nombre de Bello Arte, su nueva colecciÃ³n con propuestas de decorados y persianas arquitectÃ³nicas donde las formas, curvas, relieves y colores fueron los principales protagonistas, sin dejar atrÃ¡s la lÃ­nea clÃ¡sica y tradicional de pisos y fachadas. Esta propuesta generÃ³ un alto impacto ante los visitantes quienes exaltaron la gran labor de innovaciÃ³n y tendencias de la arcilla.'),
(40, 'TEJAR DE PESCADERO - FERIA EXPOCAMACOL 2018', 1, '2018-09-14', 1, 'En la pasada Feria Expocamacol 2018, Tejar de Pescadero realizÃ³ el lanzamiento para el sector edificador con sus productos ecolÃ³gicos y sostenibles bajo el nombre de Bello Arte, su nueva colecciÃ³n con propuestas de decorados y persianas arquitectÃ³nicas donde las formas, curvas, relieves y colores fueron los principales protagonistas, sin dejar atrÃ¡s la lÃ­nea clÃ¡sica y tradicional de pisos y fachadas. Esta propuesta generÃ³ un alto impacto ante los visitantes quienes exaltaron la gran labor de innovaciÃ³n y tendencias de la arcilla.'),
(41, 'EFIDA 2018', 1, '2018-09-30', 1, 'Tejar de Pescadero presente en la Feria Internacional de Acabados 2018, EFIDA, organizada por nuestro aliado comercial en PanamÃ¡, ELMEC, donde una vez mÃ¡s exaltaron el valor arquitectÃ³nico de nuestros productos en cuanto a diseÃ±o, textura y color, manteniendo nuestro posicionamiento en productos naturales de arcilla, y ofreciendo nuestros diferentes acabados para pisos, fachadas, cubiertas y decorados a arquitectos, constructoras y clientes en general. '),
(42, 'Felices Fiestas', 1, '0000-00-00', 1, ''),
(44, 'Feliz Año Nuevo 2019', 1, '0000-00-00', 1, ''),
(45, 'PROYECTO CASA EN ALTOS DE VALLE DORADO, CHORRERA, PANAMÃ', 1, '2019-01-19', 1, 'El Sr. Miguel Angel Saenz quien actualmente reside en Vancouver, CanadÃ¡, e inspirado en la naturaleza, desea que su casa de descanso localizada a las afueras de ciudad de PanamÃ¡ en la provincia de Chorrera,  proyecte sus acabados con materiales naturales, y buscando la mejor calidad, visita tiendas Elmec- Chorrera donde atravÃ©s de una excelente asesorÃ­a seleccionan nuestros productos de arcilla, siendo protagonistas el piso Corcho 12.5, tapetes para decoraciÃ³n y espacato en su fachada principal, y combinado con la naturaleza de esta zona, transforma el espacio con el toque Ãºnico de Pescadero.'),
(46, 'MACRORRUEDA BICENTENARIO PROCOLOMBIA 2019', 1, '2019-12-13', 1, 'Hicimos presencia en la Macrorrueda de negocios Bicentenario Procolombia 2019, evento que se llevÃ³ a cabo del 3 al 5 de Abril en BogotÃ¡, el cual tiene como estrategia el aprovechamiento de los tratados de libre comercio, diversificaciÃ³n de mercados y de promociÃ³n de la oferta exportable.'),
(51, 'adsfdgh fasfasf', 1, '2019-12-20', 1, 'adsfghjk'),
(52, 'afgh', 1, '2019-12-13', 1, 'dsgfhmj,khfghj'),
(53, 'fsdgfhjj', 1, '0000-00-00', 1, 'asdasdas'),
(54, 'sdfghbsdfgnh', 1, '2019-12-17', 1, 'sdfghjkl');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tendencias`
--
ALTER TABLE `tendencias`
  ADD PRIMARY KEY (`id_ten`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tendencias`
--
ALTER TABLE `tendencias`
  MODIFY `id_ten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
