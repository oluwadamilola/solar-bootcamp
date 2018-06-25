-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 01:53 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'voltage'),
(2, 1, 0, 'current'),
(3, 1, 1, 'power'),
(4, 1, 0, 'Resistance'),
(5, 2, 0, '2000Whr'),
(6, 2, 1, '1000Whr'),
(7, 2, 0, '1500Whr'),
(8, 2, 0, '1650Whr'),
(9, 3, 1, 'True'),
(10, 3, 0, 'False'),
(11, 3, 0, 'unknown'),
(12, 3, 0, 'May be'),
(13, 4, 0, 'Power'),
(14, 4, 0, 'Resistance'),
(15, 4, 0, 'Voltage'),
(16, 4, 1, 'Energy'),
(17, 5, 0, 'safe to transfer over a long distance and can provide more power'),
(18, 5, 1, 'Frequency is zero'),
(19, 5, 0, 'Reverse its direction at frequent regular intervals while flowing in a circuit.'),
(20, 5, 0, 'It is the current of magnitude varying with time.'),
(21, 6, 0, 'Charge controller technology'),
(22, 6, 1, 'Photovoltaic technology'),
(23, 6, 0, 'Irradiance technology'),
(24, 6, 0, 'Power technology'),
(25, 7, 0, 'Solar panel'),
(26, 7, 1, 'Inverter'),
(27, 7, 0, 'Charge Controller'),
(28, 7, 0, 'Battery'),
(29, 8, 1, 'i, ii, iii'),
(30, 8, 0, 'i, iii, iv'),
(31, 8, 0, 'ii.iv'),
(32, 8, 0, 'ii, iii, iv'),
(33, 9, 0, 'wind'),
(34, 9, 0, 'Biomass'),
(35, 9, 0, 'Biofuel'),
(36, 9, 1, 'Natural gas'),
(37, 10, 0, 'Pv Panel'),
(38, 10, 1, 'cassette'),
(39, 10, 0, 'Wiring'),
(40, 10, 0, 'Load'),
(41, 11, 1, 'Self-discharge'),
(42, 11, 0, 'Photovoltaic Discharge'),
(43, 11, 0, 'DC-discharge'),
(44, 11, 0, 'Mono-discharge'),
(45, 12, 0, 'Temperature'),
(46, 12, 0, 'Age'),
(47, 12, 0, 'Type of batteries'),
(48, 12, 1, 'Test voltage output'),
(49, 13, 0, 'Temperature'),
(50, 13, 0, 'Current Output loss'),
(51, 13, 0, 'Battery loss'),
(52, 13, 1, 'Wiring loss'),
(53, 14, 0, 'Space availability'),
(54, 14, 0, 'Presence of Obstacles-trees or Buildings'),
(55, 14, 0, 'Site Orientation'),
(56, 14, 1, 'Road network'),
(57, 15, 0, 'Estimating electric loads'),
(58, 15, 1, 'Estimating costs and indices'),
(59, 15, 0, 'Sizing and specifying PV modules'),
(60, 15, 0, 'Sizing and specifying batteries'),
(61, 15, 0, 'Specifying a Charge Controller'),
(62, 15, 0, 'Sizing and Specifying an Inverter'),
(63, 16, 0, 'Compass'),
(64, 16, 0, 'Solar shading calculator'),
(65, 16, 0, 'Power quality equalizers'),
(66, 16, 1, 'Solar charge controller'),
(67, 17, 1, 'Car battery'),
(68, 17, 0, 'Flooded battery'),
(69, 17, 0, 'Gel battery'),
(70, 17, 0, 'AGM battery'),
(71, 18, 1, 'Energy storage'),
(72, 18, 0, 'Stopgaps'),
(73, 18, 0, 'Load'),
(74, 18, 0, 'Charger'),
(75, 19, 1, 'Your system is properly grounded.'),
(76, 19, 0, 'You add acid to your solar battery at any time.'),
(77, 19, 0, 'You accept advice on battery repairs from unauthorized persons'),
(78, 19, 0, 'You short circuit the terminal of your solar battery');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'what is the rate of energy conversion'),
(2, 'How  much energy is consumed if a 100-watt light bulb is used for 10 hours'),
(3, 'solar panel efficiency levels are relatively low(between:14%-25%) compared to the efficiency levels of other renewable energy systems.'),
(4, 'in measuring Electricity, what is the capacity for work'),
(5, 'The following are characteristics of alternating current(AC) except:'),
(6, 'solar energy travels over 93 million miles from the sun. As solar energy travels through the atmosphere to the earth surface, not all the energy reaches the earth crust.solar energy is harnessed and converted to heat or electricity using which of '),
(7, 'A piece of equipment that converts DC electricity into AC electricity is:'),
(8, 'The risk(threats) in on-site work are:\r\ni: Electrical shock\r\nii. Chemical burns\r\niii. Fire Outbreak\r\niv. Fire extinguisher'),
(9, 'The following are example of renewable energy except:'),
(10, 'The following are three key components in a solar home system except'),
(11, 'If batteries are left standing uncharged they loose charge slowly by a process called:'),
(12, 'The rate of which batteries loose their charge depends on the following except'),
(13, 'The three loss factors that must be taken into account in designing and system sizing process include the following except:'),
(14, 'In carrying out site assessment, the following factors need to be checked and confirmed except:'),
(15, 'The steps in the system sizing process include the following except:'),
(16, 'The ------ regulates the voltage and current flowing from the solar panel(s) to the battery since most solar panels can produce more than the rated voltage'),
(17, 'The types of batteries within the deep cycle categories suitable for use in solar systems include following except:'),
(18, 'Batteries are mainly user for ----- in many stand-alone PV systems'),
(19, 'As a safety precaution, ensure that:');

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `nyscid` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `university` varchar(20) NOT NULL,
  `score` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`id`, `surname`, `othernames`, `email`, `phonenumber`, `nyscid`, `course`, `university`, `score`) VALUES
(1, 'koju', 'Damilola', 'dammyolukoju@gmail.c', '08038328590', 'LA/17B/073', 'Computer Science', 'RUN', '5'),
(2, 'Aruna', 'Olamide', 'arunaola@gmail.com', '07032345678', 'LA/17B/073', '', 'Redeemers University', '5'),
(3, 'Dam', 'Funmi', 'fumdam@gmail.com', '07032345678', 'LA/16B/0001', 'marketing', 'unilag', '11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `tech`
--
ALTER TABLE `tech`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tech`
--
ALTER TABLE `tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
