-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 03:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golinpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat1`
--

CREATE TABLE `cat1` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat1`
--

INSERT INTO `cat1` (`id`, `title`, `text`, `img`) VALUES
(1, 'PR AND COMMUNICATIONS', 'Lorem Ipsumbis simbplylsaÄksadslkdÄ‡ÄŒSKLDAÄ†DSKLAÄ†SLDKÄ†ÄŒÄ‡salkdÄ‡asldkaÄskdaÄslk nbnn', 'Fotke/fotka2.png');

-- --------------------------------------------------------

--
-- Table structure for table `cat2`
--

CREATE TABLE `cat2` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat2`
--

INSERT INTO `cat2` (`id`, `title`, `text`, `img`) VALUES
(1, 'EVENT MANAGMENT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Fotke/fotka3.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`) VALUES
(1, 'Fotkeclients/client1.png'),
(2, 'Fotkeclients/client2.png'),
(3, 'Fotkeclients/client3.png'),
(4, 'Fotkeclients/client4.png'),
(5, 'Fotkeclients/client5.png'),
(7, 'Fotkeclients/client6.png'),
(10, 'Fotkeclients/client3.png'),
(11, 'Fotkeclients/client5.png'),
(12, 'Fotkeclients/client1.png'),
(13, 'Fotkeclients/client1.png');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(32) NOT NULL,
  `box1_img` text NOT NULL,
  `box2_img` text NOT NULL,
  `box3_img` text NOT NULL,
  `box4_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `box1_img`, `box2_img`, `box3_img`, `box4_img`) VALUES
(1, 'Ikonicekrugovi/krug1.png', 'Ikonicekrugovi/krug2.png', 'Ikonicekrugovi/krug3.png', 'Ikonicekrugovi/krug4.png');

-- --------------------------------------------------------

--
-- Table structure for table `content2`
--

CREATE TABLE `content2` (
  `id` int(32) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `box1_title` varchar(255) NOT NULL,
  `box1_content` varchar(255) NOT NULL,
  `box2_content` varchar(255) NOT NULL,
  `box2_title` varchar(255) NOT NULL,
  `box3_content` varchar(255) NOT NULL,
  `box3_title` varchar(255) NOT NULL,
  `box4_content` varchar(255) NOT NULL,
  `box4_title` varchar(255) NOT NULL,
  `box1_img` text NOT NULL,
  `box2_img` text NOT NULL,
  `box3_img` text NOT NULL,
  `box4_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content2`
--

INSERT INTO `content2` (`id`, `header_title`, `header`, `box1_title`, `box1_content`, `box2_content`, `box2_title`, `box3_content`, `box3_title`, `box4_content`, `box4_title`, `box1_img`, `box2_img`, `box3_img`, `box4_img`) VALUES
(1, 'bhb', 'bhb', 'bhb', 'bhb', 'bhb', 'bhb', 'bhb', 'bhb', '', 'bhb', 'Ikonicekrugovi/krug1.png', 'Ikonicekrugovi/krug2.png', 'Ikonicekrugovi/krug3.png', 'Ikonicekrugovi/krug4.png');

-- --------------------------------------------------------

--
-- Table structure for table `nav_top`
--

CREATE TABLE `nav_top` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav_top`
--

INSERT INTO `nav_top` (`id`, `title`, `url`) VALUES
(5, 'CLIENTS', ''),
(6, 'ABOUT US', ''),
(7, 'OFFICES', ''),
(17, 'CONTACTS', ''),
(18, 'PR AND COMMUNICATIONS', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(32) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `image`, `name`) VALUES
(2, 'Fotkeoffices/crno-bijelo/bucharest.png', 'BUCHAREST'),
(3, 'Fotkeoffices/crno-bijelo/belgrade.png', 'BELGRADE'),
(4, 'Fotkeoffices/crno-bijelo/dubai.png', 'DUBAI'),
(5, 'Fotkeoffices/crno-bijelo/hamburg.png', 'HAMBURG'),
(6, 'Fotkeoffices/crno-bijelo/istanbul.png', 'ISTANBUL'),
(7, 'Fotkeoffices/crno-bijelo/london.png', 'LONDON'),
(8, 'Fotkeoffices/crno-bijelo/madrid.png', 'MADRID'),
(9, 'Fotkeoffices/crno-bijelo/milano.png', 'MILANO'),
(10, 'Fotkeoffices/crno-bijelo/moscow.png', 'MOSCOW'),
(11, 'Fotkeoffices/crno-bijelo/paris.png', 'PARIS'),
(12, 'Fotkeoffices/crno-bijelo/podgorica.png', 'PODGORICA'),
(13, 'Fotkeoffices/crno-bijelo/riga.png', 'RIGA'),
(14, 'Fotkeoffices/crno-bijelo/stockholm.png', 'STOCKHOLM');

-- --------------------------------------------------------

--
-- Table structure for table `sastanci`
--

CREATE TABLE `sastanci` (
  `id` int(11) NOT NULL,
  `imeIprezime` varchar(128) NOT NULL,
  `firma` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `brojTelefona` varchar(64) NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sastanci`
--

INSERT INTO `sastanci` (`id`, `imeIprezime`, `firma`, `email`, `brojTelefona`, `datum`, `vrijeme`) VALUES
(1, 'huhi', 'ihi', 'sadas@gmail.com', '2323232', '2018-08-30', '00:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_role`, `randSalt`) VALUES
(59, 'sinisa', '$1$gcErtLHy$DLAbXeLeDnuy4ieHt8nLt0', 'admin', '$2y$10$iusesomecrazystrings22'),
(60, 'sinisa2', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW', 'admin', '$2y$10$iusesomecrazystrings22'),
(61, 'neko1', '$2y$10$iusesomecrazystrings2uvgnjnDOGIE6JPA9zzq36EdPnYMUav/S', 'user', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `zakazanisastanci`
--

CREATE TABLE `zakazanisastanci` (
  `id` int(11) NOT NULL,
  `imeIprezime` varchar(128) NOT NULL,
  `firma` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `brojTelefona` varchar(64) NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakazanisastanci`
--

INSERT INTO `zakazanisastanci` (`id`, `imeIprezime`, `firma`, `email`, `brojTelefona`, `datum`, `vrijeme`) VALUES
(67, 'marko markovic', 'bilokoja', 'vkl@gmail.com', '068123456', '2018-08-08', '19:00:00'),
(71, 'huhi', 'ihi', 'iuhp', 'ohpo', '2018-09-26', '08:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat1`
--
ALTER TABLE `cat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat2`
--
ALTER TABLE `cat2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content2`
--
ALTER TABLE `content2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_top`
--
ALTER TABLE `nav_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sastanci`
--
ALTER TABLE `sastanci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zakazanisastanci`
--
ALTER TABLE `zakazanisastanci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat1`
--
ALTER TABLE `cat1`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat2`
--
ALTER TABLE `cat2`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content2`
--
ALTER TABLE `content2`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nav_top`
--
ALTER TABLE `nav_top`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sastanci`
--
ALTER TABLE `sastanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `zakazanisastanci`
--
ALTER TABLE `zakazanisastanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
