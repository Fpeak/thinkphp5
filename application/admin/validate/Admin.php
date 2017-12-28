<?php

/**
 * Created by PhpStorm.
 * User: gaoshanfeng1
 * Date: 2017/12/28
 * Time: 下午2:44
 */
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{
    protected $rule=[
        'username'=>'require|max:25',
        'password'=>'require|max:25',
        'email'=>'email'
    ];

    protected $message=[
        'name.require'=>'名称必须填写',
        'name.max'=>'名称长度不能超过25位',
        'password.require'=>'密码必须填写',
        'password.max'=>'密码长度不能超过25位',
        'email'=>'邮箱格式必须正确'
    ];
    //验证场景 (在这里面设置的就是要验证的字段)
    protected $scene=[
      'add'=>['username',"password"],
      'edit'=>['username'=>'require',"password"],
    ];
}