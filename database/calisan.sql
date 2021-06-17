-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: June 01, 2021 at 07:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `calisan`
--

CREATE TABLE `calisan` (
  `id` int(6) NOT NULL,
  `ad` varchar(55) NOT NULL,
  `soyad` varchar(55) NOT NULL,
  `sehir` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calisan`
--

INSERT INTO `calisan` (`id`, `ad`, `soyad`, `sehir`, `email`) VALUES
(1, 'Muhammed', 'Selvi', 'Istanbul', 'kakvikhmer007@gmail.com'),
(2, 'Ömer ', 'Demir', 'Bursa', 'soengsouy@gmail.com'),
(3, 'Faruk', 'Dag', 'Istanbul', 'soengsouy@gmail.com'),
(4, 'Kübra', 'Türkoglu', 'Bursa', 'kakvikhmer007@gmail.com'),
(5, 'Adem', 'Pelit', 'Bursa', 'kakvikhmer007@gmail.com'),
(6, 'Hasan', 'YUcedag', 'Istanbul', 'kakvikhmer007@gmail.com'),
(7, 'Melis', 'Varan', 'Istanbul', 'kakvikhmer007@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calisan`
--
ALTER TABLE `calisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calisan`
--
ALTER TABLE `calisan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
