-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 05:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `jenisKelamin` varchar(2) NOT NULL,
  `tglLahir` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip`, `name`, `jenisKelamin`, `tglLahir`, `jabatan`, `status`) VALUES
(0, '00001', 'adip', 'L', '2017-12-14', 'admin', 'adm'),
(0, '', '', '', '0000-00-00', '', '--Pilih St'),
(0, '', '', '', '0000-00-00', '', '--Pilih St'),
(0, '', '', '', '0000-00-00', '', '--Pilih St'),
(0, '', '', '', '0000-00-00', '', '--Pilih St'),
(0, '', '', '', '0000-00-00', '', '--Pilih St'),
(0, '00002', 'adi', 'L', '2017-12-06', 'hrd', 'hrd'),
(3, '002', 'ghali', 'L', '2017-12-06', 'ceo', 'kyr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(0, 'adiputra@gmail.com', 'admin', '123456'),
(0, 'ghali@gma', 'gha', '123456'),
(0, '', 'paok', 'bego'),
(0, '', 'mhmd', 'gume'),
(0, '', 'ichsan', 'cinta'),
(4, 'gane', 'bggt', 'cinta');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
