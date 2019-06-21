<?php
$a = $b = 10;
$c = 0;
//var_dump($a / $c);//错误：被除数不能为0

echo '<hr/>';

//比较运算符
$a = '123';  //字符串
$b = 123;  //整形

//判断相等
var_dump($a == $b);

//全等判断
var_dump($a === $b);

echo '<hr/>';

$a = 'weekend';
$b = 'goods';

//逻辑与
var_dump($a=='weekend' && $b == 'good');

//逻辑或
var_dump($a == 'weekend' || $b == 'good');

//逻辑非
var_dump($b == 'good');
var_dump(!($b == 'good'));