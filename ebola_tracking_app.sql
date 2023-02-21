-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2022 at 08:20 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebola_tracking_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

DROP TABLE IF EXISTS `patient_data`;
CREATE TABLE IF NOT EXISTS `patient_data` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `D_O_B` date DEFAULT NULL,
  `date_of_admission` date DEFAULT NULL,
  `current_state` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `district` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nationality` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `next_of_kin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`patient_id`, `full_name`, `D_O_B`, `date_of_admission`, `current_state`, `phone_no`, `district`, `nationality`, `next_of_kin`) VALUES
(1, 'SEKITI_DERRICK', '2002-11-11', '2022-11-11', '2', '709908440', 'kampala', 'ugandan', 'NAKIBULE_IMELDA\r\n0704509872\r\nkampala\r\nUganda'),
(2, 'BAKABULINDI_ROGER', '1999-11-02', '2022-11-01', '1', '745769408', 'kampala', 'ugandan', 'KASSI_DENISE\r\n0778535326\r\nkampala\r\nuganda'),
(3, 'MUKASA_FALUC', '1990-10-02', '2022-10-06', '1', '789765433', 'WAKISO', 'ugandan', 'KAMPULILA_JAMES\r\n0745684901\r\nwakiso\r\nuganda'),
(4, 'NAKIMULI_CAROLINE', '2001-12-09', '2022-10-21', '3', '789906546', 'LIRA', 'ugandan', 'AKOL_SHARON\r\n0789906543\r\nkampala\r\nuganda'),
(5, 'TUMISIMWE_ELIZABETH', '2000-11-23', '2022-11-01', '2', '709907645', 'MBALALA', 'ugndan', 'MUHANGI_CHARLES\r\n0704868877\r\nMbalala\r\nugandan'),
(6, 'SENTUBWE_JAMES', '2001-07-06', '2022-11-02', '1', '789654327', 'kampala', 'ugandan', 'NABUKALE_IRENE\r\n0798653267\r\nkampala\r\nuganda'),
(7, 'NAKASI_DESIRE', '1997-04-05', '2022-11-03', '3', '789654875', 'kampala', 'ugandan', 'KASSI_DENISE\r\n0786543657\r\nkampala\r\nuganda'),
(8, 'NATIKUNDA_PRICILLA', '1995-01-20', '2022-11-02', '4', '745673492', 'entebbe', 'ugandan', 'MUKASA_FRED\r\n0789905467\r\nEntebbe\r\nuganda'),
(9, 'BINAYISA_GODFREY', '1987-11-09', '2022-11-02', '1', '778965410', 'jinja', 'ugandan', 'BBUMBA_PAUL\r\n0788560430\r\njinja\r\nuganda'),
(10, 'SEKADDE_SOLOMON', '1984-07-06', '2022-11-03', '3', '724567904', 'kampala', 'ugandan', 'MUKAMA_TIMOTHY\r\n0788657432\r\nkampala\r\nuganda'),
(11, 'SEKITI_JAMES', '1999-11-16', '2022-10-31', '2', '789657428', 'luweero', 'ugandan', 'NAKIBULE_IMELDA\r\n0724567890\r\nluweero\r\nkampala'),
(12, 'ABDALLAH_MACHY', '1999-12-29', '2022-11-03', '1', '784567834', 'wakiso', 'Ethiopian', 'MITHAL_HAKIM\r\n0725687904\r\nkampala\r\nuganda'),
(13, 'KATO TONNY', '1964-02-04', '2021-11-12', '0', '2147483647', 'Uganda,kampala', 'ugandan', 'NAKITI CAROL'),
(14, 'ALBERT MUSINGUZI', '2000-05-02', '2021-01-06', '0', '740002997', 'kabale,uganda', 'ugandan', 'HERBERT'),
(15, 'KASIRYE AMON', '1963-06-07', '1975-05-17', '3', '2147483647', 'Uganda,kampala', 'ugandan', 'NAKITI CAROL'),
(16, 'CHRIS', '0000-00-00', '1973-08-17', '2', '2147483647', 'Uganda,kampala', 'ugandan', 'CHRIS');

