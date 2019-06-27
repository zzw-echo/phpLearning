<?php


$arr = array(3,4,2,1,9,7,5,8);

function quick_sort($arr){
    //递归出口
    $len = count($arr);
    if ($len <= 1) return $arr;

    $left = $right = array();

    for ($i = 1; $i < $len; $i++){
        if ($arr[$i] < $arr[0]){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }
    $left = quick_sort($left);
    $right = quick_sort($right);

    return array_merge($left,(array)$arr[0],$right);
}



echo '<pre>';
print_r(quick_sort($arr));


