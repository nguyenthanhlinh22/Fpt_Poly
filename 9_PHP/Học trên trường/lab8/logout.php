<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    echo "Success logout ";
    session_start();
    session_destroy();
    
    ?>
    login <a href="login.php" title="Login">Login</a>
    
</body>
</html>