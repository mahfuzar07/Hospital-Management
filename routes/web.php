<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');

Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('logout', 'AdminController@Logout')->name('admin.logout');
    Route::get('alluser', 'AdminController@alluser')->name('admin.alluser');
    Route::get('department', 'DepartmentController@add')->name('add.department');
    Route::get('doctor', 'DoctorController@add')->name('add.doctor');
});


Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
    Route::get('logout', 'UserController@Logout')->name('user.logout');
});
//web page route


