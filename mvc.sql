-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 02:40
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc`
--
CREATE DATABASE `kendaraan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kendaraan`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `nopol` varchar(11) NOT NULL DEFAULT '',
  `merk` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `kubikasi` varchar(255) NOT NULL,
  `tahun_perakitan` varchar(100) NOT NULL,
  PRIMARY KEY (`nopol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `motor` (`nopol`, `merk`, `warna`, `kubikasi`, `tahun_perakitan`) VALUES
('AB1234CD', 'Honda', 'merah', '200', '1976'),
('AB4444NG', 'Yamaha', 'putih', '125', '2006'),
('AD4444PA', 'Suzuki', 'hitam', '110', '2002'),
('S4484RR', 'Piagio', 'kuning', '150', '1959'),
('H3884TT', 'Kawasaki', 'hijau', '100', '2011');
