<?php


//PHP数组相关函数
$arr = array(3,1,5,7,2);

echo '<pre>';

sort($arr);

//asort($arr);
//krsort($arr);

shuffle($arr);
//print_r($arr);


shuffle($arr);
//print_r($arr);



$arr = array(3,1,5,7,2);

//指针函数
echo current($arr),'<br/>';
echo key($arr),'<br/>';

echo next($arr),next($arr),'<br/>';
echo prev($arr),'<br/>';

echo end($arr),'<br/>';
echo reset($arr),'<br/>';
