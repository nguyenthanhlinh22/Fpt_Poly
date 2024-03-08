<?php
include ('connect.php');
session_start();
$messager = "";
//kiểm tra dã submit hay chưa
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //lấy thông tin đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    //xây dựng truy vấn sql
    $query = "SELECT * FROM user WHERE username='$username'";

    //thực hiện truy vấn
    $result = mysqli_query($conn,$query);

    //kiểm tra kết quả trả về
    if(mysqli_num_rows($result) > 0) {
        //lấy thông tin người dùng từ sql
        $row = mysqli_fetch_assoc($result);
        //kiểm tra mật khẩu hợp lleej
        if($row['password'] === $password) {
            //đăng nhập thành công và set user name vào biến session
            $_SESSION["user"] = "$username";

            header("Location: sanpham.php");
        }else{
            //sai mk
            $messager = "Sai mật khẩu, vui lòng thử lại";
        }
    }else{
        $messager = "Người dùng tồn tại!";
    }
    //đóng kết nối
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="row">
                <h3>Login</h3>
            </div>
            <div class="row">
                <label> Username : </label> <br>
                <input type="text" name="username" id="username" placeholder="Enter username">
            </div>

            <div class="row">
                <label> Pasword : </label> <br>
                <input type="text" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="btn">
                <input type="submit" value="Login" name="btn-regis" id="btn-regis"><br>

            </div>
            <div class="btn">
                <div id="message_line1" class="message"><?php echo $messager; ?></div>
            </div>

        </form>
    </div>

</body>
</html>