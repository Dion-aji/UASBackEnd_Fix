-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 01.37
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absen` int(11) NOT NULL,
  `nama_pekerja` varchar(255) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `kehadiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absen`, `nama_pekerja`, `pekerjaan`, `kehadiran`) VALUES
(1, 'Dion aji cahyono', 'Administrator', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gaji` int(250) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `jabatan`, `gaji`, `tanggal`) VALUES
(1, 'Administrator', 36000000, '2021-12-16 00:00:00'),
(3, 'Pemograman Front End', 5000000, '2021-12-17 00:00:00'),
(5, 'Pemograman Back End', 9000000, '2021-12-18 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerja`
--

CREATE TABLE `tb_pekerja` (
  `id_pekerja` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `umur` varchar(250) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pekerja`
--

INSERT INTO `tb_pekerja` (`id_pekerja`, `nama_lengkap`, `umur`, `gender`, `jabatan`, `gaji`, `tanggal`, `photo`) VALUES
(18, 'fdff', '33', 'ffffffffffffffffff', 'ffffffffffffffffffff', '222222222224', '2021-12-23 20:39:27', '52870_hibike_euphonium.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembaruan`
--

CREATE TABLE `tb_pembaruan` (
  `id_pembaruan` int(11) NOT NULL,
  `nama_bug` varchar(255) NOT NULL,
  `tingkat` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembaruan`
--

INSERT INTO `tb_pembaruan` (`id_pembaruan`, `nama_bug`, `tingkat`, `deskripsi`) VALUES
(1, 'Bug notifikasi', 'sedang', 'mohon segera di perbaiki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `total_pendapatan` int(20) NOT NULL,
  `iklan_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendapatan`
--

INSERT INTO `tb_pendapatan` (`id_pendapatan`, `bulan`, `total_pendapatan`, `iklan_masuk`) VALUES
(1, 'Januari', 120000000, 282),
(2, 'Frebruari', 90000000, 201),
(3, 'Maret', 79000000, 190),
(4, 'April', 8000000, 190);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `sifat` varchar(250) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `nama_tugas`, `sifat`, `deskripsi`) VALUES
(29, 'Segera buat fitur chart', 'Penting', 'Mohon segera diselesaikan.terima kasih...'),
(32, 'Segera buat fitur Login', 'Penting', 'Mohon di selesaikan'),
(33, 'Desain home page', 'sedang', 'Untuk programer Front End tolong di selesaikan'),
(34, 'Desain Login', 'penting', '<p><strong>Tolong segera di selesaikan</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'alex', 'alex@uns.com', 'default.jpg', '$2y$10$fHPaLrhkPIQrYEihtQieMecxpD250ENBQ51xMA8vOnc.Uy4I65naC', 2, 1, 1639685129),
(2, 'dion', 'dion@uns.com', 'default.jpg', '$2y$10$.8FeLPuBMzTMiA9OE62w/uPustBS5362TX65NwxtcDjWGWxhYFYA.', 2, 1, 1639686042),
(3, 'iya', 'iya@gmail.com', 'default.jpg', '$2y$10$9x2sRPZIQO.YVHs.tvbSquUmtNGZnKU3ISyXl0uwN9UM.1u3LFwNi', 2, 1, 1639686342),
(5, 'dion aji c', 'dionajicahyono@student.uns.ac.id', 'default.jpg', '2ed537314c7035d920cd645a006db673', 2, 1, 1640277985),
(6, 'aaa', 'diona@gmail.com', 'default.jpg', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  ADD PRIMARY KEY (`id_pekerja`);

--
-- Indeks untuk tabel `tb_pembaruan`
--
ALTER TABLE `tb_pembaruan`
  ADD PRIMARY KEY (`id_pembaruan`);

--
-- Indeks untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indeks untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pekerja`
--
ALTER TABLE `tb_pekerja`
  MODIFY `id_pekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_pembaruan`
--
ALTER TABLE `tb_pembaruan`
  MODIFY `id_pembaruan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
