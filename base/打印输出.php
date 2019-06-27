<?php

//系统函数

//输出相关
echo print ('hello world!<br/>');
print ('hello world!<br/>');

$a = 'hello world!<br/>';
print_r($a);

echo '<hr/>';

//时间函数
echo date('Y年 m月 d日 H:i:s',12345678),'<br/>';
echo time(),'<br/>';
echo microtime(),'<br/>';

echo strtotime('tomorrow 10 hours');