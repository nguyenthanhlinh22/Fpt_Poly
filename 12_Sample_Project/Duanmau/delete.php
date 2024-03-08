<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt</title>
    <link rel="stylesheet" href="css/delete.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="content">
        <h1>Tiệm ảnh 2004 </h1>
        <nav>
            <a href="sanpham.php">
                << Trang chủ</a>
                    <a href="read.php">Danh sách Combo</a>
                    <a href="create.php">Thêm Combo chụp ảnh </a>
                    <a href="update.php">Cập nhật combo </a>
                    <a href="delete.php">Xóa picture</a>

        </nav>
        <div class="icon-z">
            <div class="icon">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                </a>
            </div>
            <div class="settings-icon">
                <a href="setting.php">
                    <i class="fas fa-bars"></i>
                    <div class="caidat" id="setting-caidat">
                        Cài đặt 
                        <a href="user.php">tài khoản cá nhân</a> 
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
//kiểm tra xem có id được truyển vào kh
if (isset($_GET['id'])) {
    include 'connect.php';
    //lấy giá trị id từ tham số truyền vào
    $id = $_GET['id'];
    //truy vấn id để xóa dữ liệu
    $query = "DELETE FROM sanpham WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    //kiểm tra truy vấn
    if ($result) {
        echo "Xóa sản phẩm thành công!";
    } else {
        echo "Có lỗi xảy ra" . mysqli_error($conn);
    }
    //đóng kết nối
    mysqli_close($conn);
} else {
    echo "Không tìm thấy sản phẩm để xóa, <br> vui lòng kiểm tra lại!";
}
?>