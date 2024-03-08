<?php
require '../../global.php';  //liên kết tới file
require '../../dao/hang-hoa.php';

extract($_REQUEST);

if (isset($id) && $id > 0) { //kt biến $id đã được thiết lập và có giá trị lớn hơn 0 hay k
    $items = hang_hoa_select_by_id($id); //Lấy thông tin sp dựa trên $id bằng cách gọi hàm hang_hoa_select_by_id và lưu trữ kq trong biến $items
    $total = 0;
    extract($items);//giải nén các gtr từ mảng $items thành các biến riêng lẻ
    if (isset($_SESSION['cart'])) {//Kt phiên lm viec đã đc khởi tạo trong $_SESSION để lưu trữ giỏ hàng ch

        if (isset($_SESSION['cart'][$id]['sl'])) {//Kt sp với $id đã có trong giỏ hàng ($_SESSION['cart']) và đã có sl ('sl') đã đc thiết lập
            $_SESSION['cart'][$id]['sl'] += 1; //nếu có tăng 1
        } else {
            $_SESSION['cart'][$id]['sl'] = 1; //nếu k, thêm sp vào giỏ hàng và đặt sl là 1
        }
        $_SESSION['cart'][$id]['ten_hh'] = $ten_hh;//Thêm tên hh vào giỏ hàng cho sp có id tương ứng
        // $_SESSION['cart'][$id]['hinh'] = $hinh;
        $_SESSION['cart'][$id]['don_gia'] = $don_gia;//thêm giá sp vào gh có id tương ứng
        $_SESSION['cart'][$id]['giam_gia'] = $giam_gia; //Thêm thông tin về giảm giá có id tương ứng

        foreach ($_SESSION['cart'] as $key => $value) { //Duyệt qua all các sp trong giỏ hàng để tính tổng sl của các sp trong giỏ hàng
            $total += $_SESSION['cart'][$key]['sl'];
        }
        echo $total;//In ra tổng sl các sp trong giỏ hàng
    } else {
        $_SESSION['cart'][$id]['sl'] = 1;// Thêm sp vào giỏ hàng cho sp có $id tương ứng và đặt sl ('sl') là 1
        $_SESSION['cart'][$id]['ten_hh'] = $ten_hh;
        // $_SESSION['cart'][$id]['hinh'] = $hinh;
        $_SESSION['cart'][$id]['don_gia'] = $don_gia;//thêm giá sp vào gh có id tương ứng
        $_SESSION['cart'][$id]['giam_gia'] = $giam_gia;
        foreach ($_SESSION['cart'] as $key => $value) {//Duyệt qua all các sp trong giỏ hàng để tính tổng sl của các sp trong giỏ hàng
            $total += $_SESSION['cart'][$key]['sl'];
        }
        echo $total;
    }
    $_SESSION['total_cart'] = $total;//Đặt tổng sl các sp trong giỏ hàng vào biến $_SESSION['total_cart']

    header("location:" . $SITE_URL . "/cart/list-cart.php");
    //Chuyển hướng người dùng đến trang giỏ hàng sau khi đã thêm sp vào giỏ hàng thành công
}