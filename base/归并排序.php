<?php


$arr = array(4,7,2,1,5,9,3);

function merge_sort($arr){
    //递归出口
    $len = count($arr);
    if ($len <= 1) return $arr;

    //拆分
    $middle = floor($len/2);
    $left = array_slice($arr,0,$middle);
    $right = array_slice($arr,$middle);

    //递归点
    $left = merge_sort($left);
    $right = merge_sort($right);

    //假设左边和右边都已排好序：二路归并
    $m = array();
    while(count($left) && count($right)){

        $m[] = $left[0] < $right[0] ? array_shift($left) : array_shift($right);
    }

    return array_merge($m,$left,$right);


}

print_r(merge_sort($arr));