-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2020 pada 15.29
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(10) NOT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `no_tlp_admin` int(11) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_tlp_admin`, `alamat`) VALUES
('A01', 'Kevin', 10101, 'Jl. Kalimaya 1'),
('A02', 'Almo', 20202, 'Jl. Kalimati 2'),
('A03', 'Charli', 30303, 'Jl. Kaliman 3'),
('A04', 'Beti', 40404, 'Jl. Kalimana 4'),
('A05', 'aan', 80808, 'Jl Lebak 010101'),
('A06', 'fiki', 808, 'Jl tambangboyo'),
('A07', 'adnan', 80108, 'lalaland'),
('A08', 'adi', 2147483647, 'ponorogo'),
('A09', 'rudi', 91111, 'jl ampel'),
('A10', 'ana', 7189, 'jl kenjeran'),
('A11', 'lala', 60606, 'jl timor timor'),
('A12', 'po', 70707, 'jl nusantara'),
('A13', 'KAKA', 80808080, 'JL SERBA'),
('A14', 'LULU', 8181818, '898989'),
('A15', 'lalaland', 818018, 'lilipo'),
('A16', 'linad', 990909, 'jl liliy nom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` char(10) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `jenis_barang` varchar(100) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `jumlah_barang`) VALUES
('B001', 'Keyboard Logitech MK120', 'Input Device', 50),
('B002', 'MSI Red H310', 'Proces Device', 20),
('B003', 'Canon PIXMA TR4520', 'Output Device', 30),
('B004', 'Kingston A400 480GB SATA 3 SSD', 'Storage Unit', 100),
('B005', 'Hi coba test', 'Storage Unit', 1),
('B006', 'Hi halo dafid', 'Storage Unit', 1),
('B007', 'cooccaa', 'Output Device', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` char(10) NOT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `no_tlp_cust` int(11) DEFAULT NULL,
  `jenis_kel_cust` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_tlp_cust`, `jenis_kel_cust`) VALUES
('C001', 'Valie', 101010, 'P'),
('C002', 'Fandy', 121212, 'L'),
('C003', 'Ferry', 151515, 'L'),
('C004', 'Lary', 202020, 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(11) NOT NULL,
  `judul` int(100) NOT NULL,
  `url_upload` int(200) NOT NULL,
  `waktu_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `judul`, `url_upload`, `waktu_upload`) VALUES
(0, 0, 0, '2020-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
