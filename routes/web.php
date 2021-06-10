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
    return view('home');
})->name('/');

//get list courses



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//admin

Route::get('create-user', 'UserController@createUser')->name('create-user')->middleware('is.admin');
Route::post('create-user','UserController@storeUser')->name('store-user')->middleware('is.admin');
//list trainer and staff
Route::get('list-user','Usercontroller@listUser')->name('list-user')->middleware('is.admin');
Route::get('edit-user/{id}', 'UserController@editUser')->name('edit-user')->middleware('is.admin');
Route::put('update-user/{id}', 'UserController@updateUser')->name('user.update')->middleware('is.admin');
Route::delete('delete-user/{id}', 'UserController@deleteUser')->name('delete-user')->middleware('is.admin');
//end admin

//staff
