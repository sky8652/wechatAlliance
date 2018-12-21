<?php

use App\Events\Chat;
use Illuminate\Support\Facades\Redis;


Route::get('/', function () {
    return view('gateway.home');
});
Route::get('/contact',function (){
    return view('gateway.contact');
});
Route::get('/about',function (){
    return view('gateway.about');
});

/** 测试 */
//App\Http\Controllers\App\Http\IM\IndexController
Route::get('test_socket','IM\IndexController@chatRoom');
Route::get('socket','IM\IndexController@socket');
Route::get('bind','IM\IndexController@bindSocket');
Route::get('send','IM\IndexController@sendSocket');

Route::get('/home', function () {
    return view('gateway.home');
});