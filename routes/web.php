<?php

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

Route::get('/', 'AdvertController@index');
Auth::routes();
Route::get('advertmore={id}', 'AdvertMoreController')->name('advertmore');

Route::get('/home', 'HomeController@index')->name('home');
//Пользовательская часть
Route::resource('/myadverts', 'MyAdvertController');
//Админчасть
$groupData = [
	'namespace' => 'Admin',
	'prefix' => 'admin',
];
Route::group($groupData, function(){
	$methods = ['index','edit','update','create','store'];
	Route::resource('categories', 'CategoryController')
	->only($methods)
	->names('admin.categories');
	Route::resource('users', 'UserController')
	->only($methods)
	->names('admin.users');
	Route::get('/','AdminController@index');
});