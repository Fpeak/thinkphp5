<?php

think\Route::rule('demo/:lesson','index/Index/demo','GET',['ext'=>'html'],['lesson'=>'\w{1,10}']);
//全局变量规则
think\Route::pattern([
    'name'=>'[a-zA-z]+',//纯字符串
    'age'=>'\d{2}' //年龄字段必须为一个整数,而且必须2位
]);
think\Route::get('user/:name/:age','index/Index/user',[],[
    'name'=>'[a-zA-z]+',//纯字符串
    'age'=>'\d{2}' //年龄字段必须为一个整数,而且必须2位
]);
//多个参数定义
think\Route::rule('test/:name/:lesson','index/Index/test','GET',['ext'=>'html'],['name'=>'\w{1,10}','lesson'=>'\w{1,10}']);
//默认值参数定义
think\Route::rule('look/:name/[:lesson]','index/Index/look','GET',['ext'=>'html'],['name'=>'\w{1,10}','lesson'=>'\w{1,10}']);
think\Route::get('siteDemain/:name','@index/Index/siteDemain?lesson=think');

//自定义类的路由
think\Route::get('test','\app\Test@test');
//闭包函数
think\Route::get('myfunc/:lesson',function($lesson){
   return '网站更新中..'.$lesson;
});

think\Route::group('demo',[
   ':id'=>['index/Index/demo1',['method'=>'get'],['id'=>'\d{2,4}']],
   ':name'=>['index/Index/demo2',['method'=>'get'],['name'=>'[a-zA-Z]+']],
   ':isOk'=>['index/Index/demo3',['method'=>'get'],['isOk'=>'0|1']],
]);
think\Route::group('demo',function (){
  think\Route::get('index/Index/demo1',[],['id'=>'\d{2,4}']);
  think\Route::get('index/Index/demo1',[],['id'=>'\d{2,4}']);
  think\Route::get('index/Index/demo1',[],['id'=>'\d{2,4}']);
});
//
//return[
////  'demo/:lesson'=>['index/Index/demo',['method'=>'get','ext'=>'html'],['lesson'=>'\w{1,10}']],
//    'mychart/:lesson'=>['index/Index/demo','method'=>'get','callback'=>'my_check'],
//    'xshare/:name/:lesson'=>[],
//];