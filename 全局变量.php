<?php

//全局变量不能访问局部变量
//局部变量不能访问全局

$global = 'global area';

function display(){
    $inner = __FUNCTION__;

//    echo $global;
}

display();

//echo $inner;

