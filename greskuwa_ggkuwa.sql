-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2024 at 07:37 PM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greskuwa_ggkuwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `idkuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(100) NOT NULL,
  `deskripsi_kuliner` varchar(1000) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto_kuliner` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`idkuliner`, `nama_kuliner`, `deskripsi_kuliner`, `harga`, `foto_kuliner`) VALUES
(1, 'Nasi Krawu', 'Nasi krawu disajikan beralaskan daun pisang, membuat kamu menyantap masakan yang satu ini dengan nikmatnya. Nasi pulen yang masih hangat disajikan bersama dengan semur daging, irisan daging sapi, jeroan sapi dan sambal terasi, merupakan perpaduan yang komplet. ', '18.000 - 20.000', 'krawu.jpg'),
(2, 'Sego Rumo', 'Nasi krawu mirip dengan bubur sumsum yang berwarna oranye merupakan kuah kental yang rasanya gurih dan sedap. Penyajian sego rumo sangat unik, nasi putih disuguhkan dengan pincuk daun pisang dicampur dengan daun singkong, rempeyek atau kerupuk. Kemudian diatasnya disiram kuah kental dan ditambah dengan taburan serundeng.', '7.500 - 10.000', 'rumo.jpg'),
(3, 'Sego karak', 'Nasi Karak atau sego karak terdiri dari nasi dan ketan hitam yang sudah ditanak hingga matang. Makanan khas Kota Gresik satu ini dilengkapi dengan parutan kelapa dan tempe goreng di atas nasi. ', '10.000', 'karak.jpg'),
(4, 'Otak-otak Bandeng', 'Otak-otak bandeng merupakan bentuk olahan yang mana daging ikan bandeng dikeluarkan tanpa merusak kulit ikan. Proses pembuatan otak-otak bandeng yang menjadi makanan khas Gresik ini cukup panjang dan memakan waktu yang lama serta menggunakan rempah-rempah pilihan khas Nusantara, seperti kemiri, bawang putih, cabai merah, jahe, daun jeruk, gula pasir, serta penyedap rasa.', '15.000 - 25.000', 'otak.jpg'),
(5, 'Pudak', 'Pudak adalah makanan atau kue Kabupaten Gresik, Jawa Timur, Indonesia. Makanan ini terbuat dari bahan tepung beras, gula pasir/gula jawa dan santan kelapa yang dimasukkan kemasan yang disebut \"Ope\" yaitu pelepah daun pinang.', '30.000 - 65.000', 'pudak.jpg'),
(6, 'Legen', 'Minuman Legen adalah minuman tradisional yang dibuat dari nira pohon kelapa yang masih muda. Proses pembuatannya melibatkan fermentasi alami nira oleh ragi atau bakteri, menghasilkan minuman dengan rasa manis alami dan sedikit keasaman. Minuman ini sering dinikmati dingin sebagai minuman penyegar, terutama di daerah tropis seperti Indonesia.', '20.000 - 35.000', 'legen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `idreservasi` int(11) NOT NULL,
  `idwisata` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`idreservasi`, `idwisata`, `tanggal_pemesanan`, `tanggal_kunjungan`, `jumlah_tiket`, `no_telp`, `alamat`, `user_id`) VALUES
(1, 1, '2024-05-20', '2024-05-29', 2, 0, '0', NULL),
(2, 1, '2024-05-20', '2024-05-30', 2, 0, '0', NULL),
(3, 1, '2024-05-23', '2024-05-30', 2, 0, '0', NULL),
(4, 1, '2024-05-23', '2024-05-30', 2, 0, '0', NULL),
(5, 5, '2024-05-24', '2024-05-28', 2, 0, '0', NULL),
(6, 1, '2024-05-27', '2024-05-28', 1, 0, '0', NULL),
(7, 3, '2024-05-28', '2024-05-31', 1, 0, '0', NULL),
(8, 8, '2024-05-30', '2024-05-31', 2, 0, '0', NULL),
(9, 2, '2024-06-02', '2024-06-04', 1, 2147483647, '0', 17),
(10, 1, '2024-06-02', '2024-06-10', 1, 8977621, '0', 17),
(11, 6, '2024-06-02', '2024-06-03', 1, 93280393, 'Gresik', 17),
(12, 6, '2024-06-02', '2024-06-03', 1, 93280393, 'Gresik', 17),
(13, 1, '2024-06-04', '2024-06-20', 2, 876333, 'Gresik', 17),
(14, 5, '2024-06-07', '2024-06-25', 2, 98983783, 'Sidoarjo', 23),
(15, 5, '2024-06-07', '2024-06-19', 2, 3234242, 'Sidoarjo', 17),
(16, 8, '2024-06-09', '2024-06-21', 1, 93280393, 'Candi', 31);

