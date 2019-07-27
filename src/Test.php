<?php
/**
 * Created by PhpStorm.
 * User: stc17
 * Date: 2019/7/25
 * Time: 14:06
 */
namespace  ShineYork\SjunitLaravel;

class Test
{
    public function demo($value=''){
        return 'p';
    }

    public function index($param1,$param2){
        return '这是测试 单元组件的方法'.$param1.'--'.$param2;
    }
}