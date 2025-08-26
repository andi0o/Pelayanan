-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2025 at 08:18 AM
-- Server version: 10.11.13-MariaDB-cll-lve
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topb8223_semut_bkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `mod_ikm`
--

CREATE TABLE `mod_ikm` (
  `id_responden` int(4) NOT NULL,
  `u1` int(1) NOT NULL,
  `u2` int(1) NOT NULL,
  `u3` int(1) NOT NULL,
  `u4` int(1) NOT NULL,
  `u5` int(1) NOT NULL,
  `u6` int(1) NOT NULL,
  `u7` int(1) NOT NULL,
  `u8` int(1) NOT NULL,
  `u9` int(1) NOT NULL,
  `kelamin` int(1) NOT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','DI','DII','DIII','S1/DIV','S2','S3') NOT NULL,
  `tgl_respon` date NOT NULL,
  `jns_layanan` int(1) NOT NULL,
  `user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mod_ikm`
--

INSERT INTO `mod_ikm` (`id_responden`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `u9`, `kelamin`, `pendidikan`, `tgl_respon`, `jns_layanan`, `user`) VALUES


--
-- Indexes for dumped tables
--

--
-- Indexes for table `mod_ikm`
--
ALTER TABLE `mod_ikm`
  ADD PRIMARY KEY (`id_responden`),
  ADD KEY `kelamin` (`kelamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mod_ikm`
--
ALTER TABLE `mod_ikm`
  MODIFY `id_responden` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5413;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mod_ikm`
--
ALTER TABLE `mod_ikm`
  ADD CONSTRAINT `mod_ikm_ibfk_1` FOREIGN KEY (`kelamin`) REFERENCES `tbl_kelamin` (`id_kelamin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
