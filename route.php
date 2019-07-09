<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('user/:name', 'index/user');

return [
    // 全局变量规则定义
    '__pattern__' => [
    'id' => '\d+',
    ],
    'user/index' => 'index/user/index',
    'user/create' => 'index/user/create',
    'user/add' => 'index/user/add',
    'user/create' => 'index/user/create.html',
    'user/add_list' => 'index/user/addList',
    'user/update/:id' => 'index/user/update/:id',
    'user/delete/:id' => 'index/user/delete/:id',
    'user/read/:id' => 'index/user/read/:id',
    ];
    
