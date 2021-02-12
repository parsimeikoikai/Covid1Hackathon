-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 12:59 PM
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
-- Database: `hackathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `region_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `name`, `region_id`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Kiambu', 1, '2014-12-30 20:47:58', '2014-12-30 20:47:58', 0),
(2, 'Kirinyaga', 1, '2014-12-30 20:48:22', '2014-12-30 20:48:22', 0),
(3, 'Murang\'a', 1, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(4, 'Nyandarua', 1, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(5, 'Nyeri', 1, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(6, 'Kilifi', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(7, 'Kwale', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(8, 'Lamu', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(9, 'Mombasa', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(10, 'Taita Taveta', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(11, 'Tana River', 2, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(12, 'Embu', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(13, 'Isiolo', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(14, 'Kitui', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(15, 'Machakos', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(16, 'Makueni', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(17, 'Marsabit', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(18, 'Meru', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(19, 'Tharaka Nithi', 3, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(20, 'Nairobi', 4, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(21, 'Garissa', 5, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(22, 'Mandera', 5, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(23, 'Wajir', 5, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(24, 'Homa Bay', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(25, 'Kisii', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(26, 'Kisumu', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(27, 'Migori', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(28, 'Nyamira', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(29, 'Siaya', 6, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(30, 'Bungoma', 7, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(31, 'Busia', 7, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(32, 'Kakamega', 7, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(33, 'Vihiga', 7, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(34, 'Baringo', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(35, 'Turkana', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(36, 'Elgeyo Marakwet', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(37, 'Kajiado', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(38, 'Kericho', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(39, 'Laikipia', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(40, 'Nakuru', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(41, 'Nandi', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(42, 'Narok', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(43, 'Samburu', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(44, 'Trans Nzoia', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(45, 'Bomet', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(46, 'Uasin Gishu', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0),
(47, 'West Pokot', 8, '2014-12-30 20:48:28', '2014-12-30 20:48:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `featured_image` text NOT NULL,
  `expenditure_types` text NOT NULL,
  `fund_source` text NOT NULL,
  `expending_body` text NOT NULL,
  `amount_expended` text NOT NULL,
  `period` date NOT NULL,
  `information_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `title`, `description`, `featured_image`, `expenditure_types`, `fund_source`, `expending_body`, `amount_expended`, `period`, `information_source`) VALUES
(1, 'sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula.', 'http://dummyimage.com/125x114.jpg/ff4444/ffffff', '', 'Hanwha Q CELLS Co., Ltd. ', 'County Government', '4894460', '2021-02-06', 'http://slashdot.org/morbi/ut.html'),
(2, 'ultrices aliquet maecenas leo odio condimentum id luctus nec molestie', 'Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'http://dummyimage.com/119x100.png/ff4444/ffffff', '', 'G-III Apparel Group, LTD.', 'County Government', '3159717', '2020-04-17', 'https://jiathis.com/magnis/dis/parturient/montes.jpg'),
(3, 'nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia.', 'http://dummyimage.com/175x219.bmp/5fa2dd/ffffff', '', 'Mobile TeleSystems OJSC', 'County Government', '833558', '2020-04-15', 'http://baidu.com/pulvinar/nulla/pede/ullamcorper.xml'),
(4, 'augue a suscipit nulla elit ac nulla sed vel enim sit amet', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/139x166.png/5fa2dd/ffffff', '', 'Energous Corporation', 'County Government', '5770028', '2020-09-25', 'http://gnu.org/vulputate/justo/in/blandit/ultrices/enim/lorem.png'),
(5, 'interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat.', 'http://dummyimage.com/196x118.png/5fa2dd/ffffff', '', 'FTD Companies, Inc.', 'County Government', '4578245', '2020-09-21', 'http://hao123.com/leo/odio/porttitor/id.jpg'),
(6, 'quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus', 'Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 'http://dummyimage.com/236x106.png/cc0000/ffffff', '', 'Ryder System, Inc.', 'County Government', '3161517', '2020-11-16', 'http://i2i.jp/neque/libero/convallis.xml'),
(7, 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede', 'Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl.', 'http://dummyimage.com/121x107.bmp/dddddd/000000', '', 'SeaWorld Entertainment, Inc.', 'County Government', '181595', '2020-08-30', 'http://princeton.edu/risus/praesent/lectus/vestibulum/quam.html'),
(8, 'ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'http://dummyimage.com/173x173.png/dddddd/000000', '', 'Wells Fargo & Company', 'National Government', '2752295', '2020-04-26', 'http://mapy.cz/etiam/faucibus/cursus/urna/ut.jpg'),
(9, 'nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', 'http://dummyimage.com/173x196.jpg/5fa2dd/ffffff', '', 'Boise Cascade, L.L.C.', 'National Government', '7356104', '2020-05-05', 'https://nymag.com/sapien/urna/pretium.jsp'),
(10, 'amet justo morbi ut odio cras mi pede malesuada in imperdiet', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.', 'http://dummyimage.com/210x221.png/cc0000/ffffff', '', 'BLACKROCK INTERNATIONAL, LTD.', 'National Government', '874342', '2020-04-24', 'http://tinyurl.com/nisl/duis/ac.png'),
(11, 'vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'http://dummyimage.com/203x112.png/5fa2dd/ffffff', '', 'Ocera Therapeutics, Inc.', 'National Government', '9736901', '2020-11-27', 'https://last.fm/in.aspx'),
(12, 'tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque', 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.', 'http://dummyimage.com/139x122.jpg/ff4444/ffffff', '', 'Hawthorn Bancshares, Inc.', 'National Government', '1387141', '2020-11-20', 'http://reference.com/non/pretium.json'),
(13, 'interdum venenatis turpis enim blandit mi in porttitor pede justo', 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus.', 'http://dummyimage.com/120x176.jpg/cc0000/ffffff', '', 'Houlihan Lokey, Inc.', 'County Government', '3228843', '2020-11-18', 'https://google.es/pretium/quis/lectus/suspendisse/potenti.aspx'),
(14, 'pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis', 'Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'http://dummyimage.com/100x210.jpg/ff4444/ffffff', '', 'Vmware, Inc.', 'County Government', '1951421', '2020-06-28', 'http://abc.net.au/blandit/lacinia.jsp');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_expenditure`
--

CREATE TABLE `monthly_expenditure` (
  `id` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Jan` int(11) NOT NULL,
  `Feb` int(11) NOT NULL,
  `March` int(11) NOT NULL,
  `April` int(11) NOT NULL,
  `May` int(11) NOT NULL,
  `June` int(11) NOT NULL,
  `July` int(11) NOT NULL,
  `August` int(11) NOT NULL,
  `September` int(11) NOT NULL,
  `October` int(11) NOT NULL,
  `November` int(11) NOT NULL,
  `December` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly_expenditure`
--

INSERT INTO `monthly_expenditure` (`id`, `Year`, `Jan`, `Feb`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
(1, 2020, 0, 0, 0, 3626637, 7356104, 0, 0, 0, 0, 0, 9736901, 0);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_counties_region_id` (`region_id`),
  ADD KEY `idx_counties_deleted` (`deleted`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_expenditure`
--
ALTER TABLE `monthly_expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `monthly_expenditure`
--
ALTER TABLE `monthly_expenditure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
