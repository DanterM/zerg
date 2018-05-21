<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 2018/5/21
 * Time: 11:45
 */

namespace app\sample\controller;
use MongoDB\Driver\ReadConcern;
use think\Request;

class Test
{

    // http://localhost/zerg/public/index.php/sample/test/hello  太长、语义不明确


    //！！！！获取变量的三种方式：1、自定义变量2、使用think\Request变量3、input助手函数
    public function hello()
    {
//        $all = input('param.');


//        $all = $request->param();  //依赖注入


//        $all = Request::instance()->param();  //'name' => string 'wangzhen' 'age' => string '16' 'id' => string '123'
//        $all = Request::instance()->route();  //'id' => string '123'
//        $all = Request::instance()->get();   //'name' => string 'wangzhen'
//        $all = Request::instance()->post();  //'age' => string '16'
//        var_dump($all);

//        $id = Request::instance()->param('id');
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
//
//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;
//        return 'hello,王震';
    }
}