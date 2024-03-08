<?php
include('connect.php');
//xử lý yêu cầu đăng kí khi dẩy form
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //lấy thông tin từ form
    $username = $_POST['username'];
    $ngaysinh = $_POST['ngaysinh'];
    $soDienthoai = $_POST['soDienthoai'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //kiểm tra người dùng đã tồn tại chưa
    $check_query = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $message = "tài khoản đã được đăng kí!";
    } else {
        //thêm tài khoản vào sql
        $insert_query = "INSERT INTO user(username, ngaysinh, soDienthoai, email, password) VALUE ('$username','$ngaysinh','$soDienthoai','$email','$password') ";
        if ($conn->query($insert_query) == TRUE) {
            $message = 'thành công <br> Quay lại đăng nhập <a href = "login.php"> Tại đây </a> ';
        }else{
            $message = "Thất bại";
        }
    }
}
//đóng kết nối
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="row">
                <h3>REGISTER</h3>
            </div>
            <div class="row">
                <label>Username</label><br>
                <input type="text" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="row">
                <label>Ngày sinh</label><br>
                <input type="date" name="ngaysinh" id="ngaysinh" placeholder="Enter ngày sinh" required>
            </div>
            <div class="row">
                <label>Số điện thoại</label><br>
                <input type="text" name="soDienthoai" id="soDienthoai" placeholder="Enter số điện thoại" required>
            </div>
            <div class="row">
                <label>Email</label><br>
                <input type="email" name="email" id="email" placeholder="Enter email" required>
            </div>

            <div class="row">
                <label>Password</label><br>
                <input type="text" name="password" id="password" placeholder="Enter password">
            </div>

            <div class="row">
                <label>Confirm password</label><br>
                <input type="text" name="confirm" id="confirm" placeholder="Confirm password">
            </div>
            <div class="btn">
                <input type="submit" name="register">
            </div>
            <div class="row">
                <div class="message" id="message_line1"> <?php echo $message; ?></div>
            </div>
        </form>
    </div>
</body>

</html>