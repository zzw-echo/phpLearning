<?php
namespace app\index\controller;
use app\index\model\User as UserModel;

class User{

    //新增一条数据的方法
    public function add(){
        $user = new UserModel();
        $user->name = '流云';
        $user->email = 'liuyun@aaa.aaa';
        $user->birthday = strtotime('1989-7-11');
        if ($user->save()){
            return '用户新增成功';
        }else{
            return '用户新增失败';
        }
    }

    public function add2(){
        $user['name'] = '看云';
        $user['email'] = 'kanyun@aaa.aaa';
        $user['birthday'] = strtotime('1991-6-12');
        if ($result = UserModel::create($user)){
            return 'add2 success';
        }else{
            return 'add2 fail';
        }
    }

    //批量新增数据
    public function addList(){
        $user = new UserModel();
        $list = [
            ['name' => '张三','email'=>'aaa@aaaa.aaa'],
            ['name' => '里斯','email'=> 'aaa@aaa.bbb']
        ];

        if ($user ->saveAll($list)){
            return '批量操作成功';
        }else{
            return 'failed';
        }

    }



}