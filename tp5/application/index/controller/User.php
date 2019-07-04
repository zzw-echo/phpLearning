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

    public function add3(){
        $user = new UserModel();
        $user->save(['name'=>'晚风','email'=>'aaa@aaa.aaa']);
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

    //更新数据
    public function update(){
        $user = UserModel::get(1);
//        dump($user);
        $user->name = '安迪';
        $user->email = 'andi@aa.aaa';
        if ($user->save()){
            return 'success';
        }else{
            return 'fail';
        }
    }

    public function update2(){
        $user = new UserModel();
        $user ->save(['name'=>'刘涛','email'=>'liu@aa.aa'],['id'=>1]);
    }

    //批量更新
    public function batchUpdate(){
        $user = new UserModel();
        $list = [
            ['id'=>2,'name'=>'钟汉良','email'=>'ll@aa.aaa'],
            ['id'=>3,'name'=>'引言','birthday'=>strtotime('2000-1-11')]
        ];
        $user->saveAll($list);
    }

    public function batchUpdate2(){
        $user = new UserModel();
        
    }

    //通过数据库类更新数据
    public function update3(){
        $user = new UserModel();
        $user -> update(['id'=>4,'name'=>'asdcc']);
    }

    //静态
    public function update4(){
        UserModel::update(['id'=>4,'name'=>'haoann','email'=>'haa@aaa.aaa']);
    }

    //查询数据
    public function select(){
        $user = UserModel::get(1);
//        dump($user);
        echo $user->name.'<br/>';
        echo $user->email.'<br/>';
    }

    public function select2(){
        $user = UserModel::get(['name'=>'刘涛']);
        echo $user->email;
    }

    public function select3(){
        $user = new UserModel();
        $result = $user->where('name','钟汉良')->find();
        echo $result->birthday;
    }

    public function select4(){
        $list = UserModel::all([1,2,4,5]);
        foreach ($list as $key=>$value){
            echo $value -> name.'<br/>';
            echo $value -> birthday.'<br/>';
        }
    }



    public function select5(){
        $user = new UserModel();
        $result = $user->where('status',1)->limit(2)->order('id','desc')->select();
//        dump($result);
        foreach ($result as $key=>$value){
            echo $value['name'].'<br/>';
            echo $value['email'].'<br/>';
        }
    }

    //聚合函数的调用
    public function select6(){
        $user = new UserModel();
        echo $user->count('id').'<br/>';
        echo $user->max('birthday').'<br/>';
    }

    //删除数据





}