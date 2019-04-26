<?php

Route::get('/', function () {
    return view('index');
});
//Route::get('/home', function () {
//    return view('order');
//});



Auth::routes();
Route::post('/People', 'TScontroller@postOrder');
Route::get('/shipment', 'TScontroller@showushipment');
Route::get('/payment', 'TScontroller@check');
Route::post('/pay', 'TScontroller@addcredit');
route::get('/test',function () {
    return view('testt');
});
route::get('/t',function () {
    return view('order');
});
route::get('/tt',function () {
    echo 'happy';
});
route::get('/dashboard',function () {
    echo 'eieie';
});
