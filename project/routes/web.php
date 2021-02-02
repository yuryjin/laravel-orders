<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MainController;

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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/users', 'App\Http\Controllers\MainController@users')->name('users');

Route::get('/orders', 'App\Http\Controllers\MainController@orders')->name('orders');

Route::get('/createuser', 'App\Http\Controllers\MainController@createuser')->name('createuser');

Route::get('/createorder', 'App\Http\Controllers\MainController@createorder')->name('createorder');

Route::post('/createorder/creation', 'App\Http\Controllers\MainController@createorder_creation');

Route::post('/createuser/creation', 'App\Http\Controllers\MainController@createuser_creation');

Route::get('/delete/{id}', 'App\Http\Controllers\MainController@delete');

Route::get('/deleteorder/{id}', 'App\Http\Controllers\MainController@deleteorder');

//Route::post('/deleteUser', 'App\Http\Controllers\MainController@deleteUser');

//Route::delete('user/{id}', array('as' => 'user.deleteUser','uses' => 'MainController@deleteUser'));

//Route::post('/delete', 'App\Http\Controllers\MainController@delete');

/*
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: '. $id.'. Name: '. $name;
});
*/
