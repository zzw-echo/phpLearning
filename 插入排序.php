<?php

//PHP数组排序：插入排序


$arr = array(1,4,2,9,7,5,8);

for ($i = 1,$len = count($arr); $i < $len; $i++){
    $temp = $arr[$i];

    $change = false;

    for ($j = $i - 1;$j>= 0; $j--){
        if ($arr[$j] > $temp){
            $arr[$j+1] = $arr[$j];
//            $arr[$j] = $temp;
            $change = true;
        }else{
            break;
        }
    }

    if ($change){
        $arr[$j+1] = $temp;
    }
}

echo '<pre>';

print_r($arr);