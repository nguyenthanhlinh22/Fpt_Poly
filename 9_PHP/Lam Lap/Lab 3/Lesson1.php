<?php
 $stay = function($name){
    echo "hello ". $name;

 };
 $say("world");
 function mycaller($mycallback){
    echo $mycallback();

 }

 mycaller(function(){
    echo "hello";

 });
 $a = array(1, 2 , 3, 4 ,5);
 $b = array_map(function($n){
    return $n * $n * $n;
 }, $a);
 print_r($b);

?>