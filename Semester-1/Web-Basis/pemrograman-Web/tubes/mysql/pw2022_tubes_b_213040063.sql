-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_tubes_b_213040063`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lahir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `agama`, `bidang`, `gambar`, `lahir`) VALUES
(16, 'DR. ELMI RIDAR SpA', 'Islam', 'Dokter Spesialis Anak', '62a0f69d381b6.jpg', 'Bukittinggi / 30-10-1962'),
(17, 'Dr. Andrea Valentino, Sp.BS', 'Islam', 'Spesialis Bedah Syaraf', '62a0f72756a50.jpg', 'Padang, 03 Maret 1979'),
(18, 'dr. Gatot Aji Prihartomo, Sp.BS, M.Kes', 'Islam', 'Spesialis Bedah Syaraf', '62a0f76d754c2.jpg', 'Medan, 16 Oktober 1980'),
(19, 'DR. dr. Effif Syofra Tripriadi, Sp.B(K)Onk', 'Islam', 'Sub Spesialis Onkologi', '62a0f7f91e81b.jpg', 'Solok, 16 September 1957'),
(20, 'DR. dr. Dewi A Wisnumurti, Sp.A(K), IBCLC', 'Islam', 'Dokter Spesialis Anak Konsultan Perinatologi', '62a0f82904e41.jpg', 'Yogyakarta, 21 April 1956'),
(21, 'Dr. Suindra, SpB-KBD', 'Islam', 'Spesialis Bedah - Konsultan Digestif (Saluran Cerna)', '62a0f865e264e.jpg', 'Padang, 22 Agustus 1965');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$fk5OdMHosT0A4Xlii8Ytd.ztJyubhGoqknIk5kR9.woYdEDeXSYwC', 'admin'),
(2, 'admin1', '$2y$10$0tbJHDJRT/1HSNyFrn1bJuhiu6l/qb19kO86YdPPHkDKEW6rHCQaK', 'admin'),
(3, 'admin3', '$2y$10$bsoGu41AHDuceP8KfTnbTuZYkYh9M.C4J8GpXPlXnCrOyPtcMLnXa', 'admin'),
(4, 'alif', '$2y$10$KS7MfKDlKbKTT31CazApBelZmaE4AbJ2U3.B/ZjtUA49PAk/Qnab.', 'admin'),
(5, 'informatika', '$2y$10$DL1dQPzLmRUK7iiFvICPeeh0uKKTU2/Fvcvyd8T.7Xl9fgAFsmsxi', 'admin'),
(6, 'audi', '$2y$10$SqDaXEXzbfyUFRYZ8d051.AtyBW58a9gFoVjyk4mK1kZVDXPxxduq', 'user'),
(7, 'juan', '$2y$10$tti.ObWe4gG3r02EDI1VcOl2poTW14g66J27yi3hHwjnhpEuLMlKq', 'user'),
(8, 'asu', '$2y$10$FkKJw1s1ukZBoTWSkPJ2/uipV8qW9m48KlBAc434XB9387qN/Kwwm', 'user'),
(9, 'bila', '$2y$10$nKqy1YZHeaPf.75S9yFcGus7a1Al7oODm1JtmhDqX/1QAoJ2WW/Oq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
