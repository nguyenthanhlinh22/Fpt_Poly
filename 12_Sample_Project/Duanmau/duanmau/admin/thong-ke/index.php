<?php
require_once "../../global.php"; //nhúng tệp
require_once "../../dao/thong-ke.php";

check_login();//kt ng dùng đăng nhập ch


if (exist_param("chart")) { //kt biến get chart tồn tại hay k
    $VIEW_NAME = "chart.php";
} else {
    $VIEW_NAME = "list.php";
}
$items = thong_ke_hang_hoa(); //gọi hàm thong_kehh dể lấy dl thống kê hh
require "../layout.php"; //gắn liên kết file .vào trang hiện tại