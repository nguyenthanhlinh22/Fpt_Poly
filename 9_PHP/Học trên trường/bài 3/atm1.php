<?php
$thong_tin = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_so_the = $_POST["ma_the"];
    $ho_ten = $_POST["ho_ten"];
    function atm($ho_ten, $ma_the)
    {
        $money =  5000;
        return "họ và tên:" .$ho_ten. "Mã Thẻ:" . $ma_the . "số tiền :" . $money;
    }
    $thong_tin = atm($ho_ten,$ma_so_the);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?> " method="POST">
        họ và tên <input type="text" name="ho_ten" id="ho_ten"> <br>
        nhập thẻ <input type="text" name="ma_the" id="ma_the"><br>
        <input type="submit" value="rut_tien">
        <span><?php echo $thong_tin ?></span>
    </form>

</body>

</html>

<?php 


?>