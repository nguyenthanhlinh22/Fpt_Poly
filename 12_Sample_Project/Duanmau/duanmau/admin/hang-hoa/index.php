<?php
require_once "../../dao/pdo.php";   //nhung tệp
require_once "../../dao/loai.php";
require_once "../../dao/hang-hoa.php";
require "../../global.php";

check_login();


extract($_REQUEST);  //lệnh để trích xuất toàn bộ các biến từ mảng $_REQUEST thành các biến cục bộ
if (exist_param("btn_list")) { //kt tso btn_list có tồn tại trong yêu cầu hay k

    //show dữ liệu
    $items = hang_hoa_select_page('ma_hh', 10); //gọi hàm với 2 tso ma_hh và 10
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu từ form
    $ten_hh = $_POST['ten_hh'];  //lấy gtri của trg ten_hh từ dl POST và gán vào $ten_hh
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];

    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    //insert vào db
    hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);

    //show dữ liệu
    $items = hang_hoa_select_page('ma_hh', 10);//gọi hàm với 2 tso ma_hh và 10
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    //lấy dữ liệu từ form
    $ma_hh = $_REQUEST['ma_hh'];//lấy gtr của tso ma_hh từ yêu cầu HTTP
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);//truy ván csdl để lấy thông tin về hh dựa trên mã hh
    //sau đó gán cho biến $hang_hoa_info
    extract($hang_hoa_info);//trích xuất all các ptu trong mảng $hang_hoa_info

    $loai_hang = loai_select_all('ASC');  //truy vấn để lấy ds tất cả các loại hh,sắp xếp theo thứ tự tăng dần (ASC) từ csdl
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_hh = $_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh); //xoá hh có $ma_hh khỏi csdl

    //hiển thị danh sách
    $items = hang_hoa_select_page('ma_hh', 10);//gọi hàm với 2 tso ma_hh và 10
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        
        $arr_ma_hh = $_POST['ma_hh'];  //lấy ds ma_hh cần xoá 
        hang_hoa_delete($arr_ma_hh); //xoá các hh dựa trên ds m_hh đc chứa trong biến $arr_ma_hh
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten_hh = $_POST['ten_hh']; //lấy gtrii từ trg ten_hh có dl từ POST và gán vào $ten_hh
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh; //kt độ dài của chuỗi $up_hinh
    //nếu chuỗi > 0 -> bien $hinh sẽ được thiết lập thành $up_hinh ngc lại sẽ  giữ nguyên k thay đổi

    //update thông tin hh trong csdl
    hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
    
    //hiển thị danh sách
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else {
    $loai_hang = loai_select_all('ASC'); //truy vấn all loại hh từ csdl |tso ASC thứ tự sxep dl tăng dần
    $VIEW_NAME = "add.php";
}
require "../layout.php"; //gắn liên kết file .vào trang hiện tại