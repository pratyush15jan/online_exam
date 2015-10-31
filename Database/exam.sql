-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2015 at 09:31 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `loginid`, `pass`) VALUES
(1, 'pratyush', 'pratyush');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(32, 12, 'How many Triangle are there', 'two', 'three', 'four', 'five', 1),
(33, 12, 'How many Center are there?', '2', '3', '4', '5', 4),
(34, 12, 'Define name', 'Seven', 'Sita', 'Gita', 'Name', 2),
(37, 13, '&#2349;&#2366;&#2352;&#2340; &#2325;&#2368; &#2352;&#2366;&#2332;&#2343;&#2366;&#2344;&#2368; &#2325;&#2381;&#2351;&#2366; &#2361;&#2376; ?', '&#2337;&#2375;&#2354;&#2381;&#2361;&#2368;', '&#2346;&#2369;&#2339;&#2375;', '&#2330;&#2306;&#2337;&#2368;&#2327;&#2397;', '&#2342;&#2375;&#2361;&#2352;&#2366;&#2342;&#2370;&#2344;', 1),
(38, 13, '&#2349;&#2366;&#2352;&#2340; &#2325;&#2348; &#2310;&#2395;&#2366;&#2342; &#2361;&#2369;&#2310; ?', '&#2360;&#2306; 1945', '&#2360;&#2306; 1950', '&#2360;&#2306; 1937', '&#2360;&#2306; 1947', 4),
(39, 13, '&#2340;&#2366;&#2332;&#2350;&#2361;&#2354; &#2325;&#2361;&#2366;&#2305; &#2348;&#2360;&#2366; &#2361;&#2369;&#2310; &#2361;&#2376;?', '&#2350;&#2369;&#2306;&#2348;&#2312;  ', ' &#2348;&#2306;&#2327;&#2354;&#2379;&#2352;', ' &#2310;&#2327;&#2352;&#2366;  ', '&#2332;&#2351;&#2346;&#2369;&#2352; ', 3),
(40, 13, '&#2349;&#2366;&#2352;&#2340; &#2344;&#2375; &#2357;&#2367;&#2358;&#2381;&#2357; &#2325;&#2346; &#2325;&#2348; &#2332;&#2368;&#2340;&#2366;?\r\n\r\n\r\n\r\n\r\n\r', '&#2407;&#2415;&#2415;&#2408;', '&#2408;&#2406;&#2406;&#2409;', '&#2408;&#2406;&#2407;&#2407;', '&#2408;&#2406;&#2406;&#2413;', 3),
(41, 13, '&#2349;&#2366;&#2352;&#2340; &#2325;&#2366; &#2323;&#2343;&#2379;&#2327;&#2367;&#2325; &#2358;&#2361;&#2352; &#2325;&#2367;&#2360;&#2375; &#2325;&#236', '&#2337;&#2375;&#2354;&#2381;&#2361;&#2368; ', '&#2360;&#2306;  &#2407;&#2415;&#2410;&#2413; ', '&#2346;&#2369;&#2339;&#2375; ', '&#2350;&#2369;&#2306;&#2348;&#2312;  ', 4),
(46, 14, '&#2349;&#2366;&#2352;&#2340; &#2350;&#2376;&#2306; &#2325;&#2369;&#2354; &#2325;&#2367;&#2340;&#2344;&#2375; &#2352;&#2366;&#2332;&#2381;&#2351; &#236', '&#2410;&#2411; ', ' &#2409;&#2410; ', '&#2410;&#2410; ', '  &#2409;&#2408; ', 2),
(47, 14, '&#2340;&#2366;&#2332;&#2350;&#2361;&#2354; &#2325;&#2361;&#2366;&#2305; &#2360;&#2381;&#2341;&#2367;&#2340; &#2361;&#2376; ?', '&#2310;&#2327;&#2352;&#2366;', '&#2309;&#2350;&#2371;&#2340;&#2360;&#2352; ', '&#2332;&#2376;&#2360;&#2354;&#2350;&#2375;&#2352;  ', '   &#2337;&#2375;&#2354;&#2381;&#2361;&#2368;  ', 1),
(50, 14, '&#2340;&#2369;&#2354;&#2360;&#2368;&#2342;&#2366;&#2360;  &#2325;&#2380;&#2344; &#2341;&#2375; ?', '&#2325;&#2357;&#2367;  ', '&#2337;&#2377;&#2325;&#2381;&#2335;&#2352;', '&#2311;&#2306;&#2332;&#2368;&#2344;&#2367;&#2351;&#2352;  ', '&#2354;&#2375;&#2326;&#2325;  ', 1),
(51, 14, '&#2342;&#2368;&#2346;&#2366;&#2357;&#2354;&#2368; &#2325;&#2381;&#2351;&#2379;&#2306; &#2350;&#2344;&#2366;&#2312; &#2332;&#2366;&#2340;&#2368; &#2361', '&#2352;&#2366;&#2357;&#2339; &#2325;&#2375; &#2350;&#2352;&#2344;&#2375; &#', '&#2349;&#2366;&#2352;&#2340; &#2310;&#2395;&#2366;&#2342; &#2361;&#2369;&#2', '&#2352;&#2366;&#2350; &#2309;&#2351;&#2379;&#2343;&#2381;&#2351;&#2366; &#2', '&#2311;&#2344;&#2350;&#2375; &#2360;&#2375; &#2325;&#2369;&#2331;  &#2349;&', 3),
(52, 14, '&#2313;&#2340;&#2381;&#2340;&#2352; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358; &#2325;&#2368; &#2352;&#2366;&#2332;&#2343;&#2366;&#2344;&#2368; &#2325', '&#2337;&#2375;&#2354;&#2381;&#2361;&#2368;  ', '&#2357;&#2366;&#2352;&#2366;&#2339;&#2360;&#2368; ', '&#2354;&#2326;&#2344;&#2314;  ', '&#2310;&#2327;&#2352;&#2366;   ', 3),
(53, 14, '&#2313;&#2340;&#2381;&#2340;&#2352; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358; &#2325;&#2368; &#2352;&#2366;&#2332;&#2343;&#2366;&#2344;&#2368; &#2325', '&#2337;&#2375;&#2354;&#2381;&#2361;&#2368;  ', '&#2357;&#2366;&#2352;&#2366;&#2339;&#2360;&#2368; ', '&#2354;&#2326;&#2344;&#2314;  ', '&#2310;&#2327;&#2352;&#2366;   ', 3),
(54, 15, 'vfdvgfdgv gvrelg,reg', '1', '3', '4', '5', 3),
(55, 14, 'sadf', 'asfsd', 'fdsd', 'fdsfds', 'dfdsf', 0),
(56, 14, 'India got Freedom ?', 'in 1942', 'in 1945', 'in 1947', 'in 1932', 3),
(57, 15, 'Garampani sanctuary is located at', 'Junagarh, Gujarat', 'Diphu, Assam', 'Kohima, Nagaland', 'Gangtok, Sikkim', 3),
(58, 15, 'Hitler party which came into power in 1933 is known as', 'Labour Party', 'Nazi Party', 'Ku-Klux-Klan', 'Democratic Party', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(3) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `login`, `test_id`, `test_date`, `score`, `status`) VALUES
(39, 'pratyush15', 12, '2015-10-21 14:41:19', 1, 'Fail'),
(40, 'pratyush15', 12, '2015-10-21 14:41:19', 0, 'Fail'),
(41, 'pratyush15', 12, '2015-10-21 14:41:19', 0, 'Fail'),
(42, 'pratyush15', 12, '2015-10-21 14:41:19', 0, 'Fail'),
(43, 'pratyush15', 13, '2015-10-21 14:41:19', 5, 'Pass'),
(44, 'pratyush15', 13, '2015-10-21 14:41:19', 1, 'Fail'),
(45, 'pratyush15', 12, '2015-10-21 14:41:19', 1, 'Fail'),
(46, 'pratyush15', 14, '2015-10-21 14:41:19', 4, 'Pass'),
(47, 'pratyush15', 14, '2015-10-21 14:41:19', 3, 'Pass'),
(48, 'pratyush15', 14, '2015-10-21 14:41:19', 4, 'Pass'),
(49, 'pratyush15', 14, '2015-10-21 14:41:19', 5, 'Pass'),
(50, 'pratyush15', 14, '2015-10-21 14:41:19', 0, ''),
(51, 'pratyush15', 14, '2015-10-21 14:41:19', 0, ''),
(52, 'pratyush15', 14, '2015-10-21 14:41:19', 4, ''),
(53, 'pratyush15', 15, '2015-10-21 14:41:19', 1, ''),
(54, 'pratyush15', 14, '0000-00-00 00:00:00', 3, ''),
(55, 'pratyush15', 14, '0000-00-00 00:00:00', 5, ''),
(56, 'pratyush15', 14, '0000-00-00 00:00:00', 4, ''),
(57, 'pratyush15', 14, '0000-00-00 00:00:00', 1, ''),
(58, 'pratyush15', 14, '0000-00-00 00:00:00', 3, ''),
(59, 'pratyush15', 14, '0000-00-00 00:00:00', 1, ''),
(60, 'pratyush15', 14, '0000-00-00 00:00:00', 3, ''),
(61, 'pratyush15', 14, '0000-00-00 00:00:00', 2, ''),
(62, 'pratyush15', 14, '0000-00-00 00:00:00', 1, ''),
(63, 'pratyush15jan', 14, '0000-00-00 00:00:00', 1, ''),
(64, 'pratyush15jan', 14, '0000-00-00 00:00:00', 6, ''),
(65, 'pratyush15', 15, '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
(2, 'Hindi'),
(3, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(12, 8, 'Chapter 1', '3'),
(14, 2, '&#2349;&#2366;&#2327; &#2407;', '6'),
(15, 3, 'Chapter 1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(15, 'pratyush15', '123', 'Pratyush', 'Noida', 'Noida', 2147483647, 'pks@123.com'),
(41, 'trtrgreyhery', '123', 'bhthrthrt', 'htrhtr', 'hrthrt', 0, 'ram@133.com'),
(42, 'fghghjg', 'gjhgjghj', 'hfgjh', 'ghghvgh', 'Delhi', 2147483647, 'pks@123.com'),
(43, 'pratyush15jan', 'pks@12345', 'Pratyush', 'Noida', 'Noida', 2147483647, 'pratyush15jan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2f6kmjrfml0igrk81ub4s2mnu1', 12, 'How many Triangle are there', 'two', 'three', 'four', 'five', 1, 4),
('2f6kmjrfml0igrk81ub4s2mnu1', 12, 'How many Center are there?', '2', '3', '4', '5', 4, 4),
('2f6kmjrfml0igrk81ub4s2mnu1', 12, 'Define name', 'Seven', 'Sita', 'Gita', 'Name', 2, 4),
('qkgl4t1a3k564kgnbam227beb1', 12, 'How many Triangle are there', 'two', 'three', 'four', 'five', 1, 2),
('qkgl4t1a3k564kgnbam227beb1', 12, 'How many Center are there?', '2', '3', '4', '5', 4, 3),
('qkgl4t1a3k564kgnbam227beb1', 12, 'Define name', 'Seven', 'Sita', 'Gita', 'Name', 2, 3),
('qkgl4t1a3k564kgnbam227beb1', 12, 'grngnreg g re gergreg rejg reger gnregnreg', '100', '2000', '130', '43', 1, 2),
('qkgl4t1a3k564kgnbam227beb1', 12, 'dhbdfh heryhe yht eryery', 'wer', 'ewrgter', 'trte', '21', 4, 3),
('drqpeerb7du7do7patcki78lo5', 12, 'How many Triangle are there', 'two', 'three', 'four', 'five', 1, 3),
('drqpeerb7du7do7patcki78lo5', 12, 'How many Center are there?', '2', '3', '4', '5', 4, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
