-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 10:49:26
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `cod_cat` varchar(20) NOT NULL,
  `cod_subcat` varchar(20) NOT NULL,
  `cod_marca` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `peso` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `cod_cat`, `cod_subcat`, `cod_marca`, `nombre`, `peso`, `material`, `precio`, `descripcion`, `cantidad`, `imagen`) VALUES
(1, 'cod1', 'subcod1', 'codmarca3', 'Kriss Vector Krytac Alpine SMG', 2600, 'Polímero y metal', '659.90', 'Cargador mid cap de 100 bolas de capacidad, Culata abatible. 330 fps, Hop up ajustable, Alzas abatibles, Rail de 20 mm tanto superior como inferior, Varios modos de disparo: Tiro a tiro, doble tiro y ráfaga, Gatillo electrónico, Batería alojada en el pistolete, Ajuste del motor desde la parte inferior, Enganche para correa trasera incluido, Cadencia: 24 disparos por segundo, Diámetro del cañón interno: 6,05 mm, Largo del cañón interno: 155 mm y Rosca: 14 mm. Negativa.', 10, 'fusiles1'),
(2, 'cod1', 'subcod1', 'codmarca3', 'Krytac Barrett REC7 Carbine', 2820, 'Aluminio y polímero', '519.90', 'Officially licensed through Evike Manufacturing Group, OEM by KRYTAC, Aluminum alloy receiver, CNC machined aluminum alloy REC7 hand guard, KRISS Low Profile flip up sights, Anti-corrosion gearbox coating; Integrated MOSFET with Heat-Sink; 8mm ball bearing bushing; T-plug with Tamiya Adaptor, Easy spring access system with anchored spring guide, Ambidextrous fire selector and realistic locking bolt and bolt release, Adjustable rotary hop-up, Licensed KRISS® motor grip, and KRYTAC 6 position adjustable stock with Extended Butt-pad.', 10, 'fusiles2'),
(3, 'cod1', 'subcod1', 'codmarca3', 'Krytac Alpha SDP', 2800, 'Aluminio y polímero', '329.90', 'El modelo Alpha SDP es una carabina corta de uso versátil que se puede utilizar en combates cuerpo a cuerpo y también se desempeña bien en campo abierto. Con un agarre frontal macizo esta replica está pensada para no cargar demasiado y aprovechar su peso y dimensiones como una ventaja táctica. El cuerpo fabricado en aluminio cuenta con el marcaje Krytac hecho en relieve. Selector ambidiestro y acabado negro mate con tratamiento similar al Cerakote son otras de sus señas de identidad. El hop up de Krytac dispone de 15 posiciones de ajuste de hop up por lo que lo resulta muy sencillo su afinado. Por dentro como toda la gama Krytac dispone de cojinetes de 8 mm, engranajes reforzados, ventana en el gearbox que permite el engrase de los engranajes sin tener que abrir el gearbox, así mismo se puede cambiar también el muelle sin tener que abrir el gearbox. También dispone de mosfet y pistón con 4 dientes metálicos.', 10, 'fusiles3'),
(4, 'cod1', 'subcod1', 'codmarca5', 'Specna Arms SA-C04 Core', 2400, 'Aluminio y ABS', '134.90', 'Réplica fabricada en polímero de alta resistencia. Ris frontal fabricado en metal. Fusil de aspecto rígido, muy rápida de usar y fácil encare. Dispone de sistema de cambio de muelle rápido. Con un peso cercano a los 2700 gramos es perfecta para iniciarse en el mundo del airsoft con una réplica económica, fiable y de buen rendimiento.', 10, 'fusiles4'),
(5, 'cod1', 'subcod1', 'codmarca5', 'Specna Arms SA-G12EBB Carbine Replica', 2780, 'Aluminio y ABS', '174.90', 'Réplica fabricada en polímero con diseño inspirado en la famosa G36. Fusil de aspecto rígido, muy rápida de usar y fácil encare. Con poco menos de 3 kilos de peso esta marcadora hará las delicias de cualquier jugador de airsoft. Cargador con capacidad de 300 bb´s de 6 mm. Incorpora un sistema de cambio de muelle rápido. Potencia aproximada de 400 fps. Este modelo dispone de un sistema eléctrico de retroceso (EBB).', 10, 'fusiles5'),
(6, 'cod1', 'subcod1', 'codmarca5', 'Specna Arms SA-H09', 3045, 'Aluminio y ABS', '259.90', 'Réplica fabricada en metal con diseño inspirado en la famosa HK 416. Ris frontal fabricado en aluminio con diseño tipo Geissele. Fusil de aspecto rígido, muy rápida de usar y fácil encare. Con poco más de 3 kilos de peso esta marcadora hará las delicias de cualquier jugador de airsoft. Cargador con capacidad de 300 bb´s de 6 mm. Incorpora un sistema de cambio de muelle rápido. Potencia aproximada de 400 fps.', 10, 'fusiles6'),
(29, 'cod1', 'subcod1', 'codmarca6', 'H & K MP5A5 HC Tokyo Marui', 1800, 'Metal y ABS', '340.50', 'Subfusil H & K MP5A5 HC de Tokyo Marui, réplica eléctrica. Fabricada en metal y ABS.Muy versátil, de tamaño compacto,el MP5A5 HC de Tokyo Marui es una réplica perfecta para entornos cerrados. Dispone de dos modos de disparo (semi y automático). La característica principal es su alto rendimiento y velocidad de disparo nada menos que 25 bolas por segundo gracias al motor EG3000 HC Motor (30.000 rotaciónes por minuto). Junto a un cargador Drum con capacidad para 400 bolas del calibre 6mm.', 10, 'fusiles7'),
(30, 'cod1', 'subcod1', 'codmarca6', 'MP7A1 Tokyo Marui', 1390, 'Metal y ABS', '283.50', 'Subfusil MP7A1 Tokyo Marui, réplica eléctrica. Fabricada en metal y ABS. Culata extensible y de tamaño muy compacto el MP7A1 de Tokyo Marui es una réplica perfecta para entornos cerrados. Dispone de dos modos de disparo (semi y automático). Capacidad del cargador 50 bolas de 6 mm. Sin duda una réplica con gran alcance y versatilidad.', 10, 'fusiles8'),
(31, 'cod1', 'subcod1', 'codmarca6', 'P90 Project (Red Dot) Tokyo Marui', 2200, 'Metal y ABS', '299.90', 'Subfusil P90 Project (Red Dot ) de Tokyo Marui, réplica eléctrica. Fabricada en metal y ABS. Muy versátil, de tamaño compacto, el P90 Project de Tokyo Marui es una réplica perfecta para entornos cerrados. Dispone de dos modos de disparo (semi y automático). Viene con Red Dot incorporado, raíl Picatinny, cargador de apariencia real ya que se ven los cartuchos en el interior, la capacidad del cargador es de 68 bolas de 6mm. Modo Automático y semiautomático. Sin duda una réplica eléctrica con gran alcance y versatilidad.', 10, 'fusiles9'),
(32, 'cod1', 'subcod1', 'codmarca6', 'SOPMOD M4 Recoil Tokyo Marui', 3270, 'Full Metal + ABS ( C', '495.00', 'El fusil de asalto M4 Sopmod de Tokyo Marui es uno de los primeros modelos en incorporar el retroceso (recoil) en réplicas de airsoft. Fabricado en metal y ABS, esta réplica incorpora un sistema de parada automático cuando detecta que se ha quedado sin munición, aportando un extra de realismo. Los cargadores son específicos para esta replica. La batería va alojada en la culata con un sistema único creado por Tokyo Marui para este tipo de réplicas. Sin duda, es una de las réplicas más emblemáticas de la marca Tokyo Marui.', 10, 'fusiles10'),
(33, 'cod1', 'subcod1', 'codmarca6', 'Scorpion Mod. M Tokyo Marui', 1363, 'Polímero y metal', '259.90', 'Partiendo de la base de la scorpio VZ-61 nace esta nueva versión conocida como Scorpio Mod M fabricada por Tokyo Marui. Replica de tipo AEP pensada para entornos cerrados (CQB). A día de hoy para dicho modelo solo hay disponibles cargadores de alta capacidad (260 bbs). Funciona con batería específica, pero existen baterías de li-po pensadas para estar alojadas en el hueco que dispone específico para ello. Potencia de 240 fps.', 10, 'fusiles11'),
(34, 'cod1', 'subcod1', 'codmarca6', 'AK102 Next Gen Tokyo Marui', 2900, 'Polímero y metal', '456.90', 'Fabricante: Tokyo Marui, Hop-Up: Ajustable, Largo: 602 mm (culata plegada) / 848 mm, Longitud cañón: 260 mm, Capacidad cargador: 470 BBs, Modelo: AK102, Sistema Recoil: Si y Modo disparo: Semi-automático / Automático', 10, 'fusiles12'),
(35, 'cod1', 'subcod2', 'codmarca4', 'ESCOPETA VELITES G-XI TAN SECUTOR', 3353, 'Polímero y metal', '229.95', 'Replica accionada a gas, fabricada en polímero y metal con un peso de 3353 gramos. Dispone de 3 cañones internos y selector de tiro de 3 0 6 bolas simultaneas. El alcance máximo con caída es de aproximadamente unos 35/40 metros y la distancia máxima optima es de 30 metros. La potencia oscila entre los 270/300 fps dependiendo del gas utilizado. La autonomía máxima con cada carga de gas es de 120 disparos aproximadamente. La capacidad de los cartuchos es de 28 bolas y en el paquete se incluyen 6 cartuchos. También incluye un porta cartuchos y está equipada con un ris continuo y alzas abatibles. La cantonera de la réplica está fabricada en goma y también incorpora un sistema de enganche QD ambidiestro.', 10, 'escopetas1'),
(36, 'cod1', 'subcod2', 'codmarca6', 'M870 Wood Stock Type Tokyo Marui', 2680, 'Metal y ABS', '389.90', 'La escopeta M870 Wood Stock Typel de Tokyo Marui dispone de selector de 3 o 6 bolas a elección del jugador. Es accionada por gas y con una sola carga podemos efectuar hasta 80 disparos. Se alimenta mediante cartuchos de 30 bolas de 6 mm. La carga del cartucho de gas se realiza en la culata. Al ser el modelo de cañón largo aporta más precisión en distancia y está indicada para entornos abiertos.', 10, 'escopetas2'),
(37, 'cod1', 'subcod2', 'codmarca6', 'M870 Tactical Tokyo Marui', 2680, 'Metal y ABS', '397.90', 'La escopeta M870 Tactical de Tokyo Marui dispone de selector de 3 o 6 bolas a elección del jugador. Es accionada por gas y con una sola carga podemos efectuar hasta 80 disparos. Se alimenta mediante cartuchos de 30 bolas de 6 mm. La carga del cartucho de gas se realiza en la culata. Al ser el modelo de cañón largo aporta más precisión en distancia y está indicada para entornos abiertos.', 10, 'escopetas3'),
(38, 'cod1', 'subcod2', 'codmarca6', 'Escopeta KSG Tokyo Marui', 3, 'Metal y polímero', '459.90', 'La escopeta KSG de Tokyo Marui dispone de selector de disparo de 3 a 6 bolas. Replica accionada mediante gas.', 10, 'escopetas4'),
(39, 'cod1', 'subcod3', 'codmarca1', 'AEG STONER LMG CLASSIC ARMY (CA063M)', 4760, 'Aluminio', '494.90', 'Replica LMG Stoner de apoyo fabricada por Classic Army. Fabricada en metal y polímero. Con un peso de 4270 gramos es una réplica con culata retráctil que permite tener una movilidad muy buena con una cadencia de fuego perfecta para suprimir a varios objetivos a la vez. Cargador tipo casete para una alimentación rápida y una potencia que ronda los 390 FPS hacen de esta replica una buena opción como apoyo.', 10, 'ametralladora1'),
(40, 'cod1', 'subcod3', 'codmarca1', 'CLASSIC ARMY M249 PARA', 7600, 'Metal y polímero', '419.90', 'Hop-Up: Adjustable, Shooting Mode: Full automatic only, Magazine capacity: 300 rds, Length: 925 mm, Length (folded): 790 mm, Inner barrel length: 363 mm, Thread: 14mm CW, Motor: Short, Connection: Mini Tamiya, Caliber: 6mm, MOSFET: No, Gearboxversion: Custom, Weight: 6.5 kg and Shipping weight: 7.8 kg.', 10, 'ametralladora2'),
(41, 'cod1', 'subcod3', 'codmarca1', 'M249 MK.II Classic Army', 7200, 'Metal y polímero', '389.90', 'Réplica de apoyo con un sólo cargador tipo M4 con capacidad para 300 bolas, Potencia aproximada de 390 FPS (0,20g), Hop-Up: Adjustable, Modo de tiro: Automático, Capacidad Cargador: 300 Rds, Longitud: 1046 mm, Longitud del cañón interno: 510 mm, Motor: Short, Conector batería: Mini Tamiya, Calibre: 6mm, MOSFET: No, Versión Gearbox: Custom and Shipping weight: 7.7 kg.', 10, 'ametralladora3'),
(42, 'cod1', 'subcod4', 'codmarca4', 'Pistola Secutor CO2 Rudis Plata', 1000, 'Aluminio', '154.95', 'Pistola fabricada en aluminio con un peso de 1 kilo con el cargador incluido. La potencia aproximada es de 300 fps. El cañón interno tiene un diámetro de 6,06cm, dispone de hop up ajustable y admite cargadores tanto de gas como de CO2 por lo que es una buena opción para zonas con bajas temperaturas. Modelo con acabado plata.', 10, 'pistolas1'),
(43, 'cod1', 'subcod4', 'codmarca4', 'PISTOLA GAS Y CO2 GLADIUS 17 BRONZE SECU', 770, 'Aluminio y polímero', '174.90', 'Pistola con blowback, accionada con gas o CO2 según tipo de cargador utilizado. Potencia desde 300 fps con gas a 330 con CO2. Corredera en aluminio, diseño especifico de la corredera, con alza trasera más adelantada de lo normal para poder colocar un visor en la parte trasera y rosca delantera para colocar silenciador. Rail inferior para poder instalar linterna y laser. Pistolete con acabado tipo stippling. Diámetro del cañón interno 6,03. Sin duda una réplica bien pensada para dar un gran rendimiento.', 10, 'pistolas2'),
(44, 'cod1', 'subcod4', 'codmarca4', 'PISTOLA GAS Y CO2 GLADIUS 17 NEGRA SECUT', 770, 'Aluminio y polímero', '169.90', 'Pistola con blowback, accionada con gas o CO2 según tipo de cargador utilizado. Potencia desde 300 fps con gas a 330 con CO2. Corredera en aluminio, diseño especifico de la corredera, con alza trasera más adelantada de lo normal para poder colocar un visor en la parte trasera y rosca delantera para colocar silenciador. Rail inferior para poder instalar linterna y laser. Pistolete con acabado tipo stippling. Diámetro del cañón interno 6,03. Sin duda una réplica bien pensada para dar un gran rendimiento.', 10, 'pistolas3'),
(45, 'cod1', 'subcod4', 'codmarca6', 'Hi-CAPA Xtreme Tokyo Marui', 862, 'abs y metal', '148.80', 'La pistola Hi-CAPA Xtreme Tokyo Marui está fabricada en polímero y metal. Dispone de  sistema de blowback. La capacidad del cargador es de 31 + 1 bolas de 6mm. Es accionada mediante gas (HFC 134). La pistola Hi-CAPA Xtreme Tokyo Marui dispone sólo de disparo automático. Gracias a su cargador de alta capacidad es perfecta como secundaria para francotiradores y DMR pues aporta la potencia de fuego necesaria para poder cubrirse mientras se gana distancia con el contrario.', 10, 'pistolas4'),
(46, 'cod1', 'subcod4', 'codmarca6', 'HK USP aep Tokyo Marui', 702, 'Polímero', '149.00', 'Fabricada en polímero con 200 fps esta pistola eléctrica hará las delicias de los jugadores ya que ni frio ni calor afectan a su rendimiento. No incluye cargador ni batería. Se pueden comprar por separado.', 10, 'pistolas5'),
(47, 'cod1', 'subcod4', 'codmarca6', 'M&P9 Negra Tokyo Marui', 625, 'abs y metal', '158.50', 'La pistola M&P 9 Negra Tokyo Marui está fabricada en polímero y metal. Dispone de sistema de blowback. La capacidad del cargador es de 25 + 1 bolas de 6mm. Es accionada mediante gas (HFC 134). La M&P 9 de Tokyo Marui dispone de sistema de intercambio de la parte trasera del agarre de la pistola para adaptarse a todos los perfiles de jugador. Una pistola con alzas luminiscentes que se maneja muy bien tanto en diurno como en partidas nocturnas. Además dispone de ris inferior en la parte inferior del cañón.', 10, 'pistolas6'),
(48, 'cod2', 'subcod5', 'codmarca7', 'Culata QRS Tan VFC', 300, 'Polímero', '59.90', 'Culata QRS de Vega Force en color tan, fabricada en polímero de alta resistencia y gran calidad, con un acabado excelente, tiene un diseño ergonómico ajustable para 4 posiciones, con un robusto porta correa incorporado y cuenta con un ingenioso sistema de accionamiento por gatillo. En su parte inferior nos encontramos  con un raíl Picatinny fijo y un orificio pasante para enganche de una anilla QD Sling. Además cuenta con un compartimiento para albergar una batería e incluso alguna herramienta. Con grabados de altísima calidad.', 10, 'culatas1'),
(50, 'cod2', 'subcod5', 'codmarca8', 'Culata AR15/M4 con apoyo de mejilla inco', 400, 'Polímero', '29.90', 'Culata para fusil modelo M4, de forma ergonómica fabricada en polímero de alta calidad. Es muy resistente y ligera. Incorpora un apoyo de mejilla regulable.', 10, 'culatas2'),
(51, 'cod2', 'subcod5', 'codmarca8', 'Culata 416 a5 D-day BK', 240, 'Polímero', '19.90', 'Culata tipo 416 a5 de D-day negra, fabricada en polímero de alta resistencia y gran calidad, con un acabado excelente, tiene un diseño ergonómico ajustable para 4 posiciones, con un robusto porta correa incorporado y cuenta con un ingenioso sistema de accionamiento por gatillo.', 10, 'culatas3'),
(52, 'cod2', 'subcod6', 'codmarca8', 'SILENCIADOR AAC M4-2000', 342, 'Aluminio y acero', '39.00', 'Silenciador tipo AAC (Advanced Armament Corp.) con bocacha. Fabricado en aluminio y acero. Sistema de montaje y desmontaje rápido.', 10, 'silenciador1'),
(53, 'cod2', 'subcod6', 'codmarca8', 'Silenciador Delta corto 110 mm.', 95, 'Aluminio y acero', '17.50', 'Silenciador Delta corto, medida de largo 110 mm. Color negro, fabricado en aluminio y acero. Para rosca de -14mm- y +14mm.', 10, 'silenciador2'),
(54, 'cod2', 'subcod6', 'codmarca8', 'SILENCIADOR G&G MOCK GOMS MK3', 175, 'Aluminio', '30.90', 'Silenciador Mock Goms MK3 G&G. Fabricando en metal.', 10, 'silenciador3'),
(55, 'cod2', 'subcod7', 'codmarca8', '552 ELEMENT', 270, 'Aluminio y Acero', '40.00', 'El visor holográfico 552 con retícula rojo/verde, es uno de los modelos mas utilizados en el campo de juego, ya que ofrece varias opciones de intensidad en el punto de mira. Es regulable en alza y deriba.', 10, 'visores1'),
(56, 'cod2', 'subcod7', 'codmarca8', 'Acog 4x32 Mad Tac Optics', 405, 'Aluminio de alta cal', '89.00', 'Visor modelo Acog de 4x32 aumentos para fusil de airsoft, con fibra NO funcional. Fabicada en aluminio de alta calidad. Lente de alta calidad y con gran nitidez. Cristal anti.reflejos. Ajustable en alza y deriva.', 10, 'visores2'),
(57, 'cod2', 'subcod7', 'codmarca6', 'TOKYO MARUI Micro Pro Sight', 16, 'aluminio', '74.90', 'Lente de Rubí revestida de policarbonato resitente a los impactos directos de BBs, Peso ultra ligero de solo 16g, Longitud: 48 mm, Color del punto: Rojo, Niveles de brillo: 2, Base de montaje para riel de 20 mm incluida, Cubierta protectora incluida y Batería: CR2032 x 1.', 10, 'visores3'),
(58, 'cod3', 'subcod8', 'codmarca8', 'Casco PJ Version', 700, 'Nylon', '49.00', 'Casco ajustable con interior acolchado. Fabricado en Nylon de alta calidad. Dispone de almohadillas intercambiables, velcro superior - lateral y railes laterales. Dispone de todos los clips para los accesorios. Disponible en varios colores.', 10, 'cascos1'),
(59, 'cod3', 'subcod8', 'codmarca8', 'Casco Base Jump Helmet', 520, 'Polímero reforzado', '49.00', 'El casco FAST HELMET es de las versiones más modernas, por lo que lo utilizan unidades como los US Navy Seals entre otros. Dispone del sistema OCC Dial , el cual consta de una rueda en la zona de la nuca , que permite el ajuste de la cabeza cómodamente en su interior .Así como soporte frontal para Visores o cámaras , raíles laterales para accesorios ( linterna , gafas , Auriculares , etc.). El casco dispone de almohadillas interiores y velcros exteriores para la colocación de material, parches o fundas.', 10, 'cascos2'),
(60, 'cod3', 'subcod8', 'codmarca8', 'Casco Ballistic', 520, 'Polímero reforzado', '49.00', 'El casco Ballistic, dispone del sistema OCC Dial , el cual consta de una rueda en la zona de la nuca , que permite el ajuste de la cabeza cómodamente en su interior .Así como soporte frontal para Visores o cámaras , raíles laterales para accesorios ( linterna , gafas , Auriculares , etc.). El casco dispone de almohadillas interiores y velcros exteriores para la colocación de material, parches o fundas.', 10, 'cascos3'),
(61, 'cod3', 'subcod9', 'codmarca8', 'Chaleco táctico C.I.R.A.S.', 1650, 'Nylon', '65.00', 'Chaleco táctico Estilo MARS CIRAS. Equipado con: 1 Pouch de radio, 1 Pouch porta mapa, 1 Pouch  triple porta cargadores, 1 Pouch doble porta cargadores, 1 Pouch doble porta cargadores de pistola y 1 Pouch Sanitario o porta accesorios.', 10, 'chalecos1'),
(62, 'cod3', 'subcod9', 'codmarca8', 'Plate Carrier Tactical Jump EMERSON OD', 1700, 'Cordura 1000D y nylo', '76.90', 'Chaleco Plate Carrier Tactical Jump de Emerson, fabricado en 1000D nylon y cordura. Color OD. Ajustable en altura y contorno, sistema molle en zona posterior y frontal. Viene con 2 placas balísticas.', 10, 'chalecos2'),
(63, 'cod3', 'subcod9', 'codmarca8', 'Chaleco CONQUER MPC full set estilo BK', 3000, 'Nylon', '60.90', 'CONQUER MINI CHEST RIG: Material: Tela de nylon 1000D. --- BK, TAN, OD Tela de nylon 500D. --- Estilo MC. Capacidad: Compartimento principal: 2 cargadores tipo M4/AK + 2 cargadores de PISTOLA/SMG. Compartimento frontal: 2 cargadores tipo M4/AK + 1 cargador de PISTOLA/SMG + variedad de accesorios + 3 cartuchos de 12 + 2 elásticos multifunción. Pouch inferior: 2 cargadores tipo 7.62 en compartimento principal + bolsillo multiusos frontal + cordón elástico para sostener más complementos. 2 Pouchs Open Top laterales para usos diversos como radio, granada, pistola, botella de agua… CONQUER MODULAR PLATE CARRIER Material: Tela de nylon 1000D. --- BK, TAN, OD Tela de nylon 500D. Estilo MC Características: Diseño modular Tamaño ajustable Tejido interior transpirable Hombreras desmontables y transpirables', 10, 'chalecos3'),
(64, 'cod3', 'subcod10', 'codmarca8', 'Mochila modular médium assault 15 L', 920, 'nylon', '25.95', 'Mochila modular médium assault 15 L. Fabricada en nylon 600D. Capacidad 15 litros, con dos aperturas con cremallera y bolsillo para camelback (no incluido), en la parte frontal cuenta con 2 Bolsillos de cierre con cremallera. Ajustable con correas para adaptarla según la carga y con correas para llevarla cómodamente a la espalda, ajustándola al pecho y cintura. Por su sistema molle pueden adaptarse más complementos.', 10, 'mochilas1'),
(65, 'cod3', 'subcod10', 'codmarca8', 'Mochila Táctica 3 días Delta Tactics', 940, '600D Polyester Oxfor', '29.90', 'Mochila Táctica 3 días Delta Tactics fabricada en 600D Polyester Oxford. Con sistema Molle externo y cuenta con 3 compartimentos. Las de correas de la mochila son totalmente ajustables.', 10, 'mochilas2'),
(66, 'cod3', 'subcod10', 'codmarca8', 'Mochila modular Battle 2 Defcon5', 1400, 'Nylon', '30.00', 'La mochila modular Battle 2, está diseñanda para la comodidad del jugador en el terreno de juego. Dispone de asa de transporte y correas acolchadas ajustables. Respaldo acolchado con bolsillo oculto con orificios de salida para la antena de radio y tubo de camelbag con capacidad de 3 litros. Dispone de 1 bolsillo pequeño con cremallera doble en la parte frontal con varios compartimentos internos para la colocación de mapas, documentación o cargadores. Dispone de sistema Molle en toda la parte frontal con velcro para la insignia, escudo o name tape.', 10, 'mochilas3'),
(67, 'cod4', 'subcod11', 'codmarca8', 'Batería Li-Po 11.1V 1500 mAh 20/40C', 130, 'Lítio - Polímero', '32.90', 'La batería de Li-Po 11.1V permite una mayor densidad de energía y una descarga bastante superior. Se caracteriza por su reducido tamaño y su gran potencia. El conector es tamiya.', 10, 'bateria1'),
(68, 'cod4', 'subcod11', 'codmarca8', 'Batería Li-Po 7.4V 800 mAh', 40, 'Lítio - Polímero', '15.00', 'La batería de Li-Po 7.4V permite mayor densidad de energía y una descarga bastante superior. Dispone de dos celdas de 3.7V cada una. Se caracteriza por su reducido tamaño y su gran potencia. El conector es tamiya.', 10, 'bateria2'),
(69, 'cod4', 'subcod11', 'codmarca8', 'Batería Li-Po 7.4V 1600 mAh 20C', 87, 'Lítio y polímero', '20.90', 'La batería li-po 7.4V 1600 mAh de Duel Code, permite mayor densidad de energía y una descarga superior. Característica por su ligereza y su gran poténcia. Dispone de conector de carga mini Tamiya y conector de balanceador. Medidas especificadas en ficha de producto.', 10, 'bateria3'),
(70, 'cod4', 'subcod12', 'codmarca7', 'Bolas biodegradables Vega Force', 1000, 'Biodegradable', '15.00', 'Las bolas (bbs) biodegradables de Vega Force son conocidas por su alta calidad lo que garantiza un óptimo tiro de precisión para los jugadores mas exigentes.', 10, 'bolas1'),
(71, 'cod4', 'subcod12', 'codmarca2', 'Bolas de trazadoras Rojas Duel Code', 618, 'biodegradable', '14.95', 'Bolas de trazadoras Rojas de Duel Code en envase de 2500 bolas, gramaje de 0.20 gr. Son conocidas por el buen resultado y precisión que ofrecen. Su diámetro es de 5.95 mm +/- 0.01 mm.', 10, 'bolas2'),
(73, 'cod4', 'subcod12', 'codmarca8', 'Bolas biodegradables 0,28g Tanio Koba', 800, 'Biodegradable', '16.90', 'Las bolas (bbs) biodegradables de Tanio Koba son conocidas por su alta calidad lo que garantiza un óptimo tiro de precisión para los jugadores mas exigentes. Viene presentada en envase de 3000 unidades.', 10, 'bolas3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre`) VALUES
('cod1', 'armas'),
('cod2', 'accesorios'),
('cod3', 'equipamiento'),
('cod4', 'consumibles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `nombre` varchar(30) NOT NULL,
  `codMarca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`nombre`, `codMarca`) VALUES
('Classic Army', 'codmarca1'),
('Duel Code', 'codmarca2'),
('Krytac', 'codmarca3'),
('Secutor', 'codmarca4'),
('Specna Arms', 'codmarca5'),
('Tokyo Marui', 'codmarca6'),
('Vega Force', 'codmarca7'),
('sin marca', 'codmarca8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  `cantidad_productos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total_cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcat` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cod_cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcat`, `nombre`, `cod_cat`) VALUES
('subcod1', 'fusiles', 'cod1'),
('subcod10', 'mochilas', 'cod3'),
('subcod11', 'baterias', 'cod4'),
('subcod12', 'bolas', 'cod4'),
('subcod2', 'escopetas', 'cod1'),
('subcod3', 'ametralladoras', 'cod1'),
('subcod4', 'pistolas', 'cod1'),
('subcod5', 'culatas', 'cod2'),
('subcod6', 'silenciadores', 'cod2'),
('subcod7', 'visores', 'cod2'),
('subcod8', 'cascos', 'cod3'),
('subcod9', 'chalecos', 'cod3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `codigo_postal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`, `direccion`, `dni`, `pais`, `ciudad`, `telefono`, `codigo_postal`) VALUES
(3, 'Alexander', 'Chorolque', 'alex639plus@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Calle Cebollera, 9° 1D', '12345678Q', 'España', 'Soria', '635730289', '42001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `cod_cat_art_FK` (`cod_cat`),
  ADD KEY `cod_subcat_art_FK` (`cod_subcat`),
  ADD KEY `cod_marca_art_FK` (`cod_marca`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`codMarca`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcat`),
  ADD KEY `cod_cad_FK` (`cod_cat`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `cod_cat_art_FK` FOREIGN KEY (`cod_cat`) REFERENCES `subcategoria` (`cod_cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cod_marca_art_FK` FOREIGN KEY (`cod_marca`) REFERENCES `marcas` (`codMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cod_subcat_art_FK` FOREIGN KEY (`cod_subcat`) REFERENCES `subcategoria` (`id_subcat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `cod_cad_FK` FOREIGN KEY (`cod_cat`) REFERENCES `categoria` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
