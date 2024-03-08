<?php
    //connect to mysql 
    include('Connect.php');

    if(isset($_POST['submit'])){

        $hoTen = $_POST['hoTen'];
        $maNhanVien = $_POST['maNhanVien'];
        $tienLuong = $_POST['tienLuong'];
        $heSo = $_POST['heSo'];
        $ngayVaoLam = $_POST['ngayVaoLam'];

       
        $query = "INSERT INTO qlnv (hoTen, maNhanVien , tienLuong, heSo, ngayVaoLam) VALUES ('$hoTen', '$maNhanVien', '$tienLuong', '$heSo' , '$ngayVaoLam')";
       
        $result = mysqli_query($conn, $query);


        if ($result) {
            echo "add seccect product.";
        }else{
            echo " co loi xay ra " . mysqli_error($connection);

        }
        mysqli_close($conn);  
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Create.css">
    <title>Add Product</title>

</head>
<body>
    <div class="addproduct">
        <h2>qlnv</h2>
        <a href="Read.php">qlnv</a>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
            <input type="submit" name="submit" value="add Product">


    </div>


    </form>
    
</body>
</html>