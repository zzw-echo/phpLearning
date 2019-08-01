<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Base extends Controller{
    //用来存放需要通过 登录之后才能操作的方法的集合
    protected $is_check_login = [''];

    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if (!$this->isLogin() && (in_array(Request::instance()->action(),$this->is_check_login)||$this->is_check_login[0] == ['*'])){
            $this->error('请先登录系统','index/index/login');
        }
    }

    //判断登录的方法
    public function isLogin(){
        return session('?name');
    }
}