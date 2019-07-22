<?php
namespace app\admin\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model{

    use SoftDelete;
    protected static $deleteTime = 'delete_time';

    protected $auto = ['ip','password','repassword'];
    protected function setIpAttr(){
        return request()->ip();
    }

    //加密
    protected function setPasswordAttr($value){
        return md5($value);
    }

    protected function setRepasswordAttr($value){
        return md5($value);
    }


}