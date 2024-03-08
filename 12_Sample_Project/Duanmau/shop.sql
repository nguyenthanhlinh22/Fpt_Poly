-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2023 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `thanhtoan` int(11) NOT NULL COMMENT '0 tiền mặt, 1 ck, 2 thanh toán thẻ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `tenSp` varchar(255) NOT NULL,
  `hinhSp` varchar(255) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `tenSp`, `hinhSp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(0, 'img/1.png', '', 0, 100, 0, 18),
(0, 'img/9.png', '', 0, 200, 0, 18),
(0, 'img/6.png', '', 0, 100, 0, 18),
(0, 'img/1.png', '', 0, 100, 0, 18),
(0, 'img/1.png', 'iphone 14 Promax', 5, 100, 500, 19),
(0, 'img/9.png', 'MacBook M2 2022', 1, 200, 200, 19),
(0, 'img/6.png', 'iphone 15 Promax', 1, 100, 100, 19),
(0, 'img/1.png', 'iphone 14 Promax', 1, 100, 100, 19),
(0, 'img/11.png', 'iPad 9 WiFi', 1, 220, 220, 20),
(0, 'img/1.png', 'iphone 14 Promax', 4, 100, 400, 21),
(0, 'img/2.png', 'Oppo Zen', 1, 100, 100, 21),
(0, 'img/1.png', 'iphone 14 Promax', 1, 100, 100, 22),
(0, 'img/1.png', 'iphone 14 Promax', 1, 100, 100, 23),
(0, 'img/1.png', 'iphone 14 Promax', 4, 100, 400, 24),
(0, 'img/1.png', 'iphone 14 Promax', 3, 100, 300, 25),
(0, 'uploads/ctfn6pc6.png', 'iphone', 4, 100, 400, 26),
(0, 'uploads/7.png', 'Samsung', 4, 100, 400, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenSp` varchar(255) NOT NULL,
  `anhSp` text NOT NULL,
  `giaSp` float NOT NULL,
  `maSp` varchar(50) NOT NULL,
  `soluong` int(10) NOT NULL,
  `theloaiSp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSp`, `anhSp`, `giaSp`, `maSp`, `soluong`, `theloaiSp`) VALUES
(12, 'iPhone 14 ProMax', 'uploads/1.png', 100, '56532', 120, 'điện thoại'),
(14, 'Samsung Galaxy s23', 'uploads/4.png', 100, '123112', 192, 'điện thoại'),
(15, 'iPhone 15 Pro Max', 'uploads/6.png', 100, '019392', 283, 'điện thoại'),
(16, 'Vivi Y17s', 'uploads/5.png', 200, '127392', 182, 'điện thoại'),
(17, 'Xiaomi 13T', 'uploads/3.png', 100, '92712', 162, 'điện thoại'),
(18, 'Reno Note 10', 'uploads/8.png', 100, '182721', 211, 'điện thoại'),
(19, 'iPhone 14 Pro', 'uploads/27.png', 100, '81673', 172, 'điện thoại'),
(20, 'Realme Note10', 'uploads/2.png', 100, '15251', 132, 'điện thoại'),
(21, 'Samsung s22 Ultra', 'uploads/7.png', 100, '322123', 128, 'điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaisp`
--

CREATE TABLE `theloaisp` (
  `id` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `tenSp` varchar(50) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'STT',
  `username` varchar(50) NOT NULL COMMENT 'Tên đăng nhập',
  `ngaysinh` varchar(20) NOT NULL COMMENT 'Ngày sinh',
  `soDienthoai` varchar(10) NOT NULL COMMENT 'Số điện thoại',
  `email` varchar(50) NOT NULL COMMENT 'email người dùng',
  `password` varchar(50) NOT NULL COMMENT 'Mật khẩu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `ngaysinh`, `soDienthoai`, `email`, `password`) VALUES
(1, 'thanhnguyen', '2023-08-30', '99999', 'nguyenndtpd08628@fpt.edu.vn', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloaisp`
--
ALTER TABLE `theloaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `theloaisp`
--
ALTER TABLE `theloaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'STT', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