-- --------------------------------------------------------

--
-- Table structure for table `suspected_case`
--

DROP TABLE IF EXISTS `suspected_case`;
CREATE TABLE IF NOT EXISTS `suspected_case` (
  `suspected_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `current_status` varchar(30) NOT NULL,
  `signs_and_symptoms` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `district_country` text NOT NULL,
  PRIMARY KEY (`suspected_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suspected_case`
--

INSERT INTO `suspected_case` (`suspected_id`, `full_name`, `date_of_birth`, `current_status`, `signs_and_symptoms`, `district_country`) VALUES
(1, 'NAMYALO_VICTORIA', '1997-08-11', '2', 'Fever\r\nFatigue\r\nMuscle pain\r\nHeadache\r\nSore throat', 'Uganda\r\nkampala'),
(2, 'BAKABULINDI_ROGERZ', '1998-07-12', '1', 'Fever\r\nFatigue\r\nMuscle pain\r\n', 'kampala\r\nuganda'),
(3, 'KADDU_KELVIN', '2022-09-07', '3', 'Fever\r\nHeadache\r\nSore throat', 'luweero\r\nuganda'),
(4, 'APIO_SARAH', '2002-02-19', '2', 'Fever\r\nFatigue\r\nMuscle pain\r\nHeadache\r\nSore throat', 'lira\r\nuganda'),
(5, 'TUMUSIME_ELIZABETH', '2022-12-13', '3', 'Fever\r\nFatigue\r\nHeadache\r\nSore throat', 'kampala\r\nuganda'),
(6, 'LUMALA_BEN', '1988-03-03', '', 'Fever\r\nSore throat', 'jinja\r\nuganda'),
(7, 'MUGAMBA_ELVIS', '2000-11-30', '4', 'Fever\r\nFatigue\r\nMuscle pain\r\nHeadache\r\nSore throat', 'luweero\r\nuganda'),
(8, 'ALINAYITWE_DESIRE', '1990-12-09', '1', 'Fever\r\nFatigue\r\nMuscle pain\r\nSore throat', 'kampala\r\nuganda'),
(9, 'MAKUMBI_NED', '2003-03-03', '2', 'Fever\r\nMuscle pain\r\nHeadache\r\nSore throat', 'masaka\r\nuganda'),
(10, 'BAMWEYANA_TOM', '1988-11-18', '1', 'Headache\r\nSore throat', 'wakiso\r\nuganda'),
(11, 'JUUKO_PETER', '2001-06-09', '3', 'Fever\r\nFatigue\r\nMuscle pain\r\nHeadache\r\nSore throat', 'kampala\r\nuganda'),
(12, 'NAKITO_ROBINAH', '2000-01-04', '4', 'Fever\r\nFatigue\r\nMuscle pain\r\nHeadache\r\nSore throat', 'Mbarara\r\nuganda'),
(13, 'KASIRYE AMON', '1965-06-02', '2', 'fever,cough,bleeding', 'Uganda,kampala'),
(14, 'KATO TONNY', '1976-04-06', '2', 'cough,fever', 'Uganda,kampala'),
(15, 'MUKASA PETER', '1977-02-00', '1', 'cough,fever', 'Uganda,kampala'),
(16, 'KASIRYE JOHN', '2000-08-06', '2', 'mild fever', 'Uganda,kampala'),
(17, 'PETE', '1970-03-07', '3', 'bleeding', 'kabale,uganda');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `userid` varchar(20) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_no` int DEFAULT NULL,
  `national_id_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userid`, `fullname`, `password`, `email`, `phone_no`, `national_id_no`, `username`) VALUES
('1', 'SEKITI_DERRICK', '123', 'derrickromansh@gmail', 725678904, 'CM0203210G3X7J', 'DECO'),
('2', 'MUGAMBA_CHRISTOPHER', '123', 'christopher@gmail.co', 709865435, 'CM0206510G9X7M', 'CHRIS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
