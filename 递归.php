<?php

//递归思想

function recursion($n){
    if ($n == 1 || $n == 2) return 1;

    return recursion($n - 1) + recursion($n - 2);
}

echo recursion(15);

