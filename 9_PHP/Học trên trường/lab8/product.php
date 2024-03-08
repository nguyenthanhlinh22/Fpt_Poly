<?php
    session_start();
    if(isset($_SESSION["user"])){
 ?>
Welcome <?php echo $_SESSION["user"]; ?>. 
click for buton to out <a href="logout.php">Logout</a>
<?php
     
    } else echo  " <a href='login.php' title='login'>Please login</a> ";
        
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
        <h1>hello xin chào đây là product</h1>
    </div>
    
</body>
</html>
  


