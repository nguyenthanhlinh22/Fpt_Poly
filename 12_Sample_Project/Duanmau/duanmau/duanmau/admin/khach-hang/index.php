<?php
require_once "../../dao/pdo.php";   //nhúng tệp
require_once "../../dao/khach-hang.php";
require "../../global.php";
check_login();  //hàm kt người dùng đã đăng nhập chưa

extract($_REQUEST);  //lệnh để trích xuất toàn bộ các biến từ mảng $_REQUEST thành các biến cục bộ
if (exist_param("btn_list")) { //kt tso. có tồn tại hay k

    //show dữ liệu
    $items = khach_hang_select_all(); //lấy thông tin all cac khách hàng trong csdl
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    //lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];//lấy gtri của trg ma_kh từ dl POST và gán vào $ma_kh
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];

    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/users");
    //insert vào db
    khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);

    //show dữ liệu
    $items = khach_hang_select_all(); //truy vấn all thông tin về kh từ csdl và luu kq vào biến $items
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    //lấy dữ liệu từ form
    $ma_kh = $_REQUEST['ma_kh'];//lấy gtr của tso ma_kh từ yêu cầu HTTP
    $khach_hang_info = khach_hang_select_by_id($ma_kh);//truy ván csdl để lấy thoong tin về  1 khách hàng dựa trn mã kh
    //sau đó gán cho biến $khach_hang_info
    extract($khach_hang_info);//trích xuất all các ptu trong mảng $khach_hang_info

    //show dữ liệu
    $items = khach_hang_select_all();//truy vấn all thông tin về kh từ csdl và luu kq vào biến $items
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh); //xoá kh có $ma_kh

    //hiển thị danh sách
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['ma_kh'];//lấy ds ma_kh cần xoá 
        khach_hang_delete($arr_ma_kh);//xoá các kh dựa trên ds ma_kh đc chứa trong biến $arr_ma_kh
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_kh = $_POST['ma_kh']; //lấy gtri của trg ma_kh từ dl POST và gán vào $ma_kh
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];


    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;//kt độ dài của chuỗi $up_hinh
    //nếu chuỗi > 0 -> bien $hinh sẽ được thiết lập thành $up_hinh ngc lại sẽ  giữ nguyên k thay đổi

    //update thông tin khách hàng trong csdl
    khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);

    //hiển thị danh sách
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php"; //gắn liên kết file .vào trang hiện tại