<?php
      include ('connect.php');
      $message = "";
      if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $check_query =  "SELECT * FROM user WHERE username='$username'";
        $result = $conn->query($check_query);
        if($result->num_rows > 0){
            $message = " Tai khoang da dang ki ";

        }else{
            $insert_query = "INSERT INTO user (username, password, email) VALUES(' $username', ' $password', ' $email '     )";
            if($conn->query($insert_query)=== TRUE){
                $message = "thanh cong ";
            }else{
                echo "that bai";
            }
        }
      }
$conn->close();
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
        <div class="row">
            <h3>REGISTER</h3>
        </div>
        <div class="row">
            <label for="">user name</label>
            <input type="text" name="username" id="username" placeholder="Enter username">
        </div>
        <div class="row">
            <label for="">email:</label>
            <input type="text" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="row">
            <label for="">Password</label>
            <input type="text" name="password" id="password" placeholder="Enter password">
        </div>
        <div class="row">
            <label for="">Confirm Password</label>
            <input type="text" name="confirm" id="confirm" placeholder="confirm password">
        </div>
        <div class="btn">
        <input type="submit" value="Login" name="btn-regis" >

        </div>
        <div class="btn">
        <div class="massger_linel" class="massge"><?php echo $message?></div>
        </div></form>
        
   
    
    </form>
       
       
    
</body>
</html>