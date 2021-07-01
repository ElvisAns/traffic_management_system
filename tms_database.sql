-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 01 Juillet 2021 à 12:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tms_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `car_logs`
--

CREATE TABLE IF NOT EXISTS `car_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Names` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `plate_num` varchar(30) NOT NULL,
  `speed` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `observation` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Contenu de la table `car_logs`
--

INSERT INTO `car_logs` (`id`, `Names`, `Phone`, `plate_num`, `speed`, `time`, `date`, `observation`, `status`) VALUES
(45, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '08:49', '21/02/2021', 'Fine', 'Regular'),
(46, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.15', '09:05', '21/02/2021', 'Fine', 'Regular'),
(47, 'Not neccessary', 'Not neccessary', 'Not neccessary', '51.43', '09:05', '21/02/2021', 'Fine', 'Regular'),
(48, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.15', '09:05', '21/02/2021', 'Fine', 'Regular'),
(49, 'Not neccessary', 'Not neccessary', 'Not neccessary', '6.92', '09:05', '21/02/2021', 'Fine', 'Regular'),
(50, 'Not neccessary', 'Not neccessary', 'Not neccessary', '4.83', '09:05', '21/02/2021', 'Fine', 'Regular'),
(51, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.14', '09:05', '21/02/2021', 'Fine', 'Regular'),
(52, 'Not neccessary', 'Not neccessary', 'Not neccessary', '6.67', '09:05', '21/02/2021', 'Fine', 'Regular'),
(53, 'Not neccessary', 'Not neccessary', 'Not neccessary', '1.28', '09:05', '21/02/2021', 'Fine', 'Regular'),
(54, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.12', '09:05', '21/02/2021', 'Fine', 'Regular'),
(55, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.12', '09:05', '21/02/2021', 'Fine', 'Regular'),
(56, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.12', '09:05', '21/02/2021', 'Fine', 'Regular'),
(57, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(58, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(59, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(60, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(61, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(62, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(63, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.10', '09:05', '21/02/2021', 'Fine', 'Regular'),
(64, 'Not neccessary', 'Not neccessary', 'Not neccessary', '14.69', '09:05', '21/02/2021', 'Fine', 'Regular'),
(65, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.09', '09:05', '21/02/2021', 'Fine', 'Regular'),
(66, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.09', '09:05', '21/02/2021', 'Fine', 'Regular'),
(67, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.09', '09:05', '21/02/2021', 'Fine', 'Regular'),
(68, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.02', '12:46', '21/02/2021', 'Fine', 'Regular'),
(69, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:46', '21/02/2021', 'Fine', 'Regular'),
(70, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:46', '21/02/2021', 'Fine', 'Regular'),
(71, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(72, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(73, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(74, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(75, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(76, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(77, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(78, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(79, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(80, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(81, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(82, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(83, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(84, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(85, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(86, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(87, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(88, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(89, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(90, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(91, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.01', '12:47', '21/02/2021', 'Fine', 'Regular'),
(92, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:49', '21/02/2021', 'Fine', 'Regular'),
(93, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:49', '21/02/2021', 'Fine', 'Regular'),
(94, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:50', '21/02/2021', 'Fine', 'Regular'),
(95, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:50', '21/02/2021', 'Fine', 'Regular'),
(96, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:50', '21/02/2021', 'Fine', 'Regular'),
(97, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:50', '21/02/2021', 'Fine', 'Regular'),
(98, 'Not neccessary', 'Not neccessary', 'Not neccessary', '0.00', '12:50', '21/02/2021', 'Fine', 'Regular'),
(99, 'No camera', 'No camera', 'No camera', '360.00', '13:15', '21/02/2021', 'No-Alert', 'Could be paying178683frw'),
(100, 'No camera', 'No camera', 'No camera', '720.00', '13:15', '21/02/2021', 'No-Alert', 'Could be paying370532frw'),
(101, 'No camera', 'No camera', 'No camera', '720.00', '13:15', '21/02/2021', 'No-Alert', 'Could be paying370532frw');

-- --------------------------------------------------------

--
-- Structure de la table `driving_licence_record`
--

CREATE TABLE IF NOT EXISTS `driving_licence_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Names` varchar(60) NOT NULL,
  `licence_plate` varchar(30) NOT NULL,
  `ID_card_or_passport` varchar(20) NOT NULL,
  `telephone_number` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `registration_date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Names` (`Names`),
  UNIQUE KEY `Names_2` (`Names`,`telephone_number`),
  KEY `Names_3` (`Names`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `driving_licence_record`
--

INSERT INTO `driving_licence_record` (`id`, `Names`, `licence_plate`, `ID_card_or_passport`, `telephone_number`, `Address`, `registration_date`) VALUES
(1, 'ANSIMA CIBALINDA ELVIS', 'KN8971BC', 'A22386', '+250786093098', 'Kigali,Gisozi', '13/02/2020'),
(11, 'ANSIMA ELVIS', '5658AAI', '3693IDS', '+250786093098', 'KG 665st', '2021-02-19'),
(12, 'JOS', 'BB183', '874634', '+250786093098', 'KG 665st', '2021-02-12');

-- --------------------------------------------------------

--
-- Structure de la table `exchange`
--

CREATE TABLE IF NOT EXISTS `exchange` (
  `id` int(11) NOT NULL,
  `time_off_street_light` varchar(50) NOT NULL,
  `time_on_street_light` varchar(20) NOT NULL,
  `street_light_state` int(11) NOT NULL,
  `camera_lane_1` varchar(160) NOT NULL,
  `camera_lane_2` varchar(160) NOT NULL,
  `camera_lane_3` varchar(160) NOT NULL,
  `delay_light_change` varchar(20) NOT NULL,
  `lane_1_light_state` varchar(50) NOT NULL,
  `lane_1_traffic` varchar(50) NOT NULL,
  `lane_1_waiting_time` varchar(50) NOT NULL,
  `lane_2_light_state` varchar(50) NOT NULL,
  `lane_2_traffic` varchar(50) NOT NULL,
  `lane_2_waiting_time` varchar(50) NOT NULL,
  `lane_3_light_state` varchar(50) NOT NULL,
  `lane_3_traffic` varchar(50) NOT NULL,
  `lane_3_waiting_time` varchar(50) NOT NULL,
  `max_sec_wait` varchar(50) NOT NULL,
  `min_sec_wait` varchar(50) NOT NULL,
  `switching_mode` varchar(20) NOT NULL,
  PRIMARY KEY (`time_off_street_light`),
  UNIQUE KEY `settings` (`time_off_street_light`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exchange`
--

INSERT INTO `exchange` (`id`, `time_off_street_light`, `time_on_street_light`, `street_light_state`, `camera_lane_1`, `camera_lane_2`, `camera_lane_3`, `delay_light_change`, `lane_1_light_state`, `lane_1_traffic`, `lane_1_waiting_time`, `lane_2_light_state`, `lane_2_traffic`, `lane_2_waiting_time`, `lane_3_light_state`, `lane_3_traffic`, `lane_3_waiting_time`, `max_sec_wait`, `min_sec_wait`, `switching_mode`) VALUES
(2, '05:50', '18:00', 0, 'http://10.124.18.93:8080/', 'http://100.320.87.175:8080/', 'http://100.220.87.145:8080/', '300', 'yellow', '65', '', 'red', '70', '', 'green', '72', '', '300', '30', 'Lane by Lane'),
(1, '06:05', '18:00', 0, 'http://10.124.80.104:8080/', 'http://10.121.230.0:8080/', 'http://100.220.87.145:8080/', '106', 'red', '8', '', 'red', '8', '', 'green', '8', '', '300', '100', 'System decision');

-- --------------------------------------------------------

--
-- Structure de la table `time_sync`
--

CREATE TABLE IF NOT EXISTS `time_sync` (
  `id` int(11) NOT NULL,
  `current_time_sync` int(5) NOT NULL,
  PRIMARY KEY (`id`,`current_time_sync`),
  UNIQUE KEY `current_time_sync` (`current_time_sync`),
  UNIQUE KEY `current_time_sync_2` (`current_time_sync`),
  UNIQUE KEY `id` (`id`),
  KEY `current_time_sync_3` (`current_time_sync`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `time_sync`
--

INSERT INTO `time_sync` (`id`, `current_time_sync`) VALUES
(1, 91);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
