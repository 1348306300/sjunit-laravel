<?php
/**
 * Created by PhpStorm.
 * User: stc17
 * Date: 2019/7/25
 * Time: 15:40
 */

namespace ShineYork\SJunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index(){
        return '这是测试 sjunit的一个测试控制器，测试目标是与laravel集成控制器和服务';
    }
}