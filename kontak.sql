-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 08:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemrogramanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jkel` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `jkel`, `email`, `alamat`, `kota`, `pesan`) VALUES
(1, 'Mamank Garox', 'Laki-Laki', 'garroxmedi@gmail.com', 'Perumahan Pelita Harapan No 29', 'Jakarta', 'Stay positive bro '),
(2, 'John Doe', 'Laki-Laki', 'johnskaters@gmail.com', 'Tenggilis Ramai No 95', 'Surabaya', 'Perkenalkan aku John Doe teman warkop di sidoarjo dulu'),
(3, 'Burhanuddin Fawwaz', 'Laki-Laki', 'burhanuddinfaw@gmail.com', 'Bluru Kidul Raya Blok G-18', 'Sidoarjo', 'Halo teman baru !'),
(4, 'Ronaldowati', 'Perempuan', 'ronaldowati@gmail.com', 'Tenggulunan Putra CA-29', 'Sidoarjo', 'Temen sepakbola waktu kecil'),
(5, 'Michael Jordan', 'Laki-Laki', 'jordannew@gmail.com', 'Permata Gading Fajar LA-10', 'Sidoarjo', 'Temen Basket ekskul SMP'),
(6, 'Troye Sivan', 'Laki-Laki', 'troyesivan@gmail.com', 'Lontar Permai AB-12', 'Sidoarjo', 'Pembimbing Ekskul Nyanyi'),
(7, 'Lany Whistle', 'Laki-Laki', 'lanywhist@gmail.com', 'Perum Pasar Larangan No 19', 'Sidoarjo', 'temen warnet sma'),
(8, 'Luke Malik', 'Laki-Laki', 'lukemalik@gmail.com', 'Embong Gedhe No 12', 'Sidoarjo', 'Pembimbing gitar'),
(17, 'Meliodas', 'Laki-Laki', 'meliodaslord@gmail.com', 'Britannia Blok K-29', 'Sidoarjo', 'Temen perang jaman belanda'),
(18, 'Griamore Vindicate', 'Laki-Laki', 'griamore@gmail.com', 'Batavia III blok B-10', 'Sidoarjo', 'Lawan kejuaraan taekwondo'),
(19, 'Kevin Juan', 'Laki-Laki', 'kevinj@gmail.com', 'Lontar Indah No 201', 'Sidoarjo', 'Langganan Bakso Solo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
