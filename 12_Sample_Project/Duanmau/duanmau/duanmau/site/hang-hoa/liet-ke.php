<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/loai.php';
//-------------------------------//


extract($_REQUEST);//Hàm này sẽ lấy các tso từ URL và lưu trữ chúng trong các biến.

if (exist_param("ma_loai")) {//kt xem có tso ma_loai đc chỉ định hay k

    $name_loai = loai_select_by_id($ma_loai);
    extract($name_loai);//Hàm này sẽ lưu trữ các thông tin về loại sp trong các biến.
    $title_site = "Các sản phẩm thuộc loại : '$ten_loai' ";

    $items = hang_hoa_select_by_loai($ma_loai);//Ds các sp thuộc loại đó được lấy bằng hàm hang_hoa_select_by_loai().
} else if (exist_param("dac_biet")) {//kt xem có tso dac_biet đc chỉ định hay k
    $title_site = "Sản phẩm đặc biệt";
    $items = hang_hoa_select_dac_biet();//Ds các sp thuộc loại đó được lấy bằng hàm..
} else if (exist_param("timkiem")) {
    $kyw = $_POST['kyw'];
    if ($kyw == '') {
        $title_site = "Tất cả sản phẩm";
    } else {
        $title_site = "Các sản phẩm có chứa từ khóa :'$kyw'";
    }
    $items = hang_hoa_select_keyword($kyw);
    if (count($items) == 0) {
        $title_site = "Không sản phẩm nào chứa từ khóa :'$kyw'";
    }
} else {
    $title_site = "Tất cả sản phẩm";
    $items = hang_hoa_select_page('so_luot_xem', 12);
}
$hh_db = hang_hoa_select_dac_biet();
$hh_top10 = hang_hoa_select_top10();
$ds_loai = loai_select_all();
$VIEW_NAME = "hang-hoa/liet-ke-ui.php";

require '../layout.php';