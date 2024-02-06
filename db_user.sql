-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 06:42 AM
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
-- Database: `db_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaldik`
--

CREATE TABLE `tbl_kaldik` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kaldik`
--

INSERT INTO `tbl_kaldik` (`id`, `tanggal`, `keterangan`) VALUES
(3, '2024-01-01', 'Libur Tahun Baru Masehi'),
(4, '2024-01-02', 'Hari Pertama Semester Genap 2023/2024'),
(5, '2024-01-03', 'HAB KEMENAG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(100) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `judul`, `foto`, `deskripsi`) VALUES
(52, 'JUARA KOMPETISI SAINS', 'uploads/65b36e6449fa632.jpeg', 'Bandung, Zulkarnaen Azis Iskandar siswa kelas 12 MA Muhammadiyah 1 Kota Bandung Tahun Pelajaran 2021/2022 yang berhasil meraih Juara II Kompetisi Sains Madrasah di Bidang Studi Matematika Terintegrasi. Pengumuman perolehan juara disampaikan pada 28 agustus 2021, Jakarta. Ia dengan cermat menerapkan prinsip-prinsip matematika serta menggunakan strategi yang cukup tepat dalam menyelesaikan setiap persoalan. Sabar dan tekun menyelesaikan soal-soal matematika yang sangat kompleks dan menantang. Kecepatan, ketepatan, dan pemahaman yang cukup mendalam terhadap konsep matematika, menjadi kunci keberhasilan. Prestasi ini tidak hanya menandai keahlian matematika Zulkarnaen Azis Iskandar, tetapi juga merupakan kebanggaan bagi MA Muhammadiyah 1 Kota Bandung dan para guru yang telah memberikan bimbingan dan dukungan yang kuat. Kepala MA Muhammadiyah 1 Kota Bandung, Drs. Musa Muhammad Ahmad, M.E.Sy . Menyampaikan rasa senang dan bangga atas pencapaian prestasi Zulkarnaen Azis Iskandar dalam Kompeti'),
(53, 'BERITA 2', 'uploads/65b36f21aaf6617.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, veritatis esse? Dolor, esse eos quo excepturi repellat odit nobis. Voluptate obcaecati repudiandae quidem cupiditate est aliquam eveniet quod modi eius.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, veritatis esse? Dolor, esse eos quo excepturi repellat odit nobis. Voluptate obcaecati repudiandae quidem cupiditate est aliquam eveniet quod modi eius.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, veritatis esse? Dolor, esse eos quo excepturi repellat odit nobis. Voluptate obcaecati repudiandae quidem cupiditate est aliquam eveniet quod modi eius.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, veritatis esse? Dolor, esse eos quo excepturi repellat odit nobis. Voluptate obcaecati repudiandae quidem cupiditate est aliquam eveniet quod modi eius.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, veritatis esse? Dolor, esse eos quo excepturi repellat odit nobis. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajar`
--

CREATE TABLE `tbl_pengajar` (
  `id` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `namapengajar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajar`
--

INSERT INTO `tbl_pengajar` (`id`, `foto`, `namapengajar`) VALUES
(12, 'uploads/65b3a496cff30pa musa.jpg', 'Drs. Musa Muhammad A, M.E.Sy'),
(13, 'uploads/65b3a5b4f3bc9pa dikdik.jpg', 'Dikdik Sutiadi, S.Pd.I.'),
(14, 'uploads/65b3a60516990pa dadang.png', 'Dadang Jakaria, SE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` int(11) NOT NULL,
  `prestasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id`, `prestasi`) VALUES
(1, 'Duta WUKUF Puteri (se-Jawa Barat) Pramuka UIN SGD Bandung 2016'),
(2, '	Tropy Bergilir Duta WUKUF Puteri'),
(3, 'Juara 3 MSQ Wukuf se-Jawa Barat'),
(4, 'Juara 2 Futsal antar SMA/SMK Festival Pelajar Bandung'),
(5, '	Juara Umum III (Foto Kreatif) HUT GerakanPramuka se-Kota Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarana`
--

CREATE TABLE `tbl_sarana` (
  `id` int(100) NOT NULL,
  `sarana` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sarana`
--

INSERT INTO `tbl_sarana` (`id`, `sarana`, `jumlah`) VALUES
(7, 'Kipas Angin ', '1'),
(8, 'Server', '2'),
(9, 'Komputer', '6'),
(10, 'Laptop', '12'),
(11, 'TV/LCD', '1'),
(12, 'Projektor', '1'),
(13, 'Speaker', '1'),
(14, 'Printer', '1'),
(15, 'Scanner', '1'),
(16, 'Perpustakaan', '1'),
(17, 'Alat Peraga', '2'),
(18, 'Alat Lab Kesenian', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `confirm`) VALUES
(3, 'aku@gmail.com', '111', '111'),
(7, 'kaka@gmail.com', '123', '123'),
(10, 'ima@gmail.com', '222', '222'),
(11, 'ikrima@gmail.com', '222', '222'),
(12, 'bbb@gmail.com', '123', '123'),
(13, 'aka@gmail.com', 'sayangima1', 'sayangima1'),
(14, 'ccc@gmail.com', '1234', '1234'),
(15, 'ica@gmail.com', 'qqq', 'qqq'),
(16, 'ikrimakanza@gmail.com', 'ikrima', 'ikrima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kaldik`
--
ALTER TABLE `tbl_kaldik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajar`
--
ALTER TABLE `tbl_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kaldik`
--
ALTER TABLE `tbl_kaldik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_pengajar`
--
ALTER TABLE `tbl_pengajar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
