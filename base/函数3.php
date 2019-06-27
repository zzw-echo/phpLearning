<?php

function display(){
    echo __FUNCTION__;  //输出当前函数名字
}

//var_dump(display());

//加法运算
function add($num1, $num2 = 1){
    return $num1 + $num2;

    echo $num1;
}

$res = add(20);

echo $res;

return 'hello world!';

echo $res;