-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 05, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rimabatik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$12$pi2rVUyu4wvYh8elwNTzB..uQZpvGqc0Tm8NQfeQCUs4GZCQC8o9u', 'admin', '2024-11-03 13:01:51', '2024-11-03 13:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `namaacara` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `namaacara`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Hari Koperasi Kota Depok', '[\"assets\\/img\\/event\\/harikoperasi.png\"]', 'Dinas Koperasi dan Usaha Mikro (DKUM) Kota Depok mengadakan acara Peringatan Hari Koperasi ke-77 di Alun-Alun Kota Depok pada 8 Agustus 2024. Acara ini digelar sebagai bentuk apresiasi dan dukungan terhadap peran koperasi yang telah menjadi bagian penting dari perekonomian Indonesia, khususnya di tingkat daerah. Pembukaan acara ditandai dengan pemukulan gong oleh Penjabat Sekretaris Daerah (Sekda) Kota Depok, yang menunjukkan simbol dimulainya perayaan sekaligus penghormatan kepada kontribusi koperasi dalam membangun ekonomi yang lebih inklusif. Kegiatan ini dihadiri oleh berbagai perwakilan koperasi, pelaku usaha mikro, serta masyarakat yang antusias dalam mendukung perkembangan koperasi di Kota Depok.\r\n\r\nDalam sambutannya, Penjabat Sekda menyampaikan harapan agar koperasi dapat terus menjadi soko guru atau pilar utama perekonomian di Indonesia. Dengan tagline “Koperasi, Soko Guru Perekonomian Indonesia,” acara ini mengusung tema yang diharapkan bisa menjadi inspirasi bagi koperasi-koperasi di Depok. Tidak hanya menjadi slogan, tetapi juga menggerakkan koperasi untuk terus berinovasi dan berkembang agar sejajar dengan koperasi-koperasi maju lainnya di tingkat nasional. Penjabat Sekda juga mengapresiasi peran koperasi dalam membantu meningkatkan kesejahteraan masyarakat dan memperkuat ekonomi lokal, sehingga koperasi dapat menjadi pilihan ekonomi yang inklusif bagi masyarakat di berbagai lapisan.\r\n\r\nPada kesempatan yang sama, Kepala DKUM Kota Depok menjelaskan bahwa saat ini terdapat 210 koperasi aktif di Kota Depok. Koperasi-koperasi ini terbagi dalam beberapa kategori, yakni koperasi jasa yang berjumlah 25, koperasi konsumen sebanyak 136, koperasi simpan pinjam sebanyak 40, serta koperasi produsen sebanyak 9. Selain itu, terdapat koperasi primer provinsi dan koperasi primer nasional yang turut memperkuat jaringan ekonomi di Kota Depok. Kondisi koperasi-koperasi ini dinilai cukup sehat dan stabil, serta mampu beradaptasi dengan berbagai tantangan yang ada, termasuk dalam era digital.\r\n\r\nKepala DKUM juga menyampaikan apresiasi atas kemajuan koperasi-koperasi yang ada di Kota Depok. Ia berharap agar seluruh koperasi dapat beralih ke sistem berbasis digital sebagai upaya untuk menyesuaikan diri dengan perkembangan teknologi dan kebutuhan ekonomi yang semakin modern. Transformasi digital diharapkan dapat membantu koperasi dalam memperluas jangkauan pasar, meningkatkan efisiensi operasional, serta memberikan pelayanan yang lebih cepat dan mudah bagi anggotanya. Dengan demikian, koperasi di Kota Depok diharapkan mampu bersaing dan memberikan kontribusi yang lebih besar dalam pertumbuhan ekonomi daerah. \r\n\r\nAcara peringatan ini juga menjadi kesempatan bagi masyarakat untuk lebih mengenal koperasi sebagai pilihan ekonomi yang tangguh dan inklusif. Koperasi memiliki peran strategis dalam memberikan kesempatan bagi masyarakat untuk bergabung dan mendapatkan manfaat ekonomi secara kolektif. Melalui peringatan Hari Koperasi ke-77 ini, diharapkan kesadaran dan partisipasi masyarakat terhadap koperasi dapat terus meningkat, sehingga koperasi dapat semakin berkembang dan memberikan manfaat yang luas bagi perekonomian Kota Depok.', '2024-11-03 03:35:12', '2024-11-05 13:42:14'),
(3, 'Pegadaian Expo', '[\"assets\\/img\\/event\\/bersamamentri.png\"]', 'PT Pegadaian Kantor Cabang Depok menggelar acara Pegadaian Expo pada 28-29 Juni 2024, bertempat di kantor cabang Pegadaian Kota Depok. Acara ini merupakan wujud komitmen Pegadaian dalam mendukung perkembangan Usaha Mikro, Kecil, dan Menengah (UMKM) di Kota Depok. Dengan memberikan wadah bagi pelaku UMKM untuk mempromosikan produk, acara ini diharapkan dapat membantu meningkatkan eksposur produk lokal ke masyarakat yang lebih luas, terutama nasabah Pegadaian dan warga Depok. Dukungan ini menunjukkan peran Pegadaian tidak hanya sebagai lembaga keuangan, tetapi juga sebagai mitra UMKM dalam membangun perekonomian lokal yang berkelanjutan.\r\n\r\nDalam Pegadaian Expo, berbagai kegiatan menarik diselenggarakan untuk menarik minat pengunjung dan memperkaya pengalaman para peserta. Acara ini mencakup bazar UMKM dan emas, yang memberikan kesempatan bagi UMKM untuk menampilkan dan menjual produk mereka, serta senam jantung sehat yang turut menjaga kebugaran peserta. Selain itu, tersedia juga layanan pemeriksaan kesehatan gratis yang ditujukan bagi pegawai, pengunjung, dan pedagang. Pegadaian ingin menjadikan kegiatan ini sebagai pengalaman menyeluruh, di mana pengunjung tidak hanya dapat melihat dan membeli produk UMKM, tetapi juga menikmati fasilitas kesehatan yang bermanfaat.\r\n\r\nBelasan UMKM binaan Pegadaian turut serta dalam acara ini dengan semangat memperkuat branding produk mereka serta memperluas pemasukan. Para pelaku UMKM yang hadir berharap partisipasi mereka di Pegadaian Expo bisa membuka peluang lebih besar, baik dari segi pemasaran maupun kolaborasi. Dengan dukungan dari Pegadaian, diharapkan para pelaku usaha dapat mengembangkan potensi mereka lebih maksimal dan beradaptasi dengan tren pasar yang semakin kompetitif. Pegadaian Expo menjadi langkah strategis untuk membangun kolaborasi yang harmonis antara Pegadaian dan UMKM dalam upaya menciptakan ekosistem ekonomi lokal yang lebih solid dan berdaya saing tinggi.', '2024-11-03 03:48:52', '2024-11-05 13:44:39'),
(4, 'Depok Fashion Festival', '[\"assets\\/img\\/event\\/depokfashion.png\"]', 'Dinas Perdagangan dan Perindustrian (Disdagin) Kota Depok sukses menyelenggarakan Depok Fashion Festival (DeFF) 2024 di Mal The Park Sawangan pada Minggu, 3 November 2024. Festival tahunan ini diselenggarakan dengan kemeriahan yang lebih besar dibanding tahun-tahun sebelumnya dan diikuti oleh banyak peserta yang menampilkan karya inovatif mereka di bidang fesyen. Berbagai bentuk kreativitas lokal dipamerkan, menunjukkan bahwa potensi dunia fesyen di Depok terus berkembang dan semakin dihargai oleh masyarakat.\r\n\r\nKepala Disdagin Kota Depok menjelaskan bahwa DeFF merupakan ajang untuk mengapresiasi karya-karya fesyen warga Depok. Pada tahun ini, festival mengusung tema besar Kolaborasi Harmoni Dalam Warisan Budaya dengan subtema Pesona Anggun Batik Depok Kreasi Nusantara. Tema ini dipilih sebagai bentuk penghormatan terhadap warisan budaya yang dituangkan dalam kreasi busana modern. Melalui acara ini, Pemkot Depok memperlihatkan komitmen dalam mendukung industri kreatif lokal dan mengangkat identitas budaya melalui fesyen.\r\n\r\nDalam DeFF 2024, tujuan utamanya adalah memperkenalkan batik khas Kota Depok sebagai salah satu warisan budaya yang unik dan bernilai. Upaya ini juga sekaligus berfungsi sebagai strategi promosi yang efektif untuk memperkenalkan produk-produk fesyen dengan daya saing yang tinggi. Sebanyak 10 finalis desainer menampilkan koleksi batik khas Depok dengan berbagai gaya, mulai dari pakaian formal hingga sporty. Kreasi mereka diperagakan oleh 20 model yang memamerkan ragam busana batik dengan kesan modern dan elegan.\r\n\r\nDiharapkan, DeFF 2024 dapat semakin meningkatkan kebanggaan warga Depok terhadap batik lokal serta menginspirasi masyarakat untuk lebih mengenal talenta desainer lokal. Dengan adanya desainer-desainer yang berbakat di Depok, warga tidak perlu jauh-jauh mencari kebutuhan fesyen. Kehadiran DeFF juga menjadi sarana penting untuk menumbuhkan ekosistem fesyen lokal yang mampu bersaing, tidak hanya di tingkat lokal tapi juga di skala nasional.', '2024-11-05 12:42:38', '2024-11-05 13:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `whatsapp` bigint(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `whatsapp`, `alamat`, `email`, `updated_at`, `created_at`) VALUES
(1, 6289651287, 'TAMAN SARI PURI BALI CLUSTER BANJAR UBUD J.VI/14, DESA/KELURAHAN CURUG, KEC. BOJONGSARI, KOTA DEPOK, PROVINSI JAWA BARAT', 'rimabatik@gmail.com', '2024-11-05 14:13:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id_kontak` int(11) NOT NULL,
  `nomor` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `namaproduk`, `gambar`, `harga`, `stok`, `deskripsi`, `bahan`, `link`, `created_at`, `updated_at`) VALUES
(5, 'Outer Batik Ikan Neon tetra', '[\"assets\\/img\\/products\\/outer batik ikan neon tetra (1).png\",\"assets\\/img\\/products\\/outer batik ikan neon tetra (1)-2.png\",\"assets\\/img\\/products\\/outer batik ikan neon tetra (1)-3.png\"]', 575000, 5, 'Outer Batik ini hadir dengan bahan katun primisima yang nyaman dan berkualitas. Diproduksi Made by Order, setiap outer dibuat eksklusif sesuai permintaan Anda, dengan ukuran yang dapat disesuaikan agar pas dan nyaman dipakai. Tampil stylish dengan sentuhan batik yang autentik!', 'Katun Primisima', 'https://shopee.co.id/Outer-Batik-Ikan-Neon-tetra-i.48588203.25868687043', '2024-11-03 15:18:35', '2024-11-03 15:18:35'),
(6, 'Blus Lurik Combi Batik Depok', '[\"assets\\/img\\/products\\/blus lurik combi batik depok (1).png\",\"assets\\/img\\/products\\/blus lurik combi batik depok (1)-2.png\"]', 385000, 2, 'Menggabungkan motif lurik biru-hitam yang klasik dengan sentuhan batik Gong Si Bolong khas Depok, busana ini menghadirkan tampilan yang elegan dan penuh makna budaya. Cocok untuk acara formal maupun casual, pakaian ini tidak hanya membuat Anda tampil menarik tetapi juga menghargai kekayaan tradisi lokal.', 'Lurik', 'https://shopee.co.id/Blus-Lurik-Combi-Batik-Depok-i.48588203.25718661280', '2024-11-03 15:23:08', '2024-11-03 15:23:08'),
(7, 'Jaket Denim Batik', '[\"assets\\/img\\/products\\/jaket batik (2).png\"]', 350000, 1, 'Dibuat dari bahan denim yang kuat dan nyaman, jaket ini memadukan gaya modern dengan motif batik ikan neon tetra yang unik. Pilihan sempurna untuk Anda yang ingin tampil beda dan stylish dengan sentuhan etnik. Cocok untuk berbagai acara, dari casual hingga semi-formal.', 'Denim', 'https://shopee.co.id/Jaket-Batik-i.48588203.25518657296', '2024-11-03 15:25:37', '2024-11-03 15:25:37'),
(8, 'Tunik Denim Batik', '[\"assets\\/img\\/products\\/tunik denim batik (1).png\",\"assets\\/img\\/products\\/tunik denim batik (1)-2.png\"]', 350000, 1, 'Dibuat dari bahan denim lembut berwarna hitam, memberikan kenyamanan sekaligus tampilan yang stylish. Motif batik Gong Si Bolong khas Kota Depok menambahkan sentuhan unik dan autentik, menjadikan jaket ini pilihan sempurna untuk penampilan yang kasual namun berkelas.', 'Denim', 'https://shopee.co.id/Tunik-Denim-Batik-i.48588203.24868659554', '2024-11-03 15:27:24', '2024-11-03 15:27:24'),
(9, 'Jaket Batik Ondel Ondel', '[\"assets\\/img\\/products\\/jaket batik (3).png\"]', 350000, 1, 'Tampilkan gaya unik dengan Jaket Bomber Denim Halus bermotif Ondel-Ondel Betawi yang penuh karakter! Terbuat dari bahan denim halus yang nyaman, jaket ini memadukan unsur budaya Betawi dalam desain modern yang cocok untuk segala suasana. Motif ondel-ondel yang ikonik memberikan kesan autentik sekaligus fashionable, menjadikannya pilihan tepat bagi Anda yang ingin tampil beda dan bangga akan kekayaan budaya lokal.', 'Denim', 'https://shopee.co.id/Jaket-Batik-i.48588203.24818654404', '2024-11-03 15:29:04', '2024-11-03 15:29:04'),
(10, 'Jaket Batik', '[\"assets\\/img\\/products\\/jaket batik (1).png\",\"assets\\/img\\/products\\/jaket batik (1)-2.png\"]', 350000, 1, 'Memadukan keanggunan motif batik tradisional dengan desain jaket yang stylish. Dibuat dari bahan berkualitas yang nyaman dan ringan, jaket ini cocok untuk berbagai suasana, dari acara casual hingga semi-formal. Motif batik yang kaya akan detail membawa sentuhan budaya ke dalam gaya masa kini.', 'Denim', 'https://shopee.co.id/Jaket-Batik-i.48588203.24118653398', '2024-11-03 15:34:56', '2024-11-03 15:35:41'),
(11, 'Kain Batik Khas Depok', '[\"assets\\/img\\/products\\/batik khas depok (1)-2.png\",\"assets\\/img\\/products\\/batik khas depok (1).png\"]', 475000, 1, 'Terbuat dari bahan katun primisima berkualitas tinggi. Kain ini menawarkan kelembutan dan ketebalan yang ideal, menjadikannya pilihan sempurna untuk berbagai proyek kerajinan atau pembuatan pakaian. Motif Gong Si Bolong yang khas, dipadukan dengan elemen belimbing yang memikat, menciptakan estetika yang kaya dan penuh makna.', 'Katun Primisima', 'https://shopee.co.id/Batik-Khas-Depok-i.48588203.23282829951', '2024-11-03 15:41:49', '2024-11-03 15:41:49'),
(13, 'Kemeja Batik Motif Ikan Neon Tetra', '[\"assets\\/img\\/products\\/kemejaneon.png\"]', 699000, 1, 'Terbuat dari bahan katun berkualitas tinggi, kemeja ini menawarkan kenyamanan dan keleluasaan saat dikenakan. Dengan ukuran All Size, kemeja ini cocok untuk berbagai bentuk tubuh, menjadikannya pilihan sempurna untuk setiap kesempatan. Motif ikan neon tetra yang cerah dan menarik memberikan sentuhan segar pada penampilan.', 'Katun', 'https://shopee.co.id/kemeja-i.48588203.24152407160', '2024-11-03 15:53:32', '2024-11-04 08:42:54'),
(18, 'Kemeja Batik Motif Gong si Bolong, Belimbing', '[\"assets\\/img\\/products\\/kemeja(1).png\",\"assets\\/img\\/products\\/kemeja(2).png\"]', 699000, 1, 'Terbuat dari bahan katun berkualitas tinggi, kemeja ini memberikan kenyamanan optimal dan sirkulasi udara yang baik. Dengan motif Gong Si Bolong yang khas dipadukan dengan elemen belimbing yang memikat, kemeja ini menghadirkan kombinasi keindahan dan tradisi. Tersedia dalam ukuran All Size, kemeja ini cocok untuk berbagai bentuk tubuh, menjadikannya ideal untuk acara formal maupun santai.', 'Katun Primisima', 'https://shopee.co.id/kemeja-i.48588203.20786667489', '2024-11-04 08:44:19', '2024-11-04 08:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aL9LvQqBLHSfMguwwDp5SiYCr9ubHkEp09LgCnNi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicm02M2ZLbHZMUlZUdU5RVzVrek9YMThEeUhIT0RQZXBxclRuaWt2RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE1OiJhZG1pbl9sb2dnZWRfaW4iO2I6MTtzOjg6ImFkbWluX2lkIjtpOjI7fQ==', 1730817243),
('knyZcxp5ihkQi7jSMpTVl65Aj1194yQT0fAryuTZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicU04ejJKTFNXUmdJZXJpdzd4RlBYQzdiN2JnQjhRZmp4R1dHY3M1MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTU6ImFkbWluX2xvZ2dlZF9pbiI7YjoxO3M6ODoiYWRtaW5faWQiO2k6Mjt9', 1730814134);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `isi`, `updated_at`, `created_at`) VALUES
(2, 'pembeli', 'batiknya bagus banget, bahannya adem', '2024-11-02 06:41:34', '2024-11-02 06:41:34'),
(3, 'ibu winarsih', 'batiknya oke banget', '2024-11-02 07:12:11', '2024-11-02 07:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
