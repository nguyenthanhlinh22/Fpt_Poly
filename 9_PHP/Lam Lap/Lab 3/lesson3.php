<?php
$chu = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ch = $_POST["chuoi"];
    $ch2 = $_POST["chuoi2"];
    $tr = chunk_split($ch, 2, ":");
    $chu = substr($tr, 0, strlen($tr) - 1);
    xu_li_chuoi($ch2);
}
function xu_li_chuoi($chuoi)
{
    $ch = explode('\n', $chuoi);
    echo "<pre>";
    echo var_dump($ch);
    echo "<pre>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?> " method="POST">
        nhập chuỗi <input type="text" name="chuoi" id="chuoi"> <br>
        nhập chuỗi 2 <input type="text" name="chuoi2" id="chuoi2"> <br>
        <span>kết quả là :<?php echo $chu ?></span><br>
        <input type="submit" value="ok">
    </form>

</body>

</html>