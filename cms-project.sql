-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 04:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `thumbnail`, `title`, `excerpt`, `content`, `status`, `author`, `created_at`, `updated_at`) VALUES
(10, '1596637443_2020-07-22-14-03-47-336-5f29721c097f36184c182e62.jpg', 'Meningkatkan Nilai Religius KKN UNIKAMA Desa Gedogwetan Terapkan Proker \"Ayo Ngaji\"', 'Menumbuhkan rasa keimanan yang tinggi terhadap anak-anak dapat dimulai dari hal-hal yang sederhana', 'Menumbuhkan rasa keimanan yang tinggi terhadap anak-anak dapat dimulai dari hal-hal yang sederhana seperti mengajar mengaji.KKN Universitas Kanjuruhan Malang Kelompok 5 yang bertempat di desa Gedogwetan terdiri dari Rina Nurdhiana, Dita Novyanti, Lusi Hartatik, Ela Lutfatus Syula dan Sri Winarti.\r\n\r\nProgram kerja yang mereka buat yakni \" Ayo ngaji, karena hati butuh gizi \" program kerja ini di terapkan di TPQ An Nur yang bertempat di rw 9b Desa Gedogwetan.  Tujuan dari program kerja ini yaitu untuk membantu ustad dan ustadzah yang mengasuh di TPQ An Nur yang jumlah guru ngaji nya masih kurang, serta untuk menerapkan ilmu yang mereka dapat di bangku perkuliahan untuk di terapkan lingkungan masyarakat.\r\n\r\n\r\n\"Program kerja ayo ngaji ini kami laksanakan seminggu 2x yakni hari rabu, dan jumat, kami mendampingi anak-anak membaca iqro, al qur\'an dan doa sholat,\" Tutur salah satu anggota KKN kelompok 5.', 'published', 'Rina Nurdhiana', '2020-08-05 07:24:03', '2020-08-05 07:24:03'),
(11, '1596637874_politik-dinasti-apa-salahnya-5f29053ed541df09f43a6932.jpg', 'Politik Dinasti Apa Salahnya?', 'Saya pikir tren tentang politik Dinasti sudah merebak dari jaman dulu.', 'Saya pikir tren tentang politik Dinasti sudah merebak dari jaman dulu. Dari jaman kerajaan sampai sekarang. Mungkin sekarang ini baru gencar-gencarnya karena Gibran bin Jokowi Tapi sebelum itu bukankah sudah ada AHY dan Dinasti Ratu Atut?\r\n\r\nSaat pertama kali mendengar kata Dinasti, pikiran melayang ke arah beberapa abad silam. Dimana kata Dinasti biasa digunakan oleh para raja dalam sistem pemerintahan monarkhi absolut. Dalam kamus besar Bahasa indonesia (KBBI) kata Dinasti berarti sekumpulan raja-raja yang memerintah yang berasal dari satu keturunan. Kita bisa melihat dalam kekuasaan Islam, ada Dinasti Bani Umayah, Dinasti bani Abbasiyah, Dinasti Idrisiyyah dan sebagainya. Kemudian di Cina, ada juga Dinasti Shang, Dinasti Zou, Dinasti Han dan sebagainya.\r\n\r\nSebelum saya lanjutkan tulisan saya, ada beberapa pertanyaan yang ingin saya lontarkan. Apakah salah jika seorang politisi anaknya juga jadi politisi? Apakah salah jika seorang mantan walikota ingin agar anaknya juga jadi walikota?', 'published', 'Hendro SW', '2020-08-05 07:31:14', '2020-08-05 07:31:14'),
(12, '1596678683_pns-5f258c52d541df725b4d9c75.jpg', 'PNS Tak Boleh Berpolitik tapi Sering Ditarik-tarik Terlibat Politik', 'Jumlah PNS (Pegawai Negeri Sipil) di Indonesia saat ini cukup banyak', 'Jumlah PNS (Pegawai Negeri Sipil) di Indonesia saat ini cukup banyak, ada sekitar 4 juta orang lebih. Jumlah sebanyak itu sangat seksi bagi sebuah kepentingan politik. Oleh karena itu tidak heran jika para PNS sering ditarik-tarik untuk terlibat dalam politik.\r\n\r\nTak jarang para PNS dimanfaatkan untuk mendukung calon presiden/calon wakil presiden, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, Dewan Perwakilan Rakyat Daerah, atau calon kepala daerah/wakil kepala daerah. Padahal secara aturan sangat jelas, hal itu tidak diperbolehkan alias dilarang.\r\n\r\nDalam PP (Peraturan Pemerintah) Nomor 53 Tahun 2010, pada Bagian Kedua Pasal 4 poin 12-15 disebutkan bahwa PNS dilarang untuk memberi dukungan kepada calon presiden/calon wakil presiden, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, Dewan Perwakilan Rakyat Daerah, dan calon kepala daerah/wakil kepala daerah. Baik dengan cara ikut kampanye, memberikan surat dukungan foto copi KTP, atau dengan membuat keputusan yang menguntungkan salah satu pihak.\r\n\r\nPihak yang paling berpotensi menyalahgunakan para PNS adalah mereka yang sedang memegang kekuasaan (incumbent) atau mereka yang berada dalam lingkaran kekuasaan. Sebab mereka memiliki akses dan memegang kendali untuk mengarahkan para PNS seperti yang mereka inginkan.', 'published', 'Wiwin Zein', '2020-08-05 18:51:23', '2020-08-05 18:51:23'),
(13, '1596678910_hewan-5f239f54097f3673e6426d62.jpg', 'Penyelenggaraan Penyembelihan Hewan Kurban pada Masa Pandemi Covid-19', 'Ibadah kurban adalah ritual pemotongan hewan yang telah ditentukan', 'Ibadah kurban adalah ritual pemotongan hewan yang telah ditentukan, sebagai napak tilas akan keteguhan hati dan kuatnya keyakinan seorang ayah yang bernama Ibrahim ketika mendapat perintah Tuhan melalui mimpi untuk menyembelih anak kesayangan satu-satunya, Ismail. Tak terbayang bagaimana perasaan Ibrahim AS ketika mendapat perintah itu.\r\n\r\nAkan tetapi kecintaan Ibrahim AS kepada Tuhan mengalahkan kecintaannya kepada makhluk, yakni sang anak. Sang anak, Ismail pun demikian. Ismail justru meyakinkan sang bapak, Ibrahim untuk melaksanakan perintah Tuhan itu untuk menyembelih dirinya.\r\n\r\nSetelah Ibrahim bertarung dengan keraguan yang ada di hatinya, akhirnya ia laksanakan perintah Tuhan itu. Jangan tanya bagaimana perasaan Ibrahim waktu itu. Sebagai seorang ayah, siapa yang tidak sayang kepada anaknya. Apalagi Ismail adalah anak satu-satunya.\r\n\r\nPadahal perintah Tuhan terhadap Ibrahim itu tidak sebenarnya. Perintah itu sebagai salah satu bentuk ujian akan keyakinan dan keimanan Ibrahim kepada Tuhannya. Perintah untuk menyembelih sang anak hanyalah simbolik.', 'published', 'Wiwin Zein', '2020-08-05 18:55:10', '2020-08-05 18:55:10'),
(14, '1596679084_sapi-jkw-kurban-ngamuk-5f21d674d541df3e0046a206.jfif', 'Sapi Mengamuk dan Menyeruduk Ekonomi Sampai Ambruk', 'Mulai dari Sapi mengamuk sampai berita menyeruduk ekonomi bisa sampai ambruk pada bulan Zulhijah.', 'Mulai dari Sapi mengamuk sampai berita menyeruduk ekonomi bisa sampai ambruk pada bulan Zulhijah. Kendati demikian Ummat Islam tetap merayakan Idul Adha pada tanggal 10 Zulhijah dalam tahun Hijriyah bertepatan dengan peringatan peristiwa qurban Nabi Ibrahim dan Nabi Ismail. \r\n\r\nHari Raya Idul Adha bagi ummat Islam adalah momentum untuk meneladani kisah Nabi Ibrahim dan anaknya Nabi Ismail dalam pengorbanan bentuk konkrit. Segenap ummat Islam selalu mengagungkan nama kebesaran Allah, takbir selama empat hari berturut-turut atas keajaiban tersebut. \r\n\r\nAllaahu akbar, Allaahu akbar, Allaahu akbar, laa illaa haillallahu wallaahuakbar, Allaahu akbar walillaahil hamdu', 'published', 'Abdurrofi Abdullah Azzam', '2020-08-05 18:58:04', '2020-08-05 18:58:04'),
(15, '1596679230_salaman-5f22df22097f36717706a3a2.jpg', 'Merayakan Idul Adha, Jangan Lengah Tetap Waspada', 'Idul Adha tahun 2020 ini masih dalam situasi pandemi Covid 19', 'Idul Adha tahun 2020 ini masih dalam situasi pandemi Covid 19. Walau pun suasananya agak berbeda dengan hari raya Idul Fitri beberapa waktu yang lalu. Pada saat hari raya Idul Fitri, suasana waktu itu cukup mencekam karena virus Corona (Covid 19) sedang memuncak dan publikasi tentang hal itu sedang gencar-gencarnya dilakukan oleh pemerintah.\r\n\r\nSedangkan pada hari raya Idul Adha saat ini walau pun masih dalam situasi pandemi Covid 19, tetapi \"suasana kebatinan\" nya berbeda. Pemerintah saat ini sudah tidak lagi melakukan gembar gembor publikasi seperti saat idul Fitri dulu. Bahkan pemerintah, dalam hal ini Presiden Jokowi sudah membubarkan Gugus Tugas Percepatan Penanganan Covid 19 dan diganti dengan Satuan Tugas (Satgas)  Penanganan Covid 19.\r\n\r\nSelain itu saat ini sikap dan perilaku warga masyarakat, yang cenderung sudah tidak percaya dengan adanya virus Corona (Covid 19). Sehingga banyak warga masyarakat yang kemudian menjadi abai terhadap bahaya virus Corona (Covid 19). Padahal virus Corona (Covid 19) sampai saat ini masih ada dan masih terus makan banyak korban.\r\n\r\nSikap dan perilaku warga masyarakat seperti itu dalam kaitan dengan hari raya Idul Adha saat ini sungguh berbahaya. Sebab sangat mungkin dalam perayaan Idul Adha, seperti melaksanakan shalat sunnat Idul Adha, bersalaman, atau saling berkunjung, warga masyarakat sudah tidak memperhatikan protokol kesehatan lagi.', 'published', 'Wiwin Zein', '2020-08-05 19:00:30', '2020-08-05 19:00:30'),
(16, '1596679411_shopback-co-id-5f200a05d541df369e495373.jpg', 'Daeng Rewa yang Takut Pilih, dan Daeng Malla yang \"Pappili-pilih\"', '\"Woiii, pakeko ini masker,\"', '\"Woiii, pakeko ini masker,\" Daeng Malla berteriak dari balik pagarnya yang bersebelahan dengan rumah Daeng Rewa.\r\n\r\n\"Tumben ko pake masker, Daeng, saya kira ko bilang dak apa-apa ji tidak pake masker?\" Daeng Rewa terheran-heran dengan perubahan sikap tetangganya yang bebal ini.\r\n\r\n\"Ini to, ada pilihanku, dia mi ini, walikotaku, cess,\" Daeng Malla membalas dengan semangat 45 nya yang tak pernah padam. Ternyata Daeng Malla yang pappili-pilih (serba perhitungan), punya motif tersendiri.\r\n\r\nMasker yang digunakan adalah alat kampanye salah satu calon Walikota pilihannya.', 'published', 'Rudy Gunawan', '2020-08-05 19:03:31', '2020-08-05 19:03:31'),
(17, '1596679517_artikel-seleb-5f212cfb097f367af4517c72.jpg', '5 Pasangan Selebriti Ini Berakhir Kandas dan Menghebohkan Sosial Media 2020', 'akhir-akhir ini dihebohkan dengan kabar kandasnya beberapa pasangan Selebriti ditanah air.', 'Di bulan Juli 2020 ini (28/7) akhir-akhir ini dihebohkan dengan kabar kandasnya beberapa pasangan Selebriti ditanah air. \r\n\r\nBerawal informasi dari sosial media hingga viral dan trending di semua sosial media. Jodoh memang tidak ada yang tau ya, seberapa lamanya waktu dalam menjalin suatu hubungan bukan menjadi tolak ukur akan pasti bersanding dipelamin. \r\n\r\nPasangan selebriti ini memang cukup aktif membagikan momen kebersamaan pasangan di sosial media Instagram hingga Youtube dan menjadi konsumsi publik tak heran saat terdengar kabar putus, akan heboh di beberapa sosial media.', 'published', 'Khonifa Desita Dewi', '2020-08-05 19:05:17', '2020-08-05 19:05:17'),
(18, '1596679718_5f1561ec40e07-5f1d6e10d541df634b1ed245.jpg', 'Konstelasi Kebijakan AS Jika Biden Menang', 'Sebentar lagi, pemilu Presiden AS akan berlangsung', 'Sebentar lagi, pemilu Presiden AS akan berlangsung. Dalam pemilu ini, akan terjadi pertarungan dua figur yang merepresentasikan dua sisi yang kontradiktif. Dari partai Republik, ada Donald Trump sebagai inkumben. Sementara dari partai Demokrat, ada Joe Biden, mantan wakil Presiden AS.\r\n\r\nDonald Trump adalah representasi dari massa populis anti-establishment yang kini sedang membajak Partai Republik. Keras soal imigrasi, tegas dengan kriminalitas, dan tidak segan menyatakan political incorrectness. Apalagi Beliau tidak berasal dari the political class yang menguasai politik Amerika Serikat sejak Perang Dunia Kedua. So, he didn\'t play by their rules again this time.\r\n\r\nJoseph R. Biden, Jr. adalah antitesis dari Presiden Trump, baik secara pendirian maupun latar belakang politik. Liberal soal imigrasi, moderat terhadap kriminal, dan politically correct. Terlebih lagi, Beliau adalah veteran politik nasional Amerika Serikat. Sejak 1973, Beliau sudah berkiprah dalam politik tanpa henti sampai sekarang.\r\n\r\nSampai sekarang, polling masih menunjukkan kemenangan besar bagi Biden dalam Electoral College. Financial Times (2020) menyatakan bahwa jika pemilihan diadakan hari ini, 308 suara akan diperoleh Joe Biden. Sementara, Presiden Trump hanya memperoleh 131 suara. Mengapa Presiden Trump diproyeksikan akan kalah besar dalam pemilu ini?', 'drafted', 'Rionanda Dhamma Putra', '2020-08-05 19:08:38', '2020-08-05 19:08:38'),
(19, '1596679838_5e469863b0830-5f1eb9ebd541df2de4729a82.jfif', 'Mills Jersey Timnas 2020 Murah tapi Tidak Murahan', 'Baru baru ini Mills sport sebagai brand apparell jersey timnas Indonesia 2020 merilis jersey away timnas indonesia.', 'Baru baru ini Mills sport sebagai brand apparell jersey timnas Indonesia 2020 merilis jersey away timnas indonesia. Setelah sebelumnya pada 17 april sudah dirilis jersey Home timnas Indonesia.\r\n\r\nMills menjadi brand lokal pertama Sejak tahun 90 an. Semenjak itu Timnas selalu menggunakan apparel luar negeri. Menjadi sebuah acuan kemajuan untuk brand lokal yang mampu memproduksi seragam Timnas negaranya.. Sebelumnya Timnas menggunakan brand luar asal Amerika. Karena produksi lokal, jersey mills jauh lebih murah harganya dibanding merek sebelumnya, \"Untuk jersey Timnas ada dua jenis yang pertama jenis replika dan player issue sama kayak yang dipakai pemain di lapangan yang bener-bener kelasnya tinggilah, yang replika mirip kelas nya gak berkurang itu harganya Rp389 ribu masih di bawah Rp400 ribu yang player issue itu harganya Rp789 ribu di bawah Rp800 ribu, \" ucap Justin. Ditambah dengan penerapan teknologi moderen didalam jersey mills membuat jersey lokal ini tidak ketinggalan jaman, sangat berbeda dengan jersey sebelumnya.\r\n\r\nDilengkapi dengan teknologi terbaik⠀⠀\r\n• Anti Ultra Violet⠀⠀\r\n• Anti Bacterial⠀⠀\r\n• Breathable⠀⠀\r\n• Mouisture Wicking⠀⠀\r\n• Anti Static⠀⠀\r\n• Extra Light', 'drafted', 'Rudi Gusti', '2020-08-05 19:10:38', '2020-08-05 19:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_07_28_151419_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, 1, '$2y$10$NCBm43oDcaskBaKt4kaJ0OgPfTSakI0egMCmoIZZam1hSIZQkifsK', NULL, '2020-07-25 23:19:48', '2020-07-25 23:19:48'),
(2, 'User', 'user@itsolutionstuff.com', NULL, 0, '$2y$10$idzByTCTXuKyQB0lF4GaNO66z2Lh/Z2TamZrLLOuc98To7iRf5pQa', NULL, '2020-07-25 23:19:50', '2020-07-25 23:19:50'),
(3, 'Mohamad Akbar Fadlika Wibowo', 'fadlikamohamad@gmail.com', NULL, 0, '$2y$10$yU52mx.Ai5J5WAIlWZyrxuworhKc2fZL/FFwtxQNoqkHbTOyWukna', NULL, '2020-07-26 22:00:18', '2020-07-26 22:00:18'),
(4, 'laura putri', 'lauraputri@gmail.com', NULL, 0, '$2y$10$gahETRp1GswrtRj7ckE5ruNXGEB72RLpj1BsX3m6sTK9jHY9advcq', NULL, '2020-08-01 20:21:06', '2020-08-01 20:21:06'),
(5, 'Adriano', 'adriano@gmail.com', NULL, 0, '$2y$10$xZBmBDu0gK/jOYpUat83JutcQdUXGWY2G7tdn6ZNSL/bbURCCFt4G', NULL, '2020-08-05 07:11:29', '2020-08-05 07:11:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
