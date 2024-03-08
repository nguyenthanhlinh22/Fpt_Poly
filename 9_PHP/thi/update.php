<?php
    include 'Connect.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $hoTen = $_POST['hoTen'];
        $maNhanVien = $_POST['maNhanVien'];
        $tienLuong = $_POST['tienLuong'];
        $heSo = $_POST['heSo'];
        $ngayVaoLam = $_POST['ngayVaoLam'];
        $query = "UPDATE qlnv SET hoTen = '$hoTen', maNhanVien = '$maNhanVien', tienLuong = '$tienLuong' ,heSo = '$heSo',ngayVaoLam = '$ngayVaoLam'  WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update seccect product.";
        }else{
            echo " Error " . mysqli_error($conn);

        }
        mysqli_close($conn);

    }elseif(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM sanpham WHERE  id = '$id'";
        $result = mysqli_query($conn , $query);

        if ($result) {
           $row = mysqli_fetch_assoc($result);
           $hoTen = $row['hoTen'];
           $maNhanVien = $row['maNhanVien'];
           $tienLuong = $row['tienLuong'];
           $heSo = $row['heSo'];
           $ngayVaoLam = $row['ngayVaoLam'];

        }else{
            echo " Error " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }else{
        echo "not found update product";
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
</head>
<body>
    <a href="read.php">List product</a>
    <h2>update Product</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ='post'>
    <label for="hoTen">tên Nhân Viên </label>
            <input type="text" name="hoTen" id="hoTen" required > <br>
            <label for="maNhanVien">Mã Nhân Viên </label>
            <input type="number" name="maNhanVien" id="maNhanVien" required > <br>
            <label for="tienLuong">tiền lương </label>
            <input type="number" name="tienLuong" id="tienLuong" required> <br>
            <label for="heSo">hệ số:</label>
            <textarea name="heSo" id="heSo" required></textarea> <br>
            <label for="ngayVaoLam">Ngay vao lam  </label>
            <input type="date" name="ngayVaoLam" id="ngayVaoLam" required> <br>
            <input type="submit" name="submit" value="update sp ">











    </form>
    
</body>
</html>