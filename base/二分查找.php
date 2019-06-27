<?php

//二分查找

$arr = array(1,3,5,8,23,68,100);

$res = 8;

function check_break($arr,$res){
    $right = count($arr);
    $left = 0;


    while ($left <= $right){

        $middle = floor(($right+$left)/2);

        if ($arr[$middle] == $res){
            return $middle+1;
        }

        if ($arr[$middle] < $res){
            $left = $middle + 1;
        }else{
            $right = $middle +1;
        }
        return false;
    }
}

var_dump(check_break($arr, $res));