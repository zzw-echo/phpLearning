<?php

//PHP数组遍历：foreach

//定义数组
$arr = array(1,2,3,4,5,6);

foreach ($arr as $v){
    //$v随意命名
    echo $v,'<br/>';
}

foreach ($arr as $k => $v){
    echo 'key:', $k, '=value:', $v, '<br/>';
}

$arr = array(
    0 => array('name' => 'Tom','age' => 30),
    1 => array('name' => 'Jim', 'age' => 28)
);

echo '<hr/>';

//通过foreach遍历一维数组
foreach ($arr as $value){
//    var_dump($value);
    //1、可以继续遍历：增加foreach遍历$value
    //2、可以使用下标访问
    echo 'name is ',$value['name'],' and age is ',$value['age'],'<br/>';
}