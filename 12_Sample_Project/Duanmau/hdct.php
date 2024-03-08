<?php
// kết nối đến data
include 'connect.php';
//kiểm tra xem form đã submit hay chưa
if(isset($_POST['submit'])) {
    $maHDCT = $_POST['maHDCT'];
    $maHD = $_POST['maHD'];
    $maSmartphone = $_POST['maSmartphone'];
    $soLuongmua = $_POST['soLuongmua'];

    $query = "INSERT INTO chitiethoadon (ma HDCT,ma Hoadon,ma Smartphone,soLuongmua) VALUE ('$maHDCT','$maHD','$maSmartphone','$soLuongmua')";
    $result = mysqli_query($conn,$query);
    //kiểm tra kết quả truy vấn
    if($result) {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
    <link rel="stylesheet" href="css/create.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <a href="read.php" style="text-align: center;">Danh Sách</a>
        <label for="maHDCT">Mã hóa đơn chi tiết</label>
        <input type="text" name="maHDCT" id="maHDCT" require>
        <label for="maHD">Mã hóa đơn</label>
        <input type="text" name="maHD" id="maHD" require>
        <label for="maSmartphone">Mã combi</label>
        <input type="text" name="maSmartphone" id="maSmartphone" require>
        <label for="soLuongmua">Thời Gian đặt </label>
        <input type="text" name="soLuongmua" id="soLuongmua" require>
        <input type="submit" name="submit" id="submit">
    </form>
</body>

</html>