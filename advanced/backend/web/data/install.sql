-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-26 07:54:06
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `coach`
--

CREATE TABLE `coach` (
  `Coach_Name` varchar(50) NOT NULL,
  `Coach_Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `coach`
--

INSERT INTO `coach` (`Coach_Name`, `Coach_Age`) VALUES
('ANDERSSON Janne', 55),
('CHERCHESOV Stanislav', 54),
('CISSE Aliou', 42),
('CUPER Hector', 62),
('DALIC Zlatko', 51),
('DESCHAMPS Didier', 49),
('GARECA Ricardo', 60),
('GOMEZ Hernan', 62),
('HALLGRIMSSON Heimir', 51),
('HAREIDE Age', 64),
('HIERRO Fernando', 50),
('KRSTAJIC Mladen', 44),
('LÖW Joachim', 58),
('MAALOUL Nabil', 55),
('MARTINEZ Roberto', 45),
('NAWALKA Adam', 60),
('NISHINO Akira', 63),
('OSORIO Juan Carlos', 57),
('PEKERMAN Jose', 68),
('PETKOVIC Vladimir', 54),
('PIZZI Juan Antonio', 50),
('QUEIROZ Carlos', 65),
('RAMIREZ Oscar', 53),
('RENARD Herve', 49),
('ROHR Gernot', 65),
('SAMPAOLI Jorge', 58),
('SANTOS Fernando', 63),
('SHIN Taeyong', 47),
('SOUTHGATE Gareth', 47),
('TABAREZ Oscar', 71),
('TITE', 57),
('VAN MARWIJK Bert', 66);

-- --------------------------------------------------------

--
-- 表的结构 `commentator`
--

CREATE TABLE `commentator` (
  `commentator_Name` varchar(7) NOT NULL,
  `commentator_NativePlace` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `commentator`
--

INSERT INTO `commentator` (`commentator_Name`, `commentator_NativePlace`) VALUES
('刘嘉远', '陕西'),
('徐阳', '辽宁'),
('曾侃', '浙江'),
('朱晓雨', '北京'),
('杨晨', '北京'),
('洪刚', '北京'),
('贺炜', '湖北');

-- --------------------------------------------------------

--
-- 表的结构 `competition`
--

CREATE TABLE `competition` (
  `Competition_Time` varchar(50) NOT NULL,
  `Competition_TeamA` varchar(50) NOT NULL,
  `Competition_TeamB` varchar(50) NOT NULL,
  `Competition_BScore` int(11) DEFAULT NULL,
  `Competition_AScore` int(11) DEFAULT NULL,
  `Competition_Court` varchar(50) NOT NULL,
  `Competition_CCTV5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `competition`
--

INSERT INTO `competition` (`Competition_Time`, `Competition_TeamA`, `Competition_TeamB`, `Competition_BScore`, `Competition_AScore`, `Competition_Court`, `Competition_CCTV5`) VALUES
('01Jul2018,17:00', 'Russia', 'Spain', 1, 1, 'Luzhniki Stadium', '曾侃'),
('01Jul2018,21:00', 'Denmark', 'Croatia', 1, 1, 'Nizhny Novgorod Stadium', '贺炜'),
('02Jul2018,18:00', 'Mexico', 'Brazil', 2, 0, 'Samara Arena', '洪刚'),
('02Jul2018,21:00', 'Japan', 'Belgium', 3, 2, 'Rostov Arena', '贺炜'),
('03Jul2018,17:00', 'Switzerland', 'Sweden', 1, 0, 'Saint Petersburg Stadium', '曾侃'),
('03Jul2018,21:00', 'England', 'Colombia', 1, 1, 'Spartak Stadium', '贺炜'),
('06Jul2018,17:00', 'France', 'Uruguay', 0, 2, 'Nizhny Novgorod Stadium', '洪刚'),
('06Jul2018,21:00', 'Belgium', 'Brazil', 1, 2, 'Kazan Arena', '贺炜'),
('07Jul2018,18:00', 'England', 'Sweden', 0, 2, 'Samara Arena', '贺炜'),
('07Jul2018,21:00', 'Croatia', 'Russia', 2, 2, 'Fisht Stadium', '曾侃'),
('10Jul2018,21:00', 'Belgium', 'France', 1, 0, 'Saint Petersburg Stadium', '曾侃'),
('11Jul2018,21:00', 'England', 'Croatia', 2, 1, 'Luzhniki Stadium', '曾侃'),
('14Jul2018,17:00', 'England', 'Belgium', 2, 0, 'Saint Petersburg Stadium', '曾侃'),
('14Jun2018,18:00', 'Saudi Arabia', 'Russia', 5, 0, 'Luzhniki Stadium', '刘嘉远'),
('15Jul2018,18:00', 'Croatia', 'France', 4, 2, 'Luzhniki Stadium', '贺炜'),
('15Jun2018,17:00', 'Uruguay', 'Egypt', 0, 1, 'Ekaterinburg Arena', '曾侃'),
('15Jun2018,18:00', 'IR Iran', 'Morocco', 0, 1, 'Saint Petersburg Stadium', '洪刚'),
('15Jun2018,21:00', 'Spain', 'Portugal', 3, 3, 'Fisht Stadium', '杨晨'),
('16Jun2018,13:00', 'Australia', 'France', 2, 1, 'Kazan Arena', '刘嘉远'),
('16Jun2018,16:00', 'Iceland', 'Argentina', 1, 1, 'Spartak Stadium', '洪刚'),
('16Jun2018,19:00', 'Denmark', 'Peru', 0, 1, 'Mordovia Arena', '贺炜'),
('16Jun2018,21:00', 'Nigeria', 'Croatia', 2, 0, 'Kaliningrad Stadium', '贺炜'),
('17Jun2018,16:00', 'Serbia', 'Costa Rica', 0, 1, 'Samara Arena', '曾侃'),
('17Jun2018,18:00', 'Mexico', 'Germany', 0, 1, 'Luzhniki Stadium', '贺炜'),
('17Jun2018,21:00', 'Switzerland', 'Brazil', 1, 1, 'Rostov Arena', '杨晨'),
('18Jun2018,15:00', 'Korea Republic', 'Sweden', 1, 0, 'Nizhny Novgorod Stadium', '刘嘉远'),
('18Jun2018,18:00', 'Panama', 'Belgium', 3, 0, 'Fisht Stadium', '杨晨'),
('18Jun2018,21:00', 'England', 'Tunisia', 1, 2, 'Volgograd Arena', '洪刚'),
('19Jun2018,15:00', 'Japan', 'Colombia', 1, 2, 'Mordovia Arena', '曾侃'),
('19Jun2018,18:00', 'Senegal', 'Poland', 1, 2, 'Spartak Stadium', '洪刚'),
('19Jun2018,21:00', 'Egypt', 'Russia', 3, 1, 'Saint Petersburg Stadium', '贺炜'),
('20Jun2018,15:00', 'Morocco', 'Portugal', 1, 0, 'Luzhniki Stadium', '洪刚'),
('20Jun2018,18:00', 'Saudi Arabia', 'Uruguay', 1, 0, 'Rostov Arena', '杨晨'),
('20Jun2018,21:00', 'Spain', 'IR Iran', 0, 1, 'Kazan Arena', '刘嘉远'),
('21Jun2018,16:00', 'Australia', 'Denmark', 1, 1, 'Samara Arena', '刘嘉远'),
('21Jun2018,20:00', 'Peru', 'France', 1, 0, 'Ekaterinburg Arena', '曾侃'),
('21Jun2018,21:00', 'Croatia', 'Argentina', 0, 3, 'Nizhny Novgorod Stadium', '贺炜'),
('22Jun2018,15:00', 'Costa Rica', 'Brazil', 2, 0, 'Saint Petersburg Stadium', '刘嘉远'),
('22Jun2018,18:00', 'Iceland', 'Nigeria', 2, 0, 'Volgograd Arena', '徐阳'),
('22Jun2018,20:00', 'Switzerland', 'Serbia', 1, 2, 'Kaliningrad Stadium', '洪刚'),
('23Jun2018,15:00', 'Tunisia', 'Belgium', 5, 2, 'Spartak Stadium', '徐阳'),
('23Jun2018,18:00', 'Mexico', 'Korea Republic', 1, 2, 'Rostov Arena', '曾侃'),
('23Jun2018,21:00', 'Sweden', 'Germany', 2, 1, 'Fisht Stadium', '贺炜'),
('24Jun2018,15:00', 'Panama', 'England', 6, 1, 'Nizhny Novgorod Stadium', '刘嘉远'),
('24Jun2018,20:00', 'Senegal', 'Japan', 2, 2, 'Ekaterinburg Arena', '洪刚'),
('24Jun2018,21:00', 'Colombia', 'Poland', 0, 3, 'Kazan Arena', '徐阳'),
('25Jun2018,17:00', 'Egypt', 'Saudi Arabia', 2, 1, 'Volgograd Arena', '刘嘉远'),
('25Jun2018,18:00', 'Russia', 'Uruguay', 3, 0, 'Samara Arena', '曾侃'),
('25Jun2018,20:00', 'Morocco', 'Spain', 2, 2, 'Kaliningrad Stadium', '贺炜'),
('25Jun2018,21:00', 'Portugal', 'IR Iran', 1, 1, 'Mordovia Arena', '刘嘉远'),
('26Jun2018,17:00', 'France', 'Denmark', 0, 0, 'Luzhniki Stadium', '贺炜'),
('26Jun2018,17:00', 'Peru', 'Australia', 0, 2, 'Fisht Stadium', '曾侃'),
('26Jun2018,21:00', 'Argentina', 'Nigeria', 1, 2, 'Saint Petersburg Stadium', '洪刚'),
('26Jun2018,21:00', 'Croatia', 'Iceland', 1, 2, 'Rostov Arena', '徐阳'),
('27Jun2018,17:00', 'Germany', 'Korea Republic', 2, 0, 'Kazan Arena', '刘嘉远'),
('27Jun2018,19:00', 'Sweden', 'Mexico', 0, 3, 'Ekaterinburg Arena', '贺炜'),
('27Jun2018,21:00', 'Brazil', 'Serbia', 0, 2, 'Spartak Stadium', '曾侃'),
('27Jun2018,21:00', 'Costa Rica', 'Switzerland', 2, 2, 'Nizhny Novgorod Stadium', '洪刚'),
('28Jun2018,17:00', 'Poland', 'Japan', 0, 1, 'Volgograd Arena', '徐阳'),
('28Jun2018,18:00', 'Colombia', 'Senegal', 0, 1, 'Samara Arena', '贺炜'),
('28Jun2018,20:00', 'Belgium', 'England', 0, 1, 'Kaliningrad Stadium', '贺炜'),
('28Jun2018,21:00', 'Tunisia', 'Panama', 1, 2, 'Mordovia Arena', '洪刚'),
('30Jun2018,17:00', 'Argentina', 'France', 4, 3, 'Kazan Arena', '洪刚'),
('30Jun2018,21:00', 'Portugal', 'Uruguay', 2, 1, 'Fisht Stadium', '曾侃');

-- --------------------------------------------------------

--
-- 表的结构 `court`
--

CREATE TABLE `court` (
  `court_Name` varchar(50) NOT NULL,
  `court_Position` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `court`
--

INSERT INTO `court` (`court_Name`, `court_Position`) VALUES
('Ekaterinburg Arena', 'Ekaterinburg'),
('Fisht Stadium', 'Sochi'),
('kaliningrad Stadium', 'Kaliningrad'),
('Kazan Arena', 'Kazan'),
('Luzhniki Stadium', 'Moscow'),
('Mordovia Arena', 'Saransk'),
('Nizhny Novgorod Stadium', 'Nizhny Novgorod'),
('Rostov Arena', 'Rostov-On-Don'),
('Saint Petersburg Stadium', 'Saint Petersburg'),
('Samara Arena', 'Samara'),
('Spartak Stadium', 'Moscow'),
('Volgograd Arena', 'Volgograd');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1532323873),
('m130524_201442_init', 1532323878);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `News_Title` varchar(200) NOT NULL,
  `News_Time` varchar(50) NOT NULL,
  `News_Link` varchar(200) NOT NULL,
  `News_TeamA` varchar(50) DEFAULT NULL,
  `News_TeamB` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`News_Title`, `News_Time`, `News_Link`, `News_TeamA`, `News_TeamB`) VALUES
