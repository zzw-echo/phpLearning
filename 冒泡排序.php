<?php

//数组：冒泡排序

$arr = array(1,4,2,9,7,5,8);

for ($i = 0,$len = count($arr);$i<$len;$i++){
    for ($j = 0; $j < $len-1; $j++){
        //判断：两两相比
        if ($arr[$j] > $arr[$j+1]){
            $arr[$j] = $arr[$j] ^ $arr[$j+1];
            $arr[$j+1] = $arr[$j] ^ $arr[$j+1];
            $arr[$j] = $arr[$j] ^ $arr[$j+1];
        }
    }
}

echo '<pre>';
print_r($arr);