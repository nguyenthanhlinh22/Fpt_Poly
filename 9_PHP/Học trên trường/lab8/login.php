<?php
        include ('connect.php');
        session_start();
        $message = "";
        if($_SERVER["REQUEST_METHOD"]== "POST"){


            $username = $_POST['username'];
            $password = $_POST['password'];
            echo $password;

            $query = "SELECT * FROM user WHERE username='$username'";

            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
             if($row['password']===$password){
                $RESSION["user"] = "$username";
                header("Location: product.php");
             }else{
                echo "sai mk. vui long thu lai";
             }
            }else{
                echo " nguoi dung khong ton tai";
            }
            mysqli_close($conn);
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
    <div class="container">
                    <form action="<?php echo $_SERVER ["PHP_SELF"];   ?>" method="POST">
                    </div>
                <div class="row">
                    <h3>Login</h3>
                </div>
                <div class="row">
                    <lable>username</lable>
                    <input type="text" name="username" id="username" placeholder="Enter username">;

                </div>
                <div class="row">
                    <lable>Password</lable>
                    <input type="text" name="password" id="password" placeholder="Enter password">;

                </div>
                <div class="btn">
                    <input type="submit" value="Login" name="btn-regis" >

                </div>
                <div class="btn">
                    <div class="massger_linel" class="message"><?php echo $message?></div>
    </div>
</form>
    

    
</body>
</html>