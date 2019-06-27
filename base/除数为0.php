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

echo '<hr/>';

//连接运算符
$a = 'hello';
$b = 123;
 echo $a . $b;

 $a .= $b; //$a = $a . $b;
echo $a;

//错误抑制符
$a = 10;
$b = 0;
//@($a % $b);

//三木运算符
echo '<hr/>';
$a = 10;
$b = $a>10 ? 100 : 0;
echo $b;

//自操作符
echo '<hr/>';
$a = $b = 1;
$a++;
++$b;
echo $a,$b;

echo '<hr/>';
echo $a++,++$b;
echo $a,$b;