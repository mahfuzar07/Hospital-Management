<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');
//Admin route
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('logout', 'AdminController@Logout')->name('admin.logout');
    Route::get('alluser', 'AdminController@alluser')->name('admin.alluser');
    Route::get('user/delete/{user_id}', 'AdminController@deleteu');

    Route::get('department', 'DepartmentController@add')->name('add.department');
    Route::post('store-department', 'DepartmentController@storedep')->name('store.department');
    Route::get('department/edit/{dep_id}', 'DepartmentController@edit');
    Route::post('department-update', 'DepartmentController@updatedep')->name('update.department');
    Route::get('department/delete/{dep_id}', 'DepartmentController@delete');
    Route::get('department/inactive/{dep_id}', 'DepartmentController@inactive');
    Route::get('department/active/{dep_id}', 'DepartmentController@active');

    Route::get('doctor', 'DoctorController@add')->name('add.doctor');
    Route::post('doctor-register','DoctorController@doctorReg')->name('doctor.reg');
    Route::get('doctor/edit/{doc_id}', 'DoctorController@edit');
    Route::get('doctor/show/{doc_id}', 'DoctorController@show');
    Route::post('doctor/update', 'DoctorController@updatedoc')->name('update.doctor');
    Route::get('doctor/delete/{doc_id}', 'DoctorController@delete');
    // Route::get('department/inactive/{dep_id}', 'DepartmentController@inactive');
    // Route::get('department/active/{dep_id}', 'DepartmentController@active');

});
//Doctor route
Route::get('doctor/login','Doctor\LoginController@loginFrom')->name('doctorfrom.login');
Route::post('doctor/login','Doctor\LoginController@doctorLogin')->name('doctor.login');
Route::get('doctor/logout','Doctor\doctorpController@Logout')->name('doctor.logout');
Route::get('doctor/dashboard','Doctor\doctorpController@index')->name('doctor.dashboard');
    // Route::get('logout', 'UserController@Logout')->name('user.logout');






//User  route
Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
    Route::get('logout', 'UserController@Logout')->name('user.logout');
});
//web page route




