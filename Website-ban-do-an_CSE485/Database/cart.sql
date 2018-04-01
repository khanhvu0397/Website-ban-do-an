-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2018 lúc 05:06 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anvat`
--

CREATE TABLE `anvat` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `anvat`
--

INSERT INTO `anvat` (`id`, `name`, `image`, `price`) VALUES
(11, 'Chân Gà Xả Ớt', '../image/changaxaot.jpg', 60000),
(12, 'CHân Gà Rang Muối', '../image/changarangmuoi.jpg', 60000),
(13, 'Trứng Cút Xào Me', '../image/trungcutxaome.jpg', 40000),
(14, 'Cá Viên Chiên ', '../image/cavienchien.jpg', 25000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `com`
--

CREATE TABLE `com` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `com`
--

INSERT INTO `com` (`id`, `name`, `image`, `price`) VALUES
(1, 'Cơm Rang Dưa Bò', '../image/comrangduabo.jpg', 50000),
(2, 'Cơm Cá Kho', '../image/comcakho.jpg', 50000),
(3, 'Cơm Rang Hải Sản', '../image/comranghaisan.jpg', 55000),
(4, 'Cơm Hải Sản ', '../image/comxaocantoi.jpg', 55000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `douong`
--

CREATE TABLE `douong` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `douong`
--

INSERT INTO `douong` (`id`, `name`, `image`, `price`) VALUES
(7, 'Nước Cam Ép', '../image/nuoccamep.jpg', 50000),
(8, 'Sinh Tố Dưa Hấu', '../image/sinhtoduahau.jpg', 50000),
(9, 'Nước Chanh Tươi', '../image/nuocchanh.jpg', 55000),
(10, 'Sữa Ngô', '../image/suango.jpg', 55000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mixao`
--

CREATE TABLE `mixao` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `mixao`
--

INSERT INTO `mixao` (`id`, `name`, `image`, `price`) VALUES
(5, 'Mì Xào Bò', '../image/mixaobo.jpg', 45000),
(6, 'Mì Xào Hải Sản', '../image/mixaohaisan.jpg', 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ruoubia`
--

CREATE TABLE `ruoubia` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ruoubia`
--

INSERT INTO `ruoubia` (`id`, `name`, `image`, `price`) VALUES
(15, 'Chivas', '../image/chivas.jpg', 50000),
(16, 'Marlboro', '../image/marlboro.jpg', 50000),
(17, 'Bia', '../image/bia.jpg', 55000),
(18, 'Vodka ', '../image/vodka.jpg', 55000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anvat`
--
ALTER TABLE `anvat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `douong`
--
ALTER TABLE `douong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mixao`
--
ALTER TABLE `mixao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ruoubia`
--
ALTER TABLE `ruoubia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anvat`
--
ALTER TABLE `anvat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `com`
--
ALTER TABLE `com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `douong`
--
ALTER TABLE `douong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `mixao`
--
ALTER TABLE `mixao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ruoubia`
--
ALTER TABLE `ruoubia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
