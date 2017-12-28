<?php
/**
 * Created by PhpStorm.
 * User: gaoshanfeng1
 * Date: 2017/12/28
 * Time: 下午2:15
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Loader;

class add extends Controller
{
    public function index(){
        if (request()->isPost()){

            $data =[
                "username"=>input("username"),
                "password"=>md5(input("password")),
                "email"=>input("email"),
            ];
            $validate = Loader::validate('Admin');
            if ($validate->scene('add')->check($data)){
                $validate->getError();
                die();
            }
            if (Db::name("admin")->insert($data)){
                $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
            return;
        }
        return $this->fetch();
    }

}