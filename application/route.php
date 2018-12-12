<?php
use think\Route;
// 定制路由
Route::rule('laucher','admin/login/index');
Route::rule('blog_articles','index/blog_articles/single_blog');
// Route::rule('tools','index/tools/index');
// return [
// 	'admin' => ['admin/login/index'],
// 	'blog_articles'=>['index/blog_articles/single_blog'],
// ];
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
