-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2020 pada 11.12
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnokids_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `umur` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id`, `email`, `nama`, `jenis_kelamin`, `umur`) VALUES
(7, 'uhuy@gm.com', 'Galih Rexy', 'Laki-laki', 3),
(8, 'uhuy@gm.com', 'Muhammad Al-Fatih', 'Perempuan', 1),
(9, 'galihrexyhakiki@gmail.com', 'Dita', 'Perempuan', 3),
(10, '1@gm.com', '1', 'Laki-laki', 1),
(11, '1@gm.com', '2', 'Perempuan', 1),
(12, '1@gm.com', '3', 'Laki-laki', 3),
(13, '1@gm.com', '4', 'Perempuan', 4),
(14, '1@gm.com', '5', 'Laki-laki', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `kode_diagnosa` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`kode_diagnosa`, `email`, `id_anak`, `date_created`) VALUES
(18, 'uhuy@gm.com', 7, 1593093177),
(19, 'uhuy@gm.com', 7, 1593093853),
(20, 'uhuy@gm.com', 7, 1593093935),
(21, 'uhuy@gm.com', 7, 1593094077),
(22, 'uhuy@gm.com', 7, 1593094088),
(23, 'uhuy@gm.com', 7, 1593094171),
(24, 'uhuy@gm.com', 7, 1593094184),
(25, 'uhuy@gm.com', 7, 1593094596),
(26, 'uhuy@gm.com', 8, 1593094682),
(27, 'uhuy@gm.com', 8, 1593094870),
(28, 'galihrexyhakiki@gmail.com', 9, 1593571079),
(29, '1@gm.com', 10, 1595764637),
(30, '1@gm.com', 10, 1595764802),
(31, '1@gm.com', 10, 1595764882),
(32, '1@gm.com', 10, 1595764938),
(33, '1@gm.com', 10, 1595765031);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa_detail`
--

