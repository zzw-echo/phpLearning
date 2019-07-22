<?php
namespace app\admin\controller;
use think\Controller;
use app\index\model\Person as PersonModel;
use app\index\validate\Person as PersonValidate;

class Index extends Controller{

    public function login(){
        return $this->fetch();
    }

    public function check(){
        $data = input('post.');
        dump($data);
        die;
    }

    public function index(){
        return $this->fetch();
    }

    public function register(){
        return $this->fetch();
    }

    public function add(){
        $data = input('post.');
        $val = new PersonValidate();
        if (!$val->check($data)) {
            $this->error($val->getError());
            exit;
        }
        $user = new PersonModel($data);
        $ret = $user->allowField(true)->save();
        if ($ret){
            $this->success('恭喜你注册成功','Index/index');
        }else{
            $this->error('用户注册失败');
        }
    }




}