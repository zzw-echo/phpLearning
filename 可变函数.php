<?php

//php可变函数

function display(){
    echo __LINE__,__FUNCTION__;
}

$func = 'display';

$func();