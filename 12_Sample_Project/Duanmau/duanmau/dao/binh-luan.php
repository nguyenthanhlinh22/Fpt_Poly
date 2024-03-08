<?php
require_once 'pdo.php';
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating)  //thêm 1 bl new vào csdl
{
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl, rating) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}
function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl) //cập nhật thông tin bl đã có trong csdl
{
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}
function binh_luan_delete($ma_bl) //xoá 1 or nhiều bl dựa trên mã bl
{                                   // 1 mảng thì xoá n bl, 1 gtr thì xoá 1bl
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if (is_array($ma_bl)) { // kiểm tra xem biến $ma_bl có phải là một mảng hay k
        foreach ($ma_bl as $ma) { //duyệt qua từng phần tử của mảng
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all() //truy vấn và trả về all bl từ csdl
{
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC"; //sắp xếp theo ngày bl giảm dần
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_bl) //truy vấn và trả về thông tin của 1 bl dựa trên ma_bl
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
function binh_luan_exist($ma_bl) //kt 1 bl có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function binh_luan_select_by_hang_hoa($ma_hh, $limit = 10) //truy vấn và trả về bl liên quan đến 1 hàng hoá cụ thể
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }

    //truy vấn chọn all các dòng trong bảng bl
    $query = "SELECT count(*) FROM binh_luan b 
    JOIN hang_hoa h ON h.ma_hh = b.ma_hh   --kết nối bảng hh vs bảng bl
    WHERE b.ma_hh = $ma_hh ORDER BY ma_bl DESC"; //theo thứ tự giảm dần

    $_SESSION['total_bl'] = pdo_query_value($query); //truy vấn csdl để đếm tổng số bl và luu kq vào biến $session
    if (exist_param("page")) { //kt tso page có trong yêu cầu http k
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;  // trừ đi 1 và nhân với giới hạn số lượng bình luận trên mỗi trang ($limit)
    $_SESSION['total_page'] = ceil($_SESSION['total_bl'] / $limit); //$_SESSION['total_page'] được tính để xác định tổng số trang phân trang 
                                                            //dựa trên tổng số bình luận ($_SESSION['total_bl']) và giới hạn số lượng bình luận trên mỗi trang ($limit).
                                                            // Hàm ceil được sử dụng để làm tròn lên đến số trang gần nhất
    $sql = "SELECT b.*, h.ten_hh, k.ho_ten, k.hinh FROM binh_luan b 
    JOIN hang_hoa h ON h.ma_hh = b.ma_hh 
    JOIN khach_hang k ON k.ma_kh =b.ma_kh WHERE b.ma_hh=? ORDER BY ma_bl DESC LIMIT $begin,$limit";
    return pdo_query($sql, $ma_hh);
}
