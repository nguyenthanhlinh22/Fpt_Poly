<?php
    $a = 10 ;
    $b = 5 ;


    if( $a > $b){
        echo 'a lớn hơn ';
        if($a>10){
            echo $a;
        }else{
            echo $b;
        }
    }else if ($a < $b){
        echo ' b lớn hơn';
    }else{
        echo'bằng nhau';
    }



    $thang = 2 ; 
    switch($thang){
        case 2 : 
            echo 'tháng có 28 ngày ';
            break;//ngắt câu lệnh 
        case 3 : 
            echo 'tháng có 31 ngày ';
            break;
        case 4 : 
            echo 'tháng có 30 ngày ';
            break;
        default:
            echo' tháng không hợp lệ';
        break;
    }
    

    

?>