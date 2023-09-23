-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2018 at 01:58 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vission_2k18`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=347 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Amir Chah'),
(2, 'Bazdar'),
(3, 'Bela'),
(4, 'Bellpat'),
(5, 'Bagh'),
(6, 'Burj'),
(7, 'Chagai'),
(8, 'Chah Sandan'),
(9, 'Chakku'),
(10, 'Chaman'),
(11, 'Chhatr'),
(12, 'Dalbandin'),
(13, 'Dera Bugti'),
(14, 'Dhana Sar'),
(15, 'Diwana'),
(16, 'Duki'),
(17, 'Dushi'),
(18, 'Duzab'),
(19, 'Gajar'),
(20, 'Gandava'),
(21, 'Garhi Khairo'),
(22, 'Garruck'),
(23, 'Ghazluna'),
(24, 'Girdan'),
(25, 'Gulistan'),
(26, 'Gwadar'),
(27, 'Gwash'),
(28, 'Hab Chauki'),
(29, 'Hameedabad'),
(30, 'Harnai'),
(31, 'Hinglaj'),
(32, 'Hoshab'),
(33, 'Ispikan'),
(34, 'Jhal'),
(35, 'Jhal Jhao'),
(36, 'Jhatpat'),
(37, 'Jiwani'),
(38, 'Kalandi'),
(39, 'Kalat'),
(40, 'Kamararod'),
(41, 'Kanak'),
(42, 'Kandi'),
(43, 'Kanpur'),
(44, 'Kapip'),
(45, 'Kappar'),
(46, 'Karodi'),
(47, 'Katuri'),
(48, 'Kharan'),
(49, 'Khuzdar'),
(50, 'Kikki'),
(51, 'Kohan'),
(52, 'Kohlu'),
(53, 'Korak'),
(54, 'Lahri'),
(55, 'Lasbela'),
(56, 'Liari'),
(57, 'Loralai'),
(58, 'Mach'),
(59, 'Mand'),
(60, 'Manguchar'),
(61, 'Mashki Chah'),
(62, 'Maslti'),
(63, 'Mastung'),
(64, 'Mekhtar'),
(65, 'Merui'),
(66, 'Mianez'),
(67, 'Murgha Kibzai'),
(68, 'Musa Khel Bazar'),
(69, 'Nagha Kalat'),
(70, 'Nal'),
(71, 'Naseerabad'),
(72, 'Nauroz Kalat'),
(73, 'Nur Gamma'),
(74, 'Nushki'),
(75, 'Nuttal'),
(76, 'Ormara'),
(77, 'Palantuk'),
(78, 'Panjgur'),
(79, 'Pasni'),
(80, 'Piharak'),
(81, 'Pishin'),
(82, 'Qamruddin Karez'),
(83, 'Qila Abdullah'),
(84, 'Qila Ladgasht'),
(85, 'Qila Safed'),
(86, 'Qila Saifullah'),
(87, 'Quetta'),
(88, 'Rakhni'),
(89, 'Robat Thana'),
(90, 'Rodkhan'),
(91, 'Saindak'),
(92, 'Sanjawi'),
(93, 'Saruna'),
(94, 'Shabaz Kalat'),
(95, 'Shahpur'),
(96, 'Sharam Jogizai'),
(97, 'Shingar'),
(98, 'Shorap'),
(99, 'Sibi'),
(100, 'Sonmiani'),
(101, 'Spezand'),
(102, 'Spintangi'),
(103, 'Sui'),
(104, 'Suntsar'),
(105, 'Surab'),
(106, 'Thalo'),
(107, 'Tump'),
(108, 'Turbat'),
(109, 'Umarao'),
(110, 'pirMahal'),
(111, 'Uthal'),
(112, 'Vitakri'),
(113, 'Wadh'),
(114, 'Washap'),
(115, 'Wasjuk'),
(116, 'Yakmach'),
(117, 'Zhob'),
(118, 'Abbottabad'),
(119, 'Ayubia'),
(120, 'Adezai'),
(121, 'Banda Daud Shah'),
(122, 'Bannu'),
(123, 'Batagram'),
(124, 'Birote'),
(125, 'Buner'),
(126, 'Chakdara'),
(127, 'Charsadda'),
(128, 'Chitral'),
(129, 'Dargai'),
(130, 'Darya Khan'),
(131, 'Dera Ismail Khan'),
(132, 'Drasan'),
(133, 'Drosh'),
(134, 'Hangu'),
(135, 'Haripur'),
(136, 'Kalam'),
(137, 'Karak'),
(138, 'Khanaspur'),
(139, 'Kohat'),
(140, 'Kohistan'),
(141, 'Lakki Marwat'),
(142, 'Latamber'),
(143, 'Lower Dir'),
(144, 'Madyan'),
(145, 'Malakand'),
(146, 'Mansehra'),
(147, 'Mardan'),
(148, 'Mastuj'),
(149, 'Mongora'),
(150, 'Nowshera'),
(151, 'Paharpur'),
(152, 'Peshawar'),
(153, 'Saidu Sharif'),
(154, 'Shangla'),
(155, 'Sakesar'),
(156, 'Swabi'),
(157, 'Swat'),
(158, 'Tangi'),
(159, 'Tank'),
(160, 'Thall'),
(161, 'Tordher'),
(162, 'Upper Dir'),
(163, 'Ahmedpur East'),
(164, 'Ahmed Nager Chatha'),
(165, 'Ali Pur'),
(166, 'Arifwala'),
(167, 'Attock'),
(168, 'Basti Malook'),
(169, 'Bhagalchur'),
(170, 'Bhalwal'),
(171, 'Bahawalnagar'),
(172, 'Bahawalpur'),
(173, 'Bhaipheru'),
(174, 'Bhakkar'),
(175, 'Burewala'),
(176, 'Chailianwala'),
(177, 'Chakwal'),
(178, 'Chichawatni'),
(179, 'Chiniot'),
(180, 'Chowk Azam'),
(181, 'Chowk Sarwar Shaheed'),
(182, 'Daska'),
(183, 'Darya Khan'),
(184, 'Dera Ghazi Khan'),
(185, 'Derawar Fort'),
(186, 'Dhaular'),
(187, 'Dina City'),
(188, 'Dinga'),
(189, 'Dipalpur'),
(190, 'Faisalabad'),
(191, 'Fateh Jang'),
(192, 'Gadar'),
(193, 'Ghakhar Mandi'),
(194, 'Gujranwala'),
(195, 'Gujrat'),
(196, 'Gujar Khan'),
(197, 'Hafizabad'),
(198, 'Haroonabad'),
(199, 'Hasilpur'),
(200, 'Haveli Lakha'),
(201, 'Jampur'),
(202, 'Jhang'),
(203, 'Jhelum'),
(204, 'Kalabagh'),
(205, 'Karor Lal Esan'),
(206, 'Kasur'),
(207, 'Kamalia'),
(208, 'Kamokey'),
(209, 'Khanewal'),
(210, 'Khanpur'),
(211, 'Kharian'),
(212, 'Khushab'),
(213, 'Kot Addu'),
(214, 'Jahania'),
(215, 'Jalla Araain'),
(216, 'Jauharabad'),
(217, 'Laar'),
(218, 'Lahore'),
(219, 'Lalamusa'),
(220, 'Layyah'),
(221, 'Lodhran'),
(222, 'Mamoori'),
(223, 'Mandi Bahauddin'),
(224, 'Makhdoom Aali'),
(225, 'Mandi Warburton'),
(226, 'Mailsi'),
(227, 'Mian Channu'),
(228, 'Minawala'),
(229, 'Mianwali'),
(230, 'Multan'),
(231, 'Murree'),
(232, 'Muridke'),
(233, 'Muzaffargarh'),
(234, 'Narowal'),
(235, 'Okara'),
(236, 'Renala Khurd'),
(237, 'Rajan Pur'),
(238, 'Pak Pattan'),
(239, 'Panjgur'),
(240, 'Pattoki'),
(241, 'Pirmahal'),
(242, 'Qila Didar Singh'),
(243, 'Rabwah'),
(244, 'Raiwind'),
(245, 'Rajan Pur'),
(246, 'Rahim Yar Khan'),
(247, 'Rawalpindi'),
(248, 'Rohri'),
(249, 'Sadiqabad'),
(250, 'Safdar Abad – (Dhaban Singh)'),
(251, 'Sahiwal'),
(252, 'Sangla Hill'),
(253, 'Samberial'),
(254, 'Sarai Alamgir'),
(255, 'Sargodha'),
(256, 'Shakargarh'),
(257, 'Shafqat Shaheed Chowk'),
(258, 'Sheikhupura'),
(259, 'Sialkot'),
(260, 'Sohawa'),
(261, 'Sooianwala'),
(262, 'Sundar (city)'),
(263, 'Talagang'),
(264, 'Tarbela'),
(265, 'Takhtbai'),
(266, 'Taxila'),
(267, 'Toba Tek Singh'),
(268, 'Vehari'),
(269, 'Wah Cantonment'),
(270, 'Wazirabad'),
(271, 'Ali Bandar'),
(272, 'Baden'),
(273, 'Chachro'),
(274, 'Dadu'),
(275, 'Digri'),
(276, 'Diplo'),
(277, 'Dokri'),
(278, 'Gadra'),
(279, 'Ghanian'),
(280, 'Ghauspur'),
(281, 'Ghotki'),
(282, 'Hala'),
(283, 'Hyderabad'),
(284, 'Islamkot'),
(285, 'Jacobabad'),
(286, 'Jamesabad'),
(287, 'Jamshoro'),
(288, 'Janghar'),
(289, 'Jati (Mughalbhin)'),
(290, 'Jhudo'),
(291, 'Jungshahi'),
(292, 'Kandiaro'),
(293, 'Karachi'),
(294, 'Kashmor'),
(295, 'Keti Bandar'),
(296, 'Khairpur'),
(297, 'Khora'),
(298, 'Klupro'),
(299, 'Khokhropur'),
(300, 'Korangi'),
(301, 'Kotri'),
(302, 'Kot Sarae'),
(303, 'Larkana'),
(304, 'Lund'),
(305, 'Mathi'),
(306, 'Matiari'),
(307, 'Mehar'),
(308, 'Mirpur Batoro'),
(309, 'Mirpur Khas'),
(310, 'Mirpur Sakro'),
(311, 'Mithi'),
(312, 'Mithani'),
(313, 'Moro'),
(314, 'Nagar Parkar'),
(315, 'Naushara'),
(316, 'Naudero'),
(317, 'Noushero Feroz'),
(318, 'Nawabshah'),
(319, 'Nazimabad'),
(320, 'Naokot'),
(321, 'Pendoo'),
(322, 'Pokran'),
(323, 'Qambar'),
(324, 'Qazi Ahmad'),
(325, 'Ranipur'),
(326, 'Ratodero'),
(327, 'Rohri'),
(328, 'Saidu Sharif'),
(329, 'Sakrand'),
(330, 'Sanghar'),
(331, 'Shadadkhot'),
(332, 'Shahbandar'),
(333, 'Shahdadpur'),
(334, 'Shahpur Chakar'),
(335, 'Shikarpur'),
(336, 'Sujawal'),
(337, 'Sukkur'),
(338, 'Tando Adam'),
(339, 'Tando Allahyar'),
(340, 'Tando Bago'),
(341, 'Tar Ahamd Rind'),
(342, 'Thatta'),
(343, 'Tujal'),
(344, 'Umarkot'),
(345, 'Veirwaro'),
(346, 'Warah');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messsage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `messsage`) VALUES
(1, 'ali', 'hussain1610e@aptechgdn.net', 'hy how are you?'),
(2, 'ali', 'hussain1610e@aptechgdn.net', 'hy how are you?'),
(3, 'ali', 'hussain1610e@aptechgdn.net', 'hy how are you?'),
(4, 'hussain', 'abhb', 'hi '),
(5, 'hussain', 'husain@text.com', 'hy how are you?'),
(6, 'hussain', 'hussain1610e@aptechgdn.net', 'hy how are you?'),
(7, 'ali', 'txt@gmail.com', 'hi hello'),
(8, 'hussain', 'aftab@tc.com', 'ok i'),
(9, 'hussain', 'aftab@tc.com', 'ok i'),
(10, 'hhhhhh ', 'husain@text.com', 'hnnn');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `cv`, `email`, `status`) VALUES
(1, 'assets/cvs/683jk.txt', 'hussaini@gmail.com', 0),
(2, 'assets/cvs/819jk.txt', 'cvbnm@gmail.com', 0),
(3, 'assets/cvs/821jk.txt', 'hussaini@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feild`
--

