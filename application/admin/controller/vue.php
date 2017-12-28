<?php
/**
 * Created by PhpStorm.
 * User: gaoshanfeng1
 * Date: 2017/12/7
 * Time: 上午11:20
 */

namespace app\index\controller;
use think\Controller;

class vue extends Controller
{
    public function index(){
       return $this->fetch('index/vue');
    }

}