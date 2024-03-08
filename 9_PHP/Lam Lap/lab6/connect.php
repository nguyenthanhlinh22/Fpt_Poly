<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "beer";

 $knoi = new mysqli($servername,  $username,  $password,    $dbname  ); 


 if($knoi->connect_error){
    die("kết nối tới mysql thất bại " .$knoi->connect_error);
 }else{
    echo " thành công ";
 }










?>