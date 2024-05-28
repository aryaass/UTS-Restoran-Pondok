-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2021 at 11:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16382283_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_made` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `customer_name`, `contact_number`, `address`, `email`, `total`, `status`, `date_made`) VALUES
(13, 'Wada', '08065463632', 'Wadagailcom', 'gg@gmail.com', '700', 'confirmed', '2016-12-31 15:50:21'),
(14, 'Norbertus', '000000', 'Matahari', 'Ler@gmail.com', '700', 'pending', '2021-03-13 19:47:40'),
(15, 'Norbertus', '000000', 'Matahari', 'Ler@gmail.com', '700', 'pending', '2021-03-13 19:47:44'),
(16, 'Norbertus', '000000', 'Matahari', 'Ler@gmail.com', '700', 'pending', '2021-03-13 19:48:10'),
(17, 'rucci', '12345678', 'Lestari', 'rucci@gmail.com', '300', 'pending', '2021-03-14 20:00:39'),
(18, 'rucci', '0212222', 'Jarii', 'rucci@gmail.com', '5000', 'pending', '2021-03-14 20:49:26'),
(19, 'rucci', '12', '12', 'rucci@gmail.com', '5000', 'pending', '2021-03-14 20:57:03'),
(20, 'rucci', '12', '12', 'rucci@gmail.com', '250000', 'pending', '2021-03-14 22:56:27'),
(21, 'rucci', '12', '12', 'rucci@gmail.com', '10000', 'pending', '2021-03-15 11:39:27'),
(22, 'rucci', '12', '12', 'rucci@gmail.com', '10000', 'pending', '2021-03-15 11:39:29'),
(23, 'rucci', '12345678', '23', 'rucci@gmail.com', '10000', 'pending', '2021-03-15 11:39:55'),
(24, 'rucci', '12345678', '23', 'rucci@gmail.com', '10000', 'pending', '2021-03-15 11:41:42'),
(25, 'rucci', '1231241241', 'asdffAWSEFAWEF', 'rucci@gmail.com', '65000', 'pending', '2021-03-15 05:49:50'),
(26, 'yudhis', '081234567890', 'anjaymabar', 'yudhis@gmail.com', '10000', 'pending', '2021-03-15 22:46:35'),
(27, 'rucci', '12', '12', 'rucci@gmail.com', '12000', 'pending', '2021-03-15 23:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `customer_name`, `subject`, `email`, `message`) VALUES
(1, 'Adam Abdulrahman', 'Late Delivery', 'abdulflezy13@yahoo.com', 'Please ensure that your delivery guys deliver the meals at the required time because they are often late.'),
(2, 'Zainab Adamu', 'Late Delivery', 'Zee@yahoo.com', 'I need an email of the GM if possible');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_category` varchar(255) NOT NULL,
  `food_price` varchar(255) NOT NULL,
  `food_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_category`, `food_price`, `food_description`) VALUES
