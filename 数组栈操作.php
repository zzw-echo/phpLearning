<?php

//模拟数据结构：栈和队列

$arr = array();

//栈：  FILO
//队列：FIFO

array_push($arr,3);
array_push($arr,2);
array_push($arr,1);
print_r($arr);

echo array_pop($arr), array_pop($arr), array_pop($arr), '<br/>';


$arr = array();

array_unshift($arr, 3);
array_unshift($arr, 2);
array_unshift($arr, 1);
print_r($arr);

echo array_pop($arr), array_pop($arr), array_pop($arr), '<br/>';


 $arr  = array(1,2,3,4,6,5);
 print_r(array_reverse($arr));

 var_dump(in_array(6,$arr));
 var_dump(in_array(100,$arr));

 echo '<hr/>';

 print_r(array_keys($arr));
 echo '<br/>';
 print_r(array_values($arr));


