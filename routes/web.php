<?php
//customer
Route::get('/customer/show/{id}',['as'=>'customer.show','uses'=>'CustomerController@show']);
Route::post('/customer/store',['as'=>'customer.store','uses'=>'CustomerController@store']);
Route::get('/customer/create',['as'=>'customer.create','uses'=>'CustomerController@create']);
Route::get('/customer/index',['as'=>'customer.index','uses'=>'CustomerController@index']);

