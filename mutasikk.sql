-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2023 pada 15.01
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutasikk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asal`
--

CREATE TABLE `data_asal` (
  `id_data_asal` int(11) NOT NULL,
  `nama_kepala_keluarga` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_kk_lama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id_pindah` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL,
  `id_stts_nokk_tdk_pindah` int(11) NOT NULL,
  `id_alasan_pindah` int(11) NOT NULL,
  `id_klasifikasi_pindah` int(11) NOT NULL,
  `id_stts_nokk_pindah` int(11) NOT NULL,
  `id_jns_pindah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tujuan`
--

CREATE TABLE `data_tujuan` (
  `id_data_tujuan` int(11) NOT NULL,
  `nama_kepala_keluarga` varchar(45) DEFAULT NULL,
  `tgl_datang` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL,
  `no_kk_lama` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `id_status_nokk_tidak_pindah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katepe`
--

CREATE TABLE `katepe` (
  `nik` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `tmp_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_paspor` int(11) DEFAULT NULL,
  `no_kitas` int(11) DEFAULT NULL,
  `nama_ayah` varchar(45) DEFAULT NULL,
  `nama_ibu` varchar(45) DEFAULT NULL,
  `id_agama` int(11) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_perkawinan` int(11) NOT NULL,
  `id_sttshubkel` int(11) NOT NULL,
  `no_kk_lama` int(11) NOT NULL,
  `no_kk_baru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_baru`
--

CREATE TABLE `kk_baru` (
  `no_kk_baru` int(11) NOT NULL,
  `nama_kep_kk` varchar(45) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `tgl_pengesah` date DEFAULT NULL,
  `pengesah` varchar(45) DEFAULT NULL,
  `kode_pos` int(11) NOT NULL,
  `upload_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kk_baru`
--

INSERT INTO `kk_baru` (`no_kk_baru`, `nama_kep_kk`, `alamat`, `tgl_pengesah`, `pengesah`, `kode_pos`, `upload_file`) VALUES
(33101121, 'Kholid', 'Bayanan Wetan RT.04/RW.01', '2020-01-03', 'Drs. Wiranto', 56172, ''),
(33123001, 'Fauzan', 'Kp. Gelam Jaya RT.05/RW.11', '2020-05-10', 'Drs. Wagiman', 56789, ''),
(33555221, 'Bagas', 'Dawung RT.01/RW.02', '2020-02-02', 'Drs. Kodrat', 59879, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_lama`
--

CREATE TABLE `kk_lama` (
  `no_kk_lama` int(11) NOT NULL,
  `nama_kep_kel` varchar(45) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `tgl_pengesah` date DEFAULT NULL,
  `pengesah` varchar(45) DEFAULT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kk_lama`
--

INSERT INTO `kk_lama` (`no_kk_lama`, `nama_kep_kel`, `alamat`, `tgl_pengesah`, `pengesah`, `kode_pos`) VALUES
(32500101, 'Kholid', 'Lontar Baru RT.01/RW.01', '2010-05-05', 'Drs. Parwito', 60216),
(34200105, 'Fauzan', 'Wringin Putih RT.01/RW.01', '2001-02-01', 'Drs. Wagiman', 56553),
(39200199, 'Bagas', 'Kampung Melayu RT.01/RW.01', '1997-01-28', 'Drs. Parno', 13320);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `nik` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `perkawinan` varchar(50) NOT NULL,
  `no_kk_lama` int(25) NOT NULL,
  `no_kk_baru` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`nik`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `negara`, `pekerjaan`, `pendidikan`, `perkawinan`, `no_kk_lama`, `no_kk_baru`) VALUES
(3308010, 'Fauzan', 'L', 'Magelang', '1975-11-20', 'Islam', 'WNI', 'Karyawan Swasta', 'Diploma IV/Strata I', 'Kawin', 34200105, 33123001),
(3308011, 'Rini', 'P', 'Salatiga', '1978-08-17', 'Islam', 'WNI', 'Mengurus Rumah Tangga', 'SLTA/Sederajat', 'Kawin', 34200105, 33123001),
(3308012, 'Fani', 'L', 'Magelang', '1998-08-08', 'Islam', 'WNI', 'Pelajar/Mahasiswa', 'SLTA/Sederajat', 'Belum Kawin', 34200105, 33123001),
(3308101, 'Bagas', 'L', 'Jakarta', '1970-10-20', 'Islam', 'WNI', 'PNS', 'Strata II', 'Kawin', 39200199, 33101121),
(3308102, 'Tutik', 'P', 'Jakarta', '1975-01-10', 'Islam', 'WNI', 'Karyawan Swasta', 'Akademi/Diploma III/S.Muda', 'Kawin', 39200199, 0),
(3308103, 'Rosa', 'P', 'Jakarta', '1997-04-10', 'Islam', 'WNI', 'Pelajar/Mahasiswa', 'SLTA/Sederajat', 'Belum Kawin', 39200199, 0),
(33080001, 'Kholid', 'L', 'Magelang', '1989-10-16', 'Islam', 'WNI', 'PNS', 'SLTA/Sederajat', 'Kawin', 32500101, 0),
(33080002, 'Nurfa', 'P', 'Magelang', '1993-10-08', 'Islam', 'WNI', 'Mengurus Rumah Tangga', 'SLTA/Sederajat', 'Kawin', 32500101, 0),
(33080003, 'Robin', 'L', 'Magelang', '2001-11-01', 'Islam', 'WNI', 'Pelajar/Mahasiswa', 'SLTA/Sederajat', 'Belum Kawin', 32500101, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_agama`
--

CREATE TABLE `m_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_agama`
--

INSERT INTO `m_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khong Hucu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_alasan_pindah`
--

CREATE TABLE `m_alasan_pindah` (
  `id_alasan_pindah` int(11) NOT NULL,
  `nm_alasan_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_alasan_pindah`
--

INSERT INTO `m_alasan_pindah` (`id_alasan_pindah`, `nm_alasan_pindah`) VALUES
(1, 'Pekerjaan'),
(2, 'Pendidikan'),
(3, 'Keamanan'),
(4, 'Kesehatan'),
(5, 'Perumahan'),
(6, 'Keluarga'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_biodata_pegawai`
--

CREATE TABLE `m_biodata_pegawai` (
  `id` int(5) NOT NULL,
  `NIK` int(12) NOT NULL,
  `M_biodata_pegawai_nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_biodata_pegawai`
--

INSERT INTO `m_biodata_pegawai` (`id`, `NIK`, `M_biodata_pegawai_nama`, `username`, `password`, `no_telp`) VALUES
(2, 1705040001, 'Fatmawan Bayu Antono', 'bayu', '557297d3a5c3886a74fee83fdb236301', '1'),
(3, 1705040051, 'Abdul Rofiq Almuqorobin', 'robin', '8ee60a2e00c90d7e00d5069188dc115b', '0'),
(4, 1705040009, 'Muhammad Ikhsan', 'ikhsan', '4e9194a3bb65ab53e41247480905c391', '0'),
(5, 1705040047, 'Ade Sukma', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', '0'),
(22, 1605040002, 'man', 'man', '39c63ddb96a31b9610cd976b896ad4f0', '085643143163'),
(23, 1605040002, 'Boy', 'boy', '1a699ad5e06aa8a6db3bcf9cfb2f00f2', '085643143162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jns_pindah`
--

CREATE TABLE `m_jns_pindah` (
  `id_jns_pindah` int(11) NOT NULL,
  `nm_jns_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_jns_pindah`
--

INSERT INTO `m_jns_pindah` (`id_jns_pindah`, `nm_jns_pindah`) VALUES
(1, 'Kep. Keluarga'),
(2, 'Kep. Keluarga dan Seluruh Angg. Keluarga'),
(3, 'Kep. Keluarga dan Sbg. Angg. Keluarga'),
(4, 'Angg. Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_klasifikasi_pindah`
--

CREATE TABLE `m_klasifikasi_pindah` (
  `id_klasifikasi_pindah` int(11) NOT NULL,
  `nm_klasifikasi_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_klasifikasi_pindah`
--

INSERT INTO `m_klasifikasi_pindah` (`id_klasifikasi_pindah`, `nm_klasifikasi_pindah`) VALUES
(1, 'Dalam satu Desa/Kelurahan'),
(2, 'Antar Desa/Kelurahan'),
(3, 'Antar Kecamatan'),
(4, 'Antar Kab/Kota'),
(5, 'Antar Provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kode_pos`
--

CREATE TABLE `m_kode_pos` (
  `kode_pos` int(11) NOT NULL,
  `desa_kel` varchar(45) DEFAULT NULL,
  `kec` varchar(45) DEFAULT NULL,
  `kab` varchar(45) DEFAULT NULL,
  `prov` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_kode_pos`
--

INSERT INTO `m_kode_pos` (`kode_pos`, `desa_kel`, `kec`, `kab`, `prov`) VALUES
(13320, 'Kampung Melayu', 'Jatinegara', 'Jakarta Timur', 'Jawa Barat'),
(30111, 'Kuto Batu', 'Ilir Timur', 'Palembang', 'Sumatera Selatan'),
(40111, 'Braga', 'Sumur Bandung', 'Bandung', 'Jawa Barat'),
(56172, 'Pasuruhan', 'Mertoyudan', 'Magelang', 'Jawa Tengah'),
(56194, 'Magersari', 'Magelang Selatan', 'Magelang', 'Jawa Tengah'),
(56553, 'Wringin Putih', 'Borobudur', 'Magelang', 'Jawa Tengah'),
(56789, 'Gelam Jaya', 'Pasar Kemis', 'Tangerang', 'Jawa Barat'),
(59879, 'Jati Barang', 'Mijen', 'Semarang', 'Jawa Tengah'),
(60216, 'Lontar', 'Sambikerep', 'Surabaya', 'Jawa Timur'),
(75119, 'Tanah Merah', 'Samarinda Utara', 'Samarinda', 'Kalimantan Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_negara`
--

CREATE TABLE `m_negara` (
  `id_negara` int(11) NOT NULL,
  `negara` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_negara`
--

INSERT INTO `m_negara` (`id_negara`, `negara`) VALUES
(1, 'WNI'),
(2, 'WNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pekerjaan`
--

CREATE TABLE `m_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_pekerjaan`
--

INSERT INTO `m_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Tidak Bekerja/Belum Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar/Mahasiswa'),
(4, 'PNS'),
(5, 'TNI'),
(6, 'Kepolisian RI'),
(7, 'Karyawan Swasta'),
(8, 'Buruh'),
(9, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pendidikan`
--

CREATE TABLE `m_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_pendidikan`
--

INSERT INTO `m_pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'Belum Tamat SD/Sederajat'),
(3, 'Tamat SD/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'SLTA/Sederajat'),
(6, 'Diploma I/II'),
(7, 'Akademi/Diploma III/S.Muda'),
(8, 'Diploma IV/Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_statusperkawinan`
--

CREATE TABLE `m_statusperkawinan` (
  `id_perkawinan` int(11) NOT NULL,
  `perkawinan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_statusperkawinan`
--

INSERT INTO `m_statusperkawinan` (`id_perkawinan`, `perkawinan`) VALUES
(1, 'Belum Kawin'),
(2, 'Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_sttshubkel`
--

CREATE TABLE `m_sttshubkel` (
  `id_sttshubkel` int(11) NOT NULL,
  `hub_kel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_sttshubkel`
--

INSERT INTO `m_sttshubkel` (`id_sttshubkel`, `hub_kel`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Isteri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_stts_nokk_pindah`
--

CREATE TABLE `m_stts_nokk_pindah` (
  `id_stts_nokk_pindah` int(11) NOT NULL,
  `nm_stts_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_stts_nokk_pindah`
--

INSERT INTO `m_stts_nokk_pindah` (`id_stts_nokk_pindah`, `nm_stts_pindah`) VALUES
(1, 'Numpang KK'),
(2, 'Membuat KK Baru'),
(3, 'Nama Kep. Keluarga dan Nomor KK Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_stts_nokk_tdk_pindah`
--

CREATE TABLE `m_stts_nokk_tdk_pindah` (
  `id_stts_nokk_tdk_pindah` int(11) NOT NULL,
  `nm_nokk_tdk_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_stts_nokk_tdk_pindah`
--

INSERT INTO `m_stts_nokk_tdk_pindah` (`id_stts_nokk_tdk_pindah`, `nm_nokk_tdk_pindah`) VALUES
(1, 'Numpang KK'),
(2, 'Membuat KK Baru'),
(3, 'Tidak Ada Angg. Keluarga Yang Ditinggal'),
(4, 'Nomor KK Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resume_nik_terdaftar`
--

CREATE TABLE `resume_nik_terdaftar` (
  `id_resume_nik_terdaftar` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kelurahan_pengajuan`
--

CREATE TABLE `surat_kelurahan_pengajuan` (
  `no_surat_kelurahan_pengajuan` int(11) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nama_kepala_desa` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_pindah`
--

CREATE TABLE `surat_keterangan_pindah` (
  `id_surat_keterangan_pindah` int(11) NOT NULL,
  `tgl_surat` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pengantar_rt_rw`
--

CREATE TABLE `surat_pengantar_rt_rw` (
  `no_surat_pengantar_rt_rw` int(11) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `almt` varchar(45) DEFAULT NULL,
  `nm_ket_rt` varchar(45) DEFAULT NULL,
  `nm_ket_rw` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pindah_datang`
--

CREATE TABLE `surat_pindah_datang` (
  `no_surat_pindah_datang` int(11) NOT NULL,
  `tgl_surat` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nama_kepala_desa` varchar(45) DEFAULT NULL,
  `nama_camat` varchar(45) DEFAULT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_asal`
--
ALTER TABLE `data_asal`
  ADD PRIMARY KEY (`id_data_asal`),
  ADD KEY `fk_data_asal_m_kode_pos1_idx` (`kode_pos`),
  ADD KEY `fk_data_asal_kk_lama1_idx` (`no_kk_lama`);

--
-- Indeks untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `fk_data_pindah_ktp1_idx` (`nik`),
  ADD KEY `fk_data_pindah_m_klasifikasi_pindah1_idx` (`id_klasifikasi_pindah`),
  ADD KEY `fk_data_pindah_m_stts_nokk_pindah1_idx` (`id_stts_nokk_pindah`),
  ADD KEY `fk_data_pindah_m_jns_pindah1_idx` (`id_jns_pindah`),
  ADD KEY `fk_data_pindah_m_alasan_pindah1_idx` (`id_alasan_pindah`),
  ADD KEY `fk_data_pindah_m_stts_nokk_tdk_pindah1_idx` (`id_stts_nokk_tdk_pindah`);

--
-- Indeks untuk tabel `data_tujuan`
--
ALTER TABLE `data_tujuan`
  ADD PRIMARY KEY (`id_data_tujuan`),
  ADD KEY `fk_data_tujuan_ktp1_idx` (`nik`),
  ADD KEY `fk_data_tujuan_kk_lama1_idx` (`no_kk_lama`),
  ADD KEY `fk_data_tujuan_m_kode_pos1_idx` (`kode_pos`),
  ADD KEY `fk_data_tujuan_m_stts_nokk_tdk_pindah1_idx` (`id_status_nokk_tidak_pindah`);

--
-- Indeks untuk tabel `katepe`
--
ALTER TABLE `katepe`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_ktp_m_agama_idx` (`id_agama`),
  ADD KEY `fk_ktp_m_negara1_idx` (`id_negara`),
  ADD KEY `fk_ktp_m_pekerjaan1_idx` (`id_pekerjaan`),
  ADD KEY `fk_ktp_m_pendidikan1_idx` (`id_pendidikan`),
  ADD KEY `fk_ktp_m_statusperkawinan1_idx` (`id_perkawinan`),
  ADD KEY `fk_ktp_m_sttshubkel1_idx` (`id_sttshubkel`),
  ADD KEY `fk_ktp_kk_lama1_idx` (`no_kk_lama`),
  ADD KEY `fk_ktp_kk_baru_idx` (`no_kk_baru`);

--
-- Indeks untuk tabel `kk_baru`
--
ALTER TABLE `kk_baru`
  ADD PRIMARY KEY (`no_kk_baru`),
  ADD KEY `fk_kk_baru_m_kode_pos1_idx` (`kode_pos`);

--
-- Indeks untuk tabel `kk_lama`
--
ALTER TABLE `kk_lama`
  ADD PRIMARY KEY (`no_kk_lama`),
  ADD KEY `fk_kk_lama_m_kode_pos1_idx` (`kode_pos`);

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `m_agama`
--
ALTER TABLE `m_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `m_alasan_pindah`
--
ALTER TABLE `m_alasan_pindah`
  ADD PRIMARY KEY (`id_alasan_pindah`);

--
-- Indeks untuk tabel `m_biodata_pegawai`
--
ALTER TABLE `m_biodata_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_jns_pindah`
--
ALTER TABLE `m_jns_pindah`
  ADD PRIMARY KEY (`id_jns_pindah`);

--
-- Indeks untuk tabel `m_klasifikasi_pindah`
--
ALTER TABLE `m_klasifikasi_pindah`
  ADD PRIMARY KEY (`id_klasifikasi_pindah`);

--
-- Indeks untuk tabel `m_kode_pos`
--
ALTER TABLE `m_kode_pos`
  ADD PRIMARY KEY (`kode_pos`);

--
-- Indeks untuk tabel `m_negara`
--
ALTER TABLE `m_negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indeks untuk tabel `m_pekerjaan`
--
ALTER TABLE `m_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `m_statusperkawinan`
--
ALTER TABLE `m_statusperkawinan`
  ADD PRIMARY KEY (`id_perkawinan`);

--
-- Indeks untuk tabel `m_sttshubkel`
--
ALTER TABLE `m_sttshubkel`
  ADD PRIMARY KEY (`id_sttshubkel`);

--
-- Indeks untuk tabel `m_stts_nokk_pindah`
--
ALTER TABLE `m_stts_nokk_pindah`
  ADD PRIMARY KEY (`id_stts_nokk_pindah`);

--
-- Indeks untuk tabel `m_stts_nokk_tdk_pindah`
--
ALTER TABLE `m_stts_nokk_tdk_pindah`
  ADD PRIMARY KEY (`id_stts_nokk_tdk_pindah`);

--
-- Indeks untuk tabel `resume_nik_terdaftar`
--
ALTER TABLE `resume_nik_terdaftar`
  ADD PRIMARY KEY (`id_resume_nik_terdaftar`),
  ADD KEY `fk_resume_nik_terdaftar_ktp1_idx` (`nik`),
  ADD KEY `fk_resume_nik_terdaftar_m_kode_pos1_idx` (`kode_pos`);

--
-- Indeks untuk tabel `surat_kelurahan_pengajuan`
--
ALTER TABLE `surat_kelurahan_pengajuan`
  ADD PRIMARY KEY (`no_surat_kelurahan_pengajuan`),
  ADD KEY `fk_surat_kelurahan_pengajuan_ktp1_idx` (`nik`);

--
-- Indeks untuk tabel `surat_keterangan_pindah`
--
ALTER TABLE `surat_keterangan_pindah`
  ADD PRIMARY KEY (`id_surat_keterangan_pindah`),
  ADD KEY `fk_surat_keterangan_pindah_ktp1_idx` (`nik`);

--
-- Indeks untuk tabel `surat_pengantar_rt_rw`
--
ALTER TABLE `surat_pengantar_rt_rw`
  ADD PRIMARY KEY (`no_surat_pengantar_rt_rw`),
  ADD KEY `fk_surat_pengantar_rt_rw_ktp1_idx` (`nik`);

--
-- Indeks untuk tabel `surat_pindah_datang`
--
ALTER TABLE `surat_pindah_datang`
  ADD PRIMARY KEY (`no_surat_pindah_datang`),
  ADD KEY `fk_surat_pindah_datang_ktp1_idx` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_biodata_pegawai`
--
ALTER TABLE `m_biodata_pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_asal`
--
ALTER TABLE `data_asal`
  ADD CONSTRAINT `fk_data_asal_kk_lama1` FOREIGN KEY (`no_kk_lama`) REFERENCES `kk_lama` (`no_kk_lama`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_asal_m_kode_pos1` FOREIGN KEY (`kode_pos`) REFERENCES `m_kode_pos` (`kode_pos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD CONSTRAINT `fk_data_pindah_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_pindah_m_alasan_pindah1` FOREIGN KEY (`id_alasan_pindah`) REFERENCES `m_alasan_pindah` (`id_alasan_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_pindah_m_jns_pindah1` FOREIGN KEY (`id_jns_pindah`) REFERENCES `m_jns_pindah` (`id_jns_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_pindah_m_klasifikasi_pindah1` FOREIGN KEY (`id_klasifikasi_pindah`) REFERENCES `m_klasifikasi_pindah` (`id_klasifikasi_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_pindah_m_stts_nokk_pindah1` FOREIGN KEY (`id_stts_nokk_pindah`) REFERENCES `m_stts_nokk_pindah` (`id_stts_nokk_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_pindah_m_stts_nokk_tdk_pindah1` FOREIGN KEY (`id_stts_nokk_tdk_pindah`) REFERENCES `m_stts_nokk_tdk_pindah` (`id_stts_nokk_tdk_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `data_tujuan`
--
ALTER TABLE `data_tujuan`
  ADD CONSTRAINT `fk_data_tujuan_kk_lama1` FOREIGN KEY (`no_kk_lama`) REFERENCES `kk_lama` (`no_kk_lama`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_tujuan_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_tujuan_m_kode_pos1` FOREIGN KEY (`kode_pos`) REFERENCES `m_kode_pos` (`kode_pos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_data_tujuan_m_stts_nokk_tdk_pindah1` FOREIGN KEY (`id_status_nokk_tidak_pindah`) REFERENCES `m_stts_nokk_tdk_pindah` (`id_stts_nokk_tdk_pindah`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `katepe`
--
ALTER TABLE `katepe`
  ADD CONSTRAINT `fk_ktp_kk_baru` FOREIGN KEY (`no_kk_baru`) REFERENCES `kk_baru` (`no_kk_baru`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_kk_lama1` FOREIGN KEY (`no_kk_lama`) REFERENCES `kk_lama` (`no_kk_lama`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_agama` FOREIGN KEY (`id_agama`) REFERENCES `m_agama` (`id_agama`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_negara1` FOREIGN KEY (`id_negara`) REFERENCES `m_negara` (`id_negara`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_pekerjaan1` FOREIGN KEY (`id_pekerjaan`) REFERENCES `m_pekerjaan` (`id_pekerjaan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_pendidikan1` FOREIGN KEY (`id_pendidikan`) REFERENCES `m_pendidikan` (`id_pendidikan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_statusperkawinan1` FOREIGN KEY (`id_perkawinan`) REFERENCES `m_statusperkawinan` (`id_perkawinan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ktp_m_sttshubkel1` FOREIGN KEY (`id_sttshubkel`) REFERENCES `m_sttshubkel` (`id_sttshubkel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kk_baru`
--
ALTER TABLE `kk_baru`
  ADD CONSTRAINT `fk_kk_baru_m_kode_pos1` FOREIGN KEY (`kode_pos`) REFERENCES `m_kode_pos` (`kode_pos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kk_lama`
--
ALTER TABLE `kk_lama`
  ADD CONSTRAINT `fk_kk_lama_m_kode_pos1` FOREIGN KEY (`kode_pos`) REFERENCES `m_kode_pos` (`kode_pos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `resume_nik_terdaftar`
--
ALTER TABLE `resume_nik_terdaftar`
  ADD CONSTRAINT `fk_resume_nik_terdaftar_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resume_nik_terdaftar_m_kode_pos1` FOREIGN KEY (`kode_pos`) REFERENCES `m_kode_pos` (`kode_pos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `surat_kelurahan_pengajuan`
--
ALTER TABLE `surat_kelurahan_pengajuan`
  ADD CONSTRAINT `fk_surat_kelurahan_pengajuan_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_pindah`
--
ALTER TABLE `surat_keterangan_pindah`
  ADD CONSTRAINT `fk_surat_keterangan_pindah_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `surat_pengantar_rt_rw`
--
ALTER TABLE `surat_pengantar_rt_rw`
  ADD CONSTRAINT `fk_surat_pengantar_rt_rw_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `surat_pindah_datang`
--
ALTER TABLE `surat_pindah_datang`
  ADD CONSTRAINT `fk_surat_pindah_datang_ktp1` FOREIGN KEY (`nik`) REFERENCES `katepe` (`nik`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
