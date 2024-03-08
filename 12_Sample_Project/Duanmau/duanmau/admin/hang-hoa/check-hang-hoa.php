<?php
require_once "../../global.php";
require "../../dao/hang-hoa.php";


if (isset($_GET['act']) && ($_GET['act'] == 'add')) { //kt biến ten_hh đưuọc truyền qua URL k(thông qua tso GET)
    $result = hang_hoa_exist_add($_GET['ten_hh']); //kt hh tồn tại trong csdl chưa - kq luu vào biến  $result
    if ($result == true) {
        echo json_encode(false);  //json F là đã tồn tại 
    } else {
        echo json_encode(true); //json T là chưa
    }
}



if (isset($_GET['act']) && ($_GET['act'] == 'update')) { //kt tso act trong url và gtr phải là update k
    $result = hang_hoa_exist_update($_GET['ma_hh'], $_GET['ten_hh']);//kt hh có ma_hh đã tồn tại với tên new là ten_hh hay k - kq luu vào biến  $result
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true); // chưa tồn tại vs tên new
    }
}