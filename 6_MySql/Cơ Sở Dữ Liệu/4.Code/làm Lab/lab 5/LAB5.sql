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


-- câu1.a
SELECT * FROM khachhang;

-- câu1.b : 
select MaKhachHang,hoVaTenLot,Email,dienThoai from khachhang;

-- câu 1.c mã sản phẩm, tên sản phẩm, tổng tiền tồn kho. Với tổng tiền tồn kho = đơn giá* số lượng
select MaSanPham,TenSP, DonGIa*SoLuong as TongTienTonKHo from sanpham;

-- câu 1.d Hiển thị danh sách khách hàng có tên bắt đầu bởi kí tự ‘H’ gồm các cột: maKhachHang, hoVaTen, diaChi. Trong đó cột hoVaTen ghép từ 2 cột hoVaTenLot và Ten
SELECT MaKhachHang, hoVaTenLot+ ''+Ten as HoVaTen, diaChi FROM khachhang 
WHERE Ten like ‘H’;