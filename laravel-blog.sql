-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2020 at 05:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-blog`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_16_031053_create_table_categories', 1),
(5, '2020_07_16_035702_create_table_artikel', 1);

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
-- Table structure for table `table_artikel`
--

CREATE TABLE `table_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_artikel`
--

INSERT INTO `table_artikel` (`id`, `judul`, `body`, `gambar`, `categories_id`, `created_at`, `updated_at`) VALUES
(17, 'pasang-case-hp', '<p>Smartphone jaman sekarang memang canggih dan sangat memudahkan orang melakukan aktifitasnya. Meskipun canggih HP sekarang diklaim tidak sekuat HP pada jaman dulu. &nbsp;Apalagi pada bagian kaca LCDnya. Untuk itu banyak orang yang menambahkan tempered glass pada gadget masing-masing. Meskipun berbahan kaca, tempered glass bisa melindungi kaca gadget. Dan apabila HP Anda jatuh dan pecah, maka yang pecah hanya tempered glassnya saja dan tidak akan membuat LCD ikut pecah.</p>\r\n\r\n<p>Memasang tempered glasspun juga gampang-gampang susah. &nbsp;Hanya membutuhkan kesabaran dan ketelitian. Bagi Anda yang sudah sering memasang tempered glass pasti bukan hal yang susah untuk dilakukan. Namun bagi yang belum pernah memasangnya pasti akan mengalami kesulitan. Untuk itu kali ini Unicase Store akan berbagi sedikit tips bagaimana memasang tempered glass sendiri.</p>\r\n\r\n<p>1. Persiapkan Alat</p>\r\n\r\n<p>Sebelum Anda membuka segel tempered glass pastikan Anda sudah menyiapkan peralatannya. Yang Anda butuhkan adalah gunting dan selotip. Gunting berguna untuk membuka segel dan sticker dalam tempered glass. Sedangkan selotip bisa Anda gunakan untuk menghilangkan debu.</p>\r\n\r\n<p>2.Bersihkan Layar dengan Alkohol</p>\r\n\r\n<p>Setelah Anda mengeluarkan isi dalam box tempered glass hal pertama yang harus Anda lakukan adalah bersihkan layar HP dengan menggunakan alcohol yang sudah terdapat pada kemasan dan keringkan dengan fibercloth. Kemudian hilangkan debu dengan sticker yang juga tersedia dalam kemasan.</p>\r\n\r\n<p>3.Pasang Tempered Glass</p>\r\n\r\n<p>Saat memasang tempered glass pastikan tidak ada debu yang menempel di layar hape. Karena nanti akan merusak keindahan layar. Selain itu jangan terlalu terburu-buru, pastikan sisi kanan-kiri atas dan bawah sama/tidak miring. Setelah itu tempelkan tempered glass dengan hati-hati. Setelah terpasang, gosok layar dengan fibercloth untuk menghilangkan sisa gelembung.</p>\r\n\r\n<p>Jika masih ada debu, yang menempel angkat dengan squeeze tepi layar untuk mengambil debu kemudian dengan menggunakan bantuan selotip angkat debu tersebut sampai hilang. Jangan menggunakan kuku, karena akan merusak lem pada tempered glass.</p>', 'artikel/hiwkzWQBA2t98z3c8rPC1SoNx9vWF35HMtV6Wov0.jpeg', 21, '2020-07-18 08:41:57', '2020-07-18 08:41:57'),
(18, 'cara-membedakan-spigen-original-vs-spigen-palsu', '<p>Peran gadget di era modern ini tidak hanya sebagai penghubung antar manusia saja, namun gadget telah menghubungkan manusia dengan berbagai informasi terkini. Tak heran, jika gadget menjadi bagian dari gaya hidup, karena memberikan kemudahan dalam satu genggaman, dan yang terpenting berbagai jenis data dapat disimpan di dalamnya. Melihat pentingnya peran gadget tersebut, sudah sewajarnya Anda memberikan perlindungan terbaik bagi gadget Anda, salah satunya dengan gadget&rsquo;s case berkualitas seperti Spigen SGP Original. Sayangnya, kepopuleran premium case Spigen SGP menjadi peluang bagi sebagian kalangan untuk menciptakan Spigen palsu, sehingga tak sedikit konsumen yang kecewa. Bagaimana membedakannya? Unicase akan berbagi sedikit informasi untuk membedakan keduanya.</p>\r\n\r\n<p>20150202_163145 What is in the box? Spigen Original vs KW</p>\r\n\r\n<p><br />\r\nAda Harga, Ada Kualitas<br />\r\nCara membedakan case asli dan yang palsu sebenarnya terlihat dari harganya. Misalnya, jika harga pasaran Spigen asli Rp 375.000, kemudian ada yang menjual dengan harga Rp 175.000 ke bawah, besar kemungkinan barang yang murah adalah Spigen palsu.</p>\r\n\r\n<p>Berstiker Hologram Original (dengan logo Spigen) &amp; Berkode produksi (SKU)<br />\r\nSpigen Original memiliki kemasan yang terlihat lebih profesional dan premium, tidak banyak tempelan. Ciri utama pada bagian kemasan adalah stiker hologram original (terdapat logo Spigen) dan kode produksi di bagian belakang. Sementara yang palsu, memiliki &nbsp;sticker original tetapi tidak berlogo Spigen dan Spigen palsu tidak ada kode produksi pada bagian belakang. Pada contoh gambar di bawah ini, sebelah kiri adalah box Spigen ori, dan sebelah kanan adalah box spigen kw.</p>\r\n\r\n<p>20150202_162610 20150202_162643</p>\r\n\r\n<p>Kesesuaian Warna Barang dengan Warna pada Label<br />\r\n20150202_162715</p>\r\n\r\n<p>20150202_163651</p>\r\n\r\n<p>Spigen Original, sebagai contoh Neo Hybrid Galaxy S5 memiliki warna biru elektrik sesuai dengan deskripsi dan contoh warna pada labelnya. Sehingga warna bagian polikarbon lebih menyala dan lebih terang, sedangkan warna Spigen palsu cenderung pudar atau pucat.</p>\r\n\r\n<p>Selain itu Spigen KW terkadang warna box tidak sesuai dengan barang yang didapat, seperti contoh di atas, di box tertuliskan warna Gunmetal, tetapi barang yang didapat adalah warna Electric Blue.</p>\r\n\r\n<p>Bagian TPU memiliki spiderwebbed interior berlogo Spigen SGP Original<br />\r\n20150202_163459</p>\r\n\r\n<p>Di bagian dalam softcase (TPU), terdapat lingkaran bertuliskan ORIGINAL.SPIGEN.COM. Sedangkan pada Spigen palsu, hanya terdapat lingkaran tanpa tulisan.</p>', 'artikel/ofE7J5jCSFFg6O0l0HEqlD88GKK9uAYFShgaTZp2.jpeg', 21, '2020-07-18 08:43:00', '2020-07-18 08:43:00'),
(19, 'pertolongan-pertama-saat-mobil-mogok-dan-ponsel-low-batt', '<p>Mobil seketika berhenti menyala atau mogok ditengah jalan sangat tidak diharapkan saat berkendara. Apalagi pada saat keadaan mendesak seperti saat pergi ke kantor ataupun saat ada keperluan penting. Untuk orang yang paham betul dengan mesin mobil, ini mungkin bukan masalah besar. Tapi bagaimana &nbsp;dengan pengguna mobil yang kurang mengetahui bagaimana mengatasinya? Mobil mogok tentu akan menjadi salah satu masalah besar dan membuat panik.</p>\r\n\r\n<p>Mobil yang mogok tentu memiliki beberapa kemungkinan penyebabnya. Salah satunya yaitu karena aki mobil yang sudah soak dan ditandai dengan mobil yang tidak mau menyala saat distarter. Nah, supaya mobil bisa nyala kembali, perlu gunakan jumper starter untuk mengalirkan tekanan daya untuk mobil Anda.</p>\r\n\r\n<p>Anker Compact Car Jump Starter and Portable Charger</p>\r\n\r\n<p>Perangkat yang satu ini memiliki kemampuan untuk memberikan tekanan mesin kendaraan berkapasitas gas/bensin 3 liter, atau mesin diesel berkapasitas 2.5 liter, seperti mobil, motor dan perahu boat. Dalam sekali charge, tekanan yang diberikan alat ini dapat mencapai 15 kali penekanan daya. Dirancang dengan fitur keselamatan yang lebih tinggi. Jadi sangat aman untuk melindungi Anda dan mobil Anda dari lonjakan alur listrik berlebihan atauhubungan listrik arus pendek.</p>\r\n\r\n<p>Bagaimana cara menggunakan Anker Compact Car Jump Starter?</p>\r\n\r\n<p>Tekan tombol power dan pastikan jump starter sudah terisi daya lebih dari 25% (satu garis LED)<br />\r\nMasukkan kabel jumper ke port jump 12V<br />\r\nSambungkan penjepit merah ke terminal &ldquo;+&rdquo; dan penjepit hitam untuk &ldquo;-&rdquo; ke aki mobil<br />\r\nMulailah hidupkan kendaraan saat lampu indikator kabel jumper sudah berubah hijau.&nbsp;</p>\r\n\r\n<p>Pada bagian atas lainnya, terdapat Senter LED yang dapat Anda fungsikan ketika terjebak mogok di tempat kurang cahaya. Untuk penggunaan optimal, charge perangkat ini setidaknya satu kali dalam jangka 3 bulan untuk menghindari memperpendek umurnya. Segera mungkin isi ulang baterai Car Jump Starter Anda setelah digunakan.</p>\r\n\r\n<p>Beberapa hal yang perlu Anda perhatikan :</p>\r\n\r\n<p>Untuk menghindari cedera atau kerusakan kendaraan Anda, jangan menghubungkan penjepit merah dan penjepit hitam secara bersama-sama.<br />\r\nLepaskan baterai tersebut dalam waktu 30 detik saat akan menghidupkan mobil Anda.<br />\r\nJauhkan dari jangkauan anak-anak.</p>\r\n\r\n<p>Selain dapat digunakan pada kendaraan, Car Jump Starter ini juga bisa Anda manfaatkan sebagai portable charger atau powerbank. Dengan kapasitas yang cukup besar yaitu 10.000 mAh, Anda dapat mengisi ulang perangkat Anda beberapa kali. Memiliki 2 port USB, sehingga dapat Anda gunakan untuk mengisi 2 perangkat sekaligus seperti ponsel, tablet, kamera ataupun &nbsp;perangkat lainnya. Memiliki ukuran cukup kecil, sehingga praktis dan bahkan dapat Anda simpan pada glovebox Anda.</p>', 'artikel/uhOYhVlIiaRh965ml7ya1hqOLandT6kgi5C81nwS.jpeg', 23, '2020-07-18 09:09:28', '2020-07-26 06:04:19'),
(20, 'cara-merokok-yang-sehat', '<p>&ldquo;Merokok Membunuhmu&rdquo;. Begitulah pesan yang tertulis di tiap bungkus rokok. Pesan ini lebih mirip dogma yang harus diyakini kebenarannya. Kalau membaca peringatan itu, seolah olah orang yang merokok langsung mati.</p>\r\n\r\n<p>Jangan terburu-buru menarik kesimpulan. Bahwa rokok memiliki kandungan zat negatif bagi tubuh, semua orang juga tahu. Namun, bukan berarti kandungan zat negatif, seperti nikotin, tak bisa dinetralisir.</p>\r\n\r\n<p>Belum lagi, banyak fakta, ahli hisap tembakau bisa tetap sehat dan berumur panjang. Salah satunya, Suparman Sidomejo yang akrab disapa Mbah Gotho. Pria yang lahir 1870 itu, tetap bugar meski sudah puluhan tahun mengonsumsi tembakau.</p>\r\n\r\n<p>Di usia yang hampir 146 tahun, ia tetap bisa menikmati kepulan tembakau sembari duduk di kursi miliknya di teras rumah Mbah Gotho, tentu saja salah satu fakta unik bahwa tembakau bisa juga bersahabat dengan tubuh. Bukan pembunuh seperti terus didengungkan kelompok anti tembakau.</p>\r\n\r\n<p>Bahkan, seiring kemajuan medis, ada banyak fakta-fakta temuan baru, para ahli hisap tembakau tetap bisa sehat menikmati hidup. Syaratnya, menjaga asupan makan dan menerapkan konsumsi makanan yang bisa menetralisir nikotin.</p>\r\n\r\n<p>Misal, perokok disarankan untuk mengonsumsi makanan mengandung omega 3 seperti kacang-kacangan, ikan teri, udang, kepiting, dan sayuran hijau karena secara ilmiah membantu menurunkan tingkat lender dalam paru-paru.</p>\r\n\r\n<p>Konsumsi juga makanan minuman yang terbuat dari kedelai, seperti susu kedelai, tempe, tahu, karena dapat memperbaiki fungsi paru-paru dan mengurangi resiko sesak nafas. Flavonoid yang terdapat dalam kedelai berfungsi sebagai anti-peradangan sehingga melindungi paru-paru dari paparan nikotin di tembakau.</p>\r\n\r\n<p>Sempatkan juga konsumsi makanan yang punya banyak kandungan anti oksidan, seperti apel, brokoli, wortel, buah bit dan lain sebagainya. Sebuah penelitian menyebutkan, mereka yang mengonsumsi apel 5 buah dalam seminggu jantung dan paru-parunya berfungsi lebih baik dibanding yang tidak sama sekali.</p>\r\n\r\n<p>Konsumsi juga jeruk nipis karena mampu menurunkan kadar nikotin sebesar 70,65. Para perokok disarankan juga untuk lebih banyak konsumsi air putih karena air putih memiliki kegunaan mengeluarkan nikotin dari dalam tubuh. Tak kalah penting, luangkan waktu sekitar 30 menit untuk berolahraga ringan sehingga asupan oksigen ke tubuh bertambah.</p>\r\n\r\n<p>O, iya, rokok dan kopi bagi sebagian orang memang paduan yang pas dan nikmat. Namun akan lebih baik diselingi atau bahkan diganti dengan jus segar atau susu agar dapat dapat menetralisir nikotin yang masuk ke dalam tubuh.</p>\r\n\r\n<p>Riset paling anyar di Inggris, seperti dilansir BBC, juga menguak fakta menarik. Para perokok bisa tetap sehat bugar hingga puluhan tahun, juga dikarena ada faktor gen. Prof Martin Tobin, salah seorang peneliti dari University of Leicester, mengatakan gen punya andil besar terhadap cara paru-paru tumbuh dan merespons cedera.</p>\r\n\r\n<p>Penelitian yang dipublikasikan dalam jurnal Lancet Respiratory Medicine, membandingkan perokok dan non perokok yang terjangkit paru-paru kronis atau Chronic Obstructive Pulmonary Disease (COPD).</p>\r\n\r\n<p>Dari uji coba yang melibatkan 50.000 sukarelawan itu, ditemukan ada DNA tertentu yang bekerja mengurangi risiko COPD. Hasil riset itu menyebutkan, perokok yang punya &lsquo;gen baik&rsquo; akan lebih memiliki risiko penyakit paru kronis dibanding mereka yang punya ;gen buruk&rsquo;.</p>\r\n\r\n<p>Nah, terbukti, ada banyak faktor tubuh tetap bisa bugar meski merokok.|</p>', 'artikel/uvlSQ20VeuP4C4bNTPZmO2reYkJpyT1fMVHSnOkt.jpeg', 21, '2020-07-26 05:36:56', '2020-07-26 07:16:40'),
(22, 'mengatasi-bootloop', '<p>Cara mengatasi bootloop Android</p>\r\n\r\n<p>Setelah Anda ketahui apa itu bootloop dan jenisnya, sekarang kita akan coba mengetahui bagaimana cara mengatasi bootloop di Android.</p>\r\n\r\n<p>Baik bootloop ringan ataupun berat sama-sama membutuhkan penanganan. Bootloop ringan walau Anda anggap tidak menggangu namun suatu saat akan menjadi parah yang tetap akan merepotkan. Jadi, ada baiknya untuk diperbaiki sebagaimana yang direkomendasikan.</p>\r\n\r\n<p>Mengatasi bootloop ringan</p>\r\n\r\n<p>Untuk memperbaiki perangkat yang mengalami bootloop ringan tidak diperlukan langkah-langkah teknis. Matikan perangkat Anda (jika hidup) kemudian cabut memori, kartu dan baterai. Kemudian diamkan selama 30 menit sampai 24 jam. Setelah itu pasang dan hidupkan kembali. Lalu amati, jika masalah bootloop masih terjadi maka lanjutkan ke solusi kedua.</p>', 'artikel/wgnbX0oTyHQMv2B6ymURcQhDFiTRwa1RmloxLRuR.png', 22, '2020-07-26 07:13:01', '2020-07-26 07:13:18'),
(23, 'cara-membuang-hp', '<p>Smartphone milikmu rusak, Toppers? Biasanya, selain dibiarkan teronggok di gudang, hp rusak akan langsung dibuang oleh pemiliknya.</p>\r\n\r\n<p>Alasannya sederhana, hp tersebut sudah tidak lagi bermanfaat. Padahal, hp rusak, baterai bekas atau komputer usang tergolong limbah elektronik yang tidak boleh dibuang sembarangan, lho.</p>\r\n\r\n<p>Tanpa pengelolaan yang tepat, limbah elektronik yang dibuang sembarangan bisa merusak lingkungan bahkan kesehatan dirimu, Toppers.</p>\r\n\r\n<p>Lagipula, masih banyak lho hal bermanfaat yang bisa kamu lakukan dengan hp rusak. Makanya, Toppers, ketimbang langsung dibuang sebaiknya lakukan 6 cara di bawah ini. Dijamin, akan lebih aman dan pastinya menguntungkan untukmu. Yuk, disimak.</p>\r\n\r\n<p>1. Donasikan HP Rusak<br />\r\nJika hp kamu benar-benar rusak dan sudah tidak dapat diperbaiki sama sekali, jangan langsung dibuang, ya.</p>\r\n\r\n<p>Sebab, kamu bisa menyumbangkannya ke lembaga yang menerima perangkat rusak. Biasanya, lembaga atau campaign khusus ini akan memperbaiki hp rusak milikmu dan memberikannya ke orang yang membutuhkan, atau mengolahnya menjadi benda lain yang akan dijelaskan di poin berikutnya.</p>\r\n\r\n<p>Kamu juga bisa mendonasikan ke orang yang membutuhkan HP tapi hanya mampu membayar biaya reparasi.&nbsp;</p>\r\n\r\n<p>Alternatif lainnya adalah memberikannya pada tukang loak yang berkeliling mencari perangkat elektronik yang sudah usang atau rusak.</p>\r\n\r\n<p>Setelah mengumpulkan banyak benda elektronik, biasanya benda tersebut akan ditimbang dan diolah menjadi sesuatu yang baru atau diperjualbelikan kembali di pasar loak khusus untuk barang-barang elektronik.&nbsp;</p>\r\n\r\n<p>Tentukan saja cara mana dari dua pilihan tersebut yang paling praktis untukmu. Smartphone milikmu rusak, Toppers? Biasanya, selain dibiarkan teronggok di gudang, hp rusak akan langsung dibuang oleh pemiliknya.</p>\r\n\r\n<p>Alasannya sederhana, hp tersebut sudah tidak lagi bermanfaat. Padahal, hp rusak, baterai bekas atau komputer usang tergolong limbah elektronik yang tidak boleh dibuang sembarangan, lho.</p>\r\n\r\n<p>Tanpa pengelolaan yang tepat, limbah elektronik yang dibuang sembarangan bisa merusak lingkungan bahkan kesehatan dirimu, Toppers.</p>\r\n\r\n<p>Lagipula, masih banyak lho hal bermanfaat yang bisa kamu lakukan dengan hp rusak. Makanya, Toppers, ketimbang langsung dibuang sebaiknya lakukan 6 cara di bawah ini. Dijamin, akan lebih aman dan pastinya menguntungkan untukmu. Yuk, disimak.</p>\r\n\r\n<p>1. Donasikan HP Rusak<br />\r\nJika hp kamu benar-benar rusak dan sudah tidak dapat diperbaiki sama sekali, jangan langsung dibuang, ya.</p>\r\n\r\n<p>Sebab, kamu bisa menyumbangkannya ke lembaga yang menerima perangkat rusak. Biasanya, lembaga atau campaign khusus ini akan memperbaiki hp rusak milikmu dan memberikannya ke orang yang membutuhkan, atau mengolahnya menjadi benda lain yang akan dijelaskan di poin berikutnya.</p>\r\n\r\n<p>Kamu juga bisa mendonasikan ke orang yang membutuhkan HP tapi hanya mampu membayar biaya reparasi.&nbsp;</p>\r\n\r\n<p>Alternatif lainnya adalah memberikannya pada tukang loak yang berkeliling mencari perangkat elektronik yang sudah usang atau rusak.</p>\r\n\r\n<p>Setelah mengumpulkan banyak benda elektronik, biasanya benda tersebut akan ditimbang dan diolah menjadi sesuatu yang baru atau diperjualbelikan kembali di pasar loak khusus untuk barang-barang elektronik.&nbsp;</p>\r\n\r\n<p>Tentukan saja cara mana dari dua pilihan tersebut yang paling praktis untukmu.&nbsp;</p>', 'artikel/YYkHbqMGB24XAAnrBjQPncatSYkZ9FOZkMSznKph.png', 23, '2020-07-26 07:25:39', '2020-07-26 07:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `table_categories`
--

CREATE TABLE `table_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_categories`
--

INSERT INTO `table_categories` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(21, 'Android', 'android', '2020-07-18 08:39:26', '2020-07-26 06:35:47'),
(22, 'Laptop', 'laptop', '2020-07-18 08:54:50', '2020-07-26 06:35:41'),
(23, 'Software', 'software', '2020-07-18 08:55:00', '2020-07-26 06:35:34'),
(24, 'Game', 'game', '2020-07-18 08:55:10', '2020-07-26 06:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laili Septiandi', 'lailiseptiandi2@gmail.com', NULL, '$2y$10$U3vMsbyQMDg7.VY6bJuNmuc8Jfw0S71Wb8jNXvGHOGUYxMWizUr.W', NULL, '2020-07-16 11:21:59', '2020-07-16 11:21:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `table_artikel`
--
ALTER TABLE `table_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_artikel_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `table_categories`
--
ALTER TABLE `table_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_artikel`
--
ALTER TABLE `table_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `table_categories`
--
ALTER TABLE `table_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_artikel`
--
ALTER TABLE `table_artikel`
  ADD CONSTRAINT `table_artikel_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `table_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
