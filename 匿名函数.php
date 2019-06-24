<?php

//匿名函数

//定义匿名函数
$func = function (){
    echo 'hello world!';
};

//调用匿名函数
//var_dump($func);


//闭包函数
function display(){
    //定义变量
    $name = __FUNCTION__;

    //定义匿名函数，通过use使用外部变量
    $innerfunction = function () use($name){    //use就是将外部变量保留给内部使用
        //函数内部的函数
        echo $name;
    };

    //调用
    $innerfunction();


}

display();