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

use App\User;


Route::get('/', function () {return view('home');}
);
Route::get('/home', function () {return view('home');
});
Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout');
Route::post('/edit', 'UserController@edit');
Route::post('/edit/{edit}','UserController@update');

Route::get('/edit/{edit}', function($id) { return view('update', ['user' => User::find($id)]); });


Route::post('/user/updateexecute', 'UserController@updateexecute');

Route::get('/auth/reset', function () {return view('auth.reset');}
);

Auth::routes();

?>