 <?php
// thông tin cấu hình mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlnv";


    // connect to Mysql 
    $conn = new mysqli($servername, $username, $password,     $dbname  );
    
    //testing connect 
    if($conn->connect_error){
        die("connect to mysql failure" . $conn->connect_error );
    }else{
        echo "Success";
    }








?>