('7.7 million football fans visit FIFA Fan Fest during Russia 2018', '19 Jul 2018', 'https://www.fifa.com/worldcup/news/7-7-million-football-fans-visit-fifa-fan-fest-during-russia-2018', NULL, NULL),
('Brazil goalkeeper Alisson makes Liverpool switch', '19 Jul 2018', 'https://www.fifa.com/worldcup/news/brazil-goalkeeper-alisson-makes-liverpool-switch', 'Brazil', NULL),
('Cahill announces retirement from Socceroos', '17 Jul 2018', 'https://www.fifa.com/worldcup/news/cahill-announces-retirement-from-socceroos', NULL, NULL),
('Champions return home to joyous celebrations', '17 Jul 2018', 'https://www.fifa.com/worldcup/news/champions-return-home-joyous-celebrations-2986534', 'France', NULL),
('Cherchesov: Football fever in Russia really took off', '20 Jul 2018', 'https://www.fifa.com/worldcup/news/cherchesov-football-fever-russia-took-off', NULL, NULL),
('Debutants\' coaches depart', '17 Jul 2018', 'https://www.fifa.com/worldcup/news/debutants-coaches-depart', NULL, NULL),
('France revel in winning second world title', '16 Jul 2018', 'https://www.fifa.com/worldcup/news/france-revel-winning-second-world-title-2986453', 'France', NULL),
('France triumphant in ravishing Russia', '16 Jul 2018', 'https://www.fifa.com/worldcup/news/france-triumphant-in-ravishing-russia', 'France', NULL),
('Griezmann: I\'ll be the first to buy the jersey with the two stars', '15 Jul 2018', 'https://www.fifa.com/worldcup/news/griezmann-ill-be-first-to-buy-jersey-with-two-stars-2986443', NULL, NULL),
('Heroes’ homecoming for Croatia', '16 Jul 2018', 'https://www.fifa.com/worldcup/news/croatia-return-home-to-a-heroes-welcome', 'Croatia', NULL),
('Kane crowned King, Mina the PPG VIP', '17 Jul 2018', 'https://www.fifa.com/worldcup/news/kane-crowned-king-mina-the-ppg-vip', NULL, NULL),
('Luis Enrique: Spain’s football can evolve', '19 Jul 2018', 'https://www.fifa.com/worldcup/news/luis-enrique-spains-football-can-evolve-2986839', 'Spain', NULL),
('Modric: Croatia can be proud', '15 Jul 2018', 'https://www.fifa.com/worldcup/news/modric-croatia-can-be-proud', 'Croatia', NULL),
('Refereeing and VAR at the 2018 FIFA World Cup: A new era for football', '18 Jul 2018', 'https://www.fifa.com/worldcup/news/refereeing-and-var-at-the-2018-fifa-world-cup-a-new-era-for-football', NULL, NULL),
('Repeating patterns and curses lifted', '17 Jul 2018', 'https://www.fifa.com/worldcup/news/repeating-patterns-and-curses-lifted', NULL, NULL),
('Reputations on the rise in Russia', '16 Jul 2018', 'https://www.fifa.com/worldcup/news/reputations-on-the-rise-in-russia', 'Russia', NULL),
('Russia 2018 in numbers', '18 Jul 2018', 'https://www.fifa.com/worldcup/news/russia-2018-in-numbers', 'Russia', NULL),
('Russia 2018 most engaging FIFA World Cup ever', '20 Jul 2018', 'https://www.fifa.com/worldcup/news/russia-2018-most-engaging-fifa-world-cup-ever', 'Russia', NULL),
('Southgate and Boothroyd plot England\'s path forward', '19 Jul 2018', 'https://www.fifa.com/worldcup/news/southgate-and-boothroyd-plot-england-s-path-forward', 'England', NULL),
('Winner of the FIFA climate campaign attends the Final', '18 Jul 2018', 'https://www.fifa.com/worldcup/news/winner-of-the-fifa-climate-campaign-attends-the-final', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `player`
--

CREATE TABLE `player` (
  `player_Name` varchar(50) NOT NULL,
  `player_Team` varchar(50) NOT NULL,
  `player_Age` int(11) NOT NULL,
  `player_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `player`
--

INSERT INTO `player` (`player_Name`, `player_Team`, `player_Age`, `player_Number`) VALUES
('GUZMÁN', 'Argentina', 32, 1),
('MERCADO', 'Argentina', 31, 2),
('TAGLIAFICO', 'Argentina', 25, 3),
('ANSALDI', 'Argentina', 31, 4),
('BIGLIA', 'Argentina', 32, 5),
('FAZIO', 'Argentina', 31, 6),
('BANEGA', 'Argentina', 30, 7),
('ACUÑA', 'Argentina', 26, 8),
('HIGUAÍN', 'Argentina', 30, 9),
('MESSI', 'Argentina', 31, 10),
('DI MARÍA', 'Argentina', 30, 11),
('ARMANI', 'Argentina', 31, 12),
('MEZA', 'Argentina', 25, 13),
('MASCHERANO', 'Argentina', 34, 14),
('Pérez', 'Argentina', 32, 15),
('MARCOS ROJO', 'Argentina', 28, 16),
('OTAMENDI', 'Argentina', 30, 17),
('SALVIO', 'Argentina', 28, 18),
('KUN AGUERO', 'Argentina', 30, 19),
('LO CELSO', 'Argentina', 22, 20),
('DYBALA', 'Argentina', 24, 21),
('PAVÓN', 'Argentina', 22, 22),
('CABALLERO', 'Argentina', 36, 23),
('RYAN', 'Australia', 26, 1),
('DEGENEK', 'Australia', 24, 2),
('MEREDITH', 'Australia', 30, 3),
('CAHILL', 'Australia', 38, 4),
('MILLIGAN', 'Australia', 32, 5),
('JURMAN', 'Australia', 28, 6),
('LECKIE', 'Australia', 27, 7),
('LUONGO', 'Australia', 25, 8),
('JURIC', 'Australia', 26, 9),
('KRUSE', 'Australia', 29, 10),
('NABBOUT', 'Australia', 25, 11),
('JONES', 'Australia', 36, 12),
('MOOY', 'Australia', 27, 13),
('MACLAREN', 'Australia', 24, 14),
('JEDINAK', 'Australia', 33, 15),
('BEHICH', 'Australia', 27, 16),
('ARZANI', 'Australia', 19, 17),
('VUKOVIC', 'Australia', 33, 18),
('RISDON', 'Australia', 25, 19),
('SAINSBURY', 'Australia', 26, 20),
('PETRATOS', 'Australia', 25, 21),
('IRVINE', 'Australia', 25, 22),
('ROGIC', 'Australia', 25, 23),
('COURTOIS', 'Belgium', 26, 1),
('ALDERWEIRELD', 'Belgium', 29, 2),
('VERMAELEN', 'Belgium', 32, 3),
('KOMPANY', 'Belgium', 32, 4),
('VERTONGHEN', 'Belgium', 31, 5),
('WITSEL', 'Belgium', 29, 6),
('DE BRUYNE', 'Belgium', 27, 7),
('FELLAINI', 'Belgium', 30, 8),
('R. LUKAKU', 'Belgium', 25, 9),
('E. HAZARD', 'Belgium', 27, 10),
('CARRASCO', 'Belgium', 24, 11),
('MIGNOLET', 'Belgium', 30, 12),
('CASTEELS', 'Belgium', 26, 13),
('MERTENS', 'Belgium', 31, 14),
('MEUNIER', 'Belgium', 26, 15),
('T. HAZARD', 'Belgium', 25, 16),
('TIELEMANS', 'Belgium', 21, 17),
('JANUZAJ', 'Belgium', 23, 18),
('DEMBELE', 'Belgium', 31, 19),
('BOYATA', 'Belgium', 27, 20),
('BATSHUAYI', 'Belgium', 24, 21),
('CHADLI', 'Belgium', 28, 22),
('DENDONCKER', 'Belgium', 23, 23),
('A. BECKER', 'Brazil', 25, 1),
('T. SILVA', 'Brazil', 33, 2),
('MIRANDA', 'Brazil', 33, 3),
('GEROMEL', 'Brazil', 32, 4),
('CASEMIRO', 'Brazil', 26, 5),
('FILIPE LUIS', 'Brazil', 32, 6),
('D. COSTA', 'Brazil', 27, 7),
('R. AUGUSTO', 'Brazil', 30, 8),
('G. JESUS', 'Brazil', 21, 9),
('NEYMAR JR', 'Brazil', 26, 10),
('P. COUTINHO', 'Brazil', 26, 11),
('MARCELO', 'Brazil', 30, 12),
('MARQUINHOS', 'Brazil', 24, 13),
('DANILO', 'Brazil', 27, 14),
('PAULINHO', 'Brazil', 29, 15),
('CASSIO', 'Brazil', 31, 16),
('FERNANDINHO', 'Brazil', 33, 17),
('FRED', 'Brazil', 25, 18),
('WILLIAN', 'Brazil', 29, 19),
('FIRMINO', 'Brazil', 26, 20),
('TAISON', 'Brazil', 30, 21),
('FAGNER', 'Brazil', 29, 22),
('EDERSON', 'Brazil', 24, 23),
('OSPINA', 'Colombia', 29, 1),
('C. ZAPATA', 'Colombia', 31, 2),
('O. MURILLO', 'Colombia', 30, 3),
('ARIAS', 'Colombia', 26, 4),
('BARRIOS', 'Colombia', 24, 5),
('C. SANCHEZ', 'Colombia', 32, 6),
('BACCA', 'Colombia', 31, 7),
('AGUILAR T.', 'Colombia', 33, 8),
('FALCAO', 'Colombia', 32, 9),
('JAMES', 'Colombia', 27, 10),
('CUADRADO', 'Colombia', 30, 11),
('C. VARGAS', 'Colombia', 29, 12),
('Y. MINA', 'Colombia', 23, 13),
('L. MURIEL', 'Colombia', 27, 14),
('M. URIBE', 'Colombia', 27, 15),
('J. LERMA', 'Colombia', 23, 16),
('J. MOJICA', 'Colombia', 25, 17),
('Díaz', 'Colombia', 34, 18),
('M. BORJA', 'Colombia', 25, 19),
('J. QUINTERO', 'Colombia', 25, 20),
('IZQUIERDO', 'Colombia', 26, 21),
('J.F. CUADRADO', 'Colombia', 33, 22),
('D. SANCHEZ', 'Colombia', 22, 23),
('K. NAVAS', 'Costa Rica', 31, 1),
('J. ACOSTA', 'Costa Rica', 34, 2),
('G. GONZALEZ', 'Costa Rica', 30, 3),
('I. SMITH', 'Costa Rica', 20, 4),
('C. BORGES', 'Costa Rica', 30, 5),
('O. DUARTE', 'Costa Rica', 29, 6),
('C. BOLAÑOS', 'Costa Rica', 34, 7),
('B. OVIEDO', 'Costa Rica', 28, 8),
('D. COLINDRES', 'Costa Rica', 33, 9),
('BRYAN', 'Costa Rica', 32, 10),
('J. VENEGAS', 'Costa Rica', 29, 11),
('J. CAMPBELL', 'Costa Rica', 26, 12),
('R. WALLACE', 'Costa Rica', 30, 13),
('R. AZOFEIFA', 'Costa Rica', 33, 14),
('F. CALVO', 'Costa Rica', 26, 15),
('C. GAMBOA', 'Costa Rica', 28, 16),
('Y. TEJEDA', 'Costa Rica', 26, 17),
('P. PEMBERTON', 'Costa Rica', 36, 18),
('K. WASTON', 'Costa Rica', 30, 19),
('D. GUZMAN', 'Costa Rica', 28, 20),
('M. UREÑA', 'Costa Rica', 28, 21),
('K. GUTIERREZ', 'Costa Rica', 29, 22),
('L. MOREIRA', 'Costa Rica', 28, 23),
('LIVAKOVIĆ', 'Croatia', 23, 1),
('VRSALJKO', 'Croatia', 26, 2),
('STRINIĆ', 'Croatia', 30, 3),
('PERIŠIĆ', 'Croatia', 29, 4),
('ĆORLUKA', 'Croatia', 32, 5),
('LOVREN', 'Croatia', 29, 6),
('RAKITIĆ', 'Croatia', 30, 7),
('KOVAČIĆ', 'Croatia', 24, 8),
('KRAMARIĆ', 'Croatia', 27, 9),
('MODRIĆ', 'Croatia', 32, 10),
('BROZOVIĆ', 'Croatia', 25, 11),
('L. KALINIĆ', 'Croatia', 28, 12),
('JEDVAJ', 'Croatia', 22, 13),
('BRADARIĆ', 'Croatia', 26, 14),
('ĆALETA-CAR', 'Croatia', 21, 15),
('N. KALINIĆ', 'Croatia', 30, 16),
('MANDŽUKIĆ', 'Croatia', 32, 17),
('REBIĆ', 'Croatia', 24, 18),
('BADELJ', 'Croatia', 29, 19),
('PJACA', 'Croatia', 23, 20),
('VIDA', 'Croatia', 29, 21),
('PIVARIĆ', 'Croatia', 29, 22),
('SUBAŠIĆ', 'Croatia', 33, 23),
('SCHMEICHEL', 'Denmark', 31, 1),
('KROHN-DEHLI', 'Denmark', 35, 2),
('VESTERGAARD', 'Denmark', 25, 3),
('KJÆR', 'Denmark', 29, 4),
('KNUDSEN', 'Denmark', 25, 5),
('CHRISTENSEN', 'Denmark', 22, 6),
('KVIST', 'Denmark', 33, 7),
('DELANEY', 'Denmark', 26, 8),
('N. JØRGENSEN', 'Denmark', 27, 9),
('ERIKSEN', 'Denmark', 26, 10),
('BRAITHWAITE', 'Denmark', 27, 11),
('DOLBERG', 'Denmark', 20, 12),
('M. JØRGENSEN', 'Denmark', 28, 13),
('DALSGAARD', 'Denmark', 28, 14),
('FISCHER', 'Denmark', 24, 15),
('LÖSSL', 'Denmark', 29, 16),
('STRYGER', 'Denmark', 27, 17),
('LERAGER', 'Denmark', 25, 18),
('SCHÖNE', 'Denmark', 32, 19),
('YURARY', 'Denmark', 24, 20),
('CORNELIUS', 'Denmark', 25, 21),
('RØNNOW', 'Denmark', 25, 22),
('SISTO', 'Denmark', 23, 23),
('ELHADARY', 'Egypt', 45, 1),
('ALI GABR', 'Egypt', 29, 2),
('ELMOHAMADY', 'Egypt', 30, 3),
('O. GABER', 'Egypt', 26, 4),
('MORSY', 'Egypt', 26, 5),
('A. HEGAZY', 'Egypt', 27, 6),
('A. FATHI', 'Egypt', 33, 7),
('TAREK HAMED', 'Egypt', 29, 8),
('MARWAN', 'Egypt', 29, 9),
('M SALAH', 'Egypt', 26, 10),
('M. KAHRABA', 'Egypt', 24, 11),
('A. ASHRAF', 'Egypt', 27, 12),
('ABDELSHAFY', 'Egypt', 33, 13),
('RAMADAN', 'Egypt', 21, 14),
('M. HAMDY', 'Egypt', 23, 15),
('EKRAMY', 'Egypt', 35, 16),
('M. ELNENY', 'Egypt', 26, 17),
('SHIKABALA', 'Egypt', 32, 18),
('ABDALLA', 'Egypt', 33, 19),
('S. SAMIR', 'Egypt', 29, 20),
('M. TREZIGUET', 'Egypt', 23, 21),
('WARDA', 'Egypt', 24, 22),
('M. ELSHENAWY', 'Egypt', 29, 23),
('PICKFORD', 'England', 24, 1),
('WALKER', 'England', 28, 2),
('ROSE', 'England', 28, 3),
('DIER', 'England', 24, 4),
('STONES', 'England', 24, 5),
('MAGUIRE', 'England', 25, 6),
('LINGARD', 'England', 25, 7),
('HENDERSON', 'England', 28, 8),
('KANE', 'England', 24, 9),
('STERLING', 'England', 23, 10),
('VARDY', 'England', 31, 11),
('TRIPPIER', 'England', 27, 12),
('BUTLAND', 'England', 25, 13),
('WELBECK', 'England', 27, 14),
('CAHILL', 'England', 32, 15),
('JONES', 'England', 26, 16),
('DELPH', 'England', 28, 17),
('YOUNG', 'England', 33, 18),
('RASHFORD', 'England', 20, 19),
('DELE', 'England', 22, 20),
('LOFTUS-CHEEK', 'England', 22, 21),
('ALEXANDER-ARNOLD', 'England', 19, 22),
('POPE', 'England', 26, 23),
('LLORIS', 'France', 31, 1),
('PAVARD', 'France', 22, 2),
('KIMPEMBE', 'France', 22, 3),
('VARANE', 'France', 25, 4),
('UMTITI', 'France', 24, 5),
('POGBA', 'France', 25, 6),
('GRIEZMANN', 'France', 27, 7),
('LEMAR', 'France', 22, 8),
('GIROUD', 'France', 31, 9),
('MBAPPE', 'France', 19, 10),
('DEMBELE', 'France', 21, 11),
('TOLISSO', 'France', 23, 12),
('KANTE', 'France', 27, 13),
('MATUIDI', 'France', 31, 14),
('NZONZI', 'France', 29, 15),
('MANDANDA', 'France', 33, 16),
('RAMI', 'France', 32, 17),
('FEKIR', 'France', 24, 18),
('SIDIBE', 'France', 25, 19),
('THAUVIN', 'France', 25, 20),
('HERNANDEZ', 'France', 22, 21),
('MENDY', 'France', 23, 22),
('AREOLA', 'France', 25, 23),
('NEUER', 'Germany', 32, 1),
('PLATTENHARDT', 'Germany', 26, 2),
('HECTOR', 'Germany', 28, 3),
('GINTER', 'Germany', 24, 4),
('HUMMELS', 'Germany', 29, 5),
('KHEDIRA', 'Germany', 31, 6),
('DRAXLER', 'Germany', 24, 7),
('KROOS', 'Germany', 28, 8),
('WERNER', 'Germany', 22, 9),
('ÖZIL', 'Germany', 29, 10),
('REUS', 'Germany', 29, 11),
('TRAPP', 'Germany', 28, 12),
('MÜLLER', 'Germany', 28, 13),
('GORETZKA', 'Germany', 23, 14),
('SÜLE', 'Germany', 22, 15),
('RÜDIGER', 'Germany', 25, 16),
('BOATENG', 'Germany', 29, 17),
('KIMMICH', 'Germany', 23, 18),
('RUDY', 'Germany', 28, 19),
('BRANDT', 'Germany', 22, 20),
('GÜNDOGAN', 'Germany', 27, 21),
('TER STEGEN', 'Germany', 26, 22),
('GOMEZ', 'Germany', 33, 23),
('HALLDORSSON', 'Iceland', 34, 1),
('SÆVARSSON', 'Iceland', 33, 2),
('FRIDJÓNSSON', 'Iceland', 22, 3),
('A. GUDMUNDSSON', 'Iceland', 21, 4),
('INGASON', 'Iceland', 24, 5),
('R. SIGURDSSON', 'Iceland', 32, 6),
('J. GUDMUNDSSON', 'Iceland', 27, 7),
('BJARNASON', 'Iceland', 30, 8),
('SIGURDARSON', 'Iceland', 27, 9),
('G. SIGURDSSON', 'Iceland', 28, 10),
('FINNBOGASON', 'Iceland', 29, 11),
('SCHRAM', 'Iceland', 23, 12),
('RÚNARSSON', 'Iceland', 23, 13),
('ÁRNASON', 'Iceland', 35, 14),
('EYJÓLFSSON', 'Iceland', 27, 15),
('Ó. SKÚLASON', 'Iceland', 35, 16),
('GUNNARSSON', 'Iceland', 29, 17),
('MAGNÚSSON', 'Iceland', 25, 18),
('GÍSLASON', 'Iceland', 30, 19),
('HALLFREDSSON', 'Iceland', 34, 20),
('TRAUSTASON', 'Iceland', 25, 21),
('BÖDVARSSON', 'Iceland', 26, 22),
('A. SKÚLASON', 'Iceland', 31, 23),
('A. BEIRANVAND', 'IR Iran', 25, 1),
('M. TORABI', 'IR Iran', 23, 2),
('HAJI SAFI', 'IR Iran', 28, 3),
('R. CHESHMI', 'IR Iran', 24, 4),
('M. MOHAMMADI', 'IR Iran', 24, 5),
('S. EZATOLAHI', 'IR Iran', 21, 6),
('SHOJAEI. M', 'IR Iran', 34, 7),
('M. POURALIGANJI', 'IR Iran', 26, 8),
('OMID', 'IR Iran', 30, 9),
('KARIM', 'IR Iran', 28, 10),
('V. AMIRI', 'IR Iran', 30, 11),
('RASHID', 'IR Iran', 29, 12),
('M.R. KHANZADEH', 'IR Iran', 27, 13),
('GHODDOS', 'IR Iran', 24, 14),
('P. MONTAZERI', 'IR Iran', 34, 15),
('REZA', 'IR Iran', 30, 16),
('MEHDI', 'IR Iran', 25, 17),
('A. JAHANBAKHSH', 'IR Iran', 24, 18),
('M. HOSSEINI', 'IR Iran', 22, 19),
('SARDAR', 'IR Iran', 23, 20),
('DEJAGAH', 'IR Iran', 32, 21),
('ABEDZADEH', 'IR Iran', 25, 22),
('RAMIN', 'IR Iran', 28, 23),
('KAWASHIMA', 'Japan', 35, 1),
('UEDA', 'Japan', 23, 2),
('SHOJI', 'Japan', 25, 3),
('HONDA', 'Japan', 32, 4),
('NAGATOMO', 'Japan', 31, 5),
('ENDO', 'Japan', 25, 6),
('SHIBASAKI', 'Japan', 26, 7),
('HARAGUCHI', 'Japan', 27, 8),
('OKAZAKI', 'Japan', 32, 9),
('KAGAWA', 'Japan', 29, 10),
('USAMI', 'Japan', 26, 11),
('HIGASHIGUCHI', 'Japan', 32, 12),
('MUTO', 'Japan', 26, 13),
('INUI', 'Japan', 30, 14),
('OSAKO', 'Japan', 28, 15),
('YAMAGUCHI', 'Japan', 27, 16),
('HASEBE', 'Japan', 34, 17),
('OHSHIMA', 'Japan', 25, 18),
('H. SAKAI', 'Japan', 28, 19),
('MAKINO', 'Japan', 31, 20),
('G. SAKAI', 'Japan', 27, 21),
('YOSHIDA', 'Japan', 29, 22),
('NAKAMURA', 'Japan', 23, 23),
('S G KIM', 'Korea Republic', 27, 1),
('Y LEE', 'Korea Republic', 31, 2),
('S H JUNG', 'Korea Republic', 24, 3),
('B S OH', 'Korea Republic', 30, 4),
('Y S YUN', 'Korea Republic', 29, 5),
('J H PARK', 'Korea Republic', 31, 6),
('H M SON', 'Korea Republic', 26, 7),
('S J JU', 'Korea Republic', 27, 8),
('S W KIM', 'Korea Republic', 30, 9),
('S W LEE', 'Korea Republic', 20, 10),
('H C HWANG', 'Korea Republic', 22, 11),
('M W KIM', 'Korea Republic', 28, 12),
('J C KOO', 'Korea Republic', 29, 13),
('C HONG', 'Korea Republic', 27, 14),
('W Y JUNG', 'Korea Republic', 28, 15),
('S Y KI', 'Korea Republic', 29, 16),
('J S LEE', 'Korea Republic', 25, 17),
('S M MOON', 'Korea Republic', 26, 18),
('Y G KIM', 'Korea Republic', 28, 19),
('H S JANG', 'Korea Republic', 26, 20),
('J H KIM', 'Korea Republic', 31, 21),
('Y H GO', 'Korea Republic', 30, 22),
('H W JO', 'Korea Republic', 26, 23),
('J. CORONA', 'Mexico', 37, 1),
('H. AYALA', 'Mexico', 31, 2),
('C. SALCEDO', 'Mexico', 24, 3),
('R. MÁRQUEZ', 'Mexico', 39, 4),
('E. GUTIÉRREZ', 'Mexico', 23, 5),
('J. DOS SANTOS', 'Mexico', 28, 6),
('M. LAYÚN', 'Mexico', 30, 7),
('M. FABIÁN', 'Mexico', 28, 8),
('RAÚL', 'Mexico', 27, 9),
('G. DOS SANTOS', 'Mexico', 29, 10),
('CARLOS V', 'Mexico', 29, 11),
('A. TALAVERA', 'Mexico', 35, 12),
('G. OCHOA', 'Mexico', 33, 13),
('J. HERNÁNDEZ', 'Mexico', 30, 14),
('H. MORENO', 'Mexico', 30, 15),
('H. HERRERA', 'Mexico', 28, 16),
('JESÚS C.', 'Mexico', 25, 17),
('A. GUARDADO', 'Mexico', 31, 18),
('O. PERALTA', 'Mexico', 34, 19),
('J. AQUINO', 'Mexico', 28, 20),
('E. ÁLVAREZ', 'Mexico', 20, 21),
('H. LOZANO', 'Mexico', 22, 22),
('J. GALLARDO', 'Mexico', 23, 23),
('BOUNOU', 'Morocco', 27, 1),
('HAKIMI', 'Morocco', 19, 2),
('MENDYL', 'Morocco', 20, 3),
('DA COSTA', 'Morocco', 32, 4),
('BENATIA', 'Morocco', 31, 5),
('SAISS', 'Morocco', 28, 6),
('ZIYACH', 'Morocco', 25, 7),
('EL AHMADI', 'Morocco', 33, 8),
('EL KAABI', 'Morocco', 25, 9),
('BELHANDA', 'Morocco', 28, 10),
('FAJR', 'Morocco', 29, 11),
('EL KAJOUI', 'Morocco', 29, 12),
('BOUTAIB', 'Morocco', 31, 13),
('BOUSSOUFA', 'Morocco', 33, 14),
('AIT BENNASSER', 'Morocco', 22, 15),
('N. AMRABAT', 'Morocco', 31, 16),
('DIRAR', 'Morocco', 32, 17),
('HARIT', 'Morocco', 21, 18),
('EN-NESYRI', 'Morocco', 21, 19),
('BOUHADDOUZ', 'Morocco', 31, 20),
('S. AMRABAT', 'Morocco', 21, 21),
('TAGNAOUTI', 'Morocco', 22, 22),
('CARCELA', 'Morocco', 29, 23),
('EZENWA', 'Nigeria', 29, 1),
('IDOWU', 'Nigeria', 26, 2),
('ECHIEJILE', 'Nigeria', 30, 3),
('NDIDI', 'Nigeria', 21, 4),
('EKONG', 'Nigeria', 24, 5),
('BALOGUN', 'Nigeria', 30, 6),
('MUSA', 'Nigeria', 25, 7),
('ETEBO', 'Nigeria', 22, 8),
('IGHALO', 'Nigeria', 29, 9),
('MIKEL', 'Nigeria', 31, 10),
('MOSES', 'Nigeria', 27, 11),
('SHEHU', 'Nigeria', 25, 12),
('NWANKWO', 'Nigeria', 26, 13),
('IHEANACHO', 'Nigeria', 22, 14),
('OBI', 'Nigeria', 27, 15),
('AKPEYI', 'Nigeria', 32, 16),
('ONAZI', 'Nigeria', 25, 17),
('IWOBI', 'Nigeria', 22, 18),
('OGU', 'Nigeria', 30, 19),
('AWAZIEM', 'Nigeria', 21, 20),
('EBUEHI', 'Nigeria', 22, 21),
('OMERUO', 'Nigeria', 24, 22),
('UZOHO', 'Nigeria', 19, 23),
('PENEDO', 'Panama', 36, 1),
('MURILLO', 'Panama', 22, 2),
('CUMMINGS', 'Panama', 26, 3),
('ESCOBAR', 'Panama', 23, 4),
('R. TORRES', 'Panama', 32, 5),
('GOMEZ', 'Panama', 34, 6),
('PEREZ', 'Panama', 37, 7),
('BARCENAS', 'Panama', 24, 8),
('G. TORRES', 'Panama', 29, 9),
('DIAZ', 'Panama', 21, 10),
('COOPER', 'Panama', 30, 11),
('CALDERON', 'Panama', 32, 12),
('MACHADO', 'Panama', 33, 13),
('PIMENTEL', 'Panama', 27, 14),
('DAVIS', 'Panama', 27, 15),
('ARROYO', 'Panama', 24, 16),
('OVALLE', 'Panama', 29, 17),
('TEJADA', 'Panama', 36, 18),
('AVILA', 'Panama', 21, 19),
('GODOY', 'Panama', 28, 20),
('J. RODRIGUEZ', 'Panama', 20, 21),
('RODRIGUEZ', 'Panama', 27, 22),
('BALOY', 'Panama', 37, 23),
('GALLESE', 'Peru', 28, 1),
('RODRIGUEZ', 'Peru', 34, 2),
('CORZO', 'Peru', 29, 3),
('SANTAMARIA', 'Peru', 26, 4),
('ARAUJO', 'Peru', 23, 5),
('TRAUCO', 'Peru', 25, 6),
('HURTADO', 'Peru', 27, 7),
('CUEVA', 'Peru', 26, 8),
('GUERRERO', 'Peru', 34, 9),
('FARFAN', 'Peru', 33, 10),
('RUIDIAZ', 'Peru', 27, 11),
('CACEDA', 'Peru', 26, 12),
('TAPIA', 'Peru', 22, 13),
('POLO', 'Peru', 23, 14),
('RAMOS', 'Peru', 29, 15),
('CARTAGENA', 'Peru', 23, 16),
('ADVINCULA', 'Peru', 28, 17),
('CARRILLO', 'Peru', 27, 18),
('YOTUN', 'Peru', 28, 19),
('FLORES', 'Peru', 24, 20),
('CARVALLO', 'Peru', 32, 21),
('LOYOLA', 'Peru', 23, 22),
('AQUINO', 'Peru', 23, 23),
('SZCZĘSNY', 'Poland', 28, 1),
('PAZDAN', 'Poland', 30, 2),
('JĘDRZEJCZYK', 'Poland', 30, 3),
('CIONEK', 'Poland', 32, 4),
('BEDNAREK', 'Poland', 22, 5),
('GÓRALSKI', 'Poland', 25, 6),
('MILIK', 'Poland', 24, 7),
('LINETTY', 'Poland', 23, 8),
('LEWANDOWSKI', 'Poland', 29, 9),
('KRYCHOWIAK', 'Poland', 28, 10),
('GROSICKI', 'Poland', 30, 11),
('BIAŁKOWSKI', 'Poland', 31, 12),
('RYBUS', 'Poland', 28, 13),
('TEODORCZYK', 'Poland', 27, 14),
('GLIK', 'Poland', 30, 15),
('BŁASZCZYKOWSKI', 'Poland', 32, 16),
('PESZKO', 'Poland', 33, 17),
('BERESZYŃSKI', 'Poland', 26, 18),
('ZIELIŃSKI', 'Poland', 24, 19),
('PISZCZEK', 'Poland', 33, 20),
('KURZAWA', 'Poland', 25, 21),
('FABIANSKI', 'Poland', 33, 22),
('KOWNACKI', 'Poland', 21, 23),
('RUI PATRICIO', 'Portugal', 30, 1),
('B. ALVES', 'Portugal', 36, 2),
('PEPE', 'Portugal', 35, 3),
('M. FERNANDES', 'Portugal', 32, 4),
('RAPHAEL', 'Portugal', 24, 5),
('FONTE', 'Portugal', 34, 6),
('RONALDO', 'Portugal', 33, 7),
('J. MOUTINHO', 'Portugal', 31, 8),
('ANDRÉ SILVA', 'Portugal', 22, 9),
('J. MÁRIO', 'Portugal', 25, 10),
('BERNARDO', 'Portugal', 23, 11),
('LOPES', 'Portugal', 27, 12),
('RUBEN DIAS', 'Portugal', 21, 13),
('WILLIAM', 'Portugal', 26, 14),
('RICARDO', 'Portugal', 24, 15),
('B. FERNANDES', 'Portugal', 23, 16),
('G. GUEDES', 'Portugal', 21, 17),
('GELSON', 'Portugal', 23, 18),
('MÁRIO RUI', 'Portugal', 27, 19),
('QUARESMA', 'Portugal', 34, 20),
('CÉDRIC', 'Portugal', 26, 21),
('BETO', 'Portugal', 36, 22),
('ADRIEN', 'Portugal', 29, 23),
('AKINFEEV', 'Russia', 32, 1),
('FERNANDES', 'Russia', 27, 2),
('KUTEPOV', 'Russia', 24, 3),
('Sergei Ignashevich', 'Russia', 39, 4),
('SEMENOV', 'Russia', 29, 5),
('CHERYSHEV', 'Russia', 27, 6),
('KUZIAEV', 'Russia', 25, 7),
('GAZINSKII', 'Russia', 28, 8),
('DZAGOEV', 'Russia', 28, 9),
('SMOLOV', 'Russia', 28, 10),
('ZOBNIN', 'Russia', 24, 11),
('LUNEV', 'Russia', 26, 12),
('KUDRIASHOV', 'Russia', 31, 13),
('GRANAT', 'Russia', 31, 14),
('AL MIRANCHUK', 'Russia', 22, 15),
('AN MIRANCHUK', 'Russia', 22, 16),
('GOLOVIN', 'Russia', 22, 17),
('ZHIRKOV', 'Russia', 34, 18),
('SAMEDOV', 'Russia', 33, 19),
('GABULOV', 'Russia', 34, 20),
('EROKHIN', 'Russia', 28, 21),
('DZYUBA', 'Russia', 29, 22),
('SMOLNIKOV', 'Russia', 29, 23),
('ABDULLAH', 'Saudi Arabia', 31, 1),
('MANSOUR', 'Saudi Arabia', 30, 2),
('OSAMA', 'Saudi Arabia', 34, 3),
('ALI', 'Saudi Arabia', 28, 4),
('OMAR', 'Saudi Arabia', 32, 5),
('ALBURAYK', 'Saudi Arabia', 25, 6),
('SALMAN', 'Saudi Arabia', 28, 7),
('YAHIA', 'Saudi Arabia', 28, 8),
('HATAN', 'Saudi Arabia', 26, 9),
('ALSAHLAWI', 'Saudi Arabia', 31, 10),
('ABDULMALEK', 'Saudi Arabia', 32, 11),
('KANNO', 'Saudi Arabia', 23, 12),
('YASSER', 'Saudi Arabia', 26, 13),
('OTAYF', 'Saudi Arabia', 25, 14),
('ALKHAIBARI', 'Saudi Arabia', 21, 15),
('HUSSAIN', 'Saudi Arabia', 30, 16),
('TAISEER', 'Saudi Arabia', 33, 17),
('SALEM', 'Saudi Arabia', 26, 18),
('FAHAD', 'Saudi Arabia', 23, 19),
('MUHANNAD', 'Saudi Arabia', 31, 20),
('ALMOSAILEM', 'Saudi Arabia', 34, 21),
('ALOWAIS', 'Saudi Arabia', 26, 22),
('MOTAZ', 'Saudi Arabia', 26, 23),
('DIALLO', 'Senegal', 26, 1),
('MBENGUE', 'Senegal', 24, 2),
('KOULIBALY', 'Senegal', 27, 3),
('KARA', 'Senegal', 28, 4),
('GANA', 'Senegal', 28, 5),
('S. SANE', 'Senegal', 27, 6),
('SOW', 'Senegal', 32, 7),
('C. KOUYATE', 'Senegal', 28, 8),
('M. DIOUF', 'Senegal', 30, 9),
('MANE', 'Senegal', 26, 10),
('CH. NDOYE', 'Senegal', 32, 11),
('SABALY', 'Senegal', 25, 12),
('A. NDIAYE', 'Senegal', 28, 13),
('KONATE', 'Senegal', 25, 14),
('SAKHO', 'Senegal', 28, 15),
('KH. NDIAYE', 'Senegal', 33, 16),
('P.A. NDIAYE', 'Senegal', 27, 17),
('ISMAÏLA', 'Senegal', 20, 18),
('NIANG', 'Senegal', 23, 19),
('KEÏTA BALDE', 'Senegal', 23, 20),
('GASSAMA', 'Senegal', 28, 21),
('M. WAGUE', 'Senegal', 19, 22),
('GOMIS', 'Senegal', 24, 23),
('STOJKOVIĆ', 'Serbia', 34, 1),
('RUKAVINA', 'Serbia', 34, 2),
('TOŠIĆ', 'Serbia', 33, 3),
('MILIVOJEVIĆ', 'Serbia', 27, 4),
('SPAJIĆ', 'Serbia', 25, 5),
('IVANOVIĆ', 'Serbia', 34, 6),
('ŽIVKOVIĆ', 'Serbia', 22, 7),
('PRIJOVIĆ', 'Serbia', 28, 8),
('MITROVIĆ', 'Serbia', 23, 9),
('TADIĆ', 'Serbia', 29, 10),
('KOLAROV', 'Serbia', 32, 11),
('RAJKOVIĆ', 'Serbia', 22, 12),
('VELJKOVIĆ', 'Serbia', 22, 13),
('RODIĆ', 'Serbia', 27, 14),
('MILENKOVIĆ', 'Serbia', 20, 15),
('GRUJIĆ', 'Serbia', 22, 16),
('KOSTIĆ', 'Serbia', 25, 17),
('RADONJIĆ', 'Serbia', 22, 18),
('JOVIĆ', 'Serbia', 20, 19),
('SERGEJ', 'Serbia', 23, 20),
('MATIĆ', 'Serbia', 29, 21),
('LJAJIĆ', 'Serbia', 26, 22),
('DMITROVIĆ', 'Serbia', 26, 23),
('DE GEA', 'Spain', 27, 1),
('CARVAJAL', 'Spain', 26, 2),
('PIQUÉ', 'Spain', 31, 3),
('NACHO', 'Spain', 28, 4),
('SERGIO', 'Spain', 30, 5),
('A. INIESTA', 'Spain', 34, 6),
('SAÚL', 'Spain', 23, 7),
('KOKE', 'Spain', 26, 8),
('RODRIGO M.', 'Spain', 27, 9),
('THIAGO', 'Spain', 27, 10),
('LUCAS V.', 'Spain', 27, 11),
('ODRIOZOLA', 'Spain', 22, 12),
('ARRIZABALAGA', 'Spain', 23, 13),
('AZPILICUETA', 'Spain', 28, 14),
('RAMOS', 'Spain', 32, 15),
('MONREAL', 'Spain', 32, 16),
('IAGO ASPAS', 'Spain', 30, 17),
('JORDI ALBA', 'Spain', 29, 18),
('DIEGO COSTA', 'Spain', 29, 19),
('ASENSIO', 'Spain', 22, 20),
('SILVA', 'Spain', 32, 21),
('ISCO', 'Spain', 26, 22),
('REINA', 'Spain', 35, 23),
('OLSEN', 'Sweden', 28, 1),
('LUSTIG', 'Sweden', 31, 2),
('LINDELÖF', 'Sweden', 23, 3),
('GRANQVIST', 'Sweden', 33, 4),
('OLSSON', 'Sweden', 30, 5),
('AUGUSTINSSON', 'Sweden', 24, 6),
('LARSSON', 'Sweden', 33, 7),
('EKDAL', 'Sweden', 28, 8),
('BERG', 'Sweden', 31, 9),
('FORSBERG', 'Sweden', 26, 10),
('GUIDETTI', 'Sweden', 26, 11),
('JOHNSSON', 'Sweden', 28, 12),
('SVENSSON', 'Sweden', 31, 13),
('HELANDER', 'Sweden', 25, 14),
('HILJEMARK', 'Sweden', 26, 15),
('KRAFTH', 'Sweden', 23, 16),
('CLAESSON', 'Sweden', 26, 17),
('JANSSON', 'Sweden', 27, 18),
('ROHDÉN', 'Sweden', 27, 19),
('TOIVONEN', 'Sweden', 32, 20),
('DURMAZ', 'Sweden', 29, 21),
('KIESE THELIN', 'Sweden', 26, 22),
('NORDFELDT', 'Sweden', 29, 23),
('SOMMER', 'Switzerland', 29, 1),
('LICHTSTEINER', 'Switzerland', 34, 2),
('MOUBANDJE', 'Switzerland', 28, 3),
('ELVEDI', 'Switzerland', 21, 4),
('AKANJI', 'Switzerland', 22, 5),
('LANG', 'Switzerland', 27, 6),
('EMBOLO', 'Switzerland', 21, 7),
('FREULER', 'Switzerland', 26, 8),
('SEFEROVIC', 'Switzerland', 26, 9),
('XHAKA', 'Switzerland', 25, 10),
('BEHRAMI', 'Switzerland', 33, 11),
('MVOGO', 'Switzerland', 24, 12),
('RODRIGUEZ', 'Switzerland', 25, 13),
('ZUBER', 'Switzerland', 26, 14),
('DZEMAILI', 'Switzerland', 32, 15),
('G. FERNANDES', 'Switzerland', 31, 16),
('ZAKARIA', 'Switzerland', 21, 17),
('GAVRANOVIC', 'Switzerland', 28, 18),
('DRMIC', 'Switzerland', 25, 19),
('DJOUROU', 'Switzerland', 31, 20),
('BÜRKI', 'Switzerland', 27, 21),
('SCHÄR', 'Switzerland', 26, 22),
('SHAQIRI', 'Switzerland', 26, 23),
('BEN MUSTAPHA', 'Tunisia', 29, 1),
('BEN YOUSSEF .S', 'Tunisia', 29, 2),
('BEN ALOUANE', 'Tunisia', 31, 3),
('MERIAH', 'Tunisia', 25, 4),
('HADDADI', 'Tunisia', 26, 5),
('BEDOUI', 'Tunisia', 28, 6),
('KHAOUI', 'Tunisia', 23, 7),
('BEN YOUSSEF .F', 'Tunisia', 27, 8),
('BADRI', 'Tunisia', 27, 9),
('KHAZRI', 'Tunisia', 27, 10),
('BRONN', 'Tunisia', 23, 11),
('MAALOUL', 'Tunisia', 28, 12),
('SASSI', 'Tunisia', 26, 13),
('BEN AMOR', 'Tunisia', 26, 14),
('KHALIL', 'Tunisia', 23, 15),
('MATHLOUTHI', 'Tunisia', 33, 16),
('SKHIRI', 'Tunisia', 23, 17),
('SRARFI', 'Tunisia', 21, 18),
('KHALIFA', 'Tunisia', 31, 19),
('CHAALELI', 'Tunisia', 24, 20),
('NAGUEZ', 'Tunisia', 25, 21),
('HASSEN', 'Tunisia', 23, 22),
('SLITI', 'Tunisia', 25, 23),
('F. MUSLERA', 'Uruguay', 32, 1),
('J.M. GIMENEZ', 'Uruguay', 23, 2),
('D. GODIN', 'Uruguay', 32, 3),
('G. VARELA', 'Uruguay', 25, 4),
('C. SANCHEZ', 'Uruguay', 33, 5),
('R. BENTANCUR', 'Uruguay', 21, 6),
('C. RODRIGUEZ', 'Uruguay', 32, 7),
('N. NANDEZ', 'Uruguay', 22, 8),
('L. SUAREZ', 'Uruguay', 31, 9),
('G. DE ARRASCAETA', 'Uruguay', 24, 10),
('C. STUANI', 'Uruguay', 31, 11),
('M. CAMPAÑA', 'Uruguay', 29, 12),
('G. SILVA', 'Uruguay', 24, 13),
('L. TORREIRA', 'Uruguay', 22, 14),
('M. VECINO', 'Uruguay', 26, 15),
('M. PEREIRA', 'Uruguay', 34, 16),
('D. LAXALT', 'Uruguay', 25, 17),
('M. GOMEZ', 'Uruguay', 21, 18),
('S. COATES', 'Uruguay', 27, 19),
('J. URRETAVISCAYA', 'Uruguay', 28, 20),
('E. CAVANI', 'Uruguay', 31, 21),
('M. CACERES', 'Uruguay', 31, 22),
('M. SILVA', 'Uruguay', 35, 23);

-- --------------------------------------------------------

--
-- 表的结构 `sponsor`
--

CREATE TABLE `sponsor` (
  `Sponsor_Name` varchar(50) NOT NULL,
  `Sponsor_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sponsor`
--

INSERT INTO `sponsor` (`Sponsor_Name`, `Sponsor_Amount`) VALUES
('Adidas', 12),
('Errea', 1),
('Hummel', 1),
('New Balance', 2),
('NIKE', 10),
('PUMA', 2),
('Romai', 1),
('UHLSPORT', 1),
('Umbro ', 2);

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE `team` (
  `Team_Nation` varchar(50) NOT NULL,
  `Team_Coach` varchar(50) NOT NULL,
  `Team_Score` int(11) NOT NULL,
  `Team_Group` char(1) NOT NULL,
  `Team_Shirtsponsor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`Team_Nation`, `Team_Coach`, `Team_Score`, `Team_Group`, `Team_Shirtsponsor`) VALUES
('Argentina', 'SAMPAOLI Jorge', 4, 'D', 'Adidas'),
('Australia', 'VAN MARWIJK Bert', 1, 'C', 'Nike'),
('Belgium', 'MARTINEZ Roberto', 9, 'G', 'Adidas'),
('Brazil', 'TITE', 7, 'E', 'Nike'),
('Colombia', 'PEKERMAN Jose', 6, 'H', 'Adidas'),
('Costa Rica', 'RAMIREZ Oscar', 1, 'E', 'New Balance'),
('Croatia', 'DALIC Zlatko', 9, 'D', 'Nike'),
('Denmark', 'HAREIDE Age', 5, 'C', 'Hummel'),
('Egypt', 'CUPER Hector', 0, 'A', 'Adidas'),
('England', 'SOUTHGATE Gareth', 6, 'G', 'Nike'),
('France', 'DESCHAMPS Didier', 7, 'C', 'Nike'),
('Germany', 'LÖW Joachim', 3, 'F', 'Adidas'),
('Iceland', 'HALLGRIMSSON Heimir', 1, 'D', 'Errea'),
('IR Iran', 'QUEIROZ Carlos', 4, 'B', 'Adidas'),
('Japan', 'NISHINO Akira', 4, 'H', 'Adidas'),
('Korea Republic', 'SHIN Taeyong', 3, 'F', 'Nike'),
('Mexico', 'OSORIO Juan Carlos', 6, 'F', 'Adidas'),
('Morocco', 'RENARD Herve', 1, 'B', 'Adidas'),
('Nigeria', 'ROHR Gernot', 3, 'D', 'Nike'),
('Panama', 'GOMEZ Hernan', 0, 'G', 'New Balance'),
('Peru', 'GARECA Ricardo', 3, 'C', 'Umbro'),
('Poland', 'NAWALKA Adam', 3, 'H', 'Nike'),
('Portugal', 'SANTOS Fernando', 5, 'B', 'Nike'),
('Russia', 'CHERCHESOV Stanislav', 6, 'A', 'Adidas'),
('Saudi Arabia', 'PIZZI Juan Antonio', 3, 'A', 'Nike'),
('Senegal', 'CISSE Aliou', 4, 'H', 'Romai'),
('Serbia', 'KRSTAJIC Mladen', 3, 'E', 'Umbro'),
('Spain', 'HIERRO Fernando', 5, 'B', 'Adidas'),
('Sweden', 'ANDERSSON Janne', 6, 'F', 'Adidas'),
('Switzerland', 'PETKOVIC Vladimir', 5, 'E', 'PUMA'),
('Tunisia', 'MAALOUL Nabil', 3, 'G', 'UHLSPORT'),
('Uruguay', 'TABAREZ Oscar', 9, 'A', 'PUMA');

-- --------------------------------------------------------

--
-- 表的结构 `tomandjerry`
--

CREATE TABLE `tomandjerry` (
  `NAME` varchar(10) NOT NULL,
  `SEXUAL` varchar(10) NOT NULL,
  `IS_LEADER` varchar(10) NOT NULL,
  `BIRTH_PLACE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tomandjerry`
--

INSERT INTO `tomandjerry` (`NAME`, `SEXUAL`, `IS_LEADER`, `BIRTH_PLACE`) VALUES
('李佳骏', '男', '组长', '河北邯郸'),
('潘巧巧', '女', '组员', '广西柳州');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '1613415', 'XsfxG4-jSh_p7Oy8BlkAHXikh8F_F7LY', '$2y$13$L83kAq0BJbGm9CXBzDCcW.yRr9FZCUrve5Kd/0Cy2EuuRJWPT6UZK', NULL, '40800931@qq.com', 10, 1532323910, 1532402258),
(2, '1613368', 'XGj6RaDidisIHajBxqCo9KwnccRyD0J8', '$2y$13$mTZzGYzIchuABJNrLqZKneotC/gqW6mRRraF0X1TRGUfPUd3j3R5m', NULL, '13347629779@163.com', 10, 1532324134, 1532324134);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`Coach_Name`);

