<?php
require_once 'pdo.php';
function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro)
{
    $sql = "INSERT INTO khach_hang(ma_kh,mat_khau,ho_ten,email,hinh,kich_hoat,vai_tro) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1);
}
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro)
{
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_select_all()//truy vấn và trả về all kh từ csdl
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh) //truy vấn và trả về thông tin của 1 kh dựa trên ma_kh
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_exist($ma_kh)//kt kh có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_exist_email($email)//kt email kh có tồn tại trong csdl hay k
{
    $sql = "SELECT count(*) FROM khach_hang WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)//kt mk có trong csdl hay ch
{

    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}