<h1 align="center">shineyork/sjunit-laravel</h1>

<p align="center"> A simplified version of the laravel framework unit test.

</p>
## 要求 
laravle >=5.8 && "php": "^7.1.3",

## Installing

```shell
$ composer require shineyork/sjunit-laravel -vvv
```
## 配置方式
5.5手动配置laravel对于"ShineYork\SJunitLaravel\Providers\SJunitServiceProvider::class"服务放到config/app.php中

解释路由
<?php
Route::get('/','SJunitController@index');
Route::post('/','SJunitController@store')->name('test.store');
Route::get('test','TestController@index');
?>



## git->注册一个gitHub账号
先进入组件包目录
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/1348306300/sjunit-laravel.git
git push -u origin master