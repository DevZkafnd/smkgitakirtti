-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2025 at 05:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_giki`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_spp`
--

CREATE TABLE `biaya_spp` (
  `id_biaya` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `biaya_spp` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `biaya_spp`
--

INSERT INTO `biaya_spp` (`id_biaya`, `id_jurusan`, `biaya_spp`, `keterangan`) VALUES
(1, 1, 525000, 'SPP RPL per bulan'),
(2, 2, 500000, 'SPP TKJ per bulan'),
(3, 3, 480000, 'SPP AKL per bulan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_kelas`, `id_jurusan`, `id_mapel`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, 1, 1, 'Senin', '07:00:00', '08:00:00'),
(2, 1, 1, 2, 'Senin', '08:00:00', '09:00:00'),
(3, 1, 1, 3, 'Senin', '09:15:00', '10:15:00'),
(4, 1, 1, 4, 'Senin', '10:30:00', '11:30:00'),
(5, 1, 1, 5, 'Selasa', '07:00:00', '08:00:00'),
(6, 1, 1, 6, 'Selasa', '08:00:00', '09:00:00'),
(7, 1, 1, 7, 'Selasa', '09:15:00', '10:15:00'),
(8, 1, 1, 13, 'Selasa', '10:30:00', '11:30:00'),
(9, 1, 1, 2, 'Rabu', '07:00:00', '08:00:00'),
(10, 1, 1, 4, 'Rabu', '08:00:00', '09:00:00'),
(11, 1, 1, 5, 'Rabu', '09:15:00', '10:15:00'),
(12, 1, 1, 6, 'Rabu', '10:30:00', '11:30:00'),
(13, 1, 1, 7, 'Kamis', '07:00:00', '08:00:00'),
(14, 1, 1, 13, 'Kamis', '08:00:00', '09:00:00'),
(15, 1, 1, 1, 'Kamis', '09:15:00', '10:15:00'),
(16, 1, 1, 3, 'Kamis', '10:30:00', '11:30:00'),
(17, 1, 1, 9, 'Jumat', '07:00:00', '08:00:00'),
(18, 1, 1, 7, 'Jumat', '08:00:00', '09:00:00'),
(19, 1, 1, 2, 'Jumat', '09:15:00', '10:15:00'),
(20, 1, 1, 5, 'Jumat', '10:30:00', '11:30:00'),
(21, 2, 2, 8, 'Senin', '07:00:00', '08:00:00'),
(22, 2, 2, 9, 'Senin', '08:00:00', '09:00:00'),
(23, 2, 2, 10, 'Senin', '09:15:00', '10:15:00'),
(24, 2, 2, 11, 'Senin', '10:30:00', '11:30:00'),
(25, 2, 2, 12, 'Selasa', '07:00:00', '08:00:00'),
(26, 2, 2, 13, 'Selasa', '08:00:00', '09:00:00'),
(27, 2, 2, 7, 'Selasa', '09:15:00', '10:15:00'),
(28, 2, 2, 5, 'Selasa', '10:30:00', '11:30:00'),
(29, 2, 2, 11, 'Rabu', '07:00:00', '08:00:00'),
(30, 2, 2, 8, 'Rabu', '08:00:00', '09:00:00'),
(31, 2, 2, 10, 'Rabu', '09:15:00', '10:15:00'),
(32, 2, 2, 13, 'Rabu', '10:30:00', '11:30:00'),
(33, 2, 2, 9, 'Kamis', '07:00:00', '08:00:00'),
(34, 2, 2, 12, 'Kamis', '08:00:00', '09:00:00'),
(35, 2, 2, 3, 'Kamis', '09:15:00', '10:15:00'),
(36, 2, 2, 2, 'Kamis', '10:30:00', '11:30:00'),
(37, 2, 2, 7, 'Jumat', '07:00:00', '08:00:00'),
(38, 2, 2, 10, 'Jumat', '08:00:00', '09:00:00'),
(39, 2, 2, 13, 'Jumat', '09:15:00', '10:15:00'),
(40, 2, 2, 11, 'Jumat', '10:30:00', '11:30:00'),
(41, 3, 3, 15, 'Senin', '07:00:00', '08:00:00'),
(42, 3, 3, 16, 'Senin', '08:00:00', '09:00:00'),
(43, 3, 3, 17, 'Senin', '09:15:00', '10:15:00'),
(44, 3, 3, 18, 'Senin', '10:30:00', '11:30:00'),
(45, 3, 3, 19, 'Selasa', '07:00:00', '08:00:00'),
(46, 3, 3, 20, 'Selasa', '08:00:00', '09:00:00'),
(47, 3, 3, 21, 'Selasa', '09:15:00', '10:15:00'),
(48, 3, 3, 15, 'Selasa', '10:30:00', '11:30:00'),
(49, 3, 3, 16, 'Rabu', '07:00:00', '08:00:00'),
(50, 3, 3, 17, 'Rabu', '08:00:00', '09:00:00'),
(51, 3, 3, 18, 'Rabu', '09:15:00', '10:15:00'),
(52, 3, 3, 19, 'Rabu', '10:30:00', '11:30:00'),
(53, 3, 3, 20, 'Kamis', '07:00:00', '08:00:00'),
(54, 3, 3, 21, 'Kamis', '08:00:00', '09:00:00'),
(55, 3, 3, 15, 'Kamis', '09:15:00', '10:15:00'),
(56, 3, 3, 17, 'Kamis', '10:30:00', '11:30:00'),
(57, 3, 3, 18, 'Jumat', '07:00:00', '08:00:00'),
(58, 3, 3, 19, 'Jumat', '08:00:00', '09:00:00'),
(59, 3, 3, 20, 'Jumat', '09:15:00', '10:15:00'),
(60, 3, 3, 21, 'Jumat', '10:30:00', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(0, 'Umum'),
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer dan Jaringan'),
(3, 'Akuntansi dan Keuangan Lembaga');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`) VALUES
(0, '-'),
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Pemrograman Dasar'),
(2, 'Dasar-Dasar Pemrograman Web'),
(3, 'Basis Data'),
(4, 'Pemrograman Berorientasi Objek'),
(5, 'Pemrograman Mobile'),
(6, 'Pemrograman Web Dinamis'),
(7, 'Projek Kreatif dan Kewirausahaan'),
(8, 'Jaringan Dasar'),
(9, 'Sistem Komputer'),
(10, 'Teknologi Layanan Jaringan'),
(11, 'Administrasi Infrastruktur Jaringan'),
(12, 'Keamanan Jaringan'),
(13, 'Simulasi dan Komunikasi Digital'),
(14, 'Projek Kreatif dan Kewirausahaan'),
(15, 'Akuntansi Dasar'),
(16, 'Praktikum Akuntansi Perusahaan Jasa dan Dagang'),
(17, 'Komputer Akuntansi'),
(18, 'Administrasi Pajak'),
(19, 'Aplikasi Pengolah Angka (Excel)'),
(20, 'Etika Profesi'),
(21, 'Projek Kreatif dan Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_requesttransaksi`
--

CREATE TABLE `tb_requesttransaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_code` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_message` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transaction_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `order_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gross_amount` decimal(20,2) NOT NULL,
  `payment_type` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transaction_time` datetime NOT NULL DEFAULT current_timestamp(),
  `transaction_status` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bank` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `va_number` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fraud_status` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bca_va_number` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `permata_va_number` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pdf_url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `finish_redirect_url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bill_key` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `biller_code` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_requesttransaksi`
--

INSERT INTO `tb_requesttransaksi` (`id`, `id_user`, `id_kelas`, `id_jurusan`, `nama`, `email`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `transaction_time`, `transaction_status`, `bank`, `va_number`, `fraud_status`, `bca_va_number`, `permata_va_number`, `pdf_url`, `finish_redirect_url`, `bill_key`, `biller_code`) VALUES
(73, 20, NULL, NULL, 'Raul', 'raul@gmail.com', '200', 'Success, transaction is found', 'cd2a49b5-cc13-47f0-906d-456fd8c56475', 'SPP-20-175', 500000.00, 'bank_transfer', '2025-07-15 21:50:39', 'settlement', 'bca', '51676678361422034325939', 'accept', '51676678361422034325939', '', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0eb599cd-cf66-42d0-b6f9-4eb335c55aeb/pdf', 'http://example.com?order_id=SPP-20-1752591040&status_code=200&transaction_status=settlement', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `no_telp_ortu` varchar(20) DEFAULT NULL,
  `sekolah_asal` varchar(100) DEFAULT NULL,
  `thn_lulus` int(4) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `penghasilan_ortu` varchar(50) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_ijazah` varchar(255) DEFAULT NULL,
  `foto_akte` varchar(255) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1=Admin, 2=Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_jurusan`, `id_kelas`, `nik`, `nis`, `nama`, `email`, `password`, `no_telp`, `jenis_kelamin`, `tgl_lahir`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `alamat`, `pekerjaan_ayah`, `pekerjaan_ibu`, `pekerjaan_wali`, `no_telp_ortu`, `sekolah_asal`, `thn_lulus`, `nama_ayah`, `nama_ibu`, `nama_wali`, `penghasilan_ortu`, `foto_siswa`, `foto_kk`, `foto_ijazah`, `foto_akte`, `level`) VALUES
(13, 0, 0, '4201010101010001', NULL, 'Putri Ayu', 'putri@example.com', '098f6bcd4621d373cade4e832627b4f6', '082345678901', 'Perempuan', NULL, NULL, NULL, NULL, NULL, 'Jl. Raya No. 88', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, 1),
(20, 2, 2, '3174090101010004', '230004', 'Raul', 'raul@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '3619788090', 'Laki-Laki', '2025-07-12', 'DKI JAKARTA', 'KOTA JAKARTA TIMUR', 'KRAMAT JATI', 'KAMPUNG TENGAH', '4982  Franklin Avenue', 'Wiraswasta', 'Guru', '-', '3619788090', '', 2025, 'Yamal', 'Yuli', '', 'Rp. 4.000.000 - Rp. 5.000.000', '0bc80254-c0a5-43c6-a3e0-b280038d82c3_jpeg.jpg', 'Screenshot_2025-07-11_2120348.png', 'Screenshot_2025-07-11_2120349.png', 'Screenshot_2025-07-11_21203410.png', 2),
(21, 0, 0, '4201010101010002', NULL, 'Ujang Ramlan', 'ujang@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '082345678902', 'Laki-Laki', NULL, NULL, NULL, NULL, NULL, '4982  Franklin Avenue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 2, 2, '3174090101010006', '230006', 'Wulandari', 'wulandari@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '3619788090', 'Perempuan', '2025-07-01', 'LAMPUNG', 'KABUPATEN LAMPUNG BARAT', 'SUMBER JAYA', 'WAY PETAY', '4982  Franklin Avenue', 'Wiraswasta', 'Honorer', '-', '3619788090', 'SMP Negeri 56 Jakarta', 2025, 'Hamdan', 'Siti', '', 'Rp. 3.000.000 - Rp. 4.000.000', 'people1.png', 'perintah_sql3.png', 'perintah_sql4.png', 'perintah_sql5.png', 2),
(26, 2, 2, '12345678', '87654321', 'Galang', 'galang@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '3619788090', 'Laki-Laki', '2025-07-15', 'DKI JAKARTA', 'KOTA JAKARTA SELATAN', 'PASAR MINGGU', 'PASAR MINGGU', '4982  Franklin Avenue', 'Wiraswasta', 'Guru', '-', '3619788090', '', 2025, 'Ramdan', 'Zahra', '', 'Rp. 3.000.000 - Rp. 4.000.000', 'portrait-cute-little-asian-boy-hand-chin-thinking-while-standing.jpg', 'kegiatan-kurban.jpg', 'fotor-202507131449332.png', 'ChatGPT_Image_Jul_13,_2025,_02_47_02_PM6.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_spp`
--
ALTER TABLE `biaya_spp`
  ADD PRIMARY KEY (`id_biaya`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jadwal_kelas` (`id_kelas`),
  ADD KEY `FK_jadwal_mapel` (`id_mapel`),
  ADD KEY `FK_jadwal_jurusan` (`id_jurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_requesttransaksi`
--
ALTER TABLE `tb_requesttransaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa` (`id_user`),
  ADD KEY `fk_kelas_request` (`id_kelas`),
  ADD KEY `fk_jurusan_request` (`id_jurusan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `fk_user_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya_spp`
--
ALTER TABLE `biaya_spp`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_requesttransaksi`
--
ALTER TABLE `tb_requesttransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biaya_spp`
--
ALTER TABLE `biaya_spp`
  ADD CONSTRAINT `biaya_spp_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_jadwal_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `FK_jadwal_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`);

--
-- Constraints for table `tb_requesttransaksi`
--
ALTER TABLE `tb_requesttransaksi`
  ADD CONSTRAINT `FK_transaksi_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_transaksi_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
