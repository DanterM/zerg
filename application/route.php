<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// !!!  Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');

//Route::rule('hello','sample/Test/hello','GET',['https'=>false]);
//Route::rule('hello','sample/Test/hello','GET|POST',['https'=>false]); //两种模式
//Route::post('hello/:id','sample/Test/hello');
//Route::post();
//Route::any();



//三段式：1、模块名api 2、控制器名v1.Banner(TP5就是这样定义的) 3、操作方法名
Route::get('banner/:id','api/v1.Banner/getBanner');


validate();

