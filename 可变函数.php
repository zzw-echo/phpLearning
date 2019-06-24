<?php

//php可变函数

function display(){
    echo __LINE__,__FUNCTION__;
}

$func = 'display';

//$func();

//定义系统函数（假设）
function sys_fucntion($arg1, $arg2){
    //给指定的函数（第一个参数），求对于的第二个参数的4次方
    //为实际用户输入的数值进行处理
    $arg2 = $arg2 + 10;
    return $arg1($arg2);    //user_function(20)

}

//定义一个用户函数：求一个数的四次方
function user_function($num){
    return $num * $num * $num * $num;
}

echo sys_fucntion('user_function',10);