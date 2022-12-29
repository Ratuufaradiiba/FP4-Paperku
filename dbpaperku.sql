-- MariaDB dump 10.19  Distrib 10.5.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_paperku
-- ------------------------------------------------------
-- Server version	10.5.18-MariaDB-1:10.5.18+maria~ubu2004

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `download_jurnal`
--

DROP TABLE IF EXISTS `download_jurnal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download_jurnal` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jurnal_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download_jurnal`
--

LOCK TABLES `download_jurnal` WRITE;
/*!40000 ALTER TABLE `download_jurnal` DISABLE KEYS */;
INSERT INTO `download_jurnal` VALUES (9,11,'2022-08-09 10:37:34','2022-11-23 10:37:34'),(10,11,'2022-01-15 17:44:29','2022-11-23 10:43:31'),(11,11,'2022-11-23 10:43:34','2022-11-23 10:43:34'),(12,11,'2022-11-23 10:45:19','2022-11-23 10:45:19'),(13,11,'2022-11-23 10:45:21','2022-11-23 10:45:21'),(14,11,'2022-11-23 10:52:26','2022-11-23 10:52:26'),(15,11,'2022-05-08 17:54:01',NULL),(16,11,'2022-05-19 17:54:41',NULL),(17,11,'2022-11-27 11:29:12','2022-11-27 11:29:12'),(18,11,'2022-11-27 11:30:28','2022-11-27 11:30:28'),(19,11,'2022-11-27 11:30:30','2022-11-27 11:30:30'),(20,11,'2022-11-30 04:52:20','2022-11-30 04:52:20'),(21,11,'2022-11-30 05:16:09','2022-11-30 05:16:09'),(22,11,'2022-12-02 23:51:58','2022-12-02 23:51:58'),(23,11,'2022-12-02 23:52:01','2022-12-02 23:52:01'),(24,11,'2022-12-09 10:28:19','2022-12-09 10:28:19'),(25,11,'2022-12-09 11:29:56','2022-12-09 11:29:56'),(26,11,'2022-12-09 11:30:23','2022-12-09 11:30:23'),(27,11,'2022-12-09 11:30:40','2022-12-09 11:30:40'),(28,11,'2022-12-14 19:49:32','2022-12-14 19:49:32'),(29,11,'2022-12-14 19:53:06','2022-12-14 19:53:06'),(30,11,'2022-12-14 19:53:26','2022-12-14 19:53:26'),(31,11,'2022-12-14 19:53:36','2022-12-14 19:53:36'),(32,11,'2022-12-14 20:01:23','2022-12-14 20:01:23'),(33,11,'2022-12-15 00:08:18','2022-12-15 00:08:18'),(34,11,'2022-12-18 21:09:19','2022-12-18 21:09:19'),(35,11,'2022-12-19 00:58:26','2022-12-19 00:58:26'),(36,11,'2022-12-19 06:17:25','2022-12-19 06:17:25'),(37,11,'2022-12-19 06:17:36','2022-12-19 06:17:36'),(38,11,'2022-12-19 18:49:57','2022-12-19 18:49:57'),(39,11,'2022-12-19 21:43:13','2022-12-19 21:43:13'),(40,11,'2022-12-19 23:26:18','2022-12-19 23:26:18'),(41,11,'2022-12-19 23:26:18','2022-12-19 23:26:18');
/*!40000 ALTER TABLE `download_jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal`
--

DROP TABLE IF EXISTS `jurnal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_profile` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jurnal_kategori1_idx` (`id_kategori`),
  KEY `fk_jurnal_profile1_idx` (`id_profile`),
  CONSTRAINT `fk_jurnal_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jurnal_profile1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal`
--

