<?php
//mảng 
    $arr = array(10,5.7, "FPT");
    //xuất mảng 
    var_dump($arr);
    print("<br>");
    print($arr[0]);//lấy giá trị của mảng ở giá trị 0 

    //cách khai báo đơn giản hơn 
    $arr1 = ["XX","yy", "zz"];//cách khai bbaos thứ 2
    var_dump($arr1);
    $arr1[] = "cccc";//thêm phần tử váo cuối hàng 
    print("<br>");
    var_dump($arr1);

    $arr3 = array(array(1,2),array("A","B"));

    $x = $arr3[0][1];// 0 truy xuất đến phần tử con , 1 là truy xuât đến phần tử con của con 


    $y = $arr3 [1][0];
    print $x .$y;



?>