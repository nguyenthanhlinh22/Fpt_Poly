create database QuanLyBanHang;
use QuanLyBanHang;

create table KhachHang(
MaKhachHang varchar(5) not null,
hoVaTenLot varchar(50) not null,
Ten varchar(50) not null,
diaChi varchar(255) not null,
Email varchar(50) not null,
dienThoai varchar(11) null
);

alter table KhachHang
add constraint PRI_MaKhachHang
primary key (MaKhachHang);

ALTER TABLE KhachHang
ADD CONSTRAINT KhachHang_UNQ_EMAIL 
UNIQUE (Email);

create table SanPham(
MaSanPham int not null,
MoTa varchar(50) not null,
SoLuong int not null,
DonGia int not null,
TenSP varchar(50) null
);

alter table SanPham
add constraint PRI_MaSanPham
primary key (MaSanPham);

create table HoaDon(
MaHoaDon int not null,
NgayMuaHang date not null,
MaKhachHang varchar(5) not null,
TrangThai varchar(30) null
);

alter table HoaDon
add constraint PKI_MaHoaDon
primary key (MaHoaDon);

create table HoaDonChiTiet(
MaHoaDon int not null,
MaSanPham int not null,
SoLuong int not null,
MaHoaDonChiTiet int null
);

alter table HoaDonChiTiet
add constraint PKI_MaHoaDonChiTiet
primary key (MaHoaDonChiTiet);


-- a.
 SELECT HoaDon.MaHoaDon, HoaDon.MaKhachHang, HoaDon.TrangThai, HoaDonChiTiet.MaSanPham, HoaDonChiTiet.SoLuong, HoaDon.NgayMuaHang FROM HoaDon
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon;

-- b. 
SELECT HoaDon.MaHoaDon, HoaDon.MaKhachHang, HoaDon.TrangThai, HoaDonChiTiet.MaSanPham, HoaDonChiTiet.SoLuong, HoaDon.NgayMuaHang
FROM HoaDon
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon
WHERE HoaDon.MaKhachHang = 'KH001';

-- c.
 SELECT HoaDon.MaHoaDon, HoaDon.NgayMuaHang, SanPham.TenSP, SanPham.DonGia, HoaDonChiTiet.SoLuong, SanPham.DonGia * HoaDonChiTiet.SoLuong AS ThanhTien
FROM HoaDon
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon
JOIN SanPham ON HoaDonChiTiet.MaSanPham = SanPham.MaSanPham;

-- d. 
SELECT KhachHang.hoVaTenLot,khachhang.Ten, KhachHang.Email, KhachHang.dienThoai, HoaDon.MaHoaDon, HoaDon.TrangThai, SUM(HoaDonChiTiet.SoLuong * SanPham.DonGia) AS TongTien
FROM HoaDon
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon
JOIN SanPham ON HoaDonChiTiet.MaSanPham = SanPham.MaSanPham
JOIN KhachHang ON HoaDon.MaKhachHang = KhachHang.MaKhachHang
WHERE HoaDon.TrangThai <> 'Đã thanh toán'
GROUP BY KhachHang.hoVaTenLot,khachhang.Ten, KhachHang.Email, KhachHang.dienThoai, HoaDon.MaHoaDon, HoaDon.TrangThai;

-- e. 
SELECT MaHoaDon, NgayMuaHang, SUM(sanpham.SoLuong * sanpham.DonGia) AS TongTien FROM HoaDon
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon
WHERE SUM(sanpham.SoLuong * sanpham.DonGia) >= 500000
GROUP BY MaHoaDon, NgayMuaHang
ORDER BY TongTien DESC;

-- bai 2a.
 SELECT * FROM khachhang WHERE MaKhachHang NOT IN (SELECT DISTINCT MaKhachHang FROM hoadon WHERE NgayMuaHang >= '2016-01-01');

-- b. 
SELECT MaSanPham, TenSP FROM sanpham WHERE product_code IN (SELECT product_code FROM order_details WHERE order_id IN (SELECT order_id FROM orders WHERE MONTH(order_date) = 12 AND YEAR(order_date) = 2016) GROUP BY product_code ORDER BY SUM(quantity) DESC LIMIT 1);

-- c. 
SELECT HoaDon.MaHoaDon, HoaDon.NgayMuaHang, SUM(SanPham.SoLuong * SanPham.DonGia) AS TongTien 
FROM HoaDon 
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon 
JOIN SanPham ON HoaDonChiTiet.MaSanPham = SanPham.MaSanPham
WHERE HoaDon.MaHoaDon IN (
    SELECT MaHoaDon 
    FROM HoaDonChiTiet 
    GROUP BY MaHoaDon 
    HAVING SUM(SanPham.SoLuong * SanPham.DonGia) >= 500000
) 
GROUP BY HoaDon.MaHoaDon, HoaDon.NgayMuaHang 
ORDER BY TongTien DESC 
LIMIT 5;
-- d.
SELECT KhachHang.MaKhachHang, KhachHang.Ten, KhachHang.diaChi, HoaDon.NgayMuaHang, SanPham.TenSP
FROM KhachHang
JOIN HoaDon ON KhachHang.MaKhachHang = HoaDon.MaKhachHang
JOIN HoaDonChiTiet ON HoaDon.MaHoaDon = HoaDonChiTiet.MaHoaDon
JOIN SanPham ON HoaDonChiTiet.MaSanPham = SanPham.MaSanPham
WHERE KhachHang.diaChi = 'Da nang' 
  AND SanPham.TenSP = 'Iphone 7 32GB' 
  AND MONTH(HoaDon.NgayMuaHang) = 12 
  AND YEAR(HoaDon.NgayMuaHang) = 2016;
-- e
SELECT SanPham.TenSP 
FROM SanPham 
JOIN HoaDonChiTiet ON SanPham.MaSanPham = HoaDonChiTiet.MaSanPham 
JOIN HoaDon ON HoaDonChiTiet.MaHoaDon = HoaDon.MaHoaDon 
GROUP BY SanPham.TenSP 
HAVING SUM(HoaDonChiTiet.SoLuong) < (SELECT AVG(SoLuong) FROM (SELECT SUM(HoaDonChiTiet.SoLuong) as SoLuong FROM HoaDonChiTiet GROUP BY HoaDonChiTiet.MaSanPham) AS tb)
;