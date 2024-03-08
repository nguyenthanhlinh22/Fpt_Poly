<?php
session_start();
include "thuvien.php";
//tạo giỏ hàng
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//xóa giỏ hàng
if (isset($_GET['delecart']) && ($_GET['delecart'] == 1)) unset($_SESSION['giohang']);
//xóa sản phâm trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $tenSp = $_POST['tenSp'];
    $hinh = $_POST['hinh'];
    $soluong = $_POST['soluong'];
    $giaSp = $_POST['giaSp'];

    $fl = 0; //kiểm tra sp có trong giỏ hàng kh

    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $tenSp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    // nếu kh trùng sp trong giỏ hàng thì thêm mới
    if ($fl == 0) {
        //thêm mới sp vào giỏ hàng
        $sp = [$tenSp, $hinh, $soluong, $giaSp];
        $_SESSION['giohang'][] = $sp;
    }
    // var_dump($_SESSION['giohang']);
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
        <form action="bill.php" method="post">

            <h2>Thông Tin Nhận Hàng</h2>
            <table>
                <tr>
                    <td>Họ Tên:</td>
                    <td><input class="a1" type="text" name="hoten" placeholder="Nhập họ tên"></td>
                </tr>
                <tr>
                    <td>Địa Chỉ:</td>
                    <td><input class="a2" type="text" name="diachi" placeholder="Nhập địa chỉ"></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại:</td>
                    <td><input class="a3" type="text" name="tel" placeholder="Nhập số điện thoại"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="a4" type="email" name="email" placeholder="Nhập email"></td>
                </tr>
            </table>

            <h2>Giỏ Hàng</h2>
            <table>
                <thead>
                    <tr style="text-align: center;">
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Tên combo</th>
                        <th>Đơn Giá</th>
                        <th>Thời Gian</th>
                        <th>Thành Tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                <?php echo showgiohang(); ?>
            </table>


            <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="checkout-button">
            <a href="cart.php?delecart=1"><button class="checkout-button1">Xóa giỏ hàng</button></a>
            <button class="checkout-button2"><a class="a5" href="sanpham.php">Tiếp tục mua hàng</a></button>
    </div>
    </form>
</body>

</html>