--
-- Indexes for table `commentator`
--
ALTER TABLE `commentator`
  ADD PRIMARY KEY (`commentator_Name`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`Competition_Time`,`Competition_TeamA`,`Competition_TeamB`),
  ADD KEY `fk_1` (`Competition_Court`),
  ADD KEY `fk_2` (`Competition_CCTV5`),
  ADD KEY `fk_4` (`Competition_TeamA`),
  ADD KEY `fk_5` (`Competition_TeamB`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`court_Name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_Title`),
  ADD KEY `nation_ibfk_1` (`News_TeamA`),
  ADD KEY `nation_ibfk_2` (`News_TeamB`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_Team`,`player_Number`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`Sponsor_Name`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_Nation`),
  ADD KEY `Team_Coach` (`Team_Coach`),
  ADD KEY `Team_Shirtsponsor` (`Team_Shirtsponsor`);

--
-- Indexes for table `tomandjerry`
--
ALTER TABLE `tomandjerry`
  ADD PRIMARY KEY (`NAME`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 限制导出的表
--

--
-- 限制表 `competition`
--
ALTER TABLE `competition`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`Competition_Court`) REFERENCES `court` (`court_Name`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`Competition_CCTV5`) REFERENCES `commentator` (`commentator_Name`),
  ADD CONSTRAINT `fk_4` FOREIGN KEY (`Competition_TeamA`) REFERENCES `team` (`Team_Nation`),
  ADD CONSTRAINT `fk_5` FOREIGN KEY (`Competition_TeamB`) REFERENCES `team` (`Team_Nation`);

--
-- 限制表 `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `nation_ibfk_1` FOREIGN KEY (`News_TeamA`) REFERENCES `team` (`Team_Nation`),
  ADD CONSTRAINT `nation_ibfk_2` FOREIGN KEY (`News_TeamB`) REFERENCES `team` (`Team_Nation`);

--
-- 限制表 `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_Team_ibfk2` FOREIGN KEY (`player_Team`) REFERENCES `team` (`Team_Nation`);

--
-- 限制表 `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`Team_Coach`) REFERENCES `coach` (`Coach_Name`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`Team_Shirtsponsor`) REFERENCES `sponsor` (`Sponsor_Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
