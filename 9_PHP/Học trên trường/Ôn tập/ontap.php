<?php
//kiểm tra xem from đã đc nhấn nút submit chưa 
$kq = 0;

$arr= [] ;//tạo mãng chứa các lỗi 
$ok = true ; // giả sử chưa có lỗi 
if($_SERVER["REQUEST_METHOD"] === "POST"){
//lấy giá trị trong ô số 1 và gán cho biến có tên $so1
    $so1 = $_POST["so1"];
    $so2 = $_POST["so2"];
    // $so3 = $_POST["so3"];
    $pt  = $_POST["pheptinh"];
    if($so1 == ""){
        $arr["loi_so1"]= " số 1 không được để trống";
        $ok = false;
    } else{
        $arr["loi_so1"]= null;
        $ok = true;
    }
    if($so2 == ""){
        $arr["loi_so2"]= " số2 không được để trống";
        $ok = false;
    } else{
        $arr["loi_so2"]= null;
        $ok = true;
    }
    if($pt == ""){
        $arr["loi_pheptinh"]= "  phép tính không được để trống";
        $ok = false;
    } else{
        $arr["loi_pheptinh"]= null;
        $ok = true;
    }
    if($pt === "+"){
        $kq = cong($so1, $so2);
    }else if($pt === "-"){
        $kq = tru($so1, $so2);
    }else if($pt === "*"){
        $kq = nhan($so1, $so2);
    }else if($pt === "/"){
        $kq = chia($so1, $so2);
    }
 
}
//hàm có chức năng cộng trừ 2 số và có tham số a b 
function cong($a, $b){
    return $a + $b;
}
function tru($a, $b){
    return $a - $b;
}
function nhan($a, $b){
    return $a * $b;
}
function chia($a, $b){
    return $a / $b;
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ontap.css">
</head>
<body>
    
   <div id="tinhtoan">
   <form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST">
        <label> Nhập số thứ nhất </label> <br>
        <input type="text" name="so1" id="so1"><span><?php  isset($arr["loi_so1"]) ? printf($arr["loi_so1"]):"";?></span><br> 
        <label> Nhập số thứ hai : </label><br>
        <input type="text" name="so2" id="so2"><span><?php  isset($arr["loi_so2"]) ? printf($arr["loi_so2"]):"";?></span><br>
        nhập phép toán:  <br>
        <input type="text" name="pheptinh" id="pheptinh"><?php  isset($arr["loi_pheptinh"]) ? printf($arr["loi_pheptinh"]):"";?></span><br>
        <span><?php echo $kq?></span><br>
        <input type="submit" value="tính toán" id="tinhtoan"><br> 
    </form>
   </div>
</body>
</html>