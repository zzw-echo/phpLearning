<?php


//递推思想
//递推算法求斐波那契数列

$f[1] = 1;
$f[2] = 1;

$des = 15;
for ($i = 3; $i <=15; $i++){
    $f[$i] = $f[$i-1] + $f[$i-2];
}

//查看
echo '<pre>';

print_r($f);
echo '<hr/>';

function my_recursive($des){

    if ($des == 1 || $des == 2) return 1;

    $f[1] = 1;
    $f[2] = 1;

    for ($i = 3; $i <=15; $i++){
        $f[$i] = $f[$i-1] + $f[$i-2];
    }

    return $f[$des];

}

echo my_recursive(15);