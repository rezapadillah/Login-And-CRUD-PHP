-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2015 at 06:53 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bestcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'reza', 'e1bfd762321e409cee4ac0b6e841963c');

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(8) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id`, `nama`, `email`, `alamat`, `kota`, `kode_pos`, `no_telp`) VALUES
(1, 'Reza Padillah', 'mrezapadillah20@gmail.com', 'Jl. Raudah 3', 'Samarinda', '75128', '081251097925');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE IF NOT EXISTS `hosting` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `paket` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id`, `nama`, `email`, `tanggal_beli`, `alamat`, `kota`, `no_telp`, `paket`) VALUES
(1, 'mrezapadillah20gmail.com', '', '2015-01-05', 'Jl. Raudah 3', 'samarinda', '081251097925', '1024 MB');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_plg` int(12) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_plg` varchar(100) NOT NULL,
  `nama_perusahaan_plg` varchar(100) NOT NULL,
  `tingkat_plg` varchar(100) NOT NULL,
  `group_perusahaan_plg` varchar(100) NOT NULL,
  `npwp_perusahaan_plg` varchar(100) NOT NULL,
  `bulanan` varchar(150) NOT NULL,
  `alamat_plg` varchar(100) NOT NULL,
  `kota_provinsi_plg` varchar(100) NOT NULL,
  `no_telp_plg` varchar(14) NOT NULL,
  `no_fax_plg` varchar(14) NOT NULL,
  `no_form_plg` varchar(20) NOT NULL,
  `jenis_kelamin_plg` varchar(20) NOT NULL,
  `jabatan_plg` varchar(100) NOT NULL,
  `kode_pos_plg` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`id_plg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `tanggal`, `nama_plg`, `nama_perusahaan_plg`, `tingkat_plg`, `group_perusahaan_plg`, `npwp_perusahaan_plg`, `bulanan`, `alamat_plg`, `kota_provinsi_plg`, `no_telp_plg`, `no_fax_plg`, `no_form_plg`, `jenis_kelamin_plg`, `jabatan_plg`, `kode_pos_plg`, `email`, `website`) VALUES
(44, '2014-12-04', 'Sublime Text23', 'Sublime Editor', 'Kantor Cabang', 'Sublime Text 3', 'Sublime Text 2', '1.500.000', 'Jln. Amerika Sebelah Sana', 'Samarinda Kaltim', '0987654312', '983kk2', '2008', 'Perempuan', 'Teks Editor', '75sesukakamu', 'mesaya_leo10@yahoo.com', 'www.mrezapadillah.com'),
(51, '2014-12-04', 'bestcamp', 'pt bestcamp multimedia', 'Kantor Pusat', 'bestcamp group', 'bestcamp', '2.850.000', 'jln hasan basri', 'samarinda kaltim', '081251097925', '8728as7', '12', 'Laki-Laki', 'perusahaan', '75128', 'mrezapadillah20@gmail.com', 'www.bestcamp.net'),
(52, '2014-12-12', 'm. reza padillah', 'PT Bestcamp Multimedia', 'Kantor Pusat', 'Bestcamp Komunitas', '.NET', '10.5000', 'Hasan Basri', 'Samarinda Kaltim', '081251097925', '9988217', '2008', 'Laki-laki', 'Anak Magang', '75123', 'mrezapadillah20@gmail.com', 'www.mrezapadillah.com'),
(53, '2014-12-12', 'reza padillah', 'bestcamp multimedia.net', 'Kantor Pusat', 'asnjk', 'asjbas', '20.0000', 'sajdas', 'kjnsadjkn', 'kjnkjasn', 'knsaknj', '19', 'Laki-laki', 'Programmer', 'njdsna', 'kjnsakjnd', 'knkjsnd'),
(54, '2014-12-12', 'reza padillah', 'bestcamp multimedia.net', 'Kantor Pusat', 'asnjk', 'asjbas', '19.000', 'sajdas', 'kjnsadjkn', 'kjnkjasn', 'knsaknj', '19', 'Laki-laki', 'Programmer', 'njdsna', 'kjnsakjnd', 'knkjsnd'),
(55, '2014-12-04', 'Reza', 'ikantongkol.com', 'Kantor Pusat', 'ikantongkol@group.com', 'blbalabla', '2008.0002008', 'jln raudah 3 no 42.A', 'Samarinda Kaltim', '081251097925', '20', '5', 'Laki-laki', 'CEO', '75128', 'mrezapadillah20@gmail.com', 'www.mrezapadillah.com'),
(56, '2014-12-04', 'airlanga', 'smk ti', 'Kantor Pusat', 'smkti group', 'airlangga', '2008.92188', 'jl. pahlawan', 'Samarinda Kaltim', '09812771', '091277', '3', 'Laki-laki', 'yang punya sekolah', '75123', 'admin@smkti.net', 'www.smkti.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
