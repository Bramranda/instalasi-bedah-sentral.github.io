-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 14.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibsrsys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'bram123', '709e64cd2b0f2cf5b1dbcc70ac794f20', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ibs`
--

CREATE TABLE `table_ibs` (
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rm` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `ruangan` varchar(25) NOT NULL,
  `vicite` varchar(25) NOT NULL,
  `asa` varchar(25) NOT NULL,
  `tanda` varchar(25) NOT NULL,
  `libat` varchar(25) NOT NULL,
  `operasi` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `wlaksana` time NOT NULL,
  `wselesai` time NOT NULL,
  `jadwalop` time NOT NULL,
  `telat` varchar(25) NOT NULL,
  `asalpasien` varchar(25) NOT NULL,
  `dokterop` varchar(50) NOT NULL,
  `anestesi` varchar(50) NOT NULL,
  `janestesi` varchar(11) NOT NULL,
  `obat` varchar(25) NOT NULL,
  `scor` varchar(25) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_ibs`
--

INSERT INTO `table_ibs` (`id_pasien`, `tanggal`, `rm`, `nama`, `tgl_lahir`, `umur`, `jk`, `ruangan`, `vicite`, `asa`, `tanda`, `libat`, `operasi`, `diagnosa`, `klasifikasi`, `jaminan`, `wlaksana`, `wselesai`, `jadwalop`, `telat`, `asalpasien`, `dokterop`, `anestesi`, `janestesi`, `obat`, `scor`, `ket`, `catatan`) VALUES
(148, '2022-07-17', '70-35-20', 'Gusti Raja', '1996-12-12', '28.8', 'Laki-laki', 'SUDIRMAN', 'Ruangan', '1', 'Tidak', 'Tidak', 'excisi', '', 'Mayor', 'Pribadi', '12:00:00', '11:00:00', '12:00:00', 'tidak telat', 'RS.Yos', 'dr.Ananto Pratikno,SpOG,MARS', 'dr.Edi Widodo,Sp.An', 'Umum', 'ceftriaxone', '10', 'Negative', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`password`);

--
-- Indeks untuk tabel `table_ibs`
--
ALTER TABLE `table_ibs`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `table_ibs`
--
ALTER TABLE `table_ibs`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
