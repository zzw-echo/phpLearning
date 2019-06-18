<?php
/*
 * PHP中，实现a和b的交换
 */
$a = 10;
$b = 8;
#智障级
$c = $a;
$a = $b;
$b = $c;
#凡人级
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
#神经级
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo $a.",".$b;
