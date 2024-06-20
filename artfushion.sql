-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 02:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artfushion`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` int(8) NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id`, `nama`, `tgl_lahir`, `asal`, `email`, `username`, `password`, `tipe`) VALUES
(1, 'kamil', '2024-05-14', 'bekasi', '12345678', 'kamil', 1111, 'admin'),
(2, 'andri', '2024-05-07', 'plg', 'asep', 'andri', 123, 'seniman'),
(8, 'brigitta', '2024-06-01', 'Jogja', 'aku@gmail.com', 'brigi', 1230, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `tempat` varchar(55) NOT NULL,
  `foto` varchar(55) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `tempat`, `foto`, `tanggal`, `deskripsi`) VALUES
(1, 'Gallerist Choice', 'Wijaya Gallery, Sleman, Yogyakarta', 'galleristchoice.jpeg', '2024', 'Mengambil peran sentral dalam menyeleksi karya-karya yang dianggap paling menarik, inovatif, atau berkualitas tinggi untuk dipamerkan kepada khalayak. Kriteria pemilihan dapat bervariasi tergantung pada fokus dan misi dari galeri tersebut, mulai dari tema tertentu, gaya seni, hingga perwakilan seniman lokal atau internasional.\r\n<br><br>\r\nPameran \"Gallery\'s Choice\" sering menjadi sorotan utama dalam kalender seni lokal maupun internasional karena menampilkan karya-karya yang dianggap istimewa oleh para ahli seni dan kurator. <br>\r\nAcara ini tidak hanya memberikan penghargaan dan pengakuan kepada seniman yang terlibat, tetapi juga memberikan kesempatan bagi pengunjung untuk menjelajahi ragam estetika dan pandangan dalam dunia seni kontemporer.\r\n<br><br>\r\nMelalui pameran \"Gallery\'s Choice\", galeri seni memberikan pernyataan artistik yang kuat tentang visi dan nilai seni yang mereka anut. Pameran semacam ini juga menjadi platform penting bagi seniman-seniman untuk mendapatkan eksposur yang lebih luas, memperluas jaringan profesional, dan memperoleh apresiasi yang lebih besar dari masyarakat seni. Dengan demikian, \"Gallery\'s Choice\" tidak hanya menjadi perayaan kreativitas dan keberagaman seni, tetapi juga sebuah wadah untuk dialog dan pertukaran ide yang memperkaya dunia seni secara keseluruhan.'),
(4, 'THEM', 'Wisma 46, Jakarta', 'them.png', '15 Juli - 29 Juli 2024\r\n    ', '\'THEM\' adalah eksplorasi ke dalam lanskap identitas pribadi yang rumit dan selalu berkembang, di mana perpaduan narasi internal dan pengaruh eksternal saling berinteraksi membentuk esensi diri yang beragam. <br><br>\r\n\r\n\r\nPara seniman yang berpartisipasi adalah Aiman, Alexander Hernandez, Ardi Gunawan, Davion Alston, Dzikra Afifah, Ezzam Rahman, Ghost Mountain Field, Grim Park, Henryette Louise, Jackson Farley, James Nguyen, Monique Yim, Naraphat Sakarthornsap, Sack Tin Lim, S. Klitgaard, Tamarra, dan Vinny Castro. Mereka melampaui sekadar eksplorasi benang-benang rumit dari gender, seksualitas, ideologi politik, latar belakang ras dan etnis, keinginan, dan berbagai elemen lainnya.<br><br>\r\n\r\nDengan menampilkan beragam perspektif dan pengalaman, pameran ini bertujuan untuk memulai dialog yang bermakna dan memicu perubahan transformatif menuju masyarakat yang lebih inklusif dan menerima.'),
(5, 'Butterfly Eyes', 'Tang Contemporary Art, Bangkok', 'butterfly.jpeg', '11 Juni - 11 Agustus 2024\r\n    ', 'Ines Katamso dan Alexander Sebastianus bersama dengan empat seniman lainnya, yaitu Berbrain, Panchat Yodmanee, Tos Suntos, dan Xiuching Tsay, tampil menonjol dalam pameran kelompok \'Butterfly Eyes\' di Tang Contemporary Art Bangkok. <br><br>\r\n\r\nDalam pameran ini, praktik artistik Ines Katamso dengan cermat menavigasi persimpangan budaya dan alam, menggali esensi keseimbangan di antara keduanya. Proses kreatifnya berkembang dari ranah mikroskopis dinamika mikroba hingga lingkup yang lebih luas dari analisis bio-historis, mendalami evolusi sistem kepercayaan dan mitologi. Melengkapi ini, Sebastianus menampilkan keahliannya dalam fotografi modern dan teknik batik tradisional Jawa, menggabungkan keduanya secara mulus untuk menciptakan karya seni yang berfungsi sebagai sarana meditasi. <br><br>\r\n\r\nMelalui perpaduan inovatif, kreasinya menawarkan ruang bagi penonton untuk kontemplasi, menyatukan lapisan-lapisan memori untuk membangun sebuah tapis kosmologis yang mengundang introspeksi dan keterlibatan.'),
(6, 'Irish Legends Through Indonesian Eyes', 'Lobby WTC, Jakarta Selatan', 'irish.webp', '27 Mei - 14 Juni 2024\r\n    ', 'Irish Legends Through Indonesian Eyes merayakan peringatan 40 tahun hubungan diplomatik antara Irlandia dan Indonesia dengan sebuah pameran seni yang istimewa. Pameran ini menampilkan karya-karya indah karya Vania Gracia, yang berkolaborasi dengan Cak Nur dan Batik Pohon. Melalui karya mereka, pengunjung diajak untuk membenamkan diri dalam sebuah narasi yang menggambarkan cerita-cerita legenda Irlandia dengan sudut pandang Indonesia. Setiap motif dalam karya seni ini tidak hanya mencerminkan kekayaan warisan budaya yang bersama-sama dihargai, tetapi juga menghadirkan sentuhan inovatif yang menggabungkan tradisi dan kreativitas kontemporer. <br><br>\r\n\r\nPameran ini tidak hanya menjadi penghormatan atas hubungan panjang dan erat antara kedua negara, tetapi juga menjadi wadah untuk memperluas pemahaman tentang budaya dan seni masing-masing. Melalui interpretasi yang unik dan kolaboratif, Irish Legends Through Indonesian Eyes berusaha membangun jembatan budaya yang kuat, memperkaya perspektif masyarakat tentang keberagaman global dalam seni dan budaya.'),
(7, 'BIRAMA 3/4', 'Jakarta Gardens', 'birama2.webp', '23 - 28 April 2024\r\n    ', 'Menyambut kehadiran tahunan kami di Art Jakarta Garden, ISA Art Gallery dengan bangga mempersembahkan \"Birama 3/4\" untuk pameran tahun 2024 dari 23-28 April di Hutan Kota by Plataran. Terinspirasi oleh konsep musik, istilah \"Birama\" berasal dari \"irama,\" yang menggambarkan ritme, sementara \"3/4\" menekankan kurasi yang berpikir dan susunan ritmis dari tiga tema menjadi satu pameran yang utuh. Memamerkan karya-karya dari 21 seniman, \"Birama 3/4\" menyoroti tema-tema yang secara konsisten muncul selama perjalanan pameran ISA Art Gallery: Women Show, Material Subject Matter, dan Paint on Canvas. <br><br>\r\n\r\nWomen Show tahun ini bertujuan untuk menerangi beragam dan kompleksitas wanita diaspora dalam dunia seni, merayakan kontribusi Rose Cameron, Sinta Tantra, Ines Katamso, Eun Vivian Lee, Yuki Nakayama, dan Hadassah Emmerich. Mengeksplorasi penggunaan beragam material dalam seni kontemporer, Material Subject Matter menampilkan bagaimana Septian Harriyoga, Galih Adika, Syllindris, Alexander Sebastianus, Jumaadi, Bandu Darmawan, Trio Muharam, dan Yosefa Aulia memaksimalkan potensi bahan yang mereka pilih untuk menyampaikan pesan artistik, melampaui batasan-batasan dalam penggunaan material dalam mewujudkan ide kreatif. Bagian Paint on Canvas dari pameran ini menghadirkan keunikan lukisan era ini melalui karya-karya Luh Gede Gita Sangita Yasa, Vanessa Jones, Ardi Gunawan, Ida Lawrence, Condro Priyoaji, Hannah Shin, dan Tara Kasenda, menyoroti lukisan sebagai salah satu bentuk seni yang paling tahan lama yang diwujudkan melalui teknik dan selera kontemporer.'),
(8, 'bioo', 'Yogyakarta', 'bio.png', '7 juni 2024\r\n    ', 'aaaaaaaaaaaaaaaaaaaaaaaaaa <br> hhhhhhhhhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `karya_seni`
--

CREATE TABLE `karya_seni` (
  `ID_karya` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karya_seni`
--

INSERT INTO `karya_seni` (`ID_karya`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 'galeri2.jpg', 'SKETCHS', 'aaaaaaaaaaaa'),
(6, 'galeri3.jpg', 'GheometricType', 'bbbbbbbbbbbbbbbbbbbbbbbbb'),
(7, 'galeri4.jpg', 'Abstract', 'cccccccccccccccccccc'),
(8, 'galeri5.jpg', 'Blurblac', 'uuuuuuuuuuuuuuu'),
(9, 'galeri6.jpg', 'HOMIES', 'kkkkkkkkkkkkk'),
(10, 'best4.jpg', 'boneka', 'zxcvbnm,');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya_seni`
--
ALTER TABLE `karya_seni`
  ADD PRIMARY KEY (`ID_karya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `karya_seni`
--
ALTER TABLE `karya_seni`
  MODIFY `ID_karya` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