LOCK TABLES `jurnal` WRITE;
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
INSERT INTO `jurnal` VALUES (11,'Digitalisasi dan Ketimpangan Pendidikan: Studi Kasus terhadap Guru Sekolah Dasar di Kecamatan Baraka',2022,'assets/img/jurnals/TBqoTTdWwHr3Gb1IzsZ5PidkMgLaXOTVj0cMCmQM.png','assets/img/jurnals/G0L771FarSxDO45SnupFEX7aFNPdGbZvdH4K7TQK.pdf','Digitalisasi pendidikan pada dasarnya merupakan upaya pemerintah untuk pemerataan akses pendidikan','Digitalisasi pendidikan pada dasarnya merupakan upaya pemerintah untuk pemerataan akses pendidikan dan mengurangi masalah kesenjangan digital dalam dunia pendidikan. Artikel ini bertujuan mengidentifikasi aspek kebijakan digitalisasi pendidikan yang diterapkan pada sekolah dasar di Kecamatan Baraka dan menganalisis sejauh mana kebijakan digitalisasi membantu guru sekolah dasar untuk meningkatkan akses pendidikan serta mengejar ketertinggalan digital. Metode yang digunakan dalam penelitian ini adalah kualitatif dengan pendekatan studi kasus. Responden penelitian ini adalah 13 guru dari 4 sekolah dasar, 1 kepala sekolah, dan 1 pengawas sekolah dasar. Data dikumpulkan melalui wawancara mendalam terhadap mereka dan dokumentasi. Hasil penelitian menunjukkan bahwa terdapat dua aspek kebijakan digitalisasi pendidikan yang dirasakan secara langsung oleh guru-guru sekolah dasar di Kecamatan Baraka. Pertama, digitalisasi komunikasi kebijakan pendidikan dan kedua, digitalisasi pembelajaran. Pada aspek pertama, para guru mengalami akselerasi akses pada kebijakan-kebijakan pendidikan. Para guru dapat lebih memahami kebijakan pendidikan nasional dan bisa mengikuti arahan langsung dari Pemerintah Pusat melalui kanal informasi yang tersedia. Namun pada aspek kedua, para guru belum menunjukkan kesiapan digital yang memadai. Mereka belum memanfaatkan berbagai perangkat lunak yang diberikan untuk memaksimalkan pembelajaran, seperti Rumah Belajar dan Canva, meskipun mereka telah mengetahui tentang fasilitas-fasilitas tersebut.',1,NULL,'2022-12-09 11:28:55',2,NULL),(27,'KEMAMPUAN BERPIKIR KREATIF SISWA BERDASARKAN POLA ASUH ORANGTUA',2013,'assets/img/jurnals/SA0eTVXCTbgUjLbG6tJFWspDv3EEAqfoSF4vGK7t.png','assets/img/jurnals/BFFnLIq4daCFSGene5qkYfy0na4G7LaOJeGf2h0n.pdf','BERPIKIR KREATIF','Peningkatan keteladanan akhlak mulia dan kompetensi pendidik dalammenyongsong implementasi kurikulum 2013 mutlak diperlukan',1,'2022-11-27 10:49:01','2022-12-10 20:58:49',8,NULL),(32,'Keselamatan Kerja di Laboratorium',2018,'assets/img/jurnals/VoxUSitRDDLTJImk6VYsQFCTna56B25z1yT3EpLi.jpg','assets/img/jurnals/6PN5N2QVKClL4EmxIBaJ493DMcTXwZGxZeiBYF9m.pdf','Perhatikan Larangan Ini Untuk Keselamatan Kerja di Laboratorium','Laboratorium adalah suatu tempat dimana mahasiswa, dosen, peneliti dsb melakukan\r\npercobaan. Percobaan yang dilakukan menggunakan berbagai bahan kimia, peralatan\r\ngelas dan instrumentasi khusus yang dapat menyebabkan terjadinya kecelakaan bila\r\ndilakukan dengan cara yang tidak tepat. Kecelakaan itu dapat juga terjadi karena\r\nkelalaian atau kecerobohan kerja, ini dapat membuat orang tersebut cedera, dan bahkan\r\nbagi orang disekitarnya. Keselamatan kerja di laboratorium merupakan dambaan bagi\r\nsetiap individu yang sadar akan kepentingan kesehatan, keamanan dan kenyamanan kerja.\r\nBekerja dengan selamat dan aman berarti menurunkan resiko kecelakaan. Walaupun\r\npetunjuk keselamatan kerja sudah tertulis dalam setiap penuntun praktikum, namun hal\r\nini perlu dijelaskan berulang-ulang agar setiap individu lebih meningkatkan kewaspadaan\r\nketika bekerja di laboratorium.',4,'2022-12-09 10:21:52','2022-12-09 11:06:02',11,NULL),(47,'KESEHATAN MENTAL MASYARAKAT INDONESIA (PENGETAHUAN, DAN KETERBUKAAN MASYARAKAT TERHADAP GANGGUAN KESEHATAN MENTAL)',2022,'assets/img/jurnals/agTddvA73MSAkAwKbcmBAni4ClaizI5qincBXuUS.png','assets/img/jurnals/fOcLTkURnjpuo2XEcRyZ6XcAZIr9EQybGeGAXU6P.pdf','Kesehatan Mental, Gangguan Kesehatan Mental, Paradigma Masyarakat','Kesehatan mental merupakan sebuah kondisi dimana individu terbebas dari segala bentuk\r\ngejala-gejala gangguan mental. Individu yang sehat secara mental dapat berfungsi secara normal\r\ndalam menjalankan hidupnya khususnya saat menyesuaikan diri untuk menghadapi masalah-masalah\r\nyang akan ditemui sepanjang hidup seseorang dengan menggunakan kemampuan pengolahan stres.\r\nKesehatan mental merupakan hal penting yang harus diperhatikan selayaknya kesehatan fisik.\r\nDiketahui bahwa kondisi kestabilan kesehatan mental dan fisik saling mempengaruhi. Gangguan\r\nkesehatan mental bukanlah sebuah keluhan yang hanya diperoleh dari garis keturunan. Tuntutan\r\nhidup yang berdampak pada stress berlebih akan berdampak pada gangguan kesehatan mental yang\r\nlebih buruk.\r\nDi Indonesia, berdasarkan Data Riskesdas tahun 2007, diketahui bahwa prevalensi gangguan\r\nmental emosional seperti gangguan kecemasan dan depresi sebesar 11,6% dari populasi orang\r\ndewasa. Berarti dengan jumlah populasi orang dewasa Indonesia lebih kurang 150.000.000 ada\r\n1.740.000 orang saat ini mengalami gangguan mental emosional (Depkes, 2007). Data yang ada\r\nmengatakan bahwa penderita gangguan kesehatan mental di Indonesia tidaklah sedikit sehingga\r\nsudah seharusnya hal tersebut menjadi sebuah perhatian dengan tersedianya penanganan atau\r\npengobatan yang tepat.\r\nDi berbagai pelosok Indonesia masih ditemui cara penanganan yang tidak tepat bagi para\r\npenderita gangguan kesehatan mental. Penderita dianggap sebagai makhluk aneh yang dapat\r\nmengancam keselamatan seseorang untuk itu penderita layak diasingkan oleh masyarakat. Hal ini\r\nsangat mengecawakan karena dapat mengurangi kemungkinan untuk seorang penderita pulih. Untuk\r\nitu pemberian informasi, mengedukasi masyarakat sangatlah penting terkait kesehatan mental agar\r\nstigma yang ada di masyarakat dapat dihilangkan dan penderita mendapatkan penanganan yang tepat.\r\nKata Kunci : Kesehatan Mental, Gangguan Kesehatan Mental, Paradigma Masyarakat',4,'2022-12-19 00:30:32','2022-12-19 00:30:32',30,41),(48,'Pengaruh komponen fisik dan motivasi latihan terhadap keterampilan bermain sepakbola',2020,'assets/img/jurnals/KHYhBLFhFbZf0TShHlJWfGtt5zk9Jrbmna1ZTj3e.png','assets/img/jurnals/cF07R3MgNP6EJKHMeMwvO3ozcXcTxc8vAhj5kSzQ.pdf','The effect of physical ability and training motivation towards soccer skills','Penelitian ini bertujuan untuk menguji pengaruh komponen fisik yakni kelentukan, kelincahan,\r\nkoordinasi mata-kaki, kecepatan, keseimbangan dan motivasi latihan terhadap keterampilan bermain sepakbola. Berdasarkan sifatnya yang bertujuan untuk menguji (Explanatory) maka penelitian ini menggunakan\r\nanalisis jalur (path analisis). Variabel independen yaitu kelentukan, kelincahan, koordinasi mata-kaki, dan\r\nmotivasi latihan, adapun variabel dependen yaitu keterampilan bermain sepakbola (tes teknik dasar passing,\r\ndribbling, shooting, jugling, dan heading) yang diakumulasi kedalam nilai T-score. Teknik',8,'2022-12-19 00:48:51','2022-12-19 00:48:51',2,2),(49,'Perilaku Konsumtif Gamers Genshin Impact terhadap Pembelian Gacha',2021,'assets/img/jurnals/hoEBsYaJ7tDSyLmaaDi5ccfe5FG4MojONCRI2ou0.png','assets/img/jurnals/HGA0qoQcPXlX46j60aVoz1KUJBe31DMWDpaCRUTY.pdf','Keywords: Consumptive Behavior; Gacha Purchase; Gamers Genshin','The purpose of this study is to empirically examine the effect of gamers\' consumptive behavior on gacha purchases in the Genshin Impact Game. Gacha is a game based on the player\'s chance and luck. Most of these games are usually free-to-play games with a gacha system as an incentive to use real currency to collect rare (limited) items. The research method used is a quantitative type. The number of research samples is 250 people from the population of Genshin Impact players whose number is unknown, with the sampling technique is accidental sampling. The large influence of consumptive behavior on the purchase of gacha can be seen in the results of the coefficient of determination (R2) as a percentage of 74.5%. With the results of this coefficient, it can be concluded that the purchase of gacha by 74.5% is influenced by the consumptive behavior of the players, while the remaining 25.5% is contributed by other factors that can be explained by other variables outside the model.',1,'2022-12-19 00:57:03','2022-12-19 02:08:23',32,46),(50,'EVALUASI UI/UX PADA GAME VALORANT MENGGUNAKAN METODE ENHANCED COGNITIVE WALKTHROUGH',2022,'assets/img/jurnals/LpNVzKP8LGU8TmvgXzsQ0fY8T5QxObdBa1dZLzhH.png','assets/img/jurnals/yi8rSs1dS5B2P1qKlY0FbkUAY9fE9pPKti6j0HlR.pdf','KEYWORDS: Game, User Interface, User Experience, Enhanced Cognitive Walkthrough, Valorant','Permainan ialah sebuah kegiatan hiburan yang bertujuan mengisi waktu luang. Salah satu publisher dan developer di industri games, yakni Riot Games mempunyai salah satu permainan yang dinamai Valorant. Valorant merupakan game kompetitif 5 vs 5. Game ini berjenis First-Person Shooter, berjenis game-game shooter kompetitif. Dibalik kesuksesan itu ada satu hal penting yang mendasari sebuah game bisa menjadi terkenal dan sukses dipasaran, yakni user experience dan User Interface. User experience ialah ilmu yang mempelajari tentang kenyamanan sebuah produk di mata penggunanya. Salah satu metode untuk evaluasi Interface yakni Metode Enhanced Cognitive Walkthrough, metode ini merupakan metode evaluasi sebuah aplikasi dengan cara memberikan skenario tugas dan beberapa pertanyaan yang akan ditanyakan kepada pengguna untuk mengetahui adanya permasalahan atau tidak dalam menggunakan aplikasi. Penggunaan metode ini bisa menilai seberapa mudah aplikasi tersebut saat dioperasikan langsung oleh pengguna. Partisipan pengujian yang dipilih dalam penelitian ini yakni pengguna game Valorant yang sudah memainkan game Valorant dan pengguna yang belum pernah memainkan game Valorant. Jumlah partisipan pengujian yang akan digunakan berjumlah 20 yang dibagi 10 pengguna game Valorant yang sudah memainkan game Valorant dan 10 pengguna yang belum pernah memainkan game Valorant. Hasil dari penelitian ini diharapkan bisa memberikan saran perbaikan sebagai bahan pertimbangan bagi publisher dan developer untuk melakukan perbaikan.',3,'2022-12-19 01:09:13','2022-12-19 02:09:22',32,46),(53,'memperkuat ketahanan pangan demi masa depan',2022,'assets/img/jurnals/8ZacmB6l4s7u7FkUOWJT3xuN16soKDtLDNfHmawE.png','assets/img/jurnals/X6YldHaCoAceCuSY4qSS2Wwr5DxhWpawMVBL8Oaz.pdf','Sulit dimengerti','Buku ini merupakan kajian tentang kondisi dan tantangan yang dihadapi Indonesia dalam masalah pangan selama kurun waktu 10 tahun yang akan datang. Selain memberikan analisa mengenai berbagai permasalahan dan tantangan, buku ini juga menyajikan tiga skenario mengenai ketahanan pangan di masa depan,',2,'2022-12-19 21:10:35','2022-12-19 21:10:35',39,56);
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Pendidikan',NULL,'2022-11-17 06:03:00'),(2,'Manajemen Bisnis',NULL,'2022-11-16 09:17:35'),(3,'Sistem dan Teknologi Informasi',NULL,NULL),(4,'Kesehatan',NULL,NULL),(8,'Olahraga','2022-11-16 09:24:21','2022-11-16 09:24:21'),(12,'Sejarah','2022-12-02 09:04:24','2022-12-02 09:04:24'),(13,'Kedokteran','2022-12-07 21:23:59','2022-12-07 21:23:59');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_11_08_023201_create_pengguna_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',43,'token','9486e2d33255e3180eba13881f0d1dee52cecf38cc756fa4f30bfe937dccc8b6','[\"*\"]',NULL,NULL,'2022-12-18 20:02:46','2022-12-18 20:02:46'),(2,'App\\Models\\User',2,'token','cfcc0d919d6538cf75c5f6700b687bc54ae5abd29c06038e544cbd59c2cfa3f0','[\"*\"]','2022-12-19 07:41:01',NULL,'2022-12-19 07:39:36','2022-12-19 07:41:01'),(3,'App\\Models\\User',2,'token','f1a2e91958ec7ce9fb4599e607afa63a433c8f9ce14e85880d2b3ac7a4674811','[\"*\"]','2022-12-19 21:33:31',NULL,'2022-12-19 07:52:31','2022-12-19 21:33:31');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,'penulis511','penulis511','queen@gmail.com','assets/img/users/RFUbrieGWiBrtzFDv45XxaKVfZNBzEHl6QRo94zL.jpg',NULL,'2022-12-14 19:20:18',30),(2,'Rizky Dharma Sanjaya','RizkyDarms','rizkydarms@gmail.com','assets/img/authors/QnVQlTOLgpSuSPv3GG2wDJdSAvBQHJ0EgRAYYyYG.jpg',NULL,'2022-12-12 07:39:21',31),(8,'Alea Mazaya Taleetha','Mazlea','Mazlea@gmail.com','assets/img/authors/eQVotIxieKe6oNBho6EWupilyiSNeirR2ssQK0EO.jpg','2022-11-18 02:23:50','2022-11-27 10:27:35',33),(11,'Shafa Kania','Kania','shafakania@gmail.com','assets/img/authors/Ds2oKYm4yqklG8kmY6nKDalhpyCXUlSlE6n7PkII.jpg','2022-12-07 21:59:41','2022-12-09 11:32:26',34),(17,'penulis5','penulis5','penulisaya@gmail.com','assets/img/users/6JRUV924B67QM1bPRxtvmiCJUxx9L2DqVhJu7Civ.jpg','2022-12-13 22:28:14','2022-12-14 17:19:40',35),(30,'Ratu Faradiba1','Ratu1113','ratufaradiba@gmail.com','assets/img/users/LPj5ZaWFdGRbcgOQR5fusHJJgjQjCieWSAlscBMe.jpg','2022-12-14 19:48:27','2022-12-19 00:31:02',41),(31,'Octaviantyo','Octav','octav@gmail.com','assets/img/users/spbgm6H02wyf5xTt9Cvlz1cvSjzpz8kDFehwf9kK.png','2022-12-19 00:44:05','2022-12-19 00:45:05',45),(32,'Kimi Isabelle','kimicikimi','kimicikimi@gmail.com','assets/img/users/sRLw42soVJdXe1256utOlbum1RfCkt6cSyKTK6hL.jpg','2022-12-19 00:50:35','2022-12-19 01:01:17',46),(33,'author','author','author@gmail.com','assets/img/users/rlL06W6gLqAtkiYlEVbwPhR769A0hRPtXPlba4J7.jpg','2022-12-19 01:36:41','2022-12-19 01:37:24',47),(34,'anto','anto','anto@gmail.com','assets/img/users/yVxQrV990eac0yIAqA0caVRzWkahKwMVnKUkJT2h.png','2022-12-19 06:19:06','2022-12-19 06:22:09',48),(35,'mamat','mamat12','sipolan@gmail.com','assets/img/users/8kknsLgXdmNkzvPoTgx30mYusqbyq5VZKXT1ZcCq.png','2022-12-19 07:17:47','2022-12-19 07:20:10',50),(36,'budi','budi','budi@gmail.com','assets/img/users/0BRVUsxP9Yxtg4yqPiyuZX6IgGWDBnNG73elZWe5.png','2022-12-19 18:55:16','2022-12-19 18:56:32',52),(37,'Ali Akbar','ali','ali@gmail.com','assets/img/users/zbexMrwb7eN5aiwt8LZqvYufPigRDFNGBaTMfarP.png','2022-12-19 19:32:54','2022-12-19 19:33:46',54),(38,'sawal','sawal','sawal@gmail.com','assets/img/users/HM1PsOx29rYEBQD9SKQeauLoOo1MweW9qTAkSgZY.png','2022-12-19 19:34:41','2022-12-19 19:35:30',55),(39,'Muhammad Rasyidi','rasyidi12','gusion@gmail.com','assets/img/users/17nAQ7KmQUtjSvbVBviWeJ7p7YwO7iEeYJmX2Gbx.png','2022-12-19 21:05:51','2022-12-19 21:08:18',56);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 0,
  `foto` varchar(100) DEFAULT NULL,
  `role` enum('user','admin','penulis') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com','admin',NULL,'$2a$12$881mZdZ5siv70hyS.CEpNudI8KO3PY3yij2TO8OCqTH3F7zUYM5A2',1,'assets/img/users/9RGEdOxvOyiGKwge1n1L3TNSb2ZyFZVvSIB7JjvJ.jpg','admin',NULL,'2022-11-15 11:07:26','2022-12-12 07:16:36'),(2,'Rizky Dharma Sanjaya','rizkydarms@gmail.com','rizkydarms',NULL,'$2y$10$9XP3cWZN3Dfz4ICfGDV2Z.4Ssec40qw9L2nNq3.vtaARPZ420Vgmm',0,'assets/img/users/fmUEMSAMdyxQSwq3YDBgA4bD4KbC9RQEUdTHnhlC.jpg','admin',NULL,'2022-11-15 11:53:56','2022-12-16 04:56:28'),(3,'RatuFaradiba','ratu@gmail.com','ratu',NULL,'$2y$10$sNrMvI658boPEVntnMrh4OTU5BpXzeTD4mcYNWXPR6SsxczuEu8iy',1,'assets/img/users/lFhP4phINdSC4XlvLMhLDVJMCRYrbkgbcBzg6x7R.jpg','admin',NULL,'2022-11-15 21:07:10','2022-12-12 07:16:19'),(5,'Rasidi','rasidi@gmail.com','mamat',NULL,'$2y$10$AQ3WDDT8ZHHRvXggGYWZaecdpB.iwvqua91R/cXrOePxyUk0.dGP2',1,'assets/img/users/5o1UM2zMFchss9QkIbhcpkZf6GbIJ9w58O6lNt1P.png','user',NULL,'2022-11-25 10:17:43','2022-12-12 07:16:46'),(20,'Agung Oktaviani','agung@gmail.com','agungkusanagi',NULL,'$2y$10$/YefXaufkjYth/OQ.wPaSOngnwFwIpy51lFBk5vB3awe8g/s9Rex6',1,'assets/img/users/e2yDQqcK2sjsZGjKEQO1ncWbMZAEnZvJ9JCxY6rp.png','user',NULL,'2022-11-30 05:19:30','2022-12-16 04:47:43'),(41,'Ratu Faradiba1','ratufaradiba@gmail.com','Ratu1113',NULL,'$2y$10$gFQI8tGel0v1Ki3.JHYzIOkDb4IaHDhw5tkzVFAKAzLtgWIycaMn.',0,'assets/img/users/LPj5ZaWFdGRbcgOQR5fusHJJgjQjCieWSAlscBMe.jpg','penulis',NULL,'2022-12-14 19:48:27','2022-12-19 00:31:02'),(42,'rasyidi1','rasyidi1@gmail.com','rasyidi1',NULL,'$2y$10$kN18uoFNBSlVzHCNwV/5nO8w3g68pbT0jDGri/2h51U4mBvoI2IFC',1,'assets/img/users/u7XmxTPomuvaGgVJLPCBiN4VdgTAwcMF1qQF9de5.jpg','user',NULL,'2022-12-14 20:19:04','2022-12-14 20:20:05'),(43,'nelan','nelan@gmail.com','',NULL,'$2y$10$NEOcZOH2ZKA3cT.BEMr1T.84/Ps1CrPeorQLa/kKz8RjYJqbmyUay',0,NULL,'user',NULL,'2022-12-18 20:01:17','2022-12-18 20:01:17'),(44,'Rico','ricoadrian@gmail.com','Rico Adrian',NULL,'$2y$10$Rdokx/BOGxwKQRIG.tcOp.cVnZrSlidwR7ezxoEqyGIwL8Thr9Rp2',1,'assets/img/users/lVzDuM1zbqjElBqmqk4SRf5lTw0DEvgIFEd7H8LO.jpg','user',NULL,'2022-12-19 00:34:48','2022-12-19 00:35:42'),(45,'Octaviantyo','octav@gmail.com','Octav',NULL,'$2y$10$EfY03mHvvFAlLjEQCkKs3OICwzw1WCanb.xHQAE//8WPgj4fEb8si',1,'assets/img/users/spbgm6H02wyf5xTt9Cvlz1cvSjzpz8kDFehwf9kK.png','penulis',NULL,'2022-12-19 00:44:05','2022-12-19 00:45:05'),(46,'Kimi Isabelle','kimicikimi@gmail.com','kimicikimi',NULL,'$2y$10$2Zw7UIHRT7EZH.hvqEEsB.bVf58gdZ6F9IiXty24fNPGWU3zBwaVu',1,'assets/img/users/sRLw42soVJdXe1256utOlbum1RfCkt6cSyKTK6hL.jpg','penulis',NULL,'2022-12-19 00:50:35','2022-12-19 01:01:17'),(47,'author','author@gmail.com','author',NULL,'$2y$10$whMe/KBN8sBq86OhfQ9Ap.Lw1YUWY2qTG7UWc7SraP.RPegbz6xN.',1,'assets/img/users/rlL06W6gLqAtkiYlEVbwPhR769A0hRPtXPlba4J7.jpg','penulis',NULL,'2022-12-19 01:36:41','2022-12-19 01:37:11'),(51,'kusanoctavyanto','kusanoctavyanto@gmail.com','',NULL,'$2y$10$JY5YHUEccQr4hu35.hC0cuFjmlOcz5Eq.tR7ZZzI70TSmhphxxe4e',0,NULL,'user',NULL,'2022-12-19 07:58:02','2022-12-19 07:58:02'),(52,'budi','budi@gmail.com','budi',NULL,'$2y$10$a29uccIfvK6hgw1vGWkpYOLFfds/ReG8q15n7TkKXkJRjc3wKDmUi',1,'assets/img/users/0BRVUsxP9Yxtg4yqPiyuZX6IgGWDBnNG73elZWe5.png','penulis',NULL,'2022-12-19 18:55:16','2022-12-19 18:56:32'),(53,'Anto','anto@gmail.com','anto',NULL,'$2y$10$ay0zBZ82kjYslsNxgzaz1.isfk5OsKzB2ru5uBYqAZXFw.m7bTkb.',1,NULL,'user',NULL,'2022-12-19 18:57:52','2022-12-19 18:57:52'),(54,'Ali Akbar','ali@gmail.com','ali',NULL,'$2y$10$eLpVsmKDthDB8bB6IZl87O72ngZNFsq8eBBzx4W23GYiscU0co3qG',1,'assets/img/users/zbexMrwb7eN5aiwt8LZqvYufPigRDFNGBaTMfarP.png','penulis',NULL,'2022-12-19 19:32:54','2022-12-19 19:33:46'),(55,'sawal','sawal@gmail.com','sawal',NULL,'$2y$10$28VDT.Ta/FwIrKTyKc9NneOLDPoRUZ3ryMWlUplz/YgFuz7g.hX.6',1,'assets/img/users/HM1PsOx29rYEBQD9SKQeauLoOo1MweW9qTAkSgZY.png','penulis',NULL,'2022-12-19 19:34:41','2022-12-19 19:35:30'),(56,'Muhammad Rasyidi','gusion@gmail.com','rasyidi12',NULL,'$2y$10$5LB2jbtxeh7eJ1jwBS80z.Uoism6TzCvesGdRlCeyqWTxxVff7ohC',1,'assets/img/users/17nAQ7KmQUtjSvbVBviWeJ7p7YwO7iEeYJmX2Gbx.png','penulis',NULL,'2022-12-19 21:05:51','2022-12-19 21:08:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_paperku'
--

--
-- Dumping routines for database 'db_paperku'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-29 20:56:03
