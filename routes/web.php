<?php

Route::get('/customer/show/{id}',['as'=>'customer.show','uses'=>'CustomerController@show']);
Route::post('/customer/store',['as'=>'customer.store','uses'=>'CustomerController@store']);
Route::get('/add',['as'=>'customer.create','uses'=>'CustomerController@create']);