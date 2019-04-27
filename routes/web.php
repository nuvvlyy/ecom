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
Route::get('/dashboard/bargraph','TScontroller@index01');
Route::get('/dashboard/piegraph','TScontroller@index');
Route::get('/show','TScontroller@show');
Route::get('/show/status','TScontroller@showstatus');
Route::get('/finish',function () {
    return view('finish');
});
Route::get('/showtatusG','TScontroller@index02');
Route::post('/update_order','TScontroller@updateorder');
Route::get('/Calculater',function () {
    return view('cal');
});
Route::get('/edit',function () {
    return view('edit');
});
route::get('/test',function () {
    return view('testt');
});
route::get('/purchase',function () {
    return view('order');
});
route::get('/tt',function () {
    echo 'happy';
});
route::get('/dashboard',function () {
    echo 'eieie';
});
