-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Agustus 2016 jam 12:24
-- Versi Server: 5.1.36
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_batikberkah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(23) NOT NULL,
  `nama` varchar(23) NOT NULL,
  `nama_admin` varchar(23) NOT NULL,
  `password_admin` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `nama_admin`, `password_admin`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kode_jenis` varchar(10) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(3) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `gambar` text,
  `keterangan` text,
  `photo_url` text,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `nama_barang`, `kode_jenis`, `harga`, `stok`, `ukuran`, `kategori`, `gambar`, `keterangan`, `photo_url`) VALUES
('KD.0037', 'Katun Proses 2x', 'BTK.0006', 350000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	Barang ready</p>\r\n', 'b59.jpg'),
('KD.0038', 'Gaun Semi Sutera', 'BTK.0005', 450000, 10, 'M', 'perempuan', NULL, '<p>\r\n	Barang Ready, kualitas dijamin, bahan sutera</p>\r\n', 'b6.jpg'),
('KD.0039', 'Batik Anak-Anak', 'BTK.0009', 150000, 10, 'S', 'anak-anak', NULL, '<p>\r\n	Stok Terbatas</p>\r\n', '10.jpg'),
('KD.0040', 'Katun Tulis ', 'BTK.0002', 1500000, 10, 'L', '0', NULL, '<p>\r\n	Limited</p>\r\n', 'w.jpg'),
('KD.0041', 'Batik Anak-Anak Perempuan', 'BTK.0009', 125000, 10, 'S', 'anak-anak', NULL, '', '6.jpg'),
('KD.0042', 'Batik Pria Anak-Anak', 'BTK.0003', 150000, 10, 'S', 'anak-anak', NULL, '<p>\r\n	Bahan biasa</p>\r\n', 'r.jpg'),
('KD.0043', 'Batik wanita setelan atas 2x p', 'BTK.0007', 170000, 10, 'M', 'perempuan', NULL, '<p>\r\n	Bahan bagus</p>\r\n<p>\r\n	Dingin</p>\r\n<p>\r\n	Berkualitas</p>\r\n', 'b23.jpg'),
('KD.0044', 'Batik wanita stelan atas', 'BTK.0001', 250000, 10, 'S', 'perempuan', NULL, '<p>\r\n	- Stelan atas wanita</p>\r\n<p>\r\n	- Bahan bagus</p>\r\n<p>\r\n	- 2x proses</p>\r\n<p>\r\n	- Gambar asli seperti fisiknya</p>\r\n', 'b26a.jpg'),
('KD.0045', 'Batik Wanita', 'BTK.0001', 300000, 10, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan katun biasa</p>\r\n<p>\r\n	- Berkualitas</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b28.jpg'),
('KD.0046', 'Batik wanita ', 'BTK.0001', 300000, 10, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan beerkualitas</p>\r\n<p>\r\n	- 2x Proses</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b29.jpg'),
('KD.0047', 'Batik Pria', 'BTK.0006', 170000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun biasa</p>\r\n<p>\r\n	- berkualitas</p>\r\n<p>\r\n	- warna dan gambar sama seperti fisik aslinya</p>\r\n', '8.jpg'),
('KD.0048', 'Batik Pria Katun', 'BTK.0006', 160000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun biasa</p>\r\n<p>\r\n	- Barang ready</p>\r\n', '9copy.jpg'),
('KD.0050', 'Batik Pria Lengan Panjang', 'BTK.0006', 160000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Gambar asli</p>\r\n', 'mnm.jpg'),
('KD.0051', 'Batik Pria Lengan Panjang', 'BTK.0001', 160000, 1, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun biasa</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Gambar asli</p>\r\n', 'b9.jpg'),
('KD.0052', 'Setelan atas wanita', 'BTK.0006', 270000, 0, 'S', 'perempuan', NULL, '<p>\r\n	- Atasan wanita</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b30.jpg'),
('KD.0053', 'Batik Wanita', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	- Berkualitas</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Gambar asli</p>\r\n', 'b32.jpg'),
('KD.0054', 'Batik Wanita Gamis', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Model gamis</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b33.jpg'),
('KD.0055', 'Batik Pria Katun', 'BTK.0006', 160000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Lengan panjang</p>\r\n<p>\r\n	- Bahan katun</p>\r\n<p>\r\n	- Gambar asli seperti fisiknya</p>\r\n', 'b25.jpg'),
('KD.0056', 'Batik Pria Katun', 'BTK.0006', 160000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Lengan panjang</p>\r\n<p>\r\n	- Bahan katun</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Gambar asli seperti fisik barang</p>\r\n', 'b27a.jpg'),
('KD.0057', 'Batik Pria Katun', 'BTK.0006', 160000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun biasa</p>\r\n<p>\r\n	- Lengan panjang</p>\r\n', 'b31.jpg'),
('KD.0058', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '', '1q.jpg'),
('KD.0059', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '<p>\r\n	- Untuk Wanita</p>\r\n<p>\r\n	- Kombinasi Batik Jambi</p>\r\n<p>\r\n	- Untuk Anak-Anak</p>\r\n', '2q.jpg'),
('KD.0060', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '<p>\r\n	- Batik Anak-Anak</p>\r\n', '3q.jpg'),
('KD.0061', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '<p>\r\n	- Batik Anak-Anak</p>\r\n', '4q.jpg'),
('KD.0062', 'Batik Pria 2x Proses', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria</p>\r\n<p>\r\n	- Lengan Panjang</p>\r\n<p>\r\n	- Katun 2x Proses</p>\r\n', 'b76.jpg'),
('KD.0063', 'Batik Pria 2x proses', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria</p>\r\n<p>\r\n	- Katun 2x Proses</p>\r\n<p>\r\n	- Lengan Panjang</p>\r\n<p>\r\n	- Barang Ready</p>\r\n', 'b77.jpg'),
('KD.0064', 'Batik Pria 2x Proses', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria</p>\r\n<p>\r\n	- Lengan Panjang</p>\r\n<p>\r\n	- Katun 2x Proses</p>\r\n<p>\r\n	- Barang Ready</p>\r\n', 'mnm.jpg'),
('KD.0065', 'Batik Wanita', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Setelan Atas</p>\r\n<p>\r\n	- Bahan Katun 2x Proses</p>\r\n', 'b34.jpg'),
('KD.0066', 'Batik Wanita gamis', 'BTK.0007', 350000, 0, 'M', '0', NULL, '<p>\r\n	- Batik Pria</p>\r\n<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Katun 2x Proses</p>\r\n', 'b41.jpg'),
('KD.0067', 'Gamis', 'BTK.0001', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b42.jpg'),
('KD.0068', 'Batik Wanita ', 'BTK.0001', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Setelan Rok dan Baju</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	- Gambar Asli seperti fisiknya</p>\r\n', 'b43.jpg'),
('KD.0069', 'Batik Wanita', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Model Gamis</p>\r\n<p>\r\n	- Bahan Katun 2x Proses</p>\r\n', 'b45.jpg'),
('KD.0070', 'Batik Wanita', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Model Gamis</p>\r\n<p>\r\n	- Bahan Katun 2x Proses</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b46.jpg'),
('KD.0071', 'Batik Wanita', 'BTK.0007', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik wanita</p>\r\n<p>\r\n	- Model Gamis</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	- barang ready</p>\r\n', 'b47.jpg'),
('KD.0072', 'Batik Wanita Gamis', 'BTK.0006', 350000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Bahan Katun Biasa</p>\r\n<p>\r\n	- Model Gamis</p>\r\n', 'b48.jpg'),
('KD.0073', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja Batik Kombinasi</p>\r\n<p>\r\n	- Bahan Katun 2x proses</p>\r\n', '8.jpg'),
('KD.0074', 'Kemeja Batik kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja batik kombinasi</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	-</p>\r\n', 'b73.jpg'),
('KD.0075', 'Kemeja Batik kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja batik kombinasi</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b75.jpg'),
('KD.0076', 'Jas Safary', 'BTK.0002', 1500000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun tulis</p>\r\n<p>\r\n	- Model jas safary</p>\r\n<p>\r\n	- Kualitas Nomor 1</p>\r\n', 'b81.jpg'),
('KD.0077', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '', '5q.jpg'),
('KD.0078', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '', '6q.jpg'),
('KD.0079', 'Batik Anak-Anak', 'BTK.0003', 125000, 0, 'S', 'anak-anak', NULL, '', '7q.jpg'),
('KD.0080', 'Batik Anak-Anak', 'BTK.0003', 150000, 0, 'S', 'anak-anak', NULL, '', '8q.jpg'),
('KD.0082', 'Batik Wanita', 'BTK.0008', 200000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan Semi Sutera</p>\r\n<p>\r\n	- Setelan atas</p>\r\n', 'b24.jpg'),
('KD.0083', 'Batik Wanita ', 'BTK.0007', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	- Baju dan rok</p>\r\n<p>\r\n	-</p>\r\n', 'B35.jpg'),
('KD.0084', 'Batik Wanita', 'BTK.0007', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	- Baju dan rok</p>\r\n', 'B35A.jpg'),
('KD.0085', 'Batik Wanita', 'BTK.0007', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Baju dan Rok</p>\r\n<p>\r\n	-Bahan katun 2x proses</p>\r\n', 'b36.jpg'),
('KD.0086', 'Gamis', 'BTK.0007', 300000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Katun 2x proses</p>\r\n', 'b37.jpg'),
('KD.0087', 'Batik Wanita', 'BTK.0007', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Rok dan Baju</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b38.jpg'),
('KD.0088', 'Batik Wanita', 'BTK.0007', 550000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Rok dan baju</p>\r\n<p>\r\n	- Bahan Katun 2x proses</p>\r\n<p>\r\n	- Barang ready</p>\r\n', 'b39.jpg'),
('KD.0089', 'Batik Wanita', 'BTK.0007', 550000, 0, 'S', 'perempuan', NULL, '<p>\r\n	- Batik Wanita</p>\r\n<p>\r\n	- Rok dan baju</p>\r\n<p>\r\n	- Bahan 2x proses</p>\r\n', 'b40.jpg'),
('KD.0090', 'Batik Wanita Gamis', 'BTK.0007', 300000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'b44.jpg'),
('KD.0091', 'Batik Wanita Gamis', 'BTK.0007', 300000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Bahan Katun 2x Proses</p>\r\n<p>\r\n	- Barang Ready</p>\r\n', 'b49.jpg'),
('KD.0092', 'Batik Wanita Gamis', 'BTK.0007', 300000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Katun 2x proses</p>\r\n', 'b50.jpg'),
('KD.0093', 'Batik Wanita Gamis', 'BTK.0007', 300000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Gambar asli</p>\r\n', 'b51.jpg'),
('KD.0094', 'Batik Anak-Anak', 'BTK.0003', 125000, 0, 'S', 'anak-anak', NULL, '', '10q.jpg'),
('KD.0095', 'Batik Anak-Anak', 'BTK.0003', 125000, 0, 'S', 'anak-anak', NULL, '', '11q.jpg'),
('KD.0096', 'Batik Anak-Anak', 'BTK.0003', 125000, 10, 'S', 'anak-anak', NULL, '', '12q.jpg'),
('KD.0097', 'Batik Anak-Anak', 'BTK.0003', 125000, 10, 'S', 'anak-anak', NULL, '', 'a.jpg'),
('KD.0098', 'Batik Anak-Anak', 'BTK.0003', 125000, 10, 'S', 'anak-anak', NULL, '', 'r.jpg'),
('KD.0099', 'Batik Anak-Anak', 'BTK.0003', 125000, 10, 'S', 'anak-anak', NULL, '', 'an.jpg'),
('KD.0101', 'Batik Anak-Anak', 'BTK.0003', 125000, 9, 'S', 'anak-anak', NULL, '<p>\r\n	- Lengan Panjang</p>\r\n<p>\r\n	- Barang ready</p>\r\n', 'a2.jpg'),
('KD.0102', 'Batik Anak-Anak', 'BTK.0003', 125000, 9, 'S', 'anak-anak', NULL, '', 'a1.jpg'),
('KD.0103', 'Batik Anak-Anak', 'BTK.0001', 150000, 0, 'S', '0', NULL, '<p>\r\n	- Gaun wanita</p>\r\n', 'anakkk.jpg'),
('KD.0104', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'S', 'laki-laki', NULL, '<p>\r\n	- Katun 2x proses</p>\r\n', '6 copy.jpg'),
('KD.0106', 'Batik Pria Sutera', 'BTK.0005', 450000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Lengan Pendek</p>\r\n<p>\r\n	- Bahan Sutera</p>\r\n', 'b60.jpg'),
('KD.0107', 'Batik Pria Sutera', 'BTK.0005', 450000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria Sutera</p>\r\n<p>\r\n	- Bahan Sutera</p>\r\n', 'b58.jpg'),
('KD.0108', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria Katun</p>\r\n<p>\r\n	- Bahan Katun 2x proses</p>\r\n<p>\r\n	- Lengan Panjang</p>\r\n', 'b65.jpg'),
('KD.0109', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Batik Pria Katun</p>\r\n<p>\r\n	- Bahan katun proses 2x</p>\r\n<p>\r\n	- Lengan panjang</p>\r\n', 'b66.jpg'),
('KD.0110', 'Kemeja Batik kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja batik kombinasi</p>\r\n<p>\r\n	- Bahan Katun</p>\r\n<p>\r\n	- Lengan Pendek</p>\r\n', 'b69.jpg'),
('KD.0111', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b70.jpg'),
('KD.0112', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b71.jpg'),
('KD.0113', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja Batik Kombinasi</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b71.jpg'),
('KD.0114', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja Batik Kombinasi</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b72.jpg'),
('KD.0115', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Kemeja Batik Kombinasi</p>\r\n<p>\r\n	- Bahan katun 2x proses</p>\r\n', 'b74.jpg'),
('KD.0116', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 0, 'L', 'laki-laki', NULL, '', 'b84.jpg'),
('KD.0117', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '', 'b80.jpg'),
('KD.0118', 'Batik safary', 'BTK.0002', 1500000, 0, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan katun tulis</p>\r\n', 'b83.jpg'),
('KD.0119', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '', 'b85.jpg'),
('KD.0120', 'Batik Pria Katun', 'BTK.0007', 275000, 0, 'L', 'laki-laki', NULL, '', 'b86.jpg'),
('KD.0121', '', 'BTK.0007', 275000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun 2x proses</p>\r\n', 'b87.jpg'),
('KD.0122', 'Batik Pria Katun', 'BTK.0007', 275000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun</p>\r\n', 'q.jpg'),
('KD.0123', 'Kemeja Batik Kombinasi', 'BTK.0007', 300000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- bahan Katun</p>\r\n', 'b57.jpg'),
('KD.0124', 'Batik Pria Katun', 'BTK.0007', 275000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun 2x Proses</p>\r\n', 'b20.jpg'),
('KD.0125', 'Batik Pria Katun', 'BTK.0007', 275000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun 2x proses</p>\r\n<p>\r\n	- Barang Ready</p>\r\n', 'b63.jpg'),
('KD.0126', 'Batik Pria ', 'BTK.0008', 550000, 9, 'L', 'laki-laki', NULL, '', 'b3.jpg'),
('KD.0127', 'Batik Pria Sutera', 'BTK.0001', 450000, 0, 'L', '0', NULL, '<p>\r\n	- Bahan sutera</p>\r\n', 'hjhj.jpg'),
('KD.0128', 'Batik Wanita Gamis', 'BTK.0006', 550000, 0, 'M', 'perempuan', NULL, '', '1.jpg'),
('KD.0129', 'Batik Wanita', 'BTK.0001', 350000, 0, 'M', 'perempuan', NULL, '', 'a.jpg'),
('KD.0130', 'Batik Wanita', 'BTK.0006', 200000, 0, 'M', 'perempuan', NULL, '<p>\r\n	- Setelan atas</p>\r\n<p>\r\n	- Bahan Katun biasa</p>\r\n', 'b12.jpg'),
('KD.0131', 'Batik Wanita Gaun', 'BTK.0006', 350000, 0, 'L', '0', NULL, '', 'vb.jpg'),
('KD.0132', 'Batik Wanita', 'BTK.0001', 550000, 0, 'M', 'perempuan', NULL, '', 'vb1.jpg'),
('KD.0133', 'Batik Wanita', 'BTK.0006', 350000, 0, 'M', 'perempuan', NULL, '', 'vb3.jpg'),
('KD.0134', 'Batik Wanita', 'BTK.0006', 200000, 0, 'M', 'perempuan', NULL, '', 'b53.jpg'),
('KD.0135', 'Batik Wanita', 'BTK.0006', 200000, 0, 'M', 'perempuan', NULL, '', 'b54.jpg'),
('KD.0136', 'Batik Wanita', 'BTK.0006', 200000, 0, 'M', 'perempuan', NULL, '', 'b56.jpg'),
('KD.0137', 'Batik Wanita', 'BTK.0006', 200000, 0, 'M', 'perempuan', NULL, '<p>\r\n	_ Bahan Katun Biasa</p>\r\n', 'b55.jpg'),
('KD.0138', 'Batik Wanita', 'BTK.0006', 200000, 10, 'M', 'perempuan', NULL, '', 'b52.jpg'),
('KD.0139', 'Batik Wanita', 'BTK.0005', 550000, 10, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan Sutra dan Katun</p>\r\n', 'b4.jpg'),
('KD.0140', 'Batik Wanita', 'BTK.0005', 550000, 10, 'M', 'perempuan', NULL, '', 'b2.jpg'),
('KD.0141', 'Batik Wanita Gamis', 'BTK.0006', 550000, 10, 'M', 'perempuan', NULL, '', 'b1.jpg'),
('KD.0142', 'Batik Pria Sutera', 'BTK.0005', 450000, 10, 'M', 'laki-laki', NULL, '<p>\r\n	- Bahan Sutera</p>\r\n<p>\r\n	- Lengan Pendek</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'b89.jpg'),
('KD.0143', 'Batik Pria Sutra', 'BTK.0005', 450000, 2, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Sutera</p>\r\n<p>\r\n	- Lengan Pendek</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'hjhjhj.jpg'),
('KD.0144', 'Batik Pria Katun', 'BTK.0007', 275000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun 2x Proses</p>\r\n<p>\r\n	- Barang ready</p>\r\n<p>\r\n	- Lengan panjang</p>\r\n<p>\r\n	- Gambar asli seperti fisiknya</p>\r\n', 'b88.jpg'),
('KD.0145', 'Batik Safary', 'BTK.0002', 1500000, 10, 'L', 'laki-laki', NULL, '<p>\r\n	- Bahan Katun Tulis</p>\r\n<p>\r\n	- Lengan Panjang</p>\r\n<p>\r\n	- Bentuk jass</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'w.jpg'),
('KD.0146', 'Batik Wanita Gamis', 'BTK.0006', 550000, 7, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan Katun</p>\r\n<p>\r\n	- Gamis</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'b5a.jpg'),
('KD.0147', 'Batik Wanita', 'BTK.0007', 550000, 6, 'L', 'perempuan', NULL, '<p>\r\n	- Bahan Katun 2 x Proses</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'b6.jpg'),
('KD.0148', 'Batik Wanita', 'BTK.0006', 350000, 5, 'M', 'perempuan', NULL, '<p>\r\n	- Bahan Katun</p>\r\n<p>\r\n	- Kualitas Terjamin</p>\r\n<p>\r\n	- Barang Ready</p>\r\n<p>\r\n	-Gambar Asli seperti Fisiknya</p>\r\n', 'bgt.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_batik`
--

