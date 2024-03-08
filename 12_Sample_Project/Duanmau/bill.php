<?php
session_start();
include "thuvien.php";
if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
    //lấy dữ liệu từ form để tạo đơn hàng
    $name = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $thanhtoan = 0;
    $total = tongdonhang();

    //insert đơn hàng - tạo dơn hàng mới
    $idbill = taodonhang($name, $diachi, $tel, $total, $thanhtoan);


    //lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
    //để insert vào bảng giỏ hàng
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        $tenSp = $_SESSION['giohang'][$i][1];
        $hinhSp = $_SESSION['giohang'][$i][0];
        $dongia = $_SESSION['giohang'][$i][2];
        $soluong = $_SESSION['giohang'][$i][3];
        $thanhtien = $dongia * $soluong;
        taogiohang($tenSp, $hinhSp, $dongia, $soluong, $thanhtien, $idbill);
    }

    //show form đơn hàng
    $thongtinkhachhang = 'Bạn đã đặt hàng thành công! <br> <h1>Mã Đơn Hàng Của bạn là: ' . $idbill . '</h1>
                            <h2>Thông Tin Nhận Hàng</h2>
                            <table class="thongtinkhachhang">
                            <tr>
                                <td width="28%">Họ Tên:</td>
                                <td>' . $name . '</td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ:</td>
                                <td>' . $diachi . '</td>
                            </tr>
                            <tr>
                                <td>Số Điện Thoại:</td>
                                <td>' . $tel . '</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>' . $email . '</td>
                            </tr>
                        </table> ';
    $thongtingiohang =  showgiohang();
    //unset giỏ hàng session


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="content">
        <h1>Tiệm ảnh 2004 </h1>
        <nav>
            <a href="sanpham.php">Trang chủ</a>
            <a href="cart.php">Giỏ hàng</a>
            <!-- <a href="tablet.php">Tablet</a>
            <a href="laptop.php">Laptop</a> -->
        </nav>
        <div class="icon-z">
            <div class="icon">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                </a>
            </div>

            <div class="settings-icon">
                <a href="setting.php">
                    <i class="fas fa-bars"></i>
                    <div class="caidat" id="setting-caidat">
                        Cài đặt
                        <a href="user.php">tài khoản cá nhân</a>
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="container">

        <!-- <h2>Thông Tin Nhận Hàng</h2> -->
        <!-- <table class="thongtinkhachhang">
            <tr>
                <td>Họ Tên:</td>
                <td><input type="text" name="hoten" placeholder="Nhập họ tên"></td>
            </tr>
            <tr>
                <td>Địa Chỉ:</td>
                <td><input type="text" name="diachi" placeholder="Nhập địa chỉ"></td>
            </tr>
            <tr>
                <td>Số Điện Thoại:</td>
                <td><input type="text" name="tel" placeholder="Nhập số điện thoại"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" placeholder="Nhập email"></td>
            </tr>
        </table> -->
        
        
        <h2>Giỏ Hàng</h2>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên Combo</th>
                    <th>Đơn Giá</th>
                    <th>Thời Gian</th>
                    <th>Thành Tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>

        
        </table>



    </div>

</body>

</html>
