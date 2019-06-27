<?php

$arr = array(1,4,2,9,7,5,8);

for ($i = 0,$len = count($arr); $i<$len; $i++){

    $min = $i;
    for ($j = $i+1; $j<$len ;$j++){
        if ($arr[$j] < $arr[$min]){
            $min = $j;
        }
    }

    if ($min != $i){
        $arr[$min] = $arr[$min] ^ $arr[$i];
        $arr[$i] = $arr[$min] ^ $arr[$i];
        $arr[$min] = $arr[$min] ^ $arr[$i];
    }

}
echo '<pre>';
print_r($arr);

echo '<hr/>';
