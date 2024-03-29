<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
//use think\Route;
//Route::get('/',function (){
//    return 'hello,World!';
//});

//Route::rule('new/:id','index/Index/list2');
//Route::get('new','index/Index/read');
//Route::post('new/:id','index/Index/test');

Route::resource('blog','index/blog');
Route::controller('detail','index/detail');

return [
    'new'=>'index/Index/read',

    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
