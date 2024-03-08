<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
// kết nối với my sql
$conn = new mysqli($servername, $username, $password, $dbname);

// kiểm tra kết nói
if($conn->connect_error) {
    die("Kết nối đến my sql thất bại:" . $conn->$connect_error);
}else{
    // echo "kết nối thành công";
}

?>