-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 06:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlkhuonmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `hinh`
--

CREATE TABLE `hinh` (
  `MaAnh` int(11) NOT NULL,
  `TenAnh` text COLLATE utf8_unicode_ci NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidangky`
--

CREATE TABLE `nguoidangky` (
  `MaSo` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` text COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidangky`
--

INSERT INTO `nguoidangky` (`MaSo`, `HoTen`, `MaLop`, `MatKhau`) VALUES
(14104020, 'Nguyễn Thành Nhân', '2CTTBKT14A', '123456'),
(14104028, 'Châu Nhựt Tân', '2CTT14A   ', '123456'),
(15004086, 'Tô Nguyễn Hoàng Phúc', 'Nam', '123456'),
(15004087, 'Tran Hong Phuc', 'Ben Tre', '123456'),
(18004001, 'Lê Trường An', '1CTT18A1', '123456'),
(18004012, 'Nguyễn Minh Châu', '1CTT18A1', '123456'),
(18004013, 'Đặng Thị Quế Chi', '1CTT18A1', '123456'),
(18004017, 'Lê Hải Đăng', '1CTT18A1', '123456'),
(18004021, 'Nguyễn Nhựt Đông', '1CTT18A1', '123456'),
(18004027, 'Trần Minh Duy', '1CTT18A1', '123456'),
(18004035, 'Lê Nguyên Giáp', '1CTT18A1', '123456'),
(18004042, 'Nguyễn Vũ Minh Hoài', '1CTT18A1', '123456'),
(18004045, 'Trần Đức Huy', '1CTT18A1', '123456'),
(18004046, 'Trần Thế Huy', '1CTT18A1', '123456'),
(18004047, 'Lê Hoàng Huy', '1CTT18A1', '123456'),
(18004048, 'Lê Minh Kha', '1CTT18A1', '123456'),
(18004057, 'Võ Huy Khang', '1CTT18A1', '123456'),
(18004062, 'Bùi Kim Đăng Khoa', '1CTT18A1', '123456'),
(18004068, 'Đinh Thị Ngân Linh', '1CTT18A1', '123456'),
(18004082, 'Huỳnh Công Minh', '1CTT18A1', '123456'),
(18004088, 'Quách Kim Nguyên', '1CTT18A1', '123456'),
(18004089, 'Châu Thị Hoàng Nguyên', '1CTT18A1', '123456'),
(18004097, 'Nguyễn Thị Oanh', '1CTT18A1', '123456'),
(18004110, 'Nguyễn Thái Tài', '1CTT18A1', '123456'),
(18004123, 'Phan Ngọc Phương Thảo', '1CTT18A1', '123456'),
(18004124, 'Đặng Thị Mai Thi', '1CTT18A1', '123456'),
(18004144, 'Nguyễn Thị Ngọc Trinh', '1CTT18A1', '123456'),
(18004164, 'Võ Thị Lan Anh', '1CTT18A2', '123456'),
(18004170, 'Phan Mạnh Cường', '1CTT18A2', '123456'),
(18004188, 'Trần Tấn Hưng', '1CTT18A2', '123456'),
(18004192, 'Nguyễn Đinh Gia Huy', '1CTT18A2', '123456'),
(18004193, 'Nguyễn Duy Kha', '1CTT18A2', '123456'),
(18004198, 'Nguyễn Trần Đăng Khoa', '1CTT18A2', '123456'),
(18004204, 'Phan Võ Thanh Lý', '1CTT18A2', '123456'),
(18004206, 'Nguyễn Lê Minh', '1CTT18A2', '123456'),
(18004213, 'Phan Thanh Nhã', '1CTT18A2', '123456'),
(18004216, 'Từ Thị Quỳnh Như', '1CTT18A2', '123456'),
(18004217, 'Thạch Hoàng Phong', '1CTT18A2', '123456'),
(18004218, 'Trần Phú Quí', '1CTT18A2', '123456'),
(18004219, 'Phan Thị Hồng Quyên', '1CTT18A2', '123456'),
(18004221, 'Huỳnh Tấn Sang', '1CTT18A2', '123456'),
(18004223, 'Phạm Trọng Tài', '1CTT18A2', '123456'),
(18004224, 'Phạm Hoài Tân', '1CTT18A2', '123456'),
(18004225, 'Lý Thế Tân', '1CTT18A2', '123456'),
(18004227, 'Kiên Thăng', '1CTT18A2', '123456'),
(18004228, 'Nguyễn Lê Trọng Thắng', '1CTT18A2', '123456'),
(18004230, 'Nguyễn Thị Ngọc Thi', '1CTT18A2', '123456'),
(18004233, 'Nguyễn Trí Thông', '1CTT18A2', '123456'),
(18004235, 'Lê Minh Thuận', '1CTT18A2', '123456'),
(18004242, 'Đặng Minh Triết', '1CTT18A2', '123456'),
(18004243, 'Bùi Thị Tuyết Trinh', '1CTT18A2', '123456'),
(18004245, 'Lê Thanh Tùng', '1CTT18A2', '123456'),
(18004246, 'Nguyễn Khắc Tường', '1CTT18A2', '123456'),
(18004247, 'Phạm Thị Sơn Tuyền', '1CTT18A2', '123456'),
(18004249, 'Phạm Minh Quang', '1CTT18A2', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Indexes for table `nguoidangky`
--
ALTER TABLE `nguoidangky`
  ADD PRIMARY KEY (`MaSo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hinh`
--
ALTER TABLE `hinh`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `hinh_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `nguoidangky` (`MaSo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
