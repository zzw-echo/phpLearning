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

echo '<hr/>';
//分支结构：switch分支

//根据日期做不同的事情
$day = 1;
switch ($day){
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
    case 3:
        echo '3';
        break;
    case 4:
        echo '4';
        break;
    default:
        echo 'error';
        break;
}

echo '<hr/>';

//循环结构：for循环

//从1到10输出：初始为1，结果为10
//for ($i =1;$i<=10;$i++){
//    echo $i,'<br/>';
//}
//echo $i;

//for ($i = 1,$end = 10; $i <= $end; $i++){
//    echo $i,'<br/>';
//}

//无条件for循环
//for (;;){
//    echo 'hello world<br/>';
//}
$i = 45;
while ($i <= 55){
    echo $i++,'<br/>';
//    $i++;
}

$i = 1;
 do{
     if ($i %2 !=1){
         echo $i,'<br/>';
     }
     $i++;
 }while($i <= 10);

