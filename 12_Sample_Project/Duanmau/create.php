<?php
include 'connect.php';
//kiểm tra xem đã submit hay chưa
if (isset($_POST['submit'])) {
    //lấy tt từ form
    $tenSp = $_POST['tenSp'];
    $target_dir = "uploads/";
    $giaSp = $_POST['giaSp'];
    $maSp = $_POST['maSp'];
    $theloaiSp = $_POST['theloaiSp'];
    $soluong = $_POST['soluong'];
    // đường dẫn đến fie upload
    $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
    //gán trạng thái upload  = 1
    $uploadok = 1;
    //lấy định dạng ảnh
    $imageFiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //Kiểm tra xem file đã đúng tồn tại chưa
    if (file_exists($target_file)) {
        echo "Ảnh đã tồn tại";
        $uploadok = 0;
    }
    //kiểm tra kích thước file
    if ($_FILES["filetoupload"]["size"] > 500000) {
        echo "Ảnh tải lên quá lớn";
        $uploadok = 0;
    }
    //kiểm tra định dạng file
    if ($imageFiletype != "jpg" && $imageFiletype != "png" && $imageFiletype != "jpeg" && $imageFiletype != "gif") {
        echo "Chỉ chấp nhận file PNG,JPEG,JPG và GIF";
        $$uploadok = 0;
    }
    //kiểm tra nếu $uploadok = 0;, tức đã có lỗi xảy ra
    if ($uploadok == 0) {
        echo "Tệp tin không được tải lên";
    } else {
        //di chuyển file từ thư mục tạm lên thư mục chính
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
            //lấy địa chỉ ảnh sau khi upload thành công
            $path = $target_dir . basename($_FILES["filetoupload"]["name"]);
            //chèn vào bảng sản phẩm trong data
            $query = "INSERT INTO sanpham (tenSp,anhSp,giaSp,maSp,theloaiSp,soluong) VALUE ('$tenSp','$path','$giaSp','$maSp','$theloaiSp','$soluong')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Thêm sản phẩm thành công";
            } else {
                echo "Có lỗi xảy ra" . mysqli_error($conn);
            }
        } else {
            echo "Có lỗi xảy ra khi tải file lên";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt</title>
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="content">
        <h1>Tiệm ảnh 2004 i</h1>
        <nav>
            <a href="sanpham.php">
                << Trang chủ</a>
                    <a href="read.php">Danh sách combo chụp ảnh </a>
                    <a href="create.php">Thêm combo chụp ảnh</a>
                    <a href="update.php">Cập nhật combo chụp ảnh</a>
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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="tenSp">Tên Combo sản phẩm</label>
        <input type="text" name="tenSp" id="tenSp" required>
        <input type="file" name="filetoupload" id="filetoupload"><br>
        <label for="giaSp">Giá Combo chụp ảnh </label>
        <input type="text" name="giaSp" id="giaSp"><br>
        <label for="maSp">Mã Chụp</label><br>
        <input type="text" name="maSp" id="maSp"><br>
        <label for="theloaiSp">Thể loại Chụp</label>
        <input type="text" name="theloaiSp" id="theloaiSp"><br>
        <label for="soluong">Thời Gian</label><br>
        <input type="text" name="soluong" id="soluong"><br>
        <input type="submit" name="submit" value="Upload file" id="submit">
    </form>

</body>

</html>