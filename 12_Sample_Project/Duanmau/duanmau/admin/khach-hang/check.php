<?php
require '../../global.php';  //nhúng tệp
require '../../dao/khach-hang.php';
if (isset($_GET['ma_kh'])) { //kt tso ma_kh có tồn tại trong yêu cầu GET k

    $result = khach_hang_exist($_GET['ma_kh']); //kt k.hang có ma_kh tồn tại trong csdl k
    if ($result == true) {
        echo json_encode(false); //khách hàng tồn tại
    } else {
        echo json_encode(true);  //khách hàng k tồn tại
    }
}
if (isset($_GET['email'])) { //kt tso email có tồn tại trong GET k
    $result = khach_hang_exist_email($_GET['email']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_POST['ma_kh'])) {
    $result = khach_hang_exist($_POST['ma_kh']);
    if ($result == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}