<?php
require '../../global.php'; //Import các file và biến global
extract($_REQUEST);
if (empty($_SESSION['cart'])) {//Kt xem giỏ hàng trong session có sp k
    header("location:" . $SITE_URL . "/cart/list-cart.php");// Nếu giỏ hàng trống, chuyển hướng người dùng đến trang giỏ hàng
} else {
    if ($act == "deleteAll") {//Xóa all sp khỏi giỏ hàng
        unset($_SESSION['cart']);// Xóa dl gh
        unset($_SESSION['total_cart']);// Đặt lại tổng số sp trong giỏ hàng
        header("location:" . $SITE_URL . "/cart/list-cart.php");// Chuyển hướng người dùng đến trang giỏ hàng
    } else if ($act == "delete") {//Xóa một sp cụ thể khỏi giỏ hàng
        if (array_key_exists($id, $_SESSION['cart'])) {

            $_SESSION['total_cart'] -=   $_SESSION['cart'][$id]['sl'];// Cập nhật tổng số sp trong giỏ hàng
            unset($_SESSION['cart'][$id]);// Xóa sp cụ thể
            header("location:" . $SITE_URL . "/cart/list-cart.php");
        }
    } else if ($act == "update_sl") {//Cập nhật sl sp trong giỏ hàng

        foreach ($_SESSION['cart'] as $key => $value) {
            if ($key == $_POST['ma_hh']) {
                $_SESSION['cart'][$key]['sl'] = $_POST['update_sl'];//Cập nhật sl sp 
            }
        }
        header("location:" . $SITE_URL . "/cart/list-cart.php");// Chuyển hướng người dùng đến trang giỏ hàng
    } else {
        header("location:" . $SITE_URL . "/cart/list-cart.php");
    }
}