DROP TABLE IF EXISTS `feild`;
CREATE TABLE IF NOT EXISTS `feild` (
  `id` int(11) NOT NULL,
  `subjeect` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inter`
--

DROP TABLE IF EXISTS `inter`;
CREATE TABLE IF NOT EXISTS `inter` (
  `t_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inter`
--

INSERT INTO `inter` (`t_id`, `sid`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `material` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `type`, `from`, `reply`, `material`, `date`) VALUES
(1, 2, 8, 0, '(a+b)=ab?', '2018-08-27 03:12:23pm'),
(2, 0, 1, 1, 'yes', '2018-08-27 03:16:28pm'),
(3, 2, 8, 0, 'a+b=c', '2018-08-27 03:28:43pm'),
(4, 0, 1, 3, 'i know the answer\r\n', '2018-08-27 03:29:24pm'),
(5, 0, 1, 1, 'ok', '2018-08-27 04:21:03pm');

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

DROP TABLE IF EXISTS `messenger`;
CREATE TABLE IF NOT EXISTS `messenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `messaage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messenger`
--

INSERT INTO `messenger` (`id`, `tid`, `sid`, `type`, `date`, `time`, `messaage`) VALUES
(1, 1, 2, 2, 'August 04, 2018', '12:01:06 PM', 'asalam alaikum'),
(2, 1, 2, 1, 'August 04, 2018', '12:01:34 PM', 'yes'),
(3, 1, 2, 2, 'August 04, 2018', '12:02:23 PM', 'kia haal hain]'),
(4, 1, 8, 2, 'August 27, 2018', '03:13:25 PM', 'hi '),
(5, 1, 8, 2, 'August 27, 2018', '03:14:13 PM', 'salam'),
(6, 1, 8, 1, 'August 27, 2018', '03:16:11 PM', 'hello'),
(7, 1, 8, 2, 'August 27, 2018', '03:25:15 PM', 'question here');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `t_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `per` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`t_id`, `skill_name`, `per`) VALUES
(1, 'php', '50'),
(1, 'html', '100'),
(2, 'java', '80'),
(2, 'php', '95');

-- --------------------------------------------------------

--
-- Table structure for table `st_data`
--

DROP TABLE IF EXISTS `st_data`;
CREATE TABLE IF NOT EXISTS `st_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` int(11) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `j_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_data`
--

INSERT INTO `st_data` (`id`, `username`, `password`, `email`, `city`, `pic`, `j_date`) VALUES
(1, 'admin', 'pass', 'hussaini@gmail.com', 5, 'hhh', ''),
(2, 'naar', 'yaar', 'hussaini@gmail.com', 120, 'assets/profilestudent/178download.png', ''),
(3, 'abd', '123', 'hussaini@gmail.com', 120, 'assets/profilestudent/793download.png', ''),
(4, 'abdullah', '1234a', 'abdullah@gmail.com', 3, 'assets/profilestudent/21MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg', ''),
(5, 'hussain', 'hussain', 'hussaini@gmail.com', 293, 'assets/profilestudent/587775MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg', '30 Jul 2018'),
(6, 'hassan420', '0331804169', 'cvbnm@gmail.com', 293, 'assets/profilestudent/62921MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg', '30 Jul 2018'),
(7, 'hussain920', '03322081274', 'cvbnm@gmail.com', 293, 'assets/profilestudent/855775MV5BZDk1ZmU0NGYtMzQ2Yi00N2NjLTkyNWEtZWE2NTU4NTJiZGUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR4,0,214,317_AL_.jpg', '30 Jul 2018'),
(8, 'Murad', 'Minhaj', 'murad@gmail.com', 293, 'assets/profilestudent/467627download (2).jpg', '27 Aug 2018');

-- --------------------------------------------------------

--
-- Table structure for table `t_data`
--

DROP TABLE IF EXISTS `t_data`;
CREATE TABLE IF NOT EXISTS `t_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `city` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `purposal` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_data`
--

INSERT INTO `t_data` (`id`, `username`, `f_name`, `l_name`, `designation`, `email`, `password`, `number`, `qualification`, `city`, `country`, `pic`, `purposal`) VALUES
(1, 'alibaba', 'Ali', 'sareem', 'SOFTWARE ENGINEER', 'abdullahwahid88@gmail.com', 'abd', '03318104169', 'Ph.d', 166, 'PAKISTAN', 'assets/profilestudent/192793download.png', 'The standard probably does say that window.location.href is a property, not a method, but Internet Explorer (version 10 at least) allows you to treat href as a method too. I\'ve seen it work, only in IE10, on one page I\'ve used. That\'s probably why the asker was calling href a method. See the question IE incompatability with window.location.href. But yes, it\'s better to use href as a property, which will work in any browser, including IE. â€“ Rory O\'Kane May 30 \'13 at 19:50 \r\n4\r\n@RoryO\'Kane, this question was asked in 2011. I doubt the user was referring to IE 10. â€“ James Hill May 30 \'13 at 20:35 \r\n8\r\nTrue. But I think itâ€™s likely, though not certain, that older versions of IE treated window.location.href the same way. After all, newer versions of iE are generally getting more standards-based, not less. So if IE10 is still breaking the standard, then older versions probably did too. â€“ Rory O\'Kane May 30 \'13 at 21:41\r\nadd a comment\r\nup vote\r\n29'),
(2, 'oman', 'aslam', 'raheel', 'officer', 'raheel@gmail.com', 'oman', '03333333333', 'B.ED', 18, 'PAKISTAN', 'assets/profilestudent/544793download.png', 'The submit() method submits the form (same as clicking the Submit button).\r\n\r\nTip: Use the reset() method to reset the form.');

-- --------------------------------------------------------

--
-- Table structure for table `veiws`
--

DROP TABLE IF EXISTS `veiws`;
CREATE TABLE IF NOT EXISTS `veiws` (
  `t_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veiws`
--

INSERT INTO `veiws` (`t_id`, `sid`) VALUES
(1, 2),
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `url` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `w_ex`
--

DROP TABLE IF EXISTS `w_ex`;
CREATE TABLE IF NOT EXISTS `w_ex` (
  `tid` int(11) NOT NULL,
  `w_place` varchar(150) NOT NULL,
  `w_dur` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `w_ex`
--

INSERT INTO `w_ex` (`tid`, `w_place`, `w_dur`) VALUES
(1, 'software house', '3 months'),
(1, 'shop', '1 year'),
(2, 'system Operator', '5 months');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
