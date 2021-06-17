<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('user', 'UserController');
Route::apiResource('conta','ContaController');
Route::apiResource('person','PersonController');
Route::apiResource('company','CompanyController');
Route::apiResource('transaction','TransactionController');
Route::get('user-detalhe/{id}','UserController@userDetalhado');
Route::get('user-busca/{busca}','UserController@userBusca');
Route::get('accounts/{id}', 'ContaController@accounts');