CREATE TABLE IF NOT EXISTS `tbl_batik` (
  `kode_jenis` varchar(10) NOT NULL,
  `jenis_batik` varchar(26) NOT NULL,
  PRIMARY KEY (`kode_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_batik`
--

INSERT INTO `tbl_batik` (`kode_jenis`, `jenis_batik`) VALUES
('BTK.0001', 'Setelan Wanita'),
('BTK.0002', 'katun tulis'),
('BTK.0003', 'batik anak-anak'),
('BTK.0005', 'Sutra'),
('BTK.0006', 'Katun biasa'),
('BTK.0007', 'Baju 2x Proses'),
('BTK.0008', 'Semi Sutera'),
('BTK.0009', 'Bahan biasa'),
('BTK.0010', 'Tas batik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id_blog` int(23) NOT NULL AUTO_INCREMENT,
  `judul_blog` varchar(70) NOT NULL,
  `photo_url` text,
  `isi` text,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `judul_blog`, `photo_url`, `isi`) VALUES
(1, 'Batik', 'sl.jpg', '<p>\r\n	<strong>Batik</strong> ialah lukisan atau gambar pada mori yang dibuat dengan menggunakan alat bernama canting. Orang yang melukis atau menggambar pada mori memakai canting disebut membatik. Membatik ini menghasilkan batik yang berupa macam-macam motif dan mempunyai sifat khusus yang dimiliki oleh batik itu sendiri.</p>\r\n'),
(2, 'Pengetahuan singkat tentang batik', 'man-three.jpg', '<p>\r\n	<strong>Batik</strong> ialah lukisan atau gambar pada mori yang dibuat dengan menggunakan alat bernama canting. Orang yang melukis atau menggambar pada mori memakai canting disebut membatik. Membatik ini menghasilkan batik yang berupa macam-macam motif dan mempunyai sifat khusus yang dimiliki oleh batik itu sendiri.</p>\r\n'),
(3, 'nhjkhuhu', 'qa8.jpg', '<p>\r\n	jhggjhg</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id_cart` int(10) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(23) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah_barang` varchar(12) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `photo_url` text,
  `total` int(12) NOT NULL,
  `konfirmasi` varchar(5) NOT NULL,
  `tanggal_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(12) DEFAULT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `tgl` varchar(14) NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275 ;

--
-- Dumping data untuk tabel `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `kode_barang`, `nama_barang`, `harga`, `jumlah_barang`, `id_member`, `photo_url`, `total`, `konfirmasi`, `tanggal_belanja`, `date`, `kode_cart`, `tgl`) VALUES
(145, 'KD.0027', 'gamus setelan wanita 1', 200000, '20', '37', 'gm11.jpg', 4000000, '1', '2016-04-13 01:48:13', '130416', 'BBJ0001', '13'),
(146, 'KD.0025', 'katun prisma 4', 100000, '31', '37', 'IMG_3841-150x150.jpg', 3100000, '1', '2016-04-13 01:48:48', '130416', 'BBJ0001', '13'),
(147, 'KD.0012', 'Setelan Rok dan Blus  R', 110000, '3', '37', 's4.jpg', 330000, '1', '2016-04-13 01:49:28', '130416', 'BBJ0001', '13'),
(149, 'KD.0027', 'gamus setelan wanita 1', 200000, '2', '38', 'gm11.jpg', 400000, '1', '2016-04-13 02:16:22', '130416', 'BBJ0002', '13'),
(150, 'KD.0028', 'gamis setelan wanita 2', 120000, '10', '38', 'gm11.jpg', 1200000, '1', '2016-04-13 02:16:48', '130416', 'BBJ0002', '13'),
(151, 'KD.0029', 'gamis setelan wanita 3', 200000, '11', '38', 'gm9.jpg', 2200000, '1', '2016-04-13 02:17:11', '130416', 'BBJ0002', '13'),
(153, 'KD.0026', 'Kemeja pria 6', 200000, '3', '39', 'IMG_3832-150x150.jpg', 600000, '1', '2016-04-13 02:20:07', '130416', 'BBJ0003', '13'),
(154, 'KD.0027', 'gamus setelan wanita 1', 200000, '2', '39', 'gm11.jpg', 400000, '1', '2016-04-13 02:20:29', '130416', 'BBJ0003', '13'),
(156, 'KD.0024', 'Kemeja pria 3', 90000, '0', '42', 'IMG_3846-150x150.jpg', 0, '1', '2016-05-05 21:06:23', '050516', 'BBJ0004', '05'),
(157, 'KD.0028', 'gamis setelan wanita 2', 120000, '1', '42', 'gm11.jpg', 120000, '1', '2016-05-05 21:07:17', '050516', 'BBJ0004', '05'),
(158, 'KD.0029', 'gamis setelan wanita 3', 200000, '1', '42', 'gm9.jpg', 200000, '1', '2016-05-05 21:07:46', '050516', 'BBJ0004', '05'),
(159, 'KD.0012', 'Setelan Rok dan Blus  R', 110000, '0', '42', 's4.jpg', 0, '1', '2016-05-05 21:08:08', '050516', 'BBJ0004', '05'),
(160, 'KD.0024', 'Kemeja pria 3', 90000, '0', '42', 'IMG_3846-150x150.jpg', 0, '', '2016-05-07 00:02:28', NULL, '', '06'),
(161, 'KD.0024', 'Kemeja pria 3', 90000, '0', '42', 'IMG_3846-150x150.jpg', 0, '', '2016-05-07 23:35:33', NULL, '', '07'),
(162, 'KD.0026', 'Kemeja pria 6', 200000, '1', '42', 'IMG_3832-150x150.jpg', 200000, '', '2016-05-07 23:35:49', NULL, '', '07'),
(163, 'KD.0029', 'gamis setelan wanita 3', 200000, '1', '42', 'gm9.jpg', 200000, '', '2016-05-09 08:40:08', NULL, '', '09'),
(164, 'KD.0027', 'gamus setelan wanita 1', 200000, '1', '42', 'gm11.jpg', 200000, '1', '2016-05-11 14:08:16', '110516', 'BBJ0005', '11'),
(165, 'KD.0024', 'Kemeja pria 3', 90000, '1', '42', 'IMG_3846-150x150.jpg', 90000, '1', '2016-05-11 14:09:00', '110516', 'BBJ0005', '11'),
(166, 'KD.0024', 'Kemeja pria 3', 90000, '0', '42', 'IMG_3846-150x150.jpg', 0, '', '2016-05-11 21:41:45', NULL, '', '11'),
(167, 'KD.0028', 'gamis setelan wanita 2', 120000, '1', '42', 'gm11.jpg', 120000, '', '2016-05-11 21:41:57', NULL, '', '11'),
(169, 'KD.0026', 'Kemeja pria 6', 200000, '2', '43', 'IMG_3832-150x150.jpg', 400000, '1', '2016-05-14 00:15:01', '130516', 'BBJ0006', '13'),
(170, 'KD.0023', 'Kemeja pria 2', 120000, '2', '43', 'IMG_3861-150x150.jpg', 240000, '1', '2016-05-14 00:15:26', '130516', 'BBJ0006', '13'),
(171, 'KD.0027', 'gamus setelan wanita 1', 200000, '1', '43', 'gm11.jpg', 200000, '1', '2016-05-14 00:16:32', '130516', 'BBJ0006', '13'),
(172, 'KD.0026', 'Kemeja pria 6', 200000, '1', '43', 'IMG_3832-150x150.jpg', 200000, '1', '2016-05-17 00:42:25', '160516', 'BBJ0007', '16'),
(173, 'KD.0027', 'gamus setelan wanita 1', 200000, '1', '43', 'gm11.jpg', 200000, '1', '2016-05-17 00:42:50', '160516', 'BBJ0007', '16'),
(174, 'KD.0007', 'Setelan Batik Sarimbit ', 100000, '1', '43', 'sr3.jpg', 100000, '1', '2016-05-17 00:43:38', '160516', 'BBJ0007', '16'),
(175, 'KD.0015', 'Setelan Rok dan Blus  R', 90000, '1', '43', 's1.jpg', 90000, '1', '2016-05-17 00:44:00', '160516', 'BBJ0007', '16'),
(176, 'KD.0021', 'Dres DM 1199', 300000, '1', '43', 'w4.jpg', 300000, '1', '2016-05-17 00:44:26', '160516', 'BBJ0007', '16'),
(177, 'KD.0030', 'Batik Pria', 200000, '1', '43', 'Untitled-5.png', 200000, '1', '2016-05-17 17:20:40', '170516', 'BBJ0008', '17'),
(179, 'KD.0036', 'Batik Pria 36', 200000, '1', '44', 'Untitled-18.png', 200000, '1', '2016-05-17 17:24:09', '170516', 'BBJ0009', '17'),
(180, 'KD.0037', 'Batik Pria 37', 200000, '3', '44', 'Untitled-12.png', 600000, '1', '2016-05-17 17:24:29', '170516', 'BBJ0009', '17'),
(182, 'KD.0034', 'Batik Pria 34', 150000, '1', '45', 'Untitled-8.png', 150000, '', '2016-05-17 17:28:19', NULL, '', '17'),
(184, 'KD.0049', 'Batik Pria 49', 200000, '1', '46', 'Untitled-5.png', 200000, '1', '2016-05-19 11:51:21', '190516', 'BBJ0010', '19'),
(186, 'KD.0048', 'Batik Pria 48', 150000, '1', '47', 'Untitled-7.png', 150000, '', '2016-05-22 13:26:10', NULL, '', '22'),
(188, 'KD.0048', 'Batik Pria 48', 150000, '5', '48', 'Untitled-7.png', 750000, '1', '2016-05-23 14:38:04', '230516', 'BBJ0011', '23'),
(189, 'KD.0047', 'Batik Pria 47', 150000, '1', '44', 'Untitled-9.png', 150000, '1', '2016-05-23 18:19:12', '230516', 'BBJ0012', '23'),
(191, 'KD.0047', 'Batik Pria 47', 150000, '1', '49', 'Untitled-9.png', 150000, '1', '2016-05-23 18:22:51', '230516', 'BBJ0013', '23'),
(199, 'KD.0049', 'Batik Pria 49', 200000, '1', '52', 'Untitled-5.png', 200000, '1', '2016-05-24 12:56:17', '240516', 'BBJ0015', '24'),
(204, 'KD.0044', 'Batik Pria 44', 150000, '1', '44', 'Untitled-12.png', 150000, '', '2016-05-30 20:37:59', NULL, '', '30'),
(205, 'KD.0044', 'Batik Pria 44', 150000, '1', '44', 'Untitled-12.png', 150000, '', '2016-05-30 20:39:05', NULL, '', '30'),
(207, 'KD.0044', 'Batik Pria 44', 150000, '1', '53', 'Untitled-12.png', 150000, '1', '2016-05-31 23:44:07', '310516', 'BBJ0016', '31'),
(208, 'KD.0044', 'Batik Pria 44', 150000, '1', '53', 'Untitled-12.png', 150000, '1', '2016-05-31 23:44:33', '310516', 'BBJ0016', '31'),
(211, 'KD.0049', 'Batik Pria 49', 200000, '1', '54', 'Untitled-5.png', 200000, '', '2016-06-01 00:13:08', NULL, '', '31'),
(212, 'KD.0030', 'Batik Pria', 200000, '1', '54', 'Untitled-5.png', 200000, '', '2016-06-01 00:13:31', NULL, '', '31'),
(213, 'KD.0044', 'Batik Pria 44', 150000, '1', '54', 'Untitled-12.png', 150000, '', '2016-06-01 00:13:48', NULL, '', '31'),
(215, 'KD.0044', 'Batik Pria 44', 150000, '1', '55', 'Untitled-12.png', 150000, '1', '2016-06-01 19:15:01', '010616', 'BBJ0018', '01'),
(216, 'KD.0044', 'Batik Pria 44', 150000, '1', '44', 'Untitled-12.png', 150000, '1', '2016-06-01 19:17:44', '010616', 'BBJ0019', '01'),
(218, 'KD.0044', 'Batik Pria 44', 150000, '1', '56', 'Untitled-12.png', 150000, '1', '2016-06-01 19:19:08', '010616', 'BBJ0020', '01'),
(220, 'KD.0030', 'Batik Pria', 200000, '1', '57', 'Untitled-5.png', 200000, '1', '2016-06-01 19:25:50', '010616', 'BBJ0021', '01'),
(222, 'KD.0048', 'Batik Pria 48', 150000, '1', '44', 'Untitled-7.png', 150000, '1', '2016-06-04 07:40:33', '040616', 'BBJ0022', '04'),
(223, 'KD.0049', 'Batik Pria 49', 200000, '1', '44', 'Untitled-5.png', 200000, '1', '2016-06-14 15:50:52', '140616', 'BBJ0023', '14'),
(225, 'KD.0049', 'Batik Pria 49', 200000, '1', '59', 'Untitled-5.png', 200000, '1', '2016-06-16 01:31:39', '150616', 'BBJ0024', '15'),
(228, 'KD.0004', 'Setelan Batik Sarimbit ', 100000, '1', '61', 'sr6.jpg', 100000, '1', '2016-06-17 20:39:50', '170616', 'BBJ0025', '17'),
(232, 'KD.0062', 'katun', 150000, '2', '64', 'b32.jpg', 300000, '1', '2016-07-30 16:43:39', '300716', 'BBJ0026', '30'),
(233, 'KD.0057', 'Batik Sutra', 270000, '1', '64', 'b44.jpg', 270000, '1', '2016-07-30 16:58:27', '300716', 'BBJ0026', '30'),
(237, 'KD.0037', 'Katun Proses 2x', 350000, '1', '66', 'b59.jpg', 350000, '1', '2016-08-01 00:21:03', '310716', 'BBJ0027', '31'),
(238, 'KD.0029', 'gamis setelan wanita 3', 200000, '5', '66', 'gm9.jpg', 1000000, '1', '2016-08-01 00:21:37', '310716', 'BBJ0027', '31'),
(239, 'KD.0028', 'gamis setelan wanita 2', 120000, '1', '66', 'gm11.jpg', 120000, '1', '2016-08-01 00:22:17', '310716', 'BBJ0027', '31'),
(240, 'KD.0029', 'gamis setelan wanita 3', 200000, '1', '44', 'gm9.jpg', 200000, '1', '2016-08-01 00:26:33', '310716', 'BBJ0028', '31'),
(242, 'KD.0148', 'Batik Wanita', 550000, '1', '67', 'bgt.jpg', 550000, '1', '2016-08-03 12:56:39', '030816', 'BBJ0029', '03'),
(243, 'KD.0147', 'Batik Wanita', 750000, '2', '67', 'b6.jpg', 1500000, '1', '2016-08-03 12:57:20', '030816', 'BBJ0029', '03'),
(244, 'KD.0146', 'Batik Wanita Gamis', 550000, '1', '67', 'b5a.jpg', 550000, '1', '2016-08-03 12:57:45', '030816', 'BBJ0029', '03'),
(246, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '68', 'hjhjhj.jpg', 450000, '1', '2016-08-05 20:37:23', '050816', 'BBJ0030', '05'),
(247, 'KD.0148', 'Batik Wanita', 350000, '1', '68', 'bgt.jpg', 350000, '1', '2016-08-06 08:14:35', '060816', 'BBJ0031', '06'),
(249, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '69', 'hjhjhj.jpg', 450000, '1', '2016-08-06 08:21:54', '060816', 'BBJ0032', '06'),
(252, 'KD.0148', 'Batik Wanita', 350000, '1', '71', 'bgt.jpg', 350000, '1', '2016-08-06 08:26:23', '060816', 'BBJ0033', '06'),
(254, 'KD.0102', 'Batik Anak-Anak', 125000, '1', '72', 'a1.jpg', 125000, '1', '2016-08-06 08:29:53', '060816', 'BBJ0034', '06'),
(256, 'KD.0143', 'Batik Pria Sutra', 450000, '2', '73', 'hjhjhj.jpg', 900000, '1', '2016-08-06 08:32:58', '060816', 'BBJ0035', '06'),
(258, 'KD.0126', 'Batik Pria ', 550000, '1', '74', 'b3.jpg', 550000, '1', '2016-08-06 08:36:39', '060816', 'BBJ0036', '06'),
(259, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '74', 'hjhjhj.jpg', 450000, '1', '2016-08-06 08:36:49', '060816', 'BBJ0036', '06'),
(261, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '75', 'hjhjhj.jpg', 450000, '1', '2016-08-06 08:46:16', '060816', 'BBJ0037', '06'),
(263, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '76', 'hjhjhj.jpg', 450000, '1', '2016-08-06 08:49:15', '060816', 'BBJ0038', '06'),
(265, 'KD.0146', 'Batik Wanita Gamis', 550000, '2', '77', 'b5a.jpg', 1100000, '1', '2016-08-06 08:56:58', '060816', 'BBJ0039', '06'),
(267, 'KD.0143', 'Batik Pria Sutra', 450000, '1', '78', 'hjhjhj.jpg', 450000, '1', '2016-08-06 08:59:02', '060816', 'BBJ0041', '06'),
(269, 'KD.0148', 'Batik Wanita', 350000, '1', '78', 'bgt.jpg', 350000, '1', '2016-08-06 12:28:43', '060816', 'BBJ0041', '06'),
(270, 'KD.0101', 'Batik Anak-Anak', 125000, '1', '78', 'a2.jpg', 125000, '1', '2016-08-06 12:33:02', '060816', 'BBJ0041', '06'),
(272, 'KD.0148', 'Batik Wanita', 350000, '1', '79', 'bgt.jpg', 350000, '', '2016-08-06 12:40:41', NULL, '', '06'),
(274, 'KD.0147', 'Batik Wanita', 550000, '2', '80', 'b6.jpg', 1100000, '1', '2016-08-08 22:04:24', '080816', 'BBJ0042', '08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailjual`
--

CREATE TABLE IF NOT EXISTS `tbl_detailjual` (
  `id_detailJual` int(23) NOT NULL AUTO_INCREMENT,
  `kode_cart` varchar(14) NOT NULL,
  `jumlah_barang` varchar(23) NOT NULL,
  `total` varchar(23) NOT NULL,
  `tanggal` text,
  PRIMARY KEY (`id_detailJual`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tbl_detailjual`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_galeri` int(2) NOT NULL AUTO_INCREMENT,
  `nama_foto` text,
  `photo_url` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` text,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_foto`, `photo_url`, `tanggal`, `keterangan`) VALUES
(9, '', 'IMG_2978-300x200.jpg', '2016-05-17 16:54:47', ''),
(11, 'piala', 'qaa.jpg', '2016-07-31 21:54:50', ''),
(12, 'tropi', 'qa13.jpg', '2016-07-31 22:07:07', ''),
(13, 'TOKO', 'qa2.jpg', '2016-08-01 15:09:27', ''),
(14, 'Tampilan Depan', 'qa3.jpg', '2016-08-01 15:10:11', ''),
(15, 'Lantai2 baju pria', 'qa9.jpg', '2016-08-01 15:11:51', ''),
(16, 'Lantai1', 'qa5.jpg', '2016-08-01 15:13:28', ''),
(17, '', 'kl.jpg', '2016-08-01 15:15:44', ''),
(18, 'berkah', 'qa1.jpg', '2016-08-01 15:16:41', ''),
(19, 'ju', 'qa8.jpg', '2016-08-05 23:53:48', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_historycart`
--

CREATE TABLE IF NOT EXISTS `tbl_historycart` (
  `id_cart` int(10) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(23) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah_barang` varchar(12) NOT NULL,
  `id_member` varchar(14) NOT NULL,
  `photo_url` text,
  `total` int(12) NOT NULL,
  `konfirmasi` varchar(5) NOT NULL,
  `tanggal_belanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(12) DEFAULT NULL,
  `kode_cart` varchar(14) NOT NULL,
  `tgl` varchar(14) NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tbl_historycart`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_historyorder`
--

CREATE TABLE IF NOT EXISTS `tbl_historyorder` (
  `id_order` int(23) NOT NULL,
  `kode_cart` varchar(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total` int(12) NOT NULL,
  `tanggal_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konfirmasi` int(3) NOT NULL,
  PRIMARY KEY (`kode_cart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_historyorder`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar_blog` (
  `id_blog` int(23) NOT NULL,
  `nama` varchar(23) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar_blog`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `tbl_konfirmasi` (
  `id_konfirmasi` int(23) NOT NULL AUTO_INCREMENT,
  `kode_cart` varchar(14) NOT NULL,
  `photo_url` text,
  `id_member` varchar(23) NOT NULL,
  `no_rekening` varchar(23) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `keterangan` text,
  `konfirmasi` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data untuk tabel `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`id_konfirmasi`, `kode_cart`, `photo_url`, `id_member`, `no_rekening`, `kode_transaksi`, `keterangan`, `konfirmasi`) VALUES
(11, 'BBJ0001', 'ragazzo-birra.jpg', '37', '123123123123123', '', 'ini bukti pembayaran', '1'),
(22, 'BBJ0010', '1059-200x300.jpg', '46', '666', '', '', '1'),
(24, 'BBJ0014', 'Desert.jpg', '50', '234567890', '', 'jjjjjj', '1'),
(25, 'BBJ0014', 'Desert.jpg', '50', '234567890', '', 'jjjjjj', '1'),
(26, 'BBJ0014', 'Koala.jpg', '50', '79', '', 'oioioio', '1'),
(27, 'BBJ0026', 'IMG_20130906_0022193.jpg', '64', '1765-8726-836', '', 'ini sudah saya transfer gan', '1'),
(28, 'BBJ0026', 'IMG_20130906_0022193.jpg', '64', '1765-8726-836', '', 'ini sudah saya transfer gan', '1'),
(29, 'BBJ0029', 'IMG_20160801_165416.jpg', '67', '2836-424-4-2224-33', '', 'sudah sya transfer gan', '1'),
(30, 'BBJ0029', 'IMG_20160801_165416.jpg', '67', '2836-424-4-2224-33', '', 'sudah sya transfer gan', '1'),
(31, 'BBJ0030', 'bukti.jpg', '68', '767-434-2343-53', '', 'sudah ditransfer gan', '1'),
(32, 'BBJ0030', 'bukti.jpg', '68', '767-434-2343-53', '', 'sudah ditransfer gan', '1'),
(33, 'BBJ0031', 'g.jpg', '68', '89898-89786-786', '', 'udah ditransfer gan', '1'),
(34, 'BBJ0031', 'g.jpg', '68', '89898-89786-786', '', 'udah ditransfer gan', '1'),
(35, 'BBJ0032', 'bukti.jpg', '69', '87867-878-27', '', 'sudah', '1'),
(36, 'BBJ0032', 'bukti.jpg', '69', '87867-878-27', '', 'sudah', '1'),
(37, 'BBJ0033', 'j.jpg', '71', '7878-787-12-2', '', 'ji', '1'),
(38, 'BBJ0033', 'j.jpg', '71', '7878-787-12-2', '', 'ji', '1'),
(39, 'BBJ0034', 'l.jpg', '72', '878-878-87', '', 'jhj', '1'),
(40, 'BBJ0035', 'g.jpg', '73', '33-33-4-4-2', '', 'l', '1'),
(41, 'BBJ0035', 'g.jpg', '73', '33-33-4-4-2', '', 'l', '1'),
(42, 'BBJ0036', 'bukti.jpg', '74', '8787-989-98', '', 'oke', '1'),
(43, 'BBJ0036', 'bukti.jpg', '74', '8787-989-98', '', 'oke', '1'),
(44, 'BBJ0037', 'd.jpg', '75', '8', '', 'k', '1'),
(45, 'BBJ0037', 'd.jpg', '75', '8', '', 'k', '1'),
(46, 'BBJ0038', 'f.jpg', '76', 'k', '', 'kjk', '1'),
(47, 'BBJ0038', 'f.jpg', '76', 'k', '', 'kjk', '1'),
(48, 'BBJ0039', 'f.jpg', '77', '7', '', 'jk', '1'),
(49, 'BBJ0040', 'd.jpg', '78', '9', '', 'kjk', '1'),
(50, 'BBJ0040', 'd.jpg', '78', '9', '', 'kjk', '1'),
(51, 'BBJ0041', 'h.jpg', '78', '76-4343-434-4', '', 'sudah', '1'),
(52, 'BBJ0042', 'l.jpg', '80', '989-444-344', '', 'sudah', 'n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE IF NOT EXISTS `tbl_kontak` (
  `id_kontak` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(23) NOT NULL,
  `email` varchar(23) NOT NULL,
  `pesan` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'aku', 'sya@h.nm', 'fee', '2016-06-09 17:19:43'),
(2, 'muhammad', 'muhammad@gmail.com', 'ugugu\r\n', '2016-06-17 20:41:25'),
(3, 'Novanda', 'Novan@gmail', 'mas mau pesen banyak ni gmn caranya biar enak kerjasamanya', '2016-07-30 17:30:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(26) NOT NULL,
  `email_member` varchar(23) NOT NULL,
  `password_member` varchar(23) NOT NULL,
  `alamat` text,
  `no_hp` varchar(23) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `bulan` varchar(23) NOT NULL,
  `tahun` varchar(23) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `email_member`, `password_member`, `alamat`, `no_hp`, `tanggal`, `bulan`, `tahun`) VALUES
(33, 'Melani', 'melani@yahoo.com', 'melani', 'Jambi								\n							', '08237789876', '2016-04-13 01:39:26', '04', '16'),
(34, 'Rahmatullah', 'rahmat@yahoo.com', 'RAHMAT', 'mENDAHARA								\n							', '08237788989', '2016-04-13 01:40:05', '04', '16'),
(35, 'zukii vixii', 'zukiungu@gmail.com', 'anon00', 'jambi selatan								\n							', '085266778765', '2016-04-13 01:40:35', '', ''),
(36, 'm.syakuri', 'm.syakuri@gmail.com', '123', 'muara bulian								\n							', '086756565655', '2016-04-13 01:41:30', '', ''),
(37, 'Marzuki', 'zuki@yahoo.com', '123', 'jambi								\n							', '082377168756', '2016-04-13 01:47:35', '', ''),
(38, 'zukivixi', 'zukiungu@gmail.com', '123', 'jambi indonesia								\n							', '082377168756', '2016-04-13 02:15:50', '', ''),
(40, 'reza', 'reza@gmail.com', 'reza', '	jambul							\r\n							', '1234567890', '2016-04-16 19:10:25', '', ''),
(44, 'syakuri', 'kuri@gmail.com', '2', 'jambi								\r\n							', '8989898989', '2016-05-17 17:23:48', '', ''),
(61, 'Muhammad ', 'muhammad@gmail.com', '11111', 'jambi								\r\n							', '085266515160', '2016-06-17 20:22:46', '06', '16'),
(64, 'Novanda', 'novan@gmail.com', '11111', 'jln. gajah mada, no. 40, sungai buluh rt 11, lintas-jambi\r\n				\r\n							', '085743234566', '2016-07-30 16:42:27', '07', '16'),
(65, 'sugeng', 'sugeng@ymail.com', '11111', 'jln. brojonegoro no. 32, sipin, kota jambi					', '085266515160', '2016-07-31 23:11:30', '07', '16'),
(66, 'sandra', 'san@gmail.com', 'qwerty', 'jambi								\r\n							', '085266414132', '2016-08-01 00:19:54', '07', '16'),
(67, 'muhammad ghazali', 'ghazali@ymail.com', 'qwerty', 'Jln. sumantri brojonegoro no.01, sipin, jambi						\r\n							', '08567567865', '2016-08-03 12:47:18', '08', '16'),
(68, 'Santoso', 'santoso@gmail.com', '12345', 'JL. sumantri brojonegoro no. 46, sipin, kota jambi				\r\n							', '085234526254', '2016-08-05 00:32:41', '08', '16'),
(71, 'joni', 'joni@gmail.com', 'qwerty', 'jambi							\r\n							', '0876161715', '2016-08-06 08:25:45', '08', '16'),
(72, 'ustad', 'sutad@ymail.com', 'qq', '		jambi						\r\n							', '0975171527', '2016-08-06 08:29:34', '08', '16'),
(77, 'baru', 'j@gmail.com', '3', 'jh								\r\n							', '9', '2016-08-06 08:56:34', '08', '16'),
(78, 'rio', 'rio@gmail.com', '1', 'Jl. sumantri brpjonegoro sipin, kota jambi						\r\n							', '0812565452786', '2016-08-06 12:26:29', '08', '16'),
(79, 'eka', 'eka@gmail.com', '123', 'jh					', '899', '2016-08-06 12:39:36', '08', '16'),
(80, 'sakuri', 'sakuri@gmail.com', '12345', '								\r\n		jambi					', '08542527627', '2016-08-08 22:03:52', '08', '16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id_order` int(23) NOT NULL,
  `kode_cart` varchar(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total` int(12) NOT NULL,
  `tanggal_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konfirmasi` int(3) NOT NULL,
  PRIMARY KEY (`kode_cart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `kode_cart`, `id_member`, `jumlah_barang`, `total`, `tanggal_order`, `konfirmasi`) VALUES
(0, 'BBJ0001', 37, 3, 7430000, '2016-04-13 01:50:13', 1),
(0, 'BBJ0002', 38, 3, 3800000, '2016-04-13 02:17:18', 0),
(0, 'BBJ0004', 42, 4, 320000, '2016-05-05 21:08:28', 1),
(0, 'BBJ0005', 42, 10, 1010000, '2016-05-11 14:09:14', 0),
(0, 'BBJ0006', 43, 3, 840000, '2016-05-14 00:16:42', 1),
(0, 'BBJ0008', 43, 9, 1930000, '2016-05-17 17:21:03', 0),
(0, 'BBJ0009', 44, 2, 800000, '2016-05-17 17:24:39', 1),
(0, 'BBJ0010', 46, 1, 200000, '2016-05-19 11:51:31', 1),
(0, 'BBJ0011', 48, 1, 750000, '2016-05-23 14:38:28', 0),
(0, 'BBJ0012', 44, 3, 950000, '2016-05-23 18:19:17', 0),
(0, 'BBJ0013', 49, 1, 150000, '2016-05-23 18:23:15', 0),
(0, 'BBJ0014', 50, 4, 450000, '2016-05-23 18:40:11', 1),
(0, 'BBJ0015', 52, 1, 200000, '2016-05-24 12:56:25', 0),
(0, 'BBJ0016', 53, 2, 300000, '2016-05-31 23:55:15', 0),
(0, 'BBJ0017', 44, 9, 1450000, '2016-06-01 19:13:24', 0),
(0, 'BBJ0018', 55, 1, 150000, '2016-06-01 19:15:18', 0),
(0, 'BBJ0019', 44, 7, 1400000, '2016-06-01 19:18:01', 0),
(0, 'BBJ0020', 56, 1, 150000, '2016-06-01 19:19:13', 0),
(0, 'BBJ0021', 57, 1, 200000, '2016-06-01 19:25:54', 0),
(0, 'BBJ0022', 44, 7, 1550000, '2016-06-04 07:40:51', 0),
(0, 'BBJ0023', 44, 8, 1750000, '2016-06-14 15:52:55', 0),
(0, 'BBJ0024', 59, 1, 200000, '2016-06-16 01:31:46', 0),
(0, 'BBJ0025', 61, 1, 100000, '2016-06-17 20:40:03', 0),
(0, 'BBJ0026', 64, 2, 570000, '2016-07-30 16:58:46', 1),
(0, 'BBJ0027', 66, 3, 1470000, '2016-08-01 00:22:36', 0),
(0, 'BBJ0028', 44, 9, 1950000, '2016-08-01 00:26:45', 0),
(0, 'BBJ0029', 67, 3, 2600000, '2016-08-03 12:57:56', 1),
(0, 'BBJ0030', 68, 1, 450000, '2016-08-05 20:37:31', 1),
(0, 'BBJ0031', 68, 2, 800000, '2016-08-06 08:16:31', 1),
(0, 'BBJ0032', 69, 1, 450000, '2016-08-06 08:22:05', 1),
(0, 'BBJ0033', 71, 1, 350000, '2016-08-06 08:26:28', 1),
(0, 'BBJ0034', 72, 1, 125000, '2016-08-06 08:29:58', 1),
(0, 'BBJ0035', 73, 1, 900000, '2016-08-06 08:33:08', 1),
(0, 'BBJ0036', 74, 2, 1000000, '2016-08-06 08:36:58', 1),
(0, 'BBJ0037', 75, 1, 450000, '2016-08-06 08:46:21', 1),
(0, 'BBJ0038', 76, 1, 450000, '2016-08-06 08:49:20', 1),
(0, 'BBJ0039', 77, 1, 1100000, '2016-08-06 08:57:03', 1),
(0, 'BBJ0040', 78, 1, 450000, '2016-08-06 08:59:07', 1),
(0, 'BBJ0041', 78, 3, 925000, '2016-08-06 12:33:06', 1),
(0, 'BBJ0042', 80, 1, 1100000, '2016-08-08 22:04:45', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_promosi`
--

CREATE TABLE IF NOT EXISTS `tbl_promosi` (
  `kode_barang` varchar(14) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kode_jenis` varchar(10) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(3) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `gambar` text,
  `keterangan` text,
  `photo_url` text,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_promosi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok`
--

CREATE TABLE IF NOT EXISTS `tbl_stok` (
  `id_stok` int(23) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(14) NOT NULL,
  `jumlah_stok` int(3) NOT NULL,
  PRIMARY KEY (`id_stok`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data untuk tabel `tbl_stok`
--

INSERT INTO `tbl_stok` (`id_stok`, `kode_barang`, `jumlah_stok`) VALUES
(6, 'KD.0001', 20),
(7, 'KD.0002', 15),
(8, 'KD.0003', 25),
(9, 'KD.0004', 9),
(10, 'KD.0005', 20),
(12, 'KD.0007', 29),
(13, 'KD.0008', 25),
(14, 'KD.0009', 20),
(15, 'KD.0010', 20),
(16, 'KD.0011', 10),
(17, 'KD.0012', 27),
(18, 'KD.0013', 16),
(19, 'KD.0014', 20),
(20, 'KD.0015', 29),
(21, 'KD.0016', 20),
(22, 'KD.0017', 23),
(23, 'KD.0018', 22),
(24, 'KD.0019', 10),
(25, 'KD.0020', 22),
(26, 'KD.0021', 19),
(27, 'KD.0021', 19),
(28, 'KD.0022', 10),
(29, 'KD.0023', 28),
(30, 'KD.0024', 11),
(31, 'KD.0025', 2),
(32, 'KD.0026', 13),
(33, 'KD.0027', 3),
(34, 'KD.0028', 16),
(35, 'KD.0029', 1),
(36, 'KD.0030', 7),
(38, 'KD.0031', 10),
(39, 'KD.0033', 10),
(40, 'KD.0034', 9),
(41, 'KD.0036', 9),
(43, 'KD.0037', 1),
(44, 'KD.0038', 9),
(45, 'KD.0039', 10),
(48, 'KD.0041', 12),
(49, 'KD.0042', 12),
(50, 'KD.0043', 12),
(52, 'KD.0044', 1),
(53, 'KD.0045', 12),
(54, 'KD.0046', 12),
(55, 'KD.0047', 10),
(56, 'KD.0048', 5),
(57, 'KD.0049', 16),
(58, 'KD.0014', 20),
(59, 'KD.0057', 14),
(60, 'KD.0058', 11),
(61, 'KD.0062', 20),
(62, 'KD.0037', 1),
(63, 'KD.0037', 10),
(64, 'KD.0038', 10),
(65, 'KD.0039', 10),
(67, 'KD.0040', 10),
(68, 'KD.0041', 10),
(69, 'KD.0042', 10),
(70, 'KD.0043', 10),
(71, 'KD.0042', 10),
(72, 'KD.0043', 10),
(73, 'KD.0044', 10),
(74, 'KD.0045', 10),
(75, 'KD.0046', 10),
(76, 'KD.0047', 10),
(77, 'KD.0048', 10),
(78, 'KD.0050', 10),
(79, 'KD.0051', 1),
(80, 'KD.0148', 5),
(81, 'KD.0147', 6),
(82, 'KD.0146', 7),
(84, 'KD.0145', 10),
(85, 'KD.0144', 10),
(86, 'KD.0143', 2),
(87, 'KD.0142', 10),
(88, 'KD.0141', 10),
(89, 'KD.0140', 10),
(90, 'KD.0139', 10),
(91, 'KD.0138', 10),
(92, 'KD.0102', 9),
(93, 'KD.0101', 9),
(94, 'KD.0099', 10),
(95, 'KD.0098', 10),
(96, 'KD.0097', 10),
(97, 'KD.0096', 0),
(98, 'KD.0096', 10),
(99, 'KD.0126', 9),
(100, 'KD.0125', 10),
(101, 'KD.0124', 10),
(102, 'KD.0123', 10),
(103, 'KD.0122', 10),
(104, 'KD.0121', 10);
