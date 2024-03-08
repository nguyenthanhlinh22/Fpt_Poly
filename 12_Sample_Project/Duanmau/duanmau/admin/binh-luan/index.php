<?php

require_once "../../dao/pdo.php";       // require_once nhúng tệp
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";
require "../../global.php";
check_login();        //hàm kt người dùng đã đăng nhập chưa

extract($_REQUEST);      //lệnh để trích xuất toàn bộ các biến từ mảng $_REQUEST thành các biến cục bộ
if (exist_param("ma_hh")) {   //kt tham số "ma_hh" có tồn tại trong yêu cầu hay k

    if (exist_param("btn_delete")) { // kt tham số btn_delete có trong $_REQUEST hay k
        try {
            binh_luan_delete($ma_bl);
            $MESSAGE = "Xóa thành công"; //thiết lập thông báo này
        } catch (Exception $exc) {    //xử lý các ngoại lệ (exceptions) khi xảy ra lỗi trong quá trình thực thi mã.
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_ma_bl = $_POST['ma_bl'];   //xóa nhiều bl dựa trên ds mã bl ma_bl 
            binh_luan_delete($arr_ma_bl);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        $VIEW_NAME = "detail.php";
    }

    $items = binh_luan_select_by_hang_hoa($ma_hh);  // sp $items được truy vấn bằng cách sử dụng hàm binh_luan_select_by_hang_hoa($ma_hh)
//bien mảng      | hàm 
    if (count($items) == 0) {       //nếu k có bl nào được tìm thấy, mã sẽ hiển thị thông tin thống kê bl bằng
        $items = thong_ke_binh_luan();    // gọi hàm 
        $VIEW_NAME = "list.php";  //$VIEW_NAME xác định trang hiển thị
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}

require "../layout.php"; //gắn liên kết file .vào trang hiện tại