-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 06.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('pegawai') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_pegawai`, `tgl_lahir`, `jabatan`, `nohp`, `password`, `level`, `foto`) VALUES
(3, '12345', 'user', '2021-08-23', 'Staff', '089636232', 'user', 'pegawai', '118b4dce47cbe3e744e9d741e16f614b.jpg'),
(4, '67890', 'ogel', '2021-08-23', 'Staff', '08726323', 'ogel', 'pegawai', '2e24677b5164893dfaae561698736926.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usul_belajar`
--

CREATE TABLE `usul_belajar` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `jenis_pengajuan` varchar(255) DEFAULT NULL,
  `nama_kampus` varchar(255) DEFAULT NULL,
  `jurusan_kampus` varchar(255) DEFAULT NULL,
  `akreditasi_kampus` varchar(255) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `dokumen_persetujuan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usul_belajar`
--

INSERT INTO `usul_belajar` (`id`, `id_pegawai`, `jenis_pengajuan`, `nama_kampus`, `jurusan_kampus`, `akreditasi_kampus`, `tgl_pengajuan`, `dokumen_persetujuan`, `status`) VALUES
(1, 3, 'Belajar', 'UNIS', 'Teknik Informatika', 'A', '2021-08-23', '9437e096080e7dbc3694d5324eed5255.pdf', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usul_cuti`
--

CREATE TABLE `usul_cuti` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `jenis_cuti` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `jml_hari` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usul_cuti`
--

INSERT INTO `usul_cuti` (`id`, `id_pegawai`, `jenis_cuti`, `tgl_mulai`, `tgl_selesai`, `jml_hari`, `status`) VALUES
(1, 3, 'Cuti Tahunan', '2021-08-23', '2021-08-24', '2', 'Menunggu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usul_belajar`
--
ALTER TABLE `usul_belajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usul_cuti`
--
ALTER TABLE `usul_cuti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usul_belajar`
--
ALTER TABLE `usul_belajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usul_cuti`
--
ALTER TABLE `usul_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