(32, 'Roti', 'Breakfast', '5000', 'Roti manis yang lezat dan bergizi. membuatmu semangat dipagi hari\r\n'),
(33, 'Mie', 'Lunch', '5000', 'makanan yang populer dikalangan mahasiswa, dikarenakan harganya yang murah dan tampilan aesthetic menggugah selera'),
(34, 'Babi', 'Dinner', '5000', 'kamu'),
(38, 'Makaroni Keju', 'Breakfast', '12000', 'Macaroni keju ini salah satu makanan populer Amerika. Dibuat dari macaroni dan saus keju lalu dipanggang.'),
(39, 'Nasi Goreng', 'Lunch', '25000', 'nasi goreng spesial'),
(40, 'Es Teh', 'Special', '5000', 'Teh yang berkolaborasi dengan Es membuat kamu lebih chill!'),
(41, 'Es Jeruk', 'Special', '5000', 'simple namun cocok bagi kamu yang ingin mendapatkan kesegaran dalam hari yang panas!'),
(42, 'Juice Semangka', 'Special', '5000', 'tidak disangka! juice semangka ini cocok untuk kamu yang ingin mencoba rasa juice baru'),
(43, 'Juice strawberry', 'Special', '5000', 'sangat cocok untuk kamu yang sedang mencari minuman aesthetic yang unik dan nikmat'),
(44, 'Salmon', 'Dinner', '12000', 'ikan yang memiliki protein tinggi dan kaya akan omega 3 cocok untuk kamu konsumsi dimalam hari\r\n\r\n\r\n'),
(45, 'Lasagna', 'Breakfast', '12000', 'makanan favorit Garfield, cocok untuk kamu yang ingin memulai hari'),
(46, 'Kentang Goreng', 'Breakfast', '5000', 'Kentang Goreng ini bisa dijadikan snack yang merenyahkan harimu\r\n'),
(47, 'Bakso', 'Lunch', '5000', 'Bola yang dimakan, diiringi dengan kuah aesthetic yang cocok dimakan kalau hujan.'),
(48, 'Mie Ayam', 'Lunch', '5000', 'Selain kolaborasi dengan telur ayam, Mie akhirnya berkolaborasi dengan ayam, menyebabkan rasa yang unik nan epik'),
(49, 'Sate Ayam', 'Lunch', '12000', 'daging ayam yang lezat dimasak dengan api kecemburuan yang panas, aww'),
(50, 'Ikan Goreng', 'Dinner', '12000', 'kelezatan daging ikan dipadukan dengan minyak membuat ikan goreng terasa lebih renyah dan nikmat.\r\n'),
(51, 'Ikan Bakar', 'Dinner', '12000', 'Daging ikan yang lezat dimasak dengan api kecemburuan yang panas, aww\r\n'),
(52, 'Sop Buntut', 'Dinner', '20000', 'salah satu makanan terpopuler di Indonesia. kenikmatan Sop Buntut ini tidak ada duanya!'),
(53, 'Soto Betawi', 'Lunch', '15000', 'merupakan salah satu kuliner khas Jakarta yang muncul sekitar tahun 1977-1978. Kenikmatan Sop Betawi membawa anda kembali menikmati kelezatan era Tempoe Doloe\r\n'),
(54, 'Claypot Tofu', 'Dinner', '17000', 'Makanan yang 100% dari sayur ini tidak dapat ditandingi!. sangat klop kalau dimakan saat hujan, membuat rasa tahu lebih nikmat!\r\n'),
(55, 'Cumi Goreng Tepung', 'Dinner', '15000', 'Cumi yang dibalut dengan tepung bertemu dengan minyak panas yang menghasilkan perpaduan renyah dan lezat menyatu dengan sempurna\r\n'),
(56, 'Telur Omelet', 'Breakfast', '5000', 'omelet adalah variasi hidangan telur goreng yang simple namun menarik'),
(57, 'Bistik Ayam', 'Dinner', '15000', 'sebuah hidangan daging Khas Amerika ini siap membuat anda merasakan rasa nikmat yang tidak pernah ada!'),
(58, 'Lindung Cah Fumak', 'Dinner', '12000', 'sebuah makanan yang berbahan dasar belut yang dibalut dengan tape merah, menghasilkan rasa yang lezat dan gurih!\r\n'),
(59, 'Es Kopi', 'Special', '8000', 'Kopi yang menyatu dengan Es membuatmu lebih bersemangat untuk mengerjakan tugas ini #SemangatUTS\r\n'),
(60, 'Chinese Tea', 'Special', '5000', 'teh khas china ini sangat cocok untuk kamu-kamu yang suka \'spill the tea\' bareng temen'),
(61, 'Pancake', 'Breakfast', '5000', 'Pancake ini cocok bagi kamu yang ingin sarapan simple namun enak, pancake ini lebih enak kalau dimakan dengan kopi lhoo');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `order_id`, `food`, `qty`) VALUES
(1, '13', 'pizza', '2'),
(2, '14', 'pizza', '2'),
(3, '14', ' snailchoc', '1'),
(4, '15', 'pizza', '2'),
(5, '15', ' snailchoc', '1'),
(6, '16', 'pizza', '2'),
(7, '16', ' snailchoc', '1'),
(8, '17', 'snailchoc', '6'),
(9, '18', 'Roti', '1'),
(10, '18', ' Mie', '1'),
(11, '18', ' Babi', '1'),
(12, '18', ' Salmon', '1'),
(13, '19', 'Roti', '1'),
(14, '20', 'Babi', '50'),
(15, '21', 'Roti', '2'),
(16, '22', 'Roti', '2'),
(17, '23', 'Roti', '2'),
(18, '24', 'Roti', '2'),
(19, '25', 'Roti', '13'),
(20, '26', 'Babi', '2'),
(21, '26', ' Salmon', '3'),
(22, '27', 'Makaroni Keju', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `user_type`, `password`, `fname`, `lname`, `gender`, `birthDate`) VALUES
(1, 'chill', 'arcrilest@outlook.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Chill', 'Gantenk', 'Man', '2021-02-15'),
(2, 'rucci', 'rucci@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Norbertus', 'Dewa Rucci', 'Man', '2001-06-06'),
(8, 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'Man', '2001-01-01'),
(9, 'yudhis', 'yudhistira.wardhana@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Yudhistira', 'Wardhana', 'Man', '2001-04-16'),
(11, 'yudhis', 'yudhis@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'yudhis', 'arwadana', 'Man', '2021-03-16'),
(12, 'rucci', 'rucci@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Dewa', 'Rucci', 'user', '2022-01-01'),
(13, 'benji', 'benjianjay@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Benjay', 'anjay', 'user', '2021-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
