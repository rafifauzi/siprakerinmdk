-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Mar 2019 pada 21.08
-- Versi server: 10.1.37-MariaDB-cll-lve
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siph4736_siprakerinmdk_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bimbingan`
--

CREATE TABLE `tb_bimbingan` (
  `no_surat_bimbingan` varchar(25) NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `kode_guru` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bimbingan`
--

INSERT INTO `tb_bimbingan` (`no_surat_bimbingan`, `tgl_bimbingan`, `kode_guru`) VALUES
('001/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G014'),
('002/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G033'),
('003/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G005'),
('004/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G040'),
('005/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G080'),
('006/K/SMK-Mdk/E.11/2018', '2018-10-29', 'G041');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku_jurnal`
--

CREATE TABLE `tb_buku_jurnal` (
  `nomor_jurnal` varchar(30) NOT NULL,
  `status_jurnal` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku_jurnal`
--

INSERT INTO `tb_buku_jurnal` (`nomor_jurnal`, `status_jurnal`) VALUES
('001/171019674/SMK-Mdk/2018', '1'),
('002/171019664/SMK-Mdk/2018', '1'),
('003/171019667/SMK-Mdk/2018', '1'),
('004/171019662/SMK-Mdk/2018', '1'),
('005/171019677/SMK-Mdk/2018', '1'),
('006/171019678/SMK-Mdk/2018', '1'),
('007/171019679/SMK-Mdk/2018', '1'),
('008/171019680/SMK-Mdk/2018', '1'),
('009/171019743/SMK-Mdk/2018', '1'),
('010/171019730/SMK-Mdk/2018', '1'),
('011/171019776/SMK-Mdk/2018', '1'),
('012/171019777/SMK-Mdk/2018', '1'),
('013/171019772/SMK-Mdk/2018', '1'),
('014/171019721/SMK-Mdk/2018', '1'),
('015/171019723/SMK-Mdk/2018', '1'),
('016/171019722/SMK-Mdk/2018', '1'),
('017/171019771/SMK-Mdk/2018', '1'),
('018/171019727/SMK-Mdk/2018', '1'),
('019/171019725/SMK-Mdk/2018', '1'),
('020/171019762/SMK-Mdk/2018', '1'),
('021/171019778/SMK-Mdk/2018', '1'),
('022/171019775/SMK-Mdk/2018', '1'),
('023/171019773/SMK-Mdk/2018', '1'),
('024/171019103/SMK-Mdk/2018', '1'),
('025/171019112/SMK-Mdk/2018', '1'),
('026/171019098/SMK-Mdk/2018', '1'),
('027/171019101/SMK-Mdk/2018', '1'),
('028/171019102/SMK-Mdk/2018', '1'),
('029/171019104/SMK-Mdk/2018', '1'),
('030/171019105/SMK-Mdk/2018', '1'),
('031/171019106/SMK-Mdk/2018', '1'),
('032/171019107/SMK-Mdk/2018', '1'),
('033/171019108/SMK-Mdk/2018', '1'),
('034/171019091/SMK-Mdk/2018', '1'),
('035/171019086/SMK-Mdk/2018', '1'),
('036/171019087/SMK-Mdk/2018', '1'),
('037/171019088/SMK-Mdk/2018', '1'),
('038/171019094/SMK-Mdk/2018', '1'),
('039/171019128/SMK-Mdk/2018', '1'),
('040/171019140/SMK-Mdk/2018', '1'),
('041/171019141/SMK-Mdk/2018', '1'),
('042/171019181/SMK-Mdk/2018', '1'),
('043/171019170/SMK-Mdk/2018', '1'),
('044/171019639/SMK-Mdk/2018', '1'),
('045/171019637/SMK-Mdk/2018', '1'),
('046/171019638/SMK-Mdk/2018', '1'),
('047/171019639/SMK-Mdk/2018', '1'),
('048/171019640/SMK-Mdk/2018', '1'),
('049/171019648/SMK-Mdk/2018', '1'),
('050/171019644/SMK-Mdk/2018', '1'),
('051/171019645/SMK-Mdk/2018', '1'),
('052/171019647/SMK-Mdk/2018', '1'),
('053/171019624/SMK-Mdk/2018', '1'),
('054/171019784/SMK-Mdk/2018', '1'),
('055/171019409/SMK-Mdk/2018', '1'),
('056/171019410/SMK-Mdk/2018', '1'),
('057/171019411/SMK-Mdk/2018', '1'),
('058/171019412/SMK-Mdk/2018', '1'),
('059/171019413/SMK-Mdk/2018', '1'),
('060/171019407/SMK-Mdk/2018', '1'),
('061/171019406/SMK-Mdk/2018', '1'),
('062/171019436/SMK-Mdk/2018', '1'),
('063/171019453/SMK-Mdk/2018', '1'),
('064/171019454/SMK-Mdk/2018', '1'),
('065/171019456/SMK-Mdk/2018', '1'),
('066/171019457/SMK-Mdk/2018', '1'),
('067/171019419/SMK-Mdk/2018', '1'),
('068/171019481/SMK-Mdk/2018', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_bimbingan`
--

CREATE TABLE `tb_detail_bimbingan` (
  `no_surat_bimbingan` varchar(25) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `status_ketuntasan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_bimbingan`
--

INSERT INTO `tb_detail_bimbingan` (`no_surat_bimbingan`, `nis`, `status_ketuntasan`) VALUES
('001/K/SMK-Mdk/E.11/2018', '171019674', 1),
('001/K/SMK-Mdk/E.11/2018', '171019664', 1),
('001/K/SMK-Mdk/E.11/2018', '171019667', 1),
('001/K/SMK-Mdk/E.11/2018', '171019662', 1),
('001/K/SMK-Mdk/E.11/2018', '171019677', 1),
('001/K/SMK-Mdk/E.11/2018', '171019678', 1),
('001/K/SMK-Mdk/E.11/2018', '171019679', 1),
('001/K/SMK-Mdk/E.11/2018', '171019680', 1),
('001/K/SMK-Mdk/E.11/2018', '171019743', 1),
('001/K/SMK-Mdk/E.11/2018', '171019730', 1),
('001/K/SMK-Mdk/E.11/2018', '171019776', 1),
('002/K/SMK-Mdk/E.11/2018', '171019777', 1),
('002/K/SMK-Mdk/E.11/2018', '171019772', 1),
('002/K/SMK-Mdk/E.11/2018', '171019721', 1),
('002/K/SMK-Mdk/E.11/2018', '171019723', 1),
('002/K/SMK-Mdk/E.11/2018', '171019722', 1),
('002/K/SMK-Mdk/E.11/2018', '171019771', 1),
('002/K/SMK-Mdk/E.11/2018', '171019727', 1),
('002/K/SMK-Mdk/E.11/2018', '171019725', 1),
('002/K/SMK-Mdk/E.11/2018', '171019762', 1),
('002/K/SMK-Mdk/E.11/2018', '171019778', 1),
('002/K/SMK-Mdk/E.11/2018', '171019775', 1),
('002/K/SMK-Mdk/E.11/2018', '171019773', 1),
('003/K/SMK-Mdk/E.11/2018', '171019639', 1),
('003/K/SMK-Mdk/E.11/2018', '171019637', 1),
('003/K/SMK-Mdk/E.11/2018', '171019638', 1),
('003/K/SMK-Mdk/E.11/2018', '171019639', 1),
('003/K/SMK-Mdk/E.11/2018', '171019640', 1),
('004/K/SMK-Mdk/E.11/2018', '171019648', 1),
('004/K/SMK-Mdk/E.11/2018', '171019644', 1),
('004/K/SMK-Mdk/E.11/2018', '171019645', 1),
('004/K/SMK-Mdk/E.11/2018', '171019647', 1),
('004/K/SMK-Mdk/E.11/2018', '171019624', 1),
('005/K/SMK-Mdk/E.11/2018', '171019103', 1),
('005/K/SMK-Mdk/E.11/2018', '171019112', 1),
('005/K/SMK-Mdk/E.11/2018', '171019098', 1),
('005/K/SMK-Mdk/E.11/2018', '171019101', 1),
('005/K/SMK-Mdk/E.11/2018', '171019102', 1),
('005/K/SMK-Mdk/E.11/2018', '171019104', 1),
('005/K/SMK-Mdk/E.11/2018', '171019105', 1),
('006/K/SMK-Mdk/E.11/2018', '171019106', 1),
('006/K/SMK-Mdk/E.11/2018', '171019107', 1),
('006/K/SMK-Mdk/E.11/2018', '171019108', 1),
('006/K/SMK-Mdk/E.11/2018', '171019091', 1),
('006/K/SMK-Mdk/E.11/2018', '171019086', 1),
('006/K/SMK-Mdk/E.11/2018', '171019087', 1),
('006/K/SMK-Mdk/E.11/2018', '171019088', 1),
('006/K/SMK-Mdk/E.11/2018', '171019094', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_jurnal`
--

CREATE TABLE `tb_detail_jurnal` (
  `nomor_jurnal` varchar(28) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `uraian_tugas` text NOT NULL,
  `jenis_kegiatan` char(1) NOT NULL,
  `keterangan_kegiatan` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_monitoring`
--

CREATE TABLE `tb_detail_monitoring` (
  `no_surat_monitoring` varchar(25) NOT NULL,
  `no_surat_permohonan` varchar(25) NOT NULL,
  `catatan_monitoring` text NOT NULL,
  `saran_monitoring` text NOT NULL,
  `status_monitoring` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_monitoring`
--

INSERT INTO `tb_detail_monitoring` (`no_surat_monitoring`, `no_surat_permohonan`, `catatan_monitoring`, `saran_monitoring`, `status_monitoring`) VALUES
('001/K/SMK-Mdk/E.11/2018', '002/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('001/K/SMK-Mdk/E.11/2018', '003/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('001/K/SMK-Mdk/E.11/2018', '004/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('002/K/SMK-Mdk/E.11/2018', '005/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('002/K/SMK-Mdk/E.11/2018', '006/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('002/K/SMK-Mdk/E.11/2018', '007/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('003/K/SMK-Mdk/E.11/2018', '008/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'G007', 1),
('003/K/SMK-Mdk/E.11/2018', '009/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('003/K/SMK-Mdk/E.11/2018', '010/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('004/K/SMK-Mdk/E.11/2018', '011/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1),
('004/K/SMK-Mdk/E.11/2018', '012/K/SMK-Mdk/E.11/2018', 'Catatan yang diberikan oleh perusahaan', 'Saran untuk smk merdeka dari perusahaan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_permohonan`
--

CREATE TABLE `tb_detail_permohonan` (
  `no_surat_permohonan` varchar(25) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_disetujui` date NOT NULL,
  `status_permohonan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_permohonan`
--

INSERT INTO `tb_detail_permohonan` (`no_surat_permohonan`, `nis`, `tgl_permohonan`, `tgl_disetujui`, `status_permohonan`) VALUES
('001/K/SMK-Mdk/E.11/2018', '11115742', '2018-08-07', '0000-00-00', '2'),
('001/K/SMK-Mdk/E.11/2018', '11115717', '2018-08-07', '0000-00-00', '1'),
('002/K/SMK-Mdk/E.11/2018', '171019674', '2018-08-08', '0000-00-00', '1'),
('002/K/SMK-Mdk/E.11/2018', '171019664', '2018-08-08', '0000-00-00', '1'),
('002/K/SMK-Mdk/E.11/2018', '171019667', '2018-08-08', '0000-00-00', '1'),
('002/K/SMK-Mdk/E.11/2018', '171019662', '2018-08-08', '0000-00-00', '1'),
('002/K/SMK-Mdk/E.11/2018', '171019677', '2018-08-08', '0000-00-00', '1'),
('003/K/SMK-Mdk/E.11/2018', '171019678', '2018-08-08', '0000-00-00', '1'),
('003/K/SMK-Mdk/E.11/2018', '171019679', '2018-08-08', '0000-00-00', '1'),
('003/K/SMK-Mdk/E.11/2018', '171019680', '2018-08-08', '0000-00-00', '1'),
('003/K/SMK-Mdk/E.11/2018', '171019743', '2018-08-08', '0000-00-00', '1'),
('003/K/SMK-Mdk/E.11/2018', '171019730', '2018-08-08', '0000-00-00', '1'),
('004/K/SMK-Mdk/E.11/2018', '171019776', '2018-08-08', '0000-00-00', '1'),
('004/K/SMK-Mdk/E.11/2018', '171019777', '2018-08-08', '0000-00-00', '1'),
('004/K/SMK-Mdk/E.11/2018', '171019772', '2018-08-08', '0000-00-00', '1'),
('004/K/SMK-Mdk/E.11/2018', '171019721', '2018-08-08', '0000-00-00', '1'),
('004/K/SMK-Mdk/E.11/2018', '171019723', '2018-08-08', '0000-00-00', '1'),
('005/K/SMK-Mdk/E.11/2018', '171019722', '2018-08-08', '0000-00-00', '1'),
('005/K/SMK-Mdk/E.11/2018', '171019771', '2018-08-08', '0000-00-00', '1'),
('005/K/SMK-Mdk/E.11/2018', '171019727', '2018-08-08', '0000-00-00', '1'),
('006/K/SMK-Mdk/E.11/2018', '171019725', '2018-08-08', '0000-00-00', '1'),
('006/K/SMK-Mdk/E.11/2018', '171019762', '2018-08-08', '0000-00-00', '1'),
('006/K/SMK-Mdk/E.11/2018', '171019778', '2018-08-08', '0000-00-00', '1'),
('006/K/SMK-Mdk/E.11/2018', '171019775', '2018-08-08', '0000-00-00', '1'),
('006/K/SMK-Mdk/E.11/2018', '171019773', '2018-08-08', '0000-00-00', '1'),
('007/K/SMK-Mdk/E.11/2018', '171019103', '2018-08-08', '0000-00-00', '1'),
('007/K/SMK-Mdk/E.11/2018', '171019112', '2018-08-08', '0000-00-00', '1'),
('007/K/SMK-Mdk/E.11/2018', '171019098', '2018-08-08', '0000-00-00', '1'),
('007/K/SMK-Mdk/E.11/2018', '171019101', '2018-08-08', '0000-00-00', '1'),
('007/K/SMK-Mdk/E.11/2018', '171019102', '2018-08-08', '0000-00-00', '1'),
('008/K/SMK-Mdk/E.11/2018', '171019104', '2018-08-08', '0000-00-00', '1'),
('008/K/SMK-Mdk/E.11/2018', '171019105', '2018-08-08', '0000-00-00', '1'),
('008/K/SMK-Mdk/E.11/2018', '171019106', '2018-08-08', '0000-00-00', '1'),
('008/K/SMK-Mdk/E.11/2018', '171019107', '2018-08-08', '0000-00-00', '1'),
('008/K/SMK-Mdk/E.11/2018', '171019108', '2018-08-08', '0000-00-00', '1'),
('009/K/SMK-Mdk/E.11/2018', '171019091', '2018-08-08', '0000-00-00', '1'),
('009/K/SMK-Mdk/E.11/2018', '171019086', '2018-08-08', '0000-00-00', '1'),
('009/K/SMK-Mdk/E.11/2018', '171019087', '2018-08-08', '0000-00-00', '1'),
('009/K/SMK-Mdk/E.11/2018', '171019088', '2018-08-08', '0000-00-00', '1'),
('009/K/SMK-Mdk/E.11/2018', '171019094', '2018-08-08', '0000-00-00', '1'),
('010/K/SMK-Mdk/E.11/2018', '171019128', '2018-08-08', '0000-00-00', '1'),
('010/K/SMK-Mdk/E.11/2018', '171019140', '2018-08-08', '0000-00-00', '1'),
('010/K/SMK-Mdk/E.11/2018', '171019141', '2018-08-08', '0000-00-00', '1'),
('010/K/SMK-Mdk/E.11/2018', '171019181', '2018-08-08', '0000-00-00', '1'),
('010/K/SMK-Mdk/E.11/2018', '171019170', '2018-08-08', '0000-00-00', '1'),
('011/K/SMK-Mdk/E.11/2018', '171019639', '2018-08-08', '0000-00-00', '1'),
('011/K/SMK-Mdk/E.11/2018', '171019637', '2018-08-08', '0000-00-00', '1'),
('011/K/SMK-Mdk/E.11/2018', '171019638', '2018-08-08', '0000-00-00', '1'),
('011/K/SMK-Mdk/E.11/2018', '171019639', '2018-08-08', '0000-00-00', '1'),
('011/K/SMK-Mdk/E.11/2018', '171019640', '2018-08-08', '0000-00-00', '1'),
('012/K/SMK-Mdk/E.11/2018', '171019648', '2018-08-08', '0000-00-00', '1'),
('012/K/SMK-Mdk/E.11/2018', '171019644', '2018-08-08', '0000-00-00', '1'),
('012/K/SMK-Mdk/E.11/2018', '171019645', '2018-08-08', '0000-00-00', '1'),
('012/K/SMK-Mdk/E.11/2018', '171019647', '2018-08-08', '0000-00-00', '1'),
('012/K/SMK-Mdk/E.11/2018', '171019624', '2018-08-08', '0000-00-00', '1'),
('013/K/SMK-Mdk/E.11/2018', '171019784', '2018-08-08', '0000-00-00', '1'),
('013/K/SMK-Mdk/E.11/2018', '171019409', '2018-08-08', '0000-00-00', '1'),
('013/K/SMK-Mdk/E.11/2018', '171019410', '2018-08-08', '0000-00-00', '1'),
('013/K/SMK-Mdk/E.11/2018', '171019411', '2018-08-08', '0000-00-00', '1'),
('013/K/SMK-Mdk/E.11/2018', '171019412', '2018-08-08', '0000-00-00', '1'),
('014/K/SMK-Mdk/E.11/2018', '171019413', '2018-08-08', '0000-00-00', '1'),
('014/K/SMK-Mdk/E.11/2018', '171019407', '2018-08-08', '0000-00-00', '1'),
('014/K/SMK-Mdk/E.11/2018', '171019406', '2018-08-08', '0000-00-00', '1'),
('014/K/SMK-Mdk/E.11/2018', '171019436', '2018-08-08', '0000-00-00', '1'),
('014/K/SMK-Mdk/E.11/2018', '171019453', '2018-08-08', '0000-00-00', '1'),
('015/K/SMK-Mdk/E.11/2018', '171019454', '2018-08-08', '0000-00-00', '1'),
('015/K/SMK-Mdk/E.11/2018', '171019456', '2018-08-08', '0000-00-00', '1'),
('015/K/SMK-Mdk/E.11/2018', '171019457', '2018-08-08', '0000-00-00', '1'),
('015/K/SMK-Mdk/E.11/2018', '171019419', '2018-08-08', '0000-00-00', '1'),
('015/K/SMK-Mdk/E.11/2018', '171019481', '2018-08-08', '0000-00-00', '1'),
('016/K/SMK-Mdk/E.11/2018', '171019500', '2018-08-08', '0000-00-00', '0'),
('016/K/SMK-Mdk/E.11/2018', '171019472', '2018-08-08', '0000-00-00', '0'),
('016/K/SMK-Mdk/E.11/2018', '171019495', '2018-08-08', '0000-00-00', '0'),
('016/K/SMK-Mdk/E.11/2018', '171019496', '2018-08-08', '0000-00-00', '0'),
('016/K/SMK-Mdk/E.11/2018', '171019497', '2018-08-08', '0000-00-00', '0'),
('141/K/SMK-Mdk/E.11/2018', '171019367', '2018-08-14', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` varchar(4) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `pangkat_gol` varchar(19) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nip`, `nuptk`, `nama_guru`, `jk`, `pangkat_gol`, `jabatan`, `kode_jurusan`) VALUES
('G001', '195908291986031000', '8161737638200000', 'Drs H. Agus Rusdiana, M.Si', 1, 'Pembina TK.1 - IV/b', 'Kepala Sekolah', ''),
('G002', '197205282006041000', '186075652200022', 'Sudaryono, S.Pd', 1, 'Penata - III/c', 'Guru', ''),
('G003', '195802211980031000', '8553736637200000', 'Dede Suwanto, S.Pd', 1, 'Pembina - IV/a ', 'Guru', ''),
('G004', '195711291986031000', '2161737631200000', 'Drs. Aan Djumhana', 1, 'Pembina - IV/a', 'Wakil Kepala Sekolah', 'ap'),
('G005', '-', '1454755657120000', 'Abdul Manap, S.Pd', 1, '-', 'Guru', 'rpl'),
('G006', '-', '', 'Ade Sutisna, A.Md', 1, '-', 'Guru', 'rpl'),
('G007', '-', '3439759659200000', 'Agus Media, S.Pd', 1, '-', 'Guru', 'tkr'),
('G008', '-', '1044756658300070', 'Al\'Aeni Almardiah, S.Pd, M.Hum', 0, '', 'Guru', 'tsm'),
('G009', '-', '', 'Alan Syahrul M, S.Pd', 1, '', 'Guru', ''),
('G010', '-', '', 'Alit Hermawan, S.Pd.I', 1, '', 'Guru', 'tsm'),
('G011', '-', '6838761662120000', 'Andi Setiawan, ST', 1, '', 'Guru', 'rpl'),
('G012', '-', '', 'Andrian Ramadhan F, S.Kom', 1, '', 'Guru', 'tkr'),
('G013', '-', '', 'Annisa Khoirul R. S.Sos', 0, '', 'Guru', ''),
('G014', '197104292006041000', '3761749649200000', 'Apip Taufik Husaeni, S.Pd', 1, 'Penata-III/c', 'Guru', 'ap'),
('G015', '-', '6743760662200000', 'Ari Anggaria Saputra, S.Pd', 1, '', 'Guru', 'tsm'),
('G016', '-', '7462760663300000', 'Ari Yuningsih, S.Pd, M.MPd', 0, '', 'Guru', ''),
('G017', '-', '', 'Arie Yudhistira, S.Pd', 1, '', 'Guru', ''),
('G018', '-', '', 'Arif Purnama, S.Sn, M.Pd', 1, '', 'Guru', 'rpl'),
('G019', '-', '1837749650200020', 'Atjeng Abdullah, S.Pd.I', 1, '-', 'Guru', 'tkr'),
('G020', '-', '-', 'Aun Fathurrochman, S.Pd', 1, '', 'Guru', 'm'),
('G021', '-', '8646745646200010', 'Ayi Kosasih, S.Pd', 1, '-', 'Guru', 'tsm'),
('G022', '-', '', 'Aziz Saryanto, S.Ag', 1, '', 'Guru', 'tkj'),
('G023', '197701092009121000', '3441755655200000', 'Bachrudin, S.Pd', 1, '-', 'Guru', 'rpl'),
('G024', '-', '3233744645200000', 'Cahla Ismanto, S.Pd.I', 1, '', 'Guru', 'tkj'),
('G025', '197307142008011000', '3054732632200000', 'Cucu Kurniawan, S.Pd', 1, 'Penata-III/b', 'Guru', 'ap'),
('G026', '-', '2360756659120000', 'Dedi Mulyana, S.Pd', 1, '', 'Guru', 'rpl'),
('G027', '-', '', 'Dedi Rukmana, S.Pd', 1, '', 'Guru', 'rpl'),
('G028', '-', '', 'Desi Wijayanti, S.Pd', 0, '', 'Guru', 'ap'),
('G029', '-', '1247762663200010', 'Dewan Firman S, S.Pd', 1, '', 'Guru', 'tkr'),
('G030', '-', '', 'Dian Fitri Diyanto, S.Pd', 1, '', 'Guru', 'l'),
('G031', '-', '8746764665200010', 'Dian Herdiansyah, M.Pd', 1, '', 'Guru', 'tkj'),
('G032', '-', '1973754654300000', 'Dian Indriani, S.Pd', 0, '-', 'Guru', 'tkj'),
('G033', '-', '', 'Dian Prinawati, S.Pd', 0, '', 'Guru', 'ap'),
('G034', '-', '1146726629200020', 'Dodo Sudjana, A.Md', 1, '-', 'Guru', 'tsm'),
('G035', '195701201986031000', '452735636200012', 'Dra. Acep Sukmana', 1, 'Penata-IV/a', 'Guru', 'l'),
('G036', '196301251989032000', '3457741641300010', 'Dra. Ani Andriyani', 0, '-', 'Guru', 'l'),
('G037', '196011011991032000', '', 'Dra. Awang', 0, '', 'Guru', 'ap'),
('G038', '196211181989022000', '-', 'Dra. Farida Dahliana', 0, '-', 'Guru', 'tsm'),
('G039', '-', '6954743645300010', 'Dra. Luli Kamilia, M.Pmat', 0, '', 'Guru', 'tkj'),
('G040', '196610072008012000', '5339744646300050', 'Dra. Priyani', 0, 'Penata-III/b', 'Guru', 'rpl'),
('G041', '-', '7344745648300030', 'Dra. Ririn Wuriani', 0, '-', 'Guru', 'l'),
('G042', '196309111987092000', '', 'Dra. Suyinah Santoso, M.Si', 0, '', 'Guru', ''),
('G043', '196408241998021000', '5156742644200010', 'Drs. Aceng Setiadi', 1, '-', 'Guru', 'tkr'),
('G044', '-', '4534734634200000', 'Drs. Dadang Hidayat', 1, '-', 'Guru', ''),
('G045', '-', '2750730630200000', 'Drs. H. Sukanda', 1, '-', 'Guru', ''),
('G046', '-', '2750730630200000', 'Drs. H. Sukanda', 1, '-', 'Guru', ''),
('G047', '-', '2750730630200000', 'Drs. Koesnendar', 1, '-', 'Guru', 'ap'),
('G048', '-', '', 'Drs. Maman Suryaman', 1, '', 'Guru', 'tkr'),
('G049', '-', '1855716616200000', 'Drs. Rubini Djusar', 1, '-', 'Guru', ''),
('G050', '-', '-', 'Drs. Tateng Sutisna, M.Si', 1, '-', 'Guru', ''),
('G051', '-', '', 'Dwi Retno Sariningsih, S.Pd', 0, '', 'Guru', ''),
('G052', '-', '', 'Eli Solihin, S.Pd', 1, '', 'Guru', ''),
('G053', '-', '2443749650300030', 'Elis Nurhayati, S.Ag', 0, '-', 'Guru', 'tsm'),
('G054', '-', '', 'Emawati, S.Pd', 0, '', 'Guru', 'tsm'),
('G055', '-', '', 'Eron Verbena, S.Kom', 1, '', 'Guru', 'm'),
('G056', '-', '', 'Euis Varidah, S.Sos', 0, '', 'Guru', 'rpl'),
('G057', '-', '', 'Farnas Wiryawan, S.Pd', 1, '', 'Guru', 'm'),
('G058', '-', '', 'Ferri Setiadi K. S.Pd', 1, '', 'Guru', 'tsm'),
('G059', '-', '', 'Fetty Sri Anggraeni, S.Pd', 0, '', 'Guru', 'tkj'),
('G060', '197204302006042000', '2762750650200000', 'Giati, S.Pd', 0, 'Penata-III/c', 'Guru', 'tsm'),
('G061', '196603201989031000', '8652744644200000', 'H. Dedi Rochman, S.ST', 1, '-', 'Guru', 'rpl'),
('G062', '-', '', 'Heri Susanto, S.Pd', 1, '', 'Guru', ''),
('G063', '-', '-', 'Hj. Atin Nurhayati, S.Pd', 0, '', 'Guru', ''),
('G064', '-', '-', 'Ikhsan Nugraha, S.Pd', 1, '', 'Guru', ''),
('G065', '-', '1059724624200000', 'Ir. Bambang Setiono, M.Sc', 1, '-', 'Guru', 'tkr'),
('G066', '-', '', 'Iwan Setiawan, S.ST', 1, '', 'Guru', 'tkr'),
('G067', '-', '4544722624200000', 'Iyus Rusman, BE', 1, '-', 'Guru', 'm'),
('G068', '-', '8633762663300080', 'Kartikawati, S.Kom', 0, '', 'Guru', 'l'),
('G069', '-', '', 'Krisna Andriana, S.Pd', 1, '', 'Guru', 'ap'),
('G070', '-', '', 'Lani Widia Astuti, S.Pd', 0, '', 'Guru', 'l'),
('G071', '-', '1939724624200000', 'Machfud Effendi, A.Md', 1, '-', 'Guru', 'l'),
('G072', '-', '', 'Mayati, S.Kom', 0, '', 'Guru', ''),
('G073', '-', '', 'Mega Kartika, S.Pd, M.MPd', 0, '', 'Guru', 'tsm'),
('G074', '-', '8842758660300080', 'Meysiska Sri, Sip', 0, '', 'Guru', ''),
('G075', '-', '', 'Mochammad Taufik, S.Pd', 1, '', 'Guru', ''),
('G076', '-', '5243758660200020', 'Muhammad Sumarlin, S.Pd', 1, '', 'Guru', ''),
('G077', '-', '', 'Mutiara Oliviana, S.Pd', 0, '', 'Guru', ''),
('G078', '-', '1147724628200000', 'Nana Suhana, A.Md', 1, '-', 'Guru', ''),
('G079', '-', '', 'Nenden Naila Karima, S.Pd', 0, '', 'Guru', 'rpl'),
('G080', '-', '', 'Otong Suryadi, S.Sn', 1, '', 'Guru', 'l'),
('G081', '-', '', 'Pipih Karmila, S.Pd', 0, '', 'Guru', ''),
('G082', '-', '1338749651300070', 'Pipih Sopiah, S.Pd', 0, '-', 'Guru', 'm'),
('G083', '197307142008012000', '1359748661300000', 'Popon Yani Triani, S.Pd', 0, 'Penata-III/c', 'Guru', 'tkj'),
('G084', '196607082008041000', '', 'Purawanto, S.Pd', 1, '', 'Guru', 'l'),
('G085', '-', '', 'R. Aryanti Virna, S.s, M.Hum', 0, '', 'Guru', ''),
('G086', '-', '', 'Redi Rivaldo, S.Pd', 1, '', 'Guru', 'tkj'),
('G087', '-', '539750652300033', 'Rini Sulistiowati, SE', 0, '-', 'Guru', ''),
('G088', '-', '', 'Rizka Dwi Aprilani, S.Pd', 0, '', 'Guru', 'tkr'),
('G089', '-', '', 'Rofi M. Zaky, S.Pd', 1, '', 'Guru', ''),
('G090', '-', '', 'Septhia Sri Hermawati, S.Pd', 0, '', 'Guru', 'rpl'),
('G091', '-', '3463758660300020', 'Sri Maryati, S.Pd', 0, '', 'Guru', ''),
('G092', '-', '', 'Sudrajat, S.Pd', 1, '', 'Guru', ''),
('G093', '-', '-', 'Sulaeman Effendi, S.Pd, M.MPd', 1, '-', 'Guru', ''),
('G094', '-', '2844723626200000', 'Suryana, A.Md', 1, '', 'Guru', ''),
('G095', '-', '', 'Susan Setiawan, ST', 1, '', 'Guru', 'ap'),
('G096', '-', '', 'Sutisna, S.Pd', 1, '', 'Guru', 'rpl'),
('G097', '-', '', 'Tata Basari Saputra, A.Md', 1, '', 'Guru', 'tkj'),
('G098', '-', '', 'Taufik Saepurakhman, S.Pd', 1, '', 'Guru', 'tkr'),
('G099', '-', '', 'Thoha, ST', 1, '', 'Guru', ''),
('G100', '-', '1139762663220010', 'Tina Mariana, S.Pd', 0, '', 'Guru', 'tkr'),
('G101', '-', '1236725625200000', 'Toharichman, A.Md', 1, '-', 'Guru', ''),
('G102', '-', '', 'Windi Purwanti, S.Pd', 0, '', 'Guru', 'ap'),
('G103', '-', '8633762663300080', 'Wiwin Kartika, S.Pd', 0, '', 'Guru', 'tkr'),
('G104', '-', '3552760662300020', 'Wiwit Widyanti, S.Pd', 0, '-', 'Guru', 'm'),
('G105', '19756262008012000', '2958753655300060', 'Yeti Rusmiati, S.Pd, MP.Fis', 0, 'Penata-III/c', 'Guru', 'l'),
('G106', '-', '8460758659300030', 'Yeyet Nurhayati, S.Kom', 0, '', 'Guru', 'tkj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kode_jurusan` varchar(4) NOT NULL,
  `nama_jurusan` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('ap', 'Administrasi Perkantoran'),
('l', 'Teknik Ketenagalistrikan'),
('m', 'Teknik Mesin'),
('rpl', 'Rekayasa Perangkat Lunak'),
('tkj', 'Teknik Komputer dan Jaringan'),
('tkr', 'Teknik Kendaraan Ringan'),
('tsm', 'Teknik Sepeda Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `no_surat_monitoring` varchar(25) NOT NULL,
  `tgl_monitoring` date NOT NULL,
  `kode_guru` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`no_surat_monitoring`, `tgl_monitoring`, `kode_guru`) VALUES
('001/K/SMK-Mdk/E.11/2018', '2018-09-12', 'G005'),
('002/K/SMK-Mdk/E.11/2018', '2018-09-12', 'G006'),
('003/K/SMK-Mdk/E.11/2018', '2018-09-12', 'G007'),
('004/K/SMK-Mdk/E.11/2018', '2018-09-12', 'G021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `no_surat_sidang` varchar(25) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `jml_prakerin` int(2) NOT NULL,
  `nilai_isi_laporan` int(2) NOT NULL,
  `nilai_penggunaan_bhs` int(2) NOT NULL,
  `nilai_kerapihan_laporan` int(2) NOT NULL,
  `nilai_sikap` int(2) NOT NULL,
  `nilai_penguasaan_materi` int(2) NOT NULL,
  `nilai_mengungkapkan_pendapat` int(2) NOT NULL,
  `jumlah_ns` int(2) NOT NULL,
  `nilai_perusahaan` int(2) NOT NULL,
  `nilai_rata_rata` float NOT NULL,
  `nilai_komulatif` char(1) NOT NULL,
  `spesifikasi_pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`no_surat_sidang`, `nis`, `jml_prakerin`, `nilai_isi_laporan`, `nilai_penggunaan_bhs`, `nilai_kerapihan_laporan`, `nilai_sikap`, `nilai_penguasaan_materi`, `nilai_mengungkapkan_pendapat`, `jumlah_ns`, `nilai_perusahaan`, `nilai_rata_rata`, `nilai_komulatif`, `spesifikasi_pekerjaan`) VALUES
('', '11115742', 12, 0, 0, 0, 0, 0, 0, 0, 90, 0, '', ''),
('', '171019106', 12, 0, 0, 0, 0, 0, 0, 0, 90, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019674', 12, 10, 10, 20, 8, 18, 23, 89, 90, 89.5, 'B', 'Membuat Surat Pesanan'),
('001/K/SMK-Mdk/E.11/2018', '171019664', 12, 9, 9, 18, 9, 18, 28, 91, 90, 90.5, 'A', 'Membuat Surat Tugas'),
('001/K/SMK-Mdk/E.11/2018', '171019667', 10, 0, 0, 0, 0, 0, 0, 0, 80, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019662', 12, 0, 0, 0, 0, 0, 0, 0, 85, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019677', 12, 0, 0, 0, 0, 0, 0, 0, 90, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019678', 12, 0, 0, 0, 0, 0, 0, 0, 89, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019679', 12, 0, 0, 0, 0, 0, 0, 0, 90, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019680', 12, 0, 0, 0, 0, 0, 0, 0, 95, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019730', 12, 0, 0, 0, 0, 0, 0, 0, 90, 0, '', ''),
('001/K/SMK-Mdk/E.11/2018', '171019776', 11, 0, 0, 0, 0, 0, 0, 0, 87, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengantaran`
--

CREATE TABLE `tb_pengantaran` (
  `no_surat_pengantar` varchar(25) NOT NULL,
  `tgl_pengantar` date NOT NULL,
  `waktu_pengantar` time(1) NOT NULL,
  `jenis_usaha` text NOT NULL,
  `hasil_kunjungan` text NOT NULL,
  `pesan_perusahaan` text NOT NULL,
  `no_surat_permohonan` varchar(25) NOT NULL,
  `kode_guru` varchar(4) NOT NULL,
  `status_antar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengantaran`
--

INSERT INTO `tb_pengantaran` (`no_surat_pengantar`, `tgl_pengantar`, `waktu_pengantar`, `jenis_usaha`, `hasil_kunjungan`, `pesan_perusahaan`, `no_surat_permohonan`, `kode_guru`, `status_antar`) VALUES
('001/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:33:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '002/K/SMK-Mdk/E.11/2018', 'G005', 1),
('002/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:36:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '003/K/SMK-Mdk/E.11/2018', 'G006', 1),
('003/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:37:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '004/K/SMK-Mdk/E.11/2018', 'G007', 1),
('004/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:37:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '005/K/SMK-Mdk/E.11/2018', 'G008', 1),
('005/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:40:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '006/K/SMK-Mdk/E.11/2018', 'G009', 1),
('006/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:41:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'G0102018', '007/K/SMK-Mdk/E.11/2018', 'G010', 1),
('007/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:46:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '008/K/SMK-Mdk/E.11/2018', 'G011', 1),
('008/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:47:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '009/K/SMK-Mdk/E.11/2018', 'G012', 1),
('009/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:47:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '010/K/SMK-Mdk/E.11/2018', 'G013', 1),
('010/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:48:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '011/K/SMK-Mdk/E.11/2018', 'G014', 1),
('011/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:49:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '012/K/SMK-Mdk/E.11/2018', 'G015', 1),
('012/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:50:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '013/K/SMK-Mdk/E.11/2018', 'G016', 1),
('013/K/SMK-Mdk/E.11/2018', '2018-08-08', '20:51:00.0', 'Jenis Usaha', 'Hasil Kunjungan Pengantaran', 'Pesan Dari Perusahaan', '014/K/SMK-Mdk/E.11/2018', 'G017', 1),
('014/K/SMK-Mdk/E.11/2018', '0000-00-00', '00:00:00.0', '', '', '', '015/K/SMK-Mdk/E.11/2018', 'G018', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `no_surat_permohonan` varchar(25) NOT NULL,
  `tgl_mulai_kp` date NOT NULL,
  `tgl_akhir_kp` date NOT NULL,
  `kode_perusahaan` varchar(4) NOT NULL,
  `surat_balasan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`no_surat_permohonan`, `tgl_mulai_kp`, `tgl_akhir_kp`, `kode_perusahaan`, `surat_balasan`) VALUES
('001/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P007', 'sb-001_K_SMK-Mdk_E.11_2018.pdf'),
('002/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P051', 'sb-002_K_SMK-Mdk_E.11_2018.pdf'),
('003/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P022', 'sb-003_K_SMK-Mdk_E.11_2018.pdf'),
('004/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P053', 'sb-004_K_SMK-Mdk_E.11_2018.pdf'),
('005/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P054', 'sb-005_K_SMK-Mdk_E.11_2018.pdf'),
('006/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P055', 'sb-006_K_SMK-Mdk_E.11_2018.pdf'),
('007/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P015', 'sb-007_K_SMK-Mdk_E.11_2018.pdf'),
('008/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P004', 'sb-008_K_SMK-Mdk_E.11_2018.pdf'),
('009/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P021', 'sb-009_K_SMK-Mdk_E.11_2018.pdf'),
('010/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P007', 'sb-010_K_SMK-Mdk_E.11_2018.pdf'),
('011/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P060', 'sb-011_K_SMK-Mdk_E.11_2018.pdf'),
('012/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P061', 'sb-012_K_SMK-Mdk_E.11_2018.pdf'),
('013/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P062', 'sb-013_K_SMK-Mdk_E.11_2018.pdf'),
('014/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P063', 'sb-014_K_SMK-Mdk_E.11_2018.pdf'),
('015/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P064', 'sb-015_K_SMK-Mdk_E.11_2018.pdf'),
('016/K/SMK-Mdk/E.11/2018', '2018-08-06', '2018-10-27', 'P065', ''),
('141/K/SMK-Mdk/E.11/2018', '2018-08-13', '2018-11-02', 'P066', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `kode_perusahaan` varchar(4) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `p1` int(2) NOT NULL,
  `p2` int(2) NOT NULL,
  `p3` int(2) NOT NULL,
  `p4` int(2) NOT NULL,
  `p5` int(2) NOT NULL,
  `p6` int(2) NOT NULL,
  `status_perusahaan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`kode_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `status_perusahaan`) VALUES
('P001', 'Aston Pasteur Hotel', 'Jl. Dr. Djunjunan No.162', 0, 0, 0, 0, 0, 0, 1),
('P002', 'B A T A N', 'Jl. Taman Sari No. 71', 0, 0, 0, 0, 0, 0, 1),
('P003', 'CV. Pudak Scientific', 'Jl. Mekar Raya Kav. 12', 0, 0, 0, 0, 0, 0, 0),
('P004', 'Hotel Neo', 'Jl. Dipatiukur No. 72-74', 4, 3, 4, 5, 4, 4, 1),
('P005', 'Padma Hotel - Ciumbuleuit', 'Jl. Rancabentang No. 56-58 ', 0, 0, 0, 0, 0, 0, 1),
('P006', 'PT. Bita Enarcon Engineering', 'Jl. Pahlawan No. 74', 0, 0, 0, 0, 0, 0, 0),
('P007', 'PT. DI (Dirgantara Indonesia)', 'Jl. Padjajaran No. 154', 4, 4, 4, 4, 5, 5, 1),
('P008', 'PT. Grand Textile Industry', 'Jl. A. Nasution KM. 7 No. 127', 0, 0, 0, 0, 0, 0, 1),
('P009', 'PT. Nikatsu Elektrik Work', 'Jl. Cimuncang No. 79', 0, 0, 0, 0, 0, 0, 1),
('P010', 'J & C. COOKIS', 'Jl. Bojong koneng Gg. Baru V', 0, 0, 0, 0, 0, 0, 0),
('P011', 'PT. P L N', 'Jl. Banten No. 10 Bandung', 0, 0, 0, 0, 0, 0, 0),
('P012', 'J & C. COOKIS', 'Jl. Bojong koneng Gg. Baru V', 0, 0, 0, 0, 0, 0, 0),
('P013', 'PT. Perimaindo', 'Jl. Rancabolang No. 98', 0, 0, 0, 0, 0, 0, 0),
('P014', 'PT. PINDAD', 'Jl. Trs. Gatot Subroto N0.517', 0, 0, 0, 0, 0, 0, 1),
('P015', 'PT. PLN', 'Jl. PHH. Musthofa No. 45', 5, 4, 4, 5, 4, 4, 1),
('P016', 'PT. PLN', 'Jl. AH. Nasution No. 65', 0, 0, 0, 0, 0, 0, 0),
('P017', 'PT. PLN (CIJAWURA)', 'Jl. Marga cinta no. ', 0, 0, 0, 0, 0, 0, 0),
('P018', 'PT. PLN (UJUNG BERUNG)', 'Jl. Ujung Berung No. 65', 0, 0, 0, 0, 0, 0, 0),
('P019', 'PT. PLN Lembang', 'Jl. Cijeruk', 0, 0, 0, 0, 0, 0, 0),
('P020', 'PT. Tri Putra Netral Sinergi', 'Jl. Nyaman No. 31 Komp. Sinergi Antapani', 0, 0, 0, 0, 0, 0, 0),
('P021', 'PT. Yokogawa Indonesia', 'Jl. Tb. Simatupang Kav. 53A Jakarta', 5, 5, 4, 4, 5, 5, 1),
('P022', 'BBLM ---(awal: CV. Puteraco)', 'Jl. Sangkuriang No. 12', 4, 4, 3, 5, 4, 4, 1),
('P023', 'BBPLK/BLK', 'Jl. Jend. Gatot Subroto No. 170', 0, 0, 0, 0, 0, 0, 0),
('P024', 'BLK (Balai Latihan Kerja)', 'Jl. Jend. Gatot Subroto No. 170', 0, 0, 0, 0, 0, 0, 0),
('P025', 'CV. Boga Spring', 'Jl. Pasir Leutik No. 4', 0, 0, 0, 0, 0, 0, 0),
('P026', 'CV. Central Teknik', 'Jl. Pungkur No. 127', 0, 0, 0, 0, 0, 0, 0),
('P027', 'CV. GAPA', 'Jl. Sanggar kencana 27 No. 14 Kawaluyaan', 0, 0, 0, 0, 0, 0, 0),
('P028', 'CV. Puteraco Enginering', 'Jl. Tugu Kencana No. 2A (lingkar sltn)', 0, 0, 0, 0, 0, 0, 0),
('P029', 'CV. Triple Pock', 'Jl. Soekarno Hatta (Kompleks LIK)', 0, 0, 0, 0, 0, 0, 0),
('P030', 'Dinas Kebakaran', 'Jl. Sukabumi No. 17', 0, 0, 0, 0, 0, 0, 0),
('P031', 'Egiana Agung Teknik', 'Jl. Cikoneng No. 3 Cibiru', 0, 0, 0, 0, 0, 0, 0),
('P032', 'MTR (Mirza Tama Raya)', 'Jl. Padasuka Atas No. 252 Rt.2/Rw.6', 0, 0, 0, 0, 0, 0, 0),
('P033', 'PDAM Tirta Wening', 'Jl. Badak Singa No. 10', 0, 0, 0, 0, 0, 0, 0),
('P034', 'PERUM DAMRI', 'Jl. Kebon Kawung No. 3', 0, 0, 0, 0, 0, 0, 0),
('P035', 'PT. Argonesia Divisi INKABA', 'Jl. Simpang Industri No. 2', 0, 0, 0, 0, 0, 0, 0),
('P036', 'PT. Boga Arta Satria', 'Jl. Industri No. 29 Arjuna - Cicendo', 0, 0, 0, 0, 0, 0, 0),
('P037', 'PT. DI (Dirgantara Indonesia)', 'Jl. Padjajaran No. 154', 0, 0, 0, 0, 0, 0, 0),
('P038', 'PT. Dwitama Mulya Persada', 'Jl. Raya Sapan Gedebage Blok D1-07', 0, 0, 0, 0, 0, 0, 0),
('P039', 'PT. Elektrindo Daya Pakarnusa', 'Jl. Sukarno Hatta KM 13,8 Blok A1', 0, 0, 0, 0, 0, 0, 0),
('P040', 'CV. Las Aluminium', 'Jl. AH. Nasution No. 76 ', 0, 0, 0, 0, 0, 0, 0),
('P041', 'PT. Heksa Prakarsa Teknik', 'Jl. Cimindi Raya AK-4', 0, 0, 0, 0, 0, 0, 0),
('P042', 'PT. KAI - DAOP 2 BDG', 'Jl. Stasiun Selatan No. 25', 0, 0, 0, 0, 0, 0, 0),
('P043', 'PT. Nikatsu Electrik Work', 'Jl. Cimuncang No. 70', 0, 0, 0, 0, 0, 0, 0),
('P044', 'PT. PINDAD', 'Jl. Trs. Gatot Subroto N0.517', 0, 0, 0, 0, 0, 0, 0),
('P045', 'PT. PRAFIR JAYA ABADI', 'Jl. Ciganitri Pertanian No. 90 Bojong Soang', 0, 0, 0, 0, 0, 0, 0),
('P046', 'PT. Prafir Jaya Abadi', 'Jl. Ciganitri Pertanian No. 90', 0, 0, 0, 0, 0, 0, 0),
('P047', 'PT. Sinar Metalindo Utama', 'Jl. Raya Cilember No. 319 Cimahi', 0, 0, 0, 0, 0, 0, 0),
('P048', 'PT. Stallion', 'Jl. Cigondewah No. 49B', 0, 0, 0, 0, 0, 0, 0),
('P049', 'PT. DI (Dirgantara Indonesia) - Jl. Padj', 'Jl. Padjajaran No. 154', 0, 0, 0, 0, 0, 0, 0),
('P050', 'unikom', 'dipatiukur', 0, 0, 0, 0, 0, 0, 0),
('P051', 'Dinas Tanaman Pangan dan Hortikultura Provinsi Jawa Barat', 'Jl. Surapati No.71, Sadang Serang', 5, 4, 4, 5, 4, 5, 0),
('P052', 'BBLM ---(awal: CV. Puteraco) - Jl. Sangkuriang No. 12', 'Jl. Sangkuriang No. 12', 0, 0, 0, 0, 0, 0, 0),
('P053', 'PT SOS Indonesia', 'Jalan buah batu no 252 kav 10,kelurahan Cijagra kecamatan lengkong', 5, 4, 5, 4, 4, 4, 1),
('P054', 'kantor DPRD provinsi jawa barat', 'Jl. Diponegoro, Bandung Wetan, Kota Bandung, Jawa Barat 40115', 4, 5, 4, 5, 4, 5, 1),
('P055', 'Dinas Perhubungan Provinsi Jawa Barat', 'Jalan Sukabumi No.1, Kota Bandung, Jawa Barat 40271', 5, 4, 4, 4, 5, 3, 1),
('P056', 'PT. PLN - Jl. PHH. Musthofa No. 45', 'Jl. PHH. Musthofa No. 45', 0, 0, 0, 0, 0, 0, 0),
('P057', 'Hotel Neo - Jl. Dipatiukur No. 72-74', 'Jl. Dipatiukur No. 72-74', 0, 0, 0, 0, 0, 0, 0),
('P058', 'PT. Yokogawa Indonesia - Jl. Tb. Simatupang Kav. 53A Jakarta', 'Jl. Tb. Simatupang Kav. 53A Jakarta', 0, 0, 0, 0, 0, 0, 0),
('P059', 'PT. DI (Dirgantara Indonesia) - Jl. Padjajaran No. 154', 'Jl. Padjajaran No. 154', 0, 0, 0, 0, 0, 0, 0),
('P060', 'PT.TELEKOMUNIKASI', 'Jln.Lembong No.11', 5, 5, 4, 5, 5, 5, 1),
('P061', 'Graha Merah Putih Telkom', 'Jl.Japati no1.Sadang serang,coblong, bandung', 3, 3, 4, 5, 4, 5, 1),
('P062', 'Delta Computer', 'Kandaga Computer Center, Jl. Jendral Ahmad Yani Blok D No.416, Kebonwaru, Batununggal, Kota Bandung, Jawa Barat 40272', 0, 0, 0, 0, 0, 0, 0),
('P063', 'kampus widyatama', 'Jln.Cikutra No.204A,Sukapada,Cibeunying Kidul,Neglasari,Cibeunying Kaler', 0, 0, 0, 0, 0, 0, 0),
('P064', 'Diskominfo', 'Jalan Taman Sari No 55,Lebak Siliwangi,Coblong,Kota Bandung,Jawabarat 40132', 0, 0, 0, 0, 0, 0, 0),
('P065', 'PT. Wiraky nusa telekomunikasi', 'Jl. Jend sudirman no 465 sudirman bandung', 0, 0, 0, 0, 0, 0, 0),
('P066', 'Bolenk speed makers', 'Jl. Saluyu terusan rancacilil riung bandung', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_settings`
--

CREATE TABLE `tb_settings` (
  `id` varchar(3) NOT NULL,
  `nm_web` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_mulai_kp` date NOT NULL,
  `tgl_akhir_kp` date NOT NULL,
  `tgl_pengantaran` date NOT NULL,
  `waktu_antar` time NOT NULL,
  `tgl_monitoring` date NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `tgl_sidang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_settings`
--

INSERT INTO `tb_settings` (`id`, `nm_web`, `tgl_daftar`, `tgl_mulai_kp`, `tgl_akhir_kp`, `tgl_pengantaran`, `waktu_antar`, `tgl_monitoring`, `tgl_bimbingan`, `tgl_sidang`) VALUES
('s01', 'SMK MERDEKA BANDUNG', '2018-08-06', '2018-08-13', '2018-11-02', '2018-08-13', '07:30:00', '2018-09-12', '2018-10-29', '2018-11-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sidang`
--

CREATE TABLE `tb_sidang` (
  `no_surat_sidang` varchar(25) NOT NULL,
  `kode_guru` varchar(4) NOT NULL,
  `tgl_sidang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sidang`
--

INSERT INTO `tb_sidang` (`no_surat_sidang`, `kode_guru`, `tgl_sidang`) VALUES
('001/K/SMK-Mdk/E.11/2018', 'G005', '2018-11-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `gd` varchar(2) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `cat_kes` text NOT NULL,
  `nm_ortu` varchar(30) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kerja_ortu` varchar(30) NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(16) NOT NULL,
  `kode_jurusan` varchar(4) NOT NULL,
  `nomor_jurnal` varchar(30) NOT NULL,
  `kode_guru` varchar(4) NOT NULL,
  `berkas_absen` varchar(20) NOT NULL,
  `berkas_nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `gd`, `alamat_siswa`, `cat_kes`, `nm_ortu`, `alamat_ortu`, `kerja_ortu`, `no_hp_ortu`, `thn_ajaran`, `no_hp`, `foto`, `kode_jurusan`, `nomor_jurnal`, `kode_guru`, `berkas_absen`, `berkas_nilai`) VALUES
('10514319', 'Rifky Akbar', 'XI-AP.3', 'Bogor', '2000-06-29', 1, 'AB', 'perum kinagara regency, ciganitri blok G No 37', '-', 'Razky', 'Balikpapan', 'Pegawai Swasta', '082217225944', '2018/2019', '089614966897', '11115717.jpg', 'ap', '', 'G007', '', ''),
('11115717', 'Agung Soetedjo', 'XI-TKJ.1', 'Bandung', '2000-05-09', 1, 'O', 'Jln. Cipedes Tengah No. 27 Bandung', '-', 'Soetedjo', 'Jln. Cipedes Tengah No. 27 Bandung', 'Pegawai Swasta', '081223991906', '2018/2019', '082215148544', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('11115742', 'Rafi Fauzi', 'XI-TKJ.1', 'Bandung', '2002-10-14', 1, 'O', 'jl sadang subur 2', '-', 'Ahmad', 'jl sadang subur 2', 'Pegawai Negeri Sipil (PNS)', '085221240555', '2018/2019', '085795851996', '11115717.jpg', 'tkj', '001/11115742/SMK-Mdk/2018', 'G104', '', ''),
('171019079', 'Aditya Nur Hapidz', 'XI-L.1', 'Bandung', '2006-06-16', 1, 'AB', 'Jl. Ligar Agung', 'Maag', 'Maulana', 'Jl. Ligar Agung', 'Wirausaha', '85659027945', '2018/2019', '89662760220', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019080', 'Agus Setiawan', 'XI-L.1', 'Bandung', '2007-06-27', 1, 'O', 'Jl.Genjer', '', 'Iwana', 'Jl.Genjer', 'Pegawai Swasta', '85721493613', '2018/2019', '88218640816', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019081', 'Akbar Febrianto', 'XI-L.1', 'Bandung', '2004-11-24', 1, 'A', 'Jl. Sukaasih ', '', 'Pepen', 'Jl. Sukaasih ', 'Wirausaha', '82115187738', '2018/2019', '8989141172', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019082', 'Almi Yassin Firdaus', 'XI-L.1', 'Bandung', '2007-03-28', 1, 'B', 'Jl. Nagrog ', '', 'Yayan', 'Jl. Nagrog ', 'Pegawai Swasta', '85222222083', '2018/2019', '89671591400', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019083', 'Ardhy Nur Fadhlih', 'XI-L.1', 'Bandung', '2006-05-02', 1, 'AB', 'Jl. Babakan Cikutra', '', 'Didin', 'Jl. Babakan Cikutra', 'Pegawai Negeri Sipil (PNS)', '8,22119E+11', '2018/2019', '89648750767', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019084', 'Arif Purnomo Aji', 'XI-L.1', 'Bandung', '2006-06-04', 1, 'O', 'Jl. Padasuka', '', 'Purnomo', 'Jl. Padasuka', 'Polri / TNI', '81394238202', '2018/2019', '85956426299', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019085', 'Bayu Ramdani', 'XI-L.1', 'Bandung', '2010-07-10', 1, 'A', 'Jl. Awiligar ', '', 'Dani', 'Jl. Awiligar ', 'Wirausaha', '81572415533', '2018/2019', '85861296742', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019086', 'Bilal Sahdan', 'XI-L.1', 'Bandung', '2003-08-31', 1, 'B', 'KPAD Pindad Timur', '', 'Dadang', 'KPAD Pindad Timur', 'Polri / TNI', '82119680898', '2018/2019', '81321778812', '11115717.jpg', 'l', '035/171019086/SMK-Mdk/2018', 'G027', '', ''),
('171019087', 'Cepi Hendardy', 'XI-L.1', 'Cianjur', '2012-12-12', 1, 'AB', 'Sekeloa Tengah', '', 'Suhendar', 'Sekeloa Tengah', 'Pegawai Negeri Sipil (PNS)', '81220001980', '2018/2019', '89634199188', '11115717.jpg', 'l', '036/171019087/SMK-Mdk/2018', 'G027', '', ''),
('171019088', 'Dandi Rustana', 'XI-L.1', 'Bandung', '2004-03-05', 1, 'O', 'Cibeunying Kidul', '', 'Rustandi', 'Cibeunying Kidul', 'Pegawai Negeri Sipil (PNS)', '81931386759', '2018/2019', '81395266674', '11115717.jpg', 'l', '037/171019088/SMK-Mdk/2018', 'G027', '', ''),
('171019089', 'Dendi Pramudita', 'XI-L.1', 'Bandung', '2010-05-26', 1, 'B', 'Kp. Cirateun Peuntas', '', 'Nana', 'Kp. Cirateun Peuntas', 'Wirausaha', '83822222817', '2018/2019', '85318667289', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019090', 'Dhava Anugrah Putra Pamungkas', 'XI-L.1', 'Bandung', '2009-12-14', 1, 'AB', 'Jl. Babakan Sari', '', 'Ali', 'Jl. Babakan Sari', 'Polri / TNI', '85722553048', '2018/2019', '82118905749', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019091', 'Dicky Hendriansyah', 'XI-L.1', 'Bandung', '2008-04-27', 1, 'O', 'Jl. Babakan  Dese', '', 'Dani', 'Jl. Babakan  Dese', 'Pegawai Negeri Sipil (PNS)', '8812251476', '2018/2019', '89639351564', '11115717.jpg', 'l', '034/171019091/SMK-Mdk/2018', 'G027', '', ''),
('171019093', 'Edwin Kurniadi', 'XI-L.1', 'Bandung', '2006-12-17', 1, 'AB', 'Jl. Desa', '', 'Tatang', 'Jl. Desa', 'Pegawai Negeri Sipil (PNS)', '89635505747', '2018/2019', '89698251146', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019094', 'Hadi Fauzi Permana', 'XI-L.1', 'Bandung', '2007-08-22', 1, 'O', 'Jl. Sukarajin', '', 'Wildan', 'Jl. Sukarajin', 'Wirausaha', '89655224595', '2018/2019', '83829159409', '11115717.jpg', 'l', '038/171019094/SMK-Mdk/2018', 'G027', '', ''),
('171019095', 'Hapid Amrullah', 'XI-L.1', 'Bandung', '2008-01-24', 1, 'AB', 'Jl. Jatihandap', '', 'Ari', 'Jl. Jatihandap', 'Polri / TNI', '85220552085', '2018/2019', '87821344141', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019096', 'Havid Rohmansyah', 'XI-L.1', 'Bandung', '2004-04-20', 1, 'O', 'Jl. Cimuncang ', '', 'Dadan', 'Jl. Cimuncang ', 'Pegawai Negeri Sipil (PNS)', '89601988961', '2018/2019', '89656395733', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019097', 'Hisan Kamaludin', 'XI-L.1', 'Bandung', '2008-03-06', 1, 'AB', 'Jl. Sukagalih', '', 'Hamid', 'Jl. Sukagalih', 'Pegawai Negeri Sipil (PNS)', '85318451066', '2018/2019', '89666598741', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019098', 'Muhamad Faris Fathur Rahman', 'XI-L.1', 'Bandung', '2012-08-08', 1, 'O', 'Kp. Pasir Luhur', '', 'Jeje', 'Kp. Pasir Luhur', 'Wirausaha', '89656872159', '2018/2019', '89628140927', '11115717.jpg', 'l', '026/171019098/SMK-Mdk/2018', 'G027', '', ''),
('171019099', 'Muhammad Rizal Makarim', 'XI-L.1', 'Bandung', '2012-01-21', 1, 'AB', 'Jl. Pasir Impun', '', 'Septa', 'Jl. Pasir Impun', 'Polri / TNI', '83822713203', '2018/2019', '89696779259', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019100', 'Muhammad Syamsur Rizal', 'XI-L.1', 'Bandung', '2002-12-29', 1, 'O', 'Kp.Pagersari', '', 'Sukma', 'Kp.Pagersari', 'Pegawai Negeri Sipil (PNS)', '89656200524', '2018/2019', '82127222756', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019101', 'Paulus Handrio Nugroho', 'XI-L.1', 'Jakarta', '2008-04-27', 1, 'AB', 'Jl. Cijambe dalam', '', 'Andi', 'Jl. Cijambe dalam', 'Pegawai Negeri Sipil (PNS)', '2287825244', '2018/2019', '83822418457', '11115717.jpg', 'l', '027/171019101/SMK-Mdk/2018', 'G027', '', ''),
('171019102', 'Rafly Abdul Azis', 'XI-L.1', 'Bandung', '2007-03-26', 1, 'O', 'Jl. Dago Giri', '', 'Beni', 'Jl. Dago Giri', 'Wirausaha', '85795953505', '2018/2019', '83822827549', '11115717.jpg', 'l', '028/171019102/SMK-Mdk/2018', 'G027', '', ''),
('171019103', 'Rama Fadilla Yusup', 'XI-L.1', 'Bandung', '2004-10-28', 1, 'AB', 'Jl. Sukamantri', '', 'Edi', 'Jl. Sukamantri', 'Polri / TNI', '85220077398', '2018/2019', '85755226273', '11115717.jpg', 'l', '024/171019103/SMK-Mdk/2018', 'G027', '', ''),
('171019104', 'Randi Setiawan', 'XI-L.1', 'Bandung', '2012-05-19', 1, 'O', 'Jl. Cikutra', '', 'Ahmad', 'Jl. Cikutra', 'Pegawai Negeri Sipil (PNS)', '8996913930', '2018/2019', '89674161662', '11115717.jpg', 'l', '029/171019104/SMK-Mdk/2018', 'G027', '', ''),
('171019105', 'Rendi Septian', 'XI-L.1', 'Bandung', '2010-01-29', 1, 'AB', 'Jl. Jend . A. Yani', '', 'Apriyanto', 'Jl. Jend . A. Yani', 'Pegawai Negeri Sipil (PNS)', '227216885', '2018/2019', '87824970883', '11115717.jpg', 'l', '030/171019105/SMK-Mdk/2018', 'G027', '', ''),
('171019106', 'Reza Sutiono Muhamad', 'XI-L.1', 'Bandung', '2008-04-21', 1, 'O', 'Jl. Raya Golf', '', 'Juju', 'Jl. Raya Golf', 'Wirausaha', '83821943666', '2018/2019', '89655092420', '11115717.jpg', 'l', '031/171019106/SMK-Mdk/2018', 'G027', 'ab-171019106.pdf', 'ns-171019106.pdf'),
('171019107', 'Rezki Nurmansyah', 'XI-L.1', 'Bandung', '2007-06-26', 1, 'AB', 'Jl. Suka Asih', '', 'Sunandar', 'Jl. Suka Asih', 'Polri / TNI', '8947258870', '2018/2019', '89634486405', '11115717.jpg', 'l', '032/171019107/SMK-Mdk/2018', 'G027', '', ''),
('171019108', 'Ricksan Triscardian', 'XI-L.1', 'Bandung', '2011-08-16', 1, 'O', 'Kp. Sukamulya', '', 'Rachmat', 'Kp. Sukamulya', 'Pegawai Negeri Sipil (PNS)', '2221231134', '2018/2019', '87823837045', '11115717.jpg', 'l', '033/171019108/SMK-Mdk/2018', 'G027', '', ''),
('171019109', 'Rico Saprico Simanjorang', 'XI-L.1', 'Bandung', '2006-03-15', 1, 'AB', 'Jl. H. Yasin', '', 'Andi', 'Jl. H. Yasin', 'Pegawai Negeri Sipil (PNS)', '89698264311', '2018/2019', '89652697679', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019110', 'Ridwan Adzani Pangestu', 'XI-L.1', 'Bandung', '2002-04-29', 1, 'O', 'Jl. Anyer dalam', '', 'Rachman', 'Jl. Anyer dalam', 'Wirausaha', '89651313837', '2018/2019', '89656410227', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019111', 'Rio Handriansyah', 'XI-L.1', 'Bandung', '2006-03-14', 1, 'AB', 'Gg, Bungan XI', '', 'Fauzi', 'Gg, Bungan XI', 'Polri / TNI', '89660457208', '2018/2019', '87722515180', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019112', 'Rizky Maulana Al Fariz', 'XI-L.1', 'Bandung', '2006-07-14', 1, 'O', 'Jl. Pasirkaliki Barat', '', 'Fitrah', 'Jl. Pasirkaliki Barat', 'Pegawai Negeri Sipil (PNS)', '8986458866', '2018/2019', '8966136503', '11115717.jpg', 'l', '025/171019112/SMK-Mdk/2018', 'G027', '', ''),
('171019113', 'Shandry Hermawati', 'XI-L.1', 'Bandung', '2012-01-20', 1, 'AB', 'Kp. Cisitu', '', 'Pandi', 'Kp. Cisitu', 'Pegawai Negeri Sipil (PNS)', '89656204736', '2018/2019', '8987155615', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019114', 'Wahyu Winarso', 'XI-L.1', 'Bandung', '2006-07-11', 1, 'O', 'Jl. Sukajadi', '', 'Cahya', 'Jl. Sukajadi', 'Wirausaha', '85794242582', '2018/2019', '85724648717', '11115717.jpg', 'l', '', 'G027', '', ''),
('171019115', 'Ade Rustandi', 'XI-M.1', 'Bandung', '2006-03-23', 1, 'O', 'Gg. Sukamulya', '', 'Permana', 'Gg. Sukamulya', 'Pegawai Negeri Sipil (PNS)', '81395266674', '2018/2019', '85795851996', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019116', 'Agung Gunawan', 'XI-M.1', 'Bandung', '2003-09-03', 1, 'O', 'Jl. Kejaksaan', '', 'Hardiansyah', 'Jl. Kejaksaan', 'Polri / TNI', '85863932247', '2018/2019', '81394351719', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019117', 'Aji Julaimi', 'XI-M.1', 'Cimahi', '2005-10-18', 1, 'A', 'Jl. Genjer', '', 'Sudrajat', 'Jl. Genjer', 'Pegawai Negeri Sipil (PNS)', '87822114314', '2018/2019', '81322288665', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019118', 'Alfian Fadila Putra', 'XI-M.1', 'Bandung', '2012-12-16', 1, 'AB', 'Jl. Kebon Jayanti', '', 'Rizky', 'Jl. Kebon Jayanti', 'Pegawai Swasta', '85722759989', '2018/2019', '82117222051', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019119', 'Ari Rizwan Fahri', 'XI-M.1', 'Bandung', '2004-01-16', 1, 'O', 'Jl. A. H. Nasution', '', 'Nasrul', 'Jl. A. H. Nasution', 'Pegawai Swasta', '81320433016', '2018/2019', '82317182195', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019120', 'Arif Maulana Nurahman', 'XI-M.1', 'Bandung', '2013-05-29', 1, 'B', 'Jl. Cigiringsing', '', 'Koswara', 'Jl. Cigiringsing', 'Pegawai Negeri Sipil (PNS)', '85242720712', '2018/2019', '85221240555', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019121', 'Bayu Salwa', 'XI-M.1', 'Bandung', '2004-08-20', 1, 'B', 'Gg. Jondol', '', 'Juanda', 'Gg. Jondol', 'Wirausaha', '82117868591', '2018/2019', '85316819747', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019122', 'Cepy Muhammad Syarifulloh', 'XI-M.1', 'Garut', '2002-01-05', 1, 'AB', 'Bojong Koneng', '', 'Agustian', 'Bojong Koneng', 'Pegawai Negeri Sipil (PNS)', '81222987005', '2018/2019', '82395971447', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019123', 'Deden Gunawan', 'XI-M.1', 'Cianjur', '2010-09-13', 1, 'O', 'Jl. Sukanegla', '', 'Suryaman', 'Jl. Sukanegla', 'Polri / TNI', '8,95334E+11', '2018/2019', '85891880588', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019124', 'Deri Aditia', 'XI-M.1', 'Bandung', '2011-01-16', 1, 'A', 'Jl. Ligar Melati', 'Maag', 'Samsuri', 'Jl. Ligar Melati', 'Pegawai Negeri Sipil (PNS)', '85795724808', '2018/2019', '85720422686', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019125', 'Dyva Dwilangga', 'XI-M.1', 'Bandung', '2004-09-26', 1, 'B', 'Jl. Dago Pojok', '', 'Angga', 'Jl. Dago Pojok', 'Pegawai Swasta', '89651392657', '2018/2019', '89861106856', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019126', 'Fadil Muhammad', 'XI-M.1', 'Bandung', '2013-07-08', 1, 'O', 'Jl. Gagak Dalam', '', 'Memed', 'Jl. Gagak Dalam', 'Pegawai Swasta', '89631312327', '2018/2019', '8997884023', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019127', 'Fahreza Agisna Rahman', 'XI-M.1', 'Bandung', '2008-04-23', 1, 'AB', 'Jl. Babakan Sentral', '', 'Rahman', 'Jl. Babakan Sentral', 'Pegawai Negeri Sipil (PNS)', '89601561671', '2018/2019', '85720437909', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019128', 'Faisal Adi Pratama', 'XI-M.1', 'Bandung', '2002-06-02', 1, 'A', 'Kp. Nyalindung Dago atas', '', 'Adi', 'Kp. Nyalindung Dago atas', 'Wirausaha', '83816260941', '2018/2019', '87822155991', '11115717.jpg', 'm', '039/171019128/SMK-Mdk/2018', 'G021', '', ''),
('171019129', 'Fajar Hermawan', 'XI-M.1', 'Bandung', '2013-05-30', 1, 'B', 'Jl. Sukamanah', '', 'Awan', 'Jl. Sukamanah', 'Pegawai Negeri Sipil (PNS)', '8973875004', '2018/2019', '89681222207', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019130', 'Fathulloh Bani Khoir', 'XI-M.1', 'Bandung', '2008-07-03', 1, 'B', 'Jl. Baranang Siang', '', 'Khoirul', 'Jl. Baranang Siang', 'Polri / TNI', '85294030716', '2018/2019', '8983145842', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019131', 'Febrian Herdiansyah', 'XI-M.1', 'Bandung', '2010-10-24', 1, 'B', 'Jl. Cimuncang', '', 'Edi', 'Jl. Cimuncang', 'Pegawai Negeri Sipil (PNS)', '8973232318', '2018/2019', '89622431246', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019132', 'Fulqi Ramdani', 'XI-M.1', 'Bandung', '2012-09-10', 1, 'AB', 'Jl. Bojong Indah', '', 'Dani', 'Jl. Bojong Indah', 'Pegawai Swasta', '87722210096', '2018/2019', '81321621140', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019133', 'Iqbal Agustani', 'XI-M.1', 'Bandung', '2008-02-23', 1, 'O', 'Ter. Sukapura ', '', 'Tatan', 'Ter. Sukapura ', 'Pegawai Swasta', '88809501702', '2018/2019', '89690241769', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019134', 'Irpan Jaelani', 'XI-M.1', 'Sumedang', '2009-12-19', 1, 'A', 'Jl. Salak', '', 'Jejen', 'Jl. Salak', 'Pegawai Negeri Sipil (PNS)', '83829207612', '2018/2019', '85798205088', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019135', 'Maulid Khair', 'XI-M.1', 'Bandung', '2002-05-07', 1, 'AB', 'Jl. Kerawang', '', 'Didi', 'Jl. Kerawang', 'Pegawai Swasta', '83820606296', '2018/2019', '82215148544', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019136', 'Moch. Gilang Tri April Liyanto', 'XI-M.1', 'Bandung', '2005-10-09', 1, 'A', 'Jl. Jatihandap Timur', '', 'Yanto', 'Jl. Jatihandap Timur', 'Pegawai Swasta', '81802296640', '2018/2019', '8882034197', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019137', 'Muhamad Fadhlan Risvian', 'XI-M.1', 'Bandung', '2005-04-20', 1, 'B', 'Jl. Cimuncang', '', 'Dadan', 'Jl. Cimuncang', 'Pegawai Swasta', '89625201851', '2018/2019', '83822892301', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019138', 'Muhamad Rizki Andika', 'XI-M.1', 'Bandung', '2007-09-20', 1, 'O', 'Jl. Dago Golf', '', 'Andika', 'Jl. Dago Golf', 'Pegawai Swasta', '83822362996', '2018/2019', '81313404122', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019139', 'Muhammad Hafizh Putra', 'XI-M.1', 'Bandung', '2003-06-23', 1, 'A', 'Jl. Mekarsari', '', 'Purnama', 'Jl. Mekarsari', 'Wirausaha', '89654705960', '2018/2019', '87722691362', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019140', 'Muhammad Mirza', 'XI-M.1', 'Bandung', '2009-12-08', 1, 'B', 'Jl. Atletik', '', 'Jaki', 'Jl. Atletik', 'Polri / TNI', '8985188390', '2018/2019', '85721158694', '11115717.jpg', 'm', '040/171019140/SMK-Mdk/2018', 'G021', '', ''),
('171019141', 'Nanda Gunawan', 'XI-M.1', 'Garut', '2010-03-20', 1, 'B', 'Kp. Balong Saladah', '', 'Gugun', 'Kp. Balong Saladah', 'Wirausaha', '8970381305', '2018/2019', '83822629962', '11115717.jpg', 'm', '041/171019141/SMK-Mdk/2018', 'G021', '', ''),
('171019142', 'Reyhan Prasetya', 'XI-M.1', 'Jakarta', '2012-03-09', 1, 'B', 'Jl. Jatihandap Timur', '', 'Tio', 'Jl. Jatihandap Timur', 'Pegawai Swasta', '8886021236', '2018/2019', '8888228640', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019143', 'Rian Sopian', 'XI-M.1', 'Bandung', '2003-07-06', 1, 'AB', 'Jl. Baranang Siang', '', 'Sudrajat', 'Jl. Baranang Siang', 'Pegawai Swasta', '88218641334', '2018/2019', '89686358619', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019144', 'Ridwan Arditama', 'XI-M.1', 'Bandung', '2007-01-17', 1, 'O', 'Jl. Ter. PSM ', '', 'Ardian', 'Jl. Ter. PSM ', 'Pegawai Swasta', '222508554', '2018/2019', '85222202300', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019145', 'Ridwan Firmansyah', 'XI-M.1', 'Bandung', '2011-06-21', 1, 'A', 'Jl. Jatihandap Timur', '', 'Firman', 'Jl. Jatihandap Timur', 'Pegawai Swasta', '89626754707', '2018/2019', '87722073129', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019146', 'Rifaldi Muhammad Wahyu', 'XI-M.1', 'Bekasi', '2011-06-22', 1, 'AB', 'Jl. Herbras VII', '', 'Wahyu', 'Jl. Herbras VII', 'Pegawai Swasta', '83827055309', '2018/2019', '89683208656', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019147', 'Rio Andira', 'XI-M.1', 'Bandung', '2006-10-18', 1, 'A', 'Jl. Baladewa Utara', '', 'Andri', 'Jl. Baladewa Utara', 'Wirausaha', '89621720335', '2018/2019', '8965948350', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019148', 'Rizal Muhammad Akhtar', 'XI-M.1', 'Bandung', '2011-10-05', 1, 'B', 'Jl. Pasirhonje', '', 'Akbar', 'Jl. Pasirhonje', 'Pegawai Negeri Sipil (PNS)', '89618859721', '2018/2019', '89634819196', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019149', 'Sopyan Gilang Bagja', 'XI-M.1', 'Bandung', '2007-01-29', 1, 'B', 'Jl. Cikutra ', '', 'Subagja', 'Jl. Cikutra ', 'Pegawai Negeri Sipil (PNS)', '89672130449', '2018/2019', '83829396053', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019150', 'Yosep Ega Nugraha', 'XI-M.1', 'Bandung', '2012-02-26', 1, 'B', 'Kp. Awiligar', '', 'Nugroho', 'Kp. Awiligar', 'Pegawai Negeri Sipil (PNS)', '89656538584', '2018/2019', '87823767029', '11115717.jpg', 'm', '', 'G021', '', ''),
('171019151', 'Achmad Fikri Sofyansyah', 'XI-M.2', 'Bandung', '2004-10-17', 1, 'O', 'Kp. Sukanulus', '', 'Aan', 'Kp. Sukanulus', 'Pegawai Negeri Sipil (PNS)', '81321354432', '2018/2019', '85795851996', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019152', 'Adi Agustia Prayogi', 'XI-M.2', 'Bandung', '2006-03-05', 1, 'O', 'Pawenang I', '', 'Anto', 'Pawenang I', 'Pegawai Negeri Sipil (PNS)', '81573394257', '2018/2019', '81394351719', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019153', 'Agung Kurnia', 'XI-M.2', 'Bandung', '2010-03-30', 1, 'B', 'Jl. Sukapura', '', 'Nugraha', 'Jl. Sukapura', 'Polri / TNI', '85795851996', '2018/2019', '87822114314', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019154', 'Alfatihah Amin', 'XI-M.2', 'Bandung', '2006-04-28', 1, 'AB', 'Gg. Mesjid III', '', 'Didit', 'Gg. Mesjid III', 'Pegawai Negeri Sipil (PNS)', '85720465823', '2018/2019', '81322288665', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019155', 'Amir Hamzah', 'XI-M.2', 'Bandung', '2013-11-20', 1, 'O', 'Jl. Cigadung Kaler II', '', 'Adi', 'Jl. Cigadung Kaler II', 'Pegawai Negeri Sipil (PNS)', '85720465823', '2018/2019', '85722759989', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019156', 'Amy Muhamad Dzakwan', 'XI-M.2', 'Bandung', '2002-08-24', 1, 'A', 'Jl. Padasuka', '', 'Zulkifli', 'Jl. Padasuka', 'Wirausaha', '85624900020', '2018/2019', '82219064927', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019157', 'Andra Kurniawan', 'XI-M.2', 'Bandung', '2012-08-30', 1, 'A', 'Jl. Cihampelas', '', 'Bagja', 'Jl. Cihampelas', 'Pegawai swasta', '85891880588', '2018/2019', '81320433016', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019158', 'Andrian', 'XI-M.2', 'Bandung', '2004-11-24', 1, 'A', 'Kp. Wareng', '', 'Rian', 'Kp. Wareng', 'Pegawai swasta', '81222974896', '2018/2019', '85242720712', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019159', 'Cucu Cahyana', 'XI-M.2', 'Cirebon', '2007-05-27', 1, 'O', 'Jl. Padasuka', '', 'Lesmana', 'Jl. Padasuka', 'Pegawai Negeri Sipil (PNS)', '82127896785', '2018/2019', '82117868591', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019160', 'Daniel Ilham Robbani Djohari', 'XI-M.2', 'Bandung', '2011-03-03', 1, 'A', 'Jl. Gudang Selatan', '', 'Eka', 'Jl. Gudang Selatan', 'Polri / TNI', '82317182195', '2018/2019', '81222987005', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019161', 'Daris Pratama', 'XI-M.2', 'Bekasi', '2002-07-19', 1, 'A', 'Jl. Sukamantri', '', 'Cahyana', 'Jl. Sukamantri', 'Pegawai swasta', '85794470786', '2018/2019', '8969213465', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019162', 'Deni Andreana', 'XI-M.2', 'Bandung', '2013-06-10', 1, 'A', 'Jl. Ters. Pasirlayung', '', 'Kusnandar', 'Jl. Ters. Pasirlayung', 'Pegawai swasta', '83821447619', '2018/2019', '8562294359', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019163', 'Derizha Maulana Rachman', 'XI-M.2', 'Bandung', '2009-09-06', 1, 'O', 'Jl. Sukamantri', '', 'Rachman', 'Jl. Sukamantri', 'Polri / TNI', '89632153051', '2018/2019', '89656203955', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019164', 'Dwi Nugroho', 'XI-M.2', 'Cilacap', '2013-08-18', 1, 'B', 'Jl. Terusan Gama', '', 'Purnomo', 'Jl. Terusan Gama', 'Pegawai swasta', '83827164244', '2018/2019', '83821223733', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019165', 'Fadly Aditya Suma', 'XI-M.2', 'Bandung', '2002-05-19', 1, 'A', 'Jl. Kiputih', '', 'Dedi', 'Jl. Kiputih', 'Pegawai swasta', '8986056646', '2018/2019', '85862014255', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019166', 'Fahrizal Sidiq', 'XI-M.2', 'Bandung', '2002-08-01', 1, 'AB', 'Jl. Cigadung', '', 'Sidin', 'Jl. Cigadung', 'Pegawai swasta', '8812014814', '2018/2019', '83822970010', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019167', 'Guntur Hermawan', 'XI-M.2', 'Bandung', '2007-06-11', 1, 'A', 'Ds. Mekarwangi ', '', 'Hermawan', 'Ds. Mekarwangi ', 'Pegawai swasta', '222517475', '2018/2019', '89683382027', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019168', 'Mochamad Alvi Arief Sopandi', 'XI-M.2', 'Bandung', '2010-08-30', 1, 'B', 'Jl. Sindang Sari', '', 'Sopandi', 'Jl. Sindang Sari', 'Pegawai swasta', '85721255202', '2018/2019', '89636338836', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019169', 'Muhamad Akbar', 'XI-M.2', 'Bandung', '2006-09-27', 1, 'O', 'Jl. Sekeloa Selatan', '', 'Asep', 'Jl. Sekeloa Selatan', 'Pegawai swasta', '85722254419', '2018/2019', '89671628646', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019170', 'Muhamad Rizky Ramdani', 'XI-M.2', 'Bandung', '2003-02-21', 1, 'B', 'Jl. Sidomukti', '', 'Saepudin', 'Jl. Sidomukti', 'Pegawai swasta', '83878406390', '2018/2019', '8987863818', '11115717.jpg', 'm', '043/171019170/SMK-Mdk/2018', 'G025', '', ''),
('171019171', 'Muhammad Fadli Kamil Hidayat', 'XI-M.2', 'Bandung', '2003-09-05', 1, 'O', 'Jl. PSM Kiaracondong', '', 'Hidayatullah', 'Jl. PSM Kiaracondong', 'Pegawai Negeri Sipil (PNS)', '89648736748', '2018/2019', '85794728755', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019172', 'Prayoga Indra Permana', 'XI-M.2', 'Bandung', '2008-09-24', 1, 'AB', 'Jl. Ujung berung', '', 'Permadi', 'Jl. Ujung berung', 'Pegawai Negeri Sipil (PNS)', '85721224225', '2018/2019', '89656003771', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019173', 'Reiky Pratama', 'XI-M.2', 'Bandung', '2012-06-03', 1, 'B', 'Kp. Cirateu peuntas', '', 'Ahmad', 'Kp. Cirateu peuntas', 'Pegawai Negeri Sipil (PNS)', '89666546212', '2018/2019', '2292950995', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019174', 'Reno Lispatiana', 'XI-M.2', 'Bandung', '2004-05-17', 1, 'B', 'Jl. Dago Cikahuripan', '', 'Yana', 'Jl. Dago Cikahuripan', 'Pegawai Negeri Sipil (PNS)', '87722177438', '2018/2019', '3821554786', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019175', 'Ridwan Saepuloh Komara', 'XI-M.2', 'Cicalengka', '2002-04-25', 1, 'B', 'Jl. Pelesiran', '', 'Komarudin', 'Jl. Pelesiran', 'Pegawai Negeri Sipil (PNS)', '222533286', '2018/2019', '88181198300', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019176', 'Riyan Trihamdani', 'XI-M.2', 'Bandung', '2012-08-14', 1, 'O', 'Jl. Kebon gedang', '', 'Ramdan', 'Jl. Kebon gedang', 'Wirausaha', '85860497514', '2018/2019', '83822761377', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019177', 'Rizky', 'XI-M.2', 'Bandung', '2002-03-26', 1, 'O', 'Jl. Bojong Koneng', '', 'Iyang', 'Jl. Bojong Koneng', 'Wirausaha', '89602640343', '2018/2019', '85722885896', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019178', 'Sayyid Hadiyan', 'XI-M.2', 'Bandung', '2005-10-02', 1, 'O', 'Jl. Karang Tinggal', '', 'Hadiyatullah', 'Jl. Karang Tinggal', 'Wirausaha', '89625775570', '2018/2019', '22712343', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019179', 'Seppyan Irawan', 'XI-M.2', 'Bogor', '2002-10-24', 1, 'O', 'Jl. Ir. H. Djuanda', '', 'Irwan', 'Jl. Ir. H. Djuanda', 'Wirausaha', '8987177714', '2018/2019', '82115600390', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019180', 'Shabi Akbar Ibrahim', 'XI-M.2', 'Bandung', '2007-04-28', 1, 'AB', 'Jl. Sukabumi dalam', '', 'Ibrahim', 'Jl. Sukabumi dalam', 'Wirausaha', '88801625904', '2018/2019', '8984527165', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019181', 'Sukma Sanjaya', 'XI-M.2', 'Cianjur', '2006-11-20', 1, 'B', 'Jl. Babakan Sari ', '', 'Wijaya', 'Jl. Babakan Sari ', 'Pegawai swasta', '87821717604', '2018/2019', '85624009456', '11115717.jpg', 'm', '042/171019181/SMK-Mdk/2018', 'G025', '', ''),
('171019183', 'Wisnu Wardana', 'XI-M.2', 'Bandung', '2005-12-17', 1, 'A', 'Jl. Ters. Jakarta hantap', '', 'Wardan', 'Jl. Ters. Jakarta hantap', 'Pegawai swasta', '83822449629', '2018/2019', '8987523458', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019184', 'Yanwar Sarif  Hidayah', 'XI-M.2', 'Bandung', '2013-08-11', 1, 'AB', 'Komp. GBI Blok-I', '', 'Syarifudin', 'Komp. GBI Blok-I', 'Pegawai swasta', '83820052577', '2018/2019', '85320415122', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019186', 'Yogi Pratama Yuda', 'XI-M.2', 'Bandung', '2011-07-01', 1, 'A', 'Jl. Jatihandap Timur', '', 'Yudana', 'Jl. Jatihandap Timur', 'Polri / TNI', '87822269601', '2018/2019', '51324597349', '11115717.jpg', 'm', '', 'G025', '', ''),
('171019187', 'Aghi Sapta Pangersa', 'XI-M.3', 'Bandung', '2013-04-04', 1, 'AB', 'Jl. Asep Berlian', '', 'Ferry', 'Jl. Asep Berlian', 'Wirausaha', '8562294359', '2018/2019', '81573394257', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019188', 'Ahmad Saeful Anwar', 'XI-M.3', 'Bandung', '2008-04-21', 1, 'AB', 'Jl. Mars Digarhayu Tengah', '', 'Giri', 'Jl. Mars Digarhayu Tengah', 'Wirausaha', '85795724808', '2018/2019', '85795851996', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019189', 'Albi Ramada Putra', 'XI-M.3', 'Bandung', '2010-06-05', 1, 'O', 'Jl. Cimuncang', '', 'Iman', 'Jl. Cimuncang', 'Pegawai Swasta', '82117222051', '2018/2019', '85720465823', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019190', 'Ali Shadikin', 'XI-M.3', 'Sumedang', '2010-01-08', 1, 'B', 'Jl. Sangkuriang Dalam', '', 'Surya', 'Jl. Sangkuriang Dalam', 'Pegawai Negeri Sipil (PNS)', '82317182195', '2018/2019', '85720465823', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019191', 'Andika Nugraha', 'XI-M.3', 'Bandung', '2003-10-10', 1, 'O', 'Jl. Cikutra Barat', '', 'Fajar', 'Jl. Cikutra Barat', 'Pegawai Negeri Sipil (PNS)', '85221240555', '2018/2019', '85624900020', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019192', 'Andri Muhamad Rizki', 'XI-M.3', 'Garut', '2010-09-09', 1, 'O', 'Jl. Tubagus Ismail', '', 'Giar', 'Jl. Tubagus Ismail', 'Pegawai Swasta', '85316819747', '2018/2019', '85891880588', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019193', 'Arif Rifaldo', 'XI-M.3', 'Garut', '2010-12-10', 1, 'O', 'Jl. Terusan Cimuncang', '', 'Ilham', 'Jl. Terusan Cimuncang', 'Pegawai Negeri Sipil (PNS)', '82395971447', '2018/2019', '81222974896', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019194', 'Azis Rizky Senopianto', 'XI-M.3', 'Bandung', '2011-11-17', 1, 'B', 'Jl. Lemah Hegar', '', 'Nurhadi', 'Jl. Lemah Hegar', 'Wirausaha', '85891880588', '2018/2019', '82127896785', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019196', 'Elgan Giantamar', 'XI-M.3', 'Bandung', '2006-09-30', 1, 'A', 'KPAD Pindad Utara', '', 'Riyan', 'KPAD Pindad Utara', 'Polri / TNI', '85720422686', '2018/2019', '82317182195', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019197', 'Erik Soniawan', 'XI-M.3', 'Tanggerang', '2004-03-25', 1, 'O', 'Jl. Kebon Bibit Barat 1', '', 'Putra', 'Jl. Kebon Bibit Barat 1', 'Wirausaha', '81321354432', '2018/2019', '85860447514', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019198', 'Fahrul Rizki', 'XI-M.3', 'Bandung', '2012-07-22', 1, 'O', 'Jl. Bukit  Maribaya', '', 'Ridwan', 'Jl. Bukit  Maribaya', 'Pegawai swasta', '82216127419', '2018/2019', '89637386266', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019199', 'Fajar Maulana', 'XI-M.3', 'Bandung', '2012-03-08', 1, 'AB', 'Jl. Palasari ', '', 'Mamat', 'Jl. Palasari ', 'Pegawai swasta', '85295199317', '2018/2019', '85722334514', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019200', 'Fauzi Akbar Wibowo', 'XI-M.3', 'Bandung', '2007-12-31', 1, 'B', 'Bangbangyan Cihaur', '', 'Wibowo', 'Bangbangyan Cihaur', 'Pegawai swasta', '83822133147', '2018/2019', '85623002401', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019201', 'Hagi Naufal Triandy', 'XI-M.3', 'Bandung', '2010-07-11', 1, 'A', 'Jl. Cidurian ', '', 'Trio', 'Jl. Cidurian ', 'Pegawai swasta', '89631158441', '2018/2019', '83821599884', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019202', 'Ilham Herly Oktadeva', 'XI-M.3', 'Semarang', '2002-12-12', 1, 'O', 'Jl. Cikutra Barat', '', 'Surya', 'Jl. Cikutra Barat', 'Pegawai Negeri Sipil (PNS)', '89670247915', '2018/2019', '89638529661', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019203', 'Irfan Setiawan', 'XI-M.3', 'Bandung', '2010-10-27', 1, 'A', 'Jl. Jend. A. Yani', '', 'Imam', 'Jl. Jend. A. Yani', 'Pegawai Negeri Sipil (PNS)', '89631376782', '2018/2019', '83822415609', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019204', 'Kemal Reynaldi', 'XI-M.3', 'Bandung', '2011-02-07', 1, 'A', 'Jl. Leumah Neundeut', '', 'Setiawan', 'Jl. Leumah Neundeut', 'Wirausaha', '8327769000', '2018/2019', '89620946439', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019205', 'Luqmanul Hakim', 'XI-M.3', 'Bandung', '2002-05-08', 1, 'O', 'Kp. Mekarsari ', '', 'Haris', 'Kp. Mekarsari ', 'Polri / TNI', '8961789712', '2018/2019', '85795467950', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019206', 'Maulana Catur Wardaya', 'XI-M.3', 'Bogor', '2011-02-03', 1, 'B', 'Puri Cipageran Indah', '', 'Wardhani', 'Puri Cipageran Indah', 'Wirausaha', '87824407022', '2018/2019', '8996899350', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019207', 'Mochamad Farhan Maulana', 'XI-M.3', 'Bandung', '2011-05-22', 1, 'B', 'Jl. Sadang Serang', '', 'Maulana', 'Jl. Sadang Serang', 'Pegawai Swasta', '89663322071', '2018/2019', '87722174240', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019208', 'Mochammad Fajar Ramadhani', 'XI-M.3', 'Bandung', '2005-01-23', 1, 'A', 'Jl. Cigadung Wetan', '', 'Rama', 'Jl. Cigadung Wetan', 'Pegawai Swasta', '89662552948', '2018/2019', '89655207509', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019209', 'Muhammad Mansyur', 'XI-M.3', 'Bandung', '2013-09-13', 1, 'O', 'Babakan Cikutra', '', 'Nana', 'Babakan Cikutra', 'Pegawai Negeri Sipil (PNS)', '89624737230', '2018/2019', '81323719523', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019210', 'Muhammad Teguh Maulana', 'XI-M.3', 'Bandung', '2010-06-07', 1, 'O', 'Kp. Cirateun Peuntas', '', 'Maulana', 'Kp. Cirateun Peuntas', 'Pegawai Negeri Sipil (PNS)', '8882015215', '2018/2019', '83820229937', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019212', 'Putra Rizky Austin', 'XI-M.3', 'Bandung', '2004-02-20', 1, 'O', 'Jl. Babakan Sari', '', 'Ari', 'Jl. Babakan Sari', 'Pegawai Negeri Sipil (PNS)', '89662534015', '2018/2019', '8886000225', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019213', 'Reza Rudiasnyah', 'XI-M.3', 'Bandung', '2004-02-25', 1, 'O', 'Jl. Babakan Dese', '', 'Rudi', 'Jl. Babakan Dese', 'Pegawai Negeri Sipil (PNS)', '89662550573', '2018/2019', '8973717552', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019214', 'Ridwan Maulana Bisri', 'XI-M.3', 'Bandung', '2010-05-23', 1, 'O', 'Jl. Desa', '', 'Bara', 'Jl. Desa', 'Pegawai Swasta', '83821188787', '2018/2019', '89670853804', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019215', 'Rinaldi Wildan Mushafa', 'XI-M.3', 'Bandung', '2004-06-10', 1, 'O', 'Jl. Sukarajin 1', '', 'Mustofa', 'Jl. Sukarajin 1', 'Wirausaha', '85721775016', '2018/2019', '85795305089', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019216', 'Rivan Syach Fauzian Ramandha', 'XI-M.3', 'Ciamis', '2006-07-17', 1, 'AB', 'Jl. Jatihandap', '', 'Fauzan', 'Jl. Jatihandap', 'Pegawai Swasta', '83820393414', '2018/2019', '82216125823', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019217', 'Sandi Saepul Gunawan', 'XI-M.3', 'Bandung', '2009-09-13', 1, 'B', 'Jl. Cimuncang', '', 'Gunawan', 'Jl. Cimuncang', 'Pegawai Swasta', '89691606990', '2018/2019', '89656829076', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019218', 'Travy Briliyando Reksa', 'XI-M.3', 'Jakarta', '2005-11-16', 1, 'A', 'Jl. Sukagalih', '', 'Rahmat', 'Jl. Sukagalih', 'Wirausaha', '89690930887', '2018/2019', '89620946439', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019219', 'Yuda Azhar', 'XI-M.3', 'Bandung', '2013-11-08', 1, 'AB', 'Kp. Pasir Luhur', '', 'Dzulfikar', 'Kp. Pasir Luhur', 'Pegawai Swasta', '83829207612', '2018/2019', '85795467950', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019220', 'Yuda Lesmana', 'XI-M.3', 'Bandung', '2008-03-19', 1, 'B', 'Jl. Pasir Impun Barat', '', 'Indra', 'Jl. Pasir Impun Barat', 'Pegawai Swasta', '83829237008', '2018/2019', '8996899350', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019221', 'Yusuf Ardi Pratama', 'XI-M.3', 'Bandung', '2004-03-11', 1, 'B', 'Kp. Pagersari', '', 'Andri', 'Kp. Pagersari', 'Pegawai Swasta', '89611448892', '2018/2019', '87722174240', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019222', 'Yusuf Azis Renggana', 'XI-M.3', 'Bandung', '2012-08-17', 1, 'A', 'Jl. Cijambe dalam', '', 'Indra', 'Jl. Cijambe dalam', 'Wirausaha', '8882328187', '2018/2019', '89655207509', '11115717.jpg', 'tkr', '', 'G031', '', ''),
('171019223', 'Adhiya Luthfi Desnada', 'XI-TKR.1', 'Cianjur', '2006-09-08', 1, 'AB', 'Jl. Tubagus Ismail Bawah', '', 'Budi', 'Jl. Tubagus Ismail Bawah', 'Pegawai Negeri Sipil (PNS)', '85720465823', '2018/2019', '8562112700', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019224', 'Adler Farrington', 'XI-TKR.1', 'Bandung', '2010-11-20', 1, 'B', 'Jl. Awiligar', '', 'Solihin', 'Jl. Awiligar', 'Wirausaha', '85221240555', '2018/2019', '82127896785', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019225', 'Agung Nuralamsyah', 'XI-TKR.1', 'Klaten', '2005-12-14', 1, 'B', 'Kp. Kertasari', '', 'Aditya', 'Kp. Kertasari', 'Pegawai Swasta', '82319269102', '2018/2019', '82317182195', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019226', 'Andri Mulyana', 'XI-TKR.1', 'Bandung', '2011-10-21', 1, 'A', 'Jl. Padasuka', '', 'Prima', 'Jl. Padasuka', 'Pegawai Negeri Sipil (PNS)', '85722654615', '2018/2019', '85624833148', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019227', 'Angga Andriyanto', 'XI-TKR.1', 'Bandung', '2004-05-21', 1, 'O', 'Jl. Sindang Sari', 'Maag', 'Waluyo', 'Jl. Sindang Sari', 'Wirausaha', '85242720712', '2018/2019', '85722654615', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019228', 'Aras Al Azhar', 'XI-TKR.1', 'Bandung', '2011-12-29', 1, 'AB', 'Jl. Cigadung Pesantren', '', 'Eri', 'Jl. Cigadung Pesantren', 'Polri / TNI', '85363309998', '2018/2019', '88802326664', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019229', 'Cecep Jatmika', 'XI-TKR.1', 'Bandung', '2010-07-29', 1, 'O', 'Jl. Pasir Kaliki Barat', '', 'Fiqih', 'Jl. Pasir Kaliki Barat', 'Pegawai Swasta', '82374955593', '2018/2019', '8122243893', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019230', 'Dani Hermawan', 'XI-TKR.1', 'Garut', '2008-08-03', 1, 'O', 'Jl. Lembang', '', 'Habib', 'Jl. Lembang', 'Pegawai Negeri Sipil (PNS)', '82317188225', '2018/2019', '85795945044', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019231', 'Defra Ananda Putra Pratama', 'XI-TKR.1', 'Bandung', '2005-02-01', 1, 'B', 'Jl. Sekemirung', '', 'Iskandar', 'Jl. Sekemirung', 'Pegawai Negeri Sipil (PNS)', '85320482700', '2018/2019', '81321709887', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019232', 'Dinar Razaky', 'XI-TKR.1', 'Bandung', '2012-06-01', 1, 'A', 'Jl. Babakan Haji Tamim', '', 'Nurjaman', 'Jl. Babakan Haji Tamim', 'Wirausaha', '81573394257', '2018/2019', '82240756161', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019233', 'Fadli Irawan', 'XI-TKR.1', 'Bandung', '2011-12-12', 1, 'B', 'Jl. Sukamantri', '', 'Irwan', 'Jl. Sukamantri', 'Pegawai Negeri Sipil (PNS)', '83820229937', '2018/2019', '8818228234', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019234', 'Fahmi Ramdhani', 'XI-TKR.1', 'Bandung', '2008-09-29', 1, 'B', 'Jl. Cikutra', '', 'Dadang', 'Jl. Cikutra', 'Pegawai Negeri Sipil (PNS)', '8886000225', '2018/2019', '8996805699', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019235', 'Fahrul Putra Marfyansyach', 'XI-TKR.1', 'Bandung', '2010-11-27', 1, 'A', 'Jl. Jend. A. Yani', '', 'Hassan', 'Jl. Jend. A. Yani', 'Pegawai Negeri Sipil (PNS)', '8973717552', '2018/2019', '83820264913', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019236', 'Hendra', 'XI-TKR.1', 'Bandung', '2008-05-23', 1, 'O', 'Jl. Raya Golf', '', 'Dodo', 'Jl. Raya Golf', 'Wirausaha', '89670853804', '2018/2019', '83897692813', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019237', 'Iwan Mahpud', 'XI-TKR.1', 'Garut', '2009-03-21', 1, 'O', 'Jl. Suka Asih Atas', '', 'Udin', 'Jl. Suka Asih Atas', 'Wirausaha', '85795305089', '2018/2019', '2270802904', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019238', 'Khobul Rajab Saddam Hussein', 'XI-TKR.1', 'Bandung', '2008-06-17', 1, 'B', 'Kp. Sukamulya', '', 'Hussein', 'Kp. Sukamulya', 'Wirausaha', '82216125823', '2018/2019', '85624204516', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019239', 'Lion Pernandis', 'XI-TKR.1', 'Bandung', '2005-11-07', 1, 'A', 'Jl. H. Yasin 10', '', 'Ferry', 'Jl. H. Yasin 10', 'Wirausaha', '89656829076', '2018/2019', '89613030961', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019240', 'Mochammad Edo Adrianto', 'XI-TKR.1', 'Kebumen', '2003-09-10', 1, 'O', 'Jl. Anyer Dalam', '', 'Sugiarto', 'Jl. Anyer Dalam', 'Polri / TNI', '89655917566', '2018/2019', '89630842747', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019241', 'Muhamad Rizky Sunandar', 'XI-TKR.1', 'Bandung', '2003-07-10', 1, 'AB', 'Gg. Bungan XI', '', 'Sunandar', 'Gg. Bungan XI', 'Pegawai Swasta', '89678568397', '2018/2019', '8976501840', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019242', 'Muhamat Ahnaf Faiz', 'XI-TKR.1', 'Cicalengka', '2011-04-21', 1, 'O', 'Jl. Pasirkaliki Barat', '', 'Saeful', 'Jl. Pasirkaliki Barat', 'Pegawai Swasta', '89694424740', '2018/2019', '89688118865', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019243', 'Muhammad Sidiq Nur Cahyo', 'XI-TKR.1', 'Cilacap', '2006-06-05', 1, 'AB', 'Kp. Cisitu', '', 'Hendra', 'Kp. Cisitu', 'Pegawai Swasta', '83821120240', '2018/2019', '896572639', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019244', 'Nirwan Agung Gumilar', 'XI-TKR.1', 'Bandung', '2004-04-09', 1, 'A', 'Jl. Jamaras III', '', 'Gumilar', 'Jl. Jamaras III', 'Pegawai Swasta', '89677978704', '2018/2019', '89638215104', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019245', 'Nova Hidayat', 'XI-TKR.1', 'Bandung', '2009-01-18', 1, 'B', 'Jl. Sasak Batu', '', 'Yayat', 'Jl. Sasak Batu', 'Pegawai Swasta', '85794124424', '2018/2019', '8,96115E+11', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019246', 'Rafiq Tajul Muchlisin', 'XI-TKR.1', 'Bandung', '2007-01-28', 1, 'O', 'Jl. Asep berlian', '', 'Muchsin', 'Jl. Asep berlian', 'Pegawai Swasta', '89688894662', '2018/2019', '8987019302', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019247', 'Rahmat Nur Ramdhani', 'XI-TKR.1', 'Bandung', '2004-08-09', 1, 'B', 'Jl. Mekarsari', '', 'Ridho', 'Jl. Mekarsari', 'Pegawai Swasta', '85871366236', '2018/2019', '89686694013', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019248', 'Ranjana', 'XI-TKR.1', 'Bandung', '2010-01-14', 1, 'A', 'Kp. Ciherang ', '', 'Rehan', 'Kp. Ciherang ', 'Pegawai Swasta', '85794164297', '2018/2019', '83822150021', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019249', 'Rio Nazaar Prayoga', 'XI-TKR.1', 'Bandung', '2004-05-27', 1, 'A', 'Jl. Sasak Batu', '', 'Prayoga', 'Jl. Sasak Batu', 'Wirausaha', '85295049223', '2018/2019', '8886016572', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019250', 'Rizki Hartadinata', 'XI-TKR.1', 'Bandung', '2005-10-21', 1, 'A', 'Jl. Sukaasih atas', '', 'Didin', 'Jl. Sukaasih atas', 'Pegawai Swasta', '8986809385', '2018/2019', '88812272143', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019251', 'Robby Darmawan', 'XI-TKR.1', 'Bandung', '2012-11-19', 1, 'A', 'Jl. Kebon bibit barat', '', 'Wawan', 'Jl. Kebon bibit barat', 'Pegawai Swasta', '85794785971', '2018/2019', '85659150731', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019252', 'Ryo Reza Nugraha', 'XI-TKR.1', 'Bandung', '2013-03-20', 1, 'A', 'Kp. Pasirkaliki Reuma', '', 'Nunu', 'Kp. Pasirkaliki Reuma', 'Pegawai Swasta', '85795161422', '2018/2019', '89670119795', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019253', 'Satrian Adi Fadillah', 'XI-TKR.1', 'Bandung', '2010-09-22', 1, 'A', 'Jl. Sukaasih', '', 'Didit', 'Jl. Sukaasih', 'Pegawai Swasta', '83821057374', '2018/2019', '89654349364', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019254', 'Setia Hadiyan', 'XI-TKR.1', 'Bandung', '2008-07-04', 1, 'B', 'Komp. SD Cimuncang', '', 'Hardi', 'Komp. SD Cimuncang', 'Pegawai Swasta', '89639034827', '2018/2019', '89671530463', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019255', 'Sholeh Ibrahim', 'XI-TKR.1', 'Bandung', '2011-01-03', 1, 'B', 'Kertasari', '', 'Baim', 'Kertasari', 'Pegawai Swasta', '89662534096', '2018/2019', '89656204401', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019256', 'Wahyu Firmansyah', 'XI-TKR.1', 'Bandung', '2005-08-17', 1, 'B', 'Jl. Ciheulang II', '', 'Irman', 'Jl. Ciheulang II', 'Wirausaha', '85703111437', '2018/2019', '85794980282', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019257', 'Wawan Gunawan', 'XI-TKR.1', 'Bandung', '2002-12-22', 1, 'B', 'Sekepanjang 1', '', 'Gugun', 'Sekepanjang 1', 'Wirausaha', '2295121495', '2018/2019', '83820031890', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019258', 'Zaidan Dzunnurain Arikin', 'XI-TKR.1', 'Bandung', '2003-09-06', 1, 'O', 'Jl. Sersan Sodik ', '', 'Aril', 'Jl. Sersan Sodik ', 'Wirausaha', '89658590299', '2018/2019', '8886003007', '11115717.jpg', 'tkr', '', 'G044', '', ''),
('171019259', 'Adam Maulana Yusuf', 'XI-TSM.1', 'Sumedang', '2011-01-24', 1, 'A', 'Jl. Cikutra', '', 'Ageng', 'Jl. Cikutra', 'Polri / TNI', '85722654727', '2018/2019', '85221240555', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019260', 'Aditya Firmansyah', 'XI-TSM.1', 'wonogiri', '2006-01-10', 1, 'O', 'Jl. Haur Pancuh', '', 'Laksamana', 'Jl. Haur Pancuh', 'Polri / TNI', '8564428207', '2018/2019', '85314099483', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019261', 'Aditnya Nurefma Fauzan', 'XI-TSM.1', 'Bandung', '2002-01-05', 1, 'O', 'Cijambe', '', 'Fauzi', 'Cijambe', 'Pegawai Swasta', '82317182195', '2018/2019', '82117721220', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019262', 'Adli Naufal Putra', 'XI-TSM.1', 'Bandung', '2011-05-04', 1, 'O', 'Sukamantri', '', 'Edi', 'Sukamantri', 'Pegawai Negeri Sipil (PNS)', '81394351719', '2018/2019', '85891880588', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019263', 'Agil Gustiawan', 'XI-TSM.1', 'Bandung', '2003-04-20', 1, 'AB', 'Jl. Sadang Luhur Blok', '', 'Elvan', 'Jl. Sadang Luhur Blok', 'Pegawai Negeri Sipil (PNS)', '81321415368', '2018/2019', '82316272178', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019264', 'Agung Nugraha', 'XI-TSM.1', 'Bandung', '2008-01-11', 1, 'A', 'Jl. Panyandaan', '', 'Sumpena', 'Jl. Panyandaan', 'Pegawai Negeri Sipil (PNS)', '82117868591', '2018/2019', '82127896785', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019265', 'Agus Mulyana', 'XI-TSM.1', 'Garut', '2008-11-04', 1, 'B', 'Jl. Sukamantri I', '', 'Gumelar', 'Jl. Sukamantri I', 'Wirausaha', '87825212586', '2018/2019', '85320482700', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019266', 'Andre Hermawanto', 'XI-TSM.1', 'Bandung', '2008-06-02', 1, 'O', 'Jl. Sasakbatu', '', 'Dodi', 'Jl. Sasakbatu', 'Pegawai Swasta', '81394427056', '2018/2019', '85722654615', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019267', 'Arief Al-Ghifari', 'XI-TSM.1', 'Kebumen', '2004-10-16', 1, 'B', 'P. H. H. Mustopa', '', 'Prakasa', 'P. H. H. Mustopa', 'Pegawai Swasta', '85659109211', '2018/2019', '85720465823', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019270', 'Bimbi Murdani', 'XI-TSM.1', 'Bandung', '2010-11-10', 1, 'B', 'Jl. Kiaracondong Barat', '', 'Fakhrudin', 'Jl. Kiaracondong Barat', 'Polri / TNI', '82122771882', '2018/2019', '82316272178', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019271', 'Dani Ramadhan', 'XI-TSM.1', 'Bandung', '2009-05-03', 1, 'A', 'Muararajeun lama', '', 'Indra', 'Muararajeun lama', 'Pegawai Negeri Sipil (PNS)', '83822624586', '2018/2019', '227334321', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019272', 'Fadrizali Mahendrika', 'XI-TSM.1', 'Bandung', '2013-08-18', 1, 'B', 'Jl. Asri', '', 'Pamungkas', 'Jl. Asri', 'Pegawai Negeri Sipil (PNS)', '8122371511', '2018/2019', '85793647629', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019273', 'Firgi Yansah', 'XI-TSM.1', 'Cirebon', '2010-07-09', 1, 'B', 'Jl. Awiligar', '', 'Uloh', 'Jl. Awiligar', 'Wirausaha', '81220039444', '2018/2019', '88218357429', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019274', 'Fuzia Ananda', 'XI-TSM.1', 'Bandung', '2012-08-05', 1, 'O', 'Jl. Cikutra', '', 'Robi', 'Jl. Cikutra', 'Pegawai swasta', '81910347952', '2018/2019', '8956414361', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019275', 'Georgie Rizky Satriany', 'XI-TSM.1', 'Bandung', '2006-08-26', 1, 'AB', 'Babakan Cikutra', '', 'Cahyana', 'Babakan Cikutra', 'Pegawai swasta', '89648757114', '2018/2019', '87821050240', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019276', 'Hanif Riyadi', 'XI-TSM.1', 'Bandung', '2003-06-18', 1, 'A', 'Jl. Kebon Gedang', '', 'Didi', 'Jl. Kebon Gedang', 'Pegawai Negeri Sipil (PNS)', '82318483545', '2018/2019', '87823734803', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019277', 'Miraj Muhamad', 'XI-TSM.1', 'Bandung', '2002-03-13', 1, 'B', 'Jl. Jend. A. Yani', '', 'Amad', 'Jl. Jend. A. Yani', 'Polri / TNI', '222515529', '2018/2019', '89630935562', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019278', 'Moh. Farhan Daud Pamungkas', 'XI-TSM.1', 'Banyumas', '2006-07-07', 1, 'B', 'Jl. Sukapura', '', 'Deri', 'Jl. Sukapura', 'Pegawai swasta', '83829879809', '2018/2019', '89655094624', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019279', 'Muhamad Geizka', 'XI-TSM.1', 'Bandung', '2010-06-05', 1, 'B', 'Jl. Muararajeun Lama', '', 'Geri', 'Jl. Muararajeun Lama', 'Pegawai swasta', '81809111434', '2018/2019', '2293044881', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019280', 'Muhamad Jamaludin Al fauji', 'XI-TSM.1', 'Bandung', '2004-05-14', 1, 'B', 'Jl. Cihampelas', '', 'Rahmat', 'Jl. Cihampelas', 'Polri / TNI', '88219401276', '2018/2019', '85795859193', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019281', 'Muhamad Ramdan', 'XI-TSM.1', 'Bandung', '2007-06-17', 1, 'A', 'Jl. P.H.H Mustofa', '', 'Rumloh', 'Jl. P.H.H Mustofa', 'Pegawai swasta', '85795391168', '2018/2019', '89688795705', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019282', 'Muhammad Bagas Al Manar', 'XI-TSM.1', 'Bandung', '2007-03-24', 1, 'AB', 'Babakan Haji Tamim', '', 'Ali', 'Babakan Haji Tamim', 'Pegawai swasta', '89649961379', '2018/2019', '89655212370', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019283', 'Muhammad Firmansyah Faza', 'XI-TSM.1', 'Bandung', '2007-07-06', 1, 'B', 'Kp. Langensari', '', 'Pajar', 'Kp. Langensari', 'Pegawai swasta', '227214811', '2018/2019', '89633664404', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019284', 'Muhammad Ikhsan Maulana', 'XI-TSM.1', 'Bandung', '2013-06-20', 1, 'O', 'Jl. P.H.H Mustofa', '', 'Iki', 'Jl. P.H.H Mustofa', 'Pegawai Negeri Sipil (PNS)', '811234792', '2018/2019', '89651787469', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019285', 'Rafy Fauzan', 'XI-TSM.1', 'Bandung', '2013-08-17', 1, 'A', 'Jl. Sekeloa tengah', '', 'Fazri', 'Jl. Sekeloa tengah', 'Wirausaha', '85721875392', '2018/2019', '8986873018', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019286', 'Rian Rinaldi', 'XI-TSM.1', 'Bandung', '2003-08-07', 1, 'O', 'Jl. Kubang sari', '', 'Aldi', 'Jl. Kubang sari', 'Polri / TNI', '85956400822', '2018/2019', '89695634330', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019287', 'Rizki Irgiawan', 'XI-TSM.1', 'Bandung', '2010-08-06', 1, 'B', 'Rancakendal', '', 'Awan', 'Rancakendal', 'Pegawai Negeri Sipil (PNS)', '82218109952', '2018/2019', '88801133377', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019288', 'Rizky Eka Putra', 'XI-TSM.1', 'Bandung', '2008-12-07', 1, 'B', 'Pasirkaliki barat', '', 'Putro', 'Pasirkaliki barat', 'Pegawai Negeri Sipil (PNS)', '87722216139', '2018/2019', '227004412', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019289', 'Rizky Maulana', 'XI-TSM.1', 'Bandung', '2005-12-28', 1, 'AB', 'Jl. Sukanegla', '', 'Kosasih', 'Jl. Sukanegla', 'Pegawai Negeri Sipil (PNS)', '81809209003', '2018/2019', '85721196090', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019290', 'Rizky Ramadhan', 'XI-TSM.1', 'Bandung', '2007-04-30', 1, 'O', 'Jl. Desa', '', 'Nugraha', 'Jl. Desa', 'Pegawai Negeri Sipil (PNS)', '82115097617', '2018/2019', '81910516754', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019291', 'Roni Ramdani', 'XI-TSM.1', 'Bandung', '2011-09-26', 1, 'O', 'Jl. Babakan sari', '', 'Ismanto', 'Jl. Babakan sari', 'Wirausaha', '2269776944', '2018/2019', '81224042082', '11115717.jpg', 'tsm', '', 'G050', '', '');
INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `gd`, `alamat_siswa`, `cat_kes`, `nm_ortu`, `alamat_ortu`, `kerja_ortu`, `no_hp_ortu`, `thn_ajaran`, `no_hp`, `foto`, `kode_jurusan`, `nomor_jurnal`, `kode_guru`, `berkas_absen`, `berkas_nilai`) VALUES
('171019292', 'Septian Nurdiansyah', 'XI-TSM.1', 'Bandung', '2008-09-21', 1, 'O', 'Jl. Cihampelas', '', 'Nurdin', 'Jl. Cihampelas', 'Polri / TNI', '85659320864', '2018/2019', '89694440365', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019293', 'Syaeful Rizky Juliana', 'XI-TSM.1', 'Bandung', '2005-03-07', 1, 'AB', 'Jl. Bukit Reuma', '', 'Juju', 'Jl. Bukit Reuma', 'Pegawai Negeri Sipil (PNS)', '87722497471', '2018/2019', '89689621304', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019294', 'Yehezkiel Ganesa Putra', 'XI-TSM.1', 'Yogyakarta', '2007-05-06', 1, 'AB', 'Jl. Sindanglayang', '', 'Arif', 'Jl. Sindanglayang', 'Wirausaha', '8897273729', '2018/2019', '8983053770', '11115717.jpg', 'tsm', '', 'G050', '', ''),
('171019295', 'Aditya Restu Pamungkas', 'XI-TSM.2', 'Bandung', '2012-04-30', 1, 'O', 'Jl. Bangbayang Cihaur', '', 'Mudin', 'Jl. Bangbayang Cihaur', 'Wirausaha', '82127896785', '2018/2019', '81573394257', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019296', 'Aga Septian', 'XI-TSM.2', 'Bandung', '2003-06-21', 1, 'O', 'Jatihandap Timur', '', 'Panji', 'Jatihandap Timur', 'Pegawai Swasta', '82260531818', '2018/2019', '82260531818', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019297', 'Ahmad Ramadhan', 'XI-TSM.2', 'Bandung', '2003-12-01', 1, 'O', 'Jl. Cikadut Atas ', '', 'Resa', 'Jl. Cikadut Atas ', 'Pegawai Swasta', '81321354432', '2018/2019', '85864428207', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019298', 'Ananda Akbar Riantoko', 'XI-TSM.2', 'Bandung', '2005-06-03', 1, 'A', 'Jl. Sukaasih ', '', 'Yusup', 'Jl. Sukaasih ', 'Pegawai Swasta', '89630744000', '2018/2019', '85864428207', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019299', 'Andi Ashari', 'XI-TSM.2', 'Bandung', '2008-01-10', 1, 'O', 'Jl. Cigiringsing', '', 'Ramdhani', 'Jl. Cigiringsing', 'Pegawai Negeri Sipil (PNS)', '81318181185', '2018/2019', '8,95334E+11', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019300', 'Angga Andriyanto', 'XI-TSM.2', 'Bandung', '2013-10-03', 1, 'B', 'Jl. Bunisari', '', 'Sumarna', 'Jl. Bunisari', 'Pegawai Negeri Sipil (PNS)', '85891880588', '2018/2019', '85846596306', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019301', 'Anggara Setia Surya Pratama', 'XI-TSM.2', 'Cimahi', '2009-02-21', 1, 'B', 'Jl. Cimuncang', '', 'Sofyan', 'Jl. Cimuncang', 'Wirausaha', '87821911447', '2018/2019', '85659109211', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019302', 'Anggi Darmawan', 'XI-TSM.2', 'Garut', '2011-10-13', 1, 'AB', 'Jl. Bagusrangin', 'Asma', 'Risman', 'Jl. Bagusrangin', 'Polri / TNI', '85722759989', '2018/2019', '87825212586', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019303', 'Aqshal Megah Pratama Putra', 'XI-TSM.2', 'Bandung', '2004-02-02', 1, 'AB', 'Kp. Pasirkoja', '', 'Rizki', 'Kp. Pasirkoja', 'Pegawai Negeri Sipil (PNS)', '85863219267', '2018/2019', '85795525433', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019304', 'Arry Pramana Nugraha', 'XI-TSM.2', 'Bandung', '2011-05-13', 1, 'A', 'Jl. Barunagri', '', 'Vian', 'Jl. Barunagri', 'Wirausaha', '82316272178', '2018/2019', '81222987943', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019305', 'Bagas Pingky Saputra', 'XI-TSM.2', 'Bandung', '2008-06-18', 1, 'O', 'Jl. Sekepondok', '', 'Pikri', 'Jl. Sekepondok', 'Pegawai Swasta', '89607309975', '2018/2019', '89689640462', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019306', 'Barna', 'XI-TSM.2', 'Bandung', '2005-06-16', 1, 'AB', 'Jl. Sekeloa Timur', '', 'Purnadi', 'Jl. Sekeloa Timur', 'Pegawai Negeri Sipil (PNS)', '8818251976', '2018/2019', '85798255170', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019307', 'Bilal Nabila Hakim', 'XI-TSM.2', 'Bandung', '2007-04-05', 1, 'A', 'Jl. Sekepanjang I', '', 'Hakim', 'Jl. Sekepanjang I', 'Pegawai Negeri Sipil (PNS)', '85956698295', '2018/2019', '83829892721', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019308', 'Candra Saputro Febriansyah', 'XI-TSM.2', 'Bandung', '2009-06-16', 1, 'B', 'Jl. Belitung', '', 'Fernanto', 'Jl. Belitung', 'Wirausaha', '8980490449', '2018/2019', '82218620672', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019309', 'Diki Maulana Hidayat', 'XI-TSM.2', 'Bandung', '2003-06-26', 1, 'O', 'Jl. Tubagus Ismail Bawah', '', 'Hidayatullah', 'Jl. Tubagus Ismail Bawah', 'Wirausaha', '8990168258', '2018/2019', '85320314723', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019311', 'Ervan Tezar Utama', 'XI-TSM.2', 'Bandung', '2003-06-13', 1, 'B', 'Kp. Pancu rendang', '', 'Tegar', 'Kp. Pancu rendang', 'Wirausaha', '85721631416', '2018/2019', '8231729682', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019312', 'Farras Rizki Muharam', 'XI-TSM.2', 'Bandung', '2009-03-16', 1, 'B', 'Jl. Hegarmanah', '', 'Muhadi', 'Jl. Hegarmanah', 'Wirausaha', '8996046498', '2018/2019', '85659204554', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019313', 'Fikri Aditya Saefulloh', 'XI-TSM.2', 'Bandung', '2011-04-19', 1, 'A', 'Kp. Sentak dulang', '', 'Saeful', 'Kp. Sentak dulang', 'Wirausaha', '89621716424', '2018/2019', '89668627537', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019314', 'Harfi Muta\'adi', 'XI-TSM.2', 'Padang', '2004-12-21', 1, 'B', 'Jl. Kesehatan', '', 'Aditya', 'Jl. Kesehatan', 'Wirausaha', '89695608706', '2018/2019', '89611486314', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019316', 'Muhamad Athya Dani', 'XI-TSM.2', 'Bandung', '2008-07-05', 1, 'B', 'Jl. Dipatiukur', '', 'Denis', 'Jl. Dipatiukur', 'Pegawai Negeri Sipil (PNS)', '89639400076', '2018/2019', '89676218413', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019317', 'Muhammad Ahsan Fernanda', 'XI-TSM.2', 'Bandung', '2013-03-19', 1, 'O', 'Jl. Parakan Saat', '', 'Fernanda', 'Jl. Parakan Saat', 'Polri / TNI', '85220270005', '2018/2019', '89657101471', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019318', 'Muhammad Rizki Sofiandi', 'XI-TSM.2', 'Bandung', '2006-10-10', 1, 'AB', 'Kp. Pasirkaliki Barat', '', 'Sofyan', 'Kp. Pasirkaliki Barat', 'Polri / TNI', '85956540791', '2018/2019', '89621716421', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019319', 'Nur Aji Arafah', 'XI-TSM.2', 'Bandung', '2002-12-03', 1, 'O', 'Jl. Cikaso Timur', '', 'Arfandi', 'Jl. Cikaso Timur', 'Pegawai Swasta', '8996018812', '2018/2019', '87722420068', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019320', 'Rafly Fadly Mulyana', 'XI-TSM.2', 'Bandung', '2012-09-17', 1, 'O', 'Jl. Ligar mekar', '', 'Mulyana', 'Jl. Ligar mekar', 'Pegawai Swasta', '85793195330', '2018/2019', '83826521649', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019321', 'Rafly Ramdani', 'XI-TSM.2', 'Bandung', '2010-10-17', 1, 'A', 'Jl. Cinta Asih', '', 'Dadan', 'Jl. Cinta Asih', 'Pegawai Swasta', '85720449214', '2018/2019', '89629555813', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019322', 'Rahmat Rizky Saputra', 'XI-TSM.2', 'Bandung', '2012-01-11', 1, 'O', 'Jl. Jatihandap atas', '', 'Rozak', 'Jl. Jatihandap atas', 'Pegawai Swasta', '83822384201', '2018/2019', '85721941247', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019323', 'Rezal Fauzy', 'XI-TSM.2', 'Bandung', '2013-09-24', 1, 'B', 'Jl. Sukaasih ', '', 'Ozzy', 'Jl. Sukaasih ', 'Pegawai Swasta', '87825102097', '2018/2019', '83829894854', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019324', 'Rifalbi Dzaki', 'XI-TSM.2', 'Bandung', '2003-08-28', 1, 'B', 'Jl. Lebak', '', 'Didit', 'Jl. Lebak', 'Pegawai Swasta', '89613946141', '2018/2019', '89627766369', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019325', 'Rifqi Alip Fauzan', 'XI-TSM.2', 'Bandung', '2012-07-27', 1, 'A', 'Jl. Gelatik dalam', '', 'Nandar', 'Jl. Gelatik dalam', 'Pegawai Swasta', '85795356938', '2018/2019', '89664646185', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019326', 'Rifqi Rama Favian', 'XI-TSM.2', 'Bandung', '2012-04-19', 1, 'O', 'Jl. Cikutra Barat', '', 'Alfian', 'Jl. Cikutra Barat', 'Pegawai Swasta', '8991570278', '2018/2019', '8983878053', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019327', 'Riky Tabah Syah', 'XI-TSM.2', 'Bandung', '2006-07-16', 1, 'O', 'Jl. Pasir Impun atas', '', 'Syahrul', 'Jl. Pasir Impun atas', 'Pegawai Negeri Sipil (PNS)', '87823492423', '2018/2019', '88808722272', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019328', 'Sendi Gustian', 'XI-TSM.2', 'Bandung', '2007-10-13', 1, 'AB', 'Jl. Hantap Raya', '', 'Agus', 'Jl. Hantap Raya', 'Pegawai Negeri Sipil (PNS)', '83821550273', '2018/2019', '83829395926', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019329', 'Tantan Hadiyansah', 'XI-TSM.2', 'Bandung', '2005-03-19', 1, 'A', 'Jl. Baranang siang', '', 'Hadi', 'Jl. Baranang siang', 'Wirausaha', '89654948298', '2018/2019', '85722866236', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019330', 'Tegar Arung Buana', 'XI-TSM.2', 'Banyumas', '2010-06-13', 1, 'A', 'Jl. Awiligar', '', 'Cahyo', 'Jl. Awiligar', 'Wirausaha', '2292850716', '2018/2019', '89668613893', '11115717.jpg', 'tsm', '', 'G064', '', ''),
('171019367', 'Andhika ', 'XI-TSM.4', 'Garut', '2002-04-30', 1, 'A', 'Jln Tubagus ismail dalam rt 04 rw 07 ', '-', 'Juman', 'Jln Tubagus ismail dalam rt 04 rw 07 ', 'Wiraswasta', '082121949074', '2018/2019', '08157091511', '11115717.jpg', 'tsm', '', 'G098', '', ''),
('171019401', 'Afrizal Lesmana', 'XI-TKJ.1', 'Bandung', '2007-12-01', 1, 'AB', 'Permata Biru Blok H', '', 'Nashir', 'Permata Biru Blok H', 'Polri / TNI', '87734158850', '2018/2019', '82127011125', '11115717.jpg', 'tkj', '002/171019401/SMK-Mdk/2018', 'G104', '', ''),
('171019402', 'Agus Taufiq Setiya', 'XI-TKJ.1', 'Bandung', '2005-01-12', 1, 'A', 'Jl. Babakan teureup', '', 'Andri', 'Jl. Babakan teureup', 'Pegawai Negeri Sipil (PNS)', '1102405998', '2018/2019', '81573394257', '11115717.jpg', 'tkj', '003/171019402/SMK-Mdk/2018', 'G104', '', ''),
('171019403', 'Aldia Agri Nugraha', 'XI-TKJ.1', 'Bandung', '2002-04-11', 1, 'O', 'Jl. Kebon Gedang', '', 'Deli', 'Jl. Kebon Gedang', 'Pegawai swasta', '81395102600', '2018/2019', '1327409635', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019404', 'Ananda Rivalldy', 'XI-TKJ.1', 'Bandung', '2009-08-17', 1, 'O', 'Jl. Jakarta', '', 'Yosevan', 'Jl. Jakarta', 'Pegawai Negeri Sipil (PNS)', '81221800860', '2018/2019', '81313265610', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019405', 'Andri Firmansyah', 'XI-TKJ.1', 'Tanggerang', '2012-11-12', 1, 'A', 'Kp. Pasit Koja', '', 'Eko', 'Kp. Pasit Koja', 'Pegawai Negeri Sipil (PNS)', '8132288665', '2018/2019', '85221240555', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019406', 'Anggi Deni Permana', 'XI-TKJ.1', 'Cirebon', '2004-02-05', 1, 'O', 'Jl. Sekepanjang II', '', 'Adam', 'Jl. Sekepanjang II', 'Pegawai Negeri Sipil (PNS)', '85860447514', '2018/2019', '8,95334E+11', '11115717.jpg', 'tkj', '061/171019406/SMK-Mdk/2018', 'G104', '', ''),
('171019407', 'Ari Priyadi', 'XI-TKJ.1', 'Bandung', '2007-11-19', 1, 'B', 'Jl. Babakan Sumedang', '', 'Arief', 'Jl. Babakan Sumedang', 'Wirausaha', '85320286207', '2018/2019', '85318463281', '11115717.jpg', 'tkj', '060/171019407/SMK-Mdk/2018', 'G104', '', ''),
('171019408', 'Ariel Peynaldi', 'XI-TKJ.1', 'Bandung', '2004-07-01', 1, 'AB', 'Jl. Rumah Sakit', '', 'Irawan', 'Jl. Rumah Sakit', 'Wirausaha', '85713342934', '2018/2019', '87825212586', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019409', 'Bagas Wari', 'XI-TKJ.1', 'Bandung', '2012-10-24', 1, 'O', 'Jl. Mekar Sari', '', 'Dody', 'Jl. Mekar Sari', 'Pegawai Negeri Sipil (PNS)', '8536309998', '2018/2019', '82320184298', '11115717.jpg', 'tkj', '055/171019409/SMK-Mdk/2018', 'G104', '', ''),
('171019410', 'Daffa Akbar Ramadhan', 'XI-TKJ.1', 'Garut', '2008-10-22', 1, 'O', 'Jl. Cigadung Raya Barat', '', 'Sigit', 'Jl. Cigadung Raya Barat', 'Pegawai swasta', '82320232726', '2018/2019', '85363309998', '11115717.jpg', 'tkj', '056/171019410/SMK-Mdk/2018', 'G104', '', ''),
('171019411', 'Dede Rahayu', 'XI-TKJ.1', 'Bandung', '2008-03-01', 1, 'B', 'Jl. Bojong Koneng', '', 'Pepen', 'Jl. Bojong Koneng', 'Pegawai swasta', '8562005019', '2018/2019', '8,95333E+11', '11115717.jpg', 'tkj', '057/171019411/SMK-Mdk/2018', 'G104', '', ''),
('171019412', 'Diva Setia Darmawan', 'XI-TKJ.1', 'Bandung', '2008-09-24', 1, 'B', 'Jl. Sekeloa Tengah', '', 'Darmawan', 'Jl. Sekeloa Tengah', 'Pegawai swasta', '82214067308', '2018/2019', '81214946241', '11115717.jpg', 'tkj', '058/171019412/SMK-Mdk/2018', 'G104', '', ''),
('171019413', 'Ejia Lestari', 'XI-TKJ.1', 'Bandung', '2013-07-10', 0, 'A', 'Jl. Moh. Toha', '', 'Heri', 'Jl. Moh. Toha', 'Pegawai swasta', '89638230323', '2018/2019', '89662048207', '11115717.jpg', 'tkj', '059/171019413/SMK-Mdk/2018', 'G104', '', ''),
('171019414', 'Fajar Riyaldi', 'XI-TKJ.1', 'Bandung', '2013-08-10', 1, 'AB', 'Jl. Cimuncang', '', 'Yadi', 'Jl. Cimuncang', 'Pegawai swasta', '85721984254', '2018/2019', '85860092295', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019415', 'Faldy Prima Wibawa', 'XI-TKJ.1', 'Bandung', '2010-06-09', 1, 'B', 'Jl. P.H.H Mustofa', '', 'Wibowo', 'Jl. P.H.H Mustofa', 'Pegawai swasta', '83821522448', '2018/2019', '81224425376', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019416', 'Fauzi Rizqyansyah', 'XI-TKJ.1', 'Bandung', '2010-01-28', 1, 'O', 'Kp. Pasirkaliki Timur', '', 'Ardiansyah', 'Kp. Pasirkaliki Timur', 'Pegawai swasta', '85860447360', '2018/2019', '89676581590', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019417', 'Felix Wijaya', 'XI-TKJ.1', 'Bandung', '2012-12-16', 1, 'A', 'Jl Cigadung Raya Timur', '', 'Wijaya', 'Jl Cigadung Raya Timur', 'Pegawai swasta', '88218199370', '2018/2019', '89667539527', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019418', 'Feny Erika', 'XI-TKJ.1', 'Bandung', '2004-12-15', 0, 'O', 'Jl. Bojong Kacor ', '', 'Erik', 'Jl. Bojong Kacor ', 'Pegawai swasta', '85860628656', '2018/2019', '89695932461', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019419', 'Feri Ardiansyah', 'XI-TKJ.1', 'Bandung', '2012-02-16', 1, 'B', 'Jl . Ciumbuleuit', '', 'Harryanto', 'Jl . Ciumbuleuit', 'Pegawai swasta', '85794986739', '2018/2019', '81222961438', '11115717.jpg', 'tkj', '067/171019419/SMK-Mdk/2018', 'G104', '', ''),
('171019420', 'Indra Jaya', 'XI-TKJ.1', 'Bandung', '2011-11-12', 1, 'B', 'Jl. Bojong Koneng atas', '', 'Dodi', 'Jl. Bojong Koneng atas', 'Pegawai swasta', '89650108101', '2018/2019', '8892823607', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019421', 'Julkarnaen Al Ansori', 'XI-TKJ.1', 'Bandung', '2003-05-01', 1, 'AB', 'Jl. Ir. H. Juanda', '', 'Zulkifli', 'Jl. Ir. H. Juanda', 'Pegawai swasta', '87886618741', '2018/2019', '89621454003', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019422', 'Mahmudin', 'XI-TKJ.1', 'Bandung', '2011-12-21', 1, 'O', 'Jl. Ligar Utara', '', 'Syamsudin', 'Jl. Ligar Utara', 'Polri / TNI', '83822006858', '2018/2019', '81322485496', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019423', 'Muhamad Zahran Dildarian', 'XI-TKJ.1', 'Bandung', '2008-05-15', 1, 'O', 'Jl. Suniaraja', '', 'Ryan', 'Jl. Suniaraja', 'Wirausaha', '83821228250', '2018/2019', '83821168858', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019424', 'Nur Indah Pratiwi', 'XI-TKJ.1', 'Bandung', '2007-12-16', 0, 'O', 'Bbk. Sumedang ', '', 'Efendi', 'Bbk. Sumedang ', 'Wirausaha', '8,95324E+11', '2018/2019', '82320203343', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019425', 'Nurul Husnah Pitria', 'XI-TKJ.1', 'Cicalengka', '2004-01-09', 0, 'AB', 'Jl. Padasuka', '', 'Kosasih', 'Jl. Padasuka', 'Wirausaha', '85720445972', '2018/2019', '8122279504', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019426', 'Pega Puji Lestari', 'XI-TKJ.1', 'Bandung', '2012-06-14', 0, 'B', 'Kp. Babakan TRP Uber', '', 'Zaenal', 'Kp. Babakan TRP Uber', 'Pegawai Negeri Sipil (PNS)', '81320565915', '2018/2019', '83822933787', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019427', 'Raka Septian Maulana', 'XI-TKJ.1', 'Bandung', '2003-02-17', 1, 'O', 'Jl. Karangtineung dalam ', '', 'Maulana', 'Jl. Karangtineung dalam ', 'Pegawai Negeri Sipil (PNS)', '89335784692', '2018/2019', '81220781556', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019428', 'Raya Fauzan', 'XI-TKJ.1', 'Bandung', '2004-02-25', 1, 'B', 'Jl. Awibitung', '', 'Amarudin', 'Jl. Awibitung', 'Pegawai Negeri Sipil (PNS)', '89617340330', '2018/2019', '82295072742', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019429', 'Rendy Rismawan', 'XI-TKJ.1', 'Bandung', '2008-02-01', 1, 'A', 'Jl. Karangtineung dalam ', '', 'Rudy', 'Jl. Karangtineung dalam ', 'Pegawai Negeri Sipil (PNS)', '8962827067', '2018/2019', '8893617006', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019430', 'Revi Suryadi', 'XI-TKJ.1', 'Bandung', '2008-08-01', 1, 'A', 'Jl. Cibangkong', '', 'Yahya', 'Jl. Cibangkong', 'Pegawai Negeri Sipil (PNS)', '85794700533', '2018/2019', '8818253240', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019431', 'Robi Gustianto', 'XI-TKJ.1', 'Bandung', '2006-01-24', 1, 'A', 'Jl. Padasuka atas', '', 'Ardianto', 'Jl. Padasuka atas', 'Pegawai Negeri Sipil (PNS)', '8,95333E+11', '2018/2019', '88218776892', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019432', 'Sarah Dhita Salsabila', 'XI-TKJ.1', 'Bandung', '2005-12-28', 0, 'A', 'Jl. Cilandak', 'Bronkitis', 'Yusuf', 'Jl. Cilandak', 'Wirausaha', '85795708090', '2018/2019', '89680900895', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019433', 'Satria Muhamad Raynaldy', 'XI-TKJ.1', 'Bandung', '2011-02-01', 1, 'A', 'Jl. Pajagalan ', '', 'Gilang', 'Jl. Pajagalan ', 'Wirausaha', '83821910114', '2018/2019', '83822425753', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019434', 'Wahyu Rahmawan Darajat', 'XI-TKJ.1', 'Bandung', '2007-08-01', 1, 'A', 'Jl. Bojong Koneng', '', 'Sudrajat', 'Jl. Bojong Koneng', 'Polri / TNI', '89654349336', '2018/2019', '8562292022', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019435', 'Yudha Rizki Maulana Aji', 'XI-TKJ.1', 'Bandung', '2005-10-05', 1, 'O', 'Jl. Hegarmanah Kulon', '', 'Aji', 'Jl. Hegarmanah Kulon', 'Wirausaha', '83878271007', '2018/2019', '89523506849', '11115717.jpg', 'tkj', '', 'G104', '', ''),
('171019436', 'Aceu Aardiansyah', 'XI-TKJ.2', 'Bandung', '2004-05-27', 1, 'A', 'Jl. Sekemirung ', 'Maag', 'Hildan', 'Jl. Sekemirung ', 'Pegawai swasta', '82320232726', '2018/2019', '85320286207', '11115717.jpg', 'tkj', '062/171019436/SMK-Mdk/2018', 'G103', '', ''),
('171019437', 'Aji Pangestu', 'XI-TKJ.2', 'Bandung', '2006-01-03', 1, 'A', 'Jl. Ajudan Jendral', '', 'Chandra', 'Jl. Ajudan Jendral', 'Wirausaha', '85221690105', '2018/2019', '82317182195', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019438', 'Ajrifa Riesky Septiandy', 'XI-TKJ.2', 'Bandung', '2005-02-16', 1, 'AB', 'Jl. Sukarame', '', 'Hakim', 'Jl. Sukarame', 'Polri / TNI', '82126639619', '2018/2019', '82117053322', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019439', 'Aldi Firman Sopyan', 'XI-TKJ.2', 'Cimahi', '2003-02-26', 1, 'B', 'Jl. Suci', '', 'Ilham', 'Jl. Suci', 'Polri / TNI', '8122243893', '2018/2019', '85795851996', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019441', 'Alif Permana', 'XI-TKJ.2', 'Garut', '2007-01-15', 1, 'O', 'Jl. Sangkuriang', '', 'Dikha', 'Jl. Sangkuriang', 'Pegawai swasta', '82126639619', '2018/2019', '85795851996', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019442', 'Andi Idwan', 'XI-TKJ.2', 'Garut', '2004-03-17', 1, 'O', 'Sukamantri II', '', 'Idan', 'Sukamantri II', 'Pegawai Negeri Sipil (PNS)', '8562112700', '2018/2019', '82117287114', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019443', 'Bimo Aji Pamungkas', 'XI-TKJ.2', 'Bandung', '2008-01-20', 1, 'AB', 'Kp. Sukamulya ', '', 'Regi', 'Kp. Sukamulya ', 'Pegawai Negeri Sipil (PNS)', '8225739924', '2018/2019', '85790989078', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019444', 'Cahyadi Akbar Rizky', 'XI-TKJ.2', 'Bandung', '2009-08-01', 1, 'A', 'Jl. Sariwates Selatan', '', 'Maulana', 'Jl. Sariwates Selatan', 'Wirausaha', '8225739924', '2018/2019', '81322624196', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019445', 'Deni Setiawan', 'XI-TKJ.2', 'Tanggerang', '2011-08-16', 1, 'A', 'Jl. Babakan Sari 3', '', 'Djodi', 'Jl. Babakan Sari 3', 'Polri / TNI', '81321415368', '2018/2019', '81224362066', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019446', 'Elfen Munestri', 'XI-TKJ.2', 'Bandung', '2002-10-13', 1, 'O', 'Jl. Cijambe ', '', 'Nandang', 'Jl. Cijambe ', 'Pegawai Negeri Sipil (PNS)', '81312034428', '2018/2019', '82218821970', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019447', 'Galang Falahzain', 'XI-TKJ.2', 'Tasikmalaya', '2004-05-05', 1, 'A', 'Jl. Sindangjaya', '', 'Farhan', 'Jl. Sindangjaya', 'Pegawai Swasta', '88218639643', '2018/2019', '81321016839', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019448', 'Hickal Thoriq Al Gany', 'XI-TKJ.2', 'Sumedang', '2002-12-16', 1, 'O', 'Jl. Cintaasih Utara', '', 'Hekal', 'Jl. Cintaasih Utara', 'Pegawai Swasta', '82216338946', '2018/2019', '8828570969', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019449', 'Kurniawan Dwi Gustiana', 'XI-TKJ.2', 'Bandung', '2004-09-10', 1, 'B', 'Babakan Hantap', '', 'Agus', 'Babakan Hantap', 'Pegawai Swasta', '89639752585', '2018/2019', '81220423994', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019450', 'Meyda Rahmawati', 'XI-TKJ.2', 'Bandung', '2002-02-27', 0, 'AB', 'Pasir leutik ', '', 'Rahman', 'Pasir leutik ', 'Pegawai Swasta', '89667285585', '2018/2019', '85861758371', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019451', 'Mochamad Royan Firdaus', 'XI-TKJ.2', 'Bandung', '2006-12-12', 1, 'O', 'Jl. Sukakarya ', '', 'Firdan', 'Jl. Sukakarya ', 'Pegawai Swasta', '89664127758', '2018/2019', '89666525162', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019452', 'Muhamad Reza Permana', 'XI-TKJ.2', 'Bandung', '2011-02-16', 1, 'O', 'Cipanjalu I', '', 'Permana', 'Cipanjalu I', 'Pegawai Negeri Sipil (PNS)', '81573515156', '2018/2019', '82295172121', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019453', 'Muhamad Rizky', 'XI-TKJ.2', 'Bandung', '2012-12-22', 1, 'B', 'Jl. Bojongkacor', '', 'Iky', 'Jl. Bojongkacor', 'Pegawai Negeri Sipil (PNS)', '89507667654', '2018/2019', '81224435448', '11115717.jpg', 'tkj', '063/171019453/SMK-Mdk/2018', 'G103', '', ''),
('171019454', 'Muhammad Hardiansyah', 'XI-TKJ.2', 'Bandung', '2007-11-19', 1, 'B', 'Jl. Cigiringsing', '', 'Hadi', 'Jl. Cigiringsing', 'Wirausaha', '81910064996', '2018/2019', '88218046147', '11115717.jpg', 'tkj', '064/171019454/SMK-Mdk/2018', 'G103', '', ''),
('171019455', 'Perliana Pebyani', 'XI-TKJ.2', 'Bandung', '2009-08-20', 0, 'O', 'Jl. Cigadung Raya timur', '', 'Pepen', 'Jl. Cigadung Raya timur', 'Wirausaha', '85846474115', '2018/2019', '85864814059', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019456', 'Rangga Pratama Firdaus', 'XI-TKJ.2', 'Bandung', '2006-04-06', 1, 'B', 'Jl. Sekeloa tengah', '', 'Daus', 'Jl. Sekeloa tengah', 'Wirausaha', '82217063702', '2018/2019', '8892830396', '11115717.jpg', 'tkj', '065/171019456/SMK-Mdk/2018', 'G103', '', ''),
('171019457', 'Reksa Syailendra Al Hasbi', 'XI-TKJ.2', 'Bandung', '2010-06-12', 1, 'B', 'Jl. Siliwangi dalam', '', 'Ali', 'Jl. Siliwangi dalam', 'Pegawai swasta', '83820574655', '2018/2019', '85221441445', '11115717.jpg', 'tkj', '066/171019457/SMK-Mdk/2018', 'G103', '', ''),
('171019458', 'Revan Pratama', 'XI-TKJ.2', 'Bandung', '2011-01-09', 1, 'A', 'Jl. Babakan sari II', '', 'Tama', 'Jl. Babakan sari II', 'Pegawai Negeri Sipil (PNS)', '89605636458', '2018/2019', '88802057160', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019459', 'Reza Alfarizi', 'XI-TKJ.2', 'Bandung', '2003-09-25', 1, 'B', 'Jl. Mbah Malim', '', 'Rizki', 'Jl. Mbah Malim', 'Pegawai Negeri Sipil (PNS)', '82219058624', '2018/2019', '83821325763', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019461', 'Rifnanda Luckmansyah', 'XI-TKJ.2', 'Bandung', '2007-06-23', 1, 'B', 'Jl. Cinta Asih', '', 'Lukman', 'Jl. Cinta Asih', 'Pegawai Negeri Sipil (PNS)', '88218741248', '2018/2019', '88218503440', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019462', 'Riki Ramdani', 'XI-TKJ.2', 'Bandung', '2008-02-14', 1, 'O', 'Jl. Cigadung Raya barat', '', 'Dadan', 'Jl. Cigadung Raya barat', 'Wirausaha', '85794934441', '2018/2019', '89660456506', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019463', 'Rizal Maulana', 'XI-TKJ.2', 'Bandung', '2012-04-12', 1, 'B', 'Jl. Jamaras 3', '', 'Yana', 'Jl. Jamaras 3', 'Wirausaha', '8980902786', '2018/2019', '83822126045', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019464', 'Rizki Awal Ramadhani', 'XI-TKJ.2', 'Bandung', '2007-04-01', 1, 'B', 'Jl. Sukamaju ', '', 'Udin', 'Jl. Sukamaju ', 'Pegawai Negeri Sipil (PNS)', '85315719095', '2018/2019', '8995304594', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019465', 'Rizki Hendriawan', 'XI-TKJ.2', 'Bandung', '2007-04-25', 1, 'O', 'Gg. Rd. Jibja', '', 'Hendrik', 'Gg. Rd. Jibja', 'Pegawai swasta', '82217063686', '2018/2019', '82321463168', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019466', 'Rizky Padilah', 'XI-TKJ.2', 'Bandung', '2012-12-22', 1, 'AB', 'Jl. Bojong koneng', '', 'Didin', 'Jl. Bojong koneng', 'Pegawai swasta', '85846495520', '2018/2019', '82130197164', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019467', 'Rofi Muhamad Ardiansyah', 'XI-TKJ.2', 'Bandung', '2009-12-07', 1, 'A', 'Jl. Cihampelas', '', 'Ardian', 'Jl. Cihampelas', 'Pegawai swasta', '83821213598', '2018/2019', '88218587993', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019468', 'Tabiya Rayna Kamaulid', 'XI-TKJ.2', 'Garut', '2013-11-29', 1, 'B', 'Jl. Alfa ', '', 'Tatang', 'Jl. Alfa ', 'Pegawai swasta', '8973985604', '2018/2019', '83821741566', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019469', 'Taufik Nurrohman', 'XI-TKJ.2', 'Bandung', '2011-01-10', 1, 'B', 'Jl. Baranang Siang', '', 'Rohman', 'Jl. Baranang Siang', 'Pegawai swasta', '89524387281', '2018/2019', '89630935258', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019470', 'Taufik Qurohman', 'XI-TKJ.2', 'Bandung', '2006-12-09', 1, 'A', 'Jl. Sekeloa tengah', '', 'Ucok', 'Jl. Sekeloa tengah', 'Pegawai Negeri Sipil (PNS)', '83821778166', '2018/2019', '8963882968', '11115717.jpg', 'tkj', '', 'G103', '', ''),
('171019471', 'Adi Purnama', 'XI-TKJ.3', 'Sumedang', '2007-10-08', 1, 'O', 'Jl. Cijame Kulon', 'Maag', 'Pratama', 'Jl. Cijame Kulon', 'Pegawai swasta', '85720465823', '2018/2019', '85295207497', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019472', 'Ahmad Faisal Hady', 'XI-TKJ.3', 'Bandung', '2011-06-02', 1, 'O', 'Jl. Griya Winaya', '', 'Ajianto', 'Jl. Griya Winaya', 'Pegawai swasta', '82316272178', '2018/2019', '8,52117E+11', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019473', 'Ahmad Fauzianto', 'XI-TKJ.3', 'Bandung', '2005-04-19', 1, 'B', 'Jl. Karang Asih', '', 'Wiguna', 'Jl. Karang Asih', 'Wirausaha', '8231782195', '2018/2019', '85862721562', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019474', 'Akmal Hadiansyah', 'XI-TKJ.3', 'Bandung', '2008-07-05', 1, 'A', 'Gg. Rd. Jibja', '', 'Billy', 'Gg. Rd. Jibja', 'Wirausaha', '81318181185', '2018/2019', '81220859973', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019475', 'Anggi Anggraeni', 'XI-TKJ.3', 'Bandung', '2009-05-10', 0, 'O', 'Jl. Jatihandap', '', 'Cutarsa', 'Jl. Jatihandap', 'Polri / TNI', '82117222360', '2018/2019', '82215693306', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019476', 'Anugrah Putra', 'XI-TKJ.3', 'Bandung', '2013-02-07', 1, 'O', 'Jl. Terusan Awiligar Mayang', '', 'Sidiq', 'Jl. Terusan Awiligar Mayang', 'Pegawai Negeri Sipil (PNS)', '81313566670', '2018/2019', '85224726688', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019477', 'Azril Aprilian Nugraha', 'XI-TKJ.3', 'Bandung', '2012-12-07', 1, 'AB', 'Jl. Padasuka', '', 'Gunawan', 'Jl. Padasuka', 'Pegawai Negeri Sipil (PNS)', '81321415368', '2018/2019', '89690488573', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019478', 'Bagas Ari Perdana', 'XI-TKJ.3', 'Garut', '2003-07-10', 1, 'B', 'Sekemirung Kaler', '', 'Saputra', 'Sekemirung Kaler', 'Pegawai swasta', '82120045577', '2018/2019', '85863798608', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019479', 'Bayu Eko Putranto', 'XI-TKJ.3', 'Garut', '2012-09-30', 1, 'AB', 'Jl. Bbk. Hantap', '', 'Diki', 'Jl. Bbk. Hantap', 'Pegawai Negeri Sipil (PNS)', '85295207497', '2018/2019', '81394427056', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019480', 'Dani Dwi Hamdani', 'XI-TKJ.3', 'Bandung', '2006-06-17', 1, 'O', 'Jl. Sukarame', '', 'Hidayat', 'Jl. Sukarame', 'Wirausaha', '85713342934', '2018/2019', '81221800860', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019481', 'Devin Andre Kurniawan', 'XI-TKJ.3', 'Bandung', '2005-11-05', 1, 'O', 'Jl. Cinta Asih', '', 'Kurniawan', 'Jl. Cinta Asih', 'Wirausaha', '85721223430', '2018/2019', '88211308356', '11115717.jpg', 'tkj', '068/171019481/SMK-Mdk/2018', 'G011', '', ''),
('171019482', 'Fajar Nugraha', 'XI-TKJ.3', 'Bandung', '2009-12-30', 1, 'B', 'Jl. P.H.H. Mustofa', '', 'Nugi', 'Jl. P.H.H. Mustofa', 'Pegawai swasta', '83817464618', '2018/2019', '8812022109', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019483', 'Fanny Nurul Fitriani', 'XI-TKJ.3', 'Bandung', '2003-11-01', 0, 'B', 'Sukapura', 'Bronkitis', 'Fitrah', 'Sukapura', 'Pegawai swasta', '89613223677', '2018/2019', '8965375171', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019484', 'Fuzi Rachmat Saputra', 'XI-TKJ.3', 'Bandung', '2005-09-03', 1, 'AB', 'Jl. Cicadas Girang', '', 'Saputra', 'Jl. Cicadas Girang', 'Wirausaha', '89514047339', '2018/2019', '89502010098', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019485', 'Hardi Setia Permana', 'XI-TKJ.3', 'Bandung', '2005-05-11', 1, 'O', 'Jl. Cisitu lama', '', 'Pratama', 'Jl. Cisitu lama', 'Pegawai Negeri Sipil (PNS)', '89610732285', '2018/2019', '85759390048', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019486', 'Haris Sukma', 'XI-TKJ.3', 'Bandung', '2003-04-09', 1, 'O', 'Kp. Teropong Bintang', '', 'Saepul', 'Kp. Teropong Bintang', 'Pegawai Negeri Sipil (PNS)', '81321260484', '2018/2019', '8814564694', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019487', 'Hidayah Tullah', 'XI-TKJ.3', 'Tasikmalaya', '2011-04-10', 1, 'O', 'Jl. H. Syahroni', '', 'Dayat', 'Jl. H. Syahroni', 'Pegawai swasta', '8,95342E+11', '2018/2019', '88218147419', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019488', 'Idris Mardiansyah Hadi', 'XI-TKJ.3', 'Bandung', '2006-05-13', 1, 'AB', 'Jl. Babakan hantap', '', 'Hadian', 'Jl. Babakan hantap', 'Pegawai Negeri Sipil (PNS)', '82217781830', '2018/2019', '85793042712', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019489', 'Lukman Nul Hakim', 'XI-TKJ.3', 'Bandung', '2009-12-09', 1, 'B', 'Jl. Kebon Gedang', '', 'Hakim', 'Jl. Kebon Gedang', 'Wirausaha', '83821693523', '2018/2019', '8,95345E+11', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019490', 'Maulana Akbar', 'XI-TKJ.3', 'Bandung', '2007-04-21', 1, 'O', 'Jl. Baranangsiang', '', 'Akbar', 'Jl. Baranangsiang', 'Wirausaha', '89611376915', '2018/2019', '89607901711', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019491', 'Miftah Firdaus Chaniago', 'XI-TKJ.3', 'Malang', '2003-11-11', 1, 'B', 'Jl. Kebon kembang', '', 'Ogi', 'Jl. Kebon kembang', 'Polri / TNI', '8221403476', '2018/2019', '8382193380', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019492', 'Miftah Ramdhan Nurfauzan', 'XI-TKJ.3', 'Bandung', '2002-09-17', 1, 'A', 'Kp. Sukamantri II', '', 'Fauzan', 'Kp. Sukamantri II', 'Pegawai swasta', '89667406762', '2018/2019', '8,95338E+11', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019493', 'Muhammad Akmal Nurrizal', 'XI-TKJ.3', 'Bandung', '2002-07-04', 1, 'A', 'Jl. Cikoang kidul', '', 'Rizal', 'Jl. Cikoang kidul', 'Pegawai swasta', '8882114110', '2018/2019', '89669247411', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019494', 'Muhammad Fathin Nurohman', 'XI-TKJ.3', 'Bandung', '2004-04-10', 1, 'A', 'Jl. Padasuka', '', 'Rohman', 'Jl. Padasuka', 'Pegawai swasta', '82214387180', '2018/2019', '89674738897', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019495', 'Muhammad Rafli Syahputra', 'XI-TKJ.3', 'Bandung', '2008-02-24', 1, 'A', 'Jl. Sidomukti Tis', '', 'Syahputra', 'Jl. Sidomukti Tis', 'Pegawai swasta', '8984285294', '2018/2019', '85659127293', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019496', 'Nanda Amanda', 'XI-TKJ.3', 'Bekasi', '2005-01-16', 1, 'A', 'Jl. Pasirlayung atas', '', 'Amin', 'Jl. Pasirlayung atas', 'Pegawai swasta', '89694087480', '2018/2019', '8980174643', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019497', 'Raihan Ramadhani', 'XI-TKJ.3', 'Bandung', '2008-05-08', 1, 'A', 'Jl. Hegarmanah kulon', '', 'Usep', 'Jl. Hegarmanah kulon', 'Pegawai swasta', '89686735583', '2018/2019', '81909456374', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019498', 'Rangga Aditya Hadiansyah', 'XI-TKJ.3', 'Bandung', '2004-01-17', 1, 'B', 'Jl. Sekemerak babakan ', '', 'Ryan', 'Jl. Sekemerak babakan ', 'Pegawai swasta', '886243791', '2018/2019', '8221683585', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019499', 'Riffiandi Ilham Ramadhona', 'XI-TKJ.3', 'Bandung', '2010-04-11', 1, 'B', 'Jl. Pasteur', '', 'Rama', 'Jl. Pasteur', 'Pegawai Negeri Sipil (PNS)', '82240462762', '2018/2019', '88889436773', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019500', 'Riki Rivaldo Saputra', 'XI-TKJ.3', 'Bandung', '2011-11-08', 1, 'A', 'Jl. Ciumbuleuit', '', 'Aldo', 'Jl. Ciumbuleuit', 'Pegawai Negeri Sipil (PNS)', '8972929443', '2018/2019', '89623306706', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019501', 'Riyani Kusuma Dewi', 'XI-TKJ.3', 'Bandung', '2009-09-04', 0, 'O', 'Jl. Bojong Koneng', '', 'Dewa', 'Jl. Bojong Koneng', 'Pegawai Negeri Sipil (PNS)', '83820771502', '2018/2019', '88218783398', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019502', 'Sendi Permana Kusumah', 'XI-TKJ.3', 'Bandung', '2008-08-26', 1, 'O', 'Jl. Gunung Agung', '', 'Permadi', 'Jl. Gunung Agung', 'Pegawai Negeri Sipil (PNS)', '8980425862', '2018/2019', '83821846222', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019503', 'Surya Rohandi', 'XI-TKJ.3', 'Bandung', '2004-03-11', 1, 'AB', 'Jl. Setiabudi', '', 'Rohandi', 'Jl. Setiabudi', 'Wirausaha', '88818110562', '2018/2019', '83821678976', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019504', 'Syahrul Ristian Hermawan', 'XI-TKJ.3', 'Bandung', '2009-01-15', 1, 'A', 'Jl. Gagak', '', 'Hermawan', 'Jl. Gagak', 'Wirausaha', '8972440238', '2018/2019', '8,53183E+11', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019505', 'Tana Hardian', 'XI-TKJ.3', 'Bandung', '2010-09-28', 1, 'A', 'Jl. Bunisari', '', 'Hardi', 'Jl. Bunisari', 'Pegawai swasta', '83821465915', '2018/2019', '89661955125', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019506', 'Tian Adi Pratama', 'XI-TKJ.3', 'Bandung', '2002-11-20', 1, 'B', 'Jl. Karang Anyar', '', 'Adiansyah', 'Jl. Gagak', 'Pegawai swasta', '81322255422', '2018/2019', '88218513195', '11115717.jpg', 'tkj', '', 'G011', '', ''),
('171019613', 'Aji Ahmadin', 'XI-RPL.1', 'Cirebon', '2005-11-23', 1, 'B', 'Jl. Cisaranten', '', 'Feri', 'Jl. Cisaranten', 'Pegawai Negeri Sipil (PNS)', '8562112700', '2018/2019', '85846596306', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019614', 'Akbar Ramadhan', 'XI-RPL.1', 'Cirebon', '2007-08-30', 1, 'B', 'Jl. Jajaway', 'Maag', 'Galih', 'Jl. Jajaway', 'Pegawai Negeri Sipil (PNS)', '85891880588', '2018/2019', '82317188225', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019615', 'Alltaf Subhan Khalifa', 'XI-RPL.1', 'Bandung', '2003-02-26', 1, 'O', 'Jl. Sukarasa', '', 'Krisna', 'Jl. Sukarasa', 'Polri / TNI', '85720465823', '2018/2019', '85795724808', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019616', 'Anggela Widyehadi', 'XI-RPL.1', 'Bandung', '2003-04-24', 1, 'O', 'Komplek Griya Winaga', '', 'Ilham', 'Komplek Griya Winaga', 'Polri / TNI', '85242720712', '2018/2019', '8562112700', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019617', 'Anugrah Roby Yuniar', 'XI-RPL.1', 'Bandung', '2005-08-16', 1, 'A', 'Jl. Kampung Nusa', '', 'Okky', 'Jl. Kampung Nusa', 'Pegawai Negeri Sipil (PNS)', '81322298674', '2018/2019', '82395981447', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019618', 'Apriliano Virgias', 'XI-RPL.1', 'Bandung', '2010-03-30', 1, 'AB', 'Jl. Aceh', '', 'Firman', 'Jl. Aceh', 'Wirausaha', '8122243893', '2018/2019', '82126639619', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019619', 'Chandra Maulana Husen', 'XI-RPL.1', 'Bandung', '2011-08-17', 1, 'B', 'Jl. Pasir Impun', '', 'Safei', 'Jl. Pasir Impun', 'Pegawai swasta', '82316272178', '2018/2019', '82126639619', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019620', 'Didan Rahmana Putra', 'XI-RPL.1', 'Bandung', '2012-12-03', 1, 'O', 'Pasir Kaliki timur', '', 'Kurniawan', 'Pasir Kaliki timur', 'Pegawai swasta', '1102405998', '2018/2019', '81394427056', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019621', 'Erlan Hermawan', 'XI-RPL.1', 'Bandung', '2011-10-05', 1, 'O', 'Jl. Terusan Psm', '', 'Panji', 'Jl. Terusan Psm', 'Wirausaha', '85863219267', '2018/2019', '81322625196', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019622', 'Ernanda Pangestu', 'XI-RPL.1', 'Garut', '2007-03-29', 1, 'B', 'Jl. Haji Yasin', '', 'Amirudin', 'Jl. Haji Yasin', 'Pegawai Negeri Sipil (PNS)', '85722654615', '2018/2019', '85720465823', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019623', 'Fajar Maulana', 'XI-RPL.1', 'Cimahi', '2004-11-19', 1, 'A', 'Jl. Ir. H. Juanda Kanayakan', '', 'Tiyas', 'Jl. Ir. H. Juanda Kanayakan', 'Pegawai Negeri Sipil (PNS)', '82118287114', '2018/2019', '85318463281', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019624', 'Genaldi Rizky Budiman', 'XI-RPL.1', 'Majalengka', '2006-06-18', 1, 'A', 'Kp. Panyandaan', '', 'Triyadi', 'Kp. Panyandaan', 'Pegawai swasta', '85795525433', '2018/2019', '85786854363', '11115717.jpg', 'rpl', '053/171019624/SMK-Mdk/2018', 'G062', '', ''),
('171019625', 'Ghilman Akbar Eka Pradilla', 'XI-RPL.1', 'Bandung', '2004-10-17', 1, 'A', 'Jl. Awiligar', '', 'Doni', 'Jl. Awiligar', 'Pegawai Negeri Sipil (PNS)', '81222987943', '2018/2019', '81213969807', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019626', 'Halimudin Nugraha', 'XI-RPL.1', 'Bandung', '2002-04-15', 1, 'O', 'Jl. Kaum Kidul', 'Asma', 'Efendi', 'Jl. Kaum Kidul', 'Wirausaha', '82115980625', '2018/2019', '81213969807', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019627', 'Iqbal Bayyinah Bilhaqqi', 'XI-RPL.1', 'Bandung', '2011-06-16', 1, 'O', 'Jl. Cimuncang', '', 'Alvin', 'Jl. Cimuncang', 'Wirausaha', '85322784839', '2018/2019', '82219064927', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019628', 'Mochamad Raihan', 'XI-RPL.1', 'Bandung', '2013-03-13', 1, 'AB', 'Jl. Wastu Kencana', '', 'Herdian', 'Jl. Wastu Kencana', 'Polri / TNI', '89643346046', '2018/2019', '82127896785', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019629', 'Mohamad Ramadhan', 'XI-RPL.1', 'Sumedang', '2002-06-24', 1, 'O', 'Jl. Cihampelas', '', 'Surya', 'Jl. Cihampelas', 'Pegawai swasta', '85221240555', '2018/2019', '82317182195', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019630', 'Muhamad Rizal Rhamadan', 'XI-RPL.1', 'Bandung', '2008-04-23', 1, 'O', 'Jl. Kb. Kembang', '', 'Zaky', 'Jl. Kb. Kembang', 'Pegawai swasta', '8562112700', '2018/2019', '82316272178', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019631', 'Muhammad Bagas Adikara', 'XI-RPL.1', 'Bandung', '2009-07-13', 1, 'B', 'Jl. Sadang Sari II', '', 'Tria', 'Jl. Sadang Sari II', 'Pegawai Negeri Sipil (PNS)', '85864428207', '2018/2019', '85722654615', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019632', 'Muhammad Rendi Nugraha', 'XI-RPL.1', 'Garut', '2007-06-12', 1, 'AB', 'Jl. Parakan Saat', '', 'Zainul', 'Jl. Parakan Saat', 'Wirausaha', '85320286207', '2018/2019', '81224019517', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019633', 'Muhammad Rizky Rabbani', 'XI-RPL.1', 'Bandung', '2013-03-06', 1, 'O', 'Jl. Cipedes tengah', '', 'Zakaria', 'Jl. Cipedes tengah', 'Pegawai Negeri Sipil (PNS)', '8812095557', '2018/2019', '81321778812', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019634', 'Naufal Faza Fadhilah', 'XI-RPL.1', 'Bandung', '2008-03-01', 1, 'O', 'Jl. Awiligar', '', 'Ahmad', 'Jl. Awiligar', 'Polri / TNI', '85795161480', '2018/2019', '89634199188', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019635', 'Putra Sanjaya', 'XI-RPL.1', 'Bandung', '2009-02-07', 1, 'O', 'Jl. Kiputih dalam', '', 'Wijaya', 'Jl. Kiputih dalam', 'Polri / TNI', '85721229669', '2018/2019', '81395266674', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019636', 'Putri Ikhsani Dewi', 'XI-RPL.1', 'Bandung', '2009-06-12', 0, 'B', 'Jl. Bojong Koneng', '', 'Ikhsan', 'Jl. Bojong Koneng', 'Pegawai Negeri Sipil (PNS)', '85794994915', '2018/2019', '85863932247', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019637', 'Raden Ray Andyka Putera', 'XI-RPL.1', 'Bandung', '2003-09-17', 1, 'A', 'Jl. Bangbayang timur', '', 'Dika', 'Jl. Bangbayang timur', 'Wirausaha', '8985454129', '2018/2019', '89661545306', '11115717.jpg', 'rpl', '045/171019637/SMK-Mdk/2018', 'G062', '', ''),
('171019638', 'Radifa Nurdika Farida', 'XI-RPL.1', 'Bandung', '2011-02-04', 1, 'O', 'Jl. Sekeloa tengah', '', 'Farid', 'Jl. Sekeloa tengah', 'Pegawai swasta', '83822625096', '2018/2019', '89520951723', '11115717.jpg', 'rpl', '046/171019638/SMK-Mdk/2018', 'G062', '', ''),
('171019639', 'Renaldy Jaya Poernomo', 'XI-RPL.1', 'Bandung', '2005-07-04', 1, 'O', 'Jl. Gardujati', '', 'Poernomo', 'Jl. Gardujati', 'Pegawai swasta', '8986174876', '2018/2019', '8992595223', '11115717.jpg', 'rpl', '047/171019639/SMK-Mdk/2018', 'G062', '', ''),
('171019640', 'Restu Alif Ardiansyah', 'XI-RPL.1', 'Bandung', '2013-09-28', 1, 'AB', 'Jl. Jend. A. Yani ', '', 'Ardin', 'Jl. Jend. A. Yani ', 'Wirausaha', '89648904904', '2018/2019', '85956075367', '11115717.jpg', 'rpl', '048/171019640/SMK-Mdk/2018', 'G062', '', ''),
('171019641', 'Robi Nugraha', 'XI-RPL.1', 'Bandung', '2012-02-01', 1, 'B', 'Jl. Jatihandap', '', 'Nunu', 'Jl. Jatihandap', 'Pegawai Negeri Sipil (PNS)', '87722255183', '2018/2019', '87822330898', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019642', 'Sultan Adam', 'XI-RPL.1', 'Bekasi', '2008-04-24', 1, 'AB', 'Jl. Tubagus Ismail', '', 'Sahdam', 'Jl. Tubagus Ismail', 'Pegawai Negeri Sipil (PNS)', '89662760220', '2018/2019', '89664276710', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019643', 'Tirto Rizaldy', 'XI-RPL.1', 'Bandung', '2003-08-08', 1, 'O', 'Jl. Sekeloa timur', '', 'Aldy', 'Jl. Sekeloa timur', 'Pegawai swasta', '88218640816', '2018/2019', '89681508756', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019644', 'Wildan Adzvan Fadillah', 'XI-RPL.1', 'Bandung', '2010-12-09', 1, 'AB', 'Jl. Cikutra', '', 'Adnan', 'Jl. Cikutra', 'Pegawai Negeri Sipil (PNS)', '8989141172', '2018/2019', '82217063687', '11115717.jpg', 'rpl', '050/171019644/SMK-Mdk/2018', 'G062', '', ''),
('171019645', 'Yanuar Ahadi', 'XI-RPL.1', 'Bandung', '2009-11-03', 1, 'AB', 'Jl. Marta', '', 'Yana', 'Jl. Marta', 'Pegawai swasta', '89671591400', '2018/2019', '89631051528', '11115717.jpg', 'rpl', '051/171019645/SMK-Mdk/2018', 'G062', '', ''),
('171019646', 'Yazid Ali Nurdienul Haq', 'XI-RPL.1', 'Malang', '2002-05-31', 1, 'O', 'Jl. Sindang Sari', '', 'Nurdien', 'Jl. Sindang Sari', 'Pegawai swasta', '8648750767', '2018/2019', '81313226200', '11115717.jpg', 'rpl', '', 'G062', '', ''),
('171019647', 'Yeni Anggraeni', 'XI-RPL.1', 'Tasikmalaya', '2007-07-21', 0, 'AB', 'Jl. Bojong Koneng', '', 'Angga', 'Jl. Bojong Koneng', 'Pegawai swasta', '85956426299', '2018/2019', '8980412375', '11115717.jpg', 'rpl', '052/171019647/SMK-Mdk/2018', 'G062', '', ''),
('171019648', 'Zafier Mubarak Ahmad', 'XI-RPL.1', 'Bandung', '2013-10-24', 1, 'AB', 'Gg. Reuma tengah ', '', 'Ahmad', 'Gg. Reuma tengah ', 'Pegawai swasta', '85861296742', '2018/2019', '89693543330', '11115717.jpg', 'rpl', '049/171019648/SMK-Mdk/2018', 'G062', '', ''),
('171019649', 'Alika Apriyani', 'XI-AP.1', 'Bandung', '2005-09-01', 0, 'A', 'Jl. Awiligar', 'Maag', 'Yayan', 'Jl. Awiligar', 'Wirausaha', '85722602976', '2018/2019', '89647338166', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019650', 'Alma Cipta Nanda', 'XI-AP.1', 'Majalengka', '2011-03-01', 0, 'AB', 'Jl. Haji Syahroni', '', 'Sunandar', 'Jl. Haji Syahroni', 'Polri / TNI', '8122106693', '2018/2019', '85795630001', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019651', 'Annisa Nur Rachmatia', 'XI-AP.1', 'Bandung', '2005-07-25', 0, 'O', 'Jl. Cikutra Barat', '', 'Rachmat', 'Jl. Cikutra Barat', 'Polri / TNI', '81321113411', '2018/2019', '8814566327', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019652', 'Arum Andini', 'XI-AP.1', 'Bandung', '2004-10-22', 0, 'B', 'Jl. Awiligar Selatan', '', 'Andi', 'Jl. Awiligar Selatan', 'Pegawai Negeri Sipil (PNS)', '81572256336', '2018/2019', '88218775110', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019653', 'Cici Yasni Rahmawati', 'XI-AP.1', 'Bandung', '2007-07-27', 0, 'A', 'Jl. Sukabumi dalam', '', 'Rachman', 'Jl. Sukabumi dalam', 'Pegawai Swasta', '81220302619', '2018/2019', '89625963655', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019654', 'Citra Nurshafa Fauziyah', 'XI-AP.1', 'Cirebon', '2004-12-07', 0, 'B', 'Jl. Ciumbuleuit', '', 'Fauzi', 'Jl. Ciumbuleuit', 'Pegawai Negeri Sipil (PNS)', '81322701296', '2018/2019', '82318856315', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019655', 'Deviana Safitri', 'XI-AP.1', 'Gresik', '2011-07-17', 0, 'AB', 'Jl. Tongkeng', '', 'Fitrah', 'Jl. Tongkeng', 'Wirausaha', '82117555341', '2018/2019', '85720359882', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019656', 'Diana Fitri', 'XI-AP.1', 'Bandung', '2007-09-23', 0, 'O', 'Jl. Babakan Cihapit', '', 'Pandi', 'Jl. Babakan Cihapit', 'Pegawai Swasta', '82117200058', '2018/2019', '87722070273', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019657', 'Dwi Cahyani Bintari', 'XI-AP.1', 'Cilacap', '2010-07-04', 0, 'A', 'Jl. Karang Tineung', '', 'Cahya', 'Jl. Karang Tineung', 'Polri / TNI', '85320020760', '2018/2019', '89657271985', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019658', 'Fauziah Amani Putri', 'XI-AP.1', 'Bandung', '2007-04-19', 0, 'B', 'Jl. Punclut', '', 'Agung', 'Jl. Punclut', 'Polri / TNI', '85723131243', '2018/2019', '8985666417', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019659', 'Hilma Nur Syahaadah', 'XI-AP.1', 'Bandung', '2003-08-05', 0, 'A', 'Jl. Sukajadi', '', 'Hilmi', 'Jl. Sukajadi', 'Polri / TNI', '85222000123', '2018/2019', '85722015686', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019660', 'Indri Agustini', 'XI-AP.1', 'Bandung', '2007-08-14', 0, 'B', 'Jl. P.H.H Mustofa', '', 'Agus', 'Jl. P.H.H Mustofa', 'Pegawai Negeri Sipil (PNS)', '89674734328', '2018/2019', '8985026539', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019661', 'Khameliana', 'XI-AP.1', 'Bandung', '2013-01-22', 0, 'AB', 'Jl. Gegerkalong', '', 'Yana', 'Jl. Gegerkalong', 'Pegawai Swasta', '89609394243', '2018/2019', '89686911435', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019662', 'Meilana Savitri', 'XI-AP.1', 'Bandung', '2011-10-02', 0, 'O', 'Jl. Gudang Selatan', '', 'Nana', 'Jl. Gudang Selatan', 'Pegawai Negeri Sipil (PNS)', '83820796202', '2018/2019', '82320279988', '11115717.jpg', 'ap', '004/171019662/SMK-Mdk/2018', 'G040', 'ab-171019662.pdf', 'ns-171019662.pdf'),
('171019663', 'Meilani Nur Alifah', 'XI-AP.1', 'Bandung', '2009-01-23', 0, 'A', 'Jl. Asri ', '', 'Ali', 'Jl. Asri ', 'Wirausaha', '8990225457', '2018/2019', '89656064087', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019664', 'Melinda Putri', 'XI-AP.1', 'Jakarta', '2010-08-04', 0, 'B', 'Jl. Cicadas', '', 'Dani', 'Jl. Cicadas', 'Pegawai Swasta', '2270797391', '2018/2019', '81220035651', '11115717.jpg', 'ap', '002/171019664/SMK-Mdk/2018', 'G040', 'ab-171019664.pdf', 'ns-171019664.pdf'),
('171019666', 'Mira Santika', 'XI-AP.1', 'Bandung', '2003-09-15', 0, 'A', 'Jl. Bukit Pakar Timur V', '', 'Tatang', 'Jl. Bukit Pakar Timur V', 'Pegawai Swasta', '85793002198', '2018/2019', '81809969159', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019667', 'Nadila Widiasti', 'XI-AP.1', 'Bandung', '2012-09-18', 0, 'B', 'Jl. Bukit Pakar Utara', '', 'Wildan', 'Jl. Bukit Pakar Utara', 'Pegawai Swasta', '8987122335', '2018/2019', '85722123567', '11115717.jpg', 'ap', '003/171019667/SMK-Mdk/2018', 'G040', 'ab-171019667.pdf', 'ns-171019667.pdf'),
('171019668', 'Novita Ariyanti', 'XI-AP.1', 'Bandung', '2006-04-28', 0, 'AB', 'Jl. Cikutra Baru', '', 'Ari', 'Jl. Cikutra Baru', 'Pegawai Swasta', '8987002649', '2018/2019', '85793266422', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019669', 'Nur Jama\'ah Wulan Dini', 'XI-AP.1', 'Bandung', '2013-07-27', 0, 'O', 'Jl. Ciumbuleuit', '', 'Dadan', 'Jl. Ciumbuleuit', 'Pegawai Negeri Sipil (PNS)', '89653066146', '2018/2019', '85861957545', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019670', 'Pitria Humaira', 'XI-AP.1', 'Ciamis', '2009-12-05', 0, 'A', 'Jl. Bojong Koneng', '', 'Hamid', 'Jl. Bojong Koneng', 'Pegawai Swasta', '89698390273', '2018/2019', '89678833107', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019671', 'Putri Jimina Hutapea', 'XI-AP.1', 'Medan', '2010-11-24', 0, 'B', 'Komp. Pasirjati elok ', '', 'Jeje', 'Komp. Pasirjati elok ', 'Pegawai Swasta', '81313632511', '2018/2019', '83820685543', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019672', 'Razma Putri Septiana', 'XI-AP.1', 'Bandung', '2002-01-03', 0, 'A', 'Komp. PLN PLTA bengkok', '', 'Septa', 'Komp. PLN PLTA bengkok', 'Pegawai Negeri Sipil (PNS)', '87825398169', '2018/2019', '83822398764', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019673', 'Rifa Sukmayani', 'XI-AP.1', 'Bandung', '2012-04-30', 0, 'B', 'Jl. Sukagalih', '', 'Sukma', 'Jl. Sukagalih', 'Pegawai Swasta', '85624437105', '2018/2019', '83820352054', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019674', 'Rika Amalia', 'XI-AP.1', 'Bandung', '2010-12-22', 0, 'AB', 'Jl. Dulatif', '', 'Andi', 'Jl. Dulatif', 'Polri / TNI', '85794669950', '2018/2019', '89634375114', '11115717.jpg', 'ap', '001/171019674/SMK-Mdk/2018', 'G040', 'ab-171019674.pdf', 'ns-171019674.pdf'),
('171019675', 'Rini Nurilbiah', 'XI-AP.1', 'Bandung', '2005-12-05', 0, 'O', 'Jl. Sidanglaya', '', 'Beni', 'Jl. Sidanglaya', 'Pegawai Swasta', '89677301505', '2018/2019', '89631174116', '11115717.jpg', 'ap', '', 'G040', '', '');
INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jk`, `gd`, `alamat_siswa`, `cat_kes`, `nm_ortu`, `alamat_ortu`, `kerja_ortu`, `no_hp_ortu`, `thn_ajaran`, `no_hp`, `foto`, `kode_jurusan`, `nomor_jurnal`, `kode_guru`, `berkas_absen`, `berkas_nilai`) VALUES
('171019676', 'Selly Amanda', 'XI-AP.1', 'Bandung', '2004-10-25', 0, 'A', 'Jl. Cinta Asih', '', 'Edi', 'Jl. Cinta Asih', 'Pegawai Negeri Sipil (PNS)', '8889407861', '2018/2019', '8960949185', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019677', 'Sifa Salsabila', 'XI-AP.1', 'Bandung', '2004-11-28', 0, 'B', 'Jl. Jatihandap ', '', 'Ahmad', 'Jl. Jatihandap ', 'Pegawai Swasta', '89666137349', '2018/2019', '8996006336', '11115717.jpg', 'ap', '005/171019677/SMK-Mdk/2018', 'G040', 'ab-171019677.pdf', 'ns-171019677.pdf'),
('171019678', 'Silvia Apriyani', 'XI-AP.1', 'Bandung', '2006-01-30', 0, 'A', 'Cibunut Utara', '', 'Apriyanto', 'Cibunut Utara', 'Polri / TNI', '89656272238', '2018/2019', '89655158123', '11115717.jpg', 'ap', '006/171019678/SMK-Mdk/2018', 'G040', '', ''),
('171019679', 'Syifatunnisa Nurrohmah', 'XI-AP.1', 'Bandung', '2011-06-02', 0, 'B', 'Kp. Telekdengkiok ', '', 'Rohman', 'Kp. Telekdengkiok ', 'Pegawai Swasta', '85795138199', '2018/2019', '83821595116', '11115717.jpg', 'ap', '007/171019679/SMK-Mdk/2018', 'G040', 'ab-171019679.pdf', 'ns-171019679.pdf'),
('171019680', 'Tanti Tresnaningrum', 'XI-AP.1', 'Bandung', '2009-02-15', 0, 'AB', 'Jl. Jamaras', '', 'Tresna', 'Jl. Jamaras', 'Pegawai Negeri Sipil (PNS)', '85720055463', '2018/2019', '89691886763', '11115717.jpg', 'ap', '008/171019680/SMK-Mdk/2018', 'G040', 'ab-171019680.pdf', 'ns-171019680.pdf'),
('171019688', 'Widya Syuri Hermanto', 'XI-AP.1', 'Bandung', '2005-08-11', 0, 'O', 'Jl. Gudang Selatan', '', 'Herman', 'Jl. Gudang Selatan', 'Pegawai Swasta', '89656619158', '2018/2019', '83820453600', '11115717.jpg', 'ap', '', 'G040', '', ''),
('171019715', 'Alvina Damayanti', 'XI-AP.2', 'Bandung', '2006-06-17', 0, 'A', 'Jl. Cijambe', '', 'Yanto', 'Jl. Cijambe', 'Polri / TNI', '89667397462', '2018/2019', '89655443322', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019716', 'Amelia Enitha', 'XI-AP.2', 'Bandung', '2012-10-26', 0, 'B', 'Jl. H. Abun', '', 'Sutarya', 'Jl. H. Abun', 'Pegawai Swasta', '89712354383', '2018/2019', '2295220024', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019717', 'Anisa Nursiana Gunawan', 'XI-AP.2', 'Bandung', '2002-09-07', 0, 'A', 'Jl. Maribaya Timur', '', 'Gunawan', 'Jl. Maribaya Timur', 'Pegawai Negeri Sipil (PNS)', '89613062711', '2018/2019', '89663642458', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019718', 'Ayu Wandira', 'XI-AP.2', 'Bandung', '2010-08-27', 0, 'B', 'Jl. Palasari', '', 'Wandi', 'Jl. Palasari', 'Pegawai Swasta', '87823085269', '2018/2019', '83820048911', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019719', 'Bintang Dhyva Sepriani', 'XI-AP.2', 'Bandung', '2011-03-22', 0, 'AB', 'Jl. Terusan Sukamulya', '', 'Septa', 'Jl. Terusan Sukamulya', 'Polri / TNI', '87722347825', '2018/2019', '83822668663', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019720', 'Deliyani Eka Putri', 'XI-AP.2', 'Garut', '2009-09-25', 0, 'O', 'Jl. Sariwates Timur', '', 'Yana', 'Jl. Sariwates Timur', 'Pegawai Swasta', '85721516708', '2018/2019', '89685260486', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019721', 'Devi Sri Wahyuni', 'XI-AP.2', 'Madiun', '2003-04-05', 0, 'A', 'Jl. Mars Dirgahayu', '', 'Wahyu', 'Jl. Mars Dirgahayu', 'Pegawai Negeri Sipil (PNS)', '8984818222', '2018/2019', '87825310062', '11115717.jpg', 'ap', '014/171019721/SMK-Mdk/2018', 'G013', '', ''),
('171019722', 'Devia Suhana Siswati', 'XI-AP.2', 'Bandung', '2006-02-01', 0, 'B', 'Jl. Padasuka Atas', '', 'Suhana', 'Jl. Padasuka Atas', 'Pegawai Negeri Sipil (PNS)', '83820485595', '2018/2019', '8988018061', '11115717.jpg', 'ap', '016/171019722/SMK-Mdk/2018', 'G013', '', ''),
('171019723', 'Dina Damayanti', 'XI-AP.2', 'Bandung', '2010-04-03', 0, 'A', 'Jl. Pasteur', '', 'Damar', 'Jl. Pasteur', 'Pegawai Negeri Sipil (PNS)', '85732042510', '2018/2019', '89636751245', '11115717.jpg', 'ap', '015/171019723/SMK-Mdk/2018', 'G013', '', ''),
('171019724', 'Eka Ayu Yuliarni', 'XI-AP.2', 'Bandung', '2007-09-24', 0, 'B', 'Jl. Karangtieung Indah', '', 'Yuslianto', 'Jl. Karangtieung Indah', 'Pegawai Negeri Sipil (PNS)', '8996227560', '2018/2019', '89687266534', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019725', 'Endang Elisafira', 'XI-AP.2', 'Bandung', '2011-02-12', 0, 'AB', 'Jl. Raya Dago', '', 'Entang', 'Jl. Raya Dago', 'Pegawai Negeri Sipil (PNS)', '81573432151', '2018/2019', '8889425198', '11115717.jpg', 'ap', '019/171019725/SMK-Mdk/2018', 'G013', '', ''),
('171019726', 'Eri Sahmawati', 'XI-AP.2', 'Bandung', '2009-01-29', 0, 'O', 'Jl. Leumahneundet', '', 'Wanda', 'Jl. Leumahneundet', 'Polri / TNI', '8122054956', '2018/2019', '89631558385', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019727', 'Ira Meisyaroh', 'XI-AP.2', 'Bandung', '2007-07-31', 0, 'A', 'Jl. Pasir Honje', '', 'Mamat', 'Jl. Pasir Honje', 'Wirausaha', '81572144282', '2018/2019', '8,95341E+11', '11115717.jpg', 'ap', '018/171019727/SMK-Mdk/2018', 'G013', '', ''),
('171019728', 'Jesika Sitriani Kusmara', 'XI-AP.2', 'Bandung', '2008-04-21', 0, 'B', 'Jl.  Kebon Jayanti', '', 'Kusmara', 'Jl.  Kebon Jayanti', 'Pegawai Negeri Sipil (PNS)', '82321856323', '2018/2019', '89628978208', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019729', 'Lyra Annisya Fasya', 'XI-AP.2', 'Bandung', '2002-09-20', 0, 'AB', 'Jl. Cigadung Raya Barat', '', 'Fandi', 'Jl. Cigadung Raya Barat', 'Pegawai Swasta', '83820000670', '2018/2019', '89507077450', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019730', 'Mala Tarisa', 'XI-AP.2', 'Bandung', '2005-10-17', 0, 'O', 'Jl. Pahlawan', '', 'Tarudin', 'Jl. Pahlawan', 'Pegawai Swasta', '85659370818', '2018/2019', '82218829586', '11115717.jpg', 'ap', '010/171019730/SMK-Mdk/2018', 'G013', 'ab-171019730.pdf', 'ns-171019730.pdf'),
('171019731', 'Maulidya Rizki Fahrunisa', 'XI-AP.2', 'Bandung', '2013-08-28', 0, 'A', 'Jl. Purwakarta Raya', '', 'Taufik', 'Jl. Purwakarta Raya', 'Polri / TNI', '81910063307', '2018/2019', '89609051715', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019732', 'Maya Hariah Komalia Sujarlan', 'XI-AP.2', 'Bandung', '2003-01-10', 0, 'B', 'Jl. Tentram Dalam', '', 'Sujarlan', 'Jl. Tentram Dalam', 'Pegawai Negeri Sipil (PNS)', '81321704576', '2018/2019', '85862982287', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019733', 'Melisa Sabila', 'XI-AP.2', 'Bandung', '2003-06-20', 0, 'AB', 'Jl. Cukang Kawung', '', 'Ilham', 'Jl. Cukang Kawung', 'Pegawai Negeri Sipil (PNS)', '81214481740', '2018/2019', '89622133703', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019734', 'Mila Cantika Rahayu', 'XI-AP.2', 'Bandung', '2006-11-05', 0, 'O', 'Jl. Dr. Setiabudhi', '', 'Wijaya', 'Jl. Dr. Setiabudhi', 'Polri / TNI', '81323333633', '2018/2019', '89633891942', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019735', 'Murni Apriandini', 'XI-AP.2', 'Bandung', '2005-08-28', 0, 'A', 'Jl. Bukit Pakar Utara', '', 'Saepudin', 'Jl. Bukit Pakar Utara', 'Wirausaha', '81809969159', '2018/2019', '89655158123', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019736', 'Nadiyah Indri Widiyaningsih', 'XI-AP.2', 'Bandung', '2009-12-24', 0, 'B', 'Jl. Tubagus Ismail', '', 'Sopian', 'Jl. Tubagus Ismail', 'Pegawai Negeri Sipil (PNS)', '85722123567', '2018/2019', '83821595116', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019737', 'Nur Assyifa Aulia Manda', 'XI-AP.2', 'Bandung', '2009-10-20', 0, 'AB', 'Jl. Bukit Pakar Utara', '', 'Efendi', 'Jl. Bukit Pakar Utara', 'Pegawai Swasta', '85793266422', '2018/2019', '89691886763', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019738', 'Nur Intan', 'XI-AP.2', 'Bandung', '2004-03-24', 0, 'O', 'Kp. Bojongjambu ', '', 'Wahyu', 'Kp. Bojongjambu ', 'Pegawai Swasta', '85861957545', '2018/2019', '83820453600', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019739', 'Nurul Apriliani', 'XI-AP.2', 'Bandung', '2007-12-27', 0, 'A', 'Jl. Mekar Jaya', '', 'Darmawan', 'Jl. Mekar Jaya', 'Polri / TNI', '89678833107', '2018/2019', '85320124550', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019740', 'Olvianita', 'XI-AP.2', 'Bandung', '2004-01-26', 0, 'B', 'Jl. Bukit Jarian I', '', 'Septian', 'Jl. Bukit Jarian I', 'Pegawai Negeri Sipil (PNS)', '83820685543', '2018/2019', '89656530473', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019741', 'Putri Amalia Aprilianti', 'XI-AP.2', 'Bandung', '2010-07-24', 0, 'AB', 'Jl. Resot Dago Pakar', '', 'Veri', 'Jl. Resot Dago Pakar', 'Pegawai Negeri Sipil (PNS)', '83822398764', '2018/2019', '89657101517', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019742', 'Risa Aryanti', 'XI-AP.2', 'Bandung', '2007-07-23', 0, 'O', 'Jl. Lebak ', '', 'Wendi', 'Jl. Lebak ', 'Polri / TNI', '83820352054', '2018/2019', '87722295942', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019743', 'Salsabiil Mutiara Hikmah', 'XI-AP.2', 'Bandung', '2009-05-03', 0, 'A', 'Jl. Simpang Pahlawan', '', 'Herman', 'Jl. Simpang Pahlawan', 'Wirausaha', '89663250451', '2018/2019', '83827466580', '11115717.jpg', 'ap', '009/171019743/SMK-Mdk/2018', 'G013', 'ab-171019743.pdf', 'ns-171019743.pdf'),
('171019744', 'Sofyanty', 'XI-AP.2', 'Bandung', '2008-09-20', 0, 'B', 'Kp. Babakan Cimahi', '', 'Engkus', 'Kp. Babakan Cimahi', 'Pegawai Negeri Sipil (PNS)', '89634375114', '2018/2019', '89631199830', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019745', 'Vanesa Aurelia', 'XI-AP.2', 'Bandung', '2011-07-21', 0, 'AB', 'Jl. P.H.H Mustofa', '', 'Hendra', 'Jl. P.H.H Mustofa', 'Pegawai Swasta', '89631174116', '2018/2019', '894431481', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019746', 'Vedia Wanty Kusumah', 'XI-AP.2', 'Bandung', '2011-01-20', 0, 'O', 'Jl. Bunisari ', '', 'Budi', 'Jl. Bunisari ', 'Pegawai Swasta', '89660949185', '2018/2019', '89650135392', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019747', 'Widya Putri Permana', 'XI-AP.2', 'Bandung', '2010-03-23', 0, '', 'Jl. Cihaur bangbayang', '', 'Prasetyo', 'Jl. Cihaur bangbayang', 'Polri / TNI', '8996006336', '2018/2019', '89654967837', '11115717.jpg', 'ap', '', 'G013', '', ''),
('171019748', 'Amagea Zafira', 'XI-AP.3', 'Bandung', '2013-10-27', 0, 'A', 'Jl. Madtasan', 'Asma', 'Otong', 'Jl. Madtasan', 'Pegawai Negeri Sipil (PNS)', '81320655678', '2018/2019', '8893616363', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019749', 'Ayulia Anasta', 'XI-AP.3', 'Bandung', '2012-01-19', 0, 'B', 'Jl. Cemara IV', '', 'Kusnadi', 'Jl. Cemara IV', 'Polri / TNI', '8122242803', '2018/2019', '82218829893', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019750', 'Ayunda Fitri Fandani', 'XI-AP.3', 'Garut', '2002-08-12', 0, 'AB', 'Jl. Picung', '', 'Suryandi', 'Jl. Picung', 'Wirausaha', '8157162914', '2018/2019', '81221575949', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019751', 'Azhari Shofy Al Haq', 'XI-AP.3', 'Bandung', '2011-07-24', 0, 'O', 'Jl. Raya Golf', '', 'Tatang', 'Jl. Raya Golf', 'Pegawai Negeri Sipil (PNS)', '85295457188', '2018/2019', '88809435068', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019752', 'Dewi Apryyani', 'XI-AP.3', 'Bandung', '2009-02-28', 0, 'A', 'Jl. Awiligar Selatan', '', 'Anwar ', 'Jl. Awiligar Selatan', 'Pegawai Negeri Sipil (PNS)', '81394417766', '2018/2019', '89655174467', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019753', 'Dhannisha Yolanda Gumilar', 'XI-AP.3', 'Bandung', '2011-11-18', 0, 'B', 'Jl. Cemara IV', '', 'Andri', 'Jl. Cemara IV', 'Pegawai Swasta', '2270489069', '2018/2019', '89633495078', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019754', 'Elza Novianty Rahmaningsih', 'XI-AP.3', 'Bandung', '2005-02-22', 0, 'AB', 'Jl. Jatihandap', '', 'Saepuloh', 'Jl. Jatihandap', 'Pegawai Swasta', '8122170291', '2018/2019', '85721412578', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019755', 'Feby Febriany', 'XI-AP.3', 'Bandung', '2004-05-09', 0, 'O', 'Jl. Cikadut ', '', 'Asep', 'Jl. Cikadut', 'Wirausaha', '82121250904', '2018/2019', '82217688696', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019756', 'Firda Adelia Santosa', 'XI-AP.3', 'Bandung', '2010-02-22', 0, 'A', 'Jl. Sukabumi dalam', '', 'Santosa', 'Jl. Sukabumi dalam', 'Polri / TNI', '85659917708', '2018/2019', '89667634196', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019757', 'Fitriani', 'XI-AP.3', 'Bandung', '2009-01-16', 0, 'B', 'Jl. Ciporeat', '', 'Dedi', 'Jl. Ciporeat', 'Pegawai Negeri Sipil (PNS)', '8122192302', '2018/2019', '89516490416', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019758', 'Giani Trisna Damayanti', 'XI-AP.3', 'Bandung', '2012-09-08', 0, 'O', 'Jl. Sekeloa Selatan', '', 'Dadan', 'Jl. Sekeloa Selatan', 'Pegawai Swasta', '89663240133', '2018/2019', '83822811090', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019759', 'Hasti  Nur Dianti', 'XI-AP.3', 'Bandung', '2009-08-10', 0, 'A', 'Jl. Sidomukti', '', 'Nurdin', 'Jl. Sidomukti', 'Wirausaha', '8,96779E+11', '2018/2019', '83829396017', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019760', 'Hesti Rizkiani', 'XI-AP.3', 'Bandung', '2012-10-09', 0, 'B', 'Jl. PSM Kiaracondong', '', 'Rizky', 'Jl. PSM Kiaracondong', 'Polri / TNI', '8985188219', '2018/2019', '89609108150', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019761', 'Ilmara Nurani', 'XI-AP.3', 'Bandung', '2007-11-17', 0, 'AB', 'Jl. Ujung berung', '', 'Ilham', 'Jl. Ujung berung', 'Pegawai Negeri Sipil (PNS)', '85793635144', '2018/2019', '85956723455', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019762', 'Ira Juwita Sari', 'XI-AP.3', 'Bandung', '2002-02-10', 0, 'O', 'Kp. Cirateu Peuntas', '', 'Juju', 'Kp. Cirateu Peuntas', 'Pegawai Negeri Sipil (PNS)', '85794832980', '2018/2019', '82120758072', '11115717.jpg', 'ap', '020/171019762/SMK-Mdk/2018', 'G098', '', ''),
('171019763', 'Lia Anjelia', 'XI-AP.3', 'Bandung', '2009-11-03', 0, 'A', 'Jl. Dago cikahuripan', '', 'Sunandar', 'Jl. Dago cikahuripan', 'Pegawai Swasta', '89655114041', '2018/2019', '8382246288', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019764', 'Lisa Lusiana', 'XI-AP.3', 'Bandung', '2011-07-07', 0, 'O', 'Jl. Pelesiran', '', 'Rachmat', 'Jl. Pelesiran', 'Wirausaha', '89660738721', '2018/2019', '83822801508', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019765', 'Meilani Fitriani', 'XI-AP.3', 'Bandung', '2010-10-02', 0, 'A', 'Jl. Kebon gedang', '', 'Andi', 'Jl. Kebon gedang', 'Polri / TNI', '89690484113', '2018/2019', '89630078257', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019766', 'Mutiara Salsabila Az Zalzalah', 'XI-AP.3', 'Bandung', '2004-05-05', 0, 'B', 'Jl. Bojong Koneng', '', 'Rachman', 'Jl. Bojong Koneng', 'Pegawai Negeri Sipil (PNS)', '85720002465', '2018/2019', '89663294044', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019767', 'Nasya Retna Della', 'XI-AP.3', 'Bandung', '2005-10-18', 0, 'AB', 'Jl. Karang tinggal dalam', '', 'Fauzi', 'Jl. Karang tinggal dalam', 'Pegawai Negeri Sipil (PNS)', '89638462587', '2018/2019', '8995042452', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019768', 'Nurwulan Putria Rahayu', 'XI-AP.3', 'Bandung', '2004-10-05', 0, 'O', 'Jl. Ir. H. Djuanda', '', 'Fitrah', 'Jl. Ir. H. Djuanda', 'Pegawai Swasta', '88802356648', '2018/2019', '87823240130', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019769', 'Paulin Andriani', 'XI-AP.3', 'Bandung', '2008-01-26', 0, 'A', 'Jl. Sukabumi dalam', '', 'Pandi', 'Jl. Sukabumi dalam', 'Pegawai Swasta', '89691946712', '2018/2019', '87825898326', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019770', 'Putri Aulia Ramdaniyah', 'XI-AP.3', 'Bandung', '2012-02-22', 0, 'O', 'Jl. Babakan Sari ', '', 'Cahya', 'Jl. Babakan Sari ', 'Polri / TNI', '85795672775', '2018/2019', '87866164336', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019771', 'Queeny Veliana', 'XI-AP.3', 'Bandung', '2003-06-13', 0, 'A', 'Jl. Ters. Jakarta Hantap', '', 'Agung', 'Jl. Ters. Jakarta Hantap', 'Pegawai Negeri Sipil (PNS)', '89656419564', '2018/2019', '8122404397', '11115717.jpg', 'ap', '017/171019771/SMK-Mdk/2018', 'G098', '', ''),
('171019772', 'Rizma Auliya Firdayani', 'XI-AP.3', 'Bandung', '2012-05-31', 0, 'B', 'Komp. GBI Blok I', '', 'Hilmi', 'Komp. GBI Blok I', 'Pegawai Swasta', '89655142677', '2018/2019', '89633165322', '11115717.jpg', 'ap', '013/171019772/SMK-Mdk/2018', 'G098', '', ''),
('171019773', 'Rosa Adersa', 'XI-AP.3', 'Bandung', '2004-07-25', 0, 'AB', 'Jl. Jatihandap', '', 'Agus', 'Jl. Jatihandap', 'Pegawai Swasta', '89625485740', '2018/2019', '83820418661', '11115717.jpg', 'ap', '023/171019773/SMK-Mdk/2018', 'G098', '', ''),
('171019774', 'Rosliani', 'XI-AP.3', 'Bandung', '2007-11-03', 0, 'O', 'Jl. Bukit Maribaya', '', 'Yana', 'Jl. Bukit Maribaya', 'Pegawai Swasta', '89616920137', '2018/2019', '85974324725', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019775', 'Rosmarliana Oka', 'XI-AP.3', 'Bandung', '2004-05-22', 0, 'A', 'Jl. Palasari', '', 'Nana', 'Jl. Palasari', 'Pegawai Swasta', '8,38822E+11', '2018/2019', '85722399683', '11115717.jpg', 'ap', '022/171019775/SMK-Mdk/2018', 'G098', '', ''),
('171019776', 'Sasha Garwa Gantira', 'XI-AP.3', 'Bandung', '2005-04-22', 0, 'B', 'Bangbanyan Cihaur', '', 'Ali', 'Bangbanyan Cihaur', 'Polri / TNI', '8814571417', '2018/2019', '8992896384', '11115717.jpg', 'ap', '011/171019776/SMK-Mdk/2018', 'G098', 'ab-171019776.pdf', 'ns-171019776.pdf'),
('171019777', 'Suselani Putri Maliala', 'XI-AP.3', 'Bandung', '2013-11-23', 0, 'AB', 'Jl. Cidurian ', '', 'Dani', 'Jl. Cidurian ', 'Pegawai Negeri Sipil (PNS)', '8986432169', '2018/2019', '85222690500', '11115717.jpg', 'ap', '012/171019777/SMK-Mdk/2018', 'G098', '', ''),
('171019778', 'Tian Kanisyah', 'XI-AP.3', 'Bandung', '2005-08-09', 0, 'O', 'Jl. Cikutra barat', '', 'Tatang', 'Jl. Cikutra barat', 'Pegawai Swasta', '89654806038', '2018/2019', '85295955384', '11115717.jpg', 'ap', '021/171019778/SMK-Mdk/2018', 'G098', '', ''),
('171019779', 'Tiara Amelia Febrianty', 'XI-AP.3', 'Bandung', '2006-12-19', 0, 'A', 'Jl. Jend. A. Yani', '', 'Wildan', 'Jl. Jend. A. Yani', 'Pegawai Negeri Sipil (PNS)', '8997117355', '2018/2019', '8997106957', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019780', 'Tiara Hermawati', 'XI-AP.3', 'Bandung', '2012-04-12', 0, 'B', 'Jl. Leumah Neundet', '', 'Hermawan', 'Jl. Leumah Neundet', 'Pegawai Swasta', '85721025413', '2018/2019', '89615126627', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019781', 'Walke Agnola Faustine A. O', 'XI-AP.3', 'Bandung', '2005-01-19', 0, 'AB', 'Kp. Mekarsari', '', 'Agan', 'Kp. Mekarsari', 'Pegawai Swasta', '89618480643', '2018/2019', '85318489063', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019782', 'Wanti Rahmawati', 'XI-AP.3', 'Bandung', '2008-07-12', 0, 'O', 'Puri Cipageran Indah', '', 'Wawan', 'Puri Cipageran Indah', 'Pegawai Swasta', '89664648013', '2018/2019', '85956662618', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019783', 'Wida', 'XI-AP.3', 'Bandung', '2009-04-18', 0, 'A', 'Jl. Sadang Serang', '', 'Kusnandar', 'Jl. Sadang Serang', 'Pegawai Swasta', '81823666421', '2018/2019', '89601599272', '11115717.jpg', 'ap', '', 'G098', '', ''),
('171019784', 'Bagus Gunawan Arjuna Junjunan', 'XI-TKJ.1', 'Tasikmalaya', '2008-04-18', 1, 'B', 'Jl. Cipedes tengah', '', 'Junjun', 'Jl. Cipedes tengah', 'Wirausaha', '83821780459', '2018/2019', '89622945956', '11115717.jpg', 'tkj', '054/171019784/SMK-Mdk/2018', 'G104', '', ''),
('171019785', 'Kahfi Inzaghi Ridwan', 'XI-M.3', 'Bandung', '2007-02-27', 1, 'A', 'Jl. Dago Giri', '', 'Supriyatna', 'Jl. Dago Giri', 'Pegawai Swasta', '85795561298', '2018/2019', '81323719523', '11115717.jpg', 'tkr', '', 'G031', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `tingkat` char(1) NOT NULL,
  `pertanyaan` text NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `pass`, `email`, `kode`, `tingkat`, `pertanyaan`, `aktif`) VALUES
('10514319', '12345678', 'rifky.akbar28@gmail.com', '7884', '3', 'p2-YBBSU', 1),
('11115717', '10514228', 'morefast01@gmail.com', '', '3', 'p3-Rafi Fauzi', 1),
('11115742', '11223344', 'mrafi.sfauzi@gmail.com', '', '3', 'p4-baso', 1),
('171019079', '11223344', 'Adiya@gmail.com', '4076', '3', 'p4-nasi', 1),
('171019080', '11223344', 'Agus@gmail.com', '6376', '3', 'p4-nasi', 1),
('171019081', '11223344', 'Akbarf@gmail.com', '6042', '3', 'p4-nasi', 1),
('171019082', '11223344', 'Almiyas@gmail.com', '4558', '3', 'p4-nasi', 1),
('171019083', '11223344', 'Ardhyn@gmail.com', '6427', '3', 'p4-nasi', 1),
('171019084', '11223344', 'Arifpur@gmail.com', '2574', '3', 'p4-nasi', 1),
('171019085', '11223344', 'Bayur@gmail.com', '9504', '3', 'p4-nasi', 1),
('171019086', '11223344', 'Bilal@gmail.com', '2048', '3', 'p4-nasi', 1),
('171019087', '11223344', 'Cepi@gmail.com', '8339', '3', 'p4-nasi', 1),
('171019088', '11223344', 'Dandi@gmail.com', '1648', '3', 'p4-nasi', 1),
('171019089', '11223344', 'Dendi@gmail.com', '5439', '3', 'p4-nasi', 1),
('171019090', '11223344', 'Dhava@gmail.com', '5501', '3', 'p4-nasi', 1),
('171019091', '11223344', 'Dicky@gmail.com', '7075', '3', 'p4-nasi', 1),
('171019093', '11223344', 'Edwin@gmail.com', '7847', '3', 'p4-nasi', 1),
('171019094', '11223344', 'Hadi @gmail.com', '6534', '3', 'p4-nasi', 1),
('171019095', '11223344', 'Hapid@gmail.com', '7213', '3', 'p4-nasi', 1),
('171019096', '11223344', 'Havid@gmail.com', '5197', '3', 'p4-nasi', 1),
('171019097', '11223344', 'Hisan@gmail.com', '7744', '3', 'p4-nasi', 1),
('171019098', '11223344', 'Rahman@gmail.com', '4393', '3', 'p4-nasi', 1),
('171019099', '11223344', 'akarim@gmail.com', '7545', '3', 'p4-nasi', 1),
('171019100', '11223344', ' Rizal@gmail.com', '8879', '3', 'p4-nasi', 1),
('171019101', '11223344', 'Paulu@gmail.com', '8876', '3', 'p4-nasi', 1),
('171019102', '11223344', 'Rafly@gmail.com', '3624', '3', 'p4-nasi', 1),
('171019103', '11223344', 'Rama @gmail.com', '2413', '3', 'p4-nasi', 1),
('171019104', '11223344', 'Randi@gmail.com', '3278', '3', 'p4-nasi', 1),
('171019105', '11223344', 'Rendi@gmail.com', '7549', '3', 'p4-nasi', 1),
('171019106', '11223344', 'Reza @gmail.com', '6236', '3', 'p4-nasi', 1),
('171019107', '11223344', 'Rezki@gmail.com', '7755', '3', 'p4-nasi', 1),
('171019108', '11223344', 'Ricks@gmail.com', '3047', '3', 'p4-nasi', 1),
('171019109', '11223344', 'Rico @gmail.com', '8215', '3', 'p4-nasi', 1),
('171019110', '11223344', 'Ridwa@gmail.com', '4386', '3', 'p4-nasi', 1),
('171019111', '11223344', 'Rio H@gmail.com', '3022', '3', 'p4-nasi', 1),
('171019112', '11223344', 'Rizky@gmail.com', '3458', '3', 'p4-nasi', 1),
('171019113', '11223344', 'Shand@gmail.com', '3546', '3', 'p4-nasi', 1),
('171019114', '11223344', 'Wahyu@gmail.com', '7486', '3', 'p4-nasi', 1),
('171019115', '11223344', 'Ade@gmail.com', '8510', '3', 'p4-nasi', 1),
('171019116', '11223344', 'Agung@gmail.com', '5039', '3', 'p4-nasi', 1),
('171019117', '11223344', 'Aji@gmail.com', '1915', '3', 'p4-nasi', 1),
('171019118', '11223344', 'Alfian@gmail.com', '2627', '3', 'p4-nasi', 1),
('171019119', '11223344', 'Ari@gmail.com', '3329', '3', 'p4-nasi', 1),
('171019120', '11223344', 'Arif@gmail.com', '6605', '3', 'p4-nasi', 1),
('171019121', '11223344', 'Bayu@gmail.com', '9243', '3', 'p4-nasi', 1),
('171019122', '11223344', 'Cepy@gmail.com', '8169', '3', 'p4-nasi', 1),
('171019123', '11223344', 'Deden@gmail.com', '6260', '3', 'p4-nasi', 1),
('171019124', '11223344', 'Deri@gmail.com', '8030', '3', 'p4-nasi', 1),
('171019125', '11223344', 'Dyva Dw@gmail.com', '6683', '3', 'p4-nasi', 1),
('171019126', '11223344', 'Fadil M@gmail.com', '2674', '3', 'p4-nasi', 1),
('171019127', '11223344', 'Fahreza@gmail.com', '2552', '3', 'p4-nasi', 1),
('171019128', '11223344', 'Faisal @gmail.com', '3530', '3', 'p4-nasi', 1),
('171019129', '11223344', 'Fajar H@gmail.com', '6048', '3', 'p4-nasi', 1),
('171019130', '11223344', 'Fathull@gmail.com', '5566', '3', 'p4-nasi', 1),
('171019131', '11223344', 'Febrian@gmail.com', '1394', '3', 'p4-nasi', 1),
('171019132', '11223344', 'Fulqi R@gmail.com', '5124', '3', 'p4-nasi', 1),
('171019133', '11223344', 'Iqbal A@gmail.com', '8635', '3', 'p4-nasi', 1),
('171019134', '11223344', 'Irpan J@gmail.com', '1993', '3', 'p4-nasi', 1),
('171019135', '11223344', 'Maulid @gmail.com', '3977', '3', 'p4-nasi', 1),
('171019136', '11223344', 'Moch. G@gmail.com', '6435', '3', 'p4-nasi', 1),
('171019137', '11223344', 'Risvian@gmail.com', '2668', '3', 'p4-nasi', 1),
('171019138', '11223344', ' Andika@gmail.com', '6286', '3', 'p4-nasi', 1),
('171019139', '11223344', ' Putra@gmail.com', '5605', '3', 'p4-nasi', 1),
('171019140', '11223344', ' Mirza@gmail.com', '7737', '3', 'p4-nasi', 1),
('171019141', '11223344', 'Nanda G@gmail.com', '9014', '3', 'p4-nasi', 1),
('171019142', '11223344', 'Reyhan @gmail.com', '7842', '3', 'p4-nasi', 1),
('171019143', '11223344', 'Rian So@gmail.com', '4734', '3', 'p4-nasi', 1),
('171019144', '11223344', 'Ridwan @gmail.com', '3220', '3', 'p4-nasi', 1),
('171019145', '11223344', 'Ridwan F@gmail.com', '8123', '3', 'p4-nasi', 1),
('171019146', '11223344', 'Rifaldi@gmail.com', '6067', '3', 'p4-nasi', 1),
('171019147', '11223344', 'Rio And@gmail.com', '4600', '3', 'p4-nasi', 1),
('171019148', '11223344', 'Rizal M@gmail.com', '4834', '3', 'p4-nasi', 1),
('171019149', '11223344', 'Sopyan @gmail.com', '7026', '3', 'p4-nasi', 1),
('171019150', '11223344', 'Yosep E@gmail.com', '2711', '3', 'p4-nasi', 1),
('171019151', '11223344', 'Achmad@gmail.com', '2568', '3', 'p4-nasi', 1),
('171019152', '11223344', 'Adi@gmail.com', '6682', '3', 'p4-nasi', 1),
('171019153', '11223344', 'AgungK@gmail.com', '2460', '3', 'p4-nasi', 1),
('171019154', '11223344', 'Alfatihah@gmail.com', '5969', '3', 'p4-nasi', 1),
('171019155', '11223344', 'Amir@gmail.com', '8690', '3', 'p4-nasi', 1),
('171019156', '11223344', 'Amy@gmail.com', '4971', '3', 'p4-nasi', 1),
('171019157', '11223344', 'Andra@gmail.com', '3434', '3', 'p4-nasi', 1),
('171019158', '11223344', 'Andrian@gmail.com', '2011', '3', 'p4-nasi', 1),
('171019159', '11223344', 'Cucu@gmail.com', '5405', '3', 'p4-nasi', 1),
('171019160', '11223344', 'Daniel@gmail.com', '9618', '3', 'p4-nasi', 1),
('171019161', '11223344', 'Daris P@gmail.com', '3643', '3', 'p4-nasi', 1),
('171019162', '11223344', 'Deni An@gmail.com', '2904', '3', 'p4-nasi', 1),
('171019163', '11223344', 'Derizha@gmail.com', '9405', '3', 'p4-nasi', 1),
('171019164', '11223344', 'Dwi Nug@gmail.com', '1941', '3', 'p4-nasi', 1),
('171019165', '11223344', 'Fadly A@gmail.com', '3862', '3', 'p4-nasi', 1),
('171019166', '11223344', 'Fahriza@gmail.com', '5250', '3', 'p4-nasi', 1),
('171019167', '11223344', 'Guntur @gmail.com', '6337', '3', 'p4-nasi', 1),
('171019168', '11223344', 'Mochama@gmail.com', '6062', '3', 'p4-nasi', 1),
('171019169', '11223344', 'Akbar@gmail.com', '5794', '3', 'p4-nasi', 1),
('171019170', '11223344', 'mdani@gmail.com', '6831', '3', 'p4-nasi', 1),
('171019171', '11223344', 'Hidayat@gmail.com', '7186', '3', 'p4-nasi', 1),
('171019172', '11223344', 'Prayoga@gmail.com', '5228', '3', 'p4-nasi', 1),
('171019173', '11223344', 'Reiky P@gmail.com', '8864', '3', 'p4-nasi', 1),
('171019174', '11223344', 'Reno Li@gmail.com', '4836', '3', 'p4-nasi', 1),
('171019175', '11223344', 'Ridwan @gmail.com', '2808', '3', 'p4-nasi', 1),
('171019176', '11223344', 'Riyan T@gmail.com', '8528', '3', 'p4-nasi', 1),
('171019177', '11223344', 'Rizky@gmail.com', '3105', '3', 'p4-nasi', 1),
('171019178', '11223344', 'Sayyid @gmail.com', '4292', '3', 'p4-nasi', 1),
('171019179', '11223344', 'Seppyan@gmail.com', '3437', '3', 'p4-nasi', 1),
('171019180', '11223344', 'Shabi A@gmail.com', '7202', '3', 'p4-nasi', 1),
('171019181', '11223344', 'Sukma S@gmail.com', '7408', '3', 'p4-nasi', 1),
('171019183', '11223344', 'Wisnu W@gmail.com', '1390', '3', 'p4-nasi', 1),
('171019184', '11223344', 'Yanwar @gmail.com', '3572', '3', 'p4-nasi', 1),
('171019186', '11223344', 'Yogi Pr@gmail.com', '7432', '3', 'p4-nasi', 1),
('171019187', '11223344', 'Aghi@gmail.com', '6133', '3', 'p4-nasi', 1),
('171019188', '11223344', 'Ahmad@gmail.com', '9394', '3', 'p4-nasi', 1),
('171019189', '11223344', 'Albi@gmail.com', '6488', '3', 'p4-nasi', 1),
('171019190', '11223344', 'Ali@gmail.com', '3964', '3', 'p4-nasi', 1),
('171019191', '11223344', 'Andika@gmail.com', '9535', '3', 'p4-nasi', 1),
('171019192', '11223344', 'Andri@gmail.com', '9545', '3', 'p4-nasi', 1),
('171019193', '11223344', 'Arif@gmail.com', '4621', '3', 'p4-nasi', 1),
('171019194', '11223344', 'Azis@gmail.com', '6843', '3', 'p4-nasi', 1),
('171019196', '11223344', 'Elgan@gmail.com', '1788', '3', 'p4-nasi', 1),
('171019197', '11223344', 'Erik@gmail.com', '3404', '3', 'p4-nasi', 1),
('171019198', '11223344', 'Fahrul @gmail.com', '9860', '3', 'p4-nasi', 1),
('171019199', '11223344', 'Fajar M@gmail.com', '9325', '3', 'p4-nasi', 1),
('171019200', '11223344', 'Fauzi A@gmail.com', '8375', '3', 'p4-nasi', 1),
('171019201', '11223344', 'Hagi Na@gmail.com', '5270', '3', 'p4-nasi', 1),
('171019202', '11223344', 'Ilham H@gmail.com', '4448', '3', 'p4-nasi', 1),
('171019203', '11223344', 'Irfan S@gmail.com', '6063', '3', 'p4-nasi', 1),
('171019204', '11223344', 'Kemal R@gmail.com', '2796', '3', 'p4-nasi', 1),
('171019205', '11223344', 'Luqmanu@gmail.com', '1221', '3', 'p4-nasi', 1),
('171019206', '11223344', 'Maulana@gmail.com', '6039', '3', 'p4-nasi', 1),
('171019207', '11223344', 'Maulana@gmail.com', '9428', '3', 'p4-nasi', 1),
('171019208', '11223344', ' Ramadhani@gmail.com', '2094', '3', 'p4-nasi', 1),
('171019209', '11223344', 'Mansyur@gmail.com', '1666', '3', 'p4-nasi', 1),
('171019210', '11223344', 'Maulana@gmail.com', '2237', '3', 'p4-nasi', 1),
('171019212', '11223344', 'Putra R@gmail.com', '7011', '3', 'p4-nasi', 1),
('171019213', '11223344', 'Reza Ru@gmail.com', '3389', '3', 'p4-nasi', 1),
('171019214', '11223344', 'Ridwan @gmail.com', '3233', '3', 'p4-nasi', 1),
('171019215', '11223344', 'Rinaldi@gmail.com', '8960', '3', 'p4-nasi', 1),
('171019216', '11223344', 'Rivan S@gmail.com', '1313', '3', 'p4-nasi', 1),
('171019217', '11223344', 'Sandi S@gmail.com', '4021', '3', 'p4-nasi', 1),
('171019218', '11223344', 'Travy B@gmail.com', '9968', '3', 'p4-nasi', 1),
('171019219', '11223344', 'Yuda Az@gmail.com', '8373', '3', 'p4-nasi', 1),
('171019220', '11223344', 'Yuda Le@gmail.com', '7332', '3', 'p4-nasi', 1),
('171019221', '11223344', 'Yusuf Ardi@gmail.com', '9380', '3', 'p4-nasi', 1),
('171019222', '11223344', 'Yusuf Azis@gmail.com', '6101', '3', 'p4-nasi', 1),
('171019223', '11223344', 'Adhiya@gmail.com', '1863', '3', 'p4-nasi', 1),
('171019224', '11223344', 'Adler@gmail.com', '3932', '3', 'p4-nasi', 1),
('171019225', '11223344', 'AgungN@gmail.com', '3787', '3', 'p4-nasi', 1),
('171019226', '11223344', 'Andri@gmail.com', '8674', '3', 'p4-nasi', 1),
('171019227', '11223344', 'Angga@gmail.com', '9376', '3', 'p4-nasi', 1),
('171019228', '11223344', 'Aras@gmail.com', '7164', '3', 'p4-nasi', 1),
('171019229', '11223344', 'Cecep@gmail.com', '5967', '3', 'p4-nasi', 1),
('171019230', '11223344', 'Dani@gmail.com', '7838', '3', 'p4-nasi', 1),
('171019231', '11223344', 'Defra@gmail.com', '3269', '3', 'p4-nasi', 1),
('171019232', '11223344', 'Dinar@gmail.com', '6525', '3', 'p4-nasi', 1),
('171019233', '11223344', 'Fadli I@gmail.com', '5773', '3', 'p4-nasi', 1),
('171019234', '11223344', 'Fahmi R@gmail.com', '1523', '3', 'p4-nasi', 1),
('171019235', '11223344', 'Fahrul @gmail.com', '3850', '3', 'p4-nasi', 1),
('171019236', '11223344', 'Hendra@gmail.com', '8532', '3', 'p4-nasi', 1),
('171019237', '11223344', 'Iwan Ma@gmail.com', '4039', '3', 'p4-nasi', 1),
('171019238', '11223344', 'Khobul @gmail.com', '3015', '3', 'p4-nasi', 1),
('171019239', '11223344', 'Lion Pe@gmail.com', '7823', '3', 'p4-nasi', 1),
('171019240', '11223344', 'Mochamm@gmail.com', '5053', '3', 'p4-nasi', 1),
('171019241', '11223344', 'Muhamad@gmail.com', '3720', '3', 'p4-nasi', 1),
('171019242', '11223344', 'Muhamat@gmail.com', '8373', '3', 'p4-nasi', 1),
('171019243', '11223344', 'Muhamma@gmail.com', '6911', '3', 'p4-nasi', 1),
('171019244', '11223344', 'Nirwan @gmail.com', '7539', '3', 'p4-nasi', 1),
('171019245', '11223344', 'Nova Hi@gmail.com', '2656', '3', 'p4-nasi', 1),
('171019246', '11223344', 'Rafiq T@gmail.com', '8087', '3', 'p4-nasi', 1),
('171019247', '11223344', 'Rahmat @gmail.com', '1609', '3', 'p4-nasi', 1),
('171019248', '11223344', 'Ranjana@gmail.com', '4623', '3', 'p4-nasi', 1),
('171019249', '11223344', 'Rio Naz@gmail.com', '9734', '3', 'p4-nasi', 1),
('171019250', '11223344', 'Rizki H@gmail.com', '9177', '3', 'p4-nasi', 1),
('171019251', '11223344', 'Robby D@gmail.com', '7551', '3', 'p4-nasi', 1),
('171019252', '11223344', 'Ryo Rez@gmail.com', '9636', '3', 'p4-nasi', 1),
('171019253', '11223344', 'Satrian@gmail.com', '9252', '3', 'p4-nasi', 1),
('171019254', '11223344', 'Setia H@gmail.com', '7860', '3', 'p4-nasi', 1),
('171019255', '11223344', 'Sholeh @gmail.com', '7814', '3', 'p4-nasi', 1),
('171019256', '11223344', 'Wahyu F@gmail.com', '9119', '3', 'p4-nasi', 1),
('171019257', '11223344', 'Wawan G@gmail.com', '7748', '3', 'p4-nasi', 1),
('171019258', '11223344', 'Zaidan @gmail.com', '3576', '3', 'p4-nasi', 1),
('171019259', '11223344', 'Adam@gmail.com', '2816', '3', 'p4-nasi', 1),
('171019260', '11223344', 'Aditya@gmail.com', '8627', '3', 'p4-nasi', 1),
('171019261', '11223344', 'AdityaNF@gmail.com', '2749', '3', 'p4-nasi', 1),
('171019262', '11223344', 'Adli@gmail.com', '8862', '3', 'p4-nasi', 1),
('171019263', '11223344', 'Agil@gmail.com', '4000', '3', 'p4-nasi', 1),
('171019264', '11223344', 'AgungNh@gmail.com', '9842', '3', 'p4-nasi', 1),
('171019265', '11223344', 'AgusM@gmail.com', '4155', '3', 'p4-nasi', 1),
('171019266', '11223344', 'Andre@gmail.com', '2762', '3', 'p4-nasi', 1),
('171019267', '11223344', 'Arief@gmail.com', '3408', '3', 'p4-nasi', 1),
('171019270', '11223344', 'Bimbi@gmail.com', '7795', '3', 'p4-nasi', 1),
('171019271', '11223344', 'Dani Ra@gmail.com', '8315', '3', 'p4-nasi', 1),
('171019272', '11223344', 'Fadriza@gmail.com', '5867', '3', 'p4-nasi', 1),
('171019273', '11223344', 'Firgi Y@gmail.com', '1398', '3', 'p4-nasi', 1),
('171019274', '11223344', 'Fuzia A@gmail.com', '9753', '3', 'p4-nasi', 1),
('171019275', '11223344', 'Georgie@gmail.com', '3661', '3', 'p4-nasi', 1),
('171019276', '11223344', 'Hanif R@gmail.com', '3541', '3', 'p4-nasi', 1),
('171019277', '11223344', 'Miraj M@gmail.com', '6200', '3', 'p4-nasi', 1),
('171019278', '11223344', 'Pamungkas@gmail.com', '4460', '3', 'p4-nasi', 1),
('171019279', '11223344', 'Geizka@gmail.com', '3880', '3', 'p4-nasi', 1),
('171019280', '11223344', 'Al fauji@gmail.com', '9159', '3', 'p4-nasi', 1),
('171019281', '11223344', 'Ramdan@gmail.com', '1508', '3', 'p4-nasi', 1),
('171019282', '11223344', 'Al Manar@gmail.com', '1783', '3', 'p4-nasi', 1),
('171019283', '11223344', 'syah Faza@gmail.com', '4272', '3', 'p4-nasi', 1),
('171019284', '11223344', 'Maulana@gmail.com', '9135', '3', 'p4-nasi', 1),
('171019285', '11223344', 'Rafy Fa@gmail.com', '9064', '3', 'p4-nasi', 1),
('171019286', '11223344', 'Rian Ri@gmail.com', '5902', '3', 'p4-nasi', 1),
('171019287', '11223344', 'Rizki I@gmail.com', '9858', '3', 'p4-nasi', 1),
('171019288', '11223344', 'Rizky E@gmail.com', '3571', '3', 'p4-nasi', 1),
('171019289', '11223344', 'Rizky M@gmail.com', '3492', '3', 'p4-nasi', 1),
('171019290', '11223344', 'Rizky R@gmail.com', '2496', '3', 'p4-nasi', 1),
('171019291', '11223344', 'Roni Ra@gmail.com', '8347', '3', 'p4-nasi', 1),
('171019292', '11223344', 'Septian@gmail.com', '8066', '3', 'p4-nasi', 1),
('171019293', '11223344', 'Syaeful@gmail.com', '4945', '3', 'p4-nasi', 1),
('171019294', '11223344', 'Yehezki@gmail.com', '3668', '3', 'p4-nasi', 1),
('171019295', '11223344', 'AdityaRP@gmail.com', '4610', '3', 'p4-nasi', 1),
('171019296', '11223344', 'Aga@gmail.com', '2140', '3', 'p4-nasi', 1),
('171019297', '11223344', 'AhmadR@gmail.com', '4626', '3', 'p4-nasi', 1),
('171019298', '11223344', 'Ananda@gmail.com', '2796', '3', 'p4-nasi', 1),
('171019299', '11223344', 'Andi@gmail.com', '5275', '3', 'p4-nasi', 1),
('171019300', '11223344', 'AnggA@gmail.com', '1606', '3', 'p4-nasi', 1),
('171019301', '11223344', 'Anggara@gmail.com', '6531', '3', 'p4-nasi', 1),
('171019302', '11223344', 'Anggi@gmail.com', '7529', '3', 'p4-nasi', 1),
('171019303', '11223344', 'Aqshal@gmail.com', '9922', '3', 'p4-nasi', 1),
('171019304', '11223344', 'Arry@gmail.com', '5357', '3', 'p4-nasi', 1),
('171019305', '11223344', 'Bagas P@gmail.com', '6868', '3', 'p4-nasi', 1),
('171019306', '11223344', 'Barna@gmail.com', '3431', '3', 'p4-nasi', 1),
('171019307', '11223344', 'Bilal N@gmail.com', '7778', '3', 'p4-nasi', 1),
('171019308', '11223344', 'Candra @gmail.com', '2364', '3', 'p4-nasi', 1),
('171019309', '11223344', 'Diki Ma@gmail.com', '2073', '3', 'p4-nasi', 1),
('171019311', '11223344', 'Ervan T@gmail.com', '6707', '3', 'p4-nasi', 1),
('171019312', '11223344', 'Farras @gmail.com', '8590', '3', 'p4-nasi', 1),
('171019313', '11223344', 'Fikri A@gmail.com', '7013', '3', 'p4-nasi', 1),
('171019314', '11223344', 'Harfi M@gmail.com', '1402', '3', 'p4-nasi', 1),
('171019316', '11223344', 'Dani@gmail.com', '5491', '3', 'p4-nasi', 1),
('171019317', '11223344', 'Fernanda@gmail.com', '4298', '3', 'p4-nasi', 1),
('171019318', '11223344', 'Sofiandi@gmail.com', '2267', '3', 'p4-nasi', 1),
('171019319', '11223344', 'Nur Aji@gmail.com', '9774', '3', 'p4-nasi', 1),
('171019320', '11223344', 'Rafly F@gmail.com', '4621', '3', 'p4-nasi', 1),
('171019321', '11223344', 'Rafly R@gmail.com', '4423', '3', 'p4-nasi', 1),
('171019322', '11223344', 'Rahmat @gmail.com', '8435', '3', 'p4-nasi', 1),
('171019323', '11223344', 'Rezal F@gmail.com', '5462', '3', 'p4-nasi', 1),
('171019324', '11223344', 'Rifalbi@gmail.com', '1449', '3', 'p4-nasi', 1),
('171019325', '11223344', 'Rifqi A@gmail.com', '4456', '3', 'p4-nasi', 1),
('171019326', '11223344', 'Rifqi R@gmail.com', '1655', '3', 'p4-nasi', 1),
('171019327', '11223344', 'Riky Ta@gmail.com', '8822', '3', 'p4-nasi', 1),
('171019328', '11223344', 'Sendi G@gmail.com', '4055', '3', 'p4-nasi', 1),
('171019329', '11223344', 'Tantan @gmail.com', '4202', '3', 'p4-nasi', 1),
('171019330', '11223344', 'Tegar A@gmail.com', '6911', '3', 'p4-nasi', 1),
('171019367', 'andika00', 'Andikaprasetyaa129@gmail.com', '', '3', 'p1-Nining', 1),
('171019401', '11223344', 'Afrizal@gmail.com', '7736', '3', 'p4-nasi', 1),
('171019402', '11223344', 'AgusTS@gmail.com', '9571', '3', 'p4-nasi', 1),
('171019403', '11223344', 'Aldia@gmail.com', '6963', '3', 'p4-nasi', 1),
('171019404', '11223344', 'AnandaR@gmail.com', '6736', '3', 'p4-nasi', 1),
('171019405', '11223344', 'AndriF@gmail.com', '8763', '3', 'p4-nasi', 1),
('171019406', '11223344', 'AnggiDP@gmail.com', '9120', '3', 'p4-nasi', 1),
('171019407', '11223344', 'AriP@gmail.com', '9885', '3', 'p4-nasi', 1),
('171019408', '11223344', 'Ariel@gmail.com', '1396', '3', 'p4-nasi', 1),
('171019409', '11223344', 'Bagas@gmail.com', '5025', '3', 'p4-nasi', 1),
('171019410', '11223344', 'Daffa@gmail.com', '3362', '3', 'p4-nasi', 1),
('171019411', '11223344', 'Dede Ra@gmail.com', '7508', '3', 'p4-nasi', 1),
('171019412', '11223344', 'Diva Se@gmail.com', '5445', '3', 'p4-nasi', 1),
('171019413', '11223344', 'Ejia Le@gmail.com', '5491', '3', 'p4-nasi', 1),
('171019414', '11223344', 'Fajar R@gmail.com', '8664', '3', 'p4-nasi', 1),
('171019415', '11223344', 'Faldy P@gmail.com', '6237', '3', 'p4-nasi', 1),
('171019416', '11223344', 'Fauzi R@gmail.com', '6019', '3', 'p4-nasi', 1),
('171019417', '11223344', 'Felix W@gmail.com', '7804', '3', 'p4-nasi', 1),
('171019418', '11223344', 'Feny Er@gmail.com', '6902', '3', 'p4-nasi', 1),
('171019419', '11223344', 'Feri Ar@gmail.com', '2390', '3', 'p4-nasi', 1),
('171019420', '11223344', 'Indra J@gmail.com', '4363', '3', 'p4-nasi', 1),
('171019421', '11223344', 'Julkarn@gmail.com', '9402', '3', 'p4-nasi', 1),
('171019422', '11223344', 'Mahmudi@gmail.com', '1518', '3', 'p4-nasi', 1),
('171019423', '11223344', 'Muhamad@gmail.com', '1145', '3', 'p4-nasi', 1),
('171019424', '11223344', 'Nur Ind@gmail.com', '5584', '3', 'p4-nasi', 1),
('171019425', '11223344', 'Nurul H@gmail.com', '7528', '3', 'p4-nasi', 1),
('171019426', '11223344', 'Pega Pu@gmail.com', '8571', '3', 'p4-nasi', 1),
('171019427', '11223344', 'Raka Se@gmail.com', '2447', '3', 'p4-nasi', 1),
('171019428', '11223344', 'Raya Fa@gmail.com', '4320', '3', 'p4-nasi', 1),
('171019429', '11223344', 'Rendy R@gmail.com', '8105', '3', 'p4-nasi', 1),
('171019430', '11223344', 'Revi Su@gmail.com', '5640', '3', 'p4-nasi', 1),
('171019431', '11223344', 'Robi Gu@gmail.com', '3238', '3', 'p4-nasi', 1),
('171019432', '11223344', 'Sarah D@gmail.com', '4679', '3', 'p4-nasi', 1),
('171019433', '11223344', 'Satria @gmail.com', '1767', '3', 'p4-nasi', 1),
('171019434', '11223344', 'Wahyu R@gmail.com', '6108', '3', 'p4-nasi', 1),
('171019435', '11223344', 'Yudha R@gmail.com', '4886', '3', 'p4-nasi', 1),
('171019436', '11223344', 'Aceu@gmail.com', '3488', '3', 'p4-nasi', 1),
('171019437', '11223344', 'AjiP@gmail.com', '6232', '3', 'p4-nasi', 1),
('171019438', '11223344', 'Ajrifa@gmail.com', '4036', '3', 'p4-nasi', 1),
('171019439', '11223344', 'aldi@gmail.com', '3469', '3', 'p4-nasi', 1),
('171019441', '11223344', 'Alif@gmail.com', '5313', '3', 'p4-nasi', 1),
('171019442', '11223344', 'AndiI@gmail.com', '8835', '3', 'p4-nasi', 1),
('171019443', '11223344', 'Bimo@gmail.com', '6105', '3', 'p4-nasi', 1),
('171019444', '11223344', 'Cahyadi@gmail.com', '4434', '3', 'p4-nasi', 1),
('171019445', '11223344', 'Deni@gmail.com', '5339', '3', 'p4-nasi', 1),
('171019446', '11223344', 'Elfen@gmail.com', '6771', '3', 'p4-nasi', 1),
('171019447', '11223344', 'Galang @gmail.com', '6141', '3', 'p4-nasi', 1),
('171019448', '11223344', 'Hickal @gmail.com', '6161', '3', 'p4-nasi', 1),
('171019449', '11223344', 'Kurniaw@gmail.com', '4768', '3', 'p4-nasi', 1),
('171019450', '11223344', 'Meyda R@gmail.com', '4747', '3', 'p4-nasi', 1),
('171019451', '11223344', 'Mochama@gmail.com', '4606', '3', 'p4-nasi', 1),
('171019452', '11223344', 'Permana@gmail.com', '2024', '3', 'p4-nasi', 1),
('171019453', '11223344', 'Rizky@gmail.com', '5637', '3', 'p4-nasi', 1),
('171019454', '11223344', 'Hardiansyah@gmail.com', '4408', '3', 'p4-nasi', 1),
('171019455', '11223344', 'Perlian@gmail.com', '6045', '3', 'p4-nasi', 1),
('171019456', '11223344', 'Rangga @gmail.com', '1355', '3', 'p4-nasi', 1),
('171019457', '11223344', 'Reksa S@gmail.com', '6824', '3', 'p4-nasi', 1),
('171019458', '11223344', 'Revan P@gmail.com', '3806', '3', 'p4-nasi', 1),
('171019459', '11223344', 'Reza Al@gmail.com', '6956', '3', 'p4-nasi', 1),
('171019461', '11223344', 'Rifnand@gmail.com', '2860', '3', 'p4-nasi', 1),
('171019462', '11223344', 'Riki Ra@gmail.com', '9778', '3', 'p4-nasi', 1),
('171019463', '11223344', 'Rizal M@gmail.com', '2517', '3', 'p4-nasi', 1),
('171019464', '11223344', 'Rizki A@gmail.com', '8063', '3', 'p4-nasi', 1),
('171019465', '11223344', 'Rizki H@gmail.com', '9828', '3', 'p4-nasi', 1),
('171019466', '11223344', 'Rizky P@gmail.com', '8016', '3', 'p4-nasi', 1),
('171019467', '11223344', 'Rofi Mu@gmail.com', '9281', '3', 'p4-nasi', 1),
('171019468', '11223344', 'Tabiya @gmail.com', '8089', '3', 'p4-nasi', 1),
('171019469', '11223344', 'Taufik Nu@gmail.com', '7448', '3', 'p4-nasi', 1),
('171019470', '11223344', 'Taufik Qu@gmail.com', '9644', '3', 'p4-nasi', 1),
('171019471', '11223344', 'AdiP@gmail.com', '8510', '3', 'p4-nasi', 1),
('171019472', '11223344', 'AhmadFH@gmail.com', '7118', '3', 'p4-nasi', 1),
('171019473', '11223344', 'AhmadF@gmail.com', '7153', '3', 'p4-nasi', 1),
('171019474', '11223344', 'Akmal@gmail.com', '5183', '3', 'p4-nasi', 1),
('171019475', '11223344', 'AnggiA@gmail.com', '3838', '3', 'p4-nasi', 1),
('171019476', '11223344', 'Anugrah@gmail.com', '5700', '3', 'p4-nasi', 1),
('171019477', '11223344', 'Azril@gmail.com', '8128', '3', 'p4-nasi', 1),
('171019478', '11223344', 'BagasAP@gmail.com', '1598', '3', 'p4-nasi', 1),
('171019479', '11223344', 'BayuEP@gmail.com', '8703', '3', 'p4-nasi', 1),
('171019480', '11223344', 'DaniDH@gmail.com', '2266', '3', 'p4-nasi', 1),
('171019481', '11223344', 'Devin A@gmail.com', '3831', '3', 'p4-nasi', 1),
('171019482', '11223344', 'Fajar N@gmail.com', '5929', '3', 'p4-nasi', 1),
('171019483', '11223344', 'Fanny N@gmail.com', '1128', '3', 'p4-nasi', 1),
('171019484', '11223344', 'Fuzi Ra@gmail.com', '1407', '3', 'p4-nasi', 1),
('171019485', '11223344', 'Hardi S@gmail.com', '4973', '3', 'p4-nasi', 1),
('171019486', '11223344', 'Haris S@gmail.com', '9436', '3', 'p4-nasi', 1),
('171019487', '11223344', 'Hidayah@gmail.com', '9121', '3', 'p4-nasi', 1),
('171019488', '11223344', 'Idris M@gmail.com', '8724', '3', 'p4-nasi', 1),
('171019489', '11223344', 'Lukman @gmail.com', '2133', '3', 'p4-nasi', 1),
('171019490', '11223344', 'Maulana@gmail.com', '4870', '3', 'p4-nasi', 1),
('171019491', '11223344', 'Miftah @gmail.com', '9136', '3', 'p4-nasi', 1),
('171019492', '11223344', 'Miftah @gmail.com', '9372', '3', 'p4-nasi', 1),
('171019493', '11223344', 'Nurrizal@gmail.com', '5479', '3', 'p4-nasi', 1),
('171019494', '11223344', 'Nurohman@gmail.com', '3851', '3', 'p4-nasi', 1),
('171019495', '11223344', 'Syahputra@gmail.com', '3057', '3', 'p4-nasi', 1),
('171019496', '11223344', 'Nanda A@gmail.com', '7787', '3', 'p4-nasi', 1),
('171019497', '11223344', 'Raihan @gmail.com', '3245', '3', 'p4-nasi', 1),
('171019498', '11223344', 'Rangga @gmail.com', '5893', '3', 'p4-nasi', 1),
('171019499', '11223344', 'Riffian@gmail.com', '9707', '3', 'p4-nasi', 1),
('171019500', '11223344', 'Riki Ri@gmail.com', '6830', '3', 'p4-nasi', 1),
('171019501', '11223344', 'Riyani @gmail.com', '5527', '3', 'p4-nasi', 1),
('171019502', '11223344', 'Sendi P@gmail.com', '9454', '3', 'p4-nasi', 1),
('171019503', '11223344', 'Surya R@gmail.com', '2064', '3', 'p4-nasi', 1),
('171019504', '11223344', 'Syahrul@gmail.com', '1884', '3', 'p4-nasi', 1),
('171019505', '11223344', 'Tana Ha@gmail.com', '2964', '3', 'p4-nasi', 1),
('171019506', '11223344', 'Tian Ad@gmail.com', '5698', '3', 'p4-nasi', 1),
('171019613', '11223344', 'Aji Ahm@gmail.com', '1871', '3', 'p4-nasi', 1),
('171019614', '11223344', 'Akbar R@gmail.com', '6617', '3', 'p4-nasi', 1),
('171019615', '11223344', 'Alltaf @gmail.com', '4582', '3', 'p4-nasi', 1),
('171019616', '11223344', 'Anggela@gmail.com', '4224', '3', 'p4-nasi', 1),
('171019617', '11223344', 'Anugrah@gmail.com', '8870', '3', 'p4-nasi', 1),
('171019618', '11223344', 'Aprilia@gmail.com', '6574', '3', 'p4-nasi', 1),
('171019619', '11223344', 'Chandra@gmail.com', '8459', '3', 'p4-nasi', 1),
('171019620', '11223344', 'Didan R@gmail.com', '7113', '3', 'p4-nasi', 1),
('171019621', '11223344', 'Erlan H@gmail.com', '5446', '3', 'p4-nasi', 1),
('171019622', '11223344', 'Ernanda@gmail.com', '2055', '3', 'p4-nasi', 1),
('171019623', '11223344', 'Fajar M@gmail.com', '2287', '3', 'p4-nasi', 1),
('171019624', '11223344', 'Genaldi@gmail.com', '9991', '3', 'p4-nasi', 1),
('171019625', '11223344', 'Ghilman@gmail.com', '3273', '3', 'p4-nasi', 1),
('171019626', '11223344', 'Halimud@gmail.com', '2214', '3', 'p4-nasi', 1),
('171019627', '11223344', 'Iqbal B@gmail.com', '3729', '3', 'p4-nasi', 1),
('171019628', '11223344', ' Raihan@gmail.com', '1700', '3', 'p4-nasi', 1),
('171019629', '11223344', ' Ramadhan@gmail.com', '8390', '3', 'p4-nasi', 1),
('171019630', '11223344', 'MuhRizalR@gmail.com', '5874', '3', 'p4-nasi', 1),
('171019631', '11223344', 'Adikara@gmail.com', '1927', '3', 'p4-nasi', 1),
('171019632', '11223344', 'Nugraha@gmail.com', '5620', '3', 'p4-nasi', 1),
('171019633', '11223344', 'Rabbani@gmail.com', '2007', '3', 'p4-nasi', 1),
('171019634', '11223344', 'Naufal @gmail.com', '7438', '3', 'p4-nasi', 1),
('171019635', '11223344', 'Putra S@gmail.com', '9170', '3', 'p4-nasi', 1),
('171019636', '11223344', 'Putri I@gmail.com', '9790', '3', 'p4-nasi', 1),
('171019637', '11223344', 'Raden R@gmail.com', '5166', '3', 'p4-nasi', 1),
('171019638', '11223344', 'Radifa @gmail.com', '8663', '3', 'p4-nasi', 1),
('171019639', '11223344', 'Renaldy@gmail.com', '3384', '3', 'p4-nasi', 1),
('171019640', '11223344', 'Restu A@gmail.com', '7235', '3', 'p4-nasi', 1),
('171019641', '11223344', 'Robi Nu@gmail.com', '7338', '3', 'p4-nasi', 1),
('171019642', '11223344', 'Sultan @gmail.com', '7720', '3', 'p4-nasi', 1),
('171019643', '11223344', 'Tirto R@gmail.com', '3710', '3', 'p4-nasi', 1),
('171019644', '11223344', 'Wildan @gmail.com', '5245', '3', 'p4-nasi', 1),
('171019645', '11223344', 'Yanuar @gmail.com', '3110', '3', 'p4-nasi', 1),
('171019646', '11223344', 'Yazid A@gmail.com', '6297', '3', 'p4-nasi', 1),
('171019647', '11223344', 'Yeni An@gmail.com', '9416', '3', 'p4-nasi', 1),
('171019648', '11223344', 'Zafier @gmail.com', '6277', '3', 'p4-nasi', 1),
('171019649', '11223344', 'Alika@gmail.com', '5913', '3', 'p4-nasi', 1),
('171019650', '11223344', 'Almaci@gmail.com', '7820', '3', 'p4-nasi', 1),
('171019651', '11223344', 'Annisa@gmail.com', '1842', '3', 'p4-nasi', 1),
('171019652', '11223344', 'Aruman@gmail.com ', '7603', '3', 'p4-nasi', 1),
('171019653', '11223344', 'Ciciyas@gmail.com', '2517', '3', 'p4-nasi', 1),
('171019654', '11223344', 'Citranur@gmail.com', '9792', '3', 'p4-nasi', 1),
('171019655', '11223344', 'Devianna@gmail.com', '8078', '3', 'p4-nasi', 1),
('171019656', '11223344', 'Diana@gmail.com', '5169', '3', 'p4-nasi', 1),
('171019657', '11223344', 'Dwicah@gmail.com', '9612', '3', 'p4-nasi', 1),
('171019658', '11223344', 'Fauziah@gmail.com', '5172', '3', 'p4-nasi', 1),
('171019659', '11223344', 'Hilmanur@gmail.com', '9607', '3', 'p4-nasi', 1),
('171019660', '11223344', 'Indria@gmail.com', '4138', '3', 'p4-nasi', 1),
('171019661', '11223344', 'Khamelianaa@gmail.com', '5362', '3', 'p4-nasi', 1),
('171019662', '11223344', 'Meilanaa@gmail.com', '1265', '3', 'p4-nasi', 1),
('171019663', '11223344', 'Meilania@gmail.com', '9142', '3', 'p4-nasi', 1),
('171019664', '11223344', 'Melindaa@gmail.com', '3890', '3', 'p4-nasi', 1),
('171019666', '11223344', 'Miraa@gmail.com', '2936', '3', 'p4-nasi', 1),
('171019667', '11223344', 'Nadilaa@gmail.com', '4558', '3', 'p4-nasi', 1),
('171019668', '11223344', 'Novitaa@gmail.com', '8261', '3', 'p4-nasi', 1),
('171019669', '11223344', 'Nura@gmail.com', '2077', '3', 'p4-nasi', 1),
('171019670', '11223344', 'Pitriaa@gmail.com', '5590', '3', 'p4-nasi', 1),
('171019671', '11223344', 'Putria@gmail.com', '8029', '3', 'p4-nasi', 1),
('171019672', '11223344', 'Razmaa@gmail.com', '6076', '3', 'p4-nasi', 1),
('171019673', '11223344', 'Rifaa@gmail.com', '5578', '3', 'p4-nasi', 1),
('171019674', '11223344', 'Rikaa@gmail.com', '4480', '3', 'p4-nasi', 1),
('171019675', '11223344', 'Rinia@gmail.com', '5805', '3', 'p4-nasi', 1),
('171019676', '11223344', 'Sellya@gmail.com', '9934', '3', 'p4-nasi', 1),
('171019677', '11223344', 'Sifaa@gmail.com', '7558', '3', 'p4-nasi', 1),
('171019678', '11223344', 'Silviaa@gmail.com', '3043', '3', 'p4-nasi', 1),
('171019679', '11223344', 'Syifatunnisaa@gmail.com', '8976', '3', 'p4-nasi', 1),
('171019680', '11223344', 'Tantia@gmail.com', '4994', '3', 'p4-nasi', 1),
('171019688', '11223344', 'Widyaa@gmail.com', '5372', '3', 'p4-nasi', 1),
('171019715', '11223344', 'Alvina@gmail.com', '3799', '3', 'p4-nasi', 1),
('171019716', '11223344', 'Anisa@gmail.com', '8907', '3', 'p4-nasi', 1),
('171019717', '11223344', 'Ayuwan@gmail.com', '7723', '3', 'p4-nasi', 1),
('171019718', '11223344', 'Anisa@gmail.com', '1344', '3', 'p4-nasi', 1),
('171019719', '11223344', 'Bintang@gmail.com', '9107', '3', 'p4-nasi', 1),
('171019720', '11223344', 'Deliyani@gmail.com', '2689', '3', 'p4-nasi', 1),
('171019721', '11223344', 'Devi@gmail.com', '9226', '3', 'p4-nasi', 1),
('171019722', '11223344', 'Devia@gmail.com', '6968', '3', 'p4-nasi', 1),
('171019723', '11223344', 'Dinada@gmail.com', '6989', '3', 'p4-nasi', 1),
('171019724', '11223344', 'Ekaayu@gmail.com', '4272', '3', 'p4-nasi', 1),
('171019725', '11223344', 'Endang@gmail.com', '8345', '3', 'p4-nasi', 1),
('171019726', '11223344', 'Erisah@gmail.com', '3371', '3', 'p4-nasi', 1),
('171019727', '11223344', 'Iramei@gmail.com', '9235', '3', 'p4-nasi', 1),
('171019728', '11223344', 'Jesika@gmail.com', '9943', '3', 'p4-nasi', 1),
('171019729', '11223344', 'Lyraann@gmail.com', '3880', '3', 'p4-nasi', 1),
('171019730', '11223344', 'Malata@gmail.com', '3132', '3', 'p4-nasi', 1),
('171019731', '11223344', 'Maulidyari@gmail.com', '3622', '3', 'p4-nasi', 1),
('171019732', '11223344', 'Mayaha@gmail.com', '5019', '3', 'p4-nasi', 1),
('171019733', '11223344', 'Melisasa@gmail.com', '6507', '3', 'p4-nasi', 1),
('171019734', '11223344', 'Milacan@gmail.com', '4657', '3', 'p4-nasi', 1),
('171019735', '11223344', 'Murniap@gmail.com', '4859', '3', 'p4-nasi', 1),
('171019736', '11223344', 'Nadiyah@gmail.com', '1123', '3', 'p4-nasi', 1),
('171019737', '11223344', 'Nurassyifa@gmail.com', '6569', '3', 'p4-nasi', 1),
('171019738', '11223344', 'Nurintan@gmail.com', '2648', '3', 'p4-nasi', 1),
('171019739', '11223344', 'Nurulap@gmail.com', '5908', '3', 'p4-nasi', 1),
('171019740', '11223344', 'Olvianita@gmail.com', '9412', '3', 'p4-nasi', 1),
('171019741', '11223344', 'Puput@gmail.com', '1367', '3', 'p4-nasi', 1),
('171019742', '11223344', 'Risa@gmail.com', '4420', '3', 'p4-nasi', 1),
('171019743', '11223344', 'Salsabiil@gmail.com', '1850', '3', 'p4-nasi', 1),
('171019744', '11223344', 'Sofyfy@gmail.com', '3637', '3', 'p4-nasi', 1),
('171019745', '11223344', 'Vanesaa@gmail.com', '8066', '3', 'p4-nasi', 1),
('171019746', '11223344', 'Vediawanty@gmail.com', '5236', '3', 'p4-nasi', 1),
('171019747', '11223344', 'Widyaput@gmail.com', '8406', '3', 'p4-nasi', 1),
('171019748', '11223344', 'Amagea@gmail.com', '2875', '3', 'p4-nasi', 1),
('171019749', '11223344', 'Ayuliaa@gmail.com', '6262', '3', 'p4-nasi', 1),
('171019750', '11223344', 'Ayunda@gmail.com', '2500', '3', 'p4-nasi', 1),
('171019751', '11223344', 'Azharis@gmail.com', '3079', '3', 'p4-nasi', 1),
('171019752', '11223344', 'Dewiap@gmail.com', '7201', '3', 'p4-nasi', 1),
('171019753', '11223344', 'Dhanni@gmail.com', '7954', '3', 'p4-nasi', 1),
('171019754', '11223344', 'Elzanov@gmail.com', '3263', '3', 'p4-nasi', 1),
('171019755', '11223344', 'Febri@gmail.com', '6499', '3', 'p4-nasi', 1),
('171019756', '11223344', 'Firdaa@gmai.com', '8764', '3', 'p4-nasi', 1),
('171019757', '11223344', 'Fitriani@gmail.com', '1250', '3', 'p4-nasi', 1),
('171019758', '11223344', 'Gianitri@gmail.com', '2461', '3', 'p4-nasi', 1),
('171019759', '11223344', 'Hastitri@gmail.com', '7391', '3', 'p4-nasi', 1),
('171019760', '11223344', 'Hestitri@gmail.com', '6006', '3', 'p4-nasi', 1),
('171019761', '11223344', 'Ilmaratri@gmail.com', '7754', '3', 'p4-nasi', 1),
('171019762', '11223344', 'Iratri@gmail.com', '9916', '3', 'p4-nasi', 1),
('171019763', '11223344', 'Liatri@gmail.com', '1386', '3', 'p4-nasi', 1),
('171019764', '11223344', 'Lisatri@gmail.com', '6007', '3', 'p4-nasi', 1),
('171019765', '11223344', 'Meilanitri@gmail.com', '8288', '3', 'p4-nasi', 1),
('171019766', '11223344', 'Mutiaratri@gmail.com', '4513', '3', 'p4-nasi', 1),
('171019767', '11223344', 'Nasyatri@gmail.com', '8657', '3', 'p4-nasi', 1),
('171019768', '11223344', 'Nurwulantri@gmail.com', '1815', '3', 'p4-nasi', 1),
('171019769', '11223344', 'Paulintri@gmail.com', '3153', '3', 'p4-nasi', 1),
('171019770', '11223344', 'Putritri@gmail.com', '7479', '3', 'p4-nasi', 1),
('171019771', '11223344', 'Queenytri@gmail.com', '4328', '3', 'p4-nasi', 1),
('171019772', '11223344', 'Rizmatri@gmail.com', '6622', '3', 'p4-nasi', 1),
('171019773', '11223344', 'Rosatri@gmail.com', '4625', '3', 'p4-nasi', 1),
('171019774', '11223344', 'Roslianitri@gmail.com', '9126', '3', 'p4-nasi', 1),
('171019775', '11223344', 'Rosmarlianatri@gmail.com', '9525', '3', 'p4-nasi', 1),
('171019776', '11223344', 'Sashatri@gmail.com', '5199', '3', 'p4-nasi', 1),
('171019777', '11223344', 'Suselanitri@gmail.com', '1599', '3', 'p4-nasi', 1),
('171019778', '11223344', 'Tiantri@gmail.com', '9069', '3', 'p4-nasi', 1),
('171019779', '11223344', 'Tiaratri@gmail.com', '4953', '3', 'p4-nasi', 1),
('171019780', '11223344', 'Tiaratri@gmail.com', '3805', '3', 'p4-nasi', 1),
('171019781', '11223344', 'Walketri@gmail.com', '2468', '3', 'p4-nasi', 1),
('171019782', '11223344', 'Wantitri@gmail.com', '4709', '3', 'p4-nasi', 1),
('171019783', '11223344', 'Widatri@gmail.com', '9256', '3', 'p4-nasi', 1),
('171019784', '11223344', 'Bagus G@gmail.com', '4133', '3', 'p4-nasi', 1),
('171019785', '11223344', 'Kahfi I@gmail.com', '1440', '3', 'p4-nasi', 1),
('adminmdk', 'mdkadmin', '', '', '1', '', 1),
('G001', 'G0012018', '', '', '2', '', 0),
('G002', 'G0022018', '', '', '2', '', 0),
('G003', 'G0032018', '', '', '2', '', 0),
('G004', 'G0042018', '', '', '2', '', 0),
('G005', 'G0052018', '', '', '2', '', 1),
('G006', 'G0062018', '', '', '2', '', 1),
('G007', 'G0072018', '', '', '2', '', 1),
('G008', 'G0082018', '', '', '2', '', 1),
('G009', 'G0092018', '', '', '2', '', 1),
('G010', 'G0102018', '', '', '2', '', 1),
('G011', 'G0112018', '', '', '2', '', 1),
('G012', 'G0122018', '', '', '2', '', 1),
('G013', 'G0132018', '', '', '2', '', 1),
('G014', 'G0142018', '', '', '2', '', 1),
('G015', 'G0152018', '', '', '2', '', 1),
('G016', 'G0162018', '', '', '2', '', 1),
('G017', 'G0172018', '', '', '2', '', 1),
('G018', 'G0182018', '', '', '2', '', 1),
('G019', 'G0192018', '', '', '2', '', 0),
('G020', 'G0202018', '', '', '2', '', 0),
('G021', 'G0212018', '', '', '2', '', 1),
('G022', 'G0222018', '', '', '2', '', 0),
('G023', 'G0232018', '', '', '2', '', 0),
('G024', 'G0242018', '', '', '2', '', 0),
('G025', 'G0252018', '', '', '2', '', 0),
('G026', 'G0262018', '', '', '2', '', 0),
('G027', 'G0272018', '', '', '2', '', 0),
('G028', 'G0282018', '', '', '2', '', 0),
('G029', 'G0292018', '', '', '2', '', 0),
('G030', 'G0302018', '', '', '2', '', 0),
('G031', 'G0312018', '', '', '2', '', 0),
('G032', 'G0322018', '', '', '2', '', 0),
('G033', 'G0332018', '', '', '2', '', 1),
('G034', 'G0342018', '', '', '2', '', 0),
('G035', 'G0352018', '', '', '2', '', 0),
('G036', 'G0362018', '', '', '2', '', 0),
('G037', 'G0372018', '', '', '2', '', 0),
('G038', 'G0382018', '', '', '2', '', 0),
('G039', 'G0392018', '', '', '2', '', 0),
('G040', 'G0402018', '', '', '2', '', 1),
('G041', 'G0412018', '', '', '2', '', 1),
('G042', 'G0422018', '', '', '2', '', 0),
('G043', 'G0432018', '', '', '2', '', 0),
('G044', 'G0442018', '', '', '2', '', 0),
('G045', 'G0452018', '', '', '2', '', 0),
('G046', 'G0462018', '', '', '2', '', 0),
('G047', 'G0472018', '', '', '2', '', 0),
('G048', 'G0482018', '', '', '2', '', 0),
('G049', 'G0492018', '', '', '2', '', 0),
('G050', 'G0502018', '', '', '2', '', 0),
('G051', 'G0512018', '', '', '2', '', 0),
('G052', 'G0522018', '', '', '2', '', 0),
('G053', 'G0532018', '', '', '2', '', 0),
('G054', 'G0542018', '', '', '2', '', 0),
('G055', 'G0552018', '', '', '2', '', 0),
('G056', 'G0562018', '', '', '2', '', 0),
('G057', 'G0572018', '', '', '2', '', 0),
('G058', 'G0582018', '', '', '2', '', 0),
('G059', 'G0592018', '', '', '2', '', 0),
('G060', 'G0602018', '', '', '2', '', 0),
('G061', 'G0612018', '', '', '2', '', 0),
('G062', 'G0622018', '', '', '2', '', 0),
('G063', 'G0632018', '', '', '2', '', 0),
('G064', 'G0642018', '', '', '2', '', 0),
('G065', 'G0652018', '', '', '2', '', 0),
('G066', 'G0662018', '', '', '2', '', 0),
('G067', 'G0672018', '', '', '2', '', 0),
('G068', 'G0682018', '', '', '2', '', 0),
('G069', 'G0692018', '', '', '2', '', 0),
('G070', 'G0702018', '', '', '2', '', 0),
('G071', 'G0712018', '', '', '2', '', 0),
('G072', 'G0722018', '', '', '2', '', 0),
('G073', 'G0732018', '', '', '2', '', 0),
('G074', 'G0742018', '', '', '2', '', 0),
('G075', 'G0752018', '', '', '2', '', 0),
('G076', 'G0762018', '', '', '2', '', 0),
('G077', 'G0772018', '', '', '2', '', 0),
('G078', 'G0782018', '', '', '2', '', 0),
('G079', 'G0792018', '', '', '2', '', 0),
('G080', 'G0802018', '', '', '2', '', 1),
('G081', 'G0812018', '', '', '2', '', 0),
('G082', 'G0822018', '', '', '2', '', 0),
('G083', 'G0832018', '', '', '2', '', 0),
('G084', 'G0842018', '', '', '2', '', 0),
('G085', 'G0852018', '', '', '2', '', 0),
('G086', 'G0862018', '', '', '2', '', 0),
('G087', 'G0872018', '', '', '2', '', 0),
('G088', 'G0882018', '', '', '2', '', 0),
('G089', 'G0892018', '', '', '2', '', 0),
('G090', 'G0902018', '', '', '2', '', 0),
('G091', 'G0912018', '', '', '2', '', 0),
('G092', 'G0922018', '', '', '2', '', 0),
('G093', 'G0932018', '', '', '2', '', 0),
('G094', 'G0942018', '', '', '2', '', 0),
('G095', 'G0952018', '', '', '2', '', 0),
('G096', 'G0962018', '', '', '2', '', 0),
('G097', 'G0972018', '', '', '2', '', 0),
('G098', 'G0982018', '', '', '2', '', 0),
('G099', 'G0992018', '', '', '2', '', 0),
('G100', 'G1002018', '', '', '2', '', 0),
('G101', 'G1012018', '', '', '2', '', 0),
('G102', 'G1022018', '', '', '2', '', 0),
('G103', 'G1032018', '', '', '2', '', 0),
('G104', 'G1042018', '', '', '2', '', 0),
('G105', 'G1052018', '', '', '2', '', 0),
('G106', 'G1062018', '', '', '2', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  ADD PRIMARY KEY (`no_surat_bimbingan`),
  ADD KEY `nis` (`kode_guru`);

--
-- Indeks untuk tabel `tb_buku_jurnal`
--
ALTER TABLE `tb_buku_jurnal`
  ADD PRIMARY KEY (`nomor_jurnal`);

--
-- Indeks untuk tabel `tb_detail_bimbingan`
--
ALTER TABLE `tb_detail_bimbingan`
  ADD KEY `nis` (`nis`),
  ADD KEY `no_surat_bimbingan` (`no_surat_bimbingan`);

--
-- Indeks untuk tabel `tb_detail_jurnal`
--
ALTER TABLE `tb_detail_jurnal`
  ADD KEY `nomor_jurnal` (`nomor_jurnal`);

--
-- Indeks untuk tabel `tb_detail_monitoring`
--
ALTER TABLE `tb_detail_monitoring`
  ADD KEY `no_surat_monitoring` (`no_surat_monitoring`),
  ADD KEY `id_perusahaan` (`no_surat_permohonan`);

--
-- Indeks untuk tabel `tb_detail_permohonan`
--
ALTER TABLE `tb_detail_permohonan`
  ADD KEY `no_surat_permohonan` (`no_surat_permohonan`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  ADD PRIMARY KEY (`no_surat_monitoring`),
  ADD KEY `id_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD KEY `nis` (`no_surat_sidang`),
  ADD KEY `no_surat_permohonan` (`nis`);

--
-- Indeks untuk tabel `tb_pengantaran`
--
ALTER TABLE `tb_pengantaran`
  ADD PRIMARY KEY (`no_surat_pengantar`),
  ADD KEY `id_perusahaan` (`no_surat_permohonan`),
  ADD KEY `id_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`no_surat_permohonan`),
  ADD KEY `kode_perusahaan` (`kode_perusahaan`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`kode_perusahaan`);

--
-- Indeks untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sidang`
--
ALTER TABLE `tb_sidang`
  ADD PRIMARY KEY (`no_surat_sidang`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_jurusan` (`kode_jurusan`),
  ADD KEY `no_jurnal` (`nomor_jurnal`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
