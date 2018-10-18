<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('layouts.Home');
});
Route::get('/chuc-vu', 'chucvuController@index');
Route::post('/tao-moi-chuc-vu','chucvuController@insert');
Route::post('/sua-chuc-vu','chucvuController@update');
Route::post('/xoa-chuc-vu','chucvuController@delete');

Route::get('/trinh-do', 'trinhdoController@index');
Route::post('/tao-moi-trinh-do','trinhdoController@insert');
Route::post('/sua-trinh-do','trinhdoController@update');
Route::post('/xoa-trinh-do','trinhdoController@delete');

Route::get('/bo-phan', 'bophanController@index');
Route::post('/tao-moi-bo-phan','bophanController@insert');
Route::post('/sua-bo-phan','bophanController@update');
Route::post('/xoa-bo-phan','bophanController@delete');

Route::get('/tao-moi-nhan-vien','nhanvienController@create');
Route::post('/tao-moi-nhan-vien','nhanvienController@store');
Route::get('/danh-sach-nhan-vien','nhanvienController@index');
Route::get('/thong-tin-chi-tiet','nhanvienController@show');
