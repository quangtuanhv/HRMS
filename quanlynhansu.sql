-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 09:18 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ys_chuc_vu`
--

CREATE TABLE `ys_chuc_vu` (
  `macv` int(11) NOT NULL,
  `tencv` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ys_chuc_vu`
--

INSERT INTO `ys_chuc_vu` (`macv`, `tencv`) VALUES
(1, 'Trưởng phòng'),
(2, 'Kế toán'),
(4, 'Giám đốc'),
(5, 'Bảo vệ'),
(6, 'Lập trình viên'),
(7, 'Team leader'),
(8, 'Nhân viên Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `ys_nhan_vien`
--

CREATE TABLE `ys_nhan_vien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_vu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phongban` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ys_nhan_vien`
--

INSERT INTO `ys_nhan_vien` (`manv`, `tennv`, `gioi_tinh`, `chuc_vu`, `phongban`) VALUES
(1, 'Lê Hồng Sơn', 'Nam', 'Team leader', 'Phòng kỹ thuật'),
(2, 'Nguyễn Trung Thành', 'Nam', 'Lập trình viên', 'Phòng kỹ thuật'),
(3, 'Trần Minh Hoàng', 'Nam', 'Bảo vệ', 'Phòng kỹ thuật'),
(4, 'Donal Trump', 'Nữ', 'Kế toán', 'Phòng kế toán - hành chính'),
(5, 'Ria Sakura', 'Nữ', 'Nhân viên Marketing', 'Phòng Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `ys_phong_ban`
--

CREATE TABLE `ys_phong_ban` (
  `maphong` int(11) NOT NULL,
  `tenphong` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ys_phong_ban`
--

INSERT INTO `ys_phong_ban` (`maphong`, `tenphong`) VALUES
(1, 'Phòng kế toán'),
(2, 'Phòng Marketing'),
(3, 'Phòng kỹ thuật'),
(6, 'Phòng hành chính'),
(8, 'Phòng bảo an'),
(9, 'Phòng tạp vụ'),
(10, 'Phòng điều hành'),
(11, 'Phòng phát triển dự án');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ys_chuc_vu`
--
ALTER TABLE `ys_chuc_vu`
  ADD PRIMARY KEY (`macv`);

--
-- Indexes for table `ys_nhan_vien`
--
ALTER TABLE `ys_nhan_vien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `ys_phong_ban`
--
ALTER TABLE `ys_phong_ban`
  ADD PRIMARY KEY (`maphong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ys_chuc_vu`
--
ALTER TABLE `ys_chuc_vu`
  MODIFY `macv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ys_nhan_vien`
--
ALTER TABLE `ys_nhan_vien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ys_phong_ban`
--
ALTER TABLE `ys_phong_ban`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
