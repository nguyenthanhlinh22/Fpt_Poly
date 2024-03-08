<?php 
    $array=["CCTV","Computer","Hard Disk","Keyboad","Laptops","Memory","Mouse"];
    $i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="CSS/centori.css">
    <script src="https://kit.fontawesome.com/db4ae7b83e.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>CATEGORY LIST</h2>
    <table cellpadding="10" cellspacing="0">
        <thead>
            <tr cellpadding="2px" align="center">
                <td>STT</td>
                <td colspan="2">Name</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($array as $new){ ?>
                <tr cellpadding="2px">
                   <td><?php echo $i++ ; ?></td>
                    <td colspan="2"> <?php echo $new ?> </td>
                    <td > <a href=""> <i class="fa-solid fa-pen-to-square"></i>edit</a></td>
                    <td > <a href=""> <i class="fa-solid fa-trash"></i>Remove</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>
</html>