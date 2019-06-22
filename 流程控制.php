<?php
//分支结构：if分支

//最简if
$day = 'monday';
if ($day == 'sunday'){
    echo ' go out';
}


//最简if
$day = 'satday';
if ($day == 'sunday'){
    echo ' go out';
}else{
    echo 'work';
}

echo '<hr/>';

//嵌套式
if ($day == 'sunday'){
    echo 'go out';
}else{
    if ($day == 'satday'){
        echo 'play at home';
    }else{
        echo 'work';
    }
}

echo '<hr/>';
//复合
if ($day == 'sunday'){
    echo 'go out';
}elseif ($day == 'satday'){
    echo 'play at home';
}else{
    echo 'work';
}
