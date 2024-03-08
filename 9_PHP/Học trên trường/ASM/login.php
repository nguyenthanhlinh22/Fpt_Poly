<?php
    
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $arr_er = [];
    $user = $_POST["user"];
    $password = $_POST["password"];
    if(empty($user)){
         $arr_er["err_user"] = "usser khong duoc de trong";
        }

    if(empty($password)){
        $arr_er["err_pass"] = "pass khong duoc de trong";
           
        }
        
    }

 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-content">
            <h4>LOGIN</h4>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <label for="user">User Name</label> <br>
                <input type="text" name="user" id="user" placeholder="Enter user"> <br>
                <span <?php  isset($arr_er["err_user"]) ? printf($arr_er["err_user"]):""; ?>></span>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password"><br>
                <span <?php  isset($arr_er["err_pass"]) ? printf($arr_er["err_pass"]):""; ?>></span>
                <input type="submit" name="login" id="login" value="Login">
            </form>
            <span></span>
                Click here to <a href=#> register</a>
        </div>
    </div>
</body>

</html>