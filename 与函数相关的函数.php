<?php

echo '<pre>';

function test($a, $b){
    //获取指定参数
    var_dump(func_get_arg(1));
    //获取所有参数
    var_dump(func_get_args());
    //获取参数数量
    var_dump(func_num_args());
}

//调用
function_exists('test') && test(1,'2',3,4);
