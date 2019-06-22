<?php

//循环控制


//需求：输出1到100之间5的倍数
$i = 1;
while ($i <= 100){
    if ($i % 5 != 0){
        $i++;
        continue;
    }

    echo $i++,'<br/>';


}


