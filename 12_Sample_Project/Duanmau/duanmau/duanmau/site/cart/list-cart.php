<?php
require '../../global.php';// Kết nối với tệp tin global.php, chứa các thiết lập toàn cục cho ứng dụng
require '../../dao/hang-hoa.php';
require '../../dao/khach-hang.php';
//-------------------------------//
extract($_REQUEST);// Trích xuất các tham số từ request


if (exist_param("form_invoice")) {// Kt nếu ng dùng đã đăng nhập
    if (isset($_SESSION['user'])) { // Lấy thông tin của ng dùng đã đăng nhập từ session
        $id = $_SESSION['user'];
        $kh = khach_hang_select_by_id($id['ma_kh']);// Trích xuất thông tin kh từ kq truy vấn
        extract($kh);
        $VIEW_NAME = "../cart/form-invoice.php";
    } else {
        // Nếu chưa đăng nhập, chuyển hướng người dùng đến trang đăng nhập
        header("location:" . $SITE_URL . "/tai-khoan/dang-nhap.php");
    }
} else {
    $VIEW_NAME = "../cart/cart.php";
}
require '../layout.php';