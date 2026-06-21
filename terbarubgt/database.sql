-- phpMyAdmin SQL Dump
-- Database: `portal_desa_digital`

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data untuk tabel `roles`
INSERT INTO `roles` (`id`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'RT'),
(3, 'RW'),
(4, 'Warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_whatsapp` varchar(20) DEFAULT NULL,
  `telegram_chat_id` varchar(50) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `fk_users_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `pembuat_id` int(11) NOT NULL,
  `target_audiens` varchar(50) DEFAULT 'Semua',
  `is_sent_wa` tinyint(1) DEFAULT 0,
  `created_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `pembuat_id` (`pembuat_id`),
  CONSTRAINT `fk_pengumuman_user` FOREIGN KEY (`pembuat_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_telegram`
--

CREATE TABLE `pengumuman_telegram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman_id` int(11) NOT NULL,
  `chat_id` varchar(50) NOT NULL,
  `message_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pengumuman_id` (`pengumuman_id`),
  CONSTRAINT `fk_tg_pengumuman` FOREIGN KEY (`pengumuman_id`) REFERENCES `pengumuman` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_surat`
--

CREATE TABLE `permohonan_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warga_id` int(11) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL,
  `status` enum('Menunggu RT','Diproses Desa','Selesai','Ditolak') DEFAULT 'Menunggu RT',
  `tanggal_request` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `warga_id` (`warga_id`),
  CONSTRAINT `fk_surat_warga` FOREIGN KEY (`warga_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_tamu`
--

CREATE TABLE `laporan_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pelapor_id` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `asal_tamu` varchar(150) NOT NULL,
  `tujuan_kunjungan` text NOT NULL,
  `lama_menginap` int(11) NOT NULL COMMENT 'Dalam hari',
  `foto_ktp_tamu` varchar(255) DEFAULT NULL,
  `status` enum('Menunggu','Diterima','Ditolak') DEFAULT 'Menunggu',
  `tanggal_lapor` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `pelapor_id` (`pelapor_id`),
  CONSTRAINT `fk_tamu_pelapor` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_lingkungan`
--

CREATE TABLE `laporan_lingkungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pelapor_id` int(11) NOT NULL,
  `kategori` enum('Infrastruktur','Keamanan','Kebersihan','Lainnya') NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `foto_bukti` varchar(255) DEFAULT NULL,
  `status` enum('Terkirim','Diproses','Selesai') DEFAULT 'Terkirim',
  `tanggal_lapor` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `pelapor_id` (`pelapor_id`),
  CONSTRAINT `fk_lingkungan_pelapor` FOREIGN KEY (`pelapor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;
-- Data Dummy untuk Tabel users
INSERT INTO `users` (`id`, `nik`, `password`, `nama_lengkap`, `no_whatsapp`, `telegram_chat_id`, `alamat_lengkap`, `rt`, `rw`, `role_id`) VALUES
(1, '3201012345678901', 'password123', 'Budi Santoso', '081234567890', '123456789', 'Jl. Merdeka No. 10', '001', '001', 4),
(2, '3201012345678902', 'password123', 'Agus Supriyadi', '081234567891', '987654321', 'Jl. Merdeka No. 15', '001', '001', 2);

-- Data Dummy untuk Tabel pengumuman
INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `pembuat_id`, `target_audiens`, `is_sent_wa`) VALUES
(1, 'Kerja Bakti Rutin Minggu Ini', 'Seluruh warga RT 001 diharapkan hadir pada kegiatan kerja bakti hari Minggu, 20 April 2025 pukul 07.00 WIB di depan pos ronda. Mohon membawa alat kebersihan masing-masing.', 2, 'RT 001', 1),
(2, 'Pengumuman Iuran Bulanan Keamanan', 'Diingatkan kembali kepada seluruh warga di lingkungan RW 001 bahwa iuran kebersihan dan keamanan untuk bulan April 2025 sebesar Rp15.000 harap segera dilunasi ke bendahara masing-masing RT.', 2, 'RW 001', 1),
(3, 'Jadwal Posyandu Balita & Lansia Bulan Mei', 'Pemberitahuan kepada Ibu-ibu, Posyandu balita dan lansia akan dilaksanakan pada hari Jumat, 2 Mei 2025 pukul 09.00 di Balai Warga RT 001. Diharapkan kehadirannya tepat waktu.', 2, 'RT 001', 1);
