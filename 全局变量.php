<?php

//全局变量不能访问局部变量
//局部变量不能访问全局

$global = 'global area';    //最终会被系统纳入到超全局变量中：$GLOBALS['global'] = global area;

function display(){
    $inner = __FUNCTION__;

//    var_dump($GLOBALS);
//    echo $global;

    //定义变量：使用全局变量
    global $global;
//    echo $global;

    //定义变量：全局不存在
    global $local;
    $local = 'inner';

}

display();

//全局空间访问局部变量
//echo $inner;

//全局空间访问“局部变量”
//echo $local;