-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 09:48 AM
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
-- Database: `absensi_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `id_ekstrakulikuler` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `nama_ekskul` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) NOT NULL,
  `waktu_absen` datetime NOT NULL,
  `minggu_ke` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status_absen` enum('Hadir','Tidak Hadir') DEFAULT 'Tidak Hadir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_user`, `id_kegiatan`, `id_ekstrakulikuler`, `nama_siswa`, `nama_ekskul`, `kelas`, `waktu_absen`, `minggu_ke`, `tahun`, `status_absen`) VALUES
(2, 9, 5, 5, 'Muhammad Zaki', 'Jurnalistik', 'VII', '2025-05-19 00:05:56', 21, 2025, 'Hadir'),
(8, 11, 7, 8, 'Indah Permatasari', 'Muaythai', 'VII', '2025-05-19 10:18:51', 21, 2025, 'Hadir'),
(9, 5, 1, 1, 'Ahmad Fauzan', 'Karya Ilmiah Remaja', 'VIII', '2025-05-19 14:19:13', 21, 2025, 'Hadir'),
(10, 12, 8, 7, 'James', 'Futsal', 'VII', '2025-05-19 14:22:45', 21, 2025, 'Hadir'),
(11, 5, 1, 1, 'Ahmad Fauzan', 'Karya Ilmiah Remaja', 'VIII', '2025-06-19 11:28:24', 25, 2025, 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama_ekskul`) VALUES
(1, 'Karya Ilmiah Remaja'),
(2, 'Pramuka'),
(3, 'PMR'),
(4, 'Paskibra'),
(5, 'Jurnalistik'),
(6, 'English Club'),
(7, 'Futsal'),
(8, 'Muaythai');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `id_ekstrakulikuler` int(11) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL,
  `hari_kegiatan` varchar(10) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `id_ekstrakulikuler`, `nama_ekskul`, `hari_kegiatan`, `waktu_mulai`, `waktu_selesai`, `tempat`, `deskripsi`) VALUES
(1, 1, 'Karya Ilmiah Remaja', 'Kamis', '11:00:00', '12:00:00', 'Lab IPA', 'Diskusi dan riset ilmiah'),
(2, 2, 'Pramuka', 'Jumat', '15:00:00', '17:00:00', 'Lapangan', 'Kegiatan kepramukaan'),
(3, 3, 'PMR', 'Rabu', '14:30:00', '16:30:00', 'UKS', 'Pelatihan pertolongan pertama'),
(4, 4, 'Paskibra', 'Kamis', '15:00:00', '17:30:00', 'Lapangan Upacara', 'Latihan baris berbaris'),
(5, 5, 'Jurnalistik', 'Senin', '00:01:00', '01:30:00', 'Ruang Multimedia', 'Penyusunan buletin sekolah'),
(7, 8, 'Muaythai', 'Senin', '09:00:00', '12:00:00', 'Aula Belakang', 'Latihan difokuskan pada koordinasi pukulan dan tendangan menggunakan pad/sarung sasaran. Siswa dilatih berpasangan untuk mempraktikkan kombinasi pukulan 1-2 dan low kick. Beberapa siswa sudah menunjukkan peningkatan dalam kecepatan dan akurasi.	'),
(8, 7, 'Futsal', 'Senin', '14:00:00', '17:00:00', 'Lapangan', '');

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
(2, 'VIII'),
(5, 'VII'),
(6, 'IX');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibuat_oleh` varchar(100) DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul`, `isi`, `tanggal`, `dibuat_oleh`) VALUES
(3, 1, 'Perubahan Jadwal Ekstrakurikuler Pramuka', 'Diberitahukan kepada seluruh anggota ekstrakurikuler Pramuka bahwa jadwal kegiatan pada hari Jumat, 24 Mei 2025 dipindahkan menjadi hari Sabtu, 25 Mei 2025 pukul 07.00 WIB di lapangan sekolah.', '2025-05-17 18:19:00', 'Andi Saputra'),
(11, 1, 'test', 'test', '2025-06-17 15:25:54', 'test'),
(12, 1, 'TEST', 'TEST', '0000-00-00 00:00:00', 'Admin'),
(13, 1, 'test1', 'test1', '2025-06-17 15:49:19', 'Admin'),
(14, 3, 'test aja', 'test', '2025-06-17 15:53:56', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_admin` varchar(20) DEFAULT NULL,
  `id_pembina` varchar(20) DEFAULT NULL,
  `id_siswa` varchar(20) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_ekstrakulikuler` int(11) DEFAULT NULL,
  `nip_nis` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama_ekskul` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `role` enum('Admin','Pembina','Siswa') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `level` int(1) DEFAULT NULL COMMENT '1. Admin, 2. Pembina, 3. Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_admin`, `id_pembina`, `id_siswa`, `id_kelas`, `id_ekstrakulikuler`, `nip_nis`, `nama`, `email`, `kelas`, `nama_ekskul`, `no_telp`, `jenis_kelamin`, `password`, `alamat`, `role`, `created_at`, `level`) VALUES
(1, 'ADM00001', NULL, NULL, 0, NULL, '76567', 'Wahyu', 'wahyu@gmail.com', NULL, NULL, '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-17 15:59:38', 1),
(2, NULL, 'PBN00001', NULL, 0, NULL, '252525', 'Wahyu', 'wahyu@gmail.com', NULL, NULL, '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-17 17:28:30', 2),
(3, 'ADM00002', NULL, NULL, 0, NULL, '878787', 'Sri Wahyuni', 'sriwahyuni@gmail.com', NULL, NULL, '3619788090', 'Perempuan', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-18 12:54:26', 1),
(4, NULL, 'PBN00002', NULL, 0, NULL, '676767', 'Kurniawan', 'kurniawan@gmail.com', NULL, NULL, '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-18 12:55:38', 2),
(5, NULL, NULL, 'SIS00001', 0, 1, '123', 'Ahmad Fauzan', 'ahmad@gmail.com', 'VIII', 'Karya Ilmiah Remaja', '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', 'Jl. Melati No. 1', NULL, '2025-05-18 16:56:16', 3),
(6, NULL, NULL, 'SIS00002', 0, 2, '1234', 'Siti Rahmawati', 'siti@gmail.com', 'VII', 'Pramuka', '3619788090', 'Perempuan', '098f6bcd4621d373cade4e832627b4f6', 'Jl. Mawar No. 12', NULL, '2025-05-18 16:56:16', 3),
(7, NULL, NULL, 'SIS00003', 0, 3, '12345', 'Budi Santoso', 'budi@gmail.com', 'IX', 'PMR', '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', 'Jl. Kenanga No. 5', NULL, '2025-05-18 16:56:16', 3),
(8, NULL, NULL, 'SIS00004', 0, 4, '123456', 'Dewi Lestari', 'dewi@gmail.com', 'VIII', 'Paskibra', '3619788090', 'Perempuan', '098f6bcd4621d373cade4e832627b4f6', 'Jl. Anggrek No. 9', NULL, '2025-05-18 16:56:16', 3),
(9, NULL, NULL, 'SIS00005', 0, 5, '1234567', 'Muhammad Zaki', 'zaki@gmail.com', 'VII', 'Jurnalistik', '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', 'Jl. Kamboja No. 7', NULL, '2025-05-18 16:56:16', 3),
(10, 'ADM00003', NULL, NULL, 0, NULL, '98765', 'Samsul Arifin', 'samsularifin12@gmail.com', NULL, NULL, '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-19 02:10:49', 1),
(11, NULL, NULL, 'SIS00006', 0, 8, '12345678', 'Indah Permatasari', 'indahpermatasari12@gmail.com', 'VII', 'Muaythai', '3619788090', 'Perempuan', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-19 02:11:52', 3),
(12, NULL, NULL, 'SIS00007', 0, 7, '123456789', 'James', 'james@gmail.com', 'VII', 'Futsal', '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-19 07:21:23', 3),
(13, NULL, NULL, 'SIS00008', 0, 3, '37575', 'Test Bang', 'testbang@gmail.com', 'VIII', 'PMR', '3619788090', 'Laki-Laki', '098f6bcd4621d373cade4e832627b4f6', '4982  Franklin Avenue', NULL, '2025-05-23 02:43:11', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_ibfk_1` (`id_user`),
  ADD KEY `absensi_ibfk_kegiatan` (`id_ekstrakulikuler`),
  ADD KEY `absensi_fk_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kegiatan_ekstrakulikuler` (`id_ekstrakulikuler`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `FK_pengumuman_users` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_ekskul_users` (`id_ekstrakulikuler`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_fk_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `absensi_ibfk_ekskul` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikuler` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `FK_kegiatan_ekstrakulikuler` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikuler` (`id`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_kelas_users` FOREIGN KEY (`id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `FK_pengumuman_users` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_ekskul_users` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikuler` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
