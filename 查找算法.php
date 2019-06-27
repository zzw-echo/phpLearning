<?php

$arr = array(1,3,5,8,23,68,100);

//顺序查找
function check_order($arr,$num){

    for ($i = 0,$len = count($arr);$i < $len; $i++){
        if ($arr[$i] ==$num){
            return $i;
        }

    }

    return false;

}

var_dump(check_order($arr,11));