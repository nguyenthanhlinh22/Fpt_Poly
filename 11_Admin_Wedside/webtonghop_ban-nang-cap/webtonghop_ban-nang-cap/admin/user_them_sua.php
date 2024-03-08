<?php
require_once "../functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $gt = $_POST["gt"];
    $hobby = $_POST["hobby"];
    $nghe_nghiep = $_POST["nghe_nghiep"];
    $intro = $_POST["intro"];
    $group_id = $_POST["group_id"];
    $file_img = $_POST["file_img"]; // Đường dẫn ảnh đã chọn
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thêm người dùng vào cơ sở dữ liệu
    $sql = "INSERT INTO users (user_name, email, gt, hobby, nghe_nghiep, intro, group_id, file_img, password) 
            VALUES ('$user_name', '$email', '$gt', '$hobby', '$nghe_nghiep', '$intro', '$group_id', '$file_img', '$hashedPassword')";
    $result = execute($sql);

    if ($result) {
        echo "Thêm mới người dùng thành công.";
    } else {
        echo "Lỗi: Không thể thêm mới người dùng.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Người Dùng</title>
    
    <!-- CSS cho định dạng ảnh khi được chọn -->
    <style>
        .avatar-option {
            border: 2px solid transparent;
            cursor: pointer;
        }

        .selected-avatar {
            border: 2px solid green; /* Màu và kiểu viền của ảnh đã chọn */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="py-2 text-center h4">THÊM MỚI NGƯỜI DÙNG</h2>
        <form method="post">
            <div class="form-group">
                <label for="user_name">Tên người dùng:</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="gt">Giới Tính:</label>
                <select class="form-control" id="gt" name="gt">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hobby">Sở Thích:</label>
                <input type="text" class="form-control" id="hobby" name="hobby">
            </div>
            <div class="form-group">
                <label for="nghe_nghiep">Nghề Nghiệp:</label>
                <input type="text" class="form-control" id="nghe_nghiep" name="nghe_nghiep">
            </div>
            <div class="form-group">
                <label for="intro">Giới thiệu:</label>
                <textarea class="form-control" id="intro" name="intro"></textarea>
            </div>
            <div class="form-group">
                <label for="group_id">Quyền Hạn:</label>
                <select class="form-control" id="group_id" name="group_id">
                    <option value="0">khách</option>
                    <option value="1">admin</option>
                </select>
            </div>
            <div class="form-group">
                <label>Chọn ảnh đại diện:</label>
                <div class="form-group" id="select_avatar_group">
                    <!-- Chỉ hiển thị ba ảnh đã có và cho phép người dùng chọn một trong ba -->
                    <img class="avatar-option" src="http://nguyenhongquan.id.vn/upload/images/you_avt.png" alt="Ảnh bạn" width="100" height="100">
                    <img class="avatar-option" src="http://nguyenhongquan.id.vn/upload/images/vuilam.jpg" alt="Mặt cười Nam" width="100" height="100">
                    <img class="avatar-option" src="http://nguyenhongquan.id.vn/upload/images/vuilam.png" alt="Mặt cười Nữ" width="100" height="100">
                </div>
                <!-- Thêm một thẻ <input> ẩn để lưu trữ đường dẫn ảnh được chọn -->
                <input type="hidden" id="selected_image" name="file_img" value="">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
        </form>
    </div>

    <!-- JavaScript để chọn ảnh bằng cách nhấp vào ảnh -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const avatarOptions = document.querySelectorAll(".avatar-option");
            const fileImgInput = document.getElementById("selected_image");

            // Đặt sự kiện click cho từng ảnh
            avatarOptions.forEach(function (avatar) {
                avatar.addEventListener("click", function () {
                    // Loại bỏ lớp "selected-avatar" từ tất cả các ảnh trước đó
                    avatarOptions.forEach(function (av) {
                        av.classList.remove("selected-avatar");
                    });

                    // Thêm lớp "selected-avatar" cho ảnh được chọn
                    avatar.classList.add("selected-avatar");

                    // Cập nhật giá trị trường ẩn với đường dẫn ảnh được chọn
                    fileImgInput.value = avatar.src;
                });
            });
        });
    </script>
</body>
</html>
