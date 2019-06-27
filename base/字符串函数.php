<?php

//字符串函数

$str = '   abc  d ef  g   ';

//var_dump(trim($str));


//字符串截取
//echo substr($str,1,3),'<br/>';
//echo strstr($str,'c');


$str = '123a234a4b2a';

//查找位置
//echo strpos($str,'a'),'<br/>';
//echo strrpos($str,'a'),'<br/>';

//echo str_replace('a','b',$str);

$age = 50;
$name = 'Tom';
//格式化输出
//echo sprintf("你好，今年我%d岁，我叫%s", $age, $name);

$str3 = 'abcdefg';
echo str_repeat($str3,5),'<br/>';

echo str_shuffle($str3);