CREATE TABLE `diagnosa_detail` (
  `kode_diagnosa_detail` int(11) NOT NULL,
  `kode_diagnosa` int(11) NOT NULL,
  `kode_gejala` varchar(50) NOT NULL DEFAULT 'G0_',
  `kode_penyakit` varchar(11) NOT NULL DEFAULT 'P0_',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diagnosa_detail`
--

INSERT INTO `diagnosa_detail` (`kode_diagnosa_detail`, `kode_diagnosa`, `kode_gejala`, `kode_penyakit`, `date_created`) VALUES
(36, 25, 'GJL/001', 'PYKT/001', 1593094596),
(37, 26, 'GJL/001', 'PYKT/001', 1593094682),
(38, 27, 'K3 & GJL/019', 'PYKT/011', 1593094870),
(39, 28, 'K3 & GJL/019', 'PYKT/011', 1593571080),
(40, 29, 'K3 & GJL/019', 'PYKT/011', 1595764638),
(41, 30, 'GJL/001', 'PYKT/001', 1595764802),
(42, 30, 'GJL/002', 'PYKT/001', 1595764802),
(43, 30, 'GJL/003', 'PYKT/001', 1595764802),
(44, 30, 'GJL/004', 'PYKT/001', 1595764802),
(45, 30, 'K1 & GJL/005', 'PYKT/002', 1595764802),
(46, 30, 'K1 & GJL/006', 'PYKT/003', 1595764802),
(47, 30, 'K1 & PYKT/001', 'PYKT/004', 1595764802),
(48, 30, 'GJL/007', 'PYKT/004', 1595764802),
(49, 30, 'GJL/008', 'PYKT/004', 1595764803),
(50, 30, 'K2 & GJL/009', 'PYKT/005', 1595764803),
(51, 30, 'P5 & GJL/010 & GJL/011', 'PYKT/006', 1595764803),
(52, 30, 'GJL/012', 'PYKT/006', 1595764803),
(53, 30, 'GJL/013', 'PYKT/006', 1595764803),
(54, 30, 'P5 & GJL/010 & GJL/014', 'PYKT/007', 1595764803),
(55, 30, 'GJL/015', 'PYKT/007', 1595764803),
(56, 30, 'GJL/016', 'PYKT/007', 1595764803),
(57, 30, 'PYKT/005 & GJL/017', 'PYKT/008', 1595764803),
(58, 30, 'PYKT/008 & PYKT/006', 'PYKT/009', 1595764803),
(59, 30, 'PYKT/005 & GJL/018', 'PYKT/010', 1595764803),
(60, 30, 'K3 & GJL/019', 'PYKT/011', 1595764803),
(61, 30, 'PYKT/001 & PYKT/011', 'PYKT/012', 1595764803),
(62, 30, 'GJL/020', 'PYKT/012', 1595764803),
(63, 30, 'PYKT/011 & GJL/021 & GJL/022', 'PYKT/013', 1595764803),
(64, 30, 'GJL/025', 'PYKT/013', 1595764804),
(65, 30, 'PYKT/013 & PYKT/001 & GJL/023', 'PYKT/014', 1595764804),
(66, 30, 'GJL/024', 'PYKT/014', 1595764804),
(67, 30, 'PYKT/013 & GJL/025', 'PYKT/015', 1595764804),
(68, 30, 'GJL/026', 'PYKT/015', 1595764804),
(69, 30, 'PYKT/011 & GJL/027 & GJL/028 & GJL/029', 'PYKT/016', 1595764804),
(70, 30, 'GJL/030', 'PYKT/016', 1595764804),
(71, 30, 'PYKT/011 & GJL/027 & GJL/028 & GJL/031', 'PYKT/017', 1595764804),
(72, 30, 'GJL/032', 'PYKT/017', 1595764804),
(73, 30, 'GJL/033', 'PYKT/017', 1595764804),
(74, 30, 'GJL/034', 'PYKT/017', 1595764804),
(75, 30, 'PYKT/011 & GJL/035', 'PYKT/018', 1595764804),
(76, 30, 'GJL/036', 'PYKT/018', 1595764804),
(77, 31, 'K3 & GJL/019', 'PYKT/011', 1595764882),
(78, 32, 'GJL/001', 'PYKT/001', 1595764938),
(79, 32, 'K1 & PYKT/001', 'PYKT/004', 1595764938),
(80, 33, 'GJL/001', 'PYKT/001', 1595765032),
(81, 33, 'GJL/002', 'PYKT/001', 1595765032),
(82, 33, 'GJL/003', 'PYKT/001', 1595765032),
(83, 33, 'GJL/004', 'PYKT/001', 1595765032),
(84, 33, 'K1 & GJL/005', 'PYKT/002', 1595765032),
(85, 33, 'K1 & GJL/006', 'PYKT/003', 1595765032),
(86, 33, 'K1 & PYKT/001', 'PYKT/004', 1595765032),
(87, 33, 'GJL/007', 'PYKT/004', 1595765032);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(50) NOT NULL DEFAULT 'G0_',
  `kode_penyakit` varchar(11) NOT NULL DEFAULT 'P0_',
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `kode_penyakit`, `nama_gejala`) VALUES
('GJL/001', 'PYKT/2019/1', 'Anak tidak bisa minum atau menyusu'),
('GJL/002', 'PYKT/2019/1', 'Anak memuntahkan makanan yang dimakan'),
('GJL/003', 'PYKT/2019/1', 'Anak menderita kejang'),
('GJL/004', 'PYKT/2019/1', 'Anak tampak letargis atau tidak sadar'),
('GJL/005', 'PYKT/2019/2', 'Nafas normal'),
('GJL/006', 'PYKT/2019/3', 'Nafas cepat'),
('GJL/007', 'PYKT/2019/1', 'Tarikan dinding dada kedalam'),
('GJL/008', 'PYKT/2019/1', 'Stridor'),
('GJL/009', 'PYKT/2019/1', 'Berak air atau lembek'),
('GJL/010', 'PYKT/2019/1', 'Mata cekung'),
('GJL/011', 'PYKT/2019/1', 'Cubitan kulit perut kembali lambat'),
('GJL/012', 'PYKT/2019/1', 'Gelisah, rewel/mudah marah'),
('GJL/013', 'PYKT/2019/1', 'Haus, minum dengan lahap'),
('GJL/014', 'PYKT/2019/1', 'Cubitan kulit perut sangat lambat'),
('GJL/015', 'PYKT/2019/1', 'Anak tampak letargis atau tidak sadar'),
('GJL/016', 'PYKT/2019/1', 'Tidak bisa minum atau malas minum'),
('GJL/017', 'PYKT/2019/1', 'Diare 14 hari atau lebih'),
('GJL/018', 'PYKT/2019/1', 'Ada darah dalam tinja'),
('GJL/019', 'PYKT/2019/1', 'Suhu badan melebihi 37.5º C'),
('GJL/020', 'PYKT/2019/1', 'Kaku kuduk (anak tidak bisa menunduk hingga dagu mencapai dada)'),
('GJL/021', 'PYKT/2019/1', 'Ruam kemerahan di kulit'),
('GJL/022', 'PYKT/2019/1', 'batuk pilek atau mata merah'),
('GJL/023', 'PYKT/2019/1', 'Luka di mulut yang dalam atau luas'),
('GJL/024', 'PYKT/2019/1', 'Kekeruhan pada kornea mata'),
('GJL/025', 'PYKT/2019/1', 'Luka di mulut'),
('GJL/026', 'PYKT/2019/1', 'Mata bernanah'),
('GJL/027', 'PYKT/2019/1', 'Demam 2 - 7 hari'),
('GJL/028', 'PYKT/2019/1', 'Demam mendadak tinggi dan terus menerus'),
('GJL/029', 'PYKT/2019/1', 'Nyeri di ulu hati'),
('GJL/030', 'PYKT/2019/1', 'bintik bintik merah'),
('GJL/031', 'PYKT/2019/1', 'Muntah bercampur darah / seperti kopi'),
('GJL/032', 'PYKT/2019/1', 'Tinja berwarna hitam'),
('GJL/033', 'PYKT/2019/1', 'Perdarahan dihidung dan gusi'),
('GJL/034', 'PYKT/2019/1', 'Syok dan gelisah'),
('GJL/035', 'PYKT/2019/1', 'Infeksi'),
('GJL/036', 'PYKT/2019/1', 'Pilek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_return`
--

CREATE TABLE `gejala_return` (
  `id_gejala_return` int(11) NOT NULL,
  `kode_penyakit` varchar(11) NOT NULL,
  `kode_gejala_return` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala_return`
--

INSERT INTO `gejala_return` (`id_gejala_return`, `kode_penyakit`, `kode_gejala_return`, `keterangan`) VALUES
(1, 'PYKT/001', 'GJL/001', 'Anak tidak bisa minum dan menyusu'),
(2, 'PYKT/001', 'GJL/002', 'Anak Memuntahkan makanan yang dimakan'),
(3, 'PYKT/001', 'GJL/003', 'Anak menderita kejang'),
(4, 'PYKT/001', 'GJL/004', 'Anak tampak letargis dan tidak sabar'),
(5, 'PYKT/002', 'K1 & GJL/005', 'Ada keluhan Batuk dan nafas normal'),
(6, 'PYKT/003', 'K1 & GJL/006', 'Ada keluhan batuk dan nafas cepat'),
(7, 'PYKT/004', 'K1 & PYKT/001', 'Ada keluhan Batuk dan terdapat tanda bahaya umum'),
(8, 'PYKT/004', 'GJL/007', 'Tarikan dinding dada ke dalam'),
(9, 'PYKT/004', 'GJL/008', 'Stridor'),
(10, 'PYKT/005', 'K2 & GJL/009', 'Ada keluhan Diare dan Berak cair atau lembek'),
(11, 'PYKT/006', 'P5 & GJL/010 & GJL/011', 'Terkena penyakit diare, mata cekung dan cubitan kulit perut kembali'),
(12, 'PYKT/006', 'GJL/012', 'Gelisah, Rewel/Mudah marah'),
(13, 'PYKT/006', 'GJL/013', 'Haus, minum dengan lahap '),
(14, 'PYKT/007', 'P5 & GJL/010 & GJL/014', 'Terkena diare, Mata cekung dan Cubitan kulit perut sangat lambat'),
(15, 'PYKT/007', 'GJL/015', 'Anak tampak letargis atau tidak sadar '),
(16, 'PYKT/007', 'GJL/016', 'Tidak bisa minum atau malas minum '),
(17, 'PYKT/008', 'PYKT/005 & GJL/017', 'Terkena Diare 14 hari atau lebih '),
(18, 'PYKT/009', 'PYKT/008 & PYKT/006', 'Terkena Diare Persisten dan Diare Dehidrasi Ringan'),
(19, 'PYKT/009', 'PYKT/007', 'Terkena Diare Dehidrasi Berat'),
(20, 'PYKT/010', 'PYKT/005 & GJL/018', 'Terkena Diare dan Ada darah dalam tinja '),
(21, 'PYKT/011', 'K3 & GJL/019', 'Terkena Demam dan Suhu badan melebihi 37.5º C '),
(22, 'PYKT/012', 'PYKT/001 & PYKT/011', 'Terdapat Tanda Bahaya Umum dan Demam '),
(23, 'PYKT/012', 'GJL/020', 'Kaku Kuduk atau anak tidak bisa menunduk hingga dagu mencapai dada'),
(24, 'PYKT/013', 'PYKT/011 & GJL/021 & GJL/022', 'Terkena Demam, Ruam kemerahan di kulit dan batuk pilek atau mata merah '),
(25, 'PYKT/013', 'GJL/025', 'Terdapat Luka di mulut '),
(26, 'PYKT/014', 'PYKT/013 & PYKT/001 & GJL/023', 'Terkena Campak, tanda bahaya umum dan Luka di mulut yang dalam atau luas'),
(27, 'PYKT/014', 'GJL/024', 'Kekeruhan pada kornea mata'),
(28, 'PYKT/015', 'PYKT/013 & GJL/025', 'Terkena Campak dan Terdapat Luka di mulut '),
(29, 'PYKT/015', 'GJL/026', 'Mata bernanah '),
(30, 'PYKT/016', 'PYKT/011 & GJL/027 & GJL/028 & GJL/029', 'Terkea Demam 2 - 7 hari, demam mendadak tinggi secara terus menerus dan Nyeri di ulu hati '),
(31, 'PYKT/016', 'GJL/030', 'Bintik bintik merah'),
(32, 'PYKT/017', 'PYKT/011 & GJL/027 & GJL/028 & GJL/031', 'Terkena Demam 2 - 7 hari, Demam mendadak tinggi secara terus menerus dan Muntah bercampur darah / seperti kopi '),
(33, 'PYKT/017', 'GJL/032', 'Tinja berwarna hitam '),
(34, 'PYKT/017', 'GJL/033', 'Perdarahan dihidung dan gusi '),
(35, 'PYKT/017', 'GJL/034', 'Syok dan gelisah '),
(36, 'PYKT/018', 'PYKT/011 & GJL/035', 'Terkena Demam dan Infeksi '),
(37, 'PYKT/018', 'GJL/036', 'Pilek ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `kode_keluhan` varchar(11) NOT NULL,
  `nama_keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`kode_keluhan`, `nama_keluhan`) VALUES
('K1', 'Batuk'),
('K2', 'Diare'),
('K3', 'Demam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(11) NOT NULL DEFAULT 'P0_',
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama`, `gambar`, `keterangan`, `referensi`, `date_created`) VALUES
('PYKT/001', 'Tanda Bahaya Umum', 'tandabahayaumum.jpg', 'Tanda Bahaya umun yang menjangkit anak usia 5 tahun', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1563961038),
('PYKT/002', 'Batuk', 'batuk.jpg', 'Batuk disebabkan infeksi saluran pernapasan akibat virus, asap rokok, debu, atau zat kimia lain. Selain itu, ada juga batuk yang disebabkan refluks asam lambung, sinusitis, atau bahkan karena anak Anda alergi.', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1563961038),
('PYKT/003', 'Pneumonia', 'pneumonia.jpg', 'Infeksi yang menimbulkan peradangan pada kantung udara di salah satu atau kedua paru-paru, yang dapat berisi cairan.', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1556804958),
('PYKT/004', 'Pneumonia Berat', 'pneumoniaberat.jpg', 'Infeksi yang menimbulkan peradangan pada kantung udara di salah satu atau kedua paru-paru, yang dapat berisi cairan.', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1556804958),
('PYKT/005', 'Diare', 'diare.jpg', 'Diare merupakan sebuah kondisi ketika pengidapnya melakukan buang air besar (BAB) lebih sering dari biasanya. Penyakit ini biasanya berlangsung selama beberapa hari dan dalam kasus tertentu bisa berlangsung hingga berminggu-minggu.\r\n\r\n', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/006', 'Diare Dehidrasi Ringan', 'diare_dehidrasi_ringan.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1556804958),
('PYKT/007', 'Diare Dehidrasi Berat', 'diare_dehidrasi_berat.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/008', 'Diare Persisten', 'diare_persisten.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/009', 'Diare Persisten Berat', 'diare_persisten_berat.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/010', 'Disentri', 'disentri.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/011', 'Demam', 'demam.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/012', 'Demam dengan Tanda Bahaya Umum', 'demam_dengan_tanda_bahaya_umum.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/013', 'Campak', 'campak.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/014', 'Campak dengan Komplikasi Berat', 'campak_dengan_komplikasi_berat.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/015', 'Campak dengan Komplikasi', 'campak_dengan_komplikasi.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/016', 'Demam mungkin DBD', 'demam_mungkin_dbd.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/017', 'DBD', 'dbd.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677),
('PYKT/018', 'Demam bukan DBD', 'demam_bukan_dbd.jpg', '-', 'Bagus Fery Yanto, Indah Werdiningsih, Endah Purwanti  Journal of Information Systems Engineering and Business Intelligence,  2017,  3 (1), 61-67', 1565247677);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(16, 'Uhuy', 'uhuy@gm.com', '$2y$10$OmvX1a4tZVmSpE7gEcOAm.5o7I.s0HQeEcjLXwtrFQoWyNGYJmOO2'),
(19, 'Galih Rexy Hakiki', 'galihrexyhakiki@gmail.com', '$2y$10$HEwLsKh0NBGDqBZFX.7KDOpIbWazQ/oXJNgKOlBZEG8OhS5D82kCG'),
(20, 'tes', 'tes@gmail.com', '$2y$10$.c4hd8pci7IOjXHOQtYF8eoEYl6vcsJ2tqmOg54atGsxl0uHEbr7i'),
(21, '2', '2@gm.com', '$2y$10$sYURGkGVbQPAJTL4LDkaheyHEyl9xYuBFo9PrRrsY5oZ8V1YUirTu'),
(22, '1', '1@gm.com', '$2y$10$JUgsxfOnyL4ZsnV0psytOOQ17C5sTruGsk26y45/DKV3aVOOZ.3qi'),
(23, '3', '3@gm.com', '$2y$10$c1iOFI0X.xh1L5I0BpTrNe/.VbMoxXWzxzM3Ci3zY6fMLektIDyxW'),
(24, '5', '5@gm.com', '$2y$10$u/Br1ybQxiO07xlLoUEmCOoHpCTP3WqnbvhGpOAfqw7aVxQwbWMqG'),
(25, '6', '6@gm.com', '$2y$10$2yIeUqdAFaP/KDSlmVPTdOTRxhqF0r/kGHUC7ily2A1Tq0Iiod7Xu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indeks untuk tabel `diagnosa_detail`
--
ALTER TABLE `diagnosa_detail`
  ADD PRIMARY KEY (`kode_diagnosa_detail`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `gejala_return`
--
ALTER TABLE `gejala_return`
  ADD PRIMARY KEY (`id_gejala_return`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `kode_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `diagnosa_detail`
--
ALTER TABLE `diagnosa_detail`
  MODIFY `kode_diagnosa_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `gejala_return`
--
ALTER TABLE `gejala_return`
  MODIFY `id_gejala_return` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
