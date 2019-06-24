<?php

//PHP字符串：定义

//引号定义
$str1 = 'hello';
$str2 = "hello";
var_dump($str1,$str2);

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

var_dump($str3,$str4);