<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User as UserModel;
use app\admin\validate\User as UserValidate;

class User extends Controller{
    public function index(){
        return $this->fetch();
    }

    public function list1(){
        /*
        $data = UserModel::all();
        $this->assign('data',$data);
        return $this->fetch();
        */
        //通过分页显示数据
        $data = UserModel::paginate(2);
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page',$page);
        return $this->fetch();

    }

    public function add(){
        return $this->fetch();
    }

    public function insert(){
        $data = input('post.');
        $val = new UserValidate();
        if (!$val->check($data)){
            $this->error($val->getError());
            exit;
        }
        $user = new UserModel($data);
        $ret = $user->allowField(true)->save();
        if ($ret){
            $this->success('新增管理员成功','User/list');
        } else{
            $this->error('新增管理员失败');
        }
    }

    public function edit(){
        $id = input('get.id');
        $data = UserModel::get($id);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function update(){
        $data = input('post.');
        $id = input('post.id');
        $val = new UserValidate();
        if (!$val->check($data)){
            $this->error($val->getError());
            exit;
        }
        $user = new UserModel();
        $ret = $user->allowField(true)->save($data,['id'=>$id]);
        if ($ret){
            $this->success('修改用户信息成功','User/list1');
        }else{
            $this->error('修改用户信息失败');
        }
    }

    //删除用户信息的方法
    public function delete(){

        //实现软删除的方法
        /*$id = input('get.id');
        $ret = UserModel::destroy($id);
        if ($ret){
            $this->success('删除用户成功','User/list1');
        } else{
            $this->error('删除用户失败');
        }*/
        $id = input('get.id');
        $ret = UserModel::destroy($id, true);
        if ($ret){
            $this->success('删除用户成功','User/list1');
        } else {
            $this->error('删除用户失败');
        }

    }




}