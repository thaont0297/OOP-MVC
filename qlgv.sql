-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 07:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlgv`
--

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `que` varchar(255) NOT NULL,
  `luongcung` int(11) NOT NULL,
  `thuong` int(11) NOT NULL,
  `phat` int(11) NOT NULL,
  `luongthuclinh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`id`, `ten`, `ngaysinh`, `que`, `luongcung`, `thuong`, `phat`, `luongthuclinh`) VALUES
(1, 'Nguyễn Thị Oanh', '1997-01-21', 'Ninh Thuận', 5000000, 1500000, 0, 6500000),
(2, 'Nguyễn Thị Thu Thảo', '1997-04-12', 'Hà Nội', 8000000, 2000000, 500000, 9500000),
(3, 'Hà Minh Đại', '1990-06-12', 'Thanh Hóa', 7000000, 1000000, 30000, 7970000),
(4, 'Đặng Thị Trang', '1996-07-23', 'Hưng Yên', 4000000, 1000000, 20000, 4980000),
(5, 'Trần Văn Thanh', '1993-12-12', 'Hải Dương', 12000000, 3000000, 200000, 14800000),
(6, 'Vũ Tiến Thành', '1992-04-02', 'Hải Dương', 13000000, 3000000, 100000, 15900000),
(7, 'Trần Mai Anh', '1998-01-12', 'Nam Định', 4000000, 500000, 0, 4500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
