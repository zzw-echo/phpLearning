<?php

//闭包函数
function display1(){

    $name = __FUNCTION__;

    $innerfunction = function () use($name){
        echo $name;
    };
    //返回内部匿名函数
    return $innerfunction;
}

$closure = display1();

//var_dump($closure);

$closure();