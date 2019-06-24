<?php

//PHP字符串：定义

//引号定义
$str1 = 'hello';
$str2 = "hello";
//var_dump($str1,$str2);

//结构化定义
//heredoc结构
$str3 = <<<EOD
    hello
        world
EOD;

//nowdoc结构
$str4 = <<<'EOD'
    hello
        world
EOD;

//var_dump($str3,$str4);

//定义字符串转义符号
$str5 = 'abc\r\ndef\t\'\"\$fg';
$str6 = "abc\r\ndef\t\'\"\$fg";
//echo $str5 ,'<br/>', $str6;

//变量识别
$a = 'hello';

$str1 = 'abc $a def';
$str2 = "abc $a def";
//$str3 = "abc$adef";
$str4 = "abc{$a}def";

echo $str1,'<br/>',$str2,'<br/>',$str3,'<br/>',$str4;
