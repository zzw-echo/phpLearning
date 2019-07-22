<?php
namespace app\index\validate;
use think\Validate;
class Person extends Validate{

    protected $rule=[
        'name|用户名'=>'require|min:3',
        'password|密码'=>'require|min:6|confirm:repassword',
    ];

    protected $message = [
      'name.require'=>'用户名不能为空',
      'name.min'=>'用户名长度不能少于3位',
      'password.require'=>'密码不能位空',
      'password.min'=>'密码长度不能少于6位',
      'password.confirm'=>'两次密码不一致',
    ];

}