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

Route::get('/adminreg', 'AdminController@index'); 
Route::post('/adminreg', 'AdminController@verify'); 

Route::get('/memberreg', 'MemberController@index'); 
Route::post('/Memberreg', 'MemberController@verify'); 

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'LogoutController@index');
   

