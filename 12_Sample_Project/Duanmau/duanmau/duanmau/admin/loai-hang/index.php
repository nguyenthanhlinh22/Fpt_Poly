<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";  //nhúng tệp
require "../../global.php";
check_login();  //hàm kt người dùng đã đăng nhập chưa


extract($_REQUEST); //lệnh để trích xuất toàn bộ các biến từ mảng $_REQUEST thành các biến cục bộ
if (exist_param("btn_list")) {//kt tso. có tồn tại hay k

    //show dữ liệu
    $items = loai_select_all();//lấy thông tin all các loại hàng trong csdl
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {

    //insert vào db
    loai_insert($ten_loai);

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    //lấy dữ liệu từ form
    $ma_loai = $_REQUEST['ma_loai'];//lấy gtr của tso ma_loai từ yêu cầu HTTP
    $loai_info = loai_select_by_id($ma_loai);//truy ván csdl để lấy thong tin về mã loại dựa trên ma_loai
    //sau đó gán cho biến $loai_info
    extract($loai_info);//trích xuất all các ptu trong mảng $loai_info

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_loai = $_REQUEST['ma_loai'];
    loai_delete($ma_loai);

    //hiển thị danh sách
    $items = loai_select_all();//lấy thông tin all các loại hàng trong csdl
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_loai = $_POST['ma_loai'];//lấy ds ma_loai cần xoá 
        loai_delete($arr_ma_loai);//xoá các loại hàng dựa trên ds ma_loai đc chứa trong biến $arr_ma_loai
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_loai = $_POST['ma_loai'];//lấy gtri của trg ma_loai từ dl POST và gán vào $ma_loai
    $ten_loai = $_POST['ten_loai'];
    loai_update($ma_loai, $ten_loai); //update thông tin loại hàng trong csdl

    //hiển thị danh sách
    $items = loai_select_all();//lấy thông tin all các loại hàng trong csdl
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php"; //gắn liên kết file .vào trang hiện tại