<?php
/**
 * Created by PhpStorm.
 * User: stc17
 * Date: 2019/7/25
 * Time: 15:35
 */

Route::get('/','SJunitController@index');
Route::post('/','SJunitController@store')->name('test.store');

Route::get('test','TestController@index');