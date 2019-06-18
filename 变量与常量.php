<?php
/*
 * 测试变量与常量
 */
header("Content-Type:text/html; charset=utf-8");
$num = 1;
$num = "哈哈哈哈";
echo $num;
$num1 = $num2 = $num3 = 5;
echo $num1;
echo isset($num1);
var_dump($num1);
var_dump(empty($num1));
$isTrue="";
if ($isTrue){
    echo "这是true";
}else{
    echo "这是false";
}

echo "<br/><br/><br/>";

$str1 = 'hahaha{$num1}hahaha\'aha';
$str2 = "hahaha{$num1}hahaha\"aha";
$str3 = "hahaha{$num1}hahahahaha";
$str4 = <<<str
123
     456
     789
str;

echo $str1;
echo "<br/>";
echo $str2;
echo "<br/>";
echo $str3;
echo "<br/>";
echo $str4;
echo "<br/>";

function func1(){
    define("NUM",12,true);
}
func1();
echo "<pre>";
//print_r(get_defined_constants());
echo "</pre>";
var_dump(num);