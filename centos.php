<?php
/**
 * Created by PhpStorm.
 * User: gaoshanfeng1
 * Date: 2017/12/23
 * Time: 上午10:01
 */
namespace  ju\su;

class Animal{
    public $obj="cat";
    static $name="大黄";
}
function getMsg(){
    echo "123";
}

namespace k2\ee;
class Animal{
    public $obj="mouse";
}
function getMsg(){
    echo "456";
}

echo \ju\su\Animal::$name;

\ju\su\Animal::$name;

$animal = new Animal();
echo $animal->obj;

$animal1= new \ju\su\Animal();
echo $animal1->obj;
