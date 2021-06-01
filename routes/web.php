<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('logout', 'AdminController@Logout')->name('admin.logout');
    Route::get('alluser', 'AdminController@alluser')->name('admin.alluser');
});


Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
});


