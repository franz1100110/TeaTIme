-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 08:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `nama` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin01', 'admin', 'myname', 'emailadmin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `paragraph1` varchar(5000) DEFAULT NULL,
  `paragraph2` varchar(5000) DEFAULT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `video` varchar(1000) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `paragraph1`, `paragraph2`, `photo`, `video`, `tanggal`) VALUES
(1, 'Darjeeling Tea', 'Darjeeling tea is a tea made from Camellia sinensis var. sinensis that is grown and processed in the Darjeeling or Kalimpong Districts in West Bengal, India. Since 2004, the term Darjeeling tea has been a registered geographical indication referring to products produced on certain estates within Darjeeling and Kalimpong. The tea leaves are processed as black tea, though some estates have expanded their product offerings to include leaves suitable for making green, white and oolong teas.', 'The tea leaves are harvested by plucking the plant\'s top two leaves and the bud, from March to November, a time span that is divided into four flushes. The first flush consists of the first few leaves grown after the plant\'s winter dormancy and produce a light floral tea with a slight astringency; this flush is also suitable for producing a white tea. Second flush leaves are harvested after the plant has been attacked by a leafhopper and the camellia tortrix so that the leaves create a tea with a distinctive muscatel aroma. The warm and wet weather of monsoon flush rapidly produces leaves but they are less flavourful and often used for blending. The autumn flush produces teas similar, but more muted, to the second flush.  Tea plants were first planted in the Darjeeling region in the mid-1800s. At the time, the British were seeking an alternative supply of tea apart China and attempted growing the plant in several candidate areas in India. Both the newly discovered assamica variety and the sinensis variety wer', 'https://images-na.ssl-images-amazon.com/images/I/61R0wi23SbL._SL1000_.jpg', NULL, '2021-07-11'),
(2, 'Green Tea', 'Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, but its production and manufacture has spread to other countries in East Asia.', 'Several varieties of green tea exist, which differ substantially based on the variety of C. sinensis used, growing conditions, horticultural methods, production processing, and time of harvest. Although there has been considerable research on the possible health effects of consuming green tea regularly, there is little evidence that drinking green tea has any effects on health. Tea consumption has its legendary origins in China during the reign of Emperor Shennong.  A book written by Lu Yu in 618–907 AD (Tang dynasty), The Classic of Tea (simplified Chinese: 茶经; traditional Chinese: 茶經; pinyin: chájīng), is considered important in green tea history. The Kissa Yojoki (喫茶養生記 Book of Tea), written by Zen priest Eisai in 1211, describes how drinking green tea may affect five vital organs, the shapes of tea plants, flowers and leaves, and how to grow and process tea leaves. Steeping, or brewing, is the process of making tea from leaves and hot water, generally using 2 grams (0.071 oz) of tea per 100 millilitres (3.5 imp fl oz; 3.4 US fl oz) of water (H2O) or about 1 teaspoon of green tea per 150 ml cup. Steeping temperatures range from 61 °C (142 °F) to 87 °C (189 °F) and steeping times from 30 seconds to three minutes.  Generally, lower-quality green teas are steeped hotter and longer while higher-quality teas are steeped cooler and shorter, but usually multiple times (2–3 typically). Higher-quality teas like gyokuro use more tea leaves and are steeped multiple times for short durations. Steeping too hot or too long results in the release of excessive amounts of tannins, leading to a bitter, astringent brew, regardless of initial quality. The brew\'s taste is also affected by the steeping technique; two important techniques are to warm the steeping container beforehand to prevent the tea from immediately cooling down, and to leave the tea leaves in the pot and gradually add more hot water during consumption.', 'https://statik.tempo.co/?id=578654&width=650', NULL, '2021-07-11'),
(3, 'Matcha Edited', 'Matcha is finely ground powder of specially grown and processed green tea leaves, traditionally consumed in East Asia. The green tea plants used for matcha are shade-grown for three to four weeks before harvest; the stems and veins are removed during processing. During shaded growth, the plant Camellia sinensis produces more theanine and caffeine. The powdered form of matcha is consumed differently from tea leaves or tea bags, as it is suspended in a liquid, typically water or milk.', 'The traditional Japanese tea ceremony centers on the preparation, serving and drinking of matcha as hot tea, and embodies a meditative spirituality. In modern times, matcha is also used to flavor and dye foods, such as mochi and soba noodles, green tea ice cream, matcha lattes and a variety of Japanese wagashi confectionery. Matcha used in ceremonies is referred to as ceremonial-grade, meaning that the powder is of a high enough quality to be used in the tea ceremony. Lower-quality matcha is referred to as culinary-grade, but no standard industry definition or requirements exist for matcha.  Blends of matcha are given poetic names known as chamei (', 'https://image-cdn.medkomtek.com/hooq5T2U7gcgIMub0GmBXhkhU4A=/640x640/smart/klikdokter-media-buckets/medias/2308089/original/083461800_1567761205-Matcha-vs-Green-Tea-Mana-yang-Lebih-Baik-untuk-Kesehatan-By-Ekaterina-Markelova-Shutterstock.jpg', NULL, '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(255) NOT NULL,
  `articleid` int(255) DEFAULT NULL,
  `userid` int(255) DEFAULT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `nama` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(2, 'testing_2', 'testingpassword2', 'testing2', 'testmail2@mail.com'),
(3, 'testing_3', 'testingpassword3', 'testing account 3', 'testing3mail@mail.com'),
(6, 'test_5edited', 'testingpassword5', 'testing account5', 'testmail5@mail.com'),
(7, 'test_6', 'testingpassword6', 'testing account 6', 'testmail6@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
