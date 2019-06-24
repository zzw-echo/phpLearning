<?php

//字符串函数

$str = '   abc  d ef  g   ';

//var_dump(trim($str));


//字符串截取
echo substr($str,1,3),'<br/>';
echo strstr($str,'c');