-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 10:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsisfo(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`file_id` int(2) NOT NULL,
  `file_nama` varchar(50) NOT NULL,
  `file_file` varchar(100) NOT NULL,
  `is_delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `file_nama`, `file_file`, `is_delete`) VALUES
(1, 'haha', 'hahah.xlsx', 0),
(3, 'ghdhgn', 'ghdhgnh.xlsx', 0),
(4, 'kasldoasdj', 'kasldoasdjillance.docx', 0),
(5, 'Laporan Hrd', 'Laporan Hrdillance.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE IF NOT EXISTS `klien` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(6) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`email`, `nama`, `jk`, `umur`, `alamat`, `notelp`, `line`) VALUES
('anandafaisal@rocketmail.com', 'Faisal F', 'Pria', 18, 'Jl. TSM PVJ BANDUNG', '084528456246', 'qwerty'),
('oldi21@gmail.com', 'Oldi', 'Pria', 21, 'Jalan Haji Umar', '081333333333', 'Oldi');

-- --------------------------------------------------------

--
-- Table structure for table `konsultan`
--

CREATE TABLE IF NOT EXISTS `konsultan` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(6) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultan`
--

INSERT INTO `konsultan` (`email`, `nama`, `jk`, `notelp`, `line`, `alamat`, `umur`) VALUES
('jhonrin.edison@tso.astra.co.id', 'Jhonreen', 'Pria', '08122264878', 'jhonreen', ' Jl. PH.H. Mustofa No.6, Cikutra, Cibeunying Kidul', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `level`) VALUES
(11, 'jhonrin.edison@tso.astra.co.id', '7815696ecbf1c96e6894b779456d330e', 1),
(18, 'anandafaisal@rocketmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
(19, 'oldi21@gmail.com', '7815696ecbf1c96e6894b779456d330e', 2);

--
-- Triggers `user`
--
DELIMITER //
CREATE TRIGGER `deleteUser` AFTER DELETE ON `user`
 FOR EACH ROW BEGIN
delete from klien where email=old.email;
delete from konsultan where email=old.email;
END
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `file_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
