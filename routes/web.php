<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('order');
});

Auth::routes();
Route::post('/People', 'TScontroller@postOrder');
route::get('/test',function () {
    return view('testt');
});
route::get('/test',function () {
    return view('tt');
});
route::get('/tt',function () {
    echo 'happy';
});