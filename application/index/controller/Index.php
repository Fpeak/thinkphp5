<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        dump(APP_PATH);
    }
    public function demo($lesson){
        return "thinkphp我来啦".$lesson.'课程';
    }
    public function test($name,$lesson){
        return "thinkphp我来啦".'我是'.$name.'听这个'.$lesson.'课程';
    }
    //默认的路由规则
    public function look($name,$lesson='php'){
        return "thinkphp我来啦".'我是'.$name.'听这个'.$lesson.'课程';
    }
    public function siteDemain($name,$lesson){
        $site_domain= \think\Config::get('site_domain');
        return "thinkphp我'.$site_domain.'来啦".'我是'.$name.'听这个'.$lesson.'课程';
    }
    public function user($name,$age){
        return "我的名字是".$name.'年龄是'.$age;
    }
}