-- --------------------------------------------------------

--
-- Table structure for table `ulasan_kuliner`
--

CREATE TABLE `ulasan_kuliner` (
  `idulasan` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idkulin` int(11) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan_kuliner`
--

INSERT INTO `ulasan_kuliner` (`idulasan`, `iduser`, `idkulin`, `komentar`) VALUES
(2, 17, 4, 'enak'),
(3, 18, 1, 'cocok untuk sarapan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `role`) VALUES
(1, 'maudina', 'mogimud', 'maudina99', 'halo45@gmail.com', 'user'),
(2, 'yosi', 'yosi123', 'yoseecr', 'yosii@gmail.com', 'user'),
(3, 'viska', 'vviska', 'pinka', 'viska@gmail.com', 'user'),
(4, 'kayla', 'kkayla', 'keyy', 'kayla@gmail.com', 'user'),
(5, 'kayla', 'kkayla', 'halo', 'kayla123@gmail.com', 'user'),
(6, 'selvi', 'sselvi', 'hola123', 'sselvi@gmail.com', 'user'),
(7, 'fransisca', 'fransisca99', 'fransisca123', 'ciya99@gmail.com', 'admin'),
(12, 'cia', 'ccyaa', 'cia123', 'cia@gmail.com', 'user'),
(13, 'kayla reyvani ', 'kaylarj', 'kaylarj123', 'kayla009@gmail.com', 'user'),
(14, 'bismillah', 'gaerror', 'bsimillah', 'hola@gmail.com', 'user'),
(15, 'ilham', 'ilhamadc', 'ilhamadc1', 'ilham@gmail.com', 'user'),
(16, 'ilham', 'ilhamadc', 'ilhamadc1', 'ilham@gmail.com', 'user'),
(17, 'yupi', 'yupii', 'yupio', 'yupi@gmail.com', 'user'),
(18, 'cupi', 'cupii', 'cupi1', 'cupi@gmail.com', 'user'),
(19, 'cupi', 'cupii', 'cupi1', 'cupi@gmail.com', 'user'),
(20, 'luis', 'luiss', 'luis2', 'luis2@gmail.com', 'user'),
(21, 'Louis Fachri ', 'luis', '11', 'isz@gmail.com', 'user'),
(22, 'kayla reyvani junaidi', 'kaylarrj', '3007', 'lalajuna6@gmail.com', 'user'),
(23, 'kayla cantik', 'keyy', '3007', 'lalajuna6@gmail.com', 'user'),
(24, 'arara', 'araara', '12', 'araara@gmail.c', 'user'),
(25, 'Arga', 'akbar', '12', 'akbar@f.a', 'admin'),
(30, 'juni', 'junii', '123', 'juni@gmail.com', 'user'),
(31, 'matcha', 'matchalatte', '222', 'matcha@m.c', 'user'),
(32, 'san', 'sanubarilov', 'san14', 'sanubari@g.c', 'admin'),
(33, 'matcha', 'matchalatte', '222', 'halo123@gmail.com', 'user'),
(34, 'alan walker', 'alan', '123', 'alan@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `idwisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `deskripsi_wisata` varchar(1000) NOT NULL,
  `alamat_wisata` varchar(100) NOT NULL,
  `kapasitas_harian` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`idwisata`, `nama_wisata`, `deskripsi_wisata`, `alamat_wisata`, `kapasitas_harian`, `harga_tiket`, `foto`, `jam_buka`, `jam_tutup`) VALUES
(1, 'Pantai Delegan', 'Pantai Delegan dikenal karena keberadaan mercusuar yang menjadikannya sebagai salah satu objek wisata yang menarik bagi pengunjung. Pantai ini sering menjadi tujuan liburan bagi wisatawan lokal maupun internasional yang ingin menikmati suasana pantai yang tenang dan indah.', 'Desa Delegan, Kecamatan Panceng, Kabupaten Gresik, Provinsi Jawa Timur, Indonesia', 2, 10000, 'delegan.jpg', '07:00:00', '17:00:00'),
(2, 'Pantai Mayangkara', 'Pantai Mayangkara adalah salah satu pantai yang populer di pulau tersebut. Pantai ini terkenal dengan pasir putihnya yang indah, air laut yang jernih, dan suasana alam yang masih alami. Pengunjung dapat menikmati kegiatan seperti berenang, snorkeling, atau sekadar bersantai di tepi pantai.', 'Desa Sumber Anyar, Kecamatan Sangkapura, Kabupaten Gresik, Jawa Timur, Indonesia', 2, 0, 'mayangkara.jpg', '00:00:00', '23:59:59'),
(3, 'Danau Kastoba', 'Danau Segara Anakan adalah sebuah danau air tawar yang terbentuk di dalam kawah bekas letusan gunung berapi di Pulau Bawean. Danau ini juga dikenal dengan sebutan Danau Kastoba oleh masyarakat lokal.', 'Desa Sumber Anyar, Kecamatan Sangkapura,\r\nKabupaten Gresik, Jawa Timur,\r\nIndonesia.', 2, 0, 'kastoba.jpg', '06:00:00', '18:00:00'),
(4, 'Desa Setigi', 'Desa Setigi dikelilingi oleh hamparan sawah dan hutan hijau, desa ini menjadi tujuan wisata yang menarik. Wisatawan dapat menikmati keindahan Waduk Setigi, melakukan aktivitas seperti memancing atau berenang di pemandian alami, serta mendaki Bukit Setigi untuk menikmati pemandangan spektakuler dari ketinggian.', 'Kecamatan Panceng, Kabupaten Gresik, Jawa Timur, Indonesia', 9, 15000, 'setigi.jpg', '08:00:00', '17:00:00'),
(5, 'Lontar Sewu', 'Lontar Sewu merupakan kawasan edu wisata yang menyajikan tempat hiburan yang bernuansa alami dan ramah lingkungan dengan ciri khas lontar dan hijau nya pesawahan. Di antaranya, ada wisata air, taman bermain anak, taman,rumah unik dengan warna yang mecolok, spot selfie lontar, panen air legen, jajanan kuliner, fasilitas gazebo/saung -saung untuk bersantai.', 'Hendrosari, Kec. Menganti, Kabupaten Gresik, Jawa Timur', 2, 10000, 'lontar.jpg', '08:00:00', '21:00:00'),
(6, 'Dynasty Water Park', 'Kawasan Dynasty Water Park dirancang dengan tema yang menarik, menciptakan suasana menyenangkan sekaligus memikat. Pengunjung dapat menemukan kolam renang berbagai ukuran, mulai dari yang dangkal untuk anak-anak hingga yang lebih dalam untuk mereka yang ingin berenang santai atau bahkan bermain air secara aktif.', 'l. Rantau I No.27-29, Wonorejo, Yosowilangun, Kec. Manyar, Kabupaten Gresik, Jawa Timur', 2, 25000, 'water.jpg', '09:00:00', '17:00:00'),
(8, 'Pantai Ayang-ayang', 'Pantai Ayang-Ayang Benteng Pulau Mengare memiliki pasir putih yang lembut dan air laut yang jernih dengan gradasi warna biru yang indah. Pemandangan laut yang tenang dan angin sepoi-sepoi membuat pantai ini menjadi tempat yang sempurna untuk bersantai.', 'Tajung Widoro, Tj. Widoro, Kec. Bungah, Kabupaten Gresik, Jawa Timur', 2, 35000, 'mengare.jpg', '07:00:00', '19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`idkuliner`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idreservasi`),
  ADD KEY `fk_wisata` (`idwisata`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `ulasan_kuliner`
--
ALTER TABLE `ulasan_kuliner`
  ADD PRIMARY KEY (`idulasan`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idkulin` (`idkulin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`idwisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `idkuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `idreservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ulasan_kuliner`
--
ALTER TABLE `ulasan_kuliner`
  MODIFY `idulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `idwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`idwisata`) REFERENCES `wisata` (`idwisata`);

--
-- Constraints for table `ulasan_kuliner`
--
ALTER TABLE `ulasan_kuliner`
  ADD CONSTRAINT `ulasan_kuliner_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ulasan_kuliner_ibfk_2` FOREIGN KEY (`idkulin`) REFERENCES `kuliner` (`idkuliner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
