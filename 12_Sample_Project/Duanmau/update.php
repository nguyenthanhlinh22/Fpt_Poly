<?php
include 'connect.php';
//kiểm tra xem đã được submit hay chưa
if (isset($_POST['submit'])) {
    $tenSp = $_POST['tenSp'];
    $target_dir = "uploads/";
    //đường dẫn thư mục để lưu trư ảnh
    $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
    //gán trạng thái thành công upload file = 1
    $uploadok = 1;
    //lấy định dạng ảnh
    $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //kiểm tra xem file đã tồn tại hay chưa
    if (file_exists($target_file)) {
        echo "File đã tồn tại";
        $uploadok = 0;
    }
    //kiểm tra kích thước file
    if ($_FILES["filetoupload"]["size"] > 500000) {
        echo "File ảnh quá lớn";
        $$uploadok = 0;
    }
    //kiểm tra định dạng file
    if ($imagefiletype != "jpeg" && $imagefiletype != "png" && $imagefiletype != "jpg" && $imagefiletype != "gif") {
        echo "Chỉ chấp file PNG, JPG, JPEG và GIF";
        $uploadok = 0;
    }
    //kiểm tra nếu upload ok = 0, tức là có lỗi xảy ra
    if ($uploadok == 0) {
        echo "Tệp tin không được tải lên";
    } else {
        //di chuyển file từ  mục tạm lên chính
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
            //lấy địa chỉ ảnh sau khi đã upload thành công
            $path = $target_dir . basename($_FILES["filetoupload"]["name"]);
            //chèn và bảng sản phẩm
            $query = "INSERT INTO sanpham (tenSp, anhSp) value ('$tenSp','$path')";
            $result = mysqli_query($conn, $query);
            //kiểm tra truy vấn
            if ($result) {
                echo "cập nhật sản phẩm thành công!";
            } else {
                echo "Có lỗi xảy ra" . mysqli_error($connection);
            }
        } else {
            echo "Có lỗi xảy ra khi tải file lên";
        }
    }
} else if (isset($_GET['id'])) { // trong trường hợp lấy id khi click vào  link ở trang danh sách 
    // lấy giá trị id
    $id = $_GET['id'];
    //truy ván sản phẩm dựa trên ID
    $query = "SELECT * FROM sanpham WHERE id = '$id' ";
    $result = mysqli_query($conn, $query);
    //kiểm tra truy vấn
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $tenSp = $row['tenSp'];
        $target_dir = $row['anhSp'];
    } else {
        echo "có lỗi xảy ra" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    // echo "Không tìm thấy sản phẩm để cập nhật!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt</title>
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="content">
        <h1>Thế giới bán điện thoại</h1>
        <nav>
            <a href="sanpham.php">
                << Trang chủ</a>
                    <a href="read.php">Danh sách sản phẩm</a>
                    <a href="create.php">Thêm sản phẩm</a>
                    <a href="update.php">Cập nhật sản phẩm</a>
                    <a href="delete.php">Xóa sản phẩm</a>

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
    <div class="sanpham">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label for="tenSp">tên sản phẩm</label>
            <input type="text" name="tenSp" id="tenSp" required values="<?php echo $tenSp; ?>">
            <input type="file" name="filetoupload" id="filetoupload" value="<?php echo $target_dir; ?>">
            <input type="submit" name="submit" id="uploadfile" value="Upload file">
        </form>
    </div>
</body>

</html>