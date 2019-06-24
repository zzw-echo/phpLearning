<?php

//php错误处理

//处理脚本让浏览器按照指定字符集解析的方法
header('Content-type:text/html;charset=utf-8');

$a = 100;

//echo $a

$b = 0;

if ($b == 0){
    trigger_error('除数不能为0！');
//    trigger_error('除数不能为0！',E_USER_ERROR);
}

echo 'hello!';
