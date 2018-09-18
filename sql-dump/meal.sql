-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018 m. Rgs 18 d. 19:53
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `recipe` text NOT NULL,
  `protein` varchar(255) DEFAULT '1',
  `carb` varchar(255) NOT NULL DEFAULT '1',
  `fat` varchar(255) NOT NULL DEFAULT '1',
  `other` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `meals`
--

INSERT INTO `meals` (`id`, `title`, `type_id`, `recipe`, `protein`, `carb`, `fat`, `other`) VALUES
(5, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13,25', '14', '16,36', '35'),
(6, 'Virti kiauÅ¡iniai su duona', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '', '20,19'),
(9, 'Virta paukÅ¡tiena su makaronais', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(27, 'BolivinÄ—s balandos koÅ¡Ä—', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(28, 'Daug baltymu du other', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(29, 'Omletas su brokoliais', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(30, 'BolivinÄ—s balandos koÅ¡Ä— 2', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(31, 'BolivinÄ—s balandos koÅ¡Ä— 3', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(32, 'BolivinÄ—s balandos koÅ¡Ä— 4', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(33, 'BolivinÄ—s balandos koÅ¡Ä—  5', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(34, 'BolivinÄ—s balandos koÅ¡Ä— 6', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(35, 'Omletas su brokoliais 2', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(36, 'Virti kiauÅ¡iniai su duona 2', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '', '20,19'),
(37, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 2', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(38, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 3', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(39, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 4', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(40, 'Virta paukÅ¡tiena su makaronais 2', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(41, 'Virta paukÅ¡tiena su makaronais 3', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(42, 'Virta paukÅ¡tiena su makaronais 4', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '33', '16', ''),
(43, 'Virta paukÅ¡tiena su makaronais 5', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '33', '', ''),
(44, 'Virta paukÅ¡tiena su makaronais 5', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '29', '', ''),
(45, 'Virta paukÅ¡tiena su makaronais 6', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(46, 'Virta paukÅ¡tiena su makaronais 7', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(47, 'BolivinÄ—s balandos koÅ¡Ä— 7', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(48, 'Virti kiauÅ¡iniai su duona 3', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '', '20,19'),
(49, 'Virti kiauÅ¡iniai su duona 4', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '16', '20,19'),
(50, 'Virti kiauÅ¡iniai su duona 5', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '28', '20,19'),
(51, 'Virti kiauÅ¡iniai su duona 6', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '16', '20,19'),
(52, 'Virti kiauÅ¡iniai su duona 7', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '16', '20,19'),
(53, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 5', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(54, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 6', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(55, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 7', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(56, 'Omletas su brokoliais 3', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(57, 'Omletas su brokoliais 4', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(58, 'Omletas su brokoliais 5', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(59, 'Omletas su brokoliais 6', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(60, 'Omletas su brokoliais 7', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(64, 'Daug baltymu du other 2', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(65, 'Daug baltymu du other 3', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(66, 'Daug baltymu du other 4', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(67, 'Daug baltymu du other 6', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(68, 'Daug baltymu du other 7', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(69, 'Daug baltymu du other 8', 6, 'Viska sumetam ismaisom ir valgom', '13,18', '21', '28', '19'),
(70, 'Omletas su brokoliais 8', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37'),
(71, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke 8', 1, 'DribsniÅ³ koÅ¡Ä— su varÅ¡ke\r\nDribsnius verdame vandenyje kaip paraÅ¡yta ant pakuotÄ—s, likus minutei iki pabaigos Ä¯ puodÄ… dedame razinas ir gerai iÅ¡maiÅ¡ome. Kol dribsniai iÅ¡virs bananÄ… supjaustome gabalÄ—liais ir kartu su likusiais ingredientais dedame Ä¯ dubenÄ—lÄ¯, galima ir iÅ¡maiÅ¡yti, kad tolygiai pasiskirstytÅ³ ingredientai. KoÅ¡ei iÅ¡virus jÄ… pilame Ä¯ dubenÄ—lÄ¯ iÅ¡maiÅ¡ome ir valgome.\r\n\r\nTurime Äempiono patiekalÄ… vyrams:) Skanaus!', '13', '14,15', '16', '35'),
(72, 'Virti kiauÅ¡iniai su duona 8', 2, 'Virti kiauÅ¡iniai su duona\r\nKietai iÅ¡verdame kiauÅ¡inius (~7-8min) ir valgome su duona, pomidorais ir agurku, uÅ¾sigeriame arbata be cukraus ar medaus.\r\n\r\nSkanaus!', '18', '21', '', '20,19'),
(73, 'Virta paukÅ¡tiena su makaronais 8', 3, 'Supjaustykite paukÅ¡tienos filÄ— smulkiais gabalÄ—liais ir virkite ~33 minutes. Likus 15 minuÄiÅ³ pradÄ—kite virti makaronus su druska ir pipirais. Smulkiau supjaustykite pomidorus ir salotas. Kietai virtÅ³ kiauÅ¡iniÅ³ trynius dÄ—kite Ä¯ dubenÄ—lÄ¯ ir sutrupinkite Å¡akute, kai makaronai iÅ¡virs nupilkite vandenÄ¯ ir dÄ—kite juos ant susmulkintÅ³ tryniÅ³ Ä¯ dubenÄ—lÄ¯ ir gerai iÅ¡maiÅ¡ykite. Tada sudÄ—kite pomidorus, salotas ir virtÄ… paukÅ¡tienÄ…. ViskÄ… gerai iÅ¡maiÅ¡ykite ir pabarstykite dÅ¾iugo sÅ«rio.\r\n\r\nGeras patiekalas, kai Å¡aldytuve prisikaupia tryniÅ³:)\r\n\r\nSkanaus!', '24', '', '', ''),
(74, 'BolivinÄ—s balandos koÅ¡Ä— 8', 4, 'BolivinÄ—s balandos koÅ¡Ä—\r\nBolivinÄ—s balandos(Kynvos, Quinoa) sÄ—klas verdame ~20 minuÄiÅ³ ant silpnos ugnies. Po 20 minuÄiÅ³ virimo Ä¯ puodÄ… dedame varÅ¡kÄ™ ir iÅ¡maiÅ¡ome. Tada viskÄ… dedame Ä¯ dubenÄ—lÄ¯ ir pagardiname uogomis su rieÅ¡utais.\r\n\r\nSkanaus!', '13', '29', '16', '31'),
(75, 'Omletas su brokoliais 8', 5, 'Omletas su brokoliais\r\nPuode uÅ¾verdame vandenÄ¯ ir suberiame kruopas virti. DubenÄ—lyje Å¡akute iÅ¡plakame smulkesniais gabalÄ—liais supjaustytÄ… brokolÄ¯, kiauÅ¡inius ir pienÄ…, viskÄ… pagal skonÄ¯ pagardiname druska ir Å¡vieÅ¾iai maltais juodaisiais pipirais. KeptuvÄ™ gerai Ä¯kaitiname ir papurÅ¡kÄ™ truputi aliejaus supilame plakinÄ¯. Omleto apaÄiai sukietÄ—jus mentele perbraukiame dugnÄ…, kad neprisviltÅ³, kai konsistencija bus gerokai tirÅ¡tesnÄ— sumaÅ¾iname ugnÄ¯ iki vidutinÄ—s, apverÄiame omletÄ… ir paliekame kelioms minutÄ—ms kepti. Jei reikia dar kepame pagal poreikÄ¯. Omletui iÅ¡kepus ir kruopos turÄ—tÅ³ bÅ«ti iÅ¡virusios.\r\n\r\nSkanaus! ', '18', '33,34', '36,28', '26,37');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `mealtypes`
--

CREATE TABLE `mealtypes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `mealtypes`
--

INSERT INTO `mealtypes` (`id`, `title`) VALUES
(1, 'Breakfast'),
(2, 'Brunch'),
(3, 'Lunch'),
(4, 'Afternoon meal'),
(5, 'Dinner'),
(6, 'Evening meal');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat` int(11) NOT NULL,
  `carb` varchar(255) NOT NULL,
  `protein` varchar(255) NOT NULL,
  `fat` varchar(255) NOT NULL,
  `kcal` varchar(255) NOT NULL,
  `use_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `products`
--

INSERT INTO `products` (`id`, `title`, `cat`, `carb`, `protein`, `fat`, `kcal`, `use_id`) VALUES
(13, 'Liesa varÅ¡kÄ—', 2, '3', '20', '1', '97', NULL),
(14, 'KeturiÅ³ grÅ«dÅ³ dribsniai ', 1, '61', '10', '3', '309', NULL),
(15, 'Bananai', 1, '23', '1', '1', '99', '15'),
(16, 'Graikiniai riesutai', 3, '13', '15', '65', '702', NULL),
(17, 'Razinos', 4, '78', '3', '1', '328', '5'),
(18, 'ViÅ¡tÅ³ kiauÅ¡iniai, M dydÅ¾io', 2, '2', '12', '7', '121', NULL),
(19, 'Agurkas', 4, '4', '1', '1', '18', '4'),
(20, 'Raudonieji pomidorai', 4, '4', '1', '1', '20', NULL),
(21, 'Duona &#34;Rugelis&#34;', 1, '46.6', '7.7', '1.3', '228.8', ''),
(22, 'GÅ«Å¾inÄ—s salotos &#34;Iceberg&#34;', 4, '3', '1', '1', '16', NULL),
(23, 'Pilno grÅ«do makaronai', 1, '75', '15', '1', '371', NULL),
(24, 'Kalakutienos krÅ«tinÄ—lÄ—s', 2, '1', '23', '1', '103', NULL),
(25, 'SÅ«ris &#34;DÅ¾iugas&#34;	', 2, '1', '33', '26', '366', ''),
(26, 'Druska', 4, '1', '1', '1', '1', '0.1'),
(28, 'ViÅ¡tÅ³ kiauÅ¡iniÅ³ tryniai, M dydÅ¾io', 3, '4', '15', '26', '316', NULL),
(29, 'BolivinÄ— balanda', 1, '64', '14', '6', '367', NULL),
(30, 'Obuolys', 4, '14', '1', '1', '57', NULL),
(31, 'SpanguolÄ—s', 4, '12', '0.39', '0.13', '51.53', '5'),
(32, 'Rope', 4, '50', '10', '5', '40', NULL),
(33, 'GrikiÅ³ kruopos, Galinta', 1, '69.3', '12.6', '3.1', '355.5', NULL),
(34, 'Brokoliai', 1, '6.64', '2.98', '0.37', '36.03', '5'),
(35, 'Pienas 2,5% rieb. ', 4, '4.7', '2.9', '2.5', '52.9', '10'),
(36, 'Pirmo spaudimo, ypaÄ tyras purÅ¡kiamas alyvuogiÅ³ aliejus &#34;La Espanola&#34;', 3, '1', '1', '92.4', '831.6', NULL),
(37, 'Juodieji pipirai', 4, '1', '1', '1', '1', '0.2'),
(38, 'Kazkas', 3, '1', '1', '100', '300', NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `types`
--

INSERT INTO `types` (`id`, `title`) VALUES
(1, 'carb'),
(2, 'protein'),
(3, 'fat'),
(4, 'other');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_rights` int(11) DEFAULT '0',
  `years` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `sex` int(1) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `activity` text NOT NULL,
  `purpose` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_rights`, `years`, `month`, `day`, `sex`, `height`, `weight`, `activity`, `purpose`, `created_at`) VALUES
(4, 'Linas Zemgulys', 'zykas911@gmail.com', '$2y$10$ITCnKkBFMSeTYoXqktChaOa01dPkMgiVzJlYm2DgfvOuLEDyBs9pu', 1, 1992, 3, 9, 1, 179, 80, '1.375', '-500', '2018-05-31 08:49:50'),
(5, 'Jonas', 'jonas@gmail.com', '$2y$10$bBCeM/grUijnx63kvZSHmOnwcM5e.2PzRVQ/dKTrktZ83MPWgQBQC', 0, 0, 0, 0, 1, 179, 80, '1.725', '500', '2018-06-21 08:49:50'),
(6, 'Rasa', 'rasa@gmail.com', '$2y$10$CAqQEoSUircGaST70eSCZ.LqaGiRRzKr8Q2ph.i5SknoAjApl4ID2', 0, 0, 0, 0, 2, 160, 80, '1.2', '-500', '2018-06-12 08:49:50'),
(7, 'Brad', 'brad@gmail.com', '$2y$10$fPhrFUzpRNW62aaPezEgqes6.7LCPX..jI9LMc7KOyTUS.WBm/qaC', 0, 0, 0, 0, 1, 179, 78, '1.55', '-500', '2018-06-14 08:49:50'),
(21, 'Vegeta', 'bradas@gmail.com', '$2y$10$iMYV1Qj/LWJOa4dne65IYO3L0UfAv4JlQSdNwb/O0BogjM06HKVCm', 0, 0, 0, 0, 1, 180, 90, '1.375', '-500', '2018-06-15 08:49:50'),
(22, 'Nikolas', 'nikolas@mora.com', '$2y$10$gabEM0pfUBuFXXv6ICdLJuHgcV2W1Jk5egqYp.iZ9IXEVE8ImiioO', 0, 0, 0, 0, 1, 185, 95, '1.375', '0', '2018-07-16 08:49:50'),
(23, 'Jane', 'jane@gmail.com', '$2y$10$tCTh2fTNqwQ8o.SNNJob0OT1QbQiTDlz2Gsa3jqpmFoX930IgVYv2', 0, 0, 0, 0, 2, 165, 65, '1.375', '-500', '2018-07-17 08:49:50'),
(24, 'galiunas', 'galiunas@gmail.com', '$2y$10$kZ.wp56btA0T3FOxEFwiXOyzSuKJHWVfDhSjqqZmCg1yP6Eqs9yXO', 0, 0, 0, 0, 1, 179, 78, '1.55', '0', '2018-07-18 08:49:50'),
(25, 'bigmom', 'bogmom@gmail.com', '$2y$10$4.Zc5f.POL79hSpaQlf3quUYG2Hv4N1nfEmuAifBX4X6FN1nAJK7e', 0, 0, 0, 0, 2, 156, 85, '1.2', '0', '2018-07-18 08:49:50'),
(26, 'babu', 'babu@gmail.com', '$2y$10$.ap/1Y6U6Lgh17BQ7J5PF.S3o.MNCllSw/AsKSEPYv.i4W9njdQUy', 0, 0, 0, 0, 1, 190, 90, '1.55', '-500', '2018-07-18 08:49:50'),
(27, 'SToras', 'Storas@gmail.com', '$2y$10$HVG8u7zwrspPAH.EH9AVcudqKHoQ4H75KEpwA9.FV42oZ6/L3Frk2', 0, 0, 0, 0, 1, 180, 100, '1.55', '-500', '2018-07-18 08:49:50'),
(28, 'testas', 'test@gmail.com', '$2y$10$cs80EX62AXhXbeyMtI9AtO.PseljfwrBa0qNL36acQ75PCaJ7OLNO', 0, 0, 0, 0, 1, 180, 100, '1.2', '-500', '2018-08-19 08:49:50'),
(29, 'testas2', 'test2@gmail.com', '$2y$10$GFKYCj5GkGrXtiwxJMhSquIwIUFLRnxY6GzaTSDPngThU.gwvIEYK', 0, 0, 0, 0, 1, 180, 100, '1.2', '-500', '2018-08-20 08:49:50'),
(30, 'test3', 'test3@gmail.com', '$2y$10$C149cAn7aRB0lf0dHEKn2u39u3f728a1ljM9ygCa2AhIXuKaYScqq', 0, 0, 0, 0, 1, 180, 100, '1.2', '-500', '2018-08-21 08:49:50'),
(31, 'test4', 'test4@gmail.com', '$2y$10$oDZqYSRHHMTIl2HTRkoXBetNUtgK2ZXVlexnzIAQl8GNOaJupR0Q.', 0, 0, 0, 0, 1, 180, 100, '1.2', '-500', '2018-08-22 08:49:50'),
(32, 'test5', 'test5@gmail.com', '$2y$10$vbRpFyh7g7N.THZfp40R3uD3bRz8ZbqNXzwLKv.AlTqqtpegyODH2', 0, 0, 0, 0, 1, 180, 100, '1.725', '+500', '2018-08-23 08:49:50'),
(33, 'Dzonas', 'dzonas@gmail.com', '$2y$10$DqSIasNFQWzVyC0iIsZrYOqMd9RdSvEfYmqkm1THAeCV.OFXEV2ny', 0, 1980, 5, 10, 1, 180, 100, '1.375', '-500', '2018-08-24 08:49:50'),
(34, 'Monika', 'monika@gmail.com', '$2y$10$dpblDWo7TyBb2lYjeVFlXOAMrXTUZ5CZgPVK3jk2XRjnbL2nKlS1G', 0, 1990, 6, 9, 2, 180, 70, '1.375', '0', '2018-08-26 08:49:50'),
(35, 'Bandytojas', 'bandytojas@gmail.com', '$2y$10$5EIr2fsMgo5CG8huG/pGmOmfxEHK.cDkvdYGg15aIvJXvkK7fiOvy', 0, 1992, 3, 9, 1, 170, 65, '1.2', '-500', '2018-09-01 14:56:13'),
(36, 'testas112', 'testas112@gmail.com', '$2y$10$ENXVvrotDkieWiv06cSnZee8UBIq7RL7Pj92kwwypzKHGYIUBx1hC', 0, 1991, 3, 14, 1, 170, 65, '1.55', '-500', '2018-09-07 15:26:42'),
(56, 'testas1', 'testas1@gmail.com', '$2y$10$CM.E0agcNypMgnWL8/Q3rOScT7/cVT3dH4l1OeHyryH9Td6q6gP6q', 0, 1990, 6, 16, 1, 170, 65, '1.375', '-500', '2018-09-07 16:51:33'),
(57, 'testas2', 'testas2@gmail.com', '$2y$10$UM8ATe0CTmFyKi1cfjT8ruYgMJFA7mmSxyxkyjH7tfqz9Wz7Q1v0G', 0, 1990, 6, 16, 1, 170, 65, '1.375', '-500', '2018-09-07 16:53:08'),
(58, 'moteris', 'moteris@gmail.com', '$2y$10$kpSvQoiivCbyweJKPnmx/OsSkPN/jcjW7Ijv0J5HRfCOyl5wMWPhm', 1, 1990, 4, 7, 2, 170, 65, '1.55', '-500', '2018-09-08 06:25:02');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `user_settings`
--

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eating_count` int(11) NOT NULL DEFAULT '6',
  `wake_up` time NOT NULL DEFAULT '06:00:00',
  `go_sleep` time NOT NULL DEFAULT '22:00:00',
  `breakfast` varchar(255) NOT NULL DEFAULT '0',
  `brunch` varchar(255) DEFAULT '0',
  `lunch` varchar(255) NOT NULL DEFAULT '0',
  `afternoon_meal` varchar(255) DEFAULT '0',
  `dinner` varchar(255) NOT NULL DEFAULT '0',
  `evening_meal` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `user_settings`
--

INSERT INTO `user_settings` (`id`, `user_id`, `eating_count`, `wake_up`, `go_sleep`, `breakfast`, `brunch`, `lunch`, `afternoon_meal`, `dinner`, `evening_meal`) VALUES
(1, 0, 6, '06:00:00', '22:00:00', '0', '0', '0', '0', '0', '0'),
(6, 6, 6, '13:00:00', '22:00:00', '27', '0', '6', '0', '9', '0'),
(7, 5, 5, '10:00:00', '00:00:00', '5', '0', '6', '0', '9', '0'),
(8, 7, 6, '06:00:00', '22:00:00', '5', NULL, '6', NULL, '9', NULL),
(9, 21, 6, '06:00:00', '22:00:00', '5', NULL, '6', NULL, '9', NULL),
(10, 23, 6, '06:00:00', '22:00:00', '5,5,5,5,5,5,5,5,5,5,5,5,5,5', NULL, '6', NULL, '9', NULL),
(11, 32, 6, '06:00:00', '22:00:00', '5', '6', '6', '27', '9', '27'),
(12, 33, 6, '07:00:00', '00:00:00', '27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27', '6,6,6,6,6,6,6,6,6,6,6,6,6,6', '6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6', '27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27', '9,9,9,9,9,9,9,9,9,9,9,9,9', '28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28'),
(16, 4, 6, '08:00:00', '22:00:00', '5,37,37,38,38,39,39,53,53,54,54,55,55,71', '6,36,36,48,48,49,49,50,51,51,52,52,72,72', '9,40,41,42,42,43,43,44,44,45,45,46,73,73', '27,30,31,32,33,34,47,27,30,31,32,33,34,47', '29,35,56,56,57,57,58,58,59,59,60,60,70,75', '29,35,56,56,57,58,58,59,60,60,70,70,75,75'),
(17, 34, 6, '06:00:00', '22:00:00', '5,37,38,39,53,54,71', '6,36,48,49,50,51,52', '9,40,41,42,44,45,46', '27,30,31,32,33,34,47', '29,35,56,57,58,59,60', '29,35,56,57,58,59,60'),
(19, 35, 6, '06:00:00', '22:00:00', '5,37,37,38,38,39,53,53,54,54,55,55,71,71', '6,36,36,48,48,49,49,50,50,51,51,52,72,72', '9,40,40,41,41,42,42,43,43,44,45,46,73,73', '27,30,30,31,31,32,33,33,34,34,47,47,74,74', '29,35,56,57,57,58,58,59,59,60,60,70,70,75', '29,56,56,57,58,58,59,59,60,60,70,70,75,75'),
(20, 36, 6, '06:00:00', '22:00:00', '5,37,37,38,39,39,53,53,54,54,55,55,71,71', '6,36,36,48,48,49,49,50,51,51,52,52,72,72', '9,40,41,41,42,42,43,44,44,45,45,46,46,73', '27,30,30,31,31,32,32,33,33,34,34,47,74,74', '29,35,35,56,56,57,57,58,58,59,59,60,70,75', '35,35,56,57,57,58,58,59,59,60,70,70,75,75'),
(24, 57, 6, '06:00:00', '22:00:00', '5,37,37,38,38,39,39,53,53,54,55,55,71,71', '6,36,36,48,48,49,49,50,51,51,52,52,72,72', '9,40,40,41,41,43,43,44,44,45,46,46,73,73', '27,30,30,31,31,32,32,33,33,34,34,47,47,74', '29,35,35,56,56,57,57,58,58,59,60,60,70,75', '29,35,56,56,57,57,58,58,59,60,70,70,75,75'),
(25, 58, 6, '06:00:00', '22:00:00', '5,39,5,39,5,39,5,39,5,39,5,39,5,39,5,39', '6,36,48,48,49,49,50,50,51,51,52,52,72,72', '9,40,40,41,41,42,42,43,43,44,44,45,45,73', '27,30,30,31,32,32,33,33,34,34,47,47,74,74', '35,56,56,57,57,58,58,59,59,60,60,70,75,75', '29,35,56,56,57,57,58,58,59,59,60,70,70,75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealtypes`
--
ALTER TABLE `mealtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `mealtypes`
--
ALTER TABLE `mealtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
