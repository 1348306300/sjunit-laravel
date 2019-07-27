<?php
/**
 * Created by PhpStorm.
 * User: stc17
 * Date: 2019/7/25
 * Time: 15:49
*/
namespace  ShineYork\SJunitLaravel\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

//单元测试组件的服务提供者
//用来加载sjunit组件的
//组件传统方式的引用的话就是 composer require xxxx组件
//然后只要网络ok就可以从GitHub上下载
class SJunitServiceProvider extends ServiceProvider
{
    public  function register()
    {
        //echo '这是sjunt服务提供者';
        //注册组件路由
        $this->registerRoutes();
        //指定的组件名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views','sjunit'
        );

    }

    public function boot(){

    }

        //参考别人的写法
    private function registerRoutes(){
        Route::group($this->routeConfiguration(),function(){
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration(){
        return[
           // 'domain'=>config('telescope.domain',null), //定义访问路由的域名
            'namespace'=>'ShineYork\SJunitLaravel\Http\Controllers',//定义路由的命名空间
            'prefix'=>'sjunit',//前缀
            'middleware'=>'web' //中间件
        ];
    }
}