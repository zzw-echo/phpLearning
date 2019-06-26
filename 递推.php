<?php


//递推思想

$f[1] = 1;
$f[2] = 1;

$des = 15;
for ($i = 3; $i <=15; $i++){
    $f[$i] = $f[$i-1] + $f[$i-2];
}

//查看
echo '<pre>';

print_r($f);
