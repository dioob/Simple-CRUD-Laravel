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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/companyform', function(){
    return view('companyform');
});*/

Route::get('/loginadmin', function(){
    return view('login');
});

Route::post('/loginadmin', 'loginController@login');

Route::resource('companyform', 'companyController');

Route::get('companyform/delete/{id}', ['as' => 'perusahaan-delete', 'uses' => 'companyController@delete']);
Route::get('companyform/edit/{id}', ['as' => 'perusahaan-edit', 'uses' => 'companyController@edit']);