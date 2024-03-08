<?php
include '../connect.php';
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $con->prepare("select * from users where username = '$username' and password = '$password'");
    $stmt->execute();
    if($stmt->rowCount()>0){
        $_SESSION['username'] = $username;
        header("location: home.php");
        $_SESSION['success'] = "You are logged in";
    }
    else{
        header("location: login.php");
        $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
        }
    }   
?>
<html>
<head>
<title>session example</title>
<link rel="stylesheet" href="../bootstrap.css" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:50%;
    height:30%;
    padding:20px;
}
</style>
</head>
<body>
    <div class="container">
    <h3 align="center"><u>Login Form</u></h3>
    <br/><br/><br/><br/>
    <?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; }?>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
            <label class="control-label col-sm-2" for="email">Username*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="Please enter the Username">
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Password*:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Please enter the password">
                </div>
            </div>
            <br/><br/>
           <button type="submit" class="btn btn-info btn-block" name="login">Submit</button>
        </form>
    </div>
<script src="../jquery-3.2.1.min.js"></script>
<script src="../bootstrap.min.js"></script>
</body>
</html>