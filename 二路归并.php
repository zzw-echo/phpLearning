<?php

$arr1 = array(1,3,5);
$arr2 = array(2,4,6);

$arr3 = array();
while (count($arr1)&&count($arr2)){
    $arr3[] = $arr1[0] < $arr2[0] ? array_shift($arr1):array_shift($arr2);
}


print_r(array_merge($arr3,$arr1,$arr2));