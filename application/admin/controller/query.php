<?php
/**
 * Created by PhpStorm.
 * User: gaoshanfeng1
 * Date: 2017/12/6
 * Time: 下午2:27
 */

namespace app\index\controller;
use think\Log;

class query
{
    public function log(){
        Log::info("你好啊,这是我们自定义的文件");
        Log::error("警告:这是一个错误的文件");
        Log::info("你给我站住");
    }
    public function aa(){
        dump(ROOT_PATH);
    }

}