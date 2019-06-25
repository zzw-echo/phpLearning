<?php

//PHP数组
//定义数组：array
$arr1 = array('1', 2, 'hello');
var_dump($arr1);

echo '<br/>';

$arr2 = ['1', 2, 'hello'];
var_dump($arr2);

echo '<br/>';

//隐形数组
$arr3[] = 1;
$arr3[10] = 100;
$arr3[] = '1';
$arr3['key'] = 'value';
var_dump($arr3);
//索引数组，关联数组，混合数组

