-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 02:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materi_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_1`
--

CREATE TABLE `table_1` (
  `a_nama1` varchar(20) NOT NULL,
  `a_nama2` varchar(70) NOT NULL,
  `b_tgl1` date NOT NULL,
  `b_tgl2` date NOT NULL,
  `c_rupiah` double NOT NULL,
  `c_jml` int(11) NOT NULL,
  `d_array_hari` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_1`
--

INSERT INTO `table_1` (`a_nama1`, `a_nama2`, `b_tgl1`, `b_tgl2`, `c_rupiah`, `c_jml`, `d_array_hari`) VALUES
('deni', 'gunawan', '2020-08-12', '2020-08-12', 30000, 2, 'senin selasa rabu kamis jumat sabtu minggu'),
('robi', 'robi aziz zuama', '2020-09-01', '2020-08-13', 700000, 1, ''),
('ali', 'ali idrus', '2020-09-02', '2020-08-13', 0, 0, ''),
('gani', 'muhammad abdul gani', '2020-10-10', '2020-10-20', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_2`
--

CREATE TABLE `table_2` (
  `c_rupiah` double NOT NULL,
  `c_jml` int(11) NOT NULL,
  `c_tot_jml` int(11) NOT NULL,
  `c_tgl_pindah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_3`
--

CREATE TABLE `table_3` (
  `c_rupiah` double NOT NULL,
  `c_jml` int(11) NOT NULL,
  `c_tot_jml` int(11) NOT NULL,
  `c_tgl_pindah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
