<?php
    $kq = 0;
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $number1 = $_POST["numberOne"];
            $number2 = $_POST["numberTwo"];
            $pheptinh = $_POST["pheptinh"];

            if($pheptinh === "+"){
                $kq = $number1 + $number2 ;
            }else if($pheptinh === "-"){
                $kq = $number1 - $number2 ;
            }

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
    <form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>method="POST">
        <label for="">nhập số thứ nhất</label>
        <input type="text" name="numberOne" id="numberOne">
        <label for="">nhập số thứ hai : </label>
        <input type="text" name="numberTwo" id="numberTwo">
        <label for="">Nhập Phép tính :</label>
        <input type="text" name="pheptinh" id="pheptinh">
        <span><?php echo $kq ?></span>
        <input type="submit" value="Tính Kết Qủa" id="tinhtoan">
    </form>
    
    
</body>
</html>