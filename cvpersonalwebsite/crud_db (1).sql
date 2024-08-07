-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2024 at 09:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `records_tb`
--

DROP TABLE IF EXISTS `records_tb`;
CREATE TABLE IF NOT EXISTS `records_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateAdded` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=856 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records_tb`
--

INSERT INTO `records_tb` (`id`, `fname`, `mname`, `lname`, `birthday`, `age`, `gender`, `dateAdded`, `image`) VALUES
(675, 'Marites', 'Doe', 'Villanueva', '2016-03-23', '25', 'Other', '2020-12-02', ''),
(676, 'Kevin', 'Kalad', 'Nitch', '1971-08-25', '52', 'Male', '2020-09-05', ''),
(677, 'Marites', 'Dura', 'Villanueva', '1996-02-29', '36', 'Female', '2020-01-14', ''),
(679, 'Livy', 'Yeah', 'Brench', '2007-06-06', '17', 'Male', '2024-07-06', 'IMG-668b9c6b3b82f0.15399344.png'),
(681, 'Marites', 'Kalad', 'Villanueva', '1972-10-05', '79', 'Other', '2020-02-26', ''),
(682, 'Marites', 'Sita', 'Nitch', '1975-01-14', '42', 'Male', '2020-05-22', ''),
(683, 'Kevin', 'Dura', 'Villanueva', '1985-03-16', '51', 'Male', '2020-01-06', ''),
(684, 'Karen', 'Kalad', 'Koala', '1971-06-23', '43', 'Other', '2020-03-15', ''),
(685, 'Kevin', '', 'Villanueva', '1987-05-05', '46', 'Other', '2020-01-28', ''),
(686, 'John', 'Dura', 'Nitch', '1979-01-17', '31', 'Male', '2020-11-04', ''),
(687, 'Kevin', 'Doe', 'Villanueva', '1999-10-20', '25', 'Other', '2020-11-27', ''),
(688, 'John', 'Dura', 'Nitch', '2011-09-04', '25', 'Female', '2020-11-09', ''),
(689, 'Kevin', 'Sita', 'Nitch', '2000-07-05', '69', 'Other', '2020-06-02', ''),
(690, 'Kevin', 'Dura', 'Dela Cruz', '1992-08-31', '65', 'Other', '2020-11-08', ''),
(691, 'Marites', 'Kalad', 'Nitch', '1980-07-18', '43', 'Other', '2020-08-27', ''),
(692, 'Karen', 'Doe', 'Koala', '1993-03-12', '41', 'Male', '2020-08-19', ''),
(693, 'Marites', 'Kalad', 'Villanueva', '1979-07-12', '62', 'Other', '2020-12-28', ''),
(694, 'Marites', 'Dura', 'Villanueva', '2018-05-25', '38', 'Female', '2020-07-29', ''),
(695, 'Kevin', 'Kalad', 'Koala', '1973-12-07', '67', 'Female', '2020-12-02', ''),
(696, 'Marites', 'Sita', 'Dela Cruz', '1971-09-16', '74', 'Other', '2020-03-21', ''),
(697, 'Marites', 'Dura', 'Villanueva', '2003-03-03', '75', 'Female', '2020-11-28', ''),
(698, 'John', 'Dura', 'Nitch', '1979-11-11', '61', 'Male', '2020-08-12', ''),
(699, 'Karen', '', 'Koala', '1984-01-18', '10', 'Female', '2020-11-06', ''),
(700, 'Marites', 'Sita', 'Villanueva', '1972-09-03', '53', 'Male', '2020-03-27', ''),
(701, 'Marites', 'Dura', 'Nitch', '2018-08-25', '29', 'Female', '2020-05-29', ''),
(702, 'Kevin', 'Dura', 'Lemy', '1992-12-27', '46', 'Female', '2020-01-29', ''),
(703, 'John', 'Doe', 'Villanueva', '2000-12-31', '69', 'Other', '2020-03-14', ''),
(704, 'Karen', 'Dura', 'Villanueva', '2009-09-04', '55', 'Other', '2020-05-23', ''),
(705, 'Kevin', 'Doe', 'Nitch', '1986-03-05', '53', 'Female', '2020-11-15', ''),
(706, 'John', 'Dura', 'Dela Cruz', '1995-02-08', '77', 'Other', '2020-02-23', ''),
(707, 'John', 'Dura', 'Koala', '2014-04-22', '25', 'Female', '2020-05-12', ''),
(708, 'John', 'Kalad', 'Dela Cruz', '2009-05-01', '31', 'Other', '2020-08-20', ''),
(709, 'Kevin', 'Doe', 'Nitch', '2003-08-02', '49', 'Other', '2020-02-11', ''),
(710, 'John', 'Kalad', 'Nitch', '1977-09-02', '35', 'Female', '2020-02-06', ''),
(711, 'Kevin', 'Doe', 'Koala', '2008-06-15', '58', 'Other', '2020-03-06', ''),
(712, 'Kevin', 'Dura', 'Dela Cruz', '1988-01-12', '36', 'Female', '2020-02-04', ''),
(713, 'John', 'Dura', 'Nitch', '2016-05-16', '73', 'Female', '2020-01-22', ''),
(714, 'Marites', 'Doe', 'Nitch', '1981-07-19', '35', 'Female', '2020-12-24', ''),
(715, 'Kevin', 'Dura', 'Villanueva', '1988-01-09', '54', 'Female', '2020-01-26', ''),
(716, 'John', '', 'Dela Cruz', '1970-02-08', '40', 'Female', '2020-06-11', ''),
(717, 'John', 'Dura', 'Nitch', '1985-03-03', '48', 'Female', '2020-12-03', ''),
(718, 'Marites', 'Doe', 'Villanueva', '2010-02-15', '20', 'Female', '2020-08-17', ''),
(719, 'Karen', 'Dura', 'Nitch', '1972-09-11', '33', 'Female', '2020-02-24', ''),
(720, 'John', 'Dura', 'Koala', '1975-03-04', '25', 'Male', '2020-04-02', ''),
(721, 'Kevin', 'Kalad', 'Villanueva', '1972-07-07', '53', 'Male', '2020-07-07', ''),
(722, 'Zyril', 'Doe', 'Lemy', '1982-06-23', '31', 'Other', '2020-09-15', ''),
(723, 'Kevin', 'Sita', 'Dela Cruz', '1970-03-29', '74', 'Female', '2020-10-15', ''),
(724, 'John', 'Sita', 'Dela Cruz', '1992-04-29', '70', 'Male', '2020-06-18', ''),
(725, 'Kevin', 'Dura', 'Dela Cruz', '2016-07-01', '30', 'Female', '2020-05-09', ''),
(726, 'Kevin', 'Doe', 'Nitch', '1985-02-09', '23', 'Other', '2020-09-15', ''),
(727, 'Kevin', 'Dura', 'Dela Cruz', '2013-08-18', '32', 'Male', '2020-09-25', ''),
(728, 'Marites', 'Doe', 'Dela Cruz', '1983-09-11', '14', 'Female', '2020-01-25', ''),
(729, 'John', 'Sita', 'Villanueva', '1973-10-26', '24', 'Male', '2020-06-05', ''),
(730, 'Marites', 'Doe', 'Koala', '1983-09-19', '15', 'Other', '2020-08-29', ''),
(731, 'Kevin', 'Dura', 'Lemy', '2014-01-25', '67', 'Other', '2020-03-23', ''),
(732, 'Zyril', '', 'Dela Cruz', '1988-08-27', '64', 'Other', '2020-01-26', ''),
(733, 'Karen', 'Dura', 'Dela Cruz', '1998-08-24', '51', 'Other', '2020-10-29', ''),
(734, 'Marites', 'Dura', 'Nitch', '2009-02-18', '8', 'Female', '2020-02-28', ''),
(735, 'John', 'Kalad', 'Koala', '1995-12-21', '19', 'Female', '2020-06-14', ''),
(736, 'Marites', 'Dura', 'Villanueva', '2016-10-15', '66', 'Other', '2020-12-11', ''),
(737, 'John', 'Dura', 'Lemy', '2008-08-06', '14', 'Other', '2020-11-11', ''),
(738, 'John', 'Kalad', 'Villanueva', '1996-02-19', '63', 'Female', '2020-09-11', ''),
(739, 'Marites', 'Dura', 'Nitch', '2008-10-14', '56', 'Male', '2020-04-07', ''),
(740, 'Marites', 'Doe', 'Villanueva', '2006-03-26', '29', 'Female', '2020-11-26', ''),
(741, 'John', 'Dura', 'Villanueva', '1993-01-02', '16', 'Female', '2020-03-30', ''),
(742, 'Karen', 'Doe', 'Nitch', '1999-12-17', '21', 'Female', '2020-11-06', ''),
(743, 'John', 'Kalad', 'Nitch', '1981-01-15', '48', 'Female', '2020-04-15', ''),
(744, 'Kevin', 'Sita', 'Koala', '2011-12-29', '9', 'Female', '2020-08-12', ''),
(745, 'Marites', 'Dura', 'Koala', '2002-07-31', '42', 'Female', '2020-01-04', ''),
(746, 'Kevin', 'Dura', 'Nitch', '1976-10-09', '22', 'Other', '2020-08-10', ''),
(747, 'Marites', 'Sita', 'Koala', '1987-10-04', '51', 'Male', '2020-03-27', ''),
(748, 'Marites', 'Doe', 'Villanueva', '2003-04-07', '70', 'Female', '2020-09-02', ''),
(749, 'Kevin', 'Dura', 'Villanueva', '2003-05-30', '24', 'Female', '2020-08-22', ''),
(750, 'Kevin', 'Doe', 'Dela Cruz', '2008-06-01', '49', 'Female', '2020-07-13', ''),
(751, 'Marites', 'Sita', 'Nitch', '1971-06-07', '75', 'Female', '2020-09-24', ''),
(752, 'John', 'Sita', 'Koala', '1973-07-07', '29', 'Other', '2020-03-05', ''),
(753, 'John', 'Kalad', 'Dela Cruz', '2011-10-08', '8', 'Female', '2020-10-25', ''),
(754, 'Kevin', 'Dura', 'Lemy', '1970-01-06', '7', 'Male', '2020-06-11', ''),
(755, 'John', 'Dura', 'Nitch', '1976-01-05', '55', 'Male', '2020-01-13', ''),
(756, 'Marites', 'Dura', 'Nitch', '1985-04-04', '64', 'Male', '2020-12-07', ''),
(757, 'Kevin', 'Sita', 'Dela Cruz', '2007-10-06', '25', 'Male', '2020-05-01', ''),
(758, 'John', 'Doe', 'Dela Cruz', '2015-11-21', '32', 'Male', '2020-01-16', ''),
(759, 'Marites', 'Dura', 'Koala', '2008-07-01', '56', 'Male', '2020-05-22', ''),
(760, 'John', 'Doe', 'Nitch', '1970-05-04', '48', 'Other', '2020-06-21', ''),
(761, 'John', 'Sita', 'Lemy', '2018-06-23', '70', 'Other', '2020-04-25', ''),
(762, 'Karen', 'Doe', 'Nitch', '2000-10-21', '55', 'Female', '2020-02-08', ''),
(763, 'Kevin', 'Dura', 'Villanueva', '2000-11-03', '17', 'Female', '2020-08-11', ''),
(764, 'Karen', 'Doe', 'Villanueva', '2017-05-20', '68', 'Female', '2020-01-17', ''),
(765, 'John', 'Dura', 'Koala', '1983-07-09', '35', 'Male', '2020-10-11', ''),
(766, 'John', 'Kalad', 'Villanueva', '1983-01-27', '30', 'Female', '2020-08-15', ''),
(767, 'John', 'Doe', 'Koala', '2007-08-31', '14', 'Female', '2020-06-24', ''),
(768, 'John', 'Sita', 'Villanueva', '1987-10-12', '75', 'Female', '2020-08-14', ''),
(769, 'John', 'Dura', 'Villanueva', '1970-07-25', '38', 'Male', '2020-05-29', ''),
(770, 'Kevin', 'Sita', 'Dela Cruz', '2016-02-20', '7', 'Other', '2020-08-17', ''),
(771, 'Kevin', 'Dura', 'Villanueva', '1990-03-05', '35', 'Other', '2020-12-12', ''),
(772, 'John', 'Sita', 'Villanueva', '1981-12-17', '61', 'Male', '2020-11-15', ''),
(773, 'Kevin', 'Kalad', 'Nitch', '1989-06-11', '73', 'Female', '2020-02-02', ''),
(774, 'John', 'Doe', 'Villanueva', '2018-08-01', '79', 'Male', '2020-03-26', ''),
(775, 'Marites', 'Doe', 'Nitch', '1993-03-30', '38', 'Female', '2020-07-03', ''),
(776, 'Karen', 'Sita', 'Villanueva', '1989-09-24', '29', 'Female', '2020-09-01', ''),
(777, 'Karen', 'Doe', 'Koala', '2014-05-22', '63', 'Other', '2020-03-04', ''),
(778, 'John', 'Dura', 'Dela Cruz', '1986-02-03', '16', 'Female', '2020-09-14', ''),
(779, 'Kevin', 'Dura', 'Villanueva', '2017-07-05', '49', 'Male', '2020-09-11', ''),
(780, 'Karen', 'Sita', 'Villanueva', '1994-09-19', '36', 'Other', '2020-11-18', ''),
(781, 'John', 'Doe', 'Villanueva', '1991-06-13', '31', 'Female', '2020-10-13', ''),
(782, 'Kevin', 'Dura', 'Villanueva', '2000-08-13', '30', 'Female', '2020-12-20', ''),
(783, 'John', 'Doe', 'Villanueva', '1972-11-19', '66', 'Female', '2020-12-27', ''),
(784, 'Karen', 'Kalad', 'Villanueva', '1994-05-23', '50', 'Female', '2020-05-19', ''),
(785, 'John', 'Dura', 'Nitch', '2005-06-07', '69', 'Male', '2020-02-29', ''),
(786, 'John', 'Dura', 'Nitch', '2005-10-05', '78', 'Other', '2020-10-08', ''),
(787, 'Kevin', 'Dura', 'Dela Cruz', '1990-06-10', '8', 'Female', '2020-08-29', ''),
(788, 'John', 'Sita', 'Dela Cruz', '1993-05-29', '9', 'Other', '2020-12-27', ''),
(789, 'Karen', 'Sita', 'Villanueva', '1985-02-13', '30', 'Other', '2020-05-19', ''),
(790, 'Kevin', 'Sita', 'Villanueva', '1976-02-10', '72', 'Male', '2020-01-25', ''),
(791, 'John', 'Kalad', 'Dela Cruz', '1986-03-21', '9', 'Female', '2020-03-24', ''),
(792, 'Kevin', 'Dura', 'Dela Cruz', '1973-10-11', '28', 'Female', '2020-05-27', ''),
(793, 'John', 'Doe', 'Villanueva', '1971-12-22', '56', 'Female', '2020-03-23', ''),
(794, 'Karen', 'Doe', 'Dela Cruz', '1983-12-28', '67', 'Female', '2020-02-01', ''),
(795, 'Kevin', 'Doe', 'Nitch', '1981-03-24', '53', 'Other', '2020-08-23', ''),
(796, 'John', 'Doe', 'Koala', '1987-04-09', '50', 'Male', '2020-03-06', ''),
(797, 'Kevin', 'Doe', 'Villanueva', '1982-05-14', '14', 'Other', '2020-01-06', ''),
(798, 'Marites', 'Sita', 'Dela Cruz', '2011-09-15', '48', 'Female', '2020-12-16', ''),
(799, 'Marites', 'Doe', 'Nitch', '2001-05-13', '68', 'Female', '2020-02-20', ''),
(800, 'Kevin', 'Doe', 'Koala', '2004-02-27', '13', 'Other', '2020-07-01', ''),
(801, 'John', 'Sita', 'Koala', '1995-10-26', '40', 'Female', '2020-08-18', ''),
(802, 'Marites', 'Doe', 'Villanueva', '1983-04-11', '20', 'Female', '2020-08-13', ''),
(803, 'Karen', 'Doe', 'Villanueva', '2003-09-23', '76', 'Other', '2020-02-27', ''),
(804, 'Marites', 'Dura', 'Nitch', '1989-07-01', '44', 'Other', '2020-04-10', ''),
(805, 'Marites', 'Sita', 'Villanueva', '1971-07-27', '46', 'Female', '2020-11-23', ''),
(806, 'John', 'Doe', 'Villanueva', '2017-09-22', '51', 'Female', '2020-05-13', ''),
(807, 'John', 'Dura', 'Villanueva', '2014-09-22', '32', 'Male', '2020-07-16', ''),
(808, 'John', 'Sita', 'Nitch', '1986-08-31', '44', 'Female', '2020-08-06', ''),
(809, 'Karen', 'Doe', 'Villanueva', '1975-08-21', '65', 'Other', '2020-09-17', ''),
(810, 'Kevin', 'Sita', 'Koala', '2003-11-02', '12', 'Other', '2020-12-05', ''),
(811, 'Marites', '', 'Nitch', '2014-12-28', '10', 'Other', '2020-05-19', ''),
(812, 'Karen', 'Doe', 'Dela Cruz', '1996-12-01', '32', 'Male', '2020-08-30', ''),
(813, 'Kevin', 'Dura', 'Koala', '2010-09-26', '23', 'Female', '2020-03-29', ''),
(814, 'Karen', '', 'Nitch', '1975-06-17', '36', 'Female', '2020-06-08', ''),
(815, 'Karen', 'Kalad', 'Villanueva', '2000-06-28', '47', 'Female', '2020-06-15', ''),
(816, 'Kevin', 'Doe', 'Koala', '2008-07-05', '52', 'Female', '2020-04-25', ''),
(817, 'Marites', 'Doe', 'Villanueva', '1992-11-13', '9', 'Female', '2020-02-22', ''),
(818, 'John', 'Doe', 'Nitch', '1983-08-31', '13', 'Female', '2020-06-15', ''),
(819, 'Karen', 'Sita', 'Villanueva', '2002-11-02', '67', 'Male', '2020-05-09', ''),
(820, 'John', 'Dura', 'Villanueva', '2009-03-30', '24', 'Other', '2020-03-10', ''),
(821, 'Kevin', 'Dura', 'Koala', '1998-01-29', '46', 'Male', '2020-06-23', ''),
(822, 'John', 'Doe', 'Nitch', '1979-10-13', '57', 'Female', '2020-12-03', ''),
(823, 'Kevin', 'Kalad', 'Villanueva', '2017-06-28', '49', 'Male', '2020-09-29', ''),
(824, 'Zyril', 'Doe', 'Nitch', '1989-04-28', '12', 'Female', '2020-12-12', ''),
(825, 'Kevin', 'Dura', 'Nitch', '1990-07-11', '76', 'Other', '2020-04-25', ''),
(826, 'John', 'Dura', 'Villanueva', '2018-08-08', '74', 'Other', '2020-03-16', ''),
(827, 'John', 'Doe', 'Nitch', '1988-07-18', '60', 'Female', '2020-04-09', ''),
(828, 'John', 'Doe', 'Villanueva', '2010-07-29', '8', 'Other', '2020-02-16', ''),
(829, 'Kevin', 'Dura', 'Villanueva', '2013-01-26', '52', 'Other', '2020-12-19', ''),
(830, 'Marites', 'Doe', 'Dela Cruz', '2018-01-21', '44', 'Female', '2020-04-26', ''),
(831, 'Kevin', 'Doe', 'Koala', '1985-06-30', '77', 'Female', '2020-12-26', ''),
(832, 'Karen', '', 'Nitch', '1975-11-14', '46', 'Female', '2020-10-21', ''),
(833, 'John', 'Doe', 'Villanueva', '2000-08-12', '68', 'Female', '2020-08-05', ''),
(834, 'Karen', 'Dura', 'Villanueva', '2015-06-30', '46', 'Female', '2020-04-21', ''),
(835, 'John', 'Kalad', 'Dela Cruz', '1989-04-05', '68', 'Male', '2020-11-04', ''),
(836, 'John', 'Dura', 'Nitch', '1991-01-20', '38', 'Female', '2020-01-24', ''),
(837, 'Marites', 'Doe', 'Villanueva', '1988-02-03', '19', 'Female', '2020-12-11', ''),
(838, 'Karen', 'Doe', 'Koala', '2008-11-13', '25', 'Male', '2020-04-08', ''),
(839, 'Zyril', 'Dura', 'Dela Cruz', '1983-01-20', '16', 'Female', '2020-06-21', ''),
(840, 'Karen', '', 'Nitch', '2017-08-29', '25', 'Other', '2020-09-07', ''),
(841, 'Kevin', 'Kalad', 'Nitch', '2004-01-11', '79', 'Female', '2020-03-17', ''),
(842, 'Karen', 'Dura', 'Villanueva', '1977-03-18', '23', 'Other', '2020-07-08', ''),
(843, 'John', 'Sita', 'Nitch', '2014-06-06', '11', 'Female', '2020-03-18', ''),
(844, 'Kevin', 'Dura', 'Nitch', '1981-06-06', '11', 'Female', '2020-03-09', ''),
(845, 'Marites', 'Kalad', 'Dela Cruz', '2015-03-07', '8', 'Female', '2020-10-25', ''),
(846, 'John', 'Dura', 'Villanueva', '1993-04-30', '28', 'Male', '2020-10-09', ''),
(847, 'Kevin', 'Doe', 'Lemy', '1978-10-21', '75', 'Male', '2020-12-19', ''),
(848, 'Kevin', 'Doe', 'Villanueva', '1970-12-06', '8', 'Male', '2020-05-08', ''),
(849, 'John', 'Doe', 'Koala', '2003-11-21', '19', 'Other', '2020-09-21', ''),
(850, 'Karen', 'Doe', 'Villanueva', '1971-08-04', '78', 'Other', '2020-07-13', ''),
(851, 'John', 'Sita', 'Koala', '2016-10-17', '51', 'Other', '2020-03-07', ''),
(852, 'Marites', 'Dura', 'Nitch', '1995-09-27', '45', 'Male', '2020-03-02', ''),
(853, 'John', 'Doe', 'Villanueva', '1998-08-15', '78', 'Male', '2020-11-09', ''),
(854, 'Kevin', 'Doe', 'Nitch', '1970-10-16', '7', 'Male', '2020-05-09', ''),
(855, 'Karen', 'Kalad', 'Koala', '2018-01-26', '34', 'Male', '2020-02-03', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
