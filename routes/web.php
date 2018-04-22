<?php
//customer
Route::get('/customer/show/{id}',['as'=>'customer.show','uses'=>'CustomerController@show']);
Route::post('/customer/store',['as'=>'customer.store','uses'=>'CustomerController@store']);
Route::get('/customer/create',['as'=>'customer.create','uses'=>'CustomerController@create']);
Route::get('/customer/index',['as'=>'customer.index','uses'=>'CustomerController@index']);

Route::get('/home', ['uses' => 'CustomerController@index']);

Route::get('/', ['uses' => 'CustomerController@index']);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


