<?php
require_once "../../global.php"; //nhúng tệp
require "../../dao/loai.php";
if (isset($_GET['act'])) { //kt tso act có tồn tại hay k


    if ($_GET['act'] == 'add') { //kt tso act trong get có gtri add hay k
        $result = loai_exist_ten_loai_add($_GET['ten_loai']);
        //hàm tự định nghĩa, kt loại sp có tên $_GET['ten_loai'] có trong csdl ch
        if ($result == true) {
            echo json_encode(false); //loại sp tồn tại
        } else {
            echo json_encode(true); //loại sp ch tồn tại
        }
    }


    if ($_GET['act'] == 'update') { //kt tso act trong get có gtri update hay k
        $result = loai_exist_ten_loai_update($_GET['ma_loai'], $_GET['ten_loai']);
        //hàm tự định nghĩa, kt tên loại sp có tên $_GET['ma_loai'] có trong csdl ch
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}