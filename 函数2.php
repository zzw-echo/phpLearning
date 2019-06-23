<?php

//函数参数

function add($arg1, $arg2){
    //函数体：直接使用形参
    echo $arg1 + $arg2;
}

$num1 = 10;

//add($num1,20);

function del($num1 = 0,$num2 = 0){
//    echo $num1 - $num2;
}

del(0,$num1);
//echo $num1;

//只能右边有默认值


//引用传值
function display($a,&$b){
    //修改形参的值
    $a = $a * $a;
    $b = $b * $b;

    echo $a,'<br/>',$b,'<br/>';
}

//定义变量
$a = 10;
$b = 5;

//调用函数
display($a,$b);

echo '<hr/>',$a,'<br/>